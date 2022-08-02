# ShoppingCart

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart_id** | **string** | The unique ID for the cart. | [optional] 
**bill_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The bill-to for the cart.  (Optional.  The bill-to need not be identified until   the cart is converted to an order.) | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The primary (default) ship-to for the cart.  Each order line may have a different ship-to.  (Optional.  The ship-to need not be identified until the cart is converted to an order.) | [optional] 
**promotion_code** | **string** | The promotion code applied to the cart. | [optional] 
**coupon_codes** | **string[]** | The coupon code applied to the cart. | [optional] 
**currency_code** | **string** | The currency code used to bill for the cart. | [optional] 
**cart_total** | **double** | The total cost of the shopping cart. | [optional] 
**order_source_code** | **string** | The source for the order. | [optional] 
**lines** | [**\Swagger\Client\Model\ShoppingCartLine[]**](ShoppingCartLine.md) | The lines in the shipping cart. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


