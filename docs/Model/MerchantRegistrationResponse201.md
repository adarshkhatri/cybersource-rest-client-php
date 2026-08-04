# MerchantRegistrationResponse201

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique merchant identifier (UUID) | 
**merchantName** | **string** | Doing business as (DBA) name | 
**merchantUrl** | **string** | Base merchant URL | 
**vmid** | **string** | Visa Merchant ID | [optional] 
**cryptogramType** | **string** | Authentication cryptogram type  Possible values: - TAVV - DAVV | [optional] 
**paymentPayloadType** | **string** | Credential delivery format  Possible values: - ENCRYPTED - UNENCRYPTED | [optional] 
**indicator** | **string** | Transaction processing type  Possible values: - TAP - ACG - BOTH | 
**merchantMetadata** | **object** | Additional merchant metadata | [optional] 
**acceptanceRelationships** | **string[]** | List of acceptance network relationships | [optional] 
**protocolInteractions** | [**\CyberSource\Model\Iccv1merchantsProtocolInteractions[]**](Iccv1merchantsProtocolInteractions.md) | List of protocol interaction configurations (ucp, acp, x402) | [optional] 
**webIntegrations** | [**\CyberSource\Model\Iccv1merchantsWebIntegrations**](Iccv1merchantsWebIntegrations.md) |  | [optional] 
**apiIntegrations** | [**\CyberSource\Model\Iccv1merchantsApiIntegrations**](Iccv1merchantsApiIntegrations.md) |  | [optional] 
**isActive** | **bool** | Whether the merchant is active | 
**createdAt** | [**\DateTime**](\DateTime.md) | Creation timestamp | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Last update timestamp | 
**keys** | [**\CyberSource\Model\MerchantRegistrationResponse201Keys[]**](MerchantRegistrationResponse201Keys.md) | List of encryption keys associated with the merchant | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


