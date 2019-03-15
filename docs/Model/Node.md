# Node

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Balloon\Sdk\Model\Links**](Links.md) |  | [optional] 
**id** | **string** | Unique 12-byte resource identifier. Note this is a MongoDB ObjectId. The name is the standard resource identifier, the id only useful to verify that a given resource was completely recreated. An ID is immutable and will be created on the server. | [optional] 
**created** | **string** | ISO 8601 timestamp when the resource was created. | [optional] 
**changed** | **string** | ISO 8601 timestamp when the resource was changed. | [optional] 
**name** | **string** | Node name. | [optional] 
**mime** | **string** | Mimetype. | [optional] 
**readonly** | **bool** | Readonly only affects the content of the node but not metadata. | [optional] [default to false]
**directory** | **bool** | If node is of type Collection this flag is true. | [optional] [default to false]
**meta** | [**\Balloon\Sdk\Model\NodeMeta**](NodeMeta.md) |  | [optional] 
**size** | **float** | The size in bytes. If the node is of type collection the size is the number of child nodes. | [optional] 
**path** | **string** | The path abstraction of the node. | [optional] 
**access** | **string** | Access level. | [optional] [default to 'rw']
**parent** | [**\Balloon\Sdk\Model\NodeParent**](NodeParent.md) |  | [optional] 
**share** | [**\Balloon\Sdk\Model\NodeShare**](NodeShare.md) |  | [optional] 
**shareowner** | [**\Balloon\Sdk\Model\NodeShareowner**](NodeShareowner.md) |  | [optional] 
**subscription** | **bool** | Is true if the user has an active subscription on this node. | [optional] [default to false]
**subscription_exclude_me** | **bool** | Subscription excludes actions from the subscribed user itself. | [optional] [default to false]
**sharelink_has_password** | **bool** | Is true if the node has a protected public sharelink. | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


