# OpenAPI\Client\OrderManagementApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findMapping**](OrderManagementApi.md#findMapping) | **GET** /order/line-item-id-mappings | [BETA] Find mapping for line item id
[**orderCheckoutFormsGet**](OrderManagementApi.md#orderCheckoutFormsGet) | **GET** /order/checkout-forms | [BETA] Get order list
[**orderCheckoutFormsIdGet**](OrderManagementApi.md#orderCheckoutFormsIdGet) | **GET** /order/checkout-forms/{id} | [BETA] Get order details
[**orderEventStatsGet**](OrderManagementApi.md#orderEventStatsGet) | **GET** /order/event-stats | [BETA] Get order event statistics
[**orderEventsGet**](OrderManagementApi.md#orderEventsGet) | **GET** /order/events | [BETA] Get order events


# **findMapping**
> \OpenAPI\Client\Model\LineItemIdMappings findMapping($line_item_id, $deal_id)

[BETA] Find mapping for line item id

[BETA] Allows mapping identifiers from dealId to lineItemId and vice-versa. One of defined query parameters has to be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$line_item_id = 'line_item_id_example'; // string | line item id
$deal_id = 'deal_id_example'; // string | dealId

try {
    $result = $apiInstance->findMapping($line_item_id, $deal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->findMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | [**string**](../Model/.md)| line item id | [optional]
 **deal_id** | **string**| dealId | [optional]

### Return type

[**\OpenAPI\Client\Model\LineItemIdMappings**](../Model/LineItemIdMappings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCheckoutFormsGet**
> \OpenAPI\Client\Model\CheckoutForms orderCheckoutFormsGet($offset, $limit, $status, $line_items_bought_at_lte, $line_items_bought_at_gte)

[BETA] Get order list

[BETA] Use this resource to get an order list. More information about this resource you can find <a href=\"/orders/#03\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | Index of first returned checkout-form from all search results.
$limit = 56; // int | Maximum number of checkout-forms in response (acceptable values: from 0 to 100, default is 100).
$status = 'status_example'; // string | Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.   * `ALL`: return all checkout-forms
$line_items_bought_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The upper bound of date time range from which checkout forms will be taken.
$line_items_bought_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The lower bound of date time range from which checkout forms will be taken.

try {
    $result = $apiInstance->orderCheckoutFormsGet($offset, $limit, $status, $line_items_bought_at_lte, $line_items_bought_at_gte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderCheckoutFormsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Index of first returned checkout-form from all search results. | [optional]
 **limit** | **int**| Maximum number of checkout-forms in response (acceptable values: from 0 to 100, default is 100). | [optional]
 **status** | **string**| Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing.   * &#x60;ALL&#x60;: return all checkout-forms | [optional]
 **line_items_bought_at_lte** | **\DateTime**| The upper bound of date time range from which checkout forms will be taken. | [optional]
 **line_items_bought_at_gte** | **\DateTime**| The lower bound of date time range from which checkout forms will be taken. | [optional]

### Return type

[**\OpenAPI\Client\Model\CheckoutForms**](../Model/CheckoutForms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCheckoutFormsIdGet**
> \OpenAPI\Client\Model\CheckoutForm orderCheckoutFormsIdGet($id)

[BETA] Get order details

[BETA] Use this resource to get an order details. More information about this resource you can find <a href=\"/orders/#04\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | Checkout Form id

try {
    $result = $apiInstance->orderCheckoutFormsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderCheckoutFormsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Checkout Form id |

### Return type

[**\OpenAPI\Client\Model\CheckoutForm**](../Model/CheckoutForm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderEventStatsGet**
> \OpenAPI\Client\Model\OrderEventStats orderEventStatsGet()

[BETA] Get order event statistics

[BETA] Use this resource to returns object that contains event id and occurrence date of the latest event. It gives you current starting point for reading events. More information about this resource you can find <a href=\"/orders/#02\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orderEventStatsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderEventStatsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrderEventStats**](../Model/OrderEventStats.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderEventsGet**
> \OpenAPI\Client\Model\OrderEventsList orderEventsGet($from, $type, $limit)

[BETA] Get order events

[BETA] Use this resource to returns events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. More information about this resource you can find <a href=\"/orders/#02\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = 'from_example'; // string | You can use the event ID to retrieve subsequent chunks of events
$type = array('type_example'); // string[] | Specify array of event types for filtering. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.
$limit = 100; // int | Limit in the range of 1-1000

try {
    $result = $apiInstance->orderEventsGet($from, $type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderEventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| You can use the event ID to retrieve subsequent chunks of events | [optional]
 **type** | [**string[]**](../Model/string.md)| Specify array of event types for filtering. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing. | [optional]
 **limit** | **int**| Limit in the range of 1-1000 | [optional] [default to 100]

### Return type

[**\OpenAPI\Client\Model\OrderEventsList**](../Model/OrderEventsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

