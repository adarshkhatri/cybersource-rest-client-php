# Iccv1instructionsinstructionIdcredentialsOrderInformationShipTo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addressId** | **string** | (Conditional) Reference identifier of the address Conditionality - Required when address is already registered with VACP System. Optional for requests when address fields are provided. | [optional] 
**district** | **string** | Name of the business; Name of the community; c/o Name etc. Notes - Shipping Address - The final recipient&#39;s name will be captured  in deliveryContacts field. Billing Address - The Card Holder or Consumer Name will be recorded as part of Card or Order Information. | [optional] 
**address1** | **string** | (Conditional) Address line 1 Conditionality - Required when used with the DPA Registration operation in the Management Service APIs Required when address is used as shipping/delivery Address. | [optional] 
**address2** | **string** | Address line 2. | [optional] 
**address3** | **string** | Address line 3. | [optional] 
**locality** | **string** | (Conditional) Address city Conditionality - When used with the DPA Registration operation in the Management  Service APIs at least one of the following is required   - both city and state - zip Required if this is a shipping address in a valid format for the country | [optional] 
**administrativeArea** | **string** | (Conditional) Address state Recommendation to support ISO 3166-2 format i.e. made up of ISO 3166-1 alpha 2 country code,  followed by an alphanumeric string of 3 characters representing the state or sub-division Conditionality -  When used with the DPA Registration operation in the Management Service APIs at least one of the following is required   - both city and state - zip Required if this is a shipping address in a valid format for the country. | [optional] 
**country** | **string** | Address country code ISO 3166-1 alpha-2 country code. | 
**postalCode** | **string** | Address zip/postal code Conditionality - When used with the DPA Registration operation in th Management Service APIs  at least one of the following is required.   - both city and state   - zip Required if this is a shipping address in a valid format for the country and has a postal code or zip code | [optional] 
**createTime** | **string** | Date and time the address was created. UTC time in Unix epoch format. | [optional] 
**lastUsedTime** | **string** | Date and time the address was last used. UTC time in Unix epoch format. | [optional] 
**firstName** | **string** | First name of the recipient. | [optional] 
**middleName** | **string** | Middle name of the recipient. | [optional] 
**lastName** | **string** | Last name of the recipient. | [optional] 
**email** | **string** | Consumer-provided email address. | [optional] 
**countryCallingCode** | **string** | Phone number country code as defined by the International Telecommunication Union. | 
**phoneNumber** | **string** | Phone number without country code. | 
**numberIsVoiceOnly** | **bool** | Indicates that the phone number provided is not capable of receiving text messages. | [optional] 
**instructions** | **string** | Consumer-provided delivery instructions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


