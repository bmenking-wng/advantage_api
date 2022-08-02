# OrderLineSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_currency_code** | **string** | Billing currency code. | [optional] 
**discount** | **double** | Order line discount amount. | [optional] 
**is_package_component** | **bool** | Is this a package component? | [optional] 
**is_premium** | **bool** | Is this order line a premium? | [optional] 
**item_number** | **string** | Item number of the product on the order line. | [optional] 
**line_number** | **int** | Order line ID | [optional] 
**net_discount** | **double** | Order line discount amount. | [optional] 
**net_sales_amount** | **double** | Order line sales amount. | [optional] 
**net_shipping_charges** | **double** | Order line shipping/postage charges. | [optional] 
**net_tax** | **double** | Order line tax amount. | [optional] 
**net_total_cost** | **double** | Net order line cost. | [optional] 
**order_number** | **string** | The Advantage order number. | [optional] 
**package_header_line_id** | **int** | Returns the line ID of the package header, or zero. | [optional] 
**product_name** | **string** | Product title. | [optional] 
**product_type** | **string** | Product type (e.g. CIR, PRO, CEM). | [optional] 
**promotion_choice** | [**\Swagger\Client\Model\PromotionChoiceSummary**](PromotionChoiceSummary.md) | Promotion choice. | [optional] 
**promotion_code** | **string** | Promotion/key code. | [optional] 
**quantity_ordered** | **int** | Quantity ordered. | [optional] 
**sales_amount_ordered** | **double** | Order line sales amount. | [optional] 
**sales_amount_shipped** | **double** | Order line sales amount. | [optional] 
**shipping_charges** | **double** | Order line shipping/postage charges. | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressSummary**](CustomerAddressSummary.md) | Ship-to customer | [optional] 
**tax** | **double** | Order line tax amount. | [optional] 
**total_cost** | **double** | Net order line cost. | [optional] 
**unit_price** | **double** | Price per quantity ordered. | [optional] 
**is_cancelled** | **bool** | Is the order line canceled? | [optional] 
**is_association_component** | **bool** | Is the order line a component of an association membership? | [optional] 
**operation_code** | **string** | Operation code for subscription order line. Blank for non-subscription order line. | [optional] 
**is_gift** | **bool** | True if the bill-to customer number does not match the ship-to customer number | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


