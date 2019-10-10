# # ConvertV2Slaves

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Balloon\Sdk\Model\CoreV2ListLinks**](CoreV2ListLinks.md) |  | [optional] 
**kind** | **string** | The resource type, always List. | [optional] [default to 'List']
**count** | **float** | Holds the number of items in the current list response. | [optional] 
**total** | **float** | Holds the number of total available items on the server. Note that a List resource is always paged. You need to traverse with offset and limit to request further resources in the list. | [optional] 
**data** | [**\Balloon\Sdk\Model\ConvertV2Slave[]**](ConvertV2Slave.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


