# Swagger\Client\LookupApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lookupGetAccessPeriods**](LookupApi.md#lookupGetAccessPeriods) | **GET** /access-services/{accessServiceCode}/access-periods | Get the valid access periods.
[**lookupGetAddressCode**](LookupApi.md#lookupGetAddressCode) | **GET** /address-codes/{addressCode} | Given a valid address code, return an object containing   that code and other valuable information about that type of address.
[**lookupGetAddressCodes**](LookupApi.md#lookupGetAddressCodes) | **GET** /address-codes | Get the list of valid address codes.
[**lookupGetAgreementAutoRenewalChains**](LookupApi.md#lookupGetAgreementAutoRenewalChains) | **GET** /auto-renewal-chains/agreements | Get the valid auto-renewal chains for agreements.
[**lookupGetCreditCardPaymentMethod**](LookupApi.md#lookupGetCreditCardPaymentMethod) | **GET** /credit-card-payment-methods/{paymentMethodCode} | Gets a payment method REST model based on the given credit card payment method code
[**lookupGetCreditPolicies**](LookupApi.md#lookupGetCreditPolicies) | **GET** /credit-policies | Get the valid credit policies.
[**lookupGetCurrencies**](LookupApi.md#lookupGetCurrencies) | **GET** /currencies | Return a list of valid currencies.
[**lookupGetCurrency**](LookupApi.md#lookupGetCurrency) | **GET** /currencies/{currencyCode} | Return a valid currency.
[**lookupGetCustomValues**](LookupApi.md#lookupGetCustomValues) | **GET** /custom-values/{fieldName} | Get a list of custom values for a specific field.
[**lookupGetCustomerServiceReasons**](LookupApi.md#lookupGetCustomerServiceReasons) | **GET** /customer-service-reasons/{areaCode}/{categoryCode} | Gets the valid reasons for a category of customer service operations.
[**lookupGetCustomerTitles**](LookupApi.md#lookupGetCustomerTitles) | **GET** /customer-titles | Return a list of valid customer titles.
[**lookupGetDemographicPartition**](LookupApi.md#lookupGetDemographicPartition) | **GET** /demographic-partitions/{partitionName} | Gets the definition of a demographic partition (defined at the CDSDEM view) including the  custom fields contained in the given partition.
[**lookupGetInstallmentBillingPlans**](LookupApi.md#lookupGetInstallmentBillingPlans) | **GET** /installment-billing-plans | Get the valid installment billing plans for a particular currency.
[**lookupGetIssueGroups**](LookupApi.md#lookupGetIssueGroups) | **GET** /issue-groups | Get the valid issue groups.
[**lookupGetOrganization**](LookupApi.md#lookupGetOrganization) | **GET** /organizations/{organizationCode} | Given a valid organization code, return an object with information about that organization.
[**lookupGetOrganizations**](LookupApi.md#lookupGetOrganizations) | **GET** /organizations | Return a list of active organization codes.
[**lookupGetRenewalPolicies**](LookupApi.md#lookupGetRenewalPolicies) | **GET** /renewal-policies | Return a list of renewal policies (renewal flags).
[**lookupGetResponseTypes**](LookupApi.md#lookupGetResponseTypes) | **GET** /response-types | Gets the valid response types (or order sources).
[**lookupGetSubscriptionTypes**](LookupApi.md#lookupGetSubscriptionTypes) | **GET** /subscription-types | Get the valid subscription types.
[**lookupGetSystemValues**](LookupApi.md#lookupGetSystemValues) | **GET** /system-values/{fieldName} | Get a list of system values for a specific field.
[**lookupGetUser**](LookupApi.md#lookupGetUser) | **GET** /advantage-users/{userCode} | Gets a User.
[**lookupGetUsers**](LookupApi.md#lookupGetUsers) | **GET** /advantage-users | Gets a List of Users.


# **lookupGetAccessPeriods**
> \Swagger\Client\Model\AccessPeriod[] lookupGetAccessPeriods($access_service_code)

Get the valid access periods.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_service_code = "access_service_code_example"; // string | The service ID of an Advantage access service.

try {
    $result = $apiInstance->lookupGetAccessPeriods($access_service_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetAccessPeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_service_code** | **string**| The service ID of an Advantage access service. |

### Return type

[**\Swagger\Client\Model\AccessPeriod[]**](../Model/AccessPeriod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetAddressCode**
> \Swagger\Client\Model\AddressCode lookupGetAddressCode($address_code)

Given a valid address code, return an object containing   that code and other valuable information about that type of address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address_code = "address_code_example"; // string | A valid address code.

try {
    $result = $apiInstance->lookupGetAddressCode($address_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetAddressCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_code** | **string**| A valid address code. |

### Return type

[**\Swagger\Client\Model\AddressCode**](../Model/AddressCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetAddressCodes**
> \Swagger\Client\Model\AddressCode[] lookupGetAddressCodes()

Get the list of valid address codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetAddressCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetAddressCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AddressCode[]**](../Model/AddressCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetAgreementAutoRenewalChains**
> \Swagger\Client\Model\SearchResultAgreementAutoRenewalChain lookupGetAgreementAutoRenewalChains()

Get the valid auto-renewal chains for agreements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetAgreementAutoRenewalChains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetAgreementAutoRenewalChains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchResultAgreementAutoRenewalChain**](../Model/SearchResultAgreementAutoRenewalChain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetCreditCardPaymentMethod**
> \Swagger\Client\Model\CreditCardPaymentMethod lookupGetCreditCardPaymentMethod($payment_method_code)

Gets a payment method REST model based on the given credit card payment method code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_code = "payment_method_code_example"; // string | Payment Method Code

try {
    $result = $apiInstance->lookupGetCreditCardPaymentMethod($payment_method_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetCreditCardPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_code** | **string**| Payment Method Code |

### Return type

[**\Swagger\Client\Model\CreditCardPaymentMethod**](../Model/CreditCardPaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetCreditPolicies**
> \Swagger\Client\Model\SearchResultCreditPolicy lookupGetCreditPolicies()

Get the valid credit policies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetCreditPolicies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetCreditPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchResultCreditPolicy**](../Model/SearchResultCreditPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetCurrencies**
> \Swagger\Client\Model\Currency[] lookupGetCurrencies()

Return a list of valid currencies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Currency[]**](../Model/Currency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetCurrency**
> \Swagger\Client\Model\Currency lookupGetCurrency($currency_code)

Return a valid currency.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | 

try {
    $result = $apiInstance->lookupGetCurrency($currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\Currency**](../Model/Currency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetCustomValues**
> \Swagger\Client\Model\SearchResultCustomValue lookupGetCustomValues($field_name)

Get a list of custom values for a specific field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_name = "field_name_example"; // string | The field name to get values for.

try {
    $result = $apiInstance->lookupGetCustomValues($field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetCustomValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**| The field name to get values for. |

### Return type

[**\Swagger\Client\Model\SearchResultCustomValue**](../Model/SearchResultCustomValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetCustomerServiceReasons**
> \Swagger\Client\Model\SearchResultCustomerServiceReasons lookupGetCustomerServiceReasons($area_code, $category_code)

Gets the valid reasons for a category of customer service operations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area_code = "area_code_example"; // string | The customer service area (module) code
$category_code = "category_code_example"; // string | The reason category code

try {
    $result = $apiInstance->lookupGetCustomerServiceReasons($area_code, $category_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetCustomerServiceReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area_code** | **string**| The customer service area (module) code |
 **category_code** | **string**| The reason category code |

### Return type

[**\Swagger\Client\Model\SearchResultCustomerServiceReasons**](../Model/SearchResultCustomerServiceReasons.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetCustomerTitles**
> \Swagger\Client\Model\CustomerTitle[] lookupGetCustomerTitles()

Return a list of valid customer titles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetCustomerTitles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetCustomerTitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CustomerTitle[]**](../Model/CustomerTitle.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetDemographicPartition**
> \Swagger\Client\Model\DemographicPartition lookupGetDemographicPartition($partition_name)

Gets the definition of a demographic partition (defined at the CDSDEM view) including the  custom fields contained in the given partition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partition_name = "partition_name_example"; // string | A demographic partition name (e.g. CUS-DMO)

try {
    $result = $apiInstance->lookupGetDemographicPartition($partition_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetDemographicPartition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partition_name** | **string**| A demographic partition name (e.g. CUS-DMO) |

### Return type

[**\Swagger\Client\Model\DemographicPartition**](../Model/DemographicPartition.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetInstallmentBillingPlans**
> \Swagger\Client\Model\SearchResultInstallmentBillingPlan lookupGetInstallmentBillingPlans($currency_code)

Get the valid installment billing plans for a particular currency.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | The currency code of the currency to filter by.

try {
    $result = $apiInstance->lookupGetInstallmentBillingPlans($currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetInstallmentBillingPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The currency code of the currency to filter by. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultInstallmentBillingPlan**](../Model/SearchResultInstallmentBillingPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetIssueGroups**
> \Swagger\Client\Model\SearchResultIssueGroup lookupGetIssueGroups()

Get the valid issue groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetIssueGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetIssueGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchResultIssueGroup**](../Model/SearchResultIssueGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetOrganization**
> \Swagger\Client\Model\Organization lookupGetOrganization($organization_code)

Given a valid organization code, return an object with information about that organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_code = "organization_code_example"; // string | A valid organization code.

try {
    $result = $apiInstance->lookupGetOrganization($organization_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_code** | **string**| A valid organization code. |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetOrganizations**
> \Swagger\Client\Model\Organization[] lookupGetOrganizations()

Return a list of active organization codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetOrganizations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Organization[]**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetRenewalPolicies**
> \Swagger\Client\Model\SearchResultRenewalPolicy lookupGetRenewalPolicies()

Return a list of renewal policies (renewal flags).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetRenewalPolicies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetRenewalPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchResultRenewalPolicy**](../Model/SearchResultRenewalPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetResponseTypes**
> \Swagger\Client\Model\SearchResultResponseType lookupGetResponseTypes()

Gets the valid response types (or order sources).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetResponseTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetResponseTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchResultResponseType**](../Model/SearchResultResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetSubscriptionTypes**
> \Swagger\Client\Model\SubscriptionType[] lookupGetSubscriptionTypes()

Get the valid subscription types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->lookupGetSubscriptionTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetSubscriptionTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SubscriptionType[]**](../Model/SubscriptionType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetSystemValues**
> \Swagger\Client\Model\SearchResultSystemValue lookupGetSystemValues($field_name)

Get a list of system values for a specific field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_name = "field_name_example"; // string | The field name to get values for.

try {
    $result = $apiInstance->lookupGetSystemValues($field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetSystemValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**| The field name to get values for. |

### Return type

[**\Swagger\Client\Model\SearchResultSystemValue**](../Model/SearchResultSystemValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetUser**
> \Swagger\Client\Model\AdvantageUser lookupGetUser($user_code)

Gets a User.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_code = "user_code_example"; // string | User Code

try {
    $result = $apiInstance->lookupGetUser($user_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_code** | **string**| User Code |

### Return type

[**\Swagger\Client\Model\AdvantageUser**](../Model/AdvantageUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupGetUsers**
> \Swagger\Client\Model\SearchResultAdvantageUser lookupGetUsers($user_code, $user_code_not_equal, $user_code_less, $user_code_less_or_equal, $user_code_greater, $user_code_greater_or_equal, $user_code_is_null, $user_code_is_not_null, $user_code_like, $user_code_not_like, $user_code_contains, $user_code_not_contains, $user_code_starts_with, $user_code_not_starts_with, $user_code_ends_with, $user_code_not_ends_with, $user_code_in, $user_code_between)

Gets a List of Users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_code = "user_code_example"; // string | Filter on USR-CDE using 'Equal' operator
$user_code_not_equal = "user_code_not_equal_example"; // string | Filter on USR-CDE using 'NotEqual' operator
$user_code_less = "user_code_less_example"; // string | Filter on USR-CDE using 'Less' operator
$user_code_less_or_equal = "user_code_less_or_equal_example"; // string | Filter on USR-CDE using 'LessOrEqual' operator
$user_code_greater = "user_code_greater_example"; // string | Filter on USR-CDE using 'Greater' operator
$user_code_greater_or_equal = "user_code_greater_or_equal_example"; // string | Filter on USR-CDE using 'GreaterOrEqual' operator
$user_code_is_null = "user_code_is_null_example"; // string | Filter on USR-CDE using 'IsNull' operator
$user_code_is_not_null = "user_code_is_not_null_example"; // string | Filter on USR-CDE using 'IsNotNull' operator
$user_code_like = "user_code_like_example"; // string | Filter on USR-CDE using 'Like' operator
$user_code_not_like = "user_code_not_like_example"; // string | Filter on USR-CDE using 'NotLike' operator
$user_code_contains = "user_code_contains_example"; // string | Filter on USR-CDE using 'Contains' operator
$user_code_not_contains = "user_code_not_contains_example"; // string | Filter on USR-CDE using 'NotContains' operator
$user_code_starts_with = "user_code_starts_with_example"; // string | Filter on USR-CDE using 'StartsWith' operator
$user_code_not_starts_with = "user_code_not_starts_with_example"; // string | Filter on USR-CDE using 'NotStartsWith' operator
$user_code_ends_with = "user_code_ends_with_example"; // string | Filter on USR-CDE using 'EndsWith' operator
$user_code_not_ends_with = "user_code_not_ends_with_example"; // string | Filter on USR-CDE using 'NotEndsWith' operator
$user_code_in = "user_code_in_example"; // string | Filter on USR-CDE using 'In' operator
$user_code_between = "user_code_between_example"; // string | Filter on USR-CDE using 'Between' operator

try {
    $result = $apiInstance->lookupGetUsers($user_code, $user_code_not_equal, $user_code_less, $user_code_less_or_equal, $user_code_greater, $user_code_greater_or_equal, $user_code_is_null, $user_code_is_not_null, $user_code_like, $user_code_not_like, $user_code_contains, $user_code_not_contains, $user_code_starts_with, $user_code_not_starts_with, $user_code_ends_with, $user_code_not_ends_with, $user_code_in, $user_code_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupGetUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_code** | **string**| Filter on USR-CDE using &#39;Equal&#39; operator | [optional]
 **user_code_not_equal** | **string**| Filter on USR-CDE using &#39;NotEqual&#39; operator | [optional]
 **user_code_less** | **string**| Filter on USR-CDE using &#39;Less&#39; operator | [optional]
 **user_code_less_or_equal** | **string**| Filter on USR-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **user_code_greater** | **string**| Filter on USR-CDE using &#39;Greater&#39; operator | [optional]
 **user_code_greater_or_equal** | **string**| Filter on USR-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **user_code_is_null** | **string**| Filter on USR-CDE using &#39;IsNull&#39; operator | [optional]
 **user_code_is_not_null** | **string**| Filter on USR-CDE using &#39;IsNotNull&#39; operator | [optional]
 **user_code_like** | **string**| Filter on USR-CDE using &#39;Like&#39; operator | [optional]
 **user_code_not_like** | **string**| Filter on USR-CDE using &#39;NotLike&#39; operator | [optional]
 **user_code_contains** | **string**| Filter on USR-CDE using &#39;Contains&#39; operator | [optional]
 **user_code_not_contains** | **string**| Filter on USR-CDE using &#39;NotContains&#39; operator | [optional]
 **user_code_starts_with** | **string**| Filter on USR-CDE using &#39;StartsWith&#39; operator | [optional]
 **user_code_not_starts_with** | **string**| Filter on USR-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **user_code_ends_with** | **string**| Filter on USR-CDE using &#39;EndsWith&#39; operator | [optional]
 **user_code_not_ends_with** | **string**| Filter on USR-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **user_code_in** | **string**| Filter on USR-CDE using &#39;In&#39; operator | [optional]
 **user_code_between** | **string**| Filter on USR-CDE using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultAdvantageUser**](../Model/SearchResultAdvantageUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

