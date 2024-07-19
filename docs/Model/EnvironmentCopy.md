# # EnvironmentCopy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**target_env** | [**\OpenAPI\Client\Model\EnvironmentCopyTarget**](EnvironmentCopyTarget.md) | If copying a new environment, the environment configuration. If copying to an existing environment, the environment identifier |
**conflict_strategy** | [**\OpenAPI\Client\Model\EnvironmentCopyConflictStrategy**](EnvironmentCopyConflictStrategy.md) | Action to take when detecting a conflict when copying. Only applies to copying into an existing environment | [optional]
**scope** | [**\OpenAPI\Client\Model\EnvironmentCopyScope**](EnvironmentCopyScope.md) | Filters to include and exclude copied objects | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
