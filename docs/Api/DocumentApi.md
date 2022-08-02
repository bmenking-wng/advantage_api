# Swagger\Client\DocumentApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentGetDocument**](DocumentApi.md#documentGetDocument) | **GET** /documents/{docketNumber} | Streams a document from a location pointed to by a given docket number


# **documentGetDocument**
> object documentGetDocument($docket_number)

Streams a document from a location pointed to by a given docket number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$docket_number = "docket_number_example"; // string | The docket number of the document to stream.

try {
    $result = $apiInstance->documentGetDocument($docket_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentGetDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docket_number** | **string**| The docket number of the document to stream. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

