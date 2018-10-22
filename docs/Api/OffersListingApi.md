# OpenAPI\Client\OffersListingApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListing**](OffersListingApi.md#getListing) | **GET** /offers/listing | Get search results combined with navigable categories and filters.


# **getListing**
> \OpenAPI\Client\Model\ListingResponse getListing($category_id, $phrase, $seller_id, $search_mode, $offset, $limit, $sort, $include, $fallback)

Get search results combined with navigable categories and filters.

Use this resource to get a list of offers according to provided parameters. At least one of: phrase, seller.id or category.id is required. Additional available parameters vary depending on category.id. The parameters are defined in the filters entity. More information about this resource you can find <a href=\"../../news/2018-07-03-Listing_ofert/\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\OffersListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | The category identifier to search.
$phrase = 'phrase_example'; // string | Search phrase.
$seller_id = 'seller_id_example'; // string | Identifier of the seller. May be provided more than once. Only items of provided sellers are returned.
$search_mode = 'search_mode_example'; // string | Search mode. Allowed values: *REGULAR* - searching for a phrase in the title of offers; *DESCRIPTIONS* - searching for a phrase in titles and offers descriptions; *CLOSED* -  searching for a phrase in titles of closed offers. Default *REGULAR*.
$offset = 56; // int | Index of first returned offer from all search results. Must be multiple of *limit*.
$limit = 56; // int | Maximum number of offers in response (acceptable values: from 0 to 100, default is 60).
$sort = 'sort_example'; // string | Search results sorting order. Allowed values (+ or no prefix means ascending order, - prefix means descending order): relevance, +price, -price, +withDeliveryPrice, -withDeliveryPrice, -popularity, +endTime, -startTime. The default sorting order is relevancy.
$include = 'include_example'; // string | Specify parts that should be included in the output. Allowed values are names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use \"-\" prefix to exclude entity. Example: *include=-all&include=filters&include=sort* - returns only filters and sort entities.
$fallback = True; // bool | Defines behaviour of searching when no results with exact phrase match are found: *true* - related (not exact) results are returned; *false* - empty results are returned. The default is true.

try {
    $result = $apiInstance->getListing($category_id, $phrase, $seller_id, $search_mode, $offset, $limit, $sort, $include, $fallback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersListingApi->getListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category identifier to search. | [optional]
 **phrase** | **string**| Search phrase. | [optional]
 **seller_id** | **string**| Identifier of the seller. May be provided more than once. Only items of provided sellers are returned. | [optional]
 **search_mode** | **string**| Search mode. Allowed values: *REGULAR* - searching for a phrase in the title of offers; *DESCRIPTIONS* - searching for a phrase in titles and offers descriptions; *CLOSED* -  searching for a phrase in titles of closed offers. Default *REGULAR*. | [optional]
 **offset** | **int**| Index of first returned offer from all search results. Must be multiple of *limit*. | [optional]
 **limit** | **int**| Maximum number of offers in response (acceptable values: from 0 to 100, default is 60). | [optional]
 **sort** | **string**| Search results sorting order. Allowed values (+ or no prefix means ascending order, - prefix means descending order): relevance, +price, -price, +withDeliveryPrice, -withDeliveryPrice, -popularity, +endTime, -startTime. The default sorting order is relevancy. | [optional]
 **include** | **string**| Specify parts that should be included in the output. Allowed values are names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use \&quot;-\&quot; prefix to exclude entity. Example: *include&#x3D;-all&amp;include&#x3D;filters&amp;include&#x3D;sort* - returns only filters and sort entities. | [optional]
 **fallback** | **bool**| Defines behaviour of searching when no results with exact phrase match are found: *true* - related (not exact) results are returned; *false* - empty results are returned. The default is true. | [optional]

### Return type

[**\OpenAPI\Client\Model\ListingResponse**](../Model/ListingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

