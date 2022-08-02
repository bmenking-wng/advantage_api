# Swagger\Client\CouponApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**couponGetUses**](CouponApi.md#couponGetUses) | **GET** /customers/{customerNumber}/coupon-uses/{couponCode} | Get all customer uses of a particular coupon


# **couponGetUses**
> \Swagger\Client\Model\SearchResultCouponUse couponGetUses($customer_number, $coupon_code)

Get all customer uses of a particular coupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer number
$coupon_code = "coupon_code_example"; // string | Code identifying the coupon

try {
    $result = $apiInstance->couponGetUses($customer_number, $coupon_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->couponGetUses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer number |
 **coupon_code** | **string**| Code identifying the coupon |

### Return type

[**\Swagger\Client\Model\SearchResultCouponUse**](../Model/SearchResultCouponUse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

