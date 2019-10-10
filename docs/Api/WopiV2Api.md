# Balloon\Sdk\WopiV2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](WopiV2Api.md#createDocument) | **POST** /api/v2/office/documents | 
[**getWopiDocument**](WopiV2Api.md#getWopiDocument) | **GET** /api/v2/office/wopi/document/{document} | Get document session information including document owner, session user and document size
[**getWopiDocumentContent**](WopiV2Api.md#getWopiDocumentContent) | **GET** /api/v2/office/wopi/document/{document}/contents | Get document contents
[**updateWopiDocuemntContent**](WopiV2Api.md#updateWopiDocuemntContent) | **POST** /api/v2/office/wopi/document/{document}/contents | Save document contents



## createDocument

> \Balloon\Sdk\Model\CoreV2File createDocument($core_v2_file)



Create new document from an existing office document template

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



$apiInstance = new Balloon\Sdk\Api\WopiV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_v2_file = new \Balloon\Sdk\Model\CoreV2File(); // \Balloon\Sdk\Model\CoreV2File | 

try {
    $result = $apiInstance->createDocument($core_v2_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WopiV2Api->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_v2_file** | [**\Balloon\Sdk\Model\CoreV2File**](../Model/CoreV2File.md)|  |

### Return type

[**\Balloon\Sdk\Model\CoreV2File**](../Model/CoreV2File.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWopiDocument

> \Balloon\Sdk\Model\OfficeV2WopiDocument getWopiDocument($document, $access_token)

Get document session information including document owner, session user and document size

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



$apiInstance = new Balloon\Sdk\Api\WopiV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | The document id
$access_token = 'access_token_example'; // string | An access token to access the document

try {
    $result = $apiInstance->getWopiDocument($document, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WopiV2Api->getWopiDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **string**| The document id |
 **access_token** | **string**| An access token to access the document |

### Return type

[**\Balloon\Sdk\Model\OfficeV2WopiDocument**](../Model/OfficeV2WopiDocument.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWopiDocumentContent

> getWopiDocumentContent($document, $access_token)

Get document contents

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



$apiInstance = new Balloon\Sdk\Api\WopiV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | The document id
$access_token = 'access_token_example'; // string | An access token to access the document

try {
    $apiInstance->getWopiDocumentContent($document, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling WopiV2Api->getWopiDocumentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **string**| The document id |
 **access_token** | **string**| An access token to access the document |

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


## updateWopiDocuemntContent

> updateWopiDocuemntContent($document, $access_token, $body)

Save document contents

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



$apiInstance = new Balloon\Sdk\Api\WopiV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | The document id
$access_token = 'access_token_example'; // string | An access token to access the document
$body = 'body_example'; // string | Document content

try {
    $apiInstance->updateWopiDocuemntContent($document, $access_token, $body);
} catch (Exception $e) {
    echo 'Exception when calling WopiV2Api->updateWopiDocuemntContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **string**| The document id |
 **access_token** | **string**| An access token to access the document |
 **body** | **string**| Document content | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

