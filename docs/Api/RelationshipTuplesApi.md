# OpenAPI\Client\RelationshipTuplesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateRelationshipTuples()**](RelationshipTuplesApi.md#bulkCreateRelationshipTuples) | **POST** /v2/facts/{proj_id}/{env_id}/relationship_tuples/bulk | Bulk create relationship tuples(EAP) |
| [**bulkDeleteRelationshipTuples()**](RelationshipTuplesApi.md#bulkDeleteRelationshipTuples) | **DELETE** /v2/facts/{proj_id}/{env_id}/relationship_tuples/bulk | Bulk Delete Relationship Tuples |
| [**createRelationshipTuple()**](RelationshipTuplesApi.md#createRelationshipTuple) | **POST** /v2/facts/{proj_id}/{env_id}/relationship_tuples | Create Relationship Tuple |
| [**deleteRelationshipTuple()**](RelationshipTuplesApi.md#deleteRelationshipTuple) | **DELETE** /v2/facts/{proj_id}/{env_id}/relationship_tuples | Delete Relationship Tuple |
| [**listRelationshipTuples()**](RelationshipTuplesApi.md#listRelationshipTuples) | **GET** /v2/facts/{proj_id}/{env_id}/relationship_tuples | List Relationship Tuples |


## `bulkCreateRelationshipTuples()`

```php
bulkCreateRelationshipTuples($proj_id, $env_id, $relationship_tuple_create_bulk_operation): object
```

Bulk create relationship tuples(EAP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$relationship_tuple_create_bulk_operation = new \OpenAPI\Client\Model\RelationshipTupleCreateBulkOperation(); // \OpenAPI\Client\Model\RelationshipTupleCreateBulkOperation

try {
    $result = $apiInstance->bulkCreateRelationshipTuples($proj_id, $env_id, $relationship_tuple_create_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->bulkCreateRelationshipTuples: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **relationship_tuple_create_bulk_operation** | [**\OpenAPI\Client\Model\RelationshipTupleCreateBulkOperation**](../Model/RelationshipTupleCreateBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteRelationshipTuples()`

```php
bulkDeleteRelationshipTuples($proj_id, $env_id, $relationship_tuple_delete_bulk_operation): object
```

Bulk Delete Relationship Tuples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$relationship_tuple_delete_bulk_operation = new \OpenAPI\Client\Model\RelationshipTupleDeleteBulkOperation(); // \OpenAPI\Client\Model\RelationshipTupleDeleteBulkOperation

try {
    $result = $apiInstance->bulkDeleteRelationshipTuples($proj_id, $env_id, $relationship_tuple_delete_bulk_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->bulkDeleteRelationshipTuples: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **relationship_tuple_delete_bulk_operation** | [**\OpenAPI\Client\Model\RelationshipTupleDeleteBulkOperation**](../Model/RelationshipTupleDeleteBulkOperation.md)|  | |

### Return type

**object**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRelationshipTuple()`

```php
createRelationshipTuple($proj_id, $env_id, $relationship_tuple_create): \OpenAPI\Client\Model\RelationshipTupleRead
```

Create Relationship Tuple

Create a relationship between two resource instances using a relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$relationship_tuple_create = new \OpenAPI\Client\Model\RelationshipTupleCreate(); // \OpenAPI\Client\Model\RelationshipTupleCreate

try {
    $result = $apiInstance->createRelationshipTuple($proj_id, $env_id, $relationship_tuple_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->createRelationshipTuple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **relationship_tuple_create** | [**\OpenAPI\Client\Model\RelationshipTupleCreate**](../Model/RelationshipTupleCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RelationshipTupleRead**](../Model/RelationshipTupleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRelationshipTuple()`

```php
deleteRelationshipTuple($proj_id, $env_id, $relationship_tuple_delete)
```

Delete Relationship Tuple

Delete a relationship between two resource instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$relationship_tuple_delete = new \OpenAPI\Client\Model\RelationshipTupleDelete(); // \OpenAPI\Client\Model\RelationshipTupleDelete

try {
    $apiInstance->deleteRelationshipTuple($proj_id, $env_id, $relationship_tuple_delete);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->deleteRelationshipTuple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **relationship_tuple_delete** | [**\OpenAPI\Client\Model\RelationshipTupleDelete**](../Model/RelationshipTupleDelete.md)|  | |

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

## `listRelationshipTuples()`

```php
listRelationshipTuples($proj_id, $env_id, $detailed, $page, $per_page, $tenant, $subject, $relation, $object, $object_type, $subject_type): \OpenAPI\Client\Model\RelationshipTupleRead[]
```

List Relationship Tuples

Lists the relationship tuples defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RelationshipTuplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$detailed = false; // bool | If true, will return the full subject and object resource instances.
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).
$tenant = 'tenant_example'; // string | The tenant key or id to filter by
$subject = 'subject_example'; // string | The subject to filter by, accepts either the resource instance id or resource_type:resource_instance
$relation = 'relation_example'; // string | The relation id or key to filter by
$object = 'object_example'; // string | The object to filter by, accepts either the resource instance id or resource_type:resource_instance
$object_type = 'object_type_example'; // string | The object type to filter by, accepts resource type id or key
$subject_type = 'subject_type_example'; // string | The subject type to filter by, accepts resource type id or key

try {
    $result = $apiInstance->listRelationshipTuples($proj_id, $env_id, $detailed, $page, $per_page, $tenant, $subject, $relation, $object, $object_type, $subject_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTuplesApi->listRelationshipTuples: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **detailed** | **bool**| If true, will return the full subject and object resource instances. | [optional] [default to false] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |
| **tenant** | **string**| The tenant key or id to filter by | [optional] |
| **subject** | **string**| The subject to filter by, accepts either the resource instance id or resource_type:resource_instance | [optional] |
| **relation** | **string**| The relation id or key to filter by | [optional] |
| **object** | **string**| The object to filter by, accepts either the resource instance id or resource_type:resource_instance | [optional] |
| **object_type** | **string**| The object type to filter by, accepts resource type id or key | [optional] |
| **subject_type** | **string**| The subject type to filter by, accepts resource type id or key | [optional] |

### Return type

[**\OpenAPI\Client\Model\RelationshipTupleRead[]**](../Model/RelationshipTupleRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
