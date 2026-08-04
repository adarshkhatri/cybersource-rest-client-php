# Iccv1checkoutsessionsPaymentInstruments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Client-assigned instrument identifier. | [optional] 
**type** | **string** | Payment method type (e.g. &#x60;card&#x60;, &#x60;wallet&#x60;). | [optional] 
**handlerId** | **string** | Payment handler or processor identifier (e.g. &#x60;visa&#x60;). | [optional] 
**handlerName** | **string** | Human-readable name of the payment handler. | [optional] 
**brand** | **string** | Card brand (e.g. &#x60;visa&#x60;, &#x60;mastercard&#x60;). | [optional] 
**lastDigits** | **string** | Last 4 digits of the card number for display purposes. | [optional] 
**token** | **string** | Opaque payment token from the payment provider. | [optional] 
**credential** | [**\CyberSource\Model\Iccv1checkoutsessionsPaymentCredential**](Iccv1checkoutsessionsPaymentCredential.md) |  | [optional] 
**billingAddress** | [**\CyberSource\Model\Iccv1checkoutsessionsPaymentBillingAddress**](Iccv1checkoutsessionsPaymentBillingAddress.md) |  | [optional] 
**selected** | **bool** | Whether this instrument is selected for the current session. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


