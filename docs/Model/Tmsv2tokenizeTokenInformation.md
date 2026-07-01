# Tmsv2tokenizeTokenInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jti** | **string** | TMS Transient Token, 64 hexadecimal id value representing captured payment credentials (including Sensitive Authentication Data, e.g. CVV). | [optional] 
**transientTokenJwt** | **string** | Flex API Transient Token encoded as JWT (JSON Web Token), e.g. Flex microform or Unified Payment checkout result. | [optional] 
**customer** | [**\CyberSource\Model\Tmsv2tokenizeTokenInformationCustomer**](Tmsv2tokenizeTokenInformationCustomer.md) |  | [optional] 
**shippingAddress** | [**\CyberSource\Model\DefaultShippingAddress**](DefaultShippingAddress.md) |  | [optional] 
**paymentInstrument** | [**\CyberSource\Model\DefaultPaymentInstrument**](DefaultPaymentInstrument.md) |  | [optional] 
**instrumentIdentifier** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifier**](TmsEmbeddedInstrumentIdentifier.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


