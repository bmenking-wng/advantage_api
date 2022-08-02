# Swagger\Client\PromotionOfferApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionOfferCreate**](PromotionOfferApi.md#promotionOfferCreate) | **POST** /promotion-offers | Create a new promotion offer.
[**promotionOfferGet**](PromotionOfferApi.md#promotionOfferGet) | **GET** /promotion-offers/{offerCode} | Get an existing promotion offer.
[**promotionOfferGetChoices**](PromotionOfferApi.md#promotionOfferGetChoices) | **GET** /promotion-offers/{offerCode}/choices | Get the promotion choices for a promotion offer.
[**promotionOfferGetValidCountryCodes**](PromotionOfferApi.md#promotionOfferGetValidCountryCodes) | **GET** /promotion-offers/{offerCode}/country-codes | Get a list of valid country codes for a given promotion offer.
[**promotionOfferGetValidPaymentMethods**](PromotionOfferApi.md#promotionOfferGetValidPaymentMethods) | **GET** /promotion-offers/{offerCode}/payment-methods | Get a list of valid payment methods for a given promotion offer.
[**promotionOfferSearch**](PromotionOfferApi.md#promotionOfferSearch) | **GET** /promotion-offers | Get all available promotion offers
[**promotionOfferUpdate**](PromotionOfferApi.md#promotionOfferUpdate) | **POST** /promotion-offers/{offerCode} | Update an existing promotion offer.


# **promotionOfferCreate**
> promotionOfferCreate($promotion_offer_create_request)

Create a new promotion offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_offer_create_request = new \Swagger\Client\Model\PromotionOfferCreateRequest(); // \Swagger\Client\Model\PromotionOfferCreateRequest | A PromotionOfferCreateRequest object.

try {
    $apiInstance->promotionOfferCreate($promotion_offer_create_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionOfferApi->promotionOfferCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_offer_create_request** | [**\Swagger\Client\Model\PromotionOfferCreateRequest**](../Model/PromotionOfferCreateRequest.md)| A PromotionOfferCreateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionOfferGet**
> \Swagger\Client\Model\PromotionOffer promotionOfferGet($offer_code)

Get an existing promotion offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_code = "offer_code_example"; // string | The offer code of the promotion offer to update.

try {
    $result = $apiInstance->promotionOfferGet($offer_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionOfferApi->promotionOfferGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_code** | **string**| The offer code of the promotion offer to update. |

### Return type

[**\Swagger\Client\Model\PromotionOffer**](../Model/PromotionOffer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionOfferGetChoices**
> \Swagger\Client\Model\PromotionChoice[] promotionOfferGetChoices($offer_code)

Get the promotion choices for a promotion offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_code = "offer_code_example"; // string | The offer code

try {
    $result = $apiInstance->promotionOfferGetChoices($offer_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionOfferApi->promotionOfferGetChoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_code** | **string**| The offer code |

### Return type

[**\Swagger\Client\Model\PromotionChoice[]**](../Model/PromotionChoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionOfferGetValidCountryCodes**
> string[] promotionOfferGetValidCountryCodes($offer_code)

Get a list of valid country codes for a given promotion offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_code = "offer_code_example"; // string | The offer code of the promotion offer.

try {
    $result = $apiInstance->promotionOfferGetValidCountryCodes($offer_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionOfferApi->promotionOfferGetValidCountryCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_code** | **string**| The offer code of the promotion offer. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionOfferGetValidPaymentMethods**
> \Swagger\Client\Model\PaymentMethod[] promotionOfferGetValidPaymentMethods($offer_code)

Get a list of valid payment methods for a given promotion offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_code = "offer_code_example"; // string | The offer code of the promotion offer.

try {
    $result = $apiInstance->promotionOfferGetValidPaymentMethods($offer_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionOfferApi->promotionOfferGetValidPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_code** | **string**| The offer code of the promotion offer. |

### Return type

[**\Swagger\Client\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionOfferSearch**
> \Swagger\Client\Model\SearchResultWithCountPromotionOffer promotionOfferSearch($search_text, $pager_skip, $pager_take)

Get all available promotion offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_text = "search_text_example"; // string | The optional search argument, accepting \"*\" as a wild-card.              If a search argument isn't provided, all campaigns will be returned
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->promotionOfferSearch($search_text, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionOfferApi->promotionOfferSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| The optional search argument, accepting \&quot;*\&quot; as a wild-card.              If a search argument isn&#39;t provided, all campaigns will be returned | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountPromotionOffer**](../Model/SearchResultWithCountPromotionOffer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionOfferUpdate**
> promotionOfferUpdate($offer_code, $promotion_offer_update_request)

Update an existing promotion offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_code = "offer_code_example"; // string | The offer code of the promotion offer to update.
$promotion_offer_update_request = new \Swagger\Client\Model\PromotionOfferUpdateRequest(); // \Swagger\Client\Model\PromotionOfferUpdateRequest | A PromotionOfferUpdateRequest object.

try {
    $apiInstance->promotionOfferUpdate($offer_code, $promotion_offer_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionOfferApi->promotionOfferUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_code** | **string**| The offer code of the promotion offer to update. |
 **promotion_offer_update_request** | [**\Swagger\Client\Model\PromotionOfferUpdateRequest**](../Model/PromotionOfferUpdateRequest.md)| A PromotionOfferUpdateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

