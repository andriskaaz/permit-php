# OpenAPI\Client\GroupsUpcomingFeatureApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignRoleToGroup()**](GroupsUpcomingFeatureApi.md#assignRoleToGroup) | **POST** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/roles | Assign Role To Group |
| [**assignUserToGroup()**](GroupsUpcomingFeatureApi.md#assignUserToGroup) | **PUT** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/users/{user_id} | Assign User To Group |
| [**createGroup()**](GroupsUpcomingFeatureApi.md#createGroup) | **POST** /v2/facts/{proj_id}/{env_id}/groups | Create Group |
| [**deleteGroup()**](GroupsUpcomingFeatureApi.md#deleteGroup) | **DELETE** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key} | Delete Group |
| [**getGroup()**](GroupsUpcomingFeatureApi.md#getGroup) | **GET** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key} | Get Group |
| [**listGroup()**](GroupsUpcomingFeatureApi.md#listGroup) | **GET** /v2/facts/{proj_id}/{env_id}/groups | List Group |
| [**removeRoleFromGroup()**](GroupsUpcomingFeatureApi.md#removeRoleFromGroup) | **DELETE** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/roles | Remove Role From Group |
| [**removeUserFromGroup()**](GroupsUpcomingFeatureApi.md#removeUserFromGroup) | **DELETE** /v2/facts/{proj_id}/{env_id}/groups/{group_instance_key}/users/{user_id} | Remove User From Group |


## `assignRoleToGroup()`

```php
assignRoleToGroup($group_instance_key, $proj_id, $env_id, $group_add_role): \OpenAPI\Client\Model\GroupRead
```

Assign Role To Group

Assign a role to a group - It will create relation between the group and the resource, relationship between the resource instances and derivation from the member role to this role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_instance_key = 'group_instance_key_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$group_add_role = new \OpenAPI\Client\Model\GroupAddRole(); // \OpenAPI\Client\Model\GroupAddRole

try {
    $result = $apiInstance->assignRoleToGroup($group_instance_key, $proj_id, $env_id, $group_add_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->assignRoleToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_instance_key** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **group_add_role** | [**\OpenAPI\Client\Model\GroupAddRole**](../Model/GroupAddRole.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GroupRead**](../Model/GroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignUserToGroup()`

```php
assignUserToGroup($group_instance_key, $user_id, $proj_id, $env_id, $group_assign_user): \OpenAPI\Client\Model\GroupRead
```

Assign User To Group

Assign a user to a group - This user will inherit the group's roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_instance_key = 'group_instance_key_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$group_assign_user = new \OpenAPI\Client\Model\GroupAssignUser(); // \OpenAPI\Client\Model\GroupAssignUser

try {
    $result = $apiInstance->assignUserToGroup($group_instance_key, $user_id, $proj_id, $env_id, $group_assign_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->assignUserToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_instance_key** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **group_assign_user** | [**\OpenAPI\Client\Model\GroupAssignUser**](../Model/GroupAssignUser.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GroupRead**](../Model/GroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroup()`

```php
createGroup($proj_id, $env_id, $group_create): \OpenAPI\Client\Model\GroupRead
```

Create Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$group_create = new \OpenAPI\Client\Model\GroupCreate(); // \OpenAPI\Client\Model\GroupCreate

try {
    $result = $apiInstance->createGroup($proj_id, $env_id, $group_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **group_create** | [**\OpenAPI\Client\Model\GroupCreate**](../Model/GroupCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GroupRead**](../Model/GroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroup()`

```php
deleteGroup($group_instance_key, $proj_id, $env_id)
```

Delete Group

Delete a group by its instance key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_instance_key = 'group_instance_key_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteGroup($group_instance_key, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_instance_key** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |
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

## `getGroup()`

```php
getGroup($group_instance_key, $proj_id, $env_id): \OpenAPI\Client\Model\GroupRead
```

Get Group

Retrieve a specific group by its instance key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_instance_key = 'group_instance_key_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getGroup($group_instance_key, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_instance_key** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\GroupRead**](../Model/GroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroup()`

```php
listGroup($proj_id, $env_id, $tenant, $resource, $include_total_count, $page, $per_page, $search): \OpenAPI\Client\Model\GroupRead[]
```

List Group

List all groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$tenant = 'tenant_example'; // string | The tenant key or id to filter by
$resource = 'resource_example'; // string | The resource key or id to filter by
$include_total_count = false; // bool | Include total count in response(will make the request slower)
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).
$search = 'search_example'; // string | Text search for the object name or key

try {
    $result = $apiInstance->listGroup($proj_id, $env_id, $tenant, $resource, $include_total_count, $page, $per_page, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->listGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **tenant** | **string**| The tenant key or id to filter by | [optional] |
| **resource** | **string**| The resource key or id to filter by | [optional] |
| **include_total_count** | **bool**| Include total count in response(will make the request slower) | [optional] [default to false] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |
| **search** | **string**| Text search for the object name or key | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupRead[]**](../Model/GroupRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeRoleFromGroup()`

```php
removeRoleFromGroup($group_instance_key, $proj_id, $env_id, $group_add_role)
```

Remove Role From Group

Remove a role from a group- It will remove the derivation from the member role to this role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_instance_key = 'group_instance_key_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$group_add_role = new \OpenAPI\Client\Model\GroupAddRole(); // \OpenAPI\Client\Model\GroupAddRole

try {
    $apiInstance->removeRoleFromGroup($group_instance_key, $proj_id, $env_id, $group_add_role);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->removeRoleFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_instance_key** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **group_add_role** | [**\OpenAPI\Client\Model\GroupAddRole**](../Model/GroupAddRole.md)|  | |

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

## `removeUserFromGroup()`

```php
removeUserFromGroup($group_instance_key, $user_id, $proj_id, $env_id, $group_assign_user)
```

Remove User From Group

Remove a user from a group- This user will be removed from the member role of the group, and will no longer inherit the group's roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsUpcomingFeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_instance_key = 'group_instance_key_example'; // string | Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \"slug\").
$user_id = 'user_id_example'; // string | Either the unique id of the user, or the URL-friendly key of the user (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$group_assign_user = new \OpenAPI\Client\Model\GroupAssignUser(); // \OpenAPI\Client\Model\GroupAssignUser

try {
    $apiInstance->removeUserFromGroup($group_instance_key, $user_id, $proj_id, $env_id, $group_assign_user);
} catch (Exception $e) {
    echo 'Exception when calling GroupsUpcomingFeatureApi->removeUserFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_instance_key** | **string**| Either the unique id of the resource instance, or the URL-friendly key of the resource instance (i.e: the \&quot;slug\&quot;). | |
| **user_id** | **string**| Either the unique id of the user, or the URL-friendly key of the user (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **group_assign_user** | [**\OpenAPI\Client\Model\GroupAssignUser**](../Model/GroupAssignUser.md)|  | |

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
