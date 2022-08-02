# Swagger\Client\ControlGroupApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controlGroupBalance**](ControlGroupApi.md#controlGroupBalance) | **POST** /control-groups/{controlGroupDate}/{controlGroupCode}/balance | Checks control totals to see if they match actual totals for the current control group.  An error is thrown if the control totals don&#39;t balance.  The MST120 process, which does  additional payment validation is also requested.  This process does its  validation asynchronously, but can be instructed to automatically release the control  group when it is finished.  A control group cannot be released until the control totals  balance and the payment validation has been passed.
[**controlGroupCloseControlGroup**](ControlGroupApi.md#controlGroupCloseControlGroup) | **POST** /control-groups/{controlGroupDate}/{controlGroupCode}/close | Closes a current control group preventing entry of orders into it.
[**controlGroupCreateOrUpdate**](ControlGroupApi.md#controlGroupCreateOrUpdate) | **POST** /control-groups | Create or Update a Control Group from a ControlGroupIn Model
[**controlGroupGet**](ControlGroupApi.md#controlGroupGet) | **GET** /control-groups/{controlGroupDate}/{controlGroupCode} | Gets a Control Group base on Date and ID
[**controlGroupOpen**](ControlGroupApi.md#controlGroupOpen) | **POST** /control-groups/{controlGroupDate}/{controlGroupCode}/open | Opens a control group enabling entry of orders into it.
[**controlGroupPurge**](ControlGroupApi.md#controlGroupPurge) | **POST** /control-groups/{controlGroupDate}/{controlGroupCode}/purge | Requests the MST830 process to delete all unposted orders in the current control group.  This process deletes the orders asynchronously.
[**controlGroupRelease**](ControlGroupApi.md#controlGroupRelease) | **POST** /control-groups/{controlGroupDate}/{controlGroupCode}/release | Releases a current control group.  A control group must be closed and balanced before  it can be released.  Releasing a control group indicates that all orders  in the control group are done and ready to be posted.
[**controlGroupRemove**](ControlGroupApi.md#controlGroupRemove) | **DELETE** /control-groups/{controlGroupDate}/{controlGroupCode} | Removes a Control Group
[**controlGroupUnrelease**](ControlGroupApi.md#controlGroupUnrelease) | **POST** /control-groups/{controlGroupDate}/{controlGroupCode}/unrelease | Un-releases the current control group indicating that its orders are not yet ready  to be posted.  A control group cannot be unreleased if any of its orders have been posted.
[**controlGroupUpdate**](ControlGroupApi.md#controlGroupUpdate) | **POST** /control-groups/{controlGroupDate}/{controlGroupCode} | Update a Control Group from a ControlGroupUpdateRequest Model


# **controlGroupBalance**
> controlGroupBalance($control_group_date, $control_group_code, $balance_request)

Checks control totals to see if they match actual totals for the current control group.  An error is thrown if the control totals don't balance.  The MST120 process, which does  additional payment validation is also requested.  This process does its  validation asynchronously, but can be instructed to automatically release the control  group when it is finished.  A control group cannot be released until the control totals  balance and the payment validation has been passed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID
$balance_request = new \Swagger\Client\Model\ControlGroupBalanceRequest(); // \Swagger\Client\Model\ControlGroupBalanceRequest | Balance Request Model (requestPaymentValidation and autoRelease)

try {
    $apiInstance->controlGroupBalance($control_group_date, $control_group_code, $balance_request);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |
 **balance_request** | [**\Swagger\Client\Model\ControlGroupBalanceRequest**](../Model/ControlGroupBalanceRequest.md)| Balance Request Model (requestPaymentValidation and autoRelease) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupCloseControlGroup**
> controlGroupCloseControlGroup($control_group_date, $control_group_code)

Closes a current control group preventing entry of orders into it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID

try {
    $apiInstance->controlGroupCloseControlGroup($control_group_date, $control_group_code);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupCloseControlGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupCreateOrUpdate**
> \Swagger\Client\Model\ControlGroup controlGroupCreateOrUpdate($control_group_in)

Create or Update a Control Group from a ControlGroupIn Model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_in = new \Swagger\Client\Model\ControlGroupIn(); // \Swagger\Client\Model\ControlGroupIn | Model to Create/Update Control Group

try {
    $result = $apiInstance->controlGroupCreateOrUpdate($control_group_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_in** | [**\Swagger\Client\Model\ControlGroupIn**](../Model/ControlGroupIn.md)| Model to Create/Update Control Group |

### Return type

[**\Swagger\Client\Model\ControlGroup**](../Model/ControlGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupGet**
> \Swagger\Client\Model\ControlGroup controlGroupGet($control_group_date, $control_group_code)

Gets a Control Group base on Date and ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID

try {
    $result = $apiInstance->controlGroupGet($control_group_date, $control_group_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |

### Return type

[**\Swagger\Client\Model\ControlGroup**](../Model/ControlGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupOpen**
> controlGroupOpen($control_group_date, $control_group_code)

Opens a control group enabling entry of orders into it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID

try {
    $apiInstance->controlGroupOpen($control_group_date, $control_group_code);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupPurge**
> controlGroupPurge($control_group_date, $control_group_code, $purge_offline_request)

Requests the MST830 process to delete all unposted orders in the current control group.  This process deletes the orders asynchronously.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID
$purge_offline_request = new \Swagger\Client\Model\ControlGroupPurgeRequest(); // \Swagger\Client\Model\ControlGroupPurgeRequest | True to delete the control group after purging orders

try {
    $apiInstance->controlGroupPurge($control_group_date, $control_group_code, $purge_offline_request);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupPurge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |
 **purge_offline_request** | [**\Swagger\Client\Model\ControlGroupPurgeRequest**](../Model/ControlGroupPurgeRequest.md)| True to delete the control group after purging orders |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupRelease**
> controlGroupRelease($control_group_date, $control_group_code)

Releases a current control group.  A control group must be closed and balanced before  it can be released.  Releasing a control group indicates that all orders  in the control group are done and ready to be posted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID

try {
    $apiInstance->controlGroupRelease($control_group_date, $control_group_code);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupRelease: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupRemove**
> controlGroupRemove($control_group_date, $control_group_code)

Removes a Control Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID

try {
    $apiInstance->controlGroupRemove($control_group_date, $control_group_code);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupUnrelease**
> controlGroupUnrelease($control_group_date, $control_group_code, $unrelease_request)

Un-releases the current control group indicating that its orders are not yet ready  to be posted.  A control group cannot be unreleased if any of its orders have been posted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID
$unrelease_request = new \Swagger\Client\Model\ControlGroupUnreleaseRequest(); // \Swagger\Client\Model\ControlGroupUnreleaseRequest | The ARP user ID to recreate the ARP control group;              WWWEB is used by default

try {
    $apiInstance->controlGroupUnrelease($control_group_date, $control_group_code, $unrelease_request);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupUnrelease: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |
 **unrelease_request** | [**\Swagger\Client\Model\ControlGroupUnreleaseRequest**](../Model/ControlGroupUnreleaseRequest.md)| The ARP user ID to recreate the ARP control group;              WWWEB is used by default |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlGroupUpdate**
> \Swagger\Client\Model\ControlGroup controlGroupUpdate($control_group_date, $control_group_code, $control_group_update_request)

Update a Control Group from a ControlGroupUpdateRequest Model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ControlGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$control_group_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Control Group Date
$control_group_code = "control_group_code_example"; // string | Control Group ID
$control_group_update_request = new \Swagger\Client\Model\ControlGroupUpdateRequest(); // \Swagger\Client\Model\ControlGroupUpdateRequest | Model to Update Control Group

try {
    $result = $apiInstance->controlGroupUpdate($control_group_date, $control_group_code, $control_group_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlGroupApi->controlGroupUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_group_date** | **\DateTime**| Control Group Date |
 **control_group_code** | **string**| Control Group ID |
 **control_group_update_request** | [**\Swagger\Client\Model\ControlGroupUpdateRequest**](../Model/ControlGroupUpdateRequest.md)| Model to Update Control Group |

### Return type

[**\Swagger\Client\Model\ControlGroup**](../Model/ControlGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

