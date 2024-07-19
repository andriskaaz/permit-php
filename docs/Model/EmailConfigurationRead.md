# # EmailConfigurationRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | The host of the SMTP provider |
**from_address** | **string** | The from address the mails will be sent from |
**port** | **int** | The port of the SMTP provider |
**username** | **string** | The username of the SMTP provider |
**password** | **string** | The password of the SMTP provider |
**email_provider_type** | **string** | The type of the email provider | [optional] [default to 'mailgun']
**id** | **string** | Unique id of the email_configuration |
**organization_id** | **string** | Unique id of the organization that the email_configuration belongs to. |
**project_id** | **string** | Unique id of the project that the email_configuration belongs to. |
**environment_id** | **string** | Unique id of the environment that the email_configuration belongs to. |
**api_key** | **string** | The api key of the mail provider |
**region** | **string** | The region of the mail provider |
**domain** | **string** | The domain of the mail provider |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)