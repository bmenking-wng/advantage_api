# PaymentDefaults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_checks** | **bool** | True if check payments are accepted as payment for an order | [optional] 
**accept_credit_cards** | **bool** | True if credit cards are accepted as payment for an order | [optional] 
**valid_credit_card_payment_methods** | [**\Swagger\Client\Model\CreditCardPaymentMethod[]**](CreditCardPaymentMethod.md) | Credit card payment codes valid to pay for an order | [optional] 
**accept_direct_debits** | **bool** | True if direct debit payments are accepted as payment for an order | [optional] 
**valid_direct_debit_payment_methods** | [**\Swagger\Client\Model\DirectDebitPaymentMethod[]**](DirectDebitPaymentMethod.md) | Direct debit payment codes valid to pay for an order | [optional] 
**accept_digital_wallets** | **bool** | True if digital wallet payments are accepted as payment for an order | [optional] 
**valid_digital_wallet_payment_methods** | [**\Swagger\Client\Model\DigitalWalletPaymentMethod[]**](DigitalWalletPaymentMethod.md) | Digital wallet payment codes valid to pay for an order | [optional] 
**accept_gift_certificates** | **bool** | True if gift certificates are accepted as payment for an order | [optional] 
**accept_miscellaneous_credits** | **bool** | True if miscellaneous credits are accepted as payment for an order | [optional] 
**accept_available_credits** | **bool** | True if adjustment credits are accepted as payment for an order | [optional] 
**available_credits** | [**\Swagger\Client\Model\Credit[]**](Credit.md) | Credits available to be applied to an order | [optional] 
**installment_billing_code** | **string** | The default installment billing code | [optional] 
**saved_payments** | [**\Swagger\Client\Model\SavedPayment[]**](SavedPayment.md) | Saved electronic payments available to pay for an order | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


