# # ProxyConfigRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Proxy Config is set to enable the Permit Proxy to make proxied requests as part of the Frontend AuthZ. |
**id** | **string** | Unique id of the proxy config |
**organization_id** | **string** | Unique id of the organization that the proxy config belongs to. |
**project_id** | **string** | Unique id of the project that the proxy config belongs to. |
**environment_id** | **string** | Unique id of the environment that the proxy config belongs to. |
**created_at** | **\DateTime** | Date and time when the proxy config was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the proxy config was last updated/modified (ISO_8601 format). |
**secret** | [**\OpenAPI\Client\Model\Secret**](Secret.md) |  |
**name** | **string** | The name of the proxy config, for example: &#39;Stripe API&#39; |
**mapping_rules** | [**\OpenAPI\Client\Model\MappingRule[]**](MappingRule.md) | Proxy config mapping rules will include the rules that will be used to map the request to the backend service by a URL and a http method. | [optional]
**auth_mechanism** | [**\OpenAPI\Client\Model\AuthMechanism**](AuthMechanism.md) | Proxy config auth mechanism will define the authentication mechanism that will be used to authenticate the request.  Bearer injects the secret into the Authorization header as a Bearer token,  Basic injects the secret into the Authorization header as a Basic user:password,  Headers injects plain headers into the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
