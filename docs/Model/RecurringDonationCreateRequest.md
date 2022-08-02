# RecurringDonationCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_to_customer_number** | **string** | The bill-to customer number for the recurring donation | [optional] 
**ship_to_customer_number** | **string** | The ship-to customer for the recurring donation. | [optional] 
**recurring_contribution_amount** | **double** | The net contribution amount for the recurring donation. | [optional] 
**promotion_code** | **string** | The promotion code for the recurring donation. | [optional] 
**billing_currency_code** | **string** | The billing currency code for the recurring donation. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date for the recurring donation. | [optional] 
**schedule** | [**\Swagger\Client\Model\RecurringDonationSchedule**](RecurringDonationSchedule.md) | Info pertaining to the scheduling of a recurring donation. | [optional] 
**next_contribution** | [**\DateTime**](\DateTime.md) | The Next Contribution for the recurring donation. | [optional] 
**expires** | [**\DateTime**](\DateTime.md) | The expire date for the recurring donation. Donations will be collected up to and including this date. | [optional] 
**fund_item_number** | **string** | The fund item number for the recurring donation. | [optional] 
**maximum_contribution** | **double** | The maximum contribution for the recurring donation. | [optional] 
**premium** | [**\Swagger\Client\Model\RecurringDonationPremium**](RecurringDonationPremium.md) | Info pertaining to premiums triggered for the recurring donation. | [optional] 
**payment** | [**\Swagger\Client\Model\RecurringDonationPaymentRequest**](RecurringDonationPaymentRequest.md) | Payment information for a recurring donation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


