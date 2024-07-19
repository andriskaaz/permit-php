# OpenAPI\Client\ConditionSetsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConditionSet()**](ConditionSetsApi.md#createConditionSet) | **POST** /v2/schema/{proj_id}/{env_id}/condition_sets | Create Condition Set |
| [**deleteConditionSet()**](ConditionSetsApi.md#deleteConditionSet) | **DELETE** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Delete Condition Set |
| [**getConditionSet()**](ConditionSetsApi.md#getConditionSet) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Get Condition Set |
| [**getConditionSetAncestors()**](ConditionSetsApi.md#getConditionSetAncestors) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id}/ancestors | Get Condition Set Ancestors |
| [**getConditionSetDescendants()**](ConditionSetsApi.md#getConditionSetDescendants) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id}/descendants | Get Condition Set Descendants |
| [**listConditionSets()**](ConditionSetsApi.md#listConditionSets) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets | List Condition Sets |
| [**updateConditionSet()**](ConditionSetsApi.md#updateConditionSet) | **PATCH** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Update Condition Set |


## `createConditionSet()`

```php
createConditionSet($proj_id, $env_id, $condition_set_create): \OpenAPI\Client\Model\ConditionSetRead
```

Create Condition Set

Creates a new condition set (can be either a user set or a resource set).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$condition_set_create = new \OpenAPI\Client\Model\ConditionSetCreate(); // \OpenAPI\Client\Model\ConditionSetCreate

try {
    $result = $apiInstance->createConditionSet($proj_id, $env_id, $condition_set_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetsApi->createConditionSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **condition_set_create** | [**\OpenAPI\Client\Model\ConditionSetCreate**](../Model/ConditionSetCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConditionSetRead**](../Model/ConditionSetRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConditionSet()`

```php
deleteConditionSet($condition_set_id, $proj_id, $env_id)
```

Delete Condition Set

Deletes a condition set and all its related data. This includes any permissions granted to said condition set (i.e: any matching condition set users_with_role).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$condition_set_id = 'condition_set_id_example'; // string | Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $apiInstance->deleteConditionSet($condition_set_id, $proj_id, $env_id);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetsApi->deleteConditionSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **condition_set_id** | **string**| Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \&quot;slug\&quot;). | |
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

## `getConditionSet()`

```php
getConditionSet($condition_set_id, $proj_id, $env_id): \OpenAPI\Client\Model\ConditionSetRead
```

Get Condition Set

Gets a single condition set, if such condition set exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$condition_set_id = 'condition_set_id_example'; // string | Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getConditionSet($condition_set_id, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetsApi->getConditionSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **condition_set_id** | **string**| Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\ConditionSetRead**](../Model/ConditionSetRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConditionSetAncestors()`

```php
getConditionSetAncestors($condition_set_id, $proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\ConditionSetRead[]
```

Get Condition Set Ancestors

Gets all ancestors (parent, parent of parent, and so on)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$condition_set_id = 'condition_set_id_example'; // string | Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->getConditionSetAncestors($condition_set_id, $proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetsApi->getConditionSetAncestors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **condition_set_id** | **string**| Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ConditionSetRead[]**](../Model/ConditionSetRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConditionSetDescendants()`

```php
getConditionSetDescendants($condition_set_id, $proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\ConditionSetRead[]
```

Get Condition Set Descendants

Gets all descendants (children, children of children, and so on)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$condition_set_id = 'condition_set_id_example'; // string | Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->getConditionSetDescendants($condition_set_id, $proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetsApi->getConditionSetDescendants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **condition_set_id** | **string**| Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ConditionSetRead[]**](../Model/ConditionSetRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConditionSets()`

```php
listConditionSets($proj_id, $env_id, $search, $type, $include_total_count, $page, $per_page): \OpenAPI\Client\Model\ResponseListConditionSetsV2SchemaProjIdEnvIdConditionSetsGet
```

List Condition Sets

Lists all condition sets matching a filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$search = 'search_example'; // string | Text search for the condition sets name or key
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ConditionSetType(); // \OpenAPI\Client\Model\ConditionSetType | if provided, will return only the condition sets of the specified type. e.g: only user sets.
$include_total_count = false; // bool | Include total count in response
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listConditionSets($proj_id, $env_id, $search, $type, $include_total_count, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetsApi->listConditionSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **search** | **string**| Text search for the condition sets name or key | [optional] |
| **type** | [**\OpenAPI\Client\Model\ConditionSetType**](../Model/.md)| if provided, will return only the condition sets of the specified type. e.g: only user sets. | [optional] |
| **include_total_count** | **bool**| Include total count in response | [optional] [default to false] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\ResponseListConditionSetsV2SchemaProjIdEnvIdConditionSetsGet**](../Model/ResponseListConditionSetsV2SchemaProjIdEnvIdConditionSetsGet.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConditionSet()`

```php
updateConditionSet($condition_set_id, $proj_id, $env_id, $condition_set_update): \OpenAPI\Client\Model\ConditionSetRead
```

Update Condition Set

Partially updates a condition set. Fields that will be provided will be completely overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConditionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$condition_set_id = 'condition_set_id_example'; // string | Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$condition_set_update = new \OpenAPI\Client\Model\ConditionSetUpdate(); // \OpenAPI\Client\Model\ConditionSetUpdate

try {
    $result = $apiInstance->updateConditionSet($condition_set_id, $proj_id, $env_id, $condition_set_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionSetsApi->updateConditionSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **condition_set_id** | **string**| Either the unique id of the condition set, or the URL-friendly key of the condition set (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **condition_set_update** | [**\OpenAPI\Client\Model\ConditionSetUpdate**](../Model/ConditionSetUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConditionSetRead**](../Model/ConditionSetRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
