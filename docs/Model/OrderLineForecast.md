# OrderLineForecast

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_number** | **string** | (Required) Customer Number of the customer that will be making the order. This customer  will serve as both the billing and ship to customer. | [optional] 
**promotion_code** | **string** | (Required) Promotion Code that will be used on the order line. | [optional] 
**billing_currency_code** | **string** | (Required) The currency that will be used on the order line. | [optional] 
**different_ship_to** | **bool** | (Optional) If true, the order forecaster will use a different customer as the ship to customer. | [optional] 
**quantity** | **int** | (Optional) The quantity of the item that will be ordered. Defaults to 1. | [optional] 
**promotion_choice_code** | **string** | (Optional) Promotion Choice that will be used on the order line. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


