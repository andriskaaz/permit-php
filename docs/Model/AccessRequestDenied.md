# # AccessRequestDenied

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reviewer_comment** | **string** | comment provided by the reviewer_user_id | [optional]
**access_request_details** | [**\OpenAPI\Client\Model\AccessRequestDetails**](AccessRequestDetails.md) | details of the access request, including the resource and tenant |
**reason** | **string** | Optional business justification provided by the user requesting access | [optional]
**id** | **string** | Unique id of the access request |
**organization_id** | **string** | Unique id of the organization that the access request belongs to. |
**project_id** | **string** | Unique id of the project that the access request belongs to. |
**environment_id** | **string** | Unique id of the environment that the access request belongs to. |
**created_at** | **\DateTime** | Date and time when the access request was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the access request was last updated/modified (ISO_8601 format). |
**requesting_user_id** | **string** | optional id of the user that is requesting the access | [optional]
**reviewed_at** | **\DateTime** | when the access request was reviewed | [optional]
**type** | [**\OpenAPI\Client\Model\RequestType**](RequestType.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\RequestStatus**](RequestStatus.md) | current status of the access request |
**reviewer_user_id** | **string** | Optional id of the user who review the access request | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
