# UnifiedRiskLabelsPost400Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestId** | **string** | Echoes the unique request identifier from the original request. May be absent if the request could not be parsed (e.g., malformed JSON). | 
**submitTimeUtc** | [**\DateTime**](\DateTime.md) | UTC timestamp indicating when the failed request was received by the server. | 
**errors** | [**\CyberSource\Model\UnifiedRiskLabelsPost400ResponseErrors[]**](UnifiedRiskLabelsPost400ResponseErrors.md) | Root-level list of action-level errors describing what failed and why. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


