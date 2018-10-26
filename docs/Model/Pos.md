# Pos

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service. | [optional] 
**external_id** | **string** | ID from external client system. | [optional] 
**name** | **string** |  | 
**seller** | [**\OpenAPI\Client\Model\Seller**](Seller.md) |  | [optional] 
**type** | **string** | Indicates point type. The only valid value so far is PICKUP_POINT. | 
**address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | 
**phone_number** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**open_hours** | [**\OpenAPI\Client\Model\OpenHour[]**](OpenHour.md) | Possible empty list of opening hours. | 
**service_time** | **string** | Delivery time / Time period for receipt. Date format ISO 8601 e.g. &#39;PT24H&#39; | [optional] 
**payments** | [**\OpenAPI\Client\Model\Payment[]**](Payment.md) | An empty list of payment types is available. | [optional] 
**confirmation_type** | **string** | Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required. | 
**status** | **string** | Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted. | 
**created_at** | **string** | Creation date. Date format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ | [optional] 
**updated_at** | **string** | Modification date. Date format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


