# # RelationshipTupleRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | resource_key:resource_instance_key of the subject |
**relation** | **string** | key of the assigned relation |
**object** | **string** | resource_key:resource_instance_key of the object |
**id** | **string** | Unique id of the relationship tuple |
**tenant** | **string** | The tenant the relationship tuple is associated with |
**subject_id** | **string** | Unique id of the subject |
**relation_id** | **string** | Unique id of the relation |
**object_id** | **string** | Unique id of the object |
**tenant_id** | **string** | Unique id of the tenant |
**organization_id** | **string** | Unique id of the organization that the relationship tuple belongs to. |
**project_id** | **string** | Unique id of the project that the relationship tuple belongs to. |
**environment_id** | **string** | Unique id of the environment that the relationship tuple belongs to. |
**created_at** | **\DateTime** | Date and time when the relationship tuple was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the relationship tuple was created (ISO_8601 format). |
**subject_details** | [**\OpenAPI\Client\Model\ResourceInstanceBlockRead**](ResourceInstanceBlockRead.md) | The subject details of the relationship tuple | [optional]
**relation_details** | [**\OpenAPI\Client\Model\StrippedRelationBlockRead**](StrippedRelationBlockRead.md) | The relation details of the relationship tuple | [optional]
**object_details** | [**\OpenAPI\Client\Model\ResourceInstanceBlockRead**](ResourceInstanceBlockRead.md) | The object details of the relationship tuple | [optional]
**tenant_details** | [**\OpenAPI\Client\Model\TenantBlockRead**](TenantBlockRead.md) | The tenant details of the relationship tuple | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
