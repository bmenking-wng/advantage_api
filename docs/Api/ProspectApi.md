# Swagger\Client\ProspectApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**prospectConvertToCustomer**](ProspectApi.md#prospectConvertToCustomer) | **POST** /prospects/{customerNumber}/convert-to-customer | Converts current prospect to customer
[**prospectGet**](ProspectApi.md#prospectGet) | **GET** /prospects/{customerNumber}/addresses/{addressCode} | Gets a Prospect&#39;s Address.
[**prospectGet_0**](ProspectApi.md#prospectGet_0) | **GET** /prospects/{customerNumber}/addresses/prospect-default | Gets a Prospect&#39;s Default Address.
[**prospectValidatePostalCode**](ProspectApi.md#prospectValidatePostalCode) | **POST** /prospects/{customerNumber}/postal-code/validate | Makes sure that the prospect record matches user supplied info.  A 404 Not Found status is returned if validation fails.


# **prospectConvertToCustomer**
> \Swagger\Client\Model\Customer prospectConvertToCustomer($customer_number)

Converts current prospect to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProspectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer Number

try {
    $result = $apiInstance->prospectConvertToCustomer($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectApi->prospectConvertToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer Number |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prospectGet**
> \Swagger\Client\Model\CustomerAddress prospectGet($customer_number, $address_code)

Gets a Prospect's Address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProspectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer Number
$address_code = "address_code_example"; // string | Address Code

try {
    $result = $apiInstance->prospectGet($customer_number, $address_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectApi->prospectGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer Number |
 **address_code** | **string**| Address Code |

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prospectGet_0**
> \Swagger\Client\Model\CustomerAddress prospectGet_0($customer_number)

Gets a Prospect's Default Address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProspectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer Number

try {
    $result = $apiInstance->prospectGet_0($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectApi->prospectGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer Number |

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prospectValidatePostalCode**
> prospectValidatePostalCode($customer_number, $request)

Makes sure that the prospect record matches user supplied info.  A 404 Not Found status is returned if validation fails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProspectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer Number
$request = new \Swagger\Client\Model\ValidateAccountPostalCodeRequest(); // \Swagger\Client\Model\ValidateAccountPostalCodeRequest | ValidatePostalCode Request

try {
    $apiInstance->prospectValidatePostalCode($customer_number, $request);
} catch (Exception $e) {
    echo 'Exception when calling ProspectApi->prospectValidatePostalCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer Number |
 **request** | [**\Swagger\Client\Model\ValidateAccountPostalCodeRequest**](../Model/ValidateAccountPostalCodeRequest.md)| ValidatePostalCode Request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

