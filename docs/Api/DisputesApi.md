# OpenAPI\Client\DisputesApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saleDisputeAttachmentsAttachmentIdGet**](DisputesApi.md#saleDisputeAttachmentsAttachmentIdGet) | **GET** /sale/dispute-attachments/{attachmentId} | Get an attachment
[**saleDisputeAttachmentsPost**](DisputesApi.md#saleDisputeAttachmentsPost) | **POST** /sale/dispute-attachments | Post an attachment declaration
[**saleDisputesDisputeIdGet**](DisputesApi.md#saleDisputesDisputeIdGet) | **GET** /sale/disputes/{disputeId} | Get a single dispute by id
[**saleDisputesDisputeIdMessagesGet**](DisputesApi.md#saleDisputesDisputeIdMessagesGet) | **GET** /sale/disputes/{disputeId}/messages | Get the list of messages within dispute
[**saleDisputesDisputeIdMessagesPost**](DisputesApi.md#saleDisputesDisputeIdMessagesPost) | **POST** /sale/disputes/{disputeId}/messages | Post a message
[**saleDisputesGet**](DisputesApi.md#saleDisputesGet) | **GET** /sale/disputes | Get the list of the disputes


# **saleDisputeAttachmentsAttachmentIdGet**
> \SplFileObject saleDisputeAttachmentsAttachmentIdGet($attachment_id)

Get an attachment

Use this resource to get an attachment. More information about this resource you can find <a href=\"../../news/2018-09-18-Dyskusje/#GetAttach\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = 'attachment_id_example'; // string | Id of the attachment resource

try {
    $result = $apiInstance->saleDisputeAttachmentsAttachmentIdGet($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->saleDisputeAttachmentsAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| Id of the attachment resource |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleDisputeAttachmentsPost**
> \OpenAPI\Client\Model\DisputeAttachmentId saleDisputeAttachmentsPost($attachment_declaration)

Post an attachment declaration

Use this resource to post an attachment declaration. More information about this resource you can find <a href=\"../../news/2018-09-18-Dyskusje/#PostAttach\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_declaration = new \OpenAPI\Client\Model\AttachmentDeclaration(); // \OpenAPI\Client\Model\AttachmentDeclaration | A detailed declaration of a file to be uploaded

try {
    $result = $apiInstance->saleDisputeAttachmentsPost($attachment_declaration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->saleDisputeAttachmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_declaration** | [**\OpenAPI\Client\Model\AttachmentDeclaration**](../Model/AttachmentDeclaration.md)| A detailed declaration of a file to be uploaded |

### Return type

[**\OpenAPI\Client\Model\DisputeAttachmentId**](../Model/DisputeAttachmentId.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleDisputesDisputeIdGet**
> \OpenAPI\Client\Model\Dispute saleDisputesDisputeIdGet($dispute_id)

Get a single dispute by id

Use this resource to get a single dispute. More information about this resource you can find <a href=\"../../news/2018-09-18-Dyskusje/#GetOne\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = 'dispute_id_example'; // string | Id of the dispute

try {
    $result = $apiInstance->saleDisputesDisputeIdGet($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->saleDisputesDisputeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Id of the dispute |

### Return type

[**\OpenAPI\Client\Model\Dispute**](../Model/Dispute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleDisputesDisputeIdMessagesGet**
> \OpenAPI\Client\Model\DisputeMessageList saleDisputesDisputeIdMessagesGet($dispute_id)

Get the list of messages within dispute

Use this resource to get the list of messages within dispute. More information about this resource you can find <a href=\"../../news/2018-09-18-Dyskusje/#GetMessage\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = 'dispute_id_example'; // string | Id of the dispute

try {
    $result = $apiInstance->saleDisputesDisputeIdMessagesGet($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->saleDisputesDisputeIdMessagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Id of the dispute |

### Return type

[**\OpenAPI\Client\Model\DisputeMessageList**](../Model/DisputeMessageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleDisputesDisputeIdMessagesPost**
> \OpenAPI\Client\Model\DisputeMessage saleDisputesDisputeIdMessagesPost($dispute_id, $message_request)

Post a message

Use this resource to post a message in certain dispute. At least one of fields: 'text', 'attachment' has to be present. More information about this resource you can find <a href=\"../../news/2018-09-18-Dyskusje/#PostMessage\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispute_id = 'dispute_id_example'; // string | Id of the dispute
$message_request = new \OpenAPI\Client\Model\MessageRequest(); // \OpenAPI\Client\Model\MessageRequest | Message request

try {
    $result = $apiInstance->saleDisputesDisputeIdMessagesPost($dispute_id, $message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->saleDisputesDisputeIdMessagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Id of the dispute |
 **message_request** | [**\OpenAPI\Client\Model\MessageRequest**](../Model/MessageRequest.md)| Message request |

### Return type

[**\OpenAPI\Client\Model\DisputeMessage**](../Model/DisputeMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleDisputesGet**
> \OpenAPI\Client\Model\DisputeListResponse saleDisputesGet($checkout_form_id)

Get the list of the disputes

Use this resource to get the list of your disputes. More information about this resource you can find <a href=\"../../news/2018-09-18-Dyskusje/#GetAll\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_form_id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | CheckoutForm id

try {
    $result = $apiInstance->saleDisputesGet($checkout_form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->saleDisputesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_form_id** | [**string**](../Model/.md)| CheckoutForm id | [optional]

### Return type

[**\OpenAPI\Client\Model\DisputeListResponse**](../Model/DisputeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

