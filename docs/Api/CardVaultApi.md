# Swagger\Client\CardVaultApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardVaultGetClientSettingsByUrl**](CardVaultApi.md#cardVaultGetClientSettingsByUrl) | **GET** /card-vault/clients | Returns the CardVault client settings for a specified URL


# **cardVaultGetClientSettingsByUrl**
> \Swagger\Client\Model\CardVaultClientSettingsResponse cardVaultGetClientSettingsByUrl($client_url)

Returns the CardVault client settings for a specified URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_url = "client_url_example"; // string | 

try {
    $result = $apiInstance->cardVaultGetClientSettingsByUrl($client_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardVaultApi->cardVaultGetClientSettingsByUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_url** | **string**|  |

### Return type

[**\Swagger\Client\Model\CardVaultClientSettingsResponse**](../Model/CardVaultClientSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

