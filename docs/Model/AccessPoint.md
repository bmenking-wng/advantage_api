# AccessPoint

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_number** | **string** | The item number that represents this access item. | [optional] 
**product_name** | **string** | The access item title | [optional] 
**is_available_for_all_participants** | **bool** | true if access point is available for all participants. | [optional] 
**profile_id** | **string** | Profile ID, or blank if none. | [optional] 
**quantity_ordered** | **int** | Access point quantity. | [optional] 
**quantity_remaining** | **int** | Access point quantity remaining. | [optional] 
**rate_code** | **string** | AMB rate code. | [optional] 
**sequence_number** | **int** | Access point sequence number (ID). | [optional] 
**access_service_code** | **string** | Access service. | [optional] 
**pricing_method** | **string** | Pricing Method. | [optional] 
**package** | [**\Swagger\Client\Model\SubscriptionPackageSource**](SubscriptionPackageSource.md) | If this access point was ordered as part of a package then use this property  to trace the access point back to the package component. | [optional] 
**subscription_type** | **string** | Susbcription Type | [optional] 
**unit_price** | **double** | Unit Price. | [optional] 
**additional_discount** | **double** | Additional Discount. | [optional] 
**participants** | [**\Swagger\Client\Model\AccessPointParticipant[]**](AccessPointParticipant.md) | List of participants on this access point.  If empty, all agreement participants have access. | [optional] 
**amounts** | [**\Swagger\Client\Model\AccessPointCalculationResult**](AccessPointCalculationResult.md) | Sales Amounts for this access point | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


