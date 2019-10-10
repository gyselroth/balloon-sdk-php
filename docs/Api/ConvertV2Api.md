# Balloon\Sdk\ConvertV2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSlave**](ConvertV2Api.md#addSlave) | **POST** /api/v2/files/{file}/convert/slaves | Add new convert slave
[**deleteSlave**](ConvertV2Api.md#deleteSlave) | **DELETE** /api/v2/files/{file}/convert/slaves/{slave} | Delete slave
[**getSlave**](ConvertV2Api.md#getSlave) | **GET** /api/v2/files/{file}/convert/slaves/{slave} | Get single slave
[**getSlaves**](ConvertV2Api.md#getSlaves) | **GET** /api/v2/files/{file}/convert/slaves | Get existing convert slaves
[**getSupportedFormats**](ConvertV2Api.md#getSupportedFormats) | **GET** /api/v2/files/{file}/convert/supported-formats | Get supported file formats to convert to (formats do vary between files)



## addSlave

> \Balloon\Sdk\Model\ConvertV2Slave addSlave($file, $convert_v2_slave)

Add new convert slave

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



$apiInstance = new Balloon\Sdk\Api\ConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier
$convert_v2_slave = new \Balloon\Sdk\Model\ConvertV2Slave(); // \Balloon\Sdk\Model\ConvertV2Slave | Add new conversion slave

try {
    $result = $apiInstance->addSlave($file, $convert_v2_slave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertV2Api->addSlave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |
 **convert_v2_slave** | [**\Balloon\Sdk\Model\ConvertV2Slave**](../Model/ConvertV2Slave.md)| Add new conversion slave |

### Return type

[**\Balloon\Sdk\Model\ConvertV2Slave**](../Model/ConvertV2Slave.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSlave

> deleteSlave($file, $slave)

Delete slave

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



$apiInstance = new Balloon\Sdk\Api\ConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier
$slave = 'slave_example'; // string | Slave identifier

try {
    $apiInstance->deleteSlave($file, $slave);
} catch (Exception $e) {
    echo 'Exception when calling ConvertV2Api->deleteSlave: ', $e->getMessage(), PHP_EOL;
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

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSlave

> \Balloon\Sdk\Model\ConvertV2Slave getSlave($file, $slave)

Get single slave

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



$apiInstance = new Balloon\Sdk\Api\ConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier
$slave = 'slave_example'; // string | Slave identifier

try {
    $result = $apiInstance->getSlave($file, $slave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertV2Api->getSlave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |
 **slave** | **string**| Slave identifier |

### Return type

[**\Balloon\Sdk\Model\ConvertV2Slave**](../Model/ConvertV2Slave.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSlaves

> \Balloon\Sdk\Model\ConvertV2Slaves getSlaves($file)

Get existing convert slaves

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



$apiInstance = new Balloon\Sdk\Api\ConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier

try {
    $result = $apiInstance->getSlaves($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertV2Api->getSlaves: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |

### Return type

[**\Balloon\Sdk\Model\ConvertV2Slaves**](../Model/ConvertV2Slaves.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSupportedFormats

> string[] getSupportedFormats($file)

Get supported file formats to convert to (formats do vary between files)

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



$apiInstance = new Balloon\Sdk\Api\ConvertV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier

try {
    $result = $apiInstance->getSupportedFormats($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertV2Api->getSupportedFormats: ', $e->getMessage(), PHP_EOL;
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

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

