# OpenAPI\Client\PolicyDecisionPointsEAPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableDebugAuditLogs()**](PolicyDecisionPointsEAPApi.md#disableDebugAuditLogs) | **PUT** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/debug-audit-logs/disable | Disable debug audit logs |
| [**enableDebugAuditLogs()**](PolicyDecisionPointsEAPApi.md#enableDebugAuditLogs) | **PUT** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/debug-audit-logs/enable | Enable debug audit logs |
| [**getPdpConfigValues()**](PolicyDecisionPointsEAPApi.md#getPdpConfigValues) | **GET** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/values | Get PDP configuration |
| [**listPdpConfigs()**](PolicyDecisionPointsEAPApi.md#listPdpConfigs) | **GET** /v2/pdps/{proj_id}/{env_id}/configs | List PDP configurations |
| [**migrateShards()**](PolicyDecisionPointsEAPApi.md#migrateShards) | **POST** /v2/pdps/{proj_id}/{env_id}/configs/migrate-shards | Migrate PDP Config number of shards |
| [**rotatePdpApiKey()**](PolicyDecisionPointsEAPApi.md#rotatePdpApiKey) | **POST** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/rotate-api-key | Rotate PDP API Key |


## `disableDebugAuditLogs()`

```php
disableDebugAuditLogs($proj_id, $env_id, $pdp_id): \OpenAPI\Client\Model\PDPConfigRead
```

Disable debug audit logs

Disabled debug audit logs for the PDP container with id `pdp_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | The unique id of the pdp

try {
    $result = $apiInstance->disableDebugAuditLogs($proj_id, $env_id, $pdp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsEAPApi->disableDebugAuditLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| The unique id of the pdp | |

### Return type

[**\OpenAPI\Client\Model\PDPConfigRead**](../Model/PDPConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableDebugAuditLogs()`

```php
enableDebugAuditLogs($proj_id, $env_id, $pdp_id): \OpenAPI\Client\Model\PDPConfigRead
```

Enable debug audit logs

Enables debug audit logs for the PDP container with id `pdp_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | The unique id of the pdp

try {
    $result = $apiInstance->enableDebugAuditLogs($proj_id, $env_id, $pdp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsEAPApi->enableDebugAuditLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| The unique id of the pdp | |

### Return type

[**\OpenAPI\Client\Model\PDPConfigRead**](../Model/PDPConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPdpConfigValues()`

```php
getPdpConfigValues($proj_id, $env_id, $pdp_id, $x_shard_id): \OpenAPI\Client\Model\RemoteConfig
```

Get PDP configuration

Gets the configuration values for the PDP container with id `pdp_id`.  The config values returned are considered \"overrides\", meaning they are overriding any default values given to the container by the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | The unique id of the pdp
$x_shard_id = 56; // int

try {
    $result = $apiInstance->getPdpConfigValues($proj_id, $env_id, $pdp_id, $x_shard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsEAPApi->getPdpConfigValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| The unique id of the pdp | |
| **x_shard_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RemoteConfig**](../Model/RemoteConfig.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPdpConfigs()`

```php
listPdpConfigs($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\PDPConfigRead[]
```

List PDP configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsEAPApi(
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
    $result = $apiInstance->listPdpConfigs($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsEAPApi->listPdpConfigs: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\PDPConfigRead[]**](../Model/PDPConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migrateShards()`

```php
migrateShards($proj_id, $env_id, $pdp_shard_migration): \OpenAPI\Client\Model\PDPConfigRead
```

Migrate PDP Config number of shards

The migration process is as followed: 1. Perform request to this endpoint with the new number of shards 2. A new PDP Config will be created with the new number of shards and a new api-key 3. Create a new PDP cluster with the same instances as the number of shards defined in the new PDP Config 4. Wait for the new PDP cluster to be ready 5. Update your PDP load balancer to point to the new PDP cluster  More info can be found here https://docs.permit.io/concepts/pdp-sharding

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_shard_migration = new \OpenAPI\Client\Model\PDPShardMigration(); // \OpenAPI\Client\Model\PDPShardMigration

try {
    $result = $apiInstance->migrateShards($proj_id, $env_id, $pdp_shard_migration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsEAPApi->migrateShards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_shard_migration** | [**\OpenAPI\Client\Model\PDPShardMigration**](../Model/PDPShardMigration.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PDPConfigRead**](../Model/PDPConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rotatePdpApiKey()`

```php
rotatePdpApiKey($proj_id, $env_id, $pdp_id): \OpenAPI\Client\Model\PDPConfigRead
```

Rotate PDP API Key

Rotates the API key of the PDP container with id `pdp_id`.  The rotation of the API key revokes the old API key and issues a new API key to the PDP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PolicyDecisionPointsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$pdp_id = 'pdp_id_example'; // string | The unique id of the pdp

try {
    $result = $apiInstance->rotatePdpApiKey($proj_id, $env_id, $pdp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyDecisionPointsEAPApi->rotatePdpApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **pdp_id** | **string**| The unique id of the pdp | |

### Return type

[**\OpenAPI\Client\Model\PDPConfigRead**](../Model/PDPConfigRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
