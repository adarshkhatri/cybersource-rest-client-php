# MerchantUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantName** | **string** | Doing business as (DBA) name | [optional] 
**merchantUrl** | **string** | Base merchant URL (must use HTTPS) | [optional] 
**cryptogramType** | **string** | Authentication cryptogram type  Possible values: - TAVV - DAVV | [optional] 
**paymentPayloadType** | **string** | Credential delivery format  Possible values: - ENCRYPTED - UNENCRYPTED | [optional] 
**acceptanceRelationships** | **string[]** | List of acceptance network relationships | [optional] 
**protocolInteractions** | [**\CyberSource\Model\Iccv1merchantsProtocolInteractions[]**](Iccv1merchantsProtocolInteractions.md) | List of protocol configurations | [optional] 
**webIntegrations** | [**\CyberSource\Model\Iccv1merchantsWebIntegrations**](Iccv1merchantsWebIntegrations.md) |  | [optional] 
**apiIntegrations** | [**\CyberSource\Model\Iccv1merchantsApiIntegrations**](Iccv1merchantsApiIntegrations.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


