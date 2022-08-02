# OrderLineDefaultsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The bill-to address for the order. | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | This ship-to address for the order. | [optional] 
**item_number** | **string** | The item number, identifying which access agreement is being ordered (Publication Code for Subscription   Items). | [optional] 
**currency_code** | **string** | The order currency | [optional] 
**promotion_code** | **string** | The promotion code (sometimes referred to as key code). | [optional] 
**promotion_choice_code** | **string** | The promotion choice, indicating a set of default settings for an order line. | [optional] 
**get_default_subscription_email** | **bool** | If true, response will include default subscription email, if one exists | [optional] 
**get_default_agreement_email** | **bool** | If true, response will include default agreement email, if one exists | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


