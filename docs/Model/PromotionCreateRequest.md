# PromotionCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**promotion_code** | **string** | The promotion code to identify the new promotion. | [optional] 
**campaign_code** | **string** | The campaign code to identify the highest level of marketing and promotion tracking. | [optional] 
**offer_code** | **string** | The offer code to identify the promotion offer. | [optional] 
**is_active** | **bool** | Is the promotion available for use? | [optional] 
**name_line1** | **string** | The first line of the name of the promotion. | [optional] 
**name_line2** | **string** | The second line of the name of the promotion. | [optional] 
**initiator** | **string** | The initiator of the promotion. | [optional] 
**url** | **string** | The URL to direct to the promotion landing page. | [optional] 
**narratives** | [**\Swagger\Client\Model\Narrative[]**](Narrative.md) | Optional text describing a promotion, defined for each type of narrative (e.g. mobile, desktop). | [optional] 
**date_sent** | [**\DateTime**](\DateTime.md) | The date the promotion was sent to consumers. | [optional] 
**effective_to** | [**\DateTime**](\DateTime.md) | Date, up to which, the promotion is valid | [optional] 
**effective_from** | [**\DateTime**](\DateTime.md) | Date, from which, the promotion is valid | [optional] 
**creative_key** | [**\Swagger\Client\Model\PromotionCreativeKey**](PromotionCreativeKey.md) | Information to uniquely identify the promotion creative associated with this promotion | [optional] 
**value_list** | **bool** | Determines if value will be displayed in value list for  promotion items | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


