# OrderShippingInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_return** | **bool** | Is this a return order? A return order is generated to track products that are returned by the customer. | [optional] 
**is_rush_ship** | **bool** | Is this order flagged to be shipped immediately? | [optional] 
**requested_ship_via_code** | **string** | The requested shipping method for the order. | [optional] 
**is_free_shipping** | **bool** | Do all items in this order receive free shipping? | [optional] 
**ship_date** | [**\DateTime**](\DateTime.md) | The requested date for the order to be picked for shipping. | [optional] 
**actual_ship_date** | [**\DateTime**](\DateTime.md) | The actual ship date for the order. | [optional] 
**is_post_shipped** | **bool** | Has the order already been shipped? | [optional] 
**is_drop_shipped** | **bool** | Has the order shipped from the printer? | [optional] 
**actual_ship_via_code** | **string** | The actual shipping method for the order. | [optional] 
**ship_through_customer_number** | **string** | The customer number of the freight forwarder that will receive the shipment to distribute to the ship-to. | [optional] 
**ship_to_count** | **int** | The number of distinct ship-to addresses. | [optional] 
**tracking_information** | [**\Swagger\Client\Model\OrderTrackingInformation[]**](OrderTrackingInformation.md) | Tracking information for the various shipments for the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


