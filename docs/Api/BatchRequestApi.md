# Swagger\Client\BatchRequestApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchRequestRequestJobstream**](BatchRequestApi.md#batchRequestRequestJobstream) | **POST** /batch-requests/jobstreams | Request Process via the Rest API  &lt;param name&#x3D;\&quot;request\&quot;&gt;The jobstream name and request parameters&lt;/param&gt;
[**batchRequestRequestProcess**](BatchRequestApi.md#batchRequestRequestProcess) | **POST** /batch-requests/processes | Request Process via the Rest API  &lt;param name&#x3D;\&quot;request\&quot;&gt;The process name and request parameters&lt;/param&gt;


# **batchRequestRequestJobstream**
> batchRequestRequestJobstream($request)

Request Process via the Rest API  <param name=\"request\">The jobstream name and request parameters</param>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\JobstreamRequest(); // \Swagger\Client\Model\JobstreamRequest | 

try {
    $apiInstance->batchRequestRequestJobstream($request);
} catch (Exception $e) {
    echo 'Exception when calling BatchRequestApi->batchRequestRequestJobstream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\JobstreamRequest**](../Model/JobstreamRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchRequestRequestProcess**
> batchRequestRequestProcess($request)

Request Process via the Rest API  <param name=\"request\">The process name and request parameters</param>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\ProcessRequest(); // \Swagger\Client\Model\ProcessRequest | 

try {
    $apiInstance->batchRequestRequestProcess($request);
} catch (Exception $e) {
    echo 'Exception when calling BatchRequestApi->batchRequestRequestProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProcessRequest**](../Model/ProcessRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

