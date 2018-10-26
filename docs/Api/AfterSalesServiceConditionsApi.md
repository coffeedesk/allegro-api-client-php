# OpenAPI\Client\AfterSalesServiceConditionsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPublicSellerListingUsingGET**](AfterSalesServiceConditionsApi.md#getPublicSellerListingUsingGET) | **GET** /after-sales-service-conditions/implied-warranties | Get seller implied warranties listing
[**getPublicSellerListingUsingGET1**](AfterSalesServiceConditionsApi.md#getPublicSellerListingUsingGET1) | **GET** /after-sales-service-conditions/return-policies | Get seller return policies listing
[**getPublicSellerListingUsingGET2**](AfterSalesServiceConditionsApi.md#getPublicSellerListingUsingGET2) | **GET** /after-sales-service-conditions/warranties | Get seller warranties listing


# **getPublicSellerListingUsingGET**
> \OpenAPI\Client\Model\ImpliedWarrantiesListImpliedWarrantyBasic getPublicSellerListingUsingGET($seller_id, $limit, $offset)

Get seller implied warranties listing

Use this resource to get seller implied warranties listing. More information about this resource you can find <a href=\"../../news/2017-04-05-News_warunki_oferty/\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');
// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\AfterSalesServiceConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | Filter by user id. You are allowed to get your implied warranties only.
$limit = 56; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->getPublicSellerListingUsingGET($seller_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSalesServiceConditionsApi->getPublicSellerListingUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| Filter by user id. You are allowed to get your implied warranties only. |
 **limit** | **int**| Limit | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\ImpliedWarrantiesListImpliedWarrantyBasic**](../Model/ImpliedWarrantiesListImpliedWarrantyBasic.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicSellerListingUsingGET1**
> \OpenAPI\Client\Model\ReturnPoliciesListReturnPolicyBasic getPublicSellerListingUsingGET1($seller_id, $limit, $offset)

Get seller return policies listing

Use this resource to get seller return policies listing. More information about this resource you can find <a href=\"../../news/2017-04-05-News_warunki_oferty/\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');
// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\AfterSalesServiceConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | Filter by user id. You are allowed to get your return policies only.
$limit = 56; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->getPublicSellerListingUsingGET1($seller_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSalesServiceConditionsApi->getPublicSellerListingUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| Filter by user id. You are allowed to get your return policies only. |
 **limit** | **int**| Limit | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\ReturnPoliciesListReturnPolicyBasic**](../Model/ReturnPoliciesListReturnPolicyBasic.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicSellerListingUsingGET2**
> \OpenAPI\Client\Model\WarrantiesListWarrantyBasic getPublicSellerListingUsingGET2($seller_id, $limit, $offset)

Get seller warranties listing

Use this resource to get seller warranties listing. More information about this resource you can find <a href=\"../../news/2017-04-05-News_warunki_oferty/\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');
// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\AfterSalesServiceConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | Filter by user id. You are allowed to get your warranties only.
$limit = 56; // int | Limit
$offset = 0; // int | Offset

try {
    $result = $apiInstance->getPublicSellerListingUsingGET2($seller_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSalesServiceConditionsApi->getPublicSellerListingUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| Filter by user id. You are allowed to get your warranties only. |
 **limit** | **int**| Limit | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\WarrantiesListWarrantyBasic**](../Model/WarrantiesListWarrantyBasic.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

