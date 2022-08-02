# PromotionUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The first line of the name of the promotion. | [optional] 
**name2** | **string** | The second line of the name of the promotion. | [optional] 
**date_sent** | [**\DateTime**](\DateTime.md) | The date the promotion was sent to consumers. | [optional] 
**effective_to** | [**\DateTime**](\DateTime.md) | Date, up to which, the promotion is valid | [optional] 
**effective_from** | [**\DateTime**](\DateTime.md) | Date, from which, the promotion is valid | [optional] 
**initiator** | **string** | The initiator of the promotion. | [optional] 
**creative_key** | [**\Swagger\Client\Model\PromotionCreativeKey**](PromotionCreativeKey.md) | Information to uniquely identify the promotion creative associated with this promotion | [optional] 
**value_list** | **bool** | Determines if value will be displayed in value list for  promotion items | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


