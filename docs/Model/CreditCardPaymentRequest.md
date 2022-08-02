# CreditCardPaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**electronic_payment_id** | **string** | The electronic payment ID which uniquely identifies a saved card to charge.  You must include either the CardId or the Card element. | [optional] 
**card** | [**\Swagger\Client\Model\CreditCardAddRequest**](CreditCardAddRequest.md) | The credit card to charge.  You must provide either the ElectronicPaymentId or the Card. | [optional] 
**security_code** | **string** | The card security code (CSC number). | [optional] 
**amount** | **double** | The amount of the payment. | [optional] 
**capture_id** | **string** | The card&#39;s capture ID. | [optional] 
**authorization_information** | [**\Swagger\Client\Model\CreditCardAuthorizationInformation**](CreditCardAuthorizationInformation.md) | The card&#39;s authorization info | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


