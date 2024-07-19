# OpenAPI\Client\RolesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignPermissionsToRole()**](RolesApi.md#assignPermissionsToRole) | **POST** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Assign Permissions To Role |
| [**createRole()**](RolesApi.md#createRole) | **POST** /v2/schema/{proj_id}/{env_id}/roles | Create Role |
| [**deleteRole()**](RolesApi.md#deleteRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Delete Role |
| [**getRole()**](RolesApi.md#getRole) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Get Role |
| [**getRoleAncestors()**](RolesApi.md#getRoleAncestors) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/ancestors | Get Role Ancestors |
| [**getRoleDescendants()**](RolesApi.md#getRoleDescendants) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/descendants | Get Role Descendants |
| [**listRoles()**](RolesApi.md#listRoles) | **GET** /v2/schema/{proj_id}/{env_id}/roles | List Roles |
| [**removePermissionsFromRole()**](RolesApi.md#removePermissionsFromRole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Remove Permissions From Role |
| [**updateRole()**](RolesApi.md#updateRole) | **PATCH** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Update Role |


## `assignPermissionsToRole()`

```php
assignPermissionsToRole($role_id, $proj_id, $env_id, $add_role_permissions): \OpenAPI\Client\Model\RoleRead
```

Assign Permissions To Role

Assign permissions to role.  If some of the permissions specified are already assigned, will skip them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$add_role_permissions = new \OpenAPI\Client\Model\AddRolePermissions(); // \OpenAPI\Client\Model\AddRolePermissions

try {
    $result = $apiInstance->assignPermissionsToRole($role_id, $proj_id, $env_id, $add_role_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->assignPermissionsToRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **add_role_permissions** | [**\OpenAPI\Client\Model\AddRolePermissions**](../Model/AddRolePermissions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRole()`

```php
createRole($proj_id, $env_id, $role_create): \OpenAPI\Client\Model\RoleRead
```

Create Role

Creates a new tenant role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_create = new \OpenAPI\Client\Model\RoleCreate(); // \OpenAPI\Client\Model\RoleCreate

try {
    $result = $apiInstance->createRole($proj_id, $env_id, $role_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_create** | [**\OpenAPI\Client\Model\RoleCreate**](../Model/RoleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRole()`

```php
deleteRole($role_id, $proj_id, $env_id)
```

Delete Role

Deletes a tenant role and all its related data. This includes any permissions granted to said role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteRole($role_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
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

## `getRole()`

```php
getRole($role_id, $proj_id, $env_id): \OpenAPI\Client\Model\RoleRead
```

Get Role

Gets a single tenant role, if such role exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getRole($role_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleAncestors()`

```php
getRoleAncestors($role_id, $proj_id, $env_id): \OpenAPI\Client\Model\RoleList
```

Get Role Ancestors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getRoleAncestors($role_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoleAncestors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\RoleList**](../Model/RoleList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleDescendants()`

```php
getRoleDescendants($role_id, $proj_id, $env_id): \OpenAPI\Client\Model\RoleList
```

Get Role Descendants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getRoleDescendants($role_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoleDescendants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\RoleList**](../Model/RoleList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoles()`

```php
listRoles($proj_id, $env_id, $include_total_count, $page, $per_page, $search): \OpenAPI\Client\Model\ResponseListRolesV2SchemaProjIdEnvIdRolesGet
```

List Roles

Lists all tenant roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$include_total_count = false; // bool | Include total count in response
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).
$search = 'search_example'; // string | Text search for the object name or key

try {
    $result = $apiInstance->listRoles($proj_id, $env_id, $include_total_count, $page, $per_page, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->listRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **include_total_count** | **bool**| Include total count in response | [optional] [default to false] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |
| **search** | **string**| Text search for the object name or key | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseListRolesV2SchemaProjIdEnvIdRolesGet**](../Model/ResponseListRolesV2SchemaProjIdEnvIdRolesGet.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePermissionsFromRole()`

```php
removePermissionsFromRole($role_id, $proj_id, $env_id, $remove_role_permissions): \OpenAPI\Client\Model\RoleRead
```

Remove Permissions From Role

Remove permissions from role.  If some of the permissions specified are already unassigned, will skip them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$remove_role_permissions = new \OpenAPI\Client\Model\RemoveRolePermissions(); // \OpenAPI\Client\Model\RemoveRolePermissions

try {
    $result = $apiInstance->removePermissionsFromRole($role_id, $proj_id, $env_id, $remove_role_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->removePermissionsFromRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **remove_role_permissions** | [**\OpenAPI\Client\Model\RemoveRolePermissions**](../Model/RemoveRolePermissions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRole()`

```php
updateRole($role_id, $proj_id, $env_id, $role_update): \OpenAPI\Client\Model\RoleRead
```

Update Role

Partially updates a tenant role. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_update = new \OpenAPI\Client\Model\RoleUpdate(); // \OpenAPI\Client\Model\RoleUpdate

try {
    $result = $apiInstance->updateRole($role_id, $proj_id, $env_id, $role_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_update** | [**\OpenAPI\Client\Model\RoleUpdate**](../Model/RoleUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleRead**](../Model/RoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
