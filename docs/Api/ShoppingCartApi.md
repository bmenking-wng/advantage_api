# Swagger\Client\ShoppingCartApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shoppingCartConvertToOrder**](ShoppingCartApi.md#shoppingCartConvertToOrder) | **POST** /shopping-carts/{cartId}/convert-to-order | Convert an existing shopping cart to an Advantage Order. Usually called when preparing   to render a Checkout/Confirmation page for users.
[**shoppingCartCreate**](ShoppingCartApi.md#shoppingCartCreate) | **POST** /shopping-carts | Create a new shopping cart.
[**shoppingCartDelete**](ShoppingCartApi.md#shoppingCartDelete) | **DELETE** /shopping-carts/{cartId} | Delete an existing shopping cart with the given ID.
[**shoppingCartGet**](ShoppingCartApi.md#shoppingCartGet) | **GET** /shopping-carts/{cartId} | Get the shopping cart with the given ID.
[**shoppingCartGetByCustomer**](ShoppingCartApi.md#shoppingCartGetByCustomer) | **GET** /customers/{customerNumber}/shopping-carts | Get all shopping carts for the given customer.
[**shoppingCartGetItemExclusions**](ShoppingCartApi.md#shoppingCartGetItemExclusions) | **GET** /shopping-carts/{cartId}/item-exclusions | Get a list of item exclusions for a given shopping card.
[**shoppingCartUpdate**](ShoppingCartApi.md#shoppingCartUpdate) | **POST** /shopping-carts/{cartId} | Update an existing shopping cart.


# **shoppingCartConvertToOrder**
> \Swagger\Client\Model\OrderResponse shoppingCartConvertToOrder($cart_id, $convert_cart_to_order_request)

Convert an existing shopping cart to an Advantage Order. Usually called when preparing   to render a Checkout/Confirmation page for users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The ID of the cart to convert to an order.
$convert_cart_to_order_request = new \Swagger\Client\Model\ConvertCartToOrderRequest(); // \Swagger\Client\Model\ConvertCartToOrderRequest | A ConvertCartToOrderRequest object.

try {
    $result = $apiInstance->shoppingCartConvertToOrder($cart_id, $convert_cart_to_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->shoppingCartConvertToOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart to convert to an order. |
 **convert_cart_to_order_request** | [**\Swagger\Client\Model\ConvertCartToOrderRequest**](../Model/ConvertCartToOrderRequest.md)| A ConvertCartToOrderRequest object. |

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoppingCartCreate**
> \Swagger\Client\Model\ShoppingCart shoppingCartCreate($shopping_cart_in)

Create a new shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shopping_cart_in = new \Swagger\Client\Model\ShoppingCartIn(); // \Swagger\Client\Model\ShoppingCartIn | A ShoppingCartIn object.

try {
    $result = $apiInstance->shoppingCartCreate($shopping_cart_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->shoppingCartCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_in** | [**\Swagger\Client\Model\ShoppingCartIn**](../Model/ShoppingCartIn.md)| A ShoppingCartIn object. |

### Return type

[**\Swagger\Client\Model\ShoppingCart**](../Model/ShoppingCart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoppingCartDelete**
> shoppingCartDelete($cart_id)

Delete an existing shopping cart with the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The ID of the cart to delete.

try {
    $apiInstance->shoppingCartDelete($cart_id);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->shoppingCartDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoppingCartGet**
> \Swagger\Client\Model\ShoppingCart shoppingCartGet($cart_id)

Get the shopping cart with the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The ID of the desired shopping cart.

try {
    $result = $apiInstance->shoppingCartGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->shoppingCartGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the desired shopping cart. |

### Return type

[**\Swagger\Client\Model\ShoppingCart**](../Model/ShoppingCart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoppingCartGetByCustomer**
> \Swagger\Client\Model\SearchResultShoppingCart shoppingCartGetByCustomer($customer_number, $order_source_code)

Get all shopping carts for the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | An Advantage customer number. This method will return all shopping carts               for which this customer is the bill-to.
$order_source_code = "order_source_code_example"; // string | An order source. If provided, only shopping carts with this order source               will be returned.

try {
    $result = $apiInstance->shoppingCartGetByCustomer($customer_number, $order_source_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->shoppingCartGetByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| An Advantage customer number. This method will return all shopping carts               for which this customer is the bill-to. |
 **order_source_code** | **string**| An order source. If provided, only shopping carts with this order source               will be returned. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultShoppingCart**](../Model/SearchResultShoppingCart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoppingCartGetItemExclusions**
> \Swagger\Client\Model\OrderLineItemExclusion[] shoppingCartGetItemExclusions($cart_id)

Get a list of item exclusions for a given shopping card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The ID of the cart that has item exclusions.

try {
    $result = $apiInstance->shoppingCartGetItemExclusions($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->shoppingCartGetItemExclusions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart that has item exclusions. |

### Return type

[**\Swagger\Client\Model\OrderLineItemExclusion[]**](../Model/OrderLineItemExclusion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoppingCartUpdate**
> \Swagger\Client\Model\ShoppingCart shoppingCartUpdate($cart_id, $shopping_cart_in)

Update an existing shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The ID of the cart to update.
$shopping_cart_in = new \Swagger\Client\Model\ShoppingCartIn(); // \Swagger\Client\Model\ShoppingCartIn | A ShoppingCartIn object.

try {
    $result = $apiInstance->shoppingCartUpdate($cart_id, $shopping_cart_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->shoppingCartUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The ID of the cart to update. |
 **shopping_cart_in** | [**\Swagger\Client\Model\ShoppingCartIn**](../Model/ShoppingCartIn.md)| A ShoppingCartIn object. |

### Return type

[**\Swagger\Client\Model\ShoppingCart**](../Model/ShoppingCart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

