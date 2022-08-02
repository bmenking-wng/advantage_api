# AssociationLevel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The level code | [optional] 
**name** | **string** | The level name | [optional] 
**description** | **string** | The level description | [optional] 
**questionnaire_code** | **string** | The questionnaire code | [optional] 
**third_party_benefits** | [**\Swagger\Client\Model\AssociationThirdPartyBenefit[]**](AssociationThirdPartyBenefit.md) | List of third-party benefits on both the association and level.  Third-party benefits may exist on both the association, across all levels, or on just the level.  This yields all third-party benefits that apply to this level. | [optional] 
**discount_benefits** | [**\Swagger\Client\Model\AssociationDiscountBenefit[]**](AssociationDiscountBenefit.md) | List of discount benefits on both the association and level  Discount benefits may exist on both the association, across all levels, or on just the level.  This yields all discount benefits that apply to this level. | [optional] 
**components** | [**\Swagger\Client\Model\AssociationLevelComponent[]**](AssociationLevelComponent.md) | List of association level components | [optional] 
**customer_lists** | [**\Swagger\Client\Model\AssociationLevelEmailList[]**](AssociationLevelEmailList.md) | List of list codes of email lists | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


