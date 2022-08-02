# Swagger\Client\SubscriptionApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionBillSuspend**](SubscriptionApi.md#subscriptionBillSuspend) | **POST** /subscriptions/{subscriptionId}/bill-suspend | Bill Suspend a subscription.
[**subscriptionCancel**](SubscriptionApi.md#subscriptionCancel) | **POST** /subscriptions/{subscriptionId}/cancel | Cancel a subscription.
[**subscriptionGet**](SubscriptionApi.md#subscriptionGet) | **GET** /subscriptions/{subscriptionId} | Get a single subscription identified by subscriptionId.
[**subscriptionGetRelatedTerms**](SubscriptionApi.md#subscriptionGetRelatedTerms) | **GET** /subscriptions/{subscriptionId}/related-terms | Gets all related terms for the given subscription.  A related term can be all subscriptions that are   part of the same package plus their future terms, or a single subscription and its future terms.  For a package subscription, the subscriptions are returned in the order they were added.  For an individual subscription, the future terms are returned after the current term in term order.
[**subscriptionNonPayCancel**](SubscriptionApi.md#subscriptionNonPayCancel) | **POST** /subscriptions/{subscriptionId}/non-pay-cancel | Create non-pay cancel transaction for a subscription
[**subscriptionSearch**](SubscriptionApi.md#subscriptionSearch) | **GET** /subscriptions | Gets subscriptions matching the filter criteria. Filters are passed as a URI parameter in the format &amp;lt;Field&amp;gt;.&amp;lt;Operator&amp;gt;&#x3D;&amp;lt;Value&amp;gt;.  For example, /subscriptions?PublicationCode.CN&#x3D;AB or /subscriptions?PublicationCode.EQ&#x3D;ABC&amp;amp;CustomerNumber.EQ&#x3D;1
[**subscriptionSuspend**](SubscriptionApi.md#subscriptionSuspend) | **POST** /subscriptions/{subscriptionId}/suspend | Suspend a subscription. This can be for a specified start and end issue, or a more generic \&quot;begin at   the next issue, open-ended\&quot; if you leave the start and end date blank in the request.
[**subscriptionUpdate**](SubscriptionApi.md#subscriptionUpdate) | **POST** /subscriptions/{subscriptionId} | Update an existing subscription.


# **subscriptionBillSuspend**
> subscriptionBillSuspend($subscription_id)

Bill Suspend a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = "subscription_id_example"; // string | The subscription ID of the subscription to update.

try {
    $apiInstance->subscriptionBillSuspend($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionBillSuspend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The subscription ID of the subscription to update. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionCancel**
> subscriptionCancel($subscription_id, $cancel_subscription_request)

Cancel a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = "subscription_id_example"; // string | The subscriptionId of the subscription to be canceled.
$cancel_subscription_request = new \Swagger\Client\Model\CancelSubscriptionRequest(); // \Swagger\Client\Model\CancelSubscriptionRequest | A CancelSubscriptionRequest object.

try {
    $apiInstance->subscriptionCancel($subscription_id, $cancel_subscription_request);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The subscriptionId of the subscription to be canceled. |
 **cancel_subscription_request** | [**\Swagger\Client\Model\CancelSubscriptionRequest**](../Model/CancelSubscriptionRequest.md)| A CancelSubscriptionRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionGet**
> \Swagger\Client\Model\Subscription subscriptionGet($subscription_id)

Get a single subscription identified by subscriptionId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = "subscription_id_example"; // string | Subscription Id/Reference.

try {
    $result = $apiInstance->subscriptionGet($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| Subscription Id/Reference. |

### Return type

[**\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionGetRelatedTerms**
> \Swagger\Client\Model\SearchResultSubscription subscriptionGetRelatedTerms($subscription_id)

Gets all related terms for the given subscription.  A related term can be all subscriptions that are   part of the same package plus their future terms, or a single subscription and its future terms.  For a package subscription, the subscriptions are returned in the order they were added.  For an individual subscription, the future terms are returned after the current term in term order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = "subscription_id_example"; // string | Subscription Id/Reference.

try {
    $result = $apiInstance->subscriptionGetRelatedTerms($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionGetRelatedTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| Subscription Id/Reference. |

### Return type

[**\Swagger\Client\Model\SearchResultSubscription**](../Model/SearchResultSubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionNonPayCancel**
> subscriptionNonPayCancel($subscription_id)

Create non-pay cancel transaction for a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = "subscription_id_example"; // string | The subscription ID of the subscription to update.

try {
    $apiInstance->subscriptionNonPayCancel($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionNonPayCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The subscription ID of the subscription to update. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSearch**
> \Swagger\Client\Model\SearchResultSubscription subscriptionSearch($pager_skip, $pager_take, $publication_code, $ship_to_customer_number, $subscription_id, $bill_to_customer_number, $referred_by_customer_number, $owning_organization_code, $circulation_status, $publication_code_not_equal, $publication_code_less, $publication_code_less_or_equal, $publication_code_greater, $publication_code_greater_or_equal, $publication_code_is_null, $publication_code_is_not_null, $publication_code_like, $publication_code_not_like, $publication_code_contains, $publication_code_not_contains, $publication_code_starts_with, $publication_code_not_starts_with, $publication_code_ends_with, $publication_code_not_ends_with, $publication_code_in, $publication_code_between, $ship_to_customer_number_not_equal, $ship_to_customer_number_less, $ship_to_customer_number_less_or_equal, $ship_to_customer_number_greater, $ship_to_customer_number_greater_or_equal, $ship_to_customer_number_is_null, $ship_to_customer_number_is_not_null, $ship_to_customer_number_like, $ship_to_customer_number_not_like, $ship_to_customer_number_contains, $ship_to_customer_number_not_contains, $ship_to_customer_number_starts_with, $ship_to_customer_number_not_starts_with, $ship_to_customer_number_ends_with, $ship_to_customer_number_not_ends_with, $ship_to_customer_number_in, $ship_to_customer_number_between, $subscription_id_not_equal, $subscription_id_less, $subscription_id_less_or_equal, $subscription_id_greater, $subscription_id_greater_or_equal, $subscription_id_is_null, $subscription_id_is_not_null, $subscription_id_like, $subscription_id_not_like, $subscription_id_contains, $subscription_id_not_contains, $subscription_id_starts_with, $subscription_id_not_starts_with, $subscription_id_ends_with, $subscription_id_not_ends_with, $subscription_id_in, $subscription_id_between, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $referred_by_customer_number_not_equal, $referred_by_customer_number_less, $referred_by_customer_number_less_or_equal, $referred_by_customer_number_greater, $referred_by_customer_number_greater_or_equal, $referred_by_customer_number_is_null, $referred_by_customer_number_is_not_null, $referred_by_customer_number_like, $referred_by_customer_number_not_like, $referred_by_customer_number_contains, $referred_by_customer_number_not_contains, $referred_by_customer_number_starts_with, $referred_by_customer_number_not_starts_with, $referred_by_customer_number_ends_with, $referred_by_customer_number_not_ends_with, $referred_by_customer_number_in, $referred_by_customer_number_between, $owning_organization_code_not_equal, $owning_organization_code_less, $owning_organization_code_less_or_equal, $owning_organization_code_greater, $owning_organization_code_greater_or_equal, $owning_organization_code_is_null, $owning_organization_code_is_not_null, $owning_organization_code_like, $owning_organization_code_not_like, $owning_organization_code_contains, $owning_organization_code_not_contains, $owning_organization_code_starts_with, $owning_organization_code_not_starts_with, $owning_organization_code_ends_with, $owning_organization_code_not_ends_with, $owning_organization_code_in, $owning_organization_code_between, $circulation_status_not_equal, $circulation_status_less, $circulation_status_less_or_equal, $circulation_status_greater, $circulation_status_greater_or_equal, $circulation_status_is_null, $circulation_status_is_not_null, $circulation_status_like, $circulation_status_not_like, $circulation_status_contains, $circulation_status_not_contains, $circulation_status_starts_with, $circulation_status_not_starts_with, $circulation_status_ends_with, $circulation_status_not_ends_with, $circulation_status_in, $circulation_status_between)

Gets subscriptions matching the filter criteria. Filters are passed as a URI parameter in the format &lt;Field&gt;.&lt;Operator&gt;=&lt;Value&gt;.  For example, /subscriptions?PublicationCode.CN=AB or /subscriptions?PublicationCode.EQ=ABC&amp;CustomerNumber.EQ=1

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$publication_code = "publication_code_example"; // string | Filter on PUB-CDE using 'Equal' operator
$ship_to_customer_number = "ship_to_customer_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$subscription_id = "subscription_id_example"; // string | Filter on SUB-REF using 'Equal' operator
$bill_to_customer_number = "bill_to_customer_number_example"; // string | Filter on DNR-NBR using 'Equal' operator
$referred_by_customer_number = "referred_by_customer_number_example"; // string | Filter on REF-CTM using 'Equal' operator
$owning_organization_code = "owning_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$circulation_status = "circulation_status_example"; // string | Filter on CRC-STS using 'Equal' operator
$publication_code_not_equal = "publication_code_not_equal_example"; // string | Filter on PUB-CDE using 'NotEqual' operator
$publication_code_less = "publication_code_less_example"; // string | Filter on PUB-CDE using 'Less' operator
$publication_code_less_or_equal = "publication_code_less_or_equal_example"; // string | Filter on PUB-CDE using 'LessOrEqual' operator
$publication_code_greater = "publication_code_greater_example"; // string | Filter on PUB-CDE using 'Greater' operator
$publication_code_greater_or_equal = "publication_code_greater_or_equal_example"; // string | Filter on PUB-CDE using 'GreaterOrEqual' operator
$publication_code_is_null = "publication_code_is_null_example"; // string | Filter on PUB-CDE using 'IsNull' operator
$publication_code_is_not_null = "publication_code_is_not_null_example"; // string | Filter on PUB-CDE using 'IsNotNull' operator
$publication_code_like = "publication_code_like_example"; // string | Filter on PUB-CDE using 'Like' operator
$publication_code_not_like = "publication_code_not_like_example"; // string | Filter on PUB-CDE using 'NotLike' operator
$publication_code_contains = "publication_code_contains_example"; // string | Filter on PUB-CDE using 'Contains' operator
$publication_code_not_contains = "publication_code_not_contains_example"; // string | Filter on PUB-CDE using 'NotContains' operator
$publication_code_starts_with = "publication_code_starts_with_example"; // string | Filter on PUB-CDE using 'StartsWith' operator
$publication_code_not_starts_with = "publication_code_not_starts_with_example"; // string | Filter on PUB-CDE using 'NotStartsWith' operator
$publication_code_ends_with = "publication_code_ends_with_example"; // string | Filter on PUB-CDE using 'EndsWith' operator
$publication_code_not_ends_with = "publication_code_not_ends_with_example"; // string | Filter on PUB-CDE using 'NotEndsWith' operator
$publication_code_in = "publication_code_in_example"; // string | Filter on PUB-CDE using 'In' operator
$publication_code_between = "publication_code_between_example"; // string | Filter on PUB-CDE using 'Between' operator
$ship_to_customer_number_not_equal = "ship_to_customer_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$ship_to_customer_number_less = "ship_to_customer_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$ship_to_customer_number_less_or_equal = "ship_to_customer_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$ship_to_customer_number_greater = "ship_to_customer_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$ship_to_customer_number_greater_or_equal = "ship_to_customer_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$ship_to_customer_number_is_null = "ship_to_customer_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$ship_to_customer_number_is_not_null = "ship_to_customer_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$ship_to_customer_number_like = "ship_to_customer_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$ship_to_customer_number_not_like = "ship_to_customer_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$ship_to_customer_number_contains = "ship_to_customer_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$ship_to_customer_number_not_contains = "ship_to_customer_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$ship_to_customer_number_starts_with = "ship_to_customer_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$ship_to_customer_number_not_starts_with = "ship_to_customer_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$ship_to_customer_number_ends_with = "ship_to_customer_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$ship_to_customer_number_not_ends_with = "ship_to_customer_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$ship_to_customer_number_in = "ship_to_customer_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$ship_to_customer_number_between = "ship_to_customer_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$subscription_id_not_equal = "subscription_id_not_equal_example"; // string | Filter on SUB-REF using 'NotEqual' operator
$subscription_id_less = "subscription_id_less_example"; // string | Filter on SUB-REF using 'Less' operator
$subscription_id_less_or_equal = "subscription_id_less_or_equal_example"; // string | Filter on SUB-REF using 'LessOrEqual' operator
$subscription_id_greater = "subscription_id_greater_example"; // string | Filter on SUB-REF using 'Greater' operator
$subscription_id_greater_or_equal = "subscription_id_greater_or_equal_example"; // string | Filter on SUB-REF using 'GreaterOrEqual' operator
$subscription_id_is_null = "subscription_id_is_null_example"; // string | Filter on SUB-REF using 'IsNull' operator
$subscription_id_is_not_null = "subscription_id_is_not_null_example"; // string | Filter on SUB-REF using 'IsNotNull' operator
$subscription_id_like = "subscription_id_like_example"; // string | Filter on SUB-REF using 'Like' operator
$subscription_id_not_like = "subscription_id_not_like_example"; // string | Filter on SUB-REF using 'NotLike' operator
$subscription_id_contains = "subscription_id_contains_example"; // string | Filter on SUB-REF using 'Contains' operator
$subscription_id_not_contains = "subscription_id_not_contains_example"; // string | Filter on SUB-REF using 'NotContains' operator
$subscription_id_starts_with = "subscription_id_starts_with_example"; // string | Filter on SUB-REF using 'StartsWith' operator
$subscription_id_not_starts_with = "subscription_id_not_starts_with_example"; // string | Filter on SUB-REF using 'NotStartsWith' operator
$subscription_id_ends_with = "subscription_id_ends_with_example"; // string | Filter on SUB-REF using 'EndsWith' operator
$subscription_id_not_ends_with = "subscription_id_not_ends_with_example"; // string | Filter on SUB-REF using 'NotEndsWith' operator
$subscription_id_in = "subscription_id_in_example"; // string | Filter on SUB-REF using 'In' operator
$subscription_id_between = "subscription_id_between_example"; // string | Filter on SUB-REF using 'Between' operator
$bill_to_customer_number_not_equal = "bill_to_customer_number_not_equal_example"; // string | Filter on DNR-NBR using 'NotEqual' operator
$bill_to_customer_number_less = "bill_to_customer_number_less_example"; // string | Filter on DNR-NBR using 'Less' operator
$bill_to_customer_number_less_or_equal = "bill_to_customer_number_less_or_equal_example"; // string | Filter on DNR-NBR using 'LessOrEqual' operator
$bill_to_customer_number_greater = "bill_to_customer_number_greater_example"; // string | Filter on DNR-NBR using 'Greater' operator
$bill_to_customer_number_greater_or_equal = "bill_to_customer_number_greater_or_equal_example"; // string | Filter on DNR-NBR using 'GreaterOrEqual' operator
$bill_to_customer_number_is_null = "bill_to_customer_number_is_null_example"; // string | Filter on DNR-NBR using 'IsNull' operator
$bill_to_customer_number_is_not_null = "bill_to_customer_number_is_not_null_example"; // string | Filter on DNR-NBR using 'IsNotNull' operator
$bill_to_customer_number_like = "bill_to_customer_number_like_example"; // string | Filter on DNR-NBR using 'Like' operator
$bill_to_customer_number_not_like = "bill_to_customer_number_not_like_example"; // string | Filter on DNR-NBR using 'NotLike' operator
$bill_to_customer_number_contains = "bill_to_customer_number_contains_example"; // string | Filter on DNR-NBR using 'Contains' operator
$bill_to_customer_number_not_contains = "bill_to_customer_number_not_contains_example"; // string | Filter on DNR-NBR using 'NotContains' operator
$bill_to_customer_number_starts_with = "bill_to_customer_number_starts_with_example"; // string | Filter on DNR-NBR using 'StartsWith' operator
$bill_to_customer_number_not_starts_with = "bill_to_customer_number_not_starts_with_example"; // string | Filter on DNR-NBR using 'NotStartsWith' operator
$bill_to_customer_number_ends_with = "bill_to_customer_number_ends_with_example"; // string | Filter on DNR-NBR using 'EndsWith' operator
$bill_to_customer_number_not_ends_with = "bill_to_customer_number_not_ends_with_example"; // string | Filter on DNR-NBR using 'NotEndsWith' operator
$bill_to_customer_number_in = "bill_to_customer_number_in_example"; // string | Filter on DNR-NBR using 'In' operator
$bill_to_customer_number_between = "bill_to_customer_number_between_example"; // string | Filter on DNR-NBR using 'Between' operator
$referred_by_customer_number_not_equal = "referred_by_customer_number_not_equal_example"; // string | Filter on REF-CTM using 'NotEqual' operator
$referred_by_customer_number_less = "referred_by_customer_number_less_example"; // string | Filter on REF-CTM using 'Less' operator
$referred_by_customer_number_less_or_equal = "referred_by_customer_number_less_or_equal_example"; // string | Filter on REF-CTM using 'LessOrEqual' operator
$referred_by_customer_number_greater = "referred_by_customer_number_greater_example"; // string | Filter on REF-CTM using 'Greater' operator
$referred_by_customer_number_greater_or_equal = "referred_by_customer_number_greater_or_equal_example"; // string | Filter on REF-CTM using 'GreaterOrEqual' operator
$referred_by_customer_number_is_null = "referred_by_customer_number_is_null_example"; // string | Filter on REF-CTM using 'IsNull' operator
$referred_by_customer_number_is_not_null = "referred_by_customer_number_is_not_null_example"; // string | Filter on REF-CTM using 'IsNotNull' operator
$referred_by_customer_number_like = "referred_by_customer_number_like_example"; // string | Filter on REF-CTM using 'Like' operator
$referred_by_customer_number_not_like = "referred_by_customer_number_not_like_example"; // string | Filter on REF-CTM using 'NotLike' operator
$referred_by_customer_number_contains = "referred_by_customer_number_contains_example"; // string | Filter on REF-CTM using 'Contains' operator
$referred_by_customer_number_not_contains = "referred_by_customer_number_not_contains_example"; // string | Filter on REF-CTM using 'NotContains' operator
$referred_by_customer_number_starts_with = "referred_by_customer_number_starts_with_example"; // string | Filter on REF-CTM using 'StartsWith' operator
$referred_by_customer_number_not_starts_with = "referred_by_customer_number_not_starts_with_example"; // string | Filter on REF-CTM using 'NotStartsWith' operator
$referred_by_customer_number_ends_with = "referred_by_customer_number_ends_with_example"; // string | Filter on REF-CTM using 'EndsWith' operator
$referred_by_customer_number_not_ends_with = "referred_by_customer_number_not_ends_with_example"; // string | Filter on REF-CTM using 'NotEndsWith' operator
$referred_by_customer_number_in = "referred_by_customer_number_in_example"; // string | Filter on REF-CTM using 'In' operator
$referred_by_customer_number_between = "referred_by_customer_number_between_example"; // string | Filter on REF-CTM using 'Between' operator
$owning_organization_code_not_equal = "owning_organization_code_not_equal_example"; // string | Filter on BIL-ORG using 'NotEqual' operator
$owning_organization_code_less = "owning_organization_code_less_example"; // string | Filter on BIL-ORG using 'Less' operator
$owning_organization_code_less_or_equal = "owning_organization_code_less_or_equal_example"; // string | Filter on BIL-ORG using 'LessOrEqual' operator
$owning_organization_code_greater = "owning_organization_code_greater_example"; // string | Filter on BIL-ORG using 'Greater' operator
$owning_organization_code_greater_or_equal = "owning_organization_code_greater_or_equal_example"; // string | Filter on BIL-ORG using 'GreaterOrEqual' operator
$owning_organization_code_is_null = "owning_organization_code_is_null_example"; // string | Filter on BIL-ORG using 'IsNull' operator
$owning_organization_code_is_not_null = "owning_organization_code_is_not_null_example"; // string | Filter on BIL-ORG using 'IsNotNull' operator
$owning_organization_code_like = "owning_organization_code_like_example"; // string | Filter on BIL-ORG using 'Like' operator
$owning_organization_code_not_like = "owning_organization_code_not_like_example"; // string | Filter on BIL-ORG using 'NotLike' operator
$owning_organization_code_contains = "owning_organization_code_contains_example"; // string | Filter on BIL-ORG using 'Contains' operator
$owning_organization_code_not_contains = "owning_organization_code_not_contains_example"; // string | Filter on BIL-ORG using 'NotContains' operator
$owning_organization_code_starts_with = "owning_organization_code_starts_with_example"; // string | Filter on BIL-ORG using 'StartsWith' operator
$owning_organization_code_not_starts_with = "owning_organization_code_not_starts_with_example"; // string | Filter on BIL-ORG using 'NotStartsWith' operator
$owning_organization_code_ends_with = "owning_organization_code_ends_with_example"; // string | Filter on BIL-ORG using 'EndsWith' operator
$owning_organization_code_not_ends_with = "owning_organization_code_not_ends_with_example"; // string | Filter on BIL-ORG using 'NotEndsWith' operator
$owning_organization_code_in = "owning_organization_code_in_example"; // string | Filter on BIL-ORG using 'In' operator
$owning_organization_code_between = "owning_organization_code_between_example"; // string | Filter on BIL-ORG using 'Between' operator
$circulation_status_not_equal = "circulation_status_not_equal_example"; // string | Filter on CRC-STS using 'NotEqual' operator
$circulation_status_less = "circulation_status_less_example"; // string | Filter on CRC-STS using 'Less' operator
$circulation_status_less_or_equal = "circulation_status_less_or_equal_example"; // string | Filter on CRC-STS using 'LessOrEqual' operator
$circulation_status_greater = "circulation_status_greater_example"; // string | Filter on CRC-STS using 'Greater' operator
$circulation_status_greater_or_equal = "circulation_status_greater_or_equal_example"; // string | Filter on CRC-STS using 'GreaterOrEqual' operator
$circulation_status_is_null = "circulation_status_is_null_example"; // string | Filter on CRC-STS using 'IsNull' operator
$circulation_status_is_not_null = "circulation_status_is_not_null_example"; // string | Filter on CRC-STS using 'IsNotNull' operator
$circulation_status_like = "circulation_status_like_example"; // string | Filter on CRC-STS using 'Like' operator
$circulation_status_not_like = "circulation_status_not_like_example"; // string | Filter on CRC-STS using 'NotLike' operator
$circulation_status_contains = "circulation_status_contains_example"; // string | Filter on CRC-STS using 'Contains' operator
$circulation_status_not_contains = "circulation_status_not_contains_example"; // string | Filter on CRC-STS using 'NotContains' operator
$circulation_status_starts_with = "circulation_status_starts_with_example"; // string | Filter on CRC-STS using 'StartsWith' operator
$circulation_status_not_starts_with = "circulation_status_not_starts_with_example"; // string | Filter on CRC-STS using 'NotStartsWith' operator
$circulation_status_ends_with = "circulation_status_ends_with_example"; // string | Filter on CRC-STS using 'EndsWith' operator
$circulation_status_not_ends_with = "circulation_status_not_ends_with_example"; // string | Filter on CRC-STS using 'NotEndsWith' operator
$circulation_status_in = "circulation_status_in_example"; // string | Filter on CRC-STS using 'In' operator
$circulation_status_between = "circulation_status_between_example"; // string | Filter on CRC-STS using 'Between' operator

try {
    $result = $apiInstance->subscriptionSearch($pager_skip, $pager_take, $publication_code, $ship_to_customer_number, $subscription_id, $bill_to_customer_number, $referred_by_customer_number, $owning_organization_code, $circulation_status, $publication_code_not_equal, $publication_code_less, $publication_code_less_or_equal, $publication_code_greater, $publication_code_greater_or_equal, $publication_code_is_null, $publication_code_is_not_null, $publication_code_like, $publication_code_not_like, $publication_code_contains, $publication_code_not_contains, $publication_code_starts_with, $publication_code_not_starts_with, $publication_code_ends_with, $publication_code_not_ends_with, $publication_code_in, $publication_code_between, $ship_to_customer_number_not_equal, $ship_to_customer_number_less, $ship_to_customer_number_less_or_equal, $ship_to_customer_number_greater, $ship_to_customer_number_greater_or_equal, $ship_to_customer_number_is_null, $ship_to_customer_number_is_not_null, $ship_to_customer_number_like, $ship_to_customer_number_not_like, $ship_to_customer_number_contains, $ship_to_customer_number_not_contains, $ship_to_customer_number_starts_with, $ship_to_customer_number_not_starts_with, $ship_to_customer_number_ends_with, $ship_to_customer_number_not_ends_with, $ship_to_customer_number_in, $ship_to_customer_number_between, $subscription_id_not_equal, $subscription_id_less, $subscription_id_less_or_equal, $subscription_id_greater, $subscription_id_greater_or_equal, $subscription_id_is_null, $subscription_id_is_not_null, $subscription_id_like, $subscription_id_not_like, $subscription_id_contains, $subscription_id_not_contains, $subscription_id_starts_with, $subscription_id_not_starts_with, $subscription_id_ends_with, $subscription_id_not_ends_with, $subscription_id_in, $subscription_id_between, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $referred_by_customer_number_not_equal, $referred_by_customer_number_less, $referred_by_customer_number_less_or_equal, $referred_by_customer_number_greater, $referred_by_customer_number_greater_or_equal, $referred_by_customer_number_is_null, $referred_by_customer_number_is_not_null, $referred_by_customer_number_like, $referred_by_customer_number_not_like, $referred_by_customer_number_contains, $referred_by_customer_number_not_contains, $referred_by_customer_number_starts_with, $referred_by_customer_number_not_starts_with, $referred_by_customer_number_ends_with, $referred_by_customer_number_not_ends_with, $referred_by_customer_number_in, $referred_by_customer_number_between, $owning_organization_code_not_equal, $owning_organization_code_less, $owning_organization_code_less_or_equal, $owning_organization_code_greater, $owning_organization_code_greater_or_equal, $owning_organization_code_is_null, $owning_organization_code_is_not_null, $owning_organization_code_like, $owning_organization_code_not_like, $owning_organization_code_contains, $owning_organization_code_not_contains, $owning_organization_code_starts_with, $owning_organization_code_not_starts_with, $owning_organization_code_ends_with, $owning_organization_code_not_ends_with, $owning_organization_code_in, $owning_organization_code_between, $circulation_status_not_equal, $circulation_status_less, $circulation_status_less_or_equal, $circulation_status_greater, $circulation_status_greater_or_equal, $circulation_status_is_null, $circulation_status_is_not_null, $circulation_status_like, $circulation_status_not_like, $circulation_status_contains, $circulation_status_not_contains, $circulation_status_starts_with, $circulation_status_not_starts_with, $circulation_status_ends_with, $circulation_status_not_ends_with, $circulation_status_in, $circulation_status_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **publication_code** | **string**| Filter on PUB-CDE using &#39;Equal&#39; operator | [optional]
 **ship_to_customer_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **subscription_id** | **string**| Filter on SUB-REF using &#39;Equal&#39; operator | [optional]
 **bill_to_customer_number** | **string**| Filter on DNR-NBR using &#39;Equal&#39; operator | [optional]
 **referred_by_customer_number** | **string**| Filter on REF-CTM using &#39;Equal&#39; operator | [optional]
 **owning_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **circulation_status** | **string**| Filter on CRC-STS using &#39;Equal&#39; operator | [optional]
 **publication_code_not_equal** | **string**| Filter on PUB-CDE using &#39;NotEqual&#39; operator | [optional]
 **publication_code_less** | **string**| Filter on PUB-CDE using &#39;Less&#39; operator | [optional]
 **publication_code_less_or_equal** | **string**| Filter on PUB-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **publication_code_greater** | **string**| Filter on PUB-CDE using &#39;Greater&#39; operator | [optional]
 **publication_code_greater_or_equal** | **string**| Filter on PUB-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **publication_code_is_null** | **string**| Filter on PUB-CDE using &#39;IsNull&#39; operator | [optional]
 **publication_code_is_not_null** | **string**| Filter on PUB-CDE using &#39;IsNotNull&#39; operator | [optional]
 **publication_code_like** | **string**| Filter on PUB-CDE using &#39;Like&#39; operator | [optional]
 **publication_code_not_like** | **string**| Filter on PUB-CDE using &#39;NotLike&#39; operator | [optional]
 **publication_code_contains** | **string**| Filter on PUB-CDE using &#39;Contains&#39; operator | [optional]
 **publication_code_not_contains** | **string**| Filter on PUB-CDE using &#39;NotContains&#39; operator | [optional]
 **publication_code_starts_with** | **string**| Filter on PUB-CDE using &#39;StartsWith&#39; operator | [optional]
 **publication_code_not_starts_with** | **string**| Filter on PUB-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **publication_code_ends_with** | **string**| Filter on PUB-CDE using &#39;EndsWith&#39; operator | [optional]
 **publication_code_not_ends_with** | **string**| Filter on PUB-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **publication_code_in** | **string**| Filter on PUB-CDE using &#39;In&#39; operator | [optional]
 **publication_code_between** | **string**| Filter on PUB-CDE using &#39;Between&#39; operator | [optional]
 **ship_to_customer_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **ship_to_customer_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **ship_to_customer_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **ship_to_customer_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **ship_to_customer_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **ship_to_customer_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **ship_to_customer_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **ship_to_customer_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **ship_to_customer_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **ship_to_customer_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **ship_to_customer_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **ship_to_customer_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **ship_to_customer_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **ship_to_customer_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **ship_to_customer_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **ship_to_customer_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **ship_to_customer_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **subscription_id_not_equal** | **string**| Filter on SUB-REF using &#39;NotEqual&#39; operator | [optional]
 **subscription_id_less** | **string**| Filter on SUB-REF using &#39;Less&#39; operator | [optional]
 **subscription_id_less_or_equal** | **string**| Filter on SUB-REF using &#39;LessOrEqual&#39; operator | [optional]
 **subscription_id_greater** | **string**| Filter on SUB-REF using &#39;Greater&#39; operator | [optional]
 **subscription_id_greater_or_equal** | **string**| Filter on SUB-REF using &#39;GreaterOrEqual&#39; operator | [optional]
 **subscription_id_is_null** | **string**| Filter on SUB-REF using &#39;IsNull&#39; operator | [optional]
 **subscription_id_is_not_null** | **string**| Filter on SUB-REF using &#39;IsNotNull&#39; operator | [optional]
 **subscription_id_like** | **string**| Filter on SUB-REF using &#39;Like&#39; operator | [optional]
 **subscription_id_not_like** | **string**| Filter on SUB-REF using &#39;NotLike&#39; operator | [optional]
 **subscription_id_contains** | **string**| Filter on SUB-REF using &#39;Contains&#39; operator | [optional]
 **subscription_id_not_contains** | **string**| Filter on SUB-REF using &#39;NotContains&#39; operator | [optional]
 **subscription_id_starts_with** | **string**| Filter on SUB-REF using &#39;StartsWith&#39; operator | [optional]
 **subscription_id_not_starts_with** | **string**| Filter on SUB-REF using &#39;NotStartsWith&#39; operator | [optional]
 **subscription_id_ends_with** | **string**| Filter on SUB-REF using &#39;EndsWith&#39; operator | [optional]
 **subscription_id_not_ends_with** | **string**| Filter on SUB-REF using &#39;NotEndsWith&#39; operator | [optional]
 **subscription_id_in** | **string**| Filter on SUB-REF using &#39;In&#39; operator | [optional]
 **subscription_id_between** | **string**| Filter on SUB-REF using &#39;Between&#39; operator | [optional]
 **bill_to_customer_number_not_equal** | **string**| Filter on DNR-NBR using &#39;NotEqual&#39; operator | [optional]
 **bill_to_customer_number_less** | **string**| Filter on DNR-NBR using &#39;Less&#39; operator | [optional]
 **bill_to_customer_number_less_or_equal** | **string**| Filter on DNR-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **bill_to_customer_number_greater** | **string**| Filter on DNR-NBR using &#39;Greater&#39; operator | [optional]
 **bill_to_customer_number_greater_or_equal** | **string**| Filter on DNR-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **bill_to_customer_number_is_null** | **string**| Filter on DNR-NBR using &#39;IsNull&#39; operator | [optional]
 **bill_to_customer_number_is_not_null** | **string**| Filter on DNR-NBR using &#39;IsNotNull&#39; operator | [optional]
 **bill_to_customer_number_like** | **string**| Filter on DNR-NBR using &#39;Like&#39; operator | [optional]
 **bill_to_customer_number_not_like** | **string**| Filter on DNR-NBR using &#39;NotLike&#39; operator | [optional]
 **bill_to_customer_number_contains** | **string**| Filter on DNR-NBR using &#39;Contains&#39; operator | [optional]
 **bill_to_customer_number_not_contains** | **string**| Filter on DNR-NBR using &#39;NotContains&#39; operator | [optional]
 **bill_to_customer_number_starts_with** | **string**| Filter on DNR-NBR using &#39;StartsWith&#39; operator | [optional]
 **bill_to_customer_number_not_starts_with** | **string**| Filter on DNR-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **bill_to_customer_number_ends_with** | **string**| Filter on DNR-NBR using &#39;EndsWith&#39; operator | [optional]
 **bill_to_customer_number_not_ends_with** | **string**| Filter on DNR-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **bill_to_customer_number_in** | **string**| Filter on DNR-NBR using &#39;In&#39; operator | [optional]
 **bill_to_customer_number_between** | **string**| Filter on DNR-NBR using &#39;Between&#39; operator | [optional]
 **referred_by_customer_number_not_equal** | **string**| Filter on REF-CTM using &#39;NotEqual&#39; operator | [optional]
 **referred_by_customer_number_less** | **string**| Filter on REF-CTM using &#39;Less&#39; operator | [optional]
 **referred_by_customer_number_less_or_equal** | **string**| Filter on REF-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **referred_by_customer_number_greater** | **string**| Filter on REF-CTM using &#39;Greater&#39; operator | [optional]
 **referred_by_customer_number_greater_or_equal** | **string**| Filter on REF-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **referred_by_customer_number_is_null** | **string**| Filter on REF-CTM using &#39;IsNull&#39; operator | [optional]
 **referred_by_customer_number_is_not_null** | **string**| Filter on REF-CTM using &#39;IsNotNull&#39; operator | [optional]
 **referred_by_customer_number_like** | **string**| Filter on REF-CTM using &#39;Like&#39; operator | [optional]
 **referred_by_customer_number_not_like** | **string**| Filter on REF-CTM using &#39;NotLike&#39; operator | [optional]
 **referred_by_customer_number_contains** | **string**| Filter on REF-CTM using &#39;Contains&#39; operator | [optional]
 **referred_by_customer_number_not_contains** | **string**| Filter on REF-CTM using &#39;NotContains&#39; operator | [optional]
 **referred_by_customer_number_starts_with** | **string**| Filter on REF-CTM using &#39;StartsWith&#39; operator | [optional]
 **referred_by_customer_number_not_starts_with** | **string**| Filter on REF-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **referred_by_customer_number_ends_with** | **string**| Filter on REF-CTM using &#39;EndsWith&#39; operator | [optional]
 **referred_by_customer_number_not_ends_with** | **string**| Filter on REF-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **referred_by_customer_number_in** | **string**| Filter on REF-CTM using &#39;In&#39; operator | [optional]
 **referred_by_customer_number_between** | **string**| Filter on REF-CTM using &#39;Between&#39; operator | [optional]
 **owning_organization_code_not_equal** | **string**| Filter on BIL-ORG using &#39;NotEqual&#39; operator | [optional]
 **owning_organization_code_less** | **string**| Filter on BIL-ORG using &#39;Less&#39; operator | [optional]
 **owning_organization_code_less_or_equal** | **string**| Filter on BIL-ORG using &#39;LessOrEqual&#39; operator | [optional]
 **owning_organization_code_greater** | **string**| Filter on BIL-ORG using &#39;Greater&#39; operator | [optional]
 **owning_organization_code_greater_or_equal** | **string**| Filter on BIL-ORG using &#39;GreaterOrEqual&#39; operator | [optional]
 **owning_organization_code_is_null** | **string**| Filter on BIL-ORG using &#39;IsNull&#39; operator | [optional]
 **owning_organization_code_is_not_null** | **string**| Filter on BIL-ORG using &#39;IsNotNull&#39; operator | [optional]
 **owning_organization_code_like** | **string**| Filter on BIL-ORG using &#39;Like&#39; operator | [optional]
 **owning_organization_code_not_like** | **string**| Filter on BIL-ORG using &#39;NotLike&#39; operator | [optional]
 **owning_organization_code_contains** | **string**| Filter on BIL-ORG using &#39;Contains&#39; operator | [optional]
 **owning_organization_code_not_contains** | **string**| Filter on BIL-ORG using &#39;NotContains&#39; operator | [optional]
 **owning_organization_code_starts_with** | **string**| Filter on BIL-ORG using &#39;StartsWith&#39; operator | [optional]
 **owning_organization_code_not_starts_with** | **string**| Filter on BIL-ORG using &#39;NotStartsWith&#39; operator | [optional]
 **owning_organization_code_ends_with** | **string**| Filter on BIL-ORG using &#39;EndsWith&#39; operator | [optional]
 **owning_organization_code_not_ends_with** | **string**| Filter on BIL-ORG using &#39;NotEndsWith&#39; operator | [optional]
 **owning_organization_code_in** | **string**| Filter on BIL-ORG using &#39;In&#39; operator | [optional]
 **owning_organization_code_between** | **string**| Filter on BIL-ORG using &#39;Between&#39; operator | [optional]
 **circulation_status_not_equal** | **string**| Filter on CRC-STS using &#39;NotEqual&#39; operator | [optional]
 **circulation_status_less** | **string**| Filter on CRC-STS using &#39;Less&#39; operator | [optional]
 **circulation_status_less_or_equal** | **string**| Filter on CRC-STS using &#39;LessOrEqual&#39; operator | [optional]
 **circulation_status_greater** | **string**| Filter on CRC-STS using &#39;Greater&#39; operator | [optional]
 **circulation_status_greater_or_equal** | **string**| Filter on CRC-STS using &#39;GreaterOrEqual&#39; operator | [optional]
 **circulation_status_is_null** | **string**| Filter on CRC-STS using &#39;IsNull&#39; operator | [optional]
 **circulation_status_is_not_null** | **string**| Filter on CRC-STS using &#39;IsNotNull&#39; operator | [optional]
 **circulation_status_like** | **string**| Filter on CRC-STS using &#39;Like&#39; operator | [optional]
 **circulation_status_not_like** | **string**| Filter on CRC-STS using &#39;NotLike&#39; operator | [optional]
 **circulation_status_contains** | **string**| Filter on CRC-STS using &#39;Contains&#39; operator | [optional]
 **circulation_status_not_contains** | **string**| Filter on CRC-STS using &#39;NotContains&#39; operator | [optional]
 **circulation_status_starts_with** | **string**| Filter on CRC-STS using &#39;StartsWith&#39; operator | [optional]
 **circulation_status_not_starts_with** | **string**| Filter on CRC-STS using &#39;NotStartsWith&#39; operator | [optional]
 **circulation_status_ends_with** | **string**| Filter on CRC-STS using &#39;EndsWith&#39; operator | [optional]
 **circulation_status_not_ends_with** | **string**| Filter on CRC-STS using &#39;NotEndsWith&#39; operator | [optional]
 **circulation_status_in** | **string**| Filter on CRC-STS using &#39;In&#39; operator | [optional]
 **circulation_status_between** | **string**| Filter on CRC-STS using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultSubscription**](../Model/SearchResultSubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSuspend**
> subscriptionSuspend($subscription_id, $subscription_suspend_request)

Suspend a subscription. This can be for a specified start and end issue, or a more generic \"begin at   the next issue, open-ended\" if you leave the start and end date blank in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = "subscription_id_example"; // string | The subscription ID of the subscription to suspend.
$subscription_suspend_request = new \Swagger\Client\Model\SubscriptionSuspendRequest(); // \Swagger\Client\Model\SubscriptionSuspendRequest | A SubscriptionSuspendRequest object.

try {
    $apiInstance->subscriptionSuspend($subscription_id, $subscription_suspend_request);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionSuspend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The subscription ID of the subscription to suspend. |
 **subscription_suspend_request** | [**\Swagger\Client\Model\SubscriptionSuspendRequest**](../Model/SubscriptionSuspendRequest.md)| A SubscriptionSuspendRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionUpdate**
> subscriptionUpdate($subscription_id, $subscription_update_request)

Update an existing subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = "subscription_id_example"; // string | The subscription ID of the subscription to update.
$subscription_update_request = new \Swagger\Client\Model\SubscriptionUpdateRequest(); // \Swagger\Client\Model\SubscriptionUpdateRequest | A SubscriptionUpdateRequest object.

try {
    $apiInstance->subscriptionUpdate($subscription_id, $subscription_update_request);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The subscription ID of the subscription to update. |
 **subscription_update_request** | [**\Swagger\Client\Model\SubscriptionUpdateRequest**](../Model/SubscriptionUpdateRequest.md)| A SubscriptionUpdateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

