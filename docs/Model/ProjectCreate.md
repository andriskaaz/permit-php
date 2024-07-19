# # ProjectCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the project (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the project. |
**urn_namespace** | **string** | Optional namespace for URNs. If empty, URNs will be generated from project key. | [optional]
**name** | **string** | The name of the project |
**description** | **string** | a longer description outlining the project objectives | [optional]
**settings** | **object** | the settings for this project | [optional]
**active_policy_repo_id** | **string** | the id of the policy repo to use for this project | [optional]
**initial_environments** | [**\OpenAPI\Client\Model\EnvironmentCreate[]**](EnvironmentCreate.md) | The initial environments to create for this project. By default, &#39;Development&#39; and &#39;Production&#39; are created, specify [] (empty list) to skip that. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
