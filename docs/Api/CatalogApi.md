# Swagger\Client\CatalogApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogGet**](CatalogApi.md#catalogGet) | **GET** /product-catalogs | Gets the catalog, starting at the root level.    A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
[**catalogGet_0**](CatalogApi.md#catalogGet_0) | **GET** /product-catalogs/{parentId} | Gets the catalog, starting at the given subject tree level.   A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.


# **catalogGet**
> \Swagger\Client\Model\SearchResultSubjectTreeLevel catalogGet($settings_include_products, $settings_max_depth)

Gets the catalog, starting at the root level.    A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings_include_products = "settings_include_products_example"; // string | Include products in the response?  The default is to include products only at the leaf levels.
$settings_max_depth = 56; // int | A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep.

try {
    $result = $apiInstance->catalogGet($settings_include_products, $settings_max_depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->catalogGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings_include_products** | **string**| Include products in the response?  The default is to include products only at the leaf levels. | [optional]
 **settings_max_depth** | **int**| A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultSubjectTreeLevel**](../Model/SearchResultSubjectTreeLevel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogGet_0**
> \Swagger\Client\Model\SearchResultSubjectTreeLevel catalogGet_0($parent_id, $settings_include_products, $settings_max_depth)

Gets the catalog, starting at the given subject tree level.   A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parent_id = 789; // int | Level Id of the Parent Tree Level. The returned               collection will start with this subject tree level and return all child levels.               If no parent level is provided then the returned catalog will start with the top level subjects.
$settings_include_products = "settings_include_products_example"; // string | Include products in the response?  The default is to include products only at the leaf levels.
$settings_max_depth = 56; // int | A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep.

try {
    $result = $apiInstance->catalogGet_0($parent_id, $settings_include_products, $settings_max_depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->catalogGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **int**| Level Id of the Parent Tree Level. The returned               collection will start with this subject tree level and return all child levels.               If no parent level is provided then the returned catalog will start with the top level subjects. |
 **settings_include_products** | **string**| Include products in the response?  The default is to include products only at the leaf levels. | [optional]
 **settings_max_depth** | **int**| A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultSubjectTreeLevel**](../Model/SearchResultSubjectTreeLevel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

