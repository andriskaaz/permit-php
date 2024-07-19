# # APIKeyRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_id** | **string** |  |
**project_id** | **string** |  | [optional]
**environment_id** | **string** |  | [optional]
**object_type** | [**\OpenAPI\Client\Model\MemberAccessObj**](MemberAccessObj.md) |  | [optional]
**access_level** | [**\OpenAPI\Client\Model\MemberAccessLevel**](MemberAccessLevel.md) |  | [optional]
**owner_type** | [**\OpenAPI\Client\Model\APIKeyOwnerType**](APIKeyOwnerType.md) |  |
**name** | **string** |  | [optional]
**id** | **string** |  |
**secret** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**created_by_member** | [**\OpenAPI\Client\Model\OrgMemberRead**](OrgMemberRead.md) |  | [optional]
**last_used_at** | **\DateTime** |  | [optional]
**env** | [**\OpenAPI\Client\Model\EnvironmentRead**](EnvironmentRead.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectRead**](ProjectRead.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
