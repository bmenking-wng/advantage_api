# CreditCardAddRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_vault_token** | **string** | Card vault token value. Provide this value only if the card was already deposited into Card Vault. | [optional] 
**token** | **string** | Card vendor token value. Provide this value only if the card was already tokenized outside Advantage with the card vendor. | [optional] 
**number** | **string** | The card number, or card mask if supplying Token. | [optional] 
**payment_method_code** | **string** | The Advantage payment code for the type of card to use. | [optional] 
**expire_month** | **int** | Card expiration month. | [optional] 
**expire_year** | **int** | Card expiration year (four digits). | [optional] 
**start_year** | **string** | The card start year (required for some types of credit cards) | [optional] 
**start_month** | **string** | The card start month (required for some types of credit cards) | [optional] 
**issue_number** | **string** | The card issue number (required for some types of credit cards) | [optional] 
**save_for_future_payments** | **bool** | Is this card valid for future use? | [optional] 
**is_web_default** | **bool** | Is this card a default for orders from the web? | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


