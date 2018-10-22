# ListingResponseFiltersValues

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the option; for NUMERIC parameters - word indicating start or end of range (ie. *from*, *to*). | [optional] 
**value** | **string** | Filter value. Should be used as query parameter value in request. This can be: for MULTI and SINGLE parameters - value identifier (ie. KUJAWSKO_POMORSKIE option in location.province filter); for other types - value entered by user. | [optional] 
**id_suffix** | **string** | Suffix used as a second part of query parameter key to be used in request (the first part is filter id). Applicable for NUMERIC values only. | [optional] 
**count** | **int** | Number of search results matching this filter value. | [optional] 
**selected** | **bool** | Indicates whether this filter value is used in current request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


