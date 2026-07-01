# Iccv1instructionsinstructionIdcredentialsTransactionData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientReferenceInformation** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsClientReferenceInformation**](Iccv1instructionsinstructionIdcredentialsClientReferenceInformation.md) |  | 
**mandateReferenceData** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsMandateReferenceData[]**](Iccv1instructionsinstructionIdcredentialsMandateReferenceData.md) | Mandate Reference Data. | [optional] 
**type** | **string** | (Conditional) Type of the transaction. This field is used to determine the type of transaction and the associated processing rules.   Possible values:     - &#x60;PURCHASE&#x60; (Default)   - &#x60;BILL_PAYMENT&#x60;   - &#x60;MONEY_TRANSFER&#x60;   - &#x60;DISBURSEMENT&#x60;   - &#x60;P2P&#x60; | [optional] 
**orderInformation** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsOrderInformation**](Iccv1instructionsinstructionIdcredentialsOrderInformation.md) |  | 
**paymentServiceProviderUrl** | **string** | (Conditional) URL of the payment service provider. | [optional] 
**paymentServiceProviderName** | **string** | (Conditional) Name of the payment service provider. | [optional] 
**merchantOrderId** | **string** | (Conditional) Digital Payment Application generated order/invoice number corresponding to a Consumer purchase. | [optional] 
**merchantInformation** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsMerchantInformation**](Iccv1instructionsinstructionIdcredentialsMerchantInformation.md) |  | 
**paymentOptions** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsPaymentOptions**](Iccv1instructionsinstructionIdcredentialsPaymentOptions.md) |  | [optional] 
**attachments** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsAttachments[]**](Iccv1instructionsinstructionIdcredentialsAttachments.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


