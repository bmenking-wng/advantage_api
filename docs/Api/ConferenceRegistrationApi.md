# Swagger\Client\ConferenceRegistrationApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conferenceRegistrationCancel**](ConferenceRegistrationApi.md#conferenceRegistrationCancel) | **POST** /conference-registrations/{registrationId}/cancel | Cancel a conference registration for the given registration Id. All attendees under the registration will be cancelled.
[**conferenceRegistrationGet**](ConferenceRegistrationApi.md#conferenceRegistrationGet) | **GET** /conference-registrations/{registrationId} | Gets a specific conference registration by ID
[**conferenceRegistrationSearch**](ConferenceRegistrationApi.md#conferenceRegistrationSearch) | **GET** /conference-registrations | Gets the list of conference registrations based on search criteria


# **conferenceRegistrationCancel**
> conferenceRegistrationCancel($registration_id, $cancel_request)

Cancel a conference registration for the given registration Id. All attendees under the registration will be cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_id = "registration_id_example"; // string | The registrationId of the conference registration to be canceled.
$cancel_request = new \Swagger\Client\Model\CancelConferenceRegistrationRequest(); // \Swagger\Client\Model\CancelConferenceRegistrationRequest | The request object for the cancel

try {
    $apiInstance->conferenceRegistrationCancel($registration_id, $cancel_request);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceRegistrationApi->conferenceRegistrationCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| The registrationId of the conference registration to be canceled. |
 **cancel_request** | [**\Swagger\Client\Model\CancelConferenceRegistrationRequest**](../Model/CancelConferenceRegistrationRequest.md)| The request object for the cancel |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceRegistrationGet**
> \Swagger\Client\Model\ConferenceRegistration conferenceRegistrationGet($registration_id)

Gets a specific conference registration by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_id = "registration_id_example"; // string | 

try {
    $result = $apiInstance->conferenceRegistrationGet($registration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceRegistrationApi->conferenceRegistrationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConferenceRegistration**](../Model/ConferenceRegistration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceRegistrationSearch**
> \Swagger\Client\Model\SearchResultConferenceRegistration conferenceRegistrationSearch($attendee_customer_number, $bill_to_customer_number, $conference_id, $location_id, $billing_organization_code, $attendee_customer_number_not_equal, $attendee_customer_number_less, $attendee_customer_number_less_or_equal, $attendee_customer_number_greater, $attendee_customer_number_greater_or_equal, $attendee_customer_number_is_null, $attendee_customer_number_is_not_null, $attendee_customer_number_like, $attendee_customer_number_not_like, $attendee_customer_number_contains, $attendee_customer_number_not_contains, $attendee_customer_number_starts_with, $attendee_customer_number_not_starts_with, $attendee_customer_number_ends_with, $attendee_customer_number_not_ends_with, $attendee_customer_number_in, $attendee_customer_number_between, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $conference_id_not_equal, $conference_id_less, $conference_id_less_or_equal, $conference_id_greater, $conference_id_greater_or_equal, $conference_id_is_null, $conference_id_is_not_null, $conference_id_like, $conference_id_not_like, $conference_id_contains, $conference_id_not_contains, $conference_id_starts_with, $conference_id_not_starts_with, $conference_id_ends_with, $conference_id_not_ends_with, $conference_id_in, $conference_id_between, $location_id_not_equal, $location_id_less, $location_id_less_or_equal, $location_id_greater, $location_id_greater_or_equal, $location_id_is_null, $location_id_is_not_null, $location_id_like, $location_id_not_like, $location_id_contains, $location_id_not_contains, $location_id_starts_with, $location_id_not_starts_with, $location_id_ends_with, $location_id_not_ends_with, $location_id_in, $location_id_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between)

Gets the list of conference registrations based on search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attendee_customer_number = "attendee_customer_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$bill_to_customer_number = "bill_to_customer_number_example"; // string | Filter on BIL-CTM using 'Equal' operator
$conference_id = "conference_id_example"; // string | Filter on CONF-ID using 'Equal' operator
$location_id = "location_id_example"; // string | Filter on CONF-LOC using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$attendee_customer_number_not_equal = "attendee_customer_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$attendee_customer_number_less = "attendee_customer_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$attendee_customer_number_less_or_equal = "attendee_customer_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$attendee_customer_number_greater = "attendee_customer_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$attendee_customer_number_greater_or_equal = "attendee_customer_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$attendee_customer_number_is_null = "attendee_customer_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$attendee_customer_number_is_not_null = "attendee_customer_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$attendee_customer_number_like = "attendee_customer_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$attendee_customer_number_not_like = "attendee_customer_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$attendee_customer_number_contains = "attendee_customer_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$attendee_customer_number_not_contains = "attendee_customer_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$attendee_customer_number_starts_with = "attendee_customer_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$attendee_customer_number_not_starts_with = "attendee_customer_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$attendee_customer_number_ends_with = "attendee_customer_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$attendee_customer_number_not_ends_with = "attendee_customer_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$attendee_customer_number_in = "attendee_customer_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$attendee_customer_number_between = "attendee_customer_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$bill_to_customer_number_not_equal = "bill_to_customer_number_not_equal_example"; // string | Filter on BIL-CTM using 'NotEqual' operator
$bill_to_customer_number_less = "bill_to_customer_number_less_example"; // string | Filter on BIL-CTM using 'Less' operator
$bill_to_customer_number_less_or_equal = "bill_to_customer_number_less_or_equal_example"; // string | Filter on BIL-CTM using 'LessOrEqual' operator
$bill_to_customer_number_greater = "bill_to_customer_number_greater_example"; // string | Filter on BIL-CTM using 'Greater' operator
$bill_to_customer_number_greater_or_equal = "bill_to_customer_number_greater_or_equal_example"; // string | Filter on BIL-CTM using 'GreaterOrEqual' operator
$bill_to_customer_number_is_null = "bill_to_customer_number_is_null_example"; // string | Filter on BIL-CTM using 'IsNull' operator
$bill_to_customer_number_is_not_null = "bill_to_customer_number_is_not_null_example"; // string | Filter on BIL-CTM using 'IsNotNull' operator
$bill_to_customer_number_like = "bill_to_customer_number_like_example"; // string | Filter on BIL-CTM using 'Like' operator
$bill_to_customer_number_not_like = "bill_to_customer_number_not_like_example"; // string | Filter on BIL-CTM using 'NotLike' operator
$bill_to_customer_number_contains = "bill_to_customer_number_contains_example"; // string | Filter on BIL-CTM using 'Contains' operator
$bill_to_customer_number_not_contains = "bill_to_customer_number_not_contains_example"; // string | Filter on BIL-CTM using 'NotContains' operator
$bill_to_customer_number_starts_with = "bill_to_customer_number_starts_with_example"; // string | Filter on BIL-CTM using 'StartsWith' operator
$bill_to_customer_number_not_starts_with = "bill_to_customer_number_not_starts_with_example"; // string | Filter on BIL-CTM using 'NotStartsWith' operator
$bill_to_customer_number_ends_with = "bill_to_customer_number_ends_with_example"; // string | Filter on BIL-CTM using 'EndsWith' operator
$bill_to_customer_number_not_ends_with = "bill_to_customer_number_not_ends_with_example"; // string | Filter on BIL-CTM using 'NotEndsWith' operator
$bill_to_customer_number_in = "bill_to_customer_number_in_example"; // string | Filter on BIL-CTM using 'In' operator
$bill_to_customer_number_between = "bill_to_customer_number_between_example"; // string | Filter on BIL-CTM using 'Between' operator
$conference_id_not_equal = "conference_id_not_equal_example"; // string | Filter on CONF-ID using 'NotEqual' operator
$conference_id_less = "conference_id_less_example"; // string | Filter on CONF-ID using 'Less' operator
$conference_id_less_or_equal = "conference_id_less_or_equal_example"; // string | Filter on CONF-ID using 'LessOrEqual' operator
$conference_id_greater = "conference_id_greater_example"; // string | Filter on CONF-ID using 'Greater' operator
$conference_id_greater_or_equal = "conference_id_greater_or_equal_example"; // string | Filter on CONF-ID using 'GreaterOrEqual' operator
$conference_id_is_null = "conference_id_is_null_example"; // string | Filter on CONF-ID using 'IsNull' operator
$conference_id_is_not_null = "conference_id_is_not_null_example"; // string | Filter on CONF-ID using 'IsNotNull' operator
$conference_id_like = "conference_id_like_example"; // string | Filter on CONF-ID using 'Like' operator
$conference_id_not_like = "conference_id_not_like_example"; // string | Filter on CONF-ID using 'NotLike' operator
$conference_id_contains = "conference_id_contains_example"; // string | Filter on CONF-ID using 'Contains' operator
$conference_id_not_contains = "conference_id_not_contains_example"; // string | Filter on CONF-ID using 'NotContains' operator
$conference_id_starts_with = "conference_id_starts_with_example"; // string | Filter on CONF-ID using 'StartsWith' operator
$conference_id_not_starts_with = "conference_id_not_starts_with_example"; // string | Filter on CONF-ID using 'NotStartsWith' operator
$conference_id_ends_with = "conference_id_ends_with_example"; // string | Filter on CONF-ID using 'EndsWith' operator
$conference_id_not_ends_with = "conference_id_not_ends_with_example"; // string | Filter on CONF-ID using 'NotEndsWith' operator
$conference_id_in = "conference_id_in_example"; // string | Filter on CONF-ID using 'In' operator
$conference_id_between = "conference_id_between_example"; // string | Filter on CONF-ID using 'Between' operator
$location_id_not_equal = "location_id_not_equal_example"; // string | Filter on CONF-LOC using 'NotEqual' operator
$location_id_less = "location_id_less_example"; // string | Filter on CONF-LOC using 'Less' operator
$location_id_less_or_equal = "location_id_less_or_equal_example"; // string | Filter on CONF-LOC using 'LessOrEqual' operator
$location_id_greater = "location_id_greater_example"; // string | Filter on CONF-LOC using 'Greater' operator
$location_id_greater_or_equal = "location_id_greater_or_equal_example"; // string | Filter on CONF-LOC using 'GreaterOrEqual' operator
$location_id_is_null = "location_id_is_null_example"; // string | Filter on CONF-LOC using 'IsNull' operator
$location_id_is_not_null = "location_id_is_not_null_example"; // string | Filter on CONF-LOC using 'IsNotNull' operator
$location_id_like = "location_id_like_example"; // string | Filter on CONF-LOC using 'Like' operator
$location_id_not_like = "location_id_not_like_example"; // string | Filter on CONF-LOC using 'NotLike' operator
$location_id_contains = "location_id_contains_example"; // string | Filter on CONF-LOC using 'Contains' operator
$location_id_not_contains = "location_id_not_contains_example"; // string | Filter on CONF-LOC using 'NotContains' operator
$location_id_starts_with = "location_id_starts_with_example"; // string | Filter on CONF-LOC using 'StartsWith' operator
$location_id_not_starts_with = "location_id_not_starts_with_example"; // string | Filter on CONF-LOC using 'NotStartsWith' operator
$location_id_ends_with = "location_id_ends_with_example"; // string | Filter on CONF-LOC using 'EndsWith' operator
$location_id_not_ends_with = "location_id_not_ends_with_example"; // string | Filter on CONF-LOC using 'NotEndsWith' operator
$location_id_in = "location_id_in_example"; // string | Filter on CONF-LOC using 'In' operator
$location_id_between = "location_id_between_example"; // string | Filter on CONF-LOC using 'Between' operator
$billing_organization_code_not_equal = "billing_organization_code_not_equal_example"; // string | Filter on BIL-ORG using 'NotEqual' operator
$billing_organization_code_less = "billing_organization_code_less_example"; // string | Filter on BIL-ORG using 'Less' operator
$billing_organization_code_less_or_equal = "billing_organization_code_less_or_equal_example"; // string | Filter on BIL-ORG using 'LessOrEqual' operator
$billing_organization_code_greater = "billing_organization_code_greater_example"; // string | Filter on BIL-ORG using 'Greater' operator
$billing_organization_code_greater_or_equal = "billing_organization_code_greater_or_equal_example"; // string | Filter on BIL-ORG using 'GreaterOrEqual' operator
$billing_organization_code_is_null = "billing_organization_code_is_null_example"; // string | Filter on BIL-ORG using 'IsNull' operator
$billing_organization_code_is_not_null = "billing_organization_code_is_not_null_example"; // string | Filter on BIL-ORG using 'IsNotNull' operator
$billing_organization_code_like = "billing_organization_code_like_example"; // string | Filter on BIL-ORG using 'Like' operator
$billing_organization_code_not_like = "billing_organization_code_not_like_example"; // string | Filter on BIL-ORG using 'NotLike' operator
$billing_organization_code_contains = "billing_organization_code_contains_example"; // string | Filter on BIL-ORG using 'Contains' operator
$billing_organization_code_not_contains = "billing_organization_code_not_contains_example"; // string | Filter on BIL-ORG using 'NotContains' operator
$billing_organization_code_starts_with = "billing_organization_code_starts_with_example"; // string | Filter on BIL-ORG using 'StartsWith' operator
$billing_organization_code_not_starts_with = "billing_organization_code_not_starts_with_example"; // string | Filter on BIL-ORG using 'NotStartsWith' operator
$billing_organization_code_ends_with = "billing_organization_code_ends_with_example"; // string | Filter on BIL-ORG using 'EndsWith' operator
$billing_organization_code_not_ends_with = "billing_organization_code_not_ends_with_example"; // string | Filter on BIL-ORG using 'NotEndsWith' operator
$billing_organization_code_in = "billing_organization_code_in_example"; // string | Filter on BIL-ORG using 'In' operator
$billing_organization_code_between = "billing_organization_code_between_example"; // string | Filter on BIL-ORG using 'Between' operator

try {
    $result = $apiInstance->conferenceRegistrationSearch($attendee_customer_number, $bill_to_customer_number, $conference_id, $location_id, $billing_organization_code, $attendee_customer_number_not_equal, $attendee_customer_number_less, $attendee_customer_number_less_or_equal, $attendee_customer_number_greater, $attendee_customer_number_greater_or_equal, $attendee_customer_number_is_null, $attendee_customer_number_is_not_null, $attendee_customer_number_like, $attendee_customer_number_not_like, $attendee_customer_number_contains, $attendee_customer_number_not_contains, $attendee_customer_number_starts_with, $attendee_customer_number_not_starts_with, $attendee_customer_number_ends_with, $attendee_customer_number_not_ends_with, $attendee_customer_number_in, $attendee_customer_number_between, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $conference_id_not_equal, $conference_id_less, $conference_id_less_or_equal, $conference_id_greater, $conference_id_greater_or_equal, $conference_id_is_null, $conference_id_is_not_null, $conference_id_like, $conference_id_not_like, $conference_id_contains, $conference_id_not_contains, $conference_id_starts_with, $conference_id_not_starts_with, $conference_id_ends_with, $conference_id_not_ends_with, $conference_id_in, $conference_id_between, $location_id_not_equal, $location_id_less, $location_id_less_or_equal, $location_id_greater, $location_id_greater_or_equal, $location_id_is_null, $location_id_is_not_null, $location_id_like, $location_id_not_like, $location_id_contains, $location_id_not_contains, $location_id_starts_with, $location_id_not_starts_with, $location_id_ends_with, $location_id_not_ends_with, $location_id_in, $location_id_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceRegistrationApi->conferenceRegistrationSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attendee_customer_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **bill_to_customer_number** | **string**| Filter on BIL-CTM using &#39;Equal&#39; operator | [optional]
 **conference_id** | **string**| Filter on CONF-ID using &#39;Equal&#39; operator | [optional]
 **location_id** | **string**| Filter on CONF-LOC using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **attendee_customer_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **attendee_customer_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **attendee_customer_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **attendee_customer_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **attendee_customer_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **attendee_customer_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **attendee_customer_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **attendee_customer_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **attendee_customer_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **attendee_customer_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **attendee_customer_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **attendee_customer_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **attendee_customer_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **attendee_customer_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **attendee_customer_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **attendee_customer_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **attendee_customer_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **bill_to_customer_number_not_equal** | **string**| Filter on BIL-CTM using &#39;NotEqual&#39; operator | [optional]
 **bill_to_customer_number_less** | **string**| Filter on BIL-CTM using &#39;Less&#39; operator | [optional]
 **bill_to_customer_number_less_or_equal** | **string**| Filter on BIL-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **bill_to_customer_number_greater** | **string**| Filter on BIL-CTM using &#39;Greater&#39; operator | [optional]
 **bill_to_customer_number_greater_or_equal** | **string**| Filter on BIL-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **bill_to_customer_number_is_null** | **string**| Filter on BIL-CTM using &#39;IsNull&#39; operator | [optional]
 **bill_to_customer_number_is_not_null** | **string**| Filter on BIL-CTM using &#39;IsNotNull&#39; operator | [optional]
 **bill_to_customer_number_like** | **string**| Filter on BIL-CTM using &#39;Like&#39; operator | [optional]
 **bill_to_customer_number_not_like** | **string**| Filter on BIL-CTM using &#39;NotLike&#39; operator | [optional]
 **bill_to_customer_number_contains** | **string**| Filter on BIL-CTM using &#39;Contains&#39; operator | [optional]
 **bill_to_customer_number_not_contains** | **string**| Filter on BIL-CTM using &#39;NotContains&#39; operator | [optional]
 **bill_to_customer_number_starts_with** | **string**| Filter on BIL-CTM using &#39;StartsWith&#39; operator | [optional]
 **bill_to_customer_number_not_starts_with** | **string**| Filter on BIL-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **bill_to_customer_number_ends_with** | **string**| Filter on BIL-CTM using &#39;EndsWith&#39; operator | [optional]
 **bill_to_customer_number_not_ends_with** | **string**| Filter on BIL-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **bill_to_customer_number_in** | **string**| Filter on BIL-CTM using &#39;In&#39; operator | [optional]
 **bill_to_customer_number_between** | **string**| Filter on BIL-CTM using &#39;Between&#39; operator | [optional]
 **conference_id_not_equal** | **string**| Filter on CONF-ID using &#39;NotEqual&#39; operator | [optional]
 **conference_id_less** | **string**| Filter on CONF-ID using &#39;Less&#39; operator | [optional]
 **conference_id_less_or_equal** | **string**| Filter on CONF-ID using &#39;LessOrEqual&#39; operator | [optional]
 **conference_id_greater** | **string**| Filter on CONF-ID using &#39;Greater&#39; operator | [optional]
 **conference_id_greater_or_equal** | **string**| Filter on CONF-ID using &#39;GreaterOrEqual&#39; operator | [optional]
 **conference_id_is_null** | **string**| Filter on CONF-ID using &#39;IsNull&#39; operator | [optional]
 **conference_id_is_not_null** | **string**| Filter on CONF-ID using &#39;IsNotNull&#39; operator | [optional]
 **conference_id_like** | **string**| Filter on CONF-ID using &#39;Like&#39; operator | [optional]
 **conference_id_not_like** | **string**| Filter on CONF-ID using &#39;NotLike&#39; operator | [optional]
 **conference_id_contains** | **string**| Filter on CONF-ID using &#39;Contains&#39; operator | [optional]
 **conference_id_not_contains** | **string**| Filter on CONF-ID using &#39;NotContains&#39; operator | [optional]
 **conference_id_starts_with** | **string**| Filter on CONF-ID using &#39;StartsWith&#39; operator | [optional]
 **conference_id_not_starts_with** | **string**| Filter on CONF-ID using &#39;NotStartsWith&#39; operator | [optional]
 **conference_id_ends_with** | **string**| Filter on CONF-ID using &#39;EndsWith&#39; operator | [optional]
 **conference_id_not_ends_with** | **string**| Filter on CONF-ID using &#39;NotEndsWith&#39; operator | [optional]
 **conference_id_in** | **string**| Filter on CONF-ID using &#39;In&#39; operator | [optional]
 **conference_id_between** | **string**| Filter on CONF-ID using &#39;Between&#39; operator | [optional]
 **location_id_not_equal** | **string**| Filter on CONF-LOC using &#39;NotEqual&#39; operator | [optional]
 **location_id_less** | **string**| Filter on CONF-LOC using &#39;Less&#39; operator | [optional]
 **location_id_less_or_equal** | **string**| Filter on CONF-LOC using &#39;LessOrEqual&#39; operator | [optional]
 **location_id_greater** | **string**| Filter on CONF-LOC using &#39;Greater&#39; operator | [optional]
 **location_id_greater_or_equal** | **string**| Filter on CONF-LOC using &#39;GreaterOrEqual&#39; operator | [optional]
 **location_id_is_null** | **string**| Filter on CONF-LOC using &#39;IsNull&#39; operator | [optional]
 **location_id_is_not_null** | **string**| Filter on CONF-LOC using &#39;IsNotNull&#39; operator | [optional]
 **location_id_like** | **string**| Filter on CONF-LOC using &#39;Like&#39; operator | [optional]
 **location_id_not_like** | **string**| Filter on CONF-LOC using &#39;NotLike&#39; operator | [optional]
 **location_id_contains** | **string**| Filter on CONF-LOC using &#39;Contains&#39; operator | [optional]
 **location_id_not_contains** | **string**| Filter on CONF-LOC using &#39;NotContains&#39; operator | [optional]
 **location_id_starts_with** | **string**| Filter on CONF-LOC using &#39;StartsWith&#39; operator | [optional]
 **location_id_not_starts_with** | **string**| Filter on CONF-LOC using &#39;NotStartsWith&#39; operator | [optional]
 **location_id_ends_with** | **string**| Filter on CONF-LOC using &#39;EndsWith&#39; operator | [optional]
 **location_id_not_ends_with** | **string**| Filter on CONF-LOC using &#39;NotEndsWith&#39; operator | [optional]
 **location_id_in** | **string**| Filter on CONF-LOC using &#39;In&#39; operator | [optional]
 **location_id_between** | **string**| Filter on CONF-LOC using &#39;Between&#39; operator | [optional]
 **billing_organization_code_not_equal** | **string**| Filter on BIL-ORG using &#39;NotEqual&#39; operator | [optional]
 **billing_organization_code_less** | **string**| Filter on BIL-ORG using &#39;Less&#39; operator | [optional]
 **billing_organization_code_less_or_equal** | **string**| Filter on BIL-ORG using &#39;LessOrEqual&#39; operator | [optional]
 **billing_organization_code_greater** | **string**| Filter on BIL-ORG using &#39;Greater&#39; operator | [optional]
 **billing_organization_code_greater_or_equal** | **string**| Filter on BIL-ORG using &#39;GreaterOrEqual&#39; operator | [optional]
 **billing_organization_code_is_null** | **string**| Filter on BIL-ORG using &#39;IsNull&#39; operator | [optional]
 **billing_organization_code_is_not_null** | **string**| Filter on BIL-ORG using &#39;IsNotNull&#39; operator | [optional]
 **billing_organization_code_like** | **string**| Filter on BIL-ORG using &#39;Like&#39; operator | [optional]
 **billing_organization_code_not_like** | **string**| Filter on BIL-ORG using &#39;NotLike&#39; operator | [optional]
 **billing_organization_code_contains** | **string**| Filter on BIL-ORG using &#39;Contains&#39; operator | [optional]
 **billing_organization_code_not_contains** | **string**| Filter on BIL-ORG using &#39;NotContains&#39; operator | [optional]
 **billing_organization_code_starts_with** | **string**| Filter on BIL-ORG using &#39;StartsWith&#39; operator | [optional]
 **billing_organization_code_not_starts_with** | **string**| Filter on BIL-ORG using &#39;NotStartsWith&#39; operator | [optional]
 **billing_organization_code_ends_with** | **string**| Filter on BIL-ORG using &#39;EndsWith&#39; operator | [optional]
 **billing_organization_code_not_ends_with** | **string**| Filter on BIL-ORG using &#39;NotEndsWith&#39; operator | [optional]
 **billing_organization_code_in** | **string**| Filter on BIL-ORG using &#39;In&#39; operator | [optional]
 **billing_organization_code_between** | **string**| Filter on BIL-ORG using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultConferenceRegistration**](../Model/SearchResultConferenceRegistration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

