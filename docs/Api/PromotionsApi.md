# OpenAPI\Client\PromotionsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionUsingPOST1**](PromotionsApi.md#createPromotionUsingPOST1) | **POST** /sale/loyalty/promotions | Creates a new promotion
[**deactivatePromotionUsingDELETE**](PromotionsApi.md#deactivatePromotionUsingDELETE) | **DELETE** /sale/loyalty/promotions/{promotionId} | Deactivate promotion by its id
[**getPromotionUsingGET**](PromotionsApi.md#getPromotionUsingGET) | **GET** /sale/loyalty/promotions/{promotionId} | Get a promotion by its id
[**listSellerPromotionsUsingGET1**](PromotionsApi.md#listSellerPromotionsUsingGET1) | **GET** /sale/loyalty/promotions | Get a list of promotions by user id


# **createPromotionUsingPOST1**
> \OpenAPI\Client\Model\SellerRebateDto createPromotionUsingPOST1($seller_create_rebate_request_dto, $details, $authenticated)

Creates a new promotion

This endpoint creates a new promotion. You can define the following types of promotions:  1. Bundle  In order to create a new bundle, you have to define a  promotion with a single benefit of type **ORDER_FIXED_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. In the benefit specification you have to declare the discount amount that you want to be deducted from the sum of bundled offers prices. In the offer criterion you need to pass a list of offers that are to be grouped as a bundle. For each offer you have to define a fixed quantity (that many pieces of your offer will be part of the bundle) and you also have to set a promotionEntryPoint flag (offers with this flag set to true will have a section that allows the users to purchase your bundle).  2. Multipack  In order to create a new multipack, you have to define a promotion with a single benefit of type **UNIT_PERCENTAGE_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. The benefit specification should contain a configuration section with a percentage which indicates the specific discount for the discounted offer. This percentage should be an integer value greater than 15 for quantity 2, greater than 30 for quantity 3, greater than 40 for quantity 4, greater than 50 for quantity 5 and lower than or equal to 100. The specification should also contain a trigger section with a field forEachQuantity that defines the amount of items in the multipack which is necessary to trigger the benefit. Additionally, the discountedNumber field must be set to 1 by default as you can only discount one unit in a multipack. Finally, the offer criterion specifies the offer for which the multipack promotion will take effect.  3. Cross-offer multipack  A cross-offer multipack is created in the same fashion as a standard multipack. The only difference is that you need to pass more than 1 offer in the offer criterion section. This group of offers is then considered as a pool from which users can pick and choose forEachQuantity offers and the cheapest of them gets a discount.  More information about this resource you can find <a href=\"../../news/2017-10-18-News_promocyjne_zestawy_ofert/\" target=\"_blank\">here (Bundles)</a>, <a href=\"../../news/2018-02-01-Rabaty_ilosciowe/\" target=\"_blank\">here (Multipack)</a> and <a href=\"../../news/2018-10-08-Rabaty_ilosciowe/\" target=\"_blank\">here (Cross-offer multipack)</a>.  **Example request bodies:** 1) Bundle ``` {   \"benefits\": [     {       \"specification\": {         \"type\": \"ORDER_FIXED_DISCOUNT\",         \"value\": {           \"amount\": \"10\",           \"currency\": \"PLN\"         }       }     }   ],   \"offerCriteria\": [     {       \"type\": \"CONTAINS_OFFERS\",       \"offers\": [         {           \"id\": \"1122334455\",           \"quantity\": 2,           \"promotionEntryPoint\": true         },         {           \"id\": \"2233445566\",           \"quantity\": 1,           \"promotionEntryPoint\": false         }       ]     }   ] } ``` 2) Multipack ``` {   \"benefits\": [     {       \"specification\": {         \"type\": \"UNIT_PERCENTAGE_DISCOUNT\",         \"configuration\": {           \"percentage\": \"100\"         },         \"trigger\": {           \"forEachQuantity\": \"3\",           \"discountedNumber\": \"1\"         }       }     }   ],   \"offerCriteria\": [     {       \"type\": \"CONTAINS_OFFERS\",       \"offers\": [         {           \"id\": \"1122334455\"         }       ]     }   ] } ``` 3) Cross-offer multipack ``` {   \"benefits\": [     {       \"specification\": {         \"type\": \"UNIT_PERCENTAGE_DISCOUNT\",         \"configuration\": {           \"percentage\": \"100\"         },         \"trigger\": {           \"forEachQuantity\": \"3\",           \"discountedNumber\": \"1\"         }       }     }   ],   \"offerCriteria\": [     {       \"type\": \"CONTAINS_OFFERS\",       \"offers\": [         {           \"id\": \"1122334455\"         },         {           \"id\": \"2233445566\"         },       ]     }   ] } ```

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

$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_create_rebate_request_dto = new \OpenAPI\Client\Model\SellerCreateRebateRequestDto(); // \OpenAPI\Client\Model\SellerCreateRebateRequestDto | request
$details = 'details_example'; // string | 
$authenticated = True; // bool | 

try {
    $result = $apiInstance->createPromotionUsingPOST1($seller_create_rebate_request_dto, $details, $authenticated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->createPromotionUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_create_rebate_request_dto** | [**\OpenAPI\Client\Model\SellerCreateRebateRequestDto**](../Model/SellerCreateRebateRequestDto.md)| request |
 **details** | **string**|  | [optional]
 **authenticated** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SellerRebateDto**](../Model/SellerRebateDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivatePromotionUsingDELETE**
> deactivatePromotionUsingDELETE($promotion_id, $details, $authenticated)

Deactivate promotion by its id

Use this resource to deactivate the requested promotion. You need to use its unique id. More information about this resource you can find <a href=\"../../news/2017-10-18-News_promocyjne_zestawy_ofert/#4\" target=\"_blank\">here (Bundles)</a> and <a href=\"../../news/2018-02-01-Rabaty_ilosciowe/#4\" target=\"_blank\">here (Multipack)</a>.

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

$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | promotionId
$details = 'details_example'; // string | 
$authenticated = True; // bool | 

try {
    $apiInstance->deactivatePromotionUsingDELETE($promotion_id, $details, $authenticated);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->deactivatePromotionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| promotionId |
 **details** | **string**|  | [optional]
 **authenticated** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotionUsingGET**
> \OpenAPI\Client\Model\SellerRebateDto getPromotionUsingGET($promotion_id, $details, $authenticated)

Get a promotion by its id

Use this resource to returns the requested promotion. You need to use its unique id. More information about this resource you can find <a href=\"../../news/2017-10-18-News_promocyjne_zestawy_ofert/#3\" target=\"_blank\">here (Bundles)</a> and <a href=\"../../news/2018-02-01-Rabaty_ilosciowe/#3\" target=\"_blank\">here (Multipack)</a>.

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

$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | promotionId
$details = 'details_example'; // string | 
$authenticated = True; // bool | 

try {
    $result = $apiInstance->getPromotionUsingGET($promotion_id, $details, $authenticated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| promotionId |
 **details** | **string**|  | [optional]
 **authenticated** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SellerRebateDto**](../Model/SellerRebateDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSellerPromotionsUsingGET1**
> \OpenAPI\Client\Model\SellerRebatesDto listSellerPromotionsUsingGET1($user_id, $limit, $offset, $details, $authenticated)

Get a list of promotions by user id

Get a list of promotions defined by the specified user. You can list  only your own promotions.  More information about this resource you can find <a href=\"../../news/2017-10-18-News_promocyjne_zestawy_ofert/#2\" target=\"_blank\">here (Bundles)</a> and <a href=\"../../news/2018-02-01-Rabaty_ilosciowe/#2\" target=\"_blank\">here (Multipack)</a>.

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

$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | user.id
$limit = 50; // int | limit
$offset = 0; // int | offset
$details = 'details_example'; // string | 
$authenticated = True; // bool | 

try {
    $result = $apiInstance->listSellerPromotionsUsingGET1($user_id, $limit, $offset, $details, $authenticated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listSellerPromotionsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| user.id |
 **limit** | **int**| limit | [optional] [default to 50]
 **offset** | **int**| offset | [optional] [default to 0]
 **details** | **string**|  | [optional]
 **authenticated** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SellerRebatesDto**](../Model/SellerRebatesDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

