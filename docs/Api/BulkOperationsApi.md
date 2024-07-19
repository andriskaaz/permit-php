# OpenAPI\Client\BulkOperationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateOrReplaceRoles()**](BulkOperationsApi.md#bulkCreateOrReplaceRoles) | **PUT** /v2/schema/{proj_id}/{env_id}/bulk/roles | Bulk Create Or Replace Roles |
| [**bulkCreateTenants()**](BulkOperationsApi.md#bulkCreateTenants) | **POST** /v2/facts/{proj_id}/{env_id}/bulk/tenants | Bulk Create Tenants |
| [**bulkCreateUsers()**](BulkOperationsApi.md#bulkCreateUsers) | **POST** /v2/facts/{proj_id}/{env_id}/bulk/users | Bulk Create Users |
| [**bulkDeleteResourceInstances()**](BulkOperationsApi.md#bulkDeleteResourceInstances) | **DELETE** /v2/facts/{proj_id}/{env_id}/bulk/resource_instances | Bulk Delete Resource Instances |
| [**bulkDeleteTenants()**](BulkOperationsApi.md#bulkDeleteTenants) | **DELETE** /v2/facts/{proj_id}/{env_id}/bulk/tenants | Bulk Delete Tenants |
| [**bulkDeleteUsers()**](BulkOperationsApi.md#bulkDeleteUsers) | **DELETE** /v2/facts/{proj_id}/{env_id}/bulk/users | Bulk Delete Users |
| [**bulkReplaceResourceInstances()**](BulkOperationsApi.md#bulkReplaceResourceInstances) | **PUT** /v2/facts/{proj_id}/{env_id}/bulk/resource_instances | Bulk Replace Resource Instances |
| [**bulkReplaceUsers()**](BulkOperationsApi.md#bulkReplaceUsers) | **PUT** /v2/facts/{proj_id}/{env_id}/bulk/users | Bulk Replace Users |


## `bulkCreateOrReplaceRoles()`

```php
bulkCreateOrReplaceRoles($proj_id, $env_id, $role_create_bulk_operation): \OpenAPI\Client\Model\RoleCreateBulkOperationResult
```

Bulk Create Or Replace Roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_create_bulk_operation = new \OpenAPI\Client\Model\RoleCreateBulkOperation(); // \OpenAPI\Client\Model\RoleCreateBulkOperation

try {
    $result = $apiInstance->bulkCreateOrReplaceRoles($proj_id, $env_id, $role_create_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkCreateOrReplaceRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_create_bulk_operation** | [**\OpenAPI\Client\Model\RoleCreateBulkOperation**](../Model/RoleCreateBulkOperation.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleCreateBulkOperationResult**](../Model/RoleCreateBulkOperationResult.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkCreateTenants()`

```php
bulkCreateTenants($proj_id, $env_id, $tenant_create_bulk_operation): object
```

Bulk Create Tenants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$tenant_create_bulk_operation = new \OpenAPI\Client\Model\TenantCreateBulkOperation(); // \OpenAPI\Client\Model\TenantCreateBulkOperation

try {
    $result = $apiInstance->bulkCreateTenants($proj_id, $env_id, $tenant_create_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkCreateTenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **tenant_create_bulk_operation** | [**\OpenAPI\Client\Model\TenantCreateBulkOperation**](../Model/TenantCreateBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkCreateUsers()`

```php
bulkCreateUsers($proj_id, $env_id, $user_create_bulk_operation): object
```

Bulk Create Users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_create_bulk_operation = new \OpenAPI\Client\Model\UserCreateBulkOperation(); // \OpenAPI\Client\Model\UserCreateBulkOperation

try {
    $result = $apiInstance->bulkCreateUsers($proj_id, $env_id, $user_create_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkCreateUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_create_bulk_operation** | [**\OpenAPI\Client\Model\UserCreateBulkOperation**](../Model/UserCreateBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteResourceInstances()`

```php
bulkDeleteResourceInstances($proj_id, $env_id, $resource_instance_delete_bulk_operation): object
```

Bulk Delete Resource Instances

Deletes many Resource Instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_instance_delete_bulk_operation = new \OpenAPI\Client\Model\ResourceInstanceDeleteBulkOperation(); // \OpenAPI\Client\Model\ResourceInstanceDeleteBulkOperation

try {
    $result = $apiInstance->bulkDeleteResourceInstances($proj_id, $env_id, $resource_instance_delete_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkDeleteResourceInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_instance_delete_bulk_operation** | [**\OpenAPI\Client\Model\ResourceInstanceDeleteBulkOperation**](../Model/ResourceInstanceDeleteBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteTenants()`

```php
bulkDeleteTenants($proj_id, $env_id, $tenant_delete_bulk_operation): object
```

Bulk Delete Tenants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$tenant_delete_bulk_operation = new \OpenAPI\Client\Model\TenantDeleteBulkOperation(); // \OpenAPI\Client\Model\TenantDeleteBulkOperation

try {
    $result = $apiInstance->bulkDeleteTenants($proj_id, $env_id, $tenant_delete_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkDeleteTenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **tenant_delete_bulk_operation** | [**\OpenAPI\Client\Model\TenantDeleteBulkOperation**](../Model/TenantDeleteBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteUsers()`

```php
bulkDeleteUsers($proj_id, $env_id, $user_delete_bulk_operation): object
```

Bulk Delete Users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_delete_bulk_operation = new \OpenAPI\Client\Model\UserDeleteBulkOperation(); // \OpenAPI\Client\Model\UserDeleteBulkOperation

try {
    $result = $apiInstance->bulkDeleteUsers($proj_id, $env_id, $user_delete_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkDeleteUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_delete_bulk_operation** | [**\OpenAPI\Client\Model\UserDeleteBulkOperation**](../Model/UserDeleteBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkReplaceResourceInstances()`

```php
bulkReplaceResourceInstances($proj_id, $env_id, $resource_instance_create_bulk_operation): object
```

Bulk Replace Resource Instances

Creates or replaces Resource Instances. If a resource instance with `key` and `resource` already exists, it will be replaced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_instance_create_bulk_operation = new \OpenAPI\Client\Model\ResourceInstanceCreateBulkOperation(); // \OpenAPI\Client\Model\ResourceInstanceCreateBulkOperation

try {
    $result = $apiInstance->bulkReplaceResourceInstances($proj_id, $env_id, $resource_instance_create_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkReplaceResourceInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_instance_create_bulk_operation** | [**\OpenAPI\Client\Model\ResourceInstanceCreateBulkOperation**](../Model/ResourceInstanceCreateBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkReplaceUsers()`

```php
bulkReplaceUsers($proj_id, $env_id, $user_replace_bulk_operation): object
```

Bulk Replace Users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_replace_bulk_operation = new \OpenAPI\Client\Model\UserReplaceBulkOperation(); // \OpenAPI\Client\Model\UserReplaceBulkOperation

try {
    $result = $apiInstance->bulkReplaceUsers($proj_id, $env_id, $user_replace_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->bulkReplaceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_replace_bulk_operation** | [**\OpenAPI\Client\Model\UserReplaceBulkOperation**](../Model/UserReplaceBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
