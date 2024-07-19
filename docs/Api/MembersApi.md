# OpenAPI\Client\MembersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationMembers()**](MembersApi.md#createOrganizationMembers) | **POST** /v2/members | Invite new members (EAP) |
| [**deleteOrganizationMember()**](MembersApi.md#deleteOrganizationMember) | **DELETE** /v2/members/{member_id} | Remove member (EAP) |
| [**deleteOrganizationPermissions()**](MembersApi.md#deleteOrganizationPermissions) | **DELETE** /v2/members | Remove permission (EAP) |
| [**getAuthenticatedMember()**](MembersApi.md#getAuthenticatedMember) | **GET** /v2/members/me | Get the authenticated account member |
| [**getOrganizationMember()**](MembersApi.md#getOrganizationMember) | **GET** /v2/members/{member_id} | Get Organization Member |
| [**listOrganizationMembers()**](MembersApi.md#listOrganizationMembers) | **GET** /v2/members | List Organization Members |
| [**updateOrganizationMember()**](MembersApi.md#updateOrganizationMember) | **PATCH** /v2/members/{member_id} | Edit members (EAP) |


## `createOrganizationMembers()`

```php
createOrganizationMembers($org_member_create, $inviter_name, $inviter_email): \OpenAPI\Client\Model\OrgMemberReadWithGrants
```

Invite new members (EAP)

Create an organization member if needed, and grant it permissions.  The member can be specified either by ID (for an existing member), or by email (for either an existing member or a new one).  For a new member, an invite will be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_member_create = new \OpenAPI\Client\Model\OrgMemberCreate(); // \OpenAPI\Client\Model\OrgMemberCreate
$inviter_name = 'inviter_name_example'; // string
$inviter_email = 'inviter_email_example'; // string

try {
    $result = $apiInstance->createOrganizationMembers($org_member_create, $inviter_name, $inviter_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->createOrganizationMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_member_create** | [**\OpenAPI\Client\Model\OrgMemberCreate**](../Model/OrgMemberCreate.md)|  | |
| **inviter_name** | **string**|  | [optional] |
| **inviter_email** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrgMemberReadWithGrants**](../Model/OrgMemberReadWithGrants.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationMember()`

```php
deleteOrganizationMember($member_id)
```

Remove member (EAP)

Deletes an account member matching the given id or email address. The member will be removed from the active account in permit.io.  If the member is the only member in its account (organization), returns 400 (bad request), due to nobody remains with access to the account, meaning deletion of the entire account (org). To completely remove an account, call DELETE `/orgs/{org}`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Either the unique id (UUID) of the account member, or the email address of the account member.

try {
    $apiInstance->deleteOrganizationMember($member_id);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteOrganizationMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Either the unique id (UUID) of the account member, or the email address of the account member. | |

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

## `deleteOrganizationPermissions()`

```php
deleteOrganizationPermissions($org_member_remove_permissions)
```

Remove permission (EAP)

Remove permissions from a member. If the last permissions a member has are removed, the member is also deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_member_remove_permissions = new \OpenAPI\Client\Model\OrgMemberRemovePermissions(); // \OpenAPI\Client\Model\OrgMemberRemovePermissions

try {
    $apiInstance->deleteOrganizationPermissions($org_member_remove_permissions);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteOrganizationPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_member_remove_permissions** | [**\OpenAPI\Client\Model\OrgMemberRemovePermissions**](../Model/OrgMemberRemovePermissions.md)|  | |

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

## `getAuthenticatedMember()`

```php
getAuthenticatedMember(): \OpenAPI\Client\Model\OrgMemberReadWithGrants
```

Get the authenticated account member

Gets the authenticated account member's details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthenticatedMember();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getAuthenticatedMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrgMemberReadWithGrants**](../Model/OrgMemberReadWithGrants.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationMember()`

```php
getOrganizationMember($member_id): \OpenAPI\Client\Model\OrgMemberReadWithGrants
```

Get Organization Member

Gets a single account member by its id or email address. matching the given member, if no such member exists under the current active account (organization), returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Either the unique id (UUID) of the account member, or the email address of the account member.

try {
    $result = $apiInstance->getOrganizationMember($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getOrganizationMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Either the unique id (UUID) of the account member, or the email address of the account member. | |

### Return type

[**\OpenAPI\Client\Model\OrgMemberReadWithGrants**](../Model/OrgMemberReadWithGrants.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizationMembers()`

```php
listOrganizationMembers($project_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\OrgMemberReadWithGrants[]
```

List Organization Members

Lists all the account members that current active account has access to, optionally filtering by project or environment. The active account/organization is determined by the API Key used or by the authenticated session id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$env_id = 'env_id_example'; // string
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listOrganizationMembers($project_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->listOrganizationMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | [optional] |
| **env_id** | **string**|  | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\OrgMemberReadWithGrants[]**](../Model/OrgMemberReadWithGrants.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationMember()`

```php
updateOrganizationMember($member_id, $org_member_update): \OpenAPI\Client\Model\OrgMemberReadWithGrants
```

Edit members (EAP)

Updates an account member's settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Either the unique id (UUID) of the account member, or the email address of the account member.
$org_member_update = new \OpenAPI\Client\Model\OrgMemberUpdate(); // \OpenAPI\Client\Model\OrgMemberUpdate

try {
    $result = $apiInstance->updateOrganizationMember($member_id, $org_member_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->updateOrganizationMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Either the unique id (UUID) of the account member, or the email address of the account member. | |
| **org_member_update** | [**\OpenAPI\Client\Model\OrgMemberUpdate**](../Model/OrgMemberUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrgMemberReadWithGrants**](../Model/OrgMemberReadWithGrants.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
