# # ResourceUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the resource | [optional]
**urn** | **string** | The [URN](https://en.wikipedia.org/wiki/Uniform_Resource_Name) (Uniform Resource Name) of the resource | [optional]
**description** | **string** | An optional longer description of what this resource respresents in your system | [optional]
**actions** | [**array<string,\OpenAPI\Client\Model\ActionBlockEditable>**](ActionBlockEditable.md) | A actions definition block, typically contained within a resource type definition block.         The actions represents the ways you can interact with a protected resource. | [optional]
**type_attributes** | **object** | optional dictionary of key-value pairs that can be used to store arbitrary metadata about this resource. This metadata can be used to filter resource using query parameters with attr_ prefix | [optional]
**attributes** | [**array<string,\OpenAPI\Client\Model\AttributeBlockEditable>**](AttributeBlockEditable.md) | Attributes that each resource of this type defines, and can be used in your ABAC policies. | [optional]
**roles** | [**array<string,\OpenAPI\Client\Model\RoleBlockEditable>**](RoleBlockEditable.md) | Roles defined on this resource. The key is the role name, and the value contains the role properties such as granted permissions, base roles, etc. | [optional]
**relations** | **array<string,string>** | Relations to other resources. The key is the relation key, and the value is the related resource. | [optional]
**v1compat_path** | **string** |  | [optional]
**v1compat_type** | **string** |  | [optional]
**v1compat_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
