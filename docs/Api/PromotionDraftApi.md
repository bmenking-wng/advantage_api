# Swagger\Client\PromotionDraftApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionDraftCreate**](PromotionDraftApi.md#promotionDraftCreate) | **POST** /promotion-drafts | Create a new promotion draft.
[**promotionDraftDelete**](PromotionDraftApi.md#promotionDraftDelete) | **DELETE** /promotion-drafts/{id} | Deletes a promotion draft.
[**promotionDraftGet**](PromotionDraftApi.md#promotionDraftGet) | **GET** /promotion-drafts/{id} | Get an existing promotion draft.
[**promotionDraftPublish**](PromotionDraftApi.md#promotionDraftPublish) | **POST** /promotion-drafts/{id}/publish | Creates the promotion, including offer and choices, and deletes the draft upon completion.
[**promotionDraftSearch**](PromotionDraftApi.md#promotionDraftSearch) | **GET** /promotion-drafts | Get summary information for promotions drafts.
[**promotionDraftUpdate**](PromotionDraftApi.md#promotionDraftUpdate) | **POST** /promotion-drafts/{id} | Update an existing promotion draft.


# **promotionDraftCreate**
> \Swagger\Client\Model\PromotionDraft promotionDraftCreate($promotion_draft)

Create a new promotion draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_draft = new \Swagger\Client\Model\PromotionDraftRequest(); // \Swagger\Client\Model\PromotionDraftRequest | A PromotionDraft object.

try {
    $result = $apiInstance->promotionDraftCreate($promotion_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDraftApi->promotionDraftCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_draft** | [**\Swagger\Client\Model\PromotionDraftRequest**](../Model/PromotionDraftRequest.md)| A PromotionDraft object. |

### Return type

[**\Swagger\Client\Model\PromotionDraft**](../Model/PromotionDraft.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionDraftDelete**
> promotionDraftDelete($id)

Deletes a promotion draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the promotion draft.

try {
    $apiInstance->promotionDraftDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDraftApi->promotionDraftDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the promotion draft. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionDraftGet**
> \Swagger\Client\Model\PromotionDraft promotionDraftGet($id)

Get an existing promotion draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The ID of the desired promotion draft.

try {
    $result = $apiInstance->promotionDraftGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDraftApi->promotionDraftGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the desired promotion draft. |

### Return type

[**\Swagger\Client\Model\PromotionDraft**](../Model/PromotionDraft.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionDraftPublish**
> promotionDraftPublish($id)

Creates the promotion, including offer and choices, and deletes the draft upon completion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $apiInstance->promotionDraftPublish($id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDraftApi->promotionDraftPublish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionDraftSearch**
> \Swagger\Client\Model\SearchResultPromotionDraftSummary promotionDraftSearch($search_text, $pager_skip, $pager_take)

Get summary information for promotions drafts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_text = "search_text_example"; // string | The search argument for filtering the available promotion drafts by promotion code.   Accepts '*' as a wild-card.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->promotionDraftSearch($search_text, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDraftApi->promotionDraftSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| The search argument for filtering the available promotion drafts by promotion code.   Accepts &#39;*&#39; as a wild-card. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultPromotionDraftSummary**](../Model/SearchResultPromotionDraftSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionDraftUpdate**
> \Swagger\Client\Model\PromotionDraft promotionDraftUpdate($id, $promotion_draft)

Update an existing promotion draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$promotion_draft = new \Swagger\Client\Model\PromotionDraftRequest(); // \Swagger\Client\Model\PromotionDraftRequest | A PromotionDraft object.

try {
    $result = $apiInstance->promotionDraftUpdate($id, $promotion_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDraftApi->promotionDraftUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **promotion_draft** | [**\Swagger\Client\Model\PromotionDraftRequest**](../Model/PromotionDraftRequest.md)| A PromotionDraft object. |

### Return type

[**\Swagger\Client\Model\PromotionDraft**](../Model/PromotionDraft.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

