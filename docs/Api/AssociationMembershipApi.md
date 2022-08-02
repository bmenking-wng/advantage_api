# Swagger\Client\AssociationMembershipApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associationMembershipGetAssociationDiscountBenefit**](AssociationMembershipApi.md#associationMembershipGetAssociationDiscountBenefit) | **GET** /association-memberships/discounts/{discountCode} | 
[**associationMembershipGetAssociationThirdPartyBenefit**](AssociationMembershipApi.md#associationMembershipGetAssociationThirdPartyBenefit) | **GET** /association-memberships/benefits/{benefitCode} | 
[**associationMembershipSearchDirectory**](AssociationMembershipApi.md#associationMembershipSearchDirectory) | **GET** /association-memberships/{associationItemNumber}/directory | 
[**associationMembershipUpdateBenefit**](AssociationMembershipApi.md#associationMembershipUpdateBenefit) | **POST** /association-memberships/benefits/{benefitCode} | 
[**associationMembershipUpdateDiscount**](AssociationMembershipApi.md#associationMembershipUpdateDiscount) | **POST** /association-memberships/discounts/{discountCode} | 
[**associationMembershipUpdateLevel**](AssociationMembershipApi.md#associationMembershipUpdateLevel) | **POST** /products/{itemNumber}/levels/{associationLevel} | 


# **associationMembershipGetAssociationDiscountBenefit**
> \Swagger\Client\Model\AssociationDiscountBenefit associationMembershipGetAssociationDiscountBenefit($discount_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssociationMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_code = "discount_code_example"; // string | 

try {
    $result = $apiInstance->associationMembershipGetAssociationDiscountBenefit($discount_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationMembershipApi->associationMembershipGetAssociationDiscountBenefit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\AssociationDiscountBenefit**](../Model/AssociationDiscountBenefit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationMembershipGetAssociationThirdPartyBenefit**
> \Swagger\Client\Model\AssociationThirdPartyBenefit associationMembershipGetAssociationThirdPartyBenefit($benefit_code)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssociationMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$benefit_code = "benefit_code_example"; // string | 

try {
    $result = $apiInstance->associationMembershipGetAssociationThirdPartyBenefit($benefit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationMembershipApi->associationMembershipGetAssociationThirdPartyBenefit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **benefit_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\AssociationThirdPartyBenefit**](../Model/AssociationThirdPartyBenefit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationMembershipSearchDirectory**
> \Swagger\Client\Model\SearchResultWithCountAssociationMemberSummary associationMembershipSearchDirectory($association_item_number, $filter_search, $filter_structure_node_id, $pager_skip, $pager_take)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssociationMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$association_item_number = "association_item_number_example"; // string | 
$filter_search = "filter_search_example"; // string | The generic search argument. (Typically from a search text box).  This term will be compared to the member's name.
$filter_structure_node_id = "filter_structure_node_id_example"; // string | The ID of a structure node.  Only members from this node or a descendant of this node will be returned.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->associationMembershipSearchDirectory($association_item_number, $filter_search, $filter_structure_node_id, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationMembershipApi->associationMembershipSearchDirectory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **association_item_number** | **string**|  |
 **filter_search** | **string**| The generic search argument. (Typically from a search text box).  This term will be compared to the member&#39;s name. | [optional]
 **filter_structure_node_id** | **string**| The ID of a structure node.  Only members from this node or a descendant of this node will be returned. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountAssociationMemberSummary**](../Model/SearchResultWithCountAssociationMemberSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationMembershipUpdateBenefit**
> associationMembershipUpdateBenefit($benefit_code, $benefit_update_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssociationMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$benefit_code = "benefit_code_example"; // string | 
$benefit_update_request = new \Swagger\Client\Model\AssociationBenefitUpdateRequest(); // \Swagger\Client\Model\AssociationBenefitUpdateRequest | 

try {
    $apiInstance->associationMembershipUpdateBenefit($benefit_code, $benefit_update_request);
} catch (Exception $e) {
    echo 'Exception when calling AssociationMembershipApi->associationMembershipUpdateBenefit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **benefit_code** | **string**|  |
 **benefit_update_request** | [**\Swagger\Client\Model\AssociationBenefitUpdateRequest**](../Model/AssociationBenefitUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationMembershipUpdateDiscount**
> associationMembershipUpdateDiscount($discount_code, $discount_update_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssociationMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_code = "discount_code_example"; // string | 
$discount_update_request = new \Swagger\Client\Model\AssociationDiscountUpdateRequest(); // \Swagger\Client\Model\AssociationDiscountUpdateRequest | 

try {
    $apiInstance->associationMembershipUpdateDiscount($discount_code, $discount_update_request);
} catch (Exception $e) {
    echo 'Exception when calling AssociationMembershipApi->associationMembershipUpdateDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_code** | **string**|  |
 **discount_update_request** | [**\Swagger\Client\Model\AssociationDiscountUpdateRequest**](../Model/AssociationDiscountUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationMembershipUpdateLevel**
> associationMembershipUpdateLevel($item_number, $association_level, $level_update_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssociationMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_number = "item_number_example"; // string | 
$association_level = "association_level_example"; // string | 
$level_update_request = new \Swagger\Client\Model\AssociationLevelUpdateRequest(); // \Swagger\Client\Model\AssociationLevelUpdateRequest | 

try {
    $apiInstance->associationMembershipUpdateLevel($item_number, $association_level, $level_update_request);
} catch (Exception $e) {
    echo 'Exception when calling AssociationMembershipApi->associationMembershipUpdateLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_number** | **string**|  |
 **association_level** | **string**|  |
 **level_update_request** | [**\Swagger\Client\Model\AssociationLevelUpdateRequest**](../Model/AssociationLevelUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

