<?php

namespace CyberSource\Test\Authentication\Util;

use PHPUnit\Framework\TestCase;
use CyberSource\Authentication\Util\Cache;
use CyberSource\Authentication\Core\MerchantConfiguration;
use CyberSource\Authentication\Util\GlobalParameter;

/**
 * Tests for Cache — focused on the shared-secret JWT changes:
 * - getRequestMLECertFromCache returns null when JWT + SHARED_SECRET and no cert path
 */
class CacheTest extends TestCase
{
    private Cache $cache;

    protected function setUp(): void
    {
        $this->cache = new Cache();
    }

    // -----------------------------------------------------------------------
    // getRequestMLECertFromCache with SHARED_SECRET
    // -----------------------------------------------------------------------

    public function testGetRequestMLECertReturnsNullForSharedSecretWithoutCertPath(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('JWT');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        $config->setJwtKeyType('SHARED_SECRET');
        $config->setApiKeyID('key_id');
        $config->setSecretKey(base64_encode('secret'));
        // No mleForRequestPublicCertPath set

        $result = $this->cache->getRequestMLECertFromCache($config);
        $this->assertNull($result);
    }

    public function testGetRequestMLECertReturnsNullForHttpSignatureWithoutCertPath(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('HTTP_SIGNATURE');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        // No cert path

        $result = $this->cache->getRequestMLECertFromCache($config);
        $this->assertNull($result);
    }

    // -----------------------------------------------------------------------
    // Public key cache (static helpers)
    // -----------------------------------------------------------------------

    public function testAddAndGetPublicKeyFromCache(): void
    {
        $runEnv = 'apitest.cybersource.com';
        $keyId = 'test_key_123';
        $publicKey = 'MIIBIjANBgkqhk...';

        Cache::addPublicKeyToCache($runEnv, $keyId, $publicKey);
        $result = Cache::getPublicKeyFromCache($runEnv, $keyId);

        $this->assertSame($publicKey, $result);
    }

    public function testGetPublicKeyFromCacheThrowsWhenNotFound(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Public key not found in cache');
        Cache::getPublicKeyFromCache('unknown.env.com', 'non_existent_key');
    }
}
