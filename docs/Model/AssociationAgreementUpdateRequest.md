# AssociationAgreementUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | The profile id for an association membership. | [optional] 
**customer_list_codes** | **string[]** | The list codes of the customer lists the customer should be added to as part of their membership. | [optional] 
**structure_node_id** | **string** | Association structure node ID | [optional] 
**is_included_in_directory** | **bool** | Specifies whether the association member allowed to be listed in the directory. | [optional] 
**optional_components** | [**\Swagger\Client\Model\AssociationOptionalComponent[]**](AssociationOptionalComponent.md) | The complete list of optional components to be included as part of the   membership agreement.   If populated:   1. Any optional components not on the membership will be added   2. Any optional components on the membership, but not on the list, will be removed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


