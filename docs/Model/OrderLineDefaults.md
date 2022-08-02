# OrderLineDefaults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_code** | **string** | Address Code | [optional] 
**currency_code** | **string** | The currency code in which this item is to be billed. | [optional] 
**promotion_choice** | **string** | The promotion choice, indicating a set of default settings for an order line. | [optional] 
**quantity_ordered** | **int** | The quantity ordered for the current order line. For a subscribed product  the quantity ordered is the number of copies of each issue to receive. | [optional] 
**unit_price** | **double** | The price per quantity ordered. | [optional] 
**subscription** | [**\Swagger\Client\Model\SubscriptionLineDefaults**](SubscriptionLineDefaults.md) | Subscription order line defaults | [optional] 
**access** | [**\Swagger\Client\Model\AccessOrderLineDefaults**](AccessOrderLineDefaults.md) | Information about an AMB (agreement) order line. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


