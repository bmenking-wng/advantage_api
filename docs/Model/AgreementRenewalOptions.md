# AgreementRenewalOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**promotion_code** | **string** | Promotion code | [optional] 
**promotion_choice_code** | **string** | Promotion choice | [optional] 
**bill_to** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | Bill-to customer address, if changing for new term | [optional] 
**order_by** | [**\Swagger\Client\Model\CustomerAddressKey**](CustomerAddressKey.md) | Order-by customer, if changing for new term | [optional] 
**access_period_code** | **string** | Access service period code, if changing for new term | [optional] 
**agreement_type** | **string** | Agreement type | [optional] 
**purchase_order_number** | **string** | Customer purchase order number | [optional] 
**copy_points_and_parts** | **bool** | Copy forward the access points and participants from previous term? | [optional] 
**use_previous_term_discount** | **bool** | Should the previous term&#39;s discount(s) should be preserved? | [optional] 
**use_customer_discount** | **bool** | If not using previous term discount and a customer or customer type discount for the AMB service is defined,  should the customer or customer type discount be used? | [optional] 
**new_discount** | **double** | If not using the previous term&#39;s or customer&#39;s discount(s)  this discount will be used for all access points. | [optional] 
**update_with_promotion_defaults** | **bool** | Update the access points with the promotion choice defaults? | [optional] 
**use_previous_term_renewal_discount** | **bool** | Use the previous term&#39;s renewal discount | [optional] 
**copy_free_days** | **bool** | Copy forward free days | [optional] 
**copy_extension_days** | **bool** | Copy forward extension days | [optional] 
**copy_adjustment_days** | **bool** | Copy forward adjustment days | [optional] 
**copy_grace_days** | **bool** | Copy forward grace days | [optional] 
**autorenew_chain_id** | **string** | Auto-renewal chain ID, or blank if not in use | [optional] 
**autorenew_chain_sequence** | **int** | Auto-renewal chain sequence, or zero if not in use | [optional] 
**is_on_approval** | **bool** | true if on-approval | [optional] 
**agency_reference** | **string** | The reference number the agency uses to identify the ordered item | [optional] 
**master_agreement_id** | **string** | Master Agreement Id | [optional] 
**billing_currency** | **string** | The new billing currency to use on this renewal. Passing blank will  use the same billing currency off of the previous agreement. | [optional] 
**renewal_price_increase_percent** | **double** | Renewal Price Increase Percentage | [optional] 
**max_change_percentage** | **double** | Maximum Change Percentage on Renewal | [optional] 
**commit_order** | **bool** | Should the order be completed? | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


