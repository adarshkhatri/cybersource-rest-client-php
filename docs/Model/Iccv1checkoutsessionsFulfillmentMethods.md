# Iccv1checkoutsessionsFulfillmentMethods

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique fulfillment method identifier. | [optional] 
**type** | **string** | Fulfillment method type (e.g. &#x60;shipping&#x60;, &#x60;pickup&#x60;, &#x60;delivery&#x60;). | [optional] 
**lineItemIds** | **string[]** | IDs of line items fulfilled by this method. | [optional] 
**destinations** | [**\CyberSource\Model\Iccv1checkoutsessionsFulfillmentDestinations[]**](Iccv1checkoutsessionsFulfillmentDestinations.md) | Available delivery destinations for this method. | [optional] 
**selectedDestinationId** | **string** | ID of the currently selected destination. | [optional] 
**groups** | [**\CyberSource\Model\Iccv1checkoutsessionsFulfillmentGroups[]**](Iccv1checkoutsessionsFulfillmentGroups.md) | Groups of line items with their associated shipping options. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


