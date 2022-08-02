# Swagger\Client\StateApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stateGet**](StateApi.md#stateGet) | **GET** /states | Get the list of states for all countries.
[**stateGetState**](StateApi.md#stateGetState) | **GET** /states/{countryCode}/{stateCode} | Get the state for the given country code and state code.


# **stateGet**
> \Swagger\Client\Model\State[] stateGet()

Get the list of states for all countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->stateGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateApi->stateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\State[]**](../Model/State.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stateGetState**
> \Swagger\Client\Model\State stateGetState($country_code, $state_code)

Get the state for the given country code and state code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | Country Code. For a blank country code use the literal string \"blank\".
$state_code = "state_code_example"; // string | State Code

try {
    $result = $apiInstance->stateGetState($country_code, $state_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateApi->stateGetState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Country Code. For a blank country code use the literal string \&quot;blank\&quot;. |
 **state_code** | **string**| State Code |

### Return type

[**\Swagger\Client\Model\State**](../Model/State.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

