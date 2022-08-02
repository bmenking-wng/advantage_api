# Swagger\Client\CallListApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callListEndCall**](CallListApi.md#callListEndCall) | **POST** /call-lists/end-call | Begins an inbound call.  The inbound call list is unique for each rep and, and will only contain the inbound  calls that were not linked to existing calls.
[**callListFindOrAddInboundCallList**](CallListApi.md#callListFindOrAddInboundCallList) | **POST** /call-lists/begin-inbound-call | Finds or creates the inbound call list for the given sales rep.
[**callListGet**](CallListApi.md#callListGet) | **GET** /call-lists/{listId}/{listDate} | Gets Sales Rep.
[**callListGetCallListAssignments**](CallListApi.md#callListGetCallListAssignments) | **GET** /call-lists/{listId}/{listDate}/assignments | Gets call assignments for the given call list.
[**callListGetCallListAssignmentsBySalesRep**](CallListApi.md#callListGetCallListAssignmentsBySalesRep) | **GET** /call-lists/{salesRepCode}/assignments | Gets call assignments for the given call list.
[**callListGetCallListOutcomes**](CallListApi.md#callListGetCallListOutcomes) | **GET** /call-lists/{listId}/{listDate}/outcomes | Get information about each outcome for a particular call list.
[**callListGetCallOutcomes**](CallListApi.md#callListGetCallOutcomes) | **GET** /call-lists/call-outcomes | Returns the resolution codes for each outcome code valid for the current call.  Returns all resolution/outcome codes if an empty value is passed in for listId.
[**callListGetCallOutcomesBySalesRep**](CallListApi.md#callListGetCallOutcomesBySalesRep) | **GET** /call-lists/{salesRepCode}/outcomes | Get information about each outcome for a particular sales rep.
[**callListGetCallsList**](CallListApi.md#callListGetCallsList) | **GET** /call-lists/{listId}/{listDate}/calls | Gets the calls for a call list
[**callListGetList**](CallListApi.md#callListGetList) | **GET** /call-lists/{listId} | Gets List of Call Lists.
[**callListGetValidCallOutcomes**](CallListApi.md#callListGetValidCallOutcomes) | **GET** /call-lists/{listId}/{listDate}/valid-outcomes | Returns the list of valid call outcomes for the specified call list
[**callListSearch**](CallListApi.md#callListSearch) | **GET** /call-lists | Gets list of call lists.
[**callListUpdateCallListAssignment**](CallListApi.md#callListUpdateCallListAssignment) | **POST** /call-lists/update | Updates assigned call totals for sales representatives


# **callListEndCall**
> callListEndCall($end_call_request)

Begins an inbound call.  The inbound call list is unique for each rep and, and will only contain the inbound  calls that were not linked to existing calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$end_call_request = new \Swagger\Client\Model\EndCallRequest(); // \Swagger\Client\Model\EndCallRequest | 

try {
    $apiInstance->callListEndCall($end_call_request);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListEndCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_call_request** | [**\Swagger\Client\Model\EndCallRequest**](../Model/EndCallRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListFindOrAddInboundCallList**
> \Swagger\Client\Model\Call callListFindOrAddInboundCallList($inbound_call_list_create_request)

Finds or creates the inbound call list for the given sales rep.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_call_list_create_request = new \Swagger\Client\Model\InboundCallListCreateRequest(); // \Swagger\Client\Model\InboundCallListCreateRequest | 

try {
    $result = $apiInstance->callListFindOrAddInboundCallList($inbound_call_list_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListFindOrAddInboundCallList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_call_list_create_request** | [**\Swagger\Client\Model\InboundCallListCreateRequest**](../Model/InboundCallListCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Call**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGet**
> \Swagger\Client\Model\CallList callListGet($list_id, $list_date, $include_calls, $filter_begin_date, $filter_end_date)

Gets Sales Rep.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = "list_id_example"; // string | List ID
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date
$include_calls = true; // bool | True to include a collection of the calls belonging to the call list
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest call date to include
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest call date to include

try {
    $result = $apiInstance->callListGet($list_id, $list_date, $include_calls, $filter_begin_date, $filter_end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| List ID |
 **list_date** | **\DateTime**| List Date |
 **include_calls** | **bool**| True to include a collection of the calls belonging to the call list | [optional]
 **filter_begin_date** | **\DateTime**| The earliest call date to include | [optional]
 **filter_end_date** | **\DateTime**| The latest call date to include | [optional]

### Return type

[**\Swagger\Client\Model\CallList**](../Model/CallList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetCallListAssignments**
> \Swagger\Client\Model\SearchResultCallListAssignment callListGetCallListAssignments($list_id, $list_date)

Gets call assignments for the given call list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = "list_id_example"; // string | List ID
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date

try {
    $result = $apiInstance->callListGetCallListAssignments($list_id, $list_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetCallListAssignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| List ID |
 **list_date** | **\DateTime**| List Date |

### Return type

[**\Swagger\Client\Model\SearchResultCallListAssignment**](../Model/SearchResultCallListAssignment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetCallListAssignmentsBySalesRep**
> \Swagger\Client\Model\CallListAssignment callListGetCallListAssignmentsBySalesRep($sales_rep_code, $filter_begin_date, $filter_end_date, $filter_list_code, $filter_list_date)

Gets call assignments for the given call list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | SalesRepCode
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest call date to include in statistics.
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest call date to include in statistics.
$filter_list_code = "filter_list_code_example"; // string | List code of the list to limit the statistics to or null or empty string to compile  statistics across lists.
$filter_list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date associated with the call list

try {
    $result = $apiInstance->callListGetCallListAssignmentsBySalesRep($sales_rep_code, $filter_begin_date, $filter_end_date, $filter_list_code, $filter_list_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetCallListAssignmentsBySalesRep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| SalesRepCode |
 **filter_begin_date** | **\DateTime**| The earliest call date to include in statistics. | [optional]
 **filter_end_date** | **\DateTime**| The latest call date to include in statistics. | [optional]
 **filter_list_code** | **string**| List code of the list to limit the statistics to or null or empty string to compile  statistics across lists. | [optional]
 **filter_list_date** | **\DateTime**| The date associated with the call list | [optional]

### Return type

[**\Swagger\Client\Model\CallListAssignment**](../Model/CallListAssignment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetCallListOutcomes**
> \Swagger\Client\Model\SearchResultCallListOutcome callListGetCallListOutcomes($list_id, $list_date, $filter_begin_date, $filter_end_date, $filter_sales_rep_code)

Get information about each outcome for a particular call list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = "list_id_example"; // string | List ID
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest call date to include in statistics.
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest call date to include in statistics.
$filter_sales_rep_code = "filter_sales_rep_code_example"; // string | The sales rep code to filter by

try {
    $result = $apiInstance->callListGetCallListOutcomes($list_id, $list_date, $filter_begin_date, $filter_end_date, $filter_sales_rep_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetCallListOutcomes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| List ID |
 **list_date** | **\DateTime**| List Date |
 **filter_begin_date** | **\DateTime**| The earliest call date to include in statistics. | [optional]
 **filter_end_date** | **\DateTime**| The latest call date to include in statistics. | [optional]
 **filter_sales_rep_code** | **string**| The sales rep code to filter by | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCallListOutcome**](../Model/SearchResultCallListOutcome.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetCallOutcomes**
> \Swagger\Client\Model\SearchResultCallOutcome callListGetCallOutcomes($is_inbound, $close_call_outcome, $is_callback_action, $list_id, $list_date)

Returns the resolution codes for each outcome code valid for the current call.  Returns all resolution/outcome codes if an empty value is passed in for listId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_inbound = true; // bool | Is call inbound?
$close_call_outcome = true; // bool | Is this a close call outcome?
$is_callback_action = true; // bool | Is this a callback action?
$list_id = "list_id_example"; // string | List ID, empty value indicates that all resolution codes should be returned
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date

try {
    $result = $apiInstance->callListGetCallOutcomes($is_inbound, $close_call_outcome, $is_callback_action, $list_id, $list_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetCallOutcomes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_inbound** | **bool**| Is call inbound? |
 **close_call_outcome** | **bool**| Is this a close call outcome? |
 **is_callback_action** | **bool**| Is this a callback action? |
 **list_id** | **string**| List ID, empty value indicates that all resolution codes should be returned | [optional]
 **list_date** | **\DateTime**| List Date | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCallOutcome**](../Model/SearchResultCallOutcome.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetCallOutcomesBySalesRep**
> \Swagger\Client\Model\SearchResultCallListOutcome callListGetCallOutcomesBySalesRep($sales_rep_code, $filter_begin_date, $filter_end_date, $filter_sales_rep_code)

Get information about each outcome for a particular sales rep.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales Rep Code
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest call date to include in statistics.
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest call date to include in statistics.
$filter_sales_rep_code = "filter_sales_rep_code_example"; // string | The sales rep code to filter by

try {
    $result = $apiInstance->callListGetCallOutcomesBySalesRep($sales_rep_code, $filter_begin_date, $filter_end_date, $filter_sales_rep_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetCallOutcomesBySalesRep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales Rep Code |
 **filter_begin_date** | **\DateTime**| The earliest call date to include in statistics. | [optional]
 **filter_end_date** | **\DateTime**| The latest call date to include in statistics. | [optional]
 **filter_sales_rep_code** | **string**| The sales rep code to filter by | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCallListOutcome**](../Model/SearchResultCallListOutcome.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetCallsList**
> \Swagger\Client\Model\SearchResultCall callListGetCallsList($list_id, $list_date, $include_callbacks)

Gets the calls for a call list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = "list_id_example"; // string | List ID
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date
$include_callbacks = true; // bool | True to include callbacks

try {
    $result = $apiInstance->callListGetCallsList($list_id, $list_date, $include_callbacks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetCallsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| List ID |
 **list_date** | **\DateTime**| List Date |
 **include_callbacks** | **bool**| True to include callbacks | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCall**](../Model/SearchResultCall.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetList**
> \Swagger\Client\Model\SearchResultCallList callListGetList($list_id)

Gets List of Call Lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = "list_id_example"; // string | List ID

try {
    $result = $apiInstance->callListGetList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| List ID |

### Return type

[**\Swagger\Client\Model\SearchResultCallList**](../Model/SearchResultCallList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListGetValidCallOutcomes**
> \Swagger\Client\Model\SearchResultFieldValidValue callListGetValidCallOutcomes($list_id, $list_date, $is_inbound, $close_call_outcome, $is_callback_action)

Returns the list of valid call outcomes for the specified call list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = "list_id_example"; // string | List ID
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date
$is_inbound = true; // bool | Is call inbound?
$close_call_outcome = true; // bool | Is this a close call outcome?
$is_callback_action = true; // bool | Is this a callback action?

try {
    $result = $apiInstance->callListGetValidCallOutcomes($list_id, $list_date, $is_inbound, $close_call_outcome, $is_callback_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListGetValidCallOutcomes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| List ID |
 **list_date** | **\DateTime**| List Date |
 **is_inbound** | **bool**| Is call inbound? |
 **close_call_outcome** | **bool**| Is this a close call outcome? |
 **is_callback_action** | **bool**| Is this a callback action? |

### Return type

[**\Swagger\Client\Model\SearchResultFieldValidValue**](../Model/SearchResultFieldValidValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListSearch**
> \Swagger\Client\Model\SearchResultCallList callListSearch($include_inactive_lists, $only_include_lists_with_calls_remaining, $pager_skip, $pager_take, $sales_rep_code, $sales_manager_code, $list_id, $list_date, $is_remaining_call, $is_callback, $sales_rep_code_not_equal, $sales_rep_code_less, $sales_rep_code_less_or_equal, $sales_rep_code_greater, $sales_rep_code_greater_or_equal, $sales_rep_code_is_null, $sales_rep_code_is_not_null, $sales_rep_code_like, $sales_rep_code_not_like, $sales_rep_code_contains, $sales_rep_code_not_contains, $sales_rep_code_starts_with, $sales_rep_code_not_starts_with, $sales_rep_code_ends_with, $sales_rep_code_not_ends_with, $sales_rep_code_in, $sales_rep_code_between, $sales_manager_code_not_equal, $sales_manager_code_less, $sales_manager_code_less_or_equal, $sales_manager_code_greater, $sales_manager_code_greater_or_equal, $sales_manager_code_is_null, $sales_manager_code_is_not_null, $sales_manager_code_like, $sales_manager_code_not_like, $sales_manager_code_contains, $sales_manager_code_not_contains, $sales_manager_code_starts_with, $sales_manager_code_not_starts_with, $sales_manager_code_ends_with, $sales_manager_code_not_ends_with, $sales_manager_code_in, $sales_manager_code_between, $list_id_not_equal, $list_id_less, $list_id_less_or_equal, $list_id_greater, $list_id_greater_or_equal, $list_id_is_null, $list_id_is_not_null, $list_id_like, $list_id_not_like, $list_id_contains, $list_id_not_contains, $list_id_starts_with, $list_id_not_starts_with, $list_id_ends_with, $list_id_not_ends_with, $list_id_in, $list_id_between, $list_date_not_equal, $list_date_less, $list_date_less_or_equal, $list_date_greater, $list_date_greater_or_equal, $list_date_is_null, $list_date_is_not_null, $list_date_like, $list_date_not_like, $list_date_contains, $list_date_not_contains, $list_date_starts_with, $list_date_not_starts_with, $list_date_ends_with, $list_date_not_ends_with, $list_date_in, $list_date_between, $is_remaining_call_not_equal, $is_remaining_call_less, $is_remaining_call_less_or_equal, $is_remaining_call_greater, $is_remaining_call_greater_or_equal, $is_remaining_call_is_null, $is_remaining_call_is_not_null, $is_remaining_call_like, $is_remaining_call_not_like, $is_remaining_call_contains, $is_remaining_call_not_contains, $is_remaining_call_starts_with, $is_remaining_call_not_starts_with, $is_remaining_call_ends_with, $is_remaining_call_not_ends_with, $is_remaining_call_in, $is_remaining_call_between, $is_callback_not_equal, $is_callback_less, $is_callback_less_or_equal, $is_callback_greater, $is_callback_greater_or_equal, $is_callback_is_null, $is_callback_is_not_null, $is_callback_like, $is_callback_not_like, $is_callback_contains, $is_callback_not_contains, $is_callback_starts_with, $is_callback_not_starts_with, $is_callback_ends_with, $is_callback_not_ends_with, $is_callback_in, $is_callback_between)

Gets list of call lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_inactive_lists = true; // bool | 
$only_include_lists_with_calls_remaining = true; // bool | 
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$sales_rep_code = "sales_rep_code_example"; // string | Filter on SLM-NUM using 'Equal' operator
$sales_manager_code = "sales_manager_code_example"; // string | Filter on SLM-NUM using 'Equal' operator
$list_id = "list_id_example"; // string | Filter on LIST-ID using 'Equal' operator
$list_date = "list_date_example"; // string | Filter on LIST-DTE using 'Equal' operator
$is_remaining_call = "is_remaining_call_example"; // string | Filter on YES-NO using 'Equal' operator
$is_callback = "is_callback_example"; // string | Filter on YES-NO using 'Equal' operator
$sales_rep_code_not_equal = "sales_rep_code_not_equal_example"; // string | Filter on SLM-NUM using 'NotEqual' operator
$sales_rep_code_less = "sales_rep_code_less_example"; // string | Filter on SLM-NUM using 'Less' operator
$sales_rep_code_less_or_equal = "sales_rep_code_less_or_equal_example"; // string | Filter on SLM-NUM using 'LessOrEqual' operator
$sales_rep_code_greater = "sales_rep_code_greater_example"; // string | Filter on SLM-NUM using 'Greater' operator
$sales_rep_code_greater_or_equal = "sales_rep_code_greater_or_equal_example"; // string | Filter on SLM-NUM using 'GreaterOrEqual' operator
$sales_rep_code_is_null = "sales_rep_code_is_null_example"; // string | Filter on SLM-NUM using 'IsNull' operator
$sales_rep_code_is_not_null = "sales_rep_code_is_not_null_example"; // string | Filter on SLM-NUM using 'IsNotNull' operator
$sales_rep_code_like = "sales_rep_code_like_example"; // string | Filter on SLM-NUM using 'Like' operator
$sales_rep_code_not_like = "sales_rep_code_not_like_example"; // string | Filter on SLM-NUM using 'NotLike' operator
$sales_rep_code_contains = "sales_rep_code_contains_example"; // string | Filter on SLM-NUM using 'Contains' operator
$sales_rep_code_not_contains = "sales_rep_code_not_contains_example"; // string | Filter on SLM-NUM using 'NotContains' operator
$sales_rep_code_starts_with = "sales_rep_code_starts_with_example"; // string | Filter on SLM-NUM using 'StartsWith' operator
$sales_rep_code_not_starts_with = "sales_rep_code_not_starts_with_example"; // string | Filter on SLM-NUM using 'NotStartsWith' operator
$sales_rep_code_ends_with = "sales_rep_code_ends_with_example"; // string | Filter on SLM-NUM using 'EndsWith' operator
$sales_rep_code_not_ends_with = "sales_rep_code_not_ends_with_example"; // string | Filter on SLM-NUM using 'NotEndsWith' operator
$sales_rep_code_in = "sales_rep_code_in_example"; // string | Filter on SLM-NUM using 'In' operator
$sales_rep_code_between = "sales_rep_code_between_example"; // string | Filter on SLM-NUM using 'Between' operator
$sales_manager_code_not_equal = "sales_manager_code_not_equal_example"; // string | Filter on SLM-NUM using 'NotEqual' operator
$sales_manager_code_less = "sales_manager_code_less_example"; // string | Filter on SLM-NUM using 'Less' operator
$sales_manager_code_less_or_equal = "sales_manager_code_less_or_equal_example"; // string | Filter on SLM-NUM using 'LessOrEqual' operator
$sales_manager_code_greater = "sales_manager_code_greater_example"; // string | Filter on SLM-NUM using 'Greater' operator
$sales_manager_code_greater_or_equal = "sales_manager_code_greater_or_equal_example"; // string | Filter on SLM-NUM using 'GreaterOrEqual' operator
$sales_manager_code_is_null = "sales_manager_code_is_null_example"; // string | Filter on SLM-NUM using 'IsNull' operator
$sales_manager_code_is_not_null = "sales_manager_code_is_not_null_example"; // string | Filter on SLM-NUM using 'IsNotNull' operator
$sales_manager_code_like = "sales_manager_code_like_example"; // string | Filter on SLM-NUM using 'Like' operator
$sales_manager_code_not_like = "sales_manager_code_not_like_example"; // string | Filter on SLM-NUM using 'NotLike' operator
$sales_manager_code_contains = "sales_manager_code_contains_example"; // string | Filter on SLM-NUM using 'Contains' operator
$sales_manager_code_not_contains = "sales_manager_code_not_contains_example"; // string | Filter on SLM-NUM using 'NotContains' operator
$sales_manager_code_starts_with = "sales_manager_code_starts_with_example"; // string | Filter on SLM-NUM using 'StartsWith' operator
$sales_manager_code_not_starts_with = "sales_manager_code_not_starts_with_example"; // string | Filter on SLM-NUM using 'NotStartsWith' operator
$sales_manager_code_ends_with = "sales_manager_code_ends_with_example"; // string | Filter on SLM-NUM using 'EndsWith' operator
$sales_manager_code_not_ends_with = "sales_manager_code_not_ends_with_example"; // string | Filter on SLM-NUM using 'NotEndsWith' operator
$sales_manager_code_in = "sales_manager_code_in_example"; // string | Filter on SLM-NUM using 'In' operator
$sales_manager_code_between = "sales_manager_code_between_example"; // string | Filter on SLM-NUM using 'Between' operator
$list_id_not_equal = "list_id_not_equal_example"; // string | Filter on LIST-ID using 'NotEqual' operator
$list_id_less = "list_id_less_example"; // string | Filter on LIST-ID using 'Less' operator
$list_id_less_or_equal = "list_id_less_or_equal_example"; // string | Filter on LIST-ID using 'LessOrEqual' operator
$list_id_greater = "list_id_greater_example"; // string | Filter on LIST-ID using 'Greater' operator
$list_id_greater_or_equal = "list_id_greater_or_equal_example"; // string | Filter on LIST-ID using 'GreaterOrEqual' operator
$list_id_is_null = "list_id_is_null_example"; // string | Filter on LIST-ID using 'IsNull' operator
$list_id_is_not_null = "list_id_is_not_null_example"; // string | Filter on LIST-ID using 'IsNotNull' operator
$list_id_like = "list_id_like_example"; // string | Filter on LIST-ID using 'Like' operator
$list_id_not_like = "list_id_not_like_example"; // string | Filter on LIST-ID using 'NotLike' operator
$list_id_contains = "list_id_contains_example"; // string | Filter on LIST-ID using 'Contains' operator
$list_id_not_contains = "list_id_not_contains_example"; // string | Filter on LIST-ID using 'NotContains' operator
$list_id_starts_with = "list_id_starts_with_example"; // string | Filter on LIST-ID using 'StartsWith' operator
$list_id_not_starts_with = "list_id_not_starts_with_example"; // string | Filter on LIST-ID using 'NotStartsWith' operator
$list_id_ends_with = "list_id_ends_with_example"; // string | Filter on LIST-ID using 'EndsWith' operator
$list_id_not_ends_with = "list_id_not_ends_with_example"; // string | Filter on LIST-ID using 'NotEndsWith' operator
$list_id_in = "list_id_in_example"; // string | Filter on LIST-ID using 'In' operator
$list_id_between = "list_id_between_example"; // string | Filter on LIST-ID using 'Between' operator
$list_date_not_equal = "list_date_not_equal_example"; // string | Filter on LIST-DTE using 'NotEqual' operator
$list_date_less = "list_date_less_example"; // string | Filter on LIST-DTE using 'Less' operator
$list_date_less_or_equal = "list_date_less_or_equal_example"; // string | Filter on LIST-DTE using 'LessOrEqual' operator
$list_date_greater = "list_date_greater_example"; // string | Filter on LIST-DTE using 'Greater' operator
$list_date_greater_or_equal = "list_date_greater_or_equal_example"; // string | Filter on LIST-DTE using 'GreaterOrEqual' operator
$list_date_is_null = "list_date_is_null_example"; // string | Filter on LIST-DTE using 'IsNull' operator
$list_date_is_not_null = "list_date_is_not_null_example"; // string | Filter on LIST-DTE using 'IsNotNull' operator
$list_date_like = "list_date_like_example"; // string | Filter on LIST-DTE using 'Like' operator
$list_date_not_like = "list_date_not_like_example"; // string | Filter on LIST-DTE using 'NotLike' operator
$list_date_contains = "list_date_contains_example"; // string | Filter on LIST-DTE using 'Contains' operator
$list_date_not_contains = "list_date_not_contains_example"; // string | Filter on LIST-DTE using 'NotContains' operator
$list_date_starts_with = "list_date_starts_with_example"; // string | Filter on LIST-DTE using 'StartsWith' operator
$list_date_not_starts_with = "list_date_not_starts_with_example"; // string | Filter on LIST-DTE using 'NotStartsWith' operator
$list_date_ends_with = "list_date_ends_with_example"; // string | Filter on LIST-DTE using 'EndsWith' operator
$list_date_not_ends_with = "list_date_not_ends_with_example"; // string | Filter on LIST-DTE using 'NotEndsWith' operator
$list_date_in = "list_date_in_example"; // string | Filter on LIST-DTE using 'In' operator
$list_date_between = "list_date_between_example"; // string | Filter on LIST-DTE using 'Between' operator
$is_remaining_call_not_equal = "is_remaining_call_not_equal_example"; // string | Filter on YES-NO using 'NotEqual' operator
$is_remaining_call_less = "is_remaining_call_less_example"; // string | Filter on YES-NO using 'Less' operator
$is_remaining_call_less_or_equal = "is_remaining_call_less_or_equal_example"; // string | Filter on YES-NO using 'LessOrEqual' operator
$is_remaining_call_greater = "is_remaining_call_greater_example"; // string | Filter on YES-NO using 'Greater' operator
$is_remaining_call_greater_or_equal = "is_remaining_call_greater_or_equal_example"; // string | Filter on YES-NO using 'GreaterOrEqual' operator
$is_remaining_call_is_null = "is_remaining_call_is_null_example"; // string | Filter on YES-NO using 'IsNull' operator
$is_remaining_call_is_not_null = "is_remaining_call_is_not_null_example"; // string | Filter on YES-NO using 'IsNotNull' operator
$is_remaining_call_like = "is_remaining_call_like_example"; // string | Filter on YES-NO using 'Like' operator
$is_remaining_call_not_like = "is_remaining_call_not_like_example"; // string | Filter on YES-NO using 'NotLike' operator
$is_remaining_call_contains = "is_remaining_call_contains_example"; // string | Filter on YES-NO using 'Contains' operator
$is_remaining_call_not_contains = "is_remaining_call_not_contains_example"; // string | Filter on YES-NO using 'NotContains' operator
$is_remaining_call_starts_with = "is_remaining_call_starts_with_example"; // string | Filter on YES-NO using 'StartsWith' operator
$is_remaining_call_not_starts_with = "is_remaining_call_not_starts_with_example"; // string | Filter on YES-NO using 'NotStartsWith' operator
$is_remaining_call_ends_with = "is_remaining_call_ends_with_example"; // string | Filter on YES-NO using 'EndsWith' operator
$is_remaining_call_not_ends_with = "is_remaining_call_not_ends_with_example"; // string | Filter on YES-NO using 'NotEndsWith' operator
$is_remaining_call_in = "is_remaining_call_in_example"; // string | Filter on YES-NO using 'In' operator
$is_remaining_call_between = "is_remaining_call_between_example"; // string | Filter on YES-NO using 'Between' operator
$is_callback_not_equal = "is_callback_not_equal_example"; // string | Filter on YES-NO using 'NotEqual' operator
$is_callback_less = "is_callback_less_example"; // string | Filter on YES-NO using 'Less' operator
$is_callback_less_or_equal = "is_callback_less_or_equal_example"; // string | Filter on YES-NO using 'LessOrEqual' operator
$is_callback_greater = "is_callback_greater_example"; // string | Filter on YES-NO using 'Greater' operator
$is_callback_greater_or_equal = "is_callback_greater_or_equal_example"; // string | Filter on YES-NO using 'GreaterOrEqual' operator
$is_callback_is_null = "is_callback_is_null_example"; // string | Filter on YES-NO using 'IsNull' operator
$is_callback_is_not_null = "is_callback_is_not_null_example"; // string | Filter on YES-NO using 'IsNotNull' operator
$is_callback_like = "is_callback_like_example"; // string | Filter on YES-NO using 'Like' operator
$is_callback_not_like = "is_callback_not_like_example"; // string | Filter on YES-NO using 'NotLike' operator
$is_callback_contains = "is_callback_contains_example"; // string | Filter on YES-NO using 'Contains' operator
$is_callback_not_contains = "is_callback_not_contains_example"; // string | Filter on YES-NO using 'NotContains' operator
$is_callback_starts_with = "is_callback_starts_with_example"; // string | Filter on YES-NO using 'StartsWith' operator
$is_callback_not_starts_with = "is_callback_not_starts_with_example"; // string | Filter on YES-NO using 'NotStartsWith' operator
$is_callback_ends_with = "is_callback_ends_with_example"; // string | Filter on YES-NO using 'EndsWith' operator
$is_callback_not_ends_with = "is_callback_not_ends_with_example"; // string | Filter on YES-NO using 'NotEndsWith' operator
$is_callback_in = "is_callback_in_example"; // string | Filter on YES-NO using 'In' operator
$is_callback_between = "is_callback_between_example"; // string | Filter on YES-NO using 'Between' operator

try {
    $result = $apiInstance->callListSearch($include_inactive_lists, $only_include_lists_with_calls_remaining, $pager_skip, $pager_take, $sales_rep_code, $sales_manager_code, $list_id, $list_date, $is_remaining_call, $is_callback, $sales_rep_code_not_equal, $sales_rep_code_less, $sales_rep_code_less_or_equal, $sales_rep_code_greater, $sales_rep_code_greater_or_equal, $sales_rep_code_is_null, $sales_rep_code_is_not_null, $sales_rep_code_like, $sales_rep_code_not_like, $sales_rep_code_contains, $sales_rep_code_not_contains, $sales_rep_code_starts_with, $sales_rep_code_not_starts_with, $sales_rep_code_ends_with, $sales_rep_code_not_ends_with, $sales_rep_code_in, $sales_rep_code_between, $sales_manager_code_not_equal, $sales_manager_code_less, $sales_manager_code_less_or_equal, $sales_manager_code_greater, $sales_manager_code_greater_or_equal, $sales_manager_code_is_null, $sales_manager_code_is_not_null, $sales_manager_code_like, $sales_manager_code_not_like, $sales_manager_code_contains, $sales_manager_code_not_contains, $sales_manager_code_starts_with, $sales_manager_code_not_starts_with, $sales_manager_code_ends_with, $sales_manager_code_not_ends_with, $sales_manager_code_in, $sales_manager_code_between, $list_id_not_equal, $list_id_less, $list_id_less_or_equal, $list_id_greater, $list_id_greater_or_equal, $list_id_is_null, $list_id_is_not_null, $list_id_like, $list_id_not_like, $list_id_contains, $list_id_not_contains, $list_id_starts_with, $list_id_not_starts_with, $list_id_ends_with, $list_id_not_ends_with, $list_id_in, $list_id_between, $list_date_not_equal, $list_date_less, $list_date_less_or_equal, $list_date_greater, $list_date_greater_or_equal, $list_date_is_null, $list_date_is_not_null, $list_date_like, $list_date_not_like, $list_date_contains, $list_date_not_contains, $list_date_starts_with, $list_date_not_starts_with, $list_date_ends_with, $list_date_not_ends_with, $list_date_in, $list_date_between, $is_remaining_call_not_equal, $is_remaining_call_less, $is_remaining_call_less_or_equal, $is_remaining_call_greater, $is_remaining_call_greater_or_equal, $is_remaining_call_is_null, $is_remaining_call_is_not_null, $is_remaining_call_like, $is_remaining_call_not_like, $is_remaining_call_contains, $is_remaining_call_not_contains, $is_remaining_call_starts_with, $is_remaining_call_not_starts_with, $is_remaining_call_ends_with, $is_remaining_call_not_ends_with, $is_remaining_call_in, $is_remaining_call_between, $is_callback_not_equal, $is_callback_less, $is_callback_less_or_equal, $is_callback_greater, $is_callback_greater_or_equal, $is_callback_is_null, $is_callback_is_not_null, $is_callback_like, $is_callback_not_like, $is_callback_contains, $is_callback_not_contains, $is_callback_starts_with, $is_callback_not_starts_with, $is_callback_ends_with, $is_callback_not_ends_with, $is_callback_in, $is_callback_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_inactive_lists** | **bool**|  | [optional]
 **only_include_lists_with_calls_remaining** | **bool**|  | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **sales_rep_code** | **string**| Filter on SLM-NUM using &#39;Equal&#39; operator | [optional]
 **sales_manager_code** | **string**| Filter on SLM-NUM using &#39;Equal&#39; operator | [optional]
 **list_id** | **string**| Filter on LIST-ID using &#39;Equal&#39; operator | [optional]
 **list_date** | **string**| Filter on LIST-DTE using &#39;Equal&#39; operator | [optional]
 **is_remaining_call** | **string**| Filter on YES-NO using &#39;Equal&#39; operator | [optional]
 **is_callback** | **string**| Filter on YES-NO using &#39;Equal&#39; operator | [optional]
 **sales_rep_code_not_equal** | **string**| Filter on SLM-NUM using &#39;NotEqual&#39; operator | [optional]
 **sales_rep_code_less** | **string**| Filter on SLM-NUM using &#39;Less&#39; operator | [optional]
 **sales_rep_code_less_or_equal** | **string**| Filter on SLM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **sales_rep_code_greater** | **string**| Filter on SLM-NUM using &#39;Greater&#39; operator | [optional]
 **sales_rep_code_greater_or_equal** | **string**| Filter on SLM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **sales_rep_code_is_null** | **string**| Filter on SLM-NUM using &#39;IsNull&#39; operator | [optional]
 **sales_rep_code_is_not_null** | **string**| Filter on SLM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **sales_rep_code_like** | **string**| Filter on SLM-NUM using &#39;Like&#39; operator | [optional]
 **sales_rep_code_not_like** | **string**| Filter on SLM-NUM using &#39;NotLike&#39; operator | [optional]
 **sales_rep_code_contains** | **string**| Filter on SLM-NUM using &#39;Contains&#39; operator | [optional]
 **sales_rep_code_not_contains** | **string**| Filter on SLM-NUM using &#39;NotContains&#39; operator | [optional]
 **sales_rep_code_starts_with** | **string**| Filter on SLM-NUM using &#39;StartsWith&#39; operator | [optional]
 **sales_rep_code_not_starts_with** | **string**| Filter on SLM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **sales_rep_code_ends_with** | **string**| Filter on SLM-NUM using &#39;EndsWith&#39; operator | [optional]
 **sales_rep_code_not_ends_with** | **string**| Filter on SLM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **sales_rep_code_in** | **string**| Filter on SLM-NUM using &#39;In&#39; operator | [optional]
 **sales_rep_code_between** | **string**| Filter on SLM-NUM using &#39;Between&#39; operator | [optional]
 **sales_manager_code_not_equal** | **string**| Filter on SLM-NUM using &#39;NotEqual&#39; operator | [optional]
 **sales_manager_code_less** | **string**| Filter on SLM-NUM using &#39;Less&#39; operator | [optional]
 **sales_manager_code_less_or_equal** | **string**| Filter on SLM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **sales_manager_code_greater** | **string**| Filter on SLM-NUM using &#39;Greater&#39; operator | [optional]
 **sales_manager_code_greater_or_equal** | **string**| Filter on SLM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **sales_manager_code_is_null** | **string**| Filter on SLM-NUM using &#39;IsNull&#39; operator | [optional]
 **sales_manager_code_is_not_null** | **string**| Filter on SLM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **sales_manager_code_like** | **string**| Filter on SLM-NUM using &#39;Like&#39; operator | [optional]
 **sales_manager_code_not_like** | **string**| Filter on SLM-NUM using &#39;NotLike&#39; operator | [optional]
 **sales_manager_code_contains** | **string**| Filter on SLM-NUM using &#39;Contains&#39; operator | [optional]
 **sales_manager_code_not_contains** | **string**| Filter on SLM-NUM using &#39;NotContains&#39; operator | [optional]
 **sales_manager_code_starts_with** | **string**| Filter on SLM-NUM using &#39;StartsWith&#39; operator | [optional]
 **sales_manager_code_not_starts_with** | **string**| Filter on SLM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **sales_manager_code_ends_with** | **string**| Filter on SLM-NUM using &#39;EndsWith&#39; operator | [optional]
 **sales_manager_code_not_ends_with** | **string**| Filter on SLM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **sales_manager_code_in** | **string**| Filter on SLM-NUM using &#39;In&#39; operator | [optional]
 **sales_manager_code_between** | **string**| Filter on SLM-NUM using &#39;Between&#39; operator | [optional]
 **list_id_not_equal** | **string**| Filter on LIST-ID using &#39;NotEqual&#39; operator | [optional]
 **list_id_less** | **string**| Filter on LIST-ID using &#39;Less&#39; operator | [optional]
 **list_id_less_or_equal** | **string**| Filter on LIST-ID using &#39;LessOrEqual&#39; operator | [optional]
 **list_id_greater** | **string**| Filter on LIST-ID using &#39;Greater&#39; operator | [optional]
 **list_id_greater_or_equal** | **string**| Filter on LIST-ID using &#39;GreaterOrEqual&#39; operator | [optional]
 **list_id_is_null** | **string**| Filter on LIST-ID using &#39;IsNull&#39; operator | [optional]
 **list_id_is_not_null** | **string**| Filter on LIST-ID using &#39;IsNotNull&#39; operator | [optional]
 **list_id_like** | **string**| Filter on LIST-ID using &#39;Like&#39; operator | [optional]
 **list_id_not_like** | **string**| Filter on LIST-ID using &#39;NotLike&#39; operator | [optional]
 **list_id_contains** | **string**| Filter on LIST-ID using &#39;Contains&#39; operator | [optional]
 **list_id_not_contains** | **string**| Filter on LIST-ID using &#39;NotContains&#39; operator | [optional]
 **list_id_starts_with** | **string**| Filter on LIST-ID using &#39;StartsWith&#39; operator | [optional]
 **list_id_not_starts_with** | **string**| Filter on LIST-ID using &#39;NotStartsWith&#39; operator | [optional]
 **list_id_ends_with** | **string**| Filter on LIST-ID using &#39;EndsWith&#39; operator | [optional]
 **list_id_not_ends_with** | **string**| Filter on LIST-ID using &#39;NotEndsWith&#39; operator | [optional]
 **list_id_in** | **string**| Filter on LIST-ID using &#39;In&#39; operator | [optional]
 **list_id_between** | **string**| Filter on LIST-ID using &#39;Between&#39; operator | [optional]
 **list_date_not_equal** | **string**| Filter on LIST-DTE using &#39;NotEqual&#39; operator | [optional]
 **list_date_less** | **string**| Filter on LIST-DTE using &#39;Less&#39; operator | [optional]
 **list_date_less_or_equal** | **string**| Filter on LIST-DTE using &#39;LessOrEqual&#39; operator | [optional]
 **list_date_greater** | **string**| Filter on LIST-DTE using &#39;Greater&#39; operator | [optional]
 **list_date_greater_or_equal** | **string**| Filter on LIST-DTE using &#39;GreaterOrEqual&#39; operator | [optional]
 **list_date_is_null** | **string**| Filter on LIST-DTE using &#39;IsNull&#39; operator | [optional]
 **list_date_is_not_null** | **string**| Filter on LIST-DTE using &#39;IsNotNull&#39; operator | [optional]
 **list_date_like** | **string**| Filter on LIST-DTE using &#39;Like&#39; operator | [optional]
 **list_date_not_like** | **string**| Filter on LIST-DTE using &#39;NotLike&#39; operator | [optional]
 **list_date_contains** | **string**| Filter on LIST-DTE using &#39;Contains&#39; operator | [optional]
 **list_date_not_contains** | **string**| Filter on LIST-DTE using &#39;NotContains&#39; operator | [optional]
 **list_date_starts_with** | **string**| Filter on LIST-DTE using &#39;StartsWith&#39; operator | [optional]
 **list_date_not_starts_with** | **string**| Filter on LIST-DTE using &#39;NotStartsWith&#39; operator | [optional]
 **list_date_ends_with** | **string**| Filter on LIST-DTE using &#39;EndsWith&#39; operator | [optional]
 **list_date_not_ends_with** | **string**| Filter on LIST-DTE using &#39;NotEndsWith&#39; operator | [optional]
 **list_date_in** | **string**| Filter on LIST-DTE using &#39;In&#39; operator | [optional]
 **list_date_between** | **string**| Filter on LIST-DTE using &#39;Between&#39; operator | [optional]
 **is_remaining_call_not_equal** | **string**| Filter on YES-NO using &#39;NotEqual&#39; operator | [optional]
 **is_remaining_call_less** | **string**| Filter on YES-NO using &#39;Less&#39; operator | [optional]
 **is_remaining_call_less_or_equal** | **string**| Filter on YES-NO using &#39;LessOrEqual&#39; operator | [optional]
 **is_remaining_call_greater** | **string**| Filter on YES-NO using &#39;Greater&#39; operator | [optional]
 **is_remaining_call_greater_or_equal** | **string**| Filter on YES-NO using &#39;GreaterOrEqual&#39; operator | [optional]
 **is_remaining_call_is_null** | **string**| Filter on YES-NO using &#39;IsNull&#39; operator | [optional]
 **is_remaining_call_is_not_null** | **string**| Filter on YES-NO using &#39;IsNotNull&#39; operator | [optional]
 **is_remaining_call_like** | **string**| Filter on YES-NO using &#39;Like&#39; operator | [optional]
 **is_remaining_call_not_like** | **string**| Filter on YES-NO using &#39;NotLike&#39; operator | [optional]
 **is_remaining_call_contains** | **string**| Filter on YES-NO using &#39;Contains&#39; operator | [optional]
 **is_remaining_call_not_contains** | **string**| Filter on YES-NO using &#39;NotContains&#39; operator | [optional]
 **is_remaining_call_starts_with** | **string**| Filter on YES-NO using &#39;StartsWith&#39; operator | [optional]
 **is_remaining_call_not_starts_with** | **string**| Filter on YES-NO using &#39;NotStartsWith&#39; operator | [optional]
 **is_remaining_call_ends_with** | **string**| Filter on YES-NO using &#39;EndsWith&#39; operator | [optional]
 **is_remaining_call_not_ends_with** | **string**| Filter on YES-NO using &#39;NotEndsWith&#39; operator | [optional]
 **is_remaining_call_in** | **string**| Filter on YES-NO using &#39;In&#39; operator | [optional]
 **is_remaining_call_between** | **string**| Filter on YES-NO using &#39;Between&#39; operator | [optional]
 **is_callback_not_equal** | **string**| Filter on YES-NO using &#39;NotEqual&#39; operator | [optional]
 **is_callback_less** | **string**| Filter on YES-NO using &#39;Less&#39; operator | [optional]
 **is_callback_less_or_equal** | **string**| Filter on YES-NO using &#39;LessOrEqual&#39; operator | [optional]
 **is_callback_greater** | **string**| Filter on YES-NO using &#39;Greater&#39; operator | [optional]
 **is_callback_greater_or_equal** | **string**| Filter on YES-NO using &#39;GreaterOrEqual&#39; operator | [optional]
 **is_callback_is_null** | **string**| Filter on YES-NO using &#39;IsNull&#39; operator | [optional]
 **is_callback_is_not_null** | **string**| Filter on YES-NO using &#39;IsNotNull&#39; operator | [optional]
 **is_callback_like** | **string**| Filter on YES-NO using &#39;Like&#39; operator | [optional]
 **is_callback_not_like** | **string**| Filter on YES-NO using &#39;NotLike&#39; operator | [optional]
 **is_callback_contains** | **string**| Filter on YES-NO using &#39;Contains&#39; operator | [optional]
 **is_callback_not_contains** | **string**| Filter on YES-NO using &#39;NotContains&#39; operator | [optional]
 **is_callback_starts_with** | **string**| Filter on YES-NO using &#39;StartsWith&#39; operator | [optional]
 **is_callback_not_starts_with** | **string**| Filter on YES-NO using &#39;NotStartsWith&#39; operator | [optional]
 **is_callback_ends_with** | **string**| Filter on YES-NO using &#39;EndsWith&#39; operator | [optional]
 **is_callback_not_ends_with** | **string**| Filter on YES-NO using &#39;NotEndsWith&#39; operator | [optional]
 **is_callback_in** | **string**| Filter on YES-NO using &#39;In&#39; operator | [optional]
 **is_callback_between** | **string**| Filter on YES-NO using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCallList**](../Model/SearchResultCallList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callListUpdateCallListAssignment**
> callListUpdateCallListAssignment($call_list_assignment_update_request)

Updates assigned call totals for sales representatives

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$call_list_assignment_update_request = new \Swagger\Client\Model\CallListAssignmentUpdateRequest(); // \Swagger\Client\Model\CallListAssignmentUpdateRequest | 

try {
    $apiInstance->callListUpdateCallListAssignment($call_list_assignment_update_request);
} catch (Exception $e) {
    echo 'Exception when calling CallListApi->callListUpdateCallListAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_list_assignment_update_request** | [**\Swagger\Client\Model\CallListAssignmentUpdateRequest**](../Model/CallListAssignmentUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

