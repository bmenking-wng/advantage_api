# Swagger\Client\BroadcastMessageApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**broadcastMessageCreateBroadcastMessage**](BroadcastMessageApi.md#broadcastMessageCreateBroadcastMessage) | **POST** /broadcast-messages | Create a new broadcast message
[**broadcastMessageDeleteBroadcastMessage**](BroadcastMessageApi.md#broadcastMessageDeleteBroadcastMessage) | **DELETE** /broadcast-messages/{broadcastMessageId} | Delete a specific broadcast message
[**broadcastMessageGet**](BroadcastMessageApi.md#broadcastMessageGet) | **GET** /broadcast-messages | Get the list of all broadcast messages
[**broadcastMessageUpdateBroadcastMessage**](BroadcastMessageApi.md#broadcastMessageUpdateBroadcastMessage) | **POST** /broadcast-messages/{broadcastMessageId} | Update a broadcast message


# **broadcastMessageCreateBroadcastMessage**
> \Swagger\Client\Model\BroadcastMessageCreateResponse broadcastMessageCreateBroadcastMessage($broadcast_message_create_request)

Create a new broadcast message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_message_create_request = new \Swagger\Client\Model\BroadcastMessageCreateRequest(); // \Swagger\Client\Model\BroadcastMessageCreateRequest | Broadcast Message Create Request object

try {
    $result = $apiInstance->broadcastMessageCreateBroadcastMessage($broadcast_message_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastMessageApi->broadcastMessageCreateBroadcastMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broadcast_message_create_request** | [**\Swagger\Client\Model\BroadcastMessageCreateRequest**](../Model/BroadcastMessageCreateRequest.md)| Broadcast Message Create Request object |

### Return type

[**\Swagger\Client\Model\BroadcastMessageCreateResponse**](../Model/BroadcastMessageCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **broadcastMessageDeleteBroadcastMessage**
> broadcastMessageDeleteBroadcastMessage($broadcast_message_id)

Delete a specific broadcast message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_message_id = "broadcast_message_id_example"; // string | Broadcast Message Id (Generated Unique Identifier)

try {
    $apiInstance->broadcastMessageDeleteBroadcastMessage($broadcast_message_id);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastMessageApi->broadcastMessageDeleteBroadcastMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broadcast_message_id** | **string**| Broadcast Message Id (Generated Unique Identifier) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **broadcastMessageGet**
> \Swagger\Client\Model\SearchResultWithCountBroadcastMessage broadcastMessageGet($pager_skip, $pager_take)

Get the list of all broadcast messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->broadcastMessageGet($pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastMessageApi->broadcastMessageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountBroadcastMessage**](../Model/SearchResultWithCountBroadcastMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **broadcastMessageUpdateBroadcastMessage**
> \Swagger\Client\Model\BroadcastMessage broadcastMessageUpdateBroadcastMessage($broadcast_message_id, $broadcast_message_update_request)

Update a broadcast message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_message_id = "broadcast_message_id_example"; // string | Broadcast Message Id (Generated Unique Identifier)
$broadcast_message_update_request = new \Swagger\Client\Model\BroadcastMessageUpdateRequest(); // \Swagger\Client\Model\BroadcastMessageUpdateRequest | Broadcast Message Update Request object

try {
    $result = $apiInstance->broadcastMessageUpdateBroadcastMessage($broadcast_message_id, $broadcast_message_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastMessageApi->broadcastMessageUpdateBroadcastMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broadcast_message_id** | **string**| Broadcast Message Id (Generated Unique Identifier) |
 **broadcast_message_update_request** | [**\Swagger\Client\Model\BroadcastMessageUpdateRequest**](../Model/BroadcastMessageUpdateRequest.md)| Broadcast Message Update Request object |

### Return type

[**\Swagger\Client\Model\BroadcastMessage**](../Model/BroadcastMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

