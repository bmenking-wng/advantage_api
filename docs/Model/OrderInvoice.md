# OrderInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debit_number** | **string** | Debit number | [optional] 
**bill_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | Customer number | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | Due Date | [optional] 
**currency_code** | **string** | Currency | [optional] 
**invoice_amount** | **double** | Invoice amount | [optional] 
**amount_due** | **double** | Total amount remaining to be paid | [optional] 
**amount_paid** | **double** | Amount paid | [optional] 
**discount_amount** | **double** | Total of discounts applied | [optional] 
**early_payment_discount_available** | **double** | Available early payment discount on invoice | [optional] 
**early_payment_discount_date** | [**\DateTime**](\DateTime.md) | Date after which early payment discount expires | [optional] 
**installments** | [**\Swagger\Client\Model\OrderInvoiceInstallment[]**](OrderInvoiceInstallment.md) | Invoice installment details, for installment billed invoices. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


