# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_number** | **string** | The Advantage customer number | [optional] 
**promote** | **string** | A setting that denotes whether or not the customer is OK to promote to. | [optional] 
**promote_by_partners** | **string** | A setting that denotes whether or not the customer is OK to promote to by third-parties. | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | The customer&#39;s date of birth | [optional] 
**sex_code** | **string** | The customer&#39;s gender | [optional] 
**tax_exemption_id** | **string** | The customer&#39;s tax exemption ID | [optional] 
**credit_status_code** | **string** | The customer&#39;s credit status | [optional] 
**customer_type_code** | **string** | The customer type is used to categorize customers | [optional] 
**change_source** | **string** | The system that last changed the customer record | [optional] 
**credit_summary** | [**\Swagger\Client\Model\CustomerCreditSummary**](CustomerCreditSummary.md) | A summary of the customer A/R, reflecting all posted credits and debits. | [optional] 
**addresses** | [**\Swagger\Client\Model\CustomerAddress[]**](CustomerAddress.md) | The customer&#39;s saved addresses | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Customer demographic values (from the CUS-DMO1, CUS-DMO2, CUS-DMO3 partitions) saved on the customer record. | [optional] 
**customer_url** | **string** | Returns the value of the Customer URL for the current customer | [optional] 
**subscription_list** | **string[]** | Returns a list of pub codes of the first 16 subscriptions found for the customer | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


