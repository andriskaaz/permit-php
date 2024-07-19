# # ResourceRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the resource (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the resource. |
**id** | **string** | Unique id of the resource |
**organization_id** | **string** | Unique id of the organization that the resource belongs to. |
**project_id** | **string** | Unique id of the project that the resource belongs to. |
**environment_id** | **string** | Unique id of the environment that the resource belongs to. |
**created_at** | **\DateTime** | Date and time when the resource was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the resource was last updated/modified (ISO_8601 format). |
**name** | **string** | The name of the resource |
**urn** | **string** | The [URN](https://en.wikipedia.org/wiki/Uniform_Resource_Name) (Uniform Resource Name) of the resource | [optional]
**description** | **string** | An optional longer description of what this resource respresents in your system | [optional]
**actions** | [**array<string,\OpenAPI\Client\Model\ActionBlockRead>**](ActionBlockRead.md) | A actions definition block, typically contained within a resource type definition block.         The actions represents the ways you can interact with a protected resource. | [optional]
**type_attributes** | **object** | optional dictionary of key-value pairs that can be used to store arbitrary metadata about this resource. This metadata can be used to filter resource using query parameters with attr_ prefix | [optional]
**attributes** | [**array<string,\OpenAPI\Client\Model\AttributeBlockRead>**](AttributeBlockRead.md) | Attributes that each resource of this type defines, and can be used in your ABAC policies. | [optional]
**roles** | [**array<string,\OpenAPI\Client\Model\ResourceRoleRead>**](ResourceRoleRead.md) | Roles defined on this resource. The key is the role name, and the value contains the role properties such as granted permissions, etc. | [optional]
**relations** | [**array<string,\OpenAPI\Client\Model\RelationBlockRead>**](RelationBlockRead.md) | A relations definition block, typically contained within a resource type definition block.         The relations represents the ways you can interact with a protected resource. | [optional]
**v1compat_path** | **string** |  | [optional]
**v1compat_type** | **string** |  | [optional]
**v1compat_name** | **string** |  | [optional]
**action_groups** | **array<string,string[]>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
