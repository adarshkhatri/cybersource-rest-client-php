# PtsV2ModifyBillingAgreementPost201ResponseAgreementInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier for the mandate. | [optional] 
**dateSigned** | **string** | Date the mandate has been signed.  Format YYYYMMdd | [optional] 
**dateCreated** | **string** | Date the mandate has been created.  Format YYYYMMdd | [optional] 
**dateRevoked** | **string** | Date the mandate has been revoked.  Format YYYYMMdd | [optional] 
**type** | **string** | Identifies the type of schedule as either recurring, one-off, split or usage.  Possible values: - recurring - oneoff - split - usage | [optional] 
**frequency** | **string** | Regularity with which the event occurs.  Possible values: - annual - monthly - quarterly - semiannual - weekly - daily - adhoc - intraday - fortnightly | [optional] 
**encodedHtml** | **string** | Base64 encoded html string | [optional] 
**encodedHtmlPopup** | **string** | Base64 encoded popup html string | [optional] 
**url** | **string** | URL for redirecting the customer for creating the mandate. | [optional] 
**transactionId** | **string** | The Billing Agreement ID returned by processor (PayPal). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


