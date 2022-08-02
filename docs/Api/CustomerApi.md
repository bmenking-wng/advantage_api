# Swagger\Client\CustomerApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerActivate**](CustomerApi.md#customerActivate) | **POST** /customers/{customerNumber}/activate | Create a login and attach it to an already existing customer.
[**customerAddOrUpdateCustomerEmails**](CustomerApi.md#customerAddOrUpdateCustomerEmails) | **POST** /customers/{customerNumber}/Emails | Adds or Updates all of the customer email addresses in the list.  If an email address does not exist, it is added.  If it does exist, is updated with the information provided. The email address value must be provided in each element  in the list. The email Id will be ignored if not provided.  Values in the list which are null will not be updated. On a new record, IsEmailValid will default to true.
[**customerCreate**](CustomerApi.md#customerCreate) | **POST** /customers | Creates a new customer and optionally assigns a username/password to register the customer  on a website.  If the customer name is provided then the individual name fields (i.e. name title,  name first, etc.) are ignored; their values will be derived by parsing the  customer name parameter.  If the customer name is not provided then the individual  name fields will be used to populate the customer address record instead.  By default, a search is made to see if this customer would be considered a duplicate.  If an \&quot;exact\&quot; match is found with an existing customer (see the WEB/DUPMTCEX option)  then a new customer is NOT created.  Instead, the existing customer number is returned.  Examine the address code in the response to see which address code was used.  The address code may  not be the same as the requested address code if a duplicate customer was found.
[**customerCreateRelationship**](CustomerApi.md#customerCreateRelationship) | **POST** /customers/{customerNumber}/relationships | Creates a new customer relationship in Advantage
[**customerGet**](CustomerApi.md#customerGet) | **GET** /customers/{customerNumber} | Gets customer and address information for a given customer number.
[**customerGetAccountBalance**](CustomerApi.md#customerGetAccountBalance) | **GET** /customers/{customerNumber}/account-balance | Get the account balance for the given customer.
[**customerGetActivity**](CustomerApi.md#customerGetActivity) | **GET** /customers/{customerNumber}/activity | Gets all activity for a given customer.
[**customerGetAddress**](CustomerApi.md#customerGetAddress) | **GET** /customers/{customerNumber}/addresses/{addressCode} | Find and return addresses for a given customer number and address code.
[**customerGetAddresses**](CustomerApi.md#customerGetAddresses) | **GET** /customers/{customerNumber}/addresses | Gets all of the addresses for a given customer.
[**customerGetAvailableCreditAmount**](CustomerApi.md#customerGetAvailableCreditAmount) | **GET** /customers/{customerNumber}/available-credits/{currencyCode}/total | Gets the amount of credits available on the customers account.
[**customerGetByBankAccount**](CustomerApi.md#customerGetByBankAccount) | **GET** /customers/by-bank-account/{bankId}/{accountNumber} | Search for customers by bank account.  This is a preliminary API, subject to change.
[**customerGetByCreditCard**](CustomerApi.md#customerGetByCreditCard) | **GET** /customers/by-credit-card/{cardNumber} | Search for customers by bank account.  This is a preliminary API, subject to change.
[**customerGetCustomerActivityAr**](CustomerApi.md#customerGetCustomerActivityAr) | **GET** /customers/activity/{systemModule}/{activityId}/{activityTerm}/accountsReceivable | Gets all A/R tied to a specific customer activity.
[**customerGetCustomerCalls**](CustomerApi.md#customerGetCustomerCalls) | **GET** /customers/{customerNumber}/calls | Gets list of calls for the given customer
[**customerGetCustomerDefaults**](CustomerApi.md#customerGetCustomerDefaults) | **GET** /customer-types/{customerTypeCode}/defaults | Get customer defaults by customer type.
[**customerGetDefaultAddress**](CustomerApi.md#customerGetDefaultAddress) | **GET** /customers/{customerNumber}/addresses/customer-default | Find and return default address information for a given customer number.
[**customerGetEmails**](CustomerApi.md#customerGetEmails) | **GET** /customers/{customerNumber}/emails | Gets all of the email addresses for a given customer.
[**customerGetPendingPremiums**](CustomerApi.md#customerGetPendingPremiums) | **GET** /customers/{customerNumber}/pending-premiums | Get a list of pending premium items for this customer.
[**customerGetRelationships**](CustomerApi.md#customerGetRelationships) | **GET** /customers/{customerNumber}/relationships | Get a list of relationships for this customer.
[**customerGetSavedCreditCards**](CustomerApi.md#customerGetSavedCreditCards) | **GET** /customers/{customerNumber}/saved-payment-methods/credit-cards | Get a list of saved credit cards for this customer.  This is a preliminary API, subject to change.
[**customerGetSavedPayments**](CustomerApi.md#customerGetSavedPayments) | **GET** /customers/{customerNumber}/saved-payment-methods | Get saved payments for the given customer
[**customerGetUnpaidDebits**](CustomerApi.md#customerGetUnpaidDebits) | **GET** /customers/{customerNumber}/unpaid-invoices | Retrieves a list of unpaid debits for the specified customer, as determined by the value of the DBT_PAD field.  This includes debits that have unposted credit applications for the remaining balance.
[**customerGetUsers**](CustomerApi.md#customerGetUsers) | **GET** /customers/{customerNumber}/users | Gets all users for the given customer.
[**customerGetUsers_0**](CustomerApi.md#customerGetUsers_0) | **GET** /customers/{customerNumber}/users/{authenticationGroupCode} | Gets all users for the given customer.
[**customerSearch**](CustomerApi.md#customerSearch) | **GET** /customers | Gets customers matching the filter criteria. Filters are passed as a URI parameter in the format &amp;lt;Field&amp;gt;.&amp;lt;Operator&amp;gt;&#x3D;&amp;lt;Value&amp;gt;.  For example, /customers?FirstName.CN&#x3D;Matt or /customer-addresses?FirstName.EQ&#x3D;John&amp;amp;LastName.EQ&#x3D;Doe
[**customerSearchAddresses**](CustomerApi.md#customerSearchAddresses) | **GET** /customer-addresses | Gets customer addresses matching the filter criteria. Filters are passed as a URI parameter in the format &amp;lt;Field&amp;gt;.&amp;lt;Operator&amp;gt;&#x3D;&amp;lt;Value&amp;gt;.  For example, /customer-addresses?FirstName.CN&#x3D;Matt or /customer-addresses?FirstName.EQ&#x3D;John&amp;amp;LastName.EQ&#x3D;Doe
[**customerSearchAvailableCredits**](CustomerApi.md#customerSearchAvailableCredits) | **GET** /customers/{customerNumber}/available-credits | Gets the unapplied credits available on the customers account.
[**customerSearchOrderedForProducts**](CustomerApi.md#customerSearchOrderedForProducts) | **GET** /customers/{customerNumber}/ordered-for-products | 
[**customerSearchOrderedProducts**](CustomerApi.md#customerSearchOrderedProducts) | **GET** /customers/{customerNumber}/ordered-products | Get a list of items purchased by this customer. Filtered by new, renewal and complimentary items.  This is a preliminary API, subject to change.
[**customerUpdate**](CustomerApi.md#customerUpdate) | **POST** /customers/{customerNumber} | Updates all of the customer addresses for the given customer.  If an address does not exist, it is added.  If it does exist, is updated with the information provided.  In the case of an address update:  If the address is a temporary address that is currently in effect, changes to the  address will not become effective until the CDS750 address swapping process runs.  In the case of a new address:  If the customer name is provided then the individual name fields (i.e. name title,  name first, etc.) are ignored; their values will be derived by parsing the  customer name parameter.  If the customer name is not provided then the individual  name fields will be used to populate the customer address record instead.
[**customerUpdateCustomerAddress**](CustomerApi.md#customerUpdateCustomerAddress) | **POST** /customers/{customerNumber}/addresses/{addressCode} | Update a customer address
[**customerValidateLastName**](CustomerApi.md#customerValidateLastName) | **POST** /customers/{customerNumber}/last-name/validate | Validate that a customer number identifies a customer with the specified last name (surname).  A 404 Not Found status is returned if validation fails.
[**customerValidatePostalCode**](CustomerApi.md#customerValidatePostalCode) | **POST** /customers/{customerNumber}/postal-code/validate | Validate that a customer number identifies a customer with the specified country and postal code.  A 404 Not Found status is returned if validation fails.


# **customerActivate**
> \Swagger\Client\Model\AccountCreateResponse customerActivate($customer_number, $activate_account_request)

Create a login and attach it to an already existing customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number to create the login for.
$activate_account_request = new \Swagger\Client\Model\ActivateAccountRequest(); // \Swagger\Client\Model\ActivateAccountRequest | An ActivateAccountRequest object.

try {
    $result = $apiInstance->customerActivate($customer_number, $activate_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number to create the login for. |
 **activate_account_request** | [**\Swagger\Client\Model\ActivateAccountRequest**](../Model/ActivateAccountRequest.md)| An ActivateAccountRequest object. |

### Return type

[**\Swagger\Client\Model\AccountCreateResponse**](../Model/AccountCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAddOrUpdateCustomerEmails**
> customerAddOrUpdateCustomerEmails($customer_number, $customer_email_updates)

Adds or Updates all of the customer email addresses in the list.  If an email address does not exist, it is added.  If it does exist, is updated with the information provided. The email address value must be provided in each element  in the list. The email Id will be ignored if not provided.  Values in the list which are null will not be updated. On a new record, IsEmailValid will default to true.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the customer to update.
$customer_email_updates = array(new \Swagger\Client\Model\CustomerEmailUpdateRequest()); // \Swagger\Client\Model\CustomerEmailUpdateRequest[] | A list of customer email update requests.

try {
    $apiInstance->customerAddOrUpdateCustomerEmails($customer_number, $customer_email_updates);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAddOrUpdateCustomerEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the customer to update. |
 **customer_email_updates** | [**\Swagger\Client\Model\CustomerEmailUpdateRequest[]**](../Model/CustomerEmailUpdateRequest.md)| A list of customer email update requests. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreate**
> \Swagger\Client\Model\AccountCreateResponse customerCreate($account_create_request)

Creates a new customer and optionally assigns a username/password to register the customer  on a website.  If the customer name is provided then the individual name fields (i.e. name title,  name first, etc.) are ignored; their values will be derived by parsing the  customer name parameter.  If the customer name is not provided then the individual  name fields will be used to populate the customer address record instead.  By default, a search is made to see if this customer would be considered a duplicate.  If an \"exact\" match is found with an existing customer (see the WEB/DUPMTCEX option)  then a new customer is NOT created.  Instead, the existing customer number is returned.  Examine the address code in the response to see which address code was used.  The address code may  not be the same as the requested address code if a duplicate customer was found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_create_request = new \Swagger\Client\Model\AccountCreateRequest(); // \Swagger\Client\Model\AccountCreateRequest | An AccountCreateRequest object.

try {
    $result = $apiInstance->customerCreate($account_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_create_request** | [**\Swagger\Client\Model\AccountCreateRequest**](../Model/AccountCreateRequest.md)| An AccountCreateRequest object. |

### Return type

[**\Swagger\Client\Model\AccountCreateResponse**](../Model/AccountCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreateRelationship**
> customerCreateRelationship($customer_number, $create_request)

Creates a new customer relationship in Advantage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The \"Related-From\" Advantage customer number.
$create_request = new \Swagger\Client\Model\CustomerRelationshipCreateRequest(); // \Swagger\Client\Model\CustomerRelationshipCreateRequest | A CustomerRelationshipCreateRequest object

try {
    $apiInstance->customerCreateRelationship($customer_number, $create_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreateRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The \&quot;Related-From\&quot; Advantage customer number. |
 **create_request** | [**\Swagger\Client\Model\CustomerRelationshipCreateRequest**](../Model/CustomerRelationshipCreateRequest.md)| A CustomerRelationshipCreateRequest object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGet**
> \Swagger\Client\Model\Customer customerGet($customer_number, $include_all_addresses, $include_credit_summary)

Gets customer and address information for a given customer number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the address to find.
$include_all_addresses = true; // bool | Include all customer addresses in the response or just the customer's default address?
$include_credit_summary = true; // bool | Include the customer's credit summary in the response.

try {
    $result = $apiInstance->customerGet($customer_number, $include_all_addresses, $include_credit_summary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the address to find. |
 **include_all_addresses** | **bool**| Include all customer addresses in the response or just the customer&#39;s default address? | [optional]
 **include_credit_summary** | **bool**| Include the customer&#39;s credit summary in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAccountBalance**
> \Swagger\Client\Model\AccountBalance customerGetAccountBalance($customer_number, $currency_code)

Get the account balance for the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number.
$currency_code = "currency_code_example"; // string | The currency code of the currency in which to present the balance.

try {
    $result = $apiInstance->customerGetAccountBalance($customer_number, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAccountBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number. |
 **currency_code** | **string**| The currency code of the currency in which to present the balance. | [optional]

### Return type

[**\Swagger\Client\Model\AccountBalance**](../Model/AccountBalance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetActivity**
> \Swagger\Client\Model\SearchResultWithCountCustomerActivity customerGetActivity($customer_number, $selected_fields, $pager_order_by_fields, $pager_skip, $pager_take, $system_name, $original_order_number, $system_name_not_equal, $system_name_less, $system_name_less_or_equal, $system_name_greater, $system_name_greater_or_equal, $system_name_is_null, $system_name_is_not_null, $system_name_like, $system_name_not_like, $system_name_contains, $system_name_not_contains, $system_name_starts_with, $system_name_not_starts_with, $system_name_ends_with, $system_name_not_ends_with, $system_name_in, $system_name_between, $original_order_number_not_equal, $original_order_number_less, $original_order_number_less_or_equal, $original_order_number_greater, $original_order_number_greater_or_equal, $original_order_number_is_null, $original_order_number_is_not_null, $original_order_number_like, $original_order_number_not_like, $original_order_number_contains, $original_order_number_not_contains, $original_order_number_starts_with, $original_order_number_not_starts_with, $original_order_number_ends_with, $original_order_number_not_ends_with, $original_order_number_in, $original_order_number_between)

Gets all activity for a given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the activity to find.
$selected_fields = array("selected_fields_example"); // string[] | Indicates which properties of the model should be populated.              Selecting a limited number of fields may improve performance. Key fields and pager.OrderByFields fields are always included.              If null, all properties in the model will be populated.
$pager_order_by_fields = array(new \stdClass); // object[] | Enumeration of order by columns
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$system_name = "system_name_example"; // string | Filter on ITM-SYS using 'Equal' operator
$original_order_number = "original_order_number_example"; // string | Filter on ORG-ORD using 'Equal' operator
$system_name_not_equal = "system_name_not_equal_example"; // string | Filter on ITM-SYS using 'NotEqual' operator
$system_name_less = "system_name_less_example"; // string | Filter on ITM-SYS using 'Less' operator
$system_name_less_or_equal = "system_name_less_or_equal_example"; // string | Filter on ITM-SYS using 'LessOrEqual' operator
$system_name_greater = "system_name_greater_example"; // string | Filter on ITM-SYS using 'Greater' operator
$system_name_greater_or_equal = "system_name_greater_or_equal_example"; // string | Filter on ITM-SYS using 'GreaterOrEqual' operator
$system_name_is_null = "system_name_is_null_example"; // string | Filter on ITM-SYS using 'IsNull' operator
$system_name_is_not_null = "system_name_is_not_null_example"; // string | Filter on ITM-SYS using 'IsNotNull' operator
$system_name_like = "system_name_like_example"; // string | Filter on ITM-SYS using 'Like' operator
$system_name_not_like = "system_name_not_like_example"; // string | Filter on ITM-SYS using 'NotLike' operator
$system_name_contains = "system_name_contains_example"; // string | Filter on ITM-SYS using 'Contains' operator
$system_name_not_contains = "system_name_not_contains_example"; // string | Filter on ITM-SYS using 'NotContains' operator
$system_name_starts_with = "system_name_starts_with_example"; // string | Filter on ITM-SYS using 'StartsWith' operator
$system_name_not_starts_with = "system_name_not_starts_with_example"; // string | Filter on ITM-SYS using 'NotStartsWith' operator
$system_name_ends_with = "system_name_ends_with_example"; // string | Filter on ITM-SYS using 'EndsWith' operator
$system_name_not_ends_with = "system_name_not_ends_with_example"; // string | Filter on ITM-SYS using 'NotEndsWith' operator
$system_name_in = "system_name_in_example"; // string | Filter on ITM-SYS using 'In' operator
$system_name_between = "system_name_between_example"; // string | Filter on ITM-SYS using 'Between' operator
$original_order_number_not_equal = "original_order_number_not_equal_example"; // string | Filter on ORG-ORD using 'NotEqual' operator
$original_order_number_less = "original_order_number_less_example"; // string | Filter on ORG-ORD using 'Less' operator
$original_order_number_less_or_equal = "original_order_number_less_or_equal_example"; // string | Filter on ORG-ORD using 'LessOrEqual' operator
$original_order_number_greater = "original_order_number_greater_example"; // string | Filter on ORG-ORD using 'Greater' operator
$original_order_number_greater_or_equal = "original_order_number_greater_or_equal_example"; // string | Filter on ORG-ORD using 'GreaterOrEqual' operator
$original_order_number_is_null = "original_order_number_is_null_example"; // string | Filter on ORG-ORD using 'IsNull' operator
$original_order_number_is_not_null = "original_order_number_is_not_null_example"; // string | Filter on ORG-ORD using 'IsNotNull' operator
$original_order_number_like = "original_order_number_like_example"; // string | Filter on ORG-ORD using 'Like' operator
$original_order_number_not_like = "original_order_number_not_like_example"; // string | Filter on ORG-ORD using 'NotLike' operator
$original_order_number_contains = "original_order_number_contains_example"; // string | Filter on ORG-ORD using 'Contains' operator
$original_order_number_not_contains = "original_order_number_not_contains_example"; // string | Filter on ORG-ORD using 'NotContains' operator
$original_order_number_starts_with = "original_order_number_starts_with_example"; // string | Filter on ORG-ORD using 'StartsWith' operator
$original_order_number_not_starts_with = "original_order_number_not_starts_with_example"; // string | Filter on ORG-ORD using 'NotStartsWith' operator
$original_order_number_ends_with = "original_order_number_ends_with_example"; // string | Filter on ORG-ORD using 'EndsWith' operator
$original_order_number_not_ends_with = "original_order_number_not_ends_with_example"; // string | Filter on ORG-ORD using 'NotEndsWith' operator
$original_order_number_in = "original_order_number_in_example"; // string | Filter on ORG-ORD using 'In' operator
$original_order_number_between = "original_order_number_between_example"; // string | Filter on ORG-ORD using 'Between' operator

try {
    $result = $apiInstance->customerGetActivity($customer_number, $selected_fields, $pager_order_by_fields, $pager_skip, $pager_take, $system_name, $original_order_number, $system_name_not_equal, $system_name_less, $system_name_less_or_equal, $system_name_greater, $system_name_greater_or_equal, $system_name_is_null, $system_name_is_not_null, $system_name_like, $system_name_not_like, $system_name_contains, $system_name_not_contains, $system_name_starts_with, $system_name_not_starts_with, $system_name_ends_with, $system_name_not_ends_with, $system_name_in, $system_name_between, $original_order_number_not_equal, $original_order_number_less, $original_order_number_less_or_equal, $original_order_number_greater, $original_order_number_greater_or_equal, $original_order_number_is_null, $original_order_number_is_not_null, $original_order_number_like, $original_order_number_not_like, $original_order_number_contains, $original_order_number_not_contains, $original_order_number_starts_with, $original_order_number_not_starts_with, $original_order_number_ends_with, $original_order_number_not_ends_with, $original_order_number_in, $original_order_number_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the activity to find. |
 **selected_fields** | [**string[]**](../Model/string.md)| Indicates which properties of the model should be populated.              Selecting a limited number of fields may improve performance. Key fields and pager.OrderByFields fields are always included.              If null, all properties in the model will be populated. |
 **pager_order_by_fields** | [**object[]**](../Model/object.md)| Enumeration of order by columns | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **system_name** | **string**| Filter on ITM-SYS using &#39;Equal&#39; operator | [optional]
 **original_order_number** | **string**| Filter on ORG-ORD using &#39;Equal&#39; operator | [optional]
 **system_name_not_equal** | **string**| Filter on ITM-SYS using &#39;NotEqual&#39; operator | [optional]
 **system_name_less** | **string**| Filter on ITM-SYS using &#39;Less&#39; operator | [optional]
 **system_name_less_or_equal** | **string**| Filter on ITM-SYS using &#39;LessOrEqual&#39; operator | [optional]
 **system_name_greater** | **string**| Filter on ITM-SYS using &#39;Greater&#39; operator | [optional]
 **system_name_greater_or_equal** | **string**| Filter on ITM-SYS using &#39;GreaterOrEqual&#39; operator | [optional]
 **system_name_is_null** | **string**| Filter on ITM-SYS using &#39;IsNull&#39; operator | [optional]
 **system_name_is_not_null** | **string**| Filter on ITM-SYS using &#39;IsNotNull&#39; operator | [optional]
 **system_name_like** | **string**| Filter on ITM-SYS using &#39;Like&#39; operator | [optional]
 **system_name_not_like** | **string**| Filter on ITM-SYS using &#39;NotLike&#39; operator | [optional]
 **system_name_contains** | **string**| Filter on ITM-SYS using &#39;Contains&#39; operator | [optional]
 **system_name_not_contains** | **string**| Filter on ITM-SYS using &#39;NotContains&#39; operator | [optional]
 **system_name_starts_with** | **string**| Filter on ITM-SYS using &#39;StartsWith&#39; operator | [optional]
 **system_name_not_starts_with** | **string**| Filter on ITM-SYS using &#39;NotStartsWith&#39; operator | [optional]
 **system_name_ends_with** | **string**| Filter on ITM-SYS using &#39;EndsWith&#39; operator | [optional]
 **system_name_not_ends_with** | **string**| Filter on ITM-SYS using &#39;NotEndsWith&#39; operator | [optional]
 **system_name_in** | **string**| Filter on ITM-SYS using &#39;In&#39; operator | [optional]
 **system_name_between** | **string**| Filter on ITM-SYS using &#39;Between&#39; operator | [optional]
 **original_order_number_not_equal** | **string**| Filter on ORG-ORD using &#39;NotEqual&#39; operator | [optional]
 **original_order_number_less** | **string**| Filter on ORG-ORD using &#39;Less&#39; operator | [optional]
 **original_order_number_less_or_equal** | **string**| Filter on ORG-ORD using &#39;LessOrEqual&#39; operator | [optional]
 **original_order_number_greater** | **string**| Filter on ORG-ORD using &#39;Greater&#39; operator | [optional]
 **original_order_number_greater_or_equal** | **string**| Filter on ORG-ORD using &#39;GreaterOrEqual&#39; operator | [optional]
 **original_order_number_is_null** | **string**| Filter on ORG-ORD using &#39;IsNull&#39; operator | [optional]
 **original_order_number_is_not_null** | **string**| Filter on ORG-ORD using &#39;IsNotNull&#39; operator | [optional]
 **original_order_number_like** | **string**| Filter on ORG-ORD using &#39;Like&#39; operator | [optional]
 **original_order_number_not_like** | **string**| Filter on ORG-ORD using &#39;NotLike&#39; operator | [optional]
 **original_order_number_contains** | **string**| Filter on ORG-ORD using &#39;Contains&#39; operator | [optional]
 **original_order_number_not_contains** | **string**| Filter on ORG-ORD using &#39;NotContains&#39; operator | [optional]
 **original_order_number_starts_with** | **string**| Filter on ORG-ORD using &#39;StartsWith&#39; operator | [optional]
 **original_order_number_not_starts_with** | **string**| Filter on ORG-ORD using &#39;NotStartsWith&#39; operator | [optional]
 **original_order_number_ends_with** | **string**| Filter on ORG-ORD using &#39;EndsWith&#39; operator | [optional]
 **original_order_number_not_ends_with** | **string**| Filter on ORG-ORD using &#39;NotEndsWith&#39; operator | [optional]
 **original_order_number_in** | **string**| Filter on ORG-ORD using &#39;In&#39; operator | [optional]
 **original_order_number_between** | **string**| Filter on ORG-ORD using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountCustomerActivity**](../Model/SearchResultWithCountCustomerActivity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAddress**
> \Swagger\Client\Model\CustomerAddress customerGetAddress($customer_number, $address_code)

Find and return addresses for a given customer number and address code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the address to find.
$address_code = "address_code_example"; // string | The address code of the address to return.

try {
    $result = $apiInstance->customerGetAddress($customer_number, $address_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the address to find. |
 **address_code** | **string**| The address code of the address to return. |

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAddresses**
> \Swagger\Client\Model\CustomerAddress[] customerGetAddresses($customer_number)

Gets all of the addresses for a given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the addresses to find.

try {
    $result = $apiInstance->customerGetAddresses($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the addresses to find. |

### Return type

[**\Swagger\Client\Model\CustomerAddress[]**](../Model/CustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetAvailableCreditAmount**
> \Swagger\Client\Model\AccountBalance customerGetAvailableCreditAmount($customer_number, $currency_code, $organization_code)

Gets the amount of credits available on the customers account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | An Advantage customer number.
$currency_code = "currency_code_example"; // string | The currency code of the currency to filter by
$organization_code = array("organization_code_example"); // string[] | Organization to filter by.

try {
    $result = $apiInstance->customerGetAvailableCreditAmount($customer_number, $currency_code, $organization_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetAvailableCreditAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| An Advantage customer number. |
 **currency_code** | **string**| The currency code of the currency to filter by |
 **organization_code** | [**string[]**](../Model/string.md)| Organization to filter by. | [optional]

### Return type

[**\Swagger\Client\Model\AccountBalance**](../Model/AccountBalance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetByBankAccount**
> \Swagger\Client\Model\SearchResultCustomer customerGetByBankAccount($bank_id, $account_number, $payment_method_code, $include_all_addresses, $include_credit_summary)

Search for customers by bank account.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_id = "bank_id_example"; // string | The bank ID (routing number)
$account_number = "account_number_example"; // string | The account number at the given bank
$payment_method_code = "payment_method_code_example"; // string | Limit search to direct debit payments using the given direct debit payment code (DDP-CDE).
$include_all_addresses = true; // bool | Include all customer addresses in the response or just the customer's default address?
$include_credit_summary = true; // bool | Include the customer's credit summary in the response.

try {
    $result = $apiInstance->customerGetByBankAccount($bank_id, $account_number, $payment_method_code, $include_all_addresses, $include_credit_summary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetByBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_id** | **string**| The bank ID (routing number) |
 **account_number** | **string**| The account number at the given bank |
 **payment_method_code** | **string**| Limit search to direct debit payments using the given direct debit payment code (DDP-CDE). |
 **include_all_addresses** | **bool**| Include all customer addresses in the response or just the customer&#39;s default address? | [optional]
 **include_credit_summary** | **bool**| Include the customer&#39;s credit summary in the response. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCustomer**](../Model/SearchResultCustomer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetByCreditCard**
> \Swagger\Client\Model\SearchResultCustomer customerGetByCreditCard($card_number, $payment_method_code, $include_all_addresses, $include_credit_summary)

Search for customers by bank account.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_number = "card_number_example"; // string | The account number at the given bank
$payment_method_code = "payment_method_code_example"; // string | Limit search to the given card type (PAY-CODE).
$include_all_addresses = true; // bool | Include all customer addresses in the response or just the customer's default address?
$include_credit_summary = true; // bool | Include the customer's credit summary in the response.

try {
    $result = $apiInstance->customerGetByCreditCard($card_number, $payment_method_code, $include_all_addresses, $include_credit_summary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetByCreditCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_number** | **string**| The account number at the given bank |
 **payment_method_code** | **string**| Limit search to the given card type (PAY-CODE). |
 **include_all_addresses** | **bool**| Include all customer addresses in the response or just the customer&#39;s default address? | [optional]
 **include_credit_summary** | **bool**| Include the customer&#39;s credit summary in the response. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCustomer**](../Model/SearchResultCustomer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetCustomerActivityAr**
> \Swagger\Client\Model\CustomerActivityAr[] customerGetCustomerActivityAr($system_module, $activity_id, $activity_term)

Gets all A/R tied to a specific customer activity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$system_module = "system_module_example"; // string | System module for the given customer activity
$activity_id = "activity_id_example"; // string | Activity Id
$activity_term = 56; // int | Activity Term

try {
    $result = $apiInstance->customerGetCustomerActivityAr($system_module, $activity_id, $activity_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetCustomerActivityAr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_module** | **string**| System module for the given customer activity |
 **activity_id** | **string**| Activity Id |
 **activity_term** | **int**| Activity Term |

### Return type

[**\Swagger\Client\Model\CustomerActivityAr[]**](../Model/CustomerActivityAr.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetCustomerCalls**
> \Swagger\Client\Model\Call[] customerGetCustomerCalls($customer_number, $include_separate_list_callbacks, $include_completed_calls, $include_contacted)

Gets list of calls for the given customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer number
$include_separate_list_callbacks = true; // bool | True to include separate list callbacks
$include_completed_calls = true; // bool | True if completed calls are selected,  False if completed calls are not selected
$include_contacted = true; // bool | True to include calls where the customer has  been contacted at least once

try {
    $result = $apiInstance->customerGetCustomerCalls($customer_number, $include_separate_list_callbacks, $include_completed_calls, $include_contacted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetCustomerCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer number |
 **include_separate_list_callbacks** | **bool**| True to include separate list callbacks | [optional]
 **include_completed_calls** | **bool**| True if completed calls are selected,  False if completed calls are not selected | [optional]
 **include_contacted** | **bool**| True to include calls where the customer has  been contacted at least once | [optional]

### Return type

[**\Swagger\Client\Model\Call[]**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetCustomerDefaults**
> \Swagger\Client\Model\CustomerDefaults customerGetCustomerDefaults($customer_type_code)

Get customer defaults by customer type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_type_code = "customer_type_code_example"; // string | The customer type

try {
    $result = $apiInstance->customerGetCustomerDefaults($customer_type_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetCustomerDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_type_code** | **string**| The customer type |

### Return type

[**\Swagger\Client\Model\CustomerDefaults**](../Model/CustomerDefaults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetDefaultAddress**
> \Swagger\Client\Model\CustomerAddress customerGetDefaultAddress($customer_number)

Find and return default address information for a given customer number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the address to find.

try {
    $result = $apiInstance->customerGetDefaultAddress($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetDefaultAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the address to find. |

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetEmails**
> \Swagger\Client\Model\CustomerEmail[] customerGetEmails($customer_number)

Gets all of the email addresses for a given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the email addresses to find.

try {
    $result = $apiInstance->customerGetEmails($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the email addresses to find. |

### Return type

[**\Swagger\Client\Model\CustomerEmail[]**](../Model/CustomerEmail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetPendingPremiums**
> \Swagger\Client\Model\SearchResultPendingPremium customerGetPendingPremiums($customer_number)

Get a list of pending premium items for this customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number.

try {
    $result = $apiInstance->customerGetPendingPremiums($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetPendingPremiums: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number. |

### Return type

[**\Swagger\Client\Model\SearchResultPendingPremium**](../Model/SearchResultPendingPremium.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetRelationships**
> \Swagger\Client\Model\CustomerRelationship[] customerGetRelationships($customer_number)

Get a list of relationships for this customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The \"Related-From\" Advantage customer number.

try {
    $result = $apiInstance->customerGetRelationships($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The \&quot;Related-From\&quot; Advantage customer number. |

### Return type

[**\Swagger\Client\Model\CustomerRelationship[]**](../Model/CustomerRelationship.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetSavedCreditCards**
> \Swagger\Client\Model\SavedCreditCard[] customerGetSavedCreditCards($customer_number, $filter_promotion_code, $filter_currency_code, $filter_billing_organization_code, $filter_web_enabled_only)

Get a list of saved credit cards for this customer.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number.
$filter_promotion_code = "filter_promotion_code_example"; // string | Promotion Code
$filter_currency_code = "filter_currency_code_example"; // string | Currency Code
$filter_billing_organization_code = "filter_billing_organization_code_example"; // string | Billing Organization
$filter_web_enabled_only = true; // bool | True to limit credit cards to those that are setup to be \"web enabled\"

try {
    $result = $apiInstance->customerGetSavedCreditCards($customer_number, $filter_promotion_code, $filter_currency_code, $filter_billing_organization_code, $filter_web_enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetSavedCreditCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number. |
 **filter_promotion_code** | **string**| Promotion Code | [optional]
 **filter_currency_code** | **string**| Currency Code | [optional]
 **filter_billing_organization_code** | **string**| Billing Organization | [optional]
 **filter_web_enabled_only** | **bool**| True to limit credit cards to those that are setup to be \&quot;web enabled\&quot; | [optional]

### Return type

[**\Swagger\Client\Model\SavedCreditCard[]**](../Model/SavedCreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetSavedPayments**
> \Swagger\Client\Model\SearchResultSavedPayment customerGetSavedPayments($customer_number, $filter_billing_organization, $filter_billing_currency, $filter_promotion_code, $filter_call_list_id, $filter_call_list_date)

Get saved payments for the given customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer Number
$filter_billing_organization = "filter_billing_organization_example"; // string | The Billing Organization of the saved payment to filter results by
$filter_billing_currency = "filter_billing_currency_example"; // string | The Billing Currency of the saved payment to filter results by
$filter_promotion_code = "filter_promotion_code_example"; // string | The billing Promotion Code of the saved payment to filter results by
$filter_call_list_id = "filter_call_list_id_example"; // string | The Call List Id used to get an alternative billing organization
$filter_call_list_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The Call List Date used to get an alternative billing organization

try {
    $result = $apiInstance->customerGetSavedPayments($customer_number, $filter_billing_organization, $filter_billing_currency, $filter_promotion_code, $filter_call_list_id, $filter_call_list_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetSavedPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer Number |
 **filter_billing_organization** | **string**| The Billing Organization of the saved payment to filter results by | [optional]
 **filter_billing_currency** | **string**| The Billing Currency of the saved payment to filter results by | [optional]
 **filter_promotion_code** | **string**| The billing Promotion Code of the saved payment to filter results by | [optional]
 **filter_call_list_id** | **string**| The Call List Id used to get an alternative billing organization | [optional]
 **filter_call_list_date** | **\DateTime**| The Call List Date used to get an alternative billing organization | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultSavedPayment**](../Model/SearchResultSavedPayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetUnpaidDebits**
> \Swagger\Client\Model\Receivable[] customerGetUnpaidDebits($customer_number)

Retrieves a list of unpaid debits for the specified customer, as determined by the value of the DBT_PAD field.  This includes debits that have unposted credit applications for the remaining balance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer number

try {
    $result = $apiInstance->customerGetUnpaidDebits($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetUnpaidDebits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer number |

### Return type

[**\Swagger\Client\Model\Receivable[]**](../Model/Receivable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetUsers**
> \Swagger\Client\Model\SearchResultUser customerGetUsers($customer_number)

Gets all users for the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the customer.

try {
    $result = $apiInstance->customerGetUsers($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the customer. |

### Return type

[**\Swagger\Client\Model\SearchResultUser**](../Model/SearchResultUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGetUsers_0**
> \Swagger\Client\Model\SearchResultUser customerGetUsers_0($customer_number, $authentication_group_code)

Gets all users for the given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the customer.
$authentication_group_code = "authentication_group_code_example"; // string | Find users within this authentication group.

try {
    $result = $apiInstance->customerGetUsers_0($customer_number, $authentication_group_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGetUsers_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the customer. |
 **authentication_group_code** | **string**| Find users within this authentication group. |

### Return type

[**\Swagger\Client\Model\SearchResultUser**](../Model/SearchResultUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSearch**
> \Swagger\Client\Model\SearchResultCustomer customerSearch($include_all_addresses, $include_credit_summary, $propagate_phone_number, $pager_skip, $pager_take, $customer_number, $full_name, $email_address, $phone_number, $phone_number2, $phone_number3, $street1, $street2, $street3, $city, $state, $country_code, $postal_code, $fax_number, $company, $customer_type, $promote_flag, $promote_by_partners, $promote_by_phone, $promote_by_fax, $promote_by_email, $promote_by_mail, $promote_by_sms, $promote_by_phone1, $promote_by_phone2, $promote_by_phone3, $title, $first_name, $middle_initial, $last_name, $suffix, $job_title, $job_position_code, $communication_preference, $source_promotion, $address_code, $default_currency, $department, $county, $pin_code, $social_security_number, $street_name, $street_type, $last_updated_on, $item_number, $last_name_soundex, $company_name_soundex, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $full_name_not_equal, $full_name_less, $full_name_less_or_equal, $full_name_greater, $full_name_greater_or_equal, $full_name_is_null, $full_name_is_not_null, $full_name_like, $full_name_not_like, $full_name_contains, $full_name_not_contains, $full_name_starts_with, $full_name_not_starts_with, $full_name_ends_with, $full_name_not_ends_with, $full_name_in, $full_name_between, $email_address_not_equal, $email_address_less, $email_address_less_or_equal, $email_address_greater, $email_address_greater_or_equal, $email_address_is_null, $email_address_is_not_null, $email_address_like, $email_address_not_like, $email_address_contains, $email_address_not_contains, $email_address_starts_with, $email_address_not_starts_with, $email_address_ends_with, $email_address_not_ends_with, $email_address_in, $email_address_between, $phone_number_not_equal, $phone_number_less, $phone_number_less_or_equal, $phone_number_greater, $phone_number_greater_or_equal, $phone_number_is_null, $phone_number_is_not_null, $phone_number_like, $phone_number_not_like, $phone_number_contains, $phone_number_not_contains, $phone_number_starts_with, $phone_number_not_starts_with, $phone_number_ends_with, $phone_number_not_ends_with, $phone_number_in, $phone_number_between, $phone_number2_not_equal, $phone_number2_less, $phone_number2_less_or_equal, $phone_number2_greater, $phone_number2_greater_or_equal, $phone_number2_is_null, $phone_number2_is_not_null, $phone_number2_like, $phone_number2_not_like, $phone_number2_contains, $phone_number2_not_contains, $phone_number2_starts_with, $phone_number2_not_starts_with, $phone_number2_ends_with, $phone_number2_not_ends_with, $phone_number2_in, $phone_number2_between, $phone_number3_not_equal, $phone_number3_less, $phone_number3_less_or_equal, $phone_number3_greater, $phone_number3_greater_or_equal, $phone_number3_is_null, $phone_number3_is_not_null, $phone_number3_like, $phone_number3_not_like, $phone_number3_contains, $phone_number3_not_contains, $phone_number3_starts_with, $phone_number3_not_starts_with, $phone_number3_ends_with, $phone_number3_not_ends_with, $phone_number3_in, $phone_number3_between, $street1_not_equal, $street1_less, $street1_less_or_equal, $street1_greater, $street1_greater_or_equal, $street1_is_null, $street1_is_not_null, $street1_like, $street1_not_like, $street1_contains, $street1_not_contains, $street1_starts_with, $street1_not_starts_with, $street1_ends_with, $street1_not_ends_with, $street1_in, $street1_between, $street2_not_equal, $street2_less, $street2_less_or_equal, $street2_greater, $street2_greater_or_equal, $street2_is_null, $street2_is_not_null, $street2_like, $street2_not_like, $street2_contains, $street2_not_contains, $street2_starts_with, $street2_not_starts_with, $street2_ends_with, $street2_not_ends_with, $street2_in, $street2_between, $street3_not_equal, $street3_less, $street3_less_or_equal, $street3_greater, $street3_greater_or_equal, $street3_is_null, $street3_is_not_null, $street3_like, $street3_not_like, $street3_contains, $street3_not_contains, $street3_starts_with, $street3_not_starts_with, $street3_ends_with, $street3_not_ends_with, $street3_in, $street3_between, $city_not_equal, $city_less, $city_less_or_equal, $city_greater, $city_greater_or_equal, $city_is_null, $city_is_not_null, $city_like, $city_not_like, $city_contains, $city_not_contains, $city_starts_with, $city_not_starts_with, $city_ends_with, $city_not_ends_with, $city_in, $city_between, $state_not_equal, $state_less, $state_less_or_equal, $state_greater, $state_greater_or_equal, $state_is_null, $state_is_not_null, $state_like, $state_not_like, $state_contains, $state_not_contains, $state_starts_with, $state_not_starts_with, $state_ends_with, $state_not_ends_with, $state_in, $state_between, $country_code_not_equal, $country_code_less, $country_code_less_or_equal, $country_code_greater, $country_code_greater_or_equal, $country_code_is_null, $country_code_is_not_null, $country_code_like, $country_code_not_like, $country_code_contains, $country_code_not_contains, $country_code_starts_with, $country_code_not_starts_with, $country_code_ends_with, $country_code_not_ends_with, $country_code_in, $country_code_between, $postal_code_not_equal, $postal_code_less, $postal_code_less_or_equal, $postal_code_greater, $postal_code_greater_or_equal, $postal_code_is_null, $postal_code_is_not_null, $postal_code_like, $postal_code_not_like, $postal_code_contains, $postal_code_not_contains, $postal_code_starts_with, $postal_code_not_starts_with, $postal_code_ends_with, $postal_code_not_ends_with, $postal_code_in, $postal_code_between, $fax_number_not_equal, $fax_number_less, $fax_number_less_or_equal, $fax_number_greater, $fax_number_greater_or_equal, $fax_number_is_null, $fax_number_is_not_null, $fax_number_like, $fax_number_not_like, $fax_number_contains, $fax_number_not_contains, $fax_number_starts_with, $fax_number_not_starts_with, $fax_number_ends_with, $fax_number_not_ends_with, $fax_number_in, $fax_number_between, $company_not_equal, $company_less, $company_less_or_equal, $company_greater, $company_greater_or_equal, $company_is_null, $company_is_not_null, $company_like, $company_not_like, $company_contains, $company_not_contains, $company_starts_with, $company_not_starts_with, $company_ends_with, $company_not_ends_with, $company_in, $company_between, $customer_type_not_equal, $customer_type_less, $customer_type_less_or_equal, $customer_type_greater, $customer_type_greater_or_equal, $customer_type_is_null, $customer_type_is_not_null, $customer_type_like, $customer_type_not_like, $customer_type_contains, $customer_type_not_contains, $customer_type_starts_with, $customer_type_not_starts_with, $customer_type_ends_with, $customer_type_not_ends_with, $customer_type_in, $customer_type_between, $promote_flag_not_equal, $promote_flag_less, $promote_flag_less_or_equal, $promote_flag_greater, $promote_flag_greater_or_equal, $promote_flag_is_null, $promote_flag_is_not_null, $promote_flag_like, $promote_flag_not_like, $promote_flag_contains, $promote_flag_not_contains, $promote_flag_starts_with, $promote_flag_not_starts_with, $promote_flag_ends_with, $promote_flag_not_ends_with, $promote_flag_in, $promote_flag_between, $promote_by_partners_not_equal, $promote_by_partners_less, $promote_by_partners_less_or_equal, $promote_by_partners_greater, $promote_by_partners_greater_or_equal, $promote_by_partners_is_null, $promote_by_partners_is_not_null, $promote_by_partners_like, $promote_by_partners_not_like, $promote_by_partners_contains, $promote_by_partners_not_contains, $promote_by_partners_starts_with, $promote_by_partners_not_starts_with, $promote_by_partners_ends_with, $promote_by_partners_not_ends_with, $promote_by_partners_in, $promote_by_partners_between, $promote_by_phone_not_equal, $promote_by_phone_less, $promote_by_phone_less_or_equal, $promote_by_phone_greater, $promote_by_phone_greater_or_equal, $promote_by_phone_is_null, $promote_by_phone_is_not_null, $promote_by_phone_like, $promote_by_phone_not_like, $promote_by_phone_contains, $promote_by_phone_not_contains, $promote_by_phone_starts_with, $promote_by_phone_not_starts_with, $promote_by_phone_ends_with, $promote_by_phone_not_ends_with, $promote_by_phone_in, $promote_by_phone_between, $promote_by_fax_not_equal, $promote_by_fax_less, $promote_by_fax_less_or_equal, $promote_by_fax_greater, $promote_by_fax_greater_or_equal, $promote_by_fax_is_null, $promote_by_fax_is_not_null, $promote_by_fax_like, $promote_by_fax_not_like, $promote_by_fax_contains, $promote_by_fax_not_contains, $promote_by_fax_starts_with, $promote_by_fax_not_starts_with, $promote_by_fax_ends_with, $promote_by_fax_not_ends_with, $promote_by_fax_in, $promote_by_fax_between, $promote_by_email_not_equal, $promote_by_email_less, $promote_by_email_less_or_equal, $promote_by_email_greater, $promote_by_email_greater_or_equal, $promote_by_email_is_null, $promote_by_email_is_not_null, $promote_by_email_like, $promote_by_email_not_like, $promote_by_email_contains, $promote_by_email_not_contains, $promote_by_email_starts_with, $promote_by_email_not_starts_with, $promote_by_email_ends_with, $promote_by_email_not_ends_with, $promote_by_email_in, $promote_by_email_between, $promote_by_mail_not_equal, $promote_by_mail_less, $promote_by_mail_less_or_equal, $promote_by_mail_greater, $promote_by_mail_greater_or_equal, $promote_by_mail_is_null, $promote_by_mail_is_not_null, $promote_by_mail_like, $promote_by_mail_not_like, $promote_by_mail_contains, $promote_by_mail_not_contains, $promote_by_mail_starts_with, $promote_by_mail_not_starts_with, $promote_by_mail_ends_with, $promote_by_mail_not_ends_with, $promote_by_mail_in, $promote_by_mail_between, $promote_by_sms_not_equal, $promote_by_sms_less, $promote_by_sms_less_or_equal, $promote_by_sms_greater, $promote_by_sms_greater_or_equal, $promote_by_sms_is_null, $promote_by_sms_is_not_null, $promote_by_sms_like, $promote_by_sms_not_like, $promote_by_sms_contains, $promote_by_sms_not_contains, $promote_by_sms_starts_with, $promote_by_sms_not_starts_with, $promote_by_sms_ends_with, $promote_by_sms_not_ends_with, $promote_by_sms_in, $promote_by_sms_between, $promote_by_phone1_not_equal, $promote_by_phone1_less, $promote_by_phone1_less_or_equal, $promote_by_phone1_greater, $promote_by_phone1_greater_or_equal, $promote_by_phone1_is_null, $promote_by_phone1_is_not_null, $promote_by_phone1_like, $promote_by_phone1_not_like, $promote_by_phone1_contains, $promote_by_phone1_not_contains, $promote_by_phone1_starts_with, $promote_by_phone1_not_starts_with, $promote_by_phone1_ends_with, $promote_by_phone1_not_ends_with, $promote_by_phone1_in, $promote_by_phone1_between, $promote_by_phone2_not_equal, $promote_by_phone2_less, $promote_by_phone2_less_or_equal, $promote_by_phone2_greater, $promote_by_phone2_greater_or_equal, $promote_by_phone2_is_null, $promote_by_phone2_is_not_null, $promote_by_phone2_like, $promote_by_phone2_not_like, $promote_by_phone2_contains, $promote_by_phone2_not_contains, $promote_by_phone2_starts_with, $promote_by_phone2_not_starts_with, $promote_by_phone2_ends_with, $promote_by_phone2_not_ends_with, $promote_by_phone2_in, $promote_by_phone2_between, $promote_by_phone3_not_equal, $promote_by_phone3_less, $promote_by_phone3_less_or_equal, $promote_by_phone3_greater, $promote_by_phone3_greater_or_equal, $promote_by_phone3_is_null, $promote_by_phone3_is_not_null, $promote_by_phone3_like, $promote_by_phone3_not_like, $promote_by_phone3_contains, $promote_by_phone3_not_contains, $promote_by_phone3_starts_with, $promote_by_phone3_not_starts_with, $promote_by_phone3_ends_with, $promote_by_phone3_not_ends_with, $promote_by_phone3_in, $promote_by_phone3_between, $title_not_equal, $title_less, $title_less_or_equal, $title_greater, $title_greater_or_equal, $title_is_null, $title_is_not_null, $title_like, $title_not_like, $title_contains, $title_not_contains, $title_starts_with, $title_not_starts_with, $title_ends_with, $title_not_ends_with, $title_in, $title_between, $first_name_not_equal, $first_name_less, $first_name_less_or_equal, $first_name_greater, $first_name_greater_or_equal, $first_name_is_null, $first_name_is_not_null, $first_name_like, $first_name_not_like, $first_name_contains, $first_name_not_contains, $first_name_starts_with, $first_name_not_starts_with, $first_name_ends_with, $first_name_not_ends_with, $first_name_in, $first_name_between, $middle_initial_not_equal, $middle_initial_less, $middle_initial_less_or_equal, $middle_initial_greater, $middle_initial_greater_or_equal, $middle_initial_is_null, $middle_initial_is_not_null, $middle_initial_like, $middle_initial_not_like, $middle_initial_contains, $middle_initial_not_contains, $middle_initial_starts_with, $middle_initial_not_starts_with, $middle_initial_ends_with, $middle_initial_not_ends_with, $middle_initial_in, $middle_initial_between, $last_name_not_equal, $last_name_less, $last_name_less_or_equal, $last_name_greater, $last_name_greater_or_equal, $last_name_is_null, $last_name_is_not_null, $last_name_like, $last_name_not_like, $last_name_contains, $last_name_not_contains, $last_name_starts_with, $last_name_not_starts_with, $last_name_ends_with, $last_name_not_ends_with, $last_name_in, $last_name_between, $suffix_not_equal, $suffix_less, $suffix_less_or_equal, $suffix_greater, $suffix_greater_or_equal, $suffix_is_null, $suffix_is_not_null, $suffix_like, $suffix_not_like, $suffix_contains, $suffix_not_contains, $suffix_starts_with, $suffix_not_starts_with, $suffix_ends_with, $suffix_not_ends_with, $suffix_in, $suffix_between, $job_title_not_equal, $job_title_less, $job_title_less_or_equal, $job_title_greater, $job_title_greater_or_equal, $job_title_is_null, $job_title_is_not_null, $job_title_like, $job_title_not_like, $job_title_contains, $job_title_not_contains, $job_title_starts_with, $job_title_not_starts_with, $job_title_ends_with, $job_title_not_ends_with, $job_title_in, $job_title_between, $job_position_code_not_equal, $job_position_code_less, $job_position_code_less_or_equal, $job_position_code_greater, $job_position_code_greater_or_equal, $job_position_code_is_null, $job_position_code_is_not_null, $job_position_code_like, $job_position_code_not_like, $job_position_code_contains, $job_position_code_not_contains, $job_position_code_starts_with, $job_position_code_not_starts_with, $job_position_code_ends_with, $job_position_code_not_ends_with, $job_position_code_in, $job_position_code_between, $communication_preference_not_equal, $communication_preference_less, $communication_preference_less_or_equal, $communication_preference_greater, $communication_preference_greater_or_equal, $communication_preference_is_null, $communication_preference_is_not_null, $communication_preference_like, $communication_preference_not_like, $communication_preference_contains, $communication_preference_not_contains, $communication_preference_starts_with, $communication_preference_not_starts_with, $communication_preference_ends_with, $communication_preference_not_ends_with, $communication_preference_in, $communication_preference_between, $source_promotion_not_equal, $source_promotion_less, $source_promotion_less_or_equal, $source_promotion_greater, $source_promotion_greater_or_equal, $source_promotion_is_null, $source_promotion_is_not_null, $source_promotion_like, $source_promotion_not_like, $source_promotion_contains, $source_promotion_not_contains, $source_promotion_starts_with, $source_promotion_not_starts_with, $source_promotion_ends_with, $source_promotion_not_ends_with, $source_promotion_in, $source_promotion_between, $address_code_not_equal, $address_code_less, $address_code_less_or_equal, $address_code_greater, $address_code_greater_or_equal, $address_code_is_null, $address_code_is_not_null, $address_code_like, $address_code_not_like, $address_code_contains, $address_code_not_contains, $address_code_starts_with, $address_code_not_starts_with, $address_code_ends_with, $address_code_not_ends_with, $address_code_in, $address_code_between, $default_currency_not_equal, $default_currency_less, $default_currency_less_or_equal, $default_currency_greater, $default_currency_greater_or_equal, $default_currency_is_null, $default_currency_is_not_null, $default_currency_like, $default_currency_not_like, $default_currency_contains, $default_currency_not_contains, $default_currency_starts_with, $default_currency_not_starts_with, $default_currency_ends_with, $default_currency_not_ends_with, $default_currency_in, $default_currency_between, $department_not_equal, $department_less, $department_less_or_equal, $department_greater, $department_greater_or_equal, $department_is_null, $department_is_not_null, $department_like, $department_not_like, $department_contains, $department_not_contains, $department_starts_with, $department_not_starts_with, $department_ends_with, $department_not_ends_with, $department_in, $department_between, $county_not_equal, $county_less, $county_less_or_equal, $county_greater, $county_greater_or_equal, $county_is_null, $county_is_not_null, $county_like, $county_not_like, $county_contains, $county_not_contains, $county_starts_with, $county_not_starts_with, $county_ends_with, $county_not_ends_with, $county_in, $county_between, $pin_code_not_equal, $pin_code_less, $pin_code_less_or_equal, $pin_code_greater, $pin_code_greater_or_equal, $pin_code_is_null, $pin_code_is_not_null, $pin_code_like, $pin_code_not_like, $pin_code_contains, $pin_code_not_contains, $pin_code_starts_with, $pin_code_not_starts_with, $pin_code_ends_with, $pin_code_not_ends_with, $pin_code_in, $pin_code_between, $social_security_number_not_equal, $social_security_number_less, $social_security_number_less_or_equal, $social_security_number_greater, $social_security_number_greater_or_equal, $social_security_number_is_null, $social_security_number_is_not_null, $social_security_number_like, $social_security_number_not_like, $social_security_number_contains, $social_security_number_not_contains, $social_security_number_starts_with, $social_security_number_not_starts_with, $social_security_number_ends_with, $social_security_number_not_ends_with, $social_security_number_in, $social_security_number_between, $street_name_not_equal, $street_name_less, $street_name_less_or_equal, $street_name_greater, $street_name_greater_or_equal, $street_name_is_null, $street_name_is_not_null, $street_name_like, $street_name_not_like, $street_name_contains, $street_name_not_contains, $street_name_starts_with, $street_name_not_starts_with, $street_name_ends_with, $street_name_not_ends_with, $street_name_in, $street_name_between, $street_type_not_equal, $street_type_less, $street_type_less_or_equal, $street_type_greater, $street_type_greater_or_equal, $street_type_is_null, $street_type_is_not_null, $street_type_like, $street_type_not_like, $street_type_contains, $street_type_not_contains, $street_type_starts_with, $street_type_not_starts_with, $street_type_ends_with, $street_type_not_ends_with, $street_type_in, $street_type_between, $last_updated_on_not_equal, $last_updated_on_less, $last_updated_on_less_or_equal, $last_updated_on_greater, $last_updated_on_greater_or_equal, $last_updated_on_is_null, $last_updated_on_is_not_null, $last_updated_on_like, $last_updated_on_not_like, $last_updated_on_contains, $last_updated_on_not_contains, $last_updated_on_starts_with, $last_updated_on_not_starts_with, $last_updated_on_ends_with, $last_updated_on_not_ends_with, $last_updated_on_in, $last_updated_on_between, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $last_name_soundex_not_equal, $last_name_soundex_less, $last_name_soundex_less_or_equal, $last_name_soundex_greater, $last_name_soundex_greater_or_equal, $last_name_soundex_is_null, $last_name_soundex_is_not_null, $last_name_soundex_like, $last_name_soundex_not_like, $last_name_soundex_contains, $last_name_soundex_not_contains, $last_name_soundex_starts_with, $last_name_soundex_not_starts_with, $last_name_soundex_ends_with, $last_name_soundex_not_ends_with, $last_name_soundex_in, $last_name_soundex_between, $company_name_soundex_not_equal, $company_name_soundex_less, $company_name_soundex_less_or_equal, $company_name_soundex_greater, $company_name_soundex_greater_or_equal, $company_name_soundex_is_null, $company_name_soundex_is_not_null, $company_name_soundex_like, $company_name_soundex_not_like, $company_name_soundex_contains, $company_name_soundex_not_contains, $company_name_soundex_starts_with, $company_name_soundex_not_starts_with, $company_name_soundex_ends_with, $company_name_soundex_not_ends_with, $company_name_soundex_in, $company_name_soundex_between)

Gets customers matching the filter criteria. Filters are passed as a URI parameter in the format &lt;Field&gt;.&lt;Operator&gt;=&lt;Value&gt;.  For example, /customers?FirstName.CN=Matt or /customer-addresses?FirstName.EQ=John&amp;LastName.EQ=Doe

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_all_addresses = true; // bool | Include all customer addresses in the response or just the matched address?
$include_credit_summary = true; // bool | Include the customer's credit summary in the response.
$propagate_phone_number = true; // bool | If true, OR clauses using the value in the PhoneNumber comparison will be added for PhoneNumber2               and PhoneNumber3, if no comparisons for those fields have been specified.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$customer_number = "customer_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$full_name = "full_name_example"; // string | Filter on ATN-NME using 'Equal' operator
$email_address = "email_address_example"; // string | Filter on ADR-EML using 'Equal' operator
$phone_number = "phone_number_example"; // string | Filter on PHO1-IDX using 'Equal' operator
$phone_number2 = "phone_number2_example"; // string | Filter on PHO2-IDX using 'Equal' operator
$phone_number3 = "phone_number3_example"; // string | Filter on PHO3-IDX using 'Equal' operator
$street1 = "street1_example"; // string | Filter on STR-1ST using 'Equal' operator
$street2 = "street2_example"; // string | Filter on STR-2ND using 'Equal' operator
$street3 = "street3_example"; // string | Filter on STR-3RD using 'Equal' operator
$city = "city_example"; // string | Filter on CTM-CTY using 'Equal' operator
$state = "state_example"; // string | Filter on CTM-STE using 'Equal' operator
$country_code = "country_code_example"; // string | Filter on CUN-TYP using 'Equal' operator
$postal_code = "postal_code_example"; // string | Filter on ZIP-CDE using 'Equal' operator
$fax_number = "fax_number_example"; // string | Filter on FAX-NBR using 'Equal' operator
$company = "company_example"; // string | Filter on CMP-NME using 'Equal' operator
$customer_type = "customer_type_example"; // string | Filter on CTM-TYP using 'Equal' operator
$promote_flag = "promote_flag_example"; // string | Filter on PROMO using 'Equal' operator
$promote_by_partners = "promote_by_partners_example"; // string | Filter on PMO-PTR using 'Equal' operator
$promote_by_phone = "promote_by_phone_example"; // string | Filter on PMO-PHN using 'Equal' operator
$promote_by_fax = "promote_by_fax_example"; // string | Filter on PMO-FAX using 'Equal' operator
$promote_by_email = "promote_by_email_example"; // string | Filter on PMO-EML using 'Equal' operator
$promote_by_mail = "promote_by_mail_example"; // string | Filter on PMO-ADR using 'Equal' operator
$promote_by_sms = "promote_by_sms_example"; // string | Filter on PMO-SMS using 'Equal' operator
$promote_by_phone1 = "promote_by_phone1_example"; // string | Filter on PMO-PH1 using 'Equal' operator
$promote_by_phone2 = "promote_by_phone2_example"; // string | Filter on PMO-PH2 using 'Equal' operator
$promote_by_phone3 = "promote_by_phone3_example"; // string | Filter on PMO-PH3 using 'Equal' operator
$title = "title_example"; // string | Filter on CTM-TTL using 'Equal' operator
$first_name = "first_name_example"; // string | Filter on ATN-1ST using 'Equal' operator
$middle_initial = "middle_initial_example"; // string | Filter on ATN-MID using 'Equal' operator
$last_name = "last_name_example"; // string | Filter on ATN-END using 'Equal' operator
$suffix = "suffix_example"; // string | Filter on CTM-SFX using 'Equal' operator
$job_title = "job_title_example"; // string | Filter on JOB-TTL using 'Equal' operator
$job_position_code = "job_position_code_example"; // string | Filter on CTM-POS using 'Equal' operator
$communication_preference = "communication_preference_example"; // string | Filter on COMM-PRF using 'Equal' operator
$source_promotion = "source_promotion_example"; // string | Filter on CTM-SRC using 'Equal' operator
$address_code = "address_code_example"; // string | Filter on ADR-CDE using 'Equal' operator
$default_currency = "default_currency_example"; // string | Filter on BIL-CUR using 'Equal' operator
$department = "department_example"; // string | Filter on DPT-NME using 'Equal' operator
$county = "county_example"; // string | Filter on CTM-CNTY using 'Equal' operator
$pin_code = "pin_code_example"; // string | Filter on PIN-CODE using 'Equal' operator
$social_security_number = "social_security_number_example"; // string | Filter on SOC-SEC using 'Equal' operator
$street_name = "street_name_example"; // string | Filter on FSTR-NME using 'Equal' operator
$street_type = "street_type_example"; // string | Filter on STR-TYP using 'Equal' operator
$last_updated_on = "last_updated_on_example"; // string | Filter on UPD-DTE using 'Equal' operator
$item_number = "item_number_example"; // string | Filter on ITM-NUM using 'Equal' operator
$last_name_soundex = "last_name_soundex_example"; // string | Filter on END-SNDX using 'Equal' operator
$company_name_soundex = "company_name_soundex_example"; // string | Filter on CMP-SNDX using 'Equal' operator
$customer_number_not_equal = "customer_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$customer_number_less = "customer_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$customer_number_less_or_equal = "customer_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$customer_number_greater = "customer_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$customer_number_greater_or_equal = "customer_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$customer_number_is_null = "customer_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$customer_number_is_not_null = "customer_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$customer_number_like = "customer_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$customer_number_not_like = "customer_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$customer_number_contains = "customer_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$customer_number_not_contains = "customer_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$customer_number_starts_with = "customer_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$customer_number_not_starts_with = "customer_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$customer_number_ends_with = "customer_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$customer_number_not_ends_with = "customer_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$customer_number_in = "customer_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$customer_number_between = "customer_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$full_name_not_equal = "full_name_not_equal_example"; // string | Filter on ATN-NME using 'NotEqual' operator
$full_name_less = "full_name_less_example"; // string | Filter on ATN-NME using 'Less' operator
$full_name_less_or_equal = "full_name_less_or_equal_example"; // string | Filter on ATN-NME using 'LessOrEqual' operator
$full_name_greater = "full_name_greater_example"; // string | Filter on ATN-NME using 'Greater' operator
$full_name_greater_or_equal = "full_name_greater_or_equal_example"; // string | Filter on ATN-NME using 'GreaterOrEqual' operator
$full_name_is_null = "full_name_is_null_example"; // string | Filter on ATN-NME using 'IsNull' operator
$full_name_is_not_null = "full_name_is_not_null_example"; // string | Filter on ATN-NME using 'IsNotNull' operator
$full_name_like = "full_name_like_example"; // string | Filter on ATN-NME using 'Like' operator
$full_name_not_like = "full_name_not_like_example"; // string | Filter on ATN-NME using 'NotLike' operator
$full_name_contains = "full_name_contains_example"; // string | Filter on ATN-NME using 'Contains' operator
$full_name_not_contains = "full_name_not_contains_example"; // string | Filter on ATN-NME using 'NotContains' operator
$full_name_starts_with = "full_name_starts_with_example"; // string | Filter on ATN-NME using 'StartsWith' operator
$full_name_not_starts_with = "full_name_not_starts_with_example"; // string | Filter on ATN-NME using 'NotStartsWith' operator
$full_name_ends_with = "full_name_ends_with_example"; // string | Filter on ATN-NME using 'EndsWith' operator
$full_name_not_ends_with = "full_name_not_ends_with_example"; // string | Filter on ATN-NME using 'NotEndsWith' operator
$full_name_in = "full_name_in_example"; // string | Filter on ATN-NME using 'In' operator
$full_name_between = "full_name_between_example"; // string | Filter on ATN-NME using 'Between' operator
$email_address_not_equal = "email_address_not_equal_example"; // string | Filter on ADR-EML using 'NotEqual' operator
$email_address_less = "email_address_less_example"; // string | Filter on ADR-EML using 'Less' operator
$email_address_less_or_equal = "email_address_less_or_equal_example"; // string | Filter on ADR-EML using 'LessOrEqual' operator
$email_address_greater = "email_address_greater_example"; // string | Filter on ADR-EML using 'Greater' operator
$email_address_greater_or_equal = "email_address_greater_or_equal_example"; // string | Filter on ADR-EML using 'GreaterOrEqual' operator
$email_address_is_null = "email_address_is_null_example"; // string | Filter on ADR-EML using 'IsNull' operator
$email_address_is_not_null = "email_address_is_not_null_example"; // string | Filter on ADR-EML using 'IsNotNull' operator
$email_address_like = "email_address_like_example"; // string | Filter on ADR-EML using 'Like' operator
$email_address_not_like = "email_address_not_like_example"; // string | Filter on ADR-EML using 'NotLike' operator
$email_address_contains = "email_address_contains_example"; // string | Filter on ADR-EML using 'Contains' operator
$email_address_not_contains = "email_address_not_contains_example"; // string | Filter on ADR-EML using 'NotContains' operator
$email_address_starts_with = "email_address_starts_with_example"; // string | Filter on ADR-EML using 'StartsWith' operator
$email_address_not_starts_with = "email_address_not_starts_with_example"; // string | Filter on ADR-EML using 'NotStartsWith' operator
$email_address_ends_with = "email_address_ends_with_example"; // string | Filter on ADR-EML using 'EndsWith' operator
$email_address_not_ends_with = "email_address_not_ends_with_example"; // string | Filter on ADR-EML using 'NotEndsWith' operator
$email_address_in = "email_address_in_example"; // string | Filter on ADR-EML using 'In' operator
$email_address_between = "email_address_between_example"; // string | Filter on ADR-EML using 'Between' operator
$phone_number_not_equal = "phone_number_not_equal_example"; // string | Filter on PHO1-IDX using 'NotEqual' operator
$phone_number_less = "phone_number_less_example"; // string | Filter on PHO1-IDX using 'Less' operator
$phone_number_less_or_equal = "phone_number_less_or_equal_example"; // string | Filter on PHO1-IDX using 'LessOrEqual' operator
$phone_number_greater = "phone_number_greater_example"; // string | Filter on PHO1-IDX using 'Greater' operator
$phone_number_greater_or_equal = "phone_number_greater_or_equal_example"; // string | Filter on PHO1-IDX using 'GreaterOrEqual' operator
$phone_number_is_null = "phone_number_is_null_example"; // string | Filter on PHO1-IDX using 'IsNull' operator
$phone_number_is_not_null = "phone_number_is_not_null_example"; // string | Filter on PHO1-IDX using 'IsNotNull' operator
$phone_number_like = "phone_number_like_example"; // string | Filter on PHO1-IDX using 'Like' operator
$phone_number_not_like = "phone_number_not_like_example"; // string | Filter on PHO1-IDX using 'NotLike' operator
$phone_number_contains = "phone_number_contains_example"; // string | Filter on PHO1-IDX using 'Contains' operator
$phone_number_not_contains = "phone_number_not_contains_example"; // string | Filter on PHO1-IDX using 'NotContains' operator
$phone_number_starts_with = "phone_number_starts_with_example"; // string | Filter on PHO1-IDX using 'StartsWith' operator
$phone_number_not_starts_with = "phone_number_not_starts_with_example"; // string | Filter on PHO1-IDX using 'NotStartsWith' operator
$phone_number_ends_with = "phone_number_ends_with_example"; // string | Filter on PHO1-IDX using 'EndsWith' operator
$phone_number_not_ends_with = "phone_number_not_ends_with_example"; // string | Filter on PHO1-IDX using 'NotEndsWith' operator
$phone_number_in = "phone_number_in_example"; // string | Filter on PHO1-IDX using 'In' operator
$phone_number_between = "phone_number_between_example"; // string | Filter on PHO1-IDX using 'Between' operator
$phone_number2_not_equal = "phone_number2_not_equal_example"; // string | Filter on PHO2-IDX using 'NotEqual' operator
$phone_number2_less = "phone_number2_less_example"; // string | Filter on PHO2-IDX using 'Less' operator
$phone_number2_less_or_equal = "phone_number2_less_or_equal_example"; // string | Filter on PHO2-IDX using 'LessOrEqual' operator
$phone_number2_greater = "phone_number2_greater_example"; // string | Filter on PHO2-IDX using 'Greater' operator
$phone_number2_greater_or_equal = "phone_number2_greater_or_equal_example"; // string | Filter on PHO2-IDX using 'GreaterOrEqual' operator
$phone_number2_is_null = "phone_number2_is_null_example"; // string | Filter on PHO2-IDX using 'IsNull' operator
$phone_number2_is_not_null = "phone_number2_is_not_null_example"; // string | Filter on PHO2-IDX using 'IsNotNull' operator
$phone_number2_like = "phone_number2_like_example"; // string | Filter on PHO2-IDX using 'Like' operator
$phone_number2_not_like = "phone_number2_not_like_example"; // string | Filter on PHO2-IDX using 'NotLike' operator
$phone_number2_contains = "phone_number2_contains_example"; // string | Filter on PHO2-IDX using 'Contains' operator
$phone_number2_not_contains = "phone_number2_not_contains_example"; // string | Filter on PHO2-IDX using 'NotContains' operator
$phone_number2_starts_with = "phone_number2_starts_with_example"; // string | Filter on PHO2-IDX using 'StartsWith' operator
$phone_number2_not_starts_with = "phone_number2_not_starts_with_example"; // string | Filter on PHO2-IDX using 'NotStartsWith' operator
$phone_number2_ends_with = "phone_number2_ends_with_example"; // string | Filter on PHO2-IDX using 'EndsWith' operator
$phone_number2_not_ends_with = "phone_number2_not_ends_with_example"; // string | Filter on PHO2-IDX using 'NotEndsWith' operator
$phone_number2_in = "phone_number2_in_example"; // string | Filter on PHO2-IDX using 'In' operator
$phone_number2_between = "phone_number2_between_example"; // string | Filter on PHO2-IDX using 'Between' operator
$phone_number3_not_equal = "phone_number3_not_equal_example"; // string | Filter on PHO3-IDX using 'NotEqual' operator
$phone_number3_less = "phone_number3_less_example"; // string | Filter on PHO3-IDX using 'Less' operator
$phone_number3_less_or_equal = "phone_number3_less_or_equal_example"; // string | Filter on PHO3-IDX using 'LessOrEqual' operator
$phone_number3_greater = "phone_number3_greater_example"; // string | Filter on PHO3-IDX using 'Greater' operator
$phone_number3_greater_or_equal = "phone_number3_greater_or_equal_example"; // string | Filter on PHO3-IDX using 'GreaterOrEqual' operator
$phone_number3_is_null = "phone_number3_is_null_example"; // string | Filter on PHO3-IDX using 'IsNull' operator
$phone_number3_is_not_null = "phone_number3_is_not_null_example"; // string | Filter on PHO3-IDX using 'IsNotNull' operator
$phone_number3_like = "phone_number3_like_example"; // string | Filter on PHO3-IDX using 'Like' operator
$phone_number3_not_like = "phone_number3_not_like_example"; // string | Filter on PHO3-IDX using 'NotLike' operator
$phone_number3_contains = "phone_number3_contains_example"; // string | Filter on PHO3-IDX using 'Contains' operator
$phone_number3_not_contains = "phone_number3_not_contains_example"; // string | Filter on PHO3-IDX using 'NotContains' operator
$phone_number3_starts_with = "phone_number3_starts_with_example"; // string | Filter on PHO3-IDX using 'StartsWith' operator
$phone_number3_not_starts_with = "phone_number3_not_starts_with_example"; // string | Filter on PHO3-IDX using 'NotStartsWith' operator
$phone_number3_ends_with = "phone_number3_ends_with_example"; // string | Filter on PHO3-IDX using 'EndsWith' operator
$phone_number3_not_ends_with = "phone_number3_not_ends_with_example"; // string | Filter on PHO3-IDX using 'NotEndsWith' operator
$phone_number3_in = "phone_number3_in_example"; // string | Filter on PHO3-IDX using 'In' operator
$phone_number3_between = "phone_number3_between_example"; // string | Filter on PHO3-IDX using 'Between' operator
$street1_not_equal = "street1_not_equal_example"; // string | Filter on STR-1ST using 'NotEqual' operator
$street1_less = "street1_less_example"; // string | Filter on STR-1ST using 'Less' operator
$street1_less_or_equal = "street1_less_or_equal_example"; // string | Filter on STR-1ST using 'LessOrEqual' operator
$street1_greater = "street1_greater_example"; // string | Filter on STR-1ST using 'Greater' operator
$street1_greater_or_equal = "street1_greater_or_equal_example"; // string | Filter on STR-1ST using 'GreaterOrEqual' operator
$street1_is_null = "street1_is_null_example"; // string | Filter on STR-1ST using 'IsNull' operator
$street1_is_not_null = "street1_is_not_null_example"; // string | Filter on STR-1ST using 'IsNotNull' operator
$street1_like = "street1_like_example"; // string | Filter on STR-1ST using 'Like' operator
$street1_not_like = "street1_not_like_example"; // string | Filter on STR-1ST using 'NotLike' operator
$street1_contains = "street1_contains_example"; // string | Filter on STR-1ST using 'Contains' operator
$street1_not_contains = "street1_not_contains_example"; // string | Filter on STR-1ST using 'NotContains' operator
$street1_starts_with = "street1_starts_with_example"; // string | Filter on STR-1ST using 'StartsWith' operator
$street1_not_starts_with = "street1_not_starts_with_example"; // string | Filter on STR-1ST using 'NotStartsWith' operator
$street1_ends_with = "street1_ends_with_example"; // string | Filter on STR-1ST using 'EndsWith' operator
$street1_not_ends_with = "street1_not_ends_with_example"; // string | Filter on STR-1ST using 'NotEndsWith' operator
$street1_in = "street1_in_example"; // string | Filter on STR-1ST using 'In' operator
$street1_between = "street1_between_example"; // string | Filter on STR-1ST using 'Between' operator
$street2_not_equal = "street2_not_equal_example"; // string | Filter on STR-2ND using 'NotEqual' operator
$street2_less = "street2_less_example"; // string | Filter on STR-2ND using 'Less' operator
$street2_less_or_equal = "street2_less_or_equal_example"; // string | Filter on STR-2ND using 'LessOrEqual' operator
$street2_greater = "street2_greater_example"; // string | Filter on STR-2ND using 'Greater' operator
$street2_greater_or_equal = "street2_greater_or_equal_example"; // string | Filter on STR-2ND using 'GreaterOrEqual' operator
$street2_is_null = "street2_is_null_example"; // string | Filter on STR-2ND using 'IsNull' operator
$street2_is_not_null = "street2_is_not_null_example"; // string | Filter on STR-2ND using 'IsNotNull' operator
$street2_like = "street2_like_example"; // string | Filter on STR-2ND using 'Like' operator
$street2_not_like = "street2_not_like_example"; // string | Filter on STR-2ND using 'NotLike' operator
$street2_contains = "street2_contains_example"; // string | Filter on STR-2ND using 'Contains' operator
$street2_not_contains = "street2_not_contains_example"; // string | Filter on STR-2ND using 'NotContains' operator
$street2_starts_with = "street2_starts_with_example"; // string | Filter on STR-2ND using 'StartsWith' operator
$street2_not_starts_with = "street2_not_starts_with_example"; // string | Filter on STR-2ND using 'NotStartsWith' operator
$street2_ends_with = "street2_ends_with_example"; // string | Filter on STR-2ND using 'EndsWith' operator
$street2_not_ends_with = "street2_not_ends_with_example"; // string | Filter on STR-2ND using 'NotEndsWith' operator
$street2_in = "street2_in_example"; // string | Filter on STR-2ND using 'In' operator
$street2_between = "street2_between_example"; // string | Filter on STR-2ND using 'Between' operator
$street3_not_equal = "street3_not_equal_example"; // string | Filter on STR-3RD using 'NotEqual' operator
$street3_less = "street3_less_example"; // string | Filter on STR-3RD using 'Less' operator
$street3_less_or_equal = "street3_less_or_equal_example"; // string | Filter on STR-3RD using 'LessOrEqual' operator
$street3_greater = "street3_greater_example"; // string | Filter on STR-3RD using 'Greater' operator
$street3_greater_or_equal = "street3_greater_or_equal_example"; // string | Filter on STR-3RD using 'GreaterOrEqual' operator
$street3_is_null = "street3_is_null_example"; // string | Filter on STR-3RD using 'IsNull' operator
$street3_is_not_null = "street3_is_not_null_example"; // string | Filter on STR-3RD using 'IsNotNull' operator
$street3_like = "street3_like_example"; // string | Filter on STR-3RD using 'Like' operator
$street3_not_like = "street3_not_like_example"; // string | Filter on STR-3RD using 'NotLike' operator
$street3_contains = "street3_contains_example"; // string | Filter on STR-3RD using 'Contains' operator
$street3_not_contains = "street3_not_contains_example"; // string | Filter on STR-3RD using 'NotContains' operator
$street3_starts_with = "street3_starts_with_example"; // string | Filter on STR-3RD using 'StartsWith' operator
$street3_not_starts_with = "street3_not_starts_with_example"; // string | Filter on STR-3RD using 'NotStartsWith' operator
$street3_ends_with = "street3_ends_with_example"; // string | Filter on STR-3RD using 'EndsWith' operator
$street3_not_ends_with = "street3_not_ends_with_example"; // string | Filter on STR-3RD using 'NotEndsWith' operator
$street3_in = "street3_in_example"; // string | Filter on STR-3RD using 'In' operator
$street3_between = "street3_between_example"; // string | Filter on STR-3RD using 'Between' operator
$city_not_equal = "city_not_equal_example"; // string | Filter on CTM-CTY using 'NotEqual' operator
$city_less = "city_less_example"; // string | Filter on CTM-CTY using 'Less' operator
$city_less_or_equal = "city_less_or_equal_example"; // string | Filter on CTM-CTY using 'LessOrEqual' operator
$city_greater = "city_greater_example"; // string | Filter on CTM-CTY using 'Greater' operator
$city_greater_or_equal = "city_greater_or_equal_example"; // string | Filter on CTM-CTY using 'GreaterOrEqual' operator
$city_is_null = "city_is_null_example"; // string | Filter on CTM-CTY using 'IsNull' operator
$city_is_not_null = "city_is_not_null_example"; // string | Filter on CTM-CTY using 'IsNotNull' operator
$city_like = "city_like_example"; // string | Filter on CTM-CTY using 'Like' operator
$city_not_like = "city_not_like_example"; // string | Filter on CTM-CTY using 'NotLike' operator
$city_contains = "city_contains_example"; // string | Filter on CTM-CTY using 'Contains' operator
$city_not_contains = "city_not_contains_example"; // string | Filter on CTM-CTY using 'NotContains' operator
$city_starts_with = "city_starts_with_example"; // string | Filter on CTM-CTY using 'StartsWith' operator
$city_not_starts_with = "city_not_starts_with_example"; // string | Filter on CTM-CTY using 'NotStartsWith' operator
$city_ends_with = "city_ends_with_example"; // string | Filter on CTM-CTY using 'EndsWith' operator
$city_not_ends_with = "city_not_ends_with_example"; // string | Filter on CTM-CTY using 'NotEndsWith' operator
$city_in = "city_in_example"; // string | Filter on CTM-CTY using 'In' operator
$city_between = "city_between_example"; // string | Filter on CTM-CTY using 'Between' operator
$state_not_equal = "state_not_equal_example"; // string | Filter on CTM-STE using 'NotEqual' operator
$state_less = "state_less_example"; // string | Filter on CTM-STE using 'Less' operator
$state_less_or_equal = "state_less_or_equal_example"; // string | Filter on CTM-STE using 'LessOrEqual' operator
$state_greater = "state_greater_example"; // string | Filter on CTM-STE using 'Greater' operator
$state_greater_or_equal = "state_greater_or_equal_example"; // string | Filter on CTM-STE using 'GreaterOrEqual' operator
$state_is_null = "state_is_null_example"; // string | Filter on CTM-STE using 'IsNull' operator
$state_is_not_null = "state_is_not_null_example"; // string | Filter on CTM-STE using 'IsNotNull' operator
$state_like = "state_like_example"; // string | Filter on CTM-STE using 'Like' operator
$state_not_like = "state_not_like_example"; // string | Filter on CTM-STE using 'NotLike' operator
$state_contains = "state_contains_example"; // string | Filter on CTM-STE using 'Contains' operator
$state_not_contains = "state_not_contains_example"; // string | Filter on CTM-STE using 'NotContains' operator
$state_starts_with = "state_starts_with_example"; // string | Filter on CTM-STE using 'StartsWith' operator
$state_not_starts_with = "state_not_starts_with_example"; // string | Filter on CTM-STE using 'NotStartsWith' operator
$state_ends_with = "state_ends_with_example"; // string | Filter on CTM-STE using 'EndsWith' operator
$state_not_ends_with = "state_not_ends_with_example"; // string | Filter on CTM-STE using 'NotEndsWith' operator
$state_in = "state_in_example"; // string | Filter on CTM-STE using 'In' operator
$state_between = "state_between_example"; // string | Filter on CTM-STE using 'Between' operator
$country_code_not_equal = "country_code_not_equal_example"; // string | Filter on CUN-TYP using 'NotEqual' operator
$country_code_less = "country_code_less_example"; // string | Filter on CUN-TYP using 'Less' operator
$country_code_less_or_equal = "country_code_less_or_equal_example"; // string | Filter on CUN-TYP using 'LessOrEqual' operator
$country_code_greater = "country_code_greater_example"; // string | Filter on CUN-TYP using 'Greater' operator
$country_code_greater_or_equal = "country_code_greater_or_equal_example"; // string | Filter on CUN-TYP using 'GreaterOrEqual' operator
$country_code_is_null = "country_code_is_null_example"; // string | Filter on CUN-TYP using 'IsNull' operator
$country_code_is_not_null = "country_code_is_not_null_example"; // string | Filter on CUN-TYP using 'IsNotNull' operator
$country_code_like = "country_code_like_example"; // string | Filter on CUN-TYP using 'Like' operator
$country_code_not_like = "country_code_not_like_example"; // string | Filter on CUN-TYP using 'NotLike' operator
$country_code_contains = "country_code_contains_example"; // string | Filter on CUN-TYP using 'Contains' operator
$country_code_not_contains = "country_code_not_contains_example"; // string | Filter on CUN-TYP using 'NotContains' operator
$country_code_starts_with = "country_code_starts_with_example"; // string | Filter on CUN-TYP using 'StartsWith' operator
$country_code_not_starts_with = "country_code_not_starts_with_example"; // string | Filter on CUN-TYP using 'NotStartsWith' operator
$country_code_ends_with = "country_code_ends_with_example"; // string | Filter on CUN-TYP using 'EndsWith' operator
$country_code_not_ends_with = "country_code_not_ends_with_example"; // string | Filter on CUN-TYP using 'NotEndsWith' operator
$country_code_in = "country_code_in_example"; // string | Filter on CUN-TYP using 'In' operator
$country_code_between = "country_code_between_example"; // string | Filter on CUN-TYP using 'Between' operator
$postal_code_not_equal = "postal_code_not_equal_example"; // string | Filter on ZIP-CDE using 'NotEqual' operator
$postal_code_less = "postal_code_less_example"; // string | Filter on ZIP-CDE using 'Less' operator
$postal_code_less_or_equal = "postal_code_less_or_equal_example"; // string | Filter on ZIP-CDE using 'LessOrEqual' operator
$postal_code_greater = "postal_code_greater_example"; // string | Filter on ZIP-CDE using 'Greater' operator
$postal_code_greater_or_equal = "postal_code_greater_or_equal_example"; // string | Filter on ZIP-CDE using 'GreaterOrEqual' operator
$postal_code_is_null = "postal_code_is_null_example"; // string | Filter on ZIP-CDE using 'IsNull' operator
$postal_code_is_not_null = "postal_code_is_not_null_example"; // string | Filter on ZIP-CDE using 'IsNotNull' operator
$postal_code_like = "postal_code_like_example"; // string | Filter on ZIP-CDE using 'Like' operator
$postal_code_not_like = "postal_code_not_like_example"; // string | Filter on ZIP-CDE using 'NotLike' operator
$postal_code_contains = "postal_code_contains_example"; // string | Filter on ZIP-CDE using 'Contains' operator
$postal_code_not_contains = "postal_code_not_contains_example"; // string | Filter on ZIP-CDE using 'NotContains' operator
$postal_code_starts_with = "postal_code_starts_with_example"; // string | Filter on ZIP-CDE using 'StartsWith' operator
$postal_code_not_starts_with = "postal_code_not_starts_with_example"; // string | Filter on ZIP-CDE using 'NotStartsWith' operator
$postal_code_ends_with = "postal_code_ends_with_example"; // string | Filter on ZIP-CDE using 'EndsWith' operator
$postal_code_not_ends_with = "postal_code_not_ends_with_example"; // string | Filter on ZIP-CDE using 'NotEndsWith' operator
$postal_code_in = "postal_code_in_example"; // string | Filter on ZIP-CDE using 'In' operator
$postal_code_between = "postal_code_between_example"; // string | Filter on ZIP-CDE using 'Between' operator
$fax_number_not_equal = "fax_number_not_equal_example"; // string | Filter on FAX-NBR using 'NotEqual' operator
$fax_number_less = "fax_number_less_example"; // string | Filter on FAX-NBR using 'Less' operator
$fax_number_less_or_equal = "fax_number_less_or_equal_example"; // string | Filter on FAX-NBR using 'LessOrEqual' operator
$fax_number_greater = "fax_number_greater_example"; // string | Filter on FAX-NBR using 'Greater' operator
$fax_number_greater_or_equal = "fax_number_greater_or_equal_example"; // string | Filter on FAX-NBR using 'GreaterOrEqual' operator
$fax_number_is_null = "fax_number_is_null_example"; // string | Filter on FAX-NBR using 'IsNull' operator
$fax_number_is_not_null = "fax_number_is_not_null_example"; // string | Filter on FAX-NBR using 'IsNotNull' operator
$fax_number_like = "fax_number_like_example"; // string | Filter on FAX-NBR using 'Like' operator
$fax_number_not_like = "fax_number_not_like_example"; // string | Filter on FAX-NBR using 'NotLike' operator
$fax_number_contains = "fax_number_contains_example"; // string | Filter on FAX-NBR using 'Contains' operator
$fax_number_not_contains = "fax_number_not_contains_example"; // string | Filter on FAX-NBR using 'NotContains' operator
$fax_number_starts_with = "fax_number_starts_with_example"; // string | Filter on FAX-NBR using 'StartsWith' operator
$fax_number_not_starts_with = "fax_number_not_starts_with_example"; // string | Filter on FAX-NBR using 'NotStartsWith' operator
$fax_number_ends_with = "fax_number_ends_with_example"; // string | Filter on FAX-NBR using 'EndsWith' operator
$fax_number_not_ends_with = "fax_number_not_ends_with_example"; // string | Filter on FAX-NBR using 'NotEndsWith' operator
$fax_number_in = "fax_number_in_example"; // string | Filter on FAX-NBR using 'In' operator
$fax_number_between = "fax_number_between_example"; // string | Filter on FAX-NBR using 'Between' operator
$company_not_equal = "company_not_equal_example"; // string | Filter on CMP-NME using 'NotEqual' operator
$company_less = "company_less_example"; // string | Filter on CMP-NME using 'Less' operator
$company_less_or_equal = "company_less_or_equal_example"; // string | Filter on CMP-NME using 'LessOrEqual' operator
$company_greater = "company_greater_example"; // string | Filter on CMP-NME using 'Greater' operator
$company_greater_or_equal = "company_greater_or_equal_example"; // string | Filter on CMP-NME using 'GreaterOrEqual' operator
$company_is_null = "company_is_null_example"; // string | Filter on CMP-NME using 'IsNull' operator
$company_is_not_null = "company_is_not_null_example"; // string | Filter on CMP-NME using 'IsNotNull' operator
$company_like = "company_like_example"; // string | Filter on CMP-NME using 'Like' operator
$company_not_like = "company_not_like_example"; // string | Filter on CMP-NME using 'NotLike' operator
$company_contains = "company_contains_example"; // string | Filter on CMP-NME using 'Contains' operator
$company_not_contains = "company_not_contains_example"; // string | Filter on CMP-NME using 'NotContains' operator
$company_starts_with = "company_starts_with_example"; // string | Filter on CMP-NME using 'StartsWith' operator
$company_not_starts_with = "company_not_starts_with_example"; // string | Filter on CMP-NME using 'NotStartsWith' operator
$company_ends_with = "company_ends_with_example"; // string | Filter on CMP-NME using 'EndsWith' operator
$company_not_ends_with = "company_not_ends_with_example"; // string | Filter on CMP-NME using 'NotEndsWith' operator
$company_in = "company_in_example"; // string | Filter on CMP-NME using 'In' operator
$company_between = "company_between_example"; // string | Filter on CMP-NME using 'Between' operator
$customer_type_not_equal = "customer_type_not_equal_example"; // string | Filter on CTM-TYP using 'NotEqual' operator
$customer_type_less = "customer_type_less_example"; // string | Filter on CTM-TYP using 'Less' operator
$customer_type_less_or_equal = "customer_type_less_or_equal_example"; // string | Filter on CTM-TYP using 'LessOrEqual' operator
$customer_type_greater = "customer_type_greater_example"; // string | Filter on CTM-TYP using 'Greater' operator
$customer_type_greater_or_equal = "customer_type_greater_or_equal_example"; // string | Filter on CTM-TYP using 'GreaterOrEqual' operator
$customer_type_is_null = "customer_type_is_null_example"; // string | Filter on CTM-TYP using 'IsNull' operator
$customer_type_is_not_null = "customer_type_is_not_null_example"; // string | Filter on CTM-TYP using 'IsNotNull' operator
$customer_type_like = "customer_type_like_example"; // string | Filter on CTM-TYP using 'Like' operator
$customer_type_not_like = "customer_type_not_like_example"; // string | Filter on CTM-TYP using 'NotLike' operator
$customer_type_contains = "customer_type_contains_example"; // string | Filter on CTM-TYP using 'Contains' operator
$customer_type_not_contains = "customer_type_not_contains_example"; // string | Filter on CTM-TYP using 'NotContains' operator
$customer_type_starts_with = "customer_type_starts_with_example"; // string | Filter on CTM-TYP using 'StartsWith' operator
$customer_type_not_starts_with = "customer_type_not_starts_with_example"; // string | Filter on CTM-TYP using 'NotStartsWith' operator
$customer_type_ends_with = "customer_type_ends_with_example"; // string | Filter on CTM-TYP using 'EndsWith' operator
$customer_type_not_ends_with = "customer_type_not_ends_with_example"; // string | Filter on CTM-TYP using 'NotEndsWith' operator
$customer_type_in = "customer_type_in_example"; // string | Filter on CTM-TYP using 'In' operator
$customer_type_between = "customer_type_between_example"; // string | Filter on CTM-TYP using 'Between' operator
$promote_flag_not_equal = "promote_flag_not_equal_example"; // string | Filter on PROMO using 'NotEqual' operator
$promote_flag_less = "promote_flag_less_example"; // string | Filter on PROMO using 'Less' operator
$promote_flag_less_or_equal = "promote_flag_less_or_equal_example"; // string | Filter on PROMO using 'LessOrEqual' operator
$promote_flag_greater = "promote_flag_greater_example"; // string | Filter on PROMO using 'Greater' operator
$promote_flag_greater_or_equal = "promote_flag_greater_or_equal_example"; // string | Filter on PROMO using 'GreaterOrEqual' operator
$promote_flag_is_null = "promote_flag_is_null_example"; // string | Filter on PROMO using 'IsNull' operator
$promote_flag_is_not_null = "promote_flag_is_not_null_example"; // string | Filter on PROMO using 'IsNotNull' operator
$promote_flag_like = "promote_flag_like_example"; // string | Filter on PROMO using 'Like' operator
$promote_flag_not_like = "promote_flag_not_like_example"; // string | Filter on PROMO using 'NotLike' operator
$promote_flag_contains = "promote_flag_contains_example"; // string | Filter on PROMO using 'Contains' operator
$promote_flag_not_contains = "promote_flag_not_contains_example"; // string | Filter on PROMO using 'NotContains' operator
$promote_flag_starts_with = "promote_flag_starts_with_example"; // string | Filter on PROMO using 'StartsWith' operator
$promote_flag_not_starts_with = "promote_flag_not_starts_with_example"; // string | Filter on PROMO using 'NotStartsWith' operator
$promote_flag_ends_with = "promote_flag_ends_with_example"; // string | Filter on PROMO using 'EndsWith' operator
$promote_flag_not_ends_with = "promote_flag_not_ends_with_example"; // string | Filter on PROMO using 'NotEndsWith' operator
$promote_flag_in = "promote_flag_in_example"; // string | Filter on PROMO using 'In' operator
$promote_flag_between = "promote_flag_between_example"; // string | Filter on PROMO using 'Between' operator
$promote_by_partners_not_equal = "promote_by_partners_not_equal_example"; // string | Filter on PMO-PTR using 'NotEqual' operator
$promote_by_partners_less = "promote_by_partners_less_example"; // string | Filter on PMO-PTR using 'Less' operator
$promote_by_partners_less_or_equal = "promote_by_partners_less_or_equal_example"; // string | Filter on PMO-PTR using 'LessOrEqual' operator
$promote_by_partners_greater = "promote_by_partners_greater_example"; // string | Filter on PMO-PTR using 'Greater' operator
$promote_by_partners_greater_or_equal = "promote_by_partners_greater_or_equal_example"; // string | Filter on PMO-PTR using 'GreaterOrEqual' operator
$promote_by_partners_is_null = "promote_by_partners_is_null_example"; // string | Filter on PMO-PTR using 'IsNull' operator
$promote_by_partners_is_not_null = "promote_by_partners_is_not_null_example"; // string | Filter on PMO-PTR using 'IsNotNull' operator
$promote_by_partners_like = "promote_by_partners_like_example"; // string | Filter on PMO-PTR using 'Like' operator
$promote_by_partners_not_like = "promote_by_partners_not_like_example"; // string | Filter on PMO-PTR using 'NotLike' operator
$promote_by_partners_contains = "promote_by_partners_contains_example"; // string | Filter on PMO-PTR using 'Contains' operator
$promote_by_partners_not_contains = "promote_by_partners_not_contains_example"; // string | Filter on PMO-PTR using 'NotContains' operator
$promote_by_partners_starts_with = "promote_by_partners_starts_with_example"; // string | Filter on PMO-PTR using 'StartsWith' operator
$promote_by_partners_not_starts_with = "promote_by_partners_not_starts_with_example"; // string | Filter on PMO-PTR using 'NotStartsWith' operator
$promote_by_partners_ends_with = "promote_by_partners_ends_with_example"; // string | Filter on PMO-PTR using 'EndsWith' operator
$promote_by_partners_not_ends_with = "promote_by_partners_not_ends_with_example"; // string | Filter on PMO-PTR using 'NotEndsWith' operator
$promote_by_partners_in = "promote_by_partners_in_example"; // string | Filter on PMO-PTR using 'In' operator
$promote_by_partners_between = "promote_by_partners_between_example"; // string | Filter on PMO-PTR using 'Between' operator
$promote_by_phone_not_equal = "promote_by_phone_not_equal_example"; // string | Filter on PMO-PHN using 'NotEqual' operator
$promote_by_phone_less = "promote_by_phone_less_example"; // string | Filter on PMO-PHN using 'Less' operator
$promote_by_phone_less_or_equal = "promote_by_phone_less_or_equal_example"; // string | Filter on PMO-PHN using 'LessOrEqual' operator
$promote_by_phone_greater = "promote_by_phone_greater_example"; // string | Filter on PMO-PHN using 'Greater' operator
$promote_by_phone_greater_or_equal = "promote_by_phone_greater_or_equal_example"; // string | Filter on PMO-PHN using 'GreaterOrEqual' operator
$promote_by_phone_is_null = "promote_by_phone_is_null_example"; // string | Filter on PMO-PHN using 'IsNull' operator
$promote_by_phone_is_not_null = "promote_by_phone_is_not_null_example"; // string | Filter on PMO-PHN using 'IsNotNull' operator
$promote_by_phone_like = "promote_by_phone_like_example"; // string | Filter on PMO-PHN using 'Like' operator
$promote_by_phone_not_like = "promote_by_phone_not_like_example"; // string | Filter on PMO-PHN using 'NotLike' operator
$promote_by_phone_contains = "promote_by_phone_contains_example"; // string | Filter on PMO-PHN using 'Contains' operator
$promote_by_phone_not_contains = "promote_by_phone_not_contains_example"; // string | Filter on PMO-PHN using 'NotContains' operator
$promote_by_phone_starts_with = "promote_by_phone_starts_with_example"; // string | Filter on PMO-PHN using 'StartsWith' operator
$promote_by_phone_not_starts_with = "promote_by_phone_not_starts_with_example"; // string | Filter on PMO-PHN using 'NotStartsWith' operator
$promote_by_phone_ends_with = "promote_by_phone_ends_with_example"; // string | Filter on PMO-PHN using 'EndsWith' operator
$promote_by_phone_not_ends_with = "promote_by_phone_not_ends_with_example"; // string | Filter on PMO-PHN using 'NotEndsWith' operator
$promote_by_phone_in = "promote_by_phone_in_example"; // string | Filter on PMO-PHN using 'In' operator
$promote_by_phone_between = "promote_by_phone_between_example"; // string | Filter on PMO-PHN using 'Between' operator
$promote_by_fax_not_equal = "promote_by_fax_not_equal_example"; // string | Filter on PMO-FAX using 'NotEqual' operator
$promote_by_fax_less = "promote_by_fax_less_example"; // string | Filter on PMO-FAX using 'Less' operator
$promote_by_fax_less_or_equal = "promote_by_fax_less_or_equal_example"; // string | Filter on PMO-FAX using 'LessOrEqual' operator
$promote_by_fax_greater = "promote_by_fax_greater_example"; // string | Filter on PMO-FAX using 'Greater' operator
$promote_by_fax_greater_or_equal = "promote_by_fax_greater_or_equal_example"; // string | Filter on PMO-FAX using 'GreaterOrEqual' operator
$promote_by_fax_is_null = "promote_by_fax_is_null_example"; // string | Filter on PMO-FAX using 'IsNull' operator
$promote_by_fax_is_not_null = "promote_by_fax_is_not_null_example"; // string | Filter on PMO-FAX using 'IsNotNull' operator
$promote_by_fax_like = "promote_by_fax_like_example"; // string | Filter on PMO-FAX using 'Like' operator
$promote_by_fax_not_like = "promote_by_fax_not_like_example"; // string | Filter on PMO-FAX using 'NotLike' operator
$promote_by_fax_contains = "promote_by_fax_contains_example"; // string | Filter on PMO-FAX using 'Contains' operator
$promote_by_fax_not_contains = "promote_by_fax_not_contains_example"; // string | Filter on PMO-FAX using 'NotContains' operator
$promote_by_fax_starts_with = "promote_by_fax_starts_with_example"; // string | Filter on PMO-FAX using 'StartsWith' operator
$promote_by_fax_not_starts_with = "promote_by_fax_not_starts_with_example"; // string | Filter on PMO-FAX using 'NotStartsWith' operator
$promote_by_fax_ends_with = "promote_by_fax_ends_with_example"; // string | Filter on PMO-FAX using 'EndsWith' operator
$promote_by_fax_not_ends_with = "promote_by_fax_not_ends_with_example"; // string | Filter on PMO-FAX using 'NotEndsWith' operator
$promote_by_fax_in = "promote_by_fax_in_example"; // string | Filter on PMO-FAX using 'In' operator
$promote_by_fax_between = "promote_by_fax_between_example"; // string | Filter on PMO-FAX using 'Between' operator
$promote_by_email_not_equal = "promote_by_email_not_equal_example"; // string | Filter on PMO-EML using 'NotEqual' operator
$promote_by_email_less = "promote_by_email_less_example"; // string | Filter on PMO-EML using 'Less' operator
$promote_by_email_less_or_equal = "promote_by_email_less_or_equal_example"; // string | Filter on PMO-EML using 'LessOrEqual' operator
$promote_by_email_greater = "promote_by_email_greater_example"; // string | Filter on PMO-EML using 'Greater' operator
$promote_by_email_greater_or_equal = "promote_by_email_greater_or_equal_example"; // string | Filter on PMO-EML using 'GreaterOrEqual' operator
$promote_by_email_is_null = "promote_by_email_is_null_example"; // string | Filter on PMO-EML using 'IsNull' operator
$promote_by_email_is_not_null = "promote_by_email_is_not_null_example"; // string | Filter on PMO-EML using 'IsNotNull' operator
$promote_by_email_like = "promote_by_email_like_example"; // string | Filter on PMO-EML using 'Like' operator
$promote_by_email_not_like = "promote_by_email_not_like_example"; // string | Filter on PMO-EML using 'NotLike' operator
$promote_by_email_contains = "promote_by_email_contains_example"; // string | Filter on PMO-EML using 'Contains' operator
$promote_by_email_not_contains = "promote_by_email_not_contains_example"; // string | Filter on PMO-EML using 'NotContains' operator
$promote_by_email_starts_with = "promote_by_email_starts_with_example"; // string | Filter on PMO-EML using 'StartsWith' operator
$promote_by_email_not_starts_with = "promote_by_email_not_starts_with_example"; // string | Filter on PMO-EML using 'NotStartsWith' operator
$promote_by_email_ends_with = "promote_by_email_ends_with_example"; // string | Filter on PMO-EML using 'EndsWith' operator
$promote_by_email_not_ends_with = "promote_by_email_not_ends_with_example"; // string | Filter on PMO-EML using 'NotEndsWith' operator
$promote_by_email_in = "promote_by_email_in_example"; // string | Filter on PMO-EML using 'In' operator
$promote_by_email_between = "promote_by_email_between_example"; // string | Filter on PMO-EML using 'Between' operator
$promote_by_mail_not_equal = "promote_by_mail_not_equal_example"; // string | Filter on PMO-ADR using 'NotEqual' operator
$promote_by_mail_less = "promote_by_mail_less_example"; // string | Filter on PMO-ADR using 'Less' operator
$promote_by_mail_less_or_equal = "promote_by_mail_less_or_equal_example"; // string | Filter on PMO-ADR using 'LessOrEqual' operator
$promote_by_mail_greater = "promote_by_mail_greater_example"; // string | Filter on PMO-ADR using 'Greater' operator
$promote_by_mail_greater_or_equal = "promote_by_mail_greater_or_equal_example"; // string | Filter on PMO-ADR using 'GreaterOrEqual' operator
$promote_by_mail_is_null = "promote_by_mail_is_null_example"; // string | Filter on PMO-ADR using 'IsNull' operator
$promote_by_mail_is_not_null = "promote_by_mail_is_not_null_example"; // string | Filter on PMO-ADR using 'IsNotNull' operator
$promote_by_mail_like = "promote_by_mail_like_example"; // string | Filter on PMO-ADR using 'Like' operator
$promote_by_mail_not_like = "promote_by_mail_not_like_example"; // string | Filter on PMO-ADR using 'NotLike' operator
$promote_by_mail_contains = "promote_by_mail_contains_example"; // string | Filter on PMO-ADR using 'Contains' operator
$promote_by_mail_not_contains = "promote_by_mail_not_contains_example"; // string | Filter on PMO-ADR using 'NotContains' operator
$promote_by_mail_starts_with = "promote_by_mail_starts_with_example"; // string | Filter on PMO-ADR using 'StartsWith' operator
$promote_by_mail_not_starts_with = "promote_by_mail_not_starts_with_example"; // string | Filter on PMO-ADR using 'NotStartsWith' operator
$promote_by_mail_ends_with = "promote_by_mail_ends_with_example"; // string | Filter on PMO-ADR using 'EndsWith' operator
$promote_by_mail_not_ends_with = "promote_by_mail_not_ends_with_example"; // string | Filter on PMO-ADR using 'NotEndsWith' operator
$promote_by_mail_in = "promote_by_mail_in_example"; // string | Filter on PMO-ADR using 'In' operator
$promote_by_mail_between = "promote_by_mail_between_example"; // string | Filter on PMO-ADR using 'Between' operator
$promote_by_sms_not_equal = "promote_by_sms_not_equal_example"; // string | Filter on PMO-SMS using 'NotEqual' operator
$promote_by_sms_less = "promote_by_sms_less_example"; // string | Filter on PMO-SMS using 'Less' operator
$promote_by_sms_less_or_equal = "promote_by_sms_less_or_equal_example"; // string | Filter on PMO-SMS using 'LessOrEqual' operator
$promote_by_sms_greater = "promote_by_sms_greater_example"; // string | Filter on PMO-SMS using 'Greater' operator
$promote_by_sms_greater_or_equal = "promote_by_sms_greater_or_equal_example"; // string | Filter on PMO-SMS using 'GreaterOrEqual' operator
$promote_by_sms_is_null = "promote_by_sms_is_null_example"; // string | Filter on PMO-SMS using 'IsNull' operator
$promote_by_sms_is_not_null = "promote_by_sms_is_not_null_example"; // string | Filter on PMO-SMS using 'IsNotNull' operator
$promote_by_sms_like = "promote_by_sms_like_example"; // string | Filter on PMO-SMS using 'Like' operator
$promote_by_sms_not_like = "promote_by_sms_not_like_example"; // string | Filter on PMO-SMS using 'NotLike' operator
$promote_by_sms_contains = "promote_by_sms_contains_example"; // string | Filter on PMO-SMS using 'Contains' operator
$promote_by_sms_not_contains = "promote_by_sms_not_contains_example"; // string | Filter on PMO-SMS using 'NotContains' operator
$promote_by_sms_starts_with = "promote_by_sms_starts_with_example"; // string | Filter on PMO-SMS using 'StartsWith' operator
$promote_by_sms_not_starts_with = "promote_by_sms_not_starts_with_example"; // string | Filter on PMO-SMS using 'NotStartsWith' operator
$promote_by_sms_ends_with = "promote_by_sms_ends_with_example"; // string | Filter on PMO-SMS using 'EndsWith' operator
$promote_by_sms_not_ends_with = "promote_by_sms_not_ends_with_example"; // string | Filter on PMO-SMS using 'NotEndsWith' operator
$promote_by_sms_in = "promote_by_sms_in_example"; // string | Filter on PMO-SMS using 'In' operator
$promote_by_sms_between = "promote_by_sms_between_example"; // string | Filter on PMO-SMS using 'Between' operator
$promote_by_phone1_not_equal = "promote_by_phone1_not_equal_example"; // string | Filter on PMO-PH1 using 'NotEqual' operator
$promote_by_phone1_less = "promote_by_phone1_less_example"; // string | Filter on PMO-PH1 using 'Less' operator
$promote_by_phone1_less_or_equal = "promote_by_phone1_less_or_equal_example"; // string | Filter on PMO-PH1 using 'LessOrEqual' operator
$promote_by_phone1_greater = "promote_by_phone1_greater_example"; // string | Filter on PMO-PH1 using 'Greater' operator
$promote_by_phone1_greater_or_equal = "promote_by_phone1_greater_or_equal_example"; // string | Filter on PMO-PH1 using 'GreaterOrEqual' operator
$promote_by_phone1_is_null = "promote_by_phone1_is_null_example"; // string | Filter on PMO-PH1 using 'IsNull' operator
$promote_by_phone1_is_not_null = "promote_by_phone1_is_not_null_example"; // string | Filter on PMO-PH1 using 'IsNotNull' operator
$promote_by_phone1_like = "promote_by_phone1_like_example"; // string | Filter on PMO-PH1 using 'Like' operator
$promote_by_phone1_not_like = "promote_by_phone1_not_like_example"; // string | Filter on PMO-PH1 using 'NotLike' operator
$promote_by_phone1_contains = "promote_by_phone1_contains_example"; // string | Filter on PMO-PH1 using 'Contains' operator
$promote_by_phone1_not_contains = "promote_by_phone1_not_contains_example"; // string | Filter on PMO-PH1 using 'NotContains' operator
$promote_by_phone1_starts_with = "promote_by_phone1_starts_with_example"; // string | Filter on PMO-PH1 using 'StartsWith' operator
$promote_by_phone1_not_starts_with = "promote_by_phone1_not_starts_with_example"; // string | Filter on PMO-PH1 using 'NotStartsWith' operator
$promote_by_phone1_ends_with = "promote_by_phone1_ends_with_example"; // string | Filter on PMO-PH1 using 'EndsWith' operator
$promote_by_phone1_not_ends_with = "promote_by_phone1_not_ends_with_example"; // string | Filter on PMO-PH1 using 'NotEndsWith' operator
$promote_by_phone1_in = "promote_by_phone1_in_example"; // string | Filter on PMO-PH1 using 'In' operator
$promote_by_phone1_between = "promote_by_phone1_between_example"; // string | Filter on PMO-PH1 using 'Between' operator
$promote_by_phone2_not_equal = "promote_by_phone2_not_equal_example"; // string | Filter on PMO-PH2 using 'NotEqual' operator
$promote_by_phone2_less = "promote_by_phone2_less_example"; // string | Filter on PMO-PH2 using 'Less' operator
$promote_by_phone2_less_or_equal = "promote_by_phone2_less_or_equal_example"; // string | Filter on PMO-PH2 using 'LessOrEqual' operator
$promote_by_phone2_greater = "promote_by_phone2_greater_example"; // string | Filter on PMO-PH2 using 'Greater' operator
$promote_by_phone2_greater_or_equal = "promote_by_phone2_greater_or_equal_example"; // string | Filter on PMO-PH2 using 'GreaterOrEqual' operator
$promote_by_phone2_is_null = "promote_by_phone2_is_null_example"; // string | Filter on PMO-PH2 using 'IsNull' operator
$promote_by_phone2_is_not_null = "promote_by_phone2_is_not_null_example"; // string | Filter on PMO-PH2 using 'IsNotNull' operator
$promote_by_phone2_like = "promote_by_phone2_like_example"; // string | Filter on PMO-PH2 using 'Like' operator
$promote_by_phone2_not_like = "promote_by_phone2_not_like_example"; // string | Filter on PMO-PH2 using 'NotLike' operator
$promote_by_phone2_contains = "promote_by_phone2_contains_example"; // string | Filter on PMO-PH2 using 'Contains' operator
$promote_by_phone2_not_contains = "promote_by_phone2_not_contains_example"; // string | Filter on PMO-PH2 using 'NotContains' operator
$promote_by_phone2_starts_with = "promote_by_phone2_starts_with_example"; // string | Filter on PMO-PH2 using 'StartsWith' operator
$promote_by_phone2_not_starts_with = "promote_by_phone2_not_starts_with_example"; // string | Filter on PMO-PH2 using 'NotStartsWith' operator
$promote_by_phone2_ends_with = "promote_by_phone2_ends_with_example"; // string | Filter on PMO-PH2 using 'EndsWith' operator
$promote_by_phone2_not_ends_with = "promote_by_phone2_not_ends_with_example"; // string | Filter on PMO-PH2 using 'NotEndsWith' operator
$promote_by_phone2_in = "promote_by_phone2_in_example"; // string | Filter on PMO-PH2 using 'In' operator
$promote_by_phone2_between = "promote_by_phone2_between_example"; // string | Filter on PMO-PH2 using 'Between' operator
$promote_by_phone3_not_equal = "promote_by_phone3_not_equal_example"; // string | Filter on PMO-PH3 using 'NotEqual' operator
$promote_by_phone3_less = "promote_by_phone3_less_example"; // string | Filter on PMO-PH3 using 'Less' operator
$promote_by_phone3_less_or_equal = "promote_by_phone3_less_or_equal_example"; // string | Filter on PMO-PH3 using 'LessOrEqual' operator
$promote_by_phone3_greater = "promote_by_phone3_greater_example"; // string | Filter on PMO-PH3 using 'Greater' operator
$promote_by_phone3_greater_or_equal = "promote_by_phone3_greater_or_equal_example"; // string | Filter on PMO-PH3 using 'GreaterOrEqual' operator
$promote_by_phone3_is_null = "promote_by_phone3_is_null_example"; // string | Filter on PMO-PH3 using 'IsNull' operator
$promote_by_phone3_is_not_null = "promote_by_phone3_is_not_null_example"; // string | Filter on PMO-PH3 using 'IsNotNull' operator
$promote_by_phone3_like = "promote_by_phone3_like_example"; // string | Filter on PMO-PH3 using 'Like' operator
$promote_by_phone3_not_like = "promote_by_phone3_not_like_example"; // string | Filter on PMO-PH3 using 'NotLike' operator
$promote_by_phone3_contains = "promote_by_phone3_contains_example"; // string | Filter on PMO-PH3 using 'Contains' operator
$promote_by_phone3_not_contains = "promote_by_phone3_not_contains_example"; // string | Filter on PMO-PH3 using 'NotContains' operator
$promote_by_phone3_starts_with = "promote_by_phone3_starts_with_example"; // string | Filter on PMO-PH3 using 'StartsWith' operator
$promote_by_phone3_not_starts_with = "promote_by_phone3_not_starts_with_example"; // string | Filter on PMO-PH3 using 'NotStartsWith' operator
$promote_by_phone3_ends_with = "promote_by_phone3_ends_with_example"; // string | Filter on PMO-PH3 using 'EndsWith' operator
$promote_by_phone3_not_ends_with = "promote_by_phone3_not_ends_with_example"; // string | Filter on PMO-PH3 using 'NotEndsWith' operator
$promote_by_phone3_in = "promote_by_phone3_in_example"; // string | Filter on PMO-PH3 using 'In' operator
$promote_by_phone3_between = "promote_by_phone3_between_example"; // string | Filter on PMO-PH3 using 'Between' operator
$title_not_equal = "title_not_equal_example"; // string | Filter on CTM-TTL using 'NotEqual' operator
$title_less = "title_less_example"; // string | Filter on CTM-TTL using 'Less' operator
$title_less_or_equal = "title_less_or_equal_example"; // string | Filter on CTM-TTL using 'LessOrEqual' operator
$title_greater = "title_greater_example"; // string | Filter on CTM-TTL using 'Greater' operator
$title_greater_or_equal = "title_greater_or_equal_example"; // string | Filter on CTM-TTL using 'GreaterOrEqual' operator
$title_is_null = "title_is_null_example"; // string | Filter on CTM-TTL using 'IsNull' operator
$title_is_not_null = "title_is_not_null_example"; // string | Filter on CTM-TTL using 'IsNotNull' operator
$title_like = "title_like_example"; // string | Filter on CTM-TTL using 'Like' operator
$title_not_like = "title_not_like_example"; // string | Filter on CTM-TTL using 'NotLike' operator
$title_contains = "title_contains_example"; // string | Filter on CTM-TTL using 'Contains' operator
$title_not_contains = "title_not_contains_example"; // string | Filter on CTM-TTL using 'NotContains' operator
$title_starts_with = "title_starts_with_example"; // string | Filter on CTM-TTL using 'StartsWith' operator
$title_not_starts_with = "title_not_starts_with_example"; // string | Filter on CTM-TTL using 'NotStartsWith' operator
$title_ends_with = "title_ends_with_example"; // string | Filter on CTM-TTL using 'EndsWith' operator
$title_not_ends_with = "title_not_ends_with_example"; // string | Filter on CTM-TTL using 'NotEndsWith' operator
$title_in = "title_in_example"; // string | Filter on CTM-TTL using 'In' operator
$title_between = "title_between_example"; // string | Filter on CTM-TTL using 'Between' operator
$first_name_not_equal = "first_name_not_equal_example"; // string | Filter on ATN-1ST using 'NotEqual' operator
$first_name_less = "first_name_less_example"; // string | Filter on ATN-1ST using 'Less' operator
$first_name_less_or_equal = "first_name_less_or_equal_example"; // string | Filter on ATN-1ST using 'LessOrEqual' operator
$first_name_greater = "first_name_greater_example"; // string | Filter on ATN-1ST using 'Greater' operator
$first_name_greater_or_equal = "first_name_greater_or_equal_example"; // string | Filter on ATN-1ST using 'GreaterOrEqual' operator
$first_name_is_null = "first_name_is_null_example"; // string | Filter on ATN-1ST using 'IsNull' operator
$first_name_is_not_null = "first_name_is_not_null_example"; // string | Filter on ATN-1ST using 'IsNotNull' operator
$first_name_like = "first_name_like_example"; // string | Filter on ATN-1ST using 'Like' operator
$first_name_not_like = "first_name_not_like_example"; // string | Filter on ATN-1ST using 'NotLike' operator
$first_name_contains = "first_name_contains_example"; // string | Filter on ATN-1ST using 'Contains' operator
$first_name_not_contains = "first_name_not_contains_example"; // string | Filter on ATN-1ST using 'NotContains' operator
$first_name_starts_with = "first_name_starts_with_example"; // string | Filter on ATN-1ST using 'StartsWith' operator
$first_name_not_starts_with = "first_name_not_starts_with_example"; // string | Filter on ATN-1ST using 'NotStartsWith' operator
$first_name_ends_with = "first_name_ends_with_example"; // string | Filter on ATN-1ST using 'EndsWith' operator
$first_name_not_ends_with = "first_name_not_ends_with_example"; // string | Filter on ATN-1ST using 'NotEndsWith' operator
$first_name_in = "first_name_in_example"; // string | Filter on ATN-1ST using 'In' operator
$first_name_between = "first_name_between_example"; // string | Filter on ATN-1ST using 'Between' operator
$middle_initial_not_equal = "middle_initial_not_equal_example"; // string | Filter on ATN-MID using 'NotEqual' operator
$middle_initial_less = "middle_initial_less_example"; // string | Filter on ATN-MID using 'Less' operator
$middle_initial_less_or_equal = "middle_initial_less_or_equal_example"; // string | Filter on ATN-MID using 'LessOrEqual' operator
$middle_initial_greater = "middle_initial_greater_example"; // string | Filter on ATN-MID using 'Greater' operator
$middle_initial_greater_or_equal = "middle_initial_greater_or_equal_example"; // string | Filter on ATN-MID using 'GreaterOrEqual' operator
$middle_initial_is_null = "middle_initial_is_null_example"; // string | Filter on ATN-MID using 'IsNull' operator
$middle_initial_is_not_null = "middle_initial_is_not_null_example"; // string | Filter on ATN-MID using 'IsNotNull' operator
$middle_initial_like = "middle_initial_like_example"; // string | Filter on ATN-MID using 'Like' operator
$middle_initial_not_like = "middle_initial_not_like_example"; // string | Filter on ATN-MID using 'NotLike' operator
$middle_initial_contains = "middle_initial_contains_example"; // string | Filter on ATN-MID using 'Contains' operator
$middle_initial_not_contains = "middle_initial_not_contains_example"; // string | Filter on ATN-MID using 'NotContains' operator
$middle_initial_starts_with = "middle_initial_starts_with_example"; // string | Filter on ATN-MID using 'StartsWith' operator
$middle_initial_not_starts_with = "middle_initial_not_starts_with_example"; // string | Filter on ATN-MID using 'NotStartsWith' operator
$middle_initial_ends_with = "middle_initial_ends_with_example"; // string | Filter on ATN-MID using 'EndsWith' operator
$middle_initial_not_ends_with = "middle_initial_not_ends_with_example"; // string | Filter on ATN-MID using 'NotEndsWith' operator
$middle_initial_in = "middle_initial_in_example"; // string | Filter on ATN-MID using 'In' operator
$middle_initial_between = "middle_initial_between_example"; // string | Filter on ATN-MID using 'Between' operator
$last_name_not_equal = "last_name_not_equal_example"; // string | Filter on ATN-END using 'NotEqual' operator
$last_name_less = "last_name_less_example"; // string | Filter on ATN-END using 'Less' operator
$last_name_less_or_equal = "last_name_less_or_equal_example"; // string | Filter on ATN-END using 'LessOrEqual' operator
$last_name_greater = "last_name_greater_example"; // string | Filter on ATN-END using 'Greater' operator
$last_name_greater_or_equal = "last_name_greater_or_equal_example"; // string | Filter on ATN-END using 'GreaterOrEqual' operator
$last_name_is_null = "last_name_is_null_example"; // string | Filter on ATN-END using 'IsNull' operator
$last_name_is_not_null = "last_name_is_not_null_example"; // string | Filter on ATN-END using 'IsNotNull' operator
$last_name_like = "last_name_like_example"; // string | Filter on ATN-END using 'Like' operator
$last_name_not_like = "last_name_not_like_example"; // string | Filter on ATN-END using 'NotLike' operator
$last_name_contains = "last_name_contains_example"; // string | Filter on ATN-END using 'Contains' operator
$last_name_not_contains = "last_name_not_contains_example"; // string | Filter on ATN-END using 'NotContains' operator
$last_name_starts_with = "last_name_starts_with_example"; // string | Filter on ATN-END using 'StartsWith' operator
$last_name_not_starts_with = "last_name_not_starts_with_example"; // string | Filter on ATN-END using 'NotStartsWith' operator
$last_name_ends_with = "last_name_ends_with_example"; // string | Filter on ATN-END using 'EndsWith' operator
$last_name_not_ends_with = "last_name_not_ends_with_example"; // string | Filter on ATN-END using 'NotEndsWith' operator
$last_name_in = "last_name_in_example"; // string | Filter on ATN-END using 'In' operator
$last_name_between = "last_name_between_example"; // string | Filter on ATN-END using 'Between' operator
$suffix_not_equal = "suffix_not_equal_example"; // string | Filter on CTM-SFX using 'NotEqual' operator
$suffix_less = "suffix_less_example"; // string | Filter on CTM-SFX using 'Less' operator
$suffix_less_or_equal = "suffix_less_or_equal_example"; // string | Filter on CTM-SFX using 'LessOrEqual' operator
$suffix_greater = "suffix_greater_example"; // string | Filter on CTM-SFX using 'Greater' operator
$suffix_greater_or_equal = "suffix_greater_or_equal_example"; // string | Filter on CTM-SFX using 'GreaterOrEqual' operator
$suffix_is_null = "suffix_is_null_example"; // string | Filter on CTM-SFX using 'IsNull' operator
$suffix_is_not_null = "suffix_is_not_null_example"; // string | Filter on CTM-SFX using 'IsNotNull' operator
$suffix_like = "suffix_like_example"; // string | Filter on CTM-SFX using 'Like' operator
$suffix_not_like = "suffix_not_like_example"; // string | Filter on CTM-SFX using 'NotLike' operator
$suffix_contains = "suffix_contains_example"; // string | Filter on CTM-SFX using 'Contains' operator
$suffix_not_contains = "suffix_not_contains_example"; // string | Filter on CTM-SFX using 'NotContains' operator
$suffix_starts_with = "suffix_starts_with_example"; // string | Filter on CTM-SFX using 'StartsWith' operator
$suffix_not_starts_with = "suffix_not_starts_with_example"; // string | Filter on CTM-SFX using 'NotStartsWith' operator
$suffix_ends_with = "suffix_ends_with_example"; // string | Filter on CTM-SFX using 'EndsWith' operator
$suffix_not_ends_with = "suffix_not_ends_with_example"; // string | Filter on CTM-SFX using 'NotEndsWith' operator
$suffix_in = "suffix_in_example"; // string | Filter on CTM-SFX using 'In' operator
$suffix_between = "suffix_between_example"; // string | Filter on CTM-SFX using 'Between' operator
$job_title_not_equal = "job_title_not_equal_example"; // string | Filter on JOB-TTL using 'NotEqual' operator
$job_title_less = "job_title_less_example"; // string | Filter on JOB-TTL using 'Less' operator
$job_title_less_or_equal = "job_title_less_or_equal_example"; // string | Filter on JOB-TTL using 'LessOrEqual' operator
$job_title_greater = "job_title_greater_example"; // string | Filter on JOB-TTL using 'Greater' operator
$job_title_greater_or_equal = "job_title_greater_or_equal_example"; // string | Filter on JOB-TTL using 'GreaterOrEqual' operator
$job_title_is_null = "job_title_is_null_example"; // string | Filter on JOB-TTL using 'IsNull' operator
$job_title_is_not_null = "job_title_is_not_null_example"; // string | Filter on JOB-TTL using 'IsNotNull' operator
$job_title_like = "job_title_like_example"; // string | Filter on JOB-TTL using 'Like' operator
$job_title_not_like = "job_title_not_like_example"; // string | Filter on JOB-TTL using 'NotLike' operator
$job_title_contains = "job_title_contains_example"; // string | Filter on JOB-TTL using 'Contains' operator
$job_title_not_contains = "job_title_not_contains_example"; // string | Filter on JOB-TTL using 'NotContains' operator
$job_title_starts_with = "job_title_starts_with_example"; // string | Filter on JOB-TTL using 'StartsWith' operator
$job_title_not_starts_with = "job_title_not_starts_with_example"; // string | Filter on JOB-TTL using 'NotStartsWith' operator
$job_title_ends_with = "job_title_ends_with_example"; // string | Filter on JOB-TTL using 'EndsWith' operator
$job_title_not_ends_with = "job_title_not_ends_with_example"; // string | Filter on JOB-TTL using 'NotEndsWith' operator
$job_title_in = "job_title_in_example"; // string | Filter on JOB-TTL using 'In' operator
$job_title_between = "job_title_between_example"; // string | Filter on JOB-TTL using 'Between' operator
$job_position_code_not_equal = "job_position_code_not_equal_example"; // string | Filter on CTM-POS using 'NotEqual' operator
$job_position_code_less = "job_position_code_less_example"; // string | Filter on CTM-POS using 'Less' operator
$job_position_code_less_or_equal = "job_position_code_less_or_equal_example"; // string | Filter on CTM-POS using 'LessOrEqual' operator
$job_position_code_greater = "job_position_code_greater_example"; // string | Filter on CTM-POS using 'Greater' operator
$job_position_code_greater_or_equal = "job_position_code_greater_or_equal_example"; // string | Filter on CTM-POS using 'GreaterOrEqual' operator
$job_position_code_is_null = "job_position_code_is_null_example"; // string | Filter on CTM-POS using 'IsNull' operator
$job_position_code_is_not_null = "job_position_code_is_not_null_example"; // string | Filter on CTM-POS using 'IsNotNull' operator
$job_position_code_like = "job_position_code_like_example"; // string | Filter on CTM-POS using 'Like' operator
$job_position_code_not_like = "job_position_code_not_like_example"; // string | Filter on CTM-POS using 'NotLike' operator
$job_position_code_contains = "job_position_code_contains_example"; // string | Filter on CTM-POS using 'Contains' operator
$job_position_code_not_contains = "job_position_code_not_contains_example"; // string | Filter on CTM-POS using 'NotContains' operator
$job_position_code_starts_with = "job_position_code_starts_with_example"; // string | Filter on CTM-POS using 'StartsWith' operator
$job_position_code_not_starts_with = "job_position_code_not_starts_with_example"; // string | Filter on CTM-POS using 'NotStartsWith' operator
$job_position_code_ends_with = "job_position_code_ends_with_example"; // string | Filter on CTM-POS using 'EndsWith' operator
$job_position_code_not_ends_with = "job_position_code_not_ends_with_example"; // string | Filter on CTM-POS using 'NotEndsWith' operator
$job_position_code_in = "job_position_code_in_example"; // string | Filter on CTM-POS using 'In' operator
$job_position_code_between = "job_position_code_between_example"; // string | Filter on CTM-POS using 'Between' operator
$communication_preference_not_equal = "communication_preference_not_equal_example"; // string | Filter on COMM-PRF using 'NotEqual' operator
$communication_preference_less = "communication_preference_less_example"; // string | Filter on COMM-PRF using 'Less' operator
$communication_preference_less_or_equal = "communication_preference_less_or_equal_example"; // string | Filter on COMM-PRF using 'LessOrEqual' operator
$communication_preference_greater = "communication_preference_greater_example"; // string | Filter on COMM-PRF using 'Greater' operator
$communication_preference_greater_or_equal = "communication_preference_greater_or_equal_example"; // string | Filter on COMM-PRF using 'GreaterOrEqual' operator
$communication_preference_is_null = "communication_preference_is_null_example"; // string | Filter on COMM-PRF using 'IsNull' operator
$communication_preference_is_not_null = "communication_preference_is_not_null_example"; // string | Filter on COMM-PRF using 'IsNotNull' operator
$communication_preference_like = "communication_preference_like_example"; // string | Filter on COMM-PRF using 'Like' operator
$communication_preference_not_like = "communication_preference_not_like_example"; // string | Filter on COMM-PRF using 'NotLike' operator
$communication_preference_contains = "communication_preference_contains_example"; // string | Filter on COMM-PRF using 'Contains' operator
$communication_preference_not_contains = "communication_preference_not_contains_example"; // string | Filter on COMM-PRF using 'NotContains' operator
$communication_preference_starts_with = "communication_preference_starts_with_example"; // string | Filter on COMM-PRF using 'StartsWith' operator
$communication_preference_not_starts_with = "communication_preference_not_starts_with_example"; // string | Filter on COMM-PRF using 'NotStartsWith' operator
$communication_preference_ends_with = "communication_preference_ends_with_example"; // string | Filter on COMM-PRF using 'EndsWith' operator
$communication_preference_not_ends_with = "communication_preference_not_ends_with_example"; // string | Filter on COMM-PRF using 'NotEndsWith' operator
$communication_preference_in = "communication_preference_in_example"; // string | Filter on COMM-PRF using 'In' operator
$communication_preference_between = "communication_preference_between_example"; // string | Filter on COMM-PRF using 'Between' operator
$source_promotion_not_equal = "source_promotion_not_equal_example"; // string | Filter on CTM-SRC using 'NotEqual' operator
$source_promotion_less = "source_promotion_less_example"; // string | Filter on CTM-SRC using 'Less' operator
$source_promotion_less_or_equal = "source_promotion_less_or_equal_example"; // string | Filter on CTM-SRC using 'LessOrEqual' operator
$source_promotion_greater = "source_promotion_greater_example"; // string | Filter on CTM-SRC using 'Greater' operator
$source_promotion_greater_or_equal = "source_promotion_greater_or_equal_example"; // string | Filter on CTM-SRC using 'GreaterOrEqual' operator
$source_promotion_is_null = "source_promotion_is_null_example"; // string | Filter on CTM-SRC using 'IsNull' operator
$source_promotion_is_not_null = "source_promotion_is_not_null_example"; // string | Filter on CTM-SRC using 'IsNotNull' operator
$source_promotion_like = "source_promotion_like_example"; // string | Filter on CTM-SRC using 'Like' operator
$source_promotion_not_like = "source_promotion_not_like_example"; // string | Filter on CTM-SRC using 'NotLike' operator
$source_promotion_contains = "source_promotion_contains_example"; // string | Filter on CTM-SRC using 'Contains' operator
$source_promotion_not_contains = "source_promotion_not_contains_example"; // string | Filter on CTM-SRC using 'NotContains' operator
$source_promotion_starts_with = "source_promotion_starts_with_example"; // string | Filter on CTM-SRC using 'StartsWith' operator
$source_promotion_not_starts_with = "source_promotion_not_starts_with_example"; // string | Filter on CTM-SRC using 'NotStartsWith' operator
$source_promotion_ends_with = "source_promotion_ends_with_example"; // string | Filter on CTM-SRC using 'EndsWith' operator
$source_promotion_not_ends_with = "source_promotion_not_ends_with_example"; // string | Filter on CTM-SRC using 'NotEndsWith' operator
$source_promotion_in = "source_promotion_in_example"; // string | Filter on CTM-SRC using 'In' operator
$source_promotion_between = "source_promotion_between_example"; // string | Filter on CTM-SRC using 'Between' operator
$address_code_not_equal = "address_code_not_equal_example"; // string | Filter on ADR-CDE using 'NotEqual' operator
$address_code_less = "address_code_less_example"; // string | Filter on ADR-CDE using 'Less' operator
$address_code_less_or_equal = "address_code_less_or_equal_example"; // string | Filter on ADR-CDE using 'LessOrEqual' operator
$address_code_greater = "address_code_greater_example"; // string | Filter on ADR-CDE using 'Greater' operator
$address_code_greater_or_equal = "address_code_greater_or_equal_example"; // string | Filter on ADR-CDE using 'GreaterOrEqual' operator
$address_code_is_null = "address_code_is_null_example"; // string | Filter on ADR-CDE using 'IsNull' operator
$address_code_is_not_null = "address_code_is_not_null_example"; // string | Filter on ADR-CDE using 'IsNotNull' operator
$address_code_like = "address_code_like_example"; // string | Filter on ADR-CDE using 'Like' operator
$address_code_not_like = "address_code_not_like_example"; // string | Filter on ADR-CDE using 'NotLike' operator
$address_code_contains = "address_code_contains_example"; // string | Filter on ADR-CDE using 'Contains' operator
$address_code_not_contains = "address_code_not_contains_example"; // string | Filter on ADR-CDE using 'NotContains' operator
$address_code_starts_with = "address_code_starts_with_example"; // string | Filter on ADR-CDE using 'StartsWith' operator
$address_code_not_starts_with = "address_code_not_starts_with_example"; // string | Filter on ADR-CDE using 'NotStartsWith' operator
$address_code_ends_with = "address_code_ends_with_example"; // string | Filter on ADR-CDE using 'EndsWith' operator
$address_code_not_ends_with = "address_code_not_ends_with_example"; // string | Filter on ADR-CDE using 'NotEndsWith' operator
$address_code_in = "address_code_in_example"; // string | Filter on ADR-CDE using 'In' operator
$address_code_between = "address_code_between_example"; // string | Filter on ADR-CDE using 'Between' operator
$default_currency_not_equal = "default_currency_not_equal_example"; // string | Filter on BIL-CUR using 'NotEqual' operator
$default_currency_less = "default_currency_less_example"; // string | Filter on BIL-CUR using 'Less' operator
$default_currency_less_or_equal = "default_currency_less_or_equal_example"; // string | Filter on BIL-CUR using 'LessOrEqual' operator
$default_currency_greater = "default_currency_greater_example"; // string | Filter on BIL-CUR using 'Greater' operator
$default_currency_greater_or_equal = "default_currency_greater_or_equal_example"; // string | Filter on BIL-CUR using 'GreaterOrEqual' operator
$default_currency_is_null = "default_currency_is_null_example"; // string | Filter on BIL-CUR using 'IsNull' operator
$default_currency_is_not_null = "default_currency_is_not_null_example"; // string | Filter on BIL-CUR using 'IsNotNull' operator
$default_currency_like = "default_currency_like_example"; // string | Filter on BIL-CUR using 'Like' operator
$default_currency_not_like = "default_currency_not_like_example"; // string | Filter on BIL-CUR using 'NotLike' operator
$default_currency_contains = "default_currency_contains_example"; // string | Filter on BIL-CUR using 'Contains' operator
$default_currency_not_contains = "default_currency_not_contains_example"; // string | Filter on BIL-CUR using 'NotContains' operator
$default_currency_starts_with = "default_currency_starts_with_example"; // string | Filter on BIL-CUR using 'StartsWith' operator
$default_currency_not_starts_with = "default_currency_not_starts_with_example"; // string | Filter on BIL-CUR using 'NotStartsWith' operator
$default_currency_ends_with = "default_currency_ends_with_example"; // string | Filter on BIL-CUR using 'EndsWith' operator
$default_currency_not_ends_with = "default_currency_not_ends_with_example"; // string | Filter on BIL-CUR using 'NotEndsWith' operator
$default_currency_in = "default_currency_in_example"; // string | Filter on BIL-CUR using 'In' operator
$default_currency_between = "default_currency_between_example"; // string | Filter on BIL-CUR using 'Between' operator
$department_not_equal = "department_not_equal_example"; // string | Filter on DPT-NME using 'NotEqual' operator
$department_less = "department_less_example"; // string | Filter on DPT-NME using 'Less' operator
$department_less_or_equal = "department_less_or_equal_example"; // string | Filter on DPT-NME using 'LessOrEqual' operator
$department_greater = "department_greater_example"; // string | Filter on DPT-NME using 'Greater' operator
$department_greater_or_equal = "department_greater_or_equal_example"; // string | Filter on DPT-NME using 'GreaterOrEqual' operator
$department_is_null = "department_is_null_example"; // string | Filter on DPT-NME using 'IsNull' operator
$department_is_not_null = "department_is_not_null_example"; // string | Filter on DPT-NME using 'IsNotNull' operator
$department_like = "department_like_example"; // string | Filter on DPT-NME using 'Like' operator
$department_not_like = "department_not_like_example"; // string | Filter on DPT-NME using 'NotLike' operator
$department_contains = "department_contains_example"; // string | Filter on DPT-NME using 'Contains' operator
$department_not_contains = "department_not_contains_example"; // string | Filter on DPT-NME using 'NotContains' operator
$department_starts_with = "department_starts_with_example"; // string | Filter on DPT-NME using 'StartsWith' operator
$department_not_starts_with = "department_not_starts_with_example"; // string | Filter on DPT-NME using 'NotStartsWith' operator
$department_ends_with = "department_ends_with_example"; // string | Filter on DPT-NME using 'EndsWith' operator
$department_not_ends_with = "department_not_ends_with_example"; // string | Filter on DPT-NME using 'NotEndsWith' operator
$department_in = "department_in_example"; // string | Filter on DPT-NME using 'In' operator
$department_between = "department_between_example"; // string | Filter on DPT-NME using 'Between' operator
$county_not_equal = "county_not_equal_example"; // string | Filter on CTM-CNTY using 'NotEqual' operator
$county_less = "county_less_example"; // string | Filter on CTM-CNTY using 'Less' operator
$county_less_or_equal = "county_less_or_equal_example"; // string | Filter on CTM-CNTY using 'LessOrEqual' operator
$county_greater = "county_greater_example"; // string | Filter on CTM-CNTY using 'Greater' operator
$county_greater_or_equal = "county_greater_or_equal_example"; // string | Filter on CTM-CNTY using 'GreaterOrEqual' operator
$county_is_null = "county_is_null_example"; // string | Filter on CTM-CNTY using 'IsNull' operator
$county_is_not_null = "county_is_not_null_example"; // string | Filter on CTM-CNTY using 'IsNotNull' operator
$county_like = "county_like_example"; // string | Filter on CTM-CNTY using 'Like' operator
$county_not_like = "county_not_like_example"; // string | Filter on CTM-CNTY using 'NotLike' operator
$county_contains = "county_contains_example"; // string | Filter on CTM-CNTY using 'Contains' operator
$county_not_contains = "county_not_contains_example"; // string | Filter on CTM-CNTY using 'NotContains' operator
$county_starts_with = "county_starts_with_example"; // string | Filter on CTM-CNTY using 'StartsWith' operator
$county_not_starts_with = "county_not_starts_with_example"; // string | Filter on CTM-CNTY using 'NotStartsWith' operator
$county_ends_with = "county_ends_with_example"; // string | Filter on CTM-CNTY using 'EndsWith' operator
$county_not_ends_with = "county_not_ends_with_example"; // string | Filter on CTM-CNTY using 'NotEndsWith' operator
$county_in = "county_in_example"; // string | Filter on CTM-CNTY using 'In' operator
$county_between = "county_between_example"; // string | Filter on CTM-CNTY using 'Between' operator
$pin_code_not_equal = "pin_code_not_equal_example"; // string | Filter on PIN-CODE using 'NotEqual' operator
$pin_code_less = "pin_code_less_example"; // string | Filter on PIN-CODE using 'Less' operator
$pin_code_less_or_equal = "pin_code_less_or_equal_example"; // string | Filter on PIN-CODE using 'LessOrEqual' operator
$pin_code_greater = "pin_code_greater_example"; // string | Filter on PIN-CODE using 'Greater' operator
$pin_code_greater_or_equal = "pin_code_greater_or_equal_example"; // string | Filter on PIN-CODE using 'GreaterOrEqual' operator
$pin_code_is_null = "pin_code_is_null_example"; // string | Filter on PIN-CODE using 'IsNull' operator
$pin_code_is_not_null = "pin_code_is_not_null_example"; // string | Filter on PIN-CODE using 'IsNotNull' operator
$pin_code_like = "pin_code_like_example"; // string | Filter on PIN-CODE using 'Like' operator
$pin_code_not_like = "pin_code_not_like_example"; // string | Filter on PIN-CODE using 'NotLike' operator
$pin_code_contains = "pin_code_contains_example"; // string | Filter on PIN-CODE using 'Contains' operator
$pin_code_not_contains = "pin_code_not_contains_example"; // string | Filter on PIN-CODE using 'NotContains' operator
$pin_code_starts_with = "pin_code_starts_with_example"; // string | Filter on PIN-CODE using 'StartsWith' operator
$pin_code_not_starts_with = "pin_code_not_starts_with_example"; // string | Filter on PIN-CODE using 'NotStartsWith' operator
$pin_code_ends_with = "pin_code_ends_with_example"; // string | Filter on PIN-CODE using 'EndsWith' operator
$pin_code_not_ends_with = "pin_code_not_ends_with_example"; // string | Filter on PIN-CODE using 'NotEndsWith' operator
$pin_code_in = "pin_code_in_example"; // string | Filter on PIN-CODE using 'In' operator
$pin_code_between = "pin_code_between_example"; // string | Filter on PIN-CODE using 'Between' operator
$social_security_number_not_equal = "social_security_number_not_equal_example"; // string | Filter on SOC-SEC using 'NotEqual' operator
$social_security_number_less = "social_security_number_less_example"; // string | Filter on SOC-SEC using 'Less' operator
$social_security_number_less_or_equal = "social_security_number_less_or_equal_example"; // string | Filter on SOC-SEC using 'LessOrEqual' operator
$social_security_number_greater = "social_security_number_greater_example"; // string | Filter on SOC-SEC using 'Greater' operator
$social_security_number_greater_or_equal = "social_security_number_greater_or_equal_example"; // string | Filter on SOC-SEC using 'GreaterOrEqual' operator
$social_security_number_is_null = "social_security_number_is_null_example"; // string | Filter on SOC-SEC using 'IsNull' operator
$social_security_number_is_not_null = "social_security_number_is_not_null_example"; // string | Filter on SOC-SEC using 'IsNotNull' operator
$social_security_number_like = "social_security_number_like_example"; // string | Filter on SOC-SEC using 'Like' operator
$social_security_number_not_like = "social_security_number_not_like_example"; // string | Filter on SOC-SEC using 'NotLike' operator
$social_security_number_contains = "social_security_number_contains_example"; // string | Filter on SOC-SEC using 'Contains' operator
$social_security_number_not_contains = "social_security_number_not_contains_example"; // string | Filter on SOC-SEC using 'NotContains' operator
$social_security_number_starts_with = "social_security_number_starts_with_example"; // string | Filter on SOC-SEC using 'StartsWith' operator
$social_security_number_not_starts_with = "social_security_number_not_starts_with_example"; // string | Filter on SOC-SEC using 'NotStartsWith' operator
$social_security_number_ends_with = "social_security_number_ends_with_example"; // string | Filter on SOC-SEC using 'EndsWith' operator
$social_security_number_not_ends_with = "social_security_number_not_ends_with_example"; // string | Filter on SOC-SEC using 'NotEndsWith' operator
$social_security_number_in = "social_security_number_in_example"; // string | Filter on SOC-SEC using 'In' operator
$social_security_number_between = "social_security_number_between_example"; // string | Filter on SOC-SEC using 'Between' operator
$street_name_not_equal = "street_name_not_equal_example"; // string | Filter on FSTR-NME using 'NotEqual' operator
$street_name_less = "street_name_less_example"; // string | Filter on FSTR-NME using 'Less' operator
$street_name_less_or_equal = "street_name_less_or_equal_example"; // string | Filter on FSTR-NME using 'LessOrEqual' operator
$street_name_greater = "street_name_greater_example"; // string | Filter on FSTR-NME using 'Greater' operator
$street_name_greater_or_equal = "street_name_greater_or_equal_example"; // string | Filter on FSTR-NME using 'GreaterOrEqual' operator
$street_name_is_null = "street_name_is_null_example"; // string | Filter on FSTR-NME using 'IsNull' operator
$street_name_is_not_null = "street_name_is_not_null_example"; // string | Filter on FSTR-NME using 'IsNotNull' operator
$street_name_like = "street_name_like_example"; // string | Filter on FSTR-NME using 'Like' operator
$street_name_not_like = "street_name_not_like_example"; // string | Filter on FSTR-NME using 'NotLike' operator
$street_name_contains = "street_name_contains_example"; // string | Filter on FSTR-NME using 'Contains' operator
$street_name_not_contains = "street_name_not_contains_example"; // string | Filter on FSTR-NME using 'NotContains' operator
$street_name_starts_with = "street_name_starts_with_example"; // string | Filter on FSTR-NME using 'StartsWith' operator
$street_name_not_starts_with = "street_name_not_starts_with_example"; // string | Filter on FSTR-NME using 'NotStartsWith' operator
$street_name_ends_with = "street_name_ends_with_example"; // string | Filter on FSTR-NME using 'EndsWith' operator
$street_name_not_ends_with = "street_name_not_ends_with_example"; // string | Filter on FSTR-NME using 'NotEndsWith' operator
$street_name_in = "street_name_in_example"; // string | Filter on FSTR-NME using 'In' operator
$street_name_between = "street_name_between_example"; // string | Filter on FSTR-NME using 'Between' operator
$street_type_not_equal = "street_type_not_equal_example"; // string | Filter on STR-TYP using 'NotEqual' operator
$street_type_less = "street_type_less_example"; // string | Filter on STR-TYP using 'Less' operator
$street_type_less_or_equal = "street_type_less_or_equal_example"; // string | Filter on STR-TYP using 'LessOrEqual' operator
$street_type_greater = "street_type_greater_example"; // string | Filter on STR-TYP using 'Greater' operator
$street_type_greater_or_equal = "street_type_greater_or_equal_example"; // string | Filter on STR-TYP using 'GreaterOrEqual' operator
$street_type_is_null = "street_type_is_null_example"; // string | Filter on STR-TYP using 'IsNull' operator
$street_type_is_not_null = "street_type_is_not_null_example"; // string | Filter on STR-TYP using 'IsNotNull' operator
$street_type_like = "street_type_like_example"; // string | Filter on STR-TYP using 'Like' operator
$street_type_not_like = "street_type_not_like_example"; // string | Filter on STR-TYP using 'NotLike' operator
$street_type_contains = "street_type_contains_example"; // string | Filter on STR-TYP using 'Contains' operator
$street_type_not_contains = "street_type_not_contains_example"; // string | Filter on STR-TYP using 'NotContains' operator
$street_type_starts_with = "street_type_starts_with_example"; // string | Filter on STR-TYP using 'StartsWith' operator
$street_type_not_starts_with = "street_type_not_starts_with_example"; // string | Filter on STR-TYP using 'NotStartsWith' operator
$street_type_ends_with = "street_type_ends_with_example"; // string | Filter on STR-TYP using 'EndsWith' operator
$street_type_not_ends_with = "street_type_not_ends_with_example"; // string | Filter on STR-TYP using 'NotEndsWith' operator
$street_type_in = "street_type_in_example"; // string | Filter on STR-TYP using 'In' operator
$street_type_between = "street_type_between_example"; // string | Filter on STR-TYP using 'Between' operator
$last_updated_on_not_equal = "last_updated_on_not_equal_example"; // string | Filter on UPD-DTE using 'NotEqual' operator
$last_updated_on_less = "last_updated_on_less_example"; // string | Filter on UPD-DTE using 'Less' operator
$last_updated_on_less_or_equal = "last_updated_on_less_or_equal_example"; // string | Filter on UPD-DTE using 'LessOrEqual' operator
$last_updated_on_greater = "last_updated_on_greater_example"; // string | Filter on UPD-DTE using 'Greater' operator
$last_updated_on_greater_or_equal = "last_updated_on_greater_or_equal_example"; // string | Filter on UPD-DTE using 'GreaterOrEqual' operator
$last_updated_on_is_null = "last_updated_on_is_null_example"; // string | Filter on UPD-DTE using 'IsNull' operator
$last_updated_on_is_not_null = "last_updated_on_is_not_null_example"; // string | Filter on UPD-DTE using 'IsNotNull' operator
$last_updated_on_like = "last_updated_on_like_example"; // string | Filter on UPD-DTE using 'Like' operator
$last_updated_on_not_like = "last_updated_on_not_like_example"; // string | Filter on UPD-DTE using 'NotLike' operator
$last_updated_on_contains = "last_updated_on_contains_example"; // string | Filter on UPD-DTE using 'Contains' operator
$last_updated_on_not_contains = "last_updated_on_not_contains_example"; // string | Filter on UPD-DTE using 'NotContains' operator
$last_updated_on_starts_with = "last_updated_on_starts_with_example"; // string | Filter on UPD-DTE using 'StartsWith' operator
$last_updated_on_not_starts_with = "last_updated_on_not_starts_with_example"; // string | Filter on UPD-DTE using 'NotStartsWith' operator
$last_updated_on_ends_with = "last_updated_on_ends_with_example"; // string | Filter on UPD-DTE using 'EndsWith' operator
$last_updated_on_not_ends_with = "last_updated_on_not_ends_with_example"; // string | Filter on UPD-DTE using 'NotEndsWith' operator
$last_updated_on_in = "last_updated_on_in_example"; // string | Filter on UPD-DTE using 'In' operator
$last_updated_on_between = "last_updated_on_between_example"; // string | Filter on UPD-DTE using 'Between' operator
$item_number_not_equal = "item_number_not_equal_example"; // string | Filter on ITM-NUM using 'NotEqual' operator
$item_number_less = "item_number_less_example"; // string | Filter on ITM-NUM using 'Less' operator
$item_number_less_or_equal = "item_number_less_or_equal_example"; // string | Filter on ITM-NUM using 'LessOrEqual' operator
$item_number_greater = "item_number_greater_example"; // string | Filter on ITM-NUM using 'Greater' operator
$item_number_greater_or_equal = "item_number_greater_or_equal_example"; // string | Filter on ITM-NUM using 'GreaterOrEqual' operator
$item_number_is_null = "item_number_is_null_example"; // string | Filter on ITM-NUM using 'IsNull' operator
$item_number_is_not_null = "item_number_is_not_null_example"; // string | Filter on ITM-NUM using 'IsNotNull' operator
$item_number_like = "item_number_like_example"; // string | Filter on ITM-NUM using 'Like' operator
$item_number_not_like = "item_number_not_like_example"; // string | Filter on ITM-NUM using 'NotLike' operator
$item_number_contains = "item_number_contains_example"; // string | Filter on ITM-NUM using 'Contains' operator
$item_number_not_contains = "item_number_not_contains_example"; // string | Filter on ITM-NUM using 'NotContains' operator
$item_number_starts_with = "item_number_starts_with_example"; // string | Filter on ITM-NUM using 'StartsWith' operator
$item_number_not_starts_with = "item_number_not_starts_with_example"; // string | Filter on ITM-NUM using 'NotStartsWith' operator
$item_number_ends_with = "item_number_ends_with_example"; // string | Filter on ITM-NUM using 'EndsWith' operator
$item_number_not_ends_with = "item_number_not_ends_with_example"; // string | Filter on ITM-NUM using 'NotEndsWith' operator
$item_number_in = "item_number_in_example"; // string | Filter on ITM-NUM using 'In' operator
$item_number_between = "item_number_between_example"; // string | Filter on ITM-NUM using 'Between' operator
$last_name_soundex_not_equal = "last_name_soundex_not_equal_example"; // string | Filter on END-SNDX using 'NotEqual' operator
$last_name_soundex_less = "last_name_soundex_less_example"; // string | Filter on END-SNDX using 'Less' operator
$last_name_soundex_less_or_equal = "last_name_soundex_less_or_equal_example"; // string | Filter on END-SNDX using 'LessOrEqual' operator
$last_name_soundex_greater = "last_name_soundex_greater_example"; // string | Filter on END-SNDX using 'Greater' operator
$last_name_soundex_greater_or_equal = "last_name_soundex_greater_or_equal_example"; // string | Filter on END-SNDX using 'GreaterOrEqual' operator
$last_name_soundex_is_null = "last_name_soundex_is_null_example"; // string | Filter on END-SNDX using 'IsNull' operator
$last_name_soundex_is_not_null = "last_name_soundex_is_not_null_example"; // string | Filter on END-SNDX using 'IsNotNull' operator
$last_name_soundex_like = "last_name_soundex_like_example"; // string | Filter on END-SNDX using 'Like' operator
$last_name_soundex_not_like = "last_name_soundex_not_like_example"; // string | Filter on END-SNDX using 'NotLike' operator
$last_name_soundex_contains = "last_name_soundex_contains_example"; // string | Filter on END-SNDX using 'Contains' operator
$last_name_soundex_not_contains = "last_name_soundex_not_contains_example"; // string | Filter on END-SNDX using 'NotContains' operator
$last_name_soundex_starts_with = "last_name_soundex_starts_with_example"; // string | Filter on END-SNDX using 'StartsWith' operator
$last_name_soundex_not_starts_with = "last_name_soundex_not_starts_with_example"; // string | Filter on END-SNDX using 'NotStartsWith' operator
$last_name_soundex_ends_with = "last_name_soundex_ends_with_example"; // string | Filter on END-SNDX using 'EndsWith' operator
$last_name_soundex_not_ends_with = "last_name_soundex_not_ends_with_example"; // string | Filter on END-SNDX using 'NotEndsWith' operator
$last_name_soundex_in = "last_name_soundex_in_example"; // string | Filter on END-SNDX using 'In' operator
$last_name_soundex_between = "last_name_soundex_between_example"; // string | Filter on END-SNDX using 'Between' operator
$company_name_soundex_not_equal = "company_name_soundex_not_equal_example"; // string | Filter on CMP-SNDX using 'NotEqual' operator
$company_name_soundex_less = "company_name_soundex_less_example"; // string | Filter on CMP-SNDX using 'Less' operator
$company_name_soundex_less_or_equal = "company_name_soundex_less_or_equal_example"; // string | Filter on CMP-SNDX using 'LessOrEqual' operator
$company_name_soundex_greater = "company_name_soundex_greater_example"; // string | Filter on CMP-SNDX using 'Greater' operator
$company_name_soundex_greater_or_equal = "company_name_soundex_greater_or_equal_example"; // string | Filter on CMP-SNDX using 'GreaterOrEqual' operator
$company_name_soundex_is_null = "company_name_soundex_is_null_example"; // string | Filter on CMP-SNDX using 'IsNull' operator
$company_name_soundex_is_not_null = "company_name_soundex_is_not_null_example"; // string | Filter on CMP-SNDX using 'IsNotNull' operator
$company_name_soundex_like = "company_name_soundex_like_example"; // string | Filter on CMP-SNDX using 'Like' operator
$company_name_soundex_not_like = "company_name_soundex_not_like_example"; // string | Filter on CMP-SNDX using 'NotLike' operator
$company_name_soundex_contains = "company_name_soundex_contains_example"; // string | Filter on CMP-SNDX using 'Contains' operator
$company_name_soundex_not_contains = "company_name_soundex_not_contains_example"; // string | Filter on CMP-SNDX using 'NotContains' operator
$company_name_soundex_starts_with = "company_name_soundex_starts_with_example"; // string | Filter on CMP-SNDX using 'StartsWith' operator
$company_name_soundex_not_starts_with = "company_name_soundex_not_starts_with_example"; // string | Filter on CMP-SNDX using 'NotStartsWith' operator
$company_name_soundex_ends_with = "company_name_soundex_ends_with_example"; // string | Filter on CMP-SNDX using 'EndsWith' operator
$company_name_soundex_not_ends_with = "company_name_soundex_not_ends_with_example"; // string | Filter on CMP-SNDX using 'NotEndsWith' operator
$company_name_soundex_in = "company_name_soundex_in_example"; // string | Filter on CMP-SNDX using 'In' operator
$company_name_soundex_between = "company_name_soundex_between_example"; // string | Filter on CMP-SNDX using 'Between' operator

try {
    $result = $apiInstance->customerSearch($include_all_addresses, $include_credit_summary, $propagate_phone_number, $pager_skip, $pager_take, $customer_number, $full_name, $email_address, $phone_number, $phone_number2, $phone_number3, $street1, $street2, $street3, $city, $state, $country_code, $postal_code, $fax_number, $company, $customer_type, $promote_flag, $promote_by_partners, $promote_by_phone, $promote_by_fax, $promote_by_email, $promote_by_mail, $promote_by_sms, $promote_by_phone1, $promote_by_phone2, $promote_by_phone3, $title, $first_name, $middle_initial, $last_name, $suffix, $job_title, $job_position_code, $communication_preference, $source_promotion, $address_code, $default_currency, $department, $county, $pin_code, $social_security_number, $street_name, $street_type, $last_updated_on, $item_number, $last_name_soundex, $company_name_soundex, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $full_name_not_equal, $full_name_less, $full_name_less_or_equal, $full_name_greater, $full_name_greater_or_equal, $full_name_is_null, $full_name_is_not_null, $full_name_like, $full_name_not_like, $full_name_contains, $full_name_not_contains, $full_name_starts_with, $full_name_not_starts_with, $full_name_ends_with, $full_name_not_ends_with, $full_name_in, $full_name_between, $email_address_not_equal, $email_address_less, $email_address_less_or_equal, $email_address_greater, $email_address_greater_or_equal, $email_address_is_null, $email_address_is_not_null, $email_address_like, $email_address_not_like, $email_address_contains, $email_address_not_contains, $email_address_starts_with, $email_address_not_starts_with, $email_address_ends_with, $email_address_not_ends_with, $email_address_in, $email_address_between, $phone_number_not_equal, $phone_number_less, $phone_number_less_or_equal, $phone_number_greater, $phone_number_greater_or_equal, $phone_number_is_null, $phone_number_is_not_null, $phone_number_like, $phone_number_not_like, $phone_number_contains, $phone_number_not_contains, $phone_number_starts_with, $phone_number_not_starts_with, $phone_number_ends_with, $phone_number_not_ends_with, $phone_number_in, $phone_number_between, $phone_number2_not_equal, $phone_number2_less, $phone_number2_less_or_equal, $phone_number2_greater, $phone_number2_greater_or_equal, $phone_number2_is_null, $phone_number2_is_not_null, $phone_number2_like, $phone_number2_not_like, $phone_number2_contains, $phone_number2_not_contains, $phone_number2_starts_with, $phone_number2_not_starts_with, $phone_number2_ends_with, $phone_number2_not_ends_with, $phone_number2_in, $phone_number2_between, $phone_number3_not_equal, $phone_number3_less, $phone_number3_less_or_equal, $phone_number3_greater, $phone_number3_greater_or_equal, $phone_number3_is_null, $phone_number3_is_not_null, $phone_number3_like, $phone_number3_not_like, $phone_number3_contains, $phone_number3_not_contains, $phone_number3_starts_with, $phone_number3_not_starts_with, $phone_number3_ends_with, $phone_number3_not_ends_with, $phone_number3_in, $phone_number3_between, $street1_not_equal, $street1_less, $street1_less_or_equal, $street1_greater, $street1_greater_or_equal, $street1_is_null, $street1_is_not_null, $street1_like, $street1_not_like, $street1_contains, $street1_not_contains, $street1_starts_with, $street1_not_starts_with, $street1_ends_with, $street1_not_ends_with, $street1_in, $street1_between, $street2_not_equal, $street2_less, $street2_less_or_equal, $street2_greater, $street2_greater_or_equal, $street2_is_null, $street2_is_not_null, $street2_like, $street2_not_like, $street2_contains, $street2_not_contains, $street2_starts_with, $street2_not_starts_with, $street2_ends_with, $street2_not_ends_with, $street2_in, $street2_between, $street3_not_equal, $street3_less, $street3_less_or_equal, $street3_greater, $street3_greater_or_equal, $street3_is_null, $street3_is_not_null, $street3_like, $street3_not_like, $street3_contains, $street3_not_contains, $street3_starts_with, $street3_not_starts_with, $street3_ends_with, $street3_not_ends_with, $street3_in, $street3_between, $city_not_equal, $city_less, $city_less_or_equal, $city_greater, $city_greater_or_equal, $city_is_null, $city_is_not_null, $city_like, $city_not_like, $city_contains, $city_not_contains, $city_starts_with, $city_not_starts_with, $city_ends_with, $city_not_ends_with, $city_in, $city_between, $state_not_equal, $state_less, $state_less_or_equal, $state_greater, $state_greater_or_equal, $state_is_null, $state_is_not_null, $state_like, $state_not_like, $state_contains, $state_not_contains, $state_starts_with, $state_not_starts_with, $state_ends_with, $state_not_ends_with, $state_in, $state_between, $country_code_not_equal, $country_code_less, $country_code_less_or_equal, $country_code_greater, $country_code_greater_or_equal, $country_code_is_null, $country_code_is_not_null, $country_code_like, $country_code_not_like, $country_code_contains, $country_code_not_contains, $country_code_starts_with, $country_code_not_starts_with, $country_code_ends_with, $country_code_not_ends_with, $country_code_in, $country_code_between, $postal_code_not_equal, $postal_code_less, $postal_code_less_or_equal, $postal_code_greater, $postal_code_greater_or_equal, $postal_code_is_null, $postal_code_is_not_null, $postal_code_like, $postal_code_not_like, $postal_code_contains, $postal_code_not_contains, $postal_code_starts_with, $postal_code_not_starts_with, $postal_code_ends_with, $postal_code_not_ends_with, $postal_code_in, $postal_code_between, $fax_number_not_equal, $fax_number_less, $fax_number_less_or_equal, $fax_number_greater, $fax_number_greater_or_equal, $fax_number_is_null, $fax_number_is_not_null, $fax_number_like, $fax_number_not_like, $fax_number_contains, $fax_number_not_contains, $fax_number_starts_with, $fax_number_not_starts_with, $fax_number_ends_with, $fax_number_not_ends_with, $fax_number_in, $fax_number_between, $company_not_equal, $company_less, $company_less_or_equal, $company_greater, $company_greater_or_equal, $company_is_null, $company_is_not_null, $company_like, $company_not_like, $company_contains, $company_not_contains, $company_starts_with, $company_not_starts_with, $company_ends_with, $company_not_ends_with, $company_in, $company_between, $customer_type_not_equal, $customer_type_less, $customer_type_less_or_equal, $customer_type_greater, $customer_type_greater_or_equal, $customer_type_is_null, $customer_type_is_not_null, $customer_type_like, $customer_type_not_like, $customer_type_contains, $customer_type_not_contains, $customer_type_starts_with, $customer_type_not_starts_with, $customer_type_ends_with, $customer_type_not_ends_with, $customer_type_in, $customer_type_between, $promote_flag_not_equal, $promote_flag_less, $promote_flag_less_or_equal, $promote_flag_greater, $promote_flag_greater_or_equal, $promote_flag_is_null, $promote_flag_is_not_null, $promote_flag_like, $promote_flag_not_like, $promote_flag_contains, $promote_flag_not_contains, $promote_flag_starts_with, $promote_flag_not_starts_with, $promote_flag_ends_with, $promote_flag_not_ends_with, $promote_flag_in, $promote_flag_between, $promote_by_partners_not_equal, $promote_by_partners_less, $promote_by_partners_less_or_equal, $promote_by_partners_greater, $promote_by_partners_greater_or_equal, $promote_by_partners_is_null, $promote_by_partners_is_not_null, $promote_by_partners_like, $promote_by_partners_not_like, $promote_by_partners_contains, $promote_by_partners_not_contains, $promote_by_partners_starts_with, $promote_by_partners_not_starts_with, $promote_by_partners_ends_with, $promote_by_partners_not_ends_with, $promote_by_partners_in, $promote_by_partners_between, $promote_by_phone_not_equal, $promote_by_phone_less, $promote_by_phone_less_or_equal, $promote_by_phone_greater, $promote_by_phone_greater_or_equal, $promote_by_phone_is_null, $promote_by_phone_is_not_null, $promote_by_phone_like, $promote_by_phone_not_like, $promote_by_phone_contains, $promote_by_phone_not_contains, $promote_by_phone_starts_with, $promote_by_phone_not_starts_with, $promote_by_phone_ends_with, $promote_by_phone_not_ends_with, $promote_by_phone_in, $promote_by_phone_between, $promote_by_fax_not_equal, $promote_by_fax_less, $promote_by_fax_less_or_equal, $promote_by_fax_greater, $promote_by_fax_greater_or_equal, $promote_by_fax_is_null, $promote_by_fax_is_not_null, $promote_by_fax_like, $promote_by_fax_not_like, $promote_by_fax_contains, $promote_by_fax_not_contains, $promote_by_fax_starts_with, $promote_by_fax_not_starts_with, $promote_by_fax_ends_with, $promote_by_fax_not_ends_with, $promote_by_fax_in, $promote_by_fax_between, $promote_by_email_not_equal, $promote_by_email_less, $promote_by_email_less_or_equal, $promote_by_email_greater, $promote_by_email_greater_or_equal, $promote_by_email_is_null, $promote_by_email_is_not_null, $promote_by_email_like, $promote_by_email_not_like, $promote_by_email_contains, $promote_by_email_not_contains, $promote_by_email_starts_with, $promote_by_email_not_starts_with, $promote_by_email_ends_with, $promote_by_email_not_ends_with, $promote_by_email_in, $promote_by_email_between, $promote_by_mail_not_equal, $promote_by_mail_less, $promote_by_mail_less_or_equal, $promote_by_mail_greater, $promote_by_mail_greater_or_equal, $promote_by_mail_is_null, $promote_by_mail_is_not_null, $promote_by_mail_like, $promote_by_mail_not_like, $promote_by_mail_contains, $promote_by_mail_not_contains, $promote_by_mail_starts_with, $promote_by_mail_not_starts_with, $promote_by_mail_ends_with, $promote_by_mail_not_ends_with, $promote_by_mail_in, $promote_by_mail_between, $promote_by_sms_not_equal, $promote_by_sms_less, $promote_by_sms_less_or_equal, $promote_by_sms_greater, $promote_by_sms_greater_or_equal, $promote_by_sms_is_null, $promote_by_sms_is_not_null, $promote_by_sms_like, $promote_by_sms_not_like, $promote_by_sms_contains, $promote_by_sms_not_contains, $promote_by_sms_starts_with, $promote_by_sms_not_starts_with, $promote_by_sms_ends_with, $promote_by_sms_not_ends_with, $promote_by_sms_in, $promote_by_sms_between, $promote_by_phone1_not_equal, $promote_by_phone1_less, $promote_by_phone1_less_or_equal, $promote_by_phone1_greater, $promote_by_phone1_greater_or_equal, $promote_by_phone1_is_null, $promote_by_phone1_is_not_null, $promote_by_phone1_like, $promote_by_phone1_not_like, $promote_by_phone1_contains, $promote_by_phone1_not_contains, $promote_by_phone1_starts_with, $promote_by_phone1_not_starts_with, $promote_by_phone1_ends_with, $promote_by_phone1_not_ends_with, $promote_by_phone1_in, $promote_by_phone1_between, $promote_by_phone2_not_equal, $promote_by_phone2_less, $promote_by_phone2_less_or_equal, $promote_by_phone2_greater, $promote_by_phone2_greater_or_equal, $promote_by_phone2_is_null, $promote_by_phone2_is_not_null, $promote_by_phone2_like, $promote_by_phone2_not_like, $promote_by_phone2_contains, $promote_by_phone2_not_contains, $promote_by_phone2_starts_with, $promote_by_phone2_not_starts_with, $promote_by_phone2_ends_with, $promote_by_phone2_not_ends_with, $promote_by_phone2_in, $promote_by_phone2_between, $promote_by_phone3_not_equal, $promote_by_phone3_less, $promote_by_phone3_less_or_equal, $promote_by_phone3_greater, $promote_by_phone3_greater_or_equal, $promote_by_phone3_is_null, $promote_by_phone3_is_not_null, $promote_by_phone3_like, $promote_by_phone3_not_like, $promote_by_phone3_contains, $promote_by_phone3_not_contains, $promote_by_phone3_starts_with, $promote_by_phone3_not_starts_with, $promote_by_phone3_ends_with, $promote_by_phone3_not_ends_with, $promote_by_phone3_in, $promote_by_phone3_between, $title_not_equal, $title_less, $title_less_or_equal, $title_greater, $title_greater_or_equal, $title_is_null, $title_is_not_null, $title_like, $title_not_like, $title_contains, $title_not_contains, $title_starts_with, $title_not_starts_with, $title_ends_with, $title_not_ends_with, $title_in, $title_between, $first_name_not_equal, $first_name_less, $first_name_less_or_equal, $first_name_greater, $first_name_greater_or_equal, $first_name_is_null, $first_name_is_not_null, $first_name_like, $first_name_not_like, $first_name_contains, $first_name_not_contains, $first_name_starts_with, $first_name_not_starts_with, $first_name_ends_with, $first_name_not_ends_with, $first_name_in, $first_name_between, $middle_initial_not_equal, $middle_initial_less, $middle_initial_less_or_equal, $middle_initial_greater, $middle_initial_greater_or_equal, $middle_initial_is_null, $middle_initial_is_not_null, $middle_initial_like, $middle_initial_not_like, $middle_initial_contains, $middle_initial_not_contains, $middle_initial_starts_with, $middle_initial_not_starts_with, $middle_initial_ends_with, $middle_initial_not_ends_with, $middle_initial_in, $middle_initial_between, $last_name_not_equal, $last_name_less, $last_name_less_or_equal, $last_name_greater, $last_name_greater_or_equal, $last_name_is_null, $last_name_is_not_null, $last_name_like, $last_name_not_like, $last_name_contains, $last_name_not_contains, $last_name_starts_with, $last_name_not_starts_with, $last_name_ends_with, $last_name_not_ends_with, $last_name_in, $last_name_between, $suffix_not_equal, $suffix_less, $suffix_less_or_equal, $suffix_greater, $suffix_greater_or_equal, $suffix_is_null, $suffix_is_not_null, $suffix_like, $suffix_not_like, $suffix_contains, $suffix_not_contains, $suffix_starts_with, $suffix_not_starts_with, $suffix_ends_with, $suffix_not_ends_with, $suffix_in, $suffix_between, $job_title_not_equal, $job_title_less, $job_title_less_or_equal, $job_title_greater, $job_title_greater_or_equal, $job_title_is_null, $job_title_is_not_null, $job_title_like, $job_title_not_like, $job_title_contains, $job_title_not_contains, $job_title_starts_with, $job_title_not_starts_with, $job_title_ends_with, $job_title_not_ends_with, $job_title_in, $job_title_between, $job_position_code_not_equal, $job_position_code_less, $job_position_code_less_or_equal, $job_position_code_greater, $job_position_code_greater_or_equal, $job_position_code_is_null, $job_position_code_is_not_null, $job_position_code_like, $job_position_code_not_like, $job_position_code_contains, $job_position_code_not_contains, $job_position_code_starts_with, $job_position_code_not_starts_with, $job_position_code_ends_with, $job_position_code_not_ends_with, $job_position_code_in, $job_position_code_between, $communication_preference_not_equal, $communication_preference_less, $communication_preference_less_or_equal, $communication_preference_greater, $communication_preference_greater_or_equal, $communication_preference_is_null, $communication_preference_is_not_null, $communication_preference_like, $communication_preference_not_like, $communication_preference_contains, $communication_preference_not_contains, $communication_preference_starts_with, $communication_preference_not_starts_with, $communication_preference_ends_with, $communication_preference_not_ends_with, $communication_preference_in, $communication_preference_between, $source_promotion_not_equal, $source_promotion_less, $source_promotion_less_or_equal, $source_promotion_greater, $source_promotion_greater_or_equal, $source_promotion_is_null, $source_promotion_is_not_null, $source_promotion_like, $source_promotion_not_like, $source_promotion_contains, $source_promotion_not_contains, $source_promotion_starts_with, $source_promotion_not_starts_with, $source_promotion_ends_with, $source_promotion_not_ends_with, $source_promotion_in, $source_promotion_between, $address_code_not_equal, $address_code_less, $address_code_less_or_equal, $address_code_greater, $address_code_greater_or_equal, $address_code_is_null, $address_code_is_not_null, $address_code_like, $address_code_not_like, $address_code_contains, $address_code_not_contains, $address_code_starts_with, $address_code_not_starts_with, $address_code_ends_with, $address_code_not_ends_with, $address_code_in, $address_code_between, $default_currency_not_equal, $default_currency_less, $default_currency_less_or_equal, $default_currency_greater, $default_currency_greater_or_equal, $default_currency_is_null, $default_currency_is_not_null, $default_currency_like, $default_currency_not_like, $default_currency_contains, $default_currency_not_contains, $default_currency_starts_with, $default_currency_not_starts_with, $default_currency_ends_with, $default_currency_not_ends_with, $default_currency_in, $default_currency_between, $department_not_equal, $department_less, $department_less_or_equal, $department_greater, $department_greater_or_equal, $department_is_null, $department_is_not_null, $department_like, $department_not_like, $department_contains, $department_not_contains, $department_starts_with, $department_not_starts_with, $department_ends_with, $department_not_ends_with, $department_in, $department_between, $county_not_equal, $county_less, $county_less_or_equal, $county_greater, $county_greater_or_equal, $county_is_null, $county_is_not_null, $county_like, $county_not_like, $county_contains, $county_not_contains, $county_starts_with, $county_not_starts_with, $county_ends_with, $county_not_ends_with, $county_in, $county_between, $pin_code_not_equal, $pin_code_less, $pin_code_less_or_equal, $pin_code_greater, $pin_code_greater_or_equal, $pin_code_is_null, $pin_code_is_not_null, $pin_code_like, $pin_code_not_like, $pin_code_contains, $pin_code_not_contains, $pin_code_starts_with, $pin_code_not_starts_with, $pin_code_ends_with, $pin_code_not_ends_with, $pin_code_in, $pin_code_between, $social_security_number_not_equal, $social_security_number_less, $social_security_number_less_or_equal, $social_security_number_greater, $social_security_number_greater_or_equal, $social_security_number_is_null, $social_security_number_is_not_null, $social_security_number_like, $social_security_number_not_like, $social_security_number_contains, $social_security_number_not_contains, $social_security_number_starts_with, $social_security_number_not_starts_with, $social_security_number_ends_with, $social_security_number_not_ends_with, $social_security_number_in, $social_security_number_between, $street_name_not_equal, $street_name_less, $street_name_less_or_equal, $street_name_greater, $street_name_greater_or_equal, $street_name_is_null, $street_name_is_not_null, $street_name_like, $street_name_not_like, $street_name_contains, $street_name_not_contains, $street_name_starts_with, $street_name_not_starts_with, $street_name_ends_with, $street_name_not_ends_with, $street_name_in, $street_name_between, $street_type_not_equal, $street_type_less, $street_type_less_or_equal, $street_type_greater, $street_type_greater_or_equal, $street_type_is_null, $street_type_is_not_null, $street_type_like, $street_type_not_like, $street_type_contains, $street_type_not_contains, $street_type_starts_with, $street_type_not_starts_with, $street_type_ends_with, $street_type_not_ends_with, $street_type_in, $street_type_between, $last_updated_on_not_equal, $last_updated_on_less, $last_updated_on_less_or_equal, $last_updated_on_greater, $last_updated_on_greater_or_equal, $last_updated_on_is_null, $last_updated_on_is_not_null, $last_updated_on_like, $last_updated_on_not_like, $last_updated_on_contains, $last_updated_on_not_contains, $last_updated_on_starts_with, $last_updated_on_not_starts_with, $last_updated_on_ends_with, $last_updated_on_not_ends_with, $last_updated_on_in, $last_updated_on_between, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $last_name_soundex_not_equal, $last_name_soundex_less, $last_name_soundex_less_or_equal, $last_name_soundex_greater, $last_name_soundex_greater_or_equal, $last_name_soundex_is_null, $last_name_soundex_is_not_null, $last_name_soundex_like, $last_name_soundex_not_like, $last_name_soundex_contains, $last_name_soundex_not_contains, $last_name_soundex_starts_with, $last_name_soundex_not_starts_with, $last_name_soundex_ends_with, $last_name_soundex_not_ends_with, $last_name_soundex_in, $last_name_soundex_between, $company_name_soundex_not_equal, $company_name_soundex_less, $company_name_soundex_less_or_equal, $company_name_soundex_greater, $company_name_soundex_greater_or_equal, $company_name_soundex_is_null, $company_name_soundex_is_not_null, $company_name_soundex_like, $company_name_soundex_not_like, $company_name_soundex_contains, $company_name_soundex_not_contains, $company_name_soundex_starts_with, $company_name_soundex_not_starts_with, $company_name_soundex_ends_with, $company_name_soundex_not_ends_with, $company_name_soundex_in, $company_name_soundex_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_all_addresses** | **bool**| Include all customer addresses in the response or just the matched address? | [optional]
 **include_credit_summary** | **bool**| Include the customer&#39;s credit summary in the response. | [optional]
 **propagate_phone_number** | **bool**| If true, OR clauses using the value in the PhoneNumber comparison will be added for PhoneNumber2               and PhoneNumber3, if no comparisons for those fields have been specified. | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **customer_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **full_name** | **string**| Filter on ATN-NME using &#39;Equal&#39; operator | [optional]
 **email_address** | **string**| Filter on ADR-EML using &#39;Equal&#39; operator | [optional]
 **phone_number** | **string**| Filter on PHO1-IDX using &#39;Equal&#39; operator | [optional]
 **phone_number2** | **string**| Filter on PHO2-IDX using &#39;Equal&#39; operator | [optional]
 **phone_number3** | **string**| Filter on PHO3-IDX using &#39;Equal&#39; operator | [optional]
 **street1** | **string**| Filter on STR-1ST using &#39;Equal&#39; operator | [optional]
 **street2** | **string**| Filter on STR-2ND using &#39;Equal&#39; operator | [optional]
 **street3** | **string**| Filter on STR-3RD using &#39;Equal&#39; operator | [optional]
 **city** | **string**| Filter on CTM-CTY using &#39;Equal&#39; operator | [optional]
 **state** | **string**| Filter on CTM-STE using &#39;Equal&#39; operator | [optional]
 **country_code** | **string**| Filter on CUN-TYP using &#39;Equal&#39; operator | [optional]
 **postal_code** | **string**| Filter on ZIP-CDE using &#39;Equal&#39; operator | [optional]
 **fax_number** | **string**| Filter on FAX-NBR using &#39;Equal&#39; operator | [optional]
 **company** | **string**| Filter on CMP-NME using &#39;Equal&#39; operator | [optional]
 **customer_type** | **string**| Filter on CTM-TYP using &#39;Equal&#39; operator | [optional]
 **promote_flag** | **string**| Filter on PROMO using &#39;Equal&#39; operator | [optional]
 **promote_by_partners** | **string**| Filter on PMO-PTR using &#39;Equal&#39; operator | [optional]
 **promote_by_phone** | **string**| Filter on PMO-PHN using &#39;Equal&#39; operator | [optional]
 **promote_by_fax** | **string**| Filter on PMO-FAX using &#39;Equal&#39; operator | [optional]
 **promote_by_email** | **string**| Filter on PMO-EML using &#39;Equal&#39; operator | [optional]
 **promote_by_mail** | **string**| Filter on PMO-ADR using &#39;Equal&#39; operator | [optional]
 **promote_by_sms** | **string**| Filter on PMO-SMS using &#39;Equal&#39; operator | [optional]
 **promote_by_phone1** | **string**| Filter on PMO-PH1 using &#39;Equal&#39; operator | [optional]
 **promote_by_phone2** | **string**| Filter on PMO-PH2 using &#39;Equal&#39; operator | [optional]
 **promote_by_phone3** | **string**| Filter on PMO-PH3 using &#39;Equal&#39; operator | [optional]
 **title** | **string**| Filter on CTM-TTL using &#39;Equal&#39; operator | [optional]
 **first_name** | **string**| Filter on ATN-1ST using &#39;Equal&#39; operator | [optional]
 **middle_initial** | **string**| Filter on ATN-MID using &#39;Equal&#39; operator | [optional]
 **last_name** | **string**| Filter on ATN-END using &#39;Equal&#39; operator | [optional]
 **suffix** | **string**| Filter on CTM-SFX using &#39;Equal&#39; operator | [optional]
 **job_title** | **string**| Filter on JOB-TTL using &#39;Equal&#39; operator | [optional]
 **job_position_code** | **string**| Filter on CTM-POS using &#39;Equal&#39; operator | [optional]
 **communication_preference** | **string**| Filter on COMM-PRF using &#39;Equal&#39; operator | [optional]
 **source_promotion** | **string**| Filter on CTM-SRC using &#39;Equal&#39; operator | [optional]
 **address_code** | **string**| Filter on ADR-CDE using &#39;Equal&#39; operator | [optional]
 **default_currency** | **string**| Filter on BIL-CUR using &#39;Equal&#39; operator | [optional]
 **department** | **string**| Filter on DPT-NME using &#39;Equal&#39; operator | [optional]
 **county** | **string**| Filter on CTM-CNTY using &#39;Equal&#39; operator | [optional]
 **pin_code** | **string**| Filter on PIN-CODE using &#39;Equal&#39; operator | [optional]
 **social_security_number** | **string**| Filter on SOC-SEC using &#39;Equal&#39; operator | [optional]
 **street_name** | **string**| Filter on FSTR-NME using &#39;Equal&#39; operator | [optional]
 **street_type** | **string**| Filter on STR-TYP using &#39;Equal&#39; operator | [optional]
 **last_updated_on** | **string**| Filter on UPD-DTE using &#39;Equal&#39; operator | [optional]
 **item_number** | **string**| Filter on ITM-NUM using &#39;Equal&#39; operator | [optional]
 **last_name_soundex** | **string**| Filter on END-SNDX using &#39;Equal&#39; operator | [optional]
 **company_name_soundex** | **string**| Filter on CMP-SNDX using &#39;Equal&#39; operator | [optional]
 **customer_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **customer_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **customer_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **customer_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **customer_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **customer_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **customer_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **customer_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **customer_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **customer_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **customer_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **customer_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **customer_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **customer_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **customer_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **customer_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **customer_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **full_name_not_equal** | **string**| Filter on ATN-NME using &#39;NotEqual&#39; operator | [optional]
 **full_name_less** | **string**| Filter on ATN-NME using &#39;Less&#39; operator | [optional]
 **full_name_less_or_equal** | **string**| Filter on ATN-NME using &#39;LessOrEqual&#39; operator | [optional]
 **full_name_greater** | **string**| Filter on ATN-NME using &#39;Greater&#39; operator | [optional]
 **full_name_greater_or_equal** | **string**| Filter on ATN-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **full_name_is_null** | **string**| Filter on ATN-NME using &#39;IsNull&#39; operator | [optional]
 **full_name_is_not_null** | **string**| Filter on ATN-NME using &#39;IsNotNull&#39; operator | [optional]
 **full_name_like** | **string**| Filter on ATN-NME using &#39;Like&#39; operator | [optional]
 **full_name_not_like** | **string**| Filter on ATN-NME using &#39;NotLike&#39; operator | [optional]
 **full_name_contains** | **string**| Filter on ATN-NME using &#39;Contains&#39; operator | [optional]
 **full_name_not_contains** | **string**| Filter on ATN-NME using &#39;NotContains&#39; operator | [optional]
 **full_name_starts_with** | **string**| Filter on ATN-NME using &#39;StartsWith&#39; operator | [optional]
 **full_name_not_starts_with** | **string**| Filter on ATN-NME using &#39;NotStartsWith&#39; operator | [optional]
 **full_name_ends_with** | **string**| Filter on ATN-NME using &#39;EndsWith&#39; operator | [optional]
 **full_name_not_ends_with** | **string**| Filter on ATN-NME using &#39;NotEndsWith&#39; operator | [optional]
 **full_name_in** | **string**| Filter on ATN-NME using &#39;In&#39; operator | [optional]
 **full_name_between** | **string**| Filter on ATN-NME using &#39;Between&#39; operator | [optional]
 **email_address_not_equal** | **string**| Filter on ADR-EML using &#39;NotEqual&#39; operator | [optional]
 **email_address_less** | **string**| Filter on ADR-EML using &#39;Less&#39; operator | [optional]
 **email_address_less_or_equal** | **string**| Filter on ADR-EML using &#39;LessOrEqual&#39; operator | [optional]
 **email_address_greater** | **string**| Filter on ADR-EML using &#39;Greater&#39; operator | [optional]
 **email_address_greater_or_equal** | **string**| Filter on ADR-EML using &#39;GreaterOrEqual&#39; operator | [optional]
 **email_address_is_null** | **string**| Filter on ADR-EML using &#39;IsNull&#39; operator | [optional]
 **email_address_is_not_null** | **string**| Filter on ADR-EML using &#39;IsNotNull&#39; operator | [optional]
 **email_address_like** | **string**| Filter on ADR-EML using &#39;Like&#39; operator | [optional]
 **email_address_not_like** | **string**| Filter on ADR-EML using &#39;NotLike&#39; operator | [optional]
 **email_address_contains** | **string**| Filter on ADR-EML using &#39;Contains&#39; operator | [optional]
 **email_address_not_contains** | **string**| Filter on ADR-EML using &#39;NotContains&#39; operator | [optional]
 **email_address_starts_with** | **string**| Filter on ADR-EML using &#39;StartsWith&#39; operator | [optional]
 **email_address_not_starts_with** | **string**| Filter on ADR-EML using &#39;NotStartsWith&#39; operator | [optional]
 **email_address_ends_with** | **string**| Filter on ADR-EML using &#39;EndsWith&#39; operator | [optional]
 **email_address_not_ends_with** | **string**| Filter on ADR-EML using &#39;NotEndsWith&#39; operator | [optional]
 **email_address_in** | **string**| Filter on ADR-EML using &#39;In&#39; operator | [optional]
 **email_address_between** | **string**| Filter on ADR-EML using &#39;Between&#39; operator | [optional]
 **phone_number_not_equal** | **string**| Filter on PHO1-IDX using &#39;NotEqual&#39; operator | [optional]
 **phone_number_less** | **string**| Filter on PHO1-IDX using &#39;Less&#39; operator | [optional]
 **phone_number_less_or_equal** | **string**| Filter on PHO1-IDX using &#39;LessOrEqual&#39; operator | [optional]
 **phone_number_greater** | **string**| Filter on PHO1-IDX using &#39;Greater&#39; operator | [optional]
 **phone_number_greater_or_equal** | **string**| Filter on PHO1-IDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **phone_number_is_null** | **string**| Filter on PHO1-IDX using &#39;IsNull&#39; operator | [optional]
 **phone_number_is_not_null** | **string**| Filter on PHO1-IDX using &#39;IsNotNull&#39; operator | [optional]
 **phone_number_like** | **string**| Filter on PHO1-IDX using &#39;Like&#39; operator | [optional]
 **phone_number_not_like** | **string**| Filter on PHO1-IDX using &#39;NotLike&#39; operator | [optional]
 **phone_number_contains** | **string**| Filter on PHO1-IDX using &#39;Contains&#39; operator | [optional]
 **phone_number_not_contains** | **string**| Filter on PHO1-IDX using &#39;NotContains&#39; operator | [optional]
 **phone_number_starts_with** | **string**| Filter on PHO1-IDX using &#39;StartsWith&#39; operator | [optional]
 **phone_number_not_starts_with** | **string**| Filter on PHO1-IDX using &#39;NotStartsWith&#39; operator | [optional]
 **phone_number_ends_with** | **string**| Filter on PHO1-IDX using &#39;EndsWith&#39; operator | [optional]
 **phone_number_not_ends_with** | **string**| Filter on PHO1-IDX using &#39;NotEndsWith&#39; operator | [optional]
 **phone_number_in** | **string**| Filter on PHO1-IDX using &#39;In&#39; operator | [optional]
 **phone_number_between** | **string**| Filter on PHO1-IDX using &#39;Between&#39; operator | [optional]
 **phone_number2_not_equal** | **string**| Filter on PHO2-IDX using &#39;NotEqual&#39; operator | [optional]
 **phone_number2_less** | **string**| Filter on PHO2-IDX using &#39;Less&#39; operator | [optional]
 **phone_number2_less_or_equal** | **string**| Filter on PHO2-IDX using &#39;LessOrEqual&#39; operator | [optional]
 **phone_number2_greater** | **string**| Filter on PHO2-IDX using &#39;Greater&#39; operator | [optional]
 **phone_number2_greater_or_equal** | **string**| Filter on PHO2-IDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **phone_number2_is_null** | **string**| Filter on PHO2-IDX using &#39;IsNull&#39; operator | [optional]
 **phone_number2_is_not_null** | **string**| Filter on PHO2-IDX using &#39;IsNotNull&#39; operator | [optional]
 **phone_number2_like** | **string**| Filter on PHO2-IDX using &#39;Like&#39; operator | [optional]
 **phone_number2_not_like** | **string**| Filter on PHO2-IDX using &#39;NotLike&#39; operator | [optional]
 **phone_number2_contains** | **string**| Filter on PHO2-IDX using &#39;Contains&#39; operator | [optional]
 **phone_number2_not_contains** | **string**| Filter on PHO2-IDX using &#39;NotContains&#39; operator | [optional]
 **phone_number2_starts_with** | **string**| Filter on PHO2-IDX using &#39;StartsWith&#39; operator | [optional]
 **phone_number2_not_starts_with** | **string**| Filter on PHO2-IDX using &#39;NotStartsWith&#39; operator | [optional]
 **phone_number2_ends_with** | **string**| Filter on PHO2-IDX using &#39;EndsWith&#39; operator | [optional]
 **phone_number2_not_ends_with** | **string**| Filter on PHO2-IDX using &#39;NotEndsWith&#39; operator | [optional]
 **phone_number2_in** | **string**| Filter on PHO2-IDX using &#39;In&#39; operator | [optional]
 **phone_number2_between** | **string**| Filter on PHO2-IDX using &#39;Between&#39; operator | [optional]
 **phone_number3_not_equal** | **string**| Filter on PHO3-IDX using &#39;NotEqual&#39; operator | [optional]
 **phone_number3_less** | **string**| Filter on PHO3-IDX using &#39;Less&#39; operator | [optional]
 **phone_number3_less_or_equal** | **string**| Filter on PHO3-IDX using &#39;LessOrEqual&#39; operator | [optional]
 **phone_number3_greater** | **string**| Filter on PHO3-IDX using &#39;Greater&#39; operator | [optional]
 **phone_number3_greater_or_equal** | **string**| Filter on PHO3-IDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **phone_number3_is_null** | **string**| Filter on PHO3-IDX using &#39;IsNull&#39; operator | [optional]
 **phone_number3_is_not_null** | **string**| Filter on PHO3-IDX using &#39;IsNotNull&#39; operator | [optional]
 **phone_number3_like** | **string**| Filter on PHO3-IDX using &#39;Like&#39; operator | [optional]
 **phone_number3_not_like** | **string**| Filter on PHO3-IDX using &#39;NotLike&#39; operator | [optional]
 **phone_number3_contains** | **string**| Filter on PHO3-IDX using &#39;Contains&#39; operator | [optional]
 **phone_number3_not_contains** | **string**| Filter on PHO3-IDX using &#39;NotContains&#39; operator | [optional]
 **phone_number3_starts_with** | **string**| Filter on PHO3-IDX using &#39;StartsWith&#39; operator | [optional]
 **phone_number3_not_starts_with** | **string**| Filter on PHO3-IDX using &#39;NotStartsWith&#39; operator | [optional]
 **phone_number3_ends_with** | **string**| Filter on PHO3-IDX using &#39;EndsWith&#39; operator | [optional]
 **phone_number3_not_ends_with** | **string**| Filter on PHO3-IDX using &#39;NotEndsWith&#39; operator | [optional]
 **phone_number3_in** | **string**| Filter on PHO3-IDX using &#39;In&#39; operator | [optional]
 **phone_number3_between** | **string**| Filter on PHO3-IDX using &#39;Between&#39; operator | [optional]
 **street1_not_equal** | **string**| Filter on STR-1ST using &#39;NotEqual&#39; operator | [optional]
 **street1_less** | **string**| Filter on STR-1ST using &#39;Less&#39; operator | [optional]
 **street1_less_or_equal** | **string**| Filter on STR-1ST using &#39;LessOrEqual&#39; operator | [optional]
 **street1_greater** | **string**| Filter on STR-1ST using &#39;Greater&#39; operator | [optional]
 **street1_greater_or_equal** | **string**| Filter on STR-1ST using &#39;GreaterOrEqual&#39; operator | [optional]
 **street1_is_null** | **string**| Filter on STR-1ST using &#39;IsNull&#39; operator | [optional]
 **street1_is_not_null** | **string**| Filter on STR-1ST using &#39;IsNotNull&#39; operator | [optional]
 **street1_like** | **string**| Filter on STR-1ST using &#39;Like&#39; operator | [optional]
 **street1_not_like** | **string**| Filter on STR-1ST using &#39;NotLike&#39; operator | [optional]
 **street1_contains** | **string**| Filter on STR-1ST using &#39;Contains&#39; operator | [optional]
 **street1_not_contains** | **string**| Filter on STR-1ST using &#39;NotContains&#39; operator | [optional]
 **street1_starts_with** | **string**| Filter on STR-1ST using &#39;StartsWith&#39; operator | [optional]
 **street1_not_starts_with** | **string**| Filter on STR-1ST using &#39;NotStartsWith&#39; operator | [optional]
 **street1_ends_with** | **string**| Filter on STR-1ST using &#39;EndsWith&#39; operator | [optional]
 **street1_not_ends_with** | **string**| Filter on STR-1ST using &#39;NotEndsWith&#39; operator | [optional]
 **street1_in** | **string**| Filter on STR-1ST using &#39;In&#39; operator | [optional]
 **street1_between** | **string**| Filter on STR-1ST using &#39;Between&#39; operator | [optional]
 **street2_not_equal** | **string**| Filter on STR-2ND using &#39;NotEqual&#39; operator | [optional]
 **street2_less** | **string**| Filter on STR-2ND using &#39;Less&#39; operator | [optional]
 **street2_less_or_equal** | **string**| Filter on STR-2ND using &#39;LessOrEqual&#39; operator | [optional]
 **street2_greater** | **string**| Filter on STR-2ND using &#39;Greater&#39; operator | [optional]
 **street2_greater_or_equal** | **string**| Filter on STR-2ND using &#39;GreaterOrEqual&#39; operator | [optional]
 **street2_is_null** | **string**| Filter on STR-2ND using &#39;IsNull&#39; operator | [optional]
 **street2_is_not_null** | **string**| Filter on STR-2ND using &#39;IsNotNull&#39; operator | [optional]
 **street2_like** | **string**| Filter on STR-2ND using &#39;Like&#39; operator | [optional]
 **street2_not_like** | **string**| Filter on STR-2ND using &#39;NotLike&#39; operator | [optional]
 **street2_contains** | **string**| Filter on STR-2ND using &#39;Contains&#39; operator | [optional]
 **street2_not_contains** | **string**| Filter on STR-2ND using &#39;NotContains&#39; operator | [optional]
 **street2_starts_with** | **string**| Filter on STR-2ND using &#39;StartsWith&#39; operator | [optional]
 **street2_not_starts_with** | **string**| Filter on STR-2ND using &#39;NotStartsWith&#39; operator | [optional]
 **street2_ends_with** | **string**| Filter on STR-2ND using &#39;EndsWith&#39; operator | [optional]
 **street2_not_ends_with** | **string**| Filter on STR-2ND using &#39;NotEndsWith&#39; operator | [optional]
 **street2_in** | **string**| Filter on STR-2ND using &#39;In&#39; operator | [optional]
 **street2_between** | **string**| Filter on STR-2ND using &#39;Between&#39; operator | [optional]
 **street3_not_equal** | **string**| Filter on STR-3RD using &#39;NotEqual&#39; operator | [optional]
 **street3_less** | **string**| Filter on STR-3RD using &#39;Less&#39; operator | [optional]
 **street3_less_or_equal** | **string**| Filter on STR-3RD using &#39;LessOrEqual&#39; operator | [optional]
 **street3_greater** | **string**| Filter on STR-3RD using &#39;Greater&#39; operator | [optional]
 **street3_greater_or_equal** | **string**| Filter on STR-3RD using &#39;GreaterOrEqual&#39; operator | [optional]
 **street3_is_null** | **string**| Filter on STR-3RD using &#39;IsNull&#39; operator | [optional]
 **street3_is_not_null** | **string**| Filter on STR-3RD using &#39;IsNotNull&#39; operator | [optional]
 **street3_like** | **string**| Filter on STR-3RD using &#39;Like&#39; operator | [optional]
 **street3_not_like** | **string**| Filter on STR-3RD using &#39;NotLike&#39; operator | [optional]
 **street3_contains** | **string**| Filter on STR-3RD using &#39;Contains&#39; operator | [optional]
 **street3_not_contains** | **string**| Filter on STR-3RD using &#39;NotContains&#39; operator | [optional]
 **street3_starts_with** | **string**| Filter on STR-3RD using &#39;StartsWith&#39; operator | [optional]
 **street3_not_starts_with** | **string**| Filter on STR-3RD using &#39;NotStartsWith&#39; operator | [optional]
 **street3_ends_with** | **string**| Filter on STR-3RD using &#39;EndsWith&#39; operator | [optional]
 **street3_not_ends_with** | **string**| Filter on STR-3RD using &#39;NotEndsWith&#39; operator | [optional]
 **street3_in** | **string**| Filter on STR-3RD using &#39;In&#39; operator | [optional]
 **street3_between** | **string**| Filter on STR-3RD using &#39;Between&#39; operator | [optional]
 **city_not_equal** | **string**| Filter on CTM-CTY using &#39;NotEqual&#39; operator | [optional]
 **city_less** | **string**| Filter on CTM-CTY using &#39;Less&#39; operator | [optional]
 **city_less_or_equal** | **string**| Filter on CTM-CTY using &#39;LessOrEqual&#39; operator | [optional]
 **city_greater** | **string**| Filter on CTM-CTY using &#39;Greater&#39; operator | [optional]
 **city_greater_or_equal** | **string**| Filter on CTM-CTY using &#39;GreaterOrEqual&#39; operator | [optional]
 **city_is_null** | **string**| Filter on CTM-CTY using &#39;IsNull&#39; operator | [optional]
 **city_is_not_null** | **string**| Filter on CTM-CTY using &#39;IsNotNull&#39; operator | [optional]
 **city_like** | **string**| Filter on CTM-CTY using &#39;Like&#39; operator | [optional]
 **city_not_like** | **string**| Filter on CTM-CTY using &#39;NotLike&#39; operator | [optional]
 **city_contains** | **string**| Filter on CTM-CTY using &#39;Contains&#39; operator | [optional]
 **city_not_contains** | **string**| Filter on CTM-CTY using &#39;NotContains&#39; operator | [optional]
 **city_starts_with** | **string**| Filter on CTM-CTY using &#39;StartsWith&#39; operator | [optional]
 **city_not_starts_with** | **string**| Filter on CTM-CTY using &#39;NotStartsWith&#39; operator | [optional]
 **city_ends_with** | **string**| Filter on CTM-CTY using &#39;EndsWith&#39; operator | [optional]
 **city_not_ends_with** | **string**| Filter on CTM-CTY using &#39;NotEndsWith&#39; operator | [optional]
 **city_in** | **string**| Filter on CTM-CTY using &#39;In&#39; operator | [optional]
 **city_between** | **string**| Filter on CTM-CTY using &#39;Between&#39; operator | [optional]
 **state_not_equal** | **string**| Filter on CTM-STE using &#39;NotEqual&#39; operator | [optional]
 **state_less** | **string**| Filter on CTM-STE using &#39;Less&#39; operator | [optional]
 **state_less_or_equal** | **string**| Filter on CTM-STE using &#39;LessOrEqual&#39; operator | [optional]
 **state_greater** | **string**| Filter on CTM-STE using &#39;Greater&#39; operator | [optional]
 **state_greater_or_equal** | **string**| Filter on CTM-STE using &#39;GreaterOrEqual&#39; operator | [optional]
 **state_is_null** | **string**| Filter on CTM-STE using &#39;IsNull&#39; operator | [optional]
 **state_is_not_null** | **string**| Filter on CTM-STE using &#39;IsNotNull&#39; operator | [optional]
 **state_like** | **string**| Filter on CTM-STE using &#39;Like&#39; operator | [optional]
 **state_not_like** | **string**| Filter on CTM-STE using &#39;NotLike&#39; operator | [optional]
 **state_contains** | **string**| Filter on CTM-STE using &#39;Contains&#39; operator | [optional]
 **state_not_contains** | **string**| Filter on CTM-STE using &#39;NotContains&#39; operator | [optional]
 **state_starts_with** | **string**| Filter on CTM-STE using &#39;StartsWith&#39; operator | [optional]
 **state_not_starts_with** | **string**| Filter on CTM-STE using &#39;NotStartsWith&#39; operator | [optional]
 **state_ends_with** | **string**| Filter on CTM-STE using &#39;EndsWith&#39; operator | [optional]
 **state_not_ends_with** | **string**| Filter on CTM-STE using &#39;NotEndsWith&#39; operator | [optional]
 **state_in** | **string**| Filter on CTM-STE using &#39;In&#39; operator | [optional]
 **state_between** | **string**| Filter on CTM-STE using &#39;Between&#39; operator | [optional]
 **country_code_not_equal** | **string**| Filter on CUN-TYP using &#39;NotEqual&#39; operator | [optional]
 **country_code_less** | **string**| Filter on CUN-TYP using &#39;Less&#39; operator | [optional]
 **country_code_less_or_equal** | **string**| Filter on CUN-TYP using &#39;LessOrEqual&#39; operator | [optional]
 **country_code_greater** | **string**| Filter on CUN-TYP using &#39;Greater&#39; operator | [optional]
 **country_code_greater_or_equal** | **string**| Filter on CUN-TYP using &#39;GreaterOrEqual&#39; operator | [optional]
 **country_code_is_null** | **string**| Filter on CUN-TYP using &#39;IsNull&#39; operator | [optional]
 **country_code_is_not_null** | **string**| Filter on CUN-TYP using &#39;IsNotNull&#39; operator | [optional]
 **country_code_like** | **string**| Filter on CUN-TYP using &#39;Like&#39; operator | [optional]
 **country_code_not_like** | **string**| Filter on CUN-TYP using &#39;NotLike&#39; operator | [optional]
 **country_code_contains** | **string**| Filter on CUN-TYP using &#39;Contains&#39; operator | [optional]
 **country_code_not_contains** | **string**| Filter on CUN-TYP using &#39;NotContains&#39; operator | [optional]
 **country_code_starts_with** | **string**| Filter on CUN-TYP using &#39;StartsWith&#39; operator | [optional]
 **country_code_not_starts_with** | **string**| Filter on CUN-TYP using &#39;NotStartsWith&#39; operator | [optional]
 **country_code_ends_with** | **string**| Filter on CUN-TYP using &#39;EndsWith&#39; operator | [optional]
 **country_code_not_ends_with** | **string**| Filter on CUN-TYP using &#39;NotEndsWith&#39; operator | [optional]
 **country_code_in** | **string**| Filter on CUN-TYP using &#39;In&#39; operator | [optional]
 **country_code_between** | **string**| Filter on CUN-TYP using &#39;Between&#39; operator | [optional]
 **postal_code_not_equal** | **string**| Filter on ZIP-CDE using &#39;NotEqual&#39; operator | [optional]
 **postal_code_less** | **string**| Filter on ZIP-CDE using &#39;Less&#39; operator | [optional]
 **postal_code_less_or_equal** | **string**| Filter on ZIP-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **postal_code_greater** | **string**| Filter on ZIP-CDE using &#39;Greater&#39; operator | [optional]
 **postal_code_greater_or_equal** | **string**| Filter on ZIP-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **postal_code_is_null** | **string**| Filter on ZIP-CDE using &#39;IsNull&#39; operator | [optional]
 **postal_code_is_not_null** | **string**| Filter on ZIP-CDE using &#39;IsNotNull&#39; operator | [optional]
 **postal_code_like** | **string**| Filter on ZIP-CDE using &#39;Like&#39; operator | [optional]
 **postal_code_not_like** | **string**| Filter on ZIP-CDE using &#39;NotLike&#39; operator | [optional]
 **postal_code_contains** | **string**| Filter on ZIP-CDE using &#39;Contains&#39; operator | [optional]
 **postal_code_not_contains** | **string**| Filter on ZIP-CDE using &#39;NotContains&#39; operator | [optional]
 **postal_code_starts_with** | **string**| Filter on ZIP-CDE using &#39;StartsWith&#39; operator | [optional]
 **postal_code_not_starts_with** | **string**| Filter on ZIP-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **postal_code_ends_with** | **string**| Filter on ZIP-CDE using &#39;EndsWith&#39; operator | [optional]
 **postal_code_not_ends_with** | **string**| Filter on ZIP-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **postal_code_in** | **string**| Filter on ZIP-CDE using &#39;In&#39; operator | [optional]
 **postal_code_between** | **string**| Filter on ZIP-CDE using &#39;Between&#39; operator | [optional]
 **fax_number_not_equal** | **string**| Filter on FAX-NBR using &#39;NotEqual&#39; operator | [optional]
 **fax_number_less** | **string**| Filter on FAX-NBR using &#39;Less&#39; operator | [optional]
 **fax_number_less_or_equal** | **string**| Filter on FAX-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **fax_number_greater** | **string**| Filter on FAX-NBR using &#39;Greater&#39; operator | [optional]
 **fax_number_greater_or_equal** | **string**| Filter on FAX-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **fax_number_is_null** | **string**| Filter on FAX-NBR using &#39;IsNull&#39; operator | [optional]
 **fax_number_is_not_null** | **string**| Filter on FAX-NBR using &#39;IsNotNull&#39; operator | [optional]
 **fax_number_like** | **string**| Filter on FAX-NBR using &#39;Like&#39; operator | [optional]
 **fax_number_not_like** | **string**| Filter on FAX-NBR using &#39;NotLike&#39; operator | [optional]
 **fax_number_contains** | **string**| Filter on FAX-NBR using &#39;Contains&#39; operator | [optional]
 **fax_number_not_contains** | **string**| Filter on FAX-NBR using &#39;NotContains&#39; operator | [optional]
 **fax_number_starts_with** | **string**| Filter on FAX-NBR using &#39;StartsWith&#39; operator | [optional]
 **fax_number_not_starts_with** | **string**| Filter on FAX-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **fax_number_ends_with** | **string**| Filter on FAX-NBR using &#39;EndsWith&#39; operator | [optional]
 **fax_number_not_ends_with** | **string**| Filter on FAX-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **fax_number_in** | **string**| Filter on FAX-NBR using &#39;In&#39; operator | [optional]
 **fax_number_between** | **string**| Filter on FAX-NBR using &#39;Between&#39; operator | [optional]
 **company_not_equal** | **string**| Filter on CMP-NME using &#39;NotEqual&#39; operator | [optional]
 **company_less** | **string**| Filter on CMP-NME using &#39;Less&#39; operator | [optional]
 **company_less_or_equal** | **string**| Filter on CMP-NME using &#39;LessOrEqual&#39; operator | [optional]
 **company_greater** | **string**| Filter on CMP-NME using &#39;Greater&#39; operator | [optional]
 **company_greater_or_equal** | **string**| Filter on CMP-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **company_is_null** | **string**| Filter on CMP-NME using &#39;IsNull&#39; operator | [optional]
 **company_is_not_null** | **string**| Filter on CMP-NME using &#39;IsNotNull&#39; operator | [optional]
 **company_like** | **string**| Filter on CMP-NME using &#39;Like&#39; operator | [optional]
 **company_not_like** | **string**| Filter on CMP-NME using &#39;NotLike&#39; operator | [optional]
 **company_contains** | **string**| Filter on CMP-NME using &#39;Contains&#39; operator | [optional]
 **company_not_contains** | **string**| Filter on CMP-NME using &#39;NotContains&#39; operator | [optional]
 **company_starts_with** | **string**| Filter on CMP-NME using &#39;StartsWith&#39; operator | [optional]
 **company_not_starts_with** | **string**| Filter on CMP-NME using &#39;NotStartsWith&#39; operator | [optional]
 **company_ends_with** | **string**| Filter on CMP-NME using &#39;EndsWith&#39; operator | [optional]
 **company_not_ends_with** | **string**| Filter on CMP-NME using &#39;NotEndsWith&#39; operator | [optional]
 **company_in** | **string**| Filter on CMP-NME using &#39;In&#39; operator | [optional]
 **company_between** | **string**| Filter on CMP-NME using &#39;Between&#39; operator | [optional]
 **customer_type_not_equal** | **string**| Filter on CTM-TYP using &#39;NotEqual&#39; operator | [optional]
 **customer_type_less** | **string**| Filter on CTM-TYP using &#39;Less&#39; operator | [optional]
 **customer_type_less_or_equal** | **string**| Filter on CTM-TYP using &#39;LessOrEqual&#39; operator | [optional]
 **customer_type_greater** | **string**| Filter on CTM-TYP using &#39;Greater&#39; operator | [optional]
 **customer_type_greater_or_equal** | **string**| Filter on CTM-TYP using &#39;GreaterOrEqual&#39; operator | [optional]
 **customer_type_is_null** | **string**| Filter on CTM-TYP using &#39;IsNull&#39; operator | [optional]
 **customer_type_is_not_null** | **string**| Filter on CTM-TYP using &#39;IsNotNull&#39; operator | [optional]
 **customer_type_like** | **string**| Filter on CTM-TYP using &#39;Like&#39; operator | [optional]
 **customer_type_not_like** | **string**| Filter on CTM-TYP using &#39;NotLike&#39; operator | [optional]
 **customer_type_contains** | **string**| Filter on CTM-TYP using &#39;Contains&#39; operator | [optional]
 **customer_type_not_contains** | **string**| Filter on CTM-TYP using &#39;NotContains&#39; operator | [optional]
 **customer_type_starts_with** | **string**| Filter on CTM-TYP using &#39;StartsWith&#39; operator | [optional]
 **customer_type_not_starts_with** | **string**| Filter on CTM-TYP using &#39;NotStartsWith&#39; operator | [optional]
 **customer_type_ends_with** | **string**| Filter on CTM-TYP using &#39;EndsWith&#39; operator | [optional]
 **customer_type_not_ends_with** | **string**| Filter on CTM-TYP using &#39;NotEndsWith&#39; operator | [optional]
 **customer_type_in** | **string**| Filter on CTM-TYP using &#39;In&#39; operator | [optional]
 **customer_type_between** | **string**| Filter on CTM-TYP using &#39;Between&#39; operator | [optional]
 **promote_flag_not_equal** | **string**| Filter on PROMO using &#39;NotEqual&#39; operator | [optional]
 **promote_flag_less** | **string**| Filter on PROMO using &#39;Less&#39; operator | [optional]
 **promote_flag_less_or_equal** | **string**| Filter on PROMO using &#39;LessOrEqual&#39; operator | [optional]
 **promote_flag_greater** | **string**| Filter on PROMO using &#39;Greater&#39; operator | [optional]
 **promote_flag_greater_or_equal** | **string**| Filter on PROMO using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_flag_is_null** | **string**| Filter on PROMO using &#39;IsNull&#39; operator | [optional]
 **promote_flag_is_not_null** | **string**| Filter on PROMO using &#39;IsNotNull&#39; operator | [optional]
 **promote_flag_like** | **string**| Filter on PROMO using &#39;Like&#39; operator | [optional]
 **promote_flag_not_like** | **string**| Filter on PROMO using &#39;NotLike&#39; operator | [optional]
 **promote_flag_contains** | **string**| Filter on PROMO using &#39;Contains&#39; operator | [optional]
 **promote_flag_not_contains** | **string**| Filter on PROMO using &#39;NotContains&#39; operator | [optional]
 **promote_flag_starts_with** | **string**| Filter on PROMO using &#39;StartsWith&#39; operator | [optional]
 **promote_flag_not_starts_with** | **string**| Filter on PROMO using &#39;NotStartsWith&#39; operator | [optional]
 **promote_flag_ends_with** | **string**| Filter on PROMO using &#39;EndsWith&#39; operator | [optional]
 **promote_flag_not_ends_with** | **string**| Filter on PROMO using &#39;NotEndsWith&#39; operator | [optional]
 **promote_flag_in** | **string**| Filter on PROMO using &#39;In&#39; operator | [optional]
 **promote_flag_between** | **string**| Filter on PROMO using &#39;Between&#39; operator | [optional]
 **promote_by_partners_not_equal** | **string**| Filter on PMO-PTR using &#39;NotEqual&#39; operator | [optional]
 **promote_by_partners_less** | **string**| Filter on PMO-PTR using &#39;Less&#39; operator | [optional]
 **promote_by_partners_less_or_equal** | **string**| Filter on PMO-PTR using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_partners_greater** | **string**| Filter on PMO-PTR using &#39;Greater&#39; operator | [optional]
 **promote_by_partners_greater_or_equal** | **string**| Filter on PMO-PTR using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_partners_is_null** | **string**| Filter on PMO-PTR using &#39;IsNull&#39; operator | [optional]
 **promote_by_partners_is_not_null** | **string**| Filter on PMO-PTR using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_partners_like** | **string**| Filter on PMO-PTR using &#39;Like&#39; operator | [optional]
 **promote_by_partners_not_like** | **string**| Filter on PMO-PTR using &#39;NotLike&#39; operator | [optional]
 **promote_by_partners_contains** | **string**| Filter on PMO-PTR using &#39;Contains&#39; operator | [optional]
 **promote_by_partners_not_contains** | **string**| Filter on PMO-PTR using &#39;NotContains&#39; operator | [optional]
 **promote_by_partners_starts_with** | **string**| Filter on PMO-PTR using &#39;StartsWith&#39; operator | [optional]
 **promote_by_partners_not_starts_with** | **string**| Filter on PMO-PTR using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_partners_ends_with** | **string**| Filter on PMO-PTR using &#39;EndsWith&#39; operator | [optional]
 **promote_by_partners_not_ends_with** | **string**| Filter on PMO-PTR using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_partners_in** | **string**| Filter on PMO-PTR using &#39;In&#39; operator | [optional]
 **promote_by_partners_between** | **string**| Filter on PMO-PTR using &#39;Between&#39; operator | [optional]
 **promote_by_phone_not_equal** | **string**| Filter on PMO-PHN using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone_less** | **string**| Filter on PMO-PHN using &#39;Less&#39; operator | [optional]
 **promote_by_phone_less_or_equal** | **string**| Filter on PMO-PHN using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone_greater** | **string**| Filter on PMO-PHN using &#39;Greater&#39; operator | [optional]
 **promote_by_phone_greater_or_equal** | **string**| Filter on PMO-PHN using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone_is_null** | **string**| Filter on PMO-PHN using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone_is_not_null** | **string**| Filter on PMO-PHN using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone_like** | **string**| Filter on PMO-PHN using &#39;Like&#39; operator | [optional]
 **promote_by_phone_not_like** | **string**| Filter on PMO-PHN using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone_contains** | **string**| Filter on PMO-PHN using &#39;Contains&#39; operator | [optional]
 **promote_by_phone_not_contains** | **string**| Filter on PMO-PHN using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone_starts_with** | **string**| Filter on PMO-PHN using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone_not_starts_with** | **string**| Filter on PMO-PHN using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone_ends_with** | **string**| Filter on PMO-PHN using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone_not_ends_with** | **string**| Filter on PMO-PHN using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone_in** | **string**| Filter on PMO-PHN using &#39;In&#39; operator | [optional]
 **promote_by_phone_between** | **string**| Filter on PMO-PHN using &#39;Between&#39; operator | [optional]
 **promote_by_fax_not_equal** | **string**| Filter on PMO-FAX using &#39;NotEqual&#39; operator | [optional]
 **promote_by_fax_less** | **string**| Filter on PMO-FAX using &#39;Less&#39; operator | [optional]
 **promote_by_fax_less_or_equal** | **string**| Filter on PMO-FAX using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_fax_greater** | **string**| Filter on PMO-FAX using &#39;Greater&#39; operator | [optional]
 **promote_by_fax_greater_or_equal** | **string**| Filter on PMO-FAX using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_fax_is_null** | **string**| Filter on PMO-FAX using &#39;IsNull&#39; operator | [optional]
 **promote_by_fax_is_not_null** | **string**| Filter on PMO-FAX using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_fax_like** | **string**| Filter on PMO-FAX using &#39;Like&#39; operator | [optional]
 **promote_by_fax_not_like** | **string**| Filter on PMO-FAX using &#39;NotLike&#39; operator | [optional]
 **promote_by_fax_contains** | **string**| Filter on PMO-FAX using &#39;Contains&#39; operator | [optional]
 **promote_by_fax_not_contains** | **string**| Filter on PMO-FAX using &#39;NotContains&#39; operator | [optional]
 **promote_by_fax_starts_with** | **string**| Filter on PMO-FAX using &#39;StartsWith&#39; operator | [optional]
 **promote_by_fax_not_starts_with** | **string**| Filter on PMO-FAX using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_fax_ends_with** | **string**| Filter on PMO-FAX using &#39;EndsWith&#39; operator | [optional]
 **promote_by_fax_not_ends_with** | **string**| Filter on PMO-FAX using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_fax_in** | **string**| Filter on PMO-FAX using &#39;In&#39; operator | [optional]
 **promote_by_fax_between** | **string**| Filter on PMO-FAX using &#39;Between&#39; operator | [optional]
 **promote_by_email_not_equal** | **string**| Filter on PMO-EML using &#39;NotEqual&#39; operator | [optional]
 **promote_by_email_less** | **string**| Filter on PMO-EML using &#39;Less&#39; operator | [optional]
 **promote_by_email_less_or_equal** | **string**| Filter on PMO-EML using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_email_greater** | **string**| Filter on PMO-EML using &#39;Greater&#39; operator | [optional]
 **promote_by_email_greater_or_equal** | **string**| Filter on PMO-EML using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_email_is_null** | **string**| Filter on PMO-EML using &#39;IsNull&#39; operator | [optional]
 **promote_by_email_is_not_null** | **string**| Filter on PMO-EML using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_email_like** | **string**| Filter on PMO-EML using &#39;Like&#39; operator | [optional]
 **promote_by_email_not_like** | **string**| Filter on PMO-EML using &#39;NotLike&#39; operator | [optional]
 **promote_by_email_contains** | **string**| Filter on PMO-EML using &#39;Contains&#39; operator | [optional]
 **promote_by_email_not_contains** | **string**| Filter on PMO-EML using &#39;NotContains&#39; operator | [optional]
 **promote_by_email_starts_with** | **string**| Filter on PMO-EML using &#39;StartsWith&#39; operator | [optional]
 **promote_by_email_not_starts_with** | **string**| Filter on PMO-EML using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_email_ends_with** | **string**| Filter on PMO-EML using &#39;EndsWith&#39; operator | [optional]
 **promote_by_email_not_ends_with** | **string**| Filter on PMO-EML using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_email_in** | **string**| Filter on PMO-EML using &#39;In&#39; operator | [optional]
 **promote_by_email_between** | **string**| Filter on PMO-EML using &#39;Between&#39; operator | [optional]
 **promote_by_mail_not_equal** | **string**| Filter on PMO-ADR using &#39;NotEqual&#39; operator | [optional]
 **promote_by_mail_less** | **string**| Filter on PMO-ADR using &#39;Less&#39; operator | [optional]
 **promote_by_mail_less_or_equal** | **string**| Filter on PMO-ADR using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_mail_greater** | **string**| Filter on PMO-ADR using &#39;Greater&#39; operator | [optional]
 **promote_by_mail_greater_or_equal** | **string**| Filter on PMO-ADR using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_mail_is_null** | **string**| Filter on PMO-ADR using &#39;IsNull&#39; operator | [optional]
 **promote_by_mail_is_not_null** | **string**| Filter on PMO-ADR using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_mail_like** | **string**| Filter on PMO-ADR using &#39;Like&#39; operator | [optional]
 **promote_by_mail_not_like** | **string**| Filter on PMO-ADR using &#39;NotLike&#39; operator | [optional]
 **promote_by_mail_contains** | **string**| Filter on PMO-ADR using &#39;Contains&#39; operator | [optional]
 **promote_by_mail_not_contains** | **string**| Filter on PMO-ADR using &#39;NotContains&#39; operator | [optional]
 **promote_by_mail_starts_with** | **string**| Filter on PMO-ADR using &#39;StartsWith&#39; operator | [optional]
 **promote_by_mail_not_starts_with** | **string**| Filter on PMO-ADR using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_mail_ends_with** | **string**| Filter on PMO-ADR using &#39;EndsWith&#39; operator | [optional]
 **promote_by_mail_not_ends_with** | **string**| Filter on PMO-ADR using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_mail_in** | **string**| Filter on PMO-ADR using &#39;In&#39; operator | [optional]
 **promote_by_mail_between** | **string**| Filter on PMO-ADR using &#39;Between&#39; operator | [optional]
 **promote_by_sms_not_equal** | **string**| Filter on PMO-SMS using &#39;NotEqual&#39; operator | [optional]
 **promote_by_sms_less** | **string**| Filter on PMO-SMS using &#39;Less&#39; operator | [optional]
 **promote_by_sms_less_or_equal** | **string**| Filter on PMO-SMS using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_sms_greater** | **string**| Filter on PMO-SMS using &#39;Greater&#39; operator | [optional]
 **promote_by_sms_greater_or_equal** | **string**| Filter on PMO-SMS using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_sms_is_null** | **string**| Filter on PMO-SMS using &#39;IsNull&#39; operator | [optional]
 **promote_by_sms_is_not_null** | **string**| Filter on PMO-SMS using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_sms_like** | **string**| Filter on PMO-SMS using &#39;Like&#39; operator | [optional]
 **promote_by_sms_not_like** | **string**| Filter on PMO-SMS using &#39;NotLike&#39; operator | [optional]
 **promote_by_sms_contains** | **string**| Filter on PMO-SMS using &#39;Contains&#39; operator | [optional]
 **promote_by_sms_not_contains** | **string**| Filter on PMO-SMS using &#39;NotContains&#39; operator | [optional]
 **promote_by_sms_starts_with** | **string**| Filter on PMO-SMS using &#39;StartsWith&#39; operator | [optional]
 **promote_by_sms_not_starts_with** | **string**| Filter on PMO-SMS using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_sms_ends_with** | **string**| Filter on PMO-SMS using &#39;EndsWith&#39; operator | [optional]
 **promote_by_sms_not_ends_with** | **string**| Filter on PMO-SMS using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_sms_in** | **string**| Filter on PMO-SMS using &#39;In&#39; operator | [optional]
 **promote_by_sms_between** | **string**| Filter on PMO-SMS using &#39;Between&#39; operator | [optional]
 **promote_by_phone1_not_equal** | **string**| Filter on PMO-PH1 using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone1_less** | **string**| Filter on PMO-PH1 using &#39;Less&#39; operator | [optional]
 **promote_by_phone1_less_or_equal** | **string**| Filter on PMO-PH1 using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone1_greater** | **string**| Filter on PMO-PH1 using &#39;Greater&#39; operator | [optional]
 **promote_by_phone1_greater_or_equal** | **string**| Filter on PMO-PH1 using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone1_is_null** | **string**| Filter on PMO-PH1 using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone1_is_not_null** | **string**| Filter on PMO-PH1 using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone1_like** | **string**| Filter on PMO-PH1 using &#39;Like&#39; operator | [optional]
 **promote_by_phone1_not_like** | **string**| Filter on PMO-PH1 using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone1_contains** | **string**| Filter on PMO-PH1 using &#39;Contains&#39; operator | [optional]
 **promote_by_phone1_not_contains** | **string**| Filter on PMO-PH1 using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone1_starts_with** | **string**| Filter on PMO-PH1 using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone1_not_starts_with** | **string**| Filter on PMO-PH1 using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone1_ends_with** | **string**| Filter on PMO-PH1 using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone1_not_ends_with** | **string**| Filter on PMO-PH1 using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone1_in** | **string**| Filter on PMO-PH1 using &#39;In&#39; operator | [optional]
 **promote_by_phone1_between** | **string**| Filter on PMO-PH1 using &#39;Between&#39; operator | [optional]
 **promote_by_phone2_not_equal** | **string**| Filter on PMO-PH2 using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone2_less** | **string**| Filter on PMO-PH2 using &#39;Less&#39; operator | [optional]
 **promote_by_phone2_less_or_equal** | **string**| Filter on PMO-PH2 using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone2_greater** | **string**| Filter on PMO-PH2 using &#39;Greater&#39; operator | [optional]
 **promote_by_phone2_greater_or_equal** | **string**| Filter on PMO-PH2 using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone2_is_null** | **string**| Filter on PMO-PH2 using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone2_is_not_null** | **string**| Filter on PMO-PH2 using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone2_like** | **string**| Filter on PMO-PH2 using &#39;Like&#39; operator | [optional]
 **promote_by_phone2_not_like** | **string**| Filter on PMO-PH2 using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone2_contains** | **string**| Filter on PMO-PH2 using &#39;Contains&#39; operator | [optional]
 **promote_by_phone2_not_contains** | **string**| Filter on PMO-PH2 using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone2_starts_with** | **string**| Filter on PMO-PH2 using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone2_not_starts_with** | **string**| Filter on PMO-PH2 using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone2_ends_with** | **string**| Filter on PMO-PH2 using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone2_not_ends_with** | **string**| Filter on PMO-PH2 using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone2_in** | **string**| Filter on PMO-PH2 using &#39;In&#39; operator | [optional]
 **promote_by_phone2_between** | **string**| Filter on PMO-PH2 using &#39;Between&#39; operator | [optional]
 **promote_by_phone3_not_equal** | **string**| Filter on PMO-PH3 using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone3_less** | **string**| Filter on PMO-PH3 using &#39;Less&#39; operator | [optional]
 **promote_by_phone3_less_or_equal** | **string**| Filter on PMO-PH3 using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone3_greater** | **string**| Filter on PMO-PH3 using &#39;Greater&#39; operator | [optional]
 **promote_by_phone3_greater_or_equal** | **string**| Filter on PMO-PH3 using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone3_is_null** | **string**| Filter on PMO-PH3 using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone3_is_not_null** | **string**| Filter on PMO-PH3 using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone3_like** | **string**| Filter on PMO-PH3 using &#39;Like&#39; operator | [optional]
 **promote_by_phone3_not_like** | **string**| Filter on PMO-PH3 using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone3_contains** | **string**| Filter on PMO-PH3 using &#39;Contains&#39; operator | [optional]
 **promote_by_phone3_not_contains** | **string**| Filter on PMO-PH3 using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone3_starts_with** | **string**| Filter on PMO-PH3 using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone3_not_starts_with** | **string**| Filter on PMO-PH3 using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone3_ends_with** | **string**| Filter on PMO-PH3 using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone3_not_ends_with** | **string**| Filter on PMO-PH3 using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone3_in** | **string**| Filter on PMO-PH3 using &#39;In&#39; operator | [optional]
 **promote_by_phone3_between** | **string**| Filter on PMO-PH3 using &#39;Between&#39; operator | [optional]
 **title_not_equal** | **string**| Filter on CTM-TTL using &#39;NotEqual&#39; operator | [optional]
 **title_less** | **string**| Filter on CTM-TTL using &#39;Less&#39; operator | [optional]
 **title_less_or_equal** | **string**| Filter on CTM-TTL using &#39;LessOrEqual&#39; operator | [optional]
 **title_greater** | **string**| Filter on CTM-TTL using &#39;Greater&#39; operator | [optional]
 **title_greater_or_equal** | **string**| Filter on CTM-TTL using &#39;GreaterOrEqual&#39; operator | [optional]
 **title_is_null** | **string**| Filter on CTM-TTL using &#39;IsNull&#39; operator | [optional]
 **title_is_not_null** | **string**| Filter on CTM-TTL using &#39;IsNotNull&#39; operator | [optional]
 **title_like** | **string**| Filter on CTM-TTL using &#39;Like&#39; operator | [optional]
 **title_not_like** | **string**| Filter on CTM-TTL using &#39;NotLike&#39; operator | [optional]
 **title_contains** | **string**| Filter on CTM-TTL using &#39;Contains&#39; operator | [optional]
 **title_not_contains** | **string**| Filter on CTM-TTL using &#39;NotContains&#39; operator | [optional]
 **title_starts_with** | **string**| Filter on CTM-TTL using &#39;StartsWith&#39; operator | [optional]
 **title_not_starts_with** | **string**| Filter on CTM-TTL using &#39;NotStartsWith&#39; operator | [optional]
 **title_ends_with** | **string**| Filter on CTM-TTL using &#39;EndsWith&#39; operator | [optional]
 **title_not_ends_with** | **string**| Filter on CTM-TTL using &#39;NotEndsWith&#39; operator | [optional]
 **title_in** | **string**| Filter on CTM-TTL using &#39;In&#39; operator | [optional]
 **title_between** | **string**| Filter on CTM-TTL using &#39;Between&#39; operator | [optional]
 **first_name_not_equal** | **string**| Filter on ATN-1ST using &#39;NotEqual&#39; operator | [optional]
 **first_name_less** | **string**| Filter on ATN-1ST using &#39;Less&#39; operator | [optional]
 **first_name_less_or_equal** | **string**| Filter on ATN-1ST using &#39;LessOrEqual&#39; operator | [optional]
 **first_name_greater** | **string**| Filter on ATN-1ST using &#39;Greater&#39; operator | [optional]
 **first_name_greater_or_equal** | **string**| Filter on ATN-1ST using &#39;GreaterOrEqual&#39; operator | [optional]
 **first_name_is_null** | **string**| Filter on ATN-1ST using &#39;IsNull&#39; operator | [optional]
 **first_name_is_not_null** | **string**| Filter on ATN-1ST using &#39;IsNotNull&#39; operator | [optional]
 **first_name_like** | **string**| Filter on ATN-1ST using &#39;Like&#39; operator | [optional]
 **first_name_not_like** | **string**| Filter on ATN-1ST using &#39;NotLike&#39; operator | [optional]
 **first_name_contains** | **string**| Filter on ATN-1ST using &#39;Contains&#39; operator | [optional]
 **first_name_not_contains** | **string**| Filter on ATN-1ST using &#39;NotContains&#39; operator | [optional]
 **first_name_starts_with** | **string**| Filter on ATN-1ST using &#39;StartsWith&#39; operator | [optional]
 **first_name_not_starts_with** | **string**| Filter on ATN-1ST using &#39;NotStartsWith&#39; operator | [optional]
 **first_name_ends_with** | **string**| Filter on ATN-1ST using &#39;EndsWith&#39; operator | [optional]
 **first_name_not_ends_with** | **string**| Filter on ATN-1ST using &#39;NotEndsWith&#39; operator | [optional]
 **first_name_in** | **string**| Filter on ATN-1ST using &#39;In&#39; operator | [optional]
 **first_name_between** | **string**| Filter on ATN-1ST using &#39;Between&#39; operator | [optional]
 **middle_initial_not_equal** | **string**| Filter on ATN-MID using &#39;NotEqual&#39; operator | [optional]
 **middle_initial_less** | **string**| Filter on ATN-MID using &#39;Less&#39; operator | [optional]
 **middle_initial_less_or_equal** | **string**| Filter on ATN-MID using &#39;LessOrEqual&#39; operator | [optional]
 **middle_initial_greater** | **string**| Filter on ATN-MID using &#39;Greater&#39; operator | [optional]
 **middle_initial_greater_or_equal** | **string**| Filter on ATN-MID using &#39;GreaterOrEqual&#39; operator | [optional]
 **middle_initial_is_null** | **string**| Filter on ATN-MID using &#39;IsNull&#39; operator | [optional]
 **middle_initial_is_not_null** | **string**| Filter on ATN-MID using &#39;IsNotNull&#39; operator | [optional]
 **middle_initial_like** | **string**| Filter on ATN-MID using &#39;Like&#39; operator | [optional]
 **middle_initial_not_like** | **string**| Filter on ATN-MID using &#39;NotLike&#39; operator | [optional]
 **middle_initial_contains** | **string**| Filter on ATN-MID using &#39;Contains&#39; operator | [optional]
 **middle_initial_not_contains** | **string**| Filter on ATN-MID using &#39;NotContains&#39; operator | [optional]
 **middle_initial_starts_with** | **string**| Filter on ATN-MID using &#39;StartsWith&#39; operator | [optional]
 **middle_initial_not_starts_with** | **string**| Filter on ATN-MID using &#39;NotStartsWith&#39; operator | [optional]
 **middle_initial_ends_with** | **string**| Filter on ATN-MID using &#39;EndsWith&#39; operator | [optional]
 **middle_initial_not_ends_with** | **string**| Filter on ATN-MID using &#39;NotEndsWith&#39; operator | [optional]
 **middle_initial_in** | **string**| Filter on ATN-MID using &#39;In&#39; operator | [optional]
 **middle_initial_between** | **string**| Filter on ATN-MID using &#39;Between&#39; operator | [optional]
 **last_name_not_equal** | **string**| Filter on ATN-END using &#39;NotEqual&#39; operator | [optional]
 **last_name_less** | **string**| Filter on ATN-END using &#39;Less&#39; operator | [optional]
 **last_name_less_or_equal** | **string**| Filter on ATN-END using &#39;LessOrEqual&#39; operator | [optional]
 **last_name_greater** | **string**| Filter on ATN-END using &#39;Greater&#39; operator | [optional]
 **last_name_greater_or_equal** | **string**| Filter on ATN-END using &#39;GreaterOrEqual&#39; operator | [optional]
 **last_name_is_null** | **string**| Filter on ATN-END using &#39;IsNull&#39; operator | [optional]
 **last_name_is_not_null** | **string**| Filter on ATN-END using &#39;IsNotNull&#39; operator | [optional]
 **last_name_like** | **string**| Filter on ATN-END using &#39;Like&#39; operator | [optional]
 **last_name_not_like** | **string**| Filter on ATN-END using &#39;NotLike&#39; operator | [optional]
 **last_name_contains** | **string**| Filter on ATN-END using &#39;Contains&#39; operator | [optional]
 **last_name_not_contains** | **string**| Filter on ATN-END using &#39;NotContains&#39; operator | [optional]
 **last_name_starts_with** | **string**| Filter on ATN-END using &#39;StartsWith&#39; operator | [optional]
 **last_name_not_starts_with** | **string**| Filter on ATN-END using &#39;NotStartsWith&#39; operator | [optional]
 **last_name_ends_with** | **string**| Filter on ATN-END using &#39;EndsWith&#39; operator | [optional]
 **last_name_not_ends_with** | **string**| Filter on ATN-END using &#39;NotEndsWith&#39; operator | [optional]
 **last_name_in** | **string**| Filter on ATN-END using &#39;In&#39; operator | [optional]
 **last_name_between** | **string**| Filter on ATN-END using &#39;Between&#39; operator | [optional]
 **suffix_not_equal** | **string**| Filter on CTM-SFX using &#39;NotEqual&#39; operator | [optional]
 **suffix_less** | **string**| Filter on CTM-SFX using &#39;Less&#39; operator | [optional]
 **suffix_less_or_equal** | **string**| Filter on CTM-SFX using &#39;LessOrEqual&#39; operator | [optional]
 **suffix_greater** | **string**| Filter on CTM-SFX using &#39;Greater&#39; operator | [optional]
 **suffix_greater_or_equal** | **string**| Filter on CTM-SFX using &#39;GreaterOrEqual&#39; operator | [optional]
 **suffix_is_null** | **string**| Filter on CTM-SFX using &#39;IsNull&#39; operator | [optional]
 **suffix_is_not_null** | **string**| Filter on CTM-SFX using &#39;IsNotNull&#39; operator | [optional]
 **suffix_like** | **string**| Filter on CTM-SFX using &#39;Like&#39; operator | [optional]
 **suffix_not_like** | **string**| Filter on CTM-SFX using &#39;NotLike&#39; operator | [optional]
 **suffix_contains** | **string**| Filter on CTM-SFX using &#39;Contains&#39; operator | [optional]
 **suffix_not_contains** | **string**| Filter on CTM-SFX using &#39;NotContains&#39; operator | [optional]
 **suffix_starts_with** | **string**| Filter on CTM-SFX using &#39;StartsWith&#39; operator | [optional]
 **suffix_not_starts_with** | **string**| Filter on CTM-SFX using &#39;NotStartsWith&#39; operator | [optional]
 **suffix_ends_with** | **string**| Filter on CTM-SFX using &#39;EndsWith&#39; operator | [optional]
 **suffix_not_ends_with** | **string**| Filter on CTM-SFX using &#39;NotEndsWith&#39; operator | [optional]
 **suffix_in** | **string**| Filter on CTM-SFX using &#39;In&#39; operator | [optional]
 **suffix_between** | **string**| Filter on CTM-SFX using &#39;Between&#39; operator | [optional]
 **job_title_not_equal** | **string**| Filter on JOB-TTL using &#39;NotEqual&#39; operator | [optional]
 **job_title_less** | **string**| Filter on JOB-TTL using &#39;Less&#39; operator | [optional]
 **job_title_less_or_equal** | **string**| Filter on JOB-TTL using &#39;LessOrEqual&#39; operator | [optional]
 **job_title_greater** | **string**| Filter on JOB-TTL using &#39;Greater&#39; operator | [optional]
 **job_title_greater_or_equal** | **string**| Filter on JOB-TTL using &#39;GreaterOrEqual&#39; operator | [optional]
 **job_title_is_null** | **string**| Filter on JOB-TTL using &#39;IsNull&#39; operator | [optional]
 **job_title_is_not_null** | **string**| Filter on JOB-TTL using &#39;IsNotNull&#39; operator | [optional]
 **job_title_like** | **string**| Filter on JOB-TTL using &#39;Like&#39; operator | [optional]
 **job_title_not_like** | **string**| Filter on JOB-TTL using &#39;NotLike&#39; operator | [optional]
 **job_title_contains** | **string**| Filter on JOB-TTL using &#39;Contains&#39; operator | [optional]
 **job_title_not_contains** | **string**| Filter on JOB-TTL using &#39;NotContains&#39; operator | [optional]
 **job_title_starts_with** | **string**| Filter on JOB-TTL using &#39;StartsWith&#39; operator | [optional]
 **job_title_not_starts_with** | **string**| Filter on JOB-TTL using &#39;NotStartsWith&#39; operator | [optional]
 **job_title_ends_with** | **string**| Filter on JOB-TTL using &#39;EndsWith&#39; operator | [optional]
 **job_title_not_ends_with** | **string**| Filter on JOB-TTL using &#39;NotEndsWith&#39; operator | [optional]
 **job_title_in** | **string**| Filter on JOB-TTL using &#39;In&#39; operator | [optional]
 **job_title_between** | **string**| Filter on JOB-TTL using &#39;Between&#39; operator | [optional]
 **job_position_code_not_equal** | **string**| Filter on CTM-POS using &#39;NotEqual&#39; operator | [optional]
 **job_position_code_less** | **string**| Filter on CTM-POS using &#39;Less&#39; operator | [optional]
 **job_position_code_less_or_equal** | **string**| Filter on CTM-POS using &#39;LessOrEqual&#39; operator | [optional]
 **job_position_code_greater** | **string**| Filter on CTM-POS using &#39;Greater&#39; operator | [optional]
 **job_position_code_greater_or_equal** | **string**| Filter on CTM-POS using &#39;GreaterOrEqual&#39; operator | [optional]
 **job_position_code_is_null** | **string**| Filter on CTM-POS using &#39;IsNull&#39; operator | [optional]
 **job_position_code_is_not_null** | **string**| Filter on CTM-POS using &#39;IsNotNull&#39; operator | [optional]
 **job_position_code_like** | **string**| Filter on CTM-POS using &#39;Like&#39; operator | [optional]
 **job_position_code_not_like** | **string**| Filter on CTM-POS using &#39;NotLike&#39; operator | [optional]
 **job_position_code_contains** | **string**| Filter on CTM-POS using &#39;Contains&#39; operator | [optional]
 **job_position_code_not_contains** | **string**| Filter on CTM-POS using &#39;NotContains&#39; operator | [optional]
 **job_position_code_starts_with** | **string**| Filter on CTM-POS using &#39;StartsWith&#39; operator | [optional]
 **job_position_code_not_starts_with** | **string**| Filter on CTM-POS using &#39;NotStartsWith&#39; operator | [optional]
 **job_position_code_ends_with** | **string**| Filter on CTM-POS using &#39;EndsWith&#39; operator | [optional]
 **job_position_code_not_ends_with** | **string**| Filter on CTM-POS using &#39;NotEndsWith&#39; operator | [optional]
 **job_position_code_in** | **string**| Filter on CTM-POS using &#39;In&#39; operator | [optional]
 **job_position_code_between** | **string**| Filter on CTM-POS using &#39;Between&#39; operator | [optional]
 **communication_preference_not_equal** | **string**| Filter on COMM-PRF using &#39;NotEqual&#39; operator | [optional]
 **communication_preference_less** | **string**| Filter on COMM-PRF using &#39;Less&#39; operator | [optional]
 **communication_preference_less_or_equal** | **string**| Filter on COMM-PRF using &#39;LessOrEqual&#39; operator | [optional]
 **communication_preference_greater** | **string**| Filter on COMM-PRF using &#39;Greater&#39; operator | [optional]
 **communication_preference_greater_or_equal** | **string**| Filter on COMM-PRF using &#39;GreaterOrEqual&#39; operator | [optional]
 **communication_preference_is_null** | **string**| Filter on COMM-PRF using &#39;IsNull&#39; operator | [optional]
 **communication_preference_is_not_null** | **string**| Filter on COMM-PRF using &#39;IsNotNull&#39; operator | [optional]
 **communication_preference_like** | **string**| Filter on COMM-PRF using &#39;Like&#39; operator | [optional]
 **communication_preference_not_like** | **string**| Filter on COMM-PRF using &#39;NotLike&#39; operator | [optional]
 **communication_preference_contains** | **string**| Filter on COMM-PRF using &#39;Contains&#39; operator | [optional]
 **communication_preference_not_contains** | **string**| Filter on COMM-PRF using &#39;NotContains&#39; operator | [optional]
 **communication_preference_starts_with** | **string**| Filter on COMM-PRF using &#39;StartsWith&#39; operator | [optional]
 **communication_preference_not_starts_with** | **string**| Filter on COMM-PRF using &#39;NotStartsWith&#39; operator | [optional]
 **communication_preference_ends_with** | **string**| Filter on COMM-PRF using &#39;EndsWith&#39; operator | [optional]
 **communication_preference_not_ends_with** | **string**| Filter on COMM-PRF using &#39;NotEndsWith&#39; operator | [optional]
 **communication_preference_in** | **string**| Filter on COMM-PRF using &#39;In&#39; operator | [optional]
 **communication_preference_between** | **string**| Filter on COMM-PRF using &#39;Between&#39; operator | [optional]
 **source_promotion_not_equal** | **string**| Filter on CTM-SRC using &#39;NotEqual&#39; operator | [optional]
 **source_promotion_less** | **string**| Filter on CTM-SRC using &#39;Less&#39; operator | [optional]
 **source_promotion_less_or_equal** | **string**| Filter on CTM-SRC using &#39;LessOrEqual&#39; operator | [optional]
 **source_promotion_greater** | **string**| Filter on CTM-SRC using &#39;Greater&#39; operator | [optional]
 **source_promotion_greater_or_equal** | **string**| Filter on CTM-SRC using &#39;GreaterOrEqual&#39; operator | [optional]
 **source_promotion_is_null** | **string**| Filter on CTM-SRC using &#39;IsNull&#39; operator | [optional]
 **source_promotion_is_not_null** | **string**| Filter on CTM-SRC using &#39;IsNotNull&#39; operator | [optional]
 **source_promotion_like** | **string**| Filter on CTM-SRC using &#39;Like&#39; operator | [optional]
 **source_promotion_not_like** | **string**| Filter on CTM-SRC using &#39;NotLike&#39; operator | [optional]
 **source_promotion_contains** | **string**| Filter on CTM-SRC using &#39;Contains&#39; operator | [optional]
 **source_promotion_not_contains** | **string**| Filter on CTM-SRC using &#39;NotContains&#39; operator | [optional]
 **source_promotion_starts_with** | **string**| Filter on CTM-SRC using &#39;StartsWith&#39; operator | [optional]
 **source_promotion_not_starts_with** | **string**| Filter on CTM-SRC using &#39;NotStartsWith&#39; operator | [optional]
 **source_promotion_ends_with** | **string**| Filter on CTM-SRC using &#39;EndsWith&#39; operator | [optional]
 **source_promotion_not_ends_with** | **string**| Filter on CTM-SRC using &#39;NotEndsWith&#39; operator | [optional]
 **source_promotion_in** | **string**| Filter on CTM-SRC using &#39;In&#39; operator | [optional]
 **source_promotion_between** | **string**| Filter on CTM-SRC using &#39;Between&#39; operator | [optional]
 **address_code_not_equal** | **string**| Filter on ADR-CDE using &#39;NotEqual&#39; operator | [optional]
 **address_code_less** | **string**| Filter on ADR-CDE using &#39;Less&#39; operator | [optional]
 **address_code_less_or_equal** | **string**| Filter on ADR-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **address_code_greater** | **string**| Filter on ADR-CDE using &#39;Greater&#39; operator | [optional]
 **address_code_greater_or_equal** | **string**| Filter on ADR-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **address_code_is_null** | **string**| Filter on ADR-CDE using &#39;IsNull&#39; operator | [optional]
 **address_code_is_not_null** | **string**| Filter on ADR-CDE using &#39;IsNotNull&#39; operator | [optional]
 **address_code_like** | **string**| Filter on ADR-CDE using &#39;Like&#39; operator | [optional]
 **address_code_not_like** | **string**| Filter on ADR-CDE using &#39;NotLike&#39; operator | [optional]
 **address_code_contains** | **string**| Filter on ADR-CDE using &#39;Contains&#39; operator | [optional]
 **address_code_not_contains** | **string**| Filter on ADR-CDE using &#39;NotContains&#39; operator | [optional]
 **address_code_starts_with** | **string**| Filter on ADR-CDE using &#39;StartsWith&#39; operator | [optional]
 **address_code_not_starts_with** | **string**| Filter on ADR-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **address_code_ends_with** | **string**| Filter on ADR-CDE using &#39;EndsWith&#39; operator | [optional]
 **address_code_not_ends_with** | **string**| Filter on ADR-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **address_code_in** | **string**| Filter on ADR-CDE using &#39;In&#39; operator | [optional]
 **address_code_between** | **string**| Filter on ADR-CDE using &#39;Between&#39; operator | [optional]
 **default_currency_not_equal** | **string**| Filter on BIL-CUR using &#39;NotEqual&#39; operator | [optional]
 **default_currency_less** | **string**| Filter on BIL-CUR using &#39;Less&#39; operator | [optional]
 **default_currency_less_or_equal** | **string**| Filter on BIL-CUR using &#39;LessOrEqual&#39; operator | [optional]
 **default_currency_greater** | **string**| Filter on BIL-CUR using &#39;Greater&#39; operator | [optional]
 **default_currency_greater_or_equal** | **string**| Filter on BIL-CUR using &#39;GreaterOrEqual&#39; operator | [optional]
 **default_currency_is_null** | **string**| Filter on BIL-CUR using &#39;IsNull&#39; operator | [optional]
 **default_currency_is_not_null** | **string**| Filter on BIL-CUR using &#39;IsNotNull&#39; operator | [optional]
 **default_currency_like** | **string**| Filter on BIL-CUR using &#39;Like&#39; operator | [optional]
 **default_currency_not_like** | **string**| Filter on BIL-CUR using &#39;NotLike&#39; operator | [optional]
 **default_currency_contains** | **string**| Filter on BIL-CUR using &#39;Contains&#39; operator | [optional]
 **default_currency_not_contains** | **string**| Filter on BIL-CUR using &#39;NotContains&#39; operator | [optional]
 **default_currency_starts_with** | **string**| Filter on BIL-CUR using &#39;StartsWith&#39; operator | [optional]
 **default_currency_not_starts_with** | **string**| Filter on BIL-CUR using &#39;NotStartsWith&#39; operator | [optional]
 **default_currency_ends_with** | **string**| Filter on BIL-CUR using &#39;EndsWith&#39; operator | [optional]
 **default_currency_not_ends_with** | **string**| Filter on BIL-CUR using &#39;NotEndsWith&#39; operator | [optional]
 **default_currency_in** | **string**| Filter on BIL-CUR using &#39;In&#39; operator | [optional]
 **default_currency_between** | **string**| Filter on BIL-CUR using &#39;Between&#39; operator | [optional]
 **department_not_equal** | **string**| Filter on DPT-NME using &#39;NotEqual&#39; operator | [optional]
 **department_less** | **string**| Filter on DPT-NME using &#39;Less&#39; operator | [optional]
 **department_less_or_equal** | **string**| Filter on DPT-NME using &#39;LessOrEqual&#39; operator | [optional]
 **department_greater** | **string**| Filter on DPT-NME using &#39;Greater&#39; operator | [optional]
 **department_greater_or_equal** | **string**| Filter on DPT-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **department_is_null** | **string**| Filter on DPT-NME using &#39;IsNull&#39; operator | [optional]
 **department_is_not_null** | **string**| Filter on DPT-NME using &#39;IsNotNull&#39; operator | [optional]
 **department_like** | **string**| Filter on DPT-NME using &#39;Like&#39; operator | [optional]
 **department_not_like** | **string**| Filter on DPT-NME using &#39;NotLike&#39; operator | [optional]
 **department_contains** | **string**| Filter on DPT-NME using &#39;Contains&#39; operator | [optional]
 **department_not_contains** | **string**| Filter on DPT-NME using &#39;NotContains&#39; operator | [optional]
 **department_starts_with** | **string**| Filter on DPT-NME using &#39;StartsWith&#39; operator | [optional]
 **department_not_starts_with** | **string**| Filter on DPT-NME using &#39;NotStartsWith&#39; operator | [optional]
 **department_ends_with** | **string**| Filter on DPT-NME using &#39;EndsWith&#39; operator | [optional]
 **department_not_ends_with** | **string**| Filter on DPT-NME using &#39;NotEndsWith&#39; operator | [optional]
 **department_in** | **string**| Filter on DPT-NME using &#39;In&#39; operator | [optional]
 **department_between** | **string**| Filter on DPT-NME using &#39;Between&#39; operator | [optional]
 **county_not_equal** | **string**| Filter on CTM-CNTY using &#39;NotEqual&#39; operator | [optional]
 **county_less** | **string**| Filter on CTM-CNTY using &#39;Less&#39; operator | [optional]
 **county_less_or_equal** | **string**| Filter on CTM-CNTY using &#39;LessOrEqual&#39; operator | [optional]
 **county_greater** | **string**| Filter on CTM-CNTY using &#39;Greater&#39; operator | [optional]
 **county_greater_or_equal** | **string**| Filter on CTM-CNTY using &#39;GreaterOrEqual&#39; operator | [optional]
 **county_is_null** | **string**| Filter on CTM-CNTY using &#39;IsNull&#39; operator | [optional]
 **county_is_not_null** | **string**| Filter on CTM-CNTY using &#39;IsNotNull&#39; operator | [optional]
 **county_like** | **string**| Filter on CTM-CNTY using &#39;Like&#39; operator | [optional]
 **county_not_like** | **string**| Filter on CTM-CNTY using &#39;NotLike&#39; operator | [optional]
 **county_contains** | **string**| Filter on CTM-CNTY using &#39;Contains&#39; operator | [optional]
 **county_not_contains** | **string**| Filter on CTM-CNTY using &#39;NotContains&#39; operator | [optional]
 **county_starts_with** | **string**| Filter on CTM-CNTY using &#39;StartsWith&#39; operator | [optional]
 **county_not_starts_with** | **string**| Filter on CTM-CNTY using &#39;NotStartsWith&#39; operator | [optional]
 **county_ends_with** | **string**| Filter on CTM-CNTY using &#39;EndsWith&#39; operator | [optional]
 **county_not_ends_with** | **string**| Filter on CTM-CNTY using &#39;NotEndsWith&#39; operator | [optional]
 **county_in** | **string**| Filter on CTM-CNTY using &#39;In&#39; operator | [optional]
 **county_between** | **string**| Filter on CTM-CNTY using &#39;Between&#39; operator | [optional]
 **pin_code_not_equal** | **string**| Filter on PIN-CODE using &#39;NotEqual&#39; operator | [optional]
 **pin_code_less** | **string**| Filter on PIN-CODE using &#39;Less&#39; operator | [optional]
 **pin_code_less_or_equal** | **string**| Filter on PIN-CODE using &#39;LessOrEqual&#39; operator | [optional]
 **pin_code_greater** | **string**| Filter on PIN-CODE using &#39;Greater&#39; operator | [optional]
 **pin_code_greater_or_equal** | **string**| Filter on PIN-CODE using &#39;GreaterOrEqual&#39; operator | [optional]
 **pin_code_is_null** | **string**| Filter on PIN-CODE using &#39;IsNull&#39; operator | [optional]
 **pin_code_is_not_null** | **string**| Filter on PIN-CODE using &#39;IsNotNull&#39; operator | [optional]
 **pin_code_like** | **string**| Filter on PIN-CODE using &#39;Like&#39; operator | [optional]
 **pin_code_not_like** | **string**| Filter on PIN-CODE using &#39;NotLike&#39; operator | [optional]
 **pin_code_contains** | **string**| Filter on PIN-CODE using &#39;Contains&#39; operator | [optional]
 **pin_code_not_contains** | **string**| Filter on PIN-CODE using &#39;NotContains&#39; operator | [optional]
 **pin_code_starts_with** | **string**| Filter on PIN-CODE using &#39;StartsWith&#39; operator | [optional]
 **pin_code_not_starts_with** | **string**| Filter on PIN-CODE using &#39;NotStartsWith&#39; operator | [optional]
 **pin_code_ends_with** | **string**| Filter on PIN-CODE using &#39;EndsWith&#39; operator | [optional]
 **pin_code_not_ends_with** | **string**| Filter on PIN-CODE using &#39;NotEndsWith&#39; operator | [optional]
 **pin_code_in** | **string**| Filter on PIN-CODE using &#39;In&#39; operator | [optional]
 **pin_code_between** | **string**| Filter on PIN-CODE using &#39;Between&#39; operator | [optional]
 **social_security_number_not_equal** | **string**| Filter on SOC-SEC using &#39;NotEqual&#39; operator | [optional]
 **social_security_number_less** | **string**| Filter on SOC-SEC using &#39;Less&#39; operator | [optional]
 **social_security_number_less_or_equal** | **string**| Filter on SOC-SEC using &#39;LessOrEqual&#39; operator | [optional]
 **social_security_number_greater** | **string**| Filter on SOC-SEC using &#39;Greater&#39; operator | [optional]
 **social_security_number_greater_or_equal** | **string**| Filter on SOC-SEC using &#39;GreaterOrEqual&#39; operator | [optional]
 **social_security_number_is_null** | **string**| Filter on SOC-SEC using &#39;IsNull&#39; operator | [optional]
 **social_security_number_is_not_null** | **string**| Filter on SOC-SEC using &#39;IsNotNull&#39; operator | [optional]
 **social_security_number_like** | **string**| Filter on SOC-SEC using &#39;Like&#39; operator | [optional]
 **social_security_number_not_like** | **string**| Filter on SOC-SEC using &#39;NotLike&#39; operator | [optional]
 **social_security_number_contains** | **string**| Filter on SOC-SEC using &#39;Contains&#39; operator | [optional]
 **social_security_number_not_contains** | **string**| Filter on SOC-SEC using &#39;NotContains&#39; operator | [optional]
 **social_security_number_starts_with** | **string**| Filter on SOC-SEC using &#39;StartsWith&#39; operator | [optional]
 **social_security_number_not_starts_with** | **string**| Filter on SOC-SEC using &#39;NotStartsWith&#39; operator | [optional]
 **social_security_number_ends_with** | **string**| Filter on SOC-SEC using &#39;EndsWith&#39; operator | [optional]
 **social_security_number_not_ends_with** | **string**| Filter on SOC-SEC using &#39;NotEndsWith&#39; operator | [optional]
 **social_security_number_in** | **string**| Filter on SOC-SEC using &#39;In&#39; operator | [optional]
 **social_security_number_between** | **string**| Filter on SOC-SEC using &#39;Between&#39; operator | [optional]
 **street_name_not_equal** | **string**| Filter on FSTR-NME using &#39;NotEqual&#39; operator | [optional]
 **street_name_less** | **string**| Filter on FSTR-NME using &#39;Less&#39; operator | [optional]
 **street_name_less_or_equal** | **string**| Filter on FSTR-NME using &#39;LessOrEqual&#39; operator | [optional]
 **street_name_greater** | **string**| Filter on FSTR-NME using &#39;Greater&#39; operator | [optional]
 **street_name_greater_or_equal** | **string**| Filter on FSTR-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **street_name_is_null** | **string**| Filter on FSTR-NME using &#39;IsNull&#39; operator | [optional]
 **street_name_is_not_null** | **string**| Filter on FSTR-NME using &#39;IsNotNull&#39; operator | [optional]
 **street_name_like** | **string**| Filter on FSTR-NME using &#39;Like&#39; operator | [optional]
 **street_name_not_like** | **string**| Filter on FSTR-NME using &#39;NotLike&#39; operator | [optional]
 **street_name_contains** | **string**| Filter on FSTR-NME using &#39;Contains&#39; operator | [optional]
 **street_name_not_contains** | **string**| Filter on FSTR-NME using &#39;NotContains&#39; operator | [optional]
 **street_name_starts_with** | **string**| Filter on FSTR-NME using &#39;StartsWith&#39; operator | [optional]
 **street_name_not_starts_with** | **string**| Filter on FSTR-NME using &#39;NotStartsWith&#39; operator | [optional]
 **street_name_ends_with** | **string**| Filter on FSTR-NME using &#39;EndsWith&#39; operator | [optional]
 **street_name_not_ends_with** | **string**| Filter on FSTR-NME using &#39;NotEndsWith&#39; operator | [optional]
 **street_name_in** | **string**| Filter on FSTR-NME using &#39;In&#39; operator | [optional]
 **street_name_between** | **string**| Filter on FSTR-NME using &#39;Between&#39; operator | [optional]
 **street_type_not_equal** | **string**| Filter on STR-TYP using &#39;NotEqual&#39; operator | [optional]
 **street_type_less** | **string**| Filter on STR-TYP using &#39;Less&#39; operator | [optional]
 **street_type_less_or_equal** | **string**| Filter on STR-TYP using &#39;LessOrEqual&#39; operator | [optional]
 **street_type_greater** | **string**| Filter on STR-TYP using &#39;Greater&#39; operator | [optional]
 **street_type_greater_or_equal** | **string**| Filter on STR-TYP using &#39;GreaterOrEqual&#39; operator | [optional]
 **street_type_is_null** | **string**| Filter on STR-TYP using &#39;IsNull&#39; operator | [optional]
 **street_type_is_not_null** | **string**| Filter on STR-TYP using &#39;IsNotNull&#39; operator | [optional]
 **street_type_like** | **string**| Filter on STR-TYP using &#39;Like&#39; operator | [optional]
 **street_type_not_like** | **string**| Filter on STR-TYP using &#39;NotLike&#39; operator | [optional]
 **street_type_contains** | **string**| Filter on STR-TYP using &#39;Contains&#39; operator | [optional]
 **street_type_not_contains** | **string**| Filter on STR-TYP using &#39;NotContains&#39; operator | [optional]
 **street_type_starts_with** | **string**| Filter on STR-TYP using &#39;StartsWith&#39; operator | [optional]
 **street_type_not_starts_with** | **string**| Filter on STR-TYP using &#39;NotStartsWith&#39; operator | [optional]
 **street_type_ends_with** | **string**| Filter on STR-TYP using &#39;EndsWith&#39; operator | [optional]
 **street_type_not_ends_with** | **string**| Filter on STR-TYP using &#39;NotEndsWith&#39; operator | [optional]
 **street_type_in** | **string**| Filter on STR-TYP using &#39;In&#39; operator | [optional]
 **street_type_between** | **string**| Filter on STR-TYP using &#39;Between&#39; operator | [optional]
 **last_updated_on_not_equal** | **string**| Filter on UPD-DTE using &#39;NotEqual&#39; operator | [optional]
 **last_updated_on_less** | **string**| Filter on UPD-DTE using &#39;Less&#39; operator | [optional]
 **last_updated_on_less_or_equal** | **string**| Filter on UPD-DTE using &#39;LessOrEqual&#39; operator | [optional]
 **last_updated_on_greater** | **string**| Filter on UPD-DTE using &#39;Greater&#39; operator | [optional]
 **last_updated_on_greater_or_equal** | **string**| Filter on UPD-DTE using &#39;GreaterOrEqual&#39; operator | [optional]
 **last_updated_on_is_null** | **string**| Filter on UPD-DTE using &#39;IsNull&#39; operator | [optional]
 **last_updated_on_is_not_null** | **string**| Filter on UPD-DTE using &#39;IsNotNull&#39; operator | [optional]
 **last_updated_on_like** | **string**| Filter on UPD-DTE using &#39;Like&#39; operator | [optional]
 **last_updated_on_not_like** | **string**| Filter on UPD-DTE using &#39;NotLike&#39; operator | [optional]
 **last_updated_on_contains** | **string**| Filter on UPD-DTE using &#39;Contains&#39; operator | [optional]
 **last_updated_on_not_contains** | **string**| Filter on UPD-DTE using &#39;NotContains&#39; operator | [optional]
 **last_updated_on_starts_with** | **string**| Filter on UPD-DTE using &#39;StartsWith&#39; operator | [optional]
 **last_updated_on_not_starts_with** | **string**| Filter on UPD-DTE using &#39;NotStartsWith&#39; operator | [optional]
 **last_updated_on_ends_with** | **string**| Filter on UPD-DTE using &#39;EndsWith&#39; operator | [optional]
 **last_updated_on_not_ends_with** | **string**| Filter on UPD-DTE using &#39;NotEndsWith&#39; operator | [optional]
 **last_updated_on_in** | **string**| Filter on UPD-DTE using &#39;In&#39; operator | [optional]
 **last_updated_on_between** | **string**| Filter on UPD-DTE using &#39;Between&#39; operator | [optional]
 **item_number_not_equal** | **string**| Filter on ITM-NUM using &#39;NotEqual&#39; operator | [optional]
 **item_number_less** | **string**| Filter on ITM-NUM using &#39;Less&#39; operator | [optional]
 **item_number_less_or_equal** | **string**| Filter on ITM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **item_number_greater** | **string**| Filter on ITM-NUM using &#39;Greater&#39; operator | [optional]
 **item_number_greater_or_equal** | **string**| Filter on ITM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **item_number_is_null** | **string**| Filter on ITM-NUM using &#39;IsNull&#39; operator | [optional]
 **item_number_is_not_null** | **string**| Filter on ITM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **item_number_like** | **string**| Filter on ITM-NUM using &#39;Like&#39; operator | [optional]
 **item_number_not_like** | **string**| Filter on ITM-NUM using &#39;NotLike&#39; operator | [optional]
 **item_number_contains** | **string**| Filter on ITM-NUM using &#39;Contains&#39; operator | [optional]
 **item_number_not_contains** | **string**| Filter on ITM-NUM using &#39;NotContains&#39; operator | [optional]
 **item_number_starts_with** | **string**| Filter on ITM-NUM using &#39;StartsWith&#39; operator | [optional]
 **item_number_not_starts_with** | **string**| Filter on ITM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **item_number_ends_with** | **string**| Filter on ITM-NUM using &#39;EndsWith&#39; operator | [optional]
 **item_number_not_ends_with** | **string**| Filter on ITM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **item_number_in** | **string**| Filter on ITM-NUM using &#39;In&#39; operator | [optional]
 **item_number_between** | **string**| Filter on ITM-NUM using &#39;Between&#39; operator | [optional]
 **last_name_soundex_not_equal** | **string**| Filter on END-SNDX using &#39;NotEqual&#39; operator | [optional]
 **last_name_soundex_less** | **string**| Filter on END-SNDX using &#39;Less&#39; operator | [optional]
 **last_name_soundex_less_or_equal** | **string**| Filter on END-SNDX using &#39;LessOrEqual&#39; operator | [optional]
 **last_name_soundex_greater** | **string**| Filter on END-SNDX using &#39;Greater&#39; operator | [optional]
 **last_name_soundex_greater_or_equal** | **string**| Filter on END-SNDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **last_name_soundex_is_null** | **string**| Filter on END-SNDX using &#39;IsNull&#39; operator | [optional]
 **last_name_soundex_is_not_null** | **string**| Filter on END-SNDX using &#39;IsNotNull&#39; operator | [optional]
 **last_name_soundex_like** | **string**| Filter on END-SNDX using &#39;Like&#39; operator | [optional]
 **last_name_soundex_not_like** | **string**| Filter on END-SNDX using &#39;NotLike&#39; operator | [optional]
 **last_name_soundex_contains** | **string**| Filter on END-SNDX using &#39;Contains&#39; operator | [optional]
 **last_name_soundex_not_contains** | **string**| Filter on END-SNDX using &#39;NotContains&#39; operator | [optional]
 **last_name_soundex_starts_with** | **string**| Filter on END-SNDX using &#39;StartsWith&#39; operator | [optional]
 **last_name_soundex_not_starts_with** | **string**| Filter on END-SNDX using &#39;NotStartsWith&#39; operator | [optional]
 **last_name_soundex_ends_with** | **string**| Filter on END-SNDX using &#39;EndsWith&#39; operator | [optional]
 **last_name_soundex_not_ends_with** | **string**| Filter on END-SNDX using &#39;NotEndsWith&#39; operator | [optional]
 **last_name_soundex_in** | **string**| Filter on END-SNDX using &#39;In&#39; operator | [optional]
 **last_name_soundex_between** | **string**| Filter on END-SNDX using &#39;Between&#39; operator | [optional]
 **company_name_soundex_not_equal** | **string**| Filter on CMP-SNDX using &#39;NotEqual&#39; operator | [optional]
 **company_name_soundex_less** | **string**| Filter on CMP-SNDX using &#39;Less&#39; operator | [optional]
 **company_name_soundex_less_or_equal** | **string**| Filter on CMP-SNDX using &#39;LessOrEqual&#39; operator | [optional]
 **company_name_soundex_greater** | **string**| Filter on CMP-SNDX using &#39;Greater&#39; operator | [optional]
 **company_name_soundex_greater_or_equal** | **string**| Filter on CMP-SNDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **company_name_soundex_is_null** | **string**| Filter on CMP-SNDX using &#39;IsNull&#39; operator | [optional]
 **company_name_soundex_is_not_null** | **string**| Filter on CMP-SNDX using &#39;IsNotNull&#39; operator | [optional]
 **company_name_soundex_like** | **string**| Filter on CMP-SNDX using &#39;Like&#39; operator | [optional]
 **company_name_soundex_not_like** | **string**| Filter on CMP-SNDX using &#39;NotLike&#39; operator | [optional]
 **company_name_soundex_contains** | **string**| Filter on CMP-SNDX using &#39;Contains&#39; operator | [optional]
 **company_name_soundex_not_contains** | **string**| Filter on CMP-SNDX using &#39;NotContains&#39; operator | [optional]
 **company_name_soundex_starts_with** | **string**| Filter on CMP-SNDX using &#39;StartsWith&#39; operator | [optional]
 **company_name_soundex_not_starts_with** | **string**| Filter on CMP-SNDX using &#39;NotStartsWith&#39; operator | [optional]
 **company_name_soundex_ends_with** | **string**| Filter on CMP-SNDX using &#39;EndsWith&#39; operator | [optional]
 **company_name_soundex_not_ends_with** | **string**| Filter on CMP-SNDX using &#39;NotEndsWith&#39; operator | [optional]
 **company_name_soundex_in** | **string**| Filter on CMP-SNDX using &#39;In&#39; operator | [optional]
 **company_name_soundex_between** | **string**| Filter on CMP-SNDX using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCustomer**](../Model/SearchResultCustomer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSearchAddresses**
> \Swagger\Client\Model\SearchResultCustomerAddress customerSearchAddresses($customer_number, $full_name, $email_address, $phone_number, $phone_number2, $phone_number3, $street1, $street2, $street3, $city, $state, $country_code, $postal_code, $fax_number, $company, $customer_type, $promote_flag, $promote_by_partners, $promote_by_phone, $promote_by_fax, $promote_by_email, $promote_by_mail, $promote_by_sms, $promote_by_phone1, $promote_by_phone2, $promote_by_phone3, $title, $first_name, $middle_initial, $last_name, $suffix, $job_title, $job_position_code, $communication_preference, $source_promotion, $address_code, $default_currency, $department, $county, $pin_code, $social_security_number, $street_name, $street_type, $last_updated_on, $item_number, $last_name_soundex, $company_name_soundex, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $full_name_not_equal, $full_name_less, $full_name_less_or_equal, $full_name_greater, $full_name_greater_or_equal, $full_name_is_null, $full_name_is_not_null, $full_name_like, $full_name_not_like, $full_name_contains, $full_name_not_contains, $full_name_starts_with, $full_name_not_starts_with, $full_name_ends_with, $full_name_not_ends_with, $full_name_in, $full_name_between, $email_address_not_equal, $email_address_less, $email_address_less_or_equal, $email_address_greater, $email_address_greater_or_equal, $email_address_is_null, $email_address_is_not_null, $email_address_like, $email_address_not_like, $email_address_contains, $email_address_not_contains, $email_address_starts_with, $email_address_not_starts_with, $email_address_ends_with, $email_address_not_ends_with, $email_address_in, $email_address_between, $phone_number_not_equal, $phone_number_less, $phone_number_less_or_equal, $phone_number_greater, $phone_number_greater_or_equal, $phone_number_is_null, $phone_number_is_not_null, $phone_number_like, $phone_number_not_like, $phone_number_contains, $phone_number_not_contains, $phone_number_starts_with, $phone_number_not_starts_with, $phone_number_ends_with, $phone_number_not_ends_with, $phone_number_in, $phone_number_between, $phone_number2_not_equal, $phone_number2_less, $phone_number2_less_or_equal, $phone_number2_greater, $phone_number2_greater_or_equal, $phone_number2_is_null, $phone_number2_is_not_null, $phone_number2_like, $phone_number2_not_like, $phone_number2_contains, $phone_number2_not_contains, $phone_number2_starts_with, $phone_number2_not_starts_with, $phone_number2_ends_with, $phone_number2_not_ends_with, $phone_number2_in, $phone_number2_between, $phone_number3_not_equal, $phone_number3_less, $phone_number3_less_or_equal, $phone_number3_greater, $phone_number3_greater_or_equal, $phone_number3_is_null, $phone_number3_is_not_null, $phone_number3_like, $phone_number3_not_like, $phone_number3_contains, $phone_number3_not_contains, $phone_number3_starts_with, $phone_number3_not_starts_with, $phone_number3_ends_with, $phone_number3_not_ends_with, $phone_number3_in, $phone_number3_between, $street1_not_equal, $street1_less, $street1_less_or_equal, $street1_greater, $street1_greater_or_equal, $street1_is_null, $street1_is_not_null, $street1_like, $street1_not_like, $street1_contains, $street1_not_contains, $street1_starts_with, $street1_not_starts_with, $street1_ends_with, $street1_not_ends_with, $street1_in, $street1_between, $street2_not_equal, $street2_less, $street2_less_or_equal, $street2_greater, $street2_greater_or_equal, $street2_is_null, $street2_is_not_null, $street2_like, $street2_not_like, $street2_contains, $street2_not_contains, $street2_starts_with, $street2_not_starts_with, $street2_ends_with, $street2_not_ends_with, $street2_in, $street2_between, $street3_not_equal, $street3_less, $street3_less_or_equal, $street3_greater, $street3_greater_or_equal, $street3_is_null, $street3_is_not_null, $street3_like, $street3_not_like, $street3_contains, $street3_not_contains, $street3_starts_with, $street3_not_starts_with, $street3_ends_with, $street3_not_ends_with, $street3_in, $street3_between, $city_not_equal, $city_less, $city_less_or_equal, $city_greater, $city_greater_or_equal, $city_is_null, $city_is_not_null, $city_like, $city_not_like, $city_contains, $city_not_contains, $city_starts_with, $city_not_starts_with, $city_ends_with, $city_not_ends_with, $city_in, $city_between, $state_not_equal, $state_less, $state_less_or_equal, $state_greater, $state_greater_or_equal, $state_is_null, $state_is_not_null, $state_like, $state_not_like, $state_contains, $state_not_contains, $state_starts_with, $state_not_starts_with, $state_ends_with, $state_not_ends_with, $state_in, $state_between, $country_code_not_equal, $country_code_less, $country_code_less_or_equal, $country_code_greater, $country_code_greater_or_equal, $country_code_is_null, $country_code_is_not_null, $country_code_like, $country_code_not_like, $country_code_contains, $country_code_not_contains, $country_code_starts_with, $country_code_not_starts_with, $country_code_ends_with, $country_code_not_ends_with, $country_code_in, $country_code_between, $postal_code_not_equal, $postal_code_less, $postal_code_less_or_equal, $postal_code_greater, $postal_code_greater_or_equal, $postal_code_is_null, $postal_code_is_not_null, $postal_code_like, $postal_code_not_like, $postal_code_contains, $postal_code_not_contains, $postal_code_starts_with, $postal_code_not_starts_with, $postal_code_ends_with, $postal_code_not_ends_with, $postal_code_in, $postal_code_between, $fax_number_not_equal, $fax_number_less, $fax_number_less_or_equal, $fax_number_greater, $fax_number_greater_or_equal, $fax_number_is_null, $fax_number_is_not_null, $fax_number_like, $fax_number_not_like, $fax_number_contains, $fax_number_not_contains, $fax_number_starts_with, $fax_number_not_starts_with, $fax_number_ends_with, $fax_number_not_ends_with, $fax_number_in, $fax_number_between, $company_not_equal, $company_less, $company_less_or_equal, $company_greater, $company_greater_or_equal, $company_is_null, $company_is_not_null, $company_like, $company_not_like, $company_contains, $company_not_contains, $company_starts_with, $company_not_starts_with, $company_ends_with, $company_not_ends_with, $company_in, $company_between, $customer_type_not_equal, $customer_type_less, $customer_type_less_or_equal, $customer_type_greater, $customer_type_greater_or_equal, $customer_type_is_null, $customer_type_is_not_null, $customer_type_like, $customer_type_not_like, $customer_type_contains, $customer_type_not_contains, $customer_type_starts_with, $customer_type_not_starts_with, $customer_type_ends_with, $customer_type_not_ends_with, $customer_type_in, $customer_type_between, $promote_flag_not_equal, $promote_flag_less, $promote_flag_less_or_equal, $promote_flag_greater, $promote_flag_greater_or_equal, $promote_flag_is_null, $promote_flag_is_not_null, $promote_flag_like, $promote_flag_not_like, $promote_flag_contains, $promote_flag_not_contains, $promote_flag_starts_with, $promote_flag_not_starts_with, $promote_flag_ends_with, $promote_flag_not_ends_with, $promote_flag_in, $promote_flag_between, $promote_by_partners_not_equal, $promote_by_partners_less, $promote_by_partners_less_or_equal, $promote_by_partners_greater, $promote_by_partners_greater_or_equal, $promote_by_partners_is_null, $promote_by_partners_is_not_null, $promote_by_partners_like, $promote_by_partners_not_like, $promote_by_partners_contains, $promote_by_partners_not_contains, $promote_by_partners_starts_with, $promote_by_partners_not_starts_with, $promote_by_partners_ends_with, $promote_by_partners_not_ends_with, $promote_by_partners_in, $promote_by_partners_between, $promote_by_phone_not_equal, $promote_by_phone_less, $promote_by_phone_less_or_equal, $promote_by_phone_greater, $promote_by_phone_greater_or_equal, $promote_by_phone_is_null, $promote_by_phone_is_not_null, $promote_by_phone_like, $promote_by_phone_not_like, $promote_by_phone_contains, $promote_by_phone_not_contains, $promote_by_phone_starts_with, $promote_by_phone_not_starts_with, $promote_by_phone_ends_with, $promote_by_phone_not_ends_with, $promote_by_phone_in, $promote_by_phone_between, $promote_by_fax_not_equal, $promote_by_fax_less, $promote_by_fax_less_or_equal, $promote_by_fax_greater, $promote_by_fax_greater_or_equal, $promote_by_fax_is_null, $promote_by_fax_is_not_null, $promote_by_fax_like, $promote_by_fax_not_like, $promote_by_fax_contains, $promote_by_fax_not_contains, $promote_by_fax_starts_with, $promote_by_fax_not_starts_with, $promote_by_fax_ends_with, $promote_by_fax_not_ends_with, $promote_by_fax_in, $promote_by_fax_between, $promote_by_email_not_equal, $promote_by_email_less, $promote_by_email_less_or_equal, $promote_by_email_greater, $promote_by_email_greater_or_equal, $promote_by_email_is_null, $promote_by_email_is_not_null, $promote_by_email_like, $promote_by_email_not_like, $promote_by_email_contains, $promote_by_email_not_contains, $promote_by_email_starts_with, $promote_by_email_not_starts_with, $promote_by_email_ends_with, $promote_by_email_not_ends_with, $promote_by_email_in, $promote_by_email_between, $promote_by_mail_not_equal, $promote_by_mail_less, $promote_by_mail_less_or_equal, $promote_by_mail_greater, $promote_by_mail_greater_or_equal, $promote_by_mail_is_null, $promote_by_mail_is_not_null, $promote_by_mail_like, $promote_by_mail_not_like, $promote_by_mail_contains, $promote_by_mail_not_contains, $promote_by_mail_starts_with, $promote_by_mail_not_starts_with, $promote_by_mail_ends_with, $promote_by_mail_not_ends_with, $promote_by_mail_in, $promote_by_mail_between, $promote_by_sms_not_equal, $promote_by_sms_less, $promote_by_sms_less_or_equal, $promote_by_sms_greater, $promote_by_sms_greater_or_equal, $promote_by_sms_is_null, $promote_by_sms_is_not_null, $promote_by_sms_like, $promote_by_sms_not_like, $promote_by_sms_contains, $promote_by_sms_not_contains, $promote_by_sms_starts_with, $promote_by_sms_not_starts_with, $promote_by_sms_ends_with, $promote_by_sms_not_ends_with, $promote_by_sms_in, $promote_by_sms_between, $promote_by_phone1_not_equal, $promote_by_phone1_less, $promote_by_phone1_less_or_equal, $promote_by_phone1_greater, $promote_by_phone1_greater_or_equal, $promote_by_phone1_is_null, $promote_by_phone1_is_not_null, $promote_by_phone1_like, $promote_by_phone1_not_like, $promote_by_phone1_contains, $promote_by_phone1_not_contains, $promote_by_phone1_starts_with, $promote_by_phone1_not_starts_with, $promote_by_phone1_ends_with, $promote_by_phone1_not_ends_with, $promote_by_phone1_in, $promote_by_phone1_between, $promote_by_phone2_not_equal, $promote_by_phone2_less, $promote_by_phone2_less_or_equal, $promote_by_phone2_greater, $promote_by_phone2_greater_or_equal, $promote_by_phone2_is_null, $promote_by_phone2_is_not_null, $promote_by_phone2_like, $promote_by_phone2_not_like, $promote_by_phone2_contains, $promote_by_phone2_not_contains, $promote_by_phone2_starts_with, $promote_by_phone2_not_starts_with, $promote_by_phone2_ends_with, $promote_by_phone2_not_ends_with, $promote_by_phone2_in, $promote_by_phone2_between, $promote_by_phone3_not_equal, $promote_by_phone3_less, $promote_by_phone3_less_or_equal, $promote_by_phone3_greater, $promote_by_phone3_greater_or_equal, $promote_by_phone3_is_null, $promote_by_phone3_is_not_null, $promote_by_phone3_like, $promote_by_phone3_not_like, $promote_by_phone3_contains, $promote_by_phone3_not_contains, $promote_by_phone3_starts_with, $promote_by_phone3_not_starts_with, $promote_by_phone3_ends_with, $promote_by_phone3_not_ends_with, $promote_by_phone3_in, $promote_by_phone3_between, $title_not_equal, $title_less, $title_less_or_equal, $title_greater, $title_greater_or_equal, $title_is_null, $title_is_not_null, $title_like, $title_not_like, $title_contains, $title_not_contains, $title_starts_with, $title_not_starts_with, $title_ends_with, $title_not_ends_with, $title_in, $title_between, $first_name_not_equal, $first_name_less, $first_name_less_or_equal, $first_name_greater, $first_name_greater_or_equal, $first_name_is_null, $first_name_is_not_null, $first_name_like, $first_name_not_like, $first_name_contains, $first_name_not_contains, $first_name_starts_with, $first_name_not_starts_with, $first_name_ends_with, $first_name_not_ends_with, $first_name_in, $first_name_between, $middle_initial_not_equal, $middle_initial_less, $middle_initial_less_or_equal, $middle_initial_greater, $middle_initial_greater_or_equal, $middle_initial_is_null, $middle_initial_is_not_null, $middle_initial_like, $middle_initial_not_like, $middle_initial_contains, $middle_initial_not_contains, $middle_initial_starts_with, $middle_initial_not_starts_with, $middle_initial_ends_with, $middle_initial_not_ends_with, $middle_initial_in, $middle_initial_between, $last_name_not_equal, $last_name_less, $last_name_less_or_equal, $last_name_greater, $last_name_greater_or_equal, $last_name_is_null, $last_name_is_not_null, $last_name_like, $last_name_not_like, $last_name_contains, $last_name_not_contains, $last_name_starts_with, $last_name_not_starts_with, $last_name_ends_with, $last_name_not_ends_with, $last_name_in, $last_name_between, $suffix_not_equal, $suffix_less, $suffix_less_or_equal, $suffix_greater, $suffix_greater_or_equal, $suffix_is_null, $suffix_is_not_null, $suffix_like, $suffix_not_like, $suffix_contains, $suffix_not_contains, $suffix_starts_with, $suffix_not_starts_with, $suffix_ends_with, $suffix_not_ends_with, $suffix_in, $suffix_between, $job_title_not_equal, $job_title_less, $job_title_less_or_equal, $job_title_greater, $job_title_greater_or_equal, $job_title_is_null, $job_title_is_not_null, $job_title_like, $job_title_not_like, $job_title_contains, $job_title_not_contains, $job_title_starts_with, $job_title_not_starts_with, $job_title_ends_with, $job_title_not_ends_with, $job_title_in, $job_title_between, $job_position_code_not_equal, $job_position_code_less, $job_position_code_less_or_equal, $job_position_code_greater, $job_position_code_greater_or_equal, $job_position_code_is_null, $job_position_code_is_not_null, $job_position_code_like, $job_position_code_not_like, $job_position_code_contains, $job_position_code_not_contains, $job_position_code_starts_with, $job_position_code_not_starts_with, $job_position_code_ends_with, $job_position_code_not_ends_with, $job_position_code_in, $job_position_code_between, $communication_preference_not_equal, $communication_preference_less, $communication_preference_less_or_equal, $communication_preference_greater, $communication_preference_greater_or_equal, $communication_preference_is_null, $communication_preference_is_not_null, $communication_preference_like, $communication_preference_not_like, $communication_preference_contains, $communication_preference_not_contains, $communication_preference_starts_with, $communication_preference_not_starts_with, $communication_preference_ends_with, $communication_preference_not_ends_with, $communication_preference_in, $communication_preference_between, $source_promotion_not_equal, $source_promotion_less, $source_promotion_less_or_equal, $source_promotion_greater, $source_promotion_greater_or_equal, $source_promotion_is_null, $source_promotion_is_not_null, $source_promotion_like, $source_promotion_not_like, $source_promotion_contains, $source_promotion_not_contains, $source_promotion_starts_with, $source_promotion_not_starts_with, $source_promotion_ends_with, $source_promotion_not_ends_with, $source_promotion_in, $source_promotion_between, $address_code_not_equal, $address_code_less, $address_code_less_or_equal, $address_code_greater, $address_code_greater_or_equal, $address_code_is_null, $address_code_is_not_null, $address_code_like, $address_code_not_like, $address_code_contains, $address_code_not_contains, $address_code_starts_with, $address_code_not_starts_with, $address_code_ends_with, $address_code_not_ends_with, $address_code_in, $address_code_between, $default_currency_not_equal, $default_currency_less, $default_currency_less_or_equal, $default_currency_greater, $default_currency_greater_or_equal, $default_currency_is_null, $default_currency_is_not_null, $default_currency_like, $default_currency_not_like, $default_currency_contains, $default_currency_not_contains, $default_currency_starts_with, $default_currency_not_starts_with, $default_currency_ends_with, $default_currency_not_ends_with, $default_currency_in, $default_currency_between, $department_not_equal, $department_less, $department_less_or_equal, $department_greater, $department_greater_or_equal, $department_is_null, $department_is_not_null, $department_like, $department_not_like, $department_contains, $department_not_contains, $department_starts_with, $department_not_starts_with, $department_ends_with, $department_not_ends_with, $department_in, $department_between, $county_not_equal, $county_less, $county_less_or_equal, $county_greater, $county_greater_or_equal, $county_is_null, $county_is_not_null, $county_like, $county_not_like, $county_contains, $county_not_contains, $county_starts_with, $county_not_starts_with, $county_ends_with, $county_not_ends_with, $county_in, $county_between, $pin_code_not_equal, $pin_code_less, $pin_code_less_or_equal, $pin_code_greater, $pin_code_greater_or_equal, $pin_code_is_null, $pin_code_is_not_null, $pin_code_like, $pin_code_not_like, $pin_code_contains, $pin_code_not_contains, $pin_code_starts_with, $pin_code_not_starts_with, $pin_code_ends_with, $pin_code_not_ends_with, $pin_code_in, $pin_code_between, $social_security_number_not_equal, $social_security_number_less, $social_security_number_less_or_equal, $social_security_number_greater, $social_security_number_greater_or_equal, $social_security_number_is_null, $social_security_number_is_not_null, $social_security_number_like, $social_security_number_not_like, $social_security_number_contains, $social_security_number_not_contains, $social_security_number_starts_with, $social_security_number_not_starts_with, $social_security_number_ends_with, $social_security_number_not_ends_with, $social_security_number_in, $social_security_number_between, $street_name_not_equal, $street_name_less, $street_name_less_or_equal, $street_name_greater, $street_name_greater_or_equal, $street_name_is_null, $street_name_is_not_null, $street_name_like, $street_name_not_like, $street_name_contains, $street_name_not_contains, $street_name_starts_with, $street_name_not_starts_with, $street_name_ends_with, $street_name_not_ends_with, $street_name_in, $street_name_between, $street_type_not_equal, $street_type_less, $street_type_less_or_equal, $street_type_greater, $street_type_greater_or_equal, $street_type_is_null, $street_type_is_not_null, $street_type_like, $street_type_not_like, $street_type_contains, $street_type_not_contains, $street_type_starts_with, $street_type_not_starts_with, $street_type_ends_with, $street_type_not_ends_with, $street_type_in, $street_type_between, $last_updated_on_not_equal, $last_updated_on_less, $last_updated_on_less_or_equal, $last_updated_on_greater, $last_updated_on_greater_or_equal, $last_updated_on_is_null, $last_updated_on_is_not_null, $last_updated_on_like, $last_updated_on_not_like, $last_updated_on_contains, $last_updated_on_not_contains, $last_updated_on_starts_with, $last_updated_on_not_starts_with, $last_updated_on_ends_with, $last_updated_on_not_ends_with, $last_updated_on_in, $last_updated_on_between, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $last_name_soundex_not_equal, $last_name_soundex_less, $last_name_soundex_less_or_equal, $last_name_soundex_greater, $last_name_soundex_greater_or_equal, $last_name_soundex_is_null, $last_name_soundex_is_not_null, $last_name_soundex_like, $last_name_soundex_not_like, $last_name_soundex_contains, $last_name_soundex_not_contains, $last_name_soundex_starts_with, $last_name_soundex_not_starts_with, $last_name_soundex_ends_with, $last_name_soundex_not_ends_with, $last_name_soundex_in, $last_name_soundex_between, $company_name_soundex_not_equal, $company_name_soundex_less, $company_name_soundex_less_or_equal, $company_name_soundex_greater, $company_name_soundex_greater_or_equal, $company_name_soundex_is_null, $company_name_soundex_is_not_null, $company_name_soundex_like, $company_name_soundex_not_like, $company_name_soundex_contains, $company_name_soundex_not_contains, $company_name_soundex_starts_with, $company_name_soundex_not_starts_with, $company_name_soundex_ends_with, $company_name_soundex_not_ends_with, $company_name_soundex_in, $company_name_soundex_between)

Gets customer addresses matching the filter criteria. Filters are passed as a URI parameter in the format &lt;Field&gt;.&lt;Operator&gt;=&lt;Value&gt;.  For example, /customer-addresses?FirstName.CN=Matt or /customer-addresses?FirstName.EQ=John&amp;LastName.EQ=Doe

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$full_name = "full_name_example"; // string | Filter on ATN-NME using 'Equal' operator
$email_address = "email_address_example"; // string | Filter on ADR-EML using 'Equal' operator
$phone_number = "phone_number_example"; // string | Filter on PHO1-IDX using 'Equal' operator
$phone_number2 = "phone_number2_example"; // string | Filter on PHO2-IDX using 'Equal' operator
$phone_number3 = "phone_number3_example"; // string | Filter on PHO3-IDX using 'Equal' operator
$street1 = "street1_example"; // string | Filter on STR-1ST using 'Equal' operator
$street2 = "street2_example"; // string | Filter on STR-2ND using 'Equal' operator
$street3 = "street3_example"; // string | Filter on STR-3RD using 'Equal' operator
$city = "city_example"; // string | Filter on CTM-CTY using 'Equal' operator
$state = "state_example"; // string | Filter on CTM-STE using 'Equal' operator
$country_code = "country_code_example"; // string | Filter on CUN-TYP using 'Equal' operator
$postal_code = "postal_code_example"; // string | Filter on ZIP-CDE using 'Equal' operator
$fax_number = "fax_number_example"; // string | Filter on FAX-NBR using 'Equal' operator
$company = "company_example"; // string | Filter on CMP-NME using 'Equal' operator
$customer_type = "customer_type_example"; // string | Filter on CTM-TYP using 'Equal' operator
$promote_flag = "promote_flag_example"; // string | Filter on PROMO using 'Equal' operator
$promote_by_partners = "promote_by_partners_example"; // string | Filter on PMO-PTR using 'Equal' operator
$promote_by_phone = "promote_by_phone_example"; // string | Filter on PMO-PHN using 'Equal' operator
$promote_by_fax = "promote_by_fax_example"; // string | Filter on PMO-FAX using 'Equal' operator
$promote_by_email = "promote_by_email_example"; // string | Filter on PMO-EML using 'Equal' operator
$promote_by_mail = "promote_by_mail_example"; // string | Filter on PMO-ADR using 'Equal' operator
$promote_by_sms = "promote_by_sms_example"; // string | Filter on PMO-SMS using 'Equal' operator
$promote_by_phone1 = "promote_by_phone1_example"; // string | Filter on PMO-PH1 using 'Equal' operator
$promote_by_phone2 = "promote_by_phone2_example"; // string | Filter on PMO-PH2 using 'Equal' operator
$promote_by_phone3 = "promote_by_phone3_example"; // string | Filter on PMO-PH3 using 'Equal' operator
$title = "title_example"; // string | Filter on CTM-TTL using 'Equal' operator
$first_name = "first_name_example"; // string | Filter on ATN-1ST using 'Equal' operator
$middle_initial = "middle_initial_example"; // string | Filter on ATN-MID using 'Equal' operator
$last_name = "last_name_example"; // string | Filter on ATN-END using 'Equal' operator
$suffix = "suffix_example"; // string | Filter on CTM-SFX using 'Equal' operator
$job_title = "job_title_example"; // string | Filter on JOB-TTL using 'Equal' operator
$job_position_code = "job_position_code_example"; // string | Filter on CTM-POS using 'Equal' operator
$communication_preference = "communication_preference_example"; // string | Filter on COMM-PRF using 'Equal' operator
$source_promotion = "source_promotion_example"; // string | Filter on CTM-SRC using 'Equal' operator
$address_code = "address_code_example"; // string | Filter on ADR-CDE using 'Equal' operator
$default_currency = "default_currency_example"; // string | Filter on BIL-CUR using 'Equal' operator
$department = "department_example"; // string | Filter on DPT-NME using 'Equal' operator
$county = "county_example"; // string | Filter on CTM-CNTY using 'Equal' operator
$pin_code = "pin_code_example"; // string | Filter on PIN-CODE using 'Equal' operator
$social_security_number = "social_security_number_example"; // string | Filter on SOC-SEC using 'Equal' operator
$street_name = "street_name_example"; // string | Filter on FSTR-NME using 'Equal' operator
$street_type = "street_type_example"; // string | Filter on STR-TYP using 'Equal' operator
$last_updated_on = "last_updated_on_example"; // string | Filter on UPD-DTE using 'Equal' operator
$item_number = "item_number_example"; // string | Filter on ITM-NUM using 'Equal' operator
$last_name_soundex = "last_name_soundex_example"; // string | Filter on END-SNDX using 'Equal' operator
$company_name_soundex = "company_name_soundex_example"; // string | Filter on CMP-SNDX using 'Equal' operator
$customer_number_not_equal = "customer_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$customer_number_less = "customer_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$customer_number_less_or_equal = "customer_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$customer_number_greater = "customer_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$customer_number_greater_or_equal = "customer_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$customer_number_is_null = "customer_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$customer_number_is_not_null = "customer_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$customer_number_like = "customer_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$customer_number_not_like = "customer_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$customer_number_contains = "customer_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$customer_number_not_contains = "customer_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$customer_number_starts_with = "customer_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$customer_number_not_starts_with = "customer_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$customer_number_ends_with = "customer_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$customer_number_not_ends_with = "customer_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$customer_number_in = "customer_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$customer_number_between = "customer_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$full_name_not_equal = "full_name_not_equal_example"; // string | Filter on ATN-NME using 'NotEqual' operator
$full_name_less = "full_name_less_example"; // string | Filter on ATN-NME using 'Less' operator
$full_name_less_or_equal = "full_name_less_or_equal_example"; // string | Filter on ATN-NME using 'LessOrEqual' operator
$full_name_greater = "full_name_greater_example"; // string | Filter on ATN-NME using 'Greater' operator
$full_name_greater_or_equal = "full_name_greater_or_equal_example"; // string | Filter on ATN-NME using 'GreaterOrEqual' operator
$full_name_is_null = "full_name_is_null_example"; // string | Filter on ATN-NME using 'IsNull' operator
$full_name_is_not_null = "full_name_is_not_null_example"; // string | Filter on ATN-NME using 'IsNotNull' operator
$full_name_like = "full_name_like_example"; // string | Filter on ATN-NME using 'Like' operator
$full_name_not_like = "full_name_not_like_example"; // string | Filter on ATN-NME using 'NotLike' operator
$full_name_contains = "full_name_contains_example"; // string | Filter on ATN-NME using 'Contains' operator
$full_name_not_contains = "full_name_not_contains_example"; // string | Filter on ATN-NME using 'NotContains' operator
$full_name_starts_with = "full_name_starts_with_example"; // string | Filter on ATN-NME using 'StartsWith' operator
$full_name_not_starts_with = "full_name_not_starts_with_example"; // string | Filter on ATN-NME using 'NotStartsWith' operator
$full_name_ends_with = "full_name_ends_with_example"; // string | Filter on ATN-NME using 'EndsWith' operator
$full_name_not_ends_with = "full_name_not_ends_with_example"; // string | Filter on ATN-NME using 'NotEndsWith' operator
$full_name_in = "full_name_in_example"; // string | Filter on ATN-NME using 'In' operator
$full_name_between = "full_name_between_example"; // string | Filter on ATN-NME using 'Between' operator
$email_address_not_equal = "email_address_not_equal_example"; // string | Filter on ADR-EML using 'NotEqual' operator
$email_address_less = "email_address_less_example"; // string | Filter on ADR-EML using 'Less' operator
$email_address_less_or_equal = "email_address_less_or_equal_example"; // string | Filter on ADR-EML using 'LessOrEqual' operator
$email_address_greater = "email_address_greater_example"; // string | Filter on ADR-EML using 'Greater' operator
$email_address_greater_or_equal = "email_address_greater_or_equal_example"; // string | Filter on ADR-EML using 'GreaterOrEqual' operator
$email_address_is_null = "email_address_is_null_example"; // string | Filter on ADR-EML using 'IsNull' operator
$email_address_is_not_null = "email_address_is_not_null_example"; // string | Filter on ADR-EML using 'IsNotNull' operator
$email_address_like = "email_address_like_example"; // string | Filter on ADR-EML using 'Like' operator
$email_address_not_like = "email_address_not_like_example"; // string | Filter on ADR-EML using 'NotLike' operator
$email_address_contains = "email_address_contains_example"; // string | Filter on ADR-EML using 'Contains' operator
$email_address_not_contains = "email_address_not_contains_example"; // string | Filter on ADR-EML using 'NotContains' operator
$email_address_starts_with = "email_address_starts_with_example"; // string | Filter on ADR-EML using 'StartsWith' operator
$email_address_not_starts_with = "email_address_not_starts_with_example"; // string | Filter on ADR-EML using 'NotStartsWith' operator
$email_address_ends_with = "email_address_ends_with_example"; // string | Filter on ADR-EML using 'EndsWith' operator
$email_address_not_ends_with = "email_address_not_ends_with_example"; // string | Filter on ADR-EML using 'NotEndsWith' operator
$email_address_in = "email_address_in_example"; // string | Filter on ADR-EML using 'In' operator
$email_address_between = "email_address_between_example"; // string | Filter on ADR-EML using 'Between' operator
$phone_number_not_equal = "phone_number_not_equal_example"; // string | Filter on PHO1-IDX using 'NotEqual' operator
$phone_number_less = "phone_number_less_example"; // string | Filter on PHO1-IDX using 'Less' operator
$phone_number_less_or_equal = "phone_number_less_or_equal_example"; // string | Filter on PHO1-IDX using 'LessOrEqual' operator
$phone_number_greater = "phone_number_greater_example"; // string | Filter on PHO1-IDX using 'Greater' operator
$phone_number_greater_or_equal = "phone_number_greater_or_equal_example"; // string | Filter on PHO1-IDX using 'GreaterOrEqual' operator
$phone_number_is_null = "phone_number_is_null_example"; // string | Filter on PHO1-IDX using 'IsNull' operator
$phone_number_is_not_null = "phone_number_is_not_null_example"; // string | Filter on PHO1-IDX using 'IsNotNull' operator
$phone_number_like = "phone_number_like_example"; // string | Filter on PHO1-IDX using 'Like' operator
$phone_number_not_like = "phone_number_not_like_example"; // string | Filter on PHO1-IDX using 'NotLike' operator
$phone_number_contains = "phone_number_contains_example"; // string | Filter on PHO1-IDX using 'Contains' operator
$phone_number_not_contains = "phone_number_not_contains_example"; // string | Filter on PHO1-IDX using 'NotContains' operator
$phone_number_starts_with = "phone_number_starts_with_example"; // string | Filter on PHO1-IDX using 'StartsWith' operator
$phone_number_not_starts_with = "phone_number_not_starts_with_example"; // string | Filter on PHO1-IDX using 'NotStartsWith' operator
$phone_number_ends_with = "phone_number_ends_with_example"; // string | Filter on PHO1-IDX using 'EndsWith' operator
$phone_number_not_ends_with = "phone_number_not_ends_with_example"; // string | Filter on PHO1-IDX using 'NotEndsWith' operator
$phone_number_in = "phone_number_in_example"; // string | Filter on PHO1-IDX using 'In' operator
$phone_number_between = "phone_number_between_example"; // string | Filter on PHO1-IDX using 'Between' operator
$phone_number2_not_equal = "phone_number2_not_equal_example"; // string | Filter on PHO2-IDX using 'NotEqual' operator
$phone_number2_less = "phone_number2_less_example"; // string | Filter on PHO2-IDX using 'Less' operator
$phone_number2_less_or_equal = "phone_number2_less_or_equal_example"; // string | Filter on PHO2-IDX using 'LessOrEqual' operator
$phone_number2_greater = "phone_number2_greater_example"; // string | Filter on PHO2-IDX using 'Greater' operator
$phone_number2_greater_or_equal = "phone_number2_greater_or_equal_example"; // string | Filter on PHO2-IDX using 'GreaterOrEqual' operator
$phone_number2_is_null = "phone_number2_is_null_example"; // string | Filter on PHO2-IDX using 'IsNull' operator
$phone_number2_is_not_null = "phone_number2_is_not_null_example"; // string | Filter on PHO2-IDX using 'IsNotNull' operator
$phone_number2_like = "phone_number2_like_example"; // string | Filter on PHO2-IDX using 'Like' operator
$phone_number2_not_like = "phone_number2_not_like_example"; // string | Filter on PHO2-IDX using 'NotLike' operator
$phone_number2_contains = "phone_number2_contains_example"; // string | Filter on PHO2-IDX using 'Contains' operator
$phone_number2_not_contains = "phone_number2_not_contains_example"; // string | Filter on PHO2-IDX using 'NotContains' operator
$phone_number2_starts_with = "phone_number2_starts_with_example"; // string | Filter on PHO2-IDX using 'StartsWith' operator
$phone_number2_not_starts_with = "phone_number2_not_starts_with_example"; // string | Filter on PHO2-IDX using 'NotStartsWith' operator
$phone_number2_ends_with = "phone_number2_ends_with_example"; // string | Filter on PHO2-IDX using 'EndsWith' operator
$phone_number2_not_ends_with = "phone_number2_not_ends_with_example"; // string | Filter on PHO2-IDX using 'NotEndsWith' operator
$phone_number2_in = "phone_number2_in_example"; // string | Filter on PHO2-IDX using 'In' operator
$phone_number2_between = "phone_number2_between_example"; // string | Filter on PHO2-IDX using 'Between' operator
$phone_number3_not_equal = "phone_number3_not_equal_example"; // string | Filter on PHO3-IDX using 'NotEqual' operator
$phone_number3_less = "phone_number3_less_example"; // string | Filter on PHO3-IDX using 'Less' operator
$phone_number3_less_or_equal = "phone_number3_less_or_equal_example"; // string | Filter on PHO3-IDX using 'LessOrEqual' operator
$phone_number3_greater = "phone_number3_greater_example"; // string | Filter on PHO3-IDX using 'Greater' operator
$phone_number3_greater_or_equal = "phone_number3_greater_or_equal_example"; // string | Filter on PHO3-IDX using 'GreaterOrEqual' operator
$phone_number3_is_null = "phone_number3_is_null_example"; // string | Filter on PHO3-IDX using 'IsNull' operator
$phone_number3_is_not_null = "phone_number3_is_not_null_example"; // string | Filter on PHO3-IDX using 'IsNotNull' operator
$phone_number3_like = "phone_number3_like_example"; // string | Filter on PHO3-IDX using 'Like' operator
$phone_number3_not_like = "phone_number3_not_like_example"; // string | Filter on PHO3-IDX using 'NotLike' operator
$phone_number3_contains = "phone_number3_contains_example"; // string | Filter on PHO3-IDX using 'Contains' operator
$phone_number3_not_contains = "phone_number3_not_contains_example"; // string | Filter on PHO3-IDX using 'NotContains' operator
$phone_number3_starts_with = "phone_number3_starts_with_example"; // string | Filter on PHO3-IDX using 'StartsWith' operator
$phone_number3_not_starts_with = "phone_number3_not_starts_with_example"; // string | Filter on PHO3-IDX using 'NotStartsWith' operator
$phone_number3_ends_with = "phone_number3_ends_with_example"; // string | Filter on PHO3-IDX using 'EndsWith' operator
$phone_number3_not_ends_with = "phone_number3_not_ends_with_example"; // string | Filter on PHO3-IDX using 'NotEndsWith' operator
$phone_number3_in = "phone_number3_in_example"; // string | Filter on PHO3-IDX using 'In' operator
$phone_number3_between = "phone_number3_between_example"; // string | Filter on PHO3-IDX using 'Between' operator
$street1_not_equal = "street1_not_equal_example"; // string | Filter on STR-1ST using 'NotEqual' operator
$street1_less = "street1_less_example"; // string | Filter on STR-1ST using 'Less' operator
$street1_less_or_equal = "street1_less_or_equal_example"; // string | Filter on STR-1ST using 'LessOrEqual' operator
$street1_greater = "street1_greater_example"; // string | Filter on STR-1ST using 'Greater' operator
$street1_greater_or_equal = "street1_greater_or_equal_example"; // string | Filter on STR-1ST using 'GreaterOrEqual' operator
$street1_is_null = "street1_is_null_example"; // string | Filter on STR-1ST using 'IsNull' operator
$street1_is_not_null = "street1_is_not_null_example"; // string | Filter on STR-1ST using 'IsNotNull' operator
$street1_like = "street1_like_example"; // string | Filter on STR-1ST using 'Like' operator
$street1_not_like = "street1_not_like_example"; // string | Filter on STR-1ST using 'NotLike' operator
$street1_contains = "street1_contains_example"; // string | Filter on STR-1ST using 'Contains' operator
$street1_not_contains = "street1_not_contains_example"; // string | Filter on STR-1ST using 'NotContains' operator
$street1_starts_with = "street1_starts_with_example"; // string | Filter on STR-1ST using 'StartsWith' operator
$street1_not_starts_with = "street1_not_starts_with_example"; // string | Filter on STR-1ST using 'NotStartsWith' operator
$street1_ends_with = "street1_ends_with_example"; // string | Filter on STR-1ST using 'EndsWith' operator
$street1_not_ends_with = "street1_not_ends_with_example"; // string | Filter on STR-1ST using 'NotEndsWith' operator
$street1_in = "street1_in_example"; // string | Filter on STR-1ST using 'In' operator
$street1_between = "street1_between_example"; // string | Filter on STR-1ST using 'Between' operator
$street2_not_equal = "street2_not_equal_example"; // string | Filter on STR-2ND using 'NotEqual' operator
$street2_less = "street2_less_example"; // string | Filter on STR-2ND using 'Less' operator
$street2_less_or_equal = "street2_less_or_equal_example"; // string | Filter on STR-2ND using 'LessOrEqual' operator
$street2_greater = "street2_greater_example"; // string | Filter on STR-2ND using 'Greater' operator
$street2_greater_or_equal = "street2_greater_or_equal_example"; // string | Filter on STR-2ND using 'GreaterOrEqual' operator
$street2_is_null = "street2_is_null_example"; // string | Filter on STR-2ND using 'IsNull' operator
$street2_is_not_null = "street2_is_not_null_example"; // string | Filter on STR-2ND using 'IsNotNull' operator
$street2_like = "street2_like_example"; // string | Filter on STR-2ND using 'Like' operator
$street2_not_like = "street2_not_like_example"; // string | Filter on STR-2ND using 'NotLike' operator
$street2_contains = "street2_contains_example"; // string | Filter on STR-2ND using 'Contains' operator
$street2_not_contains = "street2_not_contains_example"; // string | Filter on STR-2ND using 'NotContains' operator
$street2_starts_with = "street2_starts_with_example"; // string | Filter on STR-2ND using 'StartsWith' operator
$street2_not_starts_with = "street2_not_starts_with_example"; // string | Filter on STR-2ND using 'NotStartsWith' operator
$street2_ends_with = "street2_ends_with_example"; // string | Filter on STR-2ND using 'EndsWith' operator
$street2_not_ends_with = "street2_not_ends_with_example"; // string | Filter on STR-2ND using 'NotEndsWith' operator
$street2_in = "street2_in_example"; // string | Filter on STR-2ND using 'In' operator
$street2_between = "street2_between_example"; // string | Filter on STR-2ND using 'Between' operator
$street3_not_equal = "street3_not_equal_example"; // string | Filter on STR-3RD using 'NotEqual' operator
$street3_less = "street3_less_example"; // string | Filter on STR-3RD using 'Less' operator
$street3_less_or_equal = "street3_less_or_equal_example"; // string | Filter on STR-3RD using 'LessOrEqual' operator
$street3_greater = "street3_greater_example"; // string | Filter on STR-3RD using 'Greater' operator
$street3_greater_or_equal = "street3_greater_or_equal_example"; // string | Filter on STR-3RD using 'GreaterOrEqual' operator
$street3_is_null = "street3_is_null_example"; // string | Filter on STR-3RD using 'IsNull' operator
$street3_is_not_null = "street3_is_not_null_example"; // string | Filter on STR-3RD using 'IsNotNull' operator
$street3_like = "street3_like_example"; // string | Filter on STR-3RD using 'Like' operator
$street3_not_like = "street3_not_like_example"; // string | Filter on STR-3RD using 'NotLike' operator
$street3_contains = "street3_contains_example"; // string | Filter on STR-3RD using 'Contains' operator
$street3_not_contains = "street3_not_contains_example"; // string | Filter on STR-3RD using 'NotContains' operator
$street3_starts_with = "street3_starts_with_example"; // string | Filter on STR-3RD using 'StartsWith' operator
$street3_not_starts_with = "street3_not_starts_with_example"; // string | Filter on STR-3RD using 'NotStartsWith' operator
$street3_ends_with = "street3_ends_with_example"; // string | Filter on STR-3RD using 'EndsWith' operator
$street3_not_ends_with = "street3_not_ends_with_example"; // string | Filter on STR-3RD using 'NotEndsWith' operator
$street3_in = "street3_in_example"; // string | Filter on STR-3RD using 'In' operator
$street3_between = "street3_between_example"; // string | Filter on STR-3RD using 'Between' operator
$city_not_equal = "city_not_equal_example"; // string | Filter on CTM-CTY using 'NotEqual' operator
$city_less = "city_less_example"; // string | Filter on CTM-CTY using 'Less' operator
$city_less_or_equal = "city_less_or_equal_example"; // string | Filter on CTM-CTY using 'LessOrEqual' operator
$city_greater = "city_greater_example"; // string | Filter on CTM-CTY using 'Greater' operator
$city_greater_or_equal = "city_greater_or_equal_example"; // string | Filter on CTM-CTY using 'GreaterOrEqual' operator
$city_is_null = "city_is_null_example"; // string | Filter on CTM-CTY using 'IsNull' operator
$city_is_not_null = "city_is_not_null_example"; // string | Filter on CTM-CTY using 'IsNotNull' operator
$city_like = "city_like_example"; // string | Filter on CTM-CTY using 'Like' operator
$city_not_like = "city_not_like_example"; // string | Filter on CTM-CTY using 'NotLike' operator
$city_contains = "city_contains_example"; // string | Filter on CTM-CTY using 'Contains' operator
$city_not_contains = "city_not_contains_example"; // string | Filter on CTM-CTY using 'NotContains' operator
$city_starts_with = "city_starts_with_example"; // string | Filter on CTM-CTY using 'StartsWith' operator
$city_not_starts_with = "city_not_starts_with_example"; // string | Filter on CTM-CTY using 'NotStartsWith' operator
$city_ends_with = "city_ends_with_example"; // string | Filter on CTM-CTY using 'EndsWith' operator
$city_not_ends_with = "city_not_ends_with_example"; // string | Filter on CTM-CTY using 'NotEndsWith' operator
$city_in = "city_in_example"; // string | Filter on CTM-CTY using 'In' operator
$city_between = "city_between_example"; // string | Filter on CTM-CTY using 'Between' operator
$state_not_equal = "state_not_equal_example"; // string | Filter on CTM-STE using 'NotEqual' operator
$state_less = "state_less_example"; // string | Filter on CTM-STE using 'Less' operator
$state_less_or_equal = "state_less_or_equal_example"; // string | Filter on CTM-STE using 'LessOrEqual' operator
$state_greater = "state_greater_example"; // string | Filter on CTM-STE using 'Greater' operator
$state_greater_or_equal = "state_greater_or_equal_example"; // string | Filter on CTM-STE using 'GreaterOrEqual' operator
$state_is_null = "state_is_null_example"; // string | Filter on CTM-STE using 'IsNull' operator
$state_is_not_null = "state_is_not_null_example"; // string | Filter on CTM-STE using 'IsNotNull' operator
$state_like = "state_like_example"; // string | Filter on CTM-STE using 'Like' operator
$state_not_like = "state_not_like_example"; // string | Filter on CTM-STE using 'NotLike' operator
$state_contains = "state_contains_example"; // string | Filter on CTM-STE using 'Contains' operator
$state_not_contains = "state_not_contains_example"; // string | Filter on CTM-STE using 'NotContains' operator
$state_starts_with = "state_starts_with_example"; // string | Filter on CTM-STE using 'StartsWith' operator
$state_not_starts_with = "state_not_starts_with_example"; // string | Filter on CTM-STE using 'NotStartsWith' operator
$state_ends_with = "state_ends_with_example"; // string | Filter on CTM-STE using 'EndsWith' operator
$state_not_ends_with = "state_not_ends_with_example"; // string | Filter on CTM-STE using 'NotEndsWith' operator
$state_in = "state_in_example"; // string | Filter on CTM-STE using 'In' operator
$state_between = "state_between_example"; // string | Filter on CTM-STE using 'Between' operator
$country_code_not_equal = "country_code_not_equal_example"; // string | Filter on CUN-TYP using 'NotEqual' operator
$country_code_less = "country_code_less_example"; // string | Filter on CUN-TYP using 'Less' operator
$country_code_less_or_equal = "country_code_less_or_equal_example"; // string | Filter on CUN-TYP using 'LessOrEqual' operator
$country_code_greater = "country_code_greater_example"; // string | Filter on CUN-TYP using 'Greater' operator
$country_code_greater_or_equal = "country_code_greater_or_equal_example"; // string | Filter on CUN-TYP using 'GreaterOrEqual' operator
$country_code_is_null = "country_code_is_null_example"; // string | Filter on CUN-TYP using 'IsNull' operator
$country_code_is_not_null = "country_code_is_not_null_example"; // string | Filter on CUN-TYP using 'IsNotNull' operator
$country_code_like = "country_code_like_example"; // string | Filter on CUN-TYP using 'Like' operator
$country_code_not_like = "country_code_not_like_example"; // string | Filter on CUN-TYP using 'NotLike' operator
$country_code_contains = "country_code_contains_example"; // string | Filter on CUN-TYP using 'Contains' operator
$country_code_not_contains = "country_code_not_contains_example"; // string | Filter on CUN-TYP using 'NotContains' operator
$country_code_starts_with = "country_code_starts_with_example"; // string | Filter on CUN-TYP using 'StartsWith' operator
$country_code_not_starts_with = "country_code_not_starts_with_example"; // string | Filter on CUN-TYP using 'NotStartsWith' operator
$country_code_ends_with = "country_code_ends_with_example"; // string | Filter on CUN-TYP using 'EndsWith' operator
$country_code_not_ends_with = "country_code_not_ends_with_example"; // string | Filter on CUN-TYP using 'NotEndsWith' operator
$country_code_in = "country_code_in_example"; // string | Filter on CUN-TYP using 'In' operator
$country_code_between = "country_code_between_example"; // string | Filter on CUN-TYP using 'Between' operator
$postal_code_not_equal = "postal_code_not_equal_example"; // string | Filter on ZIP-CDE using 'NotEqual' operator
$postal_code_less = "postal_code_less_example"; // string | Filter on ZIP-CDE using 'Less' operator
$postal_code_less_or_equal = "postal_code_less_or_equal_example"; // string | Filter on ZIP-CDE using 'LessOrEqual' operator
$postal_code_greater = "postal_code_greater_example"; // string | Filter on ZIP-CDE using 'Greater' operator
$postal_code_greater_or_equal = "postal_code_greater_or_equal_example"; // string | Filter on ZIP-CDE using 'GreaterOrEqual' operator
$postal_code_is_null = "postal_code_is_null_example"; // string | Filter on ZIP-CDE using 'IsNull' operator
$postal_code_is_not_null = "postal_code_is_not_null_example"; // string | Filter on ZIP-CDE using 'IsNotNull' operator
$postal_code_like = "postal_code_like_example"; // string | Filter on ZIP-CDE using 'Like' operator
$postal_code_not_like = "postal_code_not_like_example"; // string | Filter on ZIP-CDE using 'NotLike' operator
$postal_code_contains = "postal_code_contains_example"; // string | Filter on ZIP-CDE using 'Contains' operator
$postal_code_not_contains = "postal_code_not_contains_example"; // string | Filter on ZIP-CDE using 'NotContains' operator
$postal_code_starts_with = "postal_code_starts_with_example"; // string | Filter on ZIP-CDE using 'StartsWith' operator
$postal_code_not_starts_with = "postal_code_not_starts_with_example"; // string | Filter on ZIP-CDE using 'NotStartsWith' operator
$postal_code_ends_with = "postal_code_ends_with_example"; // string | Filter on ZIP-CDE using 'EndsWith' operator
$postal_code_not_ends_with = "postal_code_not_ends_with_example"; // string | Filter on ZIP-CDE using 'NotEndsWith' operator
$postal_code_in = "postal_code_in_example"; // string | Filter on ZIP-CDE using 'In' operator
$postal_code_between = "postal_code_between_example"; // string | Filter on ZIP-CDE using 'Between' operator
$fax_number_not_equal = "fax_number_not_equal_example"; // string | Filter on FAX-NBR using 'NotEqual' operator
$fax_number_less = "fax_number_less_example"; // string | Filter on FAX-NBR using 'Less' operator
$fax_number_less_or_equal = "fax_number_less_or_equal_example"; // string | Filter on FAX-NBR using 'LessOrEqual' operator
$fax_number_greater = "fax_number_greater_example"; // string | Filter on FAX-NBR using 'Greater' operator
$fax_number_greater_or_equal = "fax_number_greater_or_equal_example"; // string | Filter on FAX-NBR using 'GreaterOrEqual' operator
$fax_number_is_null = "fax_number_is_null_example"; // string | Filter on FAX-NBR using 'IsNull' operator
$fax_number_is_not_null = "fax_number_is_not_null_example"; // string | Filter on FAX-NBR using 'IsNotNull' operator
$fax_number_like = "fax_number_like_example"; // string | Filter on FAX-NBR using 'Like' operator
$fax_number_not_like = "fax_number_not_like_example"; // string | Filter on FAX-NBR using 'NotLike' operator
$fax_number_contains = "fax_number_contains_example"; // string | Filter on FAX-NBR using 'Contains' operator
$fax_number_not_contains = "fax_number_not_contains_example"; // string | Filter on FAX-NBR using 'NotContains' operator
$fax_number_starts_with = "fax_number_starts_with_example"; // string | Filter on FAX-NBR using 'StartsWith' operator
$fax_number_not_starts_with = "fax_number_not_starts_with_example"; // string | Filter on FAX-NBR using 'NotStartsWith' operator
$fax_number_ends_with = "fax_number_ends_with_example"; // string | Filter on FAX-NBR using 'EndsWith' operator
$fax_number_not_ends_with = "fax_number_not_ends_with_example"; // string | Filter on FAX-NBR using 'NotEndsWith' operator
$fax_number_in = "fax_number_in_example"; // string | Filter on FAX-NBR using 'In' operator
$fax_number_between = "fax_number_between_example"; // string | Filter on FAX-NBR using 'Between' operator
$company_not_equal = "company_not_equal_example"; // string | Filter on CMP-NME using 'NotEqual' operator
$company_less = "company_less_example"; // string | Filter on CMP-NME using 'Less' operator
$company_less_or_equal = "company_less_or_equal_example"; // string | Filter on CMP-NME using 'LessOrEqual' operator
$company_greater = "company_greater_example"; // string | Filter on CMP-NME using 'Greater' operator
$company_greater_or_equal = "company_greater_or_equal_example"; // string | Filter on CMP-NME using 'GreaterOrEqual' operator
$company_is_null = "company_is_null_example"; // string | Filter on CMP-NME using 'IsNull' operator
$company_is_not_null = "company_is_not_null_example"; // string | Filter on CMP-NME using 'IsNotNull' operator
$company_like = "company_like_example"; // string | Filter on CMP-NME using 'Like' operator
$company_not_like = "company_not_like_example"; // string | Filter on CMP-NME using 'NotLike' operator
$company_contains = "company_contains_example"; // string | Filter on CMP-NME using 'Contains' operator
$company_not_contains = "company_not_contains_example"; // string | Filter on CMP-NME using 'NotContains' operator
$company_starts_with = "company_starts_with_example"; // string | Filter on CMP-NME using 'StartsWith' operator
$company_not_starts_with = "company_not_starts_with_example"; // string | Filter on CMP-NME using 'NotStartsWith' operator
$company_ends_with = "company_ends_with_example"; // string | Filter on CMP-NME using 'EndsWith' operator
$company_not_ends_with = "company_not_ends_with_example"; // string | Filter on CMP-NME using 'NotEndsWith' operator
$company_in = "company_in_example"; // string | Filter on CMP-NME using 'In' operator
$company_between = "company_between_example"; // string | Filter on CMP-NME using 'Between' operator
$customer_type_not_equal = "customer_type_not_equal_example"; // string | Filter on CTM-TYP using 'NotEqual' operator
$customer_type_less = "customer_type_less_example"; // string | Filter on CTM-TYP using 'Less' operator
$customer_type_less_or_equal = "customer_type_less_or_equal_example"; // string | Filter on CTM-TYP using 'LessOrEqual' operator
$customer_type_greater = "customer_type_greater_example"; // string | Filter on CTM-TYP using 'Greater' operator
$customer_type_greater_or_equal = "customer_type_greater_or_equal_example"; // string | Filter on CTM-TYP using 'GreaterOrEqual' operator
$customer_type_is_null = "customer_type_is_null_example"; // string | Filter on CTM-TYP using 'IsNull' operator
$customer_type_is_not_null = "customer_type_is_not_null_example"; // string | Filter on CTM-TYP using 'IsNotNull' operator
$customer_type_like = "customer_type_like_example"; // string | Filter on CTM-TYP using 'Like' operator
$customer_type_not_like = "customer_type_not_like_example"; // string | Filter on CTM-TYP using 'NotLike' operator
$customer_type_contains = "customer_type_contains_example"; // string | Filter on CTM-TYP using 'Contains' operator
$customer_type_not_contains = "customer_type_not_contains_example"; // string | Filter on CTM-TYP using 'NotContains' operator
$customer_type_starts_with = "customer_type_starts_with_example"; // string | Filter on CTM-TYP using 'StartsWith' operator
$customer_type_not_starts_with = "customer_type_not_starts_with_example"; // string | Filter on CTM-TYP using 'NotStartsWith' operator
$customer_type_ends_with = "customer_type_ends_with_example"; // string | Filter on CTM-TYP using 'EndsWith' operator
$customer_type_not_ends_with = "customer_type_not_ends_with_example"; // string | Filter on CTM-TYP using 'NotEndsWith' operator
$customer_type_in = "customer_type_in_example"; // string | Filter on CTM-TYP using 'In' operator
$customer_type_between = "customer_type_between_example"; // string | Filter on CTM-TYP using 'Between' operator
$promote_flag_not_equal = "promote_flag_not_equal_example"; // string | Filter on PROMO using 'NotEqual' operator
$promote_flag_less = "promote_flag_less_example"; // string | Filter on PROMO using 'Less' operator
$promote_flag_less_or_equal = "promote_flag_less_or_equal_example"; // string | Filter on PROMO using 'LessOrEqual' operator
$promote_flag_greater = "promote_flag_greater_example"; // string | Filter on PROMO using 'Greater' operator
$promote_flag_greater_or_equal = "promote_flag_greater_or_equal_example"; // string | Filter on PROMO using 'GreaterOrEqual' operator
$promote_flag_is_null = "promote_flag_is_null_example"; // string | Filter on PROMO using 'IsNull' operator
$promote_flag_is_not_null = "promote_flag_is_not_null_example"; // string | Filter on PROMO using 'IsNotNull' operator
$promote_flag_like = "promote_flag_like_example"; // string | Filter on PROMO using 'Like' operator
$promote_flag_not_like = "promote_flag_not_like_example"; // string | Filter on PROMO using 'NotLike' operator
$promote_flag_contains = "promote_flag_contains_example"; // string | Filter on PROMO using 'Contains' operator
$promote_flag_not_contains = "promote_flag_not_contains_example"; // string | Filter on PROMO using 'NotContains' operator
$promote_flag_starts_with = "promote_flag_starts_with_example"; // string | Filter on PROMO using 'StartsWith' operator
$promote_flag_not_starts_with = "promote_flag_not_starts_with_example"; // string | Filter on PROMO using 'NotStartsWith' operator
$promote_flag_ends_with = "promote_flag_ends_with_example"; // string | Filter on PROMO using 'EndsWith' operator
$promote_flag_not_ends_with = "promote_flag_not_ends_with_example"; // string | Filter on PROMO using 'NotEndsWith' operator
$promote_flag_in = "promote_flag_in_example"; // string | Filter on PROMO using 'In' operator
$promote_flag_between = "promote_flag_between_example"; // string | Filter on PROMO using 'Between' operator
$promote_by_partners_not_equal = "promote_by_partners_not_equal_example"; // string | Filter on PMO-PTR using 'NotEqual' operator
$promote_by_partners_less = "promote_by_partners_less_example"; // string | Filter on PMO-PTR using 'Less' operator
$promote_by_partners_less_or_equal = "promote_by_partners_less_or_equal_example"; // string | Filter on PMO-PTR using 'LessOrEqual' operator
$promote_by_partners_greater = "promote_by_partners_greater_example"; // string | Filter on PMO-PTR using 'Greater' operator
$promote_by_partners_greater_or_equal = "promote_by_partners_greater_or_equal_example"; // string | Filter on PMO-PTR using 'GreaterOrEqual' operator
$promote_by_partners_is_null = "promote_by_partners_is_null_example"; // string | Filter on PMO-PTR using 'IsNull' operator
$promote_by_partners_is_not_null = "promote_by_partners_is_not_null_example"; // string | Filter on PMO-PTR using 'IsNotNull' operator
$promote_by_partners_like = "promote_by_partners_like_example"; // string | Filter on PMO-PTR using 'Like' operator
$promote_by_partners_not_like = "promote_by_partners_not_like_example"; // string | Filter on PMO-PTR using 'NotLike' operator
$promote_by_partners_contains = "promote_by_partners_contains_example"; // string | Filter on PMO-PTR using 'Contains' operator
$promote_by_partners_not_contains = "promote_by_partners_not_contains_example"; // string | Filter on PMO-PTR using 'NotContains' operator
$promote_by_partners_starts_with = "promote_by_partners_starts_with_example"; // string | Filter on PMO-PTR using 'StartsWith' operator
$promote_by_partners_not_starts_with = "promote_by_partners_not_starts_with_example"; // string | Filter on PMO-PTR using 'NotStartsWith' operator
$promote_by_partners_ends_with = "promote_by_partners_ends_with_example"; // string | Filter on PMO-PTR using 'EndsWith' operator
$promote_by_partners_not_ends_with = "promote_by_partners_not_ends_with_example"; // string | Filter on PMO-PTR using 'NotEndsWith' operator
$promote_by_partners_in = "promote_by_partners_in_example"; // string | Filter on PMO-PTR using 'In' operator
$promote_by_partners_between = "promote_by_partners_between_example"; // string | Filter on PMO-PTR using 'Between' operator
$promote_by_phone_not_equal = "promote_by_phone_not_equal_example"; // string | Filter on PMO-PHN using 'NotEqual' operator
$promote_by_phone_less = "promote_by_phone_less_example"; // string | Filter on PMO-PHN using 'Less' operator
$promote_by_phone_less_or_equal = "promote_by_phone_less_or_equal_example"; // string | Filter on PMO-PHN using 'LessOrEqual' operator
$promote_by_phone_greater = "promote_by_phone_greater_example"; // string | Filter on PMO-PHN using 'Greater' operator
$promote_by_phone_greater_or_equal = "promote_by_phone_greater_or_equal_example"; // string | Filter on PMO-PHN using 'GreaterOrEqual' operator
$promote_by_phone_is_null = "promote_by_phone_is_null_example"; // string | Filter on PMO-PHN using 'IsNull' operator
$promote_by_phone_is_not_null = "promote_by_phone_is_not_null_example"; // string | Filter on PMO-PHN using 'IsNotNull' operator
$promote_by_phone_like = "promote_by_phone_like_example"; // string | Filter on PMO-PHN using 'Like' operator
$promote_by_phone_not_like = "promote_by_phone_not_like_example"; // string | Filter on PMO-PHN using 'NotLike' operator
$promote_by_phone_contains = "promote_by_phone_contains_example"; // string | Filter on PMO-PHN using 'Contains' operator
$promote_by_phone_not_contains = "promote_by_phone_not_contains_example"; // string | Filter on PMO-PHN using 'NotContains' operator
$promote_by_phone_starts_with = "promote_by_phone_starts_with_example"; // string | Filter on PMO-PHN using 'StartsWith' operator
$promote_by_phone_not_starts_with = "promote_by_phone_not_starts_with_example"; // string | Filter on PMO-PHN using 'NotStartsWith' operator
$promote_by_phone_ends_with = "promote_by_phone_ends_with_example"; // string | Filter on PMO-PHN using 'EndsWith' operator
$promote_by_phone_not_ends_with = "promote_by_phone_not_ends_with_example"; // string | Filter on PMO-PHN using 'NotEndsWith' operator
$promote_by_phone_in = "promote_by_phone_in_example"; // string | Filter on PMO-PHN using 'In' operator
$promote_by_phone_between = "promote_by_phone_between_example"; // string | Filter on PMO-PHN using 'Between' operator
$promote_by_fax_not_equal = "promote_by_fax_not_equal_example"; // string | Filter on PMO-FAX using 'NotEqual' operator
$promote_by_fax_less = "promote_by_fax_less_example"; // string | Filter on PMO-FAX using 'Less' operator
$promote_by_fax_less_or_equal = "promote_by_fax_less_or_equal_example"; // string | Filter on PMO-FAX using 'LessOrEqual' operator
$promote_by_fax_greater = "promote_by_fax_greater_example"; // string | Filter on PMO-FAX using 'Greater' operator
$promote_by_fax_greater_or_equal = "promote_by_fax_greater_or_equal_example"; // string | Filter on PMO-FAX using 'GreaterOrEqual' operator
$promote_by_fax_is_null = "promote_by_fax_is_null_example"; // string | Filter on PMO-FAX using 'IsNull' operator
$promote_by_fax_is_not_null = "promote_by_fax_is_not_null_example"; // string | Filter on PMO-FAX using 'IsNotNull' operator
$promote_by_fax_like = "promote_by_fax_like_example"; // string | Filter on PMO-FAX using 'Like' operator
$promote_by_fax_not_like = "promote_by_fax_not_like_example"; // string | Filter on PMO-FAX using 'NotLike' operator
$promote_by_fax_contains = "promote_by_fax_contains_example"; // string | Filter on PMO-FAX using 'Contains' operator
$promote_by_fax_not_contains = "promote_by_fax_not_contains_example"; // string | Filter on PMO-FAX using 'NotContains' operator
$promote_by_fax_starts_with = "promote_by_fax_starts_with_example"; // string | Filter on PMO-FAX using 'StartsWith' operator
$promote_by_fax_not_starts_with = "promote_by_fax_not_starts_with_example"; // string | Filter on PMO-FAX using 'NotStartsWith' operator
$promote_by_fax_ends_with = "promote_by_fax_ends_with_example"; // string | Filter on PMO-FAX using 'EndsWith' operator
$promote_by_fax_not_ends_with = "promote_by_fax_not_ends_with_example"; // string | Filter on PMO-FAX using 'NotEndsWith' operator
$promote_by_fax_in = "promote_by_fax_in_example"; // string | Filter on PMO-FAX using 'In' operator
$promote_by_fax_between = "promote_by_fax_between_example"; // string | Filter on PMO-FAX using 'Between' operator
$promote_by_email_not_equal = "promote_by_email_not_equal_example"; // string | Filter on PMO-EML using 'NotEqual' operator
$promote_by_email_less = "promote_by_email_less_example"; // string | Filter on PMO-EML using 'Less' operator
$promote_by_email_less_or_equal = "promote_by_email_less_or_equal_example"; // string | Filter on PMO-EML using 'LessOrEqual' operator
$promote_by_email_greater = "promote_by_email_greater_example"; // string | Filter on PMO-EML using 'Greater' operator
$promote_by_email_greater_or_equal = "promote_by_email_greater_or_equal_example"; // string | Filter on PMO-EML using 'GreaterOrEqual' operator
$promote_by_email_is_null = "promote_by_email_is_null_example"; // string | Filter on PMO-EML using 'IsNull' operator
$promote_by_email_is_not_null = "promote_by_email_is_not_null_example"; // string | Filter on PMO-EML using 'IsNotNull' operator
$promote_by_email_like = "promote_by_email_like_example"; // string | Filter on PMO-EML using 'Like' operator
$promote_by_email_not_like = "promote_by_email_not_like_example"; // string | Filter on PMO-EML using 'NotLike' operator
$promote_by_email_contains = "promote_by_email_contains_example"; // string | Filter on PMO-EML using 'Contains' operator
$promote_by_email_not_contains = "promote_by_email_not_contains_example"; // string | Filter on PMO-EML using 'NotContains' operator
$promote_by_email_starts_with = "promote_by_email_starts_with_example"; // string | Filter on PMO-EML using 'StartsWith' operator
$promote_by_email_not_starts_with = "promote_by_email_not_starts_with_example"; // string | Filter on PMO-EML using 'NotStartsWith' operator
$promote_by_email_ends_with = "promote_by_email_ends_with_example"; // string | Filter on PMO-EML using 'EndsWith' operator
$promote_by_email_not_ends_with = "promote_by_email_not_ends_with_example"; // string | Filter on PMO-EML using 'NotEndsWith' operator
$promote_by_email_in = "promote_by_email_in_example"; // string | Filter on PMO-EML using 'In' operator
$promote_by_email_between = "promote_by_email_between_example"; // string | Filter on PMO-EML using 'Between' operator
$promote_by_mail_not_equal = "promote_by_mail_not_equal_example"; // string | Filter on PMO-ADR using 'NotEqual' operator
$promote_by_mail_less = "promote_by_mail_less_example"; // string | Filter on PMO-ADR using 'Less' operator
$promote_by_mail_less_or_equal = "promote_by_mail_less_or_equal_example"; // string | Filter on PMO-ADR using 'LessOrEqual' operator
$promote_by_mail_greater = "promote_by_mail_greater_example"; // string | Filter on PMO-ADR using 'Greater' operator
$promote_by_mail_greater_or_equal = "promote_by_mail_greater_or_equal_example"; // string | Filter on PMO-ADR using 'GreaterOrEqual' operator
$promote_by_mail_is_null = "promote_by_mail_is_null_example"; // string | Filter on PMO-ADR using 'IsNull' operator
$promote_by_mail_is_not_null = "promote_by_mail_is_not_null_example"; // string | Filter on PMO-ADR using 'IsNotNull' operator
$promote_by_mail_like = "promote_by_mail_like_example"; // string | Filter on PMO-ADR using 'Like' operator
$promote_by_mail_not_like = "promote_by_mail_not_like_example"; // string | Filter on PMO-ADR using 'NotLike' operator
$promote_by_mail_contains = "promote_by_mail_contains_example"; // string | Filter on PMO-ADR using 'Contains' operator
$promote_by_mail_not_contains = "promote_by_mail_not_contains_example"; // string | Filter on PMO-ADR using 'NotContains' operator
$promote_by_mail_starts_with = "promote_by_mail_starts_with_example"; // string | Filter on PMO-ADR using 'StartsWith' operator
$promote_by_mail_not_starts_with = "promote_by_mail_not_starts_with_example"; // string | Filter on PMO-ADR using 'NotStartsWith' operator
$promote_by_mail_ends_with = "promote_by_mail_ends_with_example"; // string | Filter on PMO-ADR using 'EndsWith' operator
$promote_by_mail_not_ends_with = "promote_by_mail_not_ends_with_example"; // string | Filter on PMO-ADR using 'NotEndsWith' operator
$promote_by_mail_in = "promote_by_mail_in_example"; // string | Filter on PMO-ADR using 'In' operator
$promote_by_mail_between = "promote_by_mail_between_example"; // string | Filter on PMO-ADR using 'Between' operator
$promote_by_sms_not_equal = "promote_by_sms_not_equal_example"; // string | Filter on PMO-SMS using 'NotEqual' operator
$promote_by_sms_less = "promote_by_sms_less_example"; // string | Filter on PMO-SMS using 'Less' operator
$promote_by_sms_less_or_equal = "promote_by_sms_less_or_equal_example"; // string | Filter on PMO-SMS using 'LessOrEqual' operator
$promote_by_sms_greater = "promote_by_sms_greater_example"; // string | Filter on PMO-SMS using 'Greater' operator
$promote_by_sms_greater_or_equal = "promote_by_sms_greater_or_equal_example"; // string | Filter on PMO-SMS using 'GreaterOrEqual' operator
$promote_by_sms_is_null = "promote_by_sms_is_null_example"; // string | Filter on PMO-SMS using 'IsNull' operator
$promote_by_sms_is_not_null = "promote_by_sms_is_not_null_example"; // string | Filter on PMO-SMS using 'IsNotNull' operator
$promote_by_sms_like = "promote_by_sms_like_example"; // string | Filter on PMO-SMS using 'Like' operator
$promote_by_sms_not_like = "promote_by_sms_not_like_example"; // string | Filter on PMO-SMS using 'NotLike' operator
$promote_by_sms_contains = "promote_by_sms_contains_example"; // string | Filter on PMO-SMS using 'Contains' operator
$promote_by_sms_not_contains = "promote_by_sms_not_contains_example"; // string | Filter on PMO-SMS using 'NotContains' operator
$promote_by_sms_starts_with = "promote_by_sms_starts_with_example"; // string | Filter on PMO-SMS using 'StartsWith' operator
$promote_by_sms_not_starts_with = "promote_by_sms_not_starts_with_example"; // string | Filter on PMO-SMS using 'NotStartsWith' operator
$promote_by_sms_ends_with = "promote_by_sms_ends_with_example"; // string | Filter on PMO-SMS using 'EndsWith' operator
$promote_by_sms_not_ends_with = "promote_by_sms_not_ends_with_example"; // string | Filter on PMO-SMS using 'NotEndsWith' operator
$promote_by_sms_in = "promote_by_sms_in_example"; // string | Filter on PMO-SMS using 'In' operator
$promote_by_sms_between = "promote_by_sms_between_example"; // string | Filter on PMO-SMS using 'Between' operator
$promote_by_phone1_not_equal = "promote_by_phone1_not_equal_example"; // string | Filter on PMO-PH1 using 'NotEqual' operator
$promote_by_phone1_less = "promote_by_phone1_less_example"; // string | Filter on PMO-PH1 using 'Less' operator
$promote_by_phone1_less_or_equal = "promote_by_phone1_less_or_equal_example"; // string | Filter on PMO-PH1 using 'LessOrEqual' operator
$promote_by_phone1_greater = "promote_by_phone1_greater_example"; // string | Filter on PMO-PH1 using 'Greater' operator
$promote_by_phone1_greater_or_equal = "promote_by_phone1_greater_or_equal_example"; // string | Filter on PMO-PH1 using 'GreaterOrEqual' operator
$promote_by_phone1_is_null = "promote_by_phone1_is_null_example"; // string | Filter on PMO-PH1 using 'IsNull' operator
$promote_by_phone1_is_not_null = "promote_by_phone1_is_not_null_example"; // string | Filter on PMO-PH1 using 'IsNotNull' operator
$promote_by_phone1_like = "promote_by_phone1_like_example"; // string | Filter on PMO-PH1 using 'Like' operator
$promote_by_phone1_not_like = "promote_by_phone1_not_like_example"; // string | Filter on PMO-PH1 using 'NotLike' operator
$promote_by_phone1_contains = "promote_by_phone1_contains_example"; // string | Filter on PMO-PH1 using 'Contains' operator
$promote_by_phone1_not_contains = "promote_by_phone1_not_contains_example"; // string | Filter on PMO-PH1 using 'NotContains' operator
$promote_by_phone1_starts_with = "promote_by_phone1_starts_with_example"; // string | Filter on PMO-PH1 using 'StartsWith' operator
$promote_by_phone1_not_starts_with = "promote_by_phone1_not_starts_with_example"; // string | Filter on PMO-PH1 using 'NotStartsWith' operator
$promote_by_phone1_ends_with = "promote_by_phone1_ends_with_example"; // string | Filter on PMO-PH1 using 'EndsWith' operator
$promote_by_phone1_not_ends_with = "promote_by_phone1_not_ends_with_example"; // string | Filter on PMO-PH1 using 'NotEndsWith' operator
$promote_by_phone1_in = "promote_by_phone1_in_example"; // string | Filter on PMO-PH1 using 'In' operator
$promote_by_phone1_between = "promote_by_phone1_between_example"; // string | Filter on PMO-PH1 using 'Between' operator
$promote_by_phone2_not_equal = "promote_by_phone2_not_equal_example"; // string | Filter on PMO-PH2 using 'NotEqual' operator
$promote_by_phone2_less = "promote_by_phone2_less_example"; // string | Filter on PMO-PH2 using 'Less' operator
$promote_by_phone2_less_or_equal = "promote_by_phone2_less_or_equal_example"; // string | Filter on PMO-PH2 using 'LessOrEqual' operator
$promote_by_phone2_greater = "promote_by_phone2_greater_example"; // string | Filter on PMO-PH2 using 'Greater' operator
$promote_by_phone2_greater_or_equal = "promote_by_phone2_greater_or_equal_example"; // string | Filter on PMO-PH2 using 'GreaterOrEqual' operator
$promote_by_phone2_is_null = "promote_by_phone2_is_null_example"; // string | Filter on PMO-PH2 using 'IsNull' operator
$promote_by_phone2_is_not_null = "promote_by_phone2_is_not_null_example"; // string | Filter on PMO-PH2 using 'IsNotNull' operator
$promote_by_phone2_like = "promote_by_phone2_like_example"; // string | Filter on PMO-PH2 using 'Like' operator
$promote_by_phone2_not_like = "promote_by_phone2_not_like_example"; // string | Filter on PMO-PH2 using 'NotLike' operator
$promote_by_phone2_contains = "promote_by_phone2_contains_example"; // string | Filter on PMO-PH2 using 'Contains' operator
$promote_by_phone2_not_contains = "promote_by_phone2_not_contains_example"; // string | Filter on PMO-PH2 using 'NotContains' operator
$promote_by_phone2_starts_with = "promote_by_phone2_starts_with_example"; // string | Filter on PMO-PH2 using 'StartsWith' operator
$promote_by_phone2_not_starts_with = "promote_by_phone2_not_starts_with_example"; // string | Filter on PMO-PH2 using 'NotStartsWith' operator
$promote_by_phone2_ends_with = "promote_by_phone2_ends_with_example"; // string | Filter on PMO-PH2 using 'EndsWith' operator
$promote_by_phone2_not_ends_with = "promote_by_phone2_not_ends_with_example"; // string | Filter on PMO-PH2 using 'NotEndsWith' operator
$promote_by_phone2_in = "promote_by_phone2_in_example"; // string | Filter on PMO-PH2 using 'In' operator
$promote_by_phone2_between = "promote_by_phone2_between_example"; // string | Filter on PMO-PH2 using 'Between' operator
$promote_by_phone3_not_equal = "promote_by_phone3_not_equal_example"; // string | Filter on PMO-PH3 using 'NotEqual' operator
$promote_by_phone3_less = "promote_by_phone3_less_example"; // string | Filter on PMO-PH3 using 'Less' operator
$promote_by_phone3_less_or_equal = "promote_by_phone3_less_or_equal_example"; // string | Filter on PMO-PH3 using 'LessOrEqual' operator
$promote_by_phone3_greater = "promote_by_phone3_greater_example"; // string | Filter on PMO-PH3 using 'Greater' operator
$promote_by_phone3_greater_or_equal = "promote_by_phone3_greater_or_equal_example"; // string | Filter on PMO-PH3 using 'GreaterOrEqual' operator
$promote_by_phone3_is_null = "promote_by_phone3_is_null_example"; // string | Filter on PMO-PH3 using 'IsNull' operator
$promote_by_phone3_is_not_null = "promote_by_phone3_is_not_null_example"; // string | Filter on PMO-PH3 using 'IsNotNull' operator
$promote_by_phone3_like = "promote_by_phone3_like_example"; // string | Filter on PMO-PH3 using 'Like' operator
$promote_by_phone3_not_like = "promote_by_phone3_not_like_example"; // string | Filter on PMO-PH3 using 'NotLike' operator
$promote_by_phone3_contains = "promote_by_phone3_contains_example"; // string | Filter on PMO-PH3 using 'Contains' operator
$promote_by_phone3_not_contains = "promote_by_phone3_not_contains_example"; // string | Filter on PMO-PH3 using 'NotContains' operator
$promote_by_phone3_starts_with = "promote_by_phone3_starts_with_example"; // string | Filter on PMO-PH3 using 'StartsWith' operator
$promote_by_phone3_not_starts_with = "promote_by_phone3_not_starts_with_example"; // string | Filter on PMO-PH3 using 'NotStartsWith' operator
$promote_by_phone3_ends_with = "promote_by_phone3_ends_with_example"; // string | Filter on PMO-PH3 using 'EndsWith' operator
$promote_by_phone3_not_ends_with = "promote_by_phone3_not_ends_with_example"; // string | Filter on PMO-PH3 using 'NotEndsWith' operator
$promote_by_phone3_in = "promote_by_phone3_in_example"; // string | Filter on PMO-PH3 using 'In' operator
$promote_by_phone3_between = "promote_by_phone3_between_example"; // string | Filter on PMO-PH3 using 'Between' operator
$title_not_equal = "title_not_equal_example"; // string | Filter on CTM-TTL using 'NotEqual' operator
$title_less = "title_less_example"; // string | Filter on CTM-TTL using 'Less' operator
$title_less_or_equal = "title_less_or_equal_example"; // string | Filter on CTM-TTL using 'LessOrEqual' operator
$title_greater = "title_greater_example"; // string | Filter on CTM-TTL using 'Greater' operator
$title_greater_or_equal = "title_greater_or_equal_example"; // string | Filter on CTM-TTL using 'GreaterOrEqual' operator
$title_is_null = "title_is_null_example"; // string | Filter on CTM-TTL using 'IsNull' operator
$title_is_not_null = "title_is_not_null_example"; // string | Filter on CTM-TTL using 'IsNotNull' operator
$title_like = "title_like_example"; // string | Filter on CTM-TTL using 'Like' operator
$title_not_like = "title_not_like_example"; // string | Filter on CTM-TTL using 'NotLike' operator
$title_contains = "title_contains_example"; // string | Filter on CTM-TTL using 'Contains' operator
$title_not_contains = "title_not_contains_example"; // string | Filter on CTM-TTL using 'NotContains' operator
$title_starts_with = "title_starts_with_example"; // string | Filter on CTM-TTL using 'StartsWith' operator
$title_not_starts_with = "title_not_starts_with_example"; // string | Filter on CTM-TTL using 'NotStartsWith' operator
$title_ends_with = "title_ends_with_example"; // string | Filter on CTM-TTL using 'EndsWith' operator
$title_not_ends_with = "title_not_ends_with_example"; // string | Filter on CTM-TTL using 'NotEndsWith' operator
$title_in = "title_in_example"; // string | Filter on CTM-TTL using 'In' operator
$title_between = "title_between_example"; // string | Filter on CTM-TTL using 'Between' operator
$first_name_not_equal = "first_name_not_equal_example"; // string | Filter on ATN-1ST using 'NotEqual' operator
$first_name_less = "first_name_less_example"; // string | Filter on ATN-1ST using 'Less' operator
$first_name_less_or_equal = "first_name_less_or_equal_example"; // string | Filter on ATN-1ST using 'LessOrEqual' operator
$first_name_greater = "first_name_greater_example"; // string | Filter on ATN-1ST using 'Greater' operator
$first_name_greater_or_equal = "first_name_greater_or_equal_example"; // string | Filter on ATN-1ST using 'GreaterOrEqual' operator
$first_name_is_null = "first_name_is_null_example"; // string | Filter on ATN-1ST using 'IsNull' operator
$first_name_is_not_null = "first_name_is_not_null_example"; // string | Filter on ATN-1ST using 'IsNotNull' operator
$first_name_like = "first_name_like_example"; // string | Filter on ATN-1ST using 'Like' operator
$first_name_not_like = "first_name_not_like_example"; // string | Filter on ATN-1ST using 'NotLike' operator
$first_name_contains = "first_name_contains_example"; // string | Filter on ATN-1ST using 'Contains' operator
$first_name_not_contains = "first_name_not_contains_example"; // string | Filter on ATN-1ST using 'NotContains' operator
$first_name_starts_with = "first_name_starts_with_example"; // string | Filter on ATN-1ST using 'StartsWith' operator
$first_name_not_starts_with = "first_name_not_starts_with_example"; // string | Filter on ATN-1ST using 'NotStartsWith' operator
$first_name_ends_with = "first_name_ends_with_example"; // string | Filter on ATN-1ST using 'EndsWith' operator
$first_name_not_ends_with = "first_name_not_ends_with_example"; // string | Filter on ATN-1ST using 'NotEndsWith' operator
$first_name_in = "first_name_in_example"; // string | Filter on ATN-1ST using 'In' operator
$first_name_between = "first_name_between_example"; // string | Filter on ATN-1ST using 'Between' operator
$middle_initial_not_equal = "middle_initial_not_equal_example"; // string | Filter on ATN-MID using 'NotEqual' operator
$middle_initial_less = "middle_initial_less_example"; // string | Filter on ATN-MID using 'Less' operator
$middle_initial_less_or_equal = "middle_initial_less_or_equal_example"; // string | Filter on ATN-MID using 'LessOrEqual' operator
$middle_initial_greater = "middle_initial_greater_example"; // string | Filter on ATN-MID using 'Greater' operator
$middle_initial_greater_or_equal = "middle_initial_greater_or_equal_example"; // string | Filter on ATN-MID using 'GreaterOrEqual' operator
$middle_initial_is_null = "middle_initial_is_null_example"; // string | Filter on ATN-MID using 'IsNull' operator
$middle_initial_is_not_null = "middle_initial_is_not_null_example"; // string | Filter on ATN-MID using 'IsNotNull' operator
$middle_initial_like = "middle_initial_like_example"; // string | Filter on ATN-MID using 'Like' operator
$middle_initial_not_like = "middle_initial_not_like_example"; // string | Filter on ATN-MID using 'NotLike' operator
$middle_initial_contains = "middle_initial_contains_example"; // string | Filter on ATN-MID using 'Contains' operator
$middle_initial_not_contains = "middle_initial_not_contains_example"; // string | Filter on ATN-MID using 'NotContains' operator
$middle_initial_starts_with = "middle_initial_starts_with_example"; // string | Filter on ATN-MID using 'StartsWith' operator
$middle_initial_not_starts_with = "middle_initial_not_starts_with_example"; // string | Filter on ATN-MID using 'NotStartsWith' operator
$middle_initial_ends_with = "middle_initial_ends_with_example"; // string | Filter on ATN-MID using 'EndsWith' operator
$middle_initial_not_ends_with = "middle_initial_not_ends_with_example"; // string | Filter on ATN-MID using 'NotEndsWith' operator
$middle_initial_in = "middle_initial_in_example"; // string | Filter on ATN-MID using 'In' operator
$middle_initial_between = "middle_initial_between_example"; // string | Filter on ATN-MID using 'Between' operator
$last_name_not_equal = "last_name_not_equal_example"; // string | Filter on ATN-END using 'NotEqual' operator
$last_name_less = "last_name_less_example"; // string | Filter on ATN-END using 'Less' operator
$last_name_less_or_equal = "last_name_less_or_equal_example"; // string | Filter on ATN-END using 'LessOrEqual' operator
$last_name_greater = "last_name_greater_example"; // string | Filter on ATN-END using 'Greater' operator
$last_name_greater_or_equal = "last_name_greater_or_equal_example"; // string | Filter on ATN-END using 'GreaterOrEqual' operator
$last_name_is_null = "last_name_is_null_example"; // string | Filter on ATN-END using 'IsNull' operator
$last_name_is_not_null = "last_name_is_not_null_example"; // string | Filter on ATN-END using 'IsNotNull' operator
$last_name_like = "last_name_like_example"; // string | Filter on ATN-END using 'Like' operator
$last_name_not_like = "last_name_not_like_example"; // string | Filter on ATN-END using 'NotLike' operator
$last_name_contains = "last_name_contains_example"; // string | Filter on ATN-END using 'Contains' operator
$last_name_not_contains = "last_name_not_contains_example"; // string | Filter on ATN-END using 'NotContains' operator
$last_name_starts_with = "last_name_starts_with_example"; // string | Filter on ATN-END using 'StartsWith' operator
$last_name_not_starts_with = "last_name_not_starts_with_example"; // string | Filter on ATN-END using 'NotStartsWith' operator
$last_name_ends_with = "last_name_ends_with_example"; // string | Filter on ATN-END using 'EndsWith' operator
$last_name_not_ends_with = "last_name_not_ends_with_example"; // string | Filter on ATN-END using 'NotEndsWith' operator
$last_name_in = "last_name_in_example"; // string | Filter on ATN-END using 'In' operator
$last_name_between = "last_name_between_example"; // string | Filter on ATN-END using 'Between' operator
$suffix_not_equal = "suffix_not_equal_example"; // string | Filter on CTM-SFX using 'NotEqual' operator
$suffix_less = "suffix_less_example"; // string | Filter on CTM-SFX using 'Less' operator
$suffix_less_or_equal = "suffix_less_or_equal_example"; // string | Filter on CTM-SFX using 'LessOrEqual' operator
$suffix_greater = "suffix_greater_example"; // string | Filter on CTM-SFX using 'Greater' operator
$suffix_greater_or_equal = "suffix_greater_or_equal_example"; // string | Filter on CTM-SFX using 'GreaterOrEqual' operator
$suffix_is_null = "suffix_is_null_example"; // string | Filter on CTM-SFX using 'IsNull' operator
$suffix_is_not_null = "suffix_is_not_null_example"; // string | Filter on CTM-SFX using 'IsNotNull' operator
$suffix_like = "suffix_like_example"; // string | Filter on CTM-SFX using 'Like' operator
$suffix_not_like = "suffix_not_like_example"; // string | Filter on CTM-SFX using 'NotLike' operator
$suffix_contains = "suffix_contains_example"; // string | Filter on CTM-SFX using 'Contains' operator
$suffix_not_contains = "suffix_not_contains_example"; // string | Filter on CTM-SFX using 'NotContains' operator
$suffix_starts_with = "suffix_starts_with_example"; // string | Filter on CTM-SFX using 'StartsWith' operator
$suffix_not_starts_with = "suffix_not_starts_with_example"; // string | Filter on CTM-SFX using 'NotStartsWith' operator
$suffix_ends_with = "suffix_ends_with_example"; // string | Filter on CTM-SFX using 'EndsWith' operator
$suffix_not_ends_with = "suffix_not_ends_with_example"; // string | Filter on CTM-SFX using 'NotEndsWith' operator
$suffix_in = "suffix_in_example"; // string | Filter on CTM-SFX using 'In' operator
$suffix_between = "suffix_between_example"; // string | Filter on CTM-SFX using 'Between' operator
$job_title_not_equal = "job_title_not_equal_example"; // string | Filter on JOB-TTL using 'NotEqual' operator
$job_title_less = "job_title_less_example"; // string | Filter on JOB-TTL using 'Less' operator
$job_title_less_or_equal = "job_title_less_or_equal_example"; // string | Filter on JOB-TTL using 'LessOrEqual' operator
$job_title_greater = "job_title_greater_example"; // string | Filter on JOB-TTL using 'Greater' operator
$job_title_greater_or_equal = "job_title_greater_or_equal_example"; // string | Filter on JOB-TTL using 'GreaterOrEqual' operator
$job_title_is_null = "job_title_is_null_example"; // string | Filter on JOB-TTL using 'IsNull' operator
$job_title_is_not_null = "job_title_is_not_null_example"; // string | Filter on JOB-TTL using 'IsNotNull' operator
$job_title_like = "job_title_like_example"; // string | Filter on JOB-TTL using 'Like' operator
$job_title_not_like = "job_title_not_like_example"; // string | Filter on JOB-TTL using 'NotLike' operator
$job_title_contains = "job_title_contains_example"; // string | Filter on JOB-TTL using 'Contains' operator
$job_title_not_contains = "job_title_not_contains_example"; // string | Filter on JOB-TTL using 'NotContains' operator
$job_title_starts_with = "job_title_starts_with_example"; // string | Filter on JOB-TTL using 'StartsWith' operator
$job_title_not_starts_with = "job_title_not_starts_with_example"; // string | Filter on JOB-TTL using 'NotStartsWith' operator
$job_title_ends_with = "job_title_ends_with_example"; // string | Filter on JOB-TTL using 'EndsWith' operator
$job_title_not_ends_with = "job_title_not_ends_with_example"; // string | Filter on JOB-TTL using 'NotEndsWith' operator
$job_title_in = "job_title_in_example"; // string | Filter on JOB-TTL using 'In' operator
$job_title_between = "job_title_between_example"; // string | Filter on JOB-TTL using 'Between' operator
$job_position_code_not_equal = "job_position_code_not_equal_example"; // string | Filter on CTM-POS using 'NotEqual' operator
$job_position_code_less = "job_position_code_less_example"; // string | Filter on CTM-POS using 'Less' operator
$job_position_code_less_or_equal = "job_position_code_less_or_equal_example"; // string | Filter on CTM-POS using 'LessOrEqual' operator
$job_position_code_greater = "job_position_code_greater_example"; // string | Filter on CTM-POS using 'Greater' operator
$job_position_code_greater_or_equal = "job_position_code_greater_or_equal_example"; // string | Filter on CTM-POS using 'GreaterOrEqual' operator
$job_position_code_is_null = "job_position_code_is_null_example"; // string | Filter on CTM-POS using 'IsNull' operator
$job_position_code_is_not_null = "job_position_code_is_not_null_example"; // string | Filter on CTM-POS using 'IsNotNull' operator
$job_position_code_like = "job_position_code_like_example"; // string | Filter on CTM-POS using 'Like' operator
$job_position_code_not_like = "job_position_code_not_like_example"; // string | Filter on CTM-POS using 'NotLike' operator
$job_position_code_contains = "job_position_code_contains_example"; // string | Filter on CTM-POS using 'Contains' operator
$job_position_code_not_contains = "job_position_code_not_contains_example"; // string | Filter on CTM-POS using 'NotContains' operator
$job_position_code_starts_with = "job_position_code_starts_with_example"; // string | Filter on CTM-POS using 'StartsWith' operator
$job_position_code_not_starts_with = "job_position_code_not_starts_with_example"; // string | Filter on CTM-POS using 'NotStartsWith' operator
$job_position_code_ends_with = "job_position_code_ends_with_example"; // string | Filter on CTM-POS using 'EndsWith' operator
$job_position_code_not_ends_with = "job_position_code_not_ends_with_example"; // string | Filter on CTM-POS using 'NotEndsWith' operator
$job_position_code_in = "job_position_code_in_example"; // string | Filter on CTM-POS using 'In' operator
$job_position_code_between = "job_position_code_between_example"; // string | Filter on CTM-POS using 'Between' operator
$communication_preference_not_equal = "communication_preference_not_equal_example"; // string | Filter on COMM-PRF using 'NotEqual' operator
$communication_preference_less = "communication_preference_less_example"; // string | Filter on COMM-PRF using 'Less' operator
$communication_preference_less_or_equal = "communication_preference_less_or_equal_example"; // string | Filter on COMM-PRF using 'LessOrEqual' operator
$communication_preference_greater = "communication_preference_greater_example"; // string | Filter on COMM-PRF using 'Greater' operator
$communication_preference_greater_or_equal = "communication_preference_greater_or_equal_example"; // string | Filter on COMM-PRF using 'GreaterOrEqual' operator
$communication_preference_is_null = "communication_preference_is_null_example"; // string | Filter on COMM-PRF using 'IsNull' operator
$communication_preference_is_not_null = "communication_preference_is_not_null_example"; // string | Filter on COMM-PRF using 'IsNotNull' operator
$communication_preference_like = "communication_preference_like_example"; // string | Filter on COMM-PRF using 'Like' operator
$communication_preference_not_like = "communication_preference_not_like_example"; // string | Filter on COMM-PRF using 'NotLike' operator
$communication_preference_contains = "communication_preference_contains_example"; // string | Filter on COMM-PRF using 'Contains' operator
$communication_preference_not_contains = "communication_preference_not_contains_example"; // string | Filter on COMM-PRF using 'NotContains' operator
$communication_preference_starts_with = "communication_preference_starts_with_example"; // string | Filter on COMM-PRF using 'StartsWith' operator
$communication_preference_not_starts_with = "communication_preference_not_starts_with_example"; // string | Filter on COMM-PRF using 'NotStartsWith' operator
$communication_preference_ends_with = "communication_preference_ends_with_example"; // string | Filter on COMM-PRF using 'EndsWith' operator
$communication_preference_not_ends_with = "communication_preference_not_ends_with_example"; // string | Filter on COMM-PRF using 'NotEndsWith' operator
$communication_preference_in = "communication_preference_in_example"; // string | Filter on COMM-PRF using 'In' operator
$communication_preference_between = "communication_preference_between_example"; // string | Filter on COMM-PRF using 'Between' operator
$source_promotion_not_equal = "source_promotion_not_equal_example"; // string | Filter on CTM-SRC using 'NotEqual' operator
$source_promotion_less = "source_promotion_less_example"; // string | Filter on CTM-SRC using 'Less' operator
$source_promotion_less_or_equal = "source_promotion_less_or_equal_example"; // string | Filter on CTM-SRC using 'LessOrEqual' operator
$source_promotion_greater = "source_promotion_greater_example"; // string | Filter on CTM-SRC using 'Greater' operator
$source_promotion_greater_or_equal = "source_promotion_greater_or_equal_example"; // string | Filter on CTM-SRC using 'GreaterOrEqual' operator
$source_promotion_is_null = "source_promotion_is_null_example"; // string | Filter on CTM-SRC using 'IsNull' operator
$source_promotion_is_not_null = "source_promotion_is_not_null_example"; // string | Filter on CTM-SRC using 'IsNotNull' operator
$source_promotion_like = "source_promotion_like_example"; // string | Filter on CTM-SRC using 'Like' operator
$source_promotion_not_like = "source_promotion_not_like_example"; // string | Filter on CTM-SRC using 'NotLike' operator
$source_promotion_contains = "source_promotion_contains_example"; // string | Filter on CTM-SRC using 'Contains' operator
$source_promotion_not_contains = "source_promotion_not_contains_example"; // string | Filter on CTM-SRC using 'NotContains' operator
$source_promotion_starts_with = "source_promotion_starts_with_example"; // string | Filter on CTM-SRC using 'StartsWith' operator
$source_promotion_not_starts_with = "source_promotion_not_starts_with_example"; // string | Filter on CTM-SRC using 'NotStartsWith' operator
$source_promotion_ends_with = "source_promotion_ends_with_example"; // string | Filter on CTM-SRC using 'EndsWith' operator
$source_promotion_not_ends_with = "source_promotion_not_ends_with_example"; // string | Filter on CTM-SRC using 'NotEndsWith' operator
$source_promotion_in = "source_promotion_in_example"; // string | Filter on CTM-SRC using 'In' operator
$source_promotion_between = "source_promotion_between_example"; // string | Filter on CTM-SRC using 'Between' operator
$address_code_not_equal = "address_code_not_equal_example"; // string | Filter on ADR-CDE using 'NotEqual' operator
$address_code_less = "address_code_less_example"; // string | Filter on ADR-CDE using 'Less' operator
$address_code_less_or_equal = "address_code_less_or_equal_example"; // string | Filter on ADR-CDE using 'LessOrEqual' operator
$address_code_greater = "address_code_greater_example"; // string | Filter on ADR-CDE using 'Greater' operator
$address_code_greater_or_equal = "address_code_greater_or_equal_example"; // string | Filter on ADR-CDE using 'GreaterOrEqual' operator
$address_code_is_null = "address_code_is_null_example"; // string | Filter on ADR-CDE using 'IsNull' operator
$address_code_is_not_null = "address_code_is_not_null_example"; // string | Filter on ADR-CDE using 'IsNotNull' operator
$address_code_like = "address_code_like_example"; // string | Filter on ADR-CDE using 'Like' operator
$address_code_not_like = "address_code_not_like_example"; // string | Filter on ADR-CDE using 'NotLike' operator
$address_code_contains = "address_code_contains_example"; // string | Filter on ADR-CDE using 'Contains' operator
$address_code_not_contains = "address_code_not_contains_example"; // string | Filter on ADR-CDE using 'NotContains' operator
$address_code_starts_with = "address_code_starts_with_example"; // string | Filter on ADR-CDE using 'StartsWith' operator
$address_code_not_starts_with = "address_code_not_starts_with_example"; // string | Filter on ADR-CDE using 'NotStartsWith' operator
$address_code_ends_with = "address_code_ends_with_example"; // string | Filter on ADR-CDE using 'EndsWith' operator
$address_code_not_ends_with = "address_code_not_ends_with_example"; // string | Filter on ADR-CDE using 'NotEndsWith' operator
$address_code_in = "address_code_in_example"; // string | Filter on ADR-CDE using 'In' operator
$address_code_between = "address_code_between_example"; // string | Filter on ADR-CDE using 'Between' operator
$default_currency_not_equal = "default_currency_not_equal_example"; // string | Filter on BIL-CUR using 'NotEqual' operator
$default_currency_less = "default_currency_less_example"; // string | Filter on BIL-CUR using 'Less' operator
$default_currency_less_or_equal = "default_currency_less_or_equal_example"; // string | Filter on BIL-CUR using 'LessOrEqual' operator
$default_currency_greater = "default_currency_greater_example"; // string | Filter on BIL-CUR using 'Greater' operator
$default_currency_greater_or_equal = "default_currency_greater_or_equal_example"; // string | Filter on BIL-CUR using 'GreaterOrEqual' operator
$default_currency_is_null = "default_currency_is_null_example"; // string | Filter on BIL-CUR using 'IsNull' operator
$default_currency_is_not_null = "default_currency_is_not_null_example"; // string | Filter on BIL-CUR using 'IsNotNull' operator
$default_currency_like = "default_currency_like_example"; // string | Filter on BIL-CUR using 'Like' operator
$default_currency_not_like = "default_currency_not_like_example"; // string | Filter on BIL-CUR using 'NotLike' operator
$default_currency_contains = "default_currency_contains_example"; // string | Filter on BIL-CUR using 'Contains' operator
$default_currency_not_contains = "default_currency_not_contains_example"; // string | Filter on BIL-CUR using 'NotContains' operator
$default_currency_starts_with = "default_currency_starts_with_example"; // string | Filter on BIL-CUR using 'StartsWith' operator
$default_currency_not_starts_with = "default_currency_not_starts_with_example"; // string | Filter on BIL-CUR using 'NotStartsWith' operator
$default_currency_ends_with = "default_currency_ends_with_example"; // string | Filter on BIL-CUR using 'EndsWith' operator
$default_currency_not_ends_with = "default_currency_not_ends_with_example"; // string | Filter on BIL-CUR using 'NotEndsWith' operator
$default_currency_in = "default_currency_in_example"; // string | Filter on BIL-CUR using 'In' operator
$default_currency_between = "default_currency_between_example"; // string | Filter on BIL-CUR using 'Between' operator
$department_not_equal = "department_not_equal_example"; // string | Filter on DPT-NME using 'NotEqual' operator
$department_less = "department_less_example"; // string | Filter on DPT-NME using 'Less' operator
$department_less_or_equal = "department_less_or_equal_example"; // string | Filter on DPT-NME using 'LessOrEqual' operator
$department_greater = "department_greater_example"; // string | Filter on DPT-NME using 'Greater' operator
$department_greater_or_equal = "department_greater_or_equal_example"; // string | Filter on DPT-NME using 'GreaterOrEqual' operator
$department_is_null = "department_is_null_example"; // string | Filter on DPT-NME using 'IsNull' operator
$department_is_not_null = "department_is_not_null_example"; // string | Filter on DPT-NME using 'IsNotNull' operator
$department_like = "department_like_example"; // string | Filter on DPT-NME using 'Like' operator
$department_not_like = "department_not_like_example"; // string | Filter on DPT-NME using 'NotLike' operator
$department_contains = "department_contains_example"; // string | Filter on DPT-NME using 'Contains' operator
$department_not_contains = "department_not_contains_example"; // string | Filter on DPT-NME using 'NotContains' operator
$department_starts_with = "department_starts_with_example"; // string | Filter on DPT-NME using 'StartsWith' operator
$department_not_starts_with = "department_not_starts_with_example"; // string | Filter on DPT-NME using 'NotStartsWith' operator
$department_ends_with = "department_ends_with_example"; // string | Filter on DPT-NME using 'EndsWith' operator
$department_not_ends_with = "department_not_ends_with_example"; // string | Filter on DPT-NME using 'NotEndsWith' operator
$department_in = "department_in_example"; // string | Filter on DPT-NME using 'In' operator
$department_between = "department_between_example"; // string | Filter on DPT-NME using 'Between' operator
$county_not_equal = "county_not_equal_example"; // string | Filter on CTM-CNTY using 'NotEqual' operator
$county_less = "county_less_example"; // string | Filter on CTM-CNTY using 'Less' operator
$county_less_or_equal = "county_less_or_equal_example"; // string | Filter on CTM-CNTY using 'LessOrEqual' operator
$county_greater = "county_greater_example"; // string | Filter on CTM-CNTY using 'Greater' operator
$county_greater_or_equal = "county_greater_or_equal_example"; // string | Filter on CTM-CNTY using 'GreaterOrEqual' operator
$county_is_null = "county_is_null_example"; // string | Filter on CTM-CNTY using 'IsNull' operator
$county_is_not_null = "county_is_not_null_example"; // string | Filter on CTM-CNTY using 'IsNotNull' operator
$county_like = "county_like_example"; // string | Filter on CTM-CNTY using 'Like' operator
$county_not_like = "county_not_like_example"; // string | Filter on CTM-CNTY using 'NotLike' operator
$county_contains = "county_contains_example"; // string | Filter on CTM-CNTY using 'Contains' operator
$county_not_contains = "county_not_contains_example"; // string | Filter on CTM-CNTY using 'NotContains' operator
$county_starts_with = "county_starts_with_example"; // string | Filter on CTM-CNTY using 'StartsWith' operator
$county_not_starts_with = "county_not_starts_with_example"; // string | Filter on CTM-CNTY using 'NotStartsWith' operator
$county_ends_with = "county_ends_with_example"; // string | Filter on CTM-CNTY using 'EndsWith' operator
$county_not_ends_with = "county_not_ends_with_example"; // string | Filter on CTM-CNTY using 'NotEndsWith' operator
$county_in = "county_in_example"; // string | Filter on CTM-CNTY using 'In' operator
$county_between = "county_between_example"; // string | Filter on CTM-CNTY using 'Between' operator
$pin_code_not_equal = "pin_code_not_equal_example"; // string | Filter on PIN-CODE using 'NotEqual' operator
$pin_code_less = "pin_code_less_example"; // string | Filter on PIN-CODE using 'Less' operator
$pin_code_less_or_equal = "pin_code_less_or_equal_example"; // string | Filter on PIN-CODE using 'LessOrEqual' operator
$pin_code_greater = "pin_code_greater_example"; // string | Filter on PIN-CODE using 'Greater' operator
$pin_code_greater_or_equal = "pin_code_greater_or_equal_example"; // string | Filter on PIN-CODE using 'GreaterOrEqual' operator
$pin_code_is_null = "pin_code_is_null_example"; // string | Filter on PIN-CODE using 'IsNull' operator
$pin_code_is_not_null = "pin_code_is_not_null_example"; // string | Filter on PIN-CODE using 'IsNotNull' operator
$pin_code_like = "pin_code_like_example"; // string | Filter on PIN-CODE using 'Like' operator
$pin_code_not_like = "pin_code_not_like_example"; // string | Filter on PIN-CODE using 'NotLike' operator
$pin_code_contains = "pin_code_contains_example"; // string | Filter on PIN-CODE using 'Contains' operator
$pin_code_not_contains = "pin_code_not_contains_example"; // string | Filter on PIN-CODE using 'NotContains' operator
$pin_code_starts_with = "pin_code_starts_with_example"; // string | Filter on PIN-CODE using 'StartsWith' operator
$pin_code_not_starts_with = "pin_code_not_starts_with_example"; // string | Filter on PIN-CODE using 'NotStartsWith' operator
$pin_code_ends_with = "pin_code_ends_with_example"; // string | Filter on PIN-CODE using 'EndsWith' operator
$pin_code_not_ends_with = "pin_code_not_ends_with_example"; // string | Filter on PIN-CODE using 'NotEndsWith' operator
$pin_code_in = "pin_code_in_example"; // string | Filter on PIN-CODE using 'In' operator
$pin_code_between = "pin_code_between_example"; // string | Filter on PIN-CODE using 'Between' operator
$social_security_number_not_equal = "social_security_number_not_equal_example"; // string | Filter on SOC-SEC using 'NotEqual' operator
$social_security_number_less = "social_security_number_less_example"; // string | Filter on SOC-SEC using 'Less' operator
$social_security_number_less_or_equal = "social_security_number_less_or_equal_example"; // string | Filter on SOC-SEC using 'LessOrEqual' operator
$social_security_number_greater = "social_security_number_greater_example"; // string | Filter on SOC-SEC using 'Greater' operator
$social_security_number_greater_or_equal = "social_security_number_greater_or_equal_example"; // string | Filter on SOC-SEC using 'GreaterOrEqual' operator
$social_security_number_is_null = "social_security_number_is_null_example"; // string | Filter on SOC-SEC using 'IsNull' operator
$social_security_number_is_not_null = "social_security_number_is_not_null_example"; // string | Filter on SOC-SEC using 'IsNotNull' operator
$social_security_number_like = "social_security_number_like_example"; // string | Filter on SOC-SEC using 'Like' operator
$social_security_number_not_like = "social_security_number_not_like_example"; // string | Filter on SOC-SEC using 'NotLike' operator
$social_security_number_contains = "social_security_number_contains_example"; // string | Filter on SOC-SEC using 'Contains' operator
$social_security_number_not_contains = "social_security_number_not_contains_example"; // string | Filter on SOC-SEC using 'NotContains' operator
$social_security_number_starts_with = "social_security_number_starts_with_example"; // string | Filter on SOC-SEC using 'StartsWith' operator
$social_security_number_not_starts_with = "social_security_number_not_starts_with_example"; // string | Filter on SOC-SEC using 'NotStartsWith' operator
$social_security_number_ends_with = "social_security_number_ends_with_example"; // string | Filter on SOC-SEC using 'EndsWith' operator
$social_security_number_not_ends_with = "social_security_number_not_ends_with_example"; // string | Filter on SOC-SEC using 'NotEndsWith' operator
$social_security_number_in = "social_security_number_in_example"; // string | Filter on SOC-SEC using 'In' operator
$social_security_number_between = "social_security_number_between_example"; // string | Filter on SOC-SEC using 'Between' operator
$street_name_not_equal = "street_name_not_equal_example"; // string | Filter on FSTR-NME using 'NotEqual' operator
$street_name_less = "street_name_less_example"; // string | Filter on FSTR-NME using 'Less' operator
$street_name_less_or_equal = "street_name_less_or_equal_example"; // string | Filter on FSTR-NME using 'LessOrEqual' operator
$street_name_greater = "street_name_greater_example"; // string | Filter on FSTR-NME using 'Greater' operator
$street_name_greater_or_equal = "street_name_greater_or_equal_example"; // string | Filter on FSTR-NME using 'GreaterOrEqual' operator
$street_name_is_null = "street_name_is_null_example"; // string | Filter on FSTR-NME using 'IsNull' operator
$street_name_is_not_null = "street_name_is_not_null_example"; // string | Filter on FSTR-NME using 'IsNotNull' operator
$street_name_like = "street_name_like_example"; // string | Filter on FSTR-NME using 'Like' operator
$street_name_not_like = "street_name_not_like_example"; // string | Filter on FSTR-NME using 'NotLike' operator
$street_name_contains = "street_name_contains_example"; // string | Filter on FSTR-NME using 'Contains' operator
$street_name_not_contains = "street_name_not_contains_example"; // string | Filter on FSTR-NME using 'NotContains' operator
$street_name_starts_with = "street_name_starts_with_example"; // string | Filter on FSTR-NME using 'StartsWith' operator
$street_name_not_starts_with = "street_name_not_starts_with_example"; // string | Filter on FSTR-NME using 'NotStartsWith' operator
$street_name_ends_with = "street_name_ends_with_example"; // string | Filter on FSTR-NME using 'EndsWith' operator
$street_name_not_ends_with = "street_name_not_ends_with_example"; // string | Filter on FSTR-NME using 'NotEndsWith' operator
$street_name_in = "street_name_in_example"; // string | Filter on FSTR-NME using 'In' operator
$street_name_between = "street_name_between_example"; // string | Filter on FSTR-NME using 'Between' operator
$street_type_not_equal = "street_type_not_equal_example"; // string | Filter on STR-TYP using 'NotEqual' operator
$street_type_less = "street_type_less_example"; // string | Filter on STR-TYP using 'Less' operator
$street_type_less_or_equal = "street_type_less_or_equal_example"; // string | Filter on STR-TYP using 'LessOrEqual' operator
$street_type_greater = "street_type_greater_example"; // string | Filter on STR-TYP using 'Greater' operator
$street_type_greater_or_equal = "street_type_greater_or_equal_example"; // string | Filter on STR-TYP using 'GreaterOrEqual' operator
$street_type_is_null = "street_type_is_null_example"; // string | Filter on STR-TYP using 'IsNull' operator
$street_type_is_not_null = "street_type_is_not_null_example"; // string | Filter on STR-TYP using 'IsNotNull' operator
$street_type_like = "street_type_like_example"; // string | Filter on STR-TYP using 'Like' operator
$street_type_not_like = "street_type_not_like_example"; // string | Filter on STR-TYP using 'NotLike' operator
$street_type_contains = "street_type_contains_example"; // string | Filter on STR-TYP using 'Contains' operator
$street_type_not_contains = "street_type_not_contains_example"; // string | Filter on STR-TYP using 'NotContains' operator
$street_type_starts_with = "street_type_starts_with_example"; // string | Filter on STR-TYP using 'StartsWith' operator
$street_type_not_starts_with = "street_type_not_starts_with_example"; // string | Filter on STR-TYP using 'NotStartsWith' operator
$street_type_ends_with = "street_type_ends_with_example"; // string | Filter on STR-TYP using 'EndsWith' operator
$street_type_not_ends_with = "street_type_not_ends_with_example"; // string | Filter on STR-TYP using 'NotEndsWith' operator
$street_type_in = "street_type_in_example"; // string | Filter on STR-TYP using 'In' operator
$street_type_between = "street_type_between_example"; // string | Filter on STR-TYP using 'Between' operator
$last_updated_on_not_equal = "last_updated_on_not_equal_example"; // string | Filter on UPD-DTE using 'NotEqual' operator
$last_updated_on_less = "last_updated_on_less_example"; // string | Filter on UPD-DTE using 'Less' operator
$last_updated_on_less_or_equal = "last_updated_on_less_or_equal_example"; // string | Filter on UPD-DTE using 'LessOrEqual' operator
$last_updated_on_greater = "last_updated_on_greater_example"; // string | Filter on UPD-DTE using 'Greater' operator
$last_updated_on_greater_or_equal = "last_updated_on_greater_or_equal_example"; // string | Filter on UPD-DTE using 'GreaterOrEqual' operator
$last_updated_on_is_null = "last_updated_on_is_null_example"; // string | Filter on UPD-DTE using 'IsNull' operator
$last_updated_on_is_not_null = "last_updated_on_is_not_null_example"; // string | Filter on UPD-DTE using 'IsNotNull' operator
$last_updated_on_like = "last_updated_on_like_example"; // string | Filter on UPD-DTE using 'Like' operator
$last_updated_on_not_like = "last_updated_on_not_like_example"; // string | Filter on UPD-DTE using 'NotLike' operator
$last_updated_on_contains = "last_updated_on_contains_example"; // string | Filter on UPD-DTE using 'Contains' operator
$last_updated_on_not_contains = "last_updated_on_not_contains_example"; // string | Filter on UPD-DTE using 'NotContains' operator
$last_updated_on_starts_with = "last_updated_on_starts_with_example"; // string | Filter on UPD-DTE using 'StartsWith' operator
$last_updated_on_not_starts_with = "last_updated_on_not_starts_with_example"; // string | Filter on UPD-DTE using 'NotStartsWith' operator
$last_updated_on_ends_with = "last_updated_on_ends_with_example"; // string | Filter on UPD-DTE using 'EndsWith' operator
$last_updated_on_not_ends_with = "last_updated_on_not_ends_with_example"; // string | Filter on UPD-DTE using 'NotEndsWith' operator
$last_updated_on_in = "last_updated_on_in_example"; // string | Filter on UPD-DTE using 'In' operator
$last_updated_on_between = "last_updated_on_between_example"; // string | Filter on UPD-DTE using 'Between' operator
$item_number_not_equal = "item_number_not_equal_example"; // string | Filter on ITM-NUM using 'NotEqual' operator
$item_number_less = "item_number_less_example"; // string | Filter on ITM-NUM using 'Less' operator
$item_number_less_or_equal = "item_number_less_or_equal_example"; // string | Filter on ITM-NUM using 'LessOrEqual' operator
$item_number_greater = "item_number_greater_example"; // string | Filter on ITM-NUM using 'Greater' operator
$item_number_greater_or_equal = "item_number_greater_or_equal_example"; // string | Filter on ITM-NUM using 'GreaterOrEqual' operator
$item_number_is_null = "item_number_is_null_example"; // string | Filter on ITM-NUM using 'IsNull' operator
$item_number_is_not_null = "item_number_is_not_null_example"; // string | Filter on ITM-NUM using 'IsNotNull' operator
$item_number_like = "item_number_like_example"; // string | Filter on ITM-NUM using 'Like' operator
$item_number_not_like = "item_number_not_like_example"; // string | Filter on ITM-NUM using 'NotLike' operator
$item_number_contains = "item_number_contains_example"; // string | Filter on ITM-NUM using 'Contains' operator
$item_number_not_contains = "item_number_not_contains_example"; // string | Filter on ITM-NUM using 'NotContains' operator
$item_number_starts_with = "item_number_starts_with_example"; // string | Filter on ITM-NUM using 'StartsWith' operator
$item_number_not_starts_with = "item_number_not_starts_with_example"; // string | Filter on ITM-NUM using 'NotStartsWith' operator
$item_number_ends_with = "item_number_ends_with_example"; // string | Filter on ITM-NUM using 'EndsWith' operator
$item_number_not_ends_with = "item_number_not_ends_with_example"; // string | Filter on ITM-NUM using 'NotEndsWith' operator
$item_number_in = "item_number_in_example"; // string | Filter on ITM-NUM using 'In' operator
$item_number_between = "item_number_between_example"; // string | Filter on ITM-NUM using 'Between' operator
$last_name_soundex_not_equal = "last_name_soundex_not_equal_example"; // string | Filter on END-SNDX using 'NotEqual' operator
$last_name_soundex_less = "last_name_soundex_less_example"; // string | Filter on END-SNDX using 'Less' operator
$last_name_soundex_less_or_equal = "last_name_soundex_less_or_equal_example"; // string | Filter on END-SNDX using 'LessOrEqual' operator
$last_name_soundex_greater = "last_name_soundex_greater_example"; // string | Filter on END-SNDX using 'Greater' operator
$last_name_soundex_greater_or_equal = "last_name_soundex_greater_or_equal_example"; // string | Filter on END-SNDX using 'GreaterOrEqual' operator
$last_name_soundex_is_null = "last_name_soundex_is_null_example"; // string | Filter on END-SNDX using 'IsNull' operator
$last_name_soundex_is_not_null = "last_name_soundex_is_not_null_example"; // string | Filter on END-SNDX using 'IsNotNull' operator
$last_name_soundex_like = "last_name_soundex_like_example"; // string | Filter on END-SNDX using 'Like' operator
$last_name_soundex_not_like = "last_name_soundex_not_like_example"; // string | Filter on END-SNDX using 'NotLike' operator
$last_name_soundex_contains = "last_name_soundex_contains_example"; // string | Filter on END-SNDX using 'Contains' operator
$last_name_soundex_not_contains = "last_name_soundex_not_contains_example"; // string | Filter on END-SNDX using 'NotContains' operator
$last_name_soundex_starts_with = "last_name_soundex_starts_with_example"; // string | Filter on END-SNDX using 'StartsWith' operator
$last_name_soundex_not_starts_with = "last_name_soundex_not_starts_with_example"; // string | Filter on END-SNDX using 'NotStartsWith' operator
$last_name_soundex_ends_with = "last_name_soundex_ends_with_example"; // string | Filter on END-SNDX using 'EndsWith' operator
$last_name_soundex_not_ends_with = "last_name_soundex_not_ends_with_example"; // string | Filter on END-SNDX using 'NotEndsWith' operator
$last_name_soundex_in = "last_name_soundex_in_example"; // string | Filter on END-SNDX using 'In' operator
$last_name_soundex_between = "last_name_soundex_between_example"; // string | Filter on END-SNDX using 'Between' operator
$company_name_soundex_not_equal = "company_name_soundex_not_equal_example"; // string | Filter on CMP-SNDX using 'NotEqual' operator
$company_name_soundex_less = "company_name_soundex_less_example"; // string | Filter on CMP-SNDX using 'Less' operator
$company_name_soundex_less_or_equal = "company_name_soundex_less_or_equal_example"; // string | Filter on CMP-SNDX using 'LessOrEqual' operator
$company_name_soundex_greater = "company_name_soundex_greater_example"; // string | Filter on CMP-SNDX using 'Greater' operator
$company_name_soundex_greater_or_equal = "company_name_soundex_greater_or_equal_example"; // string | Filter on CMP-SNDX using 'GreaterOrEqual' operator
$company_name_soundex_is_null = "company_name_soundex_is_null_example"; // string | Filter on CMP-SNDX using 'IsNull' operator
$company_name_soundex_is_not_null = "company_name_soundex_is_not_null_example"; // string | Filter on CMP-SNDX using 'IsNotNull' operator
$company_name_soundex_like = "company_name_soundex_like_example"; // string | Filter on CMP-SNDX using 'Like' operator
$company_name_soundex_not_like = "company_name_soundex_not_like_example"; // string | Filter on CMP-SNDX using 'NotLike' operator
$company_name_soundex_contains = "company_name_soundex_contains_example"; // string | Filter on CMP-SNDX using 'Contains' operator
$company_name_soundex_not_contains = "company_name_soundex_not_contains_example"; // string | Filter on CMP-SNDX using 'NotContains' operator
$company_name_soundex_starts_with = "company_name_soundex_starts_with_example"; // string | Filter on CMP-SNDX using 'StartsWith' operator
$company_name_soundex_not_starts_with = "company_name_soundex_not_starts_with_example"; // string | Filter on CMP-SNDX using 'NotStartsWith' operator
$company_name_soundex_ends_with = "company_name_soundex_ends_with_example"; // string | Filter on CMP-SNDX using 'EndsWith' operator
$company_name_soundex_not_ends_with = "company_name_soundex_not_ends_with_example"; // string | Filter on CMP-SNDX using 'NotEndsWith' operator
$company_name_soundex_in = "company_name_soundex_in_example"; // string | Filter on CMP-SNDX using 'In' operator
$company_name_soundex_between = "company_name_soundex_between_example"; // string | Filter on CMP-SNDX using 'Between' operator

try {
    $result = $apiInstance->customerSearchAddresses($customer_number, $full_name, $email_address, $phone_number, $phone_number2, $phone_number3, $street1, $street2, $street3, $city, $state, $country_code, $postal_code, $fax_number, $company, $customer_type, $promote_flag, $promote_by_partners, $promote_by_phone, $promote_by_fax, $promote_by_email, $promote_by_mail, $promote_by_sms, $promote_by_phone1, $promote_by_phone2, $promote_by_phone3, $title, $first_name, $middle_initial, $last_name, $suffix, $job_title, $job_position_code, $communication_preference, $source_promotion, $address_code, $default_currency, $department, $county, $pin_code, $social_security_number, $street_name, $street_type, $last_updated_on, $item_number, $last_name_soundex, $company_name_soundex, $customer_number_not_equal, $customer_number_less, $customer_number_less_or_equal, $customer_number_greater, $customer_number_greater_or_equal, $customer_number_is_null, $customer_number_is_not_null, $customer_number_like, $customer_number_not_like, $customer_number_contains, $customer_number_not_contains, $customer_number_starts_with, $customer_number_not_starts_with, $customer_number_ends_with, $customer_number_not_ends_with, $customer_number_in, $customer_number_between, $full_name_not_equal, $full_name_less, $full_name_less_or_equal, $full_name_greater, $full_name_greater_or_equal, $full_name_is_null, $full_name_is_not_null, $full_name_like, $full_name_not_like, $full_name_contains, $full_name_not_contains, $full_name_starts_with, $full_name_not_starts_with, $full_name_ends_with, $full_name_not_ends_with, $full_name_in, $full_name_between, $email_address_not_equal, $email_address_less, $email_address_less_or_equal, $email_address_greater, $email_address_greater_or_equal, $email_address_is_null, $email_address_is_not_null, $email_address_like, $email_address_not_like, $email_address_contains, $email_address_not_contains, $email_address_starts_with, $email_address_not_starts_with, $email_address_ends_with, $email_address_not_ends_with, $email_address_in, $email_address_between, $phone_number_not_equal, $phone_number_less, $phone_number_less_or_equal, $phone_number_greater, $phone_number_greater_or_equal, $phone_number_is_null, $phone_number_is_not_null, $phone_number_like, $phone_number_not_like, $phone_number_contains, $phone_number_not_contains, $phone_number_starts_with, $phone_number_not_starts_with, $phone_number_ends_with, $phone_number_not_ends_with, $phone_number_in, $phone_number_between, $phone_number2_not_equal, $phone_number2_less, $phone_number2_less_or_equal, $phone_number2_greater, $phone_number2_greater_or_equal, $phone_number2_is_null, $phone_number2_is_not_null, $phone_number2_like, $phone_number2_not_like, $phone_number2_contains, $phone_number2_not_contains, $phone_number2_starts_with, $phone_number2_not_starts_with, $phone_number2_ends_with, $phone_number2_not_ends_with, $phone_number2_in, $phone_number2_between, $phone_number3_not_equal, $phone_number3_less, $phone_number3_less_or_equal, $phone_number3_greater, $phone_number3_greater_or_equal, $phone_number3_is_null, $phone_number3_is_not_null, $phone_number3_like, $phone_number3_not_like, $phone_number3_contains, $phone_number3_not_contains, $phone_number3_starts_with, $phone_number3_not_starts_with, $phone_number3_ends_with, $phone_number3_not_ends_with, $phone_number3_in, $phone_number3_between, $street1_not_equal, $street1_less, $street1_less_or_equal, $street1_greater, $street1_greater_or_equal, $street1_is_null, $street1_is_not_null, $street1_like, $street1_not_like, $street1_contains, $street1_not_contains, $street1_starts_with, $street1_not_starts_with, $street1_ends_with, $street1_not_ends_with, $street1_in, $street1_between, $street2_not_equal, $street2_less, $street2_less_or_equal, $street2_greater, $street2_greater_or_equal, $street2_is_null, $street2_is_not_null, $street2_like, $street2_not_like, $street2_contains, $street2_not_contains, $street2_starts_with, $street2_not_starts_with, $street2_ends_with, $street2_not_ends_with, $street2_in, $street2_between, $street3_not_equal, $street3_less, $street3_less_or_equal, $street3_greater, $street3_greater_or_equal, $street3_is_null, $street3_is_not_null, $street3_like, $street3_not_like, $street3_contains, $street3_not_contains, $street3_starts_with, $street3_not_starts_with, $street3_ends_with, $street3_not_ends_with, $street3_in, $street3_between, $city_not_equal, $city_less, $city_less_or_equal, $city_greater, $city_greater_or_equal, $city_is_null, $city_is_not_null, $city_like, $city_not_like, $city_contains, $city_not_contains, $city_starts_with, $city_not_starts_with, $city_ends_with, $city_not_ends_with, $city_in, $city_between, $state_not_equal, $state_less, $state_less_or_equal, $state_greater, $state_greater_or_equal, $state_is_null, $state_is_not_null, $state_like, $state_not_like, $state_contains, $state_not_contains, $state_starts_with, $state_not_starts_with, $state_ends_with, $state_not_ends_with, $state_in, $state_between, $country_code_not_equal, $country_code_less, $country_code_less_or_equal, $country_code_greater, $country_code_greater_or_equal, $country_code_is_null, $country_code_is_not_null, $country_code_like, $country_code_not_like, $country_code_contains, $country_code_not_contains, $country_code_starts_with, $country_code_not_starts_with, $country_code_ends_with, $country_code_not_ends_with, $country_code_in, $country_code_between, $postal_code_not_equal, $postal_code_less, $postal_code_less_or_equal, $postal_code_greater, $postal_code_greater_or_equal, $postal_code_is_null, $postal_code_is_not_null, $postal_code_like, $postal_code_not_like, $postal_code_contains, $postal_code_not_contains, $postal_code_starts_with, $postal_code_not_starts_with, $postal_code_ends_with, $postal_code_not_ends_with, $postal_code_in, $postal_code_between, $fax_number_not_equal, $fax_number_less, $fax_number_less_or_equal, $fax_number_greater, $fax_number_greater_or_equal, $fax_number_is_null, $fax_number_is_not_null, $fax_number_like, $fax_number_not_like, $fax_number_contains, $fax_number_not_contains, $fax_number_starts_with, $fax_number_not_starts_with, $fax_number_ends_with, $fax_number_not_ends_with, $fax_number_in, $fax_number_between, $company_not_equal, $company_less, $company_less_or_equal, $company_greater, $company_greater_or_equal, $company_is_null, $company_is_not_null, $company_like, $company_not_like, $company_contains, $company_not_contains, $company_starts_with, $company_not_starts_with, $company_ends_with, $company_not_ends_with, $company_in, $company_between, $customer_type_not_equal, $customer_type_less, $customer_type_less_or_equal, $customer_type_greater, $customer_type_greater_or_equal, $customer_type_is_null, $customer_type_is_not_null, $customer_type_like, $customer_type_not_like, $customer_type_contains, $customer_type_not_contains, $customer_type_starts_with, $customer_type_not_starts_with, $customer_type_ends_with, $customer_type_not_ends_with, $customer_type_in, $customer_type_between, $promote_flag_not_equal, $promote_flag_less, $promote_flag_less_or_equal, $promote_flag_greater, $promote_flag_greater_or_equal, $promote_flag_is_null, $promote_flag_is_not_null, $promote_flag_like, $promote_flag_not_like, $promote_flag_contains, $promote_flag_not_contains, $promote_flag_starts_with, $promote_flag_not_starts_with, $promote_flag_ends_with, $promote_flag_not_ends_with, $promote_flag_in, $promote_flag_between, $promote_by_partners_not_equal, $promote_by_partners_less, $promote_by_partners_less_or_equal, $promote_by_partners_greater, $promote_by_partners_greater_or_equal, $promote_by_partners_is_null, $promote_by_partners_is_not_null, $promote_by_partners_like, $promote_by_partners_not_like, $promote_by_partners_contains, $promote_by_partners_not_contains, $promote_by_partners_starts_with, $promote_by_partners_not_starts_with, $promote_by_partners_ends_with, $promote_by_partners_not_ends_with, $promote_by_partners_in, $promote_by_partners_between, $promote_by_phone_not_equal, $promote_by_phone_less, $promote_by_phone_less_or_equal, $promote_by_phone_greater, $promote_by_phone_greater_or_equal, $promote_by_phone_is_null, $promote_by_phone_is_not_null, $promote_by_phone_like, $promote_by_phone_not_like, $promote_by_phone_contains, $promote_by_phone_not_contains, $promote_by_phone_starts_with, $promote_by_phone_not_starts_with, $promote_by_phone_ends_with, $promote_by_phone_not_ends_with, $promote_by_phone_in, $promote_by_phone_between, $promote_by_fax_not_equal, $promote_by_fax_less, $promote_by_fax_less_or_equal, $promote_by_fax_greater, $promote_by_fax_greater_or_equal, $promote_by_fax_is_null, $promote_by_fax_is_not_null, $promote_by_fax_like, $promote_by_fax_not_like, $promote_by_fax_contains, $promote_by_fax_not_contains, $promote_by_fax_starts_with, $promote_by_fax_not_starts_with, $promote_by_fax_ends_with, $promote_by_fax_not_ends_with, $promote_by_fax_in, $promote_by_fax_between, $promote_by_email_not_equal, $promote_by_email_less, $promote_by_email_less_or_equal, $promote_by_email_greater, $promote_by_email_greater_or_equal, $promote_by_email_is_null, $promote_by_email_is_not_null, $promote_by_email_like, $promote_by_email_not_like, $promote_by_email_contains, $promote_by_email_not_contains, $promote_by_email_starts_with, $promote_by_email_not_starts_with, $promote_by_email_ends_with, $promote_by_email_not_ends_with, $promote_by_email_in, $promote_by_email_between, $promote_by_mail_not_equal, $promote_by_mail_less, $promote_by_mail_less_or_equal, $promote_by_mail_greater, $promote_by_mail_greater_or_equal, $promote_by_mail_is_null, $promote_by_mail_is_not_null, $promote_by_mail_like, $promote_by_mail_not_like, $promote_by_mail_contains, $promote_by_mail_not_contains, $promote_by_mail_starts_with, $promote_by_mail_not_starts_with, $promote_by_mail_ends_with, $promote_by_mail_not_ends_with, $promote_by_mail_in, $promote_by_mail_between, $promote_by_sms_not_equal, $promote_by_sms_less, $promote_by_sms_less_or_equal, $promote_by_sms_greater, $promote_by_sms_greater_or_equal, $promote_by_sms_is_null, $promote_by_sms_is_not_null, $promote_by_sms_like, $promote_by_sms_not_like, $promote_by_sms_contains, $promote_by_sms_not_contains, $promote_by_sms_starts_with, $promote_by_sms_not_starts_with, $promote_by_sms_ends_with, $promote_by_sms_not_ends_with, $promote_by_sms_in, $promote_by_sms_between, $promote_by_phone1_not_equal, $promote_by_phone1_less, $promote_by_phone1_less_or_equal, $promote_by_phone1_greater, $promote_by_phone1_greater_or_equal, $promote_by_phone1_is_null, $promote_by_phone1_is_not_null, $promote_by_phone1_like, $promote_by_phone1_not_like, $promote_by_phone1_contains, $promote_by_phone1_not_contains, $promote_by_phone1_starts_with, $promote_by_phone1_not_starts_with, $promote_by_phone1_ends_with, $promote_by_phone1_not_ends_with, $promote_by_phone1_in, $promote_by_phone1_between, $promote_by_phone2_not_equal, $promote_by_phone2_less, $promote_by_phone2_less_or_equal, $promote_by_phone2_greater, $promote_by_phone2_greater_or_equal, $promote_by_phone2_is_null, $promote_by_phone2_is_not_null, $promote_by_phone2_like, $promote_by_phone2_not_like, $promote_by_phone2_contains, $promote_by_phone2_not_contains, $promote_by_phone2_starts_with, $promote_by_phone2_not_starts_with, $promote_by_phone2_ends_with, $promote_by_phone2_not_ends_with, $promote_by_phone2_in, $promote_by_phone2_between, $promote_by_phone3_not_equal, $promote_by_phone3_less, $promote_by_phone3_less_or_equal, $promote_by_phone3_greater, $promote_by_phone3_greater_or_equal, $promote_by_phone3_is_null, $promote_by_phone3_is_not_null, $promote_by_phone3_like, $promote_by_phone3_not_like, $promote_by_phone3_contains, $promote_by_phone3_not_contains, $promote_by_phone3_starts_with, $promote_by_phone3_not_starts_with, $promote_by_phone3_ends_with, $promote_by_phone3_not_ends_with, $promote_by_phone3_in, $promote_by_phone3_between, $title_not_equal, $title_less, $title_less_or_equal, $title_greater, $title_greater_or_equal, $title_is_null, $title_is_not_null, $title_like, $title_not_like, $title_contains, $title_not_contains, $title_starts_with, $title_not_starts_with, $title_ends_with, $title_not_ends_with, $title_in, $title_between, $first_name_not_equal, $first_name_less, $first_name_less_or_equal, $first_name_greater, $first_name_greater_or_equal, $first_name_is_null, $first_name_is_not_null, $first_name_like, $first_name_not_like, $first_name_contains, $first_name_not_contains, $first_name_starts_with, $first_name_not_starts_with, $first_name_ends_with, $first_name_not_ends_with, $first_name_in, $first_name_between, $middle_initial_not_equal, $middle_initial_less, $middle_initial_less_or_equal, $middle_initial_greater, $middle_initial_greater_or_equal, $middle_initial_is_null, $middle_initial_is_not_null, $middle_initial_like, $middle_initial_not_like, $middle_initial_contains, $middle_initial_not_contains, $middle_initial_starts_with, $middle_initial_not_starts_with, $middle_initial_ends_with, $middle_initial_not_ends_with, $middle_initial_in, $middle_initial_between, $last_name_not_equal, $last_name_less, $last_name_less_or_equal, $last_name_greater, $last_name_greater_or_equal, $last_name_is_null, $last_name_is_not_null, $last_name_like, $last_name_not_like, $last_name_contains, $last_name_not_contains, $last_name_starts_with, $last_name_not_starts_with, $last_name_ends_with, $last_name_not_ends_with, $last_name_in, $last_name_between, $suffix_not_equal, $suffix_less, $suffix_less_or_equal, $suffix_greater, $suffix_greater_or_equal, $suffix_is_null, $suffix_is_not_null, $suffix_like, $suffix_not_like, $suffix_contains, $suffix_not_contains, $suffix_starts_with, $suffix_not_starts_with, $suffix_ends_with, $suffix_not_ends_with, $suffix_in, $suffix_between, $job_title_not_equal, $job_title_less, $job_title_less_or_equal, $job_title_greater, $job_title_greater_or_equal, $job_title_is_null, $job_title_is_not_null, $job_title_like, $job_title_not_like, $job_title_contains, $job_title_not_contains, $job_title_starts_with, $job_title_not_starts_with, $job_title_ends_with, $job_title_not_ends_with, $job_title_in, $job_title_between, $job_position_code_not_equal, $job_position_code_less, $job_position_code_less_or_equal, $job_position_code_greater, $job_position_code_greater_or_equal, $job_position_code_is_null, $job_position_code_is_not_null, $job_position_code_like, $job_position_code_not_like, $job_position_code_contains, $job_position_code_not_contains, $job_position_code_starts_with, $job_position_code_not_starts_with, $job_position_code_ends_with, $job_position_code_not_ends_with, $job_position_code_in, $job_position_code_between, $communication_preference_not_equal, $communication_preference_less, $communication_preference_less_or_equal, $communication_preference_greater, $communication_preference_greater_or_equal, $communication_preference_is_null, $communication_preference_is_not_null, $communication_preference_like, $communication_preference_not_like, $communication_preference_contains, $communication_preference_not_contains, $communication_preference_starts_with, $communication_preference_not_starts_with, $communication_preference_ends_with, $communication_preference_not_ends_with, $communication_preference_in, $communication_preference_between, $source_promotion_not_equal, $source_promotion_less, $source_promotion_less_or_equal, $source_promotion_greater, $source_promotion_greater_or_equal, $source_promotion_is_null, $source_promotion_is_not_null, $source_promotion_like, $source_promotion_not_like, $source_promotion_contains, $source_promotion_not_contains, $source_promotion_starts_with, $source_promotion_not_starts_with, $source_promotion_ends_with, $source_promotion_not_ends_with, $source_promotion_in, $source_promotion_between, $address_code_not_equal, $address_code_less, $address_code_less_or_equal, $address_code_greater, $address_code_greater_or_equal, $address_code_is_null, $address_code_is_not_null, $address_code_like, $address_code_not_like, $address_code_contains, $address_code_not_contains, $address_code_starts_with, $address_code_not_starts_with, $address_code_ends_with, $address_code_not_ends_with, $address_code_in, $address_code_between, $default_currency_not_equal, $default_currency_less, $default_currency_less_or_equal, $default_currency_greater, $default_currency_greater_or_equal, $default_currency_is_null, $default_currency_is_not_null, $default_currency_like, $default_currency_not_like, $default_currency_contains, $default_currency_not_contains, $default_currency_starts_with, $default_currency_not_starts_with, $default_currency_ends_with, $default_currency_not_ends_with, $default_currency_in, $default_currency_between, $department_not_equal, $department_less, $department_less_or_equal, $department_greater, $department_greater_or_equal, $department_is_null, $department_is_not_null, $department_like, $department_not_like, $department_contains, $department_not_contains, $department_starts_with, $department_not_starts_with, $department_ends_with, $department_not_ends_with, $department_in, $department_between, $county_not_equal, $county_less, $county_less_or_equal, $county_greater, $county_greater_or_equal, $county_is_null, $county_is_not_null, $county_like, $county_not_like, $county_contains, $county_not_contains, $county_starts_with, $county_not_starts_with, $county_ends_with, $county_not_ends_with, $county_in, $county_between, $pin_code_not_equal, $pin_code_less, $pin_code_less_or_equal, $pin_code_greater, $pin_code_greater_or_equal, $pin_code_is_null, $pin_code_is_not_null, $pin_code_like, $pin_code_not_like, $pin_code_contains, $pin_code_not_contains, $pin_code_starts_with, $pin_code_not_starts_with, $pin_code_ends_with, $pin_code_not_ends_with, $pin_code_in, $pin_code_between, $social_security_number_not_equal, $social_security_number_less, $social_security_number_less_or_equal, $social_security_number_greater, $social_security_number_greater_or_equal, $social_security_number_is_null, $social_security_number_is_not_null, $social_security_number_like, $social_security_number_not_like, $social_security_number_contains, $social_security_number_not_contains, $social_security_number_starts_with, $social_security_number_not_starts_with, $social_security_number_ends_with, $social_security_number_not_ends_with, $social_security_number_in, $social_security_number_between, $street_name_not_equal, $street_name_less, $street_name_less_or_equal, $street_name_greater, $street_name_greater_or_equal, $street_name_is_null, $street_name_is_not_null, $street_name_like, $street_name_not_like, $street_name_contains, $street_name_not_contains, $street_name_starts_with, $street_name_not_starts_with, $street_name_ends_with, $street_name_not_ends_with, $street_name_in, $street_name_between, $street_type_not_equal, $street_type_less, $street_type_less_or_equal, $street_type_greater, $street_type_greater_or_equal, $street_type_is_null, $street_type_is_not_null, $street_type_like, $street_type_not_like, $street_type_contains, $street_type_not_contains, $street_type_starts_with, $street_type_not_starts_with, $street_type_ends_with, $street_type_not_ends_with, $street_type_in, $street_type_between, $last_updated_on_not_equal, $last_updated_on_less, $last_updated_on_less_or_equal, $last_updated_on_greater, $last_updated_on_greater_or_equal, $last_updated_on_is_null, $last_updated_on_is_not_null, $last_updated_on_like, $last_updated_on_not_like, $last_updated_on_contains, $last_updated_on_not_contains, $last_updated_on_starts_with, $last_updated_on_not_starts_with, $last_updated_on_ends_with, $last_updated_on_not_ends_with, $last_updated_on_in, $last_updated_on_between, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $last_name_soundex_not_equal, $last_name_soundex_less, $last_name_soundex_less_or_equal, $last_name_soundex_greater, $last_name_soundex_greater_or_equal, $last_name_soundex_is_null, $last_name_soundex_is_not_null, $last_name_soundex_like, $last_name_soundex_not_like, $last_name_soundex_contains, $last_name_soundex_not_contains, $last_name_soundex_starts_with, $last_name_soundex_not_starts_with, $last_name_soundex_ends_with, $last_name_soundex_not_ends_with, $last_name_soundex_in, $last_name_soundex_between, $company_name_soundex_not_equal, $company_name_soundex_less, $company_name_soundex_less_or_equal, $company_name_soundex_greater, $company_name_soundex_greater_or_equal, $company_name_soundex_is_null, $company_name_soundex_is_not_null, $company_name_soundex_like, $company_name_soundex_not_like, $company_name_soundex_contains, $company_name_soundex_not_contains, $company_name_soundex_starts_with, $company_name_soundex_not_starts_with, $company_name_soundex_ends_with, $company_name_soundex_not_ends_with, $company_name_soundex_in, $company_name_soundex_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSearchAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **full_name** | **string**| Filter on ATN-NME using &#39;Equal&#39; operator | [optional]
 **email_address** | **string**| Filter on ADR-EML using &#39;Equal&#39; operator | [optional]
 **phone_number** | **string**| Filter on PHO1-IDX using &#39;Equal&#39; operator | [optional]
 **phone_number2** | **string**| Filter on PHO2-IDX using &#39;Equal&#39; operator | [optional]
 **phone_number3** | **string**| Filter on PHO3-IDX using &#39;Equal&#39; operator | [optional]
 **street1** | **string**| Filter on STR-1ST using &#39;Equal&#39; operator | [optional]
 **street2** | **string**| Filter on STR-2ND using &#39;Equal&#39; operator | [optional]
 **street3** | **string**| Filter on STR-3RD using &#39;Equal&#39; operator | [optional]
 **city** | **string**| Filter on CTM-CTY using &#39;Equal&#39; operator | [optional]
 **state** | **string**| Filter on CTM-STE using &#39;Equal&#39; operator | [optional]
 **country_code** | **string**| Filter on CUN-TYP using &#39;Equal&#39; operator | [optional]
 **postal_code** | **string**| Filter on ZIP-CDE using &#39;Equal&#39; operator | [optional]
 **fax_number** | **string**| Filter on FAX-NBR using &#39;Equal&#39; operator | [optional]
 **company** | **string**| Filter on CMP-NME using &#39;Equal&#39; operator | [optional]
 **customer_type** | **string**| Filter on CTM-TYP using &#39;Equal&#39; operator | [optional]
 **promote_flag** | **string**| Filter on PROMO using &#39;Equal&#39; operator | [optional]
 **promote_by_partners** | **string**| Filter on PMO-PTR using &#39;Equal&#39; operator | [optional]
 **promote_by_phone** | **string**| Filter on PMO-PHN using &#39;Equal&#39; operator | [optional]
 **promote_by_fax** | **string**| Filter on PMO-FAX using &#39;Equal&#39; operator | [optional]
 **promote_by_email** | **string**| Filter on PMO-EML using &#39;Equal&#39; operator | [optional]
 **promote_by_mail** | **string**| Filter on PMO-ADR using &#39;Equal&#39; operator | [optional]
 **promote_by_sms** | **string**| Filter on PMO-SMS using &#39;Equal&#39; operator | [optional]
 **promote_by_phone1** | **string**| Filter on PMO-PH1 using &#39;Equal&#39; operator | [optional]
 **promote_by_phone2** | **string**| Filter on PMO-PH2 using &#39;Equal&#39; operator | [optional]
 **promote_by_phone3** | **string**| Filter on PMO-PH3 using &#39;Equal&#39; operator | [optional]
 **title** | **string**| Filter on CTM-TTL using &#39;Equal&#39; operator | [optional]
 **first_name** | **string**| Filter on ATN-1ST using &#39;Equal&#39; operator | [optional]
 **middle_initial** | **string**| Filter on ATN-MID using &#39;Equal&#39; operator | [optional]
 **last_name** | **string**| Filter on ATN-END using &#39;Equal&#39; operator | [optional]
 **suffix** | **string**| Filter on CTM-SFX using &#39;Equal&#39; operator | [optional]
 **job_title** | **string**| Filter on JOB-TTL using &#39;Equal&#39; operator | [optional]
 **job_position_code** | **string**| Filter on CTM-POS using &#39;Equal&#39; operator | [optional]
 **communication_preference** | **string**| Filter on COMM-PRF using &#39;Equal&#39; operator | [optional]
 **source_promotion** | **string**| Filter on CTM-SRC using &#39;Equal&#39; operator | [optional]
 **address_code** | **string**| Filter on ADR-CDE using &#39;Equal&#39; operator | [optional]
 **default_currency** | **string**| Filter on BIL-CUR using &#39;Equal&#39; operator | [optional]
 **department** | **string**| Filter on DPT-NME using &#39;Equal&#39; operator | [optional]
 **county** | **string**| Filter on CTM-CNTY using &#39;Equal&#39; operator | [optional]
 **pin_code** | **string**| Filter on PIN-CODE using &#39;Equal&#39; operator | [optional]
 **social_security_number** | **string**| Filter on SOC-SEC using &#39;Equal&#39; operator | [optional]
 **street_name** | **string**| Filter on FSTR-NME using &#39;Equal&#39; operator | [optional]
 **street_type** | **string**| Filter on STR-TYP using &#39;Equal&#39; operator | [optional]
 **last_updated_on** | **string**| Filter on UPD-DTE using &#39;Equal&#39; operator | [optional]
 **item_number** | **string**| Filter on ITM-NUM using &#39;Equal&#39; operator | [optional]
 **last_name_soundex** | **string**| Filter on END-SNDX using &#39;Equal&#39; operator | [optional]
 **company_name_soundex** | **string**| Filter on CMP-SNDX using &#39;Equal&#39; operator | [optional]
 **customer_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **customer_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **customer_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **customer_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **customer_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **customer_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **customer_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **customer_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **customer_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **customer_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **customer_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **customer_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **customer_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **customer_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **customer_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **customer_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **customer_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **full_name_not_equal** | **string**| Filter on ATN-NME using &#39;NotEqual&#39; operator | [optional]
 **full_name_less** | **string**| Filter on ATN-NME using &#39;Less&#39; operator | [optional]
 **full_name_less_or_equal** | **string**| Filter on ATN-NME using &#39;LessOrEqual&#39; operator | [optional]
 **full_name_greater** | **string**| Filter on ATN-NME using &#39;Greater&#39; operator | [optional]
 **full_name_greater_or_equal** | **string**| Filter on ATN-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **full_name_is_null** | **string**| Filter on ATN-NME using &#39;IsNull&#39; operator | [optional]
 **full_name_is_not_null** | **string**| Filter on ATN-NME using &#39;IsNotNull&#39; operator | [optional]
 **full_name_like** | **string**| Filter on ATN-NME using &#39;Like&#39; operator | [optional]
 **full_name_not_like** | **string**| Filter on ATN-NME using &#39;NotLike&#39; operator | [optional]
 **full_name_contains** | **string**| Filter on ATN-NME using &#39;Contains&#39; operator | [optional]
 **full_name_not_contains** | **string**| Filter on ATN-NME using &#39;NotContains&#39; operator | [optional]
 **full_name_starts_with** | **string**| Filter on ATN-NME using &#39;StartsWith&#39; operator | [optional]
 **full_name_not_starts_with** | **string**| Filter on ATN-NME using &#39;NotStartsWith&#39; operator | [optional]
 **full_name_ends_with** | **string**| Filter on ATN-NME using &#39;EndsWith&#39; operator | [optional]
 **full_name_not_ends_with** | **string**| Filter on ATN-NME using &#39;NotEndsWith&#39; operator | [optional]
 **full_name_in** | **string**| Filter on ATN-NME using &#39;In&#39; operator | [optional]
 **full_name_between** | **string**| Filter on ATN-NME using &#39;Between&#39; operator | [optional]
 **email_address_not_equal** | **string**| Filter on ADR-EML using &#39;NotEqual&#39; operator | [optional]
 **email_address_less** | **string**| Filter on ADR-EML using &#39;Less&#39; operator | [optional]
 **email_address_less_or_equal** | **string**| Filter on ADR-EML using &#39;LessOrEqual&#39; operator | [optional]
 **email_address_greater** | **string**| Filter on ADR-EML using &#39;Greater&#39; operator | [optional]
 **email_address_greater_or_equal** | **string**| Filter on ADR-EML using &#39;GreaterOrEqual&#39; operator | [optional]
 **email_address_is_null** | **string**| Filter on ADR-EML using &#39;IsNull&#39; operator | [optional]
 **email_address_is_not_null** | **string**| Filter on ADR-EML using &#39;IsNotNull&#39; operator | [optional]
 **email_address_like** | **string**| Filter on ADR-EML using &#39;Like&#39; operator | [optional]
 **email_address_not_like** | **string**| Filter on ADR-EML using &#39;NotLike&#39; operator | [optional]
 **email_address_contains** | **string**| Filter on ADR-EML using &#39;Contains&#39; operator | [optional]
 **email_address_not_contains** | **string**| Filter on ADR-EML using &#39;NotContains&#39; operator | [optional]
 **email_address_starts_with** | **string**| Filter on ADR-EML using &#39;StartsWith&#39; operator | [optional]
 **email_address_not_starts_with** | **string**| Filter on ADR-EML using &#39;NotStartsWith&#39; operator | [optional]
 **email_address_ends_with** | **string**| Filter on ADR-EML using &#39;EndsWith&#39; operator | [optional]
 **email_address_not_ends_with** | **string**| Filter on ADR-EML using &#39;NotEndsWith&#39; operator | [optional]
 **email_address_in** | **string**| Filter on ADR-EML using &#39;In&#39; operator | [optional]
 **email_address_between** | **string**| Filter on ADR-EML using &#39;Between&#39; operator | [optional]
 **phone_number_not_equal** | **string**| Filter on PHO1-IDX using &#39;NotEqual&#39; operator | [optional]
 **phone_number_less** | **string**| Filter on PHO1-IDX using &#39;Less&#39; operator | [optional]
 **phone_number_less_or_equal** | **string**| Filter on PHO1-IDX using &#39;LessOrEqual&#39; operator | [optional]
 **phone_number_greater** | **string**| Filter on PHO1-IDX using &#39;Greater&#39; operator | [optional]
 **phone_number_greater_or_equal** | **string**| Filter on PHO1-IDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **phone_number_is_null** | **string**| Filter on PHO1-IDX using &#39;IsNull&#39; operator | [optional]
 **phone_number_is_not_null** | **string**| Filter on PHO1-IDX using &#39;IsNotNull&#39; operator | [optional]
 **phone_number_like** | **string**| Filter on PHO1-IDX using &#39;Like&#39; operator | [optional]
 **phone_number_not_like** | **string**| Filter on PHO1-IDX using &#39;NotLike&#39; operator | [optional]
 **phone_number_contains** | **string**| Filter on PHO1-IDX using &#39;Contains&#39; operator | [optional]
 **phone_number_not_contains** | **string**| Filter on PHO1-IDX using &#39;NotContains&#39; operator | [optional]
 **phone_number_starts_with** | **string**| Filter on PHO1-IDX using &#39;StartsWith&#39; operator | [optional]
 **phone_number_not_starts_with** | **string**| Filter on PHO1-IDX using &#39;NotStartsWith&#39; operator | [optional]
 **phone_number_ends_with** | **string**| Filter on PHO1-IDX using &#39;EndsWith&#39; operator | [optional]
 **phone_number_not_ends_with** | **string**| Filter on PHO1-IDX using &#39;NotEndsWith&#39; operator | [optional]
 **phone_number_in** | **string**| Filter on PHO1-IDX using &#39;In&#39; operator | [optional]
 **phone_number_between** | **string**| Filter on PHO1-IDX using &#39;Between&#39; operator | [optional]
 **phone_number2_not_equal** | **string**| Filter on PHO2-IDX using &#39;NotEqual&#39; operator | [optional]
 **phone_number2_less** | **string**| Filter on PHO2-IDX using &#39;Less&#39; operator | [optional]
 **phone_number2_less_or_equal** | **string**| Filter on PHO2-IDX using &#39;LessOrEqual&#39; operator | [optional]
 **phone_number2_greater** | **string**| Filter on PHO2-IDX using &#39;Greater&#39; operator | [optional]
 **phone_number2_greater_or_equal** | **string**| Filter on PHO2-IDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **phone_number2_is_null** | **string**| Filter on PHO2-IDX using &#39;IsNull&#39; operator | [optional]
 **phone_number2_is_not_null** | **string**| Filter on PHO2-IDX using &#39;IsNotNull&#39; operator | [optional]
 **phone_number2_like** | **string**| Filter on PHO2-IDX using &#39;Like&#39; operator | [optional]
 **phone_number2_not_like** | **string**| Filter on PHO2-IDX using &#39;NotLike&#39; operator | [optional]
 **phone_number2_contains** | **string**| Filter on PHO2-IDX using &#39;Contains&#39; operator | [optional]
 **phone_number2_not_contains** | **string**| Filter on PHO2-IDX using &#39;NotContains&#39; operator | [optional]
 **phone_number2_starts_with** | **string**| Filter on PHO2-IDX using &#39;StartsWith&#39; operator | [optional]
 **phone_number2_not_starts_with** | **string**| Filter on PHO2-IDX using &#39;NotStartsWith&#39; operator | [optional]
 **phone_number2_ends_with** | **string**| Filter on PHO2-IDX using &#39;EndsWith&#39; operator | [optional]
 **phone_number2_not_ends_with** | **string**| Filter on PHO2-IDX using &#39;NotEndsWith&#39; operator | [optional]
 **phone_number2_in** | **string**| Filter on PHO2-IDX using &#39;In&#39; operator | [optional]
 **phone_number2_between** | **string**| Filter on PHO2-IDX using &#39;Between&#39; operator | [optional]
 **phone_number3_not_equal** | **string**| Filter on PHO3-IDX using &#39;NotEqual&#39; operator | [optional]
 **phone_number3_less** | **string**| Filter on PHO3-IDX using &#39;Less&#39; operator | [optional]
 **phone_number3_less_or_equal** | **string**| Filter on PHO3-IDX using &#39;LessOrEqual&#39; operator | [optional]
 **phone_number3_greater** | **string**| Filter on PHO3-IDX using &#39;Greater&#39; operator | [optional]
 **phone_number3_greater_or_equal** | **string**| Filter on PHO3-IDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **phone_number3_is_null** | **string**| Filter on PHO3-IDX using &#39;IsNull&#39; operator | [optional]
 **phone_number3_is_not_null** | **string**| Filter on PHO3-IDX using &#39;IsNotNull&#39; operator | [optional]
 **phone_number3_like** | **string**| Filter on PHO3-IDX using &#39;Like&#39; operator | [optional]
 **phone_number3_not_like** | **string**| Filter on PHO3-IDX using &#39;NotLike&#39; operator | [optional]
 **phone_number3_contains** | **string**| Filter on PHO3-IDX using &#39;Contains&#39; operator | [optional]
 **phone_number3_not_contains** | **string**| Filter on PHO3-IDX using &#39;NotContains&#39; operator | [optional]
 **phone_number3_starts_with** | **string**| Filter on PHO3-IDX using &#39;StartsWith&#39; operator | [optional]
 **phone_number3_not_starts_with** | **string**| Filter on PHO3-IDX using &#39;NotStartsWith&#39; operator | [optional]
 **phone_number3_ends_with** | **string**| Filter on PHO3-IDX using &#39;EndsWith&#39; operator | [optional]
 **phone_number3_not_ends_with** | **string**| Filter on PHO3-IDX using &#39;NotEndsWith&#39; operator | [optional]
 **phone_number3_in** | **string**| Filter on PHO3-IDX using &#39;In&#39; operator | [optional]
 **phone_number3_between** | **string**| Filter on PHO3-IDX using &#39;Between&#39; operator | [optional]
 **street1_not_equal** | **string**| Filter on STR-1ST using &#39;NotEqual&#39; operator | [optional]
 **street1_less** | **string**| Filter on STR-1ST using &#39;Less&#39; operator | [optional]
 **street1_less_or_equal** | **string**| Filter on STR-1ST using &#39;LessOrEqual&#39; operator | [optional]
 **street1_greater** | **string**| Filter on STR-1ST using &#39;Greater&#39; operator | [optional]
 **street1_greater_or_equal** | **string**| Filter on STR-1ST using &#39;GreaterOrEqual&#39; operator | [optional]
 **street1_is_null** | **string**| Filter on STR-1ST using &#39;IsNull&#39; operator | [optional]
 **street1_is_not_null** | **string**| Filter on STR-1ST using &#39;IsNotNull&#39; operator | [optional]
 **street1_like** | **string**| Filter on STR-1ST using &#39;Like&#39; operator | [optional]
 **street1_not_like** | **string**| Filter on STR-1ST using &#39;NotLike&#39; operator | [optional]
 **street1_contains** | **string**| Filter on STR-1ST using &#39;Contains&#39; operator | [optional]
 **street1_not_contains** | **string**| Filter on STR-1ST using &#39;NotContains&#39; operator | [optional]
 **street1_starts_with** | **string**| Filter on STR-1ST using &#39;StartsWith&#39; operator | [optional]
 **street1_not_starts_with** | **string**| Filter on STR-1ST using &#39;NotStartsWith&#39; operator | [optional]
 **street1_ends_with** | **string**| Filter on STR-1ST using &#39;EndsWith&#39; operator | [optional]
 **street1_not_ends_with** | **string**| Filter on STR-1ST using &#39;NotEndsWith&#39; operator | [optional]
 **street1_in** | **string**| Filter on STR-1ST using &#39;In&#39; operator | [optional]
 **street1_between** | **string**| Filter on STR-1ST using &#39;Between&#39; operator | [optional]
 **street2_not_equal** | **string**| Filter on STR-2ND using &#39;NotEqual&#39; operator | [optional]
 **street2_less** | **string**| Filter on STR-2ND using &#39;Less&#39; operator | [optional]
 **street2_less_or_equal** | **string**| Filter on STR-2ND using &#39;LessOrEqual&#39; operator | [optional]
 **street2_greater** | **string**| Filter on STR-2ND using &#39;Greater&#39; operator | [optional]
 **street2_greater_or_equal** | **string**| Filter on STR-2ND using &#39;GreaterOrEqual&#39; operator | [optional]
 **street2_is_null** | **string**| Filter on STR-2ND using &#39;IsNull&#39; operator | [optional]
 **street2_is_not_null** | **string**| Filter on STR-2ND using &#39;IsNotNull&#39; operator | [optional]
 **street2_like** | **string**| Filter on STR-2ND using &#39;Like&#39; operator | [optional]
 **street2_not_like** | **string**| Filter on STR-2ND using &#39;NotLike&#39; operator | [optional]
 **street2_contains** | **string**| Filter on STR-2ND using &#39;Contains&#39; operator | [optional]
 **street2_not_contains** | **string**| Filter on STR-2ND using &#39;NotContains&#39; operator | [optional]
 **street2_starts_with** | **string**| Filter on STR-2ND using &#39;StartsWith&#39; operator | [optional]
 **street2_not_starts_with** | **string**| Filter on STR-2ND using &#39;NotStartsWith&#39; operator | [optional]
 **street2_ends_with** | **string**| Filter on STR-2ND using &#39;EndsWith&#39; operator | [optional]
 **street2_not_ends_with** | **string**| Filter on STR-2ND using &#39;NotEndsWith&#39; operator | [optional]
 **street2_in** | **string**| Filter on STR-2ND using &#39;In&#39; operator | [optional]
 **street2_between** | **string**| Filter on STR-2ND using &#39;Between&#39; operator | [optional]
 **street3_not_equal** | **string**| Filter on STR-3RD using &#39;NotEqual&#39; operator | [optional]
 **street3_less** | **string**| Filter on STR-3RD using &#39;Less&#39; operator | [optional]
 **street3_less_or_equal** | **string**| Filter on STR-3RD using &#39;LessOrEqual&#39; operator | [optional]
 **street3_greater** | **string**| Filter on STR-3RD using &#39;Greater&#39; operator | [optional]
 **street3_greater_or_equal** | **string**| Filter on STR-3RD using &#39;GreaterOrEqual&#39; operator | [optional]
 **street3_is_null** | **string**| Filter on STR-3RD using &#39;IsNull&#39; operator | [optional]
 **street3_is_not_null** | **string**| Filter on STR-3RD using &#39;IsNotNull&#39; operator | [optional]
 **street3_like** | **string**| Filter on STR-3RD using &#39;Like&#39; operator | [optional]
 **street3_not_like** | **string**| Filter on STR-3RD using &#39;NotLike&#39; operator | [optional]
 **street3_contains** | **string**| Filter on STR-3RD using &#39;Contains&#39; operator | [optional]
 **street3_not_contains** | **string**| Filter on STR-3RD using &#39;NotContains&#39; operator | [optional]
 **street3_starts_with** | **string**| Filter on STR-3RD using &#39;StartsWith&#39; operator | [optional]
 **street3_not_starts_with** | **string**| Filter on STR-3RD using &#39;NotStartsWith&#39; operator | [optional]
 **street3_ends_with** | **string**| Filter on STR-3RD using &#39;EndsWith&#39; operator | [optional]
 **street3_not_ends_with** | **string**| Filter on STR-3RD using &#39;NotEndsWith&#39; operator | [optional]
 **street3_in** | **string**| Filter on STR-3RD using &#39;In&#39; operator | [optional]
 **street3_between** | **string**| Filter on STR-3RD using &#39;Between&#39; operator | [optional]
 **city_not_equal** | **string**| Filter on CTM-CTY using &#39;NotEqual&#39; operator | [optional]
 **city_less** | **string**| Filter on CTM-CTY using &#39;Less&#39; operator | [optional]
 **city_less_or_equal** | **string**| Filter on CTM-CTY using &#39;LessOrEqual&#39; operator | [optional]
 **city_greater** | **string**| Filter on CTM-CTY using &#39;Greater&#39; operator | [optional]
 **city_greater_or_equal** | **string**| Filter on CTM-CTY using &#39;GreaterOrEqual&#39; operator | [optional]
 **city_is_null** | **string**| Filter on CTM-CTY using &#39;IsNull&#39; operator | [optional]
 **city_is_not_null** | **string**| Filter on CTM-CTY using &#39;IsNotNull&#39; operator | [optional]
 **city_like** | **string**| Filter on CTM-CTY using &#39;Like&#39; operator | [optional]
 **city_not_like** | **string**| Filter on CTM-CTY using &#39;NotLike&#39; operator | [optional]
 **city_contains** | **string**| Filter on CTM-CTY using &#39;Contains&#39; operator | [optional]
 **city_not_contains** | **string**| Filter on CTM-CTY using &#39;NotContains&#39; operator | [optional]
 **city_starts_with** | **string**| Filter on CTM-CTY using &#39;StartsWith&#39; operator | [optional]
 **city_not_starts_with** | **string**| Filter on CTM-CTY using &#39;NotStartsWith&#39; operator | [optional]
 **city_ends_with** | **string**| Filter on CTM-CTY using &#39;EndsWith&#39; operator | [optional]
 **city_not_ends_with** | **string**| Filter on CTM-CTY using &#39;NotEndsWith&#39; operator | [optional]
 **city_in** | **string**| Filter on CTM-CTY using &#39;In&#39; operator | [optional]
 **city_between** | **string**| Filter on CTM-CTY using &#39;Between&#39; operator | [optional]
 **state_not_equal** | **string**| Filter on CTM-STE using &#39;NotEqual&#39; operator | [optional]
 **state_less** | **string**| Filter on CTM-STE using &#39;Less&#39; operator | [optional]
 **state_less_or_equal** | **string**| Filter on CTM-STE using &#39;LessOrEqual&#39; operator | [optional]
 **state_greater** | **string**| Filter on CTM-STE using &#39;Greater&#39; operator | [optional]
 **state_greater_or_equal** | **string**| Filter on CTM-STE using &#39;GreaterOrEqual&#39; operator | [optional]
 **state_is_null** | **string**| Filter on CTM-STE using &#39;IsNull&#39; operator | [optional]
 **state_is_not_null** | **string**| Filter on CTM-STE using &#39;IsNotNull&#39; operator | [optional]
 **state_like** | **string**| Filter on CTM-STE using &#39;Like&#39; operator | [optional]
 **state_not_like** | **string**| Filter on CTM-STE using &#39;NotLike&#39; operator | [optional]
 **state_contains** | **string**| Filter on CTM-STE using &#39;Contains&#39; operator | [optional]
 **state_not_contains** | **string**| Filter on CTM-STE using &#39;NotContains&#39; operator | [optional]
 **state_starts_with** | **string**| Filter on CTM-STE using &#39;StartsWith&#39; operator | [optional]
 **state_not_starts_with** | **string**| Filter on CTM-STE using &#39;NotStartsWith&#39; operator | [optional]
 **state_ends_with** | **string**| Filter on CTM-STE using &#39;EndsWith&#39; operator | [optional]
 **state_not_ends_with** | **string**| Filter on CTM-STE using &#39;NotEndsWith&#39; operator | [optional]
 **state_in** | **string**| Filter on CTM-STE using &#39;In&#39; operator | [optional]
 **state_between** | **string**| Filter on CTM-STE using &#39;Between&#39; operator | [optional]
 **country_code_not_equal** | **string**| Filter on CUN-TYP using &#39;NotEqual&#39; operator | [optional]
 **country_code_less** | **string**| Filter on CUN-TYP using &#39;Less&#39; operator | [optional]
 **country_code_less_or_equal** | **string**| Filter on CUN-TYP using &#39;LessOrEqual&#39; operator | [optional]
 **country_code_greater** | **string**| Filter on CUN-TYP using &#39;Greater&#39; operator | [optional]
 **country_code_greater_or_equal** | **string**| Filter on CUN-TYP using &#39;GreaterOrEqual&#39; operator | [optional]
 **country_code_is_null** | **string**| Filter on CUN-TYP using &#39;IsNull&#39; operator | [optional]
 **country_code_is_not_null** | **string**| Filter on CUN-TYP using &#39;IsNotNull&#39; operator | [optional]
 **country_code_like** | **string**| Filter on CUN-TYP using &#39;Like&#39; operator | [optional]
 **country_code_not_like** | **string**| Filter on CUN-TYP using &#39;NotLike&#39; operator | [optional]
 **country_code_contains** | **string**| Filter on CUN-TYP using &#39;Contains&#39; operator | [optional]
 **country_code_not_contains** | **string**| Filter on CUN-TYP using &#39;NotContains&#39; operator | [optional]
 **country_code_starts_with** | **string**| Filter on CUN-TYP using &#39;StartsWith&#39; operator | [optional]
 **country_code_not_starts_with** | **string**| Filter on CUN-TYP using &#39;NotStartsWith&#39; operator | [optional]
 **country_code_ends_with** | **string**| Filter on CUN-TYP using &#39;EndsWith&#39; operator | [optional]
 **country_code_not_ends_with** | **string**| Filter on CUN-TYP using &#39;NotEndsWith&#39; operator | [optional]
 **country_code_in** | **string**| Filter on CUN-TYP using &#39;In&#39; operator | [optional]
 **country_code_between** | **string**| Filter on CUN-TYP using &#39;Between&#39; operator | [optional]
 **postal_code_not_equal** | **string**| Filter on ZIP-CDE using &#39;NotEqual&#39; operator | [optional]
 **postal_code_less** | **string**| Filter on ZIP-CDE using &#39;Less&#39; operator | [optional]
 **postal_code_less_or_equal** | **string**| Filter on ZIP-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **postal_code_greater** | **string**| Filter on ZIP-CDE using &#39;Greater&#39; operator | [optional]
 **postal_code_greater_or_equal** | **string**| Filter on ZIP-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **postal_code_is_null** | **string**| Filter on ZIP-CDE using &#39;IsNull&#39; operator | [optional]
 **postal_code_is_not_null** | **string**| Filter on ZIP-CDE using &#39;IsNotNull&#39; operator | [optional]
 **postal_code_like** | **string**| Filter on ZIP-CDE using &#39;Like&#39; operator | [optional]
 **postal_code_not_like** | **string**| Filter on ZIP-CDE using &#39;NotLike&#39; operator | [optional]
 **postal_code_contains** | **string**| Filter on ZIP-CDE using &#39;Contains&#39; operator | [optional]
 **postal_code_not_contains** | **string**| Filter on ZIP-CDE using &#39;NotContains&#39; operator | [optional]
 **postal_code_starts_with** | **string**| Filter on ZIP-CDE using &#39;StartsWith&#39; operator | [optional]
 **postal_code_not_starts_with** | **string**| Filter on ZIP-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **postal_code_ends_with** | **string**| Filter on ZIP-CDE using &#39;EndsWith&#39; operator | [optional]
 **postal_code_not_ends_with** | **string**| Filter on ZIP-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **postal_code_in** | **string**| Filter on ZIP-CDE using &#39;In&#39; operator | [optional]
 **postal_code_between** | **string**| Filter on ZIP-CDE using &#39;Between&#39; operator | [optional]
 **fax_number_not_equal** | **string**| Filter on FAX-NBR using &#39;NotEqual&#39; operator | [optional]
 **fax_number_less** | **string**| Filter on FAX-NBR using &#39;Less&#39; operator | [optional]
 **fax_number_less_or_equal** | **string**| Filter on FAX-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **fax_number_greater** | **string**| Filter on FAX-NBR using &#39;Greater&#39; operator | [optional]
 **fax_number_greater_or_equal** | **string**| Filter on FAX-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **fax_number_is_null** | **string**| Filter on FAX-NBR using &#39;IsNull&#39; operator | [optional]
 **fax_number_is_not_null** | **string**| Filter on FAX-NBR using &#39;IsNotNull&#39; operator | [optional]
 **fax_number_like** | **string**| Filter on FAX-NBR using &#39;Like&#39; operator | [optional]
 **fax_number_not_like** | **string**| Filter on FAX-NBR using &#39;NotLike&#39; operator | [optional]
 **fax_number_contains** | **string**| Filter on FAX-NBR using &#39;Contains&#39; operator | [optional]
 **fax_number_not_contains** | **string**| Filter on FAX-NBR using &#39;NotContains&#39; operator | [optional]
 **fax_number_starts_with** | **string**| Filter on FAX-NBR using &#39;StartsWith&#39; operator | [optional]
 **fax_number_not_starts_with** | **string**| Filter on FAX-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **fax_number_ends_with** | **string**| Filter on FAX-NBR using &#39;EndsWith&#39; operator | [optional]
 **fax_number_not_ends_with** | **string**| Filter on FAX-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **fax_number_in** | **string**| Filter on FAX-NBR using &#39;In&#39; operator | [optional]
 **fax_number_between** | **string**| Filter on FAX-NBR using &#39;Between&#39; operator | [optional]
 **company_not_equal** | **string**| Filter on CMP-NME using &#39;NotEqual&#39; operator | [optional]
 **company_less** | **string**| Filter on CMP-NME using &#39;Less&#39; operator | [optional]
 **company_less_or_equal** | **string**| Filter on CMP-NME using &#39;LessOrEqual&#39; operator | [optional]
 **company_greater** | **string**| Filter on CMP-NME using &#39;Greater&#39; operator | [optional]
 **company_greater_or_equal** | **string**| Filter on CMP-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **company_is_null** | **string**| Filter on CMP-NME using &#39;IsNull&#39; operator | [optional]
 **company_is_not_null** | **string**| Filter on CMP-NME using &#39;IsNotNull&#39; operator | [optional]
 **company_like** | **string**| Filter on CMP-NME using &#39;Like&#39; operator | [optional]
 **company_not_like** | **string**| Filter on CMP-NME using &#39;NotLike&#39; operator | [optional]
 **company_contains** | **string**| Filter on CMP-NME using &#39;Contains&#39; operator | [optional]
 **company_not_contains** | **string**| Filter on CMP-NME using &#39;NotContains&#39; operator | [optional]
 **company_starts_with** | **string**| Filter on CMP-NME using &#39;StartsWith&#39; operator | [optional]
 **company_not_starts_with** | **string**| Filter on CMP-NME using &#39;NotStartsWith&#39; operator | [optional]
 **company_ends_with** | **string**| Filter on CMP-NME using &#39;EndsWith&#39; operator | [optional]
 **company_not_ends_with** | **string**| Filter on CMP-NME using &#39;NotEndsWith&#39; operator | [optional]
 **company_in** | **string**| Filter on CMP-NME using &#39;In&#39; operator | [optional]
 **company_between** | **string**| Filter on CMP-NME using &#39;Between&#39; operator | [optional]
 **customer_type_not_equal** | **string**| Filter on CTM-TYP using &#39;NotEqual&#39; operator | [optional]
 **customer_type_less** | **string**| Filter on CTM-TYP using &#39;Less&#39; operator | [optional]
 **customer_type_less_or_equal** | **string**| Filter on CTM-TYP using &#39;LessOrEqual&#39; operator | [optional]
 **customer_type_greater** | **string**| Filter on CTM-TYP using &#39;Greater&#39; operator | [optional]
 **customer_type_greater_or_equal** | **string**| Filter on CTM-TYP using &#39;GreaterOrEqual&#39; operator | [optional]
 **customer_type_is_null** | **string**| Filter on CTM-TYP using &#39;IsNull&#39; operator | [optional]
 **customer_type_is_not_null** | **string**| Filter on CTM-TYP using &#39;IsNotNull&#39; operator | [optional]
 **customer_type_like** | **string**| Filter on CTM-TYP using &#39;Like&#39; operator | [optional]
 **customer_type_not_like** | **string**| Filter on CTM-TYP using &#39;NotLike&#39; operator | [optional]
 **customer_type_contains** | **string**| Filter on CTM-TYP using &#39;Contains&#39; operator | [optional]
 **customer_type_not_contains** | **string**| Filter on CTM-TYP using &#39;NotContains&#39; operator | [optional]
 **customer_type_starts_with** | **string**| Filter on CTM-TYP using &#39;StartsWith&#39; operator | [optional]
 **customer_type_not_starts_with** | **string**| Filter on CTM-TYP using &#39;NotStartsWith&#39; operator | [optional]
 **customer_type_ends_with** | **string**| Filter on CTM-TYP using &#39;EndsWith&#39; operator | [optional]
 **customer_type_not_ends_with** | **string**| Filter on CTM-TYP using &#39;NotEndsWith&#39; operator | [optional]
 **customer_type_in** | **string**| Filter on CTM-TYP using &#39;In&#39; operator | [optional]
 **customer_type_between** | **string**| Filter on CTM-TYP using &#39;Between&#39; operator | [optional]
 **promote_flag_not_equal** | **string**| Filter on PROMO using &#39;NotEqual&#39; operator | [optional]
 **promote_flag_less** | **string**| Filter on PROMO using &#39;Less&#39; operator | [optional]
 **promote_flag_less_or_equal** | **string**| Filter on PROMO using &#39;LessOrEqual&#39; operator | [optional]
 **promote_flag_greater** | **string**| Filter on PROMO using &#39;Greater&#39; operator | [optional]
 **promote_flag_greater_or_equal** | **string**| Filter on PROMO using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_flag_is_null** | **string**| Filter on PROMO using &#39;IsNull&#39; operator | [optional]
 **promote_flag_is_not_null** | **string**| Filter on PROMO using &#39;IsNotNull&#39; operator | [optional]
 **promote_flag_like** | **string**| Filter on PROMO using &#39;Like&#39; operator | [optional]
 **promote_flag_not_like** | **string**| Filter on PROMO using &#39;NotLike&#39; operator | [optional]
 **promote_flag_contains** | **string**| Filter on PROMO using &#39;Contains&#39; operator | [optional]
 **promote_flag_not_contains** | **string**| Filter on PROMO using &#39;NotContains&#39; operator | [optional]
 **promote_flag_starts_with** | **string**| Filter on PROMO using &#39;StartsWith&#39; operator | [optional]
 **promote_flag_not_starts_with** | **string**| Filter on PROMO using &#39;NotStartsWith&#39; operator | [optional]
 **promote_flag_ends_with** | **string**| Filter on PROMO using &#39;EndsWith&#39; operator | [optional]
 **promote_flag_not_ends_with** | **string**| Filter on PROMO using &#39;NotEndsWith&#39; operator | [optional]
 **promote_flag_in** | **string**| Filter on PROMO using &#39;In&#39; operator | [optional]
 **promote_flag_between** | **string**| Filter on PROMO using &#39;Between&#39; operator | [optional]
 **promote_by_partners_not_equal** | **string**| Filter on PMO-PTR using &#39;NotEqual&#39; operator | [optional]
 **promote_by_partners_less** | **string**| Filter on PMO-PTR using &#39;Less&#39; operator | [optional]
 **promote_by_partners_less_or_equal** | **string**| Filter on PMO-PTR using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_partners_greater** | **string**| Filter on PMO-PTR using &#39;Greater&#39; operator | [optional]
 **promote_by_partners_greater_or_equal** | **string**| Filter on PMO-PTR using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_partners_is_null** | **string**| Filter on PMO-PTR using &#39;IsNull&#39; operator | [optional]
 **promote_by_partners_is_not_null** | **string**| Filter on PMO-PTR using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_partners_like** | **string**| Filter on PMO-PTR using &#39;Like&#39; operator | [optional]
 **promote_by_partners_not_like** | **string**| Filter on PMO-PTR using &#39;NotLike&#39; operator | [optional]
 **promote_by_partners_contains** | **string**| Filter on PMO-PTR using &#39;Contains&#39; operator | [optional]
 **promote_by_partners_not_contains** | **string**| Filter on PMO-PTR using &#39;NotContains&#39; operator | [optional]
 **promote_by_partners_starts_with** | **string**| Filter on PMO-PTR using &#39;StartsWith&#39; operator | [optional]
 **promote_by_partners_not_starts_with** | **string**| Filter on PMO-PTR using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_partners_ends_with** | **string**| Filter on PMO-PTR using &#39;EndsWith&#39; operator | [optional]
 **promote_by_partners_not_ends_with** | **string**| Filter on PMO-PTR using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_partners_in** | **string**| Filter on PMO-PTR using &#39;In&#39; operator | [optional]
 **promote_by_partners_between** | **string**| Filter on PMO-PTR using &#39;Between&#39; operator | [optional]
 **promote_by_phone_not_equal** | **string**| Filter on PMO-PHN using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone_less** | **string**| Filter on PMO-PHN using &#39;Less&#39; operator | [optional]
 **promote_by_phone_less_or_equal** | **string**| Filter on PMO-PHN using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone_greater** | **string**| Filter on PMO-PHN using &#39;Greater&#39; operator | [optional]
 **promote_by_phone_greater_or_equal** | **string**| Filter on PMO-PHN using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone_is_null** | **string**| Filter on PMO-PHN using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone_is_not_null** | **string**| Filter on PMO-PHN using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone_like** | **string**| Filter on PMO-PHN using &#39;Like&#39; operator | [optional]
 **promote_by_phone_not_like** | **string**| Filter on PMO-PHN using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone_contains** | **string**| Filter on PMO-PHN using &#39;Contains&#39; operator | [optional]
 **promote_by_phone_not_contains** | **string**| Filter on PMO-PHN using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone_starts_with** | **string**| Filter on PMO-PHN using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone_not_starts_with** | **string**| Filter on PMO-PHN using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone_ends_with** | **string**| Filter on PMO-PHN using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone_not_ends_with** | **string**| Filter on PMO-PHN using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone_in** | **string**| Filter on PMO-PHN using &#39;In&#39; operator | [optional]
 **promote_by_phone_between** | **string**| Filter on PMO-PHN using &#39;Between&#39; operator | [optional]
 **promote_by_fax_not_equal** | **string**| Filter on PMO-FAX using &#39;NotEqual&#39; operator | [optional]
 **promote_by_fax_less** | **string**| Filter on PMO-FAX using &#39;Less&#39; operator | [optional]
 **promote_by_fax_less_or_equal** | **string**| Filter on PMO-FAX using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_fax_greater** | **string**| Filter on PMO-FAX using &#39;Greater&#39; operator | [optional]
 **promote_by_fax_greater_or_equal** | **string**| Filter on PMO-FAX using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_fax_is_null** | **string**| Filter on PMO-FAX using &#39;IsNull&#39; operator | [optional]
 **promote_by_fax_is_not_null** | **string**| Filter on PMO-FAX using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_fax_like** | **string**| Filter on PMO-FAX using &#39;Like&#39; operator | [optional]
 **promote_by_fax_not_like** | **string**| Filter on PMO-FAX using &#39;NotLike&#39; operator | [optional]
 **promote_by_fax_contains** | **string**| Filter on PMO-FAX using &#39;Contains&#39; operator | [optional]
 **promote_by_fax_not_contains** | **string**| Filter on PMO-FAX using &#39;NotContains&#39; operator | [optional]
 **promote_by_fax_starts_with** | **string**| Filter on PMO-FAX using &#39;StartsWith&#39; operator | [optional]
 **promote_by_fax_not_starts_with** | **string**| Filter on PMO-FAX using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_fax_ends_with** | **string**| Filter on PMO-FAX using &#39;EndsWith&#39; operator | [optional]
 **promote_by_fax_not_ends_with** | **string**| Filter on PMO-FAX using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_fax_in** | **string**| Filter on PMO-FAX using &#39;In&#39; operator | [optional]
 **promote_by_fax_between** | **string**| Filter on PMO-FAX using &#39;Between&#39; operator | [optional]
 **promote_by_email_not_equal** | **string**| Filter on PMO-EML using &#39;NotEqual&#39; operator | [optional]
 **promote_by_email_less** | **string**| Filter on PMO-EML using &#39;Less&#39; operator | [optional]
 **promote_by_email_less_or_equal** | **string**| Filter on PMO-EML using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_email_greater** | **string**| Filter on PMO-EML using &#39;Greater&#39; operator | [optional]
 **promote_by_email_greater_or_equal** | **string**| Filter on PMO-EML using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_email_is_null** | **string**| Filter on PMO-EML using &#39;IsNull&#39; operator | [optional]
 **promote_by_email_is_not_null** | **string**| Filter on PMO-EML using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_email_like** | **string**| Filter on PMO-EML using &#39;Like&#39; operator | [optional]
 **promote_by_email_not_like** | **string**| Filter on PMO-EML using &#39;NotLike&#39; operator | [optional]
 **promote_by_email_contains** | **string**| Filter on PMO-EML using &#39;Contains&#39; operator | [optional]
 **promote_by_email_not_contains** | **string**| Filter on PMO-EML using &#39;NotContains&#39; operator | [optional]
 **promote_by_email_starts_with** | **string**| Filter on PMO-EML using &#39;StartsWith&#39; operator | [optional]
 **promote_by_email_not_starts_with** | **string**| Filter on PMO-EML using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_email_ends_with** | **string**| Filter on PMO-EML using &#39;EndsWith&#39; operator | [optional]
 **promote_by_email_not_ends_with** | **string**| Filter on PMO-EML using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_email_in** | **string**| Filter on PMO-EML using &#39;In&#39; operator | [optional]
 **promote_by_email_between** | **string**| Filter on PMO-EML using &#39;Between&#39; operator | [optional]
 **promote_by_mail_not_equal** | **string**| Filter on PMO-ADR using &#39;NotEqual&#39; operator | [optional]
 **promote_by_mail_less** | **string**| Filter on PMO-ADR using &#39;Less&#39; operator | [optional]
 **promote_by_mail_less_or_equal** | **string**| Filter on PMO-ADR using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_mail_greater** | **string**| Filter on PMO-ADR using &#39;Greater&#39; operator | [optional]
 **promote_by_mail_greater_or_equal** | **string**| Filter on PMO-ADR using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_mail_is_null** | **string**| Filter on PMO-ADR using &#39;IsNull&#39; operator | [optional]
 **promote_by_mail_is_not_null** | **string**| Filter on PMO-ADR using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_mail_like** | **string**| Filter on PMO-ADR using &#39;Like&#39; operator | [optional]
 **promote_by_mail_not_like** | **string**| Filter on PMO-ADR using &#39;NotLike&#39; operator | [optional]
 **promote_by_mail_contains** | **string**| Filter on PMO-ADR using &#39;Contains&#39; operator | [optional]
 **promote_by_mail_not_contains** | **string**| Filter on PMO-ADR using &#39;NotContains&#39; operator | [optional]
 **promote_by_mail_starts_with** | **string**| Filter on PMO-ADR using &#39;StartsWith&#39; operator | [optional]
 **promote_by_mail_not_starts_with** | **string**| Filter on PMO-ADR using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_mail_ends_with** | **string**| Filter on PMO-ADR using &#39;EndsWith&#39; operator | [optional]
 **promote_by_mail_not_ends_with** | **string**| Filter on PMO-ADR using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_mail_in** | **string**| Filter on PMO-ADR using &#39;In&#39; operator | [optional]
 **promote_by_mail_between** | **string**| Filter on PMO-ADR using &#39;Between&#39; operator | [optional]
 **promote_by_sms_not_equal** | **string**| Filter on PMO-SMS using &#39;NotEqual&#39; operator | [optional]
 **promote_by_sms_less** | **string**| Filter on PMO-SMS using &#39;Less&#39; operator | [optional]
 **promote_by_sms_less_or_equal** | **string**| Filter on PMO-SMS using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_sms_greater** | **string**| Filter on PMO-SMS using &#39;Greater&#39; operator | [optional]
 **promote_by_sms_greater_or_equal** | **string**| Filter on PMO-SMS using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_sms_is_null** | **string**| Filter on PMO-SMS using &#39;IsNull&#39; operator | [optional]
 **promote_by_sms_is_not_null** | **string**| Filter on PMO-SMS using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_sms_like** | **string**| Filter on PMO-SMS using &#39;Like&#39; operator | [optional]
 **promote_by_sms_not_like** | **string**| Filter on PMO-SMS using &#39;NotLike&#39; operator | [optional]
 **promote_by_sms_contains** | **string**| Filter on PMO-SMS using &#39;Contains&#39; operator | [optional]
 **promote_by_sms_not_contains** | **string**| Filter on PMO-SMS using &#39;NotContains&#39; operator | [optional]
 **promote_by_sms_starts_with** | **string**| Filter on PMO-SMS using &#39;StartsWith&#39; operator | [optional]
 **promote_by_sms_not_starts_with** | **string**| Filter on PMO-SMS using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_sms_ends_with** | **string**| Filter on PMO-SMS using &#39;EndsWith&#39; operator | [optional]
 **promote_by_sms_not_ends_with** | **string**| Filter on PMO-SMS using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_sms_in** | **string**| Filter on PMO-SMS using &#39;In&#39; operator | [optional]
 **promote_by_sms_between** | **string**| Filter on PMO-SMS using &#39;Between&#39; operator | [optional]
 **promote_by_phone1_not_equal** | **string**| Filter on PMO-PH1 using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone1_less** | **string**| Filter on PMO-PH1 using &#39;Less&#39; operator | [optional]
 **promote_by_phone1_less_or_equal** | **string**| Filter on PMO-PH1 using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone1_greater** | **string**| Filter on PMO-PH1 using &#39;Greater&#39; operator | [optional]
 **promote_by_phone1_greater_or_equal** | **string**| Filter on PMO-PH1 using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone1_is_null** | **string**| Filter on PMO-PH1 using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone1_is_not_null** | **string**| Filter on PMO-PH1 using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone1_like** | **string**| Filter on PMO-PH1 using &#39;Like&#39; operator | [optional]
 **promote_by_phone1_not_like** | **string**| Filter on PMO-PH1 using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone1_contains** | **string**| Filter on PMO-PH1 using &#39;Contains&#39; operator | [optional]
 **promote_by_phone1_not_contains** | **string**| Filter on PMO-PH1 using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone1_starts_with** | **string**| Filter on PMO-PH1 using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone1_not_starts_with** | **string**| Filter on PMO-PH1 using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone1_ends_with** | **string**| Filter on PMO-PH1 using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone1_not_ends_with** | **string**| Filter on PMO-PH1 using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone1_in** | **string**| Filter on PMO-PH1 using &#39;In&#39; operator | [optional]
 **promote_by_phone1_between** | **string**| Filter on PMO-PH1 using &#39;Between&#39; operator | [optional]
 **promote_by_phone2_not_equal** | **string**| Filter on PMO-PH2 using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone2_less** | **string**| Filter on PMO-PH2 using &#39;Less&#39; operator | [optional]
 **promote_by_phone2_less_or_equal** | **string**| Filter on PMO-PH2 using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone2_greater** | **string**| Filter on PMO-PH2 using &#39;Greater&#39; operator | [optional]
 **promote_by_phone2_greater_or_equal** | **string**| Filter on PMO-PH2 using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone2_is_null** | **string**| Filter on PMO-PH2 using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone2_is_not_null** | **string**| Filter on PMO-PH2 using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone2_like** | **string**| Filter on PMO-PH2 using &#39;Like&#39; operator | [optional]
 **promote_by_phone2_not_like** | **string**| Filter on PMO-PH2 using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone2_contains** | **string**| Filter on PMO-PH2 using &#39;Contains&#39; operator | [optional]
 **promote_by_phone2_not_contains** | **string**| Filter on PMO-PH2 using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone2_starts_with** | **string**| Filter on PMO-PH2 using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone2_not_starts_with** | **string**| Filter on PMO-PH2 using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone2_ends_with** | **string**| Filter on PMO-PH2 using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone2_not_ends_with** | **string**| Filter on PMO-PH2 using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone2_in** | **string**| Filter on PMO-PH2 using &#39;In&#39; operator | [optional]
 **promote_by_phone2_between** | **string**| Filter on PMO-PH2 using &#39;Between&#39; operator | [optional]
 **promote_by_phone3_not_equal** | **string**| Filter on PMO-PH3 using &#39;NotEqual&#39; operator | [optional]
 **promote_by_phone3_less** | **string**| Filter on PMO-PH3 using &#39;Less&#39; operator | [optional]
 **promote_by_phone3_less_or_equal** | **string**| Filter on PMO-PH3 using &#39;LessOrEqual&#39; operator | [optional]
 **promote_by_phone3_greater** | **string**| Filter on PMO-PH3 using &#39;Greater&#39; operator | [optional]
 **promote_by_phone3_greater_or_equal** | **string**| Filter on PMO-PH3 using &#39;GreaterOrEqual&#39; operator | [optional]
 **promote_by_phone3_is_null** | **string**| Filter on PMO-PH3 using &#39;IsNull&#39; operator | [optional]
 **promote_by_phone3_is_not_null** | **string**| Filter on PMO-PH3 using &#39;IsNotNull&#39; operator | [optional]
 **promote_by_phone3_like** | **string**| Filter on PMO-PH3 using &#39;Like&#39; operator | [optional]
 **promote_by_phone3_not_like** | **string**| Filter on PMO-PH3 using &#39;NotLike&#39; operator | [optional]
 **promote_by_phone3_contains** | **string**| Filter on PMO-PH3 using &#39;Contains&#39; operator | [optional]
 **promote_by_phone3_not_contains** | **string**| Filter on PMO-PH3 using &#39;NotContains&#39; operator | [optional]
 **promote_by_phone3_starts_with** | **string**| Filter on PMO-PH3 using &#39;StartsWith&#39; operator | [optional]
 **promote_by_phone3_not_starts_with** | **string**| Filter on PMO-PH3 using &#39;NotStartsWith&#39; operator | [optional]
 **promote_by_phone3_ends_with** | **string**| Filter on PMO-PH3 using &#39;EndsWith&#39; operator | [optional]
 **promote_by_phone3_not_ends_with** | **string**| Filter on PMO-PH3 using &#39;NotEndsWith&#39; operator | [optional]
 **promote_by_phone3_in** | **string**| Filter on PMO-PH3 using &#39;In&#39; operator | [optional]
 **promote_by_phone3_between** | **string**| Filter on PMO-PH3 using &#39;Between&#39; operator | [optional]
 **title_not_equal** | **string**| Filter on CTM-TTL using &#39;NotEqual&#39; operator | [optional]
 **title_less** | **string**| Filter on CTM-TTL using &#39;Less&#39; operator | [optional]
 **title_less_or_equal** | **string**| Filter on CTM-TTL using &#39;LessOrEqual&#39; operator | [optional]
 **title_greater** | **string**| Filter on CTM-TTL using &#39;Greater&#39; operator | [optional]
 **title_greater_or_equal** | **string**| Filter on CTM-TTL using &#39;GreaterOrEqual&#39; operator | [optional]
 **title_is_null** | **string**| Filter on CTM-TTL using &#39;IsNull&#39; operator | [optional]
 **title_is_not_null** | **string**| Filter on CTM-TTL using &#39;IsNotNull&#39; operator | [optional]
 **title_like** | **string**| Filter on CTM-TTL using &#39;Like&#39; operator | [optional]
 **title_not_like** | **string**| Filter on CTM-TTL using &#39;NotLike&#39; operator | [optional]
 **title_contains** | **string**| Filter on CTM-TTL using &#39;Contains&#39; operator | [optional]
 **title_not_contains** | **string**| Filter on CTM-TTL using &#39;NotContains&#39; operator | [optional]
 **title_starts_with** | **string**| Filter on CTM-TTL using &#39;StartsWith&#39; operator | [optional]
 **title_not_starts_with** | **string**| Filter on CTM-TTL using &#39;NotStartsWith&#39; operator | [optional]
 **title_ends_with** | **string**| Filter on CTM-TTL using &#39;EndsWith&#39; operator | [optional]
 **title_not_ends_with** | **string**| Filter on CTM-TTL using &#39;NotEndsWith&#39; operator | [optional]
 **title_in** | **string**| Filter on CTM-TTL using &#39;In&#39; operator | [optional]
 **title_between** | **string**| Filter on CTM-TTL using &#39;Between&#39; operator | [optional]
 **first_name_not_equal** | **string**| Filter on ATN-1ST using &#39;NotEqual&#39; operator | [optional]
 **first_name_less** | **string**| Filter on ATN-1ST using &#39;Less&#39; operator | [optional]
 **first_name_less_or_equal** | **string**| Filter on ATN-1ST using &#39;LessOrEqual&#39; operator | [optional]
 **first_name_greater** | **string**| Filter on ATN-1ST using &#39;Greater&#39; operator | [optional]
 **first_name_greater_or_equal** | **string**| Filter on ATN-1ST using &#39;GreaterOrEqual&#39; operator | [optional]
 **first_name_is_null** | **string**| Filter on ATN-1ST using &#39;IsNull&#39; operator | [optional]
 **first_name_is_not_null** | **string**| Filter on ATN-1ST using &#39;IsNotNull&#39; operator | [optional]
 **first_name_like** | **string**| Filter on ATN-1ST using &#39;Like&#39; operator | [optional]
 **first_name_not_like** | **string**| Filter on ATN-1ST using &#39;NotLike&#39; operator | [optional]
 **first_name_contains** | **string**| Filter on ATN-1ST using &#39;Contains&#39; operator | [optional]
 **first_name_not_contains** | **string**| Filter on ATN-1ST using &#39;NotContains&#39; operator | [optional]
 **first_name_starts_with** | **string**| Filter on ATN-1ST using &#39;StartsWith&#39; operator | [optional]
 **first_name_not_starts_with** | **string**| Filter on ATN-1ST using &#39;NotStartsWith&#39; operator | [optional]
 **first_name_ends_with** | **string**| Filter on ATN-1ST using &#39;EndsWith&#39; operator | [optional]
 **first_name_not_ends_with** | **string**| Filter on ATN-1ST using &#39;NotEndsWith&#39; operator | [optional]
 **first_name_in** | **string**| Filter on ATN-1ST using &#39;In&#39; operator | [optional]
 **first_name_between** | **string**| Filter on ATN-1ST using &#39;Between&#39; operator | [optional]
 **middle_initial_not_equal** | **string**| Filter on ATN-MID using &#39;NotEqual&#39; operator | [optional]
 **middle_initial_less** | **string**| Filter on ATN-MID using &#39;Less&#39; operator | [optional]
 **middle_initial_less_or_equal** | **string**| Filter on ATN-MID using &#39;LessOrEqual&#39; operator | [optional]
 **middle_initial_greater** | **string**| Filter on ATN-MID using &#39;Greater&#39; operator | [optional]
 **middle_initial_greater_or_equal** | **string**| Filter on ATN-MID using &#39;GreaterOrEqual&#39; operator | [optional]
 **middle_initial_is_null** | **string**| Filter on ATN-MID using &#39;IsNull&#39; operator | [optional]
 **middle_initial_is_not_null** | **string**| Filter on ATN-MID using &#39;IsNotNull&#39; operator | [optional]
 **middle_initial_like** | **string**| Filter on ATN-MID using &#39;Like&#39; operator | [optional]
 **middle_initial_not_like** | **string**| Filter on ATN-MID using &#39;NotLike&#39; operator | [optional]
 **middle_initial_contains** | **string**| Filter on ATN-MID using &#39;Contains&#39; operator | [optional]
 **middle_initial_not_contains** | **string**| Filter on ATN-MID using &#39;NotContains&#39; operator | [optional]
 **middle_initial_starts_with** | **string**| Filter on ATN-MID using &#39;StartsWith&#39; operator | [optional]
 **middle_initial_not_starts_with** | **string**| Filter on ATN-MID using &#39;NotStartsWith&#39; operator | [optional]
 **middle_initial_ends_with** | **string**| Filter on ATN-MID using &#39;EndsWith&#39; operator | [optional]
 **middle_initial_not_ends_with** | **string**| Filter on ATN-MID using &#39;NotEndsWith&#39; operator | [optional]
 **middle_initial_in** | **string**| Filter on ATN-MID using &#39;In&#39; operator | [optional]
 **middle_initial_between** | **string**| Filter on ATN-MID using &#39;Between&#39; operator | [optional]
 **last_name_not_equal** | **string**| Filter on ATN-END using &#39;NotEqual&#39; operator | [optional]
 **last_name_less** | **string**| Filter on ATN-END using &#39;Less&#39; operator | [optional]
 **last_name_less_or_equal** | **string**| Filter on ATN-END using &#39;LessOrEqual&#39; operator | [optional]
 **last_name_greater** | **string**| Filter on ATN-END using &#39;Greater&#39; operator | [optional]
 **last_name_greater_or_equal** | **string**| Filter on ATN-END using &#39;GreaterOrEqual&#39; operator | [optional]
 **last_name_is_null** | **string**| Filter on ATN-END using &#39;IsNull&#39; operator | [optional]
 **last_name_is_not_null** | **string**| Filter on ATN-END using &#39;IsNotNull&#39; operator | [optional]
 **last_name_like** | **string**| Filter on ATN-END using &#39;Like&#39; operator | [optional]
 **last_name_not_like** | **string**| Filter on ATN-END using &#39;NotLike&#39; operator | [optional]
 **last_name_contains** | **string**| Filter on ATN-END using &#39;Contains&#39; operator | [optional]
 **last_name_not_contains** | **string**| Filter on ATN-END using &#39;NotContains&#39; operator | [optional]
 **last_name_starts_with** | **string**| Filter on ATN-END using &#39;StartsWith&#39; operator | [optional]
 **last_name_not_starts_with** | **string**| Filter on ATN-END using &#39;NotStartsWith&#39; operator | [optional]
 **last_name_ends_with** | **string**| Filter on ATN-END using &#39;EndsWith&#39; operator | [optional]
 **last_name_not_ends_with** | **string**| Filter on ATN-END using &#39;NotEndsWith&#39; operator | [optional]
 **last_name_in** | **string**| Filter on ATN-END using &#39;In&#39; operator | [optional]
 **last_name_between** | **string**| Filter on ATN-END using &#39;Between&#39; operator | [optional]
 **suffix_not_equal** | **string**| Filter on CTM-SFX using &#39;NotEqual&#39; operator | [optional]
 **suffix_less** | **string**| Filter on CTM-SFX using &#39;Less&#39; operator | [optional]
 **suffix_less_or_equal** | **string**| Filter on CTM-SFX using &#39;LessOrEqual&#39; operator | [optional]
 **suffix_greater** | **string**| Filter on CTM-SFX using &#39;Greater&#39; operator | [optional]
 **suffix_greater_or_equal** | **string**| Filter on CTM-SFX using &#39;GreaterOrEqual&#39; operator | [optional]
 **suffix_is_null** | **string**| Filter on CTM-SFX using &#39;IsNull&#39; operator | [optional]
 **suffix_is_not_null** | **string**| Filter on CTM-SFX using &#39;IsNotNull&#39; operator | [optional]
 **suffix_like** | **string**| Filter on CTM-SFX using &#39;Like&#39; operator | [optional]
 **suffix_not_like** | **string**| Filter on CTM-SFX using &#39;NotLike&#39; operator | [optional]
 **suffix_contains** | **string**| Filter on CTM-SFX using &#39;Contains&#39; operator | [optional]
 **suffix_not_contains** | **string**| Filter on CTM-SFX using &#39;NotContains&#39; operator | [optional]
 **suffix_starts_with** | **string**| Filter on CTM-SFX using &#39;StartsWith&#39; operator | [optional]
 **suffix_not_starts_with** | **string**| Filter on CTM-SFX using &#39;NotStartsWith&#39; operator | [optional]
 **suffix_ends_with** | **string**| Filter on CTM-SFX using &#39;EndsWith&#39; operator | [optional]
 **suffix_not_ends_with** | **string**| Filter on CTM-SFX using &#39;NotEndsWith&#39; operator | [optional]
 **suffix_in** | **string**| Filter on CTM-SFX using &#39;In&#39; operator | [optional]
 **suffix_between** | **string**| Filter on CTM-SFX using &#39;Between&#39; operator | [optional]
 **job_title_not_equal** | **string**| Filter on JOB-TTL using &#39;NotEqual&#39; operator | [optional]
 **job_title_less** | **string**| Filter on JOB-TTL using &#39;Less&#39; operator | [optional]
 **job_title_less_or_equal** | **string**| Filter on JOB-TTL using &#39;LessOrEqual&#39; operator | [optional]
 **job_title_greater** | **string**| Filter on JOB-TTL using &#39;Greater&#39; operator | [optional]
 **job_title_greater_or_equal** | **string**| Filter on JOB-TTL using &#39;GreaterOrEqual&#39; operator | [optional]
 **job_title_is_null** | **string**| Filter on JOB-TTL using &#39;IsNull&#39; operator | [optional]
 **job_title_is_not_null** | **string**| Filter on JOB-TTL using &#39;IsNotNull&#39; operator | [optional]
 **job_title_like** | **string**| Filter on JOB-TTL using &#39;Like&#39; operator | [optional]
 **job_title_not_like** | **string**| Filter on JOB-TTL using &#39;NotLike&#39; operator | [optional]
 **job_title_contains** | **string**| Filter on JOB-TTL using &#39;Contains&#39; operator | [optional]
 **job_title_not_contains** | **string**| Filter on JOB-TTL using &#39;NotContains&#39; operator | [optional]
 **job_title_starts_with** | **string**| Filter on JOB-TTL using &#39;StartsWith&#39; operator | [optional]
 **job_title_not_starts_with** | **string**| Filter on JOB-TTL using &#39;NotStartsWith&#39; operator | [optional]
 **job_title_ends_with** | **string**| Filter on JOB-TTL using &#39;EndsWith&#39; operator | [optional]
 **job_title_not_ends_with** | **string**| Filter on JOB-TTL using &#39;NotEndsWith&#39; operator | [optional]
 **job_title_in** | **string**| Filter on JOB-TTL using &#39;In&#39; operator | [optional]
 **job_title_between** | **string**| Filter on JOB-TTL using &#39;Between&#39; operator | [optional]
 **job_position_code_not_equal** | **string**| Filter on CTM-POS using &#39;NotEqual&#39; operator | [optional]
 **job_position_code_less** | **string**| Filter on CTM-POS using &#39;Less&#39; operator | [optional]
 **job_position_code_less_or_equal** | **string**| Filter on CTM-POS using &#39;LessOrEqual&#39; operator | [optional]
 **job_position_code_greater** | **string**| Filter on CTM-POS using &#39;Greater&#39; operator | [optional]
 **job_position_code_greater_or_equal** | **string**| Filter on CTM-POS using &#39;GreaterOrEqual&#39; operator | [optional]
 **job_position_code_is_null** | **string**| Filter on CTM-POS using &#39;IsNull&#39; operator | [optional]
 **job_position_code_is_not_null** | **string**| Filter on CTM-POS using &#39;IsNotNull&#39; operator | [optional]
 **job_position_code_like** | **string**| Filter on CTM-POS using &#39;Like&#39; operator | [optional]
 **job_position_code_not_like** | **string**| Filter on CTM-POS using &#39;NotLike&#39; operator | [optional]
 **job_position_code_contains** | **string**| Filter on CTM-POS using &#39;Contains&#39; operator | [optional]
 **job_position_code_not_contains** | **string**| Filter on CTM-POS using &#39;NotContains&#39; operator | [optional]
 **job_position_code_starts_with** | **string**| Filter on CTM-POS using &#39;StartsWith&#39; operator | [optional]
 **job_position_code_not_starts_with** | **string**| Filter on CTM-POS using &#39;NotStartsWith&#39; operator | [optional]
 **job_position_code_ends_with** | **string**| Filter on CTM-POS using &#39;EndsWith&#39; operator | [optional]
 **job_position_code_not_ends_with** | **string**| Filter on CTM-POS using &#39;NotEndsWith&#39; operator | [optional]
 **job_position_code_in** | **string**| Filter on CTM-POS using &#39;In&#39; operator | [optional]
 **job_position_code_between** | **string**| Filter on CTM-POS using &#39;Between&#39; operator | [optional]
 **communication_preference_not_equal** | **string**| Filter on COMM-PRF using &#39;NotEqual&#39; operator | [optional]
 **communication_preference_less** | **string**| Filter on COMM-PRF using &#39;Less&#39; operator | [optional]
 **communication_preference_less_or_equal** | **string**| Filter on COMM-PRF using &#39;LessOrEqual&#39; operator | [optional]
 **communication_preference_greater** | **string**| Filter on COMM-PRF using &#39;Greater&#39; operator | [optional]
 **communication_preference_greater_or_equal** | **string**| Filter on COMM-PRF using &#39;GreaterOrEqual&#39; operator | [optional]
 **communication_preference_is_null** | **string**| Filter on COMM-PRF using &#39;IsNull&#39; operator | [optional]
 **communication_preference_is_not_null** | **string**| Filter on COMM-PRF using &#39;IsNotNull&#39; operator | [optional]
 **communication_preference_like** | **string**| Filter on COMM-PRF using &#39;Like&#39; operator | [optional]
 **communication_preference_not_like** | **string**| Filter on COMM-PRF using &#39;NotLike&#39; operator | [optional]
 **communication_preference_contains** | **string**| Filter on COMM-PRF using &#39;Contains&#39; operator | [optional]
 **communication_preference_not_contains** | **string**| Filter on COMM-PRF using &#39;NotContains&#39; operator | [optional]
 **communication_preference_starts_with** | **string**| Filter on COMM-PRF using &#39;StartsWith&#39; operator | [optional]
 **communication_preference_not_starts_with** | **string**| Filter on COMM-PRF using &#39;NotStartsWith&#39; operator | [optional]
 **communication_preference_ends_with** | **string**| Filter on COMM-PRF using &#39;EndsWith&#39; operator | [optional]
 **communication_preference_not_ends_with** | **string**| Filter on COMM-PRF using &#39;NotEndsWith&#39; operator | [optional]
 **communication_preference_in** | **string**| Filter on COMM-PRF using &#39;In&#39; operator | [optional]
 **communication_preference_between** | **string**| Filter on COMM-PRF using &#39;Between&#39; operator | [optional]
 **source_promotion_not_equal** | **string**| Filter on CTM-SRC using &#39;NotEqual&#39; operator | [optional]
 **source_promotion_less** | **string**| Filter on CTM-SRC using &#39;Less&#39; operator | [optional]
 **source_promotion_less_or_equal** | **string**| Filter on CTM-SRC using &#39;LessOrEqual&#39; operator | [optional]
 **source_promotion_greater** | **string**| Filter on CTM-SRC using &#39;Greater&#39; operator | [optional]
 **source_promotion_greater_or_equal** | **string**| Filter on CTM-SRC using &#39;GreaterOrEqual&#39; operator | [optional]
 **source_promotion_is_null** | **string**| Filter on CTM-SRC using &#39;IsNull&#39; operator | [optional]
 **source_promotion_is_not_null** | **string**| Filter on CTM-SRC using &#39;IsNotNull&#39; operator | [optional]
 **source_promotion_like** | **string**| Filter on CTM-SRC using &#39;Like&#39; operator | [optional]
 **source_promotion_not_like** | **string**| Filter on CTM-SRC using &#39;NotLike&#39; operator | [optional]
 **source_promotion_contains** | **string**| Filter on CTM-SRC using &#39;Contains&#39; operator | [optional]
 **source_promotion_not_contains** | **string**| Filter on CTM-SRC using &#39;NotContains&#39; operator | [optional]
 **source_promotion_starts_with** | **string**| Filter on CTM-SRC using &#39;StartsWith&#39; operator | [optional]
 **source_promotion_not_starts_with** | **string**| Filter on CTM-SRC using &#39;NotStartsWith&#39; operator | [optional]
 **source_promotion_ends_with** | **string**| Filter on CTM-SRC using &#39;EndsWith&#39; operator | [optional]
 **source_promotion_not_ends_with** | **string**| Filter on CTM-SRC using &#39;NotEndsWith&#39; operator | [optional]
 **source_promotion_in** | **string**| Filter on CTM-SRC using &#39;In&#39; operator | [optional]
 **source_promotion_between** | **string**| Filter on CTM-SRC using &#39;Between&#39; operator | [optional]
 **address_code_not_equal** | **string**| Filter on ADR-CDE using &#39;NotEqual&#39; operator | [optional]
 **address_code_less** | **string**| Filter on ADR-CDE using &#39;Less&#39; operator | [optional]
 **address_code_less_or_equal** | **string**| Filter on ADR-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **address_code_greater** | **string**| Filter on ADR-CDE using &#39;Greater&#39; operator | [optional]
 **address_code_greater_or_equal** | **string**| Filter on ADR-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **address_code_is_null** | **string**| Filter on ADR-CDE using &#39;IsNull&#39; operator | [optional]
 **address_code_is_not_null** | **string**| Filter on ADR-CDE using &#39;IsNotNull&#39; operator | [optional]
 **address_code_like** | **string**| Filter on ADR-CDE using &#39;Like&#39; operator | [optional]
 **address_code_not_like** | **string**| Filter on ADR-CDE using &#39;NotLike&#39; operator | [optional]
 **address_code_contains** | **string**| Filter on ADR-CDE using &#39;Contains&#39; operator | [optional]
 **address_code_not_contains** | **string**| Filter on ADR-CDE using &#39;NotContains&#39; operator | [optional]
 **address_code_starts_with** | **string**| Filter on ADR-CDE using &#39;StartsWith&#39; operator | [optional]
 **address_code_not_starts_with** | **string**| Filter on ADR-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **address_code_ends_with** | **string**| Filter on ADR-CDE using &#39;EndsWith&#39; operator | [optional]
 **address_code_not_ends_with** | **string**| Filter on ADR-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **address_code_in** | **string**| Filter on ADR-CDE using &#39;In&#39; operator | [optional]
 **address_code_between** | **string**| Filter on ADR-CDE using &#39;Between&#39; operator | [optional]
 **default_currency_not_equal** | **string**| Filter on BIL-CUR using &#39;NotEqual&#39; operator | [optional]
 **default_currency_less** | **string**| Filter on BIL-CUR using &#39;Less&#39; operator | [optional]
 **default_currency_less_or_equal** | **string**| Filter on BIL-CUR using &#39;LessOrEqual&#39; operator | [optional]
 **default_currency_greater** | **string**| Filter on BIL-CUR using &#39;Greater&#39; operator | [optional]
 **default_currency_greater_or_equal** | **string**| Filter on BIL-CUR using &#39;GreaterOrEqual&#39; operator | [optional]
 **default_currency_is_null** | **string**| Filter on BIL-CUR using &#39;IsNull&#39; operator | [optional]
 **default_currency_is_not_null** | **string**| Filter on BIL-CUR using &#39;IsNotNull&#39; operator | [optional]
 **default_currency_like** | **string**| Filter on BIL-CUR using &#39;Like&#39; operator | [optional]
 **default_currency_not_like** | **string**| Filter on BIL-CUR using &#39;NotLike&#39; operator | [optional]
 **default_currency_contains** | **string**| Filter on BIL-CUR using &#39;Contains&#39; operator | [optional]
 **default_currency_not_contains** | **string**| Filter on BIL-CUR using &#39;NotContains&#39; operator | [optional]
 **default_currency_starts_with** | **string**| Filter on BIL-CUR using &#39;StartsWith&#39; operator | [optional]
 **default_currency_not_starts_with** | **string**| Filter on BIL-CUR using &#39;NotStartsWith&#39; operator | [optional]
 **default_currency_ends_with** | **string**| Filter on BIL-CUR using &#39;EndsWith&#39; operator | [optional]
 **default_currency_not_ends_with** | **string**| Filter on BIL-CUR using &#39;NotEndsWith&#39; operator | [optional]
 **default_currency_in** | **string**| Filter on BIL-CUR using &#39;In&#39; operator | [optional]
 **default_currency_between** | **string**| Filter on BIL-CUR using &#39;Between&#39; operator | [optional]
 **department_not_equal** | **string**| Filter on DPT-NME using &#39;NotEqual&#39; operator | [optional]
 **department_less** | **string**| Filter on DPT-NME using &#39;Less&#39; operator | [optional]
 **department_less_or_equal** | **string**| Filter on DPT-NME using &#39;LessOrEqual&#39; operator | [optional]
 **department_greater** | **string**| Filter on DPT-NME using &#39;Greater&#39; operator | [optional]
 **department_greater_or_equal** | **string**| Filter on DPT-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **department_is_null** | **string**| Filter on DPT-NME using &#39;IsNull&#39; operator | [optional]
 **department_is_not_null** | **string**| Filter on DPT-NME using &#39;IsNotNull&#39; operator | [optional]
 **department_like** | **string**| Filter on DPT-NME using &#39;Like&#39; operator | [optional]
 **department_not_like** | **string**| Filter on DPT-NME using &#39;NotLike&#39; operator | [optional]
 **department_contains** | **string**| Filter on DPT-NME using &#39;Contains&#39; operator | [optional]
 **department_not_contains** | **string**| Filter on DPT-NME using &#39;NotContains&#39; operator | [optional]
 **department_starts_with** | **string**| Filter on DPT-NME using &#39;StartsWith&#39; operator | [optional]
 **department_not_starts_with** | **string**| Filter on DPT-NME using &#39;NotStartsWith&#39; operator | [optional]
 **department_ends_with** | **string**| Filter on DPT-NME using &#39;EndsWith&#39; operator | [optional]
 **department_not_ends_with** | **string**| Filter on DPT-NME using &#39;NotEndsWith&#39; operator | [optional]
 **department_in** | **string**| Filter on DPT-NME using &#39;In&#39; operator | [optional]
 **department_between** | **string**| Filter on DPT-NME using &#39;Between&#39; operator | [optional]
 **county_not_equal** | **string**| Filter on CTM-CNTY using &#39;NotEqual&#39; operator | [optional]
 **county_less** | **string**| Filter on CTM-CNTY using &#39;Less&#39; operator | [optional]
 **county_less_or_equal** | **string**| Filter on CTM-CNTY using &#39;LessOrEqual&#39; operator | [optional]
 **county_greater** | **string**| Filter on CTM-CNTY using &#39;Greater&#39; operator | [optional]
 **county_greater_or_equal** | **string**| Filter on CTM-CNTY using &#39;GreaterOrEqual&#39; operator | [optional]
 **county_is_null** | **string**| Filter on CTM-CNTY using &#39;IsNull&#39; operator | [optional]
 **county_is_not_null** | **string**| Filter on CTM-CNTY using &#39;IsNotNull&#39; operator | [optional]
 **county_like** | **string**| Filter on CTM-CNTY using &#39;Like&#39; operator | [optional]
 **county_not_like** | **string**| Filter on CTM-CNTY using &#39;NotLike&#39; operator | [optional]
 **county_contains** | **string**| Filter on CTM-CNTY using &#39;Contains&#39; operator | [optional]
 **county_not_contains** | **string**| Filter on CTM-CNTY using &#39;NotContains&#39; operator | [optional]
 **county_starts_with** | **string**| Filter on CTM-CNTY using &#39;StartsWith&#39; operator | [optional]
 **county_not_starts_with** | **string**| Filter on CTM-CNTY using &#39;NotStartsWith&#39; operator | [optional]
 **county_ends_with** | **string**| Filter on CTM-CNTY using &#39;EndsWith&#39; operator | [optional]
 **county_not_ends_with** | **string**| Filter on CTM-CNTY using &#39;NotEndsWith&#39; operator | [optional]
 **county_in** | **string**| Filter on CTM-CNTY using &#39;In&#39; operator | [optional]
 **county_between** | **string**| Filter on CTM-CNTY using &#39;Between&#39; operator | [optional]
 **pin_code_not_equal** | **string**| Filter on PIN-CODE using &#39;NotEqual&#39; operator | [optional]
 **pin_code_less** | **string**| Filter on PIN-CODE using &#39;Less&#39; operator | [optional]
 **pin_code_less_or_equal** | **string**| Filter on PIN-CODE using &#39;LessOrEqual&#39; operator | [optional]
 **pin_code_greater** | **string**| Filter on PIN-CODE using &#39;Greater&#39; operator | [optional]
 **pin_code_greater_or_equal** | **string**| Filter on PIN-CODE using &#39;GreaterOrEqual&#39; operator | [optional]
 **pin_code_is_null** | **string**| Filter on PIN-CODE using &#39;IsNull&#39; operator | [optional]
 **pin_code_is_not_null** | **string**| Filter on PIN-CODE using &#39;IsNotNull&#39; operator | [optional]
 **pin_code_like** | **string**| Filter on PIN-CODE using &#39;Like&#39; operator | [optional]
 **pin_code_not_like** | **string**| Filter on PIN-CODE using &#39;NotLike&#39; operator | [optional]
 **pin_code_contains** | **string**| Filter on PIN-CODE using &#39;Contains&#39; operator | [optional]
 **pin_code_not_contains** | **string**| Filter on PIN-CODE using &#39;NotContains&#39; operator | [optional]
 **pin_code_starts_with** | **string**| Filter on PIN-CODE using &#39;StartsWith&#39; operator | [optional]
 **pin_code_not_starts_with** | **string**| Filter on PIN-CODE using &#39;NotStartsWith&#39; operator | [optional]
 **pin_code_ends_with** | **string**| Filter on PIN-CODE using &#39;EndsWith&#39; operator | [optional]
 **pin_code_not_ends_with** | **string**| Filter on PIN-CODE using &#39;NotEndsWith&#39; operator | [optional]
 **pin_code_in** | **string**| Filter on PIN-CODE using &#39;In&#39; operator | [optional]
 **pin_code_between** | **string**| Filter on PIN-CODE using &#39;Between&#39; operator | [optional]
 **social_security_number_not_equal** | **string**| Filter on SOC-SEC using &#39;NotEqual&#39; operator | [optional]
 **social_security_number_less** | **string**| Filter on SOC-SEC using &#39;Less&#39; operator | [optional]
 **social_security_number_less_or_equal** | **string**| Filter on SOC-SEC using &#39;LessOrEqual&#39; operator | [optional]
 **social_security_number_greater** | **string**| Filter on SOC-SEC using &#39;Greater&#39; operator | [optional]
 **social_security_number_greater_or_equal** | **string**| Filter on SOC-SEC using &#39;GreaterOrEqual&#39; operator | [optional]
 **social_security_number_is_null** | **string**| Filter on SOC-SEC using &#39;IsNull&#39; operator | [optional]
 **social_security_number_is_not_null** | **string**| Filter on SOC-SEC using &#39;IsNotNull&#39; operator | [optional]
 **social_security_number_like** | **string**| Filter on SOC-SEC using &#39;Like&#39; operator | [optional]
 **social_security_number_not_like** | **string**| Filter on SOC-SEC using &#39;NotLike&#39; operator | [optional]
 **social_security_number_contains** | **string**| Filter on SOC-SEC using &#39;Contains&#39; operator | [optional]
 **social_security_number_not_contains** | **string**| Filter on SOC-SEC using &#39;NotContains&#39; operator | [optional]
 **social_security_number_starts_with** | **string**| Filter on SOC-SEC using &#39;StartsWith&#39; operator | [optional]
 **social_security_number_not_starts_with** | **string**| Filter on SOC-SEC using &#39;NotStartsWith&#39; operator | [optional]
 **social_security_number_ends_with** | **string**| Filter on SOC-SEC using &#39;EndsWith&#39; operator | [optional]
 **social_security_number_not_ends_with** | **string**| Filter on SOC-SEC using &#39;NotEndsWith&#39; operator | [optional]
 **social_security_number_in** | **string**| Filter on SOC-SEC using &#39;In&#39; operator | [optional]
 **social_security_number_between** | **string**| Filter on SOC-SEC using &#39;Between&#39; operator | [optional]
 **street_name_not_equal** | **string**| Filter on FSTR-NME using &#39;NotEqual&#39; operator | [optional]
 **street_name_less** | **string**| Filter on FSTR-NME using &#39;Less&#39; operator | [optional]
 **street_name_less_or_equal** | **string**| Filter on FSTR-NME using &#39;LessOrEqual&#39; operator | [optional]
 **street_name_greater** | **string**| Filter on FSTR-NME using &#39;Greater&#39; operator | [optional]
 **street_name_greater_or_equal** | **string**| Filter on FSTR-NME using &#39;GreaterOrEqual&#39; operator | [optional]
 **street_name_is_null** | **string**| Filter on FSTR-NME using &#39;IsNull&#39; operator | [optional]
 **street_name_is_not_null** | **string**| Filter on FSTR-NME using &#39;IsNotNull&#39; operator | [optional]
 **street_name_like** | **string**| Filter on FSTR-NME using &#39;Like&#39; operator | [optional]
 **street_name_not_like** | **string**| Filter on FSTR-NME using &#39;NotLike&#39; operator | [optional]
 **street_name_contains** | **string**| Filter on FSTR-NME using &#39;Contains&#39; operator | [optional]
 **street_name_not_contains** | **string**| Filter on FSTR-NME using &#39;NotContains&#39; operator | [optional]
 **street_name_starts_with** | **string**| Filter on FSTR-NME using &#39;StartsWith&#39; operator | [optional]
 **street_name_not_starts_with** | **string**| Filter on FSTR-NME using &#39;NotStartsWith&#39; operator | [optional]
 **street_name_ends_with** | **string**| Filter on FSTR-NME using &#39;EndsWith&#39; operator | [optional]
 **street_name_not_ends_with** | **string**| Filter on FSTR-NME using &#39;NotEndsWith&#39; operator | [optional]
 **street_name_in** | **string**| Filter on FSTR-NME using &#39;In&#39; operator | [optional]
 **street_name_between** | **string**| Filter on FSTR-NME using &#39;Between&#39; operator | [optional]
 **street_type_not_equal** | **string**| Filter on STR-TYP using &#39;NotEqual&#39; operator | [optional]
 **street_type_less** | **string**| Filter on STR-TYP using &#39;Less&#39; operator | [optional]
 **street_type_less_or_equal** | **string**| Filter on STR-TYP using &#39;LessOrEqual&#39; operator | [optional]
 **street_type_greater** | **string**| Filter on STR-TYP using &#39;Greater&#39; operator | [optional]
 **street_type_greater_or_equal** | **string**| Filter on STR-TYP using &#39;GreaterOrEqual&#39; operator | [optional]
 **street_type_is_null** | **string**| Filter on STR-TYP using &#39;IsNull&#39; operator | [optional]
 **street_type_is_not_null** | **string**| Filter on STR-TYP using &#39;IsNotNull&#39; operator | [optional]
 **street_type_like** | **string**| Filter on STR-TYP using &#39;Like&#39; operator | [optional]
 **street_type_not_like** | **string**| Filter on STR-TYP using &#39;NotLike&#39; operator | [optional]
 **street_type_contains** | **string**| Filter on STR-TYP using &#39;Contains&#39; operator | [optional]
 **street_type_not_contains** | **string**| Filter on STR-TYP using &#39;NotContains&#39; operator | [optional]
 **street_type_starts_with** | **string**| Filter on STR-TYP using &#39;StartsWith&#39; operator | [optional]
 **street_type_not_starts_with** | **string**| Filter on STR-TYP using &#39;NotStartsWith&#39; operator | [optional]
 **street_type_ends_with** | **string**| Filter on STR-TYP using &#39;EndsWith&#39; operator | [optional]
 **street_type_not_ends_with** | **string**| Filter on STR-TYP using &#39;NotEndsWith&#39; operator | [optional]
 **street_type_in** | **string**| Filter on STR-TYP using &#39;In&#39; operator | [optional]
 **street_type_between** | **string**| Filter on STR-TYP using &#39;Between&#39; operator | [optional]
 **last_updated_on_not_equal** | **string**| Filter on UPD-DTE using &#39;NotEqual&#39; operator | [optional]
 **last_updated_on_less** | **string**| Filter on UPD-DTE using &#39;Less&#39; operator | [optional]
 **last_updated_on_less_or_equal** | **string**| Filter on UPD-DTE using &#39;LessOrEqual&#39; operator | [optional]
 **last_updated_on_greater** | **string**| Filter on UPD-DTE using &#39;Greater&#39; operator | [optional]
 **last_updated_on_greater_or_equal** | **string**| Filter on UPD-DTE using &#39;GreaterOrEqual&#39; operator | [optional]
 **last_updated_on_is_null** | **string**| Filter on UPD-DTE using &#39;IsNull&#39; operator | [optional]
 **last_updated_on_is_not_null** | **string**| Filter on UPD-DTE using &#39;IsNotNull&#39; operator | [optional]
 **last_updated_on_like** | **string**| Filter on UPD-DTE using &#39;Like&#39; operator | [optional]
 **last_updated_on_not_like** | **string**| Filter on UPD-DTE using &#39;NotLike&#39; operator | [optional]
 **last_updated_on_contains** | **string**| Filter on UPD-DTE using &#39;Contains&#39; operator | [optional]
 **last_updated_on_not_contains** | **string**| Filter on UPD-DTE using &#39;NotContains&#39; operator | [optional]
 **last_updated_on_starts_with** | **string**| Filter on UPD-DTE using &#39;StartsWith&#39; operator | [optional]
 **last_updated_on_not_starts_with** | **string**| Filter on UPD-DTE using &#39;NotStartsWith&#39; operator | [optional]
 **last_updated_on_ends_with** | **string**| Filter on UPD-DTE using &#39;EndsWith&#39; operator | [optional]
 **last_updated_on_not_ends_with** | **string**| Filter on UPD-DTE using &#39;NotEndsWith&#39; operator | [optional]
 **last_updated_on_in** | **string**| Filter on UPD-DTE using &#39;In&#39; operator | [optional]
 **last_updated_on_between** | **string**| Filter on UPD-DTE using &#39;Between&#39; operator | [optional]
 **item_number_not_equal** | **string**| Filter on ITM-NUM using &#39;NotEqual&#39; operator | [optional]
 **item_number_less** | **string**| Filter on ITM-NUM using &#39;Less&#39; operator | [optional]
 **item_number_less_or_equal** | **string**| Filter on ITM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **item_number_greater** | **string**| Filter on ITM-NUM using &#39;Greater&#39; operator | [optional]
 **item_number_greater_or_equal** | **string**| Filter on ITM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **item_number_is_null** | **string**| Filter on ITM-NUM using &#39;IsNull&#39; operator | [optional]
 **item_number_is_not_null** | **string**| Filter on ITM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **item_number_like** | **string**| Filter on ITM-NUM using &#39;Like&#39; operator | [optional]
 **item_number_not_like** | **string**| Filter on ITM-NUM using &#39;NotLike&#39; operator | [optional]
 **item_number_contains** | **string**| Filter on ITM-NUM using &#39;Contains&#39; operator | [optional]
 **item_number_not_contains** | **string**| Filter on ITM-NUM using &#39;NotContains&#39; operator | [optional]
 **item_number_starts_with** | **string**| Filter on ITM-NUM using &#39;StartsWith&#39; operator | [optional]
 **item_number_not_starts_with** | **string**| Filter on ITM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **item_number_ends_with** | **string**| Filter on ITM-NUM using &#39;EndsWith&#39; operator | [optional]
 **item_number_not_ends_with** | **string**| Filter on ITM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **item_number_in** | **string**| Filter on ITM-NUM using &#39;In&#39; operator | [optional]
 **item_number_between** | **string**| Filter on ITM-NUM using &#39;Between&#39; operator | [optional]
 **last_name_soundex_not_equal** | **string**| Filter on END-SNDX using &#39;NotEqual&#39; operator | [optional]
 **last_name_soundex_less** | **string**| Filter on END-SNDX using &#39;Less&#39; operator | [optional]
 **last_name_soundex_less_or_equal** | **string**| Filter on END-SNDX using &#39;LessOrEqual&#39; operator | [optional]
 **last_name_soundex_greater** | **string**| Filter on END-SNDX using &#39;Greater&#39; operator | [optional]
 **last_name_soundex_greater_or_equal** | **string**| Filter on END-SNDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **last_name_soundex_is_null** | **string**| Filter on END-SNDX using &#39;IsNull&#39; operator | [optional]
 **last_name_soundex_is_not_null** | **string**| Filter on END-SNDX using &#39;IsNotNull&#39; operator | [optional]
 **last_name_soundex_like** | **string**| Filter on END-SNDX using &#39;Like&#39; operator | [optional]
 **last_name_soundex_not_like** | **string**| Filter on END-SNDX using &#39;NotLike&#39; operator | [optional]
 **last_name_soundex_contains** | **string**| Filter on END-SNDX using &#39;Contains&#39; operator | [optional]
 **last_name_soundex_not_contains** | **string**| Filter on END-SNDX using &#39;NotContains&#39; operator | [optional]
 **last_name_soundex_starts_with** | **string**| Filter on END-SNDX using &#39;StartsWith&#39; operator | [optional]
 **last_name_soundex_not_starts_with** | **string**| Filter on END-SNDX using &#39;NotStartsWith&#39; operator | [optional]
 **last_name_soundex_ends_with** | **string**| Filter on END-SNDX using &#39;EndsWith&#39; operator | [optional]
 **last_name_soundex_not_ends_with** | **string**| Filter on END-SNDX using &#39;NotEndsWith&#39; operator | [optional]
 **last_name_soundex_in** | **string**| Filter on END-SNDX using &#39;In&#39; operator | [optional]
 **last_name_soundex_between** | **string**| Filter on END-SNDX using &#39;Between&#39; operator | [optional]
 **company_name_soundex_not_equal** | **string**| Filter on CMP-SNDX using &#39;NotEqual&#39; operator | [optional]
 **company_name_soundex_less** | **string**| Filter on CMP-SNDX using &#39;Less&#39; operator | [optional]
 **company_name_soundex_less_or_equal** | **string**| Filter on CMP-SNDX using &#39;LessOrEqual&#39; operator | [optional]
 **company_name_soundex_greater** | **string**| Filter on CMP-SNDX using &#39;Greater&#39; operator | [optional]
 **company_name_soundex_greater_or_equal** | **string**| Filter on CMP-SNDX using &#39;GreaterOrEqual&#39; operator | [optional]
 **company_name_soundex_is_null** | **string**| Filter on CMP-SNDX using &#39;IsNull&#39; operator | [optional]
 **company_name_soundex_is_not_null** | **string**| Filter on CMP-SNDX using &#39;IsNotNull&#39; operator | [optional]
 **company_name_soundex_like** | **string**| Filter on CMP-SNDX using &#39;Like&#39; operator | [optional]
 **company_name_soundex_not_like** | **string**| Filter on CMP-SNDX using &#39;NotLike&#39; operator | [optional]
 **company_name_soundex_contains** | **string**| Filter on CMP-SNDX using &#39;Contains&#39; operator | [optional]
 **company_name_soundex_not_contains** | **string**| Filter on CMP-SNDX using &#39;NotContains&#39; operator | [optional]
 **company_name_soundex_starts_with** | **string**| Filter on CMP-SNDX using &#39;StartsWith&#39; operator | [optional]
 **company_name_soundex_not_starts_with** | **string**| Filter on CMP-SNDX using &#39;NotStartsWith&#39; operator | [optional]
 **company_name_soundex_ends_with** | **string**| Filter on CMP-SNDX using &#39;EndsWith&#39; operator | [optional]
 **company_name_soundex_not_ends_with** | **string**| Filter on CMP-SNDX using &#39;NotEndsWith&#39; operator | [optional]
 **company_name_soundex_in** | **string**| Filter on CMP-SNDX using &#39;In&#39; operator | [optional]
 **company_name_soundex_between** | **string**| Filter on CMP-SNDX using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultCustomerAddress**](../Model/SearchResultCustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSearchAvailableCredits**
> \Swagger\Client\Model\UnappliedCredit[] customerSearchAvailableCredits($customer_number, $credit_reason_code, $billing_organization_code, $credit_reason_code_not_equal, $credit_reason_code_less, $credit_reason_code_less_or_equal, $credit_reason_code_greater, $credit_reason_code_greater_or_equal, $credit_reason_code_is_null, $credit_reason_code_is_not_null, $credit_reason_code_like, $credit_reason_code_not_like, $credit_reason_code_contains, $credit_reason_code_not_contains, $credit_reason_code_starts_with, $credit_reason_code_not_starts_with, $credit_reason_code_ends_with, $credit_reason_code_not_ends_with, $credit_reason_code_in, $credit_reason_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between)

Gets the unapplied credits available on the customers account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | An Advantage customer number.
$credit_reason_code = "credit_reason_code_example"; // string | Filter on CRD-RSN using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$credit_reason_code_not_equal = "credit_reason_code_not_equal_example"; // string | Filter on CRD-RSN using 'NotEqual' operator
$credit_reason_code_less = "credit_reason_code_less_example"; // string | Filter on CRD-RSN using 'Less' operator
$credit_reason_code_less_or_equal = "credit_reason_code_less_or_equal_example"; // string | Filter on CRD-RSN using 'LessOrEqual' operator
$credit_reason_code_greater = "credit_reason_code_greater_example"; // string | Filter on CRD-RSN using 'Greater' operator
$credit_reason_code_greater_or_equal = "credit_reason_code_greater_or_equal_example"; // string | Filter on CRD-RSN using 'GreaterOrEqual' operator
$credit_reason_code_is_null = "credit_reason_code_is_null_example"; // string | Filter on CRD-RSN using 'IsNull' operator
$credit_reason_code_is_not_null = "credit_reason_code_is_not_null_example"; // string | Filter on CRD-RSN using 'IsNotNull' operator
$credit_reason_code_like = "credit_reason_code_like_example"; // string | Filter on CRD-RSN using 'Like' operator
$credit_reason_code_not_like = "credit_reason_code_not_like_example"; // string | Filter on CRD-RSN using 'NotLike' operator
$credit_reason_code_contains = "credit_reason_code_contains_example"; // string | Filter on CRD-RSN using 'Contains' operator
$credit_reason_code_not_contains = "credit_reason_code_not_contains_example"; // string | Filter on CRD-RSN using 'NotContains' operator
$credit_reason_code_starts_with = "credit_reason_code_starts_with_example"; // string | Filter on CRD-RSN using 'StartsWith' operator
$credit_reason_code_not_starts_with = "credit_reason_code_not_starts_with_example"; // string | Filter on CRD-RSN using 'NotStartsWith' operator
$credit_reason_code_ends_with = "credit_reason_code_ends_with_example"; // string | Filter on CRD-RSN using 'EndsWith' operator
$credit_reason_code_not_ends_with = "credit_reason_code_not_ends_with_example"; // string | Filter on CRD-RSN using 'NotEndsWith' operator
$credit_reason_code_in = "credit_reason_code_in_example"; // string | Filter on CRD-RSN using 'In' operator
$credit_reason_code_between = "credit_reason_code_between_example"; // string | Filter on CRD-RSN using 'Between' operator
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
    $result = $apiInstance->customerSearchAvailableCredits($customer_number, $credit_reason_code, $billing_organization_code, $credit_reason_code_not_equal, $credit_reason_code_less, $credit_reason_code_less_or_equal, $credit_reason_code_greater, $credit_reason_code_greater_or_equal, $credit_reason_code_is_null, $credit_reason_code_is_not_null, $credit_reason_code_like, $credit_reason_code_not_like, $credit_reason_code_contains, $credit_reason_code_not_contains, $credit_reason_code_starts_with, $credit_reason_code_not_starts_with, $credit_reason_code_ends_with, $credit_reason_code_not_ends_with, $credit_reason_code_in, $credit_reason_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSearchAvailableCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| An Advantage customer number. |
 **credit_reason_code** | **string**| Filter on CRD-RSN using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **credit_reason_code_not_equal** | **string**| Filter on CRD-RSN using &#39;NotEqual&#39; operator | [optional]
 **credit_reason_code_less** | **string**| Filter on CRD-RSN using &#39;Less&#39; operator | [optional]
 **credit_reason_code_less_or_equal** | **string**| Filter on CRD-RSN using &#39;LessOrEqual&#39; operator | [optional]
 **credit_reason_code_greater** | **string**| Filter on CRD-RSN using &#39;Greater&#39; operator | [optional]
 **credit_reason_code_greater_or_equal** | **string**| Filter on CRD-RSN using &#39;GreaterOrEqual&#39; operator | [optional]
 **credit_reason_code_is_null** | **string**| Filter on CRD-RSN using &#39;IsNull&#39; operator | [optional]
 **credit_reason_code_is_not_null** | **string**| Filter on CRD-RSN using &#39;IsNotNull&#39; operator | [optional]
 **credit_reason_code_like** | **string**| Filter on CRD-RSN using &#39;Like&#39; operator | [optional]
 **credit_reason_code_not_like** | **string**| Filter on CRD-RSN using &#39;NotLike&#39; operator | [optional]
 **credit_reason_code_contains** | **string**| Filter on CRD-RSN using &#39;Contains&#39; operator | [optional]
 **credit_reason_code_not_contains** | **string**| Filter on CRD-RSN using &#39;NotContains&#39; operator | [optional]
 **credit_reason_code_starts_with** | **string**| Filter on CRD-RSN using &#39;StartsWith&#39; operator | [optional]
 **credit_reason_code_not_starts_with** | **string**| Filter on CRD-RSN using &#39;NotStartsWith&#39; operator | [optional]
 **credit_reason_code_ends_with** | **string**| Filter on CRD-RSN using &#39;EndsWith&#39; operator | [optional]
 **credit_reason_code_not_ends_with** | **string**| Filter on CRD-RSN using &#39;NotEndsWith&#39; operator | [optional]
 **credit_reason_code_in** | **string**| Filter on CRD-RSN using &#39;In&#39; operator | [optional]
 **credit_reason_code_between** | **string**| Filter on CRD-RSN using &#39;Between&#39; operator | [optional]
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

[**\Swagger\Client\Model\UnappliedCredit[]**](../Model/UnappliedCredit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSearchOrderedForProducts**
> \Swagger\Client\Model\SearchResultPurchaseHistoryItem customerSearchOrderedForProducts($customer_number, $pager_skip, $pager_take, $item_number, $product_format_code, $billing_organization_code, $order_date, $bill_to_customer, $ship_to_customer, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $product_format_code_not_equal, $product_format_code_less, $product_format_code_less_or_equal, $product_format_code_greater, $product_format_code_greater_or_equal, $product_format_code_is_null, $product_format_code_is_not_null, $product_format_code_like, $product_format_code_not_like, $product_format_code_contains, $product_format_code_not_contains, $product_format_code_starts_with, $product_format_code_not_starts_with, $product_format_code_ends_with, $product_format_code_not_ends_with, $product_format_code_in, $product_format_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between, $order_date_not_equal, $order_date_less, $order_date_less_or_equal, $order_date_greater, $order_date_greater_or_equal, $order_date_is_null, $order_date_is_not_null, $order_date_like, $order_date_not_like, $order_date_contains, $order_date_not_contains, $order_date_starts_with, $order_date_not_starts_with, $order_date_ends_with, $order_date_not_ends_with, $order_date_in, $order_date_between, $bill_to_customer_not_equal, $bill_to_customer_less, $bill_to_customer_less_or_equal, $bill_to_customer_greater, $bill_to_customer_greater_or_equal, $bill_to_customer_is_null, $bill_to_customer_is_not_null, $bill_to_customer_like, $bill_to_customer_not_like, $bill_to_customer_contains, $bill_to_customer_not_contains, $bill_to_customer_starts_with, $bill_to_customer_not_starts_with, $bill_to_customer_ends_with, $bill_to_customer_not_ends_with, $bill_to_customer_in, $bill_to_customer_between, $ship_to_customer_not_equal, $ship_to_customer_less, $ship_to_customer_less_or_equal, $ship_to_customer_greater, $ship_to_customer_greater_or_equal, $ship_to_customer_is_null, $ship_to_customer_is_not_null, $ship_to_customer_like, $ship_to_customer_not_like, $ship_to_customer_contains, $ship_to_customer_not_contains, $ship_to_customer_starts_with, $ship_to_customer_not_starts_with, $ship_to_customer_ends_with, $ship_to_customer_not_ends_with, $ship_to_customer_in, $ship_to_customer_between)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | 
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$item_number = "item_number_example"; // string | Filter on ITM-NUM using 'Equal' operator
$product_format_code = "product_format_code_example"; // string | Filter on FOR-MAT using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$order_date = "order_date_example"; // string | Filter on ORDR-DTE using 'Equal' operator
$bill_to_customer = "bill_to_customer_example"; // string | Filter on CTM-NBR using 'Equal' operator
$ship_to_customer = "ship_to_customer_example"; // string | Filter on SHP-CTM using 'Equal' operator
$item_number_not_equal = "item_number_not_equal_example"; // string | Filter on ITM-NUM using 'NotEqual' operator
$item_number_less = "item_number_less_example"; // string | Filter on ITM-NUM using 'Less' operator
$item_number_less_or_equal = "item_number_less_or_equal_example"; // string | Filter on ITM-NUM using 'LessOrEqual' operator
$item_number_greater = "item_number_greater_example"; // string | Filter on ITM-NUM using 'Greater' operator
$item_number_greater_or_equal = "item_number_greater_or_equal_example"; // string | Filter on ITM-NUM using 'GreaterOrEqual' operator
$item_number_is_null = "item_number_is_null_example"; // string | Filter on ITM-NUM using 'IsNull' operator
$item_number_is_not_null = "item_number_is_not_null_example"; // string | Filter on ITM-NUM using 'IsNotNull' operator
$item_number_like = "item_number_like_example"; // string | Filter on ITM-NUM using 'Like' operator
$item_number_not_like = "item_number_not_like_example"; // string | Filter on ITM-NUM using 'NotLike' operator
$item_number_contains = "item_number_contains_example"; // string | Filter on ITM-NUM using 'Contains' operator
$item_number_not_contains = "item_number_not_contains_example"; // string | Filter on ITM-NUM using 'NotContains' operator
$item_number_starts_with = "item_number_starts_with_example"; // string | Filter on ITM-NUM using 'StartsWith' operator
$item_number_not_starts_with = "item_number_not_starts_with_example"; // string | Filter on ITM-NUM using 'NotStartsWith' operator
$item_number_ends_with = "item_number_ends_with_example"; // string | Filter on ITM-NUM using 'EndsWith' operator
$item_number_not_ends_with = "item_number_not_ends_with_example"; // string | Filter on ITM-NUM using 'NotEndsWith' operator
$item_number_in = "item_number_in_example"; // string | Filter on ITM-NUM using 'In' operator
$item_number_between = "item_number_between_example"; // string | Filter on ITM-NUM using 'Between' operator
$product_format_code_not_equal = "product_format_code_not_equal_example"; // string | Filter on FOR-MAT using 'NotEqual' operator
$product_format_code_less = "product_format_code_less_example"; // string | Filter on FOR-MAT using 'Less' operator
$product_format_code_less_or_equal = "product_format_code_less_or_equal_example"; // string | Filter on FOR-MAT using 'LessOrEqual' operator
$product_format_code_greater = "product_format_code_greater_example"; // string | Filter on FOR-MAT using 'Greater' operator
$product_format_code_greater_or_equal = "product_format_code_greater_or_equal_example"; // string | Filter on FOR-MAT using 'GreaterOrEqual' operator
$product_format_code_is_null = "product_format_code_is_null_example"; // string | Filter on FOR-MAT using 'IsNull' operator
$product_format_code_is_not_null = "product_format_code_is_not_null_example"; // string | Filter on FOR-MAT using 'IsNotNull' operator
$product_format_code_like = "product_format_code_like_example"; // string | Filter on FOR-MAT using 'Like' operator
$product_format_code_not_like = "product_format_code_not_like_example"; // string | Filter on FOR-MAT using 'NotLike' operator
$product_format_code_contains = "product_format_code_contains_example"; // string | Filter on FOR-MAT using 'Contains' operator
$product_format_code_not_contains = "product_format_code_not_contains_example"; // string | Filter on FOR-MAT using 'NotContains' operator
$product_format_code_starts_with = "product_format_code_starts_with_example"; // string | Filter on FOR-MAT using 'StartsWith' operator
$product_format_code_not_starts_with = "product_format_code_not_starts_with_example"; // string | Filter on FOR-MAT using 'NotStartsWith' operator
$product_format_code_ends_with = "product_format_code_ends_with_example"; // string | Filter on FOR-MAT using 'EndsWith' operator
$product_format_code_not_ends_with = "product_format_code_not_ends_with_example"; // string | Filter on FOR-MAT using 'NotEndsWith' operator
$product_format_code_in = "product_format_code_in_example"; // string | Filter on FOR-MAT using 'In' operator
$product_format_code_between = "product_format_code_between_example"; // string | Filter on FOR-MAT using 'Between' operator
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
$order_date_not_equal = "order_date_not_equal_example"; // string | Filter on ORDR-DTE using 'NotEqual' operator
$order_date_less = "order_date_less_example"; // string | Filter on ORDR-DTE using 'Less' operator
$order_date_less_or_equal = "order_date_less_or_equal_example"; // string | Filter on ORDR-DTE using 'LessOrEqual' operator
$order_date_greater = "order_date_greater_example"; // string | Filter on ORDR-DTE using 'Greater' operator
$order_date_greater_or_equal = "order_date_greater_or_equal_example"; // string | Filter on ORDR-DTE using 'GreaterOrEqual' operator
$order_date_is_null = "order_date_is_null_example"; // string | Filter on ORDR-DTE using 'IsNull' operator
$order_date_is_not_null = "order_date_is_not_null_example"; // string | Filter on ORDR-DTE using 'IsNotNull' operator
$order_date_like = "order_date_like_example"; // string | Filter on ORDR-DTE using 'Like' operator
$order_date_not_like = "order_date_not_like_example"; // string | Filter on ORDR-DTE using 'NotLike' operator
$order_date_contains = "order_date_contains_example"; // string | Filter on ORDR-DTE using 'Contains' operator
$order_date_not_contains = "order_date_not_contains_example"; // string | Filter on ORDR-DTE using 'NotContains' operator
$order_date_starts_with = "order_date_starts_with_example"; // string | Filter on ORDR-DTE using 'StartsWith' operator
$order_date_not_starts_with = "order_date_not_starts_with_example"; // string | Filter on ORDR-DTE using 'NotStartsWith' operator
$order_date_ends_with = "order_date_ends_with_example"; // string | Filter on ORDR-DTE using 'EndsWith' operator
$order_date_not_ends_with = "order_date_not_ends_with_example"; // string | Filter on ORDR-DTE using 'NotEndsWith' operator
$order_date_in = "order_date_in_example"; // string | Filter on ORDR-DTE using 'In' operator
$order_date_between = "order_date_between_example"; // string | Filter on ORDR-DTE using 'Between' operator
$bill_to_customer_not_equal = "bill_to_customer_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$bill_to_customer_less = "bill_to_customer_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$bill_to_customer_less_or_equal = "bill_to_customer_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$bill_to_customer_greater = "bill_to_customer_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$bill_to_customer_greater_or_equal = "bill_to_customer_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$bill_to_customer_is_null = "bill_to_customer_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$bill_to_customer_is_not_null = "bill_to_customer_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$bill_to_customer_like = "bill_to_customer_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$bill_to_customer_not_like = "bill_to_customer_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$bill_to_customer_contains = "bill_to_customer_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$bill_to_customer_not_contains = "bill_to_customer_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$bill_to_customer_starts_with = "bill_to_customer_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$bill_to_customer_not_starts_with = "bill_to_customer_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$bill_to_customer_ends_with = "bill_to_customer_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$bill_to_customer_not_ends_with = "bill_to_customer_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$bill_to_customer_in = "bill_to_customer_in_example"; // string | Filter on CTM-NBR using 'In' operator
$bill_to_customer_between = "bill_to_customer_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$ship_to_customer_not_equal = "ship_to_customer_not_equal_example"; // string | Filter on SHP-CTM using 'NotEqual' operator
$ship_to_customer_less = "ship_to_customer_less_example"; // string | Filter on SHP-CTM using 'Less' operator
$ship_to_customer_less_or_equal = "ship_to_customer_less_or_equal_example"; // string | Filter on SHP-CTM using 'LessOrEqual' operator
$ship_to_customer_greater = "ship_to_customer_greater_example"; // string | Filter on SHP-CTM using 'Greater' operator
$ship_to_customer_greater_or_equal = "ship_to_customer_greater_or_equal_example"; // string | Filter on SHP-CTM using 'GreaterOrEqual' operator
$ship_to_customer_is_null = "ship_to_customer_is_null_example"; // string | Filter on SHP-CTM using 'IsNull' operator
$ship_to_customer_is_not_null = "ship_to_customer_is_not_null_example"; // string | Filter on SHP-CTM using 'IsNotNull' operator
$ship_to_customer_like = "ship_to_customer_like_example"; // string | Filter on SHP-CTM using 'Like' operator
$ship_to_customer_not_like = "ship_to_customer_not_like_example"; // string | Filter on SHP-CTM using 'NotLike' operator
$ship_to_customer_contains = "ship_to_customer_contains_example"; // string | Filter on SHP-CTM using 'Contains' operator
$ship_to_customer_not_contains = "ship_to_customer_not_contains_example"; // string | Filter on SHP-CTM using 'NotContains' operator
$ship_to_customer_starts_with = "ship_to_customer_starts_with_example"; // string | Filter on SHP-CTM using 'StartsWith' operator
$ship_to_customer_not_starts_with = "ship_to_customer_not_starts_with_example"; // string | Filter on SHP-CTM using 'NotStartsWith' operator
$ship_to_customer_ends_with = "ship_to_customer_ends_with_example"; // string | Filter on SHP-CTM using 'EndsWith' operator
$ship_to_customer_not_ends_with = "ship_to_customer_not_ends_with_example"; // string | Filter on SHP-CTM using 'NotEndsWith' operator
$ship_to_customer_in = "ship_to_customer_in_example"; // string | Filter on SHP-CTM using 'In' operator
$ship_to_customer_between = "ship_to_customer_between_example"; // string | Filter on SHP-CTM using 'Between' operator

try {
    $result = $apiInstance->customerSearchOrderedForProducts($customer_number, $pager_skip, $pager_take, $item_number, $product_format_code, $billing_organization_code, $order_date, $bill_to_customer, $ship_to_customer, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $product_format_code_not_equal, $product_format_code_less, $product_format_code_less_or_equal, $product_format_code_greater, $product_format_code_greater_or_equal, $product_format_code_is_null, $product_format_code_is_not_null, $product_format_code_like, $product_format_code_not_like, $product_format_code_contains, $product_format_code_not_contains, $product_format_code_starts_with, $product_format_code_not_starts_with, $product_format_code_ends_with, $product_format_code_not_ends_with, $product_format_code_in, $product_format_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between, $order_date_not_equal, $order_date_less, $order_date_less_or_equal, $order_date_greater, $order_date_greater_or_equal, $order_date_is_null, $order_date_is_not_null, $order_date_like, $order_date_not_like, $order_date_contains, $order_date_not_contains, $order_date_starts_with, $order_date_not_starts_with, $order_date_ends_with, $order_date_not_ends_with, $order_date_in, $order_date_between, $bill_to_customer_not_equal, $bill_to_customer_less, $bill_to_customer_less_or_equal, $bill_to_customer_greater, $bill_to_customer_greater_or_equal, $bill_to_customer_is_null, $bill_to_customer_is_not_null, $bill_to_customer_like, $bill_to_customer_not_like, $bill_to_customer_contains, $bill_to_customer_not_contains, $bill_to_customer_starts_with, $bill_to_customer_not_starts_with, $bill_to_customer_ends_with, $bill_to_customer_not_ends_with, $bill_to_customer_in, $bill_to_customer_between, $ship_to_customer_not_equal, $ship_to_customer_less, $ship_to_customer_less_or_equal, $ship_to_customer_greater, $ship_to_customer_greater_or_equal, $ship_to_customer_is_null, $ship_to_customer_is_not_null, $ship_to_customer_like, $ship_to_customer_not_like, $ship_to_customer_contains, $ship_to_customer_not_contains, $ship_to_customer_starts_with, $ship_to_customer_not_starts_with, $ship_to_customer_ends_with, $ship_to_customer_not_ends_with, $ship_to_customer_in, $ship_to_customer_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSearchOrderedForProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**|  |
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **item_number** | **string**| Filter on ITM-NUM using &#39;Equal&#39; operator | [optional]
 **product_format_code** | **string**| Filter on FOR-MAT using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **order_date** | **string**| Filter on ORDR-DTE using &#39;Equal&#39; operator | [optional]
 **bill_to_customer** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **ship_to_customer** | **string**| Filter on SHP-CTM using &#39;Equal&#39; operator | [optional]
 **item_number_not_equal** | **string**| Filter on ITM-NUM using &#39;NotEqual&#39; operator | [optional]
 **item_number_less** | **string**| Filter on ITM-NUM using &#39;Less&#39; operator | [optional]
 **item_number_less_or_equal** | **string**| Filter on ITM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **item_number_greater** | **string**| Filter on ITM-NUM using &#39;Greater&#39; operator | [optional]
 **item_number_greater_or_equal** | **string**| Filter on ITM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **item_number_is_null** | **string**| Filter on ITM-NUM using &#39;IsNull&#39; operator | [optional]
 **item_number_is_not_null** | **string**| Filter on ITM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **item_number_like** | **string**| Filter on ITM-NUM using &#39;Like&#39; operator | [optional]
 **item_number_not_like** | **string**| Filter on ITM-NUM using &#39;NotLike&#39; operator | [optional]
 **item_number_contains** | **string**| Filter on ITM-NUM using &#39;Contains&#39; operator | [optional]
 **item_number_not_contains** | **string**| Filter on ITM-NUM using &#39;NotContains&#39; operator | [optional]
 **item_number_starts_with** | **string**| Filter on ITM-NUM using &#39;StartsWith&#39; operator | [optional]
 **item_number_not_starts_with** | **string**| Filter on ITM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **item_number_ends_with** | **string**| Filter on ITM-NUM using &#39;EndsWith&#39; operator | [optional]
 **item_number_not_ends_with** | **string**| Filter on ITM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **item_number_in** | **string**| Filter on ITM-NUM using &#39;In&#39; operator | [optional]
 **item_number_between** | **string**| Filter on ITM-NUM using &#39;Between&#39; operator | [optional]
 **product_format_code_not_equal** | **string**| Filter on FOR-MAT using &#39;NotEqual&#39; operator | [optional]
 **product_format_code_less** | **string**| Filter on FOR-MAT using &#39;Less&#39; operator | [optional]
 **product_format_code_less_or_equal** | **string**| Filter on FOR-MAT using &#39;LessOrEqual&#39; operator | [optional]
 **product_format_code_greater** | **string**| Filter on FOR-MAT using &#39;Greater&#39; operator | [optional]
 **product_format_code_greater_or_equal** | **string**| Filter on FOR-MAT using &#39;GreaterOrEqual&#39; operator | [optional]
 **product_format_code_is_null** | **string**| Filter on FOR-MAT using &#39;IsNull&#39; operator | [optional]
 **product_format_code_is_not_null** | **string**| Filter on FOR-MAT using &#39;IsNotNull&#39; operator | [optional]
 **product_format_code_like** | **string**| Filter on FOR-MAT using &#39;Like&#39; operator | [optional]
 **product_format_code_not_like** | **string**| Filter on FOR-MAT using &#39;NotLike&#39; operator | [optional]
 **product_format_code_contains** | **string**| Filter on FOR-MAT using &#39;Contains&#39; operator | [optional]
 **product_format_code_not_contains** | **string**| Filter on FOR-MAT using &#39;NotContains&#39; operator | [optional]
 **product_format_code_starts_with** | **string**| Filter on FOR-MAT using &#39;StartsWith&#39; operator | [optional]
 **product_format_code_not_starts_with** | **string**| Filter on FOR-MAT using &#39;NotStartsWith&#39; operator | [optional]
 **product_format_code_ends_with** | **string**| Filter on FOR-MAT using &#39;EndsWith&#39; operator | [optional]
 **product_format_code_not_ends_with** | **string**| Filter on FOR-MAT using &#39;NotEndsWith&#39; operator | [optional]
 **product_format_code_in** | **string**| Filter on FOR-MAT using &#39;In&#39; operator | [optional]
 **product_format_code_between** | **string**| Filter on FOR-MAT using &#39;Between&#39; operator | [optional]
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
 **order_date_not_equal** | **string**| Filter on ORDR-DTE using &#39;NotEqual&#39; operator | [optional]
 **order_date_less** | **string**| Filter on ORDR-DTE using &#39;Less&#39; operator | [optional]
 **order_date_less_or_equal** | **string**| Filter on ORDR-DTE using &#39;LessOrEqual&#39; operator | [optional]
 **order_date_greater** | **string**| Filter on ORDR-DTE using &#39;Greater&#39; operator | [optional]
 **order_date_greater_or_equal** | **string**| Filter on ORDR-DTE using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_date_is_null** | **string**| Filter on ORDR-DTE using &#39;IsNull&#39; operator | [optional]
 **order_date_is_not_null** | **string**| Filter on ORDR-DTE using &#39;IsNotNull&#39; operator | [optional]
 **order_date_like** | **string**| Filter on ORDR-DTE using &#39;Like&#39; operator | [optional]
 **order_date_not_like** | **string**| Filter on ORDR-DTE using &#39;NotLike&#39; operator | [optional]
 **order_date_contains** | **string**| Filter on ORDR-DTE using &#39;Contains&#39; operator | [optional]
 **order_date_not_contains** | **string**| Filter on ORDR-DTE using &#39;NotContains&#39; operator | [optional]
 **order_date_starts_with** | **string**| Filter on ORDR-DTE using &#39;StartsWith&#39; operator | [optional]
 **order_date_not_starts_with** | **string**| Filter on ORDR-DTE using &#39;NotStartsWith&#39; operator | [optional]
 **order_date_ends_with** | **string**| Filter on ORDR-DTE using &#39;EndsWith&#39; operator | [optional]
 **order_date_not_ends_with** | **string**| Filter on ORDR-DTE using &#39;NotEndsWith&#39; operator | [optional]
 **order_date_in** | **string**| Filter on ORDR-DTE using &#39;In&#39; operator | [optional]
 **order_date_between** | **string**| Filter on ORDR-DTE using &#39;Between&#39; operator | [optional]
 **bill_to_customer_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **bill_to_customer_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **bill_to_customer_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **bill_to_customer_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **bill_to_customer_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **bill_to_customer_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **bill_to_customer_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **bill_to_customer_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **bill_to_customer_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **bill_to_customer_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **bill_to_customer_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **bill_to_customer_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **bill_to_customer_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **bill_to_customer_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **bill_to_customer_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **bill_to_customer_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **bill_to_customer_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **ship_to_customer_not_equal** | **string**| Filter on SHP-CTM using &#39;NotEqual&#39; operator | [optional]
 **ship_to_customer_less** | **string**| Filter on SHP-CTM using &#39;Less&#39; operator | [optional]
 **ship_to_customer_less_or_equal** | **string**| Filter on SHP-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **ship_to_customer_greater** | **string**| Filter on SHP-CTM using &#39;Greater&#39; operator | [optional]
 **ship_to_customer_greater_or_equal** | **string**| Filter on SHP-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **ship_to_customer_is_null** | **string**| Filter on SHP-CTM using &#39;IsNull&#39; operator | [optional]
 **ship_to_customer_is_not_null** | **string**| Filter on SHP-CTM using &#39;IsNotNull&#39; operator | [optional]
 **ship_to_customer_like** | **string**| Filter on SHP-CTM using &#39;Like&#39; operator | [optional]
 **ship_to_customer_not_like** | **string**| Filter on SHP-CTM using &#39;NotLike&#39; operator | [optional]
 **ship_to_customer_contains** | **string**| Filter on SHP-CTM using &#39;Contains&#39; operator | [optional]
 **ship_to_customer_not_contains** | **string**| Filter on SHP-CTM using &#39;NotContains&#39; operator | [optional]
 **ship_to_customer_starts_with** | **string**| Filter on SHP-CTM using &#39;StartsWith&#39; operator | [optional]
 **ship_to_customer_not_starts_with** | **string**| Filter on SHP-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **ship_to_customer_ends_with** | **string**| Filter on SHP-CTM using &#39;EndsWith&#39; operator | [optional]
 **ship_to_customer_not_ends_with** | **string**| Filter on SHP-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **ship_to_customer_in** | **string**| Filter on SHP-CTM using &#39;In&#39; operator | [optional]
 **ship_to_customer_between** | **string**| Filter on SHP-CTM using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultPurchaseHistoryItem**](../Model/SearchResultPurchaseHistoryItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSearchOrderedProducts**
> \Swagger\Client\Model\SearchResultPurchaseHistoryItem customerSearchOrderedProducts($customer_number, $pager_skip, $pager_take, $item_number, $product_format_code, $billing_organization_code, $order_date, $bill_to_customer, $ship_to_customer, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $product_format_code_not_equal, $product_format_code_less, $product_format_code_less_or_equal, $product_format_code_greater, $product_format_code_greater_or_equal, $product_format_code_is_null, $product_format_code_is_not_null, $product_format_code_like, $product_format_code_not_like, $product_format_code_contains, $product_format_code_not_contains, $product_format_code_starts_with, $product_format_code_not_starts_with, $product_format_code_ends_with, $product_format_code_not_ends_with, $product_format_code_in, $product_format_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between, $order_date_not_equal, $order_date_less, $order_date_less_or_equal, $order_date_greater, $order_date_greater_or_equal, $order_date_is_null, $order_date_is_not_null, $order_date_like, $order_date_not_like, $order_date_contains, $order_date_not_contains, $order_date_starts_with, $order_date_not_starts_with, $order_date_ends_with, $order_date_not_ends_with, $order_date_in, $order_date_between, $bill_to_customer_not_equal, $bill_to_customer_less, $bill_to_customer_less_or_equal, $bill_to_customer_greater, $bill_to_customer_greater_or_equal, $bill_to_customer_is_null, $bill_to_customer_is_not_null, $bill_to_customer_like, $bill_to_customer_not_like, $bill_to_customer_contains, $bill_to_customer_not_contains, $bill_to_customer_starts_with, $bill_to_customer_not_starts_with, $bill_to_customer_ends_with, $bill_to_customer_not_ends_with, $bill_to_customer_in, $bill_to_customer_between, $ship_to_customer_not_equal, $ship_to_customer_less, $ship_to_customer_less_or_equal, $ship_to_customer_greater, $ship_to_customer_greater_or_equal, $ship_to_customer_is_null, $ship_to_customer_is_not_null, $ship_to_customer_like, $ship_to_customer_not_like, $ship_to_customer_contains, $ship_to_customer_not_contains, $ship_to_customer_starts_with, $ship_to_customer_not_starts_with, $ship_to_customer_ends_with, $ship_to_customer_not_ends_with, $ship_to_customer_in, $ship_to_customer_between)

Get a list of items purchased by this customer. Filtered by new, renewal and complimentary items.  This is a preliminary API, subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number.
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$item_number = "item_number_example"; // string | Filter on ITM-NUM using 'Equal' operator
$product_format_code = "product_format_code_example"; // string | Filter on FOR-MAT using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$order_date = "order_date_example"; // string | Filter on ORDR-DTE using 'Equal' operator
$bill_to_customer = "bill_to_customer_example"; // string | Filter on CTM-NBR using 'Equal' operator
$ship_to_customer = "ship_to_customer_example"; // string | Filter on SHP-CTM using 'Equal' operator
$item_number_not_equal = "item_number_not_equal_example"; // string | Filter on ITM-NUM using 'NotEqual' operator
$item_number_less = "item_number_less_example"; // string | Filter on ITM-NUM using 'Less' operator
$item_number_less_or_equal = "item_number_less_or_equal_example"; // string | Filter on ITM-NUM using 'LessOrEqual' operator
$item_number_greater = "item_number_greater_example"; // string | Filter on ITM-NUM using 'Greater' operator
$item_number_greater_or_equal = "item_number_greater_or_equal_example"; // string | Filter on ITM-NUM using 'GreaterOrEqual' operator
$item_number_is_null = "item_number_is_null_example"; // string | Filter on ITM-NUM using 'IsNull' operator
$item_number_is_not_null = "item_number_is_not_null_example"; // string | Filter on ITM-NUM using 'IsNotNull' operator
$item_number_like = "item_number_like_example"; // string | Filter on ITM-NUM using 'Like' operator
$item_number_not_like = "item_number_not_like_example"; // string | Filter on ITM-NUM using 'NotLike' operator
$item_number_contains = "item_number_contains_example"; // string | Filter on ITM-NUM using 'Contains' operator
$item_number_not_contains = "item_number_not_contains_example"; // string | Filter on ITM-NUM using 'NotContains' operator
$item_number_starts_with = "item_number_starts_with_example"; // string | Filter on ITM-NUM using 'StartsWith' operator
$item_number_not_starts_with = "item_number_not_starts_with_example"; // string | Filter on ITM-NUM using 'NotStartsWith' operator
$item_number_ends_with = "item_number_ends_with_example"; // string | Filter on ITM-NUM using 'EndsWith' operator
$item_number_not_ends_with = "item_number_not_ends_with_example"; // string | Filter on ITM-NUM using 'NotEndsWith' operator
$item_number_in = "item_number_in_example"; // string | Filter on ITM-NUM using 'In' operator
$item_number_between = "item_number_between_example"; // string | Filter on ITM-NUM using 'Between' operator
$product_format_code_not_equal = "product_format_code_not_equal_example"; // string | Filter on FOR-MAT using 'NotEqual' operator
$product_format_code_less = "product_format_code_less_example"; // string | Filter on FOR-MAT using 'Less' operator
$product_format_code_less_or_equal = "product_format_code_less_or_equal_example"; // string | Filter on FOR-MAT using 'LessOrEqual' operator
$product_format_code_greater = "product_format_code_greater_example"; // string | Filter on FOR-MAT using 'Greater' operator
$product_format_code_greater_or_equal = "product_format_code_greater_or_equal_example"; // string | Filter on FOR-MAT using 'GreaterOrEqual' operator
$product_format_code_is_null = "product_format_code_is_null_example"; // string | Filter on FOR-MAT using 'IsNull' operator
$product_format_code_is_not_null = "product_format_code_is_not_null_example"; // string | Filter on FOR-MAT using 'IsNotNull' operator
$product_format_code_like = "product_format_code_like_example"; // string | Filter on FOR-MAT using 'Like' operator
$product_format_code_not_like = "product_format_code_not_like_example"; // string | Filter on FOR-MAT using 'NotLike' operator
$product_format_code_contains = "product_format_code_contains_example"; // string | Filter on FOR-MAT using 'Contains' operator
$product_format_code_not_contains = "product_format_code_not_contains_example"; // string | Filter on FOR-MAT using 'NotContains' operator
$product_format_code_starts_with = "product_format_code_starts_with_example"; // string | Filter on FOR-MAT using 'StartsWith' operator
$product_format_code_not_starts_with = "product_format_code_not_starts_with_example"; // string | Filter on FOR-MAT using 'NotStartsWith' operator
$product_format_code_ends_with = "product_format_code_ends_with_example"; // string | Filter on FOR-MAT using 'EndsWith' operator
$product_format_code_not_ends_with = "product_format_code_not_ends_with_example"; // string | Filter on FOR-MAT using 'NotEndsWith' operator
$product_format_code_in = "product_format_code_in_example"; // string | Filter on FOR-MAT using 'In' operator
$product_format_code_between = "product_format_code_between_example"; // string | Filter on FOR-MAT using 'Between' operator
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
$order_date_not_equal = "order_date_not_equal_example"; // string | Filter on ORDR-DTE using 'NotEqual' operator
$order_date_less = "order_date_less_example"; // string | Filter on ORDR-DTE using 'Less' operator
$order_date_less_or_equal = "order_date_less_or_equal_example"; // string | Filter on ORDR-DTE using 'LessOrEqual' operator
$order_date_greater = "order_date_greater_example"; // string | Filter on ORDR-DTE using 'Greater' operator
$order_date_greater_or_equal = "order_date_greater_or_equal_example"; // string | Filter on ORDR-DTE using 'GreaterOrEqual' operator
$order_date_is_null = "order_date_is_null_example"; // string | Filter on ORDR-DTE using 'IsNull' operator
$order_date_is_not_null = "order_date_is_not_null_example"; // string | Filter on ORDR-DTE using 'IsNotNull' operator
$order_date_like = "order_date_like_example"; // string | Filter on ORDR-DTE using 'Like' operator
$order_date_not_like = "order_date_not_like_example"; // string | Filter on ORDR-DTE using 'NotLike' operator
$order_date_contains = "order_date_contains_example"; // string | Filter on ORDR-DTE using 'Contains' operator
$order_date_not_contains = "order_date_not_contains_example"; // string | Filter on ORDR-DTE using 'NotContains' operator
$order_date_starts_with = "order_date_starts_with_example"; // string | Filter on ORDR-DTE using 'StartsWith' operator
$order_date_not_starts_with = "order_date_not_starts_with_example"; // string | Filter on ORDR-DTE using 'NotStartsWith' operator
$order_date_ends_with = "order_date_ends_with_example"; // string | Filter on ORDR-DTE using 'EndsWith' operator
$order_date_not_ends_with = "order_date_not_ends_with_example"; // string | Filter on ORDR-DTE using 'NotEndsWith' operator
$order_date_in = "order_date_in_example"; // string | Filter on ORDR-DTE using 'In' operator
$order_date_between = "order_date_between_example"; // string | Filter on ORDR-DTE using 'Between' operator
$bill_to_customer_not_equal = "bill_to_customer_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$bill_to_customer_less = "bill_to_customer_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$bill_to_customer_less_or_equal = "bill_to_customer_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$bill_to_customer_greater = "bill_to_customer_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$bill_to_customer_greater_or_equal = "bill_to_customer_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$bill_to_customer_is_null = "bill_to_customer_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$bill_to_customer_is_not_null = "bill_to_customer_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$bill_to_customer_like = "bill_to_customer_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$bill_to_customer_not_like = "bill_to_customer_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$bill_to_customer_contains = "bill_to_customer_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$bill_to_customer_not_contains = "bill_to_customer_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$bill_to_customer_starts_with = "bill_to_customer_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$bill_to_customer_not_starts_with = "bill_to_customer_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$bill_to_customer_ends_with = "bill_to_customer_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$bill_to_customer_not_ends_with = "bill_to_customer_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$bill_to_customer_in = "bill_to_customer_in_example"; // string | Filter on CTM-NBR using 'In' operator
$bill_to_customer_between = "bill_to_customer_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$ship_to_customer_not_equal = "ship_to_customer_not_equal_example"; // string | Filter on SHP-CTM using 'NotEqual' operator
$ship_to_customer_less = "ship_to_customer_less_example"; // string | Filter on SHP-CTM using 'Less' operator
$ship_to_customer_less_or_equal = "ship_to_customer_less_or_equal_example"; // string | Filter on SHP-CTM using 'LessOrEqual' operator
$ship_to_customer_greater = "ship_to_customer_greater_example"; // string | Filter on SHP-CTM using 'Greater' operator
$ship_to_customer_greater_or_equal = "ship_to_customer_greater_or_equal_example"; // string | Filter on SHP-CTM using 'GreaterOrEqual' operator
$ship_to_customer_is_null = "ship_to_customer_is_null_example"; // string | Filter on SHP-CTM using 'IsNull' operator
$ship_to_customer_is_not_null = "ship_to_customer_is_not_null_example"; // string | Filter on SHP-CTM using 'IsNotNull' operator
$ship_to_customer_like = "ship_to_customer_like_example"; // string | Filter on SHP-CTM using 'Like' operator
$ship_to_customer_not_like = "ship_to_customer_not_like_example"; // string | Filter on SHP-CTM using 'NotLike' operator
$ship_to_customer_contains = "ship_to_customer_contains_example"; // string | Filter on SHP-CTM using 'Contains' operator
$ship_to_customer_not_contains = "ship_to_customer_not_contains_example"; // string | Filter on SHP-CTM using 'NotContains' operator
$ship_to_customer_starts_with = "ship_to_customer_starts_with_example"; // string | Filter on SHP-CTM using 'StartsWith' operator
$ship_to_customer_not_starts_with = "ship_to_customer_not_starts_with_example"; // string | Filter on SHP-CTM using 'NotStartsWith' operator
$ship_to_customer_ends_with = "ship_to_customer_ends_with_example"; // string | Filter on SHP-CTM using 'EndsWith' operator
$ship_to_customer_not_ends_with = "ship_to_customer_not_ends_with_example"; // string | Filter on SHP-CTM using 'NotEndsWith' operator
$ship_to_customer_in = "ship_to_customer_in_example"; // string | Filter on SHP-CTM using 'In' operator
$ship_to_customer_between = "ship_to_customer_between_example"; // string | Filter on SHP-CTM using 'Between' operator

try {
    $result = $apiInstance->customerSearchOrderedProducts($customer_number, $pager_skip, $pager_take, $item_number, $product_format_code, $billing_organization_code, $order_date, $bill_to_customer, $ship_to_customer, $item_number_not_equal, $item_number_less, $item_number_less_or_equal, $item_number_greater, $item_number_greater_or_equal, $item_number_is_null, $item_number_is_not_null, $item_number_like, $item_number_not_like, $item_number_contains, $item_number_not_contains, $item_number_starts_with, $item_number_not_starts_with, $item_number_ends_with, $item_number_not_ends_with, $item_number_in, $item_number_between, $product_format_code_not_equal, $product_format_code_less, $product_format_code_less_or_equal, $product_format_code_greater, $product_format_code_greater_or_equal, $product_format_code_is_null, $product_format_code_is_not_null, $product_format_code_like, $product_format_code_not_like, $product_format_code_contains, $product_format_code_not_contains, $product_format_code_starts_with, $product_format_code_not_starts_with, $product_format_code_ends_with, $product_format_code_not_ends_with, $product_format_code_in, $product_format_code_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between, $order_date_not_equal, $order_date_less, $order_date_less_or_equal, $order_date_greater, $order_date_greater_or_equal, $order_date_is_null, $order_date_is_not_null, $order_date_like, $order_date_not_like, $order_date_contains, $order_date_not_contains, $order_date_starts_with, $order_date_not_starts_with, $order_date_ends_with, $order_date_not_ends_with, $order_date_in, $order_date_between, $bill_to_customer_not_equal, $bill_to_customer_less, $bill_to_customer_less_or_equal, $bill_to_customer_greater, $bill_to_customer_greater_or_equal, $bill_to_customer_is_null, $bill_to_customer_is_not_null, $bill_to_customer_like, $bill_to_customer_not_like, $bill_to_customer_contains, $bill_to_customer_not_contains, $bill_to_customer_starts_with, $bill_to_customer_not_starts_with, $bill_to_customer_ends_with, $bill_to_customer_not_ends_with, $bill_to_customer_in, $bill_to_customer_between, $ship_to_customer_not_equal, $ship_to_customer_less, $ship_to_customer_less_or_equal, $ship_to_customer_greater, $ship_to_customer_greater_or_equal, $ship_to_customer_is_null, $ship_to_customer_is_not_null, $ship_to_customer_like, $ship_to_customer_not_like, $ship_to_customer_contains, $ship_to_customer_not_contains, $ship_to_customer_starts_with, $ship_to_customer_not_starts_with, $ship_to_customer_ends_with, $ship_to_customer_not_ends_with, $ship_to_customer_in, $ship_to_customer_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSearchOrderedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number. |
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **item_number** | **string**| Filter on ITM-NUM using &#39;Equal&#39; operator | [optional]
 **product_format_code** | **string**| Filter on FOR-MAT using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **order_date** | **string**| Filter on ORDR-DTE using &#39;Equal&#39; operator | [optional]
 **bill_to_customer** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **ship_to_customer** | **string**| Filter on SHP-CTM using &#39;Equal&#39; operator | [optional]
 **item_number_not_equal** | **string**| Filter on ITM-NUM using &#39;NotEqual&#39; operator | [optional]
 **item_number_less** | **string**| Filter on ITM-NUM using &#39;Less&#39; operator | [optional]
 **item_number_less_or_equal** | **string**| Filter on ITM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **item_number_greater** | **string**| Filter on ITM-NUM using &#39;Greater&#39; operator | [optional]
 **item_number_greater_or_equal** | **string**| Filter on ITM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **item_number_is_null** | **string**| Filter on ITM-NUM using &#39;IsNull&#39; operator | [optional]
 **item_number_is_not_null** | **string**| Filter on ITM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **item_number_like** | **string**| Filter on ITM-NUM using &#39;Like&#39; operator | [optional]
 **item_number_not_like** | **string**| Filter on ITM-NUM using &#39;NotLike&#39; operator | [optional]
 **item_number_contains** | **string**| Filter on ITM-NUM using &#39;Contains&#39; operator | [optional]
 **item_number_not_contains** | **string**| Filter on ITM-NUM using &#39;NotContains&#39; operator | [optional]
 **item_number_starts_with** | **string**| Filter on ITM-NUM using &#39;StartsWith&#39; operator | [optional]
 **item_number_not_starts_with** | **string**| Filter on ITM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **item_number_ends_with** | **string**| Filter on ITM-NUM using &#39;EndsWith&#39; operator | [optional]
 **item_number_not_ends_with** | **string**| Filter on ITM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **item_number_in** | **string**| Filter on ITM-NUM using &#39;In&#39; operator | [optional]
 **item_number_between** | **string**| Filter on ITM-NUM using &#39;Between&#39; operator | [optional]
 **product_format_code_not_equal** | **string**| Filter on FOR-MAT using &#39;NotEqual&#39; operator | [optional]
 **product_format_code_less** | **string**| Filter on FOR-MAT using &#39;Less&#39; operator | [optional]
 **product_format_code_less_or_equal** | **string**| Filter on FOR-MAT using &#39;LessOrEqual&#39; operator | [optional]
 **product_format_code_greater** | **string**| Filter on FOR-MAT using &#39;Greater&#39; operator | [optional]
 **product_format_code_greater_or_equal** | **string**| Filter on FOR-MAT using &#39;GreaterOrEqual&#39; operator | [optional]
 **product_format_code_is_null** | **string**| Filter on FOR-MAT using &#39;IsNull&#39; operator | [optional]
 **product_format_code_is_not_null** | **string**| Filter on FOR-MAT using &#39;IsNotNull&#39; operator | [optional]
 **product_format_code_like** | **string**| Filter on FOR-MAT using &#39;Like&#39; operator | [optional]
 **product_format_code_not_like** | **string**| Filter on FOR-MAT using &#39;NotLike&#39; operator | [optional]
 **product_format_code_contains** | **string**| Filter on FOR-MAT using &#39;Contains&#39; operator | [optional]
 **product_format_code_not_contains** | **string**| Filter on FOR-MAT using &#39;NotContains&#39; operator | [optional]
 **product_format_code_starts_with** | **string**| Filter on FOR-MAT using &#39;StartsWith&#39; operator | [optional]
 **product_format_code_not_starts_with** | **string**| Filter on FOR-MAT using &#39;NotStartsWith&#39; operator | [optional]
 **product_format_code_ends_with** | **string**| Filter on FOR-MAT using &#39;EndsWith&#39; operator | [optional]
 **product_format_code_not_ends_with** | **string**| Filter on FOR-MAT using &#39;NotEndsWith&#39; operator | [optional]
 **product_format_code_in** | **string**| Filter on FOR-MAT using &#39;In&#39; operator | [optional]
 **product_format_code_between** | **string**| Filter on FOR-MAT using &#39;Between&#39; operator | [optional]
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
 **order_date_not_equal** | **string**| Filter on ORDR-DTE using &#39;NotEqual&#39; operator | [optional]
 **order_date_less** | **string**| Filter on ORDR-DTE using &#39;Less&#39; operator | [optional]
 **order_date_less_or_equal** | **string**| Filter on ORDR-DTE using &#39;LessOrEqual&#39; operator | [optional]
 **order_date_greater** | **string**| Filter on ORDR-DTE using &#39;Greater&#39; operator | [optional]
 **order_date_greater_or_equal** | **string**| Filter on ORDR-DTE using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_date_is_null** | **string**| Filter on ORDR-DTE using &#39;IsNull&#39; operator | [optional]
 **order_date_is_not_null** | **string**| Filter on ORDR-DTE using &#39;IsNotNull&#39; operator | [optional]
 **order_date_like** | **string**| Filter on ORDR-DTE using &#39;Like&#39; operator | [optional]
 **order_date_not_like** | **string**| Filter on ORDR-DTE using &#39;NotLike&#39; operator | [optional]
 **order_date_contains** | **string**| Filter on ORDR-DTE using &#39;Contains&#39; operator | [optional]
 **order_date_not_contains** | **string**| Filter on ORDR-DTE using &#39;NotContains&#39; operator | [optional]
 **order_date_starts_with** | **string**| Filter on ORDR-DTE using &#39;StartsWith&#39; operator | [optional]
 **order_date_not_starts_with** | **string**| Filter on ORDR-DTE using &#39;NotStartsWith&#39; operator | [optional]
 **order_date_ends_with** | **string**| Filter on ORDR-DTE using &#39;EndsWith&#39; operator | [optional]
 **order_date_not_ends_with** | **string**| Filter on ORDR-DTE using &#39;NotEndsWith&#39; operator | [optional]
 **order_date_in** | **string**| Filter on ORDR-DTE using &#39;In&#39; operator | [optional]
 **order_date_between** | **string**| Filter on ORDR-DTE using &#39;Between&#39; operator | [optional]
 **bill_to_customer_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **bill_to_customer_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **bill_to_customer_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **bill_to_customer_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **bill_to_customer_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **bill_to_customer_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **bill_to_customer_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **bill_to_customer_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **bill_to_customer_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **bill_to_customer_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **bill_to_customer_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **bill_to_customer_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **bill_to_customer_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **bill_to_customer_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **bill_to_customer_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **bill_to_customer_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **bill_to_customer_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **ship_to_customer_not_equal** | **string**| Filter on SHP-CTM using &#39;NotEqual&#39; operator | [optional]
 **ship_to_customer_less** | **string**| Filter on SHP-CTM using &#39;Less&#39; operator | [optional]
 **ship_to_customer_less_or_equal** | **string**| Filter on SHP-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **ship_to_customer_greater** | **string**| Filter on SHP-CTM using &#39;Greater&#39; operator | [optional]
 **ship_to_customer_greater_or_equal** | **string**| Filter on SHP-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **ship_to_customer_is_null** | **string**| Filter on SHP-CTM using &#39;IsNull&#39; operator | [optional]
 **ship_to_customer_is_not_null** | **string**| Filter on SHP-CTM using &#39;IsNotNull&#39; operator | [optional]
 **ship_to_customer_like** | **string**| Filter on SHP-CTM using &#39;Like&#39; operator | [optional]
 **ship_to_customer_not_like** | **string**| Filter on SHP-CTM using &#39;NotLike&#39; operator | [optional]
 **ship_to_customer_contains** | **string**| Filter on SHP-CTM using &#39;Contains&#39; operator | [optional]
 **ship_to_customer_not_contains** | **string**| Filter on SHP-CTM using &#39;NotContains&#39; operator | [optional]
 **ship_to_customer_starts_with** | **string**| Filter on SHP-CTM using &#39;StartsWith&#39; operator | [optional]
 **ship_to_customer_not_starts_with** | **string**| Filter on SHP-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **ship_to_customer_ends_with** | **string**| Filter on SHP-CTM using &#39;EndsWith&#39; operator | [optional]
 **ship_to_customer_not_ends_with** | **string**| Filter on SHP-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **ship_to_customer_in** | **string**| Filter on SHP-CTM using &#39;In&#39; operator | [optional]
 **ship_to_customer_between** | **string**| Filter on SHP-CTM using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultPurchaseHistoryItem**](../Model/SearchResultPurchaseHistoryItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpdate**
> customerUpdate($customer_number, $customer_update_request)

Updates all of the customer addresses for the given customer.  If an address does not exist, it is added.  If it does exist, is updated with the information provided.  In the case of an address update:  If the address is a temporary address that is currently in effect, changes to the  address will not become effective until the CDS750 address swapping process runs.  In the case of a new address:  If the customer name is provided then the individual name fields (i.e. name title,  name first, etc.) are ignored; their values will be derived by parsing the  customer name parameter.  If the customer name is not provided then the individual  name fields will be used to populate the customer address record instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the customer to update.
$customer_update_request = new \Swagger\Client\Model\CustomerUpdateRequest(); // \Swagger\Client\Model\CustomerUpdateRequest | A CustomerUpdateRequest object.

try {
    $apiInstance->customerUpdate($customer_number, $customer_update_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the customer to update. |
 **customer_update_request** | [**\Swagger\Client\Model\CustomerUpdateRequest**](../Model/CustomerUpdateRequest.md)| A CustomerUpdateRequest object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpdateCustomerAddress**
> \Swagger\Client\Model\CustomerAddress customerUpdateCustomerAddress($customer_number, $address_code, $customer_address_update_request)

Update a customer address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Customer Number
$address_code = "address_code_example"; // string | Address Code
$customer_address_update_request = new \Swagger\Client\Model\CustomerAddressUpdateRequest(); // \Swagger\Client\Model\CustomerAddressUpdateRequest | Customer Address Update Request object

try {
    $result = $apiInstance->customerUpdateCustomerAddress($customer_number, $address_code, $customer_address_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdateCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Customer Number |
 **address_code** | **string**| Address Code |
 **customer_address_update_request** | [**\Swagger\Client\Model\CustomerAddressUpdateRequest**](../Model/CustomerAddressUpdateRequest.md)| Customer Address Update Request object |

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerValidateLastName**
> customerValidateLastName($customer_number, $last_name)

Validate that a customer number identifies a customer with the specified last name (surname).  A 404 Not Found status is returned if validation fails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The advantage customer number to validate against.
$last_name = "last_name_example"; // string | The last name of the customer to validate against.

try {
    $apiInstance->customerValidateLastName($customer_number, $last_name);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerValidateLastName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The advantage customer number to validate against. |
 **last_name** | **string**| The last name of the customer to validate against. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerValidatePostalCode**
> customerValidatePostalCode($customer_number, $request)

Validate that a customer number identifies a customer with the specified country and postal code.  A 404 Not Found status is returned if validation fails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The advantage customer number to validate against.
$request = new \Swagger\Client\Model\ValidateAccountPostalCodeRequest(); // \Swagger\Client\Model\ValidateAccountPostalCodeRequest | The country code and postal code of the customer to validate against.

try {
    $apiInstance->customerValidatePostalCode($customer_number, $request);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerValidatePostalCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The advantage customer number to validate against. |
 **request** | [**\Swagger\Client\Model\ValidateAccountPostalCodeRequest**](../Model/ValidateAccountPostalCodeRequest.md)| The country code and postal code of the customer to validate against. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

