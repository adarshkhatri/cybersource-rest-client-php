# CyberSource\TransactionRiskLabelingApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitLabels**](TransactionRiskLabelingApi.md#submitLabels) | **POST** /unifiedrisk | Transaction Risk Labeling


# **submitLabels**
> \CyberSource\Model\InlineResponse2013 submitLabels($labelRequest)

Transaction Risk Labeling

The Labels endpoint enables clients to submit post-transaction feedback, including both the decision made on the transaction  (such as accept or reject) and the final outcome (such as confirmed fraud, valid, or suspected).  Consistent label submission is critical to achieving optimal model performance, as it directly drives model accuracy, tuning,  and the quality of client‑specific insights over time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransactionRiskLabelingApi();
$labelRequest = new \CyberSource\Model\LabelRequest(); // \CyberSource\Model\LabelRequest | Label submission request

try {
    $result = $api_instance->submitLabels($labelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRiskLabelingApi->submitLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelRequest** | [**\CyberSource\Model\LabelRequest**](../Model/LabelRequest.md)| Label submission request |

### Return type

[**\CyberSource\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

