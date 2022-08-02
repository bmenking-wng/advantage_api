# PremiumSetEarningCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paidup_percent** | **int** | Specifies the % of the total order amount that must be paid up before the premium can be fulfilled.  This should only be provided if premium set is earned at Payment. | [optional] 
**days_to_respond** | **int** | A customer earns the premium if the response came in within this number of days.  This should only be provided if premium set is earned at FirstDays. | [optional] 
**within_responses** | **string** | A customer earns the premium if the customer&#39;s response if within the first N responses, where N is this number.  This should only be provided if premium set is earned at FirstResponses. | [optional] 
**awarded_based_on** | **string** | The AwardedBasedOn flag indicates whether a premium set is awarded based on sub term, order amount or number of order lines. | [optional] 
**awarded_based_on_lower_limit** | **int** | Specifies the lower limit (measurement determined by AwardedBasedOn) for which a premium set is awarded. | [optional] 
**awarded_based_on_upper_limit** | **int** | Specifies the upper limit (measurement determined by AwardedBasedOn) for which a premium set is awarded. | [optional] 
**require_ship_to_self** | **bool** | Is the premium only available when the ship-to customer equals the bill-to customer? | [optional] 
**require_payment_with_order** | **bool** | The Require Payment With Order flag indicates whether a premium set is applicable only to orders received with full payment. | [optional] 
**order_source_code** | **string** | The Order Source Code indicates what channel the response came through. | [optional] 
**once_per_recipient** | **bool** | Specifies if only one premium is fulfilled per recipient. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


