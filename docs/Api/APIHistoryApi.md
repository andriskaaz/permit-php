# OpenAPI\Client\APIHistoryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiEventV2HistoryEventIdGet()**](APIHistoryApi.md#getApiEventV2HistoryEventIdGet) | **GET** /v2/history/{event_id} | Get Api Event |
| [**getRequestBodyV2HistoryEventIdRequestGet()**](APIHistoryApi.md#getRequestBodyV2HistoryEventIdRequestGet) | **GET** /v2/history/{event_id}/request | Get Request Body |
| [**getResponseBodyV2HistoryEventIdResponseGet()**](APIHistoryApi.md#getResponseBodyV2HistoryEventIdResponseGet) | **GET** /v2/history/{event_id}/response | Get Response Body |
| [**listApiEventsV2HistoryGet()**](APIHistoryApi.md#listApiEventsV2HistoryGet) | **GET** /v2/history | List Api Events |


## `getApiEventV2HistoryEventIdGet()`

```php
getApiEventV2HistoryEventIdGet($event_id): \OpenAPI\Client\Model\APIHistoryEventFullRead
```

Get Api Event

Returns full information, including request and response bodies, for one event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\APIHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getApiEventV2HistoryEventIdGet($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHistoryApi->getApiEventV2HistoryEventIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\APIHistoryEventFullRead**](../Model/APIHistoryEventFullRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequestBodyV2HistoryEventIdRequestGet()`

```php
getRequestBodyV2HistoryEventIdRequestGet($event_id): \SplFileObject
```

Get Request Body

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\APIHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getRequestBodyV2HistoryEventIdRequestGet($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHistoryApi->getRequestBodyV2HistoryEventIdRequestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResponseBodyV2HistoryEventIdResponseGet()`

```php
getResponseBodyV2HistoryEventIdResponseGet($event_id): \SplFileObject
```

Get Response Body

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\APIHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getResponseBodyV2HistoryEventIdResponseGet($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHistoryApi->getResponseBodyV2HistoryEventIdResponseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApiEventsV2HistoryGet()`

```php
listApiEventsV2HistoryGet($method, $path, $success, $status_code, $client_ip, $actor_type, $actor_id, $actor_display_name, $project_id, $env_id, $timestamp_from, $timestamp_until, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultAPIHistoryEventRead
```

List Api Events

Fetches all API History events for given filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\APIHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$method = array('method_example'); // string[] | HTTP methods to include in search
$path = array('path_example'); // string[] | API paths to include in search
$success = True; // bool | Filter by API request success/failure
$status_code = array(56); // int[] | HTTP status codes to include in search
$client_ip = array('client_ip_example'); // string[] | IPs of clients to include in search
$actor_type = array('actor_type_example'); // string[] | Actor type to search (member, user, api_key)
$actor_id = array('actor_id_example'); // string[] | Actor ID to search
$actor_display_name = 'actor_display_name_example'; // string | Actor display name to search
$project_id = array('project_id_example'); // string[] | Projects to include in search
$env_id = array('env_id_example'); // string[] | Environments to include in search
$timestamp_from = 56; // int | Retrieve only events after this timestamp (seconds since epoch)
$timestamp_until = 56; // int | Retrieve only events before this timestamp (seconds since epoch)
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listApiEventsV2HistoryGet($method, $path, $success, $status_code, $client_ip, $actor_type, $actor_id, $actor_display_name, $project_id, $env_id, $timestamp_from, $timestamp_until, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHistoryApi->listApiEventsV2HistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **method** | [**string[]**](../Model/string.md)| HTTP methods to include in search | [optional] |
| **path** | [**string[]**](../Model/string.md)| API paths to include in search | [optional] |
| **success** | **bool**| Filter by API request success/failure | [optional] |
| **status_code** | [**int[]**](../Model/int.md)| HTTP status codes to include in search | [optional] |
| **client_ip** | [**string[]**](../Model/string.md)| IPs of clients to include in search | [optional] |
| **actor_type** | [**string[]**](../Model/string.md)| Actor type to search (member, user, api_key) | [optional] |
| **actor_id** | [**string[]**](../Model/string.md)| Actor ID to search | [optional] |
| **actor_display_name** | **string**| Actor display name to search | [optional] |
| **project_id** | [**string[]**](../Model/string.md)| Projects to include in search | [optional] |
| **env_id** | [**string[]**](../Model/string.md)| Environments to include in search | [optional] |
| **timestamp_from** | **int**| Retrieve only events after this timestamp (seconds since epoch) | [optional] |
| **timestamp_until** | **int**| Retrieve only events before this timestamp (seconds since epoch) | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultAPIHistoryEventRead**](../Model/PaginatedResultAPIHistoryEventRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
