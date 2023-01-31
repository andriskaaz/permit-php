# # ResourceInstanceRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A unique identifier by which Permit will identify the resource instance for permission checks. You will later pass this identifier to the &#x60;permit.check()&#x60; API. A key can be anything: for example the resource db id, a url slug, a UUID or anything else as long as it&#39;s unique on your end. The resource instance key must be url-friendly. |
**tenant** | **string** | the *key* of the tenant that this resource belongs to, used to enforce tenant boundaries in multi-tenant apps. | [optional]
**resource** | **string** | the *key* of the resource (type) of this resource instance. For example: if this resource instance is the annual budget document, the key of the resource might be &#x60;document&#x60;. |
**id** | **string** | Unique id of the resource instance |
**organization_id** | **string** | Unique id of the organization that the resource instance belongs to. |
**project_id** | **string** | Unique id of the project that the resource instance belongs to. |
**environment_id** | **string** | Unique id of the environment that the resource instance belongs to. |
**created_at** | **\DateTime** | Date and time when the resource instance was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the resource instance was last updated/modified (ISO_8601 format). |
**resource_id** | **string** | the id of the resource (type) of this resource instance. |
**tenant_id** | **string** | the id of the tenant of this resource instance. | [optional]
**attributes** | **object** | Arbitraty resource attributes that will be used to enforce attribute-based access control policies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
