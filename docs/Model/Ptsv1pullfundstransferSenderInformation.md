# Ptsv1pullfundstransferSenderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postalCode** | **string** | Sender&#39;s postal code. This field is conditional: it is required if using neither a Customer nor Payment Instrument token. | [optional] 
**firstName** | **string** | First name of sender. This field is conditional: it is required if using neither a Customer nor Payment Instrument token. | [optional] 
**middleInitial** | **string** | Middle Initial of sender | [optional] 
**middleName** | **string** | This field contains the middle name of the entity funding the transaction. | [optional] 
**lastName** | **string** | Last name of sender. This field is conditional: it is required if using neither a Customer nor Payment Instrument token. | [optional] 
**address1** | **string** | Street address of sender. This field is conditional: it is required if using neither a Customer nor Payment Instrument token. | [optional] 
**address2** | **string** | Second line of the sender&#39;s address. | [optional] 
**locality** | **string** | City of sender. This field is conditional: it is required if using neither a Customer nor Payment Instrument token. | [optional] 
**administrativeArea** | **string** | Sender&#39;s state. Use the **State, Province, and Territory Codes for the United States and Canada**. This field is conditional: it is required if in the United States or Canada, and transaction is using neither a Customer nor Payment Instrument token.   Value must be an ISO Standard State Code: [https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf](https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf) | [optional] 
**country** | **string** | Country of sender. Check that this field contains 2 character alpha ISO 3166-1 standard values. This field is conditional: it is required if using neither a Customer nor Payment Instrument token. | [optional] 
**paymentInformation** | [**\CyberSource\Model\Ptsv1pullfundstransferSenderInformationPaymentInformation**](Ptsv1pullfundstransferSenderInformationPaymentInformation.md) |  | [optional] 
**consumerAuthentication** | [**\CyberSource\Model\Ptsv1pullfundstransferSenderInformationConsumerAuthentication**](Ptsv1pullfundstransferSenderInformationConsumerAuthentication.md) |  | [optional] 
**personalIdentification** | [**\CyberSource\Model\Ptsv1pullfundstransferSenderInformationPersonalIdentification**](Ptsv1pullfundstransferSenderInformationPersonalIdentification.md) |  | [optional] 
**referenceNumber** | **string** | Visa Direct(16 characters)   If the transaction is a money transfer, pre-paid load, or credit card bill pay, and if the sender intends to fund the transaction with a non-financial instrument (for example, cash), a reference number unique to the sender is required.   If the transaction is a funds disbursement, the field is required. | [optional] 
**account** | [**\CyberSource\Model\Ptsv1pullfundstransferSenderInformationAccount**](Ptsv1pullfundstransferSenderInformationAccount.md) |  | [optional] 
**aliasName** | **string** | Sender&#39;s alias name. | [optional] 
**countryOfBirth** | **string** | Account Owner Country of Birth. | [optional] 
**dateOfBirth** | **string** | Sender&#39;s date of birth. Format: YYYYMMDD. | [optional] 
**email** | **string** | Account Owner email address | [optional] 
**name** | **string** | Name of sender. Use this field if the sender is a business. | [optional] 
**nationality** | **string** | Account Owner Nationality | [optional] 
**occupation** | **string** | Account Owner Occupation. | [optional] 
**phoneNumber** | **string** | Sender&#39;s phone number. | [optional] 
**type** | **string** | This field identifies if the sender is a business or an individual.   The valid values are:   • &#x60;B&#x60; (Business)   • &#x60;I&#x60; (Individual) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


