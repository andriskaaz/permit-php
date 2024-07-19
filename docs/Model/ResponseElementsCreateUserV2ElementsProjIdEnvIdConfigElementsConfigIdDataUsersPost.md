# # ResponseElementsCreateUserV2ElementsProjIdEnvIdConfigElementsConfigIdDataUsersPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The key of the user that is being invited |
**id** | **string** | Unique id of the elements_user_invite |
**organization_id** | **string** | Unique id of the organization that the elements_user_invite belongs to. |
**project_id** | **string** | Unique id of the project that the elements_user_invite belongs to. |
**environment_id** | **string** | Unique id of the environment that the elements_user_invite belongs to. |
**associated_tenants** | [**\OpenAPI\Client\Model\UserInTenant[]**](UserInTenant.md) |  | [optional]
**roles** | [**\OpenAPI\Client\Model\UserRole[]**](UserRole.md) |  | [optional]
**email** | **string** | The email of the user that being invited |
**first_name** | **string** | The first name of the user that is being invited |
**last_name** | **string** | The last name of the user that is being invited |
**attributes** | **object** | Arbitrary user attributes that will be used to enforce attribute-based access control policies. | [optional]
**created_at** | **\DateTime** | Date and time when the elements_user_invite was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the elements_user_invite was last updated/modified (ISO_8601 format). |
**status** | [**\OpenAPI\Client\Model\UserInviteStatus**](UserInviteStatus.md) | The status of the user invite |
**role_id** | **string** | The role of the user that is being invited |
**tenant_id** | **string** | The tenant id of the user that is being invited |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
