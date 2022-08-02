# AvailableCreditPaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **double** | The amount of available credits to apply; zero to use all available credits.  The operation will fail if the given amount is not available. | [optional] 
**use_credits_first** | **bool** | Apply the available credits before the other payment methods?  The default is to apply available credits  first if an amount is given; last if the amount is zero. | [optional] 
**credits_to_apply** | [**\Swagger\Client\Model\CreditKey[]**](CreditKey.md) | List of available credits to apply | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


