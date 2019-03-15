# Balloon\Sdk\BalloonAppDesktopclientV2Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDesktopClient**](BalloonAppDesktopclientV2Api.md#getDesktopClient) | **GET** /api/v2/desktop-clients/{format}/content | Download balloon desktop client


# **getDesktopClient**
> getDesktopClient($format)

Download balloon desktop client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppDesktopclientV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$format = "format_example"; // string | Request client foramt (deb, rpm, exe, pkg, zip or a custom format)

try {
    $apiInstance->getDesktopClient($format);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppDesktopclientV2Api->getDesktopClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Request client foramt (deb, rpm, exe, pkg, zip or a custom format) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: octet/stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

