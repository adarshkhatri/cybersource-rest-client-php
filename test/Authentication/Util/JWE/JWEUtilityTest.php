<?php

namespace CyberSource\Test\Authentication\Util\JWE;

use PHPUnit\Framework\TestCase;
use CyberSource\Authentication\Util\JWE\JWEUtility;
use CyberSource\Authentication\Util\Cache;
use CyberSource\Authentication\Core\MerchantConfiguration;
use SimpleJWT\JWE;
use SimpleJWT\Keys\RSAKey;
use SimpleJWT\Keys\KeySet;

/**
 * Tests for JWEUtility response decryption after the web-token -> simplejwt migration.
 *
 * Focus areas:
 *  - 'kid' resolution: SimpleJWT selects the recipient key by matching the JWE
 *    'kid' header, so a private key supplied without an embedded kid must be
 *    tagged from the token before decryption can succeed.
 *  - PKCS#8 -> PKCS#1 normalisation: CyberSource P12 extraction yields PKCS#8
 *    keys, which SimpleJWT cannot read directly.
 */
class JWEUtilityTest extends TestCase
{
    private function opensslConfigPath(): string
    {
        static $path = null;
        if ($path === null) {
            $path = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'jwe_test_openssl.cnf';
            file_put_contents($path, "[req]\ndistinguished_name = dn\n[dn]\n");
        }
        return $path;
    }

    /**
     * Generates an RSA key pair, returning the X.509 public key PEM and the
     * PKCS#8 private key PEM (the format produced by openssl_pkcs12_read).
     */
    private function makeKeyPair(?string &$publicKeyPem, ?string &$privateKeyPem): void
    {
        $configArgs = [
            'config'           => $this->opensslConfigPath(),
            'private_key_bits' => 2048,
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
        ];
        $pkey = openssl_pkey_new($configArgs);
        $this->assertNotFalse($pkey, 'RSA key generation failed: ' . openssl_error_string());
        openssl_pkey_export($pkey, $privateKeyPem, null, $configArgs);
        $details = openssl_pkey_get_details($pkey);
        $publicKeyPem = $details['key'];
    }

    /** Builds a JWE compact token encrypted to $publicKeyPem with the given kid/alg. */
    private function makeToken(string $publicKeyPem, string $payload, string $kid, string $alg = 'RSA-OAEP-256'): string
    {
        $pub = new RSAKey($publicKeyPem, 'pem');
        $pub->setKeyId($kid);
        $set = new KeySet();
        $set->add($pub);
        $jwe = new JWE(['alg' => $alg, 'enc' => 'A256GCM', 'kid' => $kid], $payload);
        return $jwe->encrypt($set, $kid);
    }

    private function base64url(string $data): string
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function testDecryptResolvesKeyFromTokenKidWithPkcs8Key(): void
    {
        $this->makeKeyPair($pub, $priv);
        $payload = '{"status":"AUTHORIZED","id":"12345"}';
        $token   = $this->makeToken($pub, $payload, 'response-kid-001');

        // $priv is PKCS#8 (BEGIN PRIVATE KEY) with NO embedded kid — exactly the
        // CyberSource P12 case. Decryption must resolve the key via the token's
        // kid and normalise the key to PKCS#1.
        $result = JWEUtility::decryptJWEUsingPrivateKey($priv, $token);
        $this->assertSame($payload, $result);
    }

    public function testDecryptWorksWithPkcs1Key(): void
    {
        $this->makeKeyPair($pub, $privPkcs8);
        $privPkcs1 = \phpseclib3\Crypt\PublicKeyLoader::load($privPkcs8)->toString('PKCS1');
        $payload   = '{"ok":true}';
        $token     = $this->makeToken($pub, $payload, 'kid-xyz');

        $result = JWEUtility::decryptJWEUsingPrivateKey($privPkcs1, $token);
        $this->assertSame($payload, $result);
    }

    public function testDecryptAcceptsRsaOaep(): void
    {
        $this->makeKeyPair($pub, $priv);
        $payload = '{"alg":"oaep"}';
        $token   = $this->makeToken($pub, $payload, 'kid-oaep', 'RSA-OAEP');

        $result = JWEUtility::decryptJWEUsingPrivateKey($priv, $token);
        $this->assertSame($payload, $result);
    }

