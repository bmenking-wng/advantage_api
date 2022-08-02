# CombinedOrderStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**combined_status_code** | **string** | The status of the order. Order status is determined by taking the last order status from   the original PRO, CIR, AMB, CEM orders (for combined orders).                The order status codes are, in order of processing:      C - closed to entry      P - processed/shipping      B - invoiced and back-ordered      F - invoiced and finished processing | [optional] 
**access_status_code** | **string** | The order status for AMB items on the original order (if any).  If there are multiple agreements, the status will be based on the agreement  with the \&quot;lowest\&quot; status: U - Not Released, W - Waiting, A - Released | [optional] 
**conference_status_code** | **string** | The order status for CEM items on the original order (if any).  See SYSKWV keyword CINV-PST for values. | [optional] 
**subscription_status_code** | **string** | Order status for CIR items on the original order (if any).  C - closed, P - posted, I - posted and invoiced | [optional] 
**product_status_code** | **string** | The order status for PRO items on the original order. | [optional] 
**product_status_name** | **string** | A description of the order status code | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


