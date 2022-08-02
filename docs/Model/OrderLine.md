# OrderLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_number** | **string** | The Advantage order number. | [optional] 
**line_number** | **int** | The line number of the order line within the order. | [optional] 
**item_number** | **string** | The item number, identifying which product is being ordered. | [optional] 
**product_type** | **string** | The product type of the order line (subscription, product, etc.). | [optional] 
**product_name** | **string** | The product title. If available, the full title is returned. Otherwise, the short title is returned. | [optional] 
**promotion_code** | **string** | The promotion code (sometimes referred to as key code). | [optional] 
**promotion_choice** | **string** | The promotion choice, indicating a set of default settings for an order line. | [optional] 
**ship_to** | [**\Swagger\Client\Model\CustomerAddressSummary**](CustomerAddressSummary.md) | Information pertaining to the ship-to customer. | [optional] 
**is_package_component** | **bool** | Is the order line a package component?  (Package component lines are added automatically when a   package header is added and the package is \&quot;exploded\&quot; into it&#39;s components.) | [optional] 
**is_association_component** | **bool** | Is the order line an association component?  (Association component lines are added automatically when an   association is added and the association is \&quot;exploded\&quot; into it&#39;s components.) | [optional] 
**is_package_header** | **bool** | Is the order line a package header? | [optional] 
**is_premium** | **bool** | Is the order line a premium?  Premiums are free items added to qualifying orders. | [optional] 
**quantity_ordered** | **int** | The quantity ordered for the current order line. For a subscribed product  the quantity ordered is the number of copies of each issue to receive. | [optional] 
**currency_code** | **string** | The currency code in which this item is to be billed. | [optional] 
**unit_price** | **double** | The price per quantity ordered. | [optional] 
**sales_amount** | **double** | The sales amount (i.e. unit price times quantity ordered) for the order line.  This sales amount includes (PRO) items that are not shipping (e.g. back-ordered)   but does not include lost sales. | [optional] 
**discount** | **double** | The discount amount,   which excludes any (PRO) items that are not shipping (e.g. back-ordered, lost sales, etc.). | [optional] 
**shipping_charges** | **double** | Gets the shipping/postage charges,   which excludes any (PRO) items that are not shipping (e.g. back-ordered, lost sales, etc.). | [optional] 
**tax** | **double** | The amount of tax,  which excludes any (PRO) items that are not shipping (e.g. back-ordered, lost sales, etc.). | [optional] 
**total_cost** | **double** | The total cost, including order-line discounts, taxes, shipping.  The total cost excludes any (PRO) items that are not shipping (e.g. back-ordered, lost sales, etc). | [optional] 
**shipping_charges_ordered** | **double** | The shipping/postage charges for the order line. | [optional] 
**discount_ordered** | **double** | The discount amount for the order line. | [optional] 
**tax_ordered** | **double** | The amount of tax for the order line. | [optional] 
**sales_amount_ordered** | **double** | The sales amount (i.e. unit price times quantity ordered) for the order line.   Includes product tax, if tax is included in price. | [optional] 
**sales_amount_shipped** | **double** | The sales amount of shipped items (i.e. unit price times quantity shipped) for the order line.   Includes product tax, if tax is included in price. | [optional] 
**total_cost_ordered** | **double** | The total cost, including order-line discounts, taxes, shipping. | [optional] 
**status** | **string** | The order line status. | [optional] 
**package_header_line_number** | **int** | The line number of the package header, if the order line is a package component. | [optional] 
**association_agreement_id** | **string** | The agreement Id of the association if par tof an association | [optional] 
**recurring_donation_frequency** | **int** | The number of months between recurring donation contributions. | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Demographic field values for the order line | [optional] 
**access** | [**\Swagger\Client\Model\AccessOrderLine**](AccessOrderLine.md) | Information about an AMB (agreement) order line. | [optional] 
**subscription** | [**\Swagger\Client\Model\SubscriptionOrderLine**](SubscriptionOrderLine.md) | Information for creating a CIR (subscription) order line. | [optional] 
**product** | [**\Swagger\Client\Model\ProductOrderLine**](ProductOrderLine.md) | Information for creating a PRO (product) order line. | [optional] 
**conference** | [**\Swagger\Client\Model\ConferenceOrderLine**](ConferenceOrderLine.md) | Information for creating a CEM (conference) order line. | [optional] 
**association** | [**\Swagger\Client\Model\AssociationOrderLine**](AssociationOrderLine.md) | Information about an AMM (association membership) order line. | [optional] 
**gift_message** | [**\Swagger\Client\Model\GiftMessage**](GiftMessage.md) | Gift message for the order line | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


