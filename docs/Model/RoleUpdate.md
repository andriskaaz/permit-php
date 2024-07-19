# # RoleUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the role | [optional]
**description** | **string** | optional description string explaining what this role represents, or what permissions are granted to it. | [optional]
**permissions** | **string[]** | list of action keys that define what actions this resource role is permitted to do | [optional]
**attributes** | **object** | optional dictionary of key-value pairs that can be used to store arbitrary metadata about this role. This metadata can be used to filter role using query parameters with attr_ prefix, currently supports only &#39;equals&#39; operator | [optional]
**extends** | **string[]** | list of role keys that define what roles this role extends. In other words: this role will automatically inherit all the permissions of the given roles in this list. | [optional]
**granted_to** | [**\OpenAPI\Client\Model\DerivedRoleBlockEdit**](DerivedRoleBlockEdit.md) | Derived role that inherit will be applied on this role | [optional]
**v1compat_settings** | **object** |  | [optional]
**v1compat_attributes** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
