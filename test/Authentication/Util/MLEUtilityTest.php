<?php

namespace CyberSource\Test\Authentication\Util;

use PHPUnit\Framework\TestCase;
use CyberSource\Authentication\Util\MLEUtility;
use CyberSource\Authentication\Util\MLEException;
use CyberSource\Authentication\Core\MerchantConfiguration;
use CyberSource\Authentication\Util\GlobalParameter;

/**
 * Tests for MLEUtility — focused on changes related to shared-secret JWT support
 * and the new error path when MLE cert is not available.
 */
class MLEUtilityTest extends TestCase
{
    // -----------------------------------------------------------------------
    // checkIsMLEForAPI
    // -----------------------------------------------------------------------

    public function testCheckIsMLEForAPIReturnsTrueWhenOptionalAndGloballyEnabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setEnableRequestMLEForOptionalApisGlobally(true);

        $result = MLEUtility::checkIsMLEForAPI($config, 'optional', 'someOperation');
        $this->assertTrue($result);
    }

    public function testCheckIsMLEForAPIReturnsFalseWhenOptionalAndGloballyDisabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setEnableRequestMLEForOptionalApisGlobally(false);

        $result = MLEUtility::checkIsMLEForAPI($config, 'optional', 'someOperation');
        $this->assertFalse($result);
    }

    public function testCheckIsMLEForAPIReturnsTrueWhenMandatory(): void
    {
        $config = new MerchantConfiguration();
        $config->setDisableRequestMLEForMandatoryApisGlobally(false);

        $result = MLEUtility::checkIsMLEForAPI($config, 'mandatory', 'someOperation');
        $this->assertTrue($result);
    }

    public function testCheckIsMLEForAPIReturnsFalseWhenMandatoryButDisabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setDisableRequestMLEForMandatoryApisGlobally(true);

        $result = MLEUtility::checkIsMLEForAPI($config, 'mandatory', 'someOperation');
        $this->assertFalse($result);
    }

    // -----------------------------------------------------------------------
    // checkIsResponseMLEForAPI
    // -----------------------------------------------------------------------

    public function testCheckIsResponseMLEForAPIReturnsFalseByDefault(): void
    {
        $config = new MerchantConfiguration();
        $result = MLEUtility::checkIsResponseMLEForAPI($config, 'someOperation');
        $this->assertFalse($result);
    }

    public function testCheckIsResponseMLEForAPIReturnsTrueWhenGloballyEnabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setEnableResponseMleGlobally(true);

        $result = MLEUtility::checkIsResponseMLEForAPI($config, 'someOperation');
        $this->assertTrue($result);
    }

    // -----------------------------------------------------------------------
    // encryptRequestPayload — no cert available for JWT SHARED_SECRET
    // -----------------------------------------------------------------------

    public function testEncryptRequestPayloadReturnsBodyUnchangedWhenEmpty(): void
    {
        $config = new MerchantConfiguration();
        $result = MLEUtility::encryptRequestPayload($config, '');
        $this->assertSame('', $result);
    }

    public function testEncryptRequestPayloadReturnsNullWhenNull(): void
    {
        $config = new MerchantConfiguration();
        $result = MLEUtility::encryptRequestPayload($config, null);
        $this->assertNull($result);
    }

    public function testEncryptRequestPayloadThrowsWhenNoCertForJwtSharedSecret(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('JWT');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        $config->setJwtKeyType('SHARED_SECRET');
        $config->setApiKeyID('key_id');
        $config->setSecretKey(base64_encode('secret'));
        // No mleForRequestPublicCertPath provided — should fail

        $this->expectException(MLEException::class);
        $this->expectExceptionMessage('No certificate found for MLE Request');
        MLEUtility::encryptRequestPayload($config, '{"amount":"100"}');
    }

    public function testEncryptRequestPayloadFallsBackForHttpSignature(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('HTTP_SIGNATURE');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        // No cert path — HTTP_SIGNATURE falls back to non-encrypted

        $body = '{"amount":"100"}';
        $result = MLEUtility::encryptRequestPayload($config, $body);
        $this->assertSame($body, $result);
    }

    // -----------------------------------------------------------------------
    // checkIsMleEncryptedResponse
    // -----------------------------------------------------------------------

    public function testCheckIsMleEncryptedResponseReturnsTrueForValidFormat(): void
    {
        $body = json_encode(['encryptedResponse' => 'eyJhbGciOiJSU0EtT0FFUC0yNTYiLCJlbmMiOiJBMjU2R0NNIn0.abc.def.ghi.jkl']);
        $this->assertTrue(MLEUtility::checkIsMleEncryptedResponse($body));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForNonJson(): void
    {
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse('not json'));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForNull(): void
    {
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse(null));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForEmptyString(): void
    {
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse(''));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForMultipleKeys(): void
    {
        $body = json_encode(['encryptedResponse' => 'token', 'extra' => 'data']);
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse($body));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForWrongKey(): void
    {
        $body = json_encode(['encryptedRequest' => 'token']);
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse($body));
    }
}
