# # RoleAssignmentDetailedRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id of the role assignment |
**role** | [**\OpenAPI\Client\Model\RoleAssignmentRole**](RoleAssignmentRole.md) | the role that is assigned |
**user** | [**\OpenAPI\Client\Model\RoleAssignmentUser**](RoleAssignmentUser.md) | the user the role is assigned to |
**tenant** | [**\OpenAPI\Client\Model\RoleAssignmentTenant**](RoleAssignmentTenant.md) | the tenant the role is associated with |
**resource_instance** | [**\OpenAPI\Client\Model\RoleAssignmentResourceInstance**](RoleAssignmentResourceInstance.md) |  | [optional]
**organization_id** | **string** | Unique id of the organization that the role assignment belongs to. |
**project_id** | **string** | Unique id of the project that the role assignment belongs to. |
**environment_id** | **string** | Unique id of the environment that the role assignment belongs to. |
**created_at** | **\DateTime** | Date and time when the role assignment was created (ISO_8601 format). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
