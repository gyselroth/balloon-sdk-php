# Balloon\Sdk\PreviewV2Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPreview**](PreviewV2Api.md#getPreview) | **GET** /api/v2/files/{file}/preview | Get a preview of the files content. The body either contains an encoded string or a jpeg binary.


# **getPreview**
> getPreview($file, $encode)

Get a preview of the files content. The body either contains an encoded string or a jpeg binary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\PreviewV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | File identifier
$encode = "encode_example"; // string | Set to base64 to return a jpeg encoded preview as base64, else return it as jpeg binary

try {
    $apiInstance->getPreview($file, $encode);
} catch (Exception $e) {
    echo 'Exception when calling PreviewV2Api->getPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |
 **encode** | **string**| Set to base64 to return a jpeg encoded preview as base64, else return it as jpeg binary | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: octet/stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

