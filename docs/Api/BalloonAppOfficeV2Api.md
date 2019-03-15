# Balloon\Sdk\BalloonAppOfficeV2Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](BalloonAppOfficeV2Api.md#createDocument) | **POST** /api/v2/office/documents | 
[**createSession**](BalloonAppOfficeV2Api.md#createSession) | **POST** /api/v2/office/sessions | Create new session for a document
[**deleteSession**](BalloonAppOfficeV2Api.md#deleteSession) | **DELETE** /api/v2/office/session/{session} | Delete a running session. If more members are active in the requested session than only the membership gets removed. The session gets completely removed if only one member exists.
[**getDocument**](BalloonAppOfficeV2Api.md#getDocument) | **GET** /api/v2/office/documents/{document} | Retreive office document
[**getWopiDocument**](BalloonAppOfficeV2Api.md#getWopiDocument) | **GET** /api/v2/office/wopi/document | Get document session information including document owner, session user and document size
[**getWopiDocumentContent**](BalloonAppOfficeV2Api.md#getWopiDocumentContent) | **GET** /api/v2/office/wopi/document/contents | Get document contents
[**joinSession**](BalloonAppOfficeV2Api.md#joinSession) | **POST** /api/v2/office/sessions/{session}/join | Join running session
[**updateWopiDocuemntContent**](BalloonAppOfficeV2Api.md#updateWopiDocuemntContent) | **POST** /api/v2/office/wopi/document/contents | Save document contents


# **createDocument**
> \Balloon\Sdk\Model\File createDocument($body)



Create new document from an existing office document template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Balloon\Sdk\Model\File(); // \Balloon\Sdk\Model\File | 

try {
    $result = $apiInstance->createDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Balloon\Sdk\Model\File**](../Model/File.md)|  |

### Return type

[**\Balloon\Sdk\Model\File**](../Model/File.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSession**
> \Balloon\Sdk\Model\BalloonAppOfficeSession createSession($id)

Create new session for a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Create new session for a document

try {
    $result = $apiInstance->createSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Create new session for a document |

### Return type

[**\Balloon\Sdk\Model\BalloonAppOfficeSession**](../Model/BalloonAppOfficeSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSession**
> deleteSession($session)

Delete a running session. If more members are active in the requested session than only the membership gets removed. The session gets completely removed if only one member exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session = "session_example"; // string | The session id to delete

try {
    $apiInstance->deleteSession($session);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->deleteSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session** | **string**| The session id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Balloon\Sdk\Model\BalloonAppOfficeDocument getDocument($document)

Retreive office document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document = "document_example"; // string | Document identifier

try {
    $result = $apiInstance->getDocument($document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **string**| Document identifier |

### Return type

[**\Balloon\Sdk\Model\BalloonAppOfficeDocument**](../Model/BalloonAppOfficeDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWopiDocument**
> \Balloon\Sdk\Model\BalloonAppOfficeWopiDocument getWopiDocument($id, $access_token)

Get document session information including document owner, session user and document size

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The document id
$access_token = "access_token_example"; // string | An access token to access the document

try {
    $result = $apiInstance->getWopiDocument($id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->getWopiDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The document id |
 **access_token** | **string**| An access token to access the document |

### Return type

[**\Balloon\Sdk\Model\BalloonAppOfficeWopiDocument**](../Model/BalloonAppOfficeWopiDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWopiDocumentContent**
> getWopiDocumentContent($id, $access_token)

Get document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The document id
$access_token = "access_token_example"; // string | An access token to access the document

try {
    $apiInstance->getWopiDocumentContent($id, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->getWopiDocumentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The document id |
 **access_token** | **string**| An access token to access the document |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **joinSession**
> \Balloon\Sdk\Model\BalloonAppOfficeSession joinSession($session)

Join running session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session = "session_example"; // string | The session id to delete

try {
    $result = $apiInstance->joinSession($session);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->joinSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session** | **string**| The session id to delete |

### Return type

[**\Balloon\Sdk\Model\BalloonAppOfficeSession**](../Model/BalloonAppOfficeSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWopiDocuemntContent**
> updateWopiDocuemntContent($id, $access_token, $body)

Save document contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppOfficeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The document id
$access_token = "access_token_example"; // string | An access token to access the document
$body = "body_example"; // string | Document content

try {
    $apiInstance->updateWopiDocuemntContent($id, $access_token, $body);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppOfficeV2Api->updateWopiDocuemntContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The document id |
 **access_token** | **string**| An access token to access the document |
 **body** | **string**| Document content | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

