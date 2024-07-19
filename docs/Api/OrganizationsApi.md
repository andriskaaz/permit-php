# OpenAPI\Client\OrganizationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganization()**](OrganizationsApi.md#createOrganization) | **POST** /v2/orgs | Create Organization |
| [**deleteOrganization()**](OrganizationsApi.md#deleteOrganization) | **DELETE** /v2/orgs/{org_id} | Delete Organization |
| [**getActiveOrganization()**](OrganizationsApi.md#getActiveOrganization) | **GET** /v2/orgs/active/org | Get Active Organization |
| [**getOrganization()**](OrganizationsApi.md#getOrganization) | **GET** /v2/orgs/{org_id} | Get Organization |
| [**listOrganizations()**](OrganizationsApi.md#listOrganizations) | **GET** /v2/orgs | List Organizations |
| [**statsOrganization()**](OrganizationsApi.md#statsOrganization) | **GET** /v2/orgs/{org_id}/stats | Stats Organization |
| [**updateOrganization()**](OrganizationsApi.md#updateOrganization) | **PATCH** /v2/orgs/{org_id} | Update Organization |


## `createOrganization()`

```php
createOrganization($organization_create): \OpenAPI\Client\Model\OrganizationReadWithAPIKey
```

Create Organization

If you want to create org via API, reach out to us and we will add the permission to your API token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_create = new \OpenAPI\Client\Model\OrganizationCreate(); // \OpenAPI\Client\Model\OrganizationCreate

try {
    $result = $apiInstance->createOrganization($organization_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_create** | [**\OpenAPI\Client\Model\OrganizationCreate**](../Model/OrganizationCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrganizationReadWithAPIKey**](../Model/OrganizationReadWithAPIKey.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganization()`

```php
deleteOrganization($org_id)
```

Delete Organization

Deletes an organization (Permit.io account) and all its related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").

try {
    $apiInstance->deleteOrganization($org_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |

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

## `getActiveOrganization()`

```php
getActiveOrganization(): \OpenAPI\Client\Model\OrganizationRead
```

Get Active Organization

Gets a single organization (Permit.io account) matching the given org_id, if such org exists and can be accessed by the authenticated actor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getActiveOrganization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getActiveOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganization()`

```php
getOrganization($org_id): \OpenAPI\Client\Model\OrganizationRead
```

Get Organization

Gets a single organization (Permit.io account) matching the given org_id, if such org exists and can be accessed by the authenticated actor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").

try {
    $result = $apiInstance->getOrganization($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizations()`

```php
listOrganizations($page, $per_page): \OpenAPI\Client\Model\OrganizationRead[]
```

List Organizations

Lists all the organizations that can be accessed by the authenticated actor (i.e: human team member or api key).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listOrganizations($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->listOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\OrganizationRead[]**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statsOrganization()`

```php
statsOrganization($org_id): \OpenAPI\Client\Model\OrganizationStats
```

Stats Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").

try {
    $result = $apiInstance->statsOrganization($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->statsOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\OrganizationStats**](../Model/OrganizationStats.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganization()`

```php
updateOrganization($org_id, $organization_update): \OpenAPI\Client\Model\OrganizationRead
```

Update Organization

Updates the organization's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \"slug\").
$organization_update = new \OpenAPI\Client\Model\OrganizationUpdate(); // \OpenAPI\Client\Model\OrganizationUpdate

try {
    $result = $apiInstance->updateOrganization($org_id, $organization_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Either the unique id of the organization, or the URL-friendly key of the organization (i.e: the \&quot;slug\&quot;). | |
| **organization_update** | [**\OpenAPI\Client\Model\OrganizationUpdate**](../Model/OrganizationUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
