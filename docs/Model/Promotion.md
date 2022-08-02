# Promotion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**promotion_code** | **string** | The code identifying the promotion. | [optional] 
**campaign_code** | **string** | The campaign code to identify the highest level of marketing and promotion tracking. | [optional] 
**offer_code** | **string** | The offer code to identify the promotion offer, which handles setup and defaulting for the promotion. | [optional] 
**name** | **string** | The name of the promotion. | [optional] 
**name2** | **string** | The second name of the promotion. | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) | The date that the promotion expires. | [optional] 
**url** | **string** | The URL for the promotion landing page. | [optional] 
**image_url** | **string** | The URL for the image associated with the promotion. | [optional] 
**is_active** | **bool** | Is this an active promotion? | [optional] 
**is_auto_order** | **bool** | Does this promotion allow for automatic generation of orders?   If so, an order will be automatically generated with order lines for each promotional item on the promotion. | [optional] 
**is_line_select** | **bool** | Is this a line select promotion? If so, the user selects the promotional items to receive. | [optional] 
**date_sent** | [**\DateTime**](\DateTime.md) | The date the promotion was sent to consumers. | [optional] 
**effective_to** | [**\DateTime**](\DateTime.md) | Date, up to which, the promotion is valid. | [optional] 
**effective_from** | [**\DateTime**](\DateTime.md) | Date, from which, the promotion is valid. | [optional] 
**initiator** | **string** | The initiator of the promotion. | [optional] 
**products** | [**\Swagger\Client\Model\PromotionProduct[]**](PromotionProduct.md) | Products that are included on the promotion with promotion-specific choices. | [optional] 
**narratives** | [**\Swagger\Client\Model\Narrative[]**](Narrative.md) | Promotion narratives are text blocks describing the promotion. | [optional] 
**valid_cards** | [**\Swagger\Client\Model\CreditCardPaymentMethod[]**](CreditCardPaymentMethod.md) | Valid credit card payment methods. | [optional] 
**valid_direct_debits** | [**\Swagger\Client\Model\DirectDebitPaymentMethod[]**](DirectDebitPaymentMethod.md) | Valid direct debit payment methods. | [optional] 
**valid_digital_wallets** | [**\Swagger\Client\Model\DigitalWalletPaymentMethod[]**](DigitalWalletPaymentMethod.md) | Valid digital wallet payment methods | [optional] 
**installment_billing_code** | **string** | Installment Billing Code on the promotion if any | [optional] 
**web_bill_me_allowed** | **string** | Web bill-me status of the promotion | [optional] 
**creative_key** | [**\Swagger\Client\Model\PromotionCreativeKey**](PromotionCreativeKey.md) | Information to uniquely identify the promotion creative associated with this promotion | [optional] 
**quantity_mailed** | **int** | Quantity mailed from the promotion | [optional] 
**available_credits_valid** | **bool** | Are available credits valid for this promotion? | [optional] 
**credit_card_payments_valid** | **bool** | Are credit card payments valid for this promotion? | [optional] 
**checks_valid** | **bool** | Are check payments valid for this promotion? | [optional] 
**direct_debit_payments_valid** | **bool** | Are direct debit payments valid for this promotion? | [optional] 
**digital_wallet_payments_valid** | **bool** | Are digital wallet payments valid for this promotion? | [optional] 
**gift_certificates_valid** | **bool** | Are gift certificate payments valid for this promotion? | [optional] 
**misc_credits_valid** | **bool** | Are misc credit payments valid for this promotion? | [optional] 
**valid_country_codes** | **string[]** | A list of Advantage country codes representing  the countries a ship to address can have to be   applicable for this promotion.  If empty, then all countries are valid. | [optional] 
**value_list** | **bool** | Determines if value will be displayed in value list for  promotion items | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


