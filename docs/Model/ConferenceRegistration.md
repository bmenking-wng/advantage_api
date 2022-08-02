# ConferenceRegistration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registration_id** | **string** | Conference registration id | [optional] 
**conference_summary** | [**\Swagger\Client\Model\ConferenceLocationSummary**](ConferenceLocationSummary.md) | The conference and location for this registration | [optional] 
**currency_code** | **string** | The billing currency for this conference registration | [optional] 
**attendees** | [**\Swagger\Client\Model\ConferenceAttendee[]**](ConferenceAttendee.md) | The attendees for this conference registration | [optional] 
**name** | **string** | The registration name | [optional] 
**bill_to** | [**\Swagger\Client\Model\CustomerAddressSummary**](CustomerAddressSummary.md) | The bill-to customer address for this registration | [optional] 
**registration_status** | **string** | Registration Status (A&#x3D;Active, C&#x3D;Cancelled, etc) | [optional] 
**is_registration_active** | **bool** | True if the registration is active | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


