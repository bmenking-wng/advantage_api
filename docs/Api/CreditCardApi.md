# Swagger\Client\CreditCardApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**creditCardAuthorize**](CreditCardApi.md#creditCardAuthorize) | **POST** /authorizations | Creates a new authorization without creating an order or customer.
[**creditCardAuthorizeAndCreateCustomer**](CreditCardApi.md#creditCardAuthorizeAndCreateCustomer) | **POST** /pre-authorizations | Creates a new authorization without creating an order. If authorization is successful, Advantage automatically creates   a customer note and links it to the ARPCCT-M record for the authorization.
[**creditCardCreateOrUpdate**](CreditCardApi.md#creditCardCreateOrUpdate) | **POST** /customers/{customerNumber}/credit-cards/{billingOrganization}/{currencyCode} | Creates a new credit card payment method for the given customer.
[**creditCardGet**](CreditCardApi.md#creditCardGet) | **GET** /customers/{customerNumber}/credit-cards/{billingOrganization}/{currencyCode}/{electronicPaymentId} | Get a credit card.
[**creditCardGetEligibleUses**](CreditCardApi.md#creditCardGetEligibleUses) | **GET** /customers/{customerNumber}/credit-cards/{billingOrganization}/{currencyCode}/{electronicPaymentId}/eligible-uses | Gets the subscriptions and agreements that are eligible for being auto-charged with the specified saved credit card.  Only subscriptions and agreements that are already being auto-charged with a bank account or credit card are included.  Eligible subscriptions and agreements that are already auto-charged with the specified saved payment are also included.
[**creditCardGetUses**](CreditCardApi.md#creditCardGetUses) | **GET** /customers/{customerNumber}/credit-cards/{billingOrganization}/{currencyCode}/{electronicPaymentId}/uses | Gets the subscriptions, agreements and orders that currently use a credit card.
[**creditCardGetValidCardTypes**](CreditCardApi.md#creditCardGetValidCardTypes) | **GET** /payment-methods/credit-cards/{billingOrganization}/{currencyCode} | Get a list of valid card types.
[**creditCardGetValidPaymentCodesByPrefix**](CreditCardApi.md#creditCardGetValidPaymentCodesByPrefix) | **GET** /credit-cards/valid-payment-codes | Returns a list of valid pay codes for a specified credit card prefix
[**creditCardGet_0**](CreditCardApi.md#creditCardGet_0) | **GET** /customers/{customerNumber}/credit-cards/{billingOrganization}/{currencyCode} | Get all valid credit cards for the given customer.
[**creditCardUpdate**](CreditCardApi.md#creditCardUpdate) | **POST** /customers/{customerNumber}/credit-cards/{billingOrganization}/{currencyCode}/{electronicPaymentId} | Updates an existing credit card.


# **creditCardAuthorize**
> \Swagger\Client\Model\CreditCardAuthorization creditCardAuthorize($billing_organization, $currency_code, $request)

Creates a new authorization without creating an order or customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_organization = "billing_organization_example"; // string | The card's billing organization.
$currency_code = "currency_code_example"; // string | The card's billing currency.
$request = new \Swagger\Client\Model\CreditCardAuthorizationRequest(); // \Swagger\Client\Model\CreditCardAuthorizationRequest | CreditCardAuthorizationRequest containing customer and credit card info for the authorization

try {
    $result = $apiInstance->creditCardAuthorize($billing_organization, $currency_code, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardAuthorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_organization** | **string**| The card&#39;s billing organization. |
 **currency_code** | **string**| The card&#39;s billing currency. |
 **request** | [**\Swagger\Client\Model\CreditCardAuthorizationRequest**](../Model/CreditCardAuthorizationRequest.md)| CreditCardAuthorizationRequest containing customer and credit card info for the authorization |

### Return type

[**\Swagger\Client\Model\CreditCardAuthorization**](../Model/CreditCardAuthorization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardAuthorizeAndCreateCustomer**
> \Swagger\Client\Model\CreditCardAuthorization creditCardAuthorizeAndCreateCustomer($customer_number, $billing_organization, $currency_code, $request)

Creates a new authorization without creating an order. If authorization is successful, Advantage automatically creates   a customer note and links it to the ARPCCT-M record for the authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | 
$billing_organization = "billing_organization_example"; // string | 
$currency_code = "currency_code_example"; // string | 
$request = new \Swagger\Client\Model\CreditCardAuthorizationRequest(); // \Swagger\Client\Model\CreditCardAuthorizationRequest | 

try {
    $result = $apiInstance->creditCardAuthorizeAndCreateCustomer($customer_number, $billing_organization, $currency_code, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardAuthorizeAndCreateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**|  |
 **billing_organization** | **string**|  |
 **currency_code** | **string**|  |
 **request** | [**\Swagger\Client\Model\CreditCardAuthorizationRequest**](../Model/CreditCardAuthorizationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CreditCardAuthorization**](../Model/CreditCardAuthorization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardCreateOrUpdate**
> \Swagger\Client\Model\SavedPaymentResponse creditCardCreateOrUpdate($customer_number, $billing_organization, $currency_code, $card)

Creates a new credit card payment method for the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the card holder.
$billing_organization = "billing_organization_example"; // string | The card's billing organization.
$currency_code = "currency_code_example"; // string | The card's billing currency. (An Advantage currency code.)
$card = new \Swagger\Client\Model\CreditCardAddRequest(); // \Swagger\Client\Model\CreditCardAddRequest | An AddCreditCardRequest object.

try {
    $result = $apiInstance->creditCardCreateOrUpdate($customer_number, $billing_organization, $currency_code, $card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the card holder. |
 **billing_organization** | **string**| The card&#39;s billing organization. |
 **currency_code** | **string**| The card&#39;s billing currency. (An Advantage currency code.) |
 **card** | [**\Swagger\Client\Model\CreditCardAddRequest**](../Model/CreditCardAddRequest.md)| An AddCreditCardRequest object. |

### Return type

[**\Swagger\Client\Model\SavedPaymentResponse**](../Model/SavedPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardGet**
> \Swagger\Client\Model\SavedCreditCard creditCardGet($customer_number, $billing_organization, $currency_code, $electronic_payment_id)

Get a credit card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the card holder.
$billing_organization = "billing_organization_example"; // string | The card's billing organization.
$currency_code = "currency_code_example"; // string | The card's billing currency. (An Advantage currency code.)
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the card to update.

try {
    $result = $apiInstance->creditCardGet($customer_number, $billing_organization, $currency_code, $electronic_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SavedCreditCard**](../Model/SavedCreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardGetEligibleUses**
> \Swagger\Client\Model\PaymentMethodEligibleUses creditCardGetEligibleUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id)

Gets the subscriptions and agreements that are eligible for being auto-charged with the specified saved credit card.  Only subscriptions and agreements that are already being auto-charged with a bank account or credit card are included.  Eligible subscriptions and agreements that are already auto-charged with the specified saved payment are also included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the card holder.
$billing_organization = "billing_organization_example"; // string | 
$currency_code = "currency_code_example"; // string | 
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the saved credit card

try {
    $result = $apiInstance->creditCardGetEligibleUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardGetEligibleUses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the card holder. |
 **billing_organization** | **string**|  |
 **currency_code** | **string**|  |
 **electronic_payment_id** | **string**| The electronic payment ID of the saved credit card |

### Return type

[**\Swagger\Client\Model\PaymentMethodEligibleUses**](../Model/PaymentMethodEligibleUses.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardGetUses**
> \Swagger\Client\Model\PaymentMethodUses creditCardGetUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id)

Gets the subscriptions, agreements and orders that currently use a credit card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the card holder.
$billing_organization = "billing_organization_example"; // string | The card's billing organization.
$currency_code = "currency_code_example"; // string | The card's billing currency. (An Advantage currency code.)
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the card to update.

try {
    $result = $apiInstance->creditCardGetUses($customer_number, $billing_organization, $currency_code, $electronic_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardGetUses: ', $e->getMessage(), PHP_EOL;
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

# **creditCardGetValidCardTypes**
> \Swagger\Client\Model\CreditCardPaymentMethod[] creditCardGetValidCardTypes($billing_organization, $currency_code)

Get a list of valid card types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_organization = "billing_organization_example"; // string | The billing organization to filter by.
$currency_code = "currency_code_example"; // string | The currency code of the currency to filter by.

try {
    $result = $apiInstance->creditCardGetValidCardTypes($billing_organization, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardGetValidCardTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_organization** | **string**| The billing organization to filter by. |
 **currency_code** | **string**| The currency code of the currency to filter by. |

### Return type

[**\Swagger\Client\Model\CreditCardPaymentMethod[]**](../Model/CreditCardPaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardGetValidPaymentCodesByPrefix**
> string[] creditCardGetValidPaymentCodesByPrefix($prefix)

Returns a list of valid pay codes for a specified credit card prefix

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prefix = "prefix_example"; // string | Credit card prefix, up to four digits

try {
    $result = $apiInstance->creditCardGetValidPaymentCodesByPrefix($prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardGetValidPaymentCodesByPrefix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prefix** | **string**| Credit card prefix, up to four digits |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardGet_0**
> \Swagger\Client\Model\SavedCreditCard[] creditCardGet_0($customer_number, $billing_organization, $currency_code)

Get all valid credit cards for the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the card holder.
$billing_organization = "billing_organization_example"; // string | The card's billing organization.
$currency_code = "currency_code_example"; // string | The card's billing currency. (An Advantage currency code.)

try {
    $result = $apiInstance->creditCardGet_0($customer_number, $billing_organization, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the card holder. |
 **billing_organization** | **string**| The card&#39;s billing organization. |
 **currency_code** | **string**| The card&#39;s billing currency. (An Advantage currency code.) |

### Return type

[**\Swagger\Client\Model\SavedCreditCard[]**](../Model/SavedCreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditCardUpdate**
> \Swagger\Client\Model\SavedCreditCard creditCardUpdate($customer_number, $billing_organization, $currency_code, $electronic_payment_id, $update_request)

Updates an existing credit card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The billing customer
$billing_organization = "billing_organization_example"; // string | The card's billing organization.
$currency_code = "currency_code_example"; // string | The card's billing currency. (An Advantage currency code.)
$electronic_payment_id = "electronic_payment_id_example"; // string | The electronic payment ID of the card to update.
$update_request = new \Swagger\Client\Model\CreditCardUpdateRequest(); // \Swagger\Client\Model\CreditCardUpdateRequest | A CreditCardUpdateRequest object.

try {
    $result = $apiInstance->creditCardUpdate($customer_number, $billing_organization, $currency_code, $electronic_payment_id, $update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->creditCardUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The billing customer |
 **billing_organization** | **string**| The card&#39;s billing organization. |
 **currency_code** | **string**| The card&#39;s billing currency. (An Advantage currency code.) |
 **electronic_payment_id** | **string**| The electronic payment ID of the card to update. |
 **update_request** | [**\Swagger\Client\Model\CreditCardUpdateRequest**](../Model/CreditCardUpdateRequest.md)| A CreditCardUpdateRequest object. |

### Return type

[**\Swagger\Client\Model\SavedCreditCard**](../Model/SavedCreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

