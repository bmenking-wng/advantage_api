# AgreementUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**renewal_policy_code** | **string** | The new renewal flag.  You must supply a electronic payment id or direct debit id to use  automatic charge renewals (C). | [optional] 
**auto_renewal_chain_id** | **string** | Auto renewal chain | [optional] 
**auto_renewal_chain_sequence** | **int** | Auto renewal chain sequence | [optional] 
**auto_charge_electronic_payment_id** | **string** | The electronic payment id to use for automatic renewals. | [optional] 
**auto_charge_direct_debit_id** | **string** | The direct debit id to use for automatic renewals. | [optional] 
**participants** | [**\Swagger\Client\Model\AgreementParticipantIn[]**](AgreementParticipantIn.md) | A list of new or updated participants. | [optional] 
**association** | [**\Swagger\Client\Model\AssociationAgreementUpdateRequest**](AssociationAgreementUpdateRequest.md) | Information for requesting an association update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


