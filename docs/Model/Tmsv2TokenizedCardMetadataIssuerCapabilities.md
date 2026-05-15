# Tmsv2TokenizedCardMetadataIssuerCapabilities

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deviceBindingSupported** | **bool** | Indicates if the issuer supports device binding. | [optional] 
**cardholderVerificationSupported** | **bool** | Indicates if the issuer participates in step-up authentication that requires cardholder verification. | [optional] 
**trustedBeneficiaryEnrollmentSupported** | **bool** | Indicates if the issuer supports trusted beneficiary enrollment. e.g allowing cardholders to designate trusted merchants or payment recipients that can be exempt from step-up authentication. | [optional] 
**delegatedAuthenticationSupported** | **bool** | Indicates if the issuer supports delegated authentication. e.g allowing approved thrird parties to perform authentication on behalf of the issuer. | [optional] 
**oboDeviceBindingSupported** | **bool** | Indicates if the issuer supports on-behalf-of device binding. e.g allowing approved third parties to perform device binding on behalf of the issuer. | [optional] 
**tokenLcmNotificationsSupported** | **bool** | Indicates if the issuer supports receiving token lifecycle management notifications. e.g receiving updates on changes to the token&#39;s status or attributes. | [optional] 
**fpanLcmNotificationsSupported** | **bool** | Indicates if the issuer supports receiving PAN lifecycle management notifications. e.g receiving updates on changes to the underlying card&#39;s status or attributes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


