# # EmailTemplateRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_type** | [**\OpenAPI\Client\Model\EmailTemplateType**](EmailTemplateType.md) | The type of the email template, can be either &#39;approval_flows&#39; or &#39;user_management&#39; |
**id** | **string** | Unique id of the EmailTemplate |
**organization_id** | **string** | Unique id of the organization that the EmailTemplate belongs to. |
**project_id** | **string** | Unique id of the project that the EmailTemplate belongs to. |
**environment_id** | **string** | Unique id of the environment that the EmailTemplate belongs to. |
**from_address** | **string** | The from address the mails will be sent from |
**redirect_to** | **string** | The redirect url the user will be redirected to after clicking the link in the email |
**url_ttl** | **string** | The time to live of the url in the email, in seconds |
**subject** | **string** | The subject of the email template |
**messages** | [**\OpenAPI\Client\Model\EmailTemplateMessage[]**](EmailTemplateMessage.md) | The messages of the email template |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
