# OpenAPI\Client\ProxyConfigApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProxyConfig()**](ProxyConfigApi.md#createProxyConfig) | **POST** /v2/facts/{proj_id}/{env_id}/proxy_configs | Create Proxy Config |
| [**deleteProxyConfig()**](ProxyConfigApi.md#deleteProxyConfig) | **DELETE** /v2/facts/{proj_id}/{env_id}/proxy_configs/{proxy_config_id} | Delete Proxy Config |
| [**getProxyConfig()**](ProxyConfigApi.md#getProxyConfig) | **GET** /v2/facts/{proj_id}/{env_id}/proxy_configs/{proxy_config_id} | Get Proxy Config |
| [**listProxyConfigs()**](ProxyConfigApi.md#listProxyConfigs) | **GET** /v2/facts/{proj_id}/{env_id}/proxy_configs | List Proxy Configs |
| [**updateProxyConfig()**](ProxyConfigApi.md#updateProxyConfig) | **PATCH** /v2/facts/{proj_id}/{env_id}/proxy_configs/{proxy_config_id} | Update Proxy Config |


## `createProxyConfig()`

```php
createProxyConfig($proj_id, $env_id, $proxy_config_create): \OpenAPI\Client\Model\ProxyConfigRead
```

Create Proxy Config

Creates a new proxy config inside the Permit.io system.  If the proxy config is already created: will return 200 instead of 201, and will return the existing proxy config object in the response body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProxyConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$proxy_config_create = new \OpenAPI\Client\Model\ProxyConfigCreate(); // \OpenAPI\Client\Model\ProxyConfigCreate

try {
    $result = $apiInstance->createProxyConfig($proj_id, $env_id, $proxy_config_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxyConfigApi->createProxyConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **proxy_config_create** | [**\OpenAPI\Client\Model\ProxyConfigCreate**](../Model/ProxyConfigCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProxyConfigRead**](../Model/ProxyConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProxyConfig()`

```php
deleteProxyConfig($proxy_config_id, $proj_id, $env_id)
```

Delete Proxy Config

Deletes the proxy config and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProxyConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proxy_config_id = 'proxy_config_id_example'; // string | Either the unique id of the proxy config, or the URL-friendly key of the proxy config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteProxyConfig($proxy_config_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling ProxyConfigApi->deleteProxyConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proxy_config_id** | **string**| Either the unique id of the proxy config, or the URL-friendly key of the proxy config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProxyConfig()`

```php
getProxyConfig($proxy_config_id, $proj_id, $env_id): \OpenAPI\Client\Model\ProxyConfigRead
```

Get Proxy Config

Gets a proxy config, if such proxy config exists. Otherwise returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProxyConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proxy_config_id = 'proxy_config_id_example'; // string | Either the unique id of the proxy config, or the URL-friendly key of the proxy config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getProxyConfig($proxy_config_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxyConfigApi->getProxyConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proxy_config_id** | **string**| Either the unique id of the proxy config, or the URL-friendly key of the proxy config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ProxyConfigRead**](../Model/ProxyConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProxyConfigs()`

```php
listProxyConfigs($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\ProxyConfigRead[]
```

List Proxy Configs

Lists all the proxy configs defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProxyConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listProxyConfigs($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxyConfigApi->listProxyConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ProxyConfigRead[]**](../Model/ProxyConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProxyConfig()`

```php
updateProxyConfig($proxy_config_id, $proj_id, $env_id, $proxy_config_update): \OpenAPI\Client\Model\ProxyConfigRead
```

Update Proxy Config

Partially updates the proxy config definition. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProxyConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proxy_config_id = 'proxy_config_id_example'; // string | Either the unique id of the proxy config, or the URL-friendly key of the proxy config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$proxy_config_update = new \OpenAPI\Client\Model\ProxyConfigUpdate(); // \OpenAPI\Client\Model\ProxyConfigUpdate

try {
    $result = $apiInstance->updateProxyConfig($proxy_config_id, $proj_id, $env_id, $proxy_config_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxyConfigApi->updateProxyConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proxy_config_id** | **string**| Either the unique id of the proxy config, or the URL-friendly key of the proxy config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **proxy_config_update** | [**\OpenAPI\Client\Model\ProxyConfigUpdate**](../Model/ProxyConfigUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProxyConfigRead**](../Model/ProxyConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
