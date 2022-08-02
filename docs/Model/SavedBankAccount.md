# SavedBankAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**electronic_payment_id** | **string** | The unique payment identifier. | [optional] 
**payment_method** | [**\Swagger\Client\Model\DirectDebitPaymentMethod**](DirectDebitPaymentMethod.md) | The direct debit payment method. | [optional] 
**bank_id** | **string** | The identifier for the bank that holds the account. | [optional] 
**account_number** | **string** | The number of the account. | [optional] 
**account_type** | **string** | The type of account (checking or savings). | [optional] 
**is_valid_for_future_payments** | **bool** | Is this debit valid for use in the future? | [optional] 
**is_web_default** | **bool** | Is this card a default for orders coming from the web? | [optional] 
**date_last_used** | [**\DateTime**](\DateTime.md) | The date the direct debit was last used | [optional] 
**date_added** | [**\DateTime**](\DateTime.md) | The date the direct debit was added | [optional] 
**nickname** | **string** | Affiliate nickname of the direct debit | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


