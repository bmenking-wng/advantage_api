# Swagger\Client\ReasonApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reasonGet**](ReasonApi.md#reasonGet) | **GET** /reasons/{categoryCode}/{reasonCode} | Returns information for a specified reason code


# **reasonGet**
> \Swagger\Client\Model\Reason reasonGet($category_code, $reason_code)

Returns information for a specified reason code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_code = "category_code_example"; // string | 
$reason_code = "reason_code_example"; // string | 

try {
    $result = $apiInstance->reasonGet($category_code, $reason_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReasonApi->reasonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_code** | **string**|  |
 **reason_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\Reason**](../Model/Reason.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

