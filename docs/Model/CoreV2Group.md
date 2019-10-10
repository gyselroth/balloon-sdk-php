# # CoreV2Group

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Balloon\Sdk\Model\CoreV2Links**](CoreV2Links.md) |  | [optional] 
**id** | **string** | Unique 12-byte resource identifier. Note this is a MongoDB ObjectId. The name is the standard resource identifier, the id only useful to verify that a given resource was completely recreated. An ID is immutable and will be created on the server. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was created. | [optional] 
**changed** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was changed. | [optional] 
**name** | **string** | Group name. | [optional] 
**namespace** | **string** | User namespace. | [optional] 
**member** | **string[]** | Array of user id&#39;s. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


