# ParametersUsedForPreviewPriceNoteThatQuantityOrSoldQuantityHaveToBeSetForOfferTypeAdvertisement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | 
**condition** | **string** | Offer condition, if is new, used or other. | [optional] 
**duration** | **string** |  | [optional] 
**has_any_quantity** | **bool** |  | [optional] 
**number_of_big_photos** | **int** | If set, minimum value 0 | [optional] 
**number_of_photos** | **int** | If set, minimum value 0 | [optional] 
**quantity** | **int** | Quantity of items to be sold. If set, minimum value 1 | [optional] 
**shop** | **bool** | Deprecated. Value &#39;true&#39; sets the &#39;offer.type&#39; field to &#39;shop&#39;, value &#39;false&#39; to &#39;offer&#39;. This field is ignored if &#39;offer.type&#39; field is set. | [optional] 
**sold_quantity** | **int** | Quantity of sold items. Relates to commission success fee. If set, minimum value 1 | [optional] 
**type** | **string** | Offer type. &#39;type&#39; or &#39;shop&#39; fields must be provided. Takes precedence over &#39;shop&#39; field | [optional] 
**unit_price** | **float** |  | 
**bold** | **bool** |  | [optional] 
**highlight** | **bool** |  | [optional] 
**department_page** | **bool** |  | [optional] 
**emphasized** | **bool** |  | [optional] 
**emphasized_highlight_bold_package** | **bool** |  | [optional] 
**multi_variant** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


