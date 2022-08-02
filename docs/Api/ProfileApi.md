# Swagger\Client\ProfileApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profileCreate**](ProfileApi.md#profileCreate) | **POST** /profiles | Creates a profile for the responses to a questionnaire.
[**profileGet**](ProfileApi.md#profileGet) | **GET** /profiles/{profileId} | Returns details for the specified profile ID
[**profileGetByItemNumber**](ProfileApi.md#profileGetByItemNumber) | **GET** /profiles/by-item/{itemNumber} | Returns the profile associated with the specified item
[**profileUpdate**](ProfileApi.md#profileUpdate) | **POST** /profiles/{profileId} | Updates an existing profile.


# **profileCreate**
> \Swagger\Client\Model\ProfileResponse profileCreate($profile)

Creates a profile for the responses to a questionnaire.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile = new \Swagger\Client\Model\Profile(); // \Swagger\Client\Model\Profile | The responses to the questions in the questionnaire

try {
    $result = $apiInstance->profileCreate($profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | [**\Swagger\Client\Model\Profile**](../Model/Profile.md)| The responses to the questions in the questionnaire |

### Return type

[**\Swagger\Client\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileGet**
> \Swagger\Client\Model\Profile profileGet($profile_id)

Returns details for the specified profile ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = "profile_id_example"; // string | Profile ID

try {
    $result = $apiInstance->profileGet($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **string**| Profile ID |

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileGetByItemNumber**
> \Swagger\Client\Model\Profile profileGetByItemNumber($item_number)

Returns the profile associated with the specified item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | Item number

try {
    $result = $apiInstance->profileGetByItemNumber($item_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileGetByItemNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| Item number |

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileUpdate**
> profileUpdate($profile_id, $profile)

Updates an existing profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = "profile_id_example"; // string | The ID of the profile to update.
$profile = new \Swagger\Client\Model\Profile(); // \Swagger\Client\Model\Profile | The responses to update in the profile

try {
    $apiInstance->profileUpdate($profile_id, $profile);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **string**| The ID of the profile to update. |
 **profile** | [**\Swagger\Client\Model\Profile**](../Model/Profile.md)| The responses to update in the profile |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

