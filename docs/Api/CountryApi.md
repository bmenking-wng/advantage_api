# Swagger\Client\CountryApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countryGet**](CountryApi.md#countryGet) | **GET** /countries | Get all valid countries.
[**countryGetPostalCode**](CountryApi.md#countryGetPostalCode) | **GET** /countries/{countryCode}/postal-codes/{postalCode} | Get all valid countries.
[**countryGetPostalCodes**](CountryApi.md#countryGetPostalCodes) | **GET** /countries/{countryCode}/postal-codes | Get all postal codes by country
[**countryGetPostalCodes_0**](CountryApi.md#countryGetPostalCodes_0) | **GET** /countries/{countryCode}/states/{stateCode}/postal-codes | Get all postal codes by country and state
[**countryGetStates**](CountryApi.md#countryGetStates) | **GET** /countries/{countryCode}/states | Get a list of valid states for the given country. Note that if an empty string is a valid country code   in your system (perhaps used for the default country) then you should pass the word \&quot;blank\&quot; as the country   code in place of an actual empty string.
[**countryGet_0**](CountryApi.md#countryGet_0) | **GET** /countries/{countryCode} | Get information about the specified country. Note that if an empty string is a valid country code in   your system (perhaps used for the default country) then you should pass the word \&quot;blank\&quot; as the country   code in place of an actual empty string.


# **countryGet**
> \Swagger\Client\Model\Country[] countryGet()

Get all valid countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->countryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Country[]**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetPostalCode**
> \Swagger\Client\Model\PostalCode countryGetPostalCode($country_code, $postal_code)

Get all valid countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | Country Code
$postal_code = "postal_code_example"; // string | Postal Code

try {
    $result = $apiInstance->countryGetPostalCode($country_code, $postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetPostalCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Country Code |
 **postal_code** | **string**| Postal Code |

### Return type

[**\Swagger\Client\Model\PostalCode**](../Model/PostalCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetPostalCodes**
> \Swagger\Client\Model\SearchResultPostalCode countryGetPostalCodes($country_code)

Get all postal codes by country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | Country Code

try {
    $result = $apiInstance->countryGetPostalCodes($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetPostalCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Country Code |

### Return type

[**\Swagger\Client\Model\SearchResultPostalCode**](../Model/SearchResultPostalCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetPostalCodes_0**
> \Swagger\Client\Model\SearchResultPostalCode countryGetPostalCodes_0($country_code, $state_code)

Get all postal codes by country and state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | Country Code
$state_code = "state_code_example"; // string | State Code

try {
    $result = $apiInstance->countryGetPostalCodes_0($country_code, $state_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetPostalCodes_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Country Code |
 **state_code** | **string**| State Code |

### Return type

[**\Swagger\Client\Model\SearchResultPostalCode**](../Model/SearchResultPostalCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetStates**
> \Swagger\Client\Model\State[] countryGetStates($country_code)

Get a list of valid states for the given country. Note that if an empty string is a valid country code   in your system (perhaps used for the default country) then you should pass the word \"blank\" as the country   code in place of an actual empty string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | The country code. For a blank country code use the literal string \"blank\".

try {
    $result = $apiInstance->countryGetStates($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code. For a blank country code use the literal string \&quot;blank\&quot;. |

### Return type

[**\Swagger\Client\Model\State[]**](../Model/State.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGet_0**
> \Swagger\Client\Model\Country countryGet_0($country_code)

Get information about the specified country. Note that if an empty string is a valid country code in   your system (perhaps used for the default country) then you should pass the word \"blank\" as the country   code in place of an actual empty string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | The Advantage country code.  For a blank country code us the literal string               \"blank\".

try {
    $result = $apiInstance->countryGet_0($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The Advantage country code.  For a blank country code us the literal string               \&quot;blank\&quot;. |

### Return type

[**\Swagger\Client\Model\Country**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

