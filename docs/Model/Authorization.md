# Authorization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the authorized product. | [optional] 
**item_number** | **string** | Item number of the authorized product. | [optional] 
**subscription_id** | **string** | The ID of the subscription providing the authorization.    For an access item this will be the agreement ID. | [optional] 
**host_code** | **string** | Content host code, applicable only to access items. | [optional] 
**quantity_ordered** | **int** | Total quantity ordered. | [optional] 
**quantity_remaining** | **int** | Quantity remaining. | [optional] 
**starts** | [**\DateTime**](\DateTime.md) | Date and time authorization began. | [optional] 
**expires** | [**\DateTime**](\DateTime.md) | Date and time authorization expires. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


