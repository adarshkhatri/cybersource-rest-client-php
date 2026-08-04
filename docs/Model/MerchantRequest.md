# MerchantRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantName** | **string** | Doing business as (DBA) name | 
**merchantUrl** | **string** | Base merchant URL (must use HTTPS) | 
**vmid** | **string** | Visa Merchant ID — unique identifier | [optional] 
**indicator** | **string** | Transaction processing type  Possible values: - TAP - ACG - BOTH | 
**cryptogramType** | **string** | Authentication cryptogram type (defaults to DAVV)  Possible values: - TAVV - DAVV | [optional] 
**paymentPayloadType** | **string** | Credential delivery format (defaults to UNENCRYPTED)  Possible values: - ENCRYPTED - UNENCRYPTED | [optional] 
**encryptionKey** | [**\CyberSource\Model\Iccv1merchantsEncryptionKey**](Iccv1merchantsEncryptionKey.md) |  | [optional] 
**acceptanceRelationships** | **string[]** | List of acceptance network relationships | [optional] 
**protocolInteractions** | [**\CyberSource\Model\Iccv1merchantsProtocolInteractions[]**](Iccv1merchantsProtocolInteractions.md) | List of protocol configurations (ucp, acp, x402) with HTTPS URLs | [optional] 
**webIntegrations** | [**\CyberSource\Model\Iccv1merchantsWebIntegrations**](Iccv1merchantsWebIntegrations.md) |  | [optional] 
**apiIntegrations** | [**\CyberSource\Model\Iccv1merchantsApiIntegrations**](Iccv1merchantsApiIntegrations.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


