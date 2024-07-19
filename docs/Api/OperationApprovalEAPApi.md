# OpenAPI\Client\OperationApprovalEAPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveOperationApproval()**](OperationApprovalEAPApi.md#approveOperationApproval) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/approve | Approve Operation Approval |
| [**cancelOperationApproval()**](OperationApprovalEAPApi.md#cancelOperationApproval) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/cancel | Cancel Operation Approval |
| [**createOperationApproval()**](OperationApprovalEAPApi.md#createOperationApproval) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval | Create Operation Approval |
| [**denyOperationApproval()**](OperationApprovalEAPApi.md#denyOperationApproval) | **PUT** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/deny | Deny Operation Approval |
| [**getOperationApproval()**](OperationApprovalEAPApi.md#getOperationApproval) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id} | Get Operation Approval |
| [**listOperationApprovals()**](OperationApprovalEAPApi.md#listOperationApprovals) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval | List Operation Approvals |
| [**updateOperationApprovalReviewer()**](OperationApprovalEAPApi.md#updateOperationApprovalReviewer) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/operation_approval/{operation_approval_id}/reviewer | Update Operation Approval Reviewer |


## `approveOperationApproval()`

```php
approveOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id, $operation_approval_review): \OpenAPI\Client\Model\OperationApprovalApproved
```

Approve Operation Approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OperationApprovalEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_approval_id = 'operation_approval_id_example'; // string | Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$operation_approval_review = new \OpenAPI\Client\Model\OperationApprovalReview(); // \OpenAPI\Client\Model\OperationApprovalReview

try {
    $result = $apiInstance->approveOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id, $operation_approval_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApprovalEAPApi->approveOperationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_approval_id** | **string**| Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **operation_approval_review** | [**\OpenAPI\Client\Model\OperationApprovalReview**](../Model/OperationApprovalReview.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OperationApprovalApproved**](../Model/OperationApprovalApproved.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOperationApproval()`

```php
cancelOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id): \OpenAPI\Client\Model\OperationApprovalCanceled
```

Cancel Operation Approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OperationApprovalEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_approval_id = 'operation_approval_id_example'; // string | Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").

try {
    $result = $apiInstance->cancelOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApprovalEAPApi->cancelOperationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_approval_id** | **string**| Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\OperationApprovalCanceled**](../Model/OperationApprovalCanceled.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOperationApproval()`

```php
createOperationApproval($proj_id, $env_id, $elements_config_id, $operation_approval_user_create): \OpenAPI\Client\Model\OperationApprovalRead
```

Create Operation Approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OperationApprovalEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$operation_approval_user_create = new \OpenAPI\Client\Model\OperationApprovalUserCreate(); // \OpenAPI\Client\Model\OperationApprovalUserCreate

try {
    $result = $apiInstance->createOperationApproval($proj_id, $env_id, $elements_config_id, $operation_approval_user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApprovalEAPApi->createOperationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **operation_approval_user_create** | [**\OpenAPI\Client\Model\OperationApprovalUserCreate**](../Model/OperationApprovalUserCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OperationApprovalRead**](../Model/OperationApprovalRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `denyOperationApproval()`

```php
denyOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id, $operation_approval_review): \OpenAPI\Client\Model\OperationApprovalDenied
```

Deny Operation Approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OperationApprovalEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_approval_id = 'operation_approval_id_example'; // string | Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$operation_approval_review = new \OpenAPI\Client\Model\OperationApprovalReview(); // \OpenAPI\Client\Model\OperationApprovalReview

try {
    $result = $apiInstance->denyOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id, $operation_approval_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApprovalEAPApi->denyOperationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_approval_id** | **string**| Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **operation_approval_review** | [**\OpenAPI\Client\Model\OperationApprovalReview**](../Model/OperationApprovalReview.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OperationApprovalDenied**](../Model/OperationApprovalDenied.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOperationApproval()`

```php
getOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id, $page, $per_page): \OpenAPI\Client\Model\OperationApprovalRead
```

Get Operation Approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OperationApprovalEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_approval_id = 'operation_approval_id_example'; // string | Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->getOperationApproval($operation_approval_id, $proj_id, $env_id, $elements_config_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApprovalEAPApi->getOperationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_approval_id** | **string**| Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\OperationApprovalRead**](../Model/OperationApprovalRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOperationApprovals()`

```php
listOperationApprovals($proj_id, $env_id, $elements_config_id, $status, $resource, $resource_instance, $page, $per_page): \OpenAPI\Client\Model\PaginatedResultOperationApprovalList
```

List Operation Approvals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OperationApprovalEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RequestStatus(); // \OpenAPI\Client\Model\RequestStatus | Optional status filter, will only return access requests with this status.
$resource = 'resource_example'; // string | Optional resource filter, will only return access request granted in that resource.
$resource_instance = 'resource_instance_example'; // string | Optional resource instance filter, will only return access request granted in that resource instance.
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listOperationApprovals($proj_id, $env_id, $elements_config_id, $status, $resource, $resource_instance, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApprovalEAPApi->listOperationApprovals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **status** | [**\OpenAPI\Client\Model\RequestStatus**](../Model/.md)| Optional status filter, will only return access requests with this status. | [optional] |
| **resource** | **string**| Optional resource filter, will only return access request granted in that resource. | [optional] |
| **resource_instance** | **string**| Optional resource instance filter, will only return access request granted in that resource instance. | [optional] |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\PaginatedResultOperationApprovalList**](../Model/PaginatedResultOperationApprovalList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOperationApprovalReviewer()`

```php
updateOperationApprovalReviewer($operation_approval_id, $proj_id, $env_id, $elements_config_id, $operation_approval_review): \OpenAPI\Client\Model\OperationApprovalRead
```

Update Operation Approval Reviewer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OperationApprovalEAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_approval_id = 'operation_approval_id_example'; // string | Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \"slug\").
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$elements_config_id = 'elements_config_id_example'; // string | Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \"slug\").
$operation_approval_review = new \OpenAPI\Client\Model\OperationApprovalReview(); // \OpenAPI\Client\Model\OperationApprovalReview

try {
    $result = $apiInstance->updateOperationApprovalReviewer($operation_approval_id, $proj_id, $env_id, $elements_config_id, $operation_approval_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationApprovalEAPApi->updateOperationApprovalReviewer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_approval_id** | **string**| Either the unique id of the operation_approval, or the URL-friendly key of the operation_approval (i.e: the \&quot;slug\&quot;). | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **elements_config_id** | **string**| Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). | |
| **operation_approval_review** | [**\OpenAPI\Client\Model\OperationApprovalReview**](../Model/OperationApprovalReview.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OperationApprovalRead**](../Model/OperationApprovalRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
