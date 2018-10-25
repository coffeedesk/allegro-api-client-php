# OpenAPI\Client\OfferManagementApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignTagToOfferPOST**](OfferManagementApi.md#assignTagToOfferPOST) | **POST** /sale/offers/{offerId}/tags | Assigns tag to offer
[**changePublicationStatusUsingPUT**](OfferManagementApi.md#changePublicationStatusUsingPUT) | **PUT** /sale/offer-publication-commands/{commandId} | Modify multiple offers publication at once.
[**createOfferAttachmentUsingPOST**](OfferManagementApi.md#createOfferAttachmentUsingPOST) | **POST** /sale/offer-attachments | Create offer attachment
[**createOfferUsingPOST**](OfferManagementApi.md#createOfferUsingPOST) | **POST** /sale/offers | Create a draft offer
[**deleteOfferUsingDELETE**](OfferManagementApi.md#deleteOfferUsingDELETE) | **DELETE** /sale/offers/{offerId} | Delete a draft offer
[**getCategoriesUsingGET**](OfferManagementApi.md#getCategoriesUsingGET) | **GET** /sale/categories | Get IDs of main Allegro categories
[**getCategoryUsingGET1**](OfferManagementApi.md#getCategoryUsingGET1) | **GET** /sale/categories/{categoryId} | Get category by ID
[**getFlatParametersUsingGET2**](OfferManagementApi.md#getFlatParametersUsingGET2) | **GET** /sale/categories/{categoryId}/parameters | Get parameters by category ID
[**getGeneralReportUsingGET**](OfferManagementApi.md#getGeneralReportUsingGET) | **GET** /sale/offer-modification-commands/{commandId} | Get a report summary for a particular commandId
[**getOfferUsingGET**](OfferManagementApi.md#getOfferUsingGET) | **GET** /sale/offers/{offerId} | Get all fields of the particular offer
[**getPublicationReportUsingGET**](OfferManagementApi.md#getPublicationReportUsingGET) | **GET** /sale/offer-publication-commands/{commandId} | Get a report summary for a particular commandId
[**getPublicationTasksUsingGET**](OfferManagementApi.md#getPublicationTasksUsingGET) | **GET** /sale/offer-publication-commands/{commandId}/tasks | Get a detailed report single command task
[**getTasksUsingGET**](OfferManagementApi.md#getTasksUsingGET) | **GET** /sale/offer-modification-commands/{commandId}/tasks | Get a detailed report for a single command task
[**listAssignedOfferTagsGET**](OfferManagementApi.md#listAssignedOfferTagsGET) | **GET** /sale/offers/{offerId}/tags | Get a list of tags assigned to offer
[**modificationCommandUsingPUT**](OfferManagementApi.md#modificationCommandUsingPUT) | **PUT** /sale/offer-modification-commands/{commandId} | Modify multiple offers at once.
[**offersOfferIdChangePriceCommandsCommandIdPut**](OfferManagementApi.md#offersOfferIdChangePriceCommandsCommandIdPut) | **PUT** /offers/{offerId}/change-price-commands/{commandId} | Modify the Buy Now price in an offer
[**saleDeliveryMethodsGet**](OfferManagementApi.md#saleDeliveryMethodsGet) | **GET** /sale/delivery-methods | Get a list of available delivery methods
[**saleShippingRatesGet**](OfferManagementApi.md#saleShippingRatesGet) | **GET** /sale/shipping-rates | Get a list of seller&#39;s shipping rates
[**saleShippingRatesIdGet**](OfferManagementApi.md#saleShippingRatesIdGet) | **GET** /sale/shipping-rates/{id} | Get details of the given shipping rates set
[**saleShippingRatesIdPut**](OfferManagementApi.md#saleShippingRatesIdPut) | **PUT** /sale/shipping-rates/{id} | Edit seller&#39;s shipping rates set
[**saleShippingRatesPost**](OfferManagementApi.md#saleShippingRatesPost) | **POST** /sale/shipping-rates | Create a new seller&#39;s shipping rates set
[**searchOffersUsingGET**](OfferManagementApi.md#searchOffersUsingGET) | **GET** /sale/offers | Get seller&#39;s offers
[**updateOfferUsingPUT**](OfferManagementApi.md#updateOfferUsingPUT) | **PUT** /sale/offers/{offerId} | Complete a draft offer draft or edit ongoing offers


# **assignTagToOfferPOST**
> assignTagToOfferPOST($offer_id, $tag_ids_request)

Assigns tag to offer

Use this resource to assigns a tag to offer. More information about this resource you can find <a href=\"../../news/2018-09-24-Tagi-zalaczniki/#PrzypiszTagiDoOferty\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId
$tag_ids_request = new \OpenAPI\Client\Model\TagIdsRequest(); // \OpenAPI\Client\Model\TagIdsRequest | request

try {
    $apiInstance->assignTagToOfferPOST($offer_id, $tag_ids_request);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->assignTagToOfferPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |
 **tag_ids_request** | [**\OpenAPI\Client\Model\TagIdsRequest**](../Model/TagIdsRequest.md)| request |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changePublicationStatusUsingPUT**
> \OpenAPI\Client\Model\GeneralReport changePublicationStatusUsingPUT($command_id, $publication_change_command_dto)

Modify multiple offers publication at once.

Use this resource to modify multiple offers publication at once. More information about this resource you can find <a href=\"../../sale/#step-8-offer-publication-commands\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$publication_change_command_dto = new \OpenAPI\Client\Model\PublicationChangeCommandDto(); // \OpenAPI\Client\Model\PublicationChangeCommandDto | publicationChangeCommandDto

try {
    $result = $apiInstance->changePublicationStatusUsingPUT($command_id, $publication_change_command_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->changePublicationStatusUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **publication_change_command_dto** | [**\OpenAPI\Client\Model\PublicationChangeCommandDto**](../Model/PublicationChangeCommandDto.md)| publicationChangeCommandDto |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOfferAttachmentUsingPOST**
> \OpenAPI\Client\Model\OfferAttachment createOfferAttachmentUsingPOST($offer_attachment)

Create offer attachment

Creates attachment and returns location header for file upload

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_attachment = new \OpenAPI\Client\Model\OfferAttachment(); // \OpenAPI\Client\Model\OfferAttachment | offer attachment

try {
    $result = $apiInstance->createOfferAttachmentUsingPOST($offer_attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createOfferAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_attachment** | [**\OpenAPI\Client\Model\OfferAttachment**](../Model/OfferAttachment.md)| offer attachment |

### Return type

[**\OpenAPI\Client\Model\OfferAttachment**](../Model/OfferAttachment.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOfferUsingPOST**
> \OpenAPI\Client\Model\Offer createOfferUsingPOST($offer)

Create a draft offer

Use this resource to create a draft offer draft. More information about this resource you can find <a href=\"../../sale/#step-6-draft\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer = new \OpenAPI\Client\Model\Offer(); // \OpenAPI\Client\Model\Offer | offer

try {
    $result = $apiInstance->createOfferUsingPOST($offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createOfferUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer** | [**\OpenAPI\Client\Model\Offer**](../Model/Offer.md)| offer |

### Return type

[**\OpenAPI\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOfferUsingDELETE**
> deleteOfferUsingDELETE($offer_id)

Delete a draft offer

Use this resource to delete a draft offer. More information about this resource you can find <a href=\"../../news/2018-10-09_Draft_delete/\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId

try {
    $apiInstance->deleteOfferUsingDELETE($offer_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->deleteOfferUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoriesUsingGET**
> \OpenAPI\Client\Model\CategoriesDto getCategoriesUsingGET($parent_id)

Get IDs of main Allegro categories

Use this resource to get IDs of main Allegro categories. More information about this resource you can find <a href=\"../../sale/#categories\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = '954b95b6-43cf-4104-8354-dea4d9b10ddf'; // string | parent.id

try {
    $result = $apiInstance->getCategoriesUsingGET($parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getCategoriesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**| parent.id | [optional] [default to &#39;954b95b6-43cf-4104-8354-dea4d9b10ddf&#39;]

### Return type

[**\OpenAPI\Client\Model\CategoriesDto**](../Model/CategoriesDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryUsingGET1**
> \OpenAPI\Client\Model\CategoryDto getCategoryUsingGET1($category_id)

Get category by ID

Use this resource to get the lowest tier category (remember – an offer can be listed in the lowest tier category if the category is marked “leaf”: true). More information about this resource you can find <a href=\"../../sale/#categories\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | categoryId

try {
    $result = $apiInstance->getCategoryUsingGET1($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getCategoryUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| categoryId |

### Return type

[**\OpenAPI\Client\Model\CategoryDto**](../Model/CategoryDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlatParametersUsingGET2**
> \OpenAPI\Client\Model\CategoryParameterList getFlatParametersUsingGET2($category_id)

Get parameters by category ID

Use this resource to get the lists of parameters that are supported by the category you indicated. Every time a list of parameters supported by the input category is returned. More information about this resource you can find <a href=\"../../sale/#parameters\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | categoryId

try {
    $result = $apiInstance->getFlatParametersUsingGET2($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getFlatParametersUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| categoryId |

### Return type

[**\OpenAPI\Client\Model\CategoryParameterList**](../Model/CategoryParameterList.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGeneralReportUsingGET**
> \OpenAPI\Client\Model\GeneralReport getGeneralReportUsingGET($command_id)

Get a report summary for a particular commandId

Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers. More information about this resource you can find <a href=\"../../news/2018-04-19-News_grupowa_edycja_ofert_update/#2\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId

try {
    $result = $apiInstance->getGeneralReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getGeneralReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOfferUsingGET**
> \OpenAPI\Client\Model\Offer getOfferUsingGET($offer_id)

Get all fields of the particular offer

Use this resource to retrieve all fields of the particular offer. More information about this resource you can find <a href=\"../../sale/#similar-offer\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId

try {
    $result = $apiInstance->getOfferUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getOfferUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |

### Return type

[**\OpenAPI\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicationReportUsingGET**
> \OpenAPI\Client\Model\GeneralReport getPublicationReportUsingGET($command_id)

Get a report summary for a particular commandId

Use this resource to retrieve information about the offer listing statuses. You will receive a summary with a number of correctly listed offers and errors. More information about this resource you can find <a href=\"../../sale/#step-8-offer-publication-commands\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId

try {
    $result = $apiInstance->getPublicationReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicationTasksUsingGET**
> \OpenAPI\Client\Model\TaskReport getPublicationTasksUsingGET($command_id, $limit, $offset)

Get a detailed report single command task

Use this resource to retrieve information about the offer statuses on the site (Defaults: limit = 100, offset = 0). More information about this resource you can find <a href=\"../../sale/#step-8-offer-publication-commands\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->getPublicationTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationTasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasksUsingGET**
> \OpenAPI\Client\Model\TaskReport getTasksUsingGET($command_id, $limit, $offset)

Get a detailed report for a single command task

Use this resource to retrieve a detailed summary of changes introduced within one {commandId} (defaults: limit = 100, offset = 0). More information about this resource you can find <a href=\"../../news/2018-04-19-News_grupowa_edycja_ofert_update/#2\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->getTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getTasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAssignedOfferTagsGET**
> \OpenAPI\Client\Model\TagListResponse listAssignedOfferTagsGET($offer_id)

Get a list of tags assigned to offer

Use this resource to get a list of tags assigned to offer. More information about this resource you can find <a href=\"../../news/2018-09-24-Tagi-zalaczniki/#PobierzTagiZOferty\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId

try {
    $result = $apiInstance->listAssignedOfferTagsGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->listAssignedOfferTagsGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |

### Return type

[**\OpenAPI\Client\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modificationCommandUsingPUT**
> \OpenAPI\Client\Model\GeneralReport modificationCommandUsingPUT($command_id, $offer_change_command)

Modify multiple offers at once.

Use this resource to modify multiple offers at once. More information about this resource you can find <a href=\"../../news/2018-04-19-News_grupowa_edycja_ofert_update/#1\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$offer_change_command = new \OpenAPI\Client\Model\OfferChangeCommand(); // \OpenAPI\Client\Model\OfferChangeCommand | offerChangeCommandDto

try {
    $result = $apiInstance->modificationCommandUsingPUT($command_id, $offer_change_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->modificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **offer_change_command** | [**\OpenAPI\Client\Model\OfferChangeCommand**](../Model/OfferChangeCommand.md)| offerChangeCommandDto |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersOfferIdChangePriceCommandsCommandIdPut**
> \OpenAPI\Client\Model\ChangePrice offersOfferIdChangePriceCommandsCommandIdPut($offer_id, $command_id, $change_price_without_output)

Modify the Buy Now price in an offer

Use this resource to change the Buy Now price in a single offer. More information about this resource you can find <a href=\"../../news/2016-08-01-Zmiana-ceny/\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier
$command_id = 'command_id_example'; // string | Universally Unique  Identifier (UUID) you generate to enforce idempotency. UUID specification: http://www.ietf.org/rfc/rfc4122.txt
$change_price_without_output = new \OpenAPI\Client\Model\ChangePriceWithoutOutput(); // \OpenAPI\Client\Model\ChangePriceWithoutOutput | Command input data. Note that the amount field must be transferred as a string to avoid rounding errors. A currency must be provided as a 3-letter code as defined in ISO 4217. (https://en.wikipedia.org/wiki/ISO_4217#Active_codes)

try {
    $result = $apiInstance->offersOfferIdChangePriceCommandsCommandIdPut($offer_id, $command_id, $change_price_without_output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->offersOfferIdChangePriceCommandsCommandIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier |
 **command_id** | **string**| Universally Unique  Identifier (UUID) you generate to enforce idempotency. UUID specification: http://www.ietf.org/rfc/rfc4122.txt |
 **change_price_without_output** | [**\OpenAPI\Client\Model\ChangePriceWithoutOutput**](../Model/ChangePriceWithoutOutput.md)| Command input data. Note that the amount field must be transferred as a string to avoid rounding errors. A currency must be provided as a 3-letter code as defined in ISO 4217. (https://en.wikipedia.org/wiki/ISO_4217#Active_codes) |

### Return type

[**\OpenAPI\Client\Model\ChangePrice**](../Model/ChangePrice.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleDeliveryMethodsGet**
> \OpenAPI\Client\Model\InlineResponse2001 saleDeliveryMethodsGet()

Get a list of available delivery methods

Use this resource to get a list of available delivery methods. More information about this resource you can find <a href=\"../news/2018-08-14-Cenniki_dostawy/\" target=\"_blank\">here</a>.

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->saleDeliveryMethodsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->saleDeliveryMethodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleShippingRatesGet**
> \OpenAPI\Client\Model\InlineResponse200 saleShippingRatesGet($seller_id)

Get a list of seller's shipping rates

Use this resource to get a list of seller's shipping rates. More information about this resource you can find <a href=\"../news/2018-08-14-Cenniki_dostawy/\" target=\"_blank\">here</a>.

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | id of shipping rates owner

try {
    $result = $apiInstance->saleShippingRatesGet($seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->saleShippingRatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| id of shipping rates owner |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleShippingRatesIdGet**
> \OpenAPI\Client\Model\ShippingRatesSet saleShippingRatesIdGet($id)

Get details of the given shipping rates set

Use this resource to get details of the given shipping rates set. More information about this resource you can find <a href=\"../news/2018-08-14-Cenniki_dostawy\" target=\"_blank\">here</a>.

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of shipping rates set

try {
    $result = $apiInstance->saleShippingRatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->saleShippingRatesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of shipping rates set |

### Return type

[**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleShippingRatesIdPut**
> \OpenAPI\Client\Model\ShippingRatesSet saleShippingRatesIdPut($id, $shipping_rates_set)

Edit seller's shipping rates set

Use this resource to edit a new seller's shipping rates set. More information about this resource you can find <a href=\"../news/2018-08-14-Cenniki_dostawy/\" target=\"_blank\">here</a>.

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of shipping rates set
$shipping_rates_set = new \OpenAPI\Client\Model\ShippingRatesSet(); // \OpenAPI\Client\Model\ShippingRatesSet | Shipping rates set

try {
    $result = $apiInstance->saleShippingRatesIdPut($id, $shipping_rates_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->saleShippingRatesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of shipping rates set |
 **shipping_rates_set** | [**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |

### Return type

[**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleShippingRatesPost**
> \OpenAPI\Client\Model\ShippingRatesSet saleShippingRatesPost($shipping_rates_set)

Create a new seller's shipping rates set

Use this resource to create a new seller's shipping rates set. More information about this resource you can find <a href=\"../news/2018-08-14-Cenniki_dostawy/\" target=\"_blank\">here</a>.

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_rates_set = new \OpenAPI\Client\Model\ShippingRatesSet(); // \OpenAPI\Client\Model\ShippingRatesSet | Shipping rates set

try {
    $result = $apiInstance->saleShippingRatesPost($shipping_rates_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->saleShippingRatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_rates_set** | [**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |

### Return type

[**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOffersUsingGET**
> \OpenAPI\Client\Model\OffersSearchResultDtoV1 searchOffersUsingGET($seller_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $selling_mode_format, $sort, $limit, $offset)

Get seller's offers

Search seller's offers by given criteria. Accept header should be set to application/vnd.allegro.beta.v1+json

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | Seller id
$name = 'name_example'; // string | Text to search in offer title
$selling_mode_price_amount_gte = 3.4; // float | Minimal threshold of price
$selling_mode_price_amount_lte = 3.4; // float | Maximal threshold of price
$publication_status = 'publication_status_example'; // string | Publication statuses may contain more than one comma separated values
$selling_mode_format = 'selling_mode_format_example'; // string | Selling mode may contain more than one comma separated values
$sort = 'sort_example'; // string | Sort direction
$limit = 56; // int | Maximum number of seller's offers in response (acceptable values: from 1 to 1000, default is 20).
$offset = 56; // int | Index of first returned seller's offers from all search results.

try {
    $result = $apiInstance->searchOffersUsingGET($seller_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $selling_mode_format, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->searchOffersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| Seller id |
 **name** | **string**| Text to search in offer title | [optional]
 **selling_mode_price_amount_gte** | **float**| Minimal threshold of price | [optional]
 **selling_mode_price_amount_lte** | **float**| Maximal threshold of price | [optional]
 **publication_status** | **string**| Publication statuses may contain more than one comma separated values | [optional]
 **selling_mode_format** | **string**| Selling mode may contain more than one comma separated values | [optional]
 **sort** | **string**| Sort direction | [optional]
 **limit** | **int**| Maximum number of seller&#39;s offers in response (acceptable values: from 1 to 1000, default is 20). | [optional]
 **offset** | **int**| Index of first returned seller&#39;s offers from all search results. | [optional]

### Return type

[**\OpenAPI\Client\Model\OffersSearchResultDtoV1**](../Model/OffersSearchResultDtoV1.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOfferUsingPUT**
> \OpenAPI\Client\Model\Offer updateOfferUsingPUT($offer_id, $offer)

Complete a draft offer draft or edit ongoing offers

Use this resource to complete a draft offer draft or edit ongoing offers. More information about this resource you can find <a href=\"../../sale/#step-7-complete\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId
$offer = new \OpenAPI\Client\Model\Offer(); // \OpenAPI\Client\Model\Offer | offer

try {
    $result = $apiInstance->updateOfferUsingPUT($offer_id, $offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->updateOfferUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |
 **offer** | [**\OpenAPI\Client\Model\Offer**](../Model/Offer.md)| offer |

### Return type

[**\OpenAPI\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

