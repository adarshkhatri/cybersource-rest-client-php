# Iccv1mppcredentialsChallenge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique challenge identifier issued by the merchant server. | 
**realm** | **string** | Merchant realm (typically the API domain). | 
**amount** | **string** | Amount in the smallest currency unit (e.g., &#39;4999&#39; &#x3D; $49.99). | 
**currency** | **string** | Three-letter ISO 4217 currency code, lowercase (e.g., &#39;usd&#39;). | 
**acceptedNetworks** | **string[]** | Card networks accepted by the merchant (e.g., [&#39;visa&#39;, &#39;mastercard&#39;]). | 
**merchantId** | **string** | Merchant identifier (maps to &#39;recipient&#39; in MPP spec request object). | 
**merchantName** | **string** | Human-readable merchant name. | 
**encryptionJwk** | [**\CyberSource\Model\Iccv1mppcredentialsChallengeEncryptionJwk**](Iccv1mppcredentialsChallengeEncryptionJwk.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


