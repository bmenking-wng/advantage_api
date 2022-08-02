# SubscriptionOrderLineIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_code** | **string** | The delivery method for this subscription | [optional] 
**term_length** | **int** | The subscription term (the number of issues) | [optional] 
**rate** | **double** | The price of the magazine. | [optional] 
**gift_message** | **string** | The gift message | [optional] 
**business_industry_code** | **string** | The business industry demographic code. | [optional] 
**business_title_code** | **string** | The business title demographic code. | [optional] 
**qualification_source_code** | **string** | The qualification source | [optional] 
**subscription_class** | **string** | Subscription class: R - regular, Q - controlled,  L - delayed start, P - perpetual | [optional] 
**referred_by_customer_number** | **string** | The customer number of the reference customer. | [optional] 
**opt_out** | **bool** | Does customer wish to opt out of lists? | [optional] 
**promote_by_mail** | **string** | Should the subscriber be promoted by mail? | [optional] 
**promote_by_phone** | **string** | Should the subscriber be promoted by phone? | [optional] 
**promote_by_fax** | **string** | Should the subscriber be promoted by fax? | [optional] 
**promote_by_email** | **string** | Should the subscriber be promoted by email? | [optional] 
**subscription_id** | **string** | The subscription reference number. | [optional] 
**email_id** | **string** | Email ID of e-mail address to link to subscription. | [optional] 
**issue_group_code** | **string** | The issue group can be used to indicate a subset of issues to receive (or blank for all). | [optional] 
**donor_type_code** | **string** | Donor type (used only when first CIR line on order). | [optional] 
**date_signed** | [**\DateTime**](\DateTime.md) | The date signed for audited circulation; also sets the classification date. | [optional] 
**alternate_delivery_indicator** | **string** | The alternate Delivery Indicator. | [optional] 
**ship_through_customer_number** | **string** | The customer number of the ship-thru customer. | [optional] 
**edition_code** | **string** | The edition code | [optional] 
**force_trial** | **bool** | Should the new subscription be forced to be a trial?   (Not valid for renewals.) | [optional] 
**volume_group_code** | **string** | Only applicable if the volume group feature is enabled.  If this is not supplied, the   default volume group will be used. | [optional] 
**society_code** | **string** | Society, for price code. | [optional] 
**subscription_type_code** | **string** | The subscription type. | [optional] 
**renewal_policy_code** | **string** | Indicates whether a renewal notice should be sent to the subscriber. | [optional] 
**starts** | [**\DateTime**](\DateTime.md) | When the subscription starts; the start date may be assigned when the order line is created,   or it may be assigned (or updated) later when the order is posted. | [optional] 
**add_default_membership_elements** | **bool** | If adding a new membership, this determines whether or not to add the default set of   membership elements for a given org-level publication. | [optional] 
**non_member_subscription_credit** | **string** | This indicates how to handle the case when  the customer already has an active  non-membership subscription to a publication.  Valid values are:  P - Cancel the existing subscription and  apply the partial credit to a new  membership-based one  F - Cancel the existing subscription and  apply the full credit to a new  membership-based one  C - Convert the existing subscription to  membership-based | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


