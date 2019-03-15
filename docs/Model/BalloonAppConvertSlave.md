# BalloonAppConvertSlave

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Balloon\Sdk\Model\Links**](Links.md) |  | [optional] 
**id** | **string** | Unique 12-byte resource identifier. Note this is a MongoDB ObjectId. The name is the standard resource identifier, the id only useful to verify that a given resource was completely recreated. An ID is immutable and will be created on the server. | [optional] 
**created** | **string** | ISO 8601 timestamp when the resource was created. | [optional] 
**format** | **string** | Slave format. | [optional] 
**master** | [**\Balloon\Sdk\Model\BalloonAppConvertSlaveMaster**](BalloonAppConvertSlaveMaster.md) |  | [optional] 
**slave** | [**\Balloon\Sdk\Model\BalloonAppConvertSlaveSlave**](BalloonAppConvertSlaveSlave.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

