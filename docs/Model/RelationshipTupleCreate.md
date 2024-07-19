# # RelationshipTupleCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | the resource instance assigned the new relation (accepts either the resource instance id or resource_key:resource_instance_key) |
**relation** | **string** | the relation to assign between the subject and object |
**object** | **string** | the resource instance on which the new relation is assigned (accepts either the resource instance id or resource_key:resource_instance_key) |
**tenant** | **string** | The tenant the subject and object belong to, if the resource instances don&#39;t exist yet, the tenant is required to create them. otherwise it is ignored | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
