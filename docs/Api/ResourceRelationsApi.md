# OpenAPI\Client\ResourceRelationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createResourceRelation()**](ResourceRelationsApi.md#createResourceRelation) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations | Create Resource Relation |
| [**deleteResourceRelation()**](ResourceRelationsApi.md#deleteResourceRelation) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations/{relation_id} | Delete Resource Relation |
| [**getResourceRelation()**](ResourceRelationsApi.md#getResourceRelation) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations/{relation_id} | Get Resource Relation |
| [**listResourceRelations()**](ResourceRelationsApi.md#listResourceRelations) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/relations | List Resource Relations |


## `createResourceRelation()`

```php
createResourceRelation($proj_id, $env_id, $resource_id, $relation_create): \OpenAPI\Client\Model\RelationRead
```

Create Resource Relation

Creates a resource relation to another resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$relation_create = new \OpenAPI\Client\Model\RelationCreate(); // \OpenAPI\Client\Model\RelationCreate

try {
    $result = $apiInstance->createResourceRelation($proj_id, $env_id, $resource_id, $relation_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRelationsApi->createResourceRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **relation_create** | [**\OpenAPI\Client\Model\RelationCreate**](../Model/RelationCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RelationRead**](../Model/RelationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResourceRelation()`

```php
deleteResourceRelation($relation_id, $proj_id, $env_id, $resource_id)
```

Delete Resource Relation

Deletes a resource relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 'relation_id_example'; // string | Either the unique id of the relation, or the URL-friendly key of the relation (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").

try {
    $apiInstance->deleteResourceRelation($relation_id, $proj_id, $env_id, $resource_id);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRelationsApi->deleteResourceRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **string**| Either the unique id of the relation, or the URL-friendly key of the relation (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |

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

## `getResourceRelation()`

```php
getResourceRelation($relation_id, $proj_id, $env_id, $resource_id): \OpenAPI\Client\Model\RelationRead
```

Get Resource Relation

Get a resource relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 'relation_id_example'; // string | Either the unique id of the relation, or the URL-friendly key of the relation (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").

try {
    $result = $apiInstance->getResourceRelation($relation_id, $proj_id, $env_id, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRelationsApi->getResourceRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **string**| Either the unique id of the relation, or the URL-friendly key of the relation (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\RelationRead**](../Model/RelationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listResourceRelations()`

```php
listResourceRelations($proj_id, $env_id, $resource_id, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultRelationRead
```

List Resource Relations

List relations on a given resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourceRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$resource_id = 'resource_id_example'; // string | Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listResourceRelations($proj_id, $env_id, $resource_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceRelationsApi->listResourceRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **resource_id** | **string**| Either the unique id of the resource, or the URL-friendly key of the resource (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultRelationRead**](../Model/PaginatedResultRelationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
