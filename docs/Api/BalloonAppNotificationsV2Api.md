# Balloon\Sdk\BalloonAppNotificationsV2Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNotification**](BalloonAppNotificationsV2Api.md#deleteNotification) | **DELETE** /api/v2/notifications/{notification} | Delete a notification
[**getMyNotifications**](BalloonAppNotificationsV2Api.md#getMyNotifications) | **GET** /api/v2/notifications | Get my nofitifications
[**getNotification**](BalloonAppNotificationsV2Api.md#getNotification) | **GET** /api/v2/notifications/{notification} | Get a single notification
[**postNotification**](BalloonAppNotificationsV2Api.md#postNotification) | **POST** /api/v2/notifications | Send notification
[**sendBroadcast**](BalloonAppNotificationsV2Api.md#sendBroadcast) | **POST** /api/v2/notifications/broadcast | Send notification to all users
[**sendMail**](BalloonAppNotificationsV2Api.md#sendMail) | **POST** /api/v2/notifications/mail | Send mail
[**subscribeNode**](BalloonAppNotificationsV2Api.md#subscribeNode) | **POST** /api/v2/nodes/{node}/subscription | Receive node updates


# **deleteNotification**
> deleteNotification($notification)

Delete a notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppNotificationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification = "notification_example"; // string | Resource identifier

try {
    $apiInstance->deleteNotification($notification);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppNotificationsV2Api->deleteNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyNotifications**
> \Balloon\Sdk\Model\BalloonAppNotfificationNotifications getMyNotifications($query, $attributes, $offset, $limit, $sort)

Get my nofitifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppNotificationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = "query_example"; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$attributes = array("attributes_example"); // string[] | Filter attributes
$offset = 8.14; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 8.14; // float | Objects limit, per default 20 objects will get returned
$sort = "sort_example"; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).

try {
    $result = $apiInstance->getMyNotifications($query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppNotificationsV2Api->getMyNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]

### Return type

[**\Balloon\Sdk\Model\BalloonAppNotfificationNotifications**](../Model/BalloonAppNotfificationNotifications.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotification**
> \Balloon\Sdk\Model\BalloonAppNotfificationNotification getNotification($notification)

Get a single notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppNotificationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification = "notification_example"; // string | Resource identifier

try {
    $result = $apiInstance->getNotification($notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppNotificationsV2Api->getNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification** | **string**| Resource identifier |

### Return type

[**\Balloon\Sdk\Model\BalloonAppNotfificationNotification**](../Model/BalloonAppNotfificationNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNotification**
> \Balloon\Sdk\Model\BalloonAppNotfificationNotification postNotification($body)

Send notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppNotificationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Balloon\Sdk\Model\BalloonAppNotfificationNotification(); // \Balloon\Sdk\Model\BalloonAppNotfificationNotification | 

try {
    $result = $apiInstance->postNotification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppNotificationsV2Api->postNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Balloon\Sdk\Model\BalloonAppNotfificationNotification**](../Model/BalloonAppNotfificationNotification.md)|  | [optional]

### Return type

[**\Balloon\Sdk\Model\BalloonAppNotfificationNotification**](../Model/BalloonAppNotfificationNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendBroadcast**
> \Balloon\Sdk\Model\BalloonAppNotfificationNotification sendBroadcast($body)

Send notification to all users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppNotificationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Balloon\Sdk\Model\BalloonAppNotfificationNotification(); // \Balloon\Sdk\Model\BalloonAppNotfificationNotification | Notification

try {
    $result = $apiInstance->sendBroadcast($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppNotificationsV2Api->sendBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Balloon\Sdk\Model\BalloonAppNotfificationNotification**](../Model/BalloonAppNotfificationNotification.md)| Notification | [optional]

### Return type

[**\Balloon\Sdk\Model\BalloonAppNotfificationNotification**](../Model/BalloonAppNotfificationNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMail**
> sendMail($body)

Send mail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppNotificationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Balloon\Sdk\Model\BalloonAppNotfificationMail(); // \Balloon\Sdk\Model\BalloonAppNotfificationMail | Mail

try {
    $apiInstance->sendMail($body);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppNotificationsV2Api->sendMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Balloon\Sdk\Model\BalloonAppNotfificationMail**](../Model/BalloonAppNotfificationMail.md)| Mail | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeNode**
> \Balloon\Sdk\Model\Node subscribeNode($node, $subscribe, $exclude_me, $recursive)

Receive node updates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Balloon\Sdk\Api\BalloonAppNotificationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$node = "node_example"; // string | Node identifier
$subscribe = true; // bool | If true the subscription is active
$exclude_me = true; // bool | Exclude subscription owner (me) from change notifications
$recursive = true; // bool | Apply subscription to children (inclusive newly added children)

try {
    $result = $apiInstance->subscribeNode($node, $subscribe, $exclude_me, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalloonAppNotificationsV2Api->subscribeNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **subscribe** | **bool**| If true the subscription is active | [optional]
 **exclude_me** | **bool**| Exclude subscription owner (me) from change notifications | [optional]
 **recursive** | **bool**| Apply subscription to children (inclusive newly added children) | [optional]

### Return type

[**\Balloon\Sdk\Model\Node**](../Model/Node.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
