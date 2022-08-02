# Swagger\Client\AdvantageUserApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advantageUserGetSetting**](AdvantageUserApi.md#advantageUserGetSetting) | **GET** /advantage-users/{username}/settings/{settingName1}/{settingName2}/{settingName3} | Get a user setting from an Advantage User
[**advantageUserSetSetting**](AdvantageUserApi.md#advantageUserSetSetting) | **POST** /advantage-users/{username}/settings | Set an existing user setting for an Advantage User, or create a new one if the setting doesn&#39;t already exist.


# **advantageUserGetSetting**
> \Swagger\Client\Model\GetUserSettingResponse advantageUserGetSetting($username, $setting_name1, $setting_name2, $setting_name3)

Get a user setting from an Advantage User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdvantageUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | The username to find.
$setting_name1 = "setting_name1_example"; // string | The first of a possibly three part setting identifier.
$setting_name2 = "setting_name2_example"; // string | The second of a possibly three part setting identifier.
$setting_name3 = "setting_name3_example"; // string | The third of a possibly three part setting identifier.

try {
    $result = $apiInstance->advantageUserGetSetting($username, $setting_name1, $setting_name2, $setting_name3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvantageUserApi->advantageUserGetSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The username to find. |
 **setting_name1** | **string**| The first of a possibly three part setting identifier. |
 **setting_name2** | **string**| The second of a possibly three part setting identifier. |
 **setting_name3** | **string**| The third of a possibly three part setting identifier. |

### Return type

[**\Swagger\Client\Model\GetUserSettingResponse**](../Model/GetUserSettingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advantageUserSetSetting**
> advantageUserSetSetting($username, $set_user_setting_request)

Set an existing user setting for an Advantage User, or create a new one if the setting doesn't already exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdvantageUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | The user to set the setting for
$set_user_setting_request = new \Swagger\Client\Model\SetUserSettingRequest(); // \Swagger\Client\Model\SetUserSettingRequest | An object contianing options to set a user setting

try {
    $apiInstance->advantageUserSetSetting($username, $set_user_setting_request);
} catch (Exception $e) {
    echo 'Exception when calling AdvantageUserApi->advantageUserSetSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The user to set the setting for |
 **set_user_setting_request** | [**\Swagger\Client\Model\SetUserSettingRequest**](../Model/SetUserSettingRequest.md)| An object contianing options to set a user setting |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

