# Swagger\Client\SalesRepApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRepCreateOrUpdate**](SalesRepApi.md#salesRepCreateOrUpdate) | **POST** /sales-reps | Create or Update a Sales Rep from a SalesRep Model
[**salesRepGet**](SalesRepApi.md#salesRepGet) | **GET** /sales-reps/{salesRepCode} | Gets Sales Rep.
[**salesRepGetCallHistory**](SalesRepApi.md#salesRepGetCallHistory) | **GET** /sales-reps/{salesRepCode}/call-history | Returns call history records for the specified sales rep
[**salesRepGetCallListAssignments**](SalesRepApi.md#salesRepGetCallListAssignments) | **GET** /sales-reps/{salesRepCode}/call-lists | Gets a list of call list assignments for a given sales representative.
[**salesRepGetCallStatistics**](SalesRepApi.md#salesRepGetCallStatistics) | **GET** /sales-reps/{salesRepCode}/call-statistics | Gets call statistics for a particular date range.
[**salesRepGetCallbacks**](SalesRepApi.md#salesRepGetCallbacks) | **GET** /sales-reps/{salesRepCode}/callbacks | Gets list of tele-service callbacks.
[**salesRepGetCallsForList**](SalesRepApi.md#salesRepGetCallsForList) | **GET** /sales-reps/{salesRepCode}/call-lists/{listId}/{listDate} | Gets a list of calls for a given sales representative.
[**salesRepGetCallsForSalesRep**](SalesRepApi.md#salesRepGetCallsForSalesRep) | **GET** /sales-reps/{salesRepCode}/calls | Gets a list of calls for a given sales representative.
[**salesRepGetList**](SalesRepApi.md#salesRepGetList) | **GET** /sales-reps | Gets List of Sales Reps.
[**salesRepGetSalesRepsBySupervisor**](SalesRepApi.md#salesRepGetSalesRepsBySupervisor) | **GET** /sales-reps/{supervisorCode}/sales-reps | Gets list of sales reps under a supervisor (List includes supervisor)
[**salesRepGetTeamCallStatistics**](SalesRepApi.md#salesRepGetTeamCallStatistics) | **GET** /sales-reps/{salesRepCode}/team-statistics | Gets call statistics for a particular date range for a supervisor and all of their direct subordinates.
[**salesRepReassignCall**](SalesRepApi.md#salesRepReassignCall) | **POST** /sales-reps/reassign | Reassign one or more calls from one sales rep to another
[**salesRepRemove**](SalesRepApi.md#salesRepRemove) | **DELETE** /sales-reps/{salesRepCode} | Removes a Sales Rep
[**salesRepUpdate**](SalesRepApi.md#salesRepUpdate) | **POST** /sales-reps/{salesRepCode} | Update an existing Sales Rep
[**salesRepUpdateCallCount**](SalesRepApi.md#salesRepUpdateCallCount) | **POST** /sales-reps/{salesRepCode}/{listId}/{listDate}/{quantity} | Updates call count for a sales rep on a particular call list


# **salesRepCreateOrUpdate**
> \Swagger\Client\Model\SalesRep salesRepCreateOrUpdate($sales_rep_in)

Create or Update a Sales Rep from a SalesRep Model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_in = new \Swagger\Client\Model\SalesRepIn(); // \Swagger\Client\Model\SalesRepIn | Model to Create/Update Password Question

try {
    $result = $apiInstance->salesRepCreateOrUpdate($sales_rep_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_in** | [**\Swagger\Client\Model\SalesRepIn**](../Model/SalesRepIn.md)| Model to Create/Update Password Question |

### Return type

[**\Swagger\Client\Model\SalesRep**](../Model/SalesRep.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGet**
> \Swagger\Client\Model\SalesRep salesRepGet($sales_rep_code)

Gets Sales Rep.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | The sales rep number

try {
    $result = $apiInstance->salesRepGet($sales_rep_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| The sales rep number |

### Return type

[**\Swagger\Client\Model\SalesRep**](../Model/SalesRep.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetCallHistory**
> \Swagger\Client\Model\SearchResultCallHistory salesRepGetCallHistory($sales_rep_code, $include_closed, $pager_skip, $pager_take)

Returns call history records for the specified sales rep

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales rep code
$include_closed = true; // bool | If true, include history records for closed calls (resolution code 'L')
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->salesRepGetCallHistory($sales_rep_code, $include_closed, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetCallHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales rep code |
 **include_closed** | **bool**| If true, include history records for closed calls (resolution code &#39;L&#39;) | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCallHistory**](../Model/SearchResultCallHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetCallListAssignments**
> \Swagger\Client\Model\SearchResultCallListAssignment salesRepGetCallListAssignments($sales_rep_code, $include_inactive_lists, $only_include_lists_with_calls_remaining)

Gets a list of call list assignments for a given sales representative.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales Rep Code
$include_inactive_lists = true; // bool | If true, include inactive lists
$only_include_lists_with_calls_remaining = true; // bool | If true, only include lists with calls remaining

try {
    $result = $apiInstance->salesRepGetCallListAssignments($sales_rep_code, $include_inactive_lists, $only_include_lists_with_calls_remaining);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetCallListAssignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales Rep Code |
 **include_inactive_lists** | **bool**| If true, include inactive lists | [optional]
 **only_include_lists_with_calls_remaining** | **bool**| If true, only include lists with calls remaining | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCallListAssignment**](../Model/SearchResultCallListAssignment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetCallStatistics**
> \Swagger\Client\Model\CallStatistics salesRepGetCallStatistics($sales_rep_code, $is_manager, $display_currency, $filter_begin_date, $filter_end_date, $filter_list_code, $filter_list_date)

Gets call statistics for a particular date range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales rep code for statistics range
$is_manager = true; // bool | Whether the sales rep is the manager of the team for which department rank will be calculated
$display_currency = "display_currency_example"; // string | The currency in which sales totals will be calculated
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest call date to include in statistics.
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest call date to include in statistics.
$filter_list_code = "filter_list_code_example"; // string | List code of the list to limit the statistics to or null or empty string to compile  statistics across lists.
$filter_list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date associated with the call list

try {
    $result = $apiInstance->salesRepGetCallStatistics($sales_rep_code, $is_manager, $display_currency, $filter_begin_date, $filter_end_date, $filter_list_code, $filter_list_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetCallStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales rep code for statistics range |
 **is_manager** | **bool**| Whether the sales rep is the manager of the team for which department rank will be calculated |
 **display_currency** | **string**| The currency in which sales totals will be calculated | [optional]
 **filter_begin_date** | **\DateTime**| The earliest call date to include in statistics. | [optional]
 **filter_end_date** | **\DateTime**| The latest call date to include in statistics. | [optional]
 **filter_list_code** | **string**| List code of the list to limit the statistics to or null or empty string to compile  statistics across lists. | [optional]
 **filter_list_date** | **\DateTime**| The date associated with the call list | [optional]

### Return type

[**\Swagger\Client\Model\CallStatistics**](../Model/CallStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetCallbacks**
> \Swagger\Client\Model\SearchResultCall salesRepGetCallbacks($sales_rep_code, $filter_list_id, $filter_list_date, $filter_begin_date, $filter_end_date, $pager_skip, $pager_take)

Gets list of tele-service callbacks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales rep code for rep assigned to callbacks
$filter_list_id = "filter_list_id_example"; // string | The List Id of the list to filter results by
$filter_list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date associated with the call list
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The beginning date. Only calls with callback date on or after this date will be returned.
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The beginning date. Only calls with callback date on or before this date will be returned.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->salesRepGetCallbacks($sales_rep_code, $filter_list_id, $filter_list_date, $filter_begin_date, $filter_end_date, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetCallbacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales rep code for rep assigned to callbacks |
 **filter_list_id** | **string**| The List Id of the list to filter results by | [optional]
 **filter_list_date** | **\DateTime**| The date associated with the call list | [optional]
 **filter_begin_date** | **\DateTime**| The beginning date. Only calls with callback date on or after this date will be returned. | [optional]
 **filter_end_date** | **\DateTime**| The beginning date. Only calls with callback date on or before this date will be returned. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCall**](../Model/SearchResultCall.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetCallsForList**
> \Swagger\Client\Model\SearchResultCall salesRepGetCallsForList($sales_rep_code, $list_id, $list_date, $include_callbacks, $include_contacted, $pager_skip, $pager_take)

Gets a list of calls for a given sales representative.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales representative code for a given sales representative
$list_id = "list_id_example"; // string | List Id
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date
$include_callbacks = true; // bool | True to include callbacks
$include_contacted = true; // bool | True to include calls for customers who have been contacted at least once
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->salesRepGetCallsForList($sales_rep_code, $list_id, $list_date, $include_callbacks, $include_contacted, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetCallsForList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales representative code for a given sales representative |
 **list_id** | **string**| List Id |
 **list_date** | **\DateTime**| List Date |
 **include_callbacks** | **bool**| True to include callbacks | [optional]
 **include_contacted** | **bool**| True to include calls for customers who have been contacted at least once | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCall**](../Model/SearchResultCall.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetCallsForSalesRep**
> \Swagger\Client\Model\SearchResultCall salesRepGetCallsForSalesRep($sales_rep_code, $filter_list_id, $filter_list_date, $filter_include_completed, $filter_include_contacted, $filter_include_callbacks, $filter_include_uncontacted)

Gets a list of calls for a given sales representative.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales representative code for a given sales representative
$filter_list_id = "filter_list_id_example"; // string | The List Id of the list to filter results by
$filter_list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date associated with the call list
$filter_include_completed = true; // bool | True to include calls that have been completed
$filter_include_contacted = true; // bool | True to include calls where the customer has been contacted
$filter_include_callbacks = true; // bool | True to include calls callbacks
$filter_include_uncontacted = true; // bool | True to include calls that have been made

try {
    $result = $apiInstance->salesRepGetCallsForSalesRep($sales_rep_code, $filter_list_id, $filter_list_date, $filter_include_completed, $filter_include_contacted, $filter_include_callbacks, $filter_include_uncontacted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetCallsForSalesRep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales representative code for a given sales representative |
 **filter_list_id** | **string**| The List Id of the list to filter results by | [optional]
 **filter_list_date** | **\DateTime**| The date associated with the call list | [optional]
 **filter_include_completed** | **bool**| True to include calls that have been completed | [optional]
 **filter_include_contacted** | **bool**| True to include calls where the customer has been contacted | [optional]
 **filter_include_callbacks** | **bool**| True to include calls callbacks | [optional]
 **filter_include_uncontacted** | **bool**| True to include calls that have been made | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCall**](../Model/SearchResultCall.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetList**
> \Swagger\Client\Model\SearchResultSalesRep salesRepGetList($customer_number, $exclude_unmapped_reps)

Gets List of Sales Reps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Default null to return list of all sales reps,                  pass in CustomerNumber to Get List by customer number
$exclude_unmapped_reps = true; // bool | If true, will only return information for reps with a user mapping

try {
    $result = $apiInstance->salesRepGetList($customer_number, $exclude_unmapped_reps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Default null to return list of all sales reps,                  pass in CustomerNumber to Get List by customer number | [optional]
 **exclude_unmapped_reps** | **bool**| If true, will only return information for reps with a user mapping | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultSalesRep**](../Model/SearchResultSalesRep.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetSalesRepsBySupervisor**
> \Swagger\Client\Model\SearchResultSalesRep salesRepGetSalesRepsBySupervisor($supervisor_code)

Gets list of sales reps under a supervisor (List includes supervisor)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supervisor_code = "supervisor_code_example"; // string | Supervisor's sales rep code

try {
    $result = $apiInstance->salesRepGetSalesRepsBySupervisor($supervisor_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetSalesRepsBySupervisor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supervisor_code** | **string**| Supervisor&#39;s sales rep code |

### Return type

[**\Swagger\Client\Model\SearchResultSalesRep**](../Model/SearchResultSalesRep.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepGetTeamCallStatistics**
> \Swagger\Client\Model\SearchResultCallStatistics salesRepGetTeamCallStatistics($sales_rep_code, $display_currency, $filter_begin_date, $filter_end_date, $filter_list_code, $filter_list_date)

Gets call statistics for a particular date range for a supervisor and all of their direct subordinates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Supervisor sales rep code for statistics range
$display_currency = "display_currency_example"; // string | The currency in which sales totals will be calculated
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest call date to include in statistics.
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest call date to include in statistics.
$filter_list_code = "filter_list_code_example"; // string | List code of the list to limit the statistics to or null or empty string to compile  statistics across lists.
$filter_list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date associated with the call list

try {
    $result = $apiInstance->salesRepGetTeamCallStatistics($sales_rep_code, $display_currency, $filter_begin_date, $filter_end_date, $filter_list_code, $filter_list_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepGetTeamCallStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Supervisor sales rep code for statistics range |
 **display_currency** | **string**| The currency in which sales totals will be calculated | [optional]
 **filter_begin_date** | **\DateTime**| The earliest call date to include in statistics. | [optional]
 **filter_end_date** | **\DateTime**| The latest call date to include in statistics. | [optional]
 **filter_list_code** | **string**| List code of the list to limit the statistics to or null or empty string to compile  statistics across lists. | [optional]
 **filter_list_date** | **\DateTime**| The date associated with the call list | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCallStatistics**](../Model/SearchResultCallStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepReassignCall**
> salesRepReassignCall($reassign_call_request)

Reassign one or more calls from one sales rep to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reassign_call_request = new \Swagger\Client\Model\ReassignCallRequest(); // \Swagger\Client\Model\ReassignCallRequest | Information for reassigning one or more calls

try {
    $apiInstance->salesRepReassignCall($reassign_call_request);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepReassignCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reassign_call_request** | [**\Swagger\Client\Model\ReassignCallRequest**](../Model/ReassignCallRequest.md)| Information for reassigning one or more calls |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepRemove**
> salesRepRemove($sales_rep_code)

Removes a Sales Rep

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | The Number that identifies the Sales Rep to be deleted.

try {
    $apiInstance->salesRepRemove($sales_rep_code);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| The Number that identifies the Sales Rep to be deleted. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepUpdate**
> \Swagger\Client\Model\SalesRep salesRepUpdate($sales_rep_code, $sales_rep_update_request)

Update an existing Sales Rep

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales Rep Number of the Sales Rep to be Updated
$sales_rep_update_request = new \Swagger\Client\Model\SalesRepUpdateRequest(); // \Swagger\Client\Model\SalesRepUpdateRequest | Information to update the Sales Rep with

try {
    $result = $apiInstance->salesRepUpdate($sales_rep_code, $sales_rep_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales Rep Number of the Sales Rep to be Updated |
 **sales_rep_update_request** | [**\Swagger\Client\Model\SalesRepUpdateRequest**](../Model/SalesRepUpdateRequest.md)| Information to update the Sales Rep with |

### Return type

[**\Swagger\Client\Model\SalesRep**](../Model/SalesRep.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRepUpdateCallCount**
> salesRepUpdateCallCount($sales_rep_code, $list_id, $list_date, $quantity)

Updates call count for a sales rep on a particular call list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesRepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_rep_code = "sales_rep_code_example"; // string | Sales representative code for a given sales representative
$list_id = "list_id_example"; // string | List Id
$list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | List Date
$quantity = 56; // int | Number of calls to change

try {
    $apiInstance->salesRepUpdateCallCount($sales_rep_code, $list_id, $list_date, $quantity);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepApi->salesRepUpdateCallCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_rep_code** | **string**| Sales representative code for a given sales representative |
 **list_id** | **string**| List Id |
 **list_date** | **\DateTime**| List Date |
 **quantity** | **int**| Number of calls to change |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

