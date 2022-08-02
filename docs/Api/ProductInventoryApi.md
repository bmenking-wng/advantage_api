# Swagger\Client\ProductInventoryApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productInventoryCreateInventoryAdjustment**](ProductInventoryApi.md#productInventoryCreateInventoryAdjustment) | **POST** /products/{itemNumber}/warehouses/{warehouseNumber}/inventory-adjustments | 
[**productInventoryCreateItemInventoryReceipt**](ProductInventoryApi.md#productInventoryCreateItemInventoryReceipt) | **POST** /products/{itemNumber}/warehouses/{warehouseNumber}/inventory-receipts | 
[**productInventoryCreateItemInventoryReceipt_0**](ProductInventoryApi.md#productInventoryCreateItemInventoryReceipt_0) | **POST** /products/{itemNumber}/warehouses/{warehouseNumber}/purchase-orders/{purchaseOrderNumber}/inventory-receipts | 
[**productInventoryGetInventory**](ProductInventoryApi.md#productInventoryGetInventory) | **GET** /products/{itemNumber}/inventory-status | Get the inventory status for a given product.
[**productInventoryGetInventoryAdjustment**](ProductInventoryApi.md#productInventoryGetInventoryAdjustment) | **GET** /products/{itemNumber}/warehouses/{warehouseNumber}/bins/{bin}/inventory-adjustments/{transactionNumber} | 
[**productInventoryGetItemInventoryReceipt**](ProductInventoryApi.md#productInventoryGetItemInventoryReceipt) | **GET** /products/{itemNumber}/warehouses/{warehouseNumber}/inventory-receipts/{receivingNumber} | 


# **productInventoryCreateInventoryAdjustment**
> \Swagger\Client\Model\InventoryAdjustmentResponse productInventoryCreateInventoryAdjustment($item_number, $warehouse_number, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$warehouse_number = "warehouse_number_example"; // string | 
$request = new \Swagger\Client\Model\InventoryAdjustmentRequest(); // \Swagger\Client\Model\InventoryAdjustmentRequest | 

try {
    $result = $apiInstance->productInventoryCreateInventoryAdjustment($item_number, $warehouse_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInventoryApi->productInventoryCreateInventoryAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **warehouse_number** | **string**|  |
 **request** | [**\Swagger\Client\Model\InventoryAdjustmentRequest**](../Model/InventoryAdjustmentRequest.md)|  |

### Return type

[**\Swagger\Client\Model\InventoryAdjustmentResponse**](../Model/InventoryAdjustmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productInventoryCreateItemInventoryReceipt**
> \Swagger\Client\Model\ItemInventoryReceiptResponse productInventoryCreateItemInventoryReceipt($item_number, $warehouse_number, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$warehouse_number = "warehouse_number_example"; // string | 
$request = new \Swagger\Client\Model\ReceiptItemInventoryReceiptCreateRequest(); // \Swagger\Client\Model\ReceiptItemInventoryReceiptCreateRequest | 

try {
    $result = $apiInstance->productInventoryCreateItemInventoryReceipt($item_number, $warehouse_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInventoryApi->productInventoryCreateItemInventoryReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **warehouse_number** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReceiptItemInventoryReceiptCreateRequest**](../Model/ReceiptItemInventoryReceiptCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ItemInventoryReceiptResponse**](../Model/ItemInventoryReceiptResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productInventoryCreateItemInventoryReceipt_0**
> \Swagger\Client\Model\ItemInventoryReceiptResponse productInventoryCreateItemInventoryReceipt_0($item_number, $warehouse_number, $purchase_order_number, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$warehouse_number = "warehouse_number_example"; // string | 
$purchase_order_number = "purchase_order_number_example"; // string | 
$request = new \Swagger\Client\Model\PurchaseOrderItemInventoryReceiptCreateRequest(); // \Swagger\Client\Model\PurchaseOrderItemInventoryReceiptCreateRequest | 

try {
    $result = $apiInstance->productInventoryCreateItemInventoryReceipt_0($item_number, $warehouse_number, $purchase_order_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInventoryApi->productInventoryCreateItemInventoryReceipt_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **warehouse_number** | **string**|  |
 **purchase_order_number** | **string**|  |
 **request** | [**\Swagger\Client\Model\PurchaseOrderItemInventoryReceiptCreateRequest**](../Model/PurchaseOrderItemInventoryReceiptCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ItemInventoryReceiptResponse**](../Model/ItemInventoryReceiptResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productInventoryGetInventory**
> \Swagger\Client\Model\ProductInventory productInventoryGetInventory($item_number)

Get the inventory status for a given product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | The item number of the product of interest.

try {
    $result = $apiInstance->productInventoryGetInventory($item_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInventoryApi->productInventoryGetInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**| The item number of the product of interest. |

### Return type

[**\Swagger\Client\Model\ProductInventory**](../Model/ProductInventory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productInventoryGetInventoryAdjustment**
> \Swagger\Client\Model\InventoryAdjustment productInventoryGetInventoryAdjustment($item_number, $warehouse_number, $bin, $transaction_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$warehouse_number = "warehouse_number_example"; // string | 
$bin = "bin_example"; // string | 
$transaction_number = "transaction_number_example"; // string | 

try {
    $result = $apiInstance->productInventoryGetInventoryAdjustment($item_number, $warehouse_number, $bin, $transaction_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInventoryApi->productInventoryGetInventoryAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **warehouse_number** | **string**|  |
 **bin** | **string**|  |
 **transaction_number** | **string**|  |

### Return type

[**\Swagger\Client\Model\InventoryAdjustment**](../Model/InventoryAdjustment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productInventoryGetItemInventoryReceipt**
> \Swagger\Client\Model\ItemInventoryReceipt productInventoryGetItemInventoryReceipt($item_number, $warehouse_number, $receiving_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$warehouse_number = "warehouse_number_example"; // string | 
$receiving_number = 1.2; // double | 

try {
    $result = $apiInstance->productInventoryGetItemInventoryReceipt($item_number, $warehouse_number, $receiving_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInventoryApi->productInventoryGetItemInventoryReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **warehouse_number** | **string**|  |
 **receiving_number** | **double**|  |

### Return type

[**\Swagger\Client\Model\ItemInventoryReceipt**](../Model/ItemInventoryReceipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

