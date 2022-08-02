# Swagger\Client\OrderApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderAddCoupons**](OrderApi.md#orderAddCoupons) | **POST** /orders/{orderNumber}/coupons | Add coupons to an order.
[**orderAddPayments**](OrderApi.md#orderAddPayments) | **POST** /orders/{orderNumber}/payments | Add payments to an order.  Credit cards payments may be authorized immediately depending on your  system settings.
[**orderCommit**](OrderApi.md#orderCommit) | **POST** /orders/{orderNumber}/commit | Commit an order and payment. Committing the order commits the inventory and  releases the order for fulfillment.  Any access agreements on the order will  be released if the control group auto-release setting is set to release  at order completion.
[**orderCreate**](OrderApi.md#orderCreate) | **POST** /orders | Create a new order. This method takes the incoming order create request object and uses it to create a new   Advantage order. The new Advantage order has a new order line created for each OrderLineIn object   contained in the order create request object.
[**orderCreateAppliedReturnOrder**](OrderApi.md#orderCreateAppliedReturnOrder) | **POST** /orders/{applyToOrderNumber}/returns | 
[**orderCreateOrderTracking**](OrderApi.md#orderCreateOrderTracking) | **POST** /orders/{orderNumber}/tracking | Create a shipment tracking record for an order
[**orderDeleteCommittedOrder**](OrderApi.md#orderDeleteCommittedOrder) | **DELETE** /orders/{orderNumber} | Deletes a committed order.
[**orderDeleteCommittedOrderLine**](OrderApi.md#orderDeleteCommittedOrderLine) | **DELETE** /orders/{orderNumber}/lines/{lineNumber} | Deletes a committed order line.
[**orderDeletePendingByCustomer**](OrderApi.md#orderDeletePendingByCustomer) | **DELETE** /customers/{customerNumber}/orders/pending | Delete all uncommitted orders for a given bill-to customer and order source.
[**orderGet**](OrderApi.md#orderGet) | **GET** /orders/{orderNumber} | Get an order&#39;s information given the order number and   a few options specified about how you&#39;d like that order information.
[**orderGetDefaultCurrency**](OrderApi.md#orderGetDefaultCurrency) | **GET** /orders/default-currency | Gets default currency for adding an order line
[**orderGetOrderLineDefaults**](OrderApi.md#orderGetOrderLineDefaults) | **GET** /orders/order-line-defaults | Gets default values for adding an order line
[**orderGetPaymentDefaults**](OrderApi.md#orderGetPaymentDefaults) | **GET** /orders/payment-defaults | Gets default values for entering a payment for this given order.  Assumes the order has already been submitted (though not necessarily committed).
[**orderGetPendingPremiums**](OrderApi.md#orderGetPendingPremiums) | **GET** /orders/{orderNumber}/pending-premiums | Gets a list of pending premium items on this order.
[**orderGetShippingChoices**](OrderApi.md#orderGetShippingChoices) | **GET** /orders/{orderNumber}/shipping-choices | Get a list of valid shipping options for a given order.
[**orderGetValidCardTypes**](OrderApi.md#orderGetValidCardTypes) | **GET** /orders/{orderNumber}/valid-payment-methods/credit-cards | Get a list of valid card types for a given order.
[**orderGetValidCardsForOrder**](OrderApi.md#orderGetValidCardsForOrder) | **GET** /orders/{orderNumber}/valid-payment-methods/saved-credit-cards | Get the valid credit cards for a given order.
[**orderGetValidDirectDebitTypes**](OrderApi.md#orderGetValidDirectDebitTypes) | **GET** /orders/{orderNumber}/valid-payment-methods/direct-debits | Get a list of valid direct debit payment methods for a given order.  You can also include billing organization and currency for   a more filtered result.
[**orderGetValidGiftCertificatesForOrder**](OrderApi.md#orderGetValidGiftCertificatesForOrder) | **GET** /orders/{orderNumber}/valid-payment-methods/saved-gift-certificates | 
[**orderPost**](OrderApi.md#orderPost) | **POST** /orders/{orderNumber}/post | Post an activated web order.
[**orderPutCoupons**](OrderApi.md#orderPutCoupons) | **PUT** /orders/{orderNumber}/coupons | Replace coupons for an order.
[**orderRemovePayment**](OrderApi.md#orderRemovePayment) | **DELETE** /orders/{orderNumber}/payments/{creditVoucherNumber} | Removes the specified payments from the specified order.
[**orderSetPendingPremiumItemNumber**](OrderApi.md#orderSetPendingPremiumItemNumber) | **POST** /orders/{orderNumber}/pending-premiums | Sets the item number on a premium set item. This method is not applicable for premium items.
[**orderUpdate**](OrderApi.md#orderUpdate) | **POST** /orders/{orderNumber} | Update an existing order.


# **orderAddCoupons**
> orderAddCoupons($order_number, $coupon_request)

Add coupons to an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The order number
$coupon_request = new \Swagger\Client\Model\CouponRequest(); // \Swagger\Client\Model\CouponRequest | The coupons to add to the order

try {
    $apiInstance->orderAddCoupons($order_number, $coupon_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The order number |
 **coupon_request** | [**\Swagger\Client\Model\CouponRequest**](../Model/CouponRequest.md)| The coupons to add to the order |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderAddPayments**
> orderAddPayments($order_number, $payment_request)

Add payments to an order.  Credit cards payments may be authorized immediately depending on your  system settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The order number
$payment_request = new \Swagger\Client\Model\PaymentRequest(); // \Swagger\Client\Model\PaymentRequest | The payments to apply to the order.

try {
    $apiInstance->orderAddPayments($order_number, $payment_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The order number |
 **payment_request** | [**\Swagger\Client\Model\PaymentRequest**](../Model/PaymentRequest.md)| The payments to apply to the order. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCommit**
> orderCommit($order_number, $payment_request)

Commit an order and payment. Committing the order commits the inventory and  releases the order for fulfillment.  Any access agreements on the order will  be released if the control group auto-release setting is set to release  at order completion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Advantage order number of the order to commit.
$payment_request = new \Swagger\Client\Model\PaymentRequest(); // \Swagger\Client\Model\PaymentRequest | A PaymentRequest object.

try {
    $apiInstance->orderCommit($order_number, $payment_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Advantage order number of the order to commit. |
 **payment_request** | [**\Swagger\Client\Model\PaymentRequest**](../Model/PaymentRequest.md)| A PaymentRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreate**
> \Swagger\Client\Model\Order orderCreate($order_create_request)

Create a new order. This method takes the incoming order create request object and uses it to create a new   Advantage order. The new Advantage order has a new order line created for each OrderLineIn object   contained in the order create request object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_create_request = new \Swagger\Client\Model\OrderCreateRequest(); // \Swagger\Client\Model\OrderCreateRequest | An OrderCreateRequest object.

try {
    $result = $apiInstance->orderCreate($order_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_create_request** | [**\Swagger\Client\Model\OrderCreateRequest**](../Model/OrderCreateRequest.md)| An OrderCreateRequest object. |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreateAppliedReturnOrder**
> \Swagger\Client\Model\Order orderCreateAppliedReturnOrder($apply_to_order_number, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apply_to_order_number = "apply_to_order_number_example"; // string | 
$request = new \Swagger\Client\Model\AppliedReturnOrderCreateRequest(); // \Swagger\Client\Model\AppliedReturnOrderCreateRequest | 

try {
    $result = $apiInstance->orderCreateAppliedReturnOrder($apply_to_order_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateAppliedReturnOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apply_to_order_number** | **string**|  |
 **request** | [**\Swagger\Client\Model\AppliedReturnOrderCreateRequest**](../Model/AppliedReturnOrderCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreateOrderTracking**
> orderCreateOrderTracking($order_number, $order_tracking_create_request)

Create a shipment tracking record for an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | An Advantage Order Number to create an order tracking record
$order_tracking_create_request = new \Swagger\Client\Model\OrderTrackingCreateRequest(); // \Swagger\Client\Model\OrderTrackingCreateRequest | Information needed to create order tracking record

try {
    $apiInstance->orderCreateOrderTracking($order_number, $order_tracking_create_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateOrderTracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| An Advantage Order Number to create an order tracking record |
 **order_tracking_create_request** | [**\Swagger\Client\Model\OrderTrackingCreateRequest**](../Model/OrderTrackingCreateRequest.md)| Information needed to create order tracking record |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDeleteCommittedOrder**
> orderDeleteCommittedOrder($order_number)

Deletes a committed order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Order number of committed order to delete

try {
    $apiInstance->orderDeleteCommittedOrder($order_number);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDeleteCommittedOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number of committed order to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDeleteCommittedOrderLine**
> orderDeleteCommittedOrderLine($order_number, $line_number)

Deletes a committed order line.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Order number of committed order line to delete
$line_number = "line_number_example"; // string | Order line number of committed order line to delete

try {
    $apiInstance->orderDeleteCommittedOrderLine($order_number, $line_number);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDeleteCommittedOrderLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number of committed order line to delete |
 **line_number** | **string**| Order line number of committed order line to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDeletePendingByCustomer**
> orderDeletePendingByCustomer($customer_number, $order_source_code)

Delete all uncommitted orders for a given bill-to customer and order source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | An Advantage customer number. Only orders with this customer number as the bill-to will be purged.
$order_source_code = "order_source_code_example"; // string | If non-blank, purges only orders with a matching order source.

try {
    $apiInstance->orderDeletePendingByCustomer($customer_number, $order_source_code);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDeletePendingByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| An Advantage customer number. Only orders with this customer number as the bill-to will be purged. |
 **order_source_code** | **string**| If non-blank, purges only orders with a matching order source. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGet**
> \Swagger\Client\Model\Order orderGet($order_number, $settings_display_amount, $settings_include_details, $settings_include_package_components, $settings_include_inserts)

Get an order's information given the order number and   a few options specified about how you'd like that order information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | An Advantage order number.
$settings_display_amount = "settings_display_amount_example"; // string | What type of amount to display for the order.
$settings_include_details = true; // bool | Include order lines in the response?  The default is true.
$settings_include_package_components = true; // bool | Include order lines for package components in the response? The default is true.  Note that this setting applies only if IncludeDetails is true.
$settings_include_inserts = true; // bool | Include order lines for order inserts in the response?  The default is true.

try {
    $result = $apiInstance->orderGet($order_number, $settings_display_amount, $settings_include_details, $settings_include_package_components, $settings_include_inserts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| An Advantage order number. |
 **settings_display_amount** | **string**| What type of amount to display for the order. | [optional]
 **settings_include_details** | **bool**| Include order lines in the response?  The default is true. | [optional]
 **settings_include_package_components** | **bool**| Include order lines for package components in the response? The default is true.  Note that this setting applies only if IncludeDetails is true. | [optional]
 **settings_include_inserts** | **bool**| Include order lines for order inserts in the response?  The default is true. | [optional]

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetDefaultCurrency**
> \Swagger\Client\Model\DefaultCurrencyResponse orderGetDefaultCurrency($request_bill_to_customer_number, $request_promotion_code)

Gets default currency for adding an order line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_bill_to_customer_number = "request_bill_to_customer_number_example"; // string | The bill-to customer for the order.
$request_promotion_code = "request_promotion_code_example"; // string | The promotion code (sometimes referred to as key code).

try {
    $result = $apiInstance->orderGetDefaultCurrency($request_bill_to_customer_number, $request_promotion_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetDefaultCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_bill_to_customer_number** | **string**| The bill-to customer for the order. | [optional]
 **request_promotion_code** | **string**| The promotion code (sometimes referred to as key code). | [optional]

### Return type

[**\Swagger\Client\Model\DefaultCurrencyResponse**](../Model/DefaultCurrencyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetOrderLineDefaults**
> \Swagger\Client\Model\OrderLineDefaults orderGetOrderLineDefaults($order_line_bill_to_customer_number, $order_line_bill_to_address_code, $order_line_ship_to_customer_number, $order_line_ship_to_address_code, $order_line_item_number, $order_line_currency_code, $order_line_promotion_code, $order_line_promotion_choice_code, $order_line_get_default_subscription_email, $order_line_get_default_agreement_email)

Gets default values for adding an order line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_line_bill_to_customer_number = "order_line_bill_to_customer_number_example"; // string | The customer's Advantage customer number.
$order_line_bill_to_address_code = "order_line_bill_to_address_code_example"; // string | Address code
$order_line_ship_to_customer_number = "order_line_ship_to_customer_number_example"; // string | The customer's Advantage customer number.
$order_line_ship_to_address_code = "order_line_ship_to_address_code_example"; // string | Address code
$order_line_item_number = "order_line_item_number_example"; // string | The item number, identifying which access agreement is being ordered (Publication Code for Subscription   Items).
$order_line_currency_code = "order_line_currency_code_example"; // string | The order currency
$order_line_promotion_code = "order_line_promotion_code_example"; // string | The promotion code (sometimes referred to as key code).
$order_line_promotion_choice_code = "order_line_promotion_choice_code_example"; // string | The promotion choice, indicating a set of default settings for an order line.
$order_line_get_default_subscription_email = true; // bool | If true, response will include default subscription email, if one exists
$order_line_get_default_agreement_email = true; // bool | If true, response will include default agreement email, if one exists

try {
    $result = $apiInstance->orderGetOrderLineDefaults($order_line_bill_to_customer_number, $order_line_bill_to_address_code, $order_line_ship_to_customer_number, $order_line_ship_to_address_code, $order_line_item_number, $order_line_currency_code, $order_line_promotion_code, $order_line_promotion_choice_code, $order_line_get_default_subscription_email, $order_line_get_default_agreement_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrderLineDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_bill_to_customer_number** | **string**| The customer&#39;s Advantage customer number. | [optional]
 **order_line_bill_to_address_code** | **string**| Address code | [optional]
 **order_line_ship_to_customer_number** | **string**| The customer&#39;s Advantage customer number. | [optional]
 **order_line_ship_to_address_code** | **string**| Address code | [optional]
 **order_line_item_number** | **string**| The item number, identifying which access agreement is being ordered (Publication Code for Subscription   Items). | [optional]
 **order_line_currency_code** | **string**| The order currency | [optional]
 **order_line_promotion_code** | **string**| The promotion code (sometimes referred to as key code). | [optional]
 **order_line_promotion_choice_code** | **string**| The promotion choice, indicating a set of default settings for an order line. | [optional]
 **order_line_get_default_subscription_email** | **bool**| If true, response will include default subscription email, if one exists | [optional]
 **order_line_get_default_agreement_email** | **bool**| If true, response will include default agreement email, if one exists | [optional]

### Return type

[**\Swagger\Client\Model\OrderLineDefaults**](../Model/OrderLineDefaults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetPaymentDefaults**
> \Swagger\Client\Model\PaymentDefaults orderGetPaymentDefaults($order_numbers)

Gets default values for entering a payment for this given order.  Assumes the order has already been submitted (though not necessarily committed).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_numbers = array("order_numbers_example"); // string[] | Order number that is being paid

try {
    $result = $apiInstance->orderGetPaymentDefaults($order_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetPaymentDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_numbers** | [**string[]**](../Model/string.md)| Order number that is being paid |

### Return type

[**\Swagger\Client\Model\PaymentDefaults**](../Model/PaymentDefaults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetPendingPremiums**
> \Swagger\Client\Model\SearchResultPendingPremium orderGetPendingPremiums($order_number)

Gets a list of pending premium items on this order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Order number

try {
    $result = $apiInstance->orderGetPendingPremiums($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetPendingPremiums: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number |

### Return type

[**\Swagger\Client\Model\SearchResultPendingPremium**](../Model/SearchResultPendingPremium.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetShippingChoices**
> \Swagger\Client\Model\ShippingChoice[] orderGetShippingChoices($order_number)

Get a list of valid shipping options for a given order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Advantage order number of the order to use to pull the shipping options.

try {
    $result = $apiInstance->orderGetShippingChoices($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetShippingChoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Advantage order number of the order to use to pull the shipping options. |

### Return type

[**\Swagger\Client\Model\ShippingChoice[]**](../Model/ShippingChoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetValidCardTypes**
> \Swagger\Client\Model\CreditCardPaymentMethod[] orderGetValidCardTypes($order_number, $web_enabled_only)

Get a list of valid card types for a given order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Advantage order number of the order to use to pull the valid card types.
$web_enabled_only = true; // bool | Only retrieve web enabled credit cards

try {
    $result = $apiInstance->orderGetValidCardTypes($order_number, $web_enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetValidCardTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Advantage order number of the order to use to pull the valid card types. |
 **web_enabled_only** | **bool**| Only retrieve web enabled credit cards | [optional]

### Return type

[**\Swagger\Client\Model\CreditCardPaymentMethod[]**](../Model/CreditCardPaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetValidCardsForOrder**
> \Swagger\Client\Model\SavedCreditCard[] orderGetValidCardsForOrder($order_number, $web_enabled_only)

Get the valid credit cards for a given order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Advantage order number of the order to use to determine the valid credit cards.
$web_enabled_only = true; // bool | If true, return only web-enabled cards

try {
    $result = $apiInstance->orderGetValidCardsForOrder($order_number, $web_enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetValidCardsForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Advantage order number of the order to use to determine the valid credit cards. |
 **web_enabled_only** | **bool**| If true, return only web-enabled cards | [optional]

### Return type

[**\Swagger\Client\Model\SavedCreditCard[]**](../Model/SavedCreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetValidDirectDebitTypes**
> \Swagger\Client\Model\DirectDebitPaymentMethod[] orderGetValidDirectDebitTypes($order_number)

Get a list of valid direct debit payment methods for a given order.  You can also include billing organization and currency for   a more filtered result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Advantage order number.

try {
    $result = $apiInstance->orderGetValidDirectDebitTypes($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetValidDirectDebitTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Advantage order number. |

### Return type

[**\Swagger\Client\Model\DirectDebitPaymentMethod[]**](../Model/DirectDebitPaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetValidGiftCertificatesForOrder**
> \Swagger\Client\Model\GiftCertificate[] orderGetValidGiftCertificatesForOrder($order_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | 

try {
    $result = $apiInstance->orderGetValidGiftCertificatesForOrder($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetValidGiftCertificatesForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**|  |

### Return type

[**\Swagger\Client\Model\GiftCertificate[]**](../Model/GiftCertificate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPost**
> orderPost($order_number)

Post an activated web order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Advantage order number of the order to post.

try {
    $apiInstance->orderPost($order_number);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Advantage order number of the order to post. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPutCoupons**
> orderPutCoupons($order_number, $coupon_request)

Replace coupons for an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The order number
$coupon_request = new \Swagger\Client\Model\CouponRequest(); // \Swagger\Client\Model\CouponRequest | The coupons to add to the order

try {
    $apiInstance->orderPutCoupons($order_number, $coupon_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPutCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The order number |
 **coupon_request** | [**\Swagger\Client\Model\CouponRequest**](../Model/CouponRequest.md)| The coupons to add to the order |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRemovePayment**
> orderRemovePayment($order_number, $credit_voucher_number)

Removes the specified payments from the specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Order number
$credit_voucher_number = "credit_voucher_number_example"; // string | Voucher number of the credit to remove

try {
    $apiInstance->orderRemovePayment($order_number, $credit_voucher_number);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderRemovePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number |
 **credit_voucher_number** | **string**| Voucher number of the credit to remove |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSetPendingPremiumItemNumber**
> orderSetPendingPremiumItemNumber($order_number, $pending_premium_update_requests)

Sets the item number on a premium set item. This method is not applicable for premium items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | Order number
$pending_premium_update_requests = array(new \Swagger\Client\Model\PendingPremiumUpdateRequest()); // \Swagger\Client\Model\PendingPremiumUpdateRequest[] | The information needed to find a premium set item and update the item number.

try {
    $apiInstance->orderSetPendingPremiumItemNumber($order_number, $pending_premium_update_requests);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSetPendingPremiumItemNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number |
 **pending_premium_update_requests** | [**\Swagger\Client\Model\PendingPremiumUpdateRequest[]**](../Model/PendingPremiumUpdateRequest.md)| The information needed to find a premium set item and update the item number. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdate**
> \Swagger\Client\Model\Order orderUpdate($order_number, $order_update_request)

Update an existing order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Advantage order number of the order to update.
$order_update_request = new \Swagger\Client\Model\OrderUpdateRequest(); // \Swagger\Client\Model\OrderUpdateRequest | An OrderUpdateRequest object.

try {
    $result = $apiInstance->orderUpdate($order_number, $order_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Advantage order number of the order to update. |
 **order_update_request** | [**\Swagger\Client\Model\OrderUpdateRequest**](../Model/OrderUpdateRequest.md)| An OrderUpdateRequest object. |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

