# Swagger\Client\QuestionnaireApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**questionnaireGet**](QuestionnaireApi.md#questionnaireGet) | **GET** /questionnaires/{questionnaireCode} | Gets the questionnaire.  Some questionnaires will carry forward the customer&#39;s previous   responses to use as the defaults when the questionnaire is presented a second time.  This   feature is supported only if you provide the optional profile ID parameter.


# **questionnaireGet**
> \Swagger\Client\Model\Questionnaire questionnaireGet($questionnaire_code, $profile_id)

Gets the questionnaire.  Some questionnaires will carry forward the customer's previous   responses to use as the defaults when the questionnaire is presented a second time.  This   feature is supported only if you provide the optional profile ID parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuestionnaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$questionnaire_code = "questionnaire_code_example"; // string | The questionnaire to return
$profile_id = "profile_id_example"; // string | The ID of the profile containing the customer's previous responses,              e.g. the profile (responses) from the customer's previous subscription term.

try {
    $result = $apiInstance->questionnaireGet($questionnaire_code, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireApi->questionnaireGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_code** | **string**| The questionnaire to return |
 **profile_id** | **string**| The ID of the profile containing the customer&#39;s previous responses,              e.g. the profile (responses) from the customer&#39;s previous subscription term. | [optional]

### Return type

[**\Swagger\Client\Model\Questionnaire**](../Model/Questionnaire.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

