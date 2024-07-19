# # OperationApprovalCanceled

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reviewer_comment** | **string** | comment provided by the reviewer_user_id | [optional]
**access_request_details** | [**\OpenAPI\Client\Model\OperationApprovalDetails**](OperationApprovalDetails.md) | details of the operation approval, including the resource and tenant |
**reason** | **string** | Optional business justification provided by the user requesting operation approval | [optional]
**id** | **string** | Unique id of the operation approval |
**organization_id** | **string** | Unique id of the organization that the operation approval  belongs to. |
**project_id** | **string** | Unique id of the project that the operation approval  belongs to. |
**environment_id** | **string** | Unique id of the environment that the operation approval  belongs to. |
**created_at** | **\DateTime** | Date and time when the operation approval  was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the operation approval  was last updated/modified (ISO_8601 format). |
**requesting_user_id** | **string** | optional id of the user that is requesting the approval |
**reviewed_at** | **\DateTime** | when the operation approval was reviewed | [optional]
**type** | [**\OpenAPI\Client\Model\RequestType**](RequestType.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\RequestStatus**](RequestStatus.md) | current status of the operation approval |
**reviewer_user_id** | **string** | Optional id of the user who review the operation approval | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
