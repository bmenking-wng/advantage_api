# Swagger\Client\AcsApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acsCreateSupportLog**](AcsApi.md#acsCreateSupportLog) | **POST** /acs/support-logs | Creates a new client support log
[**acsCreateSupportLogComment**](AcsApi.md#acsCreateSupportLogComment) | **POST** /acs/support-logs/{cslNumber}/comments | Creates a new CSL comment
[**acsGetClient**](AcsApi.md#acsGetClient) | **GET** /acs/clients/{customerNumber} | Gets client information given
[**acsGetClientArea**](AcsApi.md#acsGetClientArea) | **GET** /acs/clients/{customerNumber}/areas/{areaCode} | Get an area for a client.
[**acsGetClientAreas**](AcsApi.md#acsGetClientAreas) | **GET** /acs/clients/{customerNumber}/areas | Get all areas for a client.
[**acsGetClientByAbbreviation**](AcsApi.md#acsGetClientByAbbreviation) | **GET** /acs/clients/by-abbreviation/{clientAbbreviation} | Gets client information given
[**acsGetClientContact**](AcsApi.md#acsGetClientContact) | **GET** /acs/clients/{customerNumber}/contacts/{contactNumber} | Get information about a client contact person.
[**acsGetClientContacts**](AcsApi.md#acsGetClientContacts) | **GET** /acs/clients/{customerNumber}/contacts | Get all contact people for a client.
[**acsGetClientJob**](AcsApi.md#acsGetClientJob) | **GET** /acs/clients/{customerNumber}/jobs/{jobCode} | Get a job for a client.
[**acsGetClientJobs**](AcsApi.md#acsGetClientJobs) | **GET** /acs/clients/{customerNumber}/jobs | Get all jobs for a client.
[**acsGetClients**](AcsApi.md#acsGetClients) | **GET** /acs/clients | Get all active clients.
[**acsGetSupportLog**](AcsApi.md#acsGetSupportLog) | **GET** /acs/support-logs/{cslNumber} | Gets information about a client support log
[**acsGetSupportLogComments**](AcsApi.md#acsGetSupportLogComments) | **GET** /acs/support-logs/{cslNumber}/comments | Get all comments for a client support log
[**acsSearchSupportLogs**](AcsApi.md#acsSearchSupportLogs) | **GET** /acs/support-logs | Get information for client support logs matching a search argument.


# **acsCreateSupportLog**
> \Swagger\Client\Model\SupportLogCreateResponse acsCreateSupportLog($support_log_create_request)

Creates a new client support log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$support_log_create_request = new \Swagger\Client\Model\SupportLogCreateRequest(); // \Swagger\Client\Model\SupportLogCreateRequest | A SupportLogCreateRequest object

try {
    $result = $apiInstance->acsCreateSupportLog($support_log_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsCreateSupportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **support_log_create_request** | [**\Swagger\Client\Model\SupportLogCreateRequest**](../Model/SupportLogCreateRequest.md)| A SupportLogCreateRequest object |

### Return type

[**\Swagger\Client\Model\SupportLogCreateResponse**](../Model/SupportLogCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsCreateSupportLogComment**
> \Swagger\Client\Model\SupportLogCommentCreateResponse acsCreateSupportLogComment($csl_number, $support_log_comment_create_request)

Creates a new CSL comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$csl_number = "csl_number_example"; // string | CSL number of the support log to add a comment to
$support_log_comment_create_request = new \Swagger\Client\Model\SupportLogCommentCreateRequest(); // \Swagger\Client\Model\SupportLogCommentCreateRequest | A SupportLogCommentCreateRequest object

try {
    $result = $apiInstance->acsCreateSupportLogComment($csl_number, $support_log_comment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsCreateSupportLogComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csl_number** | **string**| CSL number of the support log to add a comment to |
 **support_log_comment_create_request** | [**\Swagger\Client\Model\SupportLogCommentCreateRequest**](../Model/SupportLogCommentCreateRequest.md)| A SupportLogCommentCreateRequest object |

### Return type

[**\Swagger\Client\Model\SupportLogCommentCreateResponse**](../Model/SupportLogCommentCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClient**
> \Swagger\Client\Model\Client acsGetClient($customer_number)

Gets client information given

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number of the client

try {
    $result = $apiInstance->acsGetClient($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number of the client |

### Return type

[**\Swagger\Client\Model\Client**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClientArea**
> \Swagger\Client\Model\ClientArea acsGetClientArea($customer_number, $area_code)

Get an area for a client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number of the client
$area_code = "area_code_example"; // string | The code that identifies a client area

try {
    $result = $apiInstance->acsGetClientArea($customer_number, $area_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClientArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number of the client |
 **area_code** | **string**| The code that identifies a client area |

### Return type

[**\Swagger\Client\Model\ClientArea**](../Model/ClientArea.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClientAreas**
> \Swagger\Client\Model\ClientArea[] acsGetClientAreas($customer_number)

Get all areas for a client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number of the client

try {
    $result = $apiInstance->acsGetClientAreas($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClientAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number of the client |

### Return type

[**\Swagger\Client\Model\ClientArea[]**](../Model/ClientArea.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClientByAbbreviation**
> \Swagger\Client\Model\Client acsGetClientByAbbreviation($client_abbreviation)

Gets client information given

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_abbreviation = "client_abbreviation_example"; // string | The client abbreviation

try {
    $result = $apiInstance->acsGetClientByAbbreviation($client_abbreviation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClientByAbbreviation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_abbreviation** | **string**| The client abbreviation |

### Return type

[**\Swagger\Client\Model\Client**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClientContact**
> \Swagger\Client\Model\ClientContact acsGetClientContact($customer_number, $contact_number)

Get information about a client contact person.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number of the client
$contact_number = "contact_number_example"; // string | The customer number of the contact person

try {
    $result = $apiInstance->acsGetClientContact($customer_number, $contact_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClientContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number of the client |
 **contact_number** | **string**| The customer number of the contact person |

### Return type

[**\Swagger\Client\Model\ClientContact**](../Model/ClientContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClientContacts**
> \Swagger\Client\Model\ClientContact[] acsGetClientContacts($customer_number)

Get all contact people for a client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number of the client

try {
    $result = $apiInstance->acsGetClientContacts($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClientContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number of the client |

### Return type

[**\Swagger\Client\Model\ClientContact[]**](../Model/ClientContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClientJob**
> \Swagger\Client\Model\ClientJob acsGetClientJob($customer_number, $job_code)

Get a job for a client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number of the client
$job_code = "job_code_example"; // string | The code that identifies a client job

try {
    $result = $apiInstance->acsGetClientJob($customer_number, $job_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClientJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number of the client |
 **job_code** | **string**| The code that identifies a client job |

### Return type

[**\Swagger\Client\Model\ClientJob**](../Model/ClientJob.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClientJobs**
> \Swagger\Client\Model\ClientJob[] acsGetClientJobs($customer_number)

Get all jobs for a client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number of the client

try {
    $result = $apiInstance->acsGetClientJobs($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClientJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number of the client |

### Return type

[**\Swagger\Client\Model\ClientJob[]**](../Model/ClientJob.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetClients**
> \Swagger\Client\Model\Client[] acsGetClients()

Get all active clients.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->acsGetClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Client[]**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetSupportLog**
> \Swagger\Client\Model\SupportLog acsGetSupportLog($csl_number)

Gets information about a client support log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$csl_number = "csl_number_example"; // string | The client support log number

try {
    $result = $apiInstance->acsGetSupportLog($csl_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetSupportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csl_number** | **string**| The client support log number |

### Return type

[**\Swagger\Client\Model\SupportLog**](../Model/SupportLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsGetSupportLogComments**
> \Swagger\Client\Model\SupportLogComment[] acsGetSupportLogComments($csl_number)

Get all comments for a client support log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$csl_number = "csl_number_example"; // string | The client support log (CSL) number

try {
    $result = $apiInstance->acsGetSupportLogComments($csl_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsGetSupportLogComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csl_number** | **string**| The client support log (CSL) number |

### Return type

[**\Swagger\Client\Model\SupportLogComment[]**](../Model/SupportLogComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acsSearchSupportLogs**
> \Swagger\Client\Model\SearchResultSupportLog acsSearchSupportLogs($pager_skip, $pager_take, $activity_category, $analyst_code, $creation_date, $client_number, $engineer_code, $is_modification, $job_code, $lead_engineer_code, $status_code, $update_date, $activity_category_not_equal, $activity_category_less, $activity_category_less_or_equal, $activity_category_greater, $activity_category_greater_or_equal, $activity_category_is_null, $activity_category_is_not_null, $activity_category_like, $activity_category_not_like, $activity_category_contains, $activity_category_not_contains, $activity_category_starts_with, $activity_category_not_starts_with, $activity_category_ends_with, $activity_category_not_ends_with, $activity_category_in, $activity_category_between, $analyst_code_not_equal, $analyst_code_less, $analyst_code_less_or_equal, $analyst_code_greater, $analyst_code_greater_or_equal, $analyst_code_is_null, $analyst_code_is_not_null, $analyst_code_like, $analyst_code_not_like, $analyst_code_contains, $analyst_code_not_contains, $analyst_code_starts_with, $analyst_code_not_starts_with, $analyst_code_ends_with, $analyst_code_not_ends_with, $analyst_code_in, $analyst_code_between, $creation_date_not_equal, $creation_date_less, $creation_date_less_or_equal, $creation_date_greater, $creation_date_greater_or_equal, $creation_date_is_null, $creation_date_is_not_null, $creation_date_like, $creation_date_not_like, $creation_date_contains, $creation_date_not_contains, $creation_date_starts_with, $creation_date_not_starts_with, $creation_date_ends_with, $creation_date_not_ends_with, $creation_date_in, $creation_date_between, $client_number_not_equal, $client_number_less, $client_number_less_or_equal, $client_number_greater, $client_number_greater_or_equal, $client_number_is_null, $client_number_is_not_null, $client_number_like, $client_number_not_like, $client_number_contains, $client_number_not_contains, $client_number_starts_with, $client_number_not_starts_with, $client_number_ends_with, $client_number_not_ends_with, $client_number_in, $client_number_between, $engineer_code_not_equal, $engineer_code_less, $engineer_code_less_or_equal, $engineer_code_greater, $engineer_code_greater_or_equal, $engineer_code_is_null, $engineer_code_is_not_null, $engineer_code_like, $engineer_code_not_like, $engineer_code_contains, $engineer_code_not_contains, $engineer_code_starts_with, $engineer_code_not_starts_with, $engineer_code_ends_with, $engineer_code_not_ends_with, $engineer_code_in, $engineer_code_between, $is_modification_not_equal, $is_modification_less, $is_modification_less_or_equal, $is_modification_greater, $is_modification_greater_or_equal, $is_modification_is_null, $is_modification_is_not_null, $is_modification_like, $is_modification_not_like, $is_modification_contains, $is_modification_not_contains, $is_modification_starts_with, $is_modification_not_starts_with, $is_modification_ends_with, $is_modification_not_ends_with, $is_modification_in, $is_modification_between, $job_code_not_equal, $job_code_less, $job_code_less_or_equal, $job_code_greater, $job_code_greater_or_equal, $job_code_is_null, $job_code_is_not_null, $job_code_like, $job_code_not_like, $job_code_contains, $job_code_not_contains, $job_code_starts_with, $job_code_not_starts_with, $job_code_ends_with, $job_code_not_ends_with, $job_code_in, $job_code_between, $lead_engineer_code_not_equal, $lead_engineer_code_less, $lead_engineer_code_less_or_equal, $lead_engineer_code_greater, $lead_engineer_code_greater_or_equal, $lead_engineer_code_is_null, $lead_engineer_code_is_not_null, $lead_engineer_code_like, $lead_engineer_code_not_like, $lead_engineer_code_contains, $lead_engineer_code_not_contains, $lead_engineer_code_starts_with, $lead_engineer_code_not_starts_with, $lead_engineer_code_ends_with, $lead_engineer_code_not_ends_with, $lead_engineer_code_in, $lead_engineer_code_between, $status_code_not_equal, $status_code_less, $status_code_less_or_equal, $status_code_greater, $status_code_greater_or_equal, $status_code_is_null, $status_code_is_not_null, $status_code_like, $status_code_not_like, $status_code_contains, $status_code_not_contains, $status_code_starts_with, $status_code_not_starts_with, $status_code_ends_with, $status_code_not_ends_with, $status_code_in, $status_code_between, $update_date_not_equal, $update_date_less, $update_date_less_or_equal, $update_date_greater, $update_date_greater_or_equal, $update_date_is_null, $update_date_is_not_null, $update_date_like, $update_date_not_like, $update_date_contains, $update_date_not_contains, $update_date_starts_with, $update_date_not_starts_with, $update_date_ends_with, $update_date_not_ends_with, $update_date_in, $update_date_between)

Get information for client support logs matching a search argument.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$activity_category = "activity_category_example"; // string | Filter on ATV-CAT using 'Equal' operator
$analyst_code = "analyst_code_example"; // string | Filter on CSL-ANT using 'Equal' operator
$creation_date = "creation_date_example"; // string | Filter on CNTC-DTE using 'Equal' operator
$client_number = "client_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$engineer_code = "engineer_code_example"; // string | Filter on CSL-ENG using 'Equal' operator
$is_modification = "is_modification_example"; // string | Filter on MOD-FLG using 'Equal' operator
$job_code = "job_code_example"; // string | Filter on CSL-JOB using 'Equal' operator
$lead_engineer_code = "lead_engineer_code_example"; // string | Filter on LEAD-ENG using 'Equal' operator
$status_code = "status_code_example"; // string | Filter on CSL-STA using 'Equal' operator
$update_date = "update_date_example"; // string | Filter on UPD-DTE using 'Equal' operator
$activity_category_not_equal = "activity_category_not_equal_example"; // string | Filter on ATV-CAT using 'NotEqual' operator
$activity_category_less = "activity_category_less_example"; // string | Filter on ATV-CAT using 'Less' operator
$activity_category_less_or_equal = "activity_category_less_or_equal_example"; // string | Filter on ATV-CAT using 'LessOrEqual' operator
$activity_category_greater = "activity_category_greater_example"; // string | Filter on ATV-CAT using 'Greater' operator
$activity_category_greater_or_equal = "activity_category_greater_or_equal_example"; // string | Filter on ATV-CAT using 'GreaterOrEqual' operator
$activity_category_is_null = "activity_category_is_null_example"; // string | Filter on ATV-CAT using 'IsNull' operator
$activity_category_is_not_null = "activity_category_is_not_null_example"; // string | Filter on ATV-CAT using 'IsNotNull' operator
$activity_category_like = "activity_category_like_example"; // string | Filter on ATV-CAT using 'Like' operator
$activity_category_not_like = "activity_category_not_like_example"; // string | Filter on ATV-CAT using 'NotLike' operator
$activity_category_contains = "activity_category_contains_example"; // string | Filter on ATV-CAT using 'Contains' operator
$activity_category_not_contains = "activity_category_not_contains_example"; // string | Filter on ATV-CAT using 'NotContains' operator
$activity_category_starts_with = "activity_category_starts_with_example"; // string | Filter on ATV-CAT using 'StartsWith' operator
$activity_category_not_starts_with = "activity_category_not_starts_with_example"; // string | Filter on ATV-CAT using 'NotStartsWith' operator
$activity_category_ends_with = "activity_category_ends_with_example"; // string | Filter on ATV-CAT using 'EndsWith' operator
$activity_category_not_ends_with = "activity_category_not_ends_with_example"; // string | Filter on ATV-CAT using 'NotEndsWith' operator
$activity_category_in = "activity_category_in_example"; // string | Filter on ATV-CAT using 'In' operator
$activity_category_between = "activity_category_between_example"; // string | Filter on ATV-CAT using 'Between' operator
$analyst_code_not_equal = "analyst_code_not_equal_example"; // string | Filter on CSL-ANT using 'NotEqual' operator
$analyst_code_less = "analyst_code_less_example"; // string | Filter on CSL-ANT using 'Less' operator
$analyst_code_less_or_equal = "analyst_code_less_or_equal_example"; // string | Filter on CSL-ANT using 'LessOrEqual' operator
$analyst_code_greater = "analyst_code_greater_example"; // string | Filter on CSL-ANT using 'Greater' operator
$analyst_code_greater_or_equal = "analyst_code_greater_or_equal_example"; // string | Filter on CSL-ANT using 'GreaterOrEqual' operator
$analyst_code_is_null = "analyst_code_is_null_example"; // string | Filter on CSL-ANT using 'IsNull' operator
$analyst_code_is_not_null = "analyst_code_is_not_null_example"; // string | Filter on CSL-ANT using 'IsNotNull' operator
$analyst_code_like = "analyst_code_like_example"; // string | Filter on CSL-ANT using 'Like' operator
$analyst_code_not_like = "analyst_code_not_like_example"; // string | Filter on CSL-ANT using 'NotLike' operator
$analyst_code_contains = "analyst_code_contains_example"; // string | Filter on CSL-ANT using 'Contains' operator
$analyst_code_not_contains = "analyst_code_not_contains_example"; // string | Filter on CSL-ANT using 'NotContains' operator
$analyst_code_starts_with = "analyst_code_starts_with_example"; // string | Filter on CSL-ANT using 'StartsWith' operator
$analyst_code_not_starts_with = "analyst_code_not_starts_with_example"; // string | Filter on CSL-ANT using 'NotStartsWith' operator
$analyst_code_ends_with = "analyst_code_ends_with_example"; // string | Filter on CSL-ANT using 'EndsWith' operator
$analyst_code_not_ends_with = "analyst_code_not_ends_with_example"; // string | Filter on CSL-ANT using 'NotEndsWith' operator
$analyst_code_in = "analyst_code_in_example"; // string | Filter on CSL-ANT using 'In' operator
$analyst_code_between = "analyst_code_between_example"; // string | Filter on CSL-ANT using 'Between' operator
$creation_date_not_equal = "creation_date_not_equal_example"; // string | Filter on CNTC-DTE using 'NotEqual' operator
$creation_date_less = "creation_date_less_example"; // string | Filter on CNTC-DTE using 'Less' operator
$creation_date_less_or_equal = "creation_date_less_or_equal_example"; // string | Filter on CNTC-DTE using 'LessOrEqual' operator
$creation_date_greater = "creation_date_greater_example"; // string | Filter on CNTC-DTE using 'Greater' operator
$creation_date_greater_or_equal = "creation_date_greater_or_equal_example"; // string | Filter on CNTC-DTE using 'GreaterOrEqual' operator
$creation_date_is_null = "creation_date_is_null_example"; // string | Filter on CNTC-DTE using 'IsNull' operator
$creation_date_is_not_null = "creation_date_is_not_null_example"; // string | Filter on CNTC-DTE using 'IsNotNull' operator
$creation_date_like = "creation_date_like_example"; // string | Filter on CNTC-DTE using 'Like' operator
$creation_date_not_like = "creation_date_not_like_example"; // string | Filter on CNTC-DTE using 'NotLike' operator
$creation_date_contains = "creation_date_contains_example"; // string | Filter on CNTC-DTE using 'Contains' operator
$creation_date_not_contains = "creation_date_not_contains_example"; // string | Filter on CNTC-DTE using 'NotContains' operator
$creation_date_starts_with = "creation_date_starts_with_example"; // string | Filter on CNTC-DTE using 'StartsWith' operator
$creation_date_not_starts_with = "creation_date_not_starts_with_example"; // string | Filter on CNTC-DTE using 'NotStartsWith' operator
$creation_date_ends_with = "creation_date_ends_with_example"; // string | Filter on CNTC-DTE using 'EndsWith' operator
$creation_date_not_ends_with = "creation_date_not_ends_with_example"; // string | Filter on CNTC-DTE using 'NotEndsWith' operator
$creation_date_in = "creation_date_in_example"; // string | Filter on CNTC-DTE using 'In' operator
$creation_date_between = "creation_date_between_example"; // string | Filter on CNTC-DTE using 'Between' operator
$client_number_not_equal = "client_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$client_number_less = "client_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$client_number_less_or_equal = "client_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$client_number_greater = "client_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$client_number_greater_or_equal = "client_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$client_number_is_null = "client_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$client_number_is_not_null = "client_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$client_number_like = "client_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$client_number_not_like = "client_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$client_number_contains = "client_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$client_number_not_contains = "client_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$client_number_starts_with = "client_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$client_number_not_starts_with = "client_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$client_number_ends_with = "client_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$client_number_not_ends_with = "client_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$client_number_in = "client_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$client_number_between = "client_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$engineer_code_not_equal = "engineer_code_not_equal_example"; // string | Filter on CSL-ENG using 'NotEqual' operator
$engineer_code_less = "engineer_code_less_example"; // string | Filter on CSL-ENG using 'Less' operator
$engineer_code_less_or_equal = "engineer_code_less_or_equal_example"; // string | Filter on CSL-ENG using 'LessOrEqual' operator
$engineer_code_greater = "engineer_code_greater_example"; // string | Filter on CSL-ENG using 'Greater' operator
$engineer_code_greater_or_equal = "engineer_code_greater_or_equal_example"; // string | Filter on CSL-ENG using 'GreaterOrEqual' operator
$engineer_code_is_null = "engineer_code_is_null_example"; // string | Filter on CSL-ENG using 'IsNull' operator
$engineer_code_is_not_null = "engineer_code_is_not_null_example"; // string | Filter on CSL-ENG using 'IsNotNull' operator
$engineer_code_like = "engineer_code_like_example"; // string | Filter on CSL-ENG using 'Like' operator
$engineer_code_not_like = "engineer_code_not_like_example"; // string | Filter on CSL-ENG using 'NotLike' operator
$engineer_code_contains = "engineer_code_contains_example"; // string | Filter on CSL-ENG using 'Contains' operator
$engineer_code_not_contains = "engineer_code_not_contains_example"; // string | Filter on CSL-ENG using 'NotContains' operator
$engineer_code_starts_with = "engineer_code_starts_with_example"; // string | Filter on CSL-ENG using 'StartsWith' operator
$engineer_code_not_starts_with = "engineer_code_not_starts_with_example"; // string | Filter on CSL-ENG using 'NotStartsWith' operator
$engineer_code_ends_with = "engineer_code_ends_with_example"; // string | Filter on CSL-ENG using 'EndsWith' operator
$engineer_code_not_ends_with = "engineer_code_not_ends_with_example"; // string | Filter on CSL-ENG using 'NotEndsWith' operator
$engineer_code_in = "engineer_code_in_example"; // string | Filter on CSL-ENG using 'In' operator
$engineer_code_between = "engineer_code_between_example"; // string | Filter on CSL-ENG using 'Between' operator
$is_modification_not_equal = "is_modification_not_equal_example"; // string | Filter on MOD-FLG using 'NotEqual' operator
$is_modification_less = "is_modification_less_example"; // string | Filter on MOD-FLG using 'Less' operator
$is_modification_less_or_equal = "is_modification_less_or_equal_example"; // string | Filter on MOD-FLG using 'LessOrEqual' operator
$is_modification_greater = "is_modification_greater_example"; // string | Filter on MOD-FLG using 'Greater' operator
$is_modification_greater_or_equal = "is_modification_greater_or_equal_example"; // string | Filter on MOD-FLG using 'GreaterOrEqual' operator
$is_modification_is_null = "is_modification_is_null_example"; // string | Filter on MOD-FLG using 'IsNull' operator
$is_modification_is_not_null = "is_modification_is_not_null_example"; // string | Filter on MOD-FLG using 'IsNotNull' operator
$is_modification_like = "is_modification_like_example"; // string | Filter on MOD-FLG using 'Like' operator
$is_modification_not_like = "is_modification_not_like_example"; // string | Filter on MOD-FLG using 'NotLike' operator
$is_modification_contains = "is_modification_contains_example"; // string | Filter on MOD-FLG using 'Contains' operator
$is_modification_not_contains = "is_modification_not_contains_example"; // string | Filter on MOD-FLG using 'NotContains' operator
$is_modification_starts_with = "is_modification_starts_with_example"; // string | Filter on MOD-FLG using 'StartsWith' operator
$is_modification_not_starts_with = "is_modification_not_starts_with_example"; // string | Filter on MOD-FLG using 'NotStartsWith' operator
$is_modification_ends_with = "is_modification_ends_with_example"; // string | Filter on MOD-FLG using 'EndsWith' operator
$is_modification_not_ends_with = "is_modification_not_ends_with_example"; // string | Filter on MOD-FLG using 'NotEndsWith' operator
$is_modification_in = "is_modification_in_example"; // string | Filter on MOD-FLG using 'In' operator
$is_modification_between = "is_modification_between_example"; // string | Filter on MOD-FLG using 'Between' operator
$job_code_not_equal = "job_code_not_equal_example"; // string | Filter on CSL-JOB using 'NotEqual' operator
$job_code_less = "job_code_less_example"; // string | Filter on CSL-JOB using 'Less' operator
$job_code_less_or_equal = "job_code_less_or_equal_example"; // string | Filter on CSL-JOB using 'LessOrEqual' operator
$job_code_greater = "job_code_greater_example"; // string | Filter on CSL-JOB using 'Greater' operator
$job_code_greater_or_equal = "job_code_greater_or_equal_example"; // string | Filter on CSL-JOB using 'GreaterOrEqual' operator
$job_code_is_null = "job_code_is_null_example"; // string | Filter on CSL-JOB using 'IsNull' operator
$job_code_is_not_null = "job_code_is_not_null_example"; // string | Filter on CSL-JOB using 'IsNotNull' operator
$job_code_like = "job_code_like_example"; // string | Filter on CSL-JOB using 'Like' operator
$job_code_not_like = "job_code_not_like_example"; // string | Filter on CSL-JOB using 'NotLike' operator
$job_code_contains = "job_code_contains_example"; // string | Filter on CSL-JOB using 'Contains' operator
$job_code_not_contains = "job_code_not_contains_example"; // string | Filter on CSL-JOB using 'NotContains' operator
$job_code_starts_with = "job_code_starts_with_example"; // string | Filter on CSL-JOB using 'StartsWith' operator
$job_code_not_starts_with = "job_code_not_starts_with_example"; // string | Filter on CSL-JOB using 'NotStartsWith' operator
$job_code_ends_with = "job_code_ends_with_example"; // string | Filter on CSL-JOB using 'EndsWith' operator
$job_code_not_ends_with = "job_code_not_ends_with_example"; // string | Filter on CSL-JOB using 'NotEndsWith' operator
$job_code_in = "job_code_in_example"; // string | Filter on CSL-JOB using 'In' operator
$job_code_between = "job_code_between_example"; // string | Filter on CSL-JOB using 'Between' operator
$lead_engineer_code_not_equal = "lead_engineer_code_not_equal_example"; // string | Filter on LEAD-ENG using 'NotEqual' operator
$lead_engineer_code_less = "lead_engineer_code_less_example"; // string | Filter on LEAD-ENG using 'Less' operator
$lead_engineer_code_less_or_equal = "lead_engineer_code_less_or_equal_example"; // string | Filter on LEAD-ENG using 'LessOrEqual' operator
$lead_engineer_code_greater = "lead_engineer_code_greater_example"; // string | Filter on LEAD-ENG using 'Greater' operator
$lead_engineer_code_greater_or_equal = "lead_engineer_code_greater_or_equal_example"; // string | Filter on LEAD-ENG using 'GreaterOrEqual' operator
$lead_engineer_code_is_null = "lead_engineer_code_is_null_example"; // string | Filter on LEAD-ENG using 'IsNull' operator
$lead_engineer_code_is_not_null = "lead_engineer_code_is_not_null_example"; // string | Filter on LEAD-ENG using 'IsNotNull' operator
$lead_engineer_code_like = "lead_engineer_code_like_example"; // string | Filter on LEAD-ENG using 'Like' operator
$lead_engineer_code_not_like = "lead_engineer_code_not_like_example"; // string | Filter on LEAD-ENG using 'NotLike' operator
$lead_engineer_code_contains = "lead_engineer_code_contains_example"; // string | Filter on LEAD-ENG using 'Contains' operator
$lead_engineer_code_not_contains = "lead_engineer_code_not_contains_example"; // string | Filter on LEAD-ENG using 'NotContains' operator
$lead_engineer_code_starts_with = "lead_engineer_code_starts_with_example"; // string | Filter on LEAD-ENG using 'StartsWith' operator
$lead_engineer_code_not_starts_with = "lead_engineer_code_not_starts_with_example"; // string | Filter on LEAD-ENG using 'NotStartsWith' operator
$lead_engineer_code_ends_with = "lead_engineer_code_ends_with_example"; // string | Filter on LEAD-ENG using 'EndsWith' operator
$lead_engineer_code_not_ends_with = "lead_engineer_code_not_ends_with_example"; // string | Filter on LEAD-ENG using 'NotEndsWith' operator
$lead_engineer_code_in = "lead_engineer_code_in_example"; // string | Filter on LEAD-ENG using 'In' operator
$lead_engineer_code_between = "lead_engineer_code_between_example"; // string | Filter on LEAD-ENG using 'Between' operator
$status_code_not_equal = "status_code_not_equal_example"; // string | Filter on CSL-STA using 'NotEqual' operator
$status_code_less = "status_code_less_example"; // string | Filter on CSL-STA using 'Less' operator
$status_code_less_or_equal = "status_code_less_or_equal_example"; // string | Filter on CSL-STA using 'LessOrEqual' operator
$status_code_greater = "status_code_greater_example"; // string | Filter on CSL-STA using 'Greater' operator
$status_code_greater_or_equal = "status_code_greater_or_equal_example"; // string | Filter on CSL-STA using 'GreaterOrEqual' operator
$status_code_is_null = "status_code_is_null_example"; // string | Filter on CSL-STA using 'IsNull' operator
$status_code_is_not_null = "status_code_is_not_null_example"; // string | Filter on CSL-STA using 'IsNotNull' operator
$status_code_like = "status_code_like_example"; // string | Filter on CSL-STA using 'Like' operator
$status_code_not_like = "status_code_not_like_example"; // string | Filter on CSL-STA using 'NotLike' operator
$status_code_contains = "status_code_contains_example"; // string | Filter on CSL-STA using 'Contains' operator
$status_code_not_contains = "status_code_not_contains_example"; // string | Filter on CSL-STA using 'NotContains' operator
$status_code_starts_with = "status_code_starts_with_example"; // string | Filter on CSL-STA using 'StartsWith' operator
$status_code_not_starts_with = "status_code_not_starts_with_example"; // string | Filter on CSL-STA using 'NotStartsWith' operator
$status_code_ends_with = "status_code_ends_with_example"; // string | Filter on CSL-STA using 'EndsWith' operator
$status_code_not_ends_with = "status_code_not_ends_with_example"; // string | Filter on CSL-STA using 'NotEndsWith' operator
$status_code_in = "status_code_in_example"; // string | Filter on CSL-STA using 'In' operator
$status_code_between = "status_code_between_example"; // string | Filter on CSL-STA using 'Between' operator
$update_date_not_equal = "update_date_not_equal_example"; // string | Filter on UPD-DTE using 'NotEqual' operator
$update_date_less = "update_date_less_example"; // string | Filter on UPD-DTE using 'Less' operator
$update_date_less_or_equal = "update_date_less_or_equal_example"; // string | Filter on UPD-DTE using 'LessOrEqual' operator
$update_date_greater = "update_date_greater_example"; // string | Filter on UPD-DTE using 'Greater' operator
$update_date_greater_or_equal = "update_date_greater_or_equal_example"; // string | Filter on UPD-DTE using 'GreaterOrEqual' operator
$update_date_is_null = "update_date_is_null_example"; // string | Filter on UPD-DTE using 'IsNull' operator
$update_date_is_not_null = "update_date_is_not_null_example"; // string | Filter on UPD-DTE using 'IsNotNull' operator
$update_date_like = "update_date_like_example"; // string | Filter on UPD-DTE using 'Like' operator
$update_date_not_like = "update_date_not_like_example"; // string | Filter on UPD-DTE using 'NotLike' operator
$update_date_contains = "update_date_contains_example"; // string | Filter on UPD-DTE using 'Contains' operator
$update_date_not_contains = "update_date_not_contains_example"; // string | Filter on UPD-DTE using 'NotContains' operator
$update_date_starts_with = "update_date_starts_with_example"; // string | Filter on UPD-DTE using 'StartsWith' operator
$update_date_not_starts_with = "update_date_not_starts_with_example"; // string | Filter on UPD-DTE using 'NotStartsWith' operator
$update_date_ends_with = "update_date_ends_with_example"; // string | Filter on UPD-DTE using 'EndsWith' operator
$update_date_not_ends_with = "update_date_not_ends_with_example"; // string | Filter on UPD-DTE using 'NotEndsWith' operator
$update_date_in = "update_date_in_example"; // string | Filter on UPD-DTE using 'In' operator
$update_date_between = "update_date_between_example"; // string | Filter on UPD-DTE using 'Between' operator

try {
    $result = $apiInstance->acsSearchSupportLogs($pager_skip, $pager_take, $activity_category, $analyst_code, $creation_date, $client_number, $engineer_code, $is_modification, $job_code, $lead_engineer_code, $status_code, $update_date, $activity_category_not_equal, $activity_category_less, $activity_category_less_or_equal, $activity_category_greater, $activity_category_greater_or_equal, $activity_category_is_null, $activity_category_is_not_null, $activity_category_like, $activity_category_not_like, $activity_category_contains, $activity_category_not_contains, $activity_category_starts_with, $activity_category_not_starts_with, $activity_category_ends_with, $activity_category_not_ends_with, $activity_category_in, $activity_category_between, $analyst_code_not_equal, $analyst_code_less, $analyst_code_less_or_equal, $analyst_code_greater, $analyst_code_greater_or_equal, $analyst_code_is_null, $analyst_code_is_not_null, $analyst_code_like, $analyst_code_not_like, $analyst_code_contains, $analyst_code_not_contains, $analyst_code_starts_with, $analyst_code_not_starts_with, $analyst_code_ends_with, $analyst_code_not_ends_with, $analyst_code_in, $analyst_code_between, $creation_date_not_equal, $creation_date_less, $creation_date_less_or_equal, $creation_date_greater, $creation_date_greater_or_equal, $creation_date_is_null, $creation_date_is_not_null, $creation_date_like, $creation_date_not_like, $creation_date_contains, $creation_date_not_contains, $creation_date_starts_with, $creation_date_not_starts_with, $creation_date_ends_with, $creation_date_not_ends_with, $creation_date_in, $creation_date_between, $client_number_not_equal, $client_number_less, $client_number_less_or_equal, $client_number_greater, $client_number_greater_or_equal, $client_number_is_null, $client_number_is_not_null, $client_number_like, $client_number_not_like, $client_number_contains, $client_number_not_contains, $client_number_starts_with, $client_number_not_starts_with, $client_number_ends_with, $client_number_not_ends_with, $client_number_in, $client_number_between, $engineer_code_not_equal, $engineer_code_less, $engineer_code_less_or_equal, $engineer_code_greater, $engineer_code_greater_or_equal, $engineer_code_is_null, $engineer_code_is_not_null, $engineer_code_like, $engineer_code_not_like, $engineer_code_contains, $engineer_code_not_contains, $engineer_code_starts_with, $engineer_code_not_starts_with, $engineer_code_ends_with, $engineer_code_not_ends_with, $engineer_code_in, $engineer_code_between, $is_modification_not_equal, $is_modification_less, $is_modification_less_or_equal, $is_modification_greater, $is_modification_greater_or_equal, $is_modification_is_null, $is_modification_is_not_null, $is_modification_like, $is_modification_not_like, $is_modification_contains, $is_modification_not_contains, $is_modification_starts_with, $is_modification_not_starts_with, $is_modification_ends_with, $is_modification_not_ends_with, $is_modification_in, $is_modification_between, $job_code_not_equal, $job_code_less, $job_code_less_or_equal, $job_code_greater, $job_code_greater_or_equal, $job_code_is_null, $job_code_is_not_null, $job_code_like, $job_code_not_like, $job_code_contains, $job_code_not_contains, $job_code_starts_with, $job_code_not_starts_with, $job_code_ends_with, $job_code_not_ends_with, $job_code_in, $job_code_between, $lead_engineer_code_not_equal, $lead_engineer_code_less, $lead_engineer_code_less_or_equal, $lead_engineer_code_greater, $lead_engineer_code_greater_or_equal, $lead_engineer_code_is_null, $lead_engineer_code_is_not_null, $lead_engineer_code_like, $lead_engineer_code_not_like, $lead_engineer_code_contains, $lead_engineer_code_not_contains, $lead_engineer_code_starts_with, $lead_engineer_code_not_starts_with, $lead_engineer_code_ends_with, $lead_engineer_code_not_ends_with, $lead_engineer_code_in, $lead_engineer_code_between, $status_code_not_equal, $status_code_less, $status_code_less_or_equal, $status_code_greater, $status_code_greater_or_equal, $status_code_is_null, $status_code_is_not_null, $status_code_like, $status_code_not_like, $status_code_contains, $status_code_not_contains, $status_code_starts_with, $status_code_not_starts_with, $status_code_ends_with, $status_code_not_ends_with, $status_code_in, $status_code_between, $update_date_not_equal, $update_date_less, $update_date_less_or_equal, $update_date_greater, $update_date_greater_or_equal, $update_date_is_null, $update_date_is_not_null, $update_date_like, $update_date_not_like, $update_date_contains, $update_date_not_contains, $update_date_starts_with, $update_date_not_starts_with, $update_date_ends_with, $update_date_not_ends_with, $update_date_in, $update_date_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcsApi->acsSearchSupportLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **activity_category** | **string**| Filter on ATV-CAT using &#39;Equal&#39; operator | [optional]
 **analyst_code** | **string**| Filter on CSL-ANT using &#39;Equal&#39; operator | [optional]
 **creation_date** | **string**| Filter on CNTC-DTE using &#39;Equal&#39; operator | [optional]
 **client_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **engineer_code** | **string**| Filter on CSL-ENG using &#39;Equal&#39; operator | [optional]
 **is_modification** | **string**| Filter on MOD-FLG using &#39;Equal&#39; operator | [optional]
 **job_code** | **string**| Filter on CSL-JOB using &#39;Equal&#39; operator | [optional]
 **lead_engineer_code** | **string**| Filter on LEAD-ENG using &#39;Equal&#39; operator | [optional]
 **status_code** | **string**| Filter on CSL-STA using &#39;Equal&#39; operator | [optional]
 **update_date** | **string**| Filter on UPD-DTE using &#39;Equal&#39; operator | [optional]
 **activity_category_not_equal** | **string**| Filter on ATV-CAT using &#39;NotEqual&#39; operator | [optional]
 **activity_category_less** | **string**| Filter on ATV-CAT using &#39;Less&#39; operator | [optional]
 **activity_category_less_or_equal** | **string**| Filter on ATV-CAT using &#39;LessOrEqual&#39; operator | [optional]
 **activity_category_greater** | **string**| Filter on ATV-CAT using &#39;Greater&#39; operator | [optional]
 **activity_category_greater_or_equal** | **string**| Filter on ATV-CAT using &#39;GreaterOrEqual&#39; operator | [optional]
 **activity_category_is_null** | **string**| Filter on ATV-CAT using &#39;IsNull&#39; operator | [optional]
 **activity_category_is_not_null** | **string**| Filter on ATV-CAT using &#39;IsNotNull&#39; operator | [optional]
 **activity_category_like** | **string**| Filter on ATV-CAT using &#39;Like&#39; operator | [optional]
 **activity_category_not_like** | **string**| Filter on ATV-CAT using &#39;NotLike&#39; operator | [optional]
 **activity_category_contains** | **string**| Filter on ATV-CAT using &#39;Contains&#39; operator | [optional]
 **activity_category_not_contains** | **string**| Filter on ATV-CAT using &#39;NotContains&#39; operator | [optional]
 **activity_category_starts_with** | **string**| Filter on ATV-CAT using &#39;StartsWith&#39; operator | [optional]
 **activity_category_not_starts_with** | **string**| Filter on ATV-CAT using &#39;NotStartsWith&#39; operator | [optional]
 **activity_category_ends_with** | **string**| Filter on ATV-CAT using &#39;EndsWith&#39; operator | [optional]
 **activity_category_not_ends_with** | **string**| Filter on ATV-CAT using &#39;NotEndsWith&#39; operator | [optional]
 **activity_category_in** | **string**| Filter on ATV-CAT using &#39;In&#39; operator | [optional]
 **activity_category_between** | **string**| Filter on ATV-CAT using &#39;Between&#39; operator | [optional]
 **analyst_code_not_equal** | **string**| Filter on CSL-ANT using &#39;NotEqual&#39; operator | [optional]
 **analyst_code_less** | **string**| Filter on CSL-ANT using &#39;Less&#39; operator | [optional]
 **analyst_code_less_or_equal** | **string**| Filter on CSL-ANT using &#39;LessOrEqual&#39; operator | [optional]
 **analyst_code_greater** | **string**| Filter on CSL-ANT using &#39;Greater&#39; operator | [optional]
 **analyst_code_greater_or_equal** | **string**| Filter on CSL-ANT using &#39;GreaterOrEqual&#39; operator | [optional]
 **analyst_code_is_null** | **string**| Filter on CSL-ANT using &#39;IsNull&#39; operator | [optional]
 **analyst_code_is_not_null** | **string**| Filter on CSL-ANT using &#39;IsNotNull&#39; operator | [optional]
 **analyst_code_like** | **string**| Filter on CSL-ANT using &#39;Like&#39; operator | [optional]
 **analyst_code_not_like** | **string**| Filter on CSL-ANT using &#39;NotLike&#39; operator | [optional]
 **analyst_code_contains** | **string**| Filter on CSL-ANT using &#39;Contains&#39; operator | [optional]
 **analyst_code_not_contains** | **string**| Filter on CSL-ANT using &#39;NotContains&#39; operator | [optional]
 **analyst_code_starts_with** | **string**| Filter on CSL-ANT using &#39;StartsWith&#39; operator | [optional]
 **analyst_code_not_starts_with** | **string**| Filter on CSL-ANT using &#39;NotStartsWith&#39; operator | [optional]
 **analyst_code_ends_with** | **string**| Filter on CSL-ANT using &#39;EndsWith&#39; operator | [optional]
 **analyst_code_not_ends_with** | **string**| Filter on CSL-ANT using &#39;NotEndsWith&#39; operator | [optional]
 **analyst_code_in** | **string**| Filter on CSL-ANT using &#39;In&#39; operator | [optional]
 **analyst_code_between** | **string**| Filter on CSL-ANT using &#39;Between&#39; operator | [optional]
 **creation_date_not_equal** | **string**| Filter on CNTC-DTE using &#39;NotEqual&#39; operator | [optional]
 **creation_date_less** | **string**| Filter on CNTC-DTE using &#39;Less&#39; operator | [optional]
 **creation_date_less_or_equal** | **string**| Filter on CNTC-DTE using &#39;LessOrEqual&#39; operator | [optional]
 **creation_date_greater** | **string**| Filter on CNTC-DTE using &#39;Greater&#39; operator | [optional]
 **creation_date_greater_or_equal** | **string**| Filter on CNTC-DTE using &#39;GreaterOrEqual&#39; operator | [optional]
 **creation_date_is_null** | **string**| Filter on CNTC-DTE using &#39;IsNull&#39; operator | [optional]
 **creation_date_is_not_null** | **string**| Filter on CNTC-DTE using &#39;IsNotNull&#39; operator | [optional]
 **creation_date_like** | **string**| Filter on CNTC-DTE using &#39;Like&#39; operator | [optional]
 **creation_date_not_like** | **string**| Filter on CNTC-DTE using &#39;NotLike&#39; operator | [optional]
 **creation_date_contains** | **string**| Filter on CNTC-DTE using &#39;Contains&#39; operator | [optional]
 **creation_date_not_contains** | **string**| Filter on CNTC-DTE using &#39;NotContains&#39; operator | [optional]
 **creation_date_starts_with** | **string**| Filter on CNTC-DTE using &#39;StartsWith&#39; operator | [optional]
 **creation_date_not_starts_with** | **string**| Filter on CNTC-DTE using &#39;NotStartsWith&#39; operator | [optional]
 **creation_date_ends_with** | **string**| Filter on CNTC-DTE using &#39;EndsWith&#39; operator | [optional]
 **creation_date_not_ends_with** | **string**| Filter on CNTC-DTE using &#39;NotEndsWith&#39; operator | [optional]
 **creation_date_in** | **string**| Filter on CNTC-DTE using &#39;In&#39; operator | [optional]
 **creation_date_between** | **string**| Filter on CNTC-DTE using &#39;Between&#39; operator | [optional]
 **client_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **client_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **client_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **client_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **client_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **client_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **client_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **client_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **client_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **client_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **client_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **client_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **client_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **client_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **client_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **client_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **client_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **engineer_code_not_equal** | **string**| Filter on CSL-ENG using &#39;NotEqual&#39; operator | [optional]
 **engineer_code_less** | **string**| Filter on CSL-ENG using &#39;Less&#39; operator | [optional]
 **engineer_code_less_or_equal** | **string**| Filter on CSL-ENG using &#39;LessOrEqual&#39; operator | [optional]
 **engineer_code_greater** | **string**| Filter on CSL-ENG using &#39;Greater&#39; operator | [optional]
 **engineer_code_greater_or_equal** | **string**| Filter on CSL-ENG using &#39;GreaterOrEqual&#39; operator | [optional]
 **engineer_code_is_null** | **string**| Filter on CSL-ENG using &#39;IsNull&#39; operator | [optional]
 **engineer_code_is_not_null** | **string**| Filter on CSL-ENG using &#39;IsNotNull&#39; operator | [optional]
 **engineer_code_like** | **string**| Filter on CSL-ENG using &#39;Like&#39; operator | [optional]
 **engineer_code_not_like** | **string**| Filter on CSL-ENG using &#39;NotLike&#39; operator | [optional]
 **engineer_code_contains** | **string**| Filter on CSL-ENG using &#39;Contains&#39; operator | [optional]
 **engineer_code_not_contains** | **string**| Filter on CSL-ENG using &#39;NotContains&#39; operator | [optional]
 **engineer_code_starts_with** | **string**| Filter on CSL-ENG using &#39;StartsWith&#39; operator | [optional]
 **engineer_code_not_starts_with** | **string**| Filter on CSL-ENG using &#39;NotStartsWith&#39; operator | [optional]
 **engineer_code_ends_with** | **string**| Filter on CSL-ENG using &#39;EndsWith&#39; operator | [optional]
 **engineer_code_not_ends_with** | **string**| Filter on CSL-ENG using &#39;NotEndsWith&#39; operator | [optional]
 **engineer_code_in** | **string**| Filter on CSL-ENG using &#39;In&#39; operator | [optional]
 **engineer_code_between** | **string**| Filter on CSL-ENG using &#39;Between&#39; operator | [optional]
 **is_modification_not_equal** | **string**| Filter on MOD-FLG using &#39;NotEqual&#39; operator | [optional]
 **is_modification_less** | **string**| Filter on MOD-FLG using &#39;Less&#39; operator | [optional]
 **is_modification_less_or_equal** | **string**| Filter on MOD-FLG using &#39;LessOrEqual&#39; operator | [optional]
 **is_modification_greater** | **string**| Filter on MOD-FLG using &#39;Greater&#39; operator | [optional]
 **is_modification_greater_or_equal** | **string**| Filter on MOD-FLG using &#39;GreaterOrEqual&#39; operator | [optional]
 **is_modification_is_null** | **string**| Filter on MOD-FLG using &#39;IsNull&#39; operator | [optional]
 **is_modification_is_not_null** | **string**| Filter on MOD-FLG using &#39;IsNotNull&#39; operator | [optional]
 **is_modification_like** | **string**| Filter on MOD-FLG using &#39;Like&#39; operator | [optional]
 **is_modification_not_like** | **string**| Filter on MOD-FLG using &#39;NotLike&#39; operator | [optional]
 **is_modification_contains** | **string**| Filter on MOD-FLG using &#39;Contains&#39; operator | [optional]
 **is_modification_not_contains** | **string**| Filter on MOD-FLG using &#39;NotContains&#39; operator | [optional]
 **is_modification_starts_with** | **string**| Filter on MOD-FLG using &#39;StartsWith&#39; operator | [optional]
 **is_modification_not_starts_with** | **string**| Filter on MOD-FLG using &#39;NotStartsWith&#39; operator | [optional]
 **is_modification_ends_with** | **string**| Filter on MOD-FLG using &#39;EndsWith&#39; operator | [optional]
 **is_modification_not_ends_with** | **string**| Filter on MOD-FLG using &#39;NotEndsWith&#39; operator | [optional]
 **is_modification_in** | **string**| Filter on MOD-FLG using &#39;In&#39; operator | [optional]
 **is_modification_between** | **string**| Filter on MOD-FLG using &#39;Between&#39; operator | [optional]
 **job_code_not_equal** | **string**| Filter on CSL-JOB using &#39;NotEqual&#39; operator | [optional]
 **job_code_less** | **string**| Filter on CSL-JOB using &#39;Less&#39; operator | [optional]
 **job_code_less_or_equal** | **string**| Filter on CSL-JOB using &#39;LessOrEqual&#39; operator | [optional]
 **job_code_greater** | **string**| Filter on CSL-JOB using &#39;Greater&#39; operator | [optional]
 **job_code_greater_or_equal** | **string**| Filter on CSL-JOB using &#39;GreaterOrEqual&#39; operator | [optional]
 **job_code_is_null** | **string**| Filter on CSL-JOB using &#39;IsNull&#39; operator | [optional]
 **job_code_is_not_null** | **string**| Filter on CSL-JOB using &#39;IsNotNull&#39; operator | [optional]
 **job_code_like** | **string**| Filter on CSL-JOB using &#39;Like&#39; operator | [optional]
 **job_code_not_like** | **string**| Filter on CSL-JOB using &#39;NotLike&#39; operator | [optional]
 **job_code_contains** | **string**| Filter on CSL-JOB using &#39;Contains&#39; operator | [optional]
 **job_code_not_contains** | **string**| Filter on CSL-JOB using &#39;NotContains&#39; operator | [optional]
 **job_code_starts_with** | **string**| Filter on CSL-JOB using &#39;StartsWith&#39; operator | [optional]
 **job_code_not_starts_with** | **string**| Filter on CSL-JOB using &#39;NotStartsWith&#39; operator | [optional]
 **job_code_ends_with** | **string**| Filter on CSL-JOB using &#39;EndsWith&#39; operator | [optional]
 **job_code_not_ends_with** | **string**| Filter on CSL-JOB using &#39;NotEndsWith&#39; operator | [optional]
 **job_code_in** | **string**| Filter on CSL-JOB using &#39;In&#39; operator | [optional]
 **job_code_between** | **string**| Filter on CSL-JOB using &#39;Between&#39; operator | [optional]
 **lead_engineer_code_not_equal** | **string**| Filter on LEAD-ENG using &#39;NotEqual&#39; operator | [optional]
 **lead_engineer_code_less** | **string**| Filter on LEAD-ENG using &#39;Less&#39; operator | [optional]
 **lead_engineer_code_less_or_equal** | **string**| Filter on LEAD-ENG using &#39;LessOrEqual&#39; operator | [optional]
 **lead_engineer_code_greater** | **string**| Filter on LEAD-ENG using &#39;Greater&#39; operator | [optional]
 **lead_engineer_code_greater_or_equal** | **string**| Filter on LEAD-ENG using &#39;GreaterOrEqual&#39; operator | [optional]
 **lead_engineer_code_is_null** | **string**| Filter on LEAD-ENG using &#39;IsNull&#39; operator | [optional]
 **lead_engineer_code_is_not_null** | **string**| Filter on LEAD-ENG using &#39;IsNotNull&#39; operator | [optional]
 **lead_engineer_code_like** | **string**| Filter on LEAD-ENG using &#39;Like&#39; operator | [optional]
 **lead_engineer_code_not_like** | **string**| Filter on LEAD-ENG using &#39;NotLike&#39; operator | [optional]
 **lead_engineer_code_contains** | **string**| Filter on LEAD-ENG using &#39;Contains&#39; operator | [optional]
 **lead_engineer_code_not_contains** | **string**| Filter on LEAD-ENG using &#39;NotContains&#39; operator | [optional]
 **lead_engineer_code_starts_with** | **string**| Filter on LEAD-ENG using &#39;StartsWith&#39; operator | [optional]
 **lead_engineer_code_not_starts_with** | **string**| Filter on LEAD-ENG using &#39;NotStartsWith&#39; operator | [optional]
 **lead_engineer_code_ends_with** | **string**| Filter on LEAD-ENG using &#39;EndsWith&#39; operator | [optional]
 **lead_engineer_code_not_ends_with** | **string**| Filter on LEAD-ENG using &#39;NotEndsWith&#39; operator | [optional]
 **lead_engineer_code_in** | **string**| Filter on LEAD-ENG using &#39;In&#39; operator | [optional]
 **lead_engineer_code_between** | **string**| Filter on LEAD-ENG using &#39;Between&#39; operator | [optional]
 **status_code_not_equal** | **string**| Filter on CSL-STA using &#39;NotEqual&#39; operator | [optional]
 **status_code_less** | **string**| Filter on CSL-STA using &#39;Less&#39; operator | [optional]
 **status_code_less_or_equal** | **string**| Filter on CSL-STA using &#39;LessOrEqual&#39; operator | [optional]
 **status_code_greater** | **string**| Filter on CSL-STA using &#39;Greater&#39; operator | [optional]
 **status_code_greater_or_equal** | **string**| Filter on CSL-STA using &#39;GreaterOrEqual&#39; operator | [optional]
 **status_code_is_null** | **string**| Filter on CSL-STA using &#39;IsNull&#39; operator | [optional]
 **status_code_is_not_null** | **string**| Filter on CSL-STA using &#39;IsNotNull&#39; operator | [optional]
 **status_code_like** | **string**| Filter on CSL-STA using &#39;Like&#39; operator | [optional]
 **status_code_not_like** | **string**| Filter on CSL-STA using &#39;NotLike&#39; operator | [optional]
 **status_code_contains** | **string**| Filter on CSL-STA using &#39;Contains&#39; operator | [optional]
 **status_code_not_contains** | **string**| Filter on CSL-STA using &#39;NotContains&#39; operator | [optional]
 **status_code_starts_with** | **string**| Filter on CSL-STA using &#39;StartsWith&#39; operator | [optional]
 **status_code_not_starts_with** | **string**| Filter on CSL-STA using &#39;NotStartsWith&#39; operator | [optional]
 **status_code_ends_with** | **string**| Filter on CSL-STA using &#39;EndsWith&#39; operator | [optional]
 **status_code_not_ends_with** | **string**| Filter on CSL-STA using &#39;NotEndsWith&#39; operator | [optional]
 **status_code_in** | **string**| Filter on CSL-STA using &#39;In&#39; operator | [optional]
 **status_code_between** | **string**| Filter on CSL-STA using &#39;Between&#39; operator | [optional]
 **update_date_not_equal** | **string**| Filter on UPD-DTE using &#39;NotEqual&#39; operator | [optional]
 **update_date_less** | **string**| Filter on UPD-DTE using &#39;Less&#39; operator | [optional]
 **update_date_less_or_equal** | **string**| Filter on UPD-DTE using &#39;LessOrEqual&#39; operator | [optional]
 **update_date_greater** | **string**| Filter on UPD-DTE using &#39;Greater&#39; operator | [optional]
 **update_date_greater_or_equal** | **string**| Filter on UPD-DTE using &#39;GreaterOrEqual&#39; operator | [optional]
 **update_date_is_null** | **string**| Filter on UPD-DTE using &#39;IsNull&#39; operator | [optional]
 **update_date_is_not_null** | **string**| Filter on UPD-DTE using &#39;IsNotNull&#39; operator | [optional]
 **update_date_like** | **string**| Filter on UPD-DTE using &#39;Like&#39; operator | [optional]
 **update_date_not_like** | **string**| Filter on UPD-DTE using &#39;NotLike&#39; operator | [optional]
 **update_date_contains** | **string**| Filter on UPD-DTE using &#39;Contains&#39; operator | [optional]
 **update_date_not_contains** | **string**| Filter on UPD-DTE using &#39;NotContains&#39; operator | [optional]
 **update_date_starts_with** | **string**| Filter on UPD-DTE using &#39;StartsWith&#39; operator | [optional]
 **update_date_not_starts_with** | **string**| Filter on UPD-DTE using &#39;NotStartsWith&#39; operator | [optional]
 **update_date_ends_with** | **string**| Filter on UPD-DTE using &#39;EndsWith&#39; operator | [optional]
 **update_date_not_ends_with** | **string**| Filter on UPD-DTE using &#39;NotEndsWith&#39; operator | [optional]
 **update_date_in** | **string**| Filter on UPD-DTE using &#39;In&#39; operator | [optional]
 **update_date_between** | **string**| Filter on UPD-DTE using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultSupportLog**](../Model/SearchResultSupportLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

