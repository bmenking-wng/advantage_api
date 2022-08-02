# Swagger\Client\AuthenticationGroupApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationGroupCreateOrUpdate**](AuthenticationGroupApi.md#authenticationGroupCreateOrUpdate) | **POST** /authentication-groups | Create or Update an Authentication Group from an AuthenticationGroupIn Model
[**authenticationGroupGet**](AuthenticationGroupApi.md#authenticationGroupGet) | **GET** /authentication-groups/{authenticationGroupCode} | Gets Authentication Group.
[**authenticationGroupRemove**](AuthenticationGroupApi.md#authenticationGroupRemove) | **DELETE** /authentication-groups/{authenticationGroupCode} | Removes an Authentication Group
[**authenticationGroupUpdate**](AuthenticationGroupApi.md#authenticationGroupUpdate) | **POST** /authentication-groups/{authenticationGroupCode} | Update an Authentication Group from an AuthenticationGroupUpdateRequest Model


# **authenticationGroupCreateOrUpdate**
> \Swagger\Client\Model\AuthenticationGroup authenticationGroupCreateOrUpdate($authentication_group_in)

Create or Update an Authentication Group from an AuthenticationGroupIn Model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group_in = new \Swagger\Client\Model\AuthenticationGroupIn(); // \Swagger\Client\Model\AuthenticationGroupIn | Model to Create/Update Authentication Group

try {
    $result = $apiInstance->authenticationGroupCreateOrUpdate($authentication_group_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationGroupApi->authenticationGroupCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group_in** | [**\Swagger\Client\Model\AuthenticationGroupIn**](../Model/AuthenticationGroupIn.md)| Model to Create/Update Authentication Group |

### Return type

[**\Swagger\Client\Model\AuthenticationGroup**](../Model/AuthenticationGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGroupGet**
> \Swagger\Client\Model\AuthenticationGroup authenticationGroupGet($authentication_group_code)

Gets Authentication Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group_code = "authentication_group_code_example"; // string | The authentication group code

try {
    $result = $apiInstance->authenticationGroupGet($authentication_group_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationGroupApi->authenticationGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group_code** | **string**| The authentication group code |

### Return type

[**\Swagger\Client\Model\AuthenticationGroup**](../Model/AuthenticationGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGroupRemove**
> authenticationGroupRemove($authentication_group_code)

Removes an Authentication Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group_code = "authentication_group_code_example"; // string | The code that identifies the Authentication Group to be deleted.

try {
    $apiInstance->authenticationGroupRemove($authentication_group_code);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationGroupApi->authenticationGroupRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group_code** | **string**| The code that identifies the Authentication Group to be deleted. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGroupUpdate**
> \Swagger\Client\Model\AuthenticationGroup authenticationGroupUpdate($authentication_group_code, $authentication_group_update_request)

Update an Authentication Group from an AuthenticationGroupUpdateRequest Model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group_code = "authentication_group_code_example"; // string | Code of Authentication Group to be updated
$authentication_group_update_request = new \Swagger\Client\Model\AuthenticationGroupUpdateRequest(); // \Swagger\Client\Model\AuthenticationGroupUpdateRequest | Model to Update Authentication Group

try {
    $result = $apiInstance->authenticationGroupUpdate($authentication_group_code, $authentication_group_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationGroupApi->authenticationGroupUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group_code** | **string**| Code of Authentication Group to be updated |
 **authentication_group_update_request** | [**\Swagger\Client\Model\AuthenticationGroupUpdateRequest**](../Model/AuthenticationGroupUpdateRequest.md)| Model to Update Authentication Group |

### Return type

[**\Swagger\Client\Model\AuthenticationGroup**](../Model/AuthenticationGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

