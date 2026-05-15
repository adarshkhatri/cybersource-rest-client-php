# Ucv1sessionsDataProcessingInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reconciliationId** | **string** | The reconciliation ID | [optional] 
**purposeOfPayment** | **string** | This field is applicable for AFT and OCT transactions.  For list of supported values, please refer to Developer Guide. | [optional] 
**authorizationOptions** | [**\CyberSource\Model\Ucv1sessionsDataProcessingInformationAuthorizationOptions**](Ucv1sessionsDataProcessingInformationAuthorizationOptions.md) |  | [optional] 
**recurringOptions** | [**\CyberSource\Model\Ucv1sessionsDataProcessingInformationRecurringOptions**](Ucv1sessionsDataProcessingInformationRecurringOptions.md) |  | [optional] 
**bankTransferOptions** | [**\CyberSource\Model\Ucv1sessionsDataProcessingInformationBankTransferOptions**](Ucv1sessionsDataProcessingInformationBankTransferOptions.md) |  | [optional] 
**businessApplicationId** | **string** | The business application Id&lt;br&gt;&lt;br&gt;  Optional field: This field cannot be configured through the Merchant Experience screens in the Business Center, but if required should be provided on a per‑transaction basis in the uc/v1/sessions API request. | [optional] 
**commerceIndicator** | **string** | The commerce indicator&lt;br&gt;&lt;br&gt;  Optional field: This field cannot be configured through the Merchant Experience screens in the Business Center, but if required should be provided on a per‑transaction basis in the uc/v1/sessions API request. | [optional] 
**processingInstruction** | **string** | The processing instruction&lt;br&gt;&lt;br&gt;  Optional field: This field cannot be configured through the Merchant Experience screens in the Business Center, but if required should be provided on a per‑transaction basis in the uc/v1/sessions API request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


