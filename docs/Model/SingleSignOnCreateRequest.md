# SingleSignOnCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | The external id that uniquely identifies a user from a third-party such as Google.  If this is blank, the {Advantage.Rest.Models.SingleSignOnCreateRequest.SingleSignOnAuthenticationType} is set to SingleSignOn and  the {Advantage.Rest.Models.SingleSignOnCreateRequest.AuthenticationGroupCode} is configured for SSO integration,  then we&#39;ll create a user in the SSO. | [optional] 
**authentication_group_code** | **string** | The user&#39;s authentication group. | [optional] 
**single_sign_on_authentication_type** | **string** | Single sign-on authentication type | [optional] 
**user_name** | **string** | The customer&#39;s desired username, used for creating a new user in the single sign-on system.  This is optional and should only be provided when an {Advantage.Rest.Models.SingleSignOnCreateRequest.ExternalId} is not provided.  This is typically the customer&#39;s email address. | [optional] 
**password** | **string** | The customer&#39;s desired password, used for creating a new user in the single sign-on system.  This is optional and should only be provided when an {Advantage.Rest.Models.SingleSignOnCreateRequest.ExternalId} is not provided.  If a password is not specified and a new single-sign on user is created, then a password will be generated  and the user will be prompted via email to reset. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


