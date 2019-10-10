# # NotificationV2Notification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Balloon\Sdk\Model\CoreV2Links**](CoreV2Links.md) |  | [optional] 
**id** | **string** | Unique 12-byte resource identifier. Note this is a MongoDB ObjectId. The name is the standard resource identifier, the id only useful to verify that a given resource was completely recreated. An ID is immutable and will be created on the server. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was created. | [optional] 
**locale** | **string** | Notification locale. A locale contains a static message which is of a given locale. | [optional] [default to 'en_US']
**subject** | **string** | Subject. | [optional] 
**message** | **string** | Message. | [optional] 
**sender** | [**\Balloon\Sdk\Model\NotificationV2NotificationAllOfSender**](NotificationV2NotificationAllOfSender.md) |  | [optional] 
**node** | [**\Balloon\Sdk\Model\NotificationV2NotificationAllOfNode**](NotificationV2NotificationAllOfNode.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


