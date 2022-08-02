# Swagger\Client\GiftCertificateApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftCertificateGet**](GiftCertificateApi.md#giftCertificateGet) | **GET** /customers/{customerNumber}/gift-certificates | 


# **giftCertificateGet**
> \Swagger\Client\Model\GiftCertificate[] giftCertificateGet($customer_number, $web_enabled_only)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GiftCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | 
$web_enabled_only = true; // bool | 

try {
    $result = $apiInstance->giftCertificateGet($customer_number, $web_enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->giftCertificateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**|  |
 **web_enabled_only** | **bool**|  |

### Return type

[**\Swagger\Client\Model\GiftCertificate[]**](../Model/GiftCertificate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

