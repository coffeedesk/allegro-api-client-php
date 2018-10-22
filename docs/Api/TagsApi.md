# OpenAPI\Client\TagsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTagPOST1**](TagsApi.md#createTagPOST1) | **POST** /sale/offer-tags | Creates tag
[**deleteTagUsingDELETE**](TagsApi.md#deleteTagUsingDELETE) | **DELETE** /sale/offer-tags/{tagId} | Delete tag
[**listSellerTagsGET1**](TagsApi.md#listSellerTagsGET1) | **GET** /sale/offer-tags | Get a list of tags
[**updateTagPUT**](TagsApi.md#updateTagPUT) | **PUT** /sale/offer-tags/{tagId} | Modify tag


# **createTagPOST1**
> \OpenAPI\Client\Model\TagId createTagPOST1($tag_request)

Creates tag

Use this resource to creates a new tag. More information about this resource you can find <a href=\"../../news/2018-09-24-Tagi-zalaczniki/#DodajDoKonta\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_request = new \OpenAPI\Client\Model\TagRequest(); // \OpenAPI\Client\Model\TagRequest | request

try {
    $result = $apiInstance->createTagPOST1($tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTagPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_request** | [**\OpenAPI\Client\Model\TagRequest**](../Model/TagRequest.md)| request |

### Return type

[**\OpenAPI\Client\Model\TagId**](../Model/TagId.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagUsingDELETE**
> deleteTagUsingDELETE($tag_id)

Delete tag

Use this resource to delete the tag. More information about this resource you can find <a href=\"../../news/2018-09-24-Tagi-zalaczniki/#UsunTagZKonta\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tagId

try {
    $apiInstance->deleteTagUsingDELETE($tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTagUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| tagId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSellerTagsGET1**
> \OpenAPI\Client\Model\TagListResponse listSellerTagsGET1($user_id, $limit, $offset)

Get a list of tags

Use this resource to get a list of tags defined by the specified user (Defaults: limit = 1000, offset = 0). More information about this resource you can find <a href=\"../../news/2018-09-24-Tagi-zalaczniki/#PobierzTagi\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | user.id
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->listSellerTagsGET1($user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listSellerTagsGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| user.id |
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\OpenAPI\Client\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagPUT**
> updateTagPUT($tag_id, $tag_request)

Modify tag

Use this resource to updates a tag. More information about this resource you can find <a href=\"../../news/2018-09-24-Tagi-zalaczniki/#ZmienNazwe\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tagId
$tag_request = new \OpenAPI\Client\Model\TagRequest(); // \OpenAPI\Client\Model\TagRequest | request

try {
    $apiInstance->updateTagPUT($tag_id, $tag_request);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTagPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| tagId |
 **tag_request** | [**\OpenAPI\Client\Model\TagRequest**](../Model/TagRequest.md)| request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

