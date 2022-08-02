# Swagger\Client\ShipViaApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipViaEstimateShipping**](ShipViaApi.md#shipViaEstimateShipping) | **POST** /ship-vias/estimate-shipping | Get the estimated freight cost for the given ship via.  Parent currency is used if no currency provided.  Other optional parameters include price and quantity.  If zone-based-shipping is used then itemNumber or warehouseId, country and postal code will be required  to determine the zone and freight amount.  Otherwise, the item, warehouse, country and postal code are not needed.  In general the more information given, the more accurate the estimate will be.
[**shipViaGet**](ShipViaApi.md#shipViaGet) | **GET** /ship-vias/{currencyCode}/{shipViaCode} | Gets ShipVia.
[**shipViaGet_0**](ShipViaApi.md#shipViaGet_0) | **GET** /ship-vias | Gets List of ShipVias.
[**shipViaGet_1**](ShipViaApi.md#shipViaGet_1) | **GET** /ship-vias/{currencyCode} | Gets List of ShipVias.


# **shipViaEstimateShipping**
> \Swagger\Client\Model\ShipViaEstimatedFreight shipViaEstimateShipping($get_estimated_freight_request)

Get the estimated freight cost for the given ship via.  Parent currency is used if no currency provided.  Other optional parameters include price and quantity.  If zone-based-shipping is used then itemNumber or warehouseId, country and postal code will be required  to determine the zone and freight amount.  Otherwise, the item, warehouse, country and postal code are not needed.  In general the more information given, the more accurate the estimate will be.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShipViaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_estimated_freight_request = new \Swagger\Client\Model\ShipViaEstimateShippingRequest(); // \Swagger\Client\Model\ShipViaEstimateShippingRequest | Get Estimated Freight Request

try {
    $result = $apiInstance->shipViaEstimateShipping($get_estimated_freight_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipViaApi->shipViaEstimateShipping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_estimated_freight_request** | [**\Swagger\Client\Model\ShipViaEstimateShippingRequest**](../Model/ShipViaEstimateShippingRequest.md)| Get Estimated Freight Request |

### Return type

[**\Swagger\Client\Model\ShipViaEstimatedFreight**](../Model/ShipViaEstimatedFreight.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipViaGet**
> \Swagger\Client\Model\ShipVia shipViaGet($currency_code, $ship_via_code)

Gets ShipVia.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShipViaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | Billing Currency Code
$ship_via_code = "ship_via_code_example"; // string | Ship Via Code

try {
    $result = $apiInstance->shipViaGet($currency_code, $ship_via_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipViaApi->shipViaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| Billing Currency Code |
 **ship_via_code** | **string**| Ship Via Code |

### Return type

[**\Swagger\Client\Model\ShipVia**](../Model/ShipVia.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipViaGet_0**
> \Swagger\Client\Model\SearchResultShipVia shipViaGet_0($web_only)

Gets List of ShipVias.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShipViaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_only = true; // bool | Optional Web Only (default is false)

try {
    $result = $apiInstance->shipViaGet_0($web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipViaApi->shipViaGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_only** | **bool**| Optional Web Only (default is false) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultShipVia**](../Model/SearchResultShipVia.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipViaGet_1**
> \Swagger\Client\Model\SearchResultShipVia shipViaGet_1($currency_code, $web_only)

Gets List of ShipVias.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShipViaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | Billing Currency Code
$web_only = true; // bool | Optional Web Only (default is false)

try {
    $result = $apiInstance->shipViaGet_1($currency_code, $web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipViaApi->shipViaGet_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| Billing Currency Code |
 **web_only** | **bool**| Optional Web Only (default is false) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultShipVia**](../Model/SearchResultShipVia.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

