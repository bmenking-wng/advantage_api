# Swagger\Client\ProductReviewApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productReviewCreate**](ProductReviewApi.md#productReviewCreate) | **POST** /product-reviews/{itemNumber}/{customerNumber}/create | 
[**productReviewGet**](ProductReviewApi.md#productReviewGet) | **GET** /product-reviews/{itemNumber}/{customerNumber} | 
[**productReviewGet_0**](ProductReviewApi.md#productReviewGet_0) | **GET** /product-reviews/{itemNumber} | 
[**productReviewRemove**](ProductReviewApi.md#productReviewRemove) | **DELETE** /product-reviews/{itemNumber}/{customerNumber} | 
[**productReviewUpdate**](ProductReviewApi.md#productReviewUpdate) | **POST** /product-reviews/{itemNumber}/{customerNumber} | 


# **productReviewCreate**
> productReviewCreate($item_number, $customer_number, $review_info)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$customer_number = "customer_number_example"; // string | 
$review_info = new \Swagger\Client\Model\ProductReviewCreateRequest(); // \Swagger\Client\Model\ProductReviewCreateRequest | 

try {
    $apiInstance->productReviewCreate($item_number, $customer_number, $review_info);
} catch (Exception $e) {
    echo 'Exception when calling ProductReviewApi->productReviewCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **customer_number** | **string**|  |
 **review_info** | [**\Swagger\Client\Model\ProductReviewCreateRequest**](../Model/ProductReviewCreateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productReviewGet**
> \Swagger\Client\Model\ProductReview productReviewGet($item_number, $customer_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$customer_number = "customer_number_example"; // string | 

try {
    $result = $apiInstance->productReviewGet($item_number, $customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReviewApi->productReviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **customer_number** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProductReview**](../Model/ProductReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productReviewGet_0**
> \Swagger\Client\Model\ProductReview[] productReviewGet_0($item_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 

try {
    $result = $apiInstance->productReviewGet_0($item_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReviewApi->productReviewGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProductReview[]**](../Model/ProductReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productReviewRemove**
> productReviewRemove($item_number, $customer_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$customer_number = "customer_number_example"; // string | 

try {
    $apiInstance->productReviewRemove($item_number, $customer_number);
} catch (Exception $e) {
    echo 'Exception when calling ProductReviewApi->productReviewRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **customer_number** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productReviewUpdate**
> productReviewUpdate($item_number, $customer_number, $review_info)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$customer_number = "customer_number_example"; // string | 
$review_info = new \Swagger\Client\Model\ProductReviewUpdateRequest(); // \Swagger\Client\Model\ProductReviewUpdateRequest | 

try {
    $apiInstance->productReviewUpdate($item_number, $customer_number, $review_info);
} catch (Exception $e) {
    echo 'Exception when calling ProductReviewApi->productReviewUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **customer_number** | **string**|  |
 **review_info** | [**\Swagger\Client\Model\ProductReviewUpdateRequest**](../Model/ProductReviewUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

