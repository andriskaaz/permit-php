# OpenAPI\Client\RoleAssignmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignRole()**](RoleAssignmentsApi.md#assignRole) | **POST** /v2/facts/{proj_id}/{env_id}/role_assignments | Assign Role |
| [**bulkAssignRole()**](RoleAssignmentsApi.md#bulkAssignRole) | **POST** /v2/facts/{proj_id}/{env_id}/role_assignments/bulk | Bulk create role assignments(EAP) |
| [**bulkUnassignRole()**](RoleAssignmentsApi.md#bulkUnassignRole) | **DELETE** /v2/facts/{proj_id}/{env_id}/role_assignments/bulk | Bulk Unassign Role |
| [**listRoleAssignments()**](RoleAssignmentsApi.md#listRoleAssignments) | **GET** /v2/facts/{proj_id}/{env_id}/role_assignments | List Role Assignments |
| [**unassignRole()**](RoleAssignmentsApi.md#unassignRole) | **DELETE** /v2/facts/{proj_id}/{env_id}/role_assignments | Unassign Role |


## `assignRole()`

```php
assignRole($proj_id, $env_id, $role_assignment_create): \OpenAPI\Client\Model\RoleAssignmentRead
```

Assign Role

Assigns a role to a user within a tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_assignment_create = new \OpenAPI\Client\Model\RoleAssignmentCreate(); // \OpenAPI\Client\Model\RoleAssignmentCreate

try {
    $result = $apiInstance->assignRole($proj_id, $env_id, $role_assignment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->assignRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_assignment_create** | [**\OpenAPI\Client\Model\RoleAssignmentCreate**](../Model/RoleAssignmentCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleAssignmentRead**](../Model/RoleAssignmentRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkAssignRole()`

```php
bulkAssignRole($proj_id, $env_id, $role_assignment_create): \OpenAPI\Client\Model\BulkRoleAssignmentReport
```

Bulk create role assignments(EAP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_assignment_create = array(new \OpenAPI\Client\Model\RoleAssignmentCreate()); // \OpenAPI\Client\Model\RoleAssignmentCreate[]

try {
    $result = $apiInstance->bulkAssignRole($proj_id, $env_id, $role_assignment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->bulkAssignRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_assignment_create** | [**\OpenAPI\Client\Model\RoleAssignmentCreate[]**](../Model/RoleAssignmentCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BulkRoleAssignmentReport**](../Model/BulkRoleAssignmentReport.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUnassignRole()`

```php
bulkUnassignRole($proj_id, $env_id, $role_assignment_remove): \OpenAPI\Client\Model\BulkRoleUnAssignmentReport
```

Bulk Unassign Role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_assignment_remove = array(new \OpenAPI\Client\Model\RoleAssignmentRemove()); // \OpenAPI\Client\Model\RoleAssignmentRemove[]

try {
    $result = $apiInstance->bulkUnassignRole($proj_id, $env_id, $role_assignment_remove);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->bulkUnassignRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_assignment_remove** | [**\OpenAPI\Client\Model\RoleAssignmentRemove[]**](../Model/RoleAssignmentRemove.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BulkRoleUnAssignmentReport**](../Model/BulkRoleUnAssignmentReport.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoleAssignments()`

```php
listRoleAssignments($proj_id, $env_id, $user, $role, $tenant, $resource, $resource_instance, $detailed, $page, $per_page): \OpenAPI\Client\Model\ResponseListRoleAssignmentsV2FactsProjIdEnvIdRoleAssignmentsGet
```

List Role Assignments

Lists the role assignments defined within an environment.  - If the `user` filter is present, will only return the role assignments of that user (supports multiple). - If the `tenant` filter is present, will only return the role assignments in that tenant (supports multiple). - If the `role` filter is present, will only return role assignments that are granting that role (supports multiple). - If the `resource` filter is present, will only return role assignments for resource instances of that resource type. - If the `resource_instance` filter is present, will only return role assignments for that resource instance.  Providing both `tenant` and `resource_instance` filters will only return role assignments if the resource instance is in that tenant. If multiple tenants are received, the last tenant will be compared with the resource instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$user = array('user_example'); // string[] | optional user(s) filter, will only return role assignments granted to this user(s).
$role = array('role_example'); // string[] | optional role(s) filter, will only return role assignments granting this role(s).
$tenant = array('tenant_example'); // string[] | optional tenant(s) filter, will only return role assignments granted in that tenant(s).
$resource = 'resource_example'; // string | optional resource **type** filter, will only return role assignments granted on that resource type.
$resource_instance = 'resource_instance_example'; // string | optional resource instance filter, will only return role assignments granted on that resource instance.
$detailed = false; // bool | Whether to return full details about the user, tenant and role
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listRoleAssignments($proj_id, $env_id, $user, $role, $tenant, $resource, $resource_instance, $detailed, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->listRoleAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **user** | [**string[]**](../Model/string.md)| optional user(s) filter, will only return role assignments granted to this user(s). | [optional] |
| **role** | [**string[]**](../Model/string.md)| optional role(s) filter, will only return role assignments granting this role(s). | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| optional tenant(s) filter, will only return role assignments granted in that tenant(s). | [optional] |
| **resource** | **string**| optional resource **type** filter, will only return role assignments granted on that resource type. | [optional] |
| **resource_instance** | **string**| optional resource instance filter, will only return role assignments granted on that resource instance. | [optional] |
| **detailed** | **bool**| Whether to return full details about the user, tenant and role | [optional] [default to false] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ResponseListRoleAssignmentsV2FactsProjIdEnvIdRoleAssignmentsGet**](../Model/ResponseListRoleAssignmentsV2FactsProjIdEnvIdRoleAssignmentsGet.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignRole()`

```php
unassignRole($proj_id, $env_id, $role_assignment_remove)
```

Unassign Role

Unassigns a user role within a tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.  If the role is not actually assigned, will return 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoleAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role_assignment_remove = new \OpenAPI\Client\Model\RoleAssignmentRemove(); // \OpenAPI\Client\Model\RoleAssignmentRemove

try {
    $apiInstance->unassignRole($proj_id, $env_id, $role_assignment_remove);
} catch (Exception $e) {
    echo 'Exception when calling RoleAssignmentsApi->unassignRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role_assignment_remove** | [**\OpenAPI\Client\Model\RoleAssignmentRemove**](../Model/RoleAssignmentRemove.md)|  | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
