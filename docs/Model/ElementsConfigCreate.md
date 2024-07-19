# # ElementsConfigCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the elements_config (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the elements_config. |
**name** | **string** | The name of the elements_config |
**elements_type** | [**\OpenAPI\Client\Model\ElementsType**](ElementsType.md) | The type of the elements interface, e.g: user management |
**settings** | [**array<string,\OpenAPI\Client\Model\Settings>**](Settings.md) | Obj with the options of the elements interface, e.g: primary color |
**email_notifications** | **bool** | Whether to send email notifications to users using your Email Provider you set | [optional] [default to false]
**roles_to_levels** | **array<string,string[]>** | Obj with levels as keys and role ids as values |
**webhook** | [**\OpenAPI\Client\Model\WebhookCreateWithElements**](WebhookCreateWithElements.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
