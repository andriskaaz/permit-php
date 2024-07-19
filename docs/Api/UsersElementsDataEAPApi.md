# OpenAPI\Client\UsersElementsDataEAPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**elementsAssignRoleToUser()**](UsersElementsDataEAPApi.md#elementsAssignRoleToUser) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id}/roles | Assign role to user |
| [**elementsCreateUser()**](UsersElementsDataEAPApi.md#elementsCreateUser) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users | Create user |
| [**elementsDeleteUser()**](UsersElementsDataEAPApi.md#elementsDeleteUser) | **DELETE** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id} | Delete user |
| [**elementsListRoles()**](UsersElementsDataEAPApi.md#elementsListRoles) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/roles | List roles |
| [**elementsListUsers()**](UsersElementsDataEAPApi.md#elementsListUsers) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users | List users |
| [**elementsUnassignRoleFromUser()**](UsersElementsDataEAPApi.md#elementsUnassignRoleFromUser) | **DELETE** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id}/roles | Unassign role from user |
| [**setConfigActive()**](UsersElementsDataEAPApi.md#setConfigActive) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/active | Set Config Active |


## `elementsAssignRoleToUser()`

```php
elementsAssignRoleToUser($elements_config_id, $user_id, $proj_id, $env_id, $elements_user_role_create, $resource_instance_id): \OpenAPI\Client\Model\RoleAssignmentRead
```

Assign role to user

Assigns a role to the user within the tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersElementsDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_user_role_create = new \OpenAPI\Client\Model\ElementsUserRoleCreate(); // \OpenAPI\Client\Model\ElementsUserRoleCreate
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $result = $apiInstance->elementsAssignRoleToUser($elements_config_id, $user_id, $proj_id, $env_id, $elements_user_role_create, $resource_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersElementsDataEAPApi->elementsAssignRoleToUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_user_role_create** | [**\OpenAPI\Client\Model\ElementsUserRoleCreate**](../Model/ElementsUserRoleCreate.md)|  | |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

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

## `elementsCreateUser()`

```php
elementsCreateUser($elements_config_id, $proj_id, $env_id, $elements_user_create, $resource_instance_id): \OpenAPI\Client\Model\ResponseElementsCreateUserV2ElementsProjIdEnvIdConfigElementsConfigIdDataUsersPost
```

Create user

Creates a new user inside the Permit.io system, from that point forward you may run permission checks on that user.  If the user is already created: will return 200 instead of 201, and will return the existing user object in the response body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersElementsDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_user_create = new \OpenAPI\Client\Model\ElementsUserCreate(); // \OpenAPI\Client\Model\ElementsUserCreate
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $result = $apiInstance->elementsCreateUser($elements_config_id, $proj_id, $env_id, $elements_user_create, $resource_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersElementsDataEAPApi->elementsCreateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_user_create** | [**\OpenAPI\Client\Model\ElementsUserCreate**](../Model/ElementsUserCreate.md)|  | |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseElementsCreateUserV2ElementsProjIdEnvIdConfigElementsConfigIdDataUsersPost**](../Model/ResponseElementsCreateUserV2ElementsProjIdEnvIdConfigElementsConfigIdDataUsersPost.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `elementsDeleteUser()`

```php
elementsDeleteUser($proj_id, $env_id, $elements_config_id, $user_id, $resource_instance_id)
```

Delete user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersElementsDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $apiInstance->elementsDeleteUser($proj_id, $env_id, $elements_config_id, $user_id, $resource_instance_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersElementsDataEAPApi->elementsDeleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

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

## `elementsListRoles()`

```php
elementsListRoles($elements_config_id, $proj_id, $env_id, $search, $page, $per_page, $resource_instance_id): \OpenAPI\Client\Model\ElementsRoleRead[]
```

List roles

Lists all the users defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersElementsDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$search = 'search_example'; // string | Text search for the email field
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $result = $apiInstance->elementsListRoles($elements_config_id, $proj_id, $env_id, $search, $page, $per_page, $resource_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersElementsDataEAPApi->elementsListRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **search** | **string**| Text search for the email field | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

### Return type

[**\OpenAPI\Client\Model\ElementsRoleRead[]**](../Model/ElementsRoleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `elementsListUsers()`

```php
elementsListUsers($elements_config_id, $proj_id, $env_id, $search, $page, $per_page, $resource_instance_id): \OpenAPI\Client\Model\PaginatedResultUserRead
```

List users

Lists all the users defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersElementsDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$search = 'search_example'; // string | Text search for the email field
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $result = $apiInstance->elementsListUsers($elements_config_id, $proj_id, $env_id, $search, $page, $per_page, $resource_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersElementsDataEAPApi->elementsListUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **search** | **string**| Text search for the email field | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

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

## `elementsUnassignRoleFromUser()`

```php
elementsUnassignRoleFromUser($elements_config_id, $user_id, $proj_id, $env_id, $elements_user_role_remove, $resource_instance_id)
```

Unassign role from user

Unassigns the role from the user within the tenant.  The tenant defines the scope of the assignment. In other words, the role is effective only within the tenant.  If the role is not actually assigned, will return 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersElementsDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_user_role_remove = new \OpenAPI\Client\Model\ElementsUserRoleRemove(); // \OpenAPI\Client\Model\ElementsUserRoleRemove
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $apiInstance->elementsUnassignRoleFromUser($elements_config_id, $user_id, $proj_id, $env_id, $elements_user_role_remove, $resource_instance_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersElementsDataEAPApi->elementsUnassignRoleFromUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_user_role_remove** | [**\OpenAPI\Client\Model\ElementsUserRoleRemove**](../Model/ElementsUserRoleRemove.md)|  | |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

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

## `setConfigActive()`

```php
setConfigActive($elements_config_id, $proj_id, $env_id)
```

Set Config Active

Updates the embed_config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersElementsDataEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->setConfigActive($elements_config_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersElementsDataEAPApi->setConfigActive: ', $e->getMessage(), PHP_EOL;
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
