# UserRating

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**answer** | [**\OpenAPI\Client\Model\Answer**](Answer.md) |  | [optional] 
**buyer** | [**\OpenAPI\Client\Model\User**](User.md) |  | 
**comment** | **string** | Buyer&#39;s text comment | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation datetime in ISO 8601 format | 
**excluded_from_average_rates** | **bool** | If true this rating was not included in calculating average user rates | [optional] 
**id** | **string** | Rating id | 
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional] 
**rates** | [**\OpenAPI\Client\Model\Rates**](Rates.md) |  | [optional] 
**recommended** | **bool** | Whether buyer recommends the order | 
**removal** | [**\OpenAPI\Client\Model\Removal**](Removal.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


