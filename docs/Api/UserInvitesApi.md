# OpenAPI\Client\UserInvitesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveUserInvite()**](UserInvitesApi.md#approveUserInvite) | **POST** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id}/approve | Approve User Invite |
| [**createUserInvite()**](UserInvitesApi.md#createUserInvite) | **POST** /v2/facts/{proj_id}/{env_id}/user_invites | Create User Invite |
| [**deleteUserInvite()**](UserInvitesApi.md#deleteUserInvite) | **DELETE** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id} | Delete User Invite |
| [**getUserInvite()**](UserInvitesApi.md#getUserInvite) | **GET** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id} | Get User Invite |
| [**listUserInvites()**](UserInvitesApi.md#listUserInvites) | **GET** /v2/facts/{proj_id}/{env_id}/user_invites | List User Invites |
| [**updateUserInvite()**](UserInvitesApi.md#updateUserInvite) | **PATCH** /v2/facts/{proj_id}/{env_id}/user_invites/{user_invite_id} | Update User Invite |


## `approveUserInvite()`

```php
approveUserInvite($user_invite_id, $proj_id, $env_id, $elements_user_invite_approve): \OpenAPI\Client\Model\UserRead
```

Approve User Invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_invite_id = 'user_invite_id_example'; // string | Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_user_invite_approve = new \OpenAPI\Client\Model\ElementsUserInviteApprove(); // \OpenAPI\Client\Model\ElementsUserInviteApprove

try {
    $result = $apiInstance->approveUserInvite($user_invite_id, $proj_id, $env_id, $elements_user_invite_approve);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->approveUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_invite_id** | **string**| Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_user_invite_approve** | [**\OpenAPI\Client\Model\ElementsUserInviteApprove**](../Model/ElementsUserInviteApprove.md)|  | |

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

## `createUserInvite()`

```php
createUserInvite($proj_id, $env_id, $elements_user_invite_create): \OpenAPI\Client\Model\ElementsUserInviteRead
```

Create User Invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_user_invite_create = new \OpenAPI\Client\Model\ElementsUserInviteCreate(); // \OpenAPI\Client\Model\ElementsUserInviteCreate

try {
    $result = $apiInstance->createUserInvite($proj_id, $env_id, $elements_user_invite_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->createUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_user_invite_create** | [**\OpenAPI\Client\Model\ElementsUserInviteCreate**](../Model/ElementsUserInviteCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ElementsUserInviteRead**](../Model/ElementsUserInviteRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserInvite()`

```php
deleteUserInvite($user_invite_id, $proj_id, $env_id)
```

Delete User Invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_invite_id = 'user_invite_id_example'; // string | Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteUserInvite($user_invite_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->deleteUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_invite_id** | **string**| Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \&quot;slug\&quot;). | |
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

## `getUserInvite()`

```php
getUserInvite($user_invite_id, $proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\ElementsUserInviteRead
```

Get User Invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_invite_id = 'user_invite_id_example'; // string | Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->getUserInvite($user_invite_id, $proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->getUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_invite_id** | **string**| Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ElementsUserInviteRead**](../Model/ElementsUserInviteRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserInvites()`

```php
listUserInvites($proj_id, $env_id, $role, $tenant, $search, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultElementsUserInviteRead
```

List User Invites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$role = 'role_example'; // string | optional role filter, will only return invited users with this role.
$tenant = 'tenant_example'; // string | optional tenant filter, will only return invited users in that tenant.
$search = 'search_example'; // string | optional search, will only return invited users to that email, key or name.
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listUserInvites($proj_id, $env_id, $role, $tenant, $search, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->listUserInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **role** | **string**| optional role filter, will only return invited users with this role. | [optional] |
| **tenant** | **string**| optional tenant filter, will only return invited users in that tenant. | [optional] |
| **search** | **string**| optional search, will only return invited users to that email, key or name. | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultElementsUserInviteRead**](../Model/PaginatedResultElementsUserInviteRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserInvite()`

```php
updateUserInvite($user_invite_id, $proj_id, $env_id, $elements_user_invite_update): \OpenAPI\Client\Model\ElementsUserInviteRead
```

Update User Invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_invite_id = 'user_invite_id_example'; // string | Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_user_invite_update = new \OpenAPI\Client\Model\ElementsUserInviteUpdate(); // \OpenAPI\Client\Model\ElementsUserInviteUpdate

try {
    $result = $apiInstance->updateUserInvite($user_invite_id, $proj_id, $env_id, $elements_user_invite_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->updateUserInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_invite_id** | **string**| Either the unique id of the user_invite, or the URL-friendly key of the user_invite (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_user_invite_update** | [**\OpenAPI\Client\Model\ElementsUserInviteUpdate**](../Model/ElementsUserInviteUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ElementsUserInviteRead**](../Model/ElementsUserInviteRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
