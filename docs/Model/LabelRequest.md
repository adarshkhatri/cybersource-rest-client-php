# LabelRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actions** | **string[]** | Actions to perform. For label submission, specify VISA_PROTECT_RISK_INSIGHTS. | 
**events** | **string[]** | Must be LABELS for label submission requests. | 
**requestId** | **string** | Unique identifier for the label submission request | [optional] 
**eventTime** | [**\DateTime**](\DateTime.md) | The time that the real-world event occurred. | [optional] 
**transaction** | [**\CyberSource\Model\UnifiedriskTransaction**](UnifiedriskTransaction.md) |  | 
**labels** | [**\CyberSource\Model\UnifiedriskLabels**](UnifiedriskLabels.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


