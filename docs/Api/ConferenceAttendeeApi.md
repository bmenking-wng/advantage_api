# Swagger\Client\ConferenceAttendeeApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conferenceAttendeeCancel**](ConferenceAttendeeApi.md#conferenceAttendeeCancel) | **POST** /conference-registrations/{registrationId}/attendees/{registrationSequence}/cancel | Removes an attendee from a conference registration
[**conferenceAttendeeGet**](ConferenceAttendeeApi.md#conferenceAttendeeGet) | **GET** /conference-registrations/{registrationId}/attendees/{registrationSequence} | Gets a specific conference attendee by ID and sequence
[**conferenceAttendeeUpdate**](ConferenceAttendeeApi.md#conferenceAttendeeUpdate) | **POST** /conference-registrations/{registrationId}/attendees/{registrationSequence} | Updates the specified attendee on a conference registration


# **conferenceAttendeeCancel**
> conferenceAttendeeCancel($registration_id, $registration_sequence, $request)

Removes an attendee from a conference registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceAttendeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_id = "registration_id_example"; // string | 
$registration_sequence = "registration_sequence_example"; // string | 
$request = new \Swagger\Client\Model\ConferenceAttendeeCancelRequest(); // \Swagger\Client\Model\ConferenceAttendeeCancelRequest | 

try {
    $apiInstance->conferenceAttendeeCancel($registration_id, $registration_sequence, $request);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceAttendeeApi->conferenceAttendeeCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**|  |
 **registration_sequence** | **string**|  |
 **request** | [**\Swagger\Client\Model\ConferenceAttendeeCancelRequest**](../Model/ConferenceAttendeeCancelRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceAttendeeGet**
> \Swagger\Client\Model\ConferenceAttendee conferenceAttendeeGet($registration_id, $registration_sequence)

Gets a specific conference attendee by ID and sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceAttendeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_id = "registration_id_example"; // string | 
$registration_sequence = "registration_sequence_example"; // string | 

try {
    $result = $apiInstance->conferenceAttendeeGet($registration_id, $registration_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceAttendeeApi->conferenceAttendeeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**|  |
 **registration_sequence** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConferenceAttendee**](../Model/ConferenceAttendee.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceAttendeeUpdate**
> conferenceAttendeeUpdate($registration_id, $registration_sequence, $request)

Updates the specified attendee on a conference registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceAttendeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_id = "registration_id_example"; // string | 
$registration_sequence = "registration_sequence_example"; // string | 
$request = new \Swagger\Client\Model\ConferenceAttendeeUpdateRequest(); // \Swagger\Client\Model\ConferenceAttendeeUpdateRequest | 

try {
    $apiInstance->conferenceAttendeeUpdate($registration_id, $registration_sequence, $request);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceAttendeeApi->conferenceAttendeeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**|  |
 **registration_sequence** | **string**|  |
 **request** | [**\Swagger\Client\Model\ConferenceAttendeeUpdateRequest**](../Model/ConferenceAttendeeUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

