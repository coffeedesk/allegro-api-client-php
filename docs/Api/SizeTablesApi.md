# OpenAPI\Client\SizeTablesApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTableUsingGET**](SizeTablesApi.md#getTableUsingGET) | **GET** /sale/size-tables/{tableId} | Get selected size table
[**getTablesUsingGET**](SizeTablesApi.md#getTablesUsingGET) | **GET** /sale/size-tables | Get all size tables assigned to a seller account


# **getTableUsingGET**
> \OpenAPI\Client\Model\PublicTableDto getTableUsingGET($table_id)

Get selected size table

Use this resource to get selected size table. More information about this resource you can find <a href=\"../../news/2018-04-19-News_Tabele_rozmiarow/\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 'table_id_example'; // string | tableId

try {
    $result = $apiInstance->getTableUsingGET($table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTableUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table_id** | **string**| tableId |

### Return type

[**\OpenAPI\Client\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTablesUsingGET**
> \OpenAPI\Client\Model\PublicTablesDto getTablesUsingGET($user_id)

Get all size tables assigned to a seller account

Use this resource to get all size tables assigned to a seller account. More information about this resource you can find <a href=\"../../news/2018-04-19-News_Tabele_rozmiarow/\" target=\"_blank\">here.</a>

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

$apiInstance = new OpenAPI\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | user.id

try {
    $result = $apiInstance->getTablesUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| user.id |

### Return type

[**\OpenAPI\Client\Model\PublicTablesDto**](../Model/PublicTablesDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

