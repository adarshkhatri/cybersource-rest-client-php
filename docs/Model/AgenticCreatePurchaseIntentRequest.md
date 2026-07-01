# AgenticCreatePurchaseIntentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientCorrelationId** | **string** | Client Correlation Id used during the tokenization or during FIDO assertion. | 
**paymentInformation** | [**\CyberSource\Model\Iccv1tokensPaymentInformation**](Iccv1tokensPaymentInformation.md) |  | 
**deviceInformation** | [**\CyberSource\Model\Iccv1tokensDeviceInformation**](Iccv1tokensDeviceInformation.md) |  | 
**assuranceData** | [**\CyberSource\Model\Iccv1tokensAssuranceData[]**](Iccv1tokensAssuranceData.md) | Assurance data. | 
**mandates** | [**\CyberSource\Model\Iccv1instructionsMandates[]**](Iccv1instructionsMandates.md) | Mandate data. | 
**buyerInformation** | [**\CyberSource\Model\Iccv1tokensBuyerInformation**](Iccv1tokensBuyerInformation.md) |  | [optional] 
**isRecurring** | **bool** | Indicates whether the transaction is recurring. Default value is false. | [optional] 
**consumerPrompt** | **string** | Recap - A summary or condensed version of user prompts that leads to the purchase. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


