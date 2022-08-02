# PremiumSetDetailUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfill_at** | **string** | Specifies when the premium earned should be shipped. | [optional] 
**assembly_package** | **string** | The assembly package code identifies a particular combination of forms, materials and promotions for a shipment. | [optional] 
**select_only_once** | **bool** | The Select Only Once flag controls whether all or only the first matching premium set sequences are fulfilled. | [optional] 
**premiums** | [**\Swagger\Client\Model\PremiumSetDetailItem[]**](PremiumSetDetailItem.md) | The list of premium items awarded for this premium set. Up to four may be specified.  Any items in this list that have an item number will be completely overwritten. | [optional] 
**earning_criteria** | [**\Swagger\Client\Model\PremiumSetEarningCriteria**](PremiumSetEarningCriteria.md) | Information for how the premium set will be earned. | [optional] 
**subscription_adjustments** | [**\Swagger\Client\Model\PremiumSetSubscriptionAdjustments**](PremiumSetSubscriptionAdjustments.md) | Information for subscription adjustments on the premium set. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


