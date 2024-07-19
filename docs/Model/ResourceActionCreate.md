# # ResourceActionCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the action (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the action. |
**name** | **string** | The name of the action |
**description** | **string** | An optional longer description of what this action respresents in your system | [optional]
**attributes** | **object** | optional dictionary of key-value pairs that can be used to store arbitrary metadata about this action. This metadata can be used to filter actions using query parameters with attr_ prefix | [optional]
**v1compat_path** | **string** |  | [optional]
**v1compat_is_built_in** | **bool** |  | [optional]
**v1compat_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
