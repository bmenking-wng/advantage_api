# SubscriptionUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**renewal_policy_code** | **string** | The new renewal flag.  You must supply a credit card or bank account to use   automatic charge renewals (C). | [optional] 
**auto_charge_card** | [**\Swagger\Client\Model\CreditCardPaymentRequest**](CreditCardPaymentRequest.md) | The credit card to use for automatic renewals. | [optional] 
**auto_charge_direct_debit_account** | [**\Swagger\Client\Model\DirectDebitPaymentRequest**](DirectDebitPaymentRequest.md) | The direct debit account to use for automatic renewals. | [optional] 
**auto_renew_chain** | [**\Swagger\Client\Model\AutoRenewChain**](AutoRenewChain.md) | The Auto-renew chain information to use for automatic renewals | [optional] 
**promotion_code** | **string** | Renewal promotion pode | [optional] 
**reason_code** | **string** | Reason code to use for automatic renewals | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


