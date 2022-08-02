# Swagger\Client\CreditApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**creditReassign**](CreditApi.md#creditReassign) | **POST** /credits/{voucherId}/reassign | Reassigns specified credit to new customer. This causes the specified voucher to   first be reversed via a credit reversal, after which a second new credit is   created, for reassignment to the new customer or debit number specified in   ReassignCreditRequest.


# **creditReassign**
> \Swagger\Client\Model\Credit creditReassign($voucher_id, $reassign_credit_request)

Reassigns specified credit to new customer. This causes the specified voucher to   first be reversed via a credit reversal, after which a second new credit is   created, for reassignment to the new customer or debit number specified in   ReassignCreditRequest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = "voucher_id_example"; // string | 
$reassign_credit_request = new \Swagger\Client\Model\ReassignCreditRequest(); // \Swagger\Client\Model\ReassignCreditRequest | 

try {
    $result = $apiInstance->creditReassign($voucher_id, $reassign_credit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditApi->creditReassign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **string**|  |
 **reassign_credit_request** | [**\Swagger\Client\Model\ReassignCreditRequest**](../Model/ReassignCreditRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Credit**](../Model/Credit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

