# Balloon\Sdk\SharelinkV2Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLink**](SharelinkV2Api.md#createLink) | **POST** /api/v2/nodes/{node}/share-link | Create a unique sharing link of a node (global accessible): a possible existing link will be deleted if this method will be called.
[**deleteLink**](SharelinkV2Api.md#deleteLink) | **DELETE** /api/v2/nodes/{node}/share-link | Delete an existing sharing link


# **createLink**
> \Balloon\Sdk\Model\CoreV2Node createLink($node, $expiration, $password)

Create a unique sharing link of a node (global accessible): a possible existing link will be deleted if this method will be called.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\SharelinkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$node = "node_example"; // string | Node identifier
$expiration = 0; // float | Expire timestamp as unix timestap. Tells the server when the public link should expire automatically. The default is to never expire.
$password = "password_example"; // string | Optionally set a password to protect the public link.

try {
    $result = $apiInstance->createLink($node, $expiration, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharelinkV2Api->createLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **expiration** | **float**| Expire timestamp as unix timestap. Tells the server when the public link should expire automatically. The default is to never expire. | [optional] [default to 0]
 **password** | **string**| Optionally set a password to protect the public link. | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Node**](../Model/CoreV2Node.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLink**
> deleteLink($node)

Delete an existing sharing link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\SharelinkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$node = "node_example"; // string | Node identifier

try {
    $apiInstance->deleteLink($node);
} catch (Exception $e) {
    echo 'Exception when calling SharelinkV2Api->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

