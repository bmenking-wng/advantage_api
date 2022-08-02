# Swagger\Client\PublicationApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publicationGetAutoRenewalChains**](PublicationApi.md#publicationGetAutoRenewalChains) | **GET** /publications/{publicationCode}/auto-renewal-chains | Get the available auto-renewal chains for a publication.
[**publicationGetDeliveryMethods**](PublicationApi.md#publicationGetDeliveryMethods) | **GET** /publications/{publicationCode}/delivery-methods | Get the valid delivery codes for a publication.
[**publicationGetIssue**](PublicationApi.md#publicationGetIssue) | **GET** /publications/{publicationCode}/issues/{issueDate} | Gets information about a particular issue for a publication.
[**publicationGetIssueGroups**](PublicationApi.md#publicationGetIssueGroups) | **GET** /publications/{publicationCode}/issue-groups | Get the valid issue groups.
[**publicationGetIssues**](PublicationApi.md#publicationGetIssues) | **GET** /publications/{publicationCode}/issues | Get the issues of a publication.
[**publicationGetIssues_0**](PublicationApi.md#publicationGetIssues_0) | **GET** /publications/{publicationCode}/issue-groups/{issueGroupCode}/issues | Get the issues of a publication with-in the given issue group.


# **publicationGetAutoRenewalChains**
> \Swagger\Client\Model\SearchResultSubscriptionAutoRenewalChain publicationGetAutoRenewalChains($publication_code)

Get the available auto-renewal chains for a publication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication_code = "publication_code_example"; // string | The publication code of the publication who's auto-renewal               chains will be returned.

try {
    $result = $apiInstance->publicationGetAutoRenewalChains($publication_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationApi->publicationGetAutoRenewalChains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication_code** | **string**| The publication code of the publication who&#39;s auto-renewal               chains will be returned. |

### Return type

[**\Swagger\Client\Model\SearchResultSubscriptionAutoRenewalChain**](../Model/SearchResultSubscriptionAutoRenewalChain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationGetDeliveryMethods**
> \Swagger\Client\Model\SearchResultDeliveryMethod publicationGetDeliveryMethods($publication_code, $billing_currency, $promotion_code, $customer_number, $billing_currency_not_equal, $billing_currency_less, $billing_currency_less_or_equal, $billing_currency_greater, $billing_currency_greater_or_equal, $billing_currency_is_null, $billing_currency_is_not_null, $billing_currency_like, $billing_currency_not_like, $billing_currency_contains, $billing_currency_not_contains, $billing_currency_starts_with, $billing_currency_not_starts_with, $billing_currency_ends_with, $billing_currency_not_ends_with, $billing_currency_in, $billing_currency_between, $promotion_code_not_equal, $promotion_code_less, $promotion_code_less_or_equal, $promotion_code_greater, $promotion_code_greater_or_equal, $promotion_code_is_null, $promotion_code_is_not_null, $promotion_code_like, $promotion_code_not_like, $promotion_code_contains, $promotion_code_not_contains, $promotion_code_starts_with, $promotion_code_not_starts_with, $promotion_code_ends_with, $promotion_code_not_ends_with, $promotion_code_in, $promotion_code_between, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between)

Get the valid delivery codes for a publication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication_code = "publication_code_example"; // string | The publication code of the publication who's delivery codes are to be returned.
$billing_currency = "billing_currency_example"; // string | Filter on BIL-CUR using 'Equal' operator
$promotion_code = "promotion_code_example"; // string | Filter on PMO-CDE using 'Equal' operator
$customer_number = "customer_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$billing_currency_not_equal = "billing_currency_not_equal_example"; // string | Filter on BIL-CUR using 'NotEqual' operator
$billing_currency_less = "billing_currency_less_example"; // string | Filter on BIL-CUR using 'Less' operator
$billing_currency_less_or_equal = "billing_currency_less_or_equal_example"; // string | Filter on BIL-CUR using 'LessOrEqual' operator
$billing_currency_greater = "billing_currency_greater_example"; // string | Filter on BIL-CUR using 'Greater' operator
$billing_currency_greater_or_equal = "billing_currency_greater_or_equal_example"; // string | Filter on BIL-CUR using 'GreaterOrEqual' operator
$billing_currency_is_null = "billing_currency_is_null_example"; // string | Filter on BIL-CUR using 'IsNull' operator
$billing_currency_is_not_null = "billing_currency_is_not_null_example"; // string | Filter on BIL-CUR using 'IsNotNull' operator
$billing_currency_like = "billing_currency_like_example"; // string | Filter on BIL-CUR using 'Like' operator
$billing_currency_not_like = "billing_currency_not_like_example"; // string | Filter on BIL-CUR using 'NotLike' operator
$billing_currency_contains = "billing_currency_contains_example"; // string | Filter on BIL-CUR using 'Contains' operator
$billing_currency_not_contains = "billing_currency_not_contains_example"; // string | Filter on BIL-CUR using 'NotContains' operator
$billing_currency_starts_with = "billing_currency_starts_with_example"; // string | Filter on BIL-CUR using 'StartsWith' operator
$billing_currency_not_starts_with = "billing_currency_not_starts_with_example"; // string | Filter on BIL-CUR using 'NotStartsWith' operator
$billing_currency_ends_with = "billing_currency_ends_with_example"; // string | Filter on BIL-CUR using 'EndsWith' operator
$billing_currency_not_ends_with = "billing_currency_not_ends_with_example"; // string | Filter on BIL-CUR using 'NotEndsWith' operator
$billing_currency_in = "billing_currency_in_example"; // string | Filter on BIL-CUR using 'In' operator
$billing_currency_between = "billing_currency_between_example"; // string | Filter on BIL-CUR using 'Between' operator
$promotion_code_not_equal = "promotion_code_not_equal_example"; // string | Filter on PMO-CDE using 'NotEqual' operator
$promotion_code_less = "promotion_code_less_example"; // string | Filter on PMO-CDE using 'Less' operator
$promotion_code_less_or_equal = "promotion_code_less_or_equal_example"; // string | Filter on PMO-CDE using 'LessOrEqual' operator
$promotion_code_greater = "promotion_code_greater_example"; // string | Filter on PMO-CDE using 'Greater' operator
$promotion_code_greater_or_equal = "promotion_code_greater_or_equal_example"; // string | Filter on PMO-CDE using 'GreaterOrEqual' operator
$promotion_code_is_null = "promotion_code_is_null_example"; // string | Filter on PMO-CDE using 'IsNull' operator
$promotion_code_is_not_null = "promotion_code_is_not_null_example"; // string | Filter on PMO-CDE using 'IsNotNull' operator
$promotion_code_like = "promotion_code_like_example"; // string | Filter on PMO-CDE using 'Like' operator
$promotion_code_not_like = "promotion_code_not_like_example"; // string | Filter on PMO-CDE using 'NotLike' operator
$promotion_code_contains = "promotion_code_contains_example"; // string | Filter on PMO-CDE using 'Contains' operator
$promotion_code_not_contains = "promotion_code_not_contains_example"; // string | Filter on PMO-CDE using 'NotContains' operator
$promotion_code_starts_with = "promotion_code_starts_with_example"; // string | Filter on PMO-CDE using 'StartsWith' operator
$promotion_code_not_starts_with = "promotion_code_not_starts_with_example"; // string | Filter on PMO-CDE using 'NotStartsWith' operator
$promotion_code_ends_with = "promotion_code_ends_with_example"; // string | Filter on PMO-CDE using 'EndsWith' operator
$promotion_code_not_ends_with = "promotion_code_not_ends_with_example"; // string | Filter on PMO-CDE using 'NotEndsWith' operator
$promotion_code_in = "promotion_code_in_example"; // string | Filter on PMO-CDE using 'In' operator
$promotion_code_between = "promotion_code_between_example"; // string | Filter on PMO-CDE using 'Between' operator
$customer_number_not_equal = "customer_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$customer_number_less = "customer_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$customer_number_less_or_equal = "customer_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$customer_number_greater = "customer_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$customer_number_greater_or_equal = "customer_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$customer_number_is_null = "customer_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$customer_number_is_not_null = "customer_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$customer_number_like = "customer_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$customer_number_not_like = "customer_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$customer_number_contains = "customer_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$customer_number_not_contains = "customer_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$customer_number_starts_with = "customer_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$customer_number_not_starts_with = "customer_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$customer_number_ends_with = "customer_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$customer_number_not_ends_with = "customer_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$customer_number_in = "customer_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$customer_number_between = "customer_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator

try {
    $result = $apiInstance->publicationGetDeliveryMethods($publication_code, $billing_currency, $promotion_code, $customer_number, $billing_currency_not_equal, $billing_currency_less, $billing_currency_less_or_equal, $billing_currency_greater, $billing_currency_greater_or_equal, $billing_currency_is_null, $billing_currency_is_not_null, $billing_currency_like, $billing_currency_not_like, $billing_currency_contains, $billing_currency_not_contains, $billing_currency_starts_with, $billing_currency_not_starts_with, $billing_currency_ends_with, $billing_currency_not_ends_with, $billing_currency_in, $billing_currency_between, $promotion_code_not_equal, $promotion_code_less, $promotion_code_less_or_equal, $promotion_code_greater, $promotion_code_greater_or_equal, $promotion_code_is_null, $promotion_code_is_not_null, $promotion_code_like, $promotion_code_not_like, $promotion_code_contains, $promotion_code_not_contains, $promotion_code_starts_with, $promotion_code_not_starts_with, $promotion_code_ends_with, $promotion_code_not_ends_with, $promotion_code_in, $promotion_code_between, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationApi->publicationGetDeliveryMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication_code** | **string**| The publication code of the publication who&#39;s delivery codes are to be returned. |
 **billing_currency** | **string**| Filter on BIL-CUR using &#39;Equal&#39; operator | [optional]
 **promotion_code** | **string**| Filter on PMO-CDE using &#39;Equal&#39; operator | [optional]
 **customer_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **billing_currency_not_equal** | **string**| Filter on BIL-CUR using &#39;NotEqual&#39; operator | [optional]
 **billing_currency_less** | **string**| Filter on BIL-CUR using &#39;Less&#39; operator | [optional]
 **billing_currency_less_or_equal** | **string**| Filter on BIL-CUR using &#39;LessOrEqual&#39; operator | [optional]
 **billing_currency_greater** | **string**| Filter on BIL-CUR using &#39;Greater&#39; operator | [optional]
 **billing_currency_greater_or_equal** | **string**| Filter on BIL-CUR using &#39;GreaterOrEqual&#39; operator | [optional]
 **billing_currency_is_null** | **string**| Filter on BIL-CUR using &#39;IsNull&#39; operator | [optional]
 **billing_currency_is_not_null** | **string**| Filter on BIL-CUR using &#39;IsNotNull&#39; operator | [optional]
 **billing_currency_like** | **string**| Filter on BIL-CUR using &#39;Like&#39; operator | [optional]
 **billing_currency_not_like** | **string**| Filter on BIL-CUR using &#39;NotLike&#39; operator | [optional]
 **billing_currency_contains** | **string**| Filter on BIL-CUR using &#39;Contains&#39; operator | [optional]
 **billing_currency_not_contains** | **string**| Filter on BIL-CUR using &#39;NotContains&#39; operator | [optional]
 **billing_currency_starts_with** | **string**| Filter on BIL-CUR using &#39;StartsWith&#39; operator | [optional]
 **billing_currency_not_starts_with** | **string**| Filter on BIL-CUR using &#39;NotStartsWith&#39; operator | [optional]
 **billing_currency_ends_with** | **string**| Filter on BIL-CUR using &#39;EndsWith&#39; operator | [optional]
 **billing_currency_not_ends_with** | **string**| Filter on BIL-CUR using &#39;NotEndsWith&#39; operator | [optional]
 **billing_currency_in** | **string**| Filter on BIL-CUR using &#39;In&#39; operator | [optional]
 **billing_currency_between** | **string**| Filter on BIL-CUR using &#39;Between&#39; operator | [optional]
 **promotion_code_not_equal** | **string**| Filter on PMO-CDE using &#39;NotEqual&#39; operator | [optional]
 **promotion_code_less** | **string**| Filter on PMO-CDE using &#39;Less&#39; operator | [optional]
 **promotion_code_less_or_equal** | **string**| Filter on PMO-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **promotion_code_greater** | **string**| Filter on PMO-CDE using &#39;Greater&#39; operator | [optional]
 **promotion_code_greater_or_equal** | **string**| Filter on PMO-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **promotion_code_is_null** | **string**| Filter on PMO-CDE using &#39;IsNull&#39; operator | [optional]
 **promotion_code_is_not_null** | **string**| Filter on PMO-CDE using &#39;IsNotNull&#39; operator | [optional]
 **promotion_code_like** | **string**| Filter on PMO-CDE using &#39;Like&#39; operator | [optional]
 **promotion_code_not_like** | **string**| Filter on PMO-CDE using &#39;NotLike&#39; operator | [optional]
 **promotion_code_contains** | **string**| Filter on PMO-CDE using &#39;Contains&#39; operator | [optional]
 **promotion_code_not_contains** | **string**| Filter on PMO-CDE using &#39;NotContains&#39; operator | [optional]
 **promotion_code_starts_with** | **string**| Filter on PMO-CDE using &#39;StartsWith&#39; operator | [optional]
 **promotion_code_not_starts_with** | **string**| Filter on PMO-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **promotion_code_ends_with** | **string**| Filter on PMO-CDE using &#39;EndsWith&#39; operator | [optional]
 **promotion_code_not_ends_with** | **string**| Filter on PMO-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **promotion_code_in** | **string**| Filter on PMO-CDE using &#39;In&#39; operator | [optional]
 **promotion_code_between** | **string**| Filter on PMO-CDE using &#39;Between&#39; operator | [optional]
 **customer_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **customer_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **customer_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **customer_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **customer_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **customer_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **customer_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **customer_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **customer_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **customer_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **customer_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **customer_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **customer_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **customer_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **customer_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **customer_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **customer_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultDeliveryMethod**](../Model/SearchResultDeliveryMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationGetIssue**
> \Swagger\Client\Model\Issue publicationGetIssue($publication_code, $issue_date)

Gets information about a particular issue for a publication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication_code = "publication_code_example"; // string | The publication code of the desired publication.
$issue_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The issue date of the issue to get the name for. This is string formatted as yyyy-MM-dd.

try {
    $result = $apiInstance->publicationGetIssue($publication_code, $issue_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationApi->publicationGetIssue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication_code** | **string**| The publication code of the desired publication. |
 **issue_date** | **\DateTime**| The issue date of the issue to get the name for. This is string formatted as yyyy-MM-dd. |

### Return type

[**\Swagger\Client\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationGetIssueGroups**
> \Swagger\Client\Model\SearchResultIssueGroup publicationGetIssueGroups($publication_code)

Get the valid issue groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication_code = "publication_code_example"; // string | 

try {
    $result = $apiInstance->publicationGetIssueGroups($publication_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationApi->publicationGetIssueGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\SearchResultIssueGroup**](../Model/SearchResultIssueGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationGetIssues**
> \Swagger\Client\Model\SearchResultIssue publicationGetIssues($publication_code)

Get the issues of a publication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication_code = "publication_code_example"; // string | The publication code of the desired issues' publication.

try {
    $result = $apiInstance->publicationGetIssues($publication_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationApi->publicationGetIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication_code** | **string**| The publication code of the desired issues&#39; publication. |

### Return type

[**\Swagger\Client\Model\SearchResultIssue**](../Model/SearchResultIssue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationGetIssues_0**
> \Swagger\Client\Model\SearchResultIssue publicationGetIssues_0($publication_code, $issue_group_code)

Get the issues of a publication with-in the given issue group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publication_code = "publication_code_example"; // string | The publication code
$issue_group_code = "issue_group_code_example"; // string | The publication issue group

try {
    $result = $apiInstance->publicationGetIssues_0($publication_code, $issue_group_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationApi->publicationGetIssues_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **publication_code** | **string**| The publication code |
 **issue_group_code** | **string**| The publication issue group |

### Return type

[**\Swagger\Client\Model\SearchResultIssue**](../Model/SearchResultIssue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

