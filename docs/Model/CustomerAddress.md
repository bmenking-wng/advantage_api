# CustomerAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full_name** | **string** | The full name of the customer. | [optional] 
**name** | [**\Swagger\Client\Model\CustomerName**](CustomerName.md) | The elements of the customer&#39;s name. | [optional] 
**email** | **string** | The email for the customer. | [optional] 
**phone** | **string** | The primary phone number for the customer. | [optional] 
**phone2** | **string** | An alternate phone number for the customer. | [optional] 
**phone3** | **string** | An alternate phone number for the customer. | [optional] 
**fax** | **string** | The Fax number for the customer. | [optional] 
**company** | **string** | The company name. | [optional] 
**department** | **string** | The department name | [optional] 
**postal_address** | [**\Swagger\Client\Model\PostalAddress**](PostalAddress.md) | The physical postal address. | [optional] 
**address_code** | **string** | The identifying address code for this address. | [optional] 
**customer_number** | **string** | The customer number. | [optional] 
**promote_by_email** | **string** | Specifies whether or not to send promotional emails. | [optional] 
**promote_by_phone** | **string** | Specifies whether or not to make promotional calls. | [optional] 
**promote_by_sms** | **string** | Specifies whether or not to send promotional texts. | [optional] 
**promote_by_mail** | **string** | Specifies whether or not to send promotional mail. | [optional] 
**promote_by_fax** | **string** | Specifies whether or not to send promotional faxes. | [optional] 
**is_valid_bill_to_address** | **bool** | Specifies whether or not this is a valid bill to address. | [optional] 
**is_valid_ship_to_address** | **bool** | Specifies whether or not this is a valid ship to address. | [optional] 
**not_ok_as_bill_to_reason** | **string** | If IsValidBillToAddress is false, then this holds the reason why the address cannot be used as a bill-to. | [optional] 
**nixie_counter** | **int** | The nixie counter. | [optional] 
**not_ok_as_ship_to_reason** | **string** | If IsValidShipToAddress is false, then this holds the reason why the address cannot be used as a ship-to. | [optional] 
**promote_by_phone1** | **string** | Specifies whether or not to make promotional calls to the customer&#39;s Phone Number 1. | [optional] 
**promote_by_phone2** | **string** | Specifies whether or not to make promotional calls to the customer&#39;s Phone Number 2. | [optional] 
**promote_by_phone3** | **string** | Specifies whether or not to make promotional calls to the customer&#39;s Phone Number 3. | [optional] 
**is_default** | **bool** | Is this the customer&#39;s default address? | [optional] 
**change_source** | **string** | The system that last changed the customer record | [optional] 
**job_position_code** | **string** | Position code indicating position in company | [optional] 
**job_title_name** | **string** | Prospect&#39;s job title | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


