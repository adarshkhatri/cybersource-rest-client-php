<?php

namespace CyberSource\Test\Authentication\Core;

use PHPUnit\Framework\TestCase;
use CyberSource\Authentication\Core\MerchantConfiguration;
use CyberSource\Authentication\Core\AuthException;
use CyberSource\Authentication\Util\GlobalParameter;

/**
 * Tests for MerchantConfiguration — focused on jwtKeyType feature
 * and the validation changes introduced with shared-secret JWT support.
 */
class MerchantConfigurationTest extends TestCase
{
    private MerchantConfiguration $config;

    protected function setUp(): void
    {
        $this->config = new MerchantConfiguration();
    }

    // -----------------------------------------------------------------------
    // jwtKeyType getter / setter
    // -----------------------------------------------------------------------

    public function testDefaultJwtKeyTypeIsP12(): void
    {
        $this->assertSame(GlobalParameter::JWT_KEY_TYPE_P12, $this->config->getJwtKeyType());
    }

    public function testSetJwtKeyTypeReturnsFluentInterface(): void
    {
        $result = $this->config->setJwtKeyType('SHARED_SECRET');
        $this->assertSame($this->config, $result);
    }

    public function testSetAndGetJwtKeyType(): void
    {
        $this->config->setJwtKeyType('SHARED_SECRET');
        $this->assertSame('SHARED_SECRET', $this->config->getJwtKeyType());
    }

    public function testSetJwtKeyTypeTrimsWhitespace(): void
    {
        $this->config->setJwtKeyType('  P12  ');
        $this->assertSame('P12', $this->config->getJwtKeyType());
    }

    // -----------------------------------------------------------------------
    // isSharedSecretKeyType()
    // -----------------------------------------------------------------------

    public function testIsSharedSecretKeyTypeReturnsFalseByDefault(): void
    {
        $this->assertFalse($this->config->isSharedSecretKeyType());
    }

    public function testIsSharedSecretKeyTypeReturnsTrueWhenSet(): void
    {
        $this->config->setJwtKeyType('SHARED_SECRET');
        $this->assertTrue($this->config->isSharedSecretKeyType());
    }

    public function testIsSharedSecretKeyTypeIsCaseInsensitive(): void
    {
        $this->config->setJwtKeyType('shared_secret');
        $this->assertTrue($this->config->isSharedSecretKeyType());

        $this->config->setJwtKeyType('Shared_Secret');
        $this->assertTrue($this->config->isSharedSecretKeyType());
    }

    public function testIsSharedSecretKeyTypeReturnsFalseForP12(): void
    {
        $this->config->setJwtKeyType('P12');
        $this->assertFalse($this->config->isSharedSecretKeyType());
    }

    // -----------------------------------------------------------------------
    // validateMerchantData — JWT key type validation
    // -----------------------------------------------------------------------

    /**
     * Helper to build a MerchantConfiguration with the minimum fields for JWT validation.
     */
    private function buildJwtConfig(string $jwtKeyType = 'P12'): MerchantConfiguration
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('JWT');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        $config->setJwtKeyType($jwtKeyType);
        return $config;
    }

    public function testValidateThrowsOnInvalidJwtKeyType(): void
    {
        $config = $this->buildJwtConfig('INVALID');
        $this->expectException(AuthException::class);
        $this->expectExceptionMessage(GlobalParameter::INVALID_JWT_KEY_TYPE);
        $config->validateMerchantData();
    }

    public function testValidateJwtSharedSecretRequiresApiKeyID(): void
    {
        $config = $this->buildJwtConfig('SHARED_SECRET');
        // Provide secretKey but NOT apiKeyID
        $config->setSecretKey(base64_encode('test_secret_key_value'));

        $this->expectException(AuthException::class);
        $this->expectExceptionMessage(GlobalParameter::MERCHANT_KEY_ID_REQ);
        $config->validateMerchantData();
    }

    public function testValidateJwtSharedSecretRequiresSecretKey(): void
    {
        $config = $this->buildJwtConfig('SHARED_SECRET');
        // Provide apiKeyID but NOT secretKey
        $config->setApiKeyID('test_key_id');

        $this->expectException(AuthException::class);
        $this->expectExceptionMessage(GlobalParameter::MERCHANT_SECRET_KEY_REQ);
        $config->validateMerchantData();
    }

    public function testValidateJwtSharedSecretPassesWithBothKeys(): void
    {
        $config = $this->buildJwtConfig('SHARED_SECRET');
        $config->setApiKeyID('test_key_id');
        $config->setSecretKey(base64_encode('test_secret_key_value'));

        // Should NOT throw — just ensure no exception
        $config->validateMerchantData();
        $this->assertTrue(true);
    }

    public function testValidateJwtP12RequiresKeyPassword(): void
    {
        $config = $this->buildJwtConfig('P12');
        // P12 requires keyPassword — leave it empty
        $this->expectException(AuthException::class);
        $this->expectExceptionMessage(GlobalParameter::KEY_PASSWORD_EMPTY);
        $config->validateMerchantData();
    }

    public function testValidateJwtSharedSecretDoesNotRequireP12Fields(): void
    {
        $config = $this->buildJwtConfig('SHARED_SECRET');
        $config->setApiKeyID('test_key_id');
        $config->setSecretKey(base64_encode('secret'));
        // Do NOT set keyPassword, keysDirectory, keyAlias — these are P12-only

        // Should pass without error
        $config->validateMerchantData();
        $this->assertTrue(true);
    }

    // -----------------------------------------------------------------------
    // setJwtKeyType integration — verify it integrates correctly with
    // the MerchantConfiguration object as a whole
    //
    // NOTE: setMerchantCredentials() has a pre-existing bug where several
    // setters (setAuthenticationType, setMerchantID, etc.) return void
    // instead of $this, breaking the fluent chain. Those tests are
    // intentionally omitted until that method is fixed.
    // -----------------------------------------------------------------------

    public function testJwtKeyTypeIntegrationWithFullConfig(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('JWT');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        $config->setJwtKeyType('SHARED_SECRET');
        $config->setApiKeyID('key_id');
        $config->setSecretKey(base64_encode('secret'));

        $this->assertSame('SHARED_SECRET', $config->getJwtKeyType());
        $this->assertTrue($config->isSharedSecretKeyType());
    }

    public function testJwtKeyTypeDefaultsToP12InNewConfig(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('JWT');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        // jwtKeyType not explicitly set

        $this->assertSame(GlobalParameter::JWT_KEY_TYPE_P12, $config->getJwtKeyType());
        $this->assertFalse($config->isSharedSecretKeyType());
    }

    public function testSetJwtKeyTypeUppercasesAndTrims(): void
    {
        $config = new MerchantConfiguration();
        $config->setJwtKeyType('  shared_secret  ');
        // setJwtKeyType trims and uppercases for canonical form
        $this->assertSame('SHARED_SECRET', $config->getJwtKeyType());
        $this->assertTrue($config->isSharedSecretKeyType());
    }
}
