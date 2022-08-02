# PromotionChoiceIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the promotion choice. | [optional] 
**narrative** | **string** | The narrative of the choice. | [optional] 
**preference** | **int** | The preference of the promotion choice. | [optional] 
**questionnaire_code** | **string** | The code for the extended demographics questionnaire. | [optional] 
**value_list_flag** | **string** | Determines if value will be displayed in value list for promotion items. | [optional] 
**price** | **double** | Deprecated as of 2016.6, Use UnitPrice instead. | [optional] 
**unit_price** | **double** | The price of the product using this promotion choice. | [optional] 
**web_bill_me_allowed** | **string** | Is bill me allowed from the web? | [optional] 
**premium_set_code** | **string** | A product that a customer can receive for free and what must be done to earn it. | [optional] 
**installment_billing_code** | **string** | The installment billing terms used. | [optional] 
**society_code** | **string** | A professional association which may be the source of content and typically involves membership levels and fees. | [optional] 
**discount_percent** | **double** | The percentage discount is applied to the item price.  A 40% discount is entered as 40. | [optional] 
**discount_combination_code** | **string** | Indicates how to combine this discount with other discounts. | [optional] 
**subscription_type_code** | **string** | A code for describing a group of similar subscriptions. | [optional] 
**reusable_choice_code** | **string** | The code identifying the module-specific reusable choice that this promotion choice pulls its defaults from. | [optional] 
**is_reusable_choice_member_choice** | **bool** | True if the {Advantage.Rest.Models.PromotionChoiceIn.ReusableChoiceCode} is for a member choice | [optional] 
**included_amount** | **double** | The amount of a subscription charge that is for a premium&#39;s postage. | [optional] 
**price_code** | **string** | Price Code to be used on the promotion choice | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Demographic values saved on the promotion item record (CPNPMI-T). | [optional] 
**product_defaults** | [**\Swagger\Client\Model\ProductPromotionItemDefaultsIn**](ProductPromotionItemDefaultsIn.md) | PRO specific promotion choice defaults. | [optional] 
**subscription_defaults** | [**\Swagger\Client\Model\SubscriptionPromotionItemDefaultsIn**](SubscriptionPromotionItemDefaultsIn.md) | Cir specific promotion choice defaults. | [optional] 
**access_defaults** | [**\Swagger\Client\Model\AccessPromotionItemDefaultsIn**](AccessPromotionItemDefaultsIn.md) | AMB specific promotion choice defaults. | [optional] 
**conference_defaults** | [**\Swagger\Client\Model\ConferencePromotionItemDefaultsIn**](ConferencePromotionItemDefaultsIn.md) | CEM specific promotion choice defaults | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


