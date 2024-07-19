# # OrganizationStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A URL-friendly name of the organization (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the organization. |
**id** | **string** | Unique id of the organization |
**is_enterprise** | **bool** | Is this an enterprise account? |
**usage_limits** | [**\OpenAPI\Client\Model\UsageLimits**](UsageLimits.md) | Usage limits for this organization | [optional]
**created_at** | **\DateTime** | Date and time when the organization was created (ISO_8601 format). |
**updated_at** | **\DateTime** | Date and time when the organization was last updated/modified (ISO_8601 format). |
**name** | **string** | The name of the organization, usually it&#39;s your company&#39;s name. |
**settings** | **object** | the settings for this project | [optional]
**stats** | [**\OpenAPI\Client\Model\OrganizationStatistics**](OrganizationStatistics.md) |  |
**historical_usage** | [**\OpenAPI\Client\Model\HistoricalUsage**](HistoricalUsage.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
