# ConferenceAttendee

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence_number** | **string** | The registration sequence number | [optional] 
**badge_name** | **string** | The conference attendee registration (badge) name | [optional] 
**bill_to** | [**\Swagger\Client\Model\CustomerAddressSummary**](CustomerAddressSummary.md) | The bill-to customer address for this attendee. If the bill-by is \&quot;Bill By Registration,\&quot; the bill-to  will be stored on the registration record. If the bill-by is \&quot;Bill By Attendee,\&quot; the bill-to  will be stored on the attendee record. | [optional] 
**attendee** | [**\Swagger\Client\Model\CustomerAddressSummary**](CustomerAddressSummary.md) | The attendee | [optional] 
**attendee_name** | **string** | The attendee customer&#39;s full name | [optional] 
**attendee_type** | **string** | Conference attendee registration type | [optional] 
**registration_date** | [**\DateTime**](\DateTime.md) | Conference registration date for attendee | [optional] 
**total_charges** | **double** | Total charges for the attendee | [optional] 
**sessions** | [**\Swagger\Client\Model\ConferenceAttendeeSession[]**](ConferenceAttendeeSession.md) | List of sessions for attendee | [optional] 
**attendee_status** | **string** | Registration Status (A&#x3D;Active, C&#x3D;Cancelled, etc) | [optional] 
**is_attendee_active** | **bool** | True if the attendee is active | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


