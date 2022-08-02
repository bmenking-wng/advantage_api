# Swagger\Client\PromotionChoiceApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionChoiceCreateChoices**](PromotionChoiceApi.md#promotionChoiceCreateChoices) | **POST** /promotions/{promotionCode}/choices | Create a new promotion choice or many new promotion choices. All promotion choices created in this way  must be for the same promotion (i.e. same promotion code.)
[**promotionChoiceDeleteChoice**](PromotionChoiceApi.md#promotionChoiceDeleteChoice) | **DELETE** /promotions/{promotionCode}/choices/{itemNumber}/{choiceCode}/{currencyCode} | Delete a specific promotion choice.
[**promotionChoiceGetChoice**](PromotionChoiceApi.md#promotionChoiceGetChoice) | **GET** /promotions/{promotionCode}/choices/{itemNumber}/{choiceCode}/{currencyCode} | Get a specific promotion choice for a product.
[**promotionChoiceGetChoicesByProduct**](PromotionChoiceApi.md#promotionChoiceGetChoicesByProduct) | **GET** /promotions/{promotionCode}/choices/{itemNumber} | Get the information for the possible promotion choices for a product.
[**promotionChoiceGetChoicesByPromotion**](PromotionChoiceApi.md#promotionChoiceGetChoicesByPromotion) | **GET** /promotions/{promotionCode}/choices | Get all promotion choices for a given promotion that match the searchAgument. The result of the search can  be limited to N at a time.
[**promotionChoiceGetPostage**](PromotionChoiceApi.md#promotionChoiceGetPostage) | **GET** /promotions/{promotionCode}/choices/{itemNumber}/{choiceCode}/{currencyCode}/postage | Get the calculated postage amount for the delivery code on the promotion item.  This method throws an exception if the promotion choice or delivery code is not found.
[**promotionChoiceGetValidPaymentMethods**](PromotionChoiceApi.md#promotionChoiceGetValidPaymentMethods) | **GET** /promotions/{promotionCode}/choices/{itemNumber}/{choiceCode}/{currencyCode}/payment-methods | Get a list of valid payment methods for a given promotion choice.
[**promotionChoiceGetValidPromotionChoices**](PromotionChoiceApi.md#promotionChoiceGetValidPromotionChoices) | **GET** /promotions/{promotionCode}/choices/valid-values | Get a list of valid promotion choices.
[**promotionChoiceUpdateChoice**](PromotionChoiceApi.md#promotionChoiceUpdateChoice) | **POST** /promotions/{promotionCode}/choices/{itemNumber}/{choiceCode}/{currencyCode} | Update a new promotion item choice.


# **promotionChoiceCreateChoices**
> promotionChoiceCreateChoices($promotion_code, $promotion_choice_create_requests)

Create a new promotion choice or many new promotion choices. All promotion choices created in this way  must be for the same promotion (i.e. same promotion code.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The promotion code the choice(s) belongs to.
$promotion_choice_create_requests = array(new \Swagger\Client\Model\PromotionChoiceCreateRequest()); // \Swagger\Client\Model\PromotionChoiceCreateRequest[] | An array of PromotionChoiceCreateRequest objects.

try {
    $apiInstance->promotionChoiceCreateChoices($promotion_code, $promotion_choice_create_requests);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceCreateChoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The promotion code the choice(s) belongs to. |
 **promotion_choice_create_requests** | [**\Swagger\Client\Model\PromotionChoiceCreateRequest[]**](../Model/PromotionChoiceCreateRequest.md)| An array of PromotionChoiceCreateRequest objects. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceDeleteChoice**
> promotionChoiceDeleteChoice($promotion_code, $item_number, $choice_code, $currency_code)

Delete a specific promotion choice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The promotion code of the promotion the promotion-choice-item belongs to.
$item_number = "item_number_example"; // string | Item number of the promotion-choice-item.
$choice_code = "choice_code_example"; // string | The promotion choice ID of the promotion-choice-item to delete.
$currency_code = "currency_code_example"; // string | The billing currency of the promotion-choice-item to delete.

try {
    $apiInstance->promotionChoiceDeleteChoice($promotion_code, $item_number, $choice_code, $currency_code);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceDeleteChoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The promotion code of the promotion the promotion-choice-item belongs to. |
 **item_number** | **string**| Item number of the promotion-choice-item. |
 **choice_code** | **string**| The promotion choice ID of the promotion-choice-item to delete. |
 **currency_code** | **string**| The billing currency of the promotion-choice-item to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceGetChoice**
> \Swagger\Client\Model\PromotionChoice promotionChoiceGetChoice($promotion_code, $item_number, $choice_code, $currency_code, $allow_inactive_promotion)

Get a specific promotion choice for a product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The promotion code of the promotion.
$item_number = "item_number_example"; // string | The item number of the product.
$choice_code = "choice_code_example"; // string | The choice code for the promotion item choice.
$currency_code = "currency_code_example"; // string | The optional currency for the order. Not supplying this argument means promotion              choices across all currencies will be returned.
$allow_inactive_promotion = true; // bool | Allow the promotion for the choice to be inactive

try {
    $result = $apiInstance->promotionChoiceGetChoice($promotion_code, $item_number, $choice_code, $currency_code, $allow_inactive_promotion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceGetChoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The promotion code of the promotion. |
 **item_number** | **string**| The item number of the product. |
 **choice_code** | **string**| The choice code for the promotion item choice. |
 **currency_code** | **string**| The optional currency for the order. Not supplying this argument means promotion              choices across all currencies will be returned. |
 **allow_inactive_promotion** | **bool**| Allow the promotion for the choice to be inactive |

### Return type

[**\Swagger\Client\Model\PromotionChoice**](../Model/PromotionChoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceGetChoicesByProduct**
> \Swagger\Client\Model\SearchResultPromotionChoice promotionChoiceGetChoicesByProduct($promotion_code, $item_number, $currency_code)

Get the information for the possible promotion choices for a product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The promotion code of the promotion.
$item_number = "item_number_example"; // string | The item number of the product.
$currency_code = "currency_code_example"; // string | The optional currency for the order. Not supplying this argument means promotion              choices across all currencies will be returned.

try {
    $result = $apiInstance->promotionChoiceGetChoicesByProduct($promotion_code, $item_number, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceGetChoicesByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The promotion code of the promotion. |
 **item_number** | **string**| The item number of the product. |
 **currency_code** | **string**| The optional currency for the order. Not supplying this argument means promotion              choices across all currencies will be returned. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultPromotionChoice**](../Model/SearchResultPromotionChoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceGetChoicesByPromotion**
> \Swagger\Client\Model\SearchResultWithCountPromotionChoice promotionChoiceGetChoicesByPromotion($promotion_code, $filter_search, $filter_currency_code, $pager_skip, $pager_take)

Get all promotion choices for a given promotion that match the searchAgument. The result of the search can  be limited to N at a time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The Advantage promotion code that holds all the choices
$filter_search = "filter_search_example"; // string | The generic search argument. (Typically from a search text box). This term will be compared to several   fields on promotion choice
$filter_currency_code = "filter_currency_code_example"; // string | The currency to limit results by
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->promotionChoiceGetChoicesByPromotion($promotion_code, $filter_search, $filter_currency_code, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceGetChoicesByPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The Advantage promotion code that holds all the choices |
 **filter_search** | **string**| The generic search argument. (Typically from a search text box). This term will be compared to several   fields on promotion choice | [optional]
 **filter_currency_code** | **string**| The currency to limit results by | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountPromotionChoice**](../Model/SearchResultWithCountPromotionChoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceGetPostage**
> \Swagger\Client\Model\PromotionChoicePostage promotionChoiceGetPostage($promotion_code, $item_number, $choice_code, $currency_code, $country, $term, $effective_date)

Get the calculated postage amount for the delivery code on the promotion item.  This method throws an exception if the promotion choice or delivery code is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | Uniquely identifies a promotion. (Advantage field: PMO-CDE)
$item_number = "item_number_example"; // string | Code uniquely identifying a publication (Advantage field: PUB-CDE)
$choice_code = "choice_code_example"; // string | Code identifying a set of defaults under a promotion and item. (Advantage field: PMO-CHC)
$currency_code = "currency_code_example"; // string | Billing currency of the promotion item. (Advantage field: BIL-CUR)
$country = "country_example"; // string | Code uniquely identifying a country (Advantage field: CUN-CDE)             This method requires a valid country code, but the parameter has been made optional so that it's possible             to pass in an empty string in cases where that happens to be a valid code.
$term = 56; // int | The subscription length (number of issues); zero for one year
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Effective date of the postage calculation; default is next issue date

try {
    $result = $apiInstance->promotionChoiceGetPostage($promotion_code, $item_number, $choice_code, $currency_code, $country, $term, $effective_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceGetPostage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| Uniquely identifies a promotion. (Advantage field: PMO-CDE) |
 **item_number** | **string**| Code uniquely identifying a publication (Advantage field: PUB-CDE) |
 **choice_code** | **string**| Code identifying a set of defaults under a promotion and item. (Advantage field: PMO-CHC) |
 **currency_code** | **string**| Billing currency of the promotion item. (Advantage field: BIL-CUR) |
 **country** | **string**| Code uniquely identifying a country (Advantage field: CUN-CDE)             This method requires a valid country code, but the parameter has been made optional so that it&#39;s possible             to pass in an empty string in cases where that happens to be a valid code. | [optional]
 **term** | **int**| The subscription length (number of issues); zero for one year | [optional]
 **effective_date** | **\DateTime**| Effective date of the postage calculation; default is next issue date | [optional]

### Return type

[**\Swagger\Client\Model\PromotionChoicePostage**](../Model/PromotionChoicePostage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceGetValidPaymentMethods**
> \Swagger\Client\Model\PaymentMethod[] promotionChoiceGetValidPaymentMethods($promotion_code, $item_number, $choice_code, $currency_code)

Get a list of valid payment methods for a given promotion choice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The promotion code of the promotion.
$item_number = "item_number_example"; // string | The item number of the product.
$choice_code = "choice_code_example"; // string | The choice code for the promotion item choice.
$currency_code = "currency_code_example"; // string | The currency for the order.

try {
    $result = $apiInstance->promotionChoiceGetValidPaymentMethods($promotion_code, $item_number, $choice_code, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceGetValidPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The promotion code of the promotion. |
 **item_number** | **string**| The item number of the product. |
 **choice_code** | **string**| The choice code for the promotion item choice. |
 **currency_code** | **string**| The currency for the order. |

### Return type

[**\Swagger\Client\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceGetValidPromotionChoices**
> \Swagger\Client\Model\SearchResultFieldValidValue promotionChoiceGetValidPromotionChoices($promotion_code, $item_number, $customer_number, $currency)

Get a list of valid promotion choices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | Promotion code to look up offer and currency
$item_number = "item_number_example"; // string | Item number
$customer_number = "customer_number_example"; // string | Customer number to look up currency
$currency = "currency_example"; // string | billing currency

try {
    $result = $apiInstance->promotionChoiceGetValidPromotionChoices($promotion_code, $item_number, $customer_number, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceGetValidPromotionChoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| Promotion code to look up offer and currency |
 **item_number** | **string**| Item number |
 **customer_number** | **string**| Customer number to look up currency |
 **currency** | **string**| billing currency | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultFieldValidValue**](../Model/SearchResultFieldValidValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionChoiceUpdateChoice**
> promotionChoiceUpdateChoice($promotion_code, $item_number, $choice_code, $currency_code, $promotion_choice_update_request)

Update a new promotion item choice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionChoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The promotion code the choice belongs to.
$item_number = "item_number_example"; // string | The item number of the product for the promotion item choice.
$choice_code = "choice_code_example"; // string | The choice code for the promotion item choice.
$currency_code = "currency_code_example"; // string | The currency that applies for the promotion item choice.
$promotion_choice_update_request = new \Swagger\Client\Model\PromotionChoiceIn(); // \Swagger\Client\Model\PromotionChoiceIn | A PromotionChoiceUpdateRequest object.

try {
    $apiInstance->promotionChoiceUpdateChoice($promotion_code, $item_number, $choice_code, $currency_code, $promotion_choice_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionChoiceApi->promotionChoiceUpdateChoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The promotion code the choice belongs to. |
 **item_number** | **string**| The item number of the product for the promotion item choice. |
 **choice_code** | **string**| The choice code for the promotion item choice. |
 **currency_code** | **string**| The currency that applies for the promotion item choice. |
 **promotion_choice_update_request** | [**\Swagger\Client\Model\PromotionChoiceIn**](../Model/PromotionChoiceIn.md)| A PromotionChoiceUpdateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

