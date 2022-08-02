# SupportLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**csl_number** | **string** | The client support log (CSL) number is a unique number that identifies a support request | [optional] 
**name** | **string** | The description of the support log | [optional] 
**client** | [**\Swagger\Client\Model\ClientSummary**](ClientSummary.md) | The client who requested support | [optional] 
**activity_category_code** | **string** | The activity category for the support log | [optional] 
**actual_hours** | **double** | The actual number of hours that have been spent on the support log | [optional] 
**analyst** | [**\Swagger\Client\Model\AcsEmployee**](AcsEmployee.md) | The analyst who is assigned to work on the support log | [optional] 
**area_code** | **string** | The client area where the problem is occurring | [optional] 
**contact** | [**\Swagger\Client\Model\ClientContactSummary**](ClientContactSummary.md) | The client contact for the support log | [optional] 
**client_project_id** | **string** | The client project id for the support log | [optional] 
**client_task_number** | **string** | The client task number for the support log | [optional] 
**configuration** | **string** | The configuration information for the support log | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | The date the support log was created | [optional] 
**creation_user** | **string** | The user code of the user who created the support log | [optional] 
**date_completed** | [**\DateTime**](\DateTime.md) | The date the support log was marked complete | [optional] 
**discount_hours** | **double** | The number of hours that were discounted for the support log | [optional] 
**discount_percent** | **double** | The discount percent for the support log | [optional] 
**engineer** | [**\Swagger\Client\Model\AcsEmployee**](AcsEmployee.md) | The engineer assigned to work on the support log | [optional] 
**estimated_hours** | **double** | The estimated number of hours to be spent on the support log | [optional] 
**is_billable** | **bool** | Is time spent working on this support log billable? | [optional] 
**is_web_visible** | **bool** | Should this support log be visible from the support website? | [optional] 
**job_code** | **string** | The job code for the support log | [optional] 
**lead_engineer** | [**\Swagger\Client\Model\AcsEmployee**](AcsEmployee.md) | The lead engineer is used to identify which engineering team a support log is assigned to | [optional] 
**posted_hours** | **double** | The number of hours spent on the support log that have been posted | [optional] 
**priority** | **string** | The urgency level of the support log | [optional] 
**problem_code** | **string** | The problem code of the support log | [optional] 
**program** | **string** | The program where the problem is occurring | [optional] 
**research_and_development_type** | **string** | The research and development type for the support log | [optional] 
**status_code** | **string** | The status of the support log | [optional] 
**status_update_date** | [**\DateTime**](\DateTime.md) | The date the status was last updated | [optional] 
**swat_reason_code** | **string** | The SWAT reason for the support log.  This is used to describe why the work done on a task is non-billable. | [optional] 
**target_date** | [**\DateTime**](\DateTime.md) | The date targeted for completion of the support log | [optional] 
**target_revision** | **string** | The revision that is being targeted for a modification support log | [optional] 
**tracking_code** | **string** | The tracking code for the support log | [optional] 
**update_date** | [**\DateTime**](\DateTime.md) | The date the support log was last updated | [optional] 
**update_user** | **string** | The user who last updated the support log | [optional] 
**modification** | [**\Swagger\Client\Model\ModificationTracking**](ModificationTracking.md) | Information about modification support tasks | [optional] 
**attachments** | [**\Swagger\Client\Model\SupportLogAttachment[]**](SupportLogAttachment.md) | Files that have been attached to the client support log | [optional] 
**comments** | [**\Swagger\Client\Model\SupportLogComment[]**](SupportLogComment.md) | Comments that have been added to the client support log | [optional] 
**work_items** | [**\Swagger\Client\Model\TeamFoundationWorkItem[]**](TeamFoundationWorkItem.md) | Work items that have been added to the client support log | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


