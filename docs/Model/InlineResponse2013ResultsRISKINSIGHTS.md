# InlineResponse2013ResultsRISKINSIGHTS

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestId** | **string** | Echoes the unique identifier from the original label request. | [optional] 
**responseTimestamp** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the VPRI service processed the label submission. | [optional] 
**status** | **string** | Processing status of the label submission.  Possible values: - COMPLETED - INVALID_REQUEST - SERVER_ERROR | [optional] 
**reason** | **string** | Machine-readable reason code when status is not COMPLETED. | [optional] 
**message** | **string** | Human-readable message when status is not COMPLETED. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


