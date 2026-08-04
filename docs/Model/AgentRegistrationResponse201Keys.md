# AgentRegistrationResponse201Keys

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique key identifier. Generated from VARS. | 
**keyName** | **string** | Unique identifier for the key | 
**publicKey** | **string** | Base64-encoded public key | 
**algorithm** | **string** | Signing algorithm  Possible values: - RSA-SHA256 - RSA-SHA512 - ECDSA-SHA256 - ECDSA-SHA512 - EdDSA | 
**expirationDate** | [**\DateTime**](\DateTime.md) | Key expiration date in UTC | 
**status** | **string** | Key lifecycle status  Possible values: - active - deactivated - expired | 
**createdAt** | [**\DateTime**](\DateTime.md) | Creation timestamp | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Last update timestamp | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


