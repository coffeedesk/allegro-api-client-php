# ListingResponseFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of the filter. Should be used as query parameter key, optionally followed by idSuffix from parameter value (only for NUMERIC filters). | [optional] 
**type** | **string** | MULTI - multiple choice filter, SINGLE - single select (dropdown) filter, NUMERIC - range of numeric values (search offers with value matching this range), NUMERIC_SINGLE - single numeric value (search offers with given value matching the range defined in offer), TEXT - filter allowing user to input any text | [optional] 
**name** | **string** | Name of the filter. | [optional] 
**values** | [**\OpenAPI\Client\Model\ListingResponseFiltersValues[]**](ListingResponseFiltersValues.md) | Available filter values. | [optional] 
**min_value** | **float** | Minimum valid value for filters of type NUMERIC. | [optional] 
**max_value** | **float** | Maximum valid value for filters of type NUMERIC. | [optional] 
**unit** | **string** | Unit of the NUMERIC/NUMERIC RANGE filter. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


