# Swagger\Client\DataDictionaryApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataDictionaryGetField**](DataDictionaryApi.md#dataDictionaryGetField) | **GET** /data-dictionary/fields/{fieldName} | Get field information from Advantage
[**dataDictionaryGetFieldReference**](DataDictionaryApi.md#dataDictionaryGetFieldReference) | **GET** /data-dictionary/tables/{tableName}/fields/{referenceName} | Get field information from an inclusion on a table in Advantage
[**dataDictionaryGetValidValues**](DataDictionaryApi.md#dataDictionaryGetValidValues) | **GET** /data-dictionary/fields/{fieldName}/valid-values | Gets a list of valid values for a specific field.


# **dataDictionaryGetField**
> \Swagger\Client\Model\Field dataDictionaryGetField($field_name)

Get field information from Advantage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_name = "field_name_example"; // string | The Actual Name of a field in the dictionary

try {
    $result = $apiInstance->dataDictionaryGetField($field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataDictionaryApi->dataDictionaryGetField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**| The Actual Name of a field in the dictionary |

### Return type

[**\Swagger\Client\Model\Field**](../Model/Field.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataDictionaryGetFieldReference**
> \Swagger\Client\Model\Field dataDictionaryGetFieldReference($reference_name, $table_name)

Get field information from an inclusion on a table in Advantage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference_name = "reference_name_example"; // string | The Reference Name of a field included on the table
$table_name = "table_name_example"; // string | The Table Name that includes the field

try {
    $result = $apiInstance->dataDictionaryGetFieldReference($reference_name, $table_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataDictionaryApi->dataDictionaryGetFieldReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_name** | **string**| The Reference Name of a field included on the table |
 **table_name** | **string**| The Table Name that includes the field |

### Return type

[**\Swagger\Client\Model\Field**](../Model/Field.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataDictionaryGetValidValues**
> \Swagger\Client\Model\SearchResultFieldValidValue dataDictionaryGetValidValues($field_name, $value_list_filters)

Gets a list of valid values for a specific field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_name = "field_name_example"; // string | The field name to get values for
$value_list_filters = array(new \stdClass); // object[] | Optional value list filters,   formatted as a &lt;FLD-NME&gt;=&lt;Value&gt; (e.g. ADR-CDE=HOME)

try {
    $result = $apiInstance->dataDictionaryGetValidValues($field_name, $value_list_filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataDictionaryApi->dataDictionaryGetValidValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**| The field name to get values for |
 **value_list_filters** | [**object[]**](../Model/object.md)| Optional value list filters,   formatted as a &amp;lt;FLD-NME&amp;gt;&#x3D;&amp;lt;Value&amp;gt; (e.g. ADR-CDE&#x3D;HOME) | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultFieldValidValue**](../Model/SearchResultFieldValidValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

