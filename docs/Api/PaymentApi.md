# Swagger\Client\PaymentApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentGetInstallmentBillingPlan**](PaymentApi.md#paymentGetInstallmentBillingPlan) | **GET** /orders/{orderNumber}/installment-billing-schedule | Get installment billing information for the current order
[**paymentPaySelectedDebits**](PaymentApi.md#paymentPaySelectedDebits) | **POST** /{customerNumber}/payments/invoices | Applies a payment to the specified unpaid debits
[**paymentUpdateInstallments**](PaymentApi.md#paymentUpdateInstallments) | **POST** /orders/{orderNumber}/installment-schedule | Updates the current list of installments


# **paymentGetInstallmentBillingPlan**
> \Swagger\Client\Model\InstallmentBillingResponse paymentGetInstallmentBillingPlan($order_number, $installment_billing_code, $assume_minimum_down_payment)

Get installment billing information for the current order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Order Number
$installment_billing_code = "installment_billing_code_example"; // string | Installment Billing Code
$assume_minimum_down_payment = true; // bool | Assume minimum down payment will be made if a down payment is required

try {
    $result = $apiInstance->paymentGetInstallmentBillingPlan($order_number, $installment_billing_code, $assume_minimum_down_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentGetInstallmentBillingPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order Number |
 **installment_billing_code** | **string**| Installment Billing Code |
 **assume_minimum_down_payment** | **bool**| Assume minimum down payment will be made if a down payment is required | [optional]

### Return type

[**\Swagger\Client\Model\InstallmentBillingResponse**](../Model/InstallmentBillingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentPaySelectedDebits**
> \Swagger\Client\Model\DebitPaymentResponse paymentPaySelectedDebits($customer_number, $request)

Applies a payment to the specified unpaid debits

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer Number
$request = new \Swagger\Client\Model\DebitPaymentRequest(); // \Swagger\Client\Model\DebitPaymentRequest | A DebitPaymentRequest object for applying a payment to debits

try {
    $result = $apiInstance->paymentPaySelectedDebits($customer_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentPaySelectedDebits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer Number |
 **request** | [**\Swagger\Client\Model\DebitPaymentRequest**](../Model/DebitPaymentRequest.md)| A DebitPaymentRequest object for applying a payment to debits |

### Return type

[**\Swagger\Client\Model\DebitPaymentResponse**](../Model/DebitPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentUpdateInstallments**
> paymentUpdateInstallments($order_number, $installment_billing_create_request)

Updates the current list of installments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Order number to update the installment schedule
$installment_billing_create_request = new \Swagger\Client\Model\InstallmentBillingCreateRequest(); // \Swagger\Client\Model\InstallmentBillingCreateRequest | A InstallmentBillingCreateRequest object

try {
    $apiInstance->paymentUpdateInstallments($order_number, $installment_billing_create_request);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->paymentUpdateInstallments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number to update the installment schedule |
 **installment_billing_create_request** | [**\Swagger\Client\Model\InstallmentBillingCreateRequest**](../Model/InstallmentBillingCreateRequest.md)| A InstallmentBillingCreateRequest object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

