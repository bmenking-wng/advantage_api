# Swagger\Client\ProductApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productGet**](ProductApi.md#productGet) | **GET** /products/{itemNumber} | Get information for a given product.
[**productGetByAuthor**](ProductApi.md#productGetByAuthor) | **GET** /products/by-author/{author} | Get information for all products by the given author.  This is a preliminary API, subject to change.
[**productGetByIsbn**](ProductApi.md#productGetByIsbn) | **GET** /products/by-isbn13/{isbn} | Gets information for a product, given an ISBN-13.  This is a preliminary API, subject to change.
[**productGetByKeyword**](ProductApi.md#productGetByKeyword) | **GET** /products/by-keyword/{keyword} | Get information for all products with the given keyword.  This is a preliminary API, subject to change.
[**productGetBySearch**](ProductApi.md#productGetBySearch) | **GET** /products/by-search/{search} | Get information for all products with the given search term.  This is a preliminary API, subject to change.
[**productGetBySubjectTree**](ProductApi.md#productGetBySubjectTree) | **GET** /product-catalogs/{subjectTreeLevelId}/products | Get information for all products for the given subject tree.
[**productGetByTitle**](ProductApi.md#productGetByTitle) | **GET** /products/by-title/{title} | Get information for all products with the given title.  This is a preliminary API, subject to change.
[**productGetGiftMessagesSupport**](ProductApi.md#productGetGiftMessagesSupport) | **GET** /products/{itemNumber}/{customerType}/supports-gift-messages | Checks to see if gift messages are supported for the given item and customer type.
[**productGetOnixData**](ProductApi.md#productGetOnixData) | **GET** /products/{itemNumber}/onix-3.0 | Gets ONIX data on a product.
[**productGetPrice**](ProductApi.md#productGetPrice) | **GET** /products/{itemNumber}/price | Calculates what the price would be on the order line as if the particular customer   passed in ordered the item and used the passed in promotion
[**productGetProductContributions**](ProductApi.md#productGetProductContributions) | **GET** /customers/{customerNumber}/product-contributions | Get information for all products a customer is a contributor on.
[**productGetPurchasedWith**](ProductApi.md#productGetPurchasedWith) | **GET** /products/{itemNumber}/purchased-with-products | Get the item numbers of products purchased with given product.
[**productGetRelated**](ProductApi.md#productGetRelated) | **GET** /products/{itemNumber}/related-products | Get the item numbers of products related to a given product.
[**productUpdate**](ProductApi.md#productUpdate) | **POST** /products/{itemNumber} | Update an existing product. This will update the name and narratives for products of any product type.  This will handle more complex changes for access, back issue, product, and subscription,  based on the populated values in the appropriate product request detail properties.


# **productGet**
> \Swagger\Client\Model\Product productGet($item_number)

Get information for a given product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | The item number of the desired product.

try {
    $result = $apiInstance->productGet($item_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| The item number of the desired product. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetByAuthor**
> \Swagger\Client\Model\SearchResultProduct productGetByAuthor($author, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take)

Get information for all products by the given author.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$author = "author_example"; // string | The name of an Author.
$filter_match_type = "filter_match_type_example"; // string | The type of matching to use for the search.
$filter_order_by = "filter_order_by_example"; // string | The type of ordering on the search.
$filter_subject_tree_level_id = "filter_subject_tree_level_id_example"; // string | The ID of the subject tree level to search.
$filter_sales_analysis_category_code = "filter_sales_analysis_category_code_example"; // string | Restrict search to products within the given sales analysis code (or blank).
$filter_owning_organization_code = "filter_owning_organization_code_example"; // string | Owning organizations to filter by.
$filter_product_types = array("filter_product_types_example"); // string[] | List of product types to include in search. If null, all product types are included.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->productGetByAuthor($author, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetByAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **author** | **string**| The name of an Author. |
 **filter_match_type** | **string**| The type of matching to use for the search. | [optional]
 **filter_order_by** | **string**| The type of ordering on the search. | [optional]
 **filter_subject_tree_level_id** | **string**| The ID of the subject tree level to search. | [optional]
 **filter_sales_analysis_category_code** | **string**| Restrict search to products within the given sales analysis code (or blank). | [optional]
 **filter_owning_organization_code** | **string**| Owning organizations to filter by. | [optional]
 **filter_product_types** | [**string[]**](../Model/string.md)| List of product types to include in search. If null, all product types are included. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultProduct**](../Model/SearchResultProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetByIsbn**
> \Swagger\Client\Model\Product productGetByIsbn($isbn)

Gets information for a product, given an ISBN-13.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isbn = "isbn_example"; // string | The ISBN-13 of the product for which to retrieve information.

try {
    $result = $apiInstance->productGetByIsbn($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetByIsbn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isbn** | **string**| The ISBN-13 of the product for which to retrieve information. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetByKeyword**
> \Swagger\Client\Model\SearchResultProduct productGetByKeyword($keyword, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take)

Get information for all products with the given keyword.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keyword = "keyword_example"; // string | The keyword to use when searching for products.
$filter_match_type = "filter_match_type_example"; // string | The type of matching to use for the search.
$filter_order_by = "filter_order_by_example"; // string | The type of ordering on the search.
$filter_subject_tree_level_id = "filter_subject_tree_level_id_example"; // string | The ID of the subject tree level to search.
$filter_sales_analysis_category_code = "filter_sales_analysis_category_code_example"; // string | Restrict search to products within the given sales analysis code (or blank).
$filter_owning_organization_code = "filter_owning_organization_code_example"; // string | Owning organizations to filter by.
$filter_product_types = array("filter_product_types_example"); // string[] | List of product types to include in search. If null, all product types are included.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->productGetByKeyword($keyword, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetByKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| The keyword to use when searching for products. |
 **filter_match_type** | **string**| The type of matching to use for the search. | [optional]
 **filter_order_by** | **string**| The type of ordering on the search. | [optional]
 **filter_subject_tree_level_id** | **string**| The ID of the subject tree level to search. | [optional]
 **filter_sales_analysis_category_code** | **string**| Restrict search to products within the given sales analysis code (or blank). | [optional]
 **filter_owning_organization_code** | **string**| Owning organizations to filter by. | [optional]
 **filter_product_types** | [**string[]**](../Model/string.md)| List of product types to include in search. If null, all product types are included. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultProduct**](../Model/SearchResultProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetBySearch**
> \Swagger\Client\Model\SearchResultProduct productGetBySearch($search, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take)

Get information for all products with the given search term.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | The search term to use when searching for products.
$filter_match_type = "filter_match_type_example"; // string | The type of matching to use for the search.
$filter_order_by = "filter_order_by_example"; // string | The type of ordering on the search.
$filter_subject_tree_level_id = "filter_subject_tree_level_id_example"; // string | The ID of the subject tree level to search.
$filter_sales_analysis_category_code = "filter_sales_analysis_category_code_example"; // string | Restrict search to products within the given sales analysis code (or blank).
$filter_owning_organization_code = "filter_owning_organization_code_example"; // string | Owning organizations to filter by.
$filter_product_types = array("filter_product_types_example"); // string[] | List of product types to include in search. If null, all product types are included.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->productGetBySearch($search, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| The search term to use when searching for products. |
 **filter_match_type** | **string**| The type of matching to use for the search. | [optional]
 **filter_order_by** | **string**| The type of ordering on the search. | [optional]
 **filter_subject_tree_level_id** | **string**| The ID of the subject tree level to search. | [optional]
 **filter_sales_analysis_category_code** | **string**| Restrict search to products within the given sales analysis code (or blank). | [optional]
 **filter_owning_organization_code** | **string**| Owning organizations to filter by. | [optional]
 **filter_product_types** | [**string[]**](../Model/string.md)| List of product types to include in search. If null, all product types are included. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultProduct**](../Model/SearchResultProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetBySubjectTree**
> \Swagger\Client\Model\SearchResultProduct productGetBySubjectTree($subject_tree_level_id, $order_by, $highlighted)

Get information for all products for the given subject tree.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subject_tree_level_id = "subject_tree_level_id_example"; // string | The level ID of the subject tree for which to retrieve products.
$order_by = "order_by_example"; // string | Options for how to order the search results.
$highlighted = "highlighted_example"; // string | Options for how to filter the search results.

try {
    $result = $apiInstance->productGetBySubjectTree($subject_tree_level_id, $order_by, $highlighted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetBySubjectTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_tree_level_id** | **string**| The level ID of the subject tree for which to retrieve products. |
 **order_by** | **string**| Options for how to order the search results. | [optional]
 **highlighted** | **string**| Options for how to filter the search results. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultProduct**](../Model/SearchResultProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetByTitle**
> \Swagger\Client\Model\SearchResultProduct productGetByTitle($title, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take)

Get information for all products with the given title.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$title = "title_example"; // string | The title of the products to retrieve.
$filter_match_type = "filter_match_type_example"; // string | The type of matching to use for the search.
$filter_order_by = "filter_order_by_example"; // string | The type of ordering on the search.
$filter_subject_tree_level_id = "filter_subject_tree_level_id_example"; // string | The ID of the subject tree level to search.
$filter_sales_analysis_category_code = "filter_sales_analysis_category_code_example"; // string | Restrict search to products within the given sales analysis code (or blank).
$filter_owning_organization_code = "filter_owning_organization_code_example"; // string | Owning organizations to filter by.
$filter_product_types = array("filter_product_types_example"); // string[] | List of product types to include in search. If null, all product types are included.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->productGetByTitle($title, $filter_match_type, $filter_order_by, $filter_subject_tree_level_id, $filter_sales_analysis_category_code, $filter_owning_organization_code, $filter_product_types, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetByTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| The title of the products to retrieve. |
 **filter_match_type** | **string**| The type of matching to use for the search. | [optional]
 **filter_order_by** | **string**| The type of ordering on the search. | [optional]
 **filter_subject_tree_level_id** | **string**| The ID of the subject tree level to search. | [optional]
 **filter_sales_analysis_category_code** | **string**| Restrict search to products within the given sales analysis code (or blank). | [optional]
 **filter_owning_organization_code** | **string**| Owning organizations to filter by. | [optional]
 **filter_product_types** | [**string[]**](../Model/string.md)| List of product types to include in search. If null, all product types are included. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultProduct**](../Model/SearchResultProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetGiftMessagesSupport**
> \Swagger\Client\Model\GiftMessageSupportResponse productGetGiftMessagesSupport($item_number, $customer_type, $different_customers)

Checks to see if gift messages are supported for the given item and customer type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | Item Number
$customer_type = "customer_type_example"; // string | Customer Type Code
$different_customers = true; // bool | True if the bill-to and ship-to customers are different.

try {
    $result = $apiInstance->productGetGiftMessagesSupport($item_number, $customer_type, $different_customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetGiftMessagesSupport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| Item Number |
 **customer_type** | **string**| Customer Type Code |
 **different_customers** | **bool**| True if the bill-to and ship-to customers are different. |

### Return type

[**\Swagger\Client\Model\GiftMessageSupportResponse**](../Model/GiftMessageSupportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetOnixData**
> object productGetOnixData($item_number)

Gets ONIX data on a product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | The item number of the desired product to grab ONIX data from.

try {
    $result = $apiInstance->productGetOnixData($item_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetOnixData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| The item number of the desired product to grab ONIX data from. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetPrice**
> \Swagger\Client\Model\ItemPrice productGetPrice($item_number, $price_code, $order_line_forecast_customer_number, $order_line_forecast_promotion_code, $order_line_forecast_billing_currency_code, $order_line_forecast_different_ship_to, $order_line_forecast_quantity, $order_line_forecast_promotion_choice_code)

Calculates what the price would be on the order line as if the particular customer   passed in ordered the item and used the passed in promotion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | Item number to make an order off on.
$price_code = "price_code_example"; // string | Optional price code to use for price calculation.
$order_line_forecast_customer_number = "order_line_forecast_customer_number_example"; // string | (Required) Customer Number of the customer that will be making the order. This customer  will serve as both the billing and ship to customer.
$order_line_forecast_promotion_code = "order_line_forecast_promotion_code_example"; // string | (Required) Promotion Code that will be used on the order line.
$order_line_forecast_billing_currency_code = "order_line_forecast_billing_currency_code_example"; // string | (Required) The currency that will be used on the order line.
$order_line_forecast_different_ship_to = true; // bool | (Optional) If true, the order forecaster will use a different customer as the ship to customer.
$order_line_forecast_quantity = 56; // int | (Optional) The quantity of the item that will be ordered. Defaults to 1.
$order_line_forecast_promotion_choice_code = "order_line_forecast_promotion_choice_code_example"; // string | (Optional) Promotion Choice that will be used on the order line.

try {
    $result = $apiInstance->productGetPrice($item_number, $price_code, $order_line_forecast_customer_number, $order_line_forecast_promotion_code, $order_line_forecast_billing_currency_code, $order_line_forecast_different_ship_to, $order_line_forecast_quantity, $order_line_forecast_promotion_choice_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| Item number to make an order off on. |
 **price_code** | **string**| Optional price code to use for price calculation. |
 **order_line_forecast_customer_number** | **string**| (Required) Customer Number of the customer that will be making the order. This customer  will serve as both the billing and ship to customer. | [optional]
 **order_line_forecast_promotion_code** | **string**| (Required) Promotion Code that will be used on the order line. | [optional]
 **order_line_forecast_billing_currency_code** | **string**| (Required) The currency that will be used on the order line. | [optional]
 **order_line_forecast_different_ship_to** | **bool**| (Optional) If true, the order forecaster will use a different customer as the ship to customer. | [optional]
 **order_line_forecast_quantity** | **int**| (Optional) The quantity of the item that will be ordered. Defaults to 1. | [optional]
 **order_line_forecast_promotion_choice_code** | **string**| (Optional) Promotion Choice that will be used on the order line. | [optional]

### Return type

[**\Swagger\Client\Model\ItemPrice**](../Model/ItemPrice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetProductContributions**
> \Swagger\Client\Model\SearchResultProductContribution productGetProductContributions($customer_number)

Get information for all products a customer is a contributor on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number to find products they contributed to

try {
    $result = $apiInstance->productGetProductContributions($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetProductContributions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number to find products they contributed to |

### Return type

[**\Swagger\Client\Model\SearchResultProductContribution**](../Model/SearchResultProductContribution.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetPurchasedWith**
> \Swagger\Client\Model\SearchResultProductSummary productGetPurchasedWith($item_number, $days_of_history, $threshold, $pager_skip, $pager_take)

Get the item numbers of products purchased with given product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | The item number of the product to use when finding related products.
$days_of_history = 56; // int | The number of days back (in history) to search. Starts with today.
$threshold = 56; // int | How many times must the products be purchased together to be included in the list?
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->productGetPurchasedWith($item_number, $days_of_history, $threshold, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetPurchasedWith: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| The item number of the product to use when finding related products. |
 **days_of_history** | **int**| The number of days back (in history) to search. Starts with today. |
 **threshold** | **int**| How many times must the products be purchased together to be included in the list? |
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultProductSummary**](../Model/SearchResultProductSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetRelated**
> \Swagger\Client\Model\SearchResultProductSummary productGetRelated($item_number, $pager_skip, $pager_take)

Get the item numbers of products related to a given product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | The item number of the product to use when finding related products.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->productGetRelated($item_number, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| The item number of the product to use when finding related products. |
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultProductSummary**](../Model/SearchResultProductSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productUpdate**
> productUpdate($item_number, $product)

Update an existing product. This will update the name and narratives for products of any product type.  This will handle more complex changes for access, back issue, product, and subscription,  based on the populated values in the appropriate product request detail properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | The item number of the product to update
$product = new \Swagger\Client\Model\ProductUpdateRequest(); // \Swagger\Client\Model\ProductUpdateRequest | Information to update for the product

try {
    $apiInstance->productUpdate($item_number, $product);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| The item number of the product to update |
 **product** | [**\Swagger\Client\Model\ProductUpdateRequest**](../Model/ProductUpdateRequest.md)| Information to update for the product |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

