# AccessOrderLineIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_period_code** | **string** | The period code, defining the length of the agreement. | [optional] 
**is_usage_based** | **bool** | Should the agreement track usage or is it simply time based: Y - usage-based, N - not usage-based. | [optional] 
**agreement_type** | **string** | The type of agreement | [optional] 
**order_by** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | The customer that ordered the access. | [optional] 
**agreement_id** | **string** | The agreement ID. | [optional] 
**reason_code** | **string** | Reason code for use if AMB item is a trial term. | [optional] 
**volume_group_code** | **string** | Volume group. | [optional] 
**force_renewal** | **bool** | Is this line required to be processed as a renewal? | [optional] 
**starts** | [**\DateTime**](\DateTime.md) | When the agreement starts; the start time maybe be assigned when the order line is created,   or it may be assigned (or updated) later when the order is posted. | [optional] 
**society_code** | **string** | Society, for price code. | [optional] 
**subscription_type_code** | **string** | The subscription type. | [optional] 
**renewal_policy_code** | **string** | Indicates whether a renewal notice should be sent to the subscriber. | [optional] 
**participants** | [**\Swagger\Client\Model\AgreementParticipantIn[]**](AgreementParticipantIn.md) | A list of participants to include on the agreement. | [optional] 
**access_point_only_participants** | **bool** | Should the participants have access to the specific access point instead of the entire agreement? | [optional] 
**email_id** | **string** | Email ID of e-mail address to link to agreement. | [optional] 
**maximum_participants** | **int** | The maximum number of participants that can be linked to the agreement. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


