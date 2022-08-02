# CustomerUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**promote** | **string** | Is it OK to promote to this customer? | [optional] 
**promote_by_partners** | **string** | Specifies whether the customer allows third-party promotions. | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | The customer&#39;s date of birth | [optional] 
**sex_code** | **string** | The customer&#39;s gender | [optional] 
**customer_type** | **string** | The type code for the customer | [optional] 
**change_source** | **string** | The system that last changed the customer record | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Customer demographic values (from the CUS-DMO1, CUS-DMO2, CUS-DMO3 partitions) to store on the  customer record. | [optional] 
**addresses** | [**\Swagger\Client\Model\CustomerAddressUpdateRequest[]**](CustomerAddressUpdateRequest.md) | The new information for the addresses to update. | [optional] 
**address_standardization_setting** | **string** | The standardization settings for validating the address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


