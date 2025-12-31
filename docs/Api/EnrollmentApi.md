# CyberSource\EnrollmentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enrollCard**](EnrollmentApi.md#enrollCard) | **POST** /acp/v1/tokens | Enroll a card


# **enrollCard**
> \CyberSource\Model\AgenticCardEnrollmentResponse200 enrollCard($agenticCardEnrollmentRequest)

Enroll a card

Enroll a card for tokenization during the customer's account registration or when the customer starts a new purchase intent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\EnrollmentApi();
$agenticCardEnrollmentRequest = new \CyberSource\Model\AgenticCardEnrollmentRequest(); // \CyberSource\Model\AgenticCardEnrollmentRequest | 

try {
    $result = $api_instance->enrollCard($agenticCardEnrollmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agenticCardEnrollmentRequest** | [**\CyberSource\Model\AgenticCardEnrollmentRequest**](../Model/AgenticCardEnrollmentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCardEnrollmentResponse200**](../Model/AgenticCardEnrollmentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

