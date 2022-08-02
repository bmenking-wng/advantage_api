# ConvertCartToOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_to_customer_number** | **string** | The customer number of the bill-to on the order. Leave blank (\&quot;\&quot;) to use the value already set   on the Advantage shopping cart. | [optional] 
**ship_to_customer_number** | **string** | The customer number of the ship-to on the order. Leave blank (\&quot;\&quot;) to use the value already set     on the Advantage shopping cart. | [optional] 
**currency_code** | **string** | The billing currency code to use for the Advantage order. Leave blank (\&quot;\&quot;) to use the value already  set on the Advantage shopping cart. | [optional] 
**bill_to_address_code** | **string** | The Address code for the bill-to address. Leave blank (\&quot;\&quot;) to use the value already set on the Advantage   shopping cart. | [optional] 
**ship_to_address_code** | **string** | The Address code for the ship-to address. Leave blank (\&quot;\&quot;) to use the value already set on the Advantage   shopping cart. | [optional] 
**promotion_code** | **string** | The promotion code for the order. Leave blank (\&quot;\&quot;) to use the value already set on the Advantage shopping   cart. | [optional] 
**free_shipping** | **bool** | Whether or not the order will charge shipping. Omit to assume default (false). | [optional] 
**discount_percent** | **double** | Populate to apply an order-wide discount. Omit to assume default (0%). | [optional] 
**delete_cart** | **bool** | Whether or not to delete the cart, once the order is successfully created. Omit to assume default (true). | [optional] 
**sales_rep_code** | **string** | The Sales Rep who will get credit for the order. Leave blank (\&quot;\&quot;) to use the value already set on the   Advantage shopping cart. | [optional] 
**installment_billing_code** | **string** | If order is to be paid via installments, this is the Advantage installment billing code. Leave blank (\&quot;\&quot;)   or omit to use the value already set on the Advantage shopping cart. | [optional] 
**purge_pending_orders** | **bool** | Whether or not to purge other pending orders with the same bill-to as this order-to-be. Omit to use   default (true). | [optional] 
**referred_by_customer_number** | **string** | The customer number of the referring customer. Leave blank (\&quot;\&quot;) or omit to use the value already set on   the Advantage shopping cart. | [optional] 
**order_source_code** | **string** | The Advantage order source code of the order.  Omit to use the default. | [optional] 
**billing_organization_code** | **string** | The billing organization of the order.  Leave blank or omit to use the default. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


