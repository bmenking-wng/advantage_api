# Swagger\Client\QuoteApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCreate**](QuoteApi.md#quoteCreate) | **POST** /quotes | Create a new quote. This method takes the incoming order create request object and uses it to create a new   Advantage quote. The new Advantage quote has a new order line created for each OrderLineIn object   contained in the order create request object.  Order type is overridden to O (pro-forma), regardless of what is specified on the order request.
[**quoteGet**](QuoteApi.md#quoteGet) | **GET** /quotes/{orderNumber} | Get a quotes&#39;s information given the order number.


# **quoteCreate**
> \Swagger\Client\Model\Order quoteCreate($order_create_request)

Create a new quote. This method takes the incoming order create request object and uses it to create a new   Advantage quote. The new Advantage quote has a new order line created for each OrderLineIn object   contained in the order create request object.  Order type is overridden to O (pro-forma), regardless of what is specified on the order request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_create_request = new \Swagger\Client\Model\OrderCreateRequest(); // \Swagger\Client\Model\OrderCreateRequest | An OrderCreateRequest object.

try {
    $result = $apiInstance->quoteCreate($order_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->quoteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_create_request** | [**\Swagger\Client\Model\OrderCreateRequest**](../Model/OrderCreateRequest.md)| An OrderCreateRequest object. |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGet**
> \Swagger\Client\Model\Order quoteGet($order_number)

Get a quotes's information given the order number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | An Advantage order number.

try {
    $result = $apiInstance->quoteGet($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->quoteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| An Advantage order number. |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

