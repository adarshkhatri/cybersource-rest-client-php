# InlineResponse20019GoogleMerchantProducts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemId** | **string** | Product item ID. | [optional] 
**title** | **string** | Product title. | [optional] 
**ucpValid** | **bool** | Whether the product passed UCP validation. | [optional] 
**ucpErrors** | **string[]** | UCP validation errors (empty if ucpValid is true). | [optional] 
**googleUploadStatus** | **string** | Google upload status for this product.   Possible values: - UPLOADED - SKIPPED - FAILED | [optional] 
**googleResourceName** | **string** | Google Merchant resource name assigned after upload. | [optional] 
**googleError** | **string** | Error message from Google if upload failed. Null on success. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


