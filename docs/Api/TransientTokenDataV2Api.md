# CyberSource\TransientTokenDataV2Api

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentCredentialsForTransientToken**](TransientTokenDataV2Api.md#getPaymentCredentialsForTransientToken) | **GET** /flex/v2/payment-credentials/{paymentCredentialsReference} | Get Payment Credentials
[**getTransactionForTransientToken**](TransientTokenDataV2Api.md#getTransactionForTransientToken) | **GET** /up/v1/payment-details/{transientToken} | Get Transient Token Data
[**getTransactionForTransientTokenJTI**](TransientTokenDataV2Api.md#getTransactionForTransientTokenJTI) | **GET** /flex/v2/payment-details/{jti} | Get Transient Token Data v2


# **getPaymentCredentialsForTransientToken**
> string getPaymentCredentialsForTransientToken($paymentCredentialsReference)

Get Payment Credentials

Retrieve the Payment data captured by Unified Checkout. This API is used to retrieve the detailed data represented by the Transient Token. This API will return PCI payment data captured by the Unified Checkout platform.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransientTokenDataV2Api();
$paymentCredentialsReference = "paymentCredentialsReference_example"; // string | The paymentCredentialsReference field contained within the Transient token returned from a successful Unified Checkout transaction.

try {
    $result = $api_instance->getPaymentCredentialsForTransientToken($paymentCredentialsReference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransientTokenDataV2Api->getPaymentCredentialsForTransientToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentCredentialsReference** | **string**| The paymentCredentialsReference field contained within the Transient token returned from a successful Unified Checkout transaction. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jwt

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionForTransientToken**
> getTransactionForTransientToken($transientToken)

Get Transient Token Data

Retrieve the data captured by Unified Checkout. This API is used to retrieve the detailed data represented by the Transient Token. This API will not return PCI payment data (PAN). Include the Request ID in the GET request to retrieve the transaction details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransientTokenDataV2Api();
$transientToken = "transientToken_example"; // string | Transient Token returned by the Unified Checkout application.

try {
    $api_instance->getTransactionForTransientToken($transientToken);
} catch (Exception $e) {
    echo 'Exception when calling TransientTokenDataV2Api->getTransactionForTransientToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transientToken** | **string**| Transient Token returned by the Unified Checkout application. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionForTransientTokenJTI**
> getTransactionForTransientTokenJTI($jti)

Get Transient Token Data v2

Retrieve data captured through Unified Checkout. This API retrieves the detailed information associated with a Transient Token by looking it up in TMS and using its ID (the jti claim from the /flex/v2/tokens JWT response). The response returns a decrypted version of the Transient Token; however, PCI-sensitive payment data (PAN) is never returned and is always masked.<br><br> Example jti value: 1D42LRF04LYTMO3I1G8JX6GO6S1PUFM2R4CQLU51267E0EOQ7X2169A99674E16E

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransientTokenDataV2Api();
$jti = "jti_example"; // string | The jti within the Transient Token jwt returned by the Unified Checkout application

try {
    $api_instance->getTransactionForTransientTokenJTI($jti);
} catch (Exception $e) {
    echo 'Exception when calling TransientTokenDataV2Api->getTransactionForTransientTokenJTI: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jti** | **string**| The jti within the Transient Token jwt returned by the Unified Checkout application |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

