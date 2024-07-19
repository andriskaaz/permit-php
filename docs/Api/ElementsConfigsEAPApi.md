# OpenAPI\Client\ElementsConfigsEAPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createElementsConfig()**](ElementsConfigsEAPApi.md#createElementsConfig) | **POST** /v2/elements/{proj_id}/{env_id}/config | Create Elements Config |
| [**deleteElementsConfig()**](ElementsConfigsEAPApi.md#deleteElementsConfig) | **DELETE** /v2/elements/{proj_id}/{env_id}/{elements_config_id} | Delete Elements Config |
| [**getElementsConfig()**](ElementsConfigsEAPApi.md#getElementsConfig) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Get Elements Config |
| [**getElementsConfigRuntime()**](ElementsConfigsEAPApi.md#getElementsConfigRuntime) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/runtime | Get Elements Config Runtime |
| [**listElementsConfigs()**](ElementsConfigsEAPApi.md#listElementsConfigs) | **GET** /v2/elements/{proj_id}/{env_id}/config | List Elements Configs |
| [**updateElementsConfig()**](ElementsConfigsEAPApi.md#updateElementsConfig) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Update Elements Config |


## `createElementsConfig()`

```php
createElementsConfig($proj_id, $env_id, $elements_config_create): \OpenAPI\Client\Model\ElementsConfigRead
```

Create Elements Config

Creates a new elements_config under the active organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_create = new \OpenAPI\Client\Model\ElementsConfigCreate(); // \OpenAPI\Client\Model\ElementsConfigCreate

try {
    $result = $apiInstance->createElementsConfig($proj_id, $env_id, $elements_config_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsEAPApi->createElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_create** | [**\OpenAPI\Client\Model\ElementsConfigCreate**](../Model/ElementsConfigCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRead**](../Model/ElementsConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteElementsConfig()`

```php
deleteElementsConfig($elements_config_id, $proj_id, $env_id)
```

Delete Elements Config

Deletes the elements_config and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteElementsConfig($elements_config_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsEAPApi->deleteElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
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

## `getElementsConfig()`

```php
getElementsConfig($elements_config_id, $proj_id, $env_id): \OpenAPI\Client\Model\ElementsConfigRead
```

Get Elements Config

Gets a single elements_config matching the given elements_config_id, if such elements_config exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getElementsConfig($elements_config_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsEAPApi->getElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRead**](../Model/ElementsConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementsConfigRuntime()`

```php
getElementsConfigRuntime($elements_config_id, $proj_id, $env_id, $resource_instance_id): \OpenAPI\Client\Model\ElementsConfigRuntimeRead
```

Get Elements Config Runtime

Gets a single elements_config matching the given elements_config_id, if such elements_config exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $result = $apiInstance->getElementsConfigRuntime($elements_config_id, $proj_id, $env_id, $resource_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsEAPApi->getElementsConfigRuntime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRuntimeRead**](../Model/ElementsConfigRuntimeRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listElementsConfigs()`

```php
listElementsConfigs($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\ResponseListElementsConfigsV2ElementsProjIdEnvIdConfigGet
```

List Elements Configs

Lists all the elements_configs under the active organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsEAPApi(
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
    $result = $apiInstance->listElementsConfigs($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsEAPApi->listElementsConfigs: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ResponseListElementsConfigsV2ElementsProjIdEnvIdConfigGet**](../Model/ResponseListElementsConfigsV2ElementsProjIdEnvIdConfigGet.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateElementsConfig()`

```php
updateElementsConfig($elements_config_id, $proj_id, $env_id, $elements_config_update): \OpenAPI\Client\Model\ElementsConfigRead
```

Update Elements Config

Updates the elements_config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ElementsConfigsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_update = new \OpenAPI\Client\Model\ElementsConfigUpdate(); // \OpenAPI\Client\Model\ElementsConfigUpdate

try {
    $result = $apiInstance->updateElementsConfig($elements_config_id, $proj_id, $env_id, $elements_config_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementsConfigsEAPApi->updateElementsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_update** | [**\OpenAPI\Client\Model\ElementsConfigUpdate**](../Model/ElementsConfigUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ElementsConfigRead**](../Model/ElementsConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
