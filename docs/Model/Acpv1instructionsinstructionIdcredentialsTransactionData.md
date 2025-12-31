# Acpv1instructionsinstructionIdcredentialsTransactionData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientReferenceInformation** | [**\CyberSource\Model\Acpv1instructionsinstructionIdcredentialsClientReferenceInformation**](Acpv1instructionsinstructionIdcredentialsClientReferenceInformation.md) |  | 
**mandateReferenceData** | [**\CyberSource\Model\Acpv1instructionsinstructionIdcredentialsMandateReferenceData[]**](Acpv1instructionsinstructionIdcredentialsMandateReferenceData.md) | Mandate Reference Data. | [optional] 
**type** | **string** | (Conditional) Type of the transaction. This field is used to determine the type of transaction and the associated processing rules.   Possible values:     - &#x60;PURCHASE&#x60; (Default)   - &#x60;BILL_PAYMENT&#x60;   - &#x60;MONEY_TRANSFER&#x60;   - &#x60;DISBURSEMENT&#x60;   - &#x60;P2P&#x60; | [optional] 
**orderInformation** | [**\CyberSource\Model\Acpv1instructionsinstructionIdcredentialsOrderInformation**](Acpv1instructionsinstructionIdcredentialsOrderInformation.md) |  | 
**paymentServiceProviderUrl** | **string** | (Conditional) URL of the payment service provider. | [optional] 
**paymentServiceProviderName** | **string** | (Conditional) Name of the payment service provider. | [optional] 
**merchantOrderId** | **string** | (Conditional) Digital Payment Application generated order/invoice number corresponding to a Consumer purchase. | [optional] 
**merchantInformation** | [**\CyberSource\Model\Acpv1instructionsinstructionIdcredentialsMerchantInformation**](Acpv1instructionsinstructionIdcredentialsMerchantInformation.md) |  | 
**paymentOptions** | [**\CyberSource\Model\Acpv1instructionsinstructionIdcredentialsPaymentOptions**](Acpv1instructionsinstructionIdcredentialsPaymentOptions.md) |  | [optional] 
**attachments** | [**\CyberSource\Model\Acpv1instructionsinstructionIdcredentialsAttachments[]**](Acpv1instructionsinstructionIdcredentialsAttachments.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


