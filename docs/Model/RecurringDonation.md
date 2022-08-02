# RecurringDonation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recurring_donation_id** | **string** | The recurring donation Id. | [optional] 
**bill_to_customer_number** | **string** | The bill-to customer number on the recurring donation. | [optional] 
**ship_to_customer_number** | **string** | The ship-to customer for the recurring donation. | [optional] 
**recurring_contribution_amount** | **double** | The net contribution amount for the recurring donation. | [optional] 
**promotion_code** | **string** | The promotion code on the recurring donation. | [optional] 
**billing_currency_code** | **string** | The billing currency code on the recurring donation. | [optional] 
**billing_organization_code** | **string** | The billing organization code on the recurring donation. | [optional] 
**donation_status** | **string** | The donation status for the recurring donation. | [optional] 
**started** | [**\DateTime**](\DateTime.md) | The start date is the date that the first payment was processed for this recurring donation. | [optional] 
**last_charge** | [**\DateTime**](\DateTime.md) | The last charge for the recurring donation. | [optional] 
**number_of_charges** | **int** | The number of charges for the recurring donation. | [optional] 
**schedule** | [**\Swagger\Client\Model\RecurringDonationSchedule**](RecurringDonationSchedule.md) | Info pertaining to the scheduling of a recurring donation. | [optional] 
**next_contribution** | [**\DateTime**](\DateTime.md) | The next contribution for the recurring donation. | [optional] 
**expires** | [**\DateTime**](\DateTime.md) | The expire date for the recurring donation. Donations will be collected up to and including this date. | [optional] 
**fund_item_number** | **string** | The fund item number for the recurring donation. | [optional] 
**maximum_contribution** | **double** | The maximum contribution for the recurring donation. | [optional] 
**contribution_to_date** | **double** | The contribution to-date for the recurring donation. The sum of the contributions made to-date. | [optional] 
**premium** | [**\Swagger\Client\Model\RecurringDonationPremium**](RecurringDonationPremium.md) | Info pertaining to premiums triggered for the recurring donation. | [optional] 
**added_by** | **string** | The user responsible for adding the recurring donation. | [optional] 
**added_on** | [**\DateTime**](\DateTime.md) | The date the recurring donation was added. | [optional] 
**payment_settings** | [**\Swagger\Client\Model\RecurringDonationPaymentSettings**](RecurringDonationPaymentSettings.md) | Info pertaining to payments associated with the recurring donation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


