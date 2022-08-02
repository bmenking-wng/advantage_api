# CustomerAddressUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_code** | **string** | The identifying address code for this address. | [optional] 
**full_name** | **string** | The full name of the customer.    When adding or updating a customer address you should provide the Name or the FullName, not both. | [optional] 
**name** | [**\Swagger\Client\Model\CustomerName**](CustomerName.md) | The elements of the customer&#39;s name.    When adding or updating a customer address you should provide the Name or the FullName, not both. | [optional] 
**email** | **string** | The email for the customer. | [optional] 
**phone** | **string** | The primary phone number for the customer. | [optional] 
**phone2** | **string** | An alternate phone number for the customer. | [optional] 
**phone3** | **string** | An alternate phone number for the customer. | [optional] 
**fax** | **string** | The Fax number for the customer. | [optional] 
**company** | **string** | The company name. | [optional] 
**department** | **string** | The department name | [optional] 
**postal_address** | [**\Swagger\Client\Model\PostalAddressUpdateRequest**](PostalAddressUpdateRequest.md) | The physical postal address. | [optional] 
**promote_by_email** | **string** | Specifies whether or not to send promotional emails. | [optional] 
**promote_by_phone** | **string** | Specifies whether or not to make promotional calls. | [optional] 
**promote_by_sms** | **string** | Specifies whether or not to send promotional texts. | [optional] 
**promote_by_mail** | **string** | Specifies whether or not to send promotional mail. | [optional] 
**promote_by_fax** | **string** | Specifies whether or not to send promotional faxes. | [optional] 
**promote_by_phone1** | **string** | Specifies whether or not to make promotional calls to the customer&#39;s Phone Number 1. | [optional] 
**promote_by_phone2** | **string** | Specifies whether or not to make promotional calls to the customer&#39;s Phone Number 2. | [optional] 
**promote_by_phone3** | **string** | Specifies whether or not to make promotional calls to the customer&#39;s Phone Number 3. | [optional] 
**is_default** | **bool** | Is this the customer&#39;s default address? | [optional] 
**change_source** | **string** | The system that last changed the customer record | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


