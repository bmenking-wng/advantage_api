# Swagger\Client\NoteApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**noteCreate**](NoteApi.md#noteCreate) | **POST** /notes | Creates a note in Advantage from a NoteCreateRequest
[**noteGet**](NoteApi.md#noteGet) | **GET** /notes/{customerNumber} | Gets note information given


# **noteCreate**
> noteCreate($note_create_request)

Creates a note in Advantage from a NoteCreateRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note_create_request = new \Swagger\Client\Model\NoteCreateRequest(); // \Swagger\Client\Model\NoteCreateRequest | 

try {
    $apiInstance->noteCreate($note_create_request);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->noteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_create_request** | [**\Swagger\Client\Model\NoteCreateRequest**](../Model/NoteCreateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **noteGet**
> \Swagger\Client\Model\Note[] noteGet($customer_number, $include_letters, $pager_skip, $pager_take)

Gets note information given

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The customer number
$include_letters = true; // bool | If true, get note letters. Set to false to omit.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->noteGet($customer_number, $include_letters, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->noteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number |
 **include_letters** | **bool**| If true, get note letters. Set to false to omit. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\Note[]**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

