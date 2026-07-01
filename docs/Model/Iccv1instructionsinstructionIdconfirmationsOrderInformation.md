# Iccv1instructionsinstructionIdconfirmationsOrderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | Unique identifier for the order | [optional] 
**orderStatus** | **string** | Status of the order | [optional] 
**orderDate** | **string** | Order date (UTC time in Epoch format) | [optional] 
**expectedDeliveryDate** | **string** | Expected delivery date for the order (UTC time in Epoch format) | [optional] 
**amountDetail** | [**\CyberSource\Model\IccAmountDetail**](IccAmountDetail.md) |  | [optional] 
**shipTo** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsOrderInformationShipTo**](Iccv1instructionsinstructionIdcredentialsOrderInformationShipTo.md) |  | [optional] 
**shippingDetails** | [**\CyberSource\Model\IccShippingDetails**](IccShippingDetails.md) |  | [optional] 
**trackingId** | **string** | Tracking ID for the shipment | [optional] 
**carrier** | **string** | Shipping carrier or provider | [optional] 
**lineItems** | [**\CyberSource\Model\Iccv1instructionsinstructionIdcredentialsOrderInformationLineItems[]**](Iccv1instructionsinstructionIdcredentialsOrderInformationLineItems.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


