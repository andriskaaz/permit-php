# OpenAPI\Client\EmailConfigurationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrUpdateEmailConfiguration()**](EmailConfigurationsApi.md#createOrUpdateEmailConfiguration) | **POST** /v2/facts/{proj_id}/{env_id}/email_configurations | Create Or Update Email Configuration |
| [**getEmailConfiguration()**](EmailConfigurationsApi.md#getEmailConfiguration) | **GET** /v2/facts/{proj_id}/{env_id}/email_configurations | Get Email Configuration |
| [**sendTestEmail()**](EmailConfigurationsApi.md#sendTestEmail) | **POST** /v2/facts/{proj_id}/{env_id}/email_configurations/send_test_email | Send Test Email |


## `createOrUpdateEmailConfiguration()`

```php
createOrUpdateEmailConfiguration($proj_id, $env_id, $email_configuration_create): \OpenAPI\Client\Model\EmailConfigurationRead
```

Create Or Update Email Configuration

Create new configuration or updates the email configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmailConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$email_configuration_create = new \OpenAPI\Client\Model\EmailConfigurationCreate(); // \OpenAPI\Client\Model\EmailConfigurationCreate

try {
    $result = $apiInstance->createOrUpdateEmailConfiguration($proj_id, $env_id, $email_configuration_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailConfigurationsApi->createOrUpdateEmailConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **email_configuration_create** | [**\OpenAPI\Client\Model\EmailConfigurationCreate**](../Model/EmailConfigurationCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailConfigurationRead**](../Model/EmailConfigurationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailConfiguration()`

```php
getEmailConfiguration($proj_id, $env_id): \OpenAPI\Client\Model\EmailConfigurationRead
```

Get Email Configuration

Gets the email configuration defined within an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmailConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").

try {
    $result = $apiInstance->getEmailConfiguration($proj_id, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailConfigurationsApi->getEmailConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |

### Return type

[**\OpenAPI\Client\Model\EmailConfigurationRead**](../Model/EmailConfigurationRead.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTestEmail()`

```php
sendTestEmail($proj_id, $env_id, $email_configuration_create): mixed
```

Send Test Email

Sends a test email to the email address defined in the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmailConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proj_id = 'proj_id_example'; // string | Either the unique id of the project, or the URL-friendly key of the project (i.e: the \"slug\").
$env_id = 'env_id_example'; // string | Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \"slug\").
$email_configuration_create = new \OpenAPI\Client\Model\EmailConfigurationCreate(); // \OpenAPI\Client\Model\EmailConfigurationCreate

try {
    $result = $apiInstance->sendTestEmail($proj_id, $env_id, $email_configuration_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailConfigurationsApi->sendTestEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proj_id** | **string**| Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). | |
| **env_id** | **string**| Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). | |
| **email_configuration_create** | [**\OpenAPI\Client\Model\EmailConfigurationCreate**](../Model/EmailConfigurationCreate.md)|  | |

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
