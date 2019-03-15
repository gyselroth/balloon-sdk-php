# Balloon\Sdk\BalloonAppConvertV2Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSlave**](BalloonAppConvertV2Api.md#addSlave) | **POST** /api/v2/files/{file}/convert/slaves | Add new convert slave
[**deleteSlave**](BalloonAppConvertV2Api.md#deleteSlave) | **DELETE** /api/v2/files/{file}/convert/slaves/{slave} | Delete slave
[**getSlave**](BalloonAppConvertV2Api.md#getSlave) | **GET** /api/v2/files/{file}/convert/slaves/{slave} | Get single slave
[**getSlaves**](BalloonAppConvertV2Api.md#getSlaves) | **GET** /api/v2/files/{file}/convert/slaves | Get existing convert slaves
[**getSupportedFormats**](BalloonAppConvertV2Api.md#getSupportedFormats) | **GET** /api/v2/files/{file}/convert/supported-formats | Get supported file formats to convert to (formats do vary between files)


# **addSlave**
> \Balloon\Sdk\Model\BalloonAppConvertSlave addSlave($file, $body)

Add new convert slave

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | File identifier
$body = new \Balloon\Sdk\Model\BalloonAppConvertSlave(); // \Balloon\Sdk\Model\BalloonAppConvertSlave | Add new conversion slave

try {
    $result = $apiInstance->addSlave($file, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppConvertV2Api->addSlave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |
 **body** | [**\Balloon\Sdk\Model\BalloonAppConvertSlave**](../Model/BalloonAppConvertSlave.md)| Add new conversion slave |

### Return type

[**\Balloon\Sdk\Model\BalloonAppConvertSlave**](../Model/BalloonAppConvertSlave.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSlave**
> deleteSlave($file, $slave)

Delete slave

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | File identifier
$slave = "slave_example"; // string | Slave identifier

try {
    $apiInstance->deleteSlave($file, $slave);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppConvertV2Api->deleteSlave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |
 **slave** | **string**| Slave identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSlave**
> \Balloon\Sdk\Model\BalloonAppConvertSlave getSlave($file, $slave)

Get single slave

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | File identifier
$slave = "slave_example"; // string | Slave identifier

try {
    $result = $apiInstance->getSlave($file, $slave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppConvertV2Api->getSlave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |
 **slave** | **string**| Slave identifier |

### Return type

[**\Balloon\Sdk\Model\BalloonAppConvertSlave**](../Model/BalloonAppConvertSlave.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSlaves**
> \Balloon\Sdk\Model\BalloonAppConvertSlaves getSlaves($file)

Get existing convert slaves

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | File identifier

try {
    $result = $apiInstance->getSlaves($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppConvertV2Api->getSlaves: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |

### Return type

[**\Balloon\Sdk\Model\BalloonAppConvertSlaves**](../Model/BalloonAppConvertSlaves.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupportedFormats**
> string[] getSupportedFormats($file)

Get supported file formats to convert to (formats do vary between files)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | File identifier

try {
    $result = $apiInstance->getSupportedFormats($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppConvertV2Api->getSupportedFormats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

