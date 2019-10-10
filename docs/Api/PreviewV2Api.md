# Balloon\Sdk\PreviewV2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPreview**](PreviewV2Api.md#getPreview) | **GET** /api/v2/files/{file}/preview | Get a preview of the files content. The body either contains an encoded string or a jpeg binary.



## getPreview

> getPreview($file, $encode)

Get a preview of the files content. The body either contains an encoded string or a jpeg binary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Balloon\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Balloon\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Balloon\Sdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: BearerAuth
$config = Balloon\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Balloon\Sdk\Api\PreviewV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier
$encode = 'encode_example'; // string | Set to base64 to return a jpeg encoded preview as base64, else return it as jpeg binary

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

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

