<?php

namespace CyberSource\Test\Authentication\Util;

use PHPUnit\Framework\TestCase;
use CyberSource\Authentication\Util\GlobalParameter;

/**
 * Tests for the GlobalParameter constants introduced for JWT key-type support.
 */
class GlobalParameterTest extends TestCase
{
    public function testJwtKeyTypeP12Constant(): void
    {
        $this->assertSame('P12', GlobalParameter::JWT_KEY_TYPE_P12);
    }

    public function testJwtKeyTypeSharedSecretConstant(): void
    {
        $this->assertSame('SHARED_SECRET', GlobalParameter::JWT_KEY_TYPE_SHARED_SECRET);
    }

    public function testHS256Constant(): void
    {
        $this->assertSame('HS256', GlobalParameter::HS256);
    }

    public function testRS256Constant(): void
    {
        $this->assertSame('RS256', GlobalParameter::RS256);
    }

    public function testInvalidJwtKeyTypeMessageContainsExpectedValues(): void
    {
        $this->assertStringContainsString('P12', GlobalParameter::INVALID_JWT_KEY_TYPE);
        $this->assertStringContainsString('SHARED_SECRET', GlobalParameter::INVALID_JWT_KEY_TYPE);
    }

    public function testEmptyPrivateOrPublicKeyErrorConstantExists(): void
    {
        $this->assertNotEmpty(GlobalParameter::EMPTY_PRIVATE_OR_PUBLIC_KEY_ERROR);
    }

    public function testMerchantKeyIdReqConstantExists(): void
    {
        $this->assertNotEmpty(GlobalParameter::MERCHANT_KEY_ID_REQ);
    }

    public function testMerchantSecretKeyReqConstantExists(): void
    {
        $this->assertNotEmpty(GlobalParameter::MERCHANT_SECRET_KEY_REQ);
    }
}
