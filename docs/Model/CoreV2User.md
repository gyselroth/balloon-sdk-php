# # CoreV2User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Balloon\Sdk\Model\CoreV2Links**](CoreV2Links.md) |  | [optional] 
**id** | **string** | Unique 12-byte resource identifier. Note this is a MongoDB ObjectId. The name is the standard resource identifier, the id only useful to verify that a given resource was completely recreated. An ID is immutable and will be created on the server. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was created. | [optional] 
**changed** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was changed. | [optional] 
**username** | **string** | Unique username. | [optional] 
**name** | **string** | Display name (Usuallly same as username). | [optional] 
**admin** | **bool** | Admin user flag. | [optional] [default to false]
**namespace** | **string** | User namespace. | [optional] 
**locale** | **string** | User locale. | [optional] [default to 'en_US']
**auth** | **string** | Authentication source. | [optional] [default to 'internal']
**has_password** | **bool** | Is true if the user has a local password set. | [optional] [default to false]
**hard_quota** | **float** | Hard quota in bytes (Max. limit of storage usage). Note that external storage is not part of the quota. The default is no limit. | [optional] [default to -1]
**soft_quota** | **float** | Soft quota in bytes (Warning of high quota usage). The default is no limit. | [optional] [default to -1]
**available** | **float** | Available storage in bytes. Is -1 if there is no hard_quota. | [optional] [default to -1]
**used** | **float** | Used storage in bytes. | [optional] [default to 0]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


