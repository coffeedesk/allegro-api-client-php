# OpenAPI\Client\UserRatingsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserRatingsUsingGET**](UserRatingsApi.md#getUserRatingsUsingGET) | **GET** /sale/user-ratings | Get user-ratings
[**getUserSummaryUsingGET**](UserRatingsApi.md#getUserSummaryUsingGET) | **GET** /users/{userId}/ratings-summary | Get user ratings-summary


# **getUserRatingsUsingGET**
> \OpenAPI\Client\Model\UserRatingListResponse getUserRatingsUsingGET($user_id, $recommended, $offset, $limit)

Get user-ratings

Use this resource to receive your sales score. More information about this resource you can find <a href=\"../../news/2017-10-09-News_informacje_o_ocenach/\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\UserRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | Filter by user id, you are allowed to get your ratings only
$recommended = 'recommended_example'; // string | Filter by recommended
$offset = 0; // int | Offset
$limit = 20; // int | Limit

try {
    $result = $apiInstance->getUserRatingsUsingGET($user_id, $recommended, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRatingsApi->getUserRatingsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Filter by user id, you are allowed to get your ratings only |
 **recommended** | **string**| Filter by recommended | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]
 **limit** | **int**| Limit | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\UserRatingListResponse**](../Model/UserRatingListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserSummaryUsingGET**
> \OpenAPI\Client\Model\UserRatingSummaryResponse getUserSummaryUsingGET($user_id)

Get user ratings-summary

Use this resource to receive feedback statistics. More information about this resource you can find <a href=\"../../news/2017-10-09-News_informacje_o_ocenach/\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\UserRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | userId

try {
    $result = $apiInstance->getUserSummaryUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRatingsApi->getUserSummaryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| userId |

### Return type

[**\OpenAPI\Client\Model\UserRatingSummaryResponse**](../Model/UserRatingSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

