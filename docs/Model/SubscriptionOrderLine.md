# SubscriptionOrderLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**publication** | [**\Swagger\Client\Model\PublicationSummary**](PublicationSummary.md) | The expected number of issues per year for the publication. | [optional] 
**renewal_policy_code** | **string** | Indicates whether a renewal notice should be sent to the subscriber. | [optional] 
**starts** | [**\DateTime**](\DateTime.md) | When the subscription/agreement starts; the start date maybe be assigned when the order line is created,   or it may be assigned (or updated) later when the order is posted. | [optional] 
**subscription_type_code** | **string** | The subscription type code. | [optional] 
**delivery_code** | **string** | The subscription delivery code. | [optional] 
**subscription_expires** | [**\DateTime**](\DateTime.md) | The final expire date. For subscriptions, a final expire date will not be assigned at order entry time  unless the start date is assigned. | [optional] 
**is_modification** | **bool** | Is the current subscription order line a modification transaction?  A subscription  modification transaction changes an existing subscription without adding a new term.  (New subscriptions and renewals are not modification transactions.) | [optional] 
**membership_organization_code** | **string** | A membership organization associates the subscription with a membership. | [optional] 
**operation_code** | **string** | The operation code indicates if the order line is a new individual subscription,  an individual renewal, an upgrade, a demographics-only change, etc. | [optional] 
**operation_name** | **string** | The name of the operation code. | [optional] 
**profile_id** | **string** | The profile ID for the subscription order line.  Demographics  can be collected in a profile, which is a set of answers to questionnaire  questions.  Use the WebProfile class to create a profile and add responses.  Use WebQuestionnaire to get information about a questionnaire. | [optional] 
**price_code** | **string** | Price code, determining the unit price. | [optional] 
**subscription_class** | **string** | The subscription class indicates whether the subscription is: R - a regular subscription,  Q - a qualified controlled subscription, L - a delayed start controlled subscription,  P - a perpetual subscription | [optional] 
**subscription_id** | **string** | The unique identifier for the subscription being added or updated by  the current subscription order line. | [optional] 
**term_length** | **int** | The subscription term (the number of issues). | [optional] 
**term_number** | **int** | The term number gives an indicate of how many times the subscription has been renewed. | [optional] 
**business_industry_code** | **string** | The business industry demographic code. | [optional] 
**rate** | **double** | The price of the magazine. | [optional] 
**business_title_code** | **string** | The business title demographic code. | [optional] 
**charge_category_code** | **string** | The membership charge category. | [optional] 
**subscription_status_code** | **string** | The current circulation status of the subscription being renewed (or blank). | [optional] 
**promote_by_email** | **string** | Should the subscriber be promoted by email? | [optional] 
**promote_by_fax** | **string** | Should the subscriber be promoted by fax? | [optional] 
**promote_by_mail** | **string** | Should the subscriber be promoted by mail? | [optional] 
**promote_by_phone** | **string** | Should the subscriber be promoted by phone? | [optional] 
**referred_by_customer_number** | **string** | The customer number of the reference customer. | [optional] 
**edition_code** | **string** | The edition code. | [optional] 
**gift_message** | **string** | The gift message. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


