# OrderLineIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agency_reference** | **string** | The reference the agency uses to identify the ordered item. | [optional] 
**item_number** | **string** | The item number, identifying which access agreement is being ordered (Publication Code for Subscription   Items). | [optional] 
**quantity** | **int** | Quantity (Copies for Subscription Order Lines). | [optional] 
**promotion_code** | **string** | The promotion code (sometimes referred to as key code). | [optional] 
**promotion_choice_code** | **string** | The promotion choice, indicating a set of default settings for an order line. | [optional] 
**price_code** | **string** | Price code to use to determine the price.  Pass blank to use Advantage&#39;s default price code lookup.  If a price code is provided, the price calculated from the price code will be set on  the order line as a user override unit price.  Neither promotional nor volume discount pricing will be used. | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The ship to customer address. This field does not apply to access item order lines. | [optional] 
**upsell_presentation_id** | **string** | The ID given when upsell was presented to customer. | [optional] 
**product** | [**\Swagger\Client\Model\ProductOrderLineIn**](ProductOrderLineIn.md) | Information for creating a PRO (product) order line. | [optional] 
**subscription** | [**\Swagger\Client\Model\SubscriptionOrderLineIn**](SubscriptionOrderLineIn.md) | Information for creating a CIR (subscription) order line. | [optional] 
**access** | [**\Swagger\Client\Model\AccessOrderLineIn**](AccessOrderLineIn.md) | Information for creating an AMB (agreement) order line. | [optional] 
**conference** | [**\Swagger\Client\Model\ConferenceOrderLineIn**](ConferenceOrderLineIn.md) | Information for creating a conference order line. | [optional] 
**profile** | [**\Swagger\Client\Model\Profile**](Profile.md) | The optional profile element contains responses to a set of questions asked at order entry time.    Profiles are typically used to store customer demographic information for audited subscriptions or   custom inputs used for order fulfillment. | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Demographic field values to store on the order line | [optional] 
**override_unit_price** | **double** | Explicitly set the unit price for this order line. | [optional] 
**gift_message** | [**\Swagger\Client\Model\GiftMessage**](GiftMessage.md) | Gift message for the order line | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


