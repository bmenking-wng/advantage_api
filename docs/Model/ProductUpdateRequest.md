# ProductUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the product. | [optional] 
**product_family** | **string** | The product family of the product. | [optional] 
**product_category_code** | **string** | The product category of the product. | [optional] 
**publication_date** | [**\DateTime**](\DateTime.md) | The product&#39;s publication date. | [optional] 
**narratives** | [**\Swagger\Client\Model\Narrative[]**](Narrative.md) | The narratives for the product. | [optional] 
**product_details** | [**\Swagger\Client\Model\OneOffProductUpdateRequest**](OneOffProductUpdateRequest.md) | Information specific to a one-off product. | [optional] 
**subscription_details** | [**\Swagger\Client\Model\SubscriptionProductUpdateRequest**](SubscriptionProductUpdateRequest.md) | Information specific to a subscription product. Null if the product is not a subscription. | [optional] 
**access_details** | [**\Swagger\Client\Model\AccessProductUpdateRequest**](AccessProductUpdateRequest.md) | Information specific to an access product. Null if the product is not a access product. | [optional] 
**conference_details** | [**\Swagger\Client\Model\ConferenceProductUpdateRequest**](ConferenceProductUpdateRequest.md) | Information specific to a conference product. Null if the product is not a conference product. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


