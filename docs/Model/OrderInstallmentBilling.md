# OrderInstallmentBilling

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**installment_plan** | [**\Swagger\Client\Model\InstallmentBillingPlan**](InstallmentBillingPlan.md) | The installment billing code. | [optional] 
**down_payment** | **double** | The down payment. (The minimum down payment if this is an estimation.) | [optional] 
**installment_fee** | **double** | The installment fee | [optional] 
**schedule** | [**\Swagger\Client\Model\InstallmentBill[]**](InstallmentBill.md) | The Schedule for the installment billing. This is an estimate if the order is not yet completed. | [optional] 
**next_payment_amount** | **double** | The amount of the next payment due. | [optional] 
**next_payment_due** | [**\DateTime**](\DateTime.md) | The date the next payment is due. | [optional] 
**is_estimate** | **bool** | Whether or not this is an estimated installment billing plan.  This is an estimate if the order is not yet completed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


