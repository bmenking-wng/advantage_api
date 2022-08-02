# ActivateAccountRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_code** | **string** | The email address will be associated with this customer address.  If not provided then the email address is   associated with the customer&#39;s default address.  (Optional) | [optional] 
**email** | **string** | The email address to associate with this customer.  (Optional) | [optional] 
**user** | [**\Swagger\Client\Model\UserCreateRequest**](UserCreateRequest.md) | Information for creating a user. (Optional if SingleSignOn object is provided.) | [optional] 
**single_sign_on** | [**\Swagger\Client\Model\SingleSignOnCreateRequest**](SingleSignOnCreateRequest.md) | Information for creating a single sign-on authentication record. (Optional if User object is provided.) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


