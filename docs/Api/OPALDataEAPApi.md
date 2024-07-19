# OpenAPI\Client\OPALDataEAPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllData()**](OPALDataEAPApi.md#getAllData) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id} | Get All Data |
| [**getAllDataOptimized()**](OPALDataEAPApi.md#getAllDataOptimized) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/optimized | Get All Data Optimized |


## `getAllData()`

```php
getAllData($org_id, $proj_id, $env_id, $x_shard_id): \OpenAPI\Client\Model\FullData
```

Get All Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OPALDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$x_shard_id = 56; // int

try {
    $result = $apiInstance->getAllData($org_id, $proj_id, $env_id, $x_shard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OPALDataEAPApi->getAllData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **x_shard_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FullData**](../Model/FullData.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllDataOptimized()`

```php
getAllDataOptimized($org_id, $proj_id, $env_id, $x_shard_id): \OpenAPI\Client\Model\FullData
```

Get All Data Optimized

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OPALDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$x_shard_id = 56; // int

try {
    $result = $apiInstance->getAllDataOptimized($org_id, $proj_id, $env_id, $x_shard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OPALDataEAPApi->getAllDataOptimized: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **x_shard_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FullData**](../Model/FullData.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
