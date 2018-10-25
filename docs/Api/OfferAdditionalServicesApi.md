# OpenAPI\Client\OfferAdditionalServicesApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saleOfferAdditionalServicesDefinitionsGet**](OfferAdditionalServicesApi.md#saleOfferAdditionalServicesDefinitionsGet) | **GET** /sale/offer-additional-services/definitions | Get additional services definitions by user ID
[**saleOfferAdditionalServicesGroupsGet**](OfferAdditionalServicesApi.md#saleOfferAdditionalServicesGroupsGet) | **GET** /sale/offer-additional-services/groups | Get additional service groups by user ID
[**saleOfferAdditionalServicesGroupsGroupIdGet**](OfferAdditionalServicesApi.md#saleOfferAdditionalServicesGroupsGroupIdGet) | **GET** /sale/offer-additional-services/groups/{groupId} | Get additional services group for a given ID
[**saleOfferAdditionalServicesGroupsGroupIdPut**](OfferAdditionalServicesApi.md#saleOfferAdditionalServicesGroupsGroupIdPut) | **PUT** /sale/offer-additional-services/groups/{groupId} | Modify existing additional service group
[**saleOfferAdditionalServicesGroupsPost**](OfferAdditionalServicesApi.md#saleOfferAdditionalServicesGroupsPost) | **POST** /sale/offer-additional-services/groups | Create additional service group


# **saleOfferAdditionalServicesDefinitionsGet**
> \OpenAPI\Client\Model\DefinitionsResponse saleOfferAdditionalServicesDefinitionsGet($user_id, $offset, $limit)

Get additional services definitions by user ID

Use this resource to get additional services definitions by user ID. More information about this resource you can find <a href=\"../../news/2017-10-25-News_uslugi_dodatkowe/#1\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferAdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User ID
$offset = 0; // int | offset
$limit = 100; // int | limit

try {
    $result = $apiInstance->saleOfferAdditionalServicesDefinitionsGet($user_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAdditionalServicesApi->saleOfferAdditionalServicesDefinitionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID |
 **offset** | **int**| offset | [optional] [default to 0]
 **limit** | **int**| limit | [optional] [default to 100]

### Return type

[**\OpenAPI\Client\Model\DefinitionsResponse**](../Model/DefinitionsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleOfferAdditionalServicesGroupsGet**
> \OpenAPI\Client\Model\AdditionalServicesGroups saleOfferAdditionalServicesGroupsGet($user_id, $offset, $limit)

Get additional service groups by user ID

Use this resource to retrieve a list of groups with additional services available to a given user which you may assign to offers. More information about this resource you can find <a href=\"../../news/2017-10-25-News_uslugi_dodatkowe/#4\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferAdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User ID
$offset = 0; // int | offset
$limit = 1000; // int | limit

try {
    $result = $apiInstance->saleOfferAdditionalServicesGroupsGet($user_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAdditionalServicesApi->saleOfferAdditionalServicesGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID |
 **offset** | **int**| offset | [optional] [default to 0]
 **limit** | **int**| limit | [optional] [default to 1000]

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroups**](../Model/AdditionalServicesGroups.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleOfferAdditionalServicesGroupsGroupIdGet**
> \OpenAPI\Client\Model\AdditionalServicesGroupResponse saleOfferAdditionalServicesGroupsGroupIdGet($group_id)

Get additional services group for a given ID

Use this resource to get additional services group for a given ID. More information about this resource you can find <a href=\"../../news/2017-10-25-News_uslugi_dodatkowe/#5\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferAdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional Service Group ID

try {
    $result = $apiInstance->saleOfferAdditionalServicesGroupsGroupIdGet($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAdditionalServicesApi->saleOfferAdditionalServicesGroupsGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Additional Service Group ID |

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleOfferAdditionalServicesGroupsGroupIdPut**
> \OpenAPI\Client\Model\AdditionalServicesGroupResponse saleOfferAdditionalServicesGroupsGroupIdPut($group_id, $additional_services_group_request)

Modify existing additional service group

Use this resource to modify existing additional service group. More information about this resource you can find <a href=\"../../news/2017-10-25-News_uslugi_dodatkowe/#3\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferAdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | additional service group ID
$additional_services_group_request = new \OpenAPI\Client\Model\AdditionalServicesGroupRequest(); // \OpenAPI\Client\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->saleOfferAdditionalServicesGroupsGroupIdPut($group_id, $additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAdditionalServicesApi->saleOfferAdditionalServicesGroupsGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| additional service group ID |
 **additional_services_group_request** | [**\OpenAPI\Client\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleOfferAdditionalServicesGroupsPost**
> \OpenAPI\Client\Model\AdditionalServicesGroupResponse saleOfferAdditionalServicesGroupsPost($additional_services_group_request)

Create additional service group

Use this resource to creates a group of addtional services. More information about this resource you can find <a href=\"../../news/2017-10-25-News_uslugi_dodatkowe/#2\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferAdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_services_group_request = new \OpenAPI\Client\Model\AdditionalServicesGroupRequest(); // \OpenAPI\Client\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->saleOfferAdditionalServicesGroupsPost($additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAdditionalServicesApi->saleOfferAdditionalServicesGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_services_group_request** | [**\OpenAPI\Client\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

