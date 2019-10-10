# Balloon\Sdk\BallonAppElasticsearchV2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryElasticsearch**](BallonAppElasticsearchV2Api.md#queryElasticsearch) | **GET** /api/v2/nodes/search | Extended search query using elasticsearch



## queryElasticsearch

> \Balloon\Sdk\Model\CoreV2Nodes queryElasticsearch($query, $deleted)

Extended search query using elasticsearch

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



$apiInstance = new Balloon\Sdk\Api\BallonAppElasticsearchV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Elasticsearch query as JSON
$deleted = 3.4; // float | Wherever include deleted nodes or not, possible values:  0 Exclude deleted 1 Only deleted 2 Include deleted.

try {
    $result = $apiInstance->queryElasticsearch($query, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BallonAppElasticsearchV2Api->queryElasticsearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Elasticsearch query as JSON |
 **deleted** | **float**| Wherever include deleted nodes or not, possible values:  0 Exclude deleted 1 Only deleted 2 Include deleted. | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Nodes**](../Model/CoreV2Nodes.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

