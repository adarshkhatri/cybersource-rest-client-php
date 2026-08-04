# KeyUpdate1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keyName** | **string** | Unique name for the key | [optional] 
**encryptionKey** | **string** | Base64-encoded public key (JWE key wrap public key) | [optional] 
**algorithm** | **string** | JWE key wrap algorithm  Possible values: - RSA-OAEP - RSA-OAEP-256 - RSA-OAEP-384 - RSA-OAEP-512 | [optional] 
**encryptionType** | **string** | JWE content encryption algorithm  Possible values: - A256GCM - A128GCM - C20P - A256CBC-HS512 - A128CBC-HS256 - A256CCM - A128CCM | [optional] 
**expirationDate** | [**\DateTime**](\DateTime.md) | Key expiration date in UTC | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


