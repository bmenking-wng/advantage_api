# SalesRep

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Returns the sales rep number | [optional] 
**name** | **string** | Name of Sales Rep | [optional] 
**user_name** | **string** | Mapped user description, if exists. Otherwise, same as name. | [optional] 
**customer_number** | **string** | Customer Number of owning customer | [optional] 
**group** | [**\Swagger\Client\Model\CustomValue**](CustomValue.md) | Sales Rep Group Name and Code | [optional] 
**territory_name** | **string** | Sales Rep&#39;s Territory | [optional] 
**option_number** | **string** | Option number for the current sales rep.  The option number is a client specific attribute of a sales representative. | [optional] 
**email** | **string** | Email address for the current sales rep | [optional] 
**fax** | **string** | Fax number for the current sales rep.  The fax number is the telephone number of the sales rep&#39;s fax machine. | [optional] 
**phone** | **string** | Phone number for the current sales rep. | [optional] 
**organization_code** | **string** | Organization Code for the current sales rep. | [optional] 
**last_commission_calculated_date** | [**\DateTime**](\DateTime.md) | Last commission calculated date for the current sales rep.  This is the date the last commissions were calculated for this sales representative   (by the process COM310). | [optional] 
**supervisor_code** | **string** | Sales rep supervisor for the current sales rep.  This is a sales rep number of another sales rep. | [optional] 
**initials** | **string** | Sales rep initials for the current sales rep | [optional] 
**commission_cycle_code** | **string** | Commission cycle for the current sales rep.  The commission cycle indicates when commissions are paid (Monthly, Bimonthly, Weekly,...).  These values are setup at CDSVLU. Keyword name: COM-CYC. | [optional] 
**commission_method_code** | **string** | Commission method for the current sales rep.  The commission method indicates whether commissions are paid through A/P (&#39;A&#39;) or   payroll (&#39;P&#39;). Blank means \&quot;not used\&quot;. | [optional] 
**payee_vendor_number** | **string** | Sales rep payee number for the current sales rep.   The sales rep payee number identifies a vendor or an employee.  These values are setup at CDSVLU. Keyword name: SLM-EMP. | [optional] 
**description** | **string** | Sales rep description for the current sales rep. This field is a   concatenation of the name, territory, and group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


