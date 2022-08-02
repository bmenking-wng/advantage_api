# Swagger\Client\ConferenceApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conferenceCreateConferenceChoice**](ConferenceApi.md#conferenceCreateConferenceChoice) | **POST** /conferences/{conferenceId}/choices | Creates a conference choice and the sessions that will be associated with it
[**conferenceGet**](ConferenceApi.md#conferenceGet) | **GET** /conferences/{conferenceId} | Get information for a given conference
[**conferenceGetChoice**](ConferenceApi.md#conferenceGetChoice) | **GET** /conferences/{conferenceId}/choices/{choiceCode} | Returns a conference choice and all sessions associated with that choice code
[**conferenceGetChoices**](ConferenceApi.md#conferenceGetChoices) | **GET** /conferences/{conferenceId}/choices | Returns the list of all choices associated with a conference
[**conferenceGetLocations**](ConferenceApi.md#conferenceGetLocations) | **GET** /conferences/{conferenceId}/locations | Returns the list of all locations associated with a conference
[**conferenceGetSession**](ConferenceApi.md#conferenceGetSession) | **GET** /conferences/{conferenceId}/sessions/{sessionId} | Returns a conference session
[**conferenceGetSessions**](ConferenceApi.md#conferenceGetSessions) | **GET** /conferences/{conferenceId}/sessions | Returns the list of all sessions associated with a conference
[**conferenceUpdateConferenceChoice**](ConferenceApi.md#conferenceUpdateConferenceChoice) | **POST** /conferences/{conferenceId}/choices/{choiceCode} | Update an existing conference choice and associated sessions
[**conferenceUpdateConferenceLocation**](ConferenceApi.md#conferenceUpdateConferenceLocation) | **POST** /conferences/{conferenceId}/locations/{locationId} | Update an existing conference location
[**conferenceUpdateConferenceSession**](ConferenceApi.md#conferenceUpdateConferenceSession) | **POST** /conferences/{conferenceId}/sessions/{sessionId} | Update an existing conference session.


# **conferenceCreateConferenceChoice**
> conferenceCreateConferenceChoice($conference_id, $create_request)

Creates a conference choice and the sessions that will be associated with it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 
$create_request = new \Swagger\Client\Model\ConferenceChoiceCreateRequest(); // \Swagger\Client\Model\ConferenceChoiceCreateRequest | 

try {
    $apiInstance->conferenceCreateConferenceChoice($conference_id, $create_request);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceCreateConferenceChoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |
 **create_request** | [**\Swagger\Client\Model\ConferenceChoiceCreateRequest**](../Model/ConferenceChoiceCreateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceGet**
> \Swagger\Client\Model\Conference conferenceGet($conference_id)

Get information for a given conference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 

try {
    $result = $apiInstance->conferenceGet($conference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Conference**](../Model/Conference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceGetChoice**
> \Swagger\Client\Model\ConferenceChoice conferenceGetChoice($conference_id, $choice_code)

Returns a conference choice and all sessions associated with that choice code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 
$choice_code = "choice_code_example"; // string | 

try {
    $result = $apiInstance->conferenceGetChoice($conference_id, $choice_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceGetChoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |
 **choice_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConferenceChoice**](../Model/ConferenceChoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceGetChoices**
> \Swagger\Client\Model\ConferenceChoice[] conferenceGetChoices($conference_id)

Returns the list of all choices associated with a conference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 

try {
    $result = $apiInstance->conferenceGetChoices($conference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceGetChoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConferenceChoice[]**](../Model/ConferenceChoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceGetLocations**
> \Swagger\Client\Model\ConferenceLocation[] conferenceGetLocations($conference_id)

Returns the list of all locations associated with a conference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 

try {
    $result = $apiInstance->conferenceGetLocations($conference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceGetLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConferenceLocation[]**](../Model/ConferenceLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceGetSession**
> \Swagger\Client\Model\ConferenceSession conferenceGetSession($conference_id, $session_id)

Returns a conference session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->conferenceGetSession($conference_id, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceGetSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |
 **session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConferenceSession**](../Model/ConferenceSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceGetSessions**
> \Swagger\Client\Model\ConferenceSession[] conferenceGetSessions($conference_id)

Returns the list of all sessions associated with a conference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 

try {
    $result = $apiInstance->conferenceGetSessions($conference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceGetSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConferenceSession[]**](../Model/ConferenceSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceUpdateConferenceChoice**
> conferenceUpdateConferenceChoice($conference_id, $choice_code, $update_request)

Update an existing conference choice and associated sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 
$choice_code = "choice_code_example"; // string | 
$update_request = new \Swagger\Client\Model\ConferenceChoiceUpdateRequest(); // \Swagger\Client\Model\ConferenceChoiceUpdateRequest | 

try {
    $apiInstance->conferenceUpdateConferenceChoice($conference_id, $choice_code, $update_request);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceUpdateConferenceChoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |
 **choice_code** | **string**|  |
 **update_request** | [**\Swagger\Client\Model\ConferenceChoiceUpdateRequest**](../Model/ConferenceChoiceUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceUpdateConferenceLocation**
> conferenceUpdateConferenceLocation($conference_id, $location_id, $update_request)

Update an existing conference location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 
$location_id = "location_id_example"; // string | 
$update_request = new \Swagger\Client\Model\ConferenceLocationUpdateRequest(); // \Swagger\Client\Model\ConferenceLocationUpdateRequest | 

try {
    $apiInstance->conferenceUpdateConferenceLocation($conference_id, $location_id, $update_request);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceUpdateConferenceLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |
 **location_id** | **string**|  |
 **update_request** | [**\Swagger\Client\Model\ConferenceLocationUpdateRequest**](../Model/ConferenceLocationUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conferenceUpdateConferenceSession**
> conferenceUpdateConferenceSession($conference_id, $session_id, $update_request)

Update an existing conference session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$conference_id = "conference_id_example"; // string | 
$session_id = "session_id_example"; // string | 
$update_request = new \Swagger\Client\Model\ConferenceSessionUpdateRequest(); // \Swagger\Client\Model\ConferenceSessionUpdateRequest | 

try {
    $apiInstance->conferenceUpdateConferenceSession($conference_id, $session_id, $update_request);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceApi->conferenceUpdateConferenceSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conference_id** | **string**|  |
 **session_id** | **string**|  |
 **update_request** | [**\Swagger\Client\Model\ConferenceSessionUpdateRequest**](../Model/ConferenceSessionUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

