# SavedCreditCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | The credit card token | [optional] 
**card_mask** | **string** | The masked credit card number. | [optional] 
**payment_method** | [**\Swagger\Client\Model\CreditCardPaymentMethod**](CreditCardPaymentMethod.md) | i.e. Visa or MasterCard. | [optional] 
**expire_month** | **int** | Card expiration month. | [optional] 
**expire_year** | **int** | Card expiration year (four digits). | [optional] 
**is_valid_for_future_payments** | **bool** | Is this card valid for future use? | [optional] 
**electronic_payment_id** | **string** | The electronic payment ID which uniquely identifies this card.  To use the saved card on a new order,   or to update the expire date, use this payment ID to identify the card. | [optional] 
**is_linked_to_auto_renewal** | **bool** | Whether this card is used for any auto-renewals. | [optional] 
**is_web_default** | **bool** | Is this card a default for orders coming from the web? | [optional] 
**date_last_used** | [**\DateTime**](\DateTime.md) | The date the credit card was last used | [optional] 
**date_added** | [**\DateTime**](\DateTime.md) | The date the credit card was added | [optional] 
**nickname** | **string** | Affiliate nickname of the card | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


