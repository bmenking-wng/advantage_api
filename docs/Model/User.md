# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authentication_number** | **string** | The unique number for the customer authentication method. | [optional] 
**authentication_group_code** | **string** | The authentication group the web user belongs to. | [optional] 
**user_name** | **string** | The web user&#39;s username. | [optional] 
**display_name** | **string** | Full display name of the web user. | [optional] 
**name** | [**\Swagger\Client\Model\CustomerName**](CustomerName.md) | The web user&#39;s customer name. | [optional] 
**customer_number** | **string** | The web user&#39;s Advantage customer number. | [optional] 
**primary_email** | **string** | The web user&#39;s primary email address. | [optional] 
**last_login_utc** | [**\DateTime**](\DateTime.md) | The web user&#39;s date of last log in. | [optional] 
**is_locked_out** | **bool** | Is the user locked out of the account? | [optional] 
**is_enabled** | **bool** | Is the user account enabled? | [optional] 
**password_hint** | **string** | A password hint to can provided by a customer to help them remember their password | [optional] 
**password_change_required** | **bool** | A password change can be required which will redirect the user to the screen to reset password. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


