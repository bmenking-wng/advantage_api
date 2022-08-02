# Swagger\Client\UserApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCreate**](UserApi.md#userCreate) | **POST** /users | Create a new user.
[**userGet**](UserApi.md#userGet) | **GET** /users/{authenticationGroup}/{username} | Get the user based on username.
[**userGetByAuthenticationNumber**](UserApi.md#userGetByAuthenticationNumber) | **GET** /users/by-authentication-number/{authenticationNumber} | Get the user based on unique authentication number
[**userGetByAuthenticationType**](UserApi.md#userGetByAuthenticationType) | **GET** /users/{authenticationGroup}/by-authentication-type/{authenticationType}/{authenticationValue} | Get the user based on authentication type (e.g. Google, Facebook, Shibboleth) and authentication value
[**userUpdate**](UserApi.md#userUpdate) | **POST** /users/{authenticationGroup}/{username} | Update an existing user.


# **userCreate**
> userCreate($user_login_create_request)

Create a new user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_login_create_request = new \Swagger\Client\Model\UserLoginCreateRequest(); // \Swagger\Client\Model\UserLoginCreateRequest | A UserLoginCreateRequest object.

try {
    $apiInstance->userCreate($user_login_create_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login_create_request** | [**\Swagger\Client\Model\UserLoginCreateRequest**](../Model/UserLoginCreateRequest.md)| A UserLoginCreateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGet**
> \Swagger\Client\Model\User userGet($authentication_group, $username)

Get the user based on username.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The authentication group for the user.  We recommend that you do not               use blank authentication groups. If you need to use a blank authentication group for legacy data then               pass the string \"blank\".
$username = "username_example"; // string | The username to find.

try {
    $result = $apiInstance->userGet($authentication_group, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The authentication group for the user.  We recommend that you do not               use blank authentication groups. If you need to use a blank authentication group for legacy data then               pass the string \&quot;blank\&quot;. |
 **username** | **string**| The username to find. |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetByAuthenticationNumber**
> \Swagger\Client\Model\User userGetByAuthenticationNumber($authentication_number)

Get the user based on unique authentication number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_number = "authentication_number_example"; // string | Authentication number (CVI-NBR).

try {
    $result = $apiInstance->userGetByAuthenticationNumber($authentication_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetByAuthenticationNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_number** | **string**| Authentication number (CVI-NBR). |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetByAuthenticationType**
> \Swagger\Client\Model\User userGetByAuthenticationType($authentication_group, $authentication_type, $authentication_value)

Get the user based on authentication type (e.g. Google, Facebook, Shibboleth) and authentication value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The authentication group for the user.  We recommend that you do not               use blank authentication groups. If you need to use a blank authentication group for legacy data then               pass the string \"blank\".
$authentication_type = "authentication_type_example"; // string | Authentication type (e.g. E=Email, G=Google)
$authentication_value = "authentication_value_example"; // string | The authentication value is a unique value that identifies the user (e.g. email address)

try {
    $result = $apiInstance->userGetByAuthenticationType($authentication_group, $authentication_type, $authentication_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetByAuthenticationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The authentication group for the user.  We recommend that you do not               use blank authentication groups. If you need to use a blank authentication group for legacy data then               pass the string \&quot;blank\&quot;. |
 **authentication_type** | **string**| Authentication type (e.g. E&#x3D;Email, G&#x3D;Google) |
 **authentication_value** | **string**| The authentication value is a unique value that identifies the user (e.g. email address) |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdate**
> userUpdate($authentication_group, $username, $user_update_request)

Update an existing user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The authentication group for the user.  We recommend that you do               not use blank authentication groups. If you need to use a blank authentication group for legacy               data then pass the string \"blank\".
$username = "username_example"; // string | The username of the user to update.
$user_update_request = new \Swagger\Client\Model\UserUpdateRequest(); // \Swagger\Client\Model\UserUpdateRequest | The information needed to update the user. The username and/or password.

try {
    $apiInstance->userUpdate($authentication_group, $username, $user_update_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The authentication group for the user.  We recommend that you do               not use blank authentication groups. If you need to use a blank authentication group for legacy               data then pass the string \&quot;blank\&quot;. |
 **username** | **string**| The username of the user to update. |
 **user_update_request** | [**\Swagger\Client\Model\UserUpdateRequest**](../Model/UserUpdateRequest.md)| The information needed to update the user. The username and/or password. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

