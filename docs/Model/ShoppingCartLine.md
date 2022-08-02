# ShoppingCartLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_id** | **int** | The identifier for the shopping cart line, unique within the cart. | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The ship-to for this order line.  (Optional.  The ship-to need not be identified until  the cart is converted to an order.  The line-level ship-to can default from the cart-level  ship-to when the cart is converted to an order.) | [optional] 
**item_number** | **string** | The item number identifying the product. | [optional] 
**product_name** | **string** | The name of the product. | [optional] 
**product_type** | **string** | The type of the product. | [optional] 
**promotion_code** | **string** | The promotion code applied to the item. | [optional] 
**promotion_choice** | [**\Swagger\Client\Model\PromotionChoice**](PromotionChoice.md) | The promotion choice. | [optional] 
**price** | **double** | The unit price for the item. | [optional] 
**quantity** | **int** | The quantity of this particular item. | [optional] 
**profile_id** | **string** | The unique identifier for the profile storing the question responses associated with this item. | [optional] 
**total_discount_percent** | **double** | The total percentage that the item&#39;s price has been discounted. | [optional] 
**discounts** | [**\Swagger\Client\Model\ItemDiscount[]**](ItemDiscount.md) | The discount source codes, indicating which discounts were applied to determine this item&#39;s price. | [optional] 
**access** | [**\Swagger\Client\Model\ShoppingCartAccessLine**](ShoppingCartAccessLine.md) | Information about an access (AMB) shopping cart line | [optional] 
**donation** | [**\Swagger\Client\Model\ShoppingCartDonationLine**](ShoppingCartDonationLine.md) | Information about a donation (DNT) shopping cart line | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


