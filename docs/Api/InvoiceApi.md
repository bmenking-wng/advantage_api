# Swagger\Client\InvoiceApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceAddAvailableCreditPayment**](InvoiceApi.md#invoiceAddAvailableCreditPayment) | **POST** /invoices/{debitNumber}/payments/available-credits | Add a payment to a given debit using the customer&#39;s available credit.  If a specific amount is specified to use but there is less than that available, an error will be thrown.  If a zero amount is specified, all or any available credit will be used up to the amount due.
[**invoiceAddCreditCardPayment**](InvoiceApi.md#invoiceAddCreditCardPayment) | **POST** /invoices/{debitNumber}/payments/credit-cards | Adds credit card payments to an existing open invoice for an existing order.
[**invoiceAddOrderPaymentCheck**](InvoiceApi.md#invoiceAddOrderPaymentCheck) | **POST** /invoices/{debitNumber}/payments/checks | Add a check payment to an existing order.
[**invoiceAddOrderPaymentCreditMemo**](InvoiceApi.md#invoiceAddOrderPaymentCreditMemo) | **POST** /invoices/{debitNumber}/payments/credit-memos | Adds credit memo payments to existing invoices for the given order.  The amount will be applied to existing order until it has all been  used
[**invoiceAddOrderPaymentDigitalWallet**](InvoiceApi.md#invoiceAddOrderPaymentDigitalWallet) | **POST** /invoices/{debitNumber}/payments/digital-wallets | Add a Digital Wallet payment to an existing order
[**invoiceAddSavedCreditCardPayment**](InvoiceApi.md#invoiceAddSavedCreditCardPayment) | **POST** /invoices/{debitNumber}/payments/saved-credit-cards | Add a credit card payment to an existing order.
[**invoiceAddSavedDirectDebitPayment**](InvoiceApi.md#invoiceAddSavedDirectDebitPayment) | **POST** /invoices/{debitNumber}/payments/saved-bank-accounts | Add a direct debit payment to an existing order.
[**invoiceGetInvoice**](InvoiceApi.md#invoiceGetInvoice) | **GET** /invoices/{debitNumber} | Gets an invoice.
[**invoiceSearch**](InvoiceApi.md#invoiceSearch) | **GET** /invoices | Gets order invoices matching the filter criteria. Filters are passed as a URI parameter in the format &amp;lt;Field&amp;gt;.&amp;lt;Operator&amp;gt;&#x3D;&amp;lt;Value&amp;gt;.  For example, /invoices?OrderNumber.EQ&#x3D;12345 or /invoices?OrderNumber.EQ&#x3D;12345&amp;amp;CustomerNumber.EQ&#x3D;1
[**invoiceSearchByCustomer**](InvoiceApi.md#invoiceSearchByCustomer) | **GET** /customers/{customerNumber}/invoices | Gets order invoices matching the filter criteria. Filters are passed as a URI parameter in the format &amp;lt;Field&amp;gt;.&amp;lt;Operator&amp;gt;&#x3D;&amp;lt;Value&amp;gt;.  For example, /invoices?OrderNumber.EQ&#x3D;12345 or /invoices?OrderNumber.EQ&#x3D;12345&amp;amp;CustomerNumber.EQ&#x3D;1


# **invoiceAddAvailableCreditPayment**
> \Swagger\Client\Model\PaymentResponse invoiceAddAvailableCreditPayment($debit_number, $payment)

Add a payment to a given debit using the customer's available credit.  If a specific amount is specified to use but there is less than that available, an error will be thrown.  If a zero amount is specified, all or any available credit will be used up to the amount due.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | The debit number (usually an order number) to apply the credit to.
$payment = new \Swagger\Client\Model\OrderAvailableCreditPaymentRequest(); // \Swagger\Client\Model\OrderAvailableCreditPaymentRequest | An AvailableCreditPaymentRequest object.

try {
    $result = $apiInstance->invoiceAddAvailableCreditPayment($debit_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddAvailableCreditPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**| The debit number (usually an order number) to apply the credit to. |
 **payment** | [**\Swagger\Client\Model\OrderAvailableCreditPaymentRequest**](../Model/OrderAvailableCreditPaymentRequest.md)| An AvailableCreditPaymentRequest object. |

### Return type

[**\Swagger\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceAddCreditCardPayment**
> \Swagger\Client\Model\PaymentResponse invoiceAddCreditCardPayment($debit_number, $payment)

Adds credit card payments to an existing open invoice for an existing order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | The debit number (usually an order number) to apply the credit to.
$payment = new \Swagger\Client\Model\OrderCreditCardPaymentRequest(); // \Swagger\Client\Model\OrderCreditCardPaymentRequest | The tokenized credit card payment details.

try {
    $result = $apiInstance->invoiceAddCreditCardPayment($debit_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddCreditCardPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**| The debit number (usually an order number) to apply the credit to. |
 **payment** | [**\Swagger\Client\Model\OrderCreditCardPaymentRequest**](../Model/OrderCreditCardPaymentRequest.md)| The tokenized credit card payment details. |

### Return type

[**\Swagger\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceAddOrderPaymentCheck**
> \Swagger\Client\Model\PaymentResponse invoiceAddOrderPaymentCheck($debit_number, $payment)

Add a check payment to an existing order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | The debit number (usually an order number) to apply the credit to.
$payment = new \Swagger\Client\Model\CheckPaymentRequest(); // \Swagger\Client\Model\CheckPaymentRequest | The check payment details

try {
    $result = $apiInstance->invoiceAddOrderPaymentCheck($debit_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddOrderPaymentCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**| The debit number (usually an order number) to apply the credit to. |
 **payment** | [**\Swagger\Client\Model\CheckPaymentRequest**](../Model/CheckPaymentRequest.md)| The check payment details |

### Return type

[**\Swagger\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceAddOrderPaymentCreditMemo**
> \Swagger\Client\Model\PaymentResponse invoiceAddOrderPaymentCreditMemo($debit_number, $payment)

Adds credit memo payments to existing invoices for the given order.  The amount will be applied to existing order until it has all been  used

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | 
$payment = new \Swagger\Client\Model\OrderCreditMemoPaymentRequest(); // \Swagger\Client\Model\OrderCreditMemoPaymentRequest | 

try {
    $result = $apiInstance->invoiceAddOrderPaymentCreditMemo($debit_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddOrderPaymentCreditMemo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**|  |
 **payment** | [**\Swagger\Client\Model\OrderCreditMemoPaymentRequest**](../Model/OrderCreditMemoPaymentRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceAddOrderPaymentDigitalWallet**
> invoiceAddOrderPaymentDigitalWallet($debit_number, $payment)

Add a Digital Wallet payment to an existing order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | The debit number (usually an order number) to apply the payment to
$payment = new \Swagger\Client\Model\DigitalWalletPaymentRequest(); // \Swagger\Client\Model\DigitalWalletPaymentRequest | Digital Wallet payment details

try {
    $apiInstance->invoiceAddOrderPaymentDigitalWallet($debit_number, $payment);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddOrderPaymentDigitalWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**| The debit number (usually an order number) to apply the payment to |
 **payment** | [**\Swagger\Client\Model\DigitalWalletPaymentRequest**](../Model/DigitalWalletPaymentRequest.md)| Digital Wallet payment details |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceAddSavedCreditCardPayment**
> \Swagger\Client\Model\PaymentResponse invoiceAddSavedCreditCardPayment($debit_number, $payment)

Add a credit card payment to an existing order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | The debit number (usually an order number) to apply the credit to.
$payment = new \Swagger\Client\Model\OrderSavedCreditCardPaymentRequest(); // \Swagger\Client\Model\OrderSavedCreditCardPaymentRequest | An credit card payment details.

try {
    $result = $apiInstance->invoiceAddSavedCreditCardPayment($debit_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddSavedCreditCardPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**| The debit number (usually an order number) to apply the credit to. |
 **payment** | [**\Swagger\Client\Model\OrderSavedCreditCardPaymentRequest**](../Model/OrderSavedCreditCardPaymentRequest.md)| An credit card payment details. |

### Return type

[**\Swagger\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceAddSavedDirectDebitPayment**
> \Swagger\Client\Model\PaymentResponse invoiceAddSavedDirectDebitPayment($debit_number, $payment)

Add a direct debit payment to an existing order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | The debit number (usually an order number) to apply the credit to.
$payment = new \Swagger\Client\Model\OrderSavedDirectDebitPaymentRequest(); // \Swagger\Client\Model\OrderSavedDirectDebitPaymentRequest | The direct debit payment details

try {
    $result = $apiInstance->invoiceAddSavedDirectDebitPayment($debit_number, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddSavedDirectDebitPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**| The debit number (usually an order number) to apply the credit to. |
 **payment** | [**\Swagger\Client\Model\OrderSavedDirectDebitPaymentRequest**](../Model/OrderSavedDirectDebitPaymentRequest.md)| The direct debit payment details |

### Return type

[**\Swagger\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetInvoice**
> \Swagger\Client\Model\OrderInvoice invoiceGetInvoice($debit_number)

Gets an invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debit_number = "debit_number_example"; // string | The debit number identifying the invoice to return

try {
    $result = $apiInstance->invoiceGetInvoice($debit_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_number** | **string**| The debit number identifying the invoice to return |

### Return type

[**\Swagger\Client\Model\OrderInvoice**](../Model/OrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceSearch**
> \Swagger\Client\Model\SearchResultOrderInvoice invoiceSearch($order_number, $order_total, $amount_paid, $debit_fully_paid_flag, $due_date, $currency_code, $customer_number, $billing_organization_code, $order_number_not_equal, $order_number_less, $order_number_less_or_equal, $order_number_greater, $order_number_greater_or_equal, $order_number_is_null, $order_number_is_not_null, $order_number_like, $order_number_not_like, $order_number_contains, $order_number_not_contains, $order_number_starts_with, $order_number_not_starts_with, $order_number_ends_with, $order_number_not_ends_with, $order_number_in, $order_number_between, $order_total_not_equal, $order_total_less, $order_total_less_or_equal, $order_total_greater, $order_total_greater_or_equal, $order_total_is_null, $order_total_is_not_null, $order_total_like, $order_total_not_like, $order_total_contains, $order_total_not_contains, $order_total_starts_with, $order_total_not_starts_with, $order_total_ends_with, $order_total_not_ends_with, $order_total_in, $order_total_between, $amount_paid_not_equal, $amount_paid_less, $amount_paid_less_or_equal, $amount_paid_greater, $amount_paid_greater_or_equal, $amount_paid_is_null, $amount_paid_is_not_null, $amount_paid_like, $amount_paid_not_like, $amount_paid_contains, $amount_paid_not_contains, $amount_paid_starts_with, $amount_paid_not_starts_with, $amount_paid_ends_with, $amount_paid_not_ends_with, $amount_paid_in, $amount_paid_between, $debit_fully_paid_flag_not_equal, $debit_fully_paid_flag_less, $debit_fully_paid_flag_less_or_equal, $debit_fully_paid_flag_greater, $debit_fully_paid_flag_greater_or_equal, $debit_fully_paid_flag_is_null, $debit_fully_paid_flag_is_not_null, $debit_fully_paid_flag_like, $debit_fully_paid_flag_not_like, $debit_fully_paid_flag_contains, $debit_fully_paid_flag_not_contains, $debit_fully_paid_flag_starts_with, $debit_fully_paid_flag_not_starts_with, $debit_fully_paid_flag_ends_with, $debit_fully_paid_flag_not_ends_with, $debit_fully_paid_flag_in, $debit_fully_paid_flag_between, $due_date_not_equal, $due_date_less, $due_date_less_or_equal, $due_date_greater, $due_date_greater_or_equal, $due_date_is_null, $due_date_is_not_null, $due_date_like, $due_date_not_like, $due_date_contains, $due_date_not_contains, $due_date_starts_with, $due_date_not_starts_with, $due_date_ends_with, $due_date_not_ends_with, $due_date_in, $due_date_between, $currency_code_not_equal, $currency_code_less, $currency_code_less_or_equal, $currency_code_greater, $currency_code_greater_or_equal, $currency_code_is_null, $currency_code_is_not_null, $currency_code_like, $currency_code_not_like, $currency_code_contains, $currency_code_not_contains, $currency_code_starts_with, $currency_code_not_starts_with, $currency_code_ends_with, $currency_code_not_ends_with, $currency_code_in, $currency_code_between, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between)

Gets order invoices matching the filter criteria. Filters are passed as a URI parameter in the format &lt;Field&gt;.&lt;Operator&gt;=&lt;Value&gt;.  For example, /invoices?OrderNumber.EQ=12345 or /invoices?OrderNumber.EQ=12345&amp;CustomerNumber.EQ=1

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Filter on DBT-NBR using 'Equal' operator
$order_total = "order_total_example"; // string | Filter on TOT-DBT using 'Equal' operator
$amount_paid = "amount_paid_example"; // string | Filter on TOT-PAD using 'Equal' operator
$debit_fully_paid_flag = "debit_fully_paid_flag_example"; // string | Filter on DBT-PAD using 'Equal' operator
$due_date = "due_date_example"; // string | Filter on DUE-INF using 'Equal' operator
$currency_code = "currency_code_example"; // string | Filter on BIL-CUR using 'Equal' operator
$customer_number = "customer_number_example"; // string | Filter on SRC-CTM using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$order_number_not_equal = "order_number_not_equal_example"; // string | Filter on DBT-NBR using 'NotEqual' operator
$order_number_less = "order_number_less_example"; // string | Filter on DBT-NBR using 'Less' operator
$order_number_less_or_equal = "order_number_less_or_equal_example"; // string | Filter on DBT-NBR using 'LessOrEqual' operator
$order_number_greater = "order_number_greater_example"; // string | Filter on DBT-NBR using 'Greater' operator
$order_number_greater_or_equal = "order_number_greater_or_equal_example"; // string | Filter on DBT-NBR using 'GreaterOrEqual' operator
$order_number_is_null = "order_number_is_null_example"; // string | Filter on DBT-NBR using 'IsNull' operator
$order_number_is_not_null = "order_number_is_not_null_example"; // string | Filter on DBT-NBR using 'IsNotNull' operator
$order_number_like = "order_number_like_example"; // string | Filter on DBT-NBR using 'Like' operator
$order_number_not_like = "order_number_not_like_example"; // string | Filter on DBT-NBR using 'NotLike' operator
$order_number_contains = "order_number_contains_example"; // string | Filter on DBT-NBR using 'Contains' operator
$order_number_not_contains = "order_number_not_contains_example"; // string | Filter on DBT-NBR using 'NotContains' operator
$order_number_starts_with = "order_number_starts_with_example"; // string | Filter on DBT-NBR using 'StartsWith' operator
$order_number_not_starts_with = "order_number_not_starts_with_example"; // string | Filter on DBT-NBR using 'NotStartsWith' operator
$order_number_ends_with = "order_number_ends_with_example"; // string | Filter on DBT-NBR using 'EndsWith' operator
$order_number_not_ends_with = "order_number_not_ends_with_example"; // string | Filter on DBT-NBR using 'NotEndsWith' operator
$order_number_in = "order_number_in_example"; // string | Filter on DBT-NBR using 'In' operator
$order_number_between = "order_number_between_example"; // string | Filter on DBT-NBR using 'Between' operator
$order_total_not_equal = "order_total_not_equal_example"; // string | Filter on TOT-DBT using 'NotEqual' operator
$order_total_less = "order_total_less_example"; // string | Filter on TOT-DBT using 'Less' operator
$order_total_less_or_equal = "order_total_less_or_equal_example"; // string | Filter on TOT-DBT using 'LessOrEqual' operator
$order_total_greater = "order_total_greater_example"; // string | Filter on TOT-DBT using 'Greater' operator
$order_total_greater_or_equal = "order_total_greater_or_equal_example"; // string | Filter on TOT-DBT using 'GreaterOrEqual' operator
$order_total_is_null = "order_total_is_null_example"; // string | Filter on TOT-DBT using 'IsNull' operator
$order_total_is_not_null = "order_total_is_not_null_example"; // string | Filter on TOT-DBT using 'IsNotNull' operator
$order_total_like = "order_total_like_example"; // string | Filter on TOT-DBT using 'Like' operator
$order_total_not_like = "order_total_not_like_example"; // string | Filter on TOT-DBT using 'NotLike' operator
$order_total_contains = "order_total_contains_example"; // string | Filter on TOT-DBT using 'Contains' operator
$order_total_not_contains = "order_total_not_contains_example"; // string | Filter on TOT-DBT using 'NotContains' operator
$order_total_starts_with = "order_total_starts_with_example"; // string | Filter on TOT-DBT using 'StartsWith' operator
$order_total_not_starts_with = "order_total_not_starts_with_example"; // string | Filter on TOT-DBT using 'NotStartsWith' operator
$order_total_ends_with = "order_total_ends_with_example"; // string | Filter on TOT-DBT using 'EndsWith' operator
$order_total_not_ends_with = "order_total_not_ends_with_example"; // string | Filter on TOT-DBT using 'NotEndsWith' operator
$order_total_in = "order_total_in_example"; // string | Filter on TOT-DBT using 'In' operator
$order_total_between = "order_total_between_example"; // string | Filter on TOT-DBT using 'Between' operator
$amount_paid_not_equal = "amount_paid_not_equal_example"; // string | Filter on TOT-PAD using 'NotEqual' operator
$amount_paid_less = "amount_paid_less_example"; // string | Filter on TOT-PAD using 'Less' operator
$amount_paid_less_or_equal = "amount_paid_less_or_equal_example"; // string | Filter on TOT-PAD using 'LessOrEqual' operator
$amount_paid_greater = "amount_paid_greater_example"; // string | Filter on TOT-PAD using 'Greater' operator
$amount_paid_greater_or_equal = "amount_paid_greater_or_equal_example"; // string | Filter on TOT-PAD using 'GreaterOrEqual' operator
$amount_paid_is_null = "amount_paid_is_null_example"; // string | Filter on TOT-PAD using 'IsNull' operator
$amount_paid_is_not_null = "amount_paid_is_not_null_example"; // string | Filter on TOT-PAD using 'IsNotNull' operator
$amount_paid_like = "amount_paid_like_example"; // string | Filter on TOT-PAD using 'Like' operator
$amount_paid_not_like = "amount_paid_not_like_example"; // string | Filter on TOT-PAD using 'NotLike' operator
$amount_paid_contains = "amount_paid_contains_example"; // string | Filter on TOT-PAD using 'Contains' operator
$amount_paid_not_contains = "amount_paid_not_contains_example"; // string | Filter on TOT-PAD using 'NotContains' operator
$amount_paid_starts_with = "amount_paid_starts_with_example"; // string | Filter on TOT-PAD using 'StartsWith' operator
$amount_paid_not_starts_with = "amount_paid_not_starts_with_example"; // string | Filter on TOT-PAD using 'NotStartsWith' operator
$amount_paid_ends_with = "amount_paid_ends_with_example"; // string | Filter on TOT-PAD using 'EndsWith' operator
$amount_paid_not_ends_with = "amount_paid_not_ends_with_example"; // string | Filter on TOT-PAD using 'NotEndsWith' operator
$amount_paid_in = "amount_paid_in_example"; // string | Filter on TOT-PAD using 'In' operator
$amount_paid_between = "amount_paid_between_example"; // string | Filter on TOT-PAD using 'Between' operator
$debit_fully_paid_flag_not_equal = "debit_fully_paid_flag_not_equal_example"; // string | Filter on DBT-PAD using 'NotEqual' operator
$debit_fully_paid_flag_less = "debit_fully_paid_flag_less_example"; // string | Filter on DBT-PAD using 'Less' operator
$debit_fully_paid_flag_less_or_equal = "debit_fully_paid_flag_less_or_equal_example"; // string | Filter on DBT-PAD using 'LessOrEqual' operator
$debit_fully_paid_flag_greater = "debit_fully_paid_flag_greater_example"; // string | Filter on DBT-PAD using 'Greater' operator
$debit_fully_paid_flag_greater_or_equal = "debit_fully_paid_flag_greater_or_equal_example"; // string | Filter on DBT-PAD using 'GreaterOrEqual' operator
$debit_fully_paid_flag_is_null = "debit_fully_paid_flag_is_null_example"; // string | Filter on DBT-PAD using 'IsNull' operator
$debit_fully_paid_flag_is_not_null = "debit_fully_paid_flag_is_not_null_example"; // string | Filter on DBT-PAD using 'IsNotNull' operator
$debit_fully_paid_flag_like = "debit_fully_paid_flag_like_example"; // string | Filter on DBT-PAD using 'Like' operator
$debit_fully_paid_flag_not_like = "debit_fully_paid_flag_not_like_example"; // string | Filter on DBT-PAD using 'NotLike' operator
$debit_fully_paid_flag_contains = "debit_fully_paid_flag_contains_example"; // string | Filter on DBT-PAD using 'Contains' operator
$debit_fully_paid_flag_not_contains = "debit_fully_paid_flag_not_contains_example"; // string | Filter on DBT-PAD using 'NotContains' operator
$debit_fully_paid_flag_starts_with = "debit_fully_paid_flag_starts_with_example"; // string | Filter on DBT-PAD using 'StartsWith' operator
$debit_fully_paid_flag_not_starts_with = "debit_fully_paid_flag_not_starts_with_example"; // string | Filter on DBT-PAD using 'NotStartsWith' operator
$debit_fully_paid_flag_ends_with = "debit_fully_paid_flag_ends_with_example"; // string | Filter on DBT-PAD using 'EndsWith' operator
$debit_fully_paid_flag_not_ends_with = "debit_fully_paid_flag_not_ends_with_example"; // string | Filter on DBT-PAD using 'NotEndsWith' operator
$debit_fully_paid_flag_in = "debit_fully_paid_flag_in_example"; // string | Filter on DBT-PAD using 'In' operator
$debit_fully_paid_flag_between = "debit_fully_paid_flag_between_example"; // string | Filter on DBT-PAD using 'Between' operator
$due_date_not_equal = "due_date_not_equal_example"; // string | Filter on DUE-INF using 'NotEqual' operator
$due_date_less = "due_date_less_example"; // string | Filter on DUE-INF using 'Less' operator
$due_date_less_or_equal = "due_date_less_or_equal_example"; // string | Filter on DUE-INF using 'LessOrEqual' operator
$due_date_greater = "due_date_greater_example"; // string | Filter on DUE-INF using 'Greater' operator
$due_date_greater_or_equal = "due_date_greater_or_equal_example"; // string | Filter on DUE-INF using 'GreaterOrEqual' operator
$due_date_is_null = "due_date_is_null_example"; // string | Filter on DUE-INF using 'IsNull' operator
$due_date_is_not_null = "due_date_is_not_null_example"; // string | Filter on DUE-INF using 'IsNotNull' operator
$due_date_like = "due_date_like_example"; // string | Filter on DUE-INF using 'Like' operator
$due_date_not_like = "due_date_not_like_example"; // string | Filter on DUE-INF using 'NotLike' operator
$due_date_contains = "due_date_contains_example"; // string | Filter on DUE-INF using 'Contains' operator
$due_date_not_contains = "due_date_not_contains_example"; // string | Filter on DUE-INF using 'NotContains' operator
$due_date_starts_with = "due_date_starts_with_example"; // string | Filter on DUE-INF using 'StartsWith' operator
$due_date_not_starts_with = "due_date_not_starts_with_example"; // string | Filter on DUE-INF using 'NotStartsWith' operator
$due_date_ends_with = "due_date_ends_with_example"; // string | Filter on DUE-INF using 'EndsWith' operator
$due_date_not_ends_with = "due_date_not_ends_with_example"; // string | Filter on DUE-INF using 'NotEndsWith' operator
$due_date_in = "due_date_in_example"; // string | Filter on DUE-INF using 'In' operator
$due_date_between = "due_date_between_example"; // string | Filter on DUE-INF using 'Between' operator
$currency_code_not_equal = "currency_code_not_equal_example"; // string | Filter on BIL-CUR using 'NotEqual' operator
$currency_code_less = "currency_code_less_example"; // string | Filter on BIL-CUR using 'Less' operator
$currency_code_less_or_equal = "currency_code_less_or_equal_example"; // string | Filter on BIL-CUR using 'LessOrEqual' operator
$currency_code_greater = "currency_code_greater_example"; // string | Filter on BIL-CUR using 'Greater' operator
$currency_code_greater_or_equal = "currency_code_greater_or_equal_example"; // string | Filter on BIL-CUR using 'GreaterOrEqual' operator
$currency_code_is_null = "currency_code_is_null_example"; // string | Filter on BIL-CUR using 'IsNull' operator
$currency_code_is_not_null = "currency_code_is_not_null_example"; // string | Filter on BIL-CUR using 'IsNotNull' operator
$currency_code_like = "currency_code_like_example"; // string | Filter on BIL-CUR using 'Like' operator
$currency_code_not_like = "currency_code_not_like_example"; // string | Filter on BIL-CUR using 'NotLike' operator
$currency_code_contains = "currency_code_contains_example"; // string | Filter on BIL-CUR using 'Contains' operator
$currency_code_not_contains = "currency_code_not_contains_example"; // string | Filter on BIL-CUR using 'NotContains' operator
$currency_code_starts_with = "currency_code_starts_with_example"; // string | Filter on BIL-CUR using 'StartsWith' operator
$currency_code_not_starts_with = "currency_code_not_starts_with_example"; // string | Filter on BIL-CUR using 'NotStartsWith' operator
$currency_code_ends_with = "currency_code_ends_with_example"; // string | Filter on BIL-CUR using 'EndsWith' operator
$currency_code_not_ends_with = "currency_code_not_ends_with_example"; // string | Filter on BIL-CUR using 'NotEndsWith' operator
$currency_code_in = "currency_code_in_example"; // string | Filter on BIL-CUR using 'In' operator
$currency_code_between = "currency_code_between_example"; // string | Filter on BIL-CUR using 'Between' operator
$customer_number_not_equal = "customer_number_not_equal_example"; // string | Filter on SRC-CTM using 'NotEqual' operator
$customer_number_less = "customer_number_less_example"; // string | Filter on SRC-CTM using 'Less' operator
$customer_number_less_or_equal = "customer_number_less_or_equal_example"; // string | Filter on SRC-CTM using 'LessOrEqual' operator
$customer_number_greater = "customer_number_greater_example"; // string | Filter on SRC-CTM using 'Greater' operator
$customer_number_greater_or_equal = "customer_number_greater_or_equal_example"; // string | Filter on SRC-CTM using 'GreaterOrEqual' operator
$customer_number_is_null = "customer_number_is_null_example"; // string | Filter on SRC-CTM using 'IsNull' operator
$customer_number_is_not_null = "customer_number_is_not_null_example"; // string | Filter on SRC-CTM using 'IsNotNull' operator
$customer_number_like = "customer_number_like_example"; // string | Filter on SRC-CTM using 'Like' operator
$customer_number_not_like = "customer_number_not_like_example"; // string | Filter on SRC-CTM using 'NotLike' operator
$customer_number_contains = "customer_number_contains_example"; // string | Filter on SRC-CTM using 'Contains' operator
$customer_number_not_contains = "customer_number_not_contains_example"; // string | Filter on SRC-CTM using 'NotContains' operator
$customer_number_starts_with = "customer_number_starts_with_example"; // string | Filter on SRC-CTM using 'StartsWith' operator
$customer_number_not_starts_with = "customer_number_not_starts_with_example"; // string | Filter on SRC-CTM using 'NotStartsWith' operator
$customer_number_ends_with = "customer_number_ends_with_example"; // string | Filter on SRC-CTM using 'EndsWith' operator
$customer_number_not_ends_with = "customer_number_not_ends_with_example"; // string | Filter on SRC-CTM using 'NotEndsWith' operator
$customer_number_in = "customer_number_in_example"; // string | Filter on SRC-CTM using 'In' operator
$customer_number_between = "customer_number_between_example"; // string | Filter on SRC-CTM using 'Between' operator
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
    $result = $apiInstance->invoiceSearch($order_number, $order_total, $amount_paid, $debit_fully_paid_flag, $due_date, $currency_code, $customer_number, $billing_organization_code, $order_number_not_equal, $order_number_less, $order_number_less_or_equal, $order_number_greater, $order_number_greater_or_equal, $order_number_is_null, $order_number_is_not_null, $order_number_like, $order_number_not_like, $order_number_contains, $order_number_not_contains, $order_number_starts_with, $order_number_not_starts_with, $order_number_ends_with, $order_number_not_ends_with, $order_number_in, $order_number_between, $order_total_not_equal, $order_total_less, $order_total_less_or_equal, $order_total_greater, $order_total_greater_or_equal, $order_total_is_null, $order_total_is_not_null, $order_total_like, $order_total_not_like, $order_total_contains, $order_total_not_contains, $order_total_starts_with, $order_total_not_starts_with, $order_total_ends_with, $order_total_not_ends_with, $order_total_in, $order_total_between, $amount_paid_not_equal, $amount_paid_less, $amount_paid_less_or_equal, $amount_paid_greater, $amount_paid_greater_or_equal, $amount_paid_is_null, $amount_paid_is_not_null, $amount_paid_like, $amount_paid_not_like, $amount_paid_contains, $amount_paid_not_contains, $amount_paid_starts_with, $amount_paid_not_starts_with, $amount_paid_ends_with, $amount_paid_not_ends_with, $amount_paid_in, $amount_paid_between, $debit_fully_paid_flag_not_equal, $debit_fully_paid_flag_less, $debit_fully_paid_flag_less_or_equal, $debit_fully_paid_flag_greater, $debit_fully_paid_flag_greater_or_equal, $debit_fully_paid_flag_is_null, $debit_fully_paid_flag_is_not_null, $debit_fully_paid_flag_like, $debit_fully_paid_flag_not_like, $debit_fully_paid_flag_contains, $debit_fully_paid_flag_not_contains, $debit_fully_paid_flag_starts_with, $debit_fully_paid_flag_not_starts_with, $debit_fully_paid_flag_ends_with, $debit_fully_paid_flag_not_ends_with, $debit_fully_paid_flag_in, $debit_fully_paid_flag_between, $due_date_not_equal, $due_date_less, $due_date_less_or_equal, $due_date_greater, $due_date_greater_or_equal, $due_date_is_null, $due_date_is_not_null, $due_date_like, $due_date_not_like, $due_date_contains, $due_date_not_contains, $due_date_starts_with, $due_date_not_starts_with, $due_date_ends_with, $due_date_not_ends_with, $due_date_in, $due_date_between, $currency_code_not_equal, $currency_code_less, $currency_code_less_or_equal, $currency_code_greater, $currency_code_greater_or_equal, $currency_code_is_null, $currency_code_is_not_null, $currency_code_like, $currency_code_not_like, $currency_code_contains, $currency_code_not_contains, $currency_code_starts_with, $currency_code_not_starts_with, $currency_code_ends_with, $currency_code_not_ends_with, $currency_code_in, $currency_code_between, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Filter on DBT-NBR using &#39;Equal&#39; operator | [optional]
 **order_total** | **string**| Filter on TOT-DBT using &#39;Equal&#39; operator | [optional]
 **amount_paid** | **string**| Filter on TOT-PAD using &#39;Equal&#39; operator | [optional]
 **debit_fully_paid_flag** | **string**| Filter on DBT-PAD using &#39;Equal&#39; operator | [optional]
 **due_date** | **string**| Filter on DUE-INF using &#39;Equal&#39; operator | [optional]
 **currency_code** | **string**| Filter on BIL-CUR using &#39;Equal&#39; operator | [optional]
 **customer_number** | **string**| Filter on SRC-CTM using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **order_number_not_equal** | **string**| Filter on DBT-NBR using &#39;NotEqual&#39; operator | [optional]
 **order_number_less** | **string**| Filter on DBT-NBR using &#39;Less&#39; operator | [optional]
 **order_number_less_or_equal** | **string**| Filter on DBT-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **order_number_greater** | **string**| Filter on DBT-NBR using &#39;Greater&#39; operator | [optional]
 **order_number_greater_or_equal** | **string**| Filter on DBT-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_number_is_null** | **string**| Filter on DBT-NBR using &#39;IsNull&#39; operator | [optional]
 **order_number_is_not_null** | **string**| Filter on DBT-NBR using &#39;IsNotNull&#39; operator | [optional]
 **order_number_like** | **string**| Filter on DBT-NBR using &#39;Like&#39; operator | [optional]
 **order_number_not_like** | **string**| Filter on DBT-NBR using &#39;NotLike&#39; operator | [optional]
 **order_number_contains** | **string**| Filter on DBT-NBR using &#39;Contains&#39; operator | [optional]
 **order_number_not_contains** | **string**| Filter on DBT-NBR using &#39;NotContains&#39; operator | [optional]
 **order_number_starts_with** | **string**| Filter on DBT-NBR using &#39;StartsWith&#39; operator | [optional]
 **order_number_not_starts_with** | **string**| Filter on DBT-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **order_number_ends_with** | **string**| Filter on DBT-NBR using &#39;EndsWith&#39; operator | [optional]
 **order_number_not_ends_with** | **string**| Filter on DBT-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **order_number_in** | **string**| Filter on DBT-NBR using &#39;In&#39; operator | [optional]
 **order_number_between** | **string**| Filter on DBT-NBR using &#39;Between&#39; operator | [optional]
 **order_total_not_equal** | **string**| Filter on TOT-DBT using &#39;NotEqual&#39; operator | [optional]
 **order_total_less** | **string**| Filter on TOT-DBT using &#39;Less&#39; operator | [optional]
 **order_total_less_or_equal** | **string**| Filter on TOT-DBT using &#39;LessOrEqual&#39; operator | [optional]
 **order_total_greater** | **string**| Filter on TOT-DBT using &#39;Greater&#39; operator | [optional]
 **order_total_greater_or_equal** | **string**| Filter on TOT-DBT using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_total_is_null** | **string**| Filter on TOT-DBT using &#39;IsNull&#39; operator | [optional]
 **order_total_is_not_null** | **string**| Filter on TOT-DBT using &#39;IsNotNull&#39; operator | [optional]
 **order_total_like** | **string**| Filter on TOT-DBT using &#39;Like&#39; operator | [optional]
 **order_total_not_like** | **string**| Filter on TOT-DBT using &#39;NotLike&#39; operator | [optional]
 **order_total_contains** | **string**| Filter on TOT-DBT using &#39;Contains&#39; operator | [optional]
 **order_total_not_contains** | **string**| Filter on TOT-DBT using &#39;NotContains&#39; operator | [optional]
 **order_total_starts_with** | **string**| Filter on TOT-DBT using &#39;StartsWith&#39; operator | [optional]
 **order_total_not_starts_with** | **string**| Filter on TOT-DBT using &#39;NotStartsWith&#39; operator | [optional]
 **order_total_ends_with** | **string**| Filter on TOT-DBT using &#39;EndsWith&#39; operator | [optional]
 **order_total_not_ends_with** | **string**| Filter on TOT-DBT using &#39;NotEndsWith&#39; operator | [optional]
 **order_total_in** | **string**| Filter on TOT-DBT using &#39;In&#39; operator | [optional]
 **order_total_between** | **string**| Filter on TOT-DBT using &#39;Between&#39; operator | [optional]
 **amount_paid_not_equal** | **string**| Filter on TOT-PAD using &#39;NotEqual&#39; operator | [optional]
 **amount_paid_less** | **string**| Filter on TOT-PAD using &#39;Less&#39; operator | [optional]
 **amount_paid_less_or_equal** | **string**| Filter on TOT-PAD using &#39;LessOrEqual&#39; operator | [optional]
 **amount_paid_greater** | **string**| Filter on TOT-PAD using &#39;Greater&#39; operator | [optional]
 **amount_paid_greater_or_equal** | **string**| Filter on TOT-PAD using &#39;GreaterOrEqual&#39; operator | [optional]
 **amount_paid_is_null** | **string**| Filter on TOT-PAD using &#39;IsNull&#39; operator | [optional]
 **amount_paid_is_not_null** | **string**| Filter on TOT-PAD using &#39;IsNotNull&#39; operator | [optional]
 **amount_paid_like** | **string**| Filter on TOT-PAD using &#39;Like&#39; operator | [optional]
 **amount_paid_not_like** | **string**| Filter on TOT-PAD using &#39;NotLike&#39; operator | [optional]
 **amount_paid_contains** | **string**| Filter on TOT-PAD using &#39;Contains&#39; operator | [optional]
 **amount_paid_not_contains** | **string**| Filter on TOT-PAD using &#39;NotContains&#39; operator | [optional]
 **amount_paid_starts_with** | **string**| Filter on TOT-PAD using &#39;StartsWith&#39; operator | [optional]
 **amount_paid_not_starts_with** | **string**| Filter on TOT-PAD using &#39;NotStartsWith&#39; operator | [optional]
 **amount_paid_ends_with** | **string**| Filter on TOT-PAD using &#39;EndsWith&#39; operator | [optional]
 **amount_paid_not_ends_with** | **string**| Filter on TOT-PAD using &#39;NotEndsWith&#39; operator | [optional]
 **amount_paid_in** | **string**| Filter on TOT-PAD using &#39;In&#39; operator | [optional]
 **amount_paid_between** | **string**| Filter on TOT-PAD using &#39;Between&#39; operator | [optional]
 **debit_fully_paid_flag_not_equal** | **string**| Filter on DBT-PAD using &#39;NotEqual&#39; operator | [optional]
 **debit_fully_paid_flag_less** | **string**| Filter on DBT-PAD using &#39;Less&#39; operator | [optional]
 **debit_fully_paid_flag_less_or_equal** | **string**| Filter on DBT-PAD using &#39;LessOrEqual&#39; operator | [optional]
 **debit_fully_paid_flag_greater** | **string**| Filter on DBT-PAD using &#39;Greater&#39; operator | [optional]
 **debit_fully_paid_flag_greater_or_equal** | **string**| Filter on DBT-PAD using &#39;GreaterOrEqual&#39; operator | [optional]
 **debit_fully_paid_flag_is_null** | **string**| Filter on DBT-PAD using &#39;IsNull&#39; operator | [optional]
 **debit_fully_paid_flag_is_not_null** | **string**| Filter on DBT-PAD using &#39;IsNotNull&#39; operator | [optional]
 **debit_fully_paid_flag_like** | **string**| Filter on DBT-PAD using &#39;Like&#39; operator | [optional]
 **debit_fully_paid_flag_not_like** | **string**| Filter on DBT-PAD using &#39;NotLike&#39; operator | [optional]
 **debit_fully_paid_flag_contains** | **string**| Filter on DBT-PAD using &#39;Contains&#39; operator | [optional]
 **debit_fully_paid_flag_not_contains** | **string**| Filter on DBT-PAD using &#39;NotContains&#39; operator | [optional]
 **debit_fully_paid_flag_starts_with** | **string**| Filter on DBT-PAD using &#39;StartsWith&#39; operator | [optional]
 **debit_fully_paid_flag_not_starts_with** | **string**| Filter on DBT-PAD using &#39;NotStartsWith&#39; operator | [optional]
 **debit_fully_paid_flag_ends_with** | **string**| Filter on DBT-PAD using &#39;EndsWith&#39; operator | [optional]
 **debit_fully_paid_flag_not_ends_with** | **string**| Filter on DBT-PAD using &#39;NotEndsWith&#39; operator | [optional]
 **debit_fully_paid_flag_in** | **string**| Filter on DBT-PAD using &#39;In&#39; operator | [optional]
 **debit_fully_paid_flag_between** | **string**| Filter on DBT-PAD using &#39;Between&#39; operator | [optional]
 **due_date_not_equal** | **string**| Filter on DUE-INF using &#39;NotEqual&#39; operator | [optional]
 **due_date_less** | **string**| Filter on DUE-INF using &#39;Less&#39; operator | [optional]
 **due_date_less_or_equal** | **string**| Filter on DUE-INF using &#39;LessOrEqual&#39; operator | [optional]
 **due_date_greater** | **string**| Filter on DUE-INF using &#39;Greater&#39; operator | [optional]
 **due_date_greater_or_equal** | **string**| Filter on DUE-INF using &#39;GreaterOrEqual&#39; operator | [optional]
 **due_date_is_null** | **string**| Filter on DUE-INF using &#39;IsNull&#39; operator | [optional]
 **due_date_is_not_null** | **string**| Filter on DUE-INF using &#39;IsNotNull&#39; operator | [optional]
 **due_date_like** | **string**| Filter on DUE-INF using &#39;Like&#39; operator | [optional]
 **due_date_not_like** | **string**| Filter on DUE-INF using &#39;NotLike&#39; operator | [optional]
 **due_date_contains** | **string**| Filter on DUE-INF using &#39;Contains&#39; operator | [optional]
 **due_date_not_contains** | **string**| Filter on DUE-INF using &#39;NotContains&#39; operator | [optional]
 **due_date_starts_with** | **string**| Filter on DUE-INF using &#39;StartsWith&#39; operator | [optional]
 **due_date_not_starts_with** | **string**| Filter on DUE-INF using &#39;NotStartsWith&#39; operator | [optional]
 **due_date_ends_with** | **string**| Filter on DUE-INF using &#39;EndsWith&#39; operator | [optional]
 **due_date_not_ends_with** | **string**| Filter on DUE-INF using &#39;NotEndsWith&#39; operator | [optional]
 **due_date_in** | **string**| Filter on DUE-INF using &#39;In&#39; operator | [optional]
 **due_date_between** | **string**| Filter on DUE-INF using &#39;Between&#39; operator | [optional]
 **currency_code_not_equal** | **string**| Filter on BIL-CUR using &#39;NotEqual&#39; operator | [optional]
 **currency_code_less** | **string**| Filter on BIL-CUR using &#39;Less&#39; operator | [optional]
 **currency_code_less_or_equal** | **string**| Filter on BIL-CUR using &#39;LessOrEqual&#39; operator | [optional]
 **currency_code_greater** | **string**| Filter on BIL-CUR using &#39;Greater&#39; operator | [optional]
 **currency_code_greater_or_equal** | **string**| Filter on BIL-CUR using &#39;GreaterOrEqual&#39; operator | [optional]
 **currency_code_is_null** | **string**| Filter on BIL-CUR using &#39;IsNull&#39; operator | [optional]
 **currency_code_is_not_null** | **string**| Filter on BIL-CUR using &#39;IsNotNull&#39; operator | [optional]
 **currency_code_like** | **string**| Filter on BIL-CUR using &#39;Like&#39; operator | [optional]
 **currency_code_not_like** | **string**| Filter on BIL-CUR using &#39;NotLike&#39; operator | [optional]
 **currency_code_contains** | **string**| Filter on BIL-CUR using &#39;Contains&#39; operator | [optional]
 **currency_code_not_contains** | **string**| Filter on BIL-CUR using &#39;NotContains&#39; operator | [optional]
 **currency_code_starts_with** | **string**| Filter on BIL-CUR using &#39;StartsWith&#39; operator | [optional]
 **currency_code_not_starts_with** | **string**| Filter on BIL-CUR using &#39;NotStartsWith&#39; operator | [optional]
 **currency_code_ends_with** | **string**| Filter on BIL-CUR using &#39;EndsWith&#39; operator | [optional]
 **currency_code_not_ends_with** | **string**| Filter on BIL-CUR using &#39;NotEndsWith&#39; operator | [optional]
 **currency_code_in** | **string**| Filter on BIL-CUR using &#39;In&#39; operator | [optional]
 **currency_code_between** | **string**| Filter on BIL-CUR using &#39;Between&#39; operator | [optional]
 **customer_number_not_equal** | **string**| Filter on SRC-CTM using &#39;NotEqual&#39; operator | [optional]
 **customer_number_less** | **string**| Filter on SRC-CTM using &#39;Less&#39; operator | [optional]
 **customer_number_less_or_equal** | **string**| Filter on SRC-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **customer_number_greater** | **string**| Filter on SRC-CTM using &#39;Greater&#39; operator | [optional]
 **customer_number_greater_or_equal** | **string**| Filter on SRC-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **customer_number_is_null** | **string**| Filter on SRC-CTM using &#39;IsNull&#39; operator | [optional]
 **customer_number_is_not_null** | **string**| Filter on SRC-CTM using &#39;IsNotNull&#39; operator | [optional]
 **customer_number_like** | **string**| Filter on SRC-CTM using &#39;Like&#39; operator | [optional]
 **customer_number_not_like** | **string**| Filter on SRC-CTM using &#39;NotLike&#39; operator | [optional]
 **customer_number_contains** | **string**| Filter on SRC-CTM using &#39;Contains&#39; operator | [optional]
 **customer_number_not_contains** | **string**| Filter on SRC-CTM using &#39;NotContains&#39; operator | [optional]
 **customer_number_starts_with** | **string**| Filter on SRC-CTM using &#39;StartsWith&#39; operator | [optional]
 **customer_number_not_starts_with** | **string**| Filter on SRC-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **customer_number_ends_with** | **string**| Filter on SRC-CTM using &#39;EndsWith&#39; operator | [optional]
 **customer_number_not_ends_with** | **string**| Filter on SRC-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **customer_number_in** | **string**| Filter on SRC-CTM using &#39;In&#39; operator | [optional]
 **customer_number_between** | **string**| Filter on SRC-CTM using &#39;Between&#39; operator | [optional]
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

[**\Swagger\Client\Model\SearchResultOrderInvoice**](../Model/SearchResultOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceSearchByCustomer**
> \Swagger\Client\Model\SearchResultOrderInvoice invoiceSearchByCustomer($customer_number, $order_number, $order_total, $amount_paid, $debit_fully_paid_flag, $due_date, $currency_code, $customer_number2, $billing_organization_code, $order_number_not_equal, $order_number_less, $order_number_less_or_equal, $order_number_greater, $order_number_greater_or_equal, $order_number_is_null, $order_number_is_not_null, $order_number_like, $order_number_not_like, $order_number_contains, $order_number_not_contains, $order_number_starts_with, $order_number_not_starts_with, $order_number_ends_with, $order_number_not_ends_with, $order_number_in, $order_number_between, $order_total_not_equal, $order_total_less, $order_total_less_or_equal, $order_total_greater, $order_total_greater_or_equal, $order_total_is_null, $order_total_is_not_null, $order_total_like, $order_total_not_like, $order_total_contains, $order_total_not_contains, $order_total_starts_with, $order_total_not_starts_with, $order_total_ends_with, $order_total_not_ends_with, $order_total_in, $order_total_between, $amount_paid_not_equal, $amount_paid_less, $amount_paid_less_or_equal, $amount_paid_greater, $amount_paid_greater_or_equal, $amount_paid_is_null, $amount_paid_is_not_null, $amount_paid_like, $amount_paid_not_like, $amount_paid_contains, $amount_paid_not_contains, $amount_paid_starts_with, $amount_paid_not_starts_with, $amount_paid_ends_with, $amount_paid_not_ends_with, $amount_paid_in, $amount_paid_between, $debit_fully_paid_flag_not_equal, $debit_fully_paid_flag_less, $debit_fully_paid_flag_less_or_equal, $debit_fully_paid_flag_greater, $debit_fully_paid_flag_greater_or_equal, $debit_fully_paid_flag_is_null, $debit_fully_paid_flag_is_not_null, $debit_fully_paid_flag_like, $debit_fully_paid_flag_not_like, $debit_fully_paid_flag_contains, $debit_fully_paid_flag_not_contains, $debit_fully_paid_flag_starts_with, $debit_fully_paid_flag_not_starts_with, $debit_fully_paid_flag_ends_with, $debit_fully_paid_flag_not_ends_with, $debit_fully_paid_flag_in, $debit_fully_paid_flag_between, $due_date_not_equal, $due_date_less, $due_date_less_or_equal, $due_date_greater, $due_date_greater_or_equal, $due_date_is_null, $due_date_is_not_null, $due_date_like, $due_date_not_like, $due_date_contains, $due_date_not_contains, $due_date_starts_with, $due_date_not_starts_with, $due_date_ends_with, $due_date_not_ends_with, $due_date_in, $due_date_between, $currency_code_not_equal, $currency_code_less, $currency_code_less_or_equal, $currency_code_greater, $currency_code_greater_or_equal, $currency_code_is_null, $currency_code_is_not_null, $currency_code_like, $currency_code_not_like, $currency_code_contains, $currency_code_not_contains, $currency_code_starts_with, $currency_code_not_starts_with, $currency_code_ends_with, $currency_code_not_ends_with, $currency_code_in, $currency_code_between, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between)

Gets order invoices matching the filter criteria. Filters are passed as a URI parameter in the format &lt;Field&gt;.&lt;Operator&gt;=&lt;Value&gt;.  For example, /invoices?OrderNumber.EQ=12345 or /invoices?OrderNumber.EQ=12345&amp;CustomerNumber.EQ=1

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer number
$order_number = "order_number_example"; // string | Filter on DBT-NBR using 'Equal' operator
$order_total = "order_total_example"; // string | Filter on TOT-DBT using 'Equal' operator
$amount_paid = "amount_paid_example"; // string | Filter on TOT-PAD using 'Equal' operator
$debit_fully_paid_flag = "debit_fully_paid_flag_example"; // string | Filter on DBT-PAD using 'Equal' operator
$due_date = "due_date_example"; // string | Filter on DUE-INF using 'Equal' operator
$currency_code = "currency_code_example"; // string | Filter on BIL-CUR using 'Equal' operator
$customer_number2 = "customer_number_example"; // string | Filter on SRC-CTM using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$order_number_not_equal = "order_number_not_equal_example"; // string | Filter on DBT-NBR using 'NotEqual' operator
$order_number_less = "order_number_less_example"; // string | Filter on DBT-NBR using 'Less' operator
$order_number_less_or_equal = "order_number_less_or_equal_example"; // string | Filter on DBT-NBR using 'LessOrEqual' operator
$order_number_greater = "order_number_greater_example"; // string | Filter on DBT-NBR using 'Greater' operator
$order_number_greater_or_equal = "order_number_greater_or_equal_example"; // string | Filter on DBT-NBR using 'GreaterOrEqual' operator
$order_number_is_null = "order_number_is_null_example"; // string | Filter on DBT-NBR using 'IsNull' operator
$order_number_is_not_null = "order_number_is_not_null_example"; // string | Filter on DBT-NBR using 'IsNotNull' operator
$order_number_like = "order_number_like_example"; // string | Filter on DBT-NBR using 'Like' operator
$order_number_not_like = "order_number_not_like_example"; // string | Filter on DBT-NBR using 'NotLike' operator
$order_number_contains = "order_number_contains_example"; // string | Filter on DBT-NBR using 'Contains' operator
$order_number_not_contains = "order_number_not_contains_example"; // string | Filter on DBT-NBR using 'NotContains' operator
$order_number_starts_with = "order_number_starts_with_example"; // string | Filter on DBT-NBR using 'StartsWith' operator
$order_number_not_starts_with = "order_number_not_starts_with_example"; // string | Filter on DBT-NBR using 'NotStartsWith' operator
$order_number_ends_with = "order_number_ends_with_example"; // string | Filter on DBT-NBR using 'EndsWith' operator
$order_number_not_ends_with = "order_number_not_ends_with_example"; // string | Filter on DBT-NBR using 'NotEndsWith' operator
$order_number_in = "order_number_in_example"; // string | Filter on DBT-NBR using 'In' operator
$order_number_between = "order_number_between_example"; // string | Filter on DBT-NBR using 'Between' operator
$order_total_not_equal = "order_total_not_equal_example"; // string | Filter on TOT-DBT using 'NotEqual' operator
$order_total_less = "order_total_less_example"; // string | Filter on TOT-DBT using 'Less' operator
$order_total_less_or_equal = "order_total_less_or_equal_example"; // string | Filter on TOT-DBT using 'LessOrEqual' operator
$order_total_greater = "order_total_greater_example"; // string | Filter on TOT-DBT using 'Greater' operator
$order_total_greater_or_equal = "order_total_greater_or_equal_example"; // string | Filter on TOT-DBT using 'GreaterOrEqual' operator
$order_total_is_null = "order_total_is_null_example"; // string | Filter on TOT-DBT using 'IsNull' operator
$order_total_is_not_null = "order_total_is_not_null_example"; // string | Filter on TOT-DBT using 'IsNotNull' operator
$order_total_like = "order_total_like_example"; // string | Filter on TOT-DBT using 'Like' operator
$order_total_not_like = "order_total_not_like_example"; // string | Filter on TOT-DBT using 'NotLike' operator
$order_total_contains = "order_total_contains_example"; // string | Filter on TOT-DBT using 'Contains' operator
$order_total_not_contains = "order_total_not_contains_example"; // string | Filter on TOT-DBT using 'NotContains' operator
$order_total_starts_with = "order_total_starts_with_example"; // string | Filter on TOT-DBT using 'StartsWith' operator
$order_total_not_starts_with = "order_total_not_starts_with_example"; // string | Filter on TOT-DBT using 'NotStartsWith' operator
$order_total_ends_with = "order_total_ends_with_example"; // string | Filter on TOT-DBT using 'EndsWith' operator
$order_total_not_ends_with = "order_total_not_ends_with_example"; // string | Filter on TOT-DBT using 'NotEndsWith' operator
$order_total_in = "order_total_in_example"; // string | Filter on TOT-DBT using 'In' operator
$order_total_between = "order_total_between_example"; // string | Filter on TOT-DBT using 'Between' operator
$amount_paid_not_equal = "amount_paid_not_equal_example"; // string | Filter on TOT-PAD using 'NotEqual' operator
$amount_paid_less = "amount_paid_less_example"; // string | Filter on TOT-PAD using 'Less' operator
$amount_paid_less_or_equal = "amount_paid_less_or_equal_example"; // string | Filter on TOT-PAD using 'LessOrEqual' operator
$amount_paid_greater = "amount_paid_greater_example"; // string | Filter on TOT-PAD using 'Greater' operator
$amount_paid_greater_or_equal = "amount_paid_greater_or_equal_example"; // string | Filter on TOT-PAD using 'GreaterOrEqual' operator
$amount_paid_is_null = "amount_paid_is_null_example"; // string | Filter on TOT-PAD using 'IsNull' operator
$amount_paid_is_not_null = "amount_paid_is_not_null_example"; // string | Filter on TOT-PAD using 'IsNotNull' operator
$amount_paid_like = "amount_paid_like_example"; // string | Filter on TOT-PAD using 'Like' operator
$amount_paid_not_like = "amount_paid_not_like_example"; // string | Filter on TOT-PAD using 'NotLike' operator
$amount_paid_contains = "amount_paid_contains_example"; // string | Filter on TOT-PAD using 'Contains' operator
$amount_paid_not_contains = "amount_paid_not_contains_example"; // string | Filter on TOT-PAD using 'NotContains' operator
$amount_paid_starts_with = "amount_paid_starts_with_example"; // string | Filter on TOT-PAD using 'StartsWith' operator
$amount_paid_not_starts_with = "amount_paid_not_starts_with_example"; // string | Filter on TOT-PAD using 'NotStartsWith' operator
$amount_paid_ends_with = "amount_paid_ends_with_example"; // string | Filter on TOT-PAD using 'EndsWith' operator
$amount_paid_not_ends_with = "amount_paid_not_ends_with_example"; // string | Filter on TOT-PAD using 'NotEndsWith' operator
$amount_paid_in = "amount_paid_in_example"; // string | Filter on TOT-PAD using 'In' operator
$amount_paid_between = "amount_paid_between_example"; // string | Filter on TOT-PAD using 'Between' operator
$debit_fully_paid_flag_not_equal = "debit_fully_paid_flag_not_equal_example"; // string | Filter on DBT-PAD using 'NotEqual' operator
$debit_fully_paid_flag_less = "debit_fully_paid_flag_less_example"; // string | Filter on DBT-PAD using 'Less' operator
$debit_fully_paid_flag_less_or_equal = "debit_fully_paid_flag_less_or_equal_example"; // string | Filter on DBT-PAD using 'LessOrEqual' operator
$debit_fully_paid_flag_greater = "debit_fully_paid_flag_greater_example"; // string | Filter on DBT-PAD using 'Greater' operator
$debit_fully_paid_flag_greater_or_equal = "debit_fully_paid_flag_greater_or_equal_example"; // string | Filter on DBT-PAD using 'GreaterOrEqual' operator
$debit_fully_paid_flag_is_null = "debit_fully_paid_flag_is_null_example"; // string | Filter on DBT-PAD using 'IsNull' operator
$debit_fully_paid_flag_is_not_null = "debit_fully_paid_flag_is_not_null_example"; // string | Filter on DBT-PAD using 'IsNotNull' operator
$debit_fully_paid_flag_like = "debit_fully_paid_flag_like_example"; // string | Filter on DBT-PAD using 'Like' operator
$debit_fully_paid_flag_not_like = "debit_fully_paid_flag_not_like_example"; // string | Filter on DBT-PAD using 'NotLike' operator
$debit_fully_paid_flag_contains = "debit_fully_paid_flag_contains_example"; // string | Filter on DBT-PAD using 'Contains' operator
$debit_fully_paid_flag_not_contains = "debit_fully_paid_flag_not_contains_example"; // string | Filter on DBT-PAD using 'NotContains' operator
$debit_fully_paid_flag_starts_with = "debit_fully_paid_flag_starts_with_example"; // string | Filter on DBT-PAD using 'StartsWith' operator
$debit_fully_paid_flag_not_starts_with = "debit_fully_paid_flag_not_starts_with_example"; // string | Filter on DBT-PAD using 'NotStartsWith' operator
$debit_fully_paid_flag_ends_with = "debit_fully_paid_flag_ends_with_example"; // string | Filter on DBT-PAD using 'EndsWith' operator
$debit_fully_paid_flag_not_ends_with = "debit_fully_paid_flag_not_ends_with_example"; // string | Filter on DBT-PAD using 'NotEndsWith' operator
$debit_fully_paid_flag_in = "debit_fully_paid_flag_in_example"; // string | Filter on DBT-PAD using 'In' operator
$debit_fully_paid_flag_between = "debit_fully_paid_flag_between_example"; // string | Filter on DBT-PAD using 'Between' operator
$due_date_not_equal = "due_date_not_equal_example"; // string | Filter on DUE-INF using 'NotEqual' operator
$due_date_less = "due_date_less_example"; // string | Filter on DUE-INF using 'Less' operator
$due_date_less_or_equal = "due_date_less_or_equal_example"; // string | Filter on DUE-INF using 'LessOrEqual' operator
$due_date_greater = "due_date_greater_example"; // string | Filter on DUE-INF using 'Greater' operator
$due_date_greater_or_equal = "due_date_greater_or_equal_example"; // string | Filter on DUE-INF using 'GreaterOrEqual' operator
$due_date_is_null = "due_date_is_null_example"; // string | Filter on DUE-INF using 'IsNull' operator
$due_date_is_not_null = "due_date_is_not_null_example"; // string | Filter on DUE-INF using 'IsNotNull' operator
$due_date_like = "due_date_like_example"; // string | Filter on DUE-INF using 'Like' operator
$due_date_not_like = "due_date_not_like_example"; // string | Filter on DUE-INF using 'NotLike' operator
$due_date_contains = "due_date_contains_example"; // string | Filter on DUE-INF using 'Contains' operator
$due_date_not_contains = "due_date_not_contains_example"; // string | Filter on DUE-INF using 'NotContains' operator
$due_date_starts_with = "due_date_starts_with_example"; // string | Filter on DUE-INF using 'StartsWith' operator
$due_date_not_starts_with = "due_date_not_starts_with_example"; // string | Filter on DUE-INF using 'NotStartsWith' operator
$due_date_ends_with = "due_date_ends_with_example"; // string | Filter on DUE-INF using 'EndsWith' operator
$due_date_not_ends_with = "due_date_not_ends_with_example"; // string | Filter on DUE-INF using 'NotEndsWith' operator
$due_date_in = "due_date_in_example"; // string | Filter on DUE-INF using 'In' operator
$due_date_between = "due_date_between_example"; // string | Filter on DUE-INF using 'Between' operator
$currency_code_not_equal = "currency_code_not_equal_example"; // string | Filter on BIL-CUR using 'NotEqual' operator
$currency_code_less = "currency_code_less_example"; // string | Filter on BIL-CUR using 'Less' operator
$currency_code_less_or_equal = "currency_code_less_or_equal_example"; // string | Filter on BIL-CUR using 'LessOrEqual' operator
$currency_code_greater = "currency_code_greater_example"; // string | Filter on BIL-CUR using 'Greater' operator
$currency_code_greater_or_equal = "currency_code_greater_or_equal_example"; // string | Filter on BIL-CUR using 'GreaterOrEqual' operator
$currency_code_is_null = "currency_code_is_null_example"; // string | Filter on BIL-CUR using 'IsNull' operator
$currency_code_is_not_null = "currency_code_is_not_null_example"; // string | Filter on BIL-CUR using 'IsNotNull' operator
$currency_code_like = "currency_code_like_example"; // string | Filter on BIL-CUR using 'Like' operator
$currency_code_not_like = "currency_code_not_like_example"; // string | Filter on BIL-CUR using 'NotLike' operator
$currency_code_contains = "currency_code_contains_example"; // string | Filter on BIL-CUR using 'Contains' operator
$currency_code_not_contains = "currency_code_not_contains_example"; // string | Filter on BIL-CUR using 'NotContains' operator
$currency_code_starts_with = "currency_code_starts_with_example"; // string | Filter on BIL-CUR using 'StartsWith' operator
$currency_code_not_starts_with = "currency_code_not_starts_with_example"; // string | Filter on BIL-CUR using 'NotStartsWith' operator
$currency_code_ends_with = "currency_code_ends_with_example"; // string | Filter on BIL-CUR using 'EndsWith' operator
$currency_code_not_ends_with = "currency_code_not_ends_with_example"; // string | Filter on BIL-CUR using 'NotEndsWith' operator
$currency_code_in = "currency_code_in_example"; // string | Filter on BIL-CUR using 'In' operator
$currency_code_between = "currency_code_between_example"; // string | Filter on BIL-CUR using 'Between' operator
$customer_number_not_equal = "customer_number_not_equal_example"; // string | Filter on SRC-CTM using 'NotEqual' operator
$customer_number_less = "customer_number_less_example"; // string | Filter on SRC-CTM using 'Less' operator
$customer_number_less_or_equal = "customer_number_less_or_equal_example"; // string | Filter on SRC-CTM using 'LessOrEqual' operator
$customer_number_greater = "customer_number_greater_example"; // string | Filter on SRC-CTM using 'Greater' operator
$customer_number_greater_or_equal = "customer_number_greater_or_equal_example"; // string | Filter on SRC-CTM using 'GreaterOrEqual' operator
$customer_number_is_null = "customer_number_is_null_example"; // string | Filter on SRC-CTM using 'IsNull' operator
$customer_number_is_not_null = "customer_number_is_not_null_example"; // string | Filter on SRC-CTM using 'IsNotNull' operator
$customer_number_like = "customer_number_like_example"; // string | Filter on SRC-CTM using 'Like' operator
$customer_number_not_like = "customer_number_not_like_example"; // string | Filter on SRC-CTM using 'NotLike' operator
$customer_number_contains = "customer_number_contains_example"; // string | Filter on SRC-CTM using 'Contains' operator
$customer_number_not_contains = "customer_number_not_contains_example"; // string | Filter on SRC-CTM using 'NotContains' operator
$customer_number_starts_with = "customer_number_starts_with_example"; // string | Filter on SRC-CTM using 'StartsWith' operator
$customer_number_not_starts_with = "customer_number_not_starts_with_example"; // string | Filter on SRC-CTM using 'NotStartsWith' operator
$customer_number_ends_with = "customer_number_ends_with_example"; // string | Filter on SRC-CTM using 'EndsWith' operator
$customer_number_not_ends_with = "customer_number_not_ends_with_example"; // string | Filter on SRC-CTM using 'NotEndsWith' operator
$customer_number_in = "customer_number_in_example"; // string | Filter on SRC-CTM using 'In' operator
$customer_number_between = "customer_number_between_example"; // string | Filter on SRC-CTM using 'Between' operator
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
    $result = $apiInstance->invoiceSearchByCustomer($customer_number, $order_number, $order_total, $amount_paid, $debit_fully_paid_flag, $due_date, $currency_code, $customer_number2, $billing_organization_code, $order_number_not_equal, $order_number_less, $order_number_less_or_equal, $order_number_greater, $order_number_greater_or_equal, $order_number_is_null, $order_number_is_not_null, $order_number_like, $order_number_not_like, $order_number_contains, $order_number_not_contains, $order_number_starts_with, $order_number_not_starts_with, $order_number_ends_with, $order_number_not_ends_with, $order_number_in, $order_number_between, $order_total_not_equal, $order_total_less, $order_total_less_or_equal, $order_total_greater, $order_total_greater_or_equal, $order_total_is_null, $order_total_is_not_null, $order_total_like, $order_total_not_like, $order_total_contains, $order_total_not_contains, $order_total_starts_with, $order_total_not_starts_with, $order_total_ends_with, $order_total_not_ends_with, $order_total_in, $order_total_between, $amount_paid_not_equal, $amount_paid_less, $amount_paid_less_or_equal, $amount_paid_greater, $amount_paid_greater_or_equal, $amount_paid_is_null, $amount_paid_is_not_null, $amount_paid_like, $amount_paid_not_like, $amount_paid_contains, $amount_paid_not_contains, $amount_paid_starts_with, $amount_paid_not_starts_with, $amount_paid_ends_with, $amount_paid_not_ends_with, $amount_paid_in, $amount_paid_between, $debit_fully_paid_flag_not_equal, $debit_fully_paid_flag_less, $debit_fully_paid_flag_less_or_equal, $debit_fully_paid_flag_greater, $debit_fully_paid_flag_greater_or_equal, $debit_fully_paid_flag_is_null, $debit_fully_paid_flag_is_not_null, $debit_fully_paid_flag_like, $debit_fully_paid_flag_not_like, $debit_fully_paid_flag_contains, $debit_fully_paid_flag_not_contains, $debit_fully_paid_flag_starts_with, $debit_fully_paid_flag_not_starts_with, $debit_fully_paid_flag_ends_with, $debit_fully_paid_flag_not_ends_with, $debit_fully_paid_flag_in, $debit_fully_paid_flag_between, $due_date_not_equal, $due_date_less, $due_date_less_or_equal, $due_date_greater, $due_date_greater_or_equal, $due_date_is_null, $due_date_is_not_null, $due_date_like, $due_date_not_like, $due_date_contains, $due_date_not_contains, $due_date_starts_with, $due_date_not_starts_with, $due_date_ends_with, $due_date_not_ends_with, $due_date_in, $due_date_between, $currency_code_not_equal, $currency_code_less, $currency_code_less_or_equal, $currency_code_greater, $currency_code_greater_or_equal, $currency_code_is_null, $currency_code_is_not_null, $currency_code_like, $currency_code_not_like, $currency_code_contains, $currency_code_not_contains, $currency_code_starts_with, $currency_code_not_starts_with, $currency_code_ends_with, $currency_code_not_ends_with, $currency_code_in, $currency_code_between, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceSearchByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer number |
 **order_number** | **string**| Filter on DBT-NBR using &#39;Equal&#39; operator | [optional]
 **order_total** | **string**| Filter on TOT-DBT using &#39;Equal&#39; operator | [optional]
 **amount_paid** | **string**| Filter on TOT-PAD using &#39;Equal&#39; operator | [optional]
 **debit_fully_paid_flag** | **string**| Filter on DBT-PAD using &#39;Equal&#39; operator | [optional]
 **due_date** | **string**| Filter on DUE-INF using &#39;Equal&#39; operator | [optional]
 **currency_code** | **string**| Filter on BIL-CUR using &#39;Equal&#39; operator | [optional]
 **customer_number2** | **string**| Filter on SRC-CTM using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **order_number_not_equal** | **string**| Filter on DBT-NBR using &#39;NotEqual&#39; operator | [optional]
 **order_number_less** | **string**| Filter on DBT-NBR using &#39;Less&#39; operator | [optional]
 **order_number_less_or_equal** | **string**| Filter on DBT-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **order_number_greater** | **string**| Filter on DBT-NBR using &#39;Greater&#39; operator | [optional]
 **order_number_greater_or_equal** | **string**| Filter on DBT-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_number_is_null** | **string**| Filter on DBT-NBR using &#39;IsNull&#39; operator | [optional]
 **order_number_is_not_null** | **string**| Filter on DBT-NBR using &#39;IsNotNull&#39; operator | [optional]
 **order_number_like** | **string**| Filter on DBT-NBR using &#39;Like&#39; operator | [optional]
 **order_number_not_like** | **string**| Filter on DBT-NBR using &#39;NotLike&#39; operator | [optional]
 **order_number_contains** | **string**| Filter on DBT-NBR using &#39;Contains&#39; operator | [optional]
 **order_number_not_contains** | **string**| Filter on DBT-NBR using &#39;NotContains&#39; operator | [optional]
 **order_number_starts_with** | **string**| Filter on DBT-NBR using &#39;StartsWith&#39; operator | [optional]
 **order_number_not_starts_with** | **string**| Filter on DBT-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **order_number_ends_with** | **string**| Filter on DBT-NBR using &#39;EndsWith&#39; operator | [optional]
 **order_number_not_ends_with** | **string**| Filter on DBT-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **order_number_in** | **string**| Filter on DBT-NBR using &#39;In&#39; operator | [optional]
 **order_number_between** | **string**| Filter on DBT-NBR using &#39;Between&#39; operator | [optional]
 **order_total_not_equal** | **string**| Filter on TOT-DBT using &#39;NotEqual&#39; operator | [optional]
 **order_total_less** | **string**| Filter on TOT-DBT using &#39;Less&#39; operator | [optional]
 **order_total_less_or_equal** | **string**| Filter on TOT-DBT using &#39;LessOrEqual&#39; operator | [optional]
 **order_total_greater** | **string**| Filter on TOT-DBT using &#39;Greater&#39; operator | [optional]
 **order_total_greater_or_equal** | **string**| Filter on TOT-DBT using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_total_is_null** | **string**| Filter on TOT-DBT using &#39;IsNull&#39; operator | [optional]
 **order_total_is_not_null** | **string**| Filter on TOT-DBT using &#39;IsNotNull&#39; operator | [optional]
 **order_total_like** | **string**| Filter on TOT-DBT using &#39;Like&#39; operator | [optional]
 **order_total_not_like** | **string**| Filter on TOT-DBT using &#39;NotLike&#39; operator | [optional]
 **order_total_contains** | **string**| Filter on TOT-DBT using &#39;Contains&#39; operator | [optional]
 **order_total_not_contains** | **string**| Filter on TOT-DBT using &#39;NotContains&#39; operator | [optional]
 **order_total_starts_with** | **string**| Filter on TOT-DBT using &#39;StartsWith&#39; operator | [optional]
 **order_total_not_starts_with** | **string**| Filter on TOT-DBT using &#39;NotStartsWith&#39; operator | [optional]
 **order_total_ends_with** | **string**| Filter on TOT-DBT using &#39;EndsWith&#39; operator | [optional]
 **order_total_not_ends_with** | **string**| Filter on TOT-DBT using &#39;NotEndsWith&#39; operator | [optional]
 **order_total_in** | **string**| Filter on TOT-DBT using &#39;In&#39; operator | [optional]
 **order_total_between** | **string**| Filter on TOT-DBT using &#39;Between&#39; operator | [optional]
 **amount_paid_not_equal** | **string**| Filter on TOT-PAD using &#39;NotEqual&#39; operator | [optional]
 **amount_paid_less** | **string**| Filter on TOT-PAD using &#39;Less&#39; operator | [optional]
 **amount_paid_less_or_equal** | **string**| Filter on TOT-PAD using &#39;LessOrEqual&#39; operator | [optional]
 **amount_paid_greater** | **string**| Filter on TOT-PAD using &#39;Greater&#39; operator | [optional]
 **amount_paid_greater_or_equal** | **string**| Filter on TOT-PAD using &#39;GreaterOrEqual&#39; operator | [optional]
 **amount_paid_is_null** | **string**| Filter on TOT-PAD using &#39;IsNull&#39; operator | [optional]
 **amount_paid_is_not_null** | **string**| Filter on TOT-PAD using &#39;IsNotNull&#39; operator | [optional]
 **amount_paid_like** | **string**| Filter on TOT-PAD using &#39;Like&#39; operator | [optional]
 **amount_paid_not_like** | **string**| Filter on TOT-PAD using &#39;NotLike&#39; operator | [optional]
 **amount_paid_contains** | **string**| Filter on TOT-PAD using &#39;Contains&#39; operator | [optional]
 **amount_paid_not_contains** | **string**| Filter on TOT-PAD using &#39;NotContains&#39; operator | [optional]
 **amount_paid_starts_with** | **string**| Filter on TOT-PAD using &#39;StartsWith&#39; operator | [optional]
 **amount_paid_not_starts_with** | **string**| Filter on TOT-PAD using &#39;NotStartsWith&#39; operator | [optional]
 **amount_paid_ends_with** | **string**| Filter on TOT-PAD using &#39;EndsWith&#39; operator | [optional]
 **amount_paid_not_ends_with** | **string**| Filter on TOT-PAD using &#39;NotEndsWith&#39; operator | [optional]
 **amount_paid_in** | **string**| Filter on TOT-PAD using &#39;In&#39; operator | [optional]
 **amount_paid_between** | **string**| Filter on TOT-PAD using &#39;Between&#39; operator | [optional]
 **debit_fully_paid_flag_not_equal** | **string**| Filter on DBT-PAD using &#39;NotEqual&#39; operator | [optional]
 **debit_fully_paid_flag_less** | **string**| Filter on DBT-PAD using &#39;Less&#39; operator | [optional]
 **debit_fully_paid_flag_less_or_equal** | **string**| Filter on DBT-PAD using &#39;LessOrEqual&#39; operator | [optional]
 **debit_fully_paid_flag_greater** | **string**| Filter on DBT-PAD using &#39;Greater&#39; operator | [optional]
 **debit_fully_paid_flag_greater_or_equal** | **string**| Filter on DBT-PAD using &#39;GreaterOrEqual&#39; operator | [optional]
 **debit_fully_paid_flag_is_null** | **string**| Filter on DBT-PAD using &#39;IsNull&#39; operator | [optional]
 **debit_fully_paid_flag_is_not_null** | **string**| Filter on DBT-PAD using &#39;IsNotNull&#39; operator | [optional]
 **debit_fully_paid_flag_like** | **string**| Filter on DBT-PAD using &#39;Like&#39; operator | [optional]
 **debit_fully_paid_flag_not_like** | **string**| Filter on DBT-PAD using &#39;NotLike&#39; operator | [optional]
 **debit_fully_paid_flag_contains** | **string**| Filter on DBT-PAD using &#39;Contains&#39; operator | [optional]
 **debit_fully_paid_flag_not_contains** | **string**| Filter on DBT-PAD using &#39;NotContains&#39; operator | [optional]
 **debit_fully_paid_flag_starts_with** | **string**| Filter on DBT-PAD using &#39;StartsWith&#39; operator | [optional]
 **debit_fully_paid_flag_not_starts_with** | **string**| Filter on DBT-PAD using &#39;NotStartsWith&#39; operator | [optional]
 **debit_fully_paid_flag_ends_with** | **string**| Filter on DBT-PAD using &#39;EndsWith&#39; operator | [optional]
 **debit_fully_paid_flag_not_ends_with** | **string**| Filter on DBT-PAD using &#39;NotEndsWith&#39; operator | [optional]
 **debit_fully_paid_flag_in** | **string**| Filter on DBT-PAD using &#39;In&#39; operator | [optional]
 **debit_fully_paid_flag_between** | **string**| Filter on DBT-PAD using &#39;Between&#39; operator | [optional]
 **due_date_not_equal** | **string**| Filter on DUE-INF using &#39;NotEqual&#39; operator | [optional]
 **due_date_less** | **string**| Filter on DUE-INF using &#39;Less&#39; operator | [optional]
 **due_date_less_or_equal** | **string**| Filter on DUE-INF using &#39;LessOrEqual&#39; operator | [optional]
 **due_date_greater** | **string**| Filter on DUE-INF using &#39;Greater&#39; operator | [optional]
 **due_date_greater_or_equal** | **string**| Filter on DUE-INF using &#39;GreaterOrEqual&#39; operator | [optional]
 **due_date_is_null** | **string**| Filter on DUE-INF using &#39;IsNull&#39; operator | [optional]
 **due_date_is_not_null** | **string**| Filter on DUE-INF using &#39;IsNotNull&#39; operator | [optional]
 **due_date_like** | **string**| Filter on DUE-INF using &#39;Like&#39; operator | [optional]
 **due_date_not_like** | **string**| Filter on DUE-INF using &#39;NotLike&#39; operator | [optional]
 **due_date_contains** | **string**| Filter on DUE-INF using &#39;Contains&#39; operator | [optional]
 **due_date_not_contains** | **string**| Filter on DUE-INF using &#39;NotContains&#39; operator | [optional]
 **due_date_starts_with** | **string**| Filter on DUE-INF using &#39;StartsWith&#39; operator | [optional]
 **due_date_not_starts_with** | **string**| Filter on DUE-INF using &#39;NotStartsWith&#39; operator | [optional]
 **due_date_ends_with** | **string**| Filter on DUE-INF using &#39;EndsWith&#39; operator | [optional]
 **due_date_not_ends_with** | **string**| Filter on DUE-INF using &#39;NotEndsWith&#39; operator | [optional]
 **due_date_in** | **string**| Filter on DUE-INF using &#39;In&#39; operator | [optional]
 **due_date_between** | **string**| Filter on DUE-INF using &#39;Between&#39; operator | [optional]
 **currency_code_not_equal** | **string**| Filter on BIL-CUR using &#39;NotEqual&#39; operator | [optional]
 **currency_code_less** | **string**| Filter on BIL-CUR using &#39;Less&#39; operator | [optional]
 **currency_code_less_or_equal** | **string**| Filter on BIL-CUR using &#39;LessOrEqual&#39; operator | [optional]
 **currency_code_greater** | **string**| Filter on BIL-CUR using &#39;Greater&#39; operator | [optional]
 **currency_code_greater_or_equal** | **string**| Filter on BIL-CUR using &#39;GreaterOrEqual&#39; operator | [optional]
 **currency_code_is_null** | **string**| Filter on BIL-CUR using &#39;IsNull&#39; operator | [optional]
 **currency_code_is_not_null** | **string**| Filter on BIL-CUR using &#39;IsNotNull&#39; operator | [optional]
 **currency_code_like** | **string**| Filter on BIL-CUR using &#39;Like&#39; operator | [optional]
 **currency_code_not_like** | **string**| Filter on BIL-CUR using &#39;NotLike&#39; operator | [optional]
 **currency_code_contains** | **string**| Filter on BIL-CUR using &#39;Contains&#39; operator | [optional]
 **currency_code_not_contains** | **string**| Filter on BIL-CUR using &#39;NotContains&#39; operator | [optional]
 **currency_code_starts_with** | **string**| Filter on BIL-CUR using &#39;StartsWith&#39; operator | [optional]
 **currency_code_not_starts_with** | **string**| Filter on BIL-CUR using &#39;NotStartsWith&#39; operator | [optional]
 **currency_code_ends_with** | **string**| Filter on BIL-CUR using &#39;EndsWith&#39; operator | [optional]
 **currency_code_not_ends_with** | **string**| Filter on BIL-CUR using &#39;NotEndsWith&#39; operator | [optional]
 **currency_code_in** | **string**| Filter on BIL-CUR using &#39;In&#39; operator | [optional]
 **currency_code_between** | **string**| Filter on BIL-CUR using &#39;Between&#39; operator | [optional]
 **customer_number_not_equal** | **string**| Filter on SRC-CTM using &#39;NotEqual&#39; operator | [optional]
 **customer_number_less** | **string**| Filter on SRC-CTM using &#39;Less&#39; operator | [optional]
 **customer_number_less_or_equal** | **string**| Filter on SRC-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **customer_number_greater** | **string**| Filter on SRC-CTM using &#39;Greater&#39; operator | [optional]
 **customer_number_greater_or_equal** | **string**| Filter on SRC-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **customer_number_is_null** | **string**| Filter on SRC-CTM using &#39;IsNull&#39; operator | [optional]
 **customer_number_is_not_null** | **string**| Filter on SRC-CTM using &#39;IsNotNull&#39; operator | [optional]
 **customer_number_like** | **string**| Filter on SRC-CTM using &#39;Like&#39; operator | [optional]
 **customer_number_not_like** | **string**| Filter on SRC-CTM using &#39;NotLike&#39; operator | [optional]
 **customer_number_contains** | **string**| Filter on SRC-CTM using &#39;Contains&#39; operator | [optional]
 **customer_number_not_contains** | **string**| Filter on SRC-CTM using &#39;NotContains&#39; operator | [optional]
 **customer_number_starts_with** | **string**| Filter on SRC-CTM using &#39;StartsWith&#39; operator | [optional]
 **customer_number_not_starts_with** | **string**| Filter on SRC-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **customer_number_ends_with** | **string**| Filter on SRC-CTM using &#39;EndsWith&#39; operator | [optional]
 **customer_number_not_ends_with** | **string**| Filter on SRC-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **customer_number_in** | **string**| Filter on SRC-CTM using &#39;In&#39; operator | [optional]
 **customer_number_between** | **string**| Filter on SRC-CTM using &#39;Between&#39; operator | [optional]
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

[**\Swagger\Client\Model\SearchResultOrderInvoice**](../Model/SearchResultOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

