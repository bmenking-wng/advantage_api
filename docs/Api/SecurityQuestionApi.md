# Swagger\Client\SecurityQuestionApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**securityQuestionCreateOrUpdate**](SecurityQuestionApi.md#securityQuestionCreateOrUpdate) | **POST** /security-questions | Create or Update a Security Question from a SecurityQuestion Model
[**securityQuestionGet**](SecurityQuestionApi.md#securityQuestionGet) | **GET** /security-questions/{code} | Gets Security Questions.
[**securityQuestionGet_0**](SecurityQuestionApi.md#securityQuestionGet_0) | **GET** /security-questions | Gets List of Security Questions.
[**securityQuestionRemove**](SecurityQuestionApi.md#securityQuestionRemove) | **DELETE** /security-questions/{code} | Removes a Question Code
[**securityQuestionUpdate**](SecurityQuestionApi.md#securityQuestionUpdate) | **POST** /security-questions/{code} | Update a Security Question with a new Question Prompt


# **securityQuestionCreateOrUpdate**
> \Swagger\Client\Model\SecurityQuestion securityQuestionCreateOrUpdate($security_question_in)

Create or Update a Security Question from a SecurityQuestion Model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityQuestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$security_question_in = new \Swagger\Client\Model\SecurityQuestion(); // \Swagger\Client\Model\SecurityQuestion | Model to Create/Update Security Question

try {
    $result = $apiInstance->securityQuestionCreateOrUpdate($security_question_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityQuestionApi->securityQuestionCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **security_question_in** | [**\Swagger\Client\Model\SecurityQuestion**](../Model/SecurityQuestion.md)| Model to Create/Update Security Question |

### Return type

[**\Swagger\Client\Model\SecurityQuestion**](../Model/SecurityQuestion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **securityQuestionGet**
> \Swagger\Client\Model\SecurityQuestion securityQuestionGet($code)

Gets Security Questions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityQuestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Question Code

try {
    $result = $apiInstance->securityQuestionGet($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityQuestionApi->securityQuestionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Question Code |

### Return type

[**\Swagger\Client\Model\SecurityQuestion**](../Model/SecurityQuestion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **securityQuestionGet_0**
> \Swagger\Client\Model\SecurityQuestion[] securityQuestionGet_0()

Gets List of Security Questions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityQuestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->securityQuestionGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityQuestionApi->securityQuestionGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SecurityQuestion[]**](../Model/SecurityQuestion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **securityQuestionRemove**
> securityQuestionRemove($code)

Removes a Question Code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityQuestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | The code that identifies the question to be deleted.

try {
    $apiInstance->securityQuestionRemove($code);
} catch (Exception $e) {
    echo 'Exception when calling SecurityQuestionApi->securityQuestionRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The code that identifies the question to be deleted. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **securityQuestionUpdate**
> \Swagger\Client\Model\SecurityQuestion securityQuestionUpdate($code, $security_question_update_request)

Update a Security Question with a new Question Prompt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityQuestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Code of Security Question to be updated
$security_question_update_request = new \Swagger\Client\Model\SecurityQuestionUpdateRequest(); // \Swagger\Client\Model\SecurityQuestionUpdateRequest | Question Prompt to update the Security Question with

try {
    $result = $apiInstance->securityQuestionUpdate($code, $security_question_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityQuestionApi->securityQuestionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of Security Question to be updated |
 **security_question_update_request** | [**\Swagger\Client\Model\SecurityQuestionUpdateRequest**](../Model/SecurityQuestionUpdateRequest.md)| Question Prompt to update the Security Question with |

### Return type

[**\Swagger\Client\Model\SecurityQuestion**](../Model/SecurityQuestion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

