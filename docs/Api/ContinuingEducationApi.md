# Swagger\Client\ContinuingEducationApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**continuingEducationCreateCredit**](ContinuingEducationApi.md#continuingEducationCreateCredit) | **POST** /customers/{customerNumber}/continuing-education-credits | Creates a new continuing education credit for the specified customer in Advantage
[**continuingEducationGet**](ContinuingEducationApi.md#continuingEducationGet) | **GET** /continuing-education-providers | Retrieves the list of all continuing education providers
[**continuingEducationGetCredits**](ContinuingEducationApi.md#continuingEducationGetCredits) | **GET** /customers/{customerNumber}/continuing-education-credits | Retrieves the list of all credits earned by the specified customer


# **continuingEducationCreateCredit**
> continuingEducationCreateCredit($customer_number, $create_request)

Creates a new continuing education credit for the specified customer in Advantage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContinuingEducationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number
$create_request = new \Swagger\Client\Model\ContinuingEducationCreditCreateRequest(); // \Swagger\Client\Model\ContinuingEducationCreditCreateRequest | Information for creating a continuing education credit

try {
    $apiInstance->continuingEducationCreateCredit($customer_number, $create_request);
} catch (Exception $e) {
    echo 'Exception when calling ContinuingEducationApi->continuingEducationCreateCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number |
 **create_request** | [**\Swagger\Client\Model\ContinuingEducationCreditCreateRequest**](../Model/ContinuingEducationCreditCreateRequest.md)| Information for creating a continuing education credit |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **continuingEducationGet**
> \Swagger\Client\Model\SearchResultContinuingEducationProvider continuingEducationGet()

Retrieves the list of all continuing education providers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContinuingEducationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->continuingEducationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContinuingEducationApi->continuingEducationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchResultContinuingEducationProvider**](../Model/SearchResultContinuingEducationProvider.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **continuingEducationGetCredits**
> \Swagger\Client\Model\SearchResultContinuingEducationCredit continuingEducationGetCredits($customer_number)

Retrieves the list of all credits earned by the specified customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContinuingEducationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number

try {
    $result = $apiInstance->continuingEducationGetCredits($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContinuingEducationApi->continuingEducationGetCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number |

### Return type

[**\Swagger\Client\Model\SearchResultContinuingEducationCredit**](../Model/SearchResultContinuingEducationCredit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

