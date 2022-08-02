# Swagger\Client\RecurringDonationApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recurringDonationActivate**](RecurringDonationApi.md#recurringDonationActivate) | **POST** /recurring-donations/{recurringDonationId}/activate | Activate a current donation.
[**recurringDonationCreate**](RecurringDonationApi.md#recurringDonationCreate) | **POST** /recurring-donations | Create a new recurring donation. This method takes the incoming recurring donation create request object   and uses it to create a new Advantage recurring donation.   When creating, only include one payment method or the other. CreditCardInfo, or DirectDebitInfo.
[**recurringDonationDeactivate**](RecurringDonationApi.md#recurringDonationDeactivate) | **POST** /recurring-donations/{recurringDonationId}/deactivate | Deactivate a recurring donation.
[**recurringDonationDelete**](RecurringDonationApi.md#recurringDonationDelete) | **DELETE** /recurring-donations/{recurringDonationId} | Deletes a committed recurring donation.
[**recurringDonationGet**](RecurringDonationApi.md#recurringDonationGet) | **GET** /recurring-donations/{recurringDonationId} | Get information pertaining to a recurring donation.
[**recurringDonationGetRecurringDonations**](RecurringDonationApi.md#recurringDonationGetRecurringDonations) | **GET** /customers/{customerNumber}/recurring-donations | Get all of the recurring donation objects for which the given customer is the bill-to.
[**recurringDonationUpdate**](RecurringDonationApi.md#recurringDonationUpdate) | **POST** /recurring-donations/{recurringDonationId} | Update an existing recurring donation.  When updating, if you are updating the payment method, only include one payment method   or the other. CreditCardInfo, or DirectDebitInfo.


# **recurringDonationActivate**
> recurringDonationActivate($recurring_donation_id)

Activate a current donation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecurringDonationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recurring_donation_id = "recurring_donation_id_example"; // string | A recurring donation Id.

try {
    $apiInstance->recurringDonationActivate($recurring_donation_id);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDonationApi->recurringDonationActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurring_donation_id** | **string**| A recurring donation Id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringDonationCreate**
> \Swagger\Client\Model\RecurringDonation recurringDonationCreate($recurring_donation_create_request)

Create a new recurring donation. This method takes the incoming recurring donation create request object   and uses it to create a new Advantage recurring donation.   When creating, only include one payment method or the other. CreditCardInfo, or DirectDebitInfo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecurringDonationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recurring_donation_create_request = new \Swagger\Client\Model\RecurringDonationCreateRequest(); // \Swagger\Client\Model\RecurringDonationCreateRequest | A RecurringDonationCreateRequest object.

try {
    $result = $apiInstance->recurringDonationCreate($recurring_donation_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDonationApi->recurringDonationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurring_donation_create_request** | [**\Swagger\Client\Model\RecurringDonationCreateRequest**](../Model/RecurringDonationCreateRequest.md)| A RecurringDonationCreateRequest object. |

### Return type

[**\Swagger\Client\Model\RecurringDonation**](../Model/RecurringDonation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringDonationDeactivate**
> recurringDonationDeactivate($recurring_donation_id)

Deactivate a recurring donation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecurringDonationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recurring_donation_id = "recurring_donation_id_example"; // string | The recurring donation Id

try {
    $apiInstance->recurringDonationDeactivate($recurring_donation_id);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDonationApi->recurringDonationDeactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurring_donation_id** | **string**| The recurring donation Id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringDonationDelete**
> recurringDonationDelete($recurring_donation_id)

Deletes a committed recurring donation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecurringDonationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recurring_donation_id = "recurring_donation_id_example"; // string | A recurring donation Id.

try {
    $apiInstance->recurringDonationDelete($recurring_donation_id);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDonationApi->recurringDonationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurring_donation_id** | **string**| A recurring donation Id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringDonationGet**
> \Swagger\Client\Model\RecurringDonation recurringDonationGet($recurring_donation_id)

Get information pertaining to a recurring donation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecurringDonationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recurring_donation_id = "recurring_donation_id_example"; // string | The recurring donation Id.

try {
    $result = $apiInstance->recurringDonationGet($recurring_donation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDonationApi->recurringDonationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurring_donation_id** | **string**| The recurring donation Id. |

### Return type

[**\Swagger\Client\Model\RecurringDonation**](../Model/RecurringDonation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringDonationGetRecurringDonations**
> \Swagger\Client\Model\RecurringDonation[] recurringDonationGetRecurringDonations($customer_number)

Get all of the recurring donation objects for which the given customer is the bill-to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecurringDonationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | An Advantage customer number.

try {
    $result = $apiInstance->recurringDonationGetRecurringDonations($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDonationApi->recurringDonationGetRecurringDonations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| An Advantage customer number. |

### Return type

[**\Swagger\Client\Model\RecurringDonation[]**](../Model/RecurringDonation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringDonationUpdate**
> \Swagger\Client\Model\RecurringDonation recurringDonationUpdate($recurring_donation_id, $recurring_donation_update_request)

Update an existing recurring donation.  When updating, if you are updating the payment method, only include one payment method   or the other. CreditCardInfo, or DirectDebitInfo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecurringDonationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recurring_donation_id = "recurring_donation_id_example"; // string | The Id of the Advantage recurring donation to update.
$recurring_donation_update_request = new \Swagger\Client\Model\RecurringDonationUpdateRequest(); // \Swagger\Client\Model\RecurringDonationUpdateRequest | A RecurringDonationUpdateRequest object.

try {
    $result = $apiInstance->recurringDonationUpdate($recurring_donation_id, $recurring_donation_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDonationApi->recurringDonationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurring_donation_id** | **string**| The Id of the Advantage recurring donation to update. |
 **recurring_donation_update_request** | [**\Swagger\Client\Model\RecurringDonationUpdateRequest**](../Model/RecurringDonationUpdateRequest.md)| A RecurringDonationUpdateRequest object. |

### Return type

[**\Swagger\Client\Model\RecurringDonation**](../Model/RecurringDonation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

