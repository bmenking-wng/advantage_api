# Swagger\Client\DistributionRunApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**distributionRunUpdate**](DistributionRunApi.md#distributionRunUpdate) | **POST** /distribution-runs/{distributionRunId} | Update an existing distribution run&#39;s status


# **distributionRunUpdate**
> distributionRunUpdate($distribution_run_id, $request)

Update an existing distribution run's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributionRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distribution_run_id = "distribution_run_id_example"; // string | The ID of the distribution run to update
$request = new \Swagger\Client\Model\DistributionRunUpdateRequest(); // \Swagger\Client\Model\DistributionRunUpdateRequest | A DistributionRunUpdateRequest object

try {
    $apiInstance->distributionRunUpdate($distribution_run_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling DistributionRunApi->distributionRunUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_run_id** | **string**| The ID of the distribution run to update |
 **request** | [**\Swagger\Client\Model\DistributionRunUpdateRequest**](../Model/DistributionRunUpdateRequest.md)| A DistributionRunUpdateRequest object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

