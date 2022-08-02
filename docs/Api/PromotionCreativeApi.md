# Swagger\Client\PromotionCreativeApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionCreativeAddVersion**](PromotionCreativeApi.md#promotionCreativeAddVersion) | **POST** /promotion-creatives/{creativeCode} | Adds a version to the given promotion creative, resets the \&quot;changed\&quot; attributes, and updates it with the given values.
[**promotionCreativeCreate**](PromotionCreativeApi.md#promotionCreativeCreate) | **POST** /promotion-creatives | Create a new promotion creative.
[**promotionCreativeDeleteAllVersions**](PromotionCreativeApi.md#promotionCreativeDeleteAllVersions) | **DELETE** /promotion-creatives/{creativeCode} | Deletes all versions for the given creative code
[**promotionCreativeDeleteCreativeCopywriter**](PromotionCreativeApi.md#promotionCreativeDeleteCreativeCopywriter) | **DELETE** /promotion-creatives/{creativeCode}/{version}/copywriters/{copywriterCode} | Deletes the specified creative copywriter
[**promotionCreativeDeleteCreativeDocument**](PromotionCreativeApi.md#promotionCreativeDeleteCreativeDocument) | **DELETE** /promotion-creatives/{creativeCode}/{version}/documents/{documentSequence} | Deletes the specified creative document
[**promotionCreativeGet**](PromotionCreativeApi.md#promotionCreativeGet) | **GET** /promotion-creatives/{creativeCode}/{version} | Get an existing promotion creative.
[**promotionCreativeUpdate**](PromotionCreativeApi.md#promotionCreativeUpdate) | **POST** /promotion-creatives/{creativeCode}/{version} | Updates an existing promotion creative.


# **promotionCreativeAddVersion**
> \Swagger\Client\Model\PromotionCreative promotionCreativeAddVersion($creative_code, $promotion_creative_update_request)

Adds a version to the given promotion creative, resets the \"changed\" attributes, and updates it with the given values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionCreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creative_code = "creative_code_example"; // string | The creative code to add the version to
$promotion_creative_update_request = new \Swagger\Client\Model\PromotionCreativeUpdateRequest(); // \Swagger\Client\Model\PromotionCreativeUpdateRequest | Creative update request object containing values to be updated.  Any              unspecified properties will remain set to the previous version's values (except the \"changed\" properties).

try {
    $result = $apiInstance->promotionCreativeAddVersion($creative_code, $promotion_creative_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCreativeApi->promotionCreativeAddVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creative_code** | **string**| The creative code to add the version to |
 **promotion_creative_update_request** | [**\Swagger\Client\Model\PromotionCreativeUpdateRequest**](../Model/PromotionCreativeUpdateRequest.md)| Creative update request object containing values to be updated.  Any              unspecified properties will remain set to the previous version&#39;s values (except the \&quot;changed\&quot; properties). |

### Return type

[**\Swagger\Client\Model\PromotionCreative**](../Model/PromotionCreative.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionCreativeCreate**
> promotionCreativeCreate($promotion_creative_create_request)

Create a new promotion creative.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionCreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_creative_create_request = new \Swagger\Client\Model\PromotionCreativeCreateRequest(); // \Swagger\Client\Model\PromotionCreativeCreateRequest | A PromotionCreativeCreateRequest object.

try {
    $apiInstance->promotionCreativeCreate($promotion_creative_create_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCreativeApi->promotionCreativeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_creative_create_request** | [**\Swagger\Client\Model\PromotionCreativeCreateRequest**](../Model/PromotionCreativeCreateRequest.md)| A PromotionCreativeCreateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionCreativeDeleteAllVersions**
> promotionCreativeDeleteAllVersions($creative_code)

Deletes all versions for the given creative code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionCreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creative_code = "creative_code_example"; // string | Code identifying the creative versions to delete

try {
    $apiInstance->promotionCreativeDeleteAllVersions($creative_code);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCreativeApi->promotionCreativeDeleteAllVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creative_code** | **string**| Code identifying the creative versions to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionCreativeDeleteCreativeCopywriter**
> promotionCreativeDeleteCreativeCopywriter($creative_code, $version, $copywriter_code)

Deletes the specified creative copywriter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionCreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creative_code = "creative_code_example"; // string | The creative code to delete the copywriter from
$version = 56; // int | The creative version to delete the copywriter from
$copywriter_code = "copywriter_code_example"; // string | The copywriter code to delete

try {
    $apiInstance->promotionCreativeDeleteCreativeCopywriter($creative_code, $version, $copywriter_code);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCreativeApi->promotionCreativeDeleteCreativeCopywriter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creative_code** | **string**| The creative code to delete the copywriter from |
 **version** | **int**| The creative version to delete the copywriter from |
 **copywriter_code** | **string**| The copywriter code to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionCreativeDeleteCreativeDocument**
> promotionCreativeDeleteCreativeDocument($creative_code, $version, $document_sequence)

Deletes the specified creative document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionCreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creative_code = "creative_code_example"; // string | The creative code to delete the document from
$version = 56; // int | The creative version to delete the document from
$document_sequence = 56; // int | The document sequence number identifying the document to delete

try {
    $apiInstance->promotionCreativeDeleteCreativeDocument($creative_code, $version, $document_sequence);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCreativeApi->promotionCreativeDeleteCreativeDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creative_code** | **string**| The creative code to delete the document from |
 **version** | **int**| The creative version to delete the document from |
 **document_sequence** | **int**| The document sequence number identifying the document to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionCreativeGet**
> \Swagger\Client\Model\PromotionCreative promotionCreativeGet($creative_code, $version)

Get an existing promotion creative.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionCreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creative_code = "creative_code_example"; // string | The creative code of the desired creative.
$version = 56; // int | The version number for the promotion creative desired.

try {
    $result = $apiInstance->promotionCreativeGet($creative_code, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCreativeApi->promotionCreativeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creative_code** | **string**| The creative code of the desired creative. |
 **version** | **int**| The version number for the promotion creative desired. |

### Return type

[**\Swagger\Client\Model\PromotionCreative**](../Model/PromotionCreative.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionCreativeUpdate**
> promotionCreativeUpdate($creative_code, $version, $promotion_creative_update_request)

Updates an existing promotion creative.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionCreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creative_code = "creative_code_example"; // string | The creative code of the creative to be updated.
$version = 56; // int | The version number for the promotion creative to be updated.
$promotion_creative_update_request = new \Swagger\Client\Model\PromotionCreativeUpdateRequest(); // \Swagger\Client\Model\PromotionCreativeUpdateRequest | Creative update request object containing only values to be updated

try {
    $apiInstance->promotionCreativeUpdate($creative_code, $version, $promotion_creative_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCreativeApi->promotionCreativeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creative_code** | **string**| The creative code of the creative to be updated. |
 **version** | **int**| The version number for the promotion creative to be updated. |
 **promotion_creative_update_request** | [**\Swagger\Client\Model\PromotionCreativeUpdateRequest**](../Model/PromotionCreativeUpdateRequest.md)| Creative update request object containing only values to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

