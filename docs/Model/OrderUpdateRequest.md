# OrderUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_via_code** | **string** | Populate this property to set the shipping method for all single-sale (PRO) physical goods on the order.    If a shipping rule applies to this order then the ship via will be validated against the shipping rule and   the associated freight override will be applied.  If the order is later changed the shipping  rule validation and freight override will not be applied again. | [optional] 
**response_settings** | [**\Swagger\Client\Model\OrderGetSettings**](OrderGetSettings.md) | Use the ResponseSettings to indicate the level of order detail to include the response to this update request.  If the ResponseSettings property is omitted from the request then an empty message is returned. | [optional] 
**po_number** | **string** | Populate this property to set the PO number on the order. | [optional] 
**ship_date** | [**\DateTime**](\DateTime.md) | Populate this property to set the shipping date for all single-sale (PRO) physical goods on the order. | [optional] 
**line_updates** | [**\Swagger\Client\Model\OrderLineUpdateRequest[]**](OrderLineUpdateRequest.md) | Populate this property to specify a collection of order lines on the order  to update and what type of update to do. | [optional] 
**new_lines** | [**\Swagger\Client\Model\OrderLineIn[]**](OrderLineIn.md) | Populate this property  to specify a collection of order lines to add to the order. | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Demographic field values to store on the order | [optional] 
**update_payments** | **bool** | Whether to attempt to update the initial payment on the order to the new total. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


