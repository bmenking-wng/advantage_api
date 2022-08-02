# Swagger\Client\PremiumSetApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**premiumSetCreate**](PremiumSetApi.md#premiumSetCreate) | **POST** /premium-sets | Creates a new premium set definition in Advantage
[**premiumSetCreateDetail**](PremiumSetApi.md#premiumSetCreateDetail) | **POST** /premium-sets/{premiumSetCode}/details | Creates a new premium set detail in Advantage
[**premiumSetGet**](PremiumSetApi.md#premiumSetGet) | **GET** /premium-sets/{premiumSetCode} | Finds and return information for a given premium set.
[**premiumSetGetDetail**](PremiumSetApi.md#premiumSetGetDetail) | **GET** /premium-sets/{premiumSetCode}/details/{earnedAtCode}/{responseSequence} | Find and return information for a given premium set detail.
[**premiumSetGetDetails**](PremiumSetApi.md#premiumSetGetDetails) | **GET** /premium-sets/{premiumSetCode}/details | Retrieves the list of all premium set details in a given premium set.
[**premiumSetGetPremiumSets**](PremiumSetApi.md#premiumSetGetPremiumSets) | **GET** /premium-sets | Get the available premium sets.
[**premiumSetUpdateDetail**](PremiumSetApi.md#premiumSetUpdateDetail) | **POST** /premium-sets/{premiumSetCode}/details/{earnedAtCode}/{responseSequence} | Update an existing premium set detail in Advantage.  All properties of the update request are optional.  If a property is not set in the request object then it will not be updated.


# **premiumSetCreate**
> premiumSetCreate($create_request)

Creates a new premium set definition in Advantage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PremiumSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_request = new \Swagger\Client\Model\PremiumSetCreateRequest(); // \Swagger\Client\Model\PremiumSetCreateRequest | A PremiumSetCreateRequest object

try {
    $apiInstance->premiumSetCreate($create_request);
} catch (Exception $e) {
    echo 'Exception when calling PremiumSetApi->premiumSetCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\PremiumSetCreateRequest**](../Model/PremiumSetCreateRequest.md)| A PremiumSetCreateRequest object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premiumSetCreateDetail**
> premiumSetCreateDetail($premium_set_code, $create_request)

Creates a new premium set detail in Advantage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PremiumSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$premium_set_code = "premium_set_code_example"; // string | Premium Set Code
$create_request = new \Swagger\Client\Model\PremiumSetDetailCreateRequest(); // \Swagger\Client\Model\PremiumSetDetailCreateRequest | A PremiumSetDetailCreateRequest object

try {
    $apiInstance->premiumSetCreateDetail($premium_set_code, $create_request);
} catch (Exception $e) {
    echo 'Exception when calling PremiumSetApi->premiumSetCreateDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **premium_set_code** | **string**| Premium Set Code |
 **create_request** | [**\Swagger\Client\Model\PremiumSetDetailCreateRequest**](../Model/PremiumSetDetailCreateRequest.md)| A PremiumSetDetailCreateRequest object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premiumSetGet**
> \Swagger\Client\Model\PremiumSet premiumSetGet($premium_set_code, $include_details)

Finds and return information for a given premium set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PremiumSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$premium_set_code = "premium_set_code_example"; // string | Premium Set Code
$include_details = true; // bool | Include premium set details in the response?

try {
    $result = $apiInstance->premiumSetGet($premium_set_code, $include_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PremiumSetApi->premiumSetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **premium_set_code** | **string**| Premium Set Code |
 **include_details** | **bool**| Include premium set details in the response? | [optional]

### Return type

[**\Swagger\Client\Model\PremiumSet**](../Model/PremiumSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premiumSetGetDetail**
> \Swagger\Client\Model\PremiumSetDetail premiumSetGetDetail($premium_set_code, $earned_at_code, $response_sequence)

Find and return information for a given premium set detail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PremiumSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$premium_set_code = "premium_set_code_example"; // string | Premium Set Code
$earned_at_code = "earned_at_code_example"; // string | Earned At Code
$response_sequence = "response_sequence_example"; // string | Response Sequence Number

try {
    $result = $apiInstance->premiumSetGetDetail($premium_set_code, $earned_at_code, $response_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PremiumSetApi->premiumSetGetDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **premium_set_code** | **string**| Premium Set Code |
 **earned_at_code** | **string**| Earned At Code |
 **response_sequence** | **string**| Response Sequence Number |

### Return type

[**\Swagger\Client\Model\PremiumSetDetail**](../Model/PremiumSetDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premiumSetGetDetails**
> \Swagger\Client\Model\PremiumSetDetail[] premiumSetGetDetails($premium_set_code)

Retrieves the list of all premium set details in a given premium set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PremiumSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$premium_set_code = "premium_set_code_example"; // string | Premium Set Code

try {
    $result = $apiInstance->premiumSetGetDetails($premium_set_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PremiumSetApi->premiumSetGetDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **premium_set_code** | **string**| Premium Set Code |

### Return type

[**\Swagger\Client\Model\PremiumSetDetail[]**](../Model/PremiumSetDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premiumSetGetPremiumSets**
> \Swagger\Client\Model\SearchResultPremiumSet premiumSetGetPremiumSets()

Get the available premium sets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PremiumSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->premiumSetGetPremiumSets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PremiumSetApi->premiumSetGetPremiumSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchResultPremiumSet**](../Model/SearchResultPremiumSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premiumSetUpdateDetail**
> premiumSetUpdateDetail($premium_set_code, $earned_at_code, $response_sequence, $update_request)

Update an existing premium set detail in Advantage.  All properties of the update request are optional.  If a property is not set in the request object then it will not be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PremiumSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$premium_set_code = "premium_set_code_example"; // string | Premium Set Code
$earned_at_code = "earned_at_code_example"; // string | Earned At Code
$response_sequence = "response_sequence_example"; // string | Response Sequence Number
$update_request = new \Swagger\Client\Model\PremiumSetDetailUpdateRequest(); // \Swagger\Client\Model\PremiumSetDetailUpdateRequest | A PremiumSetDetailUpdateRequest object

try {
    $apiInstance->premiumSetUpdateDetail($premium_set_code, $earned_at_code, $response_sequence, $update_request);
} catch (Exception $e) {
    echo 'Exception when calling PremiumSetApi->premiumSetUpdateDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **premium_set_code** | **string**| Premium Set Code |
 **earned_at_code** | **string**| Earned At Code |
 **response_sequence** | **string**| Response Sequence Number |
 **update_request** | [**\Swagger\Client\Model\PremiumSetDetailUpdateRequest**](../Model/PremiumSetDetailUpdateRequest.md)| A PremiumSetDetailUpdateRequest object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

