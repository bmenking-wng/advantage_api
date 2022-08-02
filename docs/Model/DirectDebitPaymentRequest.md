# DirectDebitPaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**electronic_payment_id** | **string** | The unique identifier for a saved customer bank account. | [optional] 
**direct_debit_id** | **string** | The unique identifier for a direct debit request | [optional] 
**bank_account** | [**\Swagger\Client\Model\BankAccountCreateRequest**](BankAccountCreateRequest.md) | Information for adding a direct debit payment method. | [optional] 
**amount** | **double** | The amount of the payment. | [optional] 
**direct_debit_prompt_details** | [**\Swagger\Client\Model\DirectDebitDetails**](DirectDebitDetails.md) | Branch Name/address, account origin and consent date | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


