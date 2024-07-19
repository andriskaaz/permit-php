# # MappingRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The URL to match against the request URL |
**http_method** | [**\OpenAPI\Client\Model\Methods**](Methods.md) | The HTTP method to match against the request method |
**resource** | **string** | The resource to match against the request resource |
**headers** | **array<string,string>** | The headers to match against the request headers | [optional]
**action** | **string** | The action to match against the request action | [optional]
**priority** | **int** | The priority of the mapping rule. The higher the priority, the higher the precedence | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
