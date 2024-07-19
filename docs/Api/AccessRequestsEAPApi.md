# OpenAPI\Client\AccessRequestsEAPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveAccessRequest()**](AccessRequestsEAPApi.md#approveAccessRequest) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/approve | Approve Access Request |
| [**cancelAccessRequest()**](AccessRequestsEAPApi.md#cancelAccessRequest) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/cancel | Cancel Access Request |
| [**createAccessRequest()**](AccessRequestsEAPApi.md#createAccessRequest) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests | Create Access Request |
| [**denyAccessRequest()**](AccessRequestsEAPApi.md#denyAccessRequest) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/deny | Deny Access Request |
| [**getAccessRequest()**](AccessRequestsEAPApi.md#getAccessRequest) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id} | Get Access Request |
| [**listAccessRequests()**](AccessRequestsEAPApi.md#listAccessRequests) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests | List Access Requests |
| [**updateAccessRequestReviewer()**](AccessRequestsEAPApi.md#updateAccessRequestReviewer) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/access_requests/{access_request_id}/reviewer | Update Access Request Reviewer |


## `approveAccessRequest()`

```php
approveAccessRequest($access_request_id, $proj_id, $env_id, $elements_config_id, $access_request_review): \OpenAPI\Client\Model\AccessRequestApproved
```

Approve Access Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccessRequestsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_request_id = 'access_request_id_example'; // string | Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$access_request_review = new \OpenAPI\Client\Model\AccessRequestReview(); // \OpenAPI\Client\Model\AccessRequestReview

try {
    $result = $apiInstance->approveAccessRequest($access_request_id, $proj_id, $env_id, $elements_config_id, $access_request_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRequestsEAPApi->approveAccessRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **access_request_id** | **string**| Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **access_request_review** | [**\OpenAPI\Client\Model\AccessRequestReview**](../Model/AccessRequestReview.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessRequestApproved**](../Model/AccessRequestApproved.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAccessRequest()`

```php
cancelAccessRequest($access_request_id, $proj_id, $env_id, $elements_config_id): \OpenAPI\Client\Model\AccessRequestCanceled
```

Cancel Access Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccessRequestsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_request_id = 'access_request_id_example'; // string | Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").

try {
    $result = $apiInstance->cancelAccessRequest($access_request_id, $proj_id, $env_id, $elements_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRequestsEAPApi->cancelAccessRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **access_request_id** | **string**| Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\AccessRequestCanceled**](../Model/AccessRequestCanceled.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccessRequest()`

```php
createAccessRequest($elements_config_id, $proj_id, $env_id, $access_request_user_create): \OpenAPI\Client\Model\AccessRequestRead
```

Create Access Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccessRequestsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$access_request_user_create = new \OpenAPI\Client\Model\AccessRequestUserCreate(); // \OpenAPI\Client\Model\AccessRequestUserCreate

try {
    $result = $apiInstance->createAccessRequest($elements_config_id, $proj_id, $env_id, $access_request_user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRequestsEAPApi->createAccessRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **access_request_user_create** | [**\OpenAPI\Client\Model\AccessRequestUserCreate**](../Model/AccessRequestUserCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessRequestRead**](../Model/AccessRequestRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `denyAccessRequest()`

```php
denyAccessRequest($access_request_id, $proj_id, $env_id, $elements_config_id, $access_request_review_deny): \OpenAPI\Client\Model\AccessRequestDenied
```

Deny Access Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccessRequestsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_request_id = 'access_request_id_example'; // string | Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$access_request_review_deny = new \OpenAPI\Client\Model\AccessRequestReviewDeny(); // \OpenAPI\Client\Model\AccessRequestReviewDeny

try {
    $result = $apiInstance->denyAccessRequest($access_request_id, $proj_id, $env_id, $elements_config_id, $access_request_review_deny);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRequestsEAPApi->denyAccessRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **access_request_id** | **string**| Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **access_request_review_deny** | [**\OpenAPI\Client\Model\AccessRequestReviewDeny**](../Model/AccessRequestReviewDeny.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessRequestDenied**](../Model/AccessRequestDenied.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessRequest()`

```php
getAccessRequest($elements_config_id, $access_request_id, $proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\AccessRequestRead
```

Get Access Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccessRequestsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$access_request_id = 'access_request_id_example'; // string | Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->getAccessRequest($elements_config_id, $access_request_id, $proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRequestsEAPApi->getAccessRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **access_request_id** | **string**| Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\AccessRequestRead**](../Model/AccessRequestRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccessRequests()`

```php
listAccessRequests($elements_config_id, $proj_id, $env_id, $status, $tenant, $role, $resource, $page, $per_page, $resource_instance_id): \OpenAPI\Client\Model\PaginatedResultAccessRequestRead
```

List Access Requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccessRequestsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RequestStatus(); // \OpenAPI\Client\Model\RequestStatus | Optional status filter, will only return access requests with this status.
$tenant = 'tenant_example'; // string | Optional tenant filter, will only return access request granted in that tenant.
$role = 'role_example'; // string | Optional role filter, will only return access request granted with that role.
$resource = 'resource_example'; // string | Optional resource filter, will only return access request granted in that resource.
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).
$resource_instance_id = 'resource_instance_id_example'; // string | For ReBAC Elements, the resource instance ID or key to work on

try {
    $result = $apiInstance->listAccessRequests($elements_config_id, $proj_id, $env_id, $status, $tenant, $role, $resource, $page, $per_page, $resource_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRequestsEAPApi->listAccessRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **status** | [**\OpenAPI\Client\Model\RequestStatus**](../Model/.md)| Optional status filter, will only return access requests with this status. | [optional] |
| **tenant** | **string**| Optional tenant filter, will only return access request granted in that tenant. | [optional] |
| **role** | **string**| Optional role filter, will only return access request granted with that role. | [optional] |
| **resource** | **string**| Optional resource filter, will only return access request granted in that resource. | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |
| **resource_instance_id** | **string**| For ReBAC Elements, the resource instance ID or key to work on | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultAccessRequestRead**](../Model/PaginatedResultAccessRequestRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccessRequestReviewer()`

```php
updateAccessRequestReviewer($access_request_id, $proj_id, $env_id, $elements_config_id, $access_request_review): \OpenAPI\Client\Model\AccessRequestRead
```

Update Access Request Reviewer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccessRequestsEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_request_id = 'access_request_id_example'; // string | Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$access_request_review = new \OpenAPI\Client\Model\AccessRequestReview(); // \OpenAPI\Client\Model\AccessRequestReview

try {
    $result = $apiInstance->updateAccessRequestReviewer($access_request_id, $proj_id, $env_id, $elements_config_id, $access_request_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRequestsEAPApi->updateAccessRequestReviewer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **access_request_id** | **string**| Either the unique id of the access_request, or the URL-friendly key of the access_request (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **access_request_review** | [**\OpenAPI\Client\Model\AccessRequestReview**](../Model/AccessRequestReview.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessRequestRead**](../Model/AccessRequestRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
