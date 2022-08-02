# Swagger\Client\OrderSummaryApi

All URIs are relative to *https://localhost/advantage-api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderSummarySearch**](OrderSummaryApi.md#orderSummarySearch) | **GET** /order-summaries | Gets order summaries matching the filter criteria. Filters are passed as a URI parameter in the format &amp;lt;Field&amp;gt;.&amp;lt;Operator&amp;gt;&#x3D;&amp;lt;Value&amp;gt;.  For example, /order-summaries?FirstName.CN&#x3D;Matt or /order-summaries?FirstName.EQ&#x3D;John&amp;amp;LastName.EQ&#x3D;Doe
[**orderSummarySearchOrders**](OrderSummaryApi.md#orderSummarySearchOrders) | **GET** /customers/{customerNumber}/orders | Get all past orders for a given customer, that match the searchAgument. The result of those orders can   be limited to N at a time. The list starts with the newest orders.


# **orderSummarySearch**
> \Swagger\Client\Model\SearchResultWithCountOrderSummary orderSummarySearch($search_text, $pager_skip, $pager_take, $order_number, $bill_to_customer_number, $default_ship_to_customer_number, $billing_currency_code, $bill_to_address_code, $default_ship_to_address_code, $promotion_code, $is_free_shipping, $discount_percent, $sales_rep_code, $purchase_order_number, $order_date, $billing_organization_code, $order_type, $operation_code, $control_group, $is_arp_only, $order_number_not_equal, $order_number_less, $order_number_less_or_equal, $order_number_greater, $order_number_greater_or_equal, $order_number_is_null, $order_number_is_not_null, $order_number_like, $order_number_not_like, $order_number_contains, $order_number_not_contains, $order_number_starts_with, $order_number_not_starts_with, $order_number_ends_with, $order_number_not_ends_with, $order_number_in, $order_number_between, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $default_ship_to_customer_number_not_equal, $default_ship_to_customer_number_less, $default_ship_to_customer_number_less_or_equal, $default_ship_to_customer_number_greater, $default_ship_to_customer_number_greater_or_equal, $default_ship_to_customer_number_is_null, $default_ship_to_customer_number_is_not_null, $default_ship_to_customer_number_like, $default_ship_to_customer_number_not_like, $default_ship_to_customer_number_contains, $default_ship_to_customer_number_not_contains, $default_ship_to_customer_number_starts_with, $default_ship_to_customer_number_not_starts_with, $default_ship_to_customer_number_ends_with, $default_ship_to_customer_number_not_ends_with, $default_ship_to_customer_number_in, $default_ship_to_customer_number_between, $billing_currency_code_not_equal, $billing_currency_code_less, $billing_currency_code_less_or_equal, $billing_currency_code_greater, $billing_currency_code_greater_or_equal, $billing_currency_code_is_null, $billing_currency_code_is_not_null, $billing_currency_code_like, $billing_currency_code_not_like, $billing_currency_code_contains, $billing_currency_code_not_contains, $billing_currency_code_starts_with, $billing_currency_code_not_starts_with, $billing_currency_code_ends_with, $billing_currency_code_not_ends_with, $billing_currency_code_in, $billing_currency_code_between, $bill_to_address_code_not_equal, $bill_to_address_code_less, $bill_to_address_code_less_or_equal, $bill_to_address_code_greater, $bill_to_address_code_greater_or_equal, $bill_to_address_code_is_null, $bill_to_address_code_is_not_null, $bill_to_address_code_like, $bill_to_address_code_not_like, $bill_to_address_code_contains, $bill_to_address_code_not_contains, $bill_to_address_code_starts_with, $bill_to_address_code_not_starts_with, $bill_to_address_code_ends_with, $bill_to_address_code_not_ends_with, $bill_to_address_code_in, $bill_to_address_code_between, $default_ship_to_address_code_not_equal, $default_ship_to_address_code_less, $default_ship_to_address_code_less_or_equal, $default_ship_to_address_code_greater, $default_ship_to_address_code_greater_or_equal, $default_ship_to_address_code_is_null, $default_ship_to_address_code_is_not_null, $default_ship_to_address_code_like, $default_ship_to_address_code_not_like, $default_ship_to_address_code_contains, $default_ship_to_address_code_not_contains, $default_ship_to_address_code_starts_with, $default_ship_to_address_code_not_starts_with, $default_ship_to_address_code_ends_with, $default_ship_to_address_code_not_ends_with, $default_ship_to_address_code_in, $default_ship_to_address_code_between, $promotion_code_not_equal, $promotion_code_less, $promotion_code_less_or_equal, $promotion_code_greater, $promotion_code_greater_or_equal, $promotion_code_is_null, $promotion_code_is_not_null, $promotion_code_like, $promotion_code_not_like, $promotion_code_contains, $promotion_code_not_contains, $promotion_code_starts_with, $promotion_code_not_starts_with, $promotion_code_ends_with, $promotion_code_not_ends_with, $promotion_code_in, $promotion_code_between, $is_free_shipping_not_equal, $is_free_shipping_less, $is_free_shipping_less_or_equal, $is_free_shipping_greater, $is_free_shipping_greater_or_equal, $is_free_shipping_is_null, $is_free_shipping_is_not_null, $is_free_shipping_like, $is_free_shipping_not_like, $is_free_shipping_contains, $is_free_shipping_not_contains, $is_free_shipping_starts_with, $is_free_shipping_not_starts_with, $is_free_shipping_ends_with, $is_free_shipping_not_ends_with, $is_free_shipping_in, $is_free_shipping_between, $discount_percent_not_equal, $discount_percent_less, $discount_percent_less_or_equal, $discount_percent_greater, $discount_percent_greater_or_equal, $discount_percent_is_null, $discount_percent_is_not_null, $discount_percent_like, $discount_percent_not_like, $discount_percent_contains, $discount_percent_not_contains, $discount_percent_starts_with, $discount_percent_not_starts_with, $discount_percent_ends_with, $discount_percent_not_ends_with, $discount_percent_in, $discount_percent_between, $sales_rep_code_not_equal, $sales_rep_code_less, $sales_rep_code_less_or_equal, $sales_rep_code_greater, $sales_rep_code_greater_or_equal, $sales_rep_code_is_null, $sales_rep_code_is_not_null, $sales_rep_code_like, $sales_rep_code_not_like, $sales_rep_code_contains, $sales_rep_code_not_contains, $sales_rep_code_starts_with, $sales_rep_code_not_starts_with, $sales_rep_code_ends_with, $sales_rep_code_not_ends_with, $sales_rep_code_in, $sales_rep_code_between, $purchase_order_number_not_equal, $purchase_order_number_less, $purchase_order_number_less_or_equal, $purchase_order_number_greater, $purchase_order_number_greater_or_equal, $purchase_order_number_is_null, $purchase_order_number_is_not_null, $purchase_order_number_like, $purchase_order_number_not_like, $purchase_order_number_contains, $purchase_order_number_not_contains, $purchase_order_number_starts_with, $purchase_order_number_not_starts_with, $purchase_order_number_ends_with, $purchase_order_number_not_ends_with, $purchase_order_number_in, $purchase_order_number_between, $order_date_not_equal, $order_date_less, $order_date_less_or_equal, $order_date_greater, $order_date_greater_or_equal, $order_date_is_null, $order_date_is_not_null, $order_date_like, $order_date_not_like, $order_date_contains, $order_date_not_contains, $order_date_starts_with, $order_date_not_starts_with, $order_date_ends_with, $order_date_not_ends_with, $order_date_in, $order_date_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between, $order_type_not_equal, $order_type_less, $order_type_less_or_equal, $order_type_greater, $order_type_greater_or_equal, $order_type_is_null, $order_type_is_not_null, $order_type_like, $order_type_not_like, $order_type_contains, $order_type_not_contains, $order_type_starts_with, $order_type_not_starts_with, $order_type_ends_with, $order_type_not_ends_with, $order_type_in, $order_type_between, $operation_code_not_equal, $operation_code_less, $operation_code_less_or_equal, $operation_code_greater, $operation_code_greater_or_equal, $operation_code_is_null, $operation_code_is_not_null, $operation_code_like, $operation_code_not_like, $operation_code_contains, $operation_code_not_contains, $operation_code_starts_with, $operation_code_not_starts_with, $operation_code_ends_with, $operation_code_not_ends_with, $operation_code_in, $operation_code_between, $control_group_not_equal, $control_group_less, $control_group_less_or_equal, $control_group_greater, $control_group_greater_or_equal, $control_group_is_null, $control_group_is_not_null, $control_group_like, $control_group_not_like, $control_group_contains, $control_group_not_contains, $control_group_starts_with, $control_group_not_starts_with, $control_group_ends_with, $control_group_not_ends_with, $control_group_in, $control_group_between, $is_arp_only_not_equal, $is_arp_only_less, $is_arp_only_less_or_equal, $is_arp_only_greater, $is_arp_only_greater_or_equal, $is_arp_only_is_null, $is_arp_only_is_not_null, $is_arp_only_like, $is_arp_only_not_like, $is_arp_only_contains, $is_arp_only_not_contains, $is_arp_only_starts_with, $is_arp_only_not_starts_with, $is_arp_only_ends_with, $is_arp_only_not_ends_with, $is_arp_only_in, $is_arp_only_between)

Gets order summaries matching the filter criteria. Filters are passed as a URI parameter in the format &lt;Field&gt;.&lt;Operator&gt;=&lt;Value&gt;.  For example, /order-summaries?FirstName.CN=Matt or /order-summaries?FirstName.EQ=John&amp;LastName.EQ=Doe

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_text = "search_text_example"; // string | Filter criteria
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.
$order_number = "order_number_example"; // string | Filter on ORD-NUM using 'Equal' operator
$bill_to_customer_number = "bill_to_customer_number_example"; // string | Filter on CTM-NBR using 'Equal' operator
$default_ship_to_customer_number = "default_ship_to_customer_number_example"; // string | Filter on SHP-CTM using 'Equal' operator
$billing_currency_code = "billing_currency_code_example"; // string | Filter on BIL-CUR using 'Equal' operator
$bill_to_address_code = "bill_to_address_code_example"; // string | Filter on ADR-CDE using 'Equal' operator
$default_ship_to_address_code = "default_ship_to_address_code_example"; // string | Filter on SHP-ADR using 'Equal' operator
$promotion_code = "promotion_code_example"; // string | Filter on PMO-CDE using 'Equal' operator
$is_free_shipping = "is_free_shipping_example"; // string | Filter on SHP-EXCL using 'Equal' operator
$discount_percent = "discount_percent_example"; // string | Filter on DISC-PCT using 'Equal' operator
$sales_rep_code = "sales_rep_code_example"; // string | Filter on SLM-NBR/SLM-NUM using 'Equal' operator
$purchase_order_number = "purchase_order_number_example"; // string | Filter on PO-NUM using 'Equal' operator
$order_date = "order_date_example"; // string | Filter on ORDR-DTE using 'Equal' operator
$billing_organization_code = "billing_organization_code_example"; // string | Filter on BIL-ORG using 'Equal' operator
$order_type = "order_type_example"; // string | Filter on ORD-TYPE using 'Equal' operator
$operation_code = "operation_code_example"; // string | Filter on OPR-CDE using 'Equal' operator
$control_group = "control_group_example"; // string | Filter on CTG-ID using 'Equal' operator
$is_arp_only = "is_arp_only_example"; // string | Filter on ARP-FLG using 'Equal' operator
$order_number_not_equal = "order_number_not_equal_example"; // string | Filter on ORD-NUM using 'NotEqual' operator
$order_number_less = "order_number_less_example"; // string | Filter on ORD-NUM using 'Less' operator
$order_number_less_or_equal = "order_number_less_or_equal_example"; // string | Filter on ORD-NUM using 'LessOrEqual' operator
$order_number_greater = "order_number_greater_example"; // string | Filter on ORD-NUM using 'Greater' operator
$order_number_greater_or_equal = "order_number_greater_or_equal_example"; // string | Filter on ORD-NUM using 'GreaterOrEqual' operator
$order_number_is_null = "order_number_is_null_example"; // string | Filter on ORD-NUM using 'IsNull' operator
$order_number_is_not_null = "order_number_is_not_null_example"; // string | Filter on ORD-NUM using 'IsNotNull' operator
$order_number_like = "order_number_like_example"; // string | Filter on ORD-NUM using 'Like' operator
$order_number_not_like = "order_number_not_like_example"; // string | Filter on ORD-NUM using 'NotLike' operator
$order_number_contains = "order_number_contains_example"; // string | Filter on ORD-NUM using 'Contains' operator
$order_number_not_contains = "order_number_not_contains_example"; // string | Filter on ORD-NUM using 'NotContains' operator
$order_number_starts_with = "order_number_starts_with_example"; // string | Filter on ORD-NUM using 'StartsWith' operator
$order_number_not_starts_with = "order_number_not_starts_with_example"; // string | Filter on ORD-NUM using 'NotStartsWith' operator
$order_number_ends_with = "order_number_ends_with_example"; // string | Filter on ORD-NUM using 'EndsWith' operator
$order_number_not_ends_with = "order_number_not_ends_with_example"; // string | Filter on ORD-NUM using 'NotEndsWith' operator
$order_number_in = "order_number_in_example"; // string | Filter on ORD-NUM using 'In' operator
$order_number_between = "order_number_between_example"; // string | Filter on ORD-NUM using 'Between' operator
$bill_to_customer_number_not_equal = "bill_to_customer_number_not_equal_example"; // string | Filter on CTM-NBR using 'NotEqual' operator
$bill_to_customer_number_less = "bill_to_customer_number_less_example"; // string | Filter on CTM-NBR using 'Less' operator
$bill_to_customer_number_less_or_equal = "bill_to_customer_number_less_or_equal_example"; // string | Filter on CTM-NBR using 'LessOrEqual' operator
$bill_to_customer_number_greater = "bill_to_customer_number_greater_example"; // string | Filter on CTM-NBR using 'Greater' operator
$bill_to_customer_number_greater_or_equal = "bill_to_customer_number_greater_or_equal_example"; // string | Filter on CTM-NBR using 'GreaterOrEqual' operator
$bill_to_customer_number_is_null = "bill_to_customer_number_is_null_example"; // string | Filter on CTM-NBR using 'IsNull' operator
$bill_to_customer_number_is_not_null = "bill_to_customer_number_is_not_null_example"; // string | Filter on CTM-NBR using 'IsNotNull' operator
$bill_to_customer_number_like = "bill_to_customer_number_like_example"; // string | Filter on CTM-NBR using 'Like' operator
$bill_to_customer_number_not_like = "bill_to_customer_number_not_like_example"; // string | Filter on CTM-NBR using 'NotLike' operator
$bill_to_customer_number_contains = "bill_to_customer_number_contains_example"; // string | Filter on CTM-NBR using 'Contains' operator
$bill_to_customer_number_not_contains = "bill_to_customer_number_not_contains_example"; // string | Filter on CTM-NBR using 'NotContains' operator
$bill_to_customer_number_starts_with = "bill_to_customer_number_starts_with_example"; // string | Filter on CTM-NBR using 'StartsWith' operator
$bill_to_customer_number_not_starts_with = "bill_to_customer_number_not_starts_with_example"; // string | Filter on CTM-NBR using 'NotStartsWith' operator
$bill_to_customer_number_ends_with = "bill_to_customer_number_ends_with_example"; // string | Filter on CTM-NBR using 'EndsWith' operator
$bill_to_customer_number_not_ends_with = "bill_to_customer_number_not_ends_with_example"; // string | Filter on CTM-NBR using 'NotEndsWith' operator
$bill_to_customer_number_in = "bill_to_customer_number_in_example"; // string | Filter on CTM-NBR using 'In' operator
$bill_to_customer_number_between = "bill_to_customer_number_between_example"; // string | Filter on CTM-NBR using 'Between' operator
$default_ship_to_customer_number_not_equal = "default_ship_to_customer_number_not_equal_example"; // string | Filter on SHP-CTM using 'NotEqual' operator
$default_ship_to_customer_number_less = "default_ship_to_customer_number_less_example"; // string | Filter on SHP-CTM using 'Less' operator
$default_ship_to_customer_number_less_or_equal = "default_ship_to_customer_number_less_or_equal_example"; // string | Filter on SHP-CTM using 'LessOrEqual' operator
$default_ship_to_customer_number_greater = "default_ship_to_customer_number_greater_example"; // string | Filter on SHP-CTM using 'Greater' operator
$default_ship_to_customer_number_greater_or_equal = "default_ship_to_customer_number_greater_or_equal_example"; // string | Filter on SHP-CTM using 'GreaterOrEqual' operator
$default_ship_to_customer_number_is_null = "default_ship_to_customer_number_is_null_example"; // string | Filter on SHP-CTM using 'IsNull' operator
$default_ship_to_customer_number_is_not_null = "default_ship_to_customer_number_is_not_null_example"; // string | Filter on SHP-CTM using 'IsNotNull' operator
$default_ship_to_customer_number_like = "default_ship_to_customer_number_like_example"; // string | Filter on SHP-CTM using 'Like' operator
$default_ship_to_customer_number_not_like = "default_ship_to_customer_number_not_like_example"; // string | Filter on SHP-CTM using 'NotLike' operator
$default_ship_to_customer_number_contains = "default_ship_to_customer_number_contains_example"; // string | Filter on SHP-CTM using 'Contains' operator
$default_ship_to_customer_number_not_contains = "default_ship_to_customer_number_not_contains_example"; // string | Filter on SHP-CTM using 'NotContains' operator
$default_ship_to_customer_number_starts_with = "default_ship_to_customer_number_starts_with_example"; // string | Filter on SHP-CTM using 'StartsWith' operator
$default_ship_to_customer_number_not_starts_with = "default_ship_to_customer_number_not_starts_with_example"; // string | Filter on SHP-CTM using 'NotStartsWith' operator
$default_ship_to_customer_number_ends_with = "default_ship_to_customer_number_ends_with_example"; // string | Filter on SHP-CTM using 'EndsWith' operator
$default_ship_to_customer_number_not_ends_with = "default_ship_to_customer_number_not_ends_with_example"; // string | Filter on SHP-CTM using 'NotEndsWith' operator
$default_ship_to_customer_number_in = "default_ship_to_customer_number_in_example"; // string | Filter on SHP-CTM using 'In' operator
$default_ship_to_customer_number_between = "default_ship_to_customer_number_between_example"; // string | Filter on SHP-CTM using 'Between' operator
$billing_currency_code_not_equal = "billing_currency_code_not_equal_example"; // string | Filter on BIL-CUR using 'NotEqual' operator
$billing_currency_code_less = "billing_currency_code_less_example"; // string | Filter on BIL-CUR using 'Less' operator
$billing_currency_code_less_or_equal = "billing_currency_code_less_or_equal_example"; // string | Filter on BIL-CUR using 'LessOrEqual' operator
$billing_currency_code_greater = "billing_currency_code_greater_example"; // string | Filter on BIL-CUR using 'Greater' operator
$billing_currency_code_greater_or_equal = "billing_currency_code_greater_or_equal_example"; // string | Filter on BIL-CUR using 'GreaterOrEqual' operator
$billing_currency_code_is_null = "billing_currency_code_is_null_example"; // string | Filter on BIL-CUR using 'IsNull' operator
$billing_currency_code_is_not_null = "billing_currency_code_is_not_null_example"; // string | Filter on BIL-CUR using 'IsNotNull' operator
$billing_currency_code_like = "billing_currency_code_like_example"; // string | Filter on BIL-CUR using 'Like' operator
$billing_currency_code_not_like = "billing_currency_code_not_like_example"; // string | Filter on BIL-CUR using 'NotLike' operator
$billing_currency_code_contains = "billing_currency_code_contains_example"; // string | Filter on BIL-CUR using 'Contains' operator
$billing_currency_code_not_contains = "billing_currency_code_not_contains_example"; // string | Filter on BIL-CUR using 'NotContains' operator
$billing_currency_code_starts_with = "billing_currency_code_starts_with_example"; // string | Filter on BIL-CUR using 'StartsWith' operator
$billing_currency_code_not_starts_with = "billing_currency_code_not_starts_with_example"; // string | Filter on BIL-CUR using 'NotStartsWith' operator
$billing_currency_code_ends_with = "billing_currency_code_ends_with_example"; // string | Filter on BIL-CUR using 'EndsWith' operator
$billing_currency_code_not_ends_with = "billing_currency_code_not_ends_with_example"; // string | Filter on BIL-CUR using 'NotEndsWith' operator
$billing_currency_code_in = "billing_currency_code_in_example"; // string | Filter on BIL-CUR using 'In' operator
$billing_currency_code_between = "billing_currency_code_between_example"; // string | Filter on BIL-CUR using 'Between' operator
$bill_to_address_code_not_equal = "bill_to_address_code_not_equal_example"; // string | Filter on ADR-CDE using 'NotEqual' operator
$bill_to_address_code_less = "bill_to_address_code_less_example"; // string | Filter on ADR-CDE using 'Less' operator
$bill_to_address_code_less_or_equal = "bill_to_address_code_less_or_equal_example"; // string | Filter on ADR-CDE using 'LessOrEqual' operator
$bill_to_address_code_greater = "bill_to_address_code_greater_example"; // string | Filter on ADR-CDE using 'Greater' operator
$bill_to_address_code_greater_or_equal = "bill_to_address_code_greater_or_equal_example"; // string | Filter on ADR-CDE using 'GreaterOrEqual' operator
$bill_to_address_code_is_null = "bill_to_address_code_is_null_example"; // string | Filter on ADR-CDE using 'IsNull' operator
$bill_to_address_code_is_not_null = "bill_to_address_code_is_not_null_example"; // string | Filter on ADR-CDE using 'IsNotNull' operator
$bill_to_address_code_like = "bill_to_address_code_like_example"; // string | Filter on ADR-CDE using 'Like' operator
$bill_to_address_code_not_like = "bill_to_address_code_not_like_example"; // string | Filter on ADR-CDE using 'NotLike' operator
$bill_to_address_code_contains = "bill_to_address_code_contains_example"; // string | Filter on ADR-CDE using 'Contains' operator
$bill_to_address_code_not_contains = "bill_to_address_code_not_contains_example"; // string | Filter on ADR-CDE using 'NotContains' operator
$bill_to_address_code_starts_with = "bill_to_address_code_starts_with_example"; // string | Filter on ADR-CDE using 'StartsWith' operator
$bill_to_address_code_not_starts_with = "bill_to_address_code_not_starts_with_example"; // string | Filter on ADR-CDE using 'NotStartsWith' operator
$bill_to_address_code_ends_with = "bill_to_address_code_ends_with_example"; // string | Filter on ADR-CDE using 'EndsWith' operator
$bill_to_address_code_not_ends_with = "bill_to_address_code_not_ends_with_example"; // string | Filter on ADR-CDE using 'NotEndsWith' operator
$bill_to_address_code_in = "bill_to_address_code_in_example"; // string | Filter on ADR-CDE using 'In' operator
$bill_to_address_code_between = "bill_to_address_code_between_example"; // string | Filter on ADR-CDE using 'Between' operator
$default_ship_to_address_code_not_equal = "default_ship_to_address_code_not_equal_example"; // string | Filter on SHP-ADR using 'NotEqual' operator
$default_ship_to_address_code_less = "default_ship_to_address_code_less_example"; // string | Filter on SHP-ADR using 'Less' operator
$default_ship_to_address_code_less_or_equal = "default_ship_to_address_code_less_or_equal_example"; // string | Filter on SHP-ADR using 'LessOrEqual' operator
$default_ship_to_address_code_greater = "default_ship_to_address_code_greater_example"; // string | Filter on SHP-ADR using 'Greater' operator
$default_ship_to_address_code_greater_or_equal = "default_ship_to_address_code_greater_or_equal_example"; // string | Filter on SHP-ADR using 'GreaterOrEqual' operator
$default_ship_to_address_code_is_null = "default_ship_to_address_code_is_null_example"; // string | Filter on SHP-ADR using 'IsNull' operator
$default_ship_to_address_code_is_not_null = "default_ship_to_address_code_is_not_null_example"; // string | Filter on SHP-ADR using 'IsNotNull' operator
$default_ship_to_address_code_like = "default_ship_to_address_code_like_example"; // string | Filter on SHP-ADR using 'Like' operator
$default_ship_to_address_code_not_like = "default_ship_to_address_code_not_like_example"; // string | Filter on SHP-ADR using 'NotLike' operator
$default_ship_to_address_code_contains = "default_ship_to_address_code_contains_example"; // string | Filter on SHP-ADR using 'Contains' operator
$default_ship_to_address_code_not_contains = "default_ship_to_address_code_not_contains_example"; // string | Filter on SHP-ADR using 'NotContains' operator
$default_ship_to_address_code_starts_with = "default_ship_to_address_code_starts_with_example"; // string | Filter on SHP-ADR using 'StartsWith' operator
$default_ship_to_address_code_not_starts_with = "default_ship_to_address_code_not_starts_with_example"; // string | Filter on SHP-ADR using 'NotStartsWith' operator
$default_ship_to_address_code_ends_with = "default_ship_to_address_code_ends_with_example"; // string | Filter on SHP-ADR using 'EndsWith' operator
$default_ship_to_address_code_not_ends_with = "default_ship_to_address_code_not_ends_with_example"; // string | Filter on SHP-ADR using 'NotEndsWith' operator
$default_ship_to_address_code_in = "default_ship_to_address_code_in_example"; // string | Filter on SHP-ADR using 'In' operator
$default_ship_to_address_code_between = "default_ship_to_address_code_between_example"; // string | Filter on SHP-ADR using 'Between' operator
$promotion_code_not_equal = "promotion_code_not_equal_example"; // string | Filter on PMO-CDE using 'NotEqual' operator
$promotion_code_less = "promotion_code_less_example"; // string | Filter on PMO-CDE using 'Less' operator
$promotion_code_less_or_equal = "promotion_code_less_or_equal_example"; // string | Filter on PMO-CDE using 'LessOrEqual' operator
$promotion_code_greater = "promotion_code_greater_example"; // string | Filter on PMO-CDE using 'Greater' operator
$promotion_code_greater_or_equal = "promotion_code_greater_or_equal_example"; // string | Filter on PMO-CDE using 'GreaterOrEqual' operator
$promotion_code_is_null = "promotion_code_is_null_example"; // string | Filter on PMO-CDE using 'IsNull' operator
$promotion_code_is_not_null = "promotion_code_is_not_null_example"; // string | Filter on PMO-CDE using 'IsNotNull' operator
$promotion_code_like = "promotion_code_like_example"; // string | Filter on PMO-CDE using 'Like' operator
$promotion_code_not_like = "promotion_code_not_like_example"; // string | Filter on PMO-CDE using 'NotLike' operator
$promotion_code_contains = "promotion_code_contains_example"; // string | Filter on PMO-CDE using 'Contains' operator
$promotion_code_not_contains = "promotion_code_not_contains_example"; // string | Filter on PMO-CDE using 'NotContains' operator
$promotion_code_starts_with = "promotion_code_starts_with_example"; // string | Filter on PMO-CDE using 'StartsWith' operator
$promotion_code_not_starts_with = "promotion_code_not_starts_with_example"; // string | Filter on PMO-CDE using 'NotStartsWith' operator
$promotion_code_ends_with = "promotion_code_ends_with_example"; // string | Filter on PMO-CDE using 'EndsWith' operator
$promotion_code_not_ends_with = "promotion_code_not_ends_with_example"; // string | Filter on PMO-CDE using 'NotEndsWith' operator
$promotion_code_in = "promotion_code_in_example"; // string | Filter on PMO-CDE using 'In' operator
$promotion_code_between = "promotion_code_between_example"; // string | Filter on PMO-CDE using 'Between' operator
$is_free_shipping_not_equal = "is_free_shipping_not_equal_example"; // string | Filter on SHP-EXCL using 'NotEqual' operator
$is_free_shipping_less = "is_free_shipping_less_example"; // string | Filter on SHP-EXCL using 'Less' operator
$is_free_shipping_less_or_equal = "is_free_shipping_less_or_equal_example"; // string | Filter on SHP-EXCL using 'LessOrEqual' operator
$is_free_shipping_greater = "is_free_shipping_greater_example"; // string | Filter on SHP-EXCL using 'Greater' operator
$is_free_shipping_greater_or_equal = "is_free_shipping_greater_or_equal_example"; // string | Filter on SHP-EXCL using 'GreaterOrEqual' operator
$is_free_shipping_is_null = "is_free_shipping_is_null_example"; // string | Filter on SHP-EXCL using 'IsNull' operator
$is_free_shipping_is_not_null = "is_free_shipping_is_not_null_example"; // string | Filter on SHP-EXCL using 'IsNotNull' operator
$is_free_shipping_like = "is_free_shipping_like_example"; // string | Filter on SHP-EXCL using 'Like' operator
$is_free_shipping_not_like = "is_free_shipping_not_like_example"; // string | Filter on SHP-EXCL using 'NotLike' operator
$is_free_shipping_contains = "is_free_shipping_contains_example"; // string | Filter on SHP-EXCL using 'Contains' operator
$is_free_shipping_not_contains = "is_free_shipping_not_contains_example"; // string | Filter on SHP-EXCL using 'NotContains' operator
$is_free_shipping_starts_with = "is_free_shipping_starts_with_example"; // string | Filter on SHP-EXCL using 'StartsWith' operator
$is_free_shipping_not_starts_with = "is_free_shipping_not_starts_with_example"; // string | Filter on SHP-EXCL using 'NotStartsWith' operator
$is_free_shipping_ends_with = "is_free_shipping_ends_with_example"; // string | Filter on SHP-EXCL using 'EndsWith' operator
$is_free_shipping_not_ends_with = "is_free_shipping_not_ends_with_example"; // string | Filter on SHP-EXCL using 'NotEndsWith' operator
$is_free_shipping_in = "is_free_shipping_in_example"; // string | Filter on SHP-EXCL using 'In' operator
$is_free_shipping_between = "is_free_shipping_between_example"; // string | Filter on SHP-EXCL using 'Between' operator
$discount_percent_not_equal = "discount_percent_not_equal_example"; // string | Filter on DISC-PCT using 'NotEqual' operator
$discount_percent_less = "discount_percent_less_example"; // string | Filter on DISC-PCT using 'Less' operator
$discount_percent_less_or_equal = "discount_percent_less_or_equal_example"; // string | Filter on DISC-PCT using 'LessOrEqual' operator
$discount_percent_greater = "discount_percent_greater_example"; // string | Filter on DISC-PCT using 'Greater' operator
$discount_percent_greater_or_equal = "discount_percent_greater_or_equal_example"; // string | Filter on DISC-PCT using 'GreaterOrEqual' operator
$discount_percent_is_null = "discount_percent_is_null_example"; // string | Filter on DISC-PCT using 'IsNull' operator
$discount_percent_is_not_null = "discount_percent_is_not_null_example"; // string | Filter on DISC-PCT using 'IsNotNull' operator
$discount_percent_like = "discount_percent_like_example"; // string | Filter on DISC-PCT using 'Like' operator
$discount_percent_not_like = "discount_percent_not_like_example"; // string | Filter on DISC-PCT using 'NotLike' operator
$discount_percent_contains = "discount_percent_contains_example"; // string | Filter on DISC-PCT using 'Contains' operator
$discount_percent_not_contains = "discount_percent_not_contains_example"; // string | Filter on DISC-PCT using 'NotContains' operator
$discount_percent_starts_with = "discount_percent_starts_with_example"; // string | Filter on DISC-PCT using 'StartsWith' operator
$discount_percent_not_starts_with = "discount_percent_not_starts_with_example"; // string | Filter on DISC-PCT using 'NotStartsWith' operator
$discount_percent_ends_with = "discount_percent_ends_with_example"; // string | Filter on DISC-PCT using 'EndsWith' operator
$discount_percent_not_ends_with = "discount_percent_not_ends_with_example"; // string | Filter on DISC-PCT using 'NotEndsWith' operator
$discount_percent_in = "discount_percent_in_example"; // string | Filter on DISC-PCT using 'In' operator
$discount_percent_between = "discount_percent_between_example"; // string | Filter on DISC-PCT using 'Between' operator
$sales_rep_code_not_equal = "sales_rep_code_not_equal_example"; // string | Filter on SLM-NBR/SLM-NUM using 'NotEqual' operator
$sales_rep_code_less = "sales_rep_code_less_example"; // string | Filter on SLM-NBR/SLM-NUM using 'Less' operator
$sales_rep_code_less_or_equal = "sales_rep_code_less_or_equal_example"; // string | Filter on SLM-NBR/SLM-NUM using 'LessOrEqual' operator
$sales_rep_code_greater = "sales_rep_code_greater_example"; // string | Filter on SLM-NBR/SLM-NUM using 'Greater' operator
$sales_rep_code_greater_or_equal = "sales_rep_code_greater_or_equal_example"; // string | Filter on SLM-NBR/SLM-NUM using 'GreaterOrEqual' operator
$sales_rep_code_is_null = "sales_rep_code_is_null_example"; // string | Filter on SLM-NBR/SLM-NUM using 'IsNull' operator
$sales_rep_code_is_not_null = "sales_rep_code_is_not_null_example"; // string | Filter on SLM-NBR/SLM-NUM using 'IsNotNull' operator
$sales_rep_code_like = "sales_rep_code_like_example"; // string | Filter on SLM-NBR/SLM-NUM using 'Like' operator
$sales_rep_code_not_like = "sales_rep_code_not_like_example"; // string | Filter on SLM-NBR/SLM-NUM using 'NotLike' operator
$sales_rep_code_contains = "sales_rep_code_contains_example"; // string | Filter on SLM-NBR/SLM-NUM using 'Contains' operator
$sales_rep_code_not_contains = "sales_rep_code_not_contains_example"; // string | Filter on SLM-NBR/SLM-NUM using 'NotContains' operator
$sales_rep_code_starts_with = "sales_rep_code_starts_with_example"; // string | Filter on SLM-NBR/SLM-NUM using 'StartsWith' operator
$sales_rep_code_not_starts_with = "sales_rep_code_not_starts_with_example"; // string | Filter on SLM-NBR/SLM-NUM using 'NotStartsWith' operator
$sales_rep_code_ends_with = "sales_rep_code_ends_with_example"; // string | Filter on SLM-NBR/SLM-NUM using 'EndsWith' operator
$sales_rep_code_not_ends_with = "sales_rep_code_not_ends_with_example"; // string | Filter on SLM-NBR/SLM-NUM using 'NotEndsWith' operator
$sales_rep_code_in = "sales_rep_code_in_example"; // string | Filter on SLM-NBR/SLM-NUM using 'In' operator
$sales_rep_code_between = "sales_rep_code_between_example"; // string | Filter on SLM-NBR/SLM-NUM using 'Between' operator
$purchase_order_number_not_equal = "purchase_order_number_not_equal_example"; // string | Filter on PO-NUM using 'NotEqual' operator
$purchase_order_number_less = "purchase_order_number_less_example"; // string | Filter on PO-NUM using 'Less' operator
$purchase_order_number_less_or_equal = "purchase_order_number_less_or_equal_example"; // string | Filter on PO-NUM using 'LessOrEqual' operator
$purchase_order_number_greater = "purchase_order_number_greater_example"; // string | Filter on PO-NUM using 'Greater' operator
$purchase_order_number_greater_or_equal = "purchase_order_number_greater_or_equal_example"; // string | Filter on PO-NUM using 'GreaterOrEqual' operator
$purchase_order_number_is_null = "purchase_order_number_is_null_example"; // string | Filter on PO-NUM using 'IsNull' operator
$purchase_order_number_is_not_null = "purchase_order_number_is_not_null_example"; // string | Filter on PO-NUM using 'IsNotNull' operator
$purchase_order_number_like = "purchase_order_number_like_example"; // string | Filter on PO-NUM using 'Like' operator
$purchase_order_number_not_like = "purchase_order_number_not_like_example"; // string | Filter on PO-NUM using 'NotLike' operator
$purchase_order_number_contains = "purchase_order_number_contains_example"; // string | Filter on PO-NUM using 'Contains' operator
$purchase_order_number_not_contains = "purchase_order_number_not_contains_example"; // string | Filter on PO-NUM using 'NotContains' operator
$purchase_order_number_starts_with = "purchase_order_number_starts_with_example"; // string | Filter on PO-NUM using 'StartsWith' operator
$purchase_order_number_not_starts_with = "purchase_order_number_not_starts_with_example"; // string | Filter on PO-NUM using 'NotStartsWith' operator
$purchase_order_number_ends_with = "purchase_order_number_ends_with_example"; // string | Filter on PO-NUM using 'EndsWith' operator
$purchase_order_number_not_ends_with = "purchase_order_number_not_ends_with_example"; // string | Filter on PO-NUM using 'NotEndsWith' operator
$purchase_order_number_in = "purchase_order_number_in_example"; // string | Filter on PO-NUM using 'In' operator
$purchase_order_number_between = "purchase_order_number_between_example"; // string | Filter on PO-NUM using 'Between' operator
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
$order_type_not_equal = "order_type_not_equal_example"; // string | Filter on ORD-TYPE using 'NotEqual' operator
$order_type_less = "order_type_less_example"; // string | Filter on ORD-TYPE using 'Less' operator
$order_type_less_or_equal = "order_type_less_or_equal_example"; // string | Filter on ORD-TYPE using 'LessOrEqual' operator
$order_type_greater = "order_type_greater_example"; // string | Filter on ORD-TYPE using 'Greater' operator
$order_type_greater_or_equal = "order_type_greater_or_equal_example"; // string | Filter on ORD-TYPE using 'GreaterOrEqual' operator
$order_type_is_null = "order_type_is_null_example"; // string | Filter on ORD-TYPE using 'IsNull' operator
$order_type_is_not_null = "order_type_is_not_null_example"; // string | Filter on ORD-TYPE using 'IsNotNull' operator
$order_type_like = "order_type_like_example"; // string | Filter on ORD-TYPE using 'Like' operator
$order_type_not_like = "order_type_not_like_example"; // string | Filter on ORD-TYPE using 'NotLike' operator
$order_type_contains = "order_type_contains_example"; // string | Filter on ORD-TYPE using 'Contains' operator
$order_type_not_contains = "order_type_not_contains_example"; // string | Filter on ORD-TYPE using 'NotContains' operator
$order_type_starts_with = "order_type_starts_with_example"; // string | Filter on ORD-TYPE using 'StartsWith' operator
$order_type_not_starts_with = "order_type_not_starts_with_example"; // string | Filter on ORD-TYPE using 'NotStartsWith' operator
$order_type_ends_with = "order_type_ends_with_example"; // string | Filter on ORD-TYPE using 'EndsWith' operator
$order_type_not_ends_with = "order_type_not_ends_with_example"; // string | Filter on ORD-TYPE using 'NotEndsWith' operator
$order_type_in = "order_type_in_example"; // string | Filter on ORD-TYPE using 'In' operator
$order_type_between = "order_type_between_example"; // string | Filter on ORD-TYPE using 'Between' operator
$operation_code_not_equal = "operation_code_not_equal_example"; // string | Filter on OPR-CDE using 'NotEqual' operator
$operation_code_less = "operation_code_less_example"; // string | Filter on OPR-CDE using 'Less' operator
$operation_code_less_or_equal = "operation_code_less_or_equal_example"; // string | Filter on OPR-CDE using 'LessOrEqual' operator
$operation_code_greater = "operation_code_greater_example"; // string | Filter on OPR-CDE using 'Greater' operator
$operation_code_greater_or_equal = "operation_code_greater_or_equal_example"; // string | Filter on OPR-CDE using 'GreaterOrEqual' operator
$operation_code_is_null = "operation_code_is_null_example"; // string | Filter on OPR-CDE using 'IsNull' operator
$operation_code_is_not_null = "operation_code_is_not_null_example"; // string | Filter on OPR-CDE using 'IsNotNull' operator
$operation_code_like = "operation_code_like_example"; // string | Filter on OPR-CDE using 'Like' operator
$operation_code_not_like = "operation_code_not_like_example"; // string | Filter on OPR-CDE using 'NotLike' operator
$operation_code_contains = "operation_code_contains_example"; // string | Filter on OPR-CDE using 'Contains' operator
$operation_code_not_contains = "operation_code_not_contains_example"; // string | Filter on OPR-CDE using 'NotContains' operator
$operation_code_starts_with = "operation_code_starts_with_example"; // string | Filter on OPR-CDE using 'StartsWith' operator
$operation_code_not_starts_with = "operation_code_not_starts_with_example"; // string | Filter on OPR-CDE using 'NotStartsWith' operator
$operation_code_ends_with = "operation_code_ends_with_example"; // string | Filter on OPR-CDE using 'EndsWith' operator
$operation_code_not_ends_with = "operation_code_not_ends_with_example"; // string | Filter on OPR-CDE using 'NotEndsWith' operator
$operation_code_in = "operation_code_in_example"; // string | Filter on OPR-CDE using 'In' operator
$operation_code_between = "operation_code_between_example"; // string | Filter on OPR-CDE using 'Between' operator
$control_group_not_equal = "control_group_not_equal_example"; // string | Filter on CTG-ID using 'NotEqual' operator
$control_group_less = "control_group_less_example"; // string | Filter on CTG-ID using 'Less' operator
$control_group_less_or_equal = "control_group_less_or_equal_example"; // string | Filter on CTG-ID using 'LessOrEqual' operator
$control_group_greater = "control_group_greater_example"; // string | Filter on CTG-ID using 'Greater' operator
$control_group_greater_or_equal = "control_group_greater_or_equal_example"; // string | Filter on CTG-ID using 'GreaterOrEqual' operator
$control_group_is_null = "control_group_is_null_example"; // string | Filter on CTG-ID using 'IsNull' operator
$control_group_is_not_null = "control_group_is_not_null_example"; // string | Filter on CTG-ID using 'IsNotNull' operator
$control_group_like = "control_group_like_example"; // string | Filter on CTG-ID using 'Like' operator
$control_group_not_like = "control_group_not_like_example"; // string | Filter on CTG-ID using 'NotLike' operator
$control_group_contains = "control_group_contains_example"; // string | Filter on CTG-ID using 'Contains' operator
$control_group_not_contains = "control_group_not_contains_example"; // string | Filter on CTG-ID using 'NotContains' operator
$control_group_starts_with = "control_group_starts_with_example"; // string | Filter on CTG-ID using 'StartsWith' operator
$control_group_not_starts_with = "control_group_not_starts_with_example"; // string | Filter on CTG-ID using 'NotStartsWith' operator
$control_group_ends_with = "control_group_ends_with_example"; // string | Filter on CTG-ID using 'EndsWith' operator
$control_group_not_ends_with = "control_group_not_ends_with_example"; // string | Filter on CTG-ID using 'NotEndsWith' operator
$control_group_in = "control_group_in_example"; // string | Filter on CTG-ID using 'In' operator
$control_group_between = "control_group_between_example"; // string | Filter on CTG-ID using 'Between' operator
$is_arp_only_not_equal = "is_arp_only_not_equal_example"; // string | Filter on ARP-FLG using 'NotEqual' operator
$is_arp_only_less = "is_arp_only_less_example"; // string | Filter on ARP-FLG using 'Less' operator
$is_arp_only_less_or_equal = "is_arp_only_less_or_equal_example"; // string | Filter on ARP-FLG using 'LessOrEqual' operator
$is_arp_only_greater = "is_arp_only_greater_example"; // string | Filter on ARP-FLG using 'Greater' operator
$is_arp_only_greater_or_equal = "is_arp_only_greater_or_equal_example"; // string | Filter on ARP-FLG using 'GreaterOrEqual' operator
$is_arp_only_is_null = "is_arp_only_is_null_example"; // string | Filter on ARP-FLG using 'IsNull' operator
$is_arp_only_is_not_null = "is_arp_only_is_not_null_example"; // string | Filter on ARP-FLG using 'IsNotNull' operator
$is_arp_only_like = "is_arp_only_like_example"; // string | Filter on ARP-FLG using 'Like' operator
$is_arp_only_not_like = "is_arp_only_not_like_example"; // string | Filter on ARP-FLG using 'NotLike' operator
$is_arp_only_contains = "is_arp_only_contains_example"; // string | Filter on ARP-FLG using 'Contains' operator
$is_arp_only_not_contains = "is_arp_only_not_contains_example"; // string | Filter on ARP-FLG using 'NotContains' operator
$is_arp_only_starts_with = "is_arp_only_starts_with_example"; // string | Filter on ARP-FLG using 'StartsWith' operator
$is_arp_only_not_starts_with = "is_arp_only_not_starts_with_example"; // string | Filter on ARP-FLG using 'NotStartsWith' operator
$is_arp_only_ends_with = "is_arp_only_ends_with_example"; // string | Filter on ARP-FLG using 'EndsWith' operator
$is_arp_only_not_ends_with = "is_arp_only_not_ends_with_example"; // string | Filter on ARP-FLG using 'NotEndsWith' operator
$is_arp_only_in = "is_arp_only_in_example"; // string | Filter on ARP-FLG using 'In' operator
$is_arp_only_between = "is_arp_only_between_example"; // string | Filter on ARP-FLG using 'Between' operator

try {
    $result = $apiInstance->orderSummarySearch($search_text, $pager_skip, $pager_take, $order_number, $bill_to_customer_number, $default_ship_to_customer_number, $billing_currency_code, $bill_to_address_code, $default_ship_to_address_code, $promotion_code, $is_free_shipping, $discount_percent, $sales_rep_code, $purchase_order_number, $order_date, $billing_organization_code, $order_type, $operation_code, $control_group, $is_arp_only, $order_number_not_equal, $order_number_less, $order_number_less_or_equal, $order_number_greater, $order_number_greater_or_equal, $order_number_is_null, $order_number_is_not_null, $order_number_like, $order_number_not_like, $order_number_contains, $order_number_not_contains, $order_number_starts_with, $order_number_not_starts_with, $order_number_ends_with, $order_number_not_ends_with, $order_number_in, $order_number_between, $bill_to_customer_number_not_equal, $bill_to_customer_number_less, $bill_to_customer_number_less_or_equal, $bill_to_customer_number_greater, $bill_to_customer_number_greater_or_equal, $bill_to_customer_number_is_null, $bill_to_customer_number_is_not_null, $bill_to_customer_number_like, $bill_to_customer_number_not_like, $bill_to_customer_number_contains, $bill_to_customer_number_not_contains, $bill_to_customer_number_starts_with, $bill_to_customer_number_not_starts_with, $bill_to_customer_number_ends_with, $bill_to_customer_number_not_ends_with, $bill_to_customer_number_in, $bill_to_customer_number_between, $default_ship_to_customer_number_not_equal, $default_ship_to_customer_number_less, $default_ship_to_customer_number_less_or_equal, $default_ship_to_customer_number_greater, $default_ship_to_customer_number_greater_or_equal, $default_ship_to_customer_number_is_null, $default_ship_to_customer_number_is_not_null, $default_ship_to_customer_number_like, $default_ship_to_customer_number_not_like, $default_ship_to_customer_number_contains, $default_ship_to_customer_number_not_contains, $default_ship_to_customer_number_starts_with, $default_ship_to_customer_number_not_starts_with, $default_ship_to_customer_number_ends_with, $default_ship_to_customer_number_not_ends_with, $default_ship_to_customer_number_in, $default_ship_to_customer_number_between, $billing_currency_code_not_equal, $billing_currency_code_less, $billing_currency_code_less_or_equal, $billing_currency_code_greater, $billing_currency_code_greater_or_equal, $billing_currency_code_is_null, $billing_currency_code_is_not_null, $billing_currency_code_like, $billing_currency_code_not_like, $billing_currency_code_contains, $billing_currency_code_not_contains, $billing_currency_code_starts_with, $billing_currency_code_not_starts_with, $billing_currency_code_ends_with, $billing_currency_code_not_ends_with, $billing_currency_code_in, $billing_currency_code_between, $bill_to_address_code_not_equal, $bill_to_address_code_less, $bill_to_address_code_less_or_equal, $bill_to_address_code_greater, $bill_to_address_code_greater_or_equal, $bill_to_address_code_is_null, $bill_to_address_code_is_not_null, $bill_to_address_code_like, $bill_to_address_code_not_like, $bill_to_address_code_contains, $bill_to_address_code_not_contains, $bill_to_address_code_starts_with, $bill_to_address_code_not_starts_with, $bill_to_address_code_ends_with, $bill_to_address_code_not_ends_with, $bill_to_address_code_in, $bill_to_address_code_between, $default_ship_to_address_code_not_equal, $default_ship_to_address_code_less, $default_ship_to_address_code_less_or_equal, $default_ship_to_address_code_greater, $default_ship_to_address_code_greater_or_equal, $default_ship_to_address_code_is_null, $default_ship_to_address_code_is_not_null, $default_ship_to_address_code_like, $default_ship_to_address_code_not_like, $default_ship_to_address_code_contains, $default_ship_to_address_code_not_contains, $default_ship_to_address_code_starts_with, $default_ship_to_address_code_not_starts_with, $default_ship_to_address_code_ends_with, $default_ship_to_address_code_not_ends_with, $default_ship_to_address_code_in, $default_ship_to_address_code_between, $promotion_code_not_equal, $promotion_code_less, $promotion_code_less_or_equal, $promotion_code_greater, $promotion_code_greater_or_equal, $promotion_code_is_null, $promotion_code_is_not_null, $promotion_code_like, $promotion_code_not_like, $promotion_code_contains, $promotion_code_not_contains, $promotion_code_starts_with, $promotion_code_not_starts_with, $promotion_code_ends_with, $promotion_code_not_ends_with, $promotion_code_in, $promotion_code_between, $is_free_shipping_not_equal, $is_free_shipping_less, $is_free_shipping_less_or_equal, $is_free_shipping_greater, $is_free_shipping_greater_or_equal, $is_free_shipping_is_null, $is_free_shipping_is_not_null, $is_free_shipping_like, $is_free_shipping_not_like, $is_free_shipping_contains, $is_free_shipping_not_contains, $is_free_shipping_starts_with, $is_free_shipping_not_starts_with, $is_free_shipping_ends_with, $is_free_shipping_not_ends_with, $is_free_shipping_in, $is_free_shipping_between, $discount_percent_not_equal, $discount_percent_less, $discount_percent_less_or_equal, $discount_percent_greater, $discount_percent_greater_or_equal, $discount_percent_is_null, $discount_percent_is_not_null, $discount_percent_like, $discount_percent_not_like, $discount_percent_contains, $discount_percent_not_contains, $discount_percent_starts_with, $discount_percent_not_starts_with, $discount_percent_ends_with, $discount_percent_not_ends_with, $discount_percent_in, $discount_percent_between, $sales_rep_code_not_equal, $sales_rep_code_less, $sales_rep_code_less_or_equal, $sales_rep_code_greater, $sales_rep_code_greater_or_equal, $sales_rep_code_is_null, $sales_rep_code_is_not_null, $sales_rep_code_like, $sales_rep_code_not_like, $sales_rep_code_contains, $sales_rep_code_not_contains, $sales_rep_code_starts_with, $sales_rep_code_not_starts_with, $sales_rep_code_ends_with, $sales_rep_code_not_ends_with, $sales_rep_code_in, $sales_rep_code_between, $purchase_order_number_not_equal, $purchase_order_number_less, $purchase_order_number_less_or_equal, $purchase_order_number_greater, $purchase_order_number_greater_or_equal, $purchase_order_number_is_null, $purchase_order_number_is_not_null, $purchase_order_number_like, $purchase_order_number_not_like, $purchase_order_number_contains, $purchase_order_number_not_contains, $purchase_order_number_starts_with, $purchase_order_number_not_starts_with, $purchase_order_number_ends_with, $purchase_order_number_not_ends_with, $purchase_order_number_in, $purchase_order_number_between, $order_date_not_equal, $order_date_less, $order_date_less_or_equal, $order_date_greater, $order_date_greater_or_equal, $order_date_is_null, $order_date_is_not_null, $order_date_like, $order_date_not_like, $order_date_contains, $order_date_not_contains, $order_date_starts_with, $order_date_not_starts_with, $order_date_ends_with, $order_date_not_ends_with, $order_date_in, $order_date_between, $billing_organization_code_not_equal, $billing_organization_code_less, $billing_organization_code_less_or_equal, $billing_organization_code_greater, $billing_organization_code_greater_or_equal, $billing_organization_code_is_null, $billing_organization_code_is_not_null, $billing_organization_code_like, $billing_organization_code_not_like, $billing_organization_code_contains, $billing_organization_code_not_contains, $billing_organization_code_starts_with, $billing_organization_code_not_starts_with, $billing_organization_code_ends_with, $billing_organization_code_not_ends_with, $billing_organization_code_in, $billing_organization_code_between, $order_type_not_equal, $order_type_less, $order_type_less_or_equal, $order_type_greater, $order_type_greater_or_equal, $order_type_is_null, $order_type_is_not_null, $order_type_like, $order_type_not_like, $order_type_contains, $order_type_not_contains, $order_type_starts_with, $order_type_not_starts_with, $order_type_ends_with, $order_type_not_ends_with, $order_type_in, $order_type_between, $operation_code_not_equal, $operation_code_less, $operation_code_less_or_equal, $operation_code_greater, $operation_code_greater_or_equal, $operation_code_is_null, $operation_code_is_not_null, $operation_code_like, $operation_code_not_like, $operation_code_contains, $operation_code_not_contains, $operation_code_starts_with, $operation_code_not_starts_with, $operation_code_ends_with, $operation_code_not_ends_with, $operation_code_in, $operation_code_between, $control_group_not_equal, $control_group_less, $control_group_less_or_equal, $control_group_greater, $control_group_greater_or_equal, $control_group_is_null, $control_group_is_not_null, $control_group_like, $control_group_not_like, $control_group_contains, $control_group_not_contains, $control_group_starts_with, $control_group_not_starts_with, $control_group_ends_with, $control_group_not_ends_with, $control_group_in, $control_group_between, $is_arp_only_not_equal, $is_arp_only_less, $is_arp_only_less_or_equal, $is_arp_only_greater, $is_arp_only_greater_or_equal, $is_arp_only_is_null, $is_arp_only_is_not_null, $is_arp_only_like, $is_arp_only_not_like, $is_arp_only_contains, $is_arp_only_not_contains, $is_arp_only_starts_with, $is_arp_only_not_starts_with, $is_arp_only_ends_with, $is_arp_only_not_ends_with, $is_arp_only_in, $is_arp_only_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->orderSummarySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Filter criteria | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]
 **order_number** | **string**| Filter on ORD-NUM using &#39;Equal&#39; operator | [optional]
 **bill_to_customer_number** | **string**| Filter on CTM-NBR using &#39;Equal&#39; operator | [optional]
 **default_ship_to_customer_number** | **string**| Filter on SHP-CTM using &#39;Equal&#39; operator | [optional]
 **billing_currency_code** | **string**| Filter on BIL-CUR using &#39;Equal&#39; operator | [optional]
 **bill_to_address_code** | **string**| Filter on ADR-CDE using &#39;Equal&#39; operator | [optional]
 **default_ship_to_address_code** | **string**| Filter on SHP-ADR using &#39;Equal&#39; operator | [optional]
 **promotion_code** | **string**| Filter on PMO-CDE using &#39;Equal&#39; operator | [optional]
 **is_free_shipping** | **string**| Filter on SHP-EXCL using &#39;Equal&#39; operator | [optional]
 **discount_percent** | **string**| Filter on DISC-PCT using &#39;Equal&#39; operator | [optional]
 **sales_rep_code** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;Equal&#39; operator | [optional]
 **purchase_order_number** | **string**| Filter on PO-NUM using &#39;Equal&#39; operator | [optional]
 **order_date** | **string**| Filter on ORDR-DTE using &#39;Equal&#39; operator | [optional]
 **billing_organization_code** | **string**| Filter on BIL-ORG using &#39;Equal&#39; operator | [optional]
 **order_type** | **string**| Filter on ORD-TYPE using &#39;Equal&#39; operator | [optional]
 **operation_code** | **string**| Filter on OPR-CDE using &#39;Equal&#39; operator | [optional]
 **control_group** | **string**| Filter on CTG-ID using &#39;Equal&#39; operator | [optional]
 **is_arp_only** | **string**| Filter on ARP-FLG using &#39;Equal&#39; operator | [optional]
 **order_number_not_equal** | **string**| Filter on ORD-NUM using &#39;NotEqual&#39; operator | [optional]
 **order_number_less** | **string**| Filter on ORD-NUM using &#39;Less&#39; operator | [optional]
 **order_number_less_or_equal** | **string**| Filter on ORD-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **order_number_greater** | **string**| Filter on ORD-NUM using &#39;Greater&#39; operator | [optional]
 **order_number_greater_or_equal** | **string**| Filter on ORD-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_number_is_null** | **string**| Filter on ORD-NUM using &#39;IsNull&#39; operator | [optional]
 **order_number_is_not_null** | **string**| Filter on ORD-NUM using &#39;IsNotNull&#39; operator | [optional]
 **order_number_like** | **string**| Filter on ORD-NUM using &#39;Like&#39; operator | [optional]
 **order_number_not_like** | **string**| Filter on ORD-NUM using &#39;NotLike&#39; operator | [optional]
 **order_number_contains** | **string**| Filter on ORD-NUM using &#39;Contains&#39; operator | [optional]
 **order_number_not_contains** | **string**| Filter on ORD-NUM using &#39;NotContains&#39; operator | [optional]
 **order_number_starts_with** | **string**| Filter on ORD-NUM using &#39;StartsWith&#39; operator | [optional]
 **order_number_not_starts_with** | **string**| Filter on ORD-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **order_number_ends_with** | **string**| Filter on ORD-NUM using &#39;EndsWith&#39; operator | [optional]
 **order_number_not_ends_with** | **string**| Filter on ORD-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **order_number_in** | **string**| Filter on ORD-NUM using &#39;In&#39; operator | [optional]
 **order_number_between** | **string**| Filter on ORD-NUM using &#39;Between&#39; operator | [optional]
 **bill_to_customer_number_not_equal** | **string**| Filter on CTM-NBR using &#39;NotEqual&#39; operator | [optional]
 **bill_to_customer_number_less** | **string**| Filter on CTM-NBR using &#39;Less&#39; operator | [optional]
 **bill_to_customer_number_less_or_equal** | **string**| Filter on CTM-NBR using &#39;LessOrEqual&#39; operator | [optional]
 **bill_to_customer_number_greater** | **string**| Filter on CTM-NBR using &#39;Greater&#39; operator | [optional]
 **bill_to_customer_number_greater_or_equal** | **string**| Filter on CTM-NBR using &#39;GreaterOrEqual&#39; operator | [optional]
 **bill_to_customer_number_is_null** | **string**| Filter on CTM-NBR using &#39;IsNull&#39; operator | [optional]
 **bill_to_customer_number_is_not_null** | **string**| Filter on CTM-NBR using &#39;IsNotNull&#39; operator | [optional]
 **bill_to_customer_number_like** | **string**| Filter on CTM-NBR using &#39;Like&#39; operator | [optional]
 **bill_to_customer_number_not_like** | **string**| Filter on CTM-NBR using &#39;NotLike&#39; operator | [optional]
 **bill_to_customer_number_contains** | **string**| Filter on CTM-NBR using &#39;Contains&#39; operator | [optional]
 **bill_to_customer_number_not_contains** | **string**| Filter on CTM-NBR using &#39;NotContains&#39; operator | [optional]
 **bill_to_customer_number_starts_with** | **string**| Filter on CTM-NBR using &#39;StartsWith&#39; operator | [optional]
 **bill_to_customer_number_not_starts_with** | **string**| Filter on CTM-NBR using &#39;NotStartsWith&#39; operator | [optional]
 **bill_to_customer_number_ends_with** | **string**| Filter on CTM-NBR using &#39;EndsWith&#39; operator | [optional]
 **bill_to_customer_number_not_ends_with** | **string**| Filter on CTM-NBR using &#39;NotEndsWith&#39; operator | [optional]
 **bill_to_customer_number_in** | **string**| Filter on CTM-NBR using &#39;In&#39; operator | [optional]
 **bill_to_customer_number_between** | **string**| Filter on CTM-NBR using &#39;Between&#39; operator | [optional]
 **default_ship_to_customer_number_not_equal** | **string**| Filter on SHP-CTM using &#39;NotEqual&#39; operator | [optional]
 **default_ship_to_customer_number_less** | **string**| Filter on SHP-CTM using &#39;Less&#39; operator | [optional]
 **default_ship_to_customer_number_less_or_equal** | **string**| Filter on SHP-CTM using &#39;LessOrEqual&#39; operator | [optional]
 **default_ship_to_customer_number_greater** | **string**| Filter on SHP-CTM using &#39;Greater&#39; operator | [optional]
 **default_ship_to_customer_number_greater_or_equal** | **string**| Filter on SHP-CTM using &#39;GreaterOrEqual&#39; operator | [optional]
 **default_ship_to_customer_number_is_null** | **string**| Filter on SHP-CTM using &#39;IsNull&#39; operator | [optional]
 **default_ship_to_customer_number_is_not_null** | **string**| Filter on SHP-CTM using &#39;IsNotNull&#39; operator | [optional]
 **default_ship_to_customer_number_like** | **string**| Filter on SHP-CTM using &#39;Like&#39; operator | [optional]
 **default_ship_to_customer_number_not_like** | **string**| Filter on SHP-CTM using &#39;NotLike&#39; operator | [optional]
 **default_ship_to_customer_number_contains** | **string**| Filter on SHP-CTM using &#39;Contains&#39; operator | [optional]
 **default_ship_to_customer_number_not_contains** | **string**| Filter on SHP-CTM using &#39;NotContains&#39; operator | [optional]
 **default_ship_to_customer_number_starts_with** | **string**| Filter on SHP-CTM using &#39;StartsWith&#39; operator | [optional]
 **default_ship_to_customer_number_not_starts_with** | **string**| Filter on SHP-CTM using &#39;NotStartsWith&#39; operator | [optional]
 **default_ship_to_customer_number_ends_with** | **string**| Filter on SHP-CTM using &#39;EndsWith&#39; operator | [optional]
 **default_ship_to_customer_number_not_ends_with** | **string**| Filter on SHP-CTM using &#39;NotEndsWith&#39; operator | [optional]
 **default_ship_to_customer_number_in** | **string**| Filter on SHP-CTM using &#39;In&#39; operator | [optional]
 **default_ship_to_customer_number_between** | **string**| Filter on SHP-CTM using &#39;Between&#39; operator | [optional]
 **billing_currency_code_not_equal** | **string**| Filter on BIL-CUR using &#39;NotEqual&#39; operator | [optional]
 **billing_currency_code_less** | **string**| Filter on BIL-CUR using &#39;Less&#39; operator | [optional]
 **billing_currency_code_less_or_equal** | **string**| Filter on BIL-CUR using &#39;LessOrEqual&#39; operator | [optional]
 **billing_currency_code_greater** | **string**| Filter on BIL-CUR using &#39;Greater&#39; operator | [optional]
 **billing_currency_code_greater_or_equal** | **string**| Filter on BIL-CUR using &#39;GreaterOrEqual&#39; operator | [optional]
 **billing_currency_code_is_null** | **string**| Filter on BIL-CUR using &#39;IsNull&#39; operator | [optional]
 **billing_currency_code_is_not_null** | **string**| Filter on BIL-CUR using &#39;IsNotNull&#39; operator | [optional]
 **billing_currency_code_like** | **string**| Filter on BIL-CUR using &#39;Like&#39; operator | [optional]
 **billing_currency_code_not_like** | **string**| Filter on BIL-CUR using &#39;NotLike&#39; operator | [optional]
 **billing_currency_code_contains** | **string**| Filter on BIL-CUR using &#39;Contains&#39; operator | [optional]
 **billing_currency_code_not_contains** | **string**| Filter on BIL-CUR using &#39;NotContains&#39; operator | [optional]
 **billing_currency_code_starts_with** | **string**| Filter on BIL-CUR using &#39;StartsWith&#39; operator | [optional]
 **billing_currency_code_not_starts_with** | **string**| Filter on BIL-CUR using &#39;NotStartsWith&#39; operator | [optional]
 **billing_currency_code_ends_with** | **string**| Filter on BIL-CUR using &#39;EndsWith&#39; operator | [optional]
 **billing_currency_code_not_ends_with** | **string**| Filter on BIL-CUR using &#39;NotEndsWith&#39; operator | [optional]
 **billing_currency_code_in** | **string**| Filter on BIL-CUR using &#39;In&#39; operator | [optional]
 **billing_currency_code_between** | **string**| Filter on BIL-CUR using &#39;Between&#39; operator | [optional]
 **bill_to_address_code_not_equal** | **string**| Filter on ADR-CDE using &#39;NotEqual&#39; operator | [optional]
 **bill_to_address_code_less** | **string**| Filter on ADR-CDE using &#39;Less&#39; operator | [optional]
 **bill_to_address_code_less_or_equal** | **string**| Filter on ADR-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **bill_to_address_code_greater** | **string**| Filter on ADR-CDE using &#39;Greater&#39; operator | [optional]
 **bill_to_address_code_greater_or_equal** | **string**| Filter on ADR-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **bill_to_address_code_is_null** | **string**| Filter on ADR-CDE using &#39;IsNull&#39; operator | [optional]
 **bill_to_address_code_is_not_null** | **string**| Filter on ADR-CDE using &#39;IsNotNull&#39; operator | [optional]
 **bill_to_address_code_like** | **string**| Filter on ADR-CDE using &#39;Like&#39; operator | [optional]
 **bill_to_address_code_not_like** | **string**| Filter on ADR-CDE using &#39;NotLike&#39; operator | [optional]
 **bill_to_address_code_contains** | **string**| Filter on ADR-CDE using &#39;Contains&#39; operator | [optional]
 **bill_to_address_code_not_contains** | **string**| Filter on ADR-CDE using &#39;NotContains&#39; operator | [optional]
 **bill_to_address_code_starts_with** | **string**| Filter on ADR-CDE using &#39;StartsWith&#39; operator | [optional]
 **bill_to_address_code_not_starts_with** | **string**| Filter on ADR-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **bill_to_address_code_ends_with** | **string**| Filter on ADR-CDE using &#39;EndsWith&#39; operator | [optional]
 **bill_to_address_code_not_ends_with** | **string**| Filter on ADR-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **bill_to_address_code_in** | **string**| Filter on ADR-CDE using &#39;In&#39; operator | [optional]
 **bill_to_address_code_between** | **string**| Filter on ADR-CDE using &#39;Between&#39; operator | [optional]
 **default_ship_to_address_code_not_equal** | **string**| Filter on SHP-ADR using &#39;NotEqual&#39; operator | [optional]
 **default_ship_to_address_code_less** | **string**| Filter on SHP-ADR using &#39;Less&#39; operator | [optional]
 **default_ship_to_address_code_less_or_equal** | **string**| Filter on SHP-ADR using &#39;LessOrEqual&#39; operator | [optional]
 **default_ship_to_address_code_greater** | **string**| Filter on SHP-ADR using &#39;Greater&#39; operator | [optional]
 **default_ship_to_address_code_greater_or_equal** | **string**| Filter on SHP-ADR using &#39;GreaterOrEqual&#39; operator | [optional]
 **default_ship_to_address_code_is_null** | **string**| Filter on SHP-ADR using &#39;IsNull&#39; operator | [optional]
 **default_ship_to_address_code_is_not_null** | **string**| Filter on SHP-ADR using &#39;IsNotNull&#39; operator | [optional]
 **default_ship_to_address_code_like** | **string**| Filter on SHP-ADR using &#39;Like&#39; operator | [optional]
 **default_ship_to_address_code_not_like** | **string**| Filter on SHP-ADR using &#39;NotLike&#39; operator | [optional]
 **default_ship_to_address_code_contains** | **string**| Filter on SHP-ADR using &#39;Contains&#39; operator | [optional]
 **default_ship_to_address_code_not_contains** | **string**| Filter on SHP-ADR using &#39;NotContains&#39; operator | [optional]
 **default_ship_to_address_code_starts_with** | **string**| Filter on SHP-ADR using &#39;StartsWith&#39; operator | [optional]
 **default_ship_to_address_code_not_starts_with** | **string**| Filter on SHP-ADR using &#39;NotStartsWith&#39; operator | [optional]
 **default_ship_to_address_code_ends_with** | **string**| Filter on SHP-ADR using &#39;EndsWith&#39; operator | [optional]
 **default_ship_to_address_code_not_ends_with** | **string**| Filter on SHP-ADR using &#39;NotEndsWith&#39; operator | [optional]
 **default_ship_to_address_code_in** | **string**| Filter on SHP-ADR using &#39;In&#39; operator | [optional]
 **default_ship_to_address_code_between** | **string**| Filter on SHP-ADR using &#39;Between&#39; operator | [optional]
 **promotion_code_not_equal** | **string**| Filter on PMO-CDE using &#39;NotEqual&#39; operator | [optional]
 **promotion_code_less** | **string**| Filter on PMO-CDE using &#39;Less&#39; operator | [optional]
 **promotion_code_less_or_equal** | **string**| Filter on PMO-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **promotion_code_greater** | **string**| Filter on PMO-CDE using &#39;Greater&#39; operator | [optional]
 **promotion_code_greater_or_equal** | **string**| Filter on PMO-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **promotion_code_is_null** | **string**| Filter on PMO-CDE using &#39;IsNull&#39; operator | [optional]
 **promotion_code_is_not_null** | **string**| Filter on PMO-CDE using &#39;IsNotNull&#39; operator | [optional]
 **promotion_code_like** | **string**| Filter on PMO-CDE using &#39;Like&#39; operator | [optional]
 **promotion_code_not_like** | **string**| Filter on PMO-CDE using &#39;NotLike&#39; operator | [optional]
 **promotion_code_contains** | **string**| Filter on PMO-CDE using &#39;Contains&#39; operator | [optional]
 **promotion_code_not_contains** | **string**| Filter on PMO-CDE using &#39;NotContains&#39; operator | [optional]
 **promotion_code_starts_with** | **string**| Filter on PMO-CDE using &#39;StartsWith&#39; operator | [optional]
 **promotion_code_not_starts_with** | **string**| Filter on PMO-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **promotion_code_ends_with** | **string**| Filter on PMO-CDE using &#39;EndsWith&#39; operator | [optional]
 **promotion_code_not_ends_with** | **string**| Filter on PMO-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **promotion_code_in** | **string**| Filter on PMO-CDE using &#39;In&#39; operator | [optional]
 **promotion_code_between** | **string**| Filter on PMO-CDE using &#39;Between&#39; operator | [optional]
 **is_free_shipping_not_equal** | **string**| Filter on SHP-EXCL using &#39;NotEqual&#39; operator | [optional]
 **is_free_shipping_less** | **string**| Filter on SHP-EXCL using &#39;Less&#39; operator | [optional]
 **is_free_shipping_less_or_equal** | **string**| Filter on SHP-EXCL using &#39;LessOrEqual&#39; operator | [optional]
 **is_free_shipping_greater** | **string**| Filter on SHP-EXCL using &#39;Greater&#39; operator | [optional]
 **is_free_shipping_greater_or_equal** | **string**| Filter on SHP-EXCL using &#39;GreaterOrEqual&#39; operator | [optional]
 **is_free_shipping_is_null** | **string**| Filter on SHP-EXCL using &#39;IsNull&#39; operator | [optional]
 **is_free_shipping_is_not_null** | **string**| Filter on SHP-EXCL using &#39;IsNotNull&#39; operator | [optional]
 **is_free_shipping_like** | **string**| Filter on SHP-EXCL using &#39;Like&#39; operator | [optional]
 **is_free_shipping_not_like** | **string**| Filter on SHP-EXCL using &#39;NotLike&#39; operator | [optional]
 **is_free_shipping_contains** | **string**| Filter on SHP-EXCL using &#39;Contains&#39; operator | [optional]
 **is_free_shipping_not_contains** | **string**| Filter on SHP-EXCL using &#39;NotContains&#39; operator | [optional]
 **is_free_shipping_starts_with** | **string**| Filter on SHP-EXCL using &#39;StartsWith&#39; operator | [optional]
 **is_free_shipping_not_starts_with** | **string**| Filter on SHP-EXCL using &#39;NotStartsWith&#39; operator | [optional]
 **is_free_shipping_ends_with** | **string**| Filter on SHP-EXCL using &#39;EndsWith&#39; operator | [optional]
 **is_free_shipping_not_ends_with** | **string**| Filter on SHP-EXCL using &#39;NotEndsWith&#39; operator | [optional]
 **is_free_shipping_in** | **string**| Filter on SHP-EXCL using &#39;In&#39; operator | [optional]
 **is_free_shipping_between** | **string**| Filter on SHP-EXCL using &#39;Between&#39; operator | [optional]
 **discount_percent_not_equal** | **string**| Filter on DISC-PCT using &#39;NotEqual&#39; operator | [optional]
 **discount_percent_less** | **string**| Filter on DISC-PCT using &#39;Less&#39; operator | [optional]
 **discount_percent_less_or_equal** | **string**| Filter on DISC-PCT using &#39;LessOrEqual&#39; operator | [optional]
 **discount_percent_greater** | **string**| Filter on DISC-PCT using &#39;Greater&#39; operator | [optional]
 **discount_percent_greater_or_equal** | **string**| Filter on DISC-PCT using &#39;GreaterOrEqual&#39; operator | [optional]
 **discount_percent_is_null** | **string**| Filter on DISC-PCT using &#39;IsNull&#39; operator | [optional]
 **discount_percent_is_not_null** | **string**| Filter on DISC-PCT using &#39;IsNotNull&#39; operator | [optional]
 **discount_percent_like** | **string**| Filter on DISC-PCT using &#39;Like&#39; operator | [optional]
 **discount_percent_not_like** | **string**| Filter on DISC-PCT using &#39;NotLike&#39; operator | [optional]
 **discount_percent_contains** | **string**| Filter on DISC-PCT using &#39;Contains&#39; operator | [optional]
 **discount_percent_not_contains** | **string**| Filter on DISC-PCT using &#39;NotContains&#39; operator | [optional]
 **discount_percent_starts_with** | **string**| Filter on DISC-PCT using &#39;StartsWith&#39; operator | [optional]
 **discount_percent_not_starts_with** | **string**| Filter on DISC-PCT using &#39;NotStartsWith&#39; operator | [optional]
 **discount_percent_ends_with** | **string**| Filter on DISC-PCT using &#39;EndsWith&#39; operator | [optional]
 **discount_percent_not_ends_with** | **string**| Filter on DISC-PCT using &#39;NotEndsWith&#39; operator | [optional]
 **discount_percent_in** | **string**| Filter on DISC-PCT using &#39;In&#39; operator | [optional]
 **discount_percent_between** | **string**| Filter on DISC-PCT using &#39;Between&#39; operator | [optional]
 **sales_rep_code_not_equal** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;NotEqual&#39; operator | [optional]
 **sales_rep_code_less** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;Less&#39; operator | [optional]
 **sales_rep_code_less_or_equal** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **sales_rep_code_greater** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;Greater&#39; operator | [optional]
 **sales_rep_code_greater_or_equal** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **sales_rep_code_is_null** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;IsNull&#39; operator | [optional]
 **sales_rep_code_is_not_null** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;IsNotNull&#39; operator | [optional]
 **sales_rep_code_like** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;Like&#39; operator | [optional]
 **sales_rep_code_not_like** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;NotLike&#39; operator | [optional]
 **sales_rep_code_contains** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;Contains&#39; operator | [optional]
 **sales_rep_code_not_contains** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;NotContains&#39; operator | [optional]
 **sales_rep_code_starts_with** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;StartsWith&#39; operator | [optional]
 **sales_rep_code_not_starts_with** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **sales_rep_code_ends_with** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;EndsWith&#39; operator | [optional]
 **sales_rep_code_not_ends_with** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **sales_rep_code_in** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;In&#39; operator | [optional]
 **sales_rep_code_between** | **string**| Filter on SLM-NBR/SLM-NUM using &#39;Between&#39; operator | [optional]
 **purchase_order_number_not_equal** | **string**| Filter on PO-NUM using &#39;NotEqual&#39; operator | [optional]
 **purchase_order_number_less** | **string**| Filter on PO-NUM using &#39;Less&#39; operator | [optional]
 **purchase_order_number_less_or_equal** | **string**| Filter on PO-NUM using &#39;LessOrEqual&#39; operator | [optional]
 **purchase_order_number_greater** | **string**| Filter on PO-NUM using &#39;Greater&#39; operator | [optional]
 **purchase_order_number_greater_or_equal** | **string**| Filter on PO-NUM using &#39;GreaterOrEqual&#39; operator | [optional]
 **purchase_order_number_is_null** | **string**| Filter on PO-NUM using &#39;IsNull&#39; operator | [optional]
 **purchase_order_number_is_not_null** | **string**| Filter on PO-NUM using &#39;IsNotNull&#39; operator | [optional]
 **purchase_order_number_like** | **string**| Filter on PO-NUM using &#39;Like&#39; operator | [optional]
 **purchase_order_number_not_like** | **string**| Filter on PO-NUM using &#39;NotLike&#39; operator | [optional]
 **purchase_order_number_contains** | **string**| Filter on PO-NUM using &#39;Contains&#39; operator | [optional]
 **purchase_order_number_not_contains** | **string**| Filter on PO-NUM using &#39;NotContains&#39; operator | [optional]
 **purchase_order_number_starts_with** | **string**| Filter on PO-NUM using &#39;StartsWith&#39; operator | [optional]
 **purchase_order_number_not_starts_with** | **string**| Filter on PO-NUM using &#39;NotStartsWith&#39; operator | [optional]
 **purchase_order_number_ends_with** | **string**| Filter on PO-NUM using &#39;EndsWith&#39; operator | [optional]
 **purchase_order_number_not_ends_with** | **string**| Filter on PO-NUM using &#39;NotEndsWith&#39; operator | [optional]
 **purchase_order_number_in** | **string**| Filter on PO-NUM using &#39;In&#39; operator | [optional]
 **purchase_order_number_between** | **string**| Filter on PO-NUM using &#39;Between&#39; operator | [optional]
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
 **order_type_not_equal** | **string**| Filter on ORD-TYPE using &#39;NotEqual&#39; operator | [optional]
 **order_type_less** | **string**| Filter on ORD-TYPE using &#39;Less&#39; operator | [optional]
 **order_type_less_or_equal** | **string**| Filter on ORD-TYPE using &#39;LessOrEqual&#39; operator | [optional]
 **order_type_greater** | **string**| Filter on ORD-TYPE using &#39;Greater&#39; operator | [optional]
 **order_type_greater_or_equal** | **string**| Filter on ORD-TYPE using &#39;GreaterOrEqual&#39; operator | [optional]
 **order_type_is_null** | **string**| Filter on ORD-TYPE using &#39;IsNull&#39; operator | [optional]
 **order_type_is_not_null** | **string**| Filter on ORD-TYPE using &#39;IsNotNull&#39; operator | [optional]
 **order_type_like** | **string**| Filter on ORD-TYPE using &#39;Like&#39; operator | [optional]
 **order_type_not_like** | **string**| Filter on ORD-TYPE using &#39;NotLike&#39; operator | [optional]
 **order_type_contains** | **string**| Filter on ORD-TYPE using &#39;Contains&#39; operator | [optional]
 **order_type_not_contains** | **string**| Filter on ORD-TYPE using &#39;NotContains&#39; operator | [optional]
 **order_type_starts_with** | **string**| Filter on ORD-TYPE using &#39;StartsWith&#39; operator | [optional]
 **order_type_not_starts_with** | **string**| Filter on ORD-TYPE using &#39;NotStartsWith&#39; operator | [optional]
 **order_type_ends_with** | **string**| Filter on ORD-TYPE using &#39;EndsWith&#39; operator | [optional]
 **order_type_not_ends_with** | **string**| Filter on ORD-TYPE using &#39;NotEndsWith&#39; operator | [optional]
 **order_type_in** | **string**| Filter on ORD-TYPE using &#39;In&#39; operator | [optional]
 **order_type_between** | **string**| Filter on ORD-TYPE using &#39;Between&#39; operator | [optional]
 **operation_code_not_equal** | **string**| Filter on OPR-CDE using &#39;NotEqual&#39; operator | [optional]
 **operation_code_less** | **string**| Filter on OPR-CDE using &#39;Less&#39; operator | [optional]
 **operation_code_less_or_equal** | **string**| Filter on OPR-CDE using &#39;LessOrEqual&#39; operator | [optional]
 **operation_code_greater** | **string**| Filter on OPR-CDE using &#39;Greater&#39; operator | [optional]
 **operation_code_greater_or_equal** | **string**| Filter on OPR-CDE using &#39;GreaterOrEqual&#39; operator | [optional]
 **operation_code_is_null** | **string**| Filter on OPR-CDE using &#39;IsNull&#39; operator | [optional]
 **operation_code_is_not_null** | **string**| Filter on OPR-CDE using &#39;IsNotNull&#39; operator | [optional]
 **operation_code_like** | **string**| Filter on OPR-CDE using &#39;Like&#39; operator | [optional]
 **operation_code_not_like** | **string**| Filter on OPR-CDE using &#39;NotLike&#39; operator | [optional]
 **operation_code_contains** | **string**| Filter on OPR-CDE using &#39;Contains&#39; operator | [optional]
 **operation_code_not_contains** | **string**| Filter on OPR-CDE using &#39;NotContains&#39; operator | [optional]
 **operation_code_starts_with** | **string**| Filter on OPR-CDE using &#39;StartsWith&#39; operator | [optional]
 **operation_code_not_starts_with** | **string**| Filter on OPR-CDE using &#39;NotStartsWith&#39; operator | [optional]
 **operation_code_ends_with** | **string**| Filter on OPR-CDE using &#39;EndsWith&#39; operator | [optional]
 **operation_code_not_ends_with** | **string**| Filter on OPR-CDE using &#39;NotEndsWith&#39; operator | [optional]
 **operation_code_in** | **string**| Filter on OPR-CDE using &#39;In&#39; operator | [optional]
 **operation_code_between** | **string**| Filter on OPR-CDE using &#39;Between&#39; operator | [optional]
 **control_group_not_equal** | **string**| Filter on CTG-ID using &#39;NotEqual&#39; operator | [optional]
 **control_group_less** | **string**| Filter on CTG-ID using &#39;Less&#39; operator | [optional]
 **control_group_less_or_equal** | **string**| Filter on CTG-ID using &#39;LessOrEqual&#39; operator | [optional]
 **control_group_greater** | **string**| Filter on CTG-ID using &#39;Greater&#39; operator | [optional]
 **control_group_greater_or_equal** | **string**| Filter on CTG-ID using &#39;GreaterOrEqual&#39; operator | [optional]
 **control_group_is_null** | **string**| Filter on CTG-ID using &#39;IsNull&#39; operator | [optional]
 **control_group_is_not_null** | **string**| Filter on CTG-ID using &#39;IsNotNull&#39; operator | [optional]
 **control_group_like** | **string**| Filter on CTG-ID using &#39;Like&#39; operator | [optional]
 **control_group_not_like** | **string**| Filter on CTG-ID using &#39;NotLike&#39; operator | [optional]
 **control_group_contains** | **string**| Filter on CTG-ID using &#39;Contains&#39; operator | [optional]
 **control_group_not_contains** | **string**| Filter on CTG-ID using &#39;NotContains&#39; operator | [optional]
 **control_group_starts_with** | **string**| Filter on CTG-ID using &#39;StartsWith&#39; operator | [optional]
 **control_group_not_starts_with** | **string**| Filter on CTG-ID using &#39;NotStartsWith&#39; operator | [optional]
 **control_group_ends_with** | **string**| Filter on CTG-ID using &#39;EndsWith&#39; operator | [optional]
 **control_group_not_ends_with** | **string**| Filter on CTG-ID using &#39;NotEndsWith&#39; operator | [optional]
 **control_group_in** | **string**| Filter on CTG-ID using &#39;In&#39; operator | [optional]
 **control_group_between** | **string**| Filter on CTG-ID using &#39;Between&#39; operator | [optional]
 **is_arp_only_not_equal** | **string**| Filter on ARP-FLG using &#39;NotEqual&#39; operator | [optional]
 **is_arp_only_less** | **string**| Filter on ARP-FLG using &#39;Less&#39; operator | [optional]
 **is_arp_only_less_or_equal** | **string**| Filter on ARP-FLG using &#39;LessOrEqual&#39; operator | [optional]
 **is_arp_only_greater** | **string**| Filter on ARP-FLG using &#39;Greater&#39; operator | [optional]
 **is_arp_only_greater_or_equal** | **string**| Filter on ARP-FLG using &#39;GreaterOrEqual&#39; operator | [optional]
 **is_arp_only_is_null** | **string**| Filter on ARP-FLG using &#39;IsNull&#39; operator | [optional]
 **is_arp_only_is_not_null** | **string**| Filter on ARP-FLG using &#39;IsNotNull&#39; operator | [optional]
 **is_arp_only_like** | **string**| Filter on ARP-FLG using &#39;Like&#39; operator | [optional]
 **is_arp_only_not_like** | **string**| Filter on ARP-FLG using &#39;NotLike&#39; operator | [optional]
 **is_arp_only_contains** | **string**| Filter on ARP-FLG using &#39;Contains&#39; operator | [optional]
 **is_arp_only_not_contains** | **string**| Filter on ARP-FLG using &#39;NotContains&#39; operator | [optional]
 **is_arp_only_starts_with** | **string**| Filter on ARP-FLG using &#39;StartsWith&#39; operator | [optional]
 **is_arp_only_not_starts_with** | **string**| Filter on ARP-FLG using &#39;NotStartsWith&#39; operator | [optional]
 **is_arp_only_ends_with** | **string**| Filter on ARP-FLG using &#39;EndsWith&#39; operator | [optional]
 **is_arp_only_not_ends_with** | **string**| Filter on ARP-FLG using &#39;NotEndsWith&#39; operator | [optional]
 **is_arp_only_in** | **string**| Filter on ARP-FLG using &#39;In&#39; operator | [optional]
 **is_arp_only_between** | **string**| Filter on ARP-FLG using &#39;Between&#39; operator | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountOrderSummary**](../Model/SearchResultWithCountOrderSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSummarySearchOrders**
> \Swagger\Client\Model\SearchResultWithCountOrderSummary orderSummarySearchOrders($customer_number, $filter_search, $filter_begin_date, $filter_end_date, $filter_exclude_backorder_fufillment, $filter_exclude_premium_fill, $filter_membership_organization, $filter_owning_organizations, $filter_is_posted, $filter_has_product_order_line, $filter_is_in_status_that_allows_modifications, $pager_skip, $pager_take)

Get all past orders for a given customer, that match the searchAgument. The result of those orders can   be limited to N at a time. The list starts with the newest orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | The Advantage customer number of the bill-to customer on the orders.
$filter_search = "filter_search_example"; // string | The generic search argument. (Typically from a search text box). This term will be compared to several   fields on the order.
$filter_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The beginning date. Only orders placed after this date will be returned.
$filter_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date. Only orders placed before this date will be returned.
$filter_exclude_backorder_fufillment = true; // bool | Exclude backorder-fulfillment orders
$filter_exclude_premium_fill = true; // bool | Exclude premium-fill orders
$filter_membership_organization = "filter_membership_organization_example"; // string | Membership organization to filter by
$filter_owning_organizations = array("filter_owning_organizations_example"); // string[] | Owning organizations to filter by
$filter_is_posted = true; // bool | Order's posting status. Filter orders based on whether or not  the order is posted.
$filter_has_product_order_line = true; // bool | Filter orders based on whether or not the order has   a product order line.
$filter_is_in_status_that_allows_modifications = true; // bool | Filter orders based on whether or not the order  is in a status that allows further modification
$pager_skip = 56; // int | The number of records to skip.
$pager_take = 56; // int | The number of records to return.

try {
    $result = $apiInstance->orderSummarySearchOrders($customer_number, $filter_search, $filter_begin_date, $filter_end_date, $filter_exclude_backorder_fufillment, $filter_exclude_premium_fill, $filter_membership_organization, $filter_owning_organizations, $filter_is_posted, $filter_has_product_order_line, $filter_is_in_status_that_allows_modifications, $pager_skip, $pager_take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->orderSummarySearchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The Advantage customer number of the bill-to customer on the orders. |
 **filter_search** | **string**| The generic search argument. (Typically from a search text box). This term will be compared to several   fields on the order. | [optional]
 **filter_begin_date** | **\DateTime**| The beginning date. Only orders placed after this date will be returned. | [optional]
 **filter_end_date** | **\DateTime**| The end date. Only orders placed before this date will be returned. | [optional]
 **filter_exclude_backorder_fufillment** | **bool**| Exclude backorder-fulfillment orders | [optional]
 **filter_exclude_premium_fill** | **bool**| Exclude premium-fill orders | [optional]
 **filter_membership_organization** | **string**| Membership organization to filter by | [optional]
 **filter_owning_organizations** | [**string[]**](../Model/string.md)| Owning organizations to filter by | [optional]
 **filter_is_posted** | **bool**| Order&#39;s posting status. Filter orders based on whether or not  the order is posted. | [optional]
 **filter_has_product_order_line** | **bool**| Filter orders based on whether or not the order has   a product order line. | [optional]
 **filter_is_in_status_that_allows_modifications** | **bool**| Filter orders based on whether or not the order  is in a status that allows further modification | [optional]
 **pager_skip** | **int**| The number of records to skip. | [optional]
 **pager_take** | **int**| The number of records to return. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResultWithCountOrderSummary**](../Model/SearchResultWithCountOrderSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

