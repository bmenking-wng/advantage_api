# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_number** | **string** | The item number of the product. | [optional] 
**name** | **string** | The name of the product. | [optional] 
**product_type** | **string** | The type of product. | [optional] 
**image_url_large** | **string** | The URL for the large image of the product. | [optional] 
**image_url_small** | **string** | The URL for the small image of the product. | [optional] 
**sales_analysis_category_code** | **string** | The category code assigned to the product for sales analysis. | [optional] 
**sales_analysis_summary_code** | **string** | The summary code assigned to the product&#39;s sales analysis category. | [optional] 
**product_family** | **string** | The product family of the product. | [optional] 
**product_category_code** | **string** | The product category of the product. | [optional] 
**publication_date** | [**\DateTime**](\DateTime.md) | The publication date of the product. | [optional] 
**narratives** | [**\Swagger\Client\Model\Narrative[]**](Narrative.md) | The narratives for the product. | [optional] 
**keywords** | **string[]** | The keywords related to the product. | [optional] 
**subjects** | [**\Swagger\Client\Model\ProductSubject[]**](ProductSubject.md) | The subject categories the product falls under. | [optional] 
**product_details** | [**\Swagger\Client\Model\OneOffProduct**](OneOffProduct.md) | Information specific to a one-off product. | [optional] 
**subscription_details** | [**\Swagger\Client\Model\SubscriptionProduct**](SubscriptionProduct.md) | Information specific to a subscription product. Null if the product is not a subscription. | [optional] 
**access_details** | [**\Swagger\Client\Model\AccessProduct**](AccessProduct.md) | Information specific to an access product. Null if the product is not a access product. | [optional] 
**conference_details** | [**\Swagger\Client\Model\ConferenceProduct**](ConferenceProduct.md) | Information specific to a conference product. Null if the product is not a conference product. | [optional] 
**package_details** | [**\Swagger\Client\Model\PackageProduct**](PackageProduct.md) | Information specific to a package. Null if the product is not a package. | [optional] 
**back_issue_details** | [**\Swagger\Client\Model\BackIssueProduct**](BackIssueProduct.md) | Information specific to a back issue product. Null if the product is not a back issue product. | [optional] 
**contributors** | [**\Swagger\Client\Model\Contributor[]**](Contributor.md) | Information on the Contributors for this product | [optional] 
**association_details** | [**\Swagger\Client\Model\AssociationProduct**](AssociationProduct.md) | Information specific to an association membership. Null if the product is not an association membership. | [optional] 
**profile_id** | **string** | ID for the profile associated with this product | [optional] 
**profile** | [**\Swagger\Client\Model\Profile**](Profile.md) | Profile information for this product | [optional] 
**cost_center** | **string** | The Cost Center of the Product | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


