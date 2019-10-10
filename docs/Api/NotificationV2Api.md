# Balloon\Sdk\NotificationV2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNotification**](NotificationV2Api.md#deleteNotification) | **DELETE** /api/v2/notifications/{notification} | Delete a notification
[**getMyNotifications**](NotificationV2Api.md#getMyNotifications) | **GET** /api/v2/notifications | Get my nofitifications
[**getNotification**](NotificationV2Api.md#getNotification) | **GET** /api/v2/notifications/{notification} | Get a single notification
[**postNotification**](NotificationV2Api.md#postNotification) | **POST** /api/v2/notifications | Send notification
[**sendBroadcast**](NotificationV2Api.md#sendBroadcast) | **POST** /api/v2/notifications/broadcast | Send notification to all users
[**sendMail**](NotificationV2Api.md#sendMail) | **POST** /api/v2/notifications/mail | Send mail
[**subscribeNode**](NotificationV2Api.md#subscribeNode) | **POST** /api/v2/nodes/{node}/subscription | Receive node updates



## deleteNotification

> deleteNotification($notification)

Delete a notification

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



$apiInstance = new Balloon\Sdk\Api\NotificationV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification = 'notification_example'; // string | Resource identifier

try {
    $apiInstance->deleteNotification($notification);
} catch (Exception $e) {
    echo 'Exception when calling NotificationV2Api->deleteNotification: ', $e->getMessage(), PHP_EOL;
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

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMyNotifications

> \Balloon\Sdk\Model\NotificationV2Notifications getMyNotifications($query, $attributes, $offset, $limit, $sort)

Get my nofitifications

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



$apiInstance = new Balloon\Sdk\Api\NotificationV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).

try {
    $result = $apiInstance->getMyNotifications($query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationV2Api->getMyNotifications: ', $e->getMessage(), PHP_EOL;
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

[**\Balloon\Sdk\Model\NotificationV2Notifications**](../Model/NotificationV2Notifications.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNotification

> \Balloon\Sdk\Model\NotificationV2Notification getNotification($notification)

Get a single notification

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



$apiInstance = new Balloon\Sdk\Api\NotificationV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification = 'notification_example'; // string | Resource identifier

try {
    $result = $apiInstance->getNotification($notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationV2Api->getNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification** | **string**| Resource identifier |

### Return type

[**\Balloon\Sdk\Model\NotificationV2Notification**](../Model/NotificationV2Notification.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postNotification

> \Balloon\Sdk\Model\NotificationV2Notification postNotification($notification_v2_notification)

Send notification

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



$apiInstance = new Balloon\Sdk\Api\NotificationV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_v2_notification = new \Balloon\Sdk\Model\NotificationV2Notification(); // \Balloon\Sdk\Model\NotificationV2Notification | 

try {
    $result = $apiInstance->postNotification($notification_v2_notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationV2Api->postNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_v2_notification** | [**\Balloon\Sdk\Model\NotificationV2Notification**](../Model/NotificationV2Notification.md)|  | [optional]

### Return type

[**\Balloon\Sdk\Model\NotificationV2Notification**](../Model/NotificationV2Notification.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendBroadcast

> \Balloon\Sdk\Model\NotificationV2Notification sendBroadcast($notification_v2_notification)

Send notification to all users

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



$apiInstance = new Balloon\Sdk\Api\NotificationV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_v2_notification = new \Balloon\Sdk\Model\NotificationV2Notification(); // \Balloon\Sdk\Model\NotificationV2Notification | Notification

try {
    $result = $apiInstance->sendBroadcast($notification_v2_notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationV2Api->sendBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_v2_notification** | [**\Balloon\Sdk\Model\NotificationV2Notification**](../Model/NotificationV2Notification.md)| Notification | [optional]

### Return type

[**\Balloon\Sdk\Model\NotificationV2Notification**](../Model/NotificationV2Notification.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendMail

> sendMail($notification_v2_mail)

Send mail

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



$apiInstance = new Balloon\Sdk\Api\NotificationV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_v2_mail = new \Balloon\Sdk\Model\NotificationV2Mail(); // \Balloon\Sdk\Model\NotificationV2Mail | Mail

try {
    $apiInstance->sendMail($notification_v2_mail);
} catch (Exception $e) {
    echo 'Exception when calling NotificationV2Api->sendMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_v2_mail** | [**\Balloon\Sdk\Model\NotificationV2Mail**](../Model/NotificationV2Mail.md)| Mail | [optional]

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


## subscribeNode

> \Balloon\Sdk\Model\CoreV2Node subscribeNode($node, $subscribe, $exclude_me, $recursive)

Receive node updates

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



$apiInstance = new Balloon\Sdk\Api\NotificationV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$subscribe = True; // bool | If true the subscription is active
$exclude_me = True; // bool | Exclude subscription owner (me) from change notifications
$recursive = True; // bool | Apply subscription to children (inclusive newly added children)

try {
    $result = $apiInstance->subscribeNode($node, $subscribe, $exclude_me, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationV2Api->subscribeNode: ', $e->getMessage(), PHP_EOL;
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

[**\Balloon\Sdk\Model\CoreV2Node**](../Model/CoreV2Node.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

