# ProductOrderLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bookclub_shipment_frequency** | **int** | Shipment frequency, the number of days between shipments. | [optional] 
**item_description1** | **string** | The first name, usually the item name 1 (e.g. title) of the product ordered. | [optional] 
**item_description2** | **string** | The second name, usually the item name 2 (e.g. author) of the product ordered. | [optional] 
**item_description3** | **string** | The third name , usually the item name 3 (e.g. ISBN) of the product ordered. | [optional] 
**inventory_status** | **string** | Product inventory status | [optional] 
**quantity_backordered** | **int** | The quantity placed on backorder. When the product is ready to ship,  a new \&quot;backorder fill\&quot; order is created track the fulfillment of the back-ordered items. | [optional] 
**quantity_lost** | **int** | The quantity of lost sales.  If the product is out of stock and cannot be back-ordered  then it is considered a lost sale. | [optional] 
**quantity_remaining** | **int** | The quantity remaining to be fulfilled | [optional] 
**quantity_returned** | **int** | The quantity returned | [optional] 
**quantity_shipped** | **int** | The quantity shipped, which is incremented when the inventory is available.  It does not indicate that the product has actually shipped from the warehouse.  It indicates that the product has shipped or is in the process of shipping. | [optional] 
**requested_ship_via_code** | **string** | The requested shipping method. | [optional] 
**actual_ship_via_code** | **string** | The actual shipping method. | [optional] 
**shipping_sequence** | **string** | Identifies which shipment contained this order line. | [optional] 
**starts_bookclub_participation** | **bool** | Should the current inventory order line result in a new book club series? | [optional] 
**stock_status_code** | **string** | The current status of the item in the inventory (out of stock, unavailable, etc.) | [optional] 
**is_insert** | **bool** | Is the current PRO order line an insert?  Inserts are free items added to qualifying orders. | [optional] 
**is_canceled** | **bool** | Is the current PRO order line canceled? | [optional] 
**manuscript_number** | **string** | The manuscript number, which is a means to identify an RPS article. | [optional] 
**product_format_code** | **string** | The media format code (hardcover, CD, etc.) | [optional] 
**price_code** | **string** | The price code used when determining the price to be charged for this line. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


