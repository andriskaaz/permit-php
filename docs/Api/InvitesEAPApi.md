# OpenAPI\Client\InvitesEAPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelInvite()**](InvitesEAPApi.md#cancelInvite) | **DELETE** /v2/orgs/{org_id}/invites/{invite_id} | Cancel Invite |
| [**inviteMembersToOrganization()**](InvitesEAPApi.md#inviteMembersToOrganization) | **POST** /v2/orgs/{org_id}/invites | Invite Members To Organization |
| [**listOrganizationInvites()**](InvitesEAPApi.md#listOrganizationInvites) | **GET** /v2/orgs/{org_id}/invites | List Organization Invites |


## `cancelInvite()`

```php
cancelInvite($org_id, $invite_id)
```

Cancel Invite

Cancels an invite that was sent to a new member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvitesEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$invite_id = 'invite_id_example'; // string | Id of the invite to cancel

try {
    $apiInstance->cancelInvite($org_id, $invite_id);
} catch (Exception $e) {
    echo 'Exception when calling InvitesEAPApi->cancelInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **invite_id** | **string**| Id of the invite to cancel | |

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

## `inviteMembersToOrganization()`

```php
inviteMembersToOrganization($org_id, $invite_create, $inviter_name, $inviter_email): \OpenAPI\Client\Model\MultiInviteResult
```

Invite Members To Organization

Invite new members into the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvitesEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$invite_create = array(new \OpenAPI\Client\Model\InviteCreate()); // \OpenAPI\Client\Model\InviteCreate[]
$inviter_name = 'inviter_name_example'; // string
$inviter_email = 'inviter_email_example'; // string

try {
    $result = $apiInstance->inviteMembersToOrganization($org_id, $invite_create, $inviter_name, $inviter_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitesEAPApi->inviteMembersToOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **invite_create** | [**\OpenAPI\Client\Model\InviteCreate[]**](../Model/InviteCreate.md)|  | |
| **inviter_name** | **string**|  | [optional] |
| **inviter_email** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MultiInviteResult**](../Model/MultiInviteResult.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizationInvites()`

```php
listOrganizationInvites($org_id, $page, $per_page): \OpenAPI\Client\Model\InviteRead[]
```

List Organization Invites

Lists pending organization invites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvitesEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listOrganizationInvites($org_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitesEAPApi->listOrganizationInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\InviteRead[]**](../Model/InviteRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
