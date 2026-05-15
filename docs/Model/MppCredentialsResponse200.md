# MppCredentialsResponse200

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | Base64-encoded RSA-OAEP encrypted token ciphertext. Must not be parsed by client/server — forwarded opaquely to the Server Enabler. | 
**network** | **string** | Card network. Possible values:   - &#x60;visa&#x60;   - &#x60;mastercard&#x60;   - &#x60;amex&#x60;   - &#x60;discover&#x60; | 
**lastFour** | **string** | Last four digits of the card number as displayed to cardholder. | 
**expirationMonth** | **string** | Token expiration month (e.g., &#39;06&#39;). Display only. | 
**expirationYear** | **string** | Token expiration year, four digits (e.g., &#39;2028&#39;). Display only. | 
**dynamicData** | **string** | Base64-encoded cryptogram from TSP. Present only for network_token type. Display only. | 
**eci** | **string** | Electronic Commerce Indicator (e.g., &#39;05&#39;, &#39;07&#39;). Present only for network_token type. Display only. | 
**paymentAccountReference** | **string** | Payment Account Reference — a stable reference to the underlying funding account. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


