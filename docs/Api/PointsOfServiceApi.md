# OpenAPI\Client\PointsOfServiceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pointsOfServiceGet**](PointsOfServiceApi.md#pointsOfServiceGet) | **GET** /points-of-service | Get a list of points of service by seller ID
[**pointsOfServiceIdDelete**](PointsOfServiceApi.md#pointsOfServiceIdDelete) | **DELETE** /points-of-service/{id} | Delete a point of service
[**pointsOfServiceIdGet**](PointsOfServiceApi.md#pointsOfServiceIdGet) | **GET** /points-of-service/{id} | Get details of a point of service for a given ID
[**pointsOfServiceIdPut**](PointsOfServiceApi.md#pointsOfServiceIdPut) | **PUT** /points-of-service/{id} | Modify a point of service
[**pointsOfServicePost**](PointsOfServiceApi.md#pointsOfServicePost) | **POST** /points-of-service | Create a point of service


# **pointsOfServiceGet**
> \OpenAPI\Client\Model\SearchResult pointsOfServiceGet($seller_id)

Get a list of points of service by seller ID

Use this resource to get a list of points of service by seller ID. More information about this resource you can find <a href=\"../../news/2017-08-11-Punkty_odbioru/#3\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = 'seller_id_example'; // string | User ID

try {
    $result = $apiInstance->pointsOfServiceGet($seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->pointsOfServiceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| User ID |

### Return type

[**\OpenAPI\Client\Model\SearchResult**](../Model/SearchResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointsOfServiceIdDelete**
> pointsOfServiceIdDelete($id)

Delete a point of service

Use this resource to delete a point of service. More information about this resource you can find <a href=\"../../news/2017-08-11-Punkty_odbioru/#5\" target=\"_blank\">here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Point of service ID

try {
    $apiInstance->pointsOfServiceIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->pointsOfServiceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Point of service ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointsOfServiceIdGet**
> \OpenAPI\Client\Model\Pos pointsOfServiceIdGet($id)

Get details of a point of service for a given ID

Use this resource to get a details of a point of service for a given ID. More information about this resource you can find <a href=\"../../news/2017-08-11-Punkty_odbioru/#4\" target=\"_blank\">here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Point of service ID

try {
    $result = $apiInstance->pointsOfServiceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->pointsOfServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Point of service ID |

### Return type

[**\OpenAPI\Client\Model\Pos**](../Model/Pos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointsOfServiceIdPut**
> \OpenAPI\Client\Model\Pos pointsOfServiceIdPut($id, $pos)

Modify a point of service

Use this resource to modify a point of service. More information about this resource you can find <a href=\"../../news/2017-08-11-Punkty_odbioru/#2\" target=\"_blank\">here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Point of service ID. Must match values with 'id' property from the body.
$pos = new \OpenAPI\Client\Model\Pos(); // \OpenAPI\Client\Model\Pos | Point of service

try {
    $result = $apiInstance->pointsOfServiceIdPut($id, $pos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->pointsOfServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Point of service ID. Must match values with &#39;id&#39; property from the body. |
 **pos** | [**\OpenAPI\Client\Model\Pos**](../Model/Pos.md)| Point of service |

### Return type

[**\OpenAPI\Client\Model\Pos**](../Model/Pos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointsOfServicePost**
> \OpenAPI\Client\Model\Pos pointsOfServicePost($pos)

Create a point of service

Use this resource to create a point of servic. More information about this resource you can find <a href=\"../../news/2017-08-11-Punkty_odbioru/#1\" target=\"_blank\">here.</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pos = new \OpenAPI\Client\Model\Pos(); // \OpenAPI\Client\Model\Pos | Point of service

try {
    $result = $apiInstance->pointsOfServicePost($pos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->pointsOfServicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pos** | [**\OpenAPI\Client\Model\Pos**](../Model/Pos.md)| Point of service |

### Return type

[**\OpenAPI\Client\Model\Pos**](../Model/Pos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