    public function testDecryptReturnsNullForUnsupportedAlg(): void
    {
        $this->makeKeyPair($pub, $priv);
        // Craft a token whose header alg is not permitted for MLE; decryption
        // must reject it before performing any cryptographic work.
        $header = $this->base64url(json_encode(['alg' => 'dir', 'enc' => 'A256GCM']));
        $token  = $header . '.a.b.c.d';

        $this->assertNull(JWEUtility::decryptJWEUsingPrivateKey($priv, $token));
    }

    public function testDecryptReturnsNullWithWrongPrivateKey(): void
    {
        $this->makeKeyPair($pub1, $priv1);
        $this->makeKeyPair($pub2, $priv2);

        // Encrypt to keypair #1 but attempt to decrypt with keypair #2's private key.
        // The key is tagged with the token's kid and therefore selected, but RSA
        // unwrap fails, so the result must be null (not an exception).
        $token = $this->makeToken($pub1, '{"x":1}', 'kid-1');
        $this->assertNull(JWEUtility::decryptJWEUsingPrivateKey($priv2, $token));
    }

    public function testDecryptReturnsNullForTamperedCiphertext(): void
    {
        $this->makeKeyPair($pub, $priv);
        $token = $this->makeToken($pub, '{"x":1}', 'kid-1');

        $parts = explode('.', $token);
        $parts[3] = $this->base64url('tampered-ciphertext');
        $tampered = implode('.', $parts);

        $this->assertNull(JWEUtility::decryptJWEUsingPrivateKey($priv, $tampered));
    }

    public function testDecryptRoundTripWithDifferentKids(): void
    {
        $this->makeKeyPair($pubA, $privA);
        $this->makeKeyPair($pubB, $privB);

        $tokenA = $this->makeToken($pubA, '{"acct":"A"}', 'kid-A');
        $tokenB = $this->makeToken($pubB, '{"acct":"B"}', 'kid-B');

        $this->assertSame('{"acct":"A"}', JWEUtility::decryptJWEUsingPrivateKey($privA, $tokenA));
        $this->assertSame('{"acct":"B"}', JWEUtility::decryptJWEUsingPrivateKey($privB, $tokenB));
    }

    public function testCreateRSAKeyFromPemReturnsJwkObject(): void
    {
        $this->makeKeyPair($pub, $privPkcs8);
        $key = JWEUtility::createRSAKeyFromPem($privPkcs8);
        $this->assertInstanceOf(RSAKey::class, $key);
    }

    public function testGrabKeyFromPemCachesJwkObjectNotRawPem(): void
    {
        $this->makeKeyPair($pub, $privPkcs8);
        $pemFile = tempnam(sys_get_temp_dir(), 'jwe_pem_') . '.pem';
        file_put_contents($pemFile, $privPkcs8);

        try {
            $cache  = new Cache();
            $cached = $cache->grabKeyFromPEM($pemFile);

            // Security: the cache must hold a key object (JWK), never the raw PEM string.
            $this->assertInstanceOf(RSAKey::class, $cached);
            $this->assertIsNotString($cached);
        } finally {
            @unlink($pemFile);
        }
    }

    public function testDecryptJWEUsingPEMRoundTripsThroughCachedJwk(): void
    {
        $this->makeKeyPair($pub, $privPkcs8);
        $payload = '{"resp":"pem-flow"}';
        $token   = $this->makeToken($pub, $payload, 'pem-kid-1');

        $pemFile = tempnam(sys_get_temp_dir(), 'jwe_pem_') . '.pem';
        file_put_contents($pemFile, $privPkcs8);

        $config = new MerchantConfiguration();
        $config->setJwePEMFileDirectory($pemFile);

        // decryptJWEUsingPEM is deprecated; swallow the deprecation notice.
        set_error_handler(static function () { return true; }, E_USER_DEPRECATED);
        try {
            $result = JWEUtility::decryptJWEUsingPEM($config, $token);
        } finally {
            restore_error_handler();
            @unlink($pemFile);
        }

        $this->assertSame($payload, $result);
    }
}
