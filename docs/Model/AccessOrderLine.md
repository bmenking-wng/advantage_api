# AccessOrderLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**renewal_policy_code** | **string** | Indicates whether a renewal notice should be sent to the subscriber. | [optional] 
**agreement_id** | **string** | The agreement ID. | [optional] 
**agreement_type** | **string** | The type, categorizing the agreement. | [optional] 
**price_code** | **string** | Price code, determining the unit price. | [optional] 
**access_service_code** | **string** | The service ID, defining a content access service - the top level of product structure in AMB. | [optional] 
**access_item_code** | **string** | The service type, a way of packaging content within an access service. | [optional] 
**term_number** | **int** | The term number within the agreement. | [optional] 
**version_number** | **int** | The version number within the agreement term. | [optional] 
**access_period_code** | **string** | The period code, defining the length of the agreement. | [optional] 
**participants** | [**\Swagger\Client\Model\AgreementParticipant[]**](AgreementParticipant.md) | A List of email addresses of the participants to the agreement. | [optional] 
**pricing_method** | **string** | The pricing method of the agreement, denoting how the price of the agreement is determined. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


