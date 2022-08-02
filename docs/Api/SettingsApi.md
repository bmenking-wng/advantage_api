# Swagger\Client\SettingsApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settingsGetCommonOptions**](SettingsApi.md#settingsGetCommonOptions) | **GET** /settings/common-options | Get the general options that are useful for e-commerce and customer service web sites.
[**settingsGetFieldLengths**](SettingsApi.md#settingsGetFieldLengths) | **GET** /settings/common-field-lengths | Get the general options that are useful for e-commerce and customer service web sites.
[**settingsGetOption**](SettingsApi.md#settingsGetOption) | **GET** /settings/options/{systemName}/{optionName} | Get the value of a specific system option.
[**settingsGetSiteSettings**](SettingsApi.md#settingsGetSiteSettings) | **GET** /settings/websites/{siteCode} | Get the Advantage settings for the specified website and the general options  that are useful for e-commerce and customer service web sites.


# **settingsGetCommonOptions**
> \Swagger\Client\Model\CommonOptions settingsGetCommonOptions()

Get the general options that are useful for e-commerce and customer service web sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->settingsGetCommonOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsGetCommonOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CommonOptions**](../Model/CommonOptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsGetFieldLengths**
> \Swagger\Client\Model\FieldLengths settingsGetFieldLengths()

Get the general options that are useful for e-commerce and customer service web sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->settingsGetFieldLengths();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsGetFieldLengths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\FieldLengths**](../Model/FieldLengths.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsGetOption**
> \Swagger\Client\Model\OptionValue settingsGetOption($system_name, $option_name)

Get the value of a specific system option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$system_name = "system_name_example"; // string | Option system name
$option_name = "option_name_example"; // string | Option name

try {
    $result = $apiInstance->settingsGetOption($system_name, $option_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsGetOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_name** | **string**| Option system name |
 **option_name** | **string**| Option name |

### Return type

[**\Swagger\Client\Model\OptionValue**](../Model/OptionValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsGetSiteSettings**
> \Swagger\Client\Model\SiteSettings settingsGetSiteSettings($site_code)

Get the Advantage settings for the specified website and the general options  that are useful for e-commerce and customer service web sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_code = "site_code_example"; // string | The Site Code used to retrieve site-specific options.

try {
    $result = $apiInstance->settingsGetSiteSettings($site_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsGetSiteSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_code** | **string**| The Site Code used to retrieve site-specific options. |

### Return type

[**\Swagger\Client\Model\SiteSettings**](../Model/SiteSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

