# OpenAPI\Client\ResourceActionGroupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createResourceActionGroup()**](ResourceActionGroupsApi.md#createResourceActionGroup) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups | Create Resource Action Group |
| [**deleteResourceActionGroup()**](ResourceActionGroupsApi.md#deleteResourceActionGroup) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups/{action_group_id} | Delete Resource Action Group |
| [**getResourceActionGroup()**](ResourceActionGroupsApi.md#getResourceActionGroup) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups/{action_group_id} | Get Resource Action Group |
| [**listResourceActionGroups()**](ResourceActionGroupsApi.md#listResourceActionGroups) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups | List Resource Action Groups |
| [**updateResourceActionGroup()**](ResourceActionGroupsApi.md#updateResourceActionGroup) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/action_groups/{action_group_id} | Update Resource Action Group |


## `createResourceActionGroup()`

```php
createResourceActionGroup($resource_id, $proj_id, $env_id, $resource_action_group_create): \OpenAPI\Client\Model\ResourceActionGroupRead
```

Create Resource Action Group

Creates a new action group that can affect the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_action_group_create = new \OpenAPI\Client\Model\ResourceActionGroupCreate(); // \OpenAPI\Client\Model\ResourceActionGroupCreate

try {
    $result = $apiInstance->createResourceActionGroup($resource_id, $proj_id, $env_id, $resource_action_group_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionGroupsApi->createResourceActionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_action_group_create** | [**\OpenAPI\Client\Model\ResourceActionGroupCreate**](../Model/ResourceActionGroupCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceActionGroupRead**](../Model/ResourceActionGroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResourceActionGroup()`

```php
deleteResourceActionGroup($resource_id, $action_group_id, $proj_id, $env_id)
```

Delete Resource Action Group

Deletes the action and all its related data. This includes any permissions granted to perform the action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$action_group_id = 'action_group_id_example'; // string | Either the unique id of the action group, or the URL-friendly key of the action group (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteResourceActionGroup($resource_id, $action_group_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionGroupsApi->deleteResourceActionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **action_group_id** | **string**| Either the unique id of the action group, or the URL-friendly key of the action group (i.e: the \&quot;slug\&quot;). | |
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

## `getResourceActionGroup()`

```php
getResourceActionGroup($resource_id, $action_group_id, $proj_id, $env_id): \OpenAPI\Client\Model\ResourceActionGroupRead
```

Get Resource Action Group

Gets a single action group defined on the resource, if such action exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$action_group_id = 'action_group_id_example'; // string | Either the unique id of the action group, or the URL-friendly key of the action group (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getResourceActionGroup($resource_id, $action_group_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionGroupsApi->getResourceActionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **action_group_id** | **string**| Either the unique id of the action group, or the URL-friendly key of the action group (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ResourceActionGroupRead**](../Model/ResourceActionGroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listResourceActionGroups()`

```php
listResourceActionGroups($resource_id, $proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\ResourceActionGroupRead[]
```

List Resource Action Groups

Lists all the action groups defined on the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listResourceActionGroups($resource_id, $proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionGroupsApi->listResourceActionGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ResourceActionGroupRead[]**](../Model/ResourceActionGroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResourceActionGroup()`

```php
updateResourceActionGroup($resource_id, $action_group_id, $proj_id, $env_id, $resource_action_group_update): \OpenAPI\Client\Model\ResourceActionGroupRead
```

Update Resource Action Group

Partially updates the action defined on a resource. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceActionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$action_group_id = 'action_group_id_example'; // string | Either the unique id of the action group, or the URL-friendly key of the action group (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_action_group_update = new \OpenAPI\Client\Model\ResourceActionGroupUpdate(); // \OpenAPI\Client\Model\ResourceActionGroupUpdate

try {
    $result = $apiInstance->updateResourceActionGroup($resource_id, $action_group_id, $proj_id, $env_id, $resource_action_group_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceActionGroupsApi->updateResourceActionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **action_group_id** | **string**| Either the unique id of the action group, or the URL-friendly key of the action group (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_action_group_update** | [**\OpenAPI\Client\Model\ResourceActionGroupUpdate**](../Model/ResourceActionGroupUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceActionGroupRead**](../Model/ResourceActionGroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
