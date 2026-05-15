# CyberSource\InstructionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPurchaseIntent**](InstructionsApi.md#cancelPurchaseIntent) | **PUT** /acp/v1/instructions/{instructionId}/cancel | Cancel a purchase intent
[**confirmTransactionEvents**](InstructionsApi.md#confirmTransactionEvents) | **POST** /acp/v1/instructions/{instructionId}/confirmations | Confirm transaction events
[**initiatePurchaseIntent**](InstructionsApi.md#initiatePurchaseIntent) | **POST** /acp/v1/instructions | Initiate a purchase intent
[**retrievePaymentCredentials**](InstructionsApi.md#retrievePaymentCredentials) | **POST** /acp/v1/instructions/{instructionId}/credentials | Retrieve payment credentials
[**updatePurchaseIntent**](InstructionsApi.md#updatePurchaseIntent) | **PUT** /acp/v1/instructions/{instructionId} | Update a purchase intent


# **cancelPurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 cancelPurchaseIntent($instructionId, $agenticCancelPurchaseIntentRequest)

Cancel a purchase intent

Cancel an existing purchase intent (instruction) identified by its instructionId. The agent calls this endpoint when the consumer decides to abandon the purchase before payment credentials have been used. Requires device information and assurance data for identity verification. Returns status CANCELLED (HTTP 200) on success, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required before cancellation can proceed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstructionsApi();
$instructionId = "instructionId_example"; // string | 
$agenticCancelPurchaseIntentRequest = new \CyberSource\Model\AgenticCancelPurchaseIntentRequest(); // \CyberSource\Model\AgenticCancelPurchaseIntentRequest | Unique identifier for the purchase intent instruction.

try {
    $result = $api_instance->cancelPurchaseIntent($instructionId, $agenticCancelPurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructionsApi->cancelPurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**|  |
 **agenticCancelPurchaseIntentRequest** | [**\CyberSource\Model\AgenticCancelPurchaseIntentRequest**](../Model/AgenticCancelPurchaseIntentRequest.md)| Unique identifier for the purchase intent instruction. |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmTransactionEvents**
> \CyberSource\Model\AgenticConfirmTransactionEventsResponse202 confirmTransactionEvents($instructionId, $agenticConfirmTransactionEventsRequest)

Confirm transaction events

Confirm transaction events for a completed purchase. The agent calls this endpoint after the payment has been submitted to notify the Intelligent Commerce Connect of the transaction outcome. The request includes processor information (transaction type, status, approval codes), order details (shipping, tracking, product information), and merchant information. Returns HTTP 202 acknowledging receipt of the confirmation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstructionsApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticConfirmTransactionEventsRequest = new \CyberSource\Model\AgenticConfirmTransactionEventsRequest(); // \CyberSource\Model\AgenticConfirmTransactionEventsRequest | 

try {
    $result = $api_instance->confirmTransactionEvents($instructionId, $agenticConfirmTransactionEventsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructionsApi->confirmTransactionEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticConfirmTransactionEventsRequest** | [**\CyberSource\Model\AgenticConfirmTransactionEventsRequest**](../Model/AgenticConfirmTransactionEventsRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticConfirmTransactionEventsResponse202**](../Model/AgenticConfirmTransactionEventsResponse202.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiatePurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 initiatePurchaseIntent($agenticCreatePurchaseIntentRequest)

Initiate a purchase intent

Create a new purchase intent (instruction) for an agentic transaction. The agent calls this endpoint after a card has been enrolled to define what the consumer wants to buy. The request includes payment instrument references, device and assurance data, mandates (spending limits, merchant preferences, and product descriptions), and optional buyer information. Return an instructionId (HTTP 200) if the intent is created immediately, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required. The instructionId returned is used in all subsequent operations - update, cancel, retrieve credentials, and confirm transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstructionsApi();
$agenticCreatePurchaseIntentRequest = new \CyberSource\Model\AgenticCreatePurchaseIntentRequest(); // \CyberSource\Model\AgenticCreatePurchaseIntentRequest | 

try {
    $result = $api_instance->initiatePurchaseIntent($agenticCreatePurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructionsApi->initiatePurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agenticCreatePurchaseIntentRequest** | [**\CyberSource\Model\AgenticCreatePurchaseIntentRequest**](../Model/AgenticCreatePurchaseIntentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePaymentCredentials**
> \CyberSource\Model\AgenticRetrievePaymentCredentialsResponse200 retrievePaymentCredentials($instructionId, $agenticRetrievePaymentCredentialsRequest)

Retrieve payment credentials

Retrieve tokenized payment credentials for a purchase intent to complete the transaction at a merchant. The agent calls this endpoint after a purchase intent has been created and approved, providing transaction-level details including order information, merchant details, payment options, and production information. Returns COMPLETED (HTTP 200) with a signed payload containing encrypted payment credentials (authorization token and JWS-signed payload), or PENDING (HTTP 202) with pendingEvents if additional cardholder authentication is required. The signed payload is used by the merchant's payment processor to complete the transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstructionsApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticRetrievePaymentCredentialsRequest = new \CyberSource\Model\AgenticRetrievePaymentCredentialsRequest(); // \CyberSource\Model\AgenticRetrievePaymentCredentialsRequest | 

try {
    $result = $api_instance->retrievePaymentCredentials($instructionId, $agenticRetrievePaymentCredentialsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructionsApi->retrievePaymentCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticRetrievePaymentCredentialsRequest** | [**\CyberSource\Model\AgenticRetrievePaymentCredentialsRequest**](../Model/AgenticRetrievePaymentCredentialsRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticRetrievePaymentCredentialsResponse200**](../Model/AgenticRetrievePaymentCredentialsResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 updatePurchaseIntent($instructionId, $agenticUpdatePurchaseIntentRequest)

Update a purchase intent

Update an existing purchase intent (instruction) identified by its instructionId. The agent calls this endpoint when the consumer modifies their order — for example, changing the quantity, updating mandates, switching payment instruments, or changing shipping details. The request body has the same structure as the initiate request. Returns the same instructionId (HTTP 200) on success, or PENDING (HTTP 202) with pendingEvents if additional cardholder authentication is required for the updated intent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstructionsApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticUpdatePurchaseIntentRequest = new \CyberSource\Model\AgenticUpdatePurchaseIntentRequest(); // \CyberSource\Model\AgenticUpdatePurchaseIntentRequest | 

try {
    $result = $api_instance->updatePurchaseIntent($instructionId, $agenticUpdatePurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructionsApi->updatePurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticUpdatePurchaseIntentRequest** | [**\CyberSource\Model\AgenticUpdatePurchaseIntentRequest**](../Model/AgenticUpdatePurchaseIntentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

