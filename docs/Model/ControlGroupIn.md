# ControlGroupIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | Control Group Date | [optional] 
**code** | **string** | Control Group ID | [optional] 
**name** | **string** | Control Group Name (Description | [optional] 
**user_code** | **string** | User creating the control group or blank to use the WWWEB user | [optional] 
**arp_user_code** | **string** | ARP user used to set up ARP control group or null to use  the user creating the control group | [optional] 
**order_source** | **string** | Origination of this order | [optional] 
**product_defalts_script_code** | **string** | PRO script or null to use the Web PRO script option (WEB/PROSCRPT) | [optional] 
**subscription_defaults_script_code** | **string** | CIR script or null to use the Web CIR script option (WEB/CIRSCRPT) | [optional] 
**access_defaults_script_code** | **string** | AMB script or null to use the Web AMB script option (AMB/CIRSCRPT) | [optional] 
**owning_user_code** | **string** | Owner user ID | [optional] 
**totals** | [**\Swagger\Client\Model\ControlGroupTotals**](ControlGroupTotals.md) | Control Totals | [optional] 
**defaults** | [**\Swagger\Client\Model\ControlGroupDefaultsIn**](ControlGroupDefaultsIn.md) | Defaults | [optional] 
**subscription_defaults** | [**\Swagger\Client\Model\ControlGroupSubscriptionDefaultsIn**](ControlGroupSubscriptionDefaultsIn.md) | Subscription Defaults | [optional] 
**subscription_audit_defaults** | [**\Swagger\Client\Model\ControlGroupSubscriptionAuditDefaultsIn**](ControlGroupSubscriptionAuditDefaultsIn.md) | Circulation Audit Defaults | [optional] 
**product_defaults** | [**\Swagger\Client\Model\ControlGroupProductDefaultsIn**](ControlGroupProductDefaultsIn.md) | Product Defaults | [optional] 
**membership_defaults** | [**\Swagger\Client\Model\ControlGroupMembershipDefaults**](ControlGroupMembershipDefaults.md) | Membership organization default | [optional] 
**conference_defaults** | [**\Swagger\Client\Model\ControlGroupConferenceDefaults**](ControlGroupConferenceDefaults.md) | conference ID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


