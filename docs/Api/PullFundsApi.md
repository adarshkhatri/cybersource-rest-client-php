# CyberSource\PullFundsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPullFundsRefund**](PullFundsApi.md#createPullFundsRefund) | **POST** /pts/v1/pull-funds-transfer/{id}/refund | Process a Pull Funds Refund
[**createPullFundsReversal**](PullFundsApi.md#createPullFundsReversal) | **POST** /pts/v1/pull-funds-transfer/{id}/reversal | Process a Pull Funds Reversal
[**createPullFundsTransfer**](PullFundsApi.md#createPullFundsTransfer) | **POST** /pts/v1/pull-funds-transfer | Process a Pull Funds Transfer


# **createPullFundsRefund**
> \CyberSource\Model\PullFundsRefund201Response createPullFundsRefund($pullFundsRefundRequest, $id, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)

Process a Pull Funds Refund

Refund an Account Funding Transaction (AFT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PullFundsApi();
$pullFundsRefundRequest = new \CyberSource\Model\PullFundsRefundRequest(); // \CyberSource\Model\PullFundsRefundRequest | 
$id = "id_example"; // string | The transaction id of a previous Account Funding Transaction.
$contentType = "contentType_example"; // string | 
$xRequestid = "xRequestid_example"; // string | 
$vCMerchantId = "vCMerchantId_example"; // string | 
$vCPermissions = "vCPermissions_example"; // string | 
$vCCorrelationId = "vCCorrelationId_example"; // string | 
$vCOrganizationId = "vCOrganizationId_example"; // string | 

try {
    $result = $api_instance->createPullFundsRefund($pullFundsRefundRequest, $id, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullFundsApi->createPullFundsRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pullFundsRefundRequest** | [**\CyberSource\Model\PullFundsRefundRequest**](../Model/PullFundsRefundRequest.md)|  |
 **id** | **string**| The transaction id of a previous Account Funding Transaction. |
 **contentType** | **string**|  |
 **xRequestid** | **string**|  |
 **vCMerchantId** | **string**|  |
 **vCPermissions** | **string**|  |
 **vCCorrelationId** | **string**|  |
 **vCOrganizationId** | **string**|  |

### Return type

[**\CyberSource\Model\PullFundsRefund201Response**](../Model/PullFundsRefund201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPullFundsReversal**
> \CyberSource\Model\PullFundsReversal201Response createPullFundsReversal($pullFundsReversalRequest, $id, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)

Process a Pull Funds Reversal

Reverse an Account Funding Transaction (AFT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PullFundsApi();
$pullFundsReversalRequest = new \CyberSource\Model\PullFundsReversalRequest(); // \CyberSource\Model\PullFundsReversalRequest | 
$id = "id_example"; // string | The transaction id of a previous Account Funding Transaction.
$contentType = "contentType_example"; // string | 
$xRequestid = "xRequestid_example"; // string | 
$vCMerchantId = "vCMerchantId_example"; // string | 
$vCPermissions = "vCPermissions_example"; // string | 
$vCCorrelationId = "vCCorrelationId_example"; // string | 
$vCOrganizationId = "vCOrganizationId_example"; // string | 

try {
    $result = $api_instance->createPullFundsReversal($pullFundsReversalRequest, $id, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullFundsApi->createPullFundsReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pullFundsReversalRequest** | [**\CyberSource\Model\PullFundsReversalRequest**](../Model/PullFundsReversalRequest.md)|  |
 **id** | **string**| The transaction id of a previous Account Funding Transaction. |
 **contentType** | **string**|  |
 **xRequestid** | **string**|  |
 **vCMerchantId** | **string**|  |
 **vCPermissions** | **string**|  |
 **vCCorrelationId** | **string**|  |
 **vCOrganizationId** | **string**|  |

### Return type

[**\CyberSource\Model\PullFundsReversal201Response**](../Model/PullFundsReversal201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPullFundsTransfer**
> \CyberSource\Model\PullFunds201Response createPullFundsTransfer($pullFundsRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)

Process a Pull Funds Transfer

Receive funds using an Account Funding Transaction (AFT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PullFundsApi();
$pullFundsRequest = new \CyberSource\Model\PullFundsRequest(); // \CyberSource\Model\PullFundsRequest | 
$contentType = "contentType_example"; // string | 
$xRequestid = "xRequestid_example"; // string | 
$vCMerchantId = "vCMerchantId_example"; // string | 
$vCPermissions = "vCPermissions_example"; // string | 
$vCCorrelationId = "vCCorrelationId_example"; // string | 
$vCOrganizationId = "vCOrganizationId_example"; // string | 

try {
    $result = $api_instance->createPullFundsTransfer($pullFundsRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullFundsApi->createPullFundsTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pullFundsRequest** | [**\CyberSource\Model\PullFundsRequest**](../Model/PullFundsRequest.md)|  |
 **contentType** | **string**|  |
 **xRequestid** | **string**|  |
 **vCMerchantId** | **string**|  |
 **vCPermissions** | **string**|  |
 **vCCorrelationId** | **string**|  |
 **vCOrganizationId** | **string**|  |

### Return type

[**\CyberSource\Model\PullFunds201Response**](../Model/PullFunds201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

