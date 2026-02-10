# CyberSource\InvoiceSettingsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoiceSettings**](InvoiceSettingsApi.md#getInvoiceSettings) | **GET** /invoicing/v2/invoiceSettings | Get Invoice Settings
[**updateInvoiceSettings**](InvoiceSettingsApi.md#updateInvoiceSettings) | **PUT** /invoicing/v2/invoiceSettings | Update Invoice Settings


# **getInvoiceSettings**
> \CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response getInvoiceSettings($productType)

Get Invoice Settings

Allows you to retrieve the invoice settings for the payment page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoiceSettingsApi();
$productType = "productType_example"; // string | Allows you to choose which product type settings you want to update.

try {
    $result = $api_instance->getInvoiceSettings($productType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSettingsApi->getInvoiceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productType** | **string**| Allows you to choose which product type settings you want to update. | [optional]

### Return type

[**\CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response**](../Model/InvoicingV2InvoiceSettingsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoiceSettings**
> \CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response updateInvoiceSettings($invoiceSettingsRequest, $productType)

Update Invoice Settings

Allows you to customize the payment page, the checkout experience, email communication and payer authentication. You can customize the invoice to match your brand with your business name, logo and brand colors, and a VAT Tax number. You can choose to capture the payers shipping details, phone number and email during the checkout process. You can add a custom message to all invoice emails and enable or disable payer authentication for invoice payments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoiceSettingsApi();
$invoiceSettingsRequest = new \CyberSource\Model\InvoiceSettingsRequest(); // \CyberSource\Model\InvoiceSettingsRequest | 
$productType = "productType_example"; // string | Allows you to choose which product type settings you want to update.

try {
    $result = $api_instance->updateInvoiceSettings($invoiceSettingsRequest, $productType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSettingsApi->updateInvoiceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceSettingsRequest** | [**\CyberSource\Model\InvoiceSettingsRequest**](../Model/InvoiceSettingsRequest.md)|  |
 **productType** | **string**| Allows you to choose which product type settings you want to update. | [optional]

### Return type

[**\CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response**](../Model/InvoicingV2InvoiceSettingsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

