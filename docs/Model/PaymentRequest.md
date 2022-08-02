# PaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_credit** | [**\Swagger\Client\Model\AvailableCreditPaymentRequest**](AvailableCreditPaymentRequest.md) | Use the AccountCredit property to control the application of available credits for   the customer.  Leave AccountCredit null to skip the application of available credits. | [optional] 
**credit_cards** | [**\Swagger\Client\Model\CreditCardPaymentRequest[]**](CreditCardPaymentRequest.md) | Information for a credit card payment. | [optional] 
**bank_accounts** | [**\Swagger\Client\Model\DirectDebitPaymentRequest[]**](DirectDebitPaymentRequest.md) | Information for a direct debit payment. | [optional] 
**checks** | [**\Swagger\Client\Model\CheckPaymentRequest[]**](CheckPaymentRequest.md) | Information for a check payment. | [optional] 
**digital_wallets** | [**\Swagger\Client\Model\DigitalWalletPaymentRequest[]**](DigitalWalletPaymentRequest.md) | Information for a digital wallet payment. | [optional] 
**gift_certificates** | [**\Swagger\Client\Model\GiftCertificatePaymentRequest[]**](GiftCertificatePaymentRequest.md) | Information for a gift certificate payment. | [optional] 
**installment_billing_code** | **string** | Code identifying installment billing terms | [optional] 
**installment_billing** | [**\Swagger\Client\Model\InstallmentBillingPaymentRequest**](InstallmentBillingPaymentRequest.md) | Installment Billing Information | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


