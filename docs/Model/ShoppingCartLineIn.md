# ShoppingCartLineIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_id** | **int** | The line number. This identifies the shopping cart line. This value can not be changed in Advantage.   This property is only used to identify the line to apply changes to. | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The ship-to for this order line.  (Optional.  The ship-to need not be identified until  the cart is converted to an order.  The line-level ship-to can default from the cart-level  ship-to when the cart is converted to an order.) | [optional] 
**item_number** | **string** | The item number identifying the product. | [optional] 
**promotion_code** | **string** | The promotion code applied to the item. | [optional] 
**promotion_choice** | **string** | The promotion choice. | [optional] 
**quantity** | **int** | The quantity of this particular item. | [optional] 
**unit_price** | **double** | The override unit price. | [optional] 
**profile** | [**\Swagger\Client\Model\Profile**](Profile.md) | The optional profile element contains responses to a set of questions asked at order entry time.    Profiles are typically used to store customer demographic information for audited subscriptions or   custom inputs used for order fulfillment. | [optional] 
**subscription** | [**\Swagger\Client\Model\ShoppingCartSubscriptionLineIn**](ShoppingCartSubscriptionLineIn.md) | Information about a subscription (CIR) shopping cart line | [optional] 
**donation** | [**\Swagger\Client\Model\ShoppingCartDonationLine**](ShoppingCartDonationLine.md) | Information about a donation (DNT) shopping cart line | [optional] 
**association_structure_node_id** | **string** | The Association Structure Node Id indicates the structure node that an association member has selected.  The structure node is usually an association chapter. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


