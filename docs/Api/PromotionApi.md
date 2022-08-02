# Swagger\Client\PromotionApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionCreate**](PromotionApi.md#promotionCreate) | **POST** /promotions | Create a new promotion.
[**promotionGet**](PromotionApi.md#promotionGet) | **GET** /promotions/{promotionCode} | Get an existing promotion.
[**promotionGetPromotionSource**](PromotionApi.md#promotionGetPromotionSource) | **GET** /promotion-sources/{promotionSource} | Get a promotion source.  The promotion source is identified by the first character of the promotion code.  Clients are recommended to create promotion codes using this first character in a way that is meaningful  (examples: A&#x3D;Agency, D&#x3D;Direct Mail, R&#x3D;Renewal).  Many CIR reports provide analysis by this first position of the promotion code.
[**promotionSearch**](PromotionApi.md#promotionSearch) | **GET** /promotions | Get summary information for promotions matching a search argument.
[**promotionUpdate**](PromotionApi.md#promotionUpdate) | **POST** /promotions/{promotionCode} | Update an existing promotion.


# **promotionCreate**
> promotionCreate($promotion_create_request)

Create a new promotion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_create_request = new \Swagger\Client\Model\PromotionCreateRequest(); // \Swagger\Client\Model\PromotionCreateRequest | A PromotionCreateRequest object.

try {
    $apiInstance->promotionCreate($promotion_create_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_create_request** | [**\Swagger\Client\Model\PromotionCreateRequest**](../Model/PromotionCreateRequest.md)| A PromotionCreateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionGet**
> \Swagger\Client\Model\Promotion promotionGet($promotion_code, $currency_code, $billing_organization, $is_promotion_only, $web_enabled_credit_cards_only)

Get an existing promotion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The promotion code of the desired promotion.
$currency_code = "currency_code_example"; // string | The optional currency for the promotion, the default is used if none provided.  This is used to determine which promotion items are returned and the available credit card and direct debit types.
$billing_organization = "billing_organization_example"; // string | The billing organization, used to determine the valid direct debit types for the promotion.  If none is provided, no direct debit types will be populated.
$is_promotion_only = true; // bool | True to return only promotion level information.
$web_enabled_credit_cards_only = true; // bool | If true, ValidCards will only list web-enabled credit cards

try {
    $result = $apiInstance->promotionGet($promotion_code, $currency_code, $billing_organization, $is_promotion_only, $web_enabled_credit_cards_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The promotion code of the desired promotion. |
 **currency_code** | **string**| The optional currency for the promotion, the default is used if none provided.  This is used to determine which promotion items are returned and the available credit card and direct debit types. | [optional]
 **billing_organization** | **string**| The billing organization, used to determine the valid direct debit types for the promotion.  If none is provided, no direct debit types will be populated. | [optional]
 **is_promotion_only** | **bool**| True to return only promotion level information. | [optional]
 **web_enabled_credit_cards_only** | **bool**| If true, ValidCards will only list web-enabled credit cards | [optional]

### Return type

[**\Swagger\Client\Model\Promotion**](../Model/Promotion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionGetPromotionSource**
> \Swagger\Client\Model\PromotionSource promotionGetPromotionSource($promotion_source)

Get a promotion source.  The promotion source is identified by the first character of the promotion code.  Clients are recommended to create promotion codes using this first character in a way that is meaningful  (examples: A=Agency, D=Direct Mail, R=Renewal).  Many CIR reports provide analysis by this first position of the promotion code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_source = "promotion_source_example"; // string | The promotion source.

try {
    $result = $apiInstance->promotionGetPromotionSource($promotion_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionGetPromotionSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_source** | **string**| The promotion source. |

### Return type

[**\Swagger\Client\Model\PromotionSource**](../Model/PromotionSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionSearch**
> \Swagger\Client\Model\SearchResultWithCountPromotionSummary promotionSearch($search_text, $include_active_only, $valid_as_of, $pager_skip, $pager_take, $promotion_code, $item_number, $promotion_code_not_equal, $promotion_code_less, $promotion_code_less_or_equal, $promotion_code_greater, $promotion_code_greater_or_equal, $promotion_code_is_null, $promotion_code_is_not_null, $promotion_code_like, $promotion_code_not_like, $promotion_code_contains, $promotion_code_not_contains, $promotion_code_starts_with, $promotion_code_not_starts_with, $promotion_code_ends_with, $promotion_code_not_ends_with, $promotion_code_in, $promotion_code_between, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between)

Get summary information for promotions matching a search argument.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_text = "search_text_example"; // string | The search argument for filtering the available promotions. Accepts '*' as a wild-card.
$include_active_only = true; // bool | If true, search results will only include active promotions
$valid_as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If set, returns only promotions valid as of the specified date
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$promotion_code = "promotion_code_example"; // string | Filter on PMO-CDE using 'Equal' operator
$item_number = "item_number_example"; // string | Filter on ITM-NUM using 'Equal' operator
$promotion_code_not_equal = "promotion_code_not_equal_example"; // string | Filter on PMO-CDE using 'NotEqual' operator
$promotion_code_less = "promotion_code_less_example"; // string | Filter on PMO-CDE using 'Less' operator
$promotion_code_less_or_equal = "promotion_code_less_or_equal_example"; // string | Filter on PMO-CDE using 'LessOrEqual' operator
$promotion_code_greater = "promotion_code_greater_example"; // string | Filter on PMO-CDE using 'Greater' operator
$promotion_code_greater_or_equal = "promotion_code_greater_or_equal_example"; // string | Filter on PMO-CDE using 'GreaterOrEqual' operator
$promotion_code_is_null = "promotion_code_is_null_example"; // string | Filter on PMO-CDE using 'IsNull' operator
$promotion_code_is_not_null = "promotion_code_is_not_null_example"; // string | Filter on PMO-CDE using 'IsNotNull' operator
$promotion_code_like = "promotion_code_like_example"; // string | Filter on PMO-CDE using 'Like' operator
$promotion_code_not_like = "promotion_code_not_like_example"; // string | Filter on PMO-CDE using 'NotLike' operator
$promotion_code_contains = "promotion_code_contains_example"; // string | Filter on PMO-CDE using 'Contains' operator
$promotion_code_not_contains = "promotion_code_not_contains_example"; // string | Filter on PMO-CDE using 'NotContains' operator
$promotion_code_starts_with = "promotion_code_starts_with_example"; // string | Filter on PMO-CDE using 'StartsWith' operator
$promotion_code_not_starts_with = "promotion_code_not_starts_with_example"; // string | Filter on PMO-CDE using 'NotStartsWith' operator
$promotion_code_ends_with = "promotion_code_ends_with_example"; // string | Filter on PMO-CDE using 'EndsWith' operator
$promotion_code_not_ends_with = "promotion_code_not_ends_with_example"; // string | Filter on PMO-CDE using 'NotEndsWith' operator
$promotion_code_in = "promotion_code_in_example"; // string | Filter on PMO-CDE using 'In' operator
$promotion_code_between = "promotion_code_between_example"; // string | Filter on PMO-CDE using 'Between' operator
$item_number_not_equal = "item_number_not_equal_example"; // string | Filter on ITM-NUM using 'NotEqual' operator
$item_number_less = "item_number_less_example"; // string | Filter on ITM-NUM using 'Less' operator
$item_number_less_or_equal = "item_number_less_or_equal_example"; // string | Filter on ITM-NUM using 'LessOrEqual' operator
$item_number_greater = "item_number_greater_example"; // string | Filter on ITM-NUM using 'Greater' operator
$item_number_greater_or_equal = "item_number_greater_or_equal_example"; // string | Filter on ITM-NUM using 'GreaterOrEqual' operator
$item_number_is_null = "item_number_is_null_example"; // string | Filter on ITM-NUM using 'IsNull' operator
$item_number_is_not_null = "item_number_is_not_null_example"; // string | Filter on ITM-NUM using 'IsNotNull' operator
$item_number_like = "item_number_like_example"; // string | Filter on ITM-NUM using 'Like' operator
$item_number_not_like = "item_number_not_like_example"; // string | Filter on ITM-NUM using 'NotLike' operator
$item_number_contains = "item_number_contains_example"; // string | Filter on ITM-NUM using 'Contains' operator
$item_number_not_contains = "item_number_not_contains_example"; // string | Filter on ITM-NUM using 'NotContains' operator
$item_number_starts_with = "item_number_starts_with_example"; // string | Filter on ITM-NUM using 'StartsWith' operator
$item_number_not_starts_with = "item_number_not_starts_with_example"; // string | Filter on ITM-NUM using 'NotStartsWith' operator
$item_number_ends_with = "item_number_ends_with_example"; // string | Filter on ITM-NUM using 'EndsWith' operator
$item_number_not_ends_with = "item_number_not_ends_with_example"; // string | Filter on ITM-NUM using 'NotEndsWith' operator
$item_number_in = "item_number_in_example"; // string | Filter on ITM-NUM using 'In' operator
$item_number_between = "item_number_between_example"; // string | Filter on ITM-NUM using 'Between' operator

try {
    $result = $apiInstance->promotionSearch($search_text, $include_active_only, $valid_as_of, $pager_skip, $pager_take, $promotion_code, $item_number, $promotion_code_not_equal, $promotion_code_less, $promotion_code_less_or_equal, $promotion_code_greater, $promotion_code_greater_or_equal, $promotion_code_is_null, $promotion_code_is_not_null, $promotion_code_like, $promotion_code_not_like, $promotion_code_contains, $promotion_code_not_contains, $promotion_code_starts_with, $promotion_code_not_starts_with, $promotion_code_ends_with, $promotion_code_not_ends_with, $promotion_code_in, $promotion_code_between, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| The search argument for filtering the available promotions. Accepts &#39;*&#39; as a wild-card. | [optional]
 **include_active_only** | **bool**| If true, search results will only include active promotions | [optional]
 **valid_as_of** | **\DateTime**| If set, returns only promotions valid as of the specified date | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **promotion_code** | **string**| Filter on PMO-CDE using &#39;Equal&#39; operator | [optional]
 **item_number** | **string**| Filter on ITM-NUM using &#39;Equal&#39; operator | [optional]
 **promotion_code_not_equal** | **string**| Filter on PMO-CDE using &#39;NotEqual&#39; operator | [optional]
 **promotion_code_less** | **string**| Filter on PMO-CDE using &#39;Less&#39; operator | [optional]
 **promotion_code_less_or_equal** | **string**| Filter on PMO-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **promotion_code_greater** | **string**| Filter on PMO-CDE using &#39;Greater&#39; operator | [optional]
 **promotion_code_greater_or_equal** | **string**| Filter on PMO-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **promotion_code_is_null** | **string**| Filter on PMO-CDE using &#39;IsNull&#39; operator | [optional]
 **promotion_code_is_not_null** | **string**| Filter on PMO-CDE using &#39;IsNotNull&#39; operator | [optional]
 **promotion_code_like** | **string**| Filter on PMO-CDE using &#39;Like&#39; operator | [optional]
 **promotion_code_not_like** | **string**| Filter on PMO-CDE using &#39;NotLike&#39; operator | [optional]
 **promotion_code_contains** | **string**| Filter on PMO-CDE using &#39;Contains&#39; operator | [optional]
 **promotion_code_not_contains** | **string**| Filter on PMO-CDE using &#39;NotContains&#39; operator | [optional]
 **promotion_code_starts_with** | **string**| Filter on PMO-CDE using &#39;StartsWith&#39; operator | [optional]
 **promotion_code_not_starts_with** | **string**| Filter on PMO-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **promotion_code_ends_with** | **string**| Filter on PMO-CDE using &#39;EndsWith&#39; operator | [optional]
 **promotion_code_not_ends_with** | **string**| Filter on PMO-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **promotion_code_in** | **string**| Filter on PMO-CDE using &#39;In&#39; operator | [optional]
 **promotion_code_between** | **string**| Filter on PMO-CDE using &#39;Between&#39; operator | [optional]
 **item_number_not_equal** | **string**| Filter on ITM-NUM using &#39;NotEqual&#39; operator | [optional]
 **item_number_less** | **string**| Filter on ITM-NUM using &#39;Less&#39; operator | [optional]
 **item_number_less_or_equal** | **string**| Filter on ITM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **item_number_greater** | **string**| Filter on ITM-NUM using &#39;Greater&#39; operator | [optional]
 **item_number_greater_or_equal** | **string**| Filter on ITM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **item_number_is_null** | **string**| Filter on ITM-NUM using &#39;IsNull&#39; operator | [optional]
 **item_number_is_not_null** | **string**| Filter on ITM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **item_number_like** | **string**| Filter on ITM-NUM using &#39;Like&#39; operator | [optional]
 **item_number_not_like** | **string**| Filter on ITM-NUM using &#39;NotLike&#39; operator | [optional]
 **item_number_contains** | **string**| Filter on ITM-NUM using &#39;Contains&#39; operator | [optional]
 **item_number_not_contains** | **string**| Filter on ITM-NUM using &#39;NotContains&#39; operator | [optional]
 **item_number_starts_with** | **string**| Filter on ITM-NUM using &#39;StartsWith&#39; operator | [optional]
 **item_number_not_starts_with** | **string**| Filter on ITM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **item_number_ends_with** | **string**| Filter on ITM-NUM using &#39;EndsWith&#39; operator | [optional]
 **item_number_not_ends_with** | **string**| Filter on ITM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **item_number_in** | **string**| Filter on ITM-NUM using &#39;In&#39; operator | [optional]
 **item_number_between** | **string**| Filter on ITM-NUM using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountPromotionSummary**](../Model/SearchResultWithCountPromotionSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionUpdate**
> promotionUpdate($promotion_code, $promotion_update_request)

Update an existing promotion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | 
$promotion_update_request = new \Swagger\Client\Model\PromotionUpdateRequest(); // \Swagger\Client\Model\PromotionUpdateRequest | A PromotionUpdateRequest object.

try {
    $apiInstance->promotionUpdate($promotion_code, $promotion_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**|  |
 **promotion_update_request** | [**\Swagger\Client\Model\PromotionUpdateRequest**](../Model/PromotionUpdateRequest.md)| A PromotionUpdateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

