# Swagger\Client\CampaignApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignCreate**](CampaignApi.md#campaignCreate) | **POST** /campaigns/{campaignCode} | Creates a new campaign.
[**campaignSearch**](CampaignApi.md#campaignSearch) | **GET** /campaigns | Get all campaigns matching the search argument.


# **campaignCreate**
> campaignCreate($campaign_code, $campaign)

Creates a new campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_code = "campaign_code_example"; // string | The campaign code
$campaign = new \Swagger\Client\Model\CampaignCreateRequest(); // \Swagger\Client\Model\CampaignCreateRequest | A CampaignCreateRequest object.

try {
    $apiInstance->campaignCreate($campaign_code, $campaign);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_code** | **string**| The campaign code |
 **campaign** | [**\Swagger\Client\Model\CampaignCreateRequest**](../Model/CampaignCreateRequest.md)| A CampaignCreateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignSearch**
> \Swagger\Client\Model\SearchResultWithCountCampaign campaignSearch($search_text, $pager_skip, $pager_take)

Get all campaigns matching the search argument.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_text = "search_text_example"; // string | The optional search argument, accepting \"*\" as a wild-card, for searching by campaign code.  If a search argument isn't provided, all campaigns will be returned.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->campaignSearch($search_text, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| The optional search argument, accepting \&quot;*\&quot; as a wild-card, for searching by campaign code.  If a search argument isn&#39;t provided, all campaigns will be returned. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountCampaign**](../Model/SearchResultWithCountCampaign.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

