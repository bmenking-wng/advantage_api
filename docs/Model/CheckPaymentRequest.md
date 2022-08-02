# CheckPaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_number** | **string** | The Advantage customer number of the customer providing the payment. | [optional] 
**check_number** | **string** | The check number | [optional] 
**amount** | **double** | The amount to pay on the order | [optional] 
**ok_to_refund** | **bool** | Ok to refund | [optional] 
**unapplied_credit_reason** | **string** | The unapplied credit reason. when applying a check bigger then amount owed | [optional] 
**promotion_code** | **string** | The promotion code | [optional] 
**control_group_date** | [**\DateTime**](\DateTime.md) | The control group date | [optional] 
**control_group_id** | **string** | The control group id | [optional] 
**check_code** | **string** | The check code, defaults to \&quot;CHECK\&quot; | [optional] 
**payment_description** | **string** | The payment description | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


