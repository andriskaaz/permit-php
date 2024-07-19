# OpenAPI\Client\TenantsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUserToTenant()**](TenantsApi.md#addUserToTenant) | **POST** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users | Add User To Tenant |
| [**createTenant()**](TenantsApi.md#createTenant) | **POST** /v2/facts/{proj_id}/{env_id}/tenants | Create Tenant |
| [**deleteTenant()**](TenantsApi.md#deleteTenant) | **DELETE** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Delete Tenant |
| [**deleteTenantUser()**](TenantsApi.md#deleteTenantUser) | **DELETE** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users/{user_id} | Delete Tenant User |
| [**getTenant()**](TenantsApi.md#getTenant) | **GET** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Get Tenant |
| [**listTenantUsers()**](TenantsApi.md#listTenantUsers) | **GET** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users | List Tenant Users |
| [**listTenants()**](TenantsApi.md#listTenants) | **GET** /v2/facts/{proj_id}/{env_id}/tenants | List Tenants |
| [**updateTenant()**](TenantsApi.md#updateTenant) | **PATCH** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Update Tenant |


## `addUserToTenant()`

```php
addUserToTenant($tenant_id, $proj_id, $env_id, $user_create): \OpenAPI\Client\Model\UserRead
```

Add User To Tenant

Create and add user to a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string | Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user_create = new \OpenAPI\Client\Model\UserCreate(); // \OpenAPI\Client\Model\UserCreate

try {
    $result = $apiInstance->addUserToTenant($tenant_id, $proj_id, $env_id, $user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->addUserToTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**| Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user_create** | [**\OpenAPI\Client\Model\UserCreate**](../Model/UserCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserRead**](../Model/UserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTenant()`

```php
createTenant($proj_id, $env_id, $tenant_create): \OpenAPI\Client\Model\TenantRead
```

Create Tenant

Creates a new tenant inside the Permit.io system.  If the tenant is already created: will return 200 instead of 201, and will return the existing tenant object in the response body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$tenant_create = new \OpenAPI\Client\Model\TenantCreate(); // \OpenAPI\Client\Model\TenantCreate

try {
    $result = $apiInstance->createTenant($proj_id, $env_id, $tenant_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->createTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **tenant_create** | [**\OpenAPI\Client\Model\TenantCreate**](../Model/TenantCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TenantRead**](../Model/TenantRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTenant()`

```php
deleteTenant($tenant_id, $proj_id, $env_id)
```

Delete Tenant

Deletes the tenant and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string | Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteTenant($tenant_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->deleteTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**| Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \&quot;slug\&quot;). | |
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

## `deleteTenantUser()`

```php
deleteTenantUser($tenant_id, $user_id, $proj_id, $env_id)
```

Delete Tenant User

Deletes a user under a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string | Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteTenantUser($tenant_id, $user_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->deleteTenantUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**| Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
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

## `getTenant()`

```php
getTenant($tenant_id, $proj_id, $env_id): \OpenAPI\Client\Model\TenantRead
```

Get Tenant

Gets a tenant, if such tenant exists. Otherwise returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string | Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getTenant($tenant_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->getTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**| Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\TenantRead**](../Model/TenantRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTenantUsers()`

```php
listTenantUsers($tenant_id, $proj_id, $env_id, $search, $role, $include_resource_instance_roles, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultUserRead
```

List Tenant Users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string | Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$search = 'search_example'; // string | Text search for the email field
$role = 'role_example'; // string | Match users with a specific role
$include_resource_instance_roles = false; // bool | Should add resource instance roles
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listTenantUsers($tenant_id, $proj_id, $env_id, $search, $role, $include_resource_instance_roles, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->listTenantUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**| Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **search** | **string**| Text search for the email field | [optional] |
| **role** | **string**| Match users with a specific role | [optional] |
| **include_resource_instance_roles** | **bool**| Should add resource instance roles | [optional] [default to false] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultUserRead**](../Model/PaginatedResultUserRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTenants()`

```php
listTenants($proj_id, $env_id, $search, $include_total_count, $page, $per_page): \OpenAPI\Client\Model\ResponseListTenantsV2FactsProjIdEnvIdTenantsGet
```

List Tenants

Lists all the tenants defined within an env.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$search = 'search_example'; // string | Text search for the tenant name or key
$include_total_count = false; // bool | Include total count in response
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listTenants($proj_id, $env_id, $search, $include_total_count, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->listTenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **search** | **string**| Text search for the tenant name or key | [optional] |
| **include_total_count** | **bool**| Include total count in response | [optional] [default to false] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ResponseListTenantsV2FactsProjIdEnvIdTenantsGet**](../Model/ResponseListTenantsV2FactsProjIdEnvIdTenantsGet.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenant()`

```php
updateTenant($tenant_id, $proj_id, $env_id, $tenant_update): \OpenAPI\Client\Model\TenantRead
```

Update Tenant

Partially updates the tenant definition. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string | Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$tenant_update = new \OpenAPI\Client\Model\TenantUpdate(); // \OpenAPI\Client\Model\TenantUpdate

try {
    $result = $apiInstance->updateTenant($tenant_id, $proj_id, $env_id, $tenant_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->updateTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**| Either the unique id of the tenant, or the URL-friendly key of the tenant (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **tenant_update** | [**\OpenAPI\Client\Model\TenantUpdate**](../Model/TenantUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TenantRead**](../Model/TenantRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
