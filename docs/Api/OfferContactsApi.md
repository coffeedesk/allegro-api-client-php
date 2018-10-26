# OpenAPI\Client\OfferContactsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saleOfferContactsGet**](OfferContactsApi.md#saleOfferContactsGet) | **GET** /sale/offer-contacts | Get details of many contacts
[**saleOfferContactsIdGet**](OfferContactsApi.md#saleOfferContactsIdGet) | **GET** /sale/offer-contacts/{id} | Get contact details
[**saleOfferContactsIdPut**](OfferContactsApi.md#saleOfferContactsIdPut) | **PUT** /sale/offer-contacts/{id} | Modify contact details
[**saleOfferContactsPost**](OfferContactsApi.md#saleOfferContactsPost) | **POST** /sale/offer-contacts | Create a new contact


# **saleOfferContactsGet**
> \OpenAPI\Client\Model\ContactResponseList saleOfferContactsGet($seller_id)

Get details of many contacts

Use this resource to get details of many contacts. More information about this resource you can find <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#4\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | id of contacts owner

try {
    $result = $apiInstance->saleOfferContactsGet($seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferContactsApi->saleOfferContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| id of contacts owner |

### Return type

[**\OpenAPI\Client\Model\ContactResponseList**](../Model/ContactResponseList.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleOfferContactsIdGet**
> \OpenAPI\Client\Model\ContactResponse saleOfferContactsIdGet($id)

Get contact details

Use this resource to get contact details. More information about this resource you can find <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#3\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact id

try {
    $result = $apiInstance->saleOfferContactsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferContactsApi->saleOfferContactsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact id |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleOfferContactsIdPut**
> \OpenAPI\Client\Model\ContactResponse saleOfferContactsIdPut($id, $contact_request)

Modify contact details

Use this resource to modify contact details. More information about this resource you can find <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#2\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact id
$contact_request = new \OpenAPI\Client\Model\ContactRequest(); // \OpenAPI\Client\Model\ContactRequest | Contact

try {
    $result = $apiInstance->saleOfferContactsIdPut($id, $contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferContactsApi->saleOfferContactsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact id |
 **contact_request** | [**\OpenAPI\Client\Model\ContactRequest**](../Model/ContactRequest.md)| Contact |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleOfferContactsPost**
> \OpenAPI\Client\Model\ContactResponse saleOfferContactsPost($contact_request)

Create a new contact

Use this resource to create a new contact. More information about this resource you can find <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#1\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_request = new \OpenAPI\Client\Model\ContactRequest(); // \OpenAPI\Client\Model\ContactRequest | New contact

try {
    $result = $apiInstance->saleOfferContactsPost($contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferContactsApi->saleOfferContactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_request** | [**\OpenAPI\Client\Model\ContactRequest**](../Model/ContactRequest.md)| New contact |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

