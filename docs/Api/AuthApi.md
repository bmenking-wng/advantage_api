# Swagger\Client\AuthApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authByAthens**](AuthApi.md#authByAthens) | **POST** /auth/{authenticationGroup}/athens/{hostCode} | Gets the authorizations for a customer, validated by Athens.
[**authByEmail**](AuthApi.md#authByEmail) | **POST** /auth/{authenticationGroup}/email/{emailAddress}/{hostCode} | Gets the authorizations for a customer, validated by email and password.
[**authByIp**](AuthApi.md#authByIp) | **POST** /auth/{authenticationGroup}/ip/{hostCode} | Gets the authorizations for a customer, validated by IP address.
[**authByShibboleth**](AuthApi.md#authByShibboleth) | **POST** /auth/{authenticationGroup}/shibboleth/{hostCode} | Gets the authorizations for a customer, validated by Shibboleth.
[**authBySingleSignOn**](AuthApi.md#authBySingleSignOn) | **POST** /auth/{authenticationGroup}/single-sign-on/{hostCode} | Get the authorizations for a customer, validated by single sign on.
[**authByUsername**](AuthApi.md#authByUsername) | **POST** /auth/{authenticationGroup}/username/{username}/{hostCode} | Gets the authorizations for a customer, validated by username and password.
[**authGetCustomerAuthentications**](AuthApi.md#authGetCustomerAuthentications) | **GET** /customers/{customerNumber}/authentications | Finds and returns authentication information for a given customer number.
[**authGetCustomerAuthentications_0**](AuthApi.md#authGetCustomerAuthentications_0) | **GET** /customers/{customerNumber}/authentications/authentication-group/{authenticationGroup} | Finds and returns authentication information for a given customer number.


# **authByAthens**
> \Swagger\Client\Model\AuthResponse authByAthens($authentication_group, $credentials, $host_code)

Gets the authorizations for a customer, validated by Athens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The Advantage authentication group within which to search.
$credentials = new \Swagger\Client\Model\IdBasedLoginCredentials(); // \Swagger\Client\Model\IdBasedLoginCredentials | A IdBasedLoginCredentials object populated with an Athens ID.
$host_code = "host_code_example"; // string | Content host code.

try {
    $result = $apiInstance->authByAthens($authentication_group, $credentials, $host_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authByAthens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The Advantage authentication group within which to search. |
 **credentials** | [**\Swagger\Client\Model\IdBasedLoginCredentials**](../Model/IdBasedLoginCredentials.md)| A IdBasedLoginCredentials object populated with an Athens ID. |
 **host_code** | **string**| Content host code. |

### Return type

[**\Swagger\Client\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authByEmail**
> \Swagger\Client\Model\AuthResponse authByEmail($authentication_group, $email_address, $credentials, $host_code)

Gets the authorizations for a customer, validated by email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The Advantage authentication group within which to search.
$email_address = "email_address_example"; // string | The user's Email address.
$credentials = new \Swagger\Client\Model\LoginCredentials(); // \Swagger\Client\Model\LoginCredentials | A LoginCredentials object populated with a password.
$host_code = "host_code_example"; // string | The content host code.

try {
    $result = $apiInstance->authByEmail($authentication_group, $email_address, $credentials, $host_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The Advantage authentication group within which to search. |
 **email_address** | **string**| The user&#39;s Email address. |
 **credentials** | [**\Swagger\Client\Model\LoginCredentials**](../Model/LoginCredentials.md)| A LoginCredentials object populated with a password. |
 **host_code** | **string**| The content host code. |

### Return type

[**\Swagger\Client\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authByIp**
> \Swagger\Client\Model\AuthResponse authByIp($authentication_group, $credentials, $host_code)

Gets the authorizations for a customer, validated by IP address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The Advantage authentication group within which to search.
$credentials = new \Swagger\Client\Model\IdBasedLoginCredentials(); // \Swagger\Client\Model\IdBasedLoginCredentials | An IdBasedLoginCredentials object populated with an IP address.
$host_code = "host_code_example"; // string | Content host code.

try {
    $result = $apiInstance->authByIp($authentication_group, $credentials, $host_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authByIp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The Advantage authentication group within which to search. |
 **credentials** | [**\Swagger\Client\Model\IdBasedLoginCredentials**](../Model/IdBasedLoginCredentials.md)| An IdBasedLoginCredentials object populated with an IP address. |
 **host_code** | **string**| Content host code. |

### Return type

[**\Swagger\Client\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authByShibboleth**
> \Swagger\Client\Model\AuthResponse authByShibboleth($authentication_group, $credentials, $host_code)

Gets the authorizations for a customer, validated by Shibboleth.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The Advantage authentication group within which to search.
$credentials = new \Swagger\Client\Model\IdBasedLoginCredentials(); // \Swagger\Client\Model\IdBasedLoginCredentials | A IdBasedLoginCredentials object populated with a Shibboleth institution ID code.
$host_code = "host_code_example"; // string | Content host code.

try {
    $result = $apiInstance->authByShibboleth($authentication_group, $credentials, $host_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authByShibboleth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The Advantage authentication group within which to search. |
 **credentials** | [**\Swagger\Client\Model\IdBasedLoginCredentials**](../Model/IdBasedLoginCredentials.md)| A IdBasedLoginCredentials object populated with a Shibboleth institution ID code. |
 **host_code** | **string**| Content host code. |

### Return type

[**\Swagger\Client\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authBySingleSignOn**
> \Swagger\Client\Model\AuthResponse authBySingleSignOn($authentication_group, $credentials, $host_code)

Get the authorizations for a customer, validated by single sign on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The Advantage authentication group within which to search.
$credentials = new \Swagger\Client\Model\IdBasedLoginCredentials(); // \Swagger\Client\Model\IdBasedLoginCredentials | An IdBasedLoginCredentials object populated with a single sign on ID.
$host_code = "host_code_example"; // string | The content host code.

try {
    $result = $apiInstance->authBySingleSignOn($authentication_group, $credentials, $host_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authBySingleSignOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The Advantage authentication group within which to search. |
 **credentials** | [**\Swagger\Client\Model\IdBasedLoginCredentials**](../Model/IdBasedLoginCredentials.md)| An IdBasedLoginCredentials object populated with a single sign on ID. |
 **host_code** | **string**| The content host code. |

### Return type

[**\Swagger\Client\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authByUsername**
> \Swagger\Client\Model\AuthResponse authByUsername($authentication_group, $username, $credentials, $host_code)

Gets the authorizations for a customer, validated by username and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_group = "authentication_group_example"; // string | The Advantage authentication group within which to search.
$username = "username_example"; // string | The Username (sometimes referred to as a login.)
$credentials = new \Swagger\Client\Model\LoginCredentials(); // \Swagger\Client\Model\LoginCredentials | A LoginCredentials object populated with a password.
$host_code = "host_code_example"; // string | The content host code.

try {
    $result = $apiInstance->authByUsername($authentication_group, $username, $credentials, $host_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authByUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_group** | **string**| The Advantage authentication group within which to search. |
 **username** | **string**| The Username (sometimes referred to as a login.) |
 **credentials** | [**\Swagger\Client\Model\LoginCredentials**](../Model/LoginCredentials.md)| A LoginCredentials object populated with a password. |
 **host_code** | **string**| The content host code. |

### Return type

[**\Swagger\Client\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authGetCustomerAuthentications**
> \Swagger\Client\Model\CustomerAuthentications authGetCustomerAuthentications($customer_number)

Finds and returns authentication information for a given customer number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number to find authentication information for.

try {
    $result = $apiInstance->authGetCustomerAuthentications($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authGetCustomerAuthentications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number to find authentication information for. |

### Return type

[**\Swagger\Client\Model\CustomerAuthentications**](../Model/CustomerAuthentications.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authGetCustomerAuthentications_0**
> \Swagger\Client\Model\CustomerAuthentications authGetCustomerAuthentications_0($customer_number, $authentication_group)

Finds and returns authentication information for a given customer number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number to find authentication information for.
$authentication_group = "authentication_group_example"; // string | Authentication group to look for authentication information in.

try {
    $result = $apiInstance->authGetCustomerAuthentications_0($customer_number, $authentication_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authGetCustomerAuthentications_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number to find authentication information for. |
 **authentication_group** | **string**| Authentication group to look for authentication information in. |

### Return type

[**\Swagger\Client\Model\CustomerAuthentications**](../Model/CustomerAuthentications.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

