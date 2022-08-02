# OrderCreditCardPaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_number** | **string** | The Advantage customer number of the customer providing the payment. | [optional] 
**payment_method_code** | **string** | The credit card type (e.g., VISA) | [optional] 
**card_vault_token** | **string** | The Card Vault token (for tokens, the card mask must also be supplied). | [optional] 
**token** | **string** | The card token (for tokens, the card mask must also be supplied). | [optional] 
**card_number_or_mask** | **string** | The card number, or mask, if supplying token. | [optional] 
**expire_month** | **int** | The card expiration month (MM) | [optional] 
**expire_year** | **int** | The card expiration year (CCYY) | [optional] 
**amount** | **double** | The amount to pay on the order | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


