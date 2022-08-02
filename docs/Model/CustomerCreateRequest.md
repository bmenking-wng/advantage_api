# CustomerCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Swagger\Client\Model\CustomerAddressUpdateRequest**](CustomerAddressUpdateRequest.md) | The information needed for the customer&#39;s address. | [optional] 
**address_standardization_setting** | **string** | The standardization settings for validating the address. | [optional] 
**promote** | **string** | Specifies whether or not the customer has opted to receive promotions.  If this isn&#39;t set, a Y/N value will be extrapolated based on the Address.PromoteByX settings. | [optional] 
**promote_by_partners** | **string** | Specifies whether or not the customer has opted to receive promotions from third-parties. | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | The customer&#39;s date of birth | [optional] 
**sex_code** | **string** | The customer&#39;s gender | [optional] 
**customer_type** | **string** | The type code for the customer | [optional] 
**change_source** | **string** | The system that last changed the customer record | [optional] 
**demographics** | [**\Swagger\Client\Model\DemographicValue[]**](DemographicValue.md) | Customer demographic values (from the CUS-DMO1, CUS-DMO2, CUS-DMO3 partitions) to store on the  new customer record. | [optional] 
**block_duplicate_match_level_code** | **string** | You can optionally block the addition of a new customer if a duplicate customer already exists.  To enable this check, specify a match level for the duplicate customer search.  If a duplicate  customer is found using this check then no customer is added and no customer information is returned. | [optional] 
**force_create** | **bool** | In addition to the duplicate blocking feature, the Advantage API includes a set of system options  that can enable additional duplicate handling.  For example, the options can be configured such that  duplicate customers are prevented by converting a customer creation request into an update of the  existing (duplicate) customer.  Use the ForceCreate flag to override the duplicate handling settings  and always create new customers. | [optional] 
**is_account** | **bool** | Is this an account customer? | [optional] 
**block_duplicate_match_with_activity** | **bool** | You can optionally block the addition of a new customer if a duplicate customer already exists.  To enable this check, specify a BlockDuplicateMatchLevelCode.  However, in some cases we may want   to require that a customer doesn&#39;t \&quot;already exist\&quot; unless they actually have activity (orders or authentication).   Without activity, these customer records are possibly just residue from simple email list participation.    This option works in conjunction with BlockDuplicateMatchLevelCode and says to only consider the existing customer \&quot;found\&quot;   if the they have activity. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


