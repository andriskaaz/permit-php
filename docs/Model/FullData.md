# # FullData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_debugger** | **bool** |  | [optional] [default to true]
**users** | [**array<string,\OpenAPI\Client\Model\UserData>**](UserData.md) | Key-Value mapping of the users in the system. The key is the user key and the value contains some details about the user. |
**tenants** | [**array<string,\OpenAPI\Client\Model\TenantData>**](TenantData.md) | Key-Value mapping of the tenants in the system. The key is the tenant key and the value contains some details about the tenant. |
**roles** | [**array<string,\OpenAPI\Client\Model\RoleData>**](RoleData.md) | Key-Value mapping of the roles in the system. The key is the role key and the value contains some details about the role. |
**condition_set_rules** | **array<string,array<string,array<string,string[]>>>** | Key-Value mapping of the permissions for each condition set. The key is the user-set key and the value is Key-Value mapping of resource-set key to the permissions for that user-set &amp; resource-set.The key is the resource key and the value is list of actions that the user-set can perform on that resource-set |
**relationships** | **array<string,array<string,array<string,string[]>>>** | Key-Value mapping of the relationships between resources. The key is the resource instance key and the value is Key-Value mapping of relation key to a Key-Value mapping of resource ( type ) to list of instances keys. |
**resource_types** | [**array<string,\OpenAPI\Client\Model\ResourceTypeData>**](ResourceTypeData.md) | Key-Value mapping of the resource types in the system. The key is the resource type key and the value contains some details about the resource type. |
**condition_sets** | [**array<string,\OpenAPI\Client\Model\ConditionSetData>**](ConditionSetData.md) | Key-Value mapping of the condition sets in the system. The key is the formatted condition set key and the value contains some details about the condition set. |
**role_assignments** | **array<string,array<string,string[]>>** | Key-Value mapping of the role assignments for the users. The key is the user key and the value is Key-Value mapping of resource instance key or tenant key to list of role keys assigned to the user in that resource instance. |
**role_permissions** | **array<string,array<string,\OpenAPI\Client\Model\RoleData>>** | Key-Value mapping of the permissions for each role. The key is the resource key and the value is Key-Value mapping of role key to details on the role permissions. |
**mapping_rules** | **array<string,array<string,\OpenAPI\Client\Model\MappingRulesInnerValue>[]>** | Key-Value mapping of groups of mapping rules in the system. The key is the mapping rule group and the value is a list of mapping rules objects.We currently have only one group named &#39;all&#39; which contains all the mapping rules.A mapping rule object contains, action, http_method, resource and url - all strings. | [optional]
**resource_instances** | [**array<string,\OpenAPI\Client\Model\ResourceInstanceAttributeData>**](ResourceInstanceAttributeData.md) | Key-Value mapping of the resource instances in the system. The key is the resource instance key and the value contains some details about the resource instance. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
