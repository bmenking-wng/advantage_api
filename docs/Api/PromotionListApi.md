# Swagger\Client\PromotionListApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionListCreate**](PromotionListApi.md#promotionListCreate) | **POST** /promotion-lists | Creates a new promotion mailing list definition in Advantage
[**promotionListGet**](PromotionListApi.md#promotionListGet) | **GET** /promotion-lists/{promotionListCode} | Get information about the specified promotion mailing list.
[**promotionListUpdate**](PromotionListApi.md#promotionListUpdate) | **POST** /promotion-lists/{promotionListCode} | Update an existing promotion.


# **promotionListCreate**
> promotionListCreate($create_request)

Creates a new promotion mailing list definition in Advantage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_request = new \Swagger\Client\Model\PromotionList(); // \Swagger\Client\Model\PromotionList | A PromotionListCreateRequest object

try {
    $apiInstance->promotionListCreate($create_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionListApi->promotionListCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\PromotionList**](../Model/PromotionList.md)| A PromotionListCreateRequest object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionListGet**
> \Swagger\Client\Model\PromotionList promotionListGet($promotion_list_code)

Get information about the specified promotion mailing list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_list_code = "promotion_list_code_example"; // string | The promotion mailing list code.

try {
    $result = $apiInstance->promotionListGet($promotion_list_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionListApi->promotionListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_list_code** | **string**| The promotion mailing list code. |

### Return type

[**\Swagger\Client\Model\PromotionList**](../Model/PromotionList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionListUpdate**
> promotionListUpdate($promotion_list_code, $promotion_list_update_request)

Update an existing promotion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_list_code = "promotion_list_code_example"; // string | The promotion mailing list code.
$promotion_list_update_request = new \Swagger\Client\Model\PromotionListUpdateRequest(); // \Swagger\Client\Model\PromotionListUpdateRequest | A PromotionListUpdateRequest object.

try {
    $apiInstance->promotionListUpdate($promotion_list_code, $promotion_list_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionListApi->promotionListUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_list_code** | **string**| The promotion mailing list code. |
 **promotion_list_update_request** | [**\Swagger\Client\Model\PromotionListUpdateRequest**](../Model/PromotionListUpdateRequest.md)| A PromotionListUpdateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

