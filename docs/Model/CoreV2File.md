# # CoreV2File

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Balloon\Sdk\Model\CoreV2Links**](CoreV2Links.md) |  | [optional] 
**id** | **string** | Unique 12-byte resource identifier. Note this is a MongoDB ObjectId. The name is the standard resource identifier, the id only useful to verify that a given resource was completely recreated. An ID is immutable and will be created on the server. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was created. | [optional] 
**changed** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was changed. | [optional] 
**deleted** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the resource was deleted. | [optional] 
**name** | **string** | Node name. | [optional] 
**mime** | **string** | Mimetype. | [optional] 
**readonly** | **bool** | Readonly only affects the content of the node but not metadata. | [optional] [default to false]
**directory** | **bool** | If node is of type Collection this flag is true. | [optional] [default to false]
**meta** | [**\Balloon\Sdk\Model\CoreV2NodeMeta**](CoreV2NodeMeta.md) |  | [optional] 
**size** | **float** | The size in bytes. If the node is of type collection the size is the number of child nodes. | [optional] [default to 0]
**path** | **string** | The path abstraction of the node. | [optional] 
**access** | **string** | Access level. | [optional] [default to 'rw']
**parent** | [**\Balloon\Sdk\Model\CoreV2NodeAllOfParent**](CoreV2NodeAllOfParent.md) |  | [optional] 
**share** | [**\Balloon\Sdk\Model\CoreV2NodeAllOfShare**](CoreV2NodeAllOfShare.md) |  | [optional] 
**shareowner** | [**\Balloon\Sdk\Model\CoreV2NodeAllOfShareowner**](CoreV2NodeAllOfShareowner.md) |  | [optional] 
**subscription** | **bool** | Is true if the user has an active subscription on this node. | [optional] [default to false]
**subscription_exclude_me** | **bool** | Subscription excludes actions from the subscribed user itself. | [optional] [default to false]
**sharelink_has_password** | **bool** | Is true if the node has a protected public sharelink. | [optional] [default to false]
**version** | **float** | The content version. Does increase if the content gets changed. | [optional] [default to 1]
**hash** | **string** | MD5 content checksum. | [optional] 
**preview** | **bool** | Is true if there is a preview | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


