# Swagger\Client\AgreementApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agreementCancel**](AgreementApi.md#agreementCancel) | **POST** /agreements/{agreementId}/cancel | Finds and cancels the specified agreement.
[**agreementChangeAssociationMembershipLevel**](AgreementApi.md#agreementChangeAssociationMembershipLevel) | **POST** /agreements/{agreementId}/change-association-level | Finds and changes the level of an association membership agreement.
[**agreementGet**](AgreementApi.md#agreementGet) | **GET** /agreements/{agreementId} | Finds and returns the specified agreement.
[**agreementGetCancelCreditAmounts**](AgreementApi.md#agreementGetCancelCreditAmounts) | **GET** /agreements/{agreementId}/cancel-credits | Finds and calculates the amount of the credit that would be created if the agreement were cancelled.  If the {cutoffDate} or {cancelQuantity} are not provided,   then the default values will be used when calculating the cancellation credits.
[**agreementRenew**](AgreementApi.md#agreementRenew) | **POST** /agreements/{agreementId}/renew | Finds and renews the specified agreement.
[**agreementReplaceParticipants**](AgreementApi.md#agreementReplaceParticipants) | **PUT** /agreements/{agreementId}/participants | Replace the list of participants for the agreement
[**agreementSearch**](AgreementApi.md#agreementSearch) | **GET** /agreements | Returns all agreements having the specified customerNumber as the bill-to, order-by, or participating customer.
[**agreementUpdate**](AgreementApi.md#agreementUpdate) | **POST** /agreements/{agreementId} | Update an existing agreement.


# **agreementCancel**
> agreementCancel($agreement_id, $cancel_agreement_request)

Finds and cancels the specified agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agreement_id = "agreement_id_example"; // string | Agreement ID (an Advantage generated 12-digit number used to identify agreements).
$cancel_agreement_request = new \Swagger\Client\Model\CancelAgreementRequest(); // \Swagger\Client\Model\CancelAgreementRequest | Agreement cancellation request information

try {
    $apiInstance->agreementCancel($agreement_id, $cancel_agreement_request);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| Agreement ID (an Advantage generated 12-digit number used to identify agreements). |
 **cancel_agreement_request** | [**\Swagger\Client\Model\CancelAgreementRequest**](../Model/CancelAgreementRequest.md)| Agreement cancellation request information |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agreementChangeAssociationMembershipLevel**
> \Swagger\Client\Model\OrderResponse agreementChangeAssociationMembershipLevel($agreement_id, $request)

Finds and changes the level of an association membership agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agreement_id = "agreement_id_example"; // string | Agreement ID (an Advantage generated 12-digit number used to identify agreements).
$request = new \Swagger\Client\Model\AssociationMembershipChangeLevelRequest(); // \Swagger\Client\Model\AssociationMembershipChangeLevelRequest | A AssociationMembershipChangeLevelRequest object.

try {
    $result = $apiInstance->agreementChangeAssociationMembershipLevel($agreement_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementChangeAssociationMembershipLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| Agreement ID (an Advantage generated 12-digit number used to identify agreements). |
 **request** | [**\Swagger\Client\Model\AssociationMembershipChangeLevelRequest**](../Model/AssociationMembershipChangeLevelRequest.md)| A AssociationMembershipChangeLevelRequest object. |

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agreementGet**
> \Swagger\Client\Model\Agreement agreementGet($agreement_id, $as_of_date, $agreement_term)

Finds and returns the specified agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agreement_id = "agreement_id_example"; // string | Agreement ID (an Advantage generated 12-digit number used to identify agreements).
$as_of_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Find agreement terms that would be active on this date. If unset, the latest term/version is found.
$agreement_term = 56; // int | Agreement Term

try {
    $result = $apiInstance->agreementGet($agreement_id, $as_of_date, $agreement_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| Agreement ID (an Advantage generated 12-digit number used to identify agreements). |
 **as_of_date** | **\DateTime**| Find agreement terms that would be active on this date. If unset, the latest term/version is found. | [optional]
 **agreement_term** | **int**| Agreement Term | [optional]

### Return type

[**\Swagger\Client\Model\Agreement**](../Model/Agreement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agreementGetCancelCreditAmounts**
> \Swagger\Client\Model\AgreementCancelCredit agreementGetCancelCreditAmounts($agreement_id, $cancel_future_terms, $cutoff_date, $cancel_quantity)

Finds and calculates the amount of the credit that would be created if the agreement were cancelled.  If the {cutoffDate} or {cancelQuantity} are not provided,   then the default values will be used when calculating the cancellation credits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agreement_id = "agreement_id_example"; // string | Agreement ID (an Advantage generated 12-digit number used to identify agreements).
$cancel_future_terms = true; // bool | Indicates whether to cancel all future terms
$cutoff_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date agreement will be cutoff, or no date (01/01/0001) to cancel the full agreement
$cancel_quantity = 56; // int | Quantity of access cancelled

try {
    $result = $apiInstance->agreementGetCancelCreditAmounts($agreement_id, $cancel_future_terms, $cutoff_date, $cancel_quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementGetCancelCreditAmounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| Agreement ID (an Advantage generated 12-digit number used to identify agreements). |
 **cancel_future_terms** | **bool**| Indicates whether to cancel all future terms |
 **cutoff_date** | **\DateTime**| Date agreement will be cutoff, or no date (01/01/0001) to cancel the full agreement | [optional]
 **cancel_quantity** | **int**| Quantity of access cancelled | [optional]

### Return type

[**\Swagger\Client\Model\AgreementCancelCredit**](../Model/AgreementCancelCredit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agreementRenew**
> \Swagger\Client\Model\OrderResponse agreementRenew($agreement_id, $options)

Finds and renews the specified agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agreement_id = "agreement_id_example"; // string | Agreement ID (an Advantage generated 12-digit number used to identify agreements).
$options = new \Swagger\Client\Model\AgreementRenewalOptions(); // \Swagger\Client\Model\AgreementRenewalOptions | Agreement renewal options

try {
    $result = $apiInstance->agreementRenew($agreement_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementRenew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| Agreement ID (an Advantage generated 12-digit number used to identify agreements). |
 **options** | [**\Swagger\Client\Model\AgreementRenewalOptions**](../Model/AgreementRenewalOptions.md)| Agreement renewal options |

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agreementReplaceParticipants**
> agreementReplaceParticipants($agreement_id, $participants)

Replace the list of participants for the agreement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agreement_id = "agreement_id_example"; // string | The ID of the agreement to update.
$participants = array(new \Swagger\Client\Model\AgreementParticipantIn()); // \Swagger\Client\Model\AgreementParticipantIn[] | The replacement list of participants for the agreement

try {
    $apiInstance->agreementReplaceParticipants($agreement_id, $participants);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementReplaceParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| The ID of the agreement to update. |
 **participants** | [**\Swagger\Client\Model\AgreementParticipantIn[]**](../Model/AgreementParticipantIn.md)| The replacement list of participants for the agreement |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agreementSearch**
> \Swagger\Client\Model\SearchResultAgreement agreementSearch($customer_number, $association_memberships_only, $as_of_date, $bill_to_customer_number, $order_by_customer_number, $participant_customer_number, $access_service_code, $billing_organization_code, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $order_by_customer_number_not_equal, $order_by_customer_number_less, $order_by_customer_number_less_or_equal, $order_by_customer_number_greater, $order_by_customer_number_greater_or_equal, $order_by_customer_number_is_null, $order_by_customer_number_is_not_null, $order_by_customer_number_like, $order_by_customer_number_not_like, $order_by_customer_number_contains, $order_by_customer_number_not_contains, $order_by_customer_number_starts_with, $order_by_customer_number_not_starts_with, $order_by_customer_number_ends_with, $order_by_customer_number_not_ends_with, $order_by_customer_number_in, $order_by_customer_number_between, $participant_customer_number_not_equal, $participant_customer_number_less, $participant_customer_number_less_or_equal, $participant_customer_number_greater, $participant_customer_number_greater_or_equal, $participant_customer_number_is_null, $participant_customer_number_is_not_null, $participant_customer_number_like, $participant_customer_number_not_like, $participant_customer_number_contains, $participant_customer_number_not_contains, $participant_customer_number_starts_with, $participant_customer_number_not_starts_with, $participant_customer_number_ends_with, $participant_customer_number_not_ends_with, $participant_customer_number_in, $participant_customer_number_between, $access_service_code_not_equal, $access_service_code_less, $access_service_code_less_or_equal, $access_service_code_greater, $access_service_code_greater_or_equal, $access_service_code_is_null, $access_service_code_is_not_null, $access_service_code_like, $access_service_code_not_like, $access_service_code_contains, $access_service_code_not_contains, $access_service_code_starts_with, $access_service_code_not_starts_with, $access_service_code_ends_with, $access_service_code_not_ends_with, $access_service_code_in, $access_service_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between)

Returns all agreements having the specified customerNumber as the bill-to, order-by, or participating customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number.
$association_memberships_only = true; // bool | when true, lists only agreements that are association memberships
$as_of_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Find agreement term that would be active on this date.
$bill_to_customer_number = "bill_to_customer_number_example"; // string | Filter on BIL-CTM using 'Equal' operator
$order_by_customer_number = "order_by_customer_number_example"; // string | Filter on ORD-CTM using 'Equal' operator
$participant_customer_number = "participant_customer_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$access_service_code = "access_service_code_example"; // string | Filter on SRV-ID using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$bill_to_customer_number_not_equal = "bill_to_customer_number_not_equal_example"; // string | Filter on BIL-CTM using 'NotEqual' operator
$bill_to_customer_number_less = "bill_to_customer_number_less_example"; // string | Filter on BIL-CTM using 'Less' operator
$bill_to_customer_number_less_or_equal = "bill_to_customer_number_less_or_equal_example"; // string | Filter on BIL-CTM using 'LessOrEqual' operator
$bill_to_customer_number_greater = "bill_to_customer_number_greater_example"; // string | Filter on BIL-CTM using 'Greater' operator
$bill_to_customer_number_greater_or_equal = "bill_to_customer_number_greater_or_equal_example"; // string | Filter on BIL-CTM using 'GreaterOrEqual' operator
$bill_to_customer_number_is_null = "bill_to_customer_number_is_null_example"; // string | Filter on BIL-CTM using 'IsNull' operator
$bill_to_customer_number_is_not_null = "bill_to_customer_number_is_not_null_example"; // string | Filter on BIL-CTM using 'IsNotNull' operator
$bill_to_customer_number_like = "bill_to_customer_number_like_example"; // string | Filter on BIL-CTM using 'Like' operator
$bill_to_customer_number_not_like = "bill_to_customer_number_not_like_example"; // string | Filter on BIL-CTM using 'NotLike' operator
$bill_to_customer_number_contains = "bill_to_customer_number_contains_example"; // string | Filter on BIL-CTM using 'Contains' operator
$bill_to_customer_number_not_contains = "bill_to_customer_number_not_contains_example"; // string | Filter on BIL-CTM using 'NotContains' operator
$bill_to_customer_number_starts_with = "bill_to_customer_number_starts_with_example"; // string | Filter on BIL-CTM using 'StartsWith' operator
$bill_to_customer_number_not_starts_with = "bill_to_customer_number_not_starts_with_example"; // string | Filter on BIL-CTM using 'NotStartsWith' operator
$bill_to_customer_number_ends_with = "bill_to_customer_number_ends_with_example"; // string | Filter on BIL-CTM using 'EndsWith' operator
$bill_to_customer_number_not_ends_with = "bill_to_customer_number_not_ends_with_example"; // string | Filter on BIL-CTM using 'NotEndsWith' operator
$bill_to_customer_number_in = "bill_to_customer_number_in_example"; // string | Filter on BIL-CTM using 'In' operator
$bill_to_customer_number_between = "bill_to_customer_number_between_example"; // string | Filter on BIL-CTM using 'Between' operator
$order_by_customer_number_not_equal = "order_by_customer_number_not_equal_example"; // string | Filter on ORD-CTM using 'NotEqual' operator
$order_by_customer_number_less = "order_by_customer_number_less_example"; // string | Filter on ORD-CTM using 'Less' operator
$order_by_customer_number_less_or_equal = "order_by_customer_number_less_or_equal_example"; // string | Filter on ORD-CTM using 'LessOrEqual' operator
$order_by_customer_number_greater = "order_by_customer_number_greater_example"; // string | Filter on ORD-CTM using 'Greater' operator
$order_by_customer_number_greater_or_equal = "order_by_customer_number_greater_or_equal_example"; // string | Filter on ORD-CTM using 'GreaterOrEqual' operator
$order_by_customer_number_is_null = "order_by_customer_number_is_null_example"; // string | Filter on ORD-CTM using 'IsNull' operator
$order_by_customer_number_is_not_null = "order_by_customer_number_is_not_null_example"; // string | Filter on ORD-CTM using 'IsNotNull' operator
$order_by_customer_number_like = "order_by_customer_number_like_example"; // string | Filter on ORD-CTM using 'Like' operator
$order_by_customer_number_not_like = "order_by_customer_number_not_like_example"; // string | Filter on ORD-CTM using 'NotLike' operator
$order_by_customer_number_contains = "order_by_customer_number_contains_example"; // string | Filter on ORD-CTM using 'Contains' operator
$order_by_customer_number_not_contains = "order_by_customer_number_not_contains_example"; // string | Filter on ORD-CTM using 'NotContains' operator
$order_by_customer_number_starts_with = "order_by_customer_number_starts_with_example"; // string | Filter on ORD-CTM using 'StartsWith' operator
$order_by_customer_number_not_starts_with = "order_by_customer_number_not_starts_with_example"; // string | Filter on ORD-CTM using 'NotStartsWith' operator
$order_by_customer_number_ends_with = "order_by_customer_number_ends_with_example"; // string | Filter on ORD-CTM using 'EndsWith' operator
$order_by_customer_number_not_ends_with = "order_by_customer_number_not_ends_with_example"; // string | Filter on ORD-CTM using 'NotEndsWith' operator
$order_by_customer_number_in = "order_by_customer_number_in_example"; // string | Filter on ORD-CTM using 'In' operator
$order_by_customer_number_between = "order_by_customer_number_between_example"; // string | Filter on ORD-CTM using 'Between' operator
$participant_customer_number_not_equal = "participant_customer_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$participant_customer_number_less = "participant_customer_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$participant_customer_number_less_or_equal = "participant_customer_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$participant_customer_number_greater = "participant_customer_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$participant_customer_number_greater_or_equal = "participant_customer_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$participant_customer_number_is_null = "participant_customer_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$participant_customer_number_is_not_null = "participant_customer_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$participant_customer_number_like = "participant_customer_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$participant_customer_number_not_like = "participant_customer_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$participant_customer_number_contains = "participant_customer_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$participant_customer_number_not_contains = "participant_customer_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$participant_customer_number_starts_with = "participant_customer_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$participant_customer_number_not_starts_with = "participant_customer_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$participant_customer_number_ends_with = "participant_customer_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$participant_customer_number_not_ends_with = "participant_customer_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$participant_customer_number_in = "participant_customer_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$participant_customer_number_between = "participant_customer_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$access_service_code_not_equal = "access_service_code_not_equal_example"; // string | Filter on SRV-ID using 'NotEqual' operator
$access_service_code_less = "access_service_code_less_example"; // string | Filter on SRV-ID using 'Less' operator
$access_service_code_less_or_equal = "access_service_code_less_or_equal_example"; // string | Filter on SRV-ID using 'LessOrEqual' operator
$access_service_code_greater = "access_service_code_greater_example"; // string | Filter on SRV-ID using 'Greater' operator
$access_service_code_greater_or_equal = "access_service_code_greater_or_equal_example"; // string | Filter on SRV-ID using 'GreaterOrEqual' operator
$access_service_code_is_null = "access_service_code_is_null_example"; // string | Filter on SRV-ID using 'IsNull' operator
$access_service_code_is_not_null = "access_service_code_is_not_null_example"; // string | Filter on SRV-ID using 'IsNotNull' operator
$access_service_code_like = "access_service_code_like_example"; // string | Filter on SRV-ID using 'Like' operator
$access_service_code_not_like = "access_service_code_not_like_example"; // string | Filter on SRV-ID using 'NotLike' operator
$access_service_code_contains = "access_service_code_contains_example"; // string | Filter on SRV-ID using 'Contains' operator
$access_service_code_not_contains = "access_service_code_not_contains_example"; // string | Filter on SRV-ID using 'NotContains' operator
$access_service_code_starts_with = "access_service_code_starts_with_example"; // string | Filter on SRV-ID using 'StartsWith' operator
$access_service_code_not_starts_with = "access_service_code_not_starts_with_example"; // string | Filter on SRV-ID using 'NotStartsWith' operator
$access_service_code_ends_with = "access_service_code_ends_with_example"; // string | Filter on SRV-ID using 'EndsWith' operator
$access_service_code_not_ends_with = "access_service_code_not_ends_with_example"; // string | Filter on SRV-ID using 'NotEndsWith' operator
$access_service_code_in = "access_service_code_in_example"; // string | Filter on SRV-ID using 'In' operator
$access_service_code_between = "access_service_code_between_example"; // string | Filter on SRV-ID using 'Between' operator
$billing_organization_code_not_equal = "billing_organization_code_not_equal_example"; // string | Filter on BIL-ORG using 'NotEqual' operator
$billing_organization_code_less = "billing_organization_code_less_example"; // string | Filter on BIL-ORG using 'Less' operator
$billing_organization_code_less_or_equal = "billing_organization_code_less_or_equal_example"; // string | Filter on BIL-ORG using 'LessOrEqual' operator
$billing_organization_code_greater = "billing_organization_code_greater_example"; // string | Filter on BIL-ORG using 'Greater' operator
$billing_organization_code_greater_or_equal = "billing_organization_code_greater_or_equal_example"; // string | Filter on BIL-ORG using 'GreaterOrEqual' operator
$billing_organization_code_is_null = "billing_organization_code_is_null_example"; // string | Filter on BIL-ORG using 'IsNull' operator
$billing_organization_code_is_not_null = "billing_organization_code_is_not_null_example"; // string | Filter on BIL-ORG using 'IsNotNull' operator
$billing_organization_code_like = "billing_organization_code_like_example"; // string | Filter on BIL-ORG using 'Like' operator
$billing_organization_code_not_like = "billing_organization_code_not_like_example"; // string | Filter on BIL-ORG using 'NotLike' operator
$billing_organization_code_contains = "billing_organization_code_contains_example"; // string | Filter on BIL-ORG using 'Contains' operator
$billing_organization_code_not_contains = "billing_organization_code_not_contains_example"; // string | Filter on BIL-ORG using 'NotContains' operator
$billing_organization_code_starts_with = "billing_organization_code_starts_with_example"; // string | Filter on BIL-ORG using 'StartsWith' operator
$billing_organization_code_not_starts_with = "billing_organization_code_not_starts_with_example"; // string | Filter on BIL-ORG using 'NotStartsWith' operator
$billing_organization_code_ends_with = "billing_organization_code_ends_with_example"; // string | Filter on BIL-ORG using 'EndsWith' operator
$billing_organization_code_not_ends_with = "billing_organization_code_not_ends_with_example"; // string | Filter on BIL-ORG using 'NotEndsWith' operator
$billing_organization_code_in = "billing_organization_code_in_example"; // string | Filter on BIL-ORG using 'In' operator
$billing_organization_code_between = "billing_organization_code_between_example"; // string | Filter on BIL-ORG using 'Between' operator

try {
    $result = $apiInstance->agreementSearch($customer_number, $association_memberships_only, $as_of_date, $bill_to_customer_number, $order_by_customer_number, $participant_customer_number, $access_service_code, $billing_organization_code, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $order_by_customer_number_not_equal, $order_by_customer_number_less, $order_by_customer_number_less_or_equal, $order_by_customer_number_greater, $order_by_customer_number_greater_or_equal, $order_by_customer_number_is_null, $order_by_customer_number_is_not_null, $order_by_customer_number_like, $order_by_customer_number_not_like, $order_by_customer_number_contains, $order_by_customer_number_not_contains, $order_by_customer_number_starts_with, $order_by_customer_number_not_starts_with, $order_by_customer_number_ends_with, $order_by_customer_number_not_ends_with, $order_by_customer_number_in, $order_by_customer_number_between, $participant_customer_number_not_equal, $participant_customer_number_less, $participant_customer_number_less_or_equal, $participant_customer_number_greater, $participant_customer_number_greater_or_equal, $participant_customer_number_is_null, $participant_customer_number_is_not_null, $participant_customer_number_like, $participant_customer_number_not_like, $participant_customer_number_contains, $participant_customer_number_not_contains, $participant_customer_number_starts_with, $participant_customer_number_not_starts_with, $participant_customer_number_ends_with, $participant_customer_number_not_ends_with, $participant_customer_number_in, $participant_customer_number_between, $access_service_code_not_equal, $access_service_code_less, $access_service_code_less_or_equal, $access_service_code_greater, $access_service_code_greater_or_equal, $access_service_code_is_null, $access_service_code_is_not_null, $access_service_code_like, $access_service_code_not_like, $access_service_code_contains, $access_service_code_not_contains, $access_service_code_starts_with, $access_service_code_not_starts_with, $access_service_code_ends_with, $access_service_code_not_ends_with, $access_service_code_in, $access_service_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number. |
 **association_memberships_only** | **bool**| when true, lists only agreements that are association memberships | [optional]
 **as_of_date** | **\DateTime**| Find agreement term that would be active on this date. | [optional]
 **bill_to_customer_number** | **string**| Filter on BIL-CTM using &#39;Equal&#39; operator | [optional]
 **order_by_customer_number** | **string**| Filter on ORD-CTM using &#39;Equal&#39; operator | [optional]
 **participant_customer_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **access_service_code** | **string**| Filter on SRV-ID using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **bill_to_customer_number_not_equal** | **string**| Filter on BIL-CTM using &#39;NotEqual&#39; operator | [optional]
 **bill_to_customer_number_less** | **string**| Filter on BIL-CTM using &#39;Less&#39; operator | [optional]
 **bill_to_customer_number_less_or_equal** | **string**| Filter on BIL-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **bill_to_customer_number_greater** | **string**| Filter on BIL-CTM using &#39;Greater&#39; operator | [optional]
 **bill_to_customer_number_greater_or_equal** | **string**| Filter on BIL-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **bill_to_customer_number_is_null** | **string**| Filter on BIL-CTM using &#39;IsNull&#39; operator | [optional]
 **bill_to_customer_number_is_not_null** | **string**| Filter on BIL-CTM using &#39;IsNotNull&#39; operator | [optional]
 **bill_to_customer_number_like** | **string**| Filter on BIL-CTM using &#39;Like&#39; operator | [optional]
 **bill_to_customer_number_not_like** | **string**| Filter on BIL-CTM using &#39;NotLike&#39; operator | [optional]
 **bill_to_customer_number_contains** | **string**| Filter on BIL-CTM using &#39;Contains&#39; operator | [optional]
 **bill_to_customer_number_not_contains** | **string**| Filter on BIL-CTM using &#39;NotContains&#39; operator | [optional]
 **bill_to_customer_number_starts_with** | **string**| Filter on BIL-CTM using &#39;StartsWith&#39; operator | [optional]
 **bill_to_customer_number_not_starts_with** | **string**| Filter on BIL-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **bill_to_customer_number_ends_with** | **string**| Filter on BIL-CTM using &#39;EndsWith&#39; operator | [optional]
 **bill_to_customer_number_not_ends_with** | **string**| Filter on BIL-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **bill_to_customer_number_in** | **string**| Filter on BIL-CTM using &#39;In&#39; operator | [optional]
 **bill_to_customer_number_between** | **string**| Filter on BIL-CTM using &#39;Between&#39; operator | [optional]
 **order_by_customer_number_not_equal** | **string**| Filter on ORD-CTM using &#39;NotEqual&#39; operator | [optional]
 **order_by_customer_number_less** | **string**| Filter on ORD-CTM using &#39;Less&#39; operator | [optional]
 **order_by_customer_number_less_or_equal** | **string**| Filter on ORD-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **order_by_customer_number_greater** | **string**| Filter on ORD-CTM using &#39;Greater&#39; operator | [optional]
 **order_by_customer_number_greater_or_equal** | **string**| Filter on ORD-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_by_customer_number_is_null** | **string**| Filter on ORD-CTM using &#39;IsNull&#39; operator | [optional]
 **order_by_customer_number_is_not_null** | **string**| Filter on ORD-CTM using &#39;IsNotNull&#39; operator | [optional]
 **order_by_customer_number_like** | **string**| Filter on ORD-CTM using &#39;Like&#39; operator | [optional]
 **order_by_customer_number_not_like** | **string**| Filter on ORD-CTM using &#39;NotLike&#39; operator | [optional]
 **order_by_customer_number_contains** | **string**| Filter on ORD-CTM using &#39;Contains&#39; operator | [optional]
 **order_by_customer_number_not_contains** | **string**| Filter on ORD-CTM using &#39;NotContains&#39; operator | [optional]
 **order_by_customer_number_starts_with** | **string**| Filter on ORD-CTM using &#39;StartsWith&#39; operator | [optional]
 **order_by_customer_number_not_starts_with** | **string**| Filter on ORD-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **order_by_customer_number_ends_with** | **string**| Filter on ORD-CTM using &#39;EndsWith&#39; operator | [optional]
 **order_by_customer_number_not_ends_with** | **string**| Filter on ORD-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **order_by_customer_number_in** | **string**| Filter on ORD-CTM using &#39;In&#39; operator | [optional]
 **order_by_customer_number_between** | **string**| Filter on ORD-CTM using &#39;Between&#39; operator | [optional]
 **participant_customer_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **participant_customer_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **participant_customer_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **participant_customer_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **participant_customer_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **participant_customer_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **participant_customer_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **participant_customer_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **participant_customer_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **participant_customer_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **participant_customer_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **participant_customer_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **participant_customer_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **participant_customer_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **participant_customer_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **participant_customer_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **participant_customer_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **access_service_code_not_equal** | **string**| Filter on SRV-ID using &#39;NotEqual&#39; operator | [optional]
 **access_service_code_less** | **string**| Filter on SRV-ID using &#39;Less&#39; operator | [optional]
 **access_service_code_less_or_equal** | **string**| Filter on SRV-ID using &#39;LessOrEqual&#39; operator | [optional]
 **access_service_code_greater** | **string**| Filter on SRV-ID using &#39;Greater&#39; operator | [optional]
 **access_service_code_greater_or_equal** | **string**| Filter on SRV-ID using &#39;GreaterOrEqual&#39; operator | [optional]
 **access_service_code_is_null** | **string**| Filter on SRV-ID using &#39;IsNull&#39; operator | [optional]
 **access_service_code_is_not_null** | **string**| Filter on SRV-ID using &#39;IsNotNull&#39; operator | [optional]
 **access_service_code_like** | **string**| Filter on SRV-ID using &#39;Like&#39; operator | [optional]
 **access_service_code_not_like** | **string**| Filter on SRV-ID using &#39;NotLike&#39; operator | [optional]
 **access_service_code_contains** | **string**| Filter on SRV-ID using &#39;Contains&#39; operator | [optional]
 **access_service_code_not_contains** | **string**| Filter on SRV-ID using &#39;NotContains&#39; operator | [optional]
 **access_service_code_starts_with** | **string**| Filter on SRV-ID using &#39;StartsWith&#39; operator | [optional]
 **access_service_code_not_starts_with** | **string**| Filter on SRV-ID using &#39;NotStartsWith&#39; operator | [optional]
 **access_service_code_ends_with** | **string**| Filter on SRV-ID using &#39;EndsWith&#39; operator | [optional]
 **access_service_code_not_ends_with** | **string**| Filter on SRV-ID using &#39;NotEndsWith&#39; operator | [optional]
 **access_service_code_in** | **string**| Filter on SRV-ID using &#39;In&#39; operator | [optional]
 **access_service_code_between** | **string**| Filter on SRV-ID using &#39;Between&#39; operator | [optional]
 **billing_organization_code_not_equal** | **string**| Filter on BIL-ORG using &#39;NotEqual&#39; operator | [optional]
 **billing_organization_code_less** | **string**| Filter on BIL-ORG using &#39;Less&#39; operator | [optional]
 **billing_organization_code_less_or_equal** | **string**| Filter on BIL-ORG using &#39;LessOrEqual&#39; operator | [optional]
 **billing_organization_code_greater** | **string**| Filter on BIL-ORG using &#39;Greater&#39; operator | [optional]
 **billing_organization_code_greater_or_equal** | **string**| Filter on BIL-ORG using &#39;GreaterOrEqual&#39; operator | [optional]
 **billing_organization_code_is_null** | **string**| Filter on BIL-ORG using &#39;IsNull&#39; operator | [optional]
 **billing_organization_code_is_not_null** | **string**| Filter on BIL-ORG using &#39;IsNotNull&#39; operator | [optional]
 **billing_organization_code_like** | **string**| Filter on BIL-ORG using &#39;Like&#39; operator | [optional]
 **billing_organization_code_not_like** | **string**| Filter on BIL-ORG using &#39;NotLike&#39; operator | [optional]
 **billing_organization_code_contains** | **string**| Filter on BIL-ORG using &#39;Contains&#39; operator | [optional]
 **billing_organization_code_not_contains** | **string**| Filter on BIL-ORG using &#39;NotContains&#39; operator | [optional]
 **billing_organization_code_starts_with** | **string**| Filter on BIL-ORG using &#39;StartsWith&#39; operator | [optional]
 **billing_organization_code_not_starts_with** | **string**| Filter on BIL-ORG using &#39;NotStartsWith&#39; operator | [optional]
 **billing_organization_code_ends_with** | **string**| Filter on BIL-ORG using &#39;EndsWith&#39; operator | [optional]
 **billing_organization_code_not_ends_with** | **string**| Filter on BIL-ORG using &#39;NotEndsWith&#39; operator | [optional]
 **billing_organization_code_in** | **string**| Filter on BIL-ORG using &#39;In&#39; operator | [optional]
 **billing_organization_code_between** | **string**| Filter on BIL-ORG using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultAgreement**](../Model/SearchResultAgreement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agreementUpdate**
> \Swagger\Client\Model\Agreement agreementUpdate($agreement_id, $request)

Update an existing agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agreement_id = "agreement_id_example"; // string | The ID of the agreement to update.
$request = new \Swagger\Client\Model\AgreementUpdateRequest(); // \Swagger\Client\Model\AgreementUpdateRequest | A AgreementUpdateRequest object.

try {
    $result = $apiInstance->agreementUpdate($agreement_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->agreementUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| The ID of the agreement to update. |
 **request** | [**\Swagger\Client\Model\AgreementUpdateRequest**](../Model/AgreementUpdateRequest.md)| A AgreementUpdateRequest object. |

### Return type

[**\Swagger\Client\Model\Agreement**](../Model/Agreement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

