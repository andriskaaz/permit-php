# # DataSourceEntryWithPollingInterval

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Url source to query for data |
**config** | **object** | Suggested fetcher configuration (e.g. auth or method) to fetch data with | [optional]
**topics** | **string[]** | topics the data applies to | [optional]
**dst_path** | **string** | OPA data api path to store the document at | [optional] [default to '']
**save_method** | **string** | Method used to write into OPA - PUT/PATCH, when using the PATCH method the data field should conform to the JSON patch schema defined in RFC 6902(https://datatracker.ietf.org/doc/html/rfc6902#section-3) | [optional] [default to 'PUT']
**data** | [**\OpenAPI\Client\Model\Data**](Data.md) |  | [optional]
**periodic_update_interval** | **float** | Polling interval to refresh data from data source | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
