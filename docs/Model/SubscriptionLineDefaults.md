# SubscriptionLineDefaults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**membership_organization** | **string** | Membership organization | [optional] 
**membership_category** | **string** | Membership category | [optional] 
**delivery_code** | **string** | Delivery code | [optional] 
**term_length** | **int** | The subscription term (the number of issues). | [optional] 
**renewal_policy_code** | **string** | Indicates whether a renewal notice should be sent to the subscriber. | [optional] 
**email** | [**\Swagger\Client\Model\SubscriptionEmail**](SubscriptionEmail.md) | Default subscription email | [optional] 
**active_non_member_subscriptions** | [**\Swagger\Client\Model\NonMemberSubscription[]**](NonMemberSubscription.md) | List of active non-member subscriptions that overlap with baby pubs for this order line | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


