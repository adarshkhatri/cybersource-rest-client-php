# InlineResponse20113

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this checkout session. Required for all subsequent calls (update, complete, cancel). | [optional] 
**status** | **string** | Current lifecycle state of the session per ACP spec: - &#x60;not_ready_for_payment&#x60; — session is open but not yet ready - &#x60;ready_for_payment&#x60; — session is ready to be completed - &#x60;completed&#x60; — order has been placed; session is immutable - &#x60;canceled&#x60; — session was abandoned; no charge was made   Possible values: - not_ready_for_payment - ready_for_payment - completed - canceled | [optional] 
**currency** | **string** | ISO 4217 lowercase currency code for this session. | [optional] 
**lineItems** | [**\CyberSource\Model\InlineResponse20113LineItems[]**](InlineResponse20113LineItems.md) | Line items with merchant-confirmed pricing. | [optional] 
**fulfillmentAddress** | [**\CyberSource\Model\InlineResponse20113FulfillmentAddress**](InlineResponse20113FulfillmentAddress.md) |  | [optional] 
**fulfillmentOptions** | [**\CyberSource\Model\InlineResponse20113FulfillmentOptions[]**](InlineResponse20113FulfillmentOptions.md) | Available fulfillment methods with pricing. | [optional] 
**fulfillmentOptionId** | **string** | ID of the currently selected fulfillment option. | [optional] 
**totals** | [**\CyberSource\Model\InlineResponse20113Totals[]**](InlineResponse20113Totals.md) | Order cost breakdown as an array of typed total lines. All amounts in minor units (cents). | [optional] 
**buyer** | [**\CyberSource\Model\AcpCheckoutSessionResponseBuyer**](AcpCheckoutSessionResponseBuyer.md) |  | [optional] 
**paymentProvider** | [**\CyberSource\Model\InlineResponse20113PaymentProvider**](InlineResponse20113PaymentProvider.md) |  | [optional] 
**messages** | [**\CyberSource\Model\InlineResponse20113Messages[]**](InlineResponse20113Messages.md) | Informational or error messages from the merchant backend. | [optional] 
**links** | [**\CyberSource\Model\InlineResponse20113Links[]**](InlineResponse20113Links.md) | Related resource links from the merchant (e.g. terms of use, privacy policy, seller shop policies). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


