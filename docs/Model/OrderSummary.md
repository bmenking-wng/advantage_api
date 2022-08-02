# OrderSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_number** | **string** | The order number. | [optional] 
**order_date** | [**\DateTime**](\DateTime.md) | The date the order was placed. | [optional] 
**shipping_date** | [**\DateTime**](\DateTime.md) | The date the order was/will shipped/ship | [optional] 
**cost** | **double** | The total cost of the order. | [optional] 
**bill_to_name** | **string** | The name of the customer billed for the order. | [optional] 
**amount_due** | **double** | The amount due on the order. | [optional] 
**currency_code** | **string** | The billing currency code for this order. | [optional] 
**order_lines** | [**\Swagger\Client\Model\OrderLineSummary[]**](OrderLineSummary.md) | The summary information for the order lines. | [optional] 
**order_type** | **string** | The summary information for the order lines. | [optional] 
**payments_received** | **double** | The total of payments received for this order, including pending payments | [optional] 
**payments_recieved** | **double** | The total of payments received for this order, including pending payments.    This property is deprecated; use PaymentsReceived | [optional] 
**installment_billing_code** | **string** |  | [optional] 
**next_payment_amount** | **double** |  | [optional] 
**is_posted** | **bool** | True if order is posted | [optional] 
**promotion_code** | **string** | Sales promotion effort to be credited a particular sale. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


