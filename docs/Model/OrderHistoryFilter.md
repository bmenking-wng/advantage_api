# OrderHistoryFilter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**search** | **string** | The generic search argument. (Typically from a search text box). This term will be compared to several   fields on the order. | [optional] 
**begin_date** | [**\DateTime**](\DateTime.md) | The beginning date. Only orders placed after this date will be returned. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date. Only orders placed before this date will be returned. | [optional] 
**exclude_backorder_fufillment** | **bool** | Exclude backorder-fulfillment orders | [optional] 
**exclude_premium_fill** | **bool** | Exclude premium-fill orders | [optional] 
**membership_organization** | **string** | Membership organization to filter by | [optional] 
**owning_organizations** | **string[]** | Owning organizations to filter by | [optional] 
**is_posted** | **bool** | Order&#39;s posting status. Filter orders based on whether or not  the order is posted. | [optional] 
**has_product_order_line** | **bool** | Filter orders based on whether or not the order has   a product order line. | [optional] 
**is_in_status_that_allows_modifications** | **bool** | Filter orders based on whether or not the order  is in a status that allows further modification | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


