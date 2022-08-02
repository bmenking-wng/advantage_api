# Swagger\Client\BankAccountApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountCreateOrUpdate**](BankAccountApi.md#bankAccountCreateOrUpdate) | **POST** /customers/{customerNumber}/bank-accounts/{billingOrganization}/{billingCurrencyCode} | Saves (creates) a bank account for a customer to use with direct debit payments.    If the bank account is already on file it will be updated.
[**bankAccountGet**](BankAccountApi.md#bankAccountGet) | **GET** /customers/{customerNumber}/bank-accounts/{billingOrganization}/{billingCurrencyCode}/{electronicPaymentId} | Find and return the given saved direct debit payment method.
[**bankAccountGetEligibleUses**](BankAccountApi.md#bankAccountGetEligibleUses) | **GET** /customers/{customerNumber}/bank-accounts/{billingOrganization}/{currencyCode}/{electronicPaymentId}/eligible-uses | Gets the subscriptions and agreements that are eligible for being auto-charged with the specified saved bank account.  Only subscriptions and agreements that are already being auto-charged with a bank account or credit card are included.  Eligible subscriptions and agreements that are already auto-charged with the specified saved bank account are also included.
[**bankAccountGetUses**](BankAccountApi.md#bankAccountGetUses) | **GET** /customers/{customerNumber}/bank-accounts/{billingOrganization}/{currencyCode}/{electronicPaymentId}/uses | Gets the subscriptions and agreements that currently use a given direct debit. orders not currently support for bank accounts
[**bankAccountGetValidDirectDebitTypes**](BankAccountApi.md#bankAccountGetValidDirectDebitTypes) | **GET** /payment-methods/direct-debit/{billingOrganization}/{billingCurrency} | Gets the available direct debit payment codes for a given organization and currency
[**bankAccountGet_0**](BankAccountApi.md#bankAccountGet_0) | **GET** /customers/{customerNumber}/bank-accounts/{billingOrganization}/{billingCurrencyCode} | Find and return all saved direct debit payment methods for the given customer.
[**bankAccountUpdate**](BankAccountApi.md#bankAccountUpdate) | **POST** /customers/{customerNumber}/bank-accounts/{billingOrganization}/{billingCurrencyCode}/{electronicPaymentId} | Update a direct debit (bank account) payment method.
[**bankAccountValidate**](BankAccountApi.md#bankAccountValidate) | **POST** /bank-accounts/validate/{billingOrganization}/{billingCurrency} | Validates provided bank account information.


# **bankAccountCreateOrUpdate**
> \Swagger\Client\Model\SavedPaymentResponse bankAccountCreateOrUpdate($customer_number, $billing_organization, $billing_currency_code, $bank_account)

Saves (creates) a bank account for a customer to use with direct debit payments.    If the bank account is already on file it will be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the bank account holder.
$billing_organization = "billing_organization_example"; // string | The valid billing organization for the direct debit payment method, if none is provided the default is used.
$billing_currency_code = "billing_currency_code_example"; // string | The currency for the direct debit, if none provided the default is used.
$bank_account = new \Swagger\Client\Model\BankAccountCreateRequest(); // \Swagger\Client\Model\BankAccountCreateRequest | The direct debit payment information for the new bank account.

try {
    $result = $apiInstance->bankAccountCreateOrUpdate($customer_number, $billing_organization, $billing_currency_code, $bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the bank account holder. |
 **billing_organization** | **string**| The valid billing organization for the direct debit payment method, if none is provided the default is used. |
 **billing_currency_code** | **string**| The currency for the direct debit, if none provided the default is used. |
 **bank_account** | [**\Swagger\Client\Model\BankAccountCreateRequest**](../Model/BankAccountCreateRequest.md)| The direct debit payment information for the new bank account. |

### Return type

[**\Swagger\Client\Model\SavedPaymentResponse**](../Model/SavedPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountGet**
> \Swagger\Client\Model\SavedBankAccount bankAccountGet($customer_number, $billing_organization, $billing_currency_code, $electronic_payment_id)

Find and return the given saved direct debit payment method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the bank account holder.
$billing_organization = "billing_organization_example"; // string | The valid billing organization for the direct debit payment method, if none is provided the default is used.
$billing_currency_code = "billing_currency_code_example"; // string | The billing currency for the direct debit payment method, if none is provided the default is used.
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the direct debit payment method.

try {
    $result = $apiInstance->bankAccountGet($customer_number, $billing_organization, $billing_currency_code, $electronic_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the bank account holder. |
 **billing_organization** | **string**| The valid billing organization for the direct debit payment method, if none is provided the default is used. |
 **billing_currency_code** | **string**| The billing currency for the direct debit payment method, if none is provided the default is used. |
 **electronic_payment_id** | **string**| The electronic payment ID of the direct debit payment method. |

### Return type

[**\Swagger\Client\Model\SavedBankAccount**](../Model/SavedBankAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountGetEligibleUses**
> \Swagger\Client\Model\PaymentMethodEligibleUses bankAccountGetEligibleUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id)

Gets the subscriptions and agreements that are eligible for being auto-charged with the specified saved bank account.  Only subscriptions and agreements that are already being auto-charged with a bank account or credit card are included.  Eligible subscriptions and agreements that are already auto-charged with the specified saved bank account are also included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the card holder.
$billing_organization = "billing_organization_example"; // string | 
$currency_code = "currency_code_example"; // string | 
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the saved bank account

try {
    $result = $apiInstance->bankAccountGetEligibleUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGetEligibleUses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the card holder. |
 **billing_organization** | **string**|  |
 **currency_code** | **string**|  |
 **electronic_payment_id** | **string**| The electronic payment ID of the saved bank account |

### Return type

[**\Swagger\Client\Model\PaymentMethodEligibleUses**](../Model/PaymentMethodEligibleUses.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountGetUses**
> \Swagger\Client\Model\PaymentMethodUses bankAccountGetUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id)

Gets the subscriptions and agreements that currently use a given direct debit. orders not currently support for bank accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the card holder.
$billing_organization = "billing_organization_example"; // string | The card's billing organization.
$currency_code = "currency_code_example"; // string | The card's billing currency. (An Advantage currency code.)
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the card to update.

try {
    $result = $apiInstance->bankAccountGetUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGetUses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the card holder. |
 **billing_organization** | **string**| The card&#39;s billing organization. |
 **currency_code** | **string**| The card&#39;s billing currency. (An Advantage currency code.) |
 **electronic_payment_id** | **string**| The electronic payment ID of the card to update. |

### Return type

[**\Swagger\Client\Model\PaymentMethodUses**](../Model/PaymentMethodUses.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountGetValidDirectDebitTypes**
> \Swagger\Client\Model\DirectDebitPaymentMethod[] bankAccountGetValidDirectDebitTypes($billing_organization, $billing_currency, $web_enabled_only)

Gets the available direct debit payment codes for a given organization and currency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_organization = "billing_organization_example"; // string | Billing organization
$billing_currency = "billing_currency_example"; // string | Billing currency code
$web_enabled_only = true; // bool | True to find only credit cards that are \"web enabled\"

try {
    $result = $apiInstance->bankAccountGetValidDirectDebitTypes($billing_organization, $billing_currency, $web_enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGetValidDirectDebitTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_organization** | **string**| Billing organization |
 **billing_currency** | **string**| Billing currency code |
 **web_enabled_only** | **bool**| True to find only credit cards that are \&quot;web enabled\&quot; |

### Return type

[**\Swagger\Client\Model\DirectDebitPaymentMethod[]**](../Model/DirectDebitPaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountGet_0**
> \Swagger\Client\Model\SavedBankAccount[] bankAccountGet_0($customer_number, $billing_organization, $billing_currency_code)

Find and return all saved direct debit payment methods for the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the customer to search for.
$billing_organization = "billing_organization_example"; // string | The valid billing organization for the direct debits, if none is provided the default is used.
$billing_currency_code = "billing_currency_code_example"; // string | The billing currency for the direct debits, if none is provided the default is used.

try {
    $result = $apiInstance->bankAccountGet_0($customer_number, $billing_organization, $billing_currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the customer to search for. |
 **billing_organization** | **string**| The valid billing organization for the direct debits, if none is provided the default is used. |
 **billing_currency_code** | **string**| The billing currency for the direct debits, if none is provided the default is used. |

### Return type

[**\Swagger\Client\Model\SavedBankAccount[]**](../Model/SavedBankAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountUpdate**
> \Swagger\Client\Model\SavedBankAccount bankAccountUpdate($customer_number, $billing_organization, $billing_currency_code, $electronic_payment_id, $update)

Update a direct debit (bank account) payment method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the bank account holder.
$billing_organization = "billing_organization_example"; // string | The valid billing organization for the direct debit payment method. If none is provided the default is used.
$billing_currency_code = "billing_currency_code_example"; // string | The currency for the direct debit. If none provided the default is used.
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the direct debit payment method to update.
$update = new \Swagger\Client\Model\DirectDebitUpdateRequest(); // \Swagger\Client\Model\DirectDebitUpdateRequest | A DirectDebitUpdateRequest object.

try {
    $result = $apiInstance->bankAccountUpdate($customer_number, $billing_organization, $billing_currency_code, $electronic_payment_id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the bank account holder. |
 **billing_organization** | **string**| The valid billing organization for the direct debit payment method. If none is provided the default is used. |
 **billing_currency_code** | **string**| The currency for the direct debit. If none provided the default is used. |
 **electronic_payment_id** | **string**| The electronic payment ID of the direct debit payment method to update. |
 **update** | [**\Swagger\Client\Model\DirectDebitUpdateRequest**](../Model/DirectDebitUpdateRequest.md)| A DirectDebitUpdateRequest object. |

### Return type

[**\Swagger\Client\Model\SavedBankAccount**](../Model/SavedBankAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountValidate**
> bankAccountValidate($billing_organization, $billing_currency, $bank_account)

Validates provided bank account information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_organization = "billing_organization_example"; // string | The valid billing organization for the direct debit payment method, if none is provided the default is used.
$billing_currency = "billing_currency_example"; // string | The currency for the direct debit, if none provided the default is used.
$bank_account = new \Swagger\Client\Model\BankAccountCreateRequest(); // \Swagger\Client\Model\BankAccountCreateRequest | The direct debit payment information for the new bank account.

try {
    $apiInstance->bankAccountValidate($billing_organization, $billing_currency, $bank_account);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->bankAccountValidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_organization** | **string**| The valid billing organization for the direct debit payment method, if none is provided the default is used. |
 **billing_currency** | **string**| The currency for the direct debit, if none provided the default is used. |
 **bank_account** | [**\Swagger\Client\Model\BankAccountCreateRequest**](../Model/BankAccountCreateRequest.md)| The direct debit payment information for the new bank account. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

