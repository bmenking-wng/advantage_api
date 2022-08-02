# PremiumSetDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**premium_set_code** | **string** | The Premium set code that identifies a product that a customer can receive for free and what must be done to earn it. | [optional] 
**earned_at** | **string** | The event that triggers a premium. | [optional] 
**response_sequence** | **string** | The response sequence number identifies the position of a single response. | [optional] 
**paidup_percent** | **int** | Specifies the % of the total order amount that must be paid up before the premium can be fulfilled. | [optional] 
**days_to_respond** | **int** | A customer earns the premium if the response came in within this number of days. | [optional] 
**first_n_responses** | **int** | A customer earns the premium if the customer&#39;s response if within the first N responses, where N is this number. | [optional] 
**fulfill_at** | **string** | Specifies when the premium earned should be shipped. | [optional] 
**assembly_package** | **string** | The assembly package code identifies a particular combination of forms, materials and promotions for a shipment. | [optional] 
**awarded_based_on** | **string** | The Term/Amount/#Lines flag indicates whether a premium set is awarded based on sub term, order amount or number of order lines. | [optional] 
**prm_set_lower_limit** | **int** | Specifies the lower limit (measurement determined by TermDollarFlag) for which a premium set is awarded. | [optional] 
**prm_set_upper_limit** | **int** | Specifies the upper limit (measurement determined by TermDollarFlag) for which a premium set is awarded. | [optional] 
**select_only_once** | **bool** | The Select Only Once flag controls whether all or only the first matching premium set sequences are fulfilled. | [optional] 
**payment_with_order** | **bool** | The Payment With Order flag indicates whether a premium set is applicable only to orders received with full payment. | [optional] 
**last_updated_on** | [**\DateTime**](\DateTime.md) | Gets the Last Updated Date for the current Premium Set Detail. | [optional] 
**last_updated_by** | **string** | Gets the user that last updated the current Premium Set Detail. | [optional] 
**publication_code** | **string** | The Publication Code that identifies a magazine. | [optional] 
**issues_to_extend** | **int** | Number of issues to extend subscription. | [optional] 
**reduction_rate** | **double** | Reduction Rate amount | [optional] 
**reduction_currency** | **string** | Currency code of the reduction rate | [optional] 
**adjustment_reason** | **string** | The Adjustment Reason code used to describe the reason for a transaction. | [optional] 
**response_type** | **string** | The Response Type indicates what channel the response came through. | [optional] 
**donor_recipient_flag** | **bool** | Is the premium only available when the ship-to customer equals the bill-to customer? | [optional] 
**max_item_count** | **int** | Gets the maximum number of items that can be associated with this premium set record. | [optional] 
**earned_at_description** | **string** | Gets the description of the earning criteria for the current Premium Set Detail. | [optional] 
**one_per_participant_flag** | **bool** | Specifies if only one premium is fulfilled per recipient. | [optional] 
**premiums** | [**\Swagger\Client\Model\PremiumSetDetailItem[]**](PremiumSetDetailItem.md) | Gets the list of Premium Items for the current Premium Set Detail. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


