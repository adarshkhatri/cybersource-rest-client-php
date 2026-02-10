# CyberSource\TokenApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCardArtAsset**](TokenApi.md#getCardArtAsset) | **GET** /tms/v2/tokens/{instrumentIdentifierId}/{tokenProvider}/assets/{assetType} | Retrieve Card Art
[**postTokenPaymentCredentials**](TokenApi.md#postTokenPaymentCredentials) | **POST** /tms/v2/tokens/{tokenId}/payment-credentials | Generate Payment Credentials v2
[**postTokenPaymentCredentialsV3**](TokenApi.md#postTokenPaymentCredentialsV3) | **POST** /tms/v3/tokens/{tokenId}/payment-credentials | Generate Payment Credentials Latest Version v3


# **getCardArtAsset**
> \CyberSource\Model\InlineResponse2002 getCardArtAsset($instrumentIdentifierId, $tokenProvider, $assetType)

Retrieve Card Art

Retrieves Card Art for a specific Instrument Identifier. The Card Art is a visual representation of the cardholder's payment card. Card Art is only available if a Network Token is successfully provisioned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenApi();
$instrumentIdentifierId = "instrumentIdentifierId_example"; // string | The Id of an Instrument Identifier.
$tokenProvider = "tokenProvider_example"; // string | The token provider.
$assetType = "assetType_example"; // string | The type of asset.

try {
    $result = $api_instance->getCardArtAsset($instrumentIdentifierId, $tokenProvider, $assetType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->getCardArtAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrumentIdentifierId** | **string**| The Id of an Instrument Identifier. |
 **tokenProvider** | **string**| The token provider. |
 **assetType** | **string**| The type of asset. |

### Return type

[**\CyberSource\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenPaymentCredentials**
> string postTokenPaymentCredentials($tokenId, $postPaymentCredentialsRequest, $profileId)

Generate Payment Credentials v2

**Note**: This resource will be replace by [payment credentials version 3](#/paths/~1tms~1v3~1tokens~1{tokenId}~1payment-credentials/post). The SDK will remain available for now; however, it will no longer be documented or maintain in the Developer Centre.<br> **Token**<br>A Token can represent your tokenized Customer, Payment Instrument, Instrument Identifier or Tokenized Card information.<br> **Payment Credentials**<br>Contains payment information such as the network token, generated cryptogram for Visa & MasterCard or dynamic CVV for Amex in a JSON Web Encryption (JWE) response.<br>Your system can use this API to retrieve the Payment Credentials for an existing Customer, Payment Instrument, Instrument Identifier or Tokenized Card.<br>Optionally, **authenticated identities** information from Passkey authentication can be provided to potentially achieve liability shift, which may result in the return of an e-commerce indicator of 5 if successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenApi();
$tokenId = "tokenId_example"; // string | The Id of a token representing a Customer, Payment Instrument or Instrument Identifier.
$postPaymentCredentialsRequest = new \CyberSource\Model\PostPaymentCredentialsRequest1(); // \CyberSource\Model\PostPaymentCredentialsRequest1 | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postTokenPaymentCredentials($tokenId, $postPaymentCredentialsRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->postTokenPaymentCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenId** | **string**| The Id of a token representing a Customer, Payment Instrument or Instrument Identifier. |
 **postPaymentCredentialsRequest** | [**\CyberSource\Model\PostPaymentCredentialsRequest1**](../Model/PostPaymentCredentialsRequest1.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jose;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenPaymentCredentialsV3**
> \CyberSource\Model\InlineResponse2011 postTokenPaymentCredentialsV3($tokenId, $postPaymentCredentialsRequest, $profileId)

Generate Payment Credentials Latest Version v3

**Payment Credentials**<br>Contains payment information such as the network token, generated TAVV cryptogram for Visa & MasterCard, dynamic CVV for Amex, or DTVV cryptogram for VISA. This latest version (v3) returns the Primary Account Number details, if the network token is not present. The response is provided in JSON Web Encryption (JWE) format. <br>Your system can use this API to retrieve the Payment Credentials for an existing Customer, Payment Instrument, Instrument Identifier or Tokenized Card.<br>Optionally, **authenticated identities** information from Passkey authentication can be provided to potentially achieve liability shift, which may result in the return of an e-commerce indicator of 5 if successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenApi();
$tokenId = "tokenId_example"; // string | The Id of a token representing a Customer, Payment Instrument or Instrument Identifier.
$postPaymentCredentialsRequest = new \CyberSource\Model\PostPaymentCredentialsRequest(); // \CyberSource\Model\PostPaymentCredentialsRequest | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postTokenPaymentCredentialsV3($tokenId, $postPaymentCredentialsRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->postTokenPaymentCredentialsV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenId** | **string**| The Id of a token representing a Customer, Payment Instrument or Instrument Identifier. |
 **postPaymentCredentialsRequest** | [**\CyberSource\Model\PostPaymentCredentialsRequest**](../Model/PostPaymentCredentialsRequest.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jose;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

