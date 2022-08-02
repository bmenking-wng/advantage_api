# Swagger\Client\UpsellApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**upsellGetByCart**](UpsellApi.md#upsellGetByCart) | **GET** /shopping-carts/{cartId}/upsells | Get the upsell items for a shopping cart.
[**upsellGetByCustomer**](UpsellApi.md#upsellGetByCustomer) | **GET** /customers/{customerNumber}/upsells | Get the upsell items for a given customer.
[**upsellGetByOrder**](UpsellApi.md#upsellGetByOrder) | **GET** /orders/{orderNumber}/upsells | Get the upsell items for an order.
[**upsellGetByProduct**](UpsellApi.md#upsellGetByProduct) | **GET** /products/{itemNumber}/upsells | Get the upsell items for a product.  Optionally include upsells triggered by a specific promotion code as well.
[**upsellGetByPromotion**](UpsellApi.md#upsellGetByPromotion) | **GET** /promotions/{promotionCode}/upsells | Get the upsell items for a product.  Optionally include promotions triggered by a specific promotion code as well.
[**upsellGetByPromotionChoice**](UpsellApi.md#upsellGetByPromotionChoice) | **GET** /promotions/{promotionCode}/choices/{itemNumber}/{choiceCode}/upsells | Get the upsell items for a promotion choice.


# **upsellGetByCart**
> \Swagger\Client\Model\SearchResultUpsell upsellGetByCart($cart_id, $filter_upsell_types, $filter_web_only)

Get the upsell items for a shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UpsellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The shopping cart ID to use to return the upsell items.
$filter_upsell_types = "filter_upsell_types_example"; // string | What types of upsell items should be returned?
$filter_web_only = true; // bool | Include only upsells marked as \"web visible\"?  (This is the default.)

try {
    $result = $apiInstance->upsellGetByCart($cart_id, $filter_upsell_types, $filter_web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellApi->upsellGetByCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The shopping cart ID to use to return the upsell items. |
 **filter_upsell_types** | **string**| What types of upsell items should be returned? | [optional]
 **filter_web_only** | **bool**| Include only upsells marked as \&quot;web visible\&quot;?  (This is the default.) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultUpsell**](../Model/SearchResultUpsell.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsellGetByCustomer**
> \Swagger\Client\Model\SearchResultUpsell upsellGetByCustomer($customer_number, $filter_upsell_types, $filter_web_only)

Get the upsell items for a given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UpsellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Find upsells triggered for this customer. (An Advantage customer number.)
$filter_upsell_types = "filter_upsell_types_example"; // string | What types of upsell items should be returned?
$filter_web_only = true; // bool | Include only upsells marked as \"web visible\"?  (This is the default.)

try {
    $result = $apiInstance->upsellGetByCustomer($customer_number, $filter_upsell_types, $filter_web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellApi->upsellGetByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Find upsells triggered for this customer. (An Advantage customer number.) |
 **filter_upsell_types** | **string**| What types of upsell items should be returned? | [optional]
 **filter_web_only** | **bool**| Include only upsells marked as \&quot;web visible\&quot;?  (This is the default.) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultUpsell**](../Model/SearchResultUpsell.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsellGetByOrder**
> \Swagger\Client\Model\SearchResultUpsell upsellGetByOrder($order_number, $filter_upsell_types, $filter_web_only)

Get the upsell items for an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UpsellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The order number of the order to use to return the upsell items.
$filter_upsell_types = "filter_upsell_types_example"; // string | What types of upsell items should be returned?
$filter_web_only = true; // bool | Include only upsells marked as \"web visible\"?  (This is the default.)

try {
    $result = $apiInstance->upsellGetByOrder($order_number, $filter_upsell_types, $filter_web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellApi->upsellGetByOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The order number of the order to use to return the upsell items. |
 **filter_upsell_types** | **string**| What types of upsell items should be returned? | [optional]
 **filter_web_only** | **bool**| Include only upsells marked as \&quot;web visible\&quot;?  (This is the default.) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultUpsell**](../Model/SearchResultUpsell.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsellGetByProduct**
> \Swagger\Client\Model\SearchResultUpsell upsellGetByProduct($item_number, $filter_order_number, $filter_cart_number, $filter_customer_number, $filter_promotion_code, $filter_upsell_types, $filter_web_only)

Get the upsell items for a product.  Optionally include upsells triggered by a specific promotion code as well.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UpsellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | Find upsells triggered by this item.
$filter_order_number = "filter_order_number_example"; // string | Do not upsell items already included on the given order.  (Optional)
$filter_cart_number = "filter_cart_number_example"; // string | Do not upsell items already included in the given shopping cart. (Optional.)
$filter_customer_number = "filter_customer_number_example"; // string | The customer who will see the upsell.  (Optional)
$filter_promotion_code = "filter_promotion_code_example"; // string | Also search for upsells triggered by this promotion.  (Optional)
$filter_upsell_types = "filter_upsell_types_example"; // string | What types of upsell items should be returned?
$filter_web_only = true; // bool | Include only upsells marked as \"web visible\"?  (This is the default.)

try {
    $result = $apiInstance->upsellGetByProduct($item_number, $filter_order_number, $filter_cart_number, $filter_customer_number, $filter_promotion_code, $filter_upsell_types, $filter_web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellApi->upsellGetByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| Find upsells triggered by this item. |
 **filter_order_number** | **string**| Do not upsell items already included on the given order.  (Optional) | [optional]
 **filter_cart_number** | **string**| Do not upsell items already included in the given shopping cart. (Optional.) | [optional]
 **filter_customer_number** | **string**| The customer who will see the upsell.  (Optional) | [optional]
 **filter_promotion_code** | **string**| Also search for upsells triggered by this promotion.  (Optional) | [optional]
 **filter_upsell_types** | **string**| What types of upsell items should be returned? | [optional]
 **filter_web_only** | **bool**| Include only upsells marked as \&quot;web visible\&quot;?  (This is the default.) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultUpsell**](../Model/SearchResultUpsell.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsellGetByPromotion**
> \Swagger\Client\Model\SearchResultUpsell upsellGetByPromotion($promotion_code, $filter_order_number, $filter_cart_number, $filter_customer_number, $filter_item_number, $filter_upsell_types, $filter_web_only)

Get the upsell items for a product.  Optionally include promotions triggered by a specific promotion code as well.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UpsellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | Find upsells triggered by this promotion.
$filter_order_number = "filter_order_number_example"; // string | Do not upsell items already included on the given order.  (Optional.)
$filter_cart_number = "filter_cart_number_example"; // string | Do not upsell items already included in the given shopping cart. (Optional.)
$filter_customer_number = "filter_customer_number_example"; // string | The customer who will see the upsell.  (Optional.)
$filter_item_number = "filter_item_number_example"; // string | The product use for the \"must purchase\" check on the upsells.  (Optional)
$filter_upsell_types = "filter_upsell_types_example"; // string | What types of upsell items should be returned?
$filter_web_only = true; // bool | Include only upsells marked as \"web visible\"?  (This is the default.)

try {
    $result = $apiInstance->upsellGetByPromotion($promotion_code, $filter_order_number, $filter_cart_number, $filter_customer_number, $filter_item_number, $filter_upsell_types, $filter_web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellApi->upsellGetByPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| Find upsells triggered by this promotion. |
 **filter_order_number** | **string**| Do not upsell items already included on the given order.  (Optional.) | [optional]
 **filter_cart_number** | **string**| Do not upsell items already included in the given shopping cart. (Optional.) | [optional]
 **filter_customer_number** | **string**| The customer who will see the upsell.  (Optional.) | [optional]
 **filter_item_number** | **string**| The product use for the \&quot;must purchase\&quot; check on the upsells.  (Optional) | [optional]
 **filter_upsell_types** | **string**| What types of upsell items should be returned? | [optional]
 **filter_web_only** | **bool**| Include only upsells marked as \&quot;web visible\&quot;?  (This is the default.) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultUpsell**](../Model/SearchResultUpsell.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsellGetByPromotionChoice**
> \Swagger\Client\Model\SearchResultUpsell upsellGetByPromotionChoice($promotion_code, $item_number, $choice_code, $filter_order_number, $filter_cart_number, $filter_customer_number, $filter_upsell_types, $filter_web_only)

Get the upsell items for a promotion choice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UpsellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | The triggering promotion code.
$item_number = "item_number_example"; // string | The triggering item number.
$choice_code = "choice_code_example"; // string | The triggering promotion choice.
$filter_order_number = "filter_order_number_example"; // string | Do not upsell items already included on the given order.  (Optional.  No used when listing promotions by order.)
$filter_cart_number = "filter_cart_number_example"; // string | Do not upsell items already included in the given shopping cart. (Optional.)
$filter_customer_number = "filter_customer_number_example"; // string | The customer who will see the upsell.  (Optional.  Not used when listing promotions by customer.)
$filter_upsell_types = "filter_upsell_types_example"; // string | What types of upsell items should be returned?
$filter_web_only = true; // bool | Include only upsells marked as \"web visible\"?  (This is the default.)

try {
    $result = $apiInstance->upsellGetByPromotionChoice($promotion_code, $item_number, $choice_code, $filter_order_number, $filter_cart_number, $filter_customer_number, $filter_upsell_types, $filter_web_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpsellApi->upsellGetByPromotionChoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| The triggering promotion code. |
 **item_number** | **string**| The triggering item number. |
 **choice_code** | **string**| The triggering promotion choice. |
 **filter_order_number** | **string**| Do not upsell items already included on the given order.  (Optional.  No used when listing promotions by order.) | [optional]
 **filter_cart_number** | **string**| Do not upsell items already included in the given shopping cart. (Optional.) | [optional]
 **filter_customer_number** | **string**| The customer who will see the upsell.  (Optional.  Not used when listing promotions by customer.) | [optional]
 **filter_upsell_types** | **string**| What types of upsell items should be returned? | [optional]
 **filter_web_only** | **bool**| Include only upsells marked as \&quot;web visible\&quot;?  (This is the default.) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultUpsell**](../Model/SearchResultUpsell.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

