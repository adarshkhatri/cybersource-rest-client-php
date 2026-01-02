# Acpv1instructionsMandates

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mandateId** | **string** | Unique identifier with in the context of a purchase-intent for the mandate.   Assigned by Partner. Id shall not be reused when a mandate is updated/deleted. | 
**preferredMerchantName** | **string** | User merchant preference. | [optional] 
**merchantCategory** | **string** | Merchant category Description. | [optional] 
**merchantCategoryCode** | **string** | Merchant category Code. Once it is checked, it has to be valid merchant category code. Ex:\&quot; 5311\&quot; | [optional] 
**declineThreshold** | [**\CyberSource\Model\Acpv1instructionsDeclineThreshold**](Acpv1instructionsDeclineThreshold.md) |  | 
**recurringPaymentInformation** | [**\CyberSource\Model\Acpv1instructionsRecurringPaymentInformation**](Acpv1instructionsRecurringPaymentInformation.md) |  | [optional] 
**effectiveUntilTime** | **string** | UTC time in Unix epoch format. | 
**quantity** | **string** | Quantity of the product. | [optional] 
**description** | **string** | Description of the product. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


