# # ResourceActionGroupRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the action group |
**description** | **string** | An optional longer description of what this action group represents in your system | [optional]
**attributes** | **object** | optional dictionary of key-value pairs that can be used to store arbitrary metadata about this action group. This metadata can be used to filter action groups using query parameters with attr_ prefix | [optional]
**actions** | **string[]** |  | [optional]
**key** | **string** | A URL-friendly name of the action group (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the action group. |
**id** | **string** | Unique id of the action group |
**organization_id** | **string** | Unique id of the organization that the action group belongs to. |
**project_id** | **string** | Unique id of the project that the action group belongs to. |
**environment_id** | **string** | Unique id of the environment that the action group belongs to. |
**resource_id** | **string** | Unique id of the resource that the action group belongs to. |
**created_at** | **\DateTime** | Date and time when the action group was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the action group was last updated/modified (ISO_8601 format). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
