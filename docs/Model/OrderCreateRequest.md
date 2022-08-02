# OrderCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The bill-to address for the order. | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | This ship-to address for the order. | [optional] 
**installment_billing_code** | **string** | The installment billing code, used to identify the install billing terms used. | [optional] 
**free_shipping** | **bool** | Does this order get free shipping? | [optional] 
**discount_percent** | **double** | The discount percentage to be applied to the discountable amount. For example, 10% is entered as 10. | [optional] 
**order_type** | **string** | The accounts receivable classification of the order.  S&#x3D;Invoice, K&#x3D;Credit, F&#x3D;Pro-Forma (no A/R). | [optional] 
**purchase_order_number** | **string** | The purchase order number, provided by the customer. | [optional] 
**promotion_code** | **string** | The sales promotion effort to be credited a particular sale. | [optional] 
**sales_rep_code** | **string** | The salesperson getting credit for orders from this customer. | [optional] 
**call_list_date** | [**\DateTime**](\DateTime.md) | Tele-services call list Date | [optional] 
**call_list_code** | **string** | Tele-services call list ID | [optional] 
**currency_code** | **string** | The currency code in which the order was billed. | [optional] 
**docket_number** | **string** | The docket number is the audit tracking number assigned to incoming documents. | [optional] 
**order_source_code** | **string** | The source of the order. | [optional] 
**gratis_reason_code** | **string** | Gratis reason code (for gratis orders). | [optional] 
**billing_organization_code** | **string** | The billing organization for the order. | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Demographic field values for the order | [optional] 
**lines** | [**\Swagger\Client\Model\OrderLineIn[]**](OrderLineIn.md) | The order lines on the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


