# OpenAPI\Client\EmailTemplatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTemplateByType()**](EmailTemplatesApi.md#getTemplateByType) | **GET** /v2/facts/{proj_id}/{env_id}/email_templates/{template_type} | Get Template By Type |
| [**listTemplates()**](EmailTemplatesApi.md#listTemplates) | **GET** /v2/facts/{proj_id}/{env_id}/email_templates/ | List Templates |
| [**sendTestEmailByType()**](EmailTemplatesApi.md#sendTestEmailByType) | **POST** /v2/facts/{proj_id}/{env_id}/email_templates/{template_type}/send_test_email | Send Test Email By Type |
| [**updateTemplateByType()**](EmailTemplatesApi.md#updateTemplateByType) | **POST** /v2/facts/{proj_id}/{env_id}/email_templates/{template_type} | Update Template By Type |


## `getTemplateByType()`

```php
getTemplateByType($template_type, $proj_id, $env_id): \OpenAPI\Client\Model\EmailTemplateRead
```

Get Template By Type

Lists all the email configurations defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_type = new \OpenAPI\Client\Model\EmailTemplateType(); // EmailTemplateType
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getTemplateByType($template_type, $proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getTemplateByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_type** | [**EmailTemplateType**](../Model/.md)|  | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateRead**](../Model/EmailTemplateRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates($proj_id, $env_id, $page, $per_page): \OpenAPI\Client\Model\EmailTemplateRead[]
```

List Templates

Lists all the email configurations defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$page = 1; // int | Page number of the results to fetch, starting at 1.
$per_page = 30; // int | The number of results per page (max 100).

try {
    $result = $apiInstance->listTemplates($proj_id, $env_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **page** | **int**| Page number of the results to fetch, starting at 1. | [optional] [default to 1] |
| **per_page** | **int**| The number of results per page (max 100). | [optional] [default to 30] |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateRead[]**](../Model/EmailTemplateRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTestEmailByType()`

```php
sendTestEmailByType($template_type, $proj_id, $env_id, $email_template_update): mixed
```

Send Test Email By Type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_type = new \OpenAPI\Client\Model\EmailTemplateType(); // EmailTemplateType
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$email_template_update = new \OpenAPI\Client\Model\EmailTemplateUpdate(); // \OpenAPI\Client\Model\EmailTemplateUpdate

try {
    $result = $apiInstance->sendTestEmailByType($template_type, $proj_id, $env_id, $email_template_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->sendTestEmailByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_type** | [**EmailTemplateType**](../Model/.md)|  | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **email_template_update** | [**\OpenAPI\Client\Model\EmailTemplateUpdate**](../Model/EmailTemplateUpdate.md)|  | |

### Return type

**mixed**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplateByType()`

```php
updateTemplateByType($template_type, $proj_id, $env_id, $email_template_update): \OpenAPI\Client\Model\EmailTemplateRead
```

Update Template By Type

Updates an email template by a given type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_type = new \OpenAPI\Client\Model\EmailTemplateType(); // EmailTemplateType
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$email_template_update = new \OpenAPI\Client\Model\EmailTemplateUpdate(); // \OpenAPI\Client\Model\EmailTemplateUpdate

try {
    $result = $apiInstance->updateTemplateByType($template_type, $proj_id, $env_id, $email_template_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->updateTemplateByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_type** | [**EmailTemplateType**](../Model/.md)|  | |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **email_template_update** | [**\OpenAPI\Client\Model\EmailTemplateUpdate**](../Model/EmailTemplateUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateRead**](../Model/EmailTemplateRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
