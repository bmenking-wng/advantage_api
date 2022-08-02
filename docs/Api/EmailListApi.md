# Swagger\Client\EmailListApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailListCreate**](EmailListApi.md#emailListCreate) | **POST** /email-lists | Create a new EmailList.
[**emailListCreateOrUpdateEmailListRegistration**](EmailListApi.md#emailListCreateOrUpdateEmailListRegistration) | **POST** /email-lists/{listCode}/registrations | Adds or updates an email list registration.
[**emailListGet**](EmailListApi.md#emailListGet) | **GET** /email-lists/{listCode} | Gets the EmailList details of the email list with the given list code.
[**emailListGetEmailListParticipation**](EmailListApi.md#emailListGetEmailListParticipation) | **GET** /customers/{customerNumber}/email-lists | Get all of the ListEmail objects that pertain to the given customer.
[**emailListGetRegistrations**](EmailListApi.md#emailListGetRegistrations) | **GET** /email-lists/{listCode}/registrations | Get the ListEmails that belong to an EmailList.
[**emailListGetWebEmailLists**](EmailListApi.md#emailListGetWebEmailLists) | **GET** /websites/{siteCode}/email-lists | Get the details of the email lists for the given website. This only gets web-enabled active email lists.
[**emailListRemoveFromEmailList**](EmailListApi.md#emailListRemoveFromEmailList) | **DELETE** /email-lists/{listCode}/registrations/{email} | Remove a list email from an email list.
[**emailListSearch**](EmailListApi.md#emailListSearch) | **GET** /email-lists | Get all active web-enabled email lists.
[**emailListUpdateEmailList**](EmailListApi.md#emailListUpdateEmailList) | **POST** /email-lists/{listCode} | 
[**emailListUpdateEmailListParticipation**](EmailListApi.md#emailListUpdateEmailListParticipation) | **PUT** /customers/{customerNumber}/email-lists | Update the entire email list membership for a given customer.  Warning: This does remove the customer from any email list that is not in the requested collection.


# **emailListCreate**
> emailListCreate($email_list)

Create a new EmailList.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_list = new \Swagger\Client\Model\EmailList(); // \Swagger\Client\Model\EmailList | An EmailList object.

try {
    $apiInstance->emailListCreate($email_list);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_list** | [**\Swagger\Client\Model\EmailList**](../Model/EmailList.md)| An EmailList object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListCreateOrUpdateEmailListRegistration**
> \Swagger\Client\Model\EmailListRegistration emailListCreateOrUpdateEmailListRegistration($list_code, $list_email)

Adds or updates an email list registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_code = "list_code_example"; // string | The list code ID for the target EmailList.
$list_email = new \Swagger\Client\Model\EmailListRegistration(); // \Swagger\Client\Model\EmailListRegistration | The ListEmail object to add or update on the target EmailList.

try {
    $result = $apiInstance->emailListCreateOrUpdateEmailListRegistration($list_code, $list_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListCreateOrUpdateEmailListRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_code** | **string**| The list code ID for the target EmailList. |
 **list_email** | [**\Swagger\Client\Model\EmailListRegistration**](../Model/EmailListRegistration.md)| The ListEmail object to add or update on the target EmailList. |

### Return type

[**\Swagger\Client\Model\EmailListRegistration**](../Model/EmailListRegistration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListGet**
> \Swagger\Client\Model\EmailList emailListGet($list_code)

Gets the EmailList details of the email list with the given list code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_code = "list_code_example"; // string | The list code of the desired EmailList.

try {
    $result = $apiInstance->emailListGet($list_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_code** | **string**| The list code of the desired EmailList. |

### Return type

[**\Swagger\Client\Model\EmailList**](../Model/EmailList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListGetEmailListParticipation**
> \Swagger\Client\Model\SearchResultEmailListRegistration emailListGetEmailListParticipation($customer_number)

Get all of the ListEmail objects that pertain to the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | An Advantage customer number.

try {
    $result = $apiInstance->emailListGetEmailListParticipation($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListGetEmailListParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| An Advantage customer number. |

### Return type

[**\Swagger\Client\Model\SearchResultEmailListRegistration**](../Model/SearchResultEmailListRegistration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListGetRegistrations**
> \Swagger\Client\Model\SearchResultEmailListRegistration emailListGetRegistrations($list_code)

Get the ListEmails that belong to an EmailList.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_code = "list_code_example"; // string | The List ID of the list.

try {
    $result = $apiInstance->emailListGetRegistrations($list_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListGetRegistrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_code** | **string**| The List ID of the list. |

### Return type

[**\Swagger\Client\Model\SearchResultEmailListRegistration**](../Model/SearchResultEmailListRegistration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListGetWebEmailLists**
> \Swagger\Client\Model\SearchResultEmailList emailListGetWebEmailLists($site_code)

Get the details of the email lists for the given website. This only gets web-enabled active email lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_code = "site_code_example"; // string | A website ID.

try {
    $result = $apiInstance->emailListGetWebEmailLists($site_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListGetWebEmailLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_code** | **string**| A website ID. |

### Return type

[**\Swagger\Client\Model\SearchResultEmailList**](../Model/SearchResultEmailList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListRemoveFromEmailList**
> emailListRemoveFromEmailList($list_code, $email)

Remove a list email from an email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_code = "list_code_example"; // string | The list code that identifies the email list.
$email = "email_example"; // string | The email address to be removed from the email list.

try {
    $apiInstance->emailListRemoveFromEmailList($list_code, $email);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListRemoveFromEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_code** | **string**| The list code that identifies the email list. |
 **email** | **string**| The email address to be removed from the email list. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListSearch**
> \Swagger\Client\Model\SearchResultEmailList emailListSearch($list_category_code)

Get all active web-enabled email lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_category_code = "list_category_code_example"; // string | 

try {
    $result = $apiInstance->emailListSearch($list_category_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_category_code** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultEmailList**](../Model/SearchResultEmailList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListUpdateEmailList**
> emailListUpdateEmailList($list_code, $email_list_update_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_code = "list_code_example"; // string | 
$email_list_update_request = new \Swagger\Client\Model\EmailListUpdateRequest(); // \Swagger\Client\Model\EmailListUpdateRequest | 

try {
    $apiInstance->emailListUpdateEmailList($list_code, $email_list_update_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListUpdateEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_code** | **string**|  |
 **email_list_update_request** | [**\Swagger\Client\Model\EmailListUpdateRequest**](../Model/EmailListUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailListUpdateEmailListParticipation**
> emailListUpdateEmailListParticipation($customer_number, $list_participation_update_request)

Update the entire email list membership for a given customer.  Warning: This does remove the customer from any email list that is not in the requested collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | An Advantage customer number.
$list_participation_update_request = new \Swagger\Client\Model\EmailListRegistrationReplacementRequest(); // \Swagger\Client\Model\EmailListRegistrationReplacementRequest | A ListParticipationUpdateRequest object.

try {
    $apiInstance->emailListUpdateEmailListParticipation($customer_number, $list_participation_update_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailListApi->emailListUpdateEmailListParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| An Advantage customer number. |
 **list_participation_update_request** | [**\Swagger\Client\Model\EmailListRegistrationReplacementRequest**](../Model/EmailListRegistrationReplacementRequest.md)| A ListParticipationUpdateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

