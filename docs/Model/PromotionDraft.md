# PromotionDraft

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_code** | **string** | The campaign code to identify the highest level of marketing and promotion tracking. | [optional] 
**initiator** | **string** | The initiator of the promotion. | [optional] 
**date_sent** | [**\DateTime**](\DateTime.md) | The date the promotion was sent to consumers. | [optional] 
**effective_to** | [**\DateTime**](\DateTime.md) | Date, up to which, the promotion is valid | [optional] 
**effective_from** | [**\DateTime**](\DateTime.md) | Date, from which, the promotion is valid | [optional] 
**offer_item_numbers** | **string[]** | The item numbers of the items included in the promotion | [optional] 
**offer_item_attributes** | [**\Swagger\Client\Model\OfferItemAttributes[]**](OfferItemAttributes.md) | The collection of OfferItemAttributes, defining the allowed attributed for each offer item. | [optional] 
**offer_item_choices** | [**\Swagger\Client\Model\OfferItemChoices[]**](OfferItemChoices.md) | The choices available for the offer items, based on the specified attributes. | [optional] 
**id** | **string** | Promotion Draft ID | [optional] 
**promotion_code** | **string** | The promotion code to identify the new promotion. | [optional] 
**promotion_name** | **string** | The name of the promotion. | [optional] 
**offer_code** | **string** | The offer code to identify the promotion offer. | [optional] 
**offer_name** | **string** | The name of the promotion offer. | [optional] 
**is_create_offer** | **bool** | Should an offer also be created? | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


