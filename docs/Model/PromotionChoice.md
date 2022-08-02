# PromotionChoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_number** | **string** | A product item number. | [optional] 
**currency_code** | **string** | Billing currency code. | [optional] 
**promotion_code** | **string** | The promotion code that this choice belongs to. | [optional] 
**choice_code** | **string** | The promotion choice code. | [optional] 
**name** | **string** | The name of the promotion choice. | [optional] 
**narrative** | **string** | The narrative of the choice. | [optional] 
**preference** | **int** | The preference level (sort order) of the promotion choice. | [optional] 
**questionnaire_code** | **string** | The code for the extended demographics questionnaire. | [optional] 
**value_list_flag** | **string** | Determines if value will be displayed in value list for promotion items. | [optional] 
**price** | **double** | The price of the product using this promotion choice. This may include discounts | [optional] 
**unit_price** | **double** | The price on this promotion choice | [optional] 
**price_tiers** | [**\Swagger\Client\Model\PriceTier[]**](PriceTier.md) | Price tiers | [optional] 
**web_bill_me_allowed** | **string** | Is bill me allowed from the web? | [optional] 
**premium_set_code** | **string** | A product that a customer can receive for free and what must be done to earn it. | [optional] 
**installment_billing_code** | **string** | The installment billing terms used. | [optional] 
**society_code** | **string** | A professional association which may be the source of content and typically involves membership levels and fees. | [optional] 
**discount_percent** | **double** | The percentage discount is applied to the item price.  A 40% discount is entered as 40. | [optional] 
**discount_combination_code** | **string** | Indicates how to combine this discount with other discounts. | [optional] 
**subscription_type_code** | **string** | A code for describing a group of similar subscriptions. | [optional] 
**reusable_choice_code** | **string** | The code identifying the module-specific reusable choice that this promotion choice pulls it&#39;s defaults from. | [optional] 
**included_amount** | **double** | The amount of a subscription charge that is for a premium&#39;s postage. | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Demographic values (from the PMI-DMO1, PMI-DMO2, etc partitions) to store on the  promotion item record. | [optional] 
**product_defaults** | [**\Swagger\Client\Model\ProductPromotionItemDefaults**](ProductPromotionItemDefaults.md) | PRO specific promotion choice defaults. | [optional] 
**subscription_defaults** | [**\Swagger\Client\Model\SubscriptionPromotionItemDefaults**](SubscriptionPromotionItemDefaults.md) | Cir specific promotion choice defaults. | [optional] 
**access_defaults** | [**\Swagger\Client\Model\AccessPromotionItemDefaults**](AccessPromotionItemDefaults.md) | AMB specific promotion choice defaults. | [optional] 
**conference_defaults** | [**\Swagger\Client\Model\ConferencePromotionItemDefaults**](ConferencePromotionItemDefaults.md) | CEM specific promotion choice defaults. | [optional] 
**association_defaults** | [**\Swagger\Client\Model\AssociationPromotionItemDefaults**](AssociationPromotionItemDefaults.md) | AMM specific promotion choice defaults. | [optional] 
**accept_available_credits** | **bool** | Value of Available Credit Valid | [optional] 
**accept_checks** | **bool** | Value of Checks Valid | [optional] 
**accept_credit_cards** | **bool** | Value of Credit Card Payments valid | [optional] 
**accept_direct_debits** | **bool** | Value of Direct Debit Payments valid | [optional] 
**accept_digital_wallets** | **bool** | Value of Digital Wallet Payments valid | [optional] 
**accept_gift_certificates** | **bool** | Value of Gift Certificates Valid | [optional] 
**accept_misc_credits** | **bool** | Value of Misc Credits Valid | [optional] 
**geographic_prices** | [**\Swagger\Client\Model\GeographicPrice[]**](GeographicPrice.md) | Geographic Prices | [optional] 
**components** | [**\Swagger\Client\Model\PromotionChoice[]**](PromotionChoice.md) | Package Components | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


