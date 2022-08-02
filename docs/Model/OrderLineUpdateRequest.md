# OrderLineUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | The line number of the order line within the order. | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Demographic field values to store on the order line | [optional] 
**profile** | [**\Swagger\Client\Model\Profile**](Profile.md) | The optional profile element contains responses to a set of questions asked at order entry time.    Profiles are typically used to store customer demographic information for audited subscriptions or   custom inputs used for order fulfillment. | [optional] 
**cancel** | **bool** | Populate this property with true to cancel an order line. | [optional] 
**quantity** | **int** | Populate this property with a number to change the quantity on the order line. | [optional] 
**recurring_donation_frequency** | **int** | The number of months between recurring donation contributions. | [optional] 
**association** | [**\Swagger\Client\Model\AssociationLineUpdateRequest**](AssociationLineUpdateRequest.md) | Update association membership specific information | [optional] 
**gift_message** | [**\Swagger\Client\Model\GiftMessage**](GiftMessage.md) | Gift message for the order line | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


