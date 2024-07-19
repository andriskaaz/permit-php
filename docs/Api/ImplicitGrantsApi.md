# OpenAPI\Client\ImplicitGrantsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createImplicitGrant()**](ImplicitGrantsApi.md#createImplicitGrant) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/implicit_grants | Create Implicit Grant |
| [**deleteImplicitGrant()**](ImplicitGrantsApi.md#deleteImplicitGrant) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/implicit_grants | Delete Implicit Grant |
| [**updateImplicitGrantsConditions()**](ImplicitGrantsApi.md#updateImplicitGrantsConditions) | **PUT** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/implicit_grants/conditions | Update Implicit Grants Conditions |


## `createImplicitGrant()`

```php
createImplicitGrant($resource_id, $role_id, $proj_id, $env_id, $derived_role_rule_create): \OpenAPI\Client\Model\DerivedRoleRuleRead
```

Create Implicit Grant

Creates an implicit grant on a given role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImplicitGrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$derived_role_rule_create = new \OpenAPI\Client\Model\DerivedRoleRuleCreate(); // \OpenAPI\Client\Model\DerivedRoleRuleCreate

try {
    $result = $apiInstance->createImplicitGrant($resource_id, $role_id, $proj_id, $env_id, $derived_role_rule_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImplicitGrantsApi->createImplicitGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **derived_role_rule_create** | [**\OpenAPI\Client\Model\DerivedRoleRuleCreate**](../Model/DerivedRoleRuleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DerivedRoleRuleRead**](../Model/DerivedRoleRuleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteImplicitGrant()`

```php
deleteImplicitGrant($role_id, $resource_id, $proj_id, $env_id, $derived_role_rule_delete)
```

Delete Implicit Grant

Deletes an implicit grant on a given role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImplicitGrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$derived_role_rule_delete = new \OpenAPI\Client\Model\DerivedRoleRuleDelete(); // \OpenAPI\Client\Model\DerivedRoleRuleDelete

try {
    $apiInstance->deleteImplicitGrant($role_id, $resource_id, $proj_id, $env_id, $derived_role_rule_delete);
} catch (Exception $e) {
    echo 'Exception when calling ImplicitGrantsApi->deleteImplicitGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **derived_role_rule_delete** | [**\OpenAPI\Client\Model\DerivedRoleRuleDelete**](../Model/DerivedRoleRuleDelete.md)|  | |

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

## `updateImplicitGrantsConditions()`

```php
updateImplicitGrantsConditions($resource_id, $role_id, $proj_id, $env_id, $permit_backend_schemas_schema_derived_role_rule_derivation_settings): \OpenAPI\Client\Model\PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings
```

Update Implicit Grants Conditions

Update the `when` for implicit grants on a given role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImplicitGrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$role_id = 'role_id_example'; // string | Either the unique id of the role, or the URL-friendly key of the role (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$permit_backend_schemas_schema_derived_role_rule_derivation_settings = new \OpenAPI\Client\Model\PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings(); // \OpenAPI\Client\Model\PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings

try {
    $result = $apiInstance->updateImplicitGrantsConditions($resource_id, $role_id, $proj_id, $env_id, $permit_backend_schemas_schema_derived_role_rule_derivation_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImplicitGrantsApi->updateImplicitGrantsConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **role_id** | **string**| Either the unique id of the role, or the URL-friendly key of the role (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **permit_backend_schemas_schema_derived_role_rule_derivation_settings** | [**\OpenAPI\Client\Model\PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings**](../Model/PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings**](../Model/PermitBackendSchemasSchemaDerivedRoleRuleDerivationSettings.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
