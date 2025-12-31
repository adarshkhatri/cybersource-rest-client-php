# AgenticUpdatePurchaseIntentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientCorrelationId** | **string** | Client Correlation Id used during the tokenization or during FIDO assertion. | 
**paymentInformation** | [**\CyberSource\Model\Acpv1tokensPaymentInformation**](Acpv1tokensPaymentInformation.md) |  | 
**deviceInformation** | [**\CyberSource\Model\Acpv1tokensDeviceInformation**](Acpv1tokensDeviceInformation.md) |  | 
**assuranceData** | [**\CyberSource\Model\Acpv1tokensAssuranceData[]**](Acpv1tokensAssuranceData.md) | Assurance data. | 
**mandates** | [**\CyberSource\Model\Acpv1instructionsMandates[]**](Acpv1instructionsMandates.md) |  | 
**buyerInformation** | [**\CyberSource\Model\Acpv1tokensBuyerInformation**](Acpv1tokensBuyerInformation.md) |  | [optional] 
**consumerPrompt** | **string** | Recap - A summary or condensed version of user prompts that leads to the purchase. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


