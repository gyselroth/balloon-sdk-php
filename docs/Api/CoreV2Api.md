# Balloon\Sdk\CoreV2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroup**](CoreV2Api.md#addGroup) | **POST** /api/v2/groups | Add new group
[**addUser**](CoreV2Api.md#addUser) | **POST** /api/v2/users | Add new user
[**cloneNode**](CoreV2Api.md#cloneNode) | **POST** /api/v2/nodes/{node}/clone | Clone existing node
[**createCollection**](CoreV2Api.md#createCollection) | **POST** /api/v2/collections/{collection} | Create a new collection
[**createRootCollection**](CoreV2Api.md#createRootCollection) | **POST** /api/v2/collections | Create a new collection in root
[**createToken**](CoreV2Api.md#createToken) | **GET** /api/v2/tokens | OAUTH2/OIDC token endpoint
[**deleteGroup**](CoreV2Api.md#deleteGroup) | **DELETE** /api/v2/groups/{group} | Delete group
[**deleteNode**](CoreV2Api.md#deleteNode) | **DELETE** /api/v2/nodes/{node} | Delete node
[**deleteShare**](CoreV2Api.md#deleteShare) | **DELETE** /api/v2/collections/{collection}/share | Does only remove sharing options and transform a share back into a normal collection. There will not be any data loss after this action. All existing references would be removed automatically.
[**deleteUser**](CoreV2Api.md#deleteUser) | **DELETE** /api/v2/users/{user} | Delete user
[**getApi**](CoreV2Api.md#getApi) | **GET** /api | Get server status
[**getChildren**](CoreV2Api.md#getChildren) | **GET** /api/v2/collections/{collection}/children | Get all children of a collection
[**getCollections**](CoreV2Api.md#getCollections) | **GET** /api/v2/collections | Get all collections
[**getContent**](CoreV2Api.md#getContent) | **GET** /api/v2/nodes/{node}/content | Download node contents. Note that collections are zipped on-the-fly.
[**getCurrentUser**](CoreV2Api.md#getCurrentUser) | **GET** /api/v2/users/whoami | Get user object of the current authenticated user
[**getDeletedNodes**](CoreV2Api.md#getDeletedNodes) | **GET** /api/v2/nodes/trash | Return delete nodes (Excluding sub nodes of deleted collections)
[**getDelta**](CoreV2Api.md#getDelta) | **GET** /api/v2/nodes/delta | Delta stream with cursor support.
[**getEventLog**](CoreV2Api.md#getEventLog) | **GET** /api/v2/nodes/event-log | Get event log containing all operations which are made by the user himself or share members
[**getFileHistory**](CoreV2Api.md#getFileHistory) | **GET** /api/v2/files/{file}/history | Get a full change history of a file
[**getFiles**](CoreV2Api.md#getFiles) | **GET** /api/v2/files | Get all files
[**getGroup**](CoreV2Api.md#getGroup) | **GET** /api/v2/groups/{group} | Get single group
[**getGroupMembers**](CoreV2Api.md#getGroupMembers) | **GET** /api/v2/groups/{group}/members | Request all member of a group
[**getGroups**](CoreV2Api.md#getGroups) | **GET** /api/v2/groups | Get groups
[**getLastCursor**](CoreV2Api.md#getLastCursor) | **GET** /api/v2/nodes/last-cursor | Use this method to request the latest cursor if you only need to now if there are changes on the server. This method will not return any other data than the newest cursor. To request a feed with all deltas request /delta.
[**getNode**](CoreV2Api.md#getNode) | **GET** /api/v2/nodes/{node} | Get single node
[**getNodeAttributeSummary**](CoreV2Api.md#getNodeAttributeSummary) | **GET** /api/v2/users/{user}/node-attribute-summary | Get summary of node usage.
[**getNodeEventLog**](CoreV2Api.md#getNodeEventLog) | **GET** /api/v2/nodes/{node}/event-log | Get event log containing all operations which are made by the user himself or share members on a given node
[**getNodes**](CoreV2Api.md#getNodes) | **GET** /api/v2/nodes | Get all nodes
[**getParentNodes**](CoreV2Api.md#getParentNodes) | **GET** /api/v2/nodes/{node}/parents | The hirarchy of all parent nodes is ordered in a single level array beginning with the collection on the highest level.
[**getRootChildren**](CoreV2Api.md#getRootChildren) | **GET** /api/v2/collections/children | Get all children of the root collection
[**getShare**](CoreV2Api.md#getShare) | **GET** /api/v2/collections/{collection}/share | Get share acl and share name
[**getUser**](CoreV2Api.md#getUser) | **GET** /api/v2/users/{user} | Get single user
[**getUserAvatar**](CoreV2Api.md#getUserAvatar) | **GET** /api/v2/users/{user}/avatar | Get user avatar
[**getUserGroups**](CoreV2Api.md#getUserGroups) | **GET** /api/v2/users/{user}/groups | Request all groups of a user
[**getUsers**](CoreV2Api.md#getUsers) | **GET** /api/v2/users | Get users
[**getV2**](CoreV2Api.md#getV2) | **GET** /api/v2 | Get server status
[**moveNode**](CoreV2Api.md#moveNode) | **POST** /api/v2/nodes/{node}/move | Move node (Change parent collection), single or multiple ones
[**patchGroup**](CoreV2Api.md#patchGroup) | **PATCH** /api/v2/groups/{group} | Set attributes for group
[**patchUser**](CoreV2Api.md#patchUser) | **PATCH** /api/v2/users/{user} | Set attributes for user
[**rollbackFile**](CoreV2Api.md#rollbackFile) | **POST** /api/v2/files/{file}/restore | Rollback to a recent version from history. Use the version number from history.
[**shareCollection**](CoreV2Api.md#shareCollection) | **POST** /api/v2/collections/{collection}/share | Create a new share from an existing collection
[**undeleteGroup**](CoreV2Api.md#undeleteGroup) | **POST** /api/v2/groups/{group}/undelete | Restore deleted group
[**undeleteNode**](CoreV2Api.md#undeleteNode) | **POST** /api/v2/nodes/{node}/undelete | Undelete (Restore from trash) a single node or multiple ones.
[**undeleteUser**](CoreV2Api.md#undeleteUser) | **POST** /api/v2/users/{user}/undelete | Restore deleted user
[**updateNode**](CoreV2Api.md#updateNode) | **PATCH** /api/v2/nodes/{node} | Change attributes
[**uploadChunk**](CoreV2Api.md#uploadChunk) | **PUT** /api/v2/files/chunk | Upload a file chunk. You have to manually splitt the binary data into multiple chunks and upload them successively! using this method. Once uploading the last chunk, the server will automatically create or update the file node. You may set the parent collection, name and or custom attributes only with the last request to save traffic.
[**uploadFile**](CoreV2Api.md#uploadFile) | **PUT** /api/v2/files | Upload an entire file in one-shot. Use this endpoint only for small files, for bigger files use the chunking endpoint.



## addGroup

> \Balloon\Sdk\Model\CoreV2Group addGroup($core_v2_group)

Add new group

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_v2_group = new \Balloon\Sdk\Model\CoreV2Group(); // \Balloon\Sdk\Model\CoreV2Group | 

try {
    $result = $apiInstance->addGroup($core_v2_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->addGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_v2_group** | [**\Balloon\Sdk\Model\CoreV2Group**](../Model/CoreV2Group.md)|  | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Group**](../Model/CoreV2Group.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## addUser

> \Balloon\Sdk\Model\CoreV2User addUser($core_v2_user)

Add new user

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_v2_user = new \Balloon\Sdk\Model\CoreV2User(); // \Balloon\Sdk\Model\CoreV2User | 

try {
    $result = $apiInstance->addUser($core_v2_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->addUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_v2_user** | [**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)|  | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cloneNode

> \Balloon\Sdk\Model\CoreV2Node cloneNode($node, $destid, $conflict)

Clone existing node

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$destid = 'destid_example'; // string | Destination collection, if this is null root is taken
$conflict = 0; // float | Conflict resolution

try {
    $result = $apiInstance->cloneNode($node, $destid, $conflict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->cloneNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **destid** | **string**| Destination collection, if this is null root is taken | [optional]
 **conflict** | **float**| Conflict resolution | [optional] [default to 0]

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


## createCollection

> \Balloon\Sdk\Model\CoreV2Collection createCollection($collection, $core_v2_collection)

Create a new collection

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = 'collection_example'; // string | Parent collection
$core_v2_collection = new \Balloon\Sdk\Model\CoreV2Collection(); // \Balloon\Sdk\Model\CoreV2Collection | 

try {
    $result = $apiInstance->createCollection($collection, $core_v2_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->createCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Parent collection |
 **core_v2_collection** | [**\Balloon\Sdk\Model\CoreV2Collection**](../Model/CoreV2Collection.md)|  |

### Return type

[**\Balloon\Sdk\Model\CoreV2Collection**](../Model/CoreV2Collection.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createRootCollection

> \Balloon\Sdk\Model\CoreV2Collection createRootCollection($core_v2_collection)

Create a new collection in root

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_v2_collection = new \Balloon\Sdk\Model\CoreV2Collection(); // \Balloon\Sdk\Model\CoreV2Collection | 

try {
    $result = $apiInstance->createRootCollection($core_v2_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->createRootCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_v2_collection** | [**\Balloon\Sdk\Model\CoreV2Collection**](../Model/CoreV2Collection.md)|  |

### Return type

[**\Balloon\Sdk\Model\CoreV2Collection**](../Model/CoreV2Collection.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createToken

> \Balloon\Sdk\Model\CoreV2OAuth2Token createToken()

OAUTH2/OIDC token endpoint

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Balloon\Sdk\Model\CoreV2OAuth2Token**](../Model/CoreV2OAuth2Token.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteGroup

> deleteGroup($group, $force)

Delete group

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Resource identifier
$force = True; // bool | Per default the group gets disabled, if force is set the group gets removed completely.

try {
    $apiInstance->deleteGroup($group, $force);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Resource identifier |
 **force** | **bool**| Per default the group gets disabled, if force is set the group gets removed completely. | [optional]

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


## deleteNode

> deleteNode($node, $force, $ignore_flag, $at)

Delete node

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$force = True; // bool | Force flag need to be set to delete a node from trash (node must have the deleted flag)
$ignore_flag = True; // bool | If both ignore_flag and force_flag were set, the node will be deleted completely
$at = 3.4; // float | Has to be a valid unix timestamp if so the node will destroy itself at this specified time instead immediatly

try {
    $apiInstance->deleteNode($node, $force, $ignore_flag, $at);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->deleteNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **force** | **bool**| Force flag need to be set to delete a node from trash (node must have the deleted flag) | [optional]
 **ignore_flag** | **bool**| If both ignore_flag and force_flag were set, the node will be deleted completely | [optional]
 **at** | **float**| Has to be a valid unix timestamp if so the node will destroy itself at this specified time instead immediatly | [optional]

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


## deleteShare

> deleteShare($collection)

Does only remove sharing options and transform a share back into a normal collection. There will not be any data loss after this action. All existing references would be removed automatically.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = 'collection_example'; // string | Collection identifier

try {
    $apiInstance->deleteShare($collection);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->deleteShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Collection identifier |

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


## deleteUser

> deleteUser($user, $force)

Delete user

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Resource identifier
$force = True; // bool | Per default the user gets disabled, if force is set the user gets removed completely.

try {
    $apiInstance->deleteUser($user, $force);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Resource identifier |
 **force** | **bool**| Per default the user gets disabled, if force is set the user gets removed completely. | [optional]

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


## getApi

> \Balloon\Sdk\Model\CoreV2ApiRoot getApi()

Get server status

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApi();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Balloon\Sdk\Model\CoreV2ApiRoot**](../Model/CoreV2ApiRoot.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getChildren

> \Balloon\Sdk\Model\CoreV2Nodes getChildren($collection, $query, $deleted, $attributes, $offset, $limit, $sort, $recursive)

Get all children of a collection

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = 'collection_example'; // string | Parent collection
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$deleted = 3.4; // float | Wheter to include deleted or not
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).
$recursive = false; // bool | Include children recursively.

try {
    $result = $apiInstance->getChildren($collection, $query, $deleted, $attributes, $offset, $limit, $sort, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Parent collection |
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **deleted** | **float**| Wheter to include deleted or not | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]
 **recursive** | **bool**| Include children recursively. | [optional] [default to false]

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


## getCollections

> \Balloon\Sdk\Model\CoreV2Collections getCollections($query, $deleted, $attributes, $offset, $limit, $sort)

Get all collections

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$deleted = 3.4; // float | Wheter to include deleted or not
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).

try {
    $result = $apiInstance->getCollections($query, $deleted, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **deleted** | **float**| Wheter to include deleted or not | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Collections**](../Model/CoreV2Collections.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContent

> \SplFileObject getContent($node, $byte_ranges, $encode, $download)

Download node contents. Note that collections are zipped on-the-fly.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$byte_ranges = 3.4; // float | Read stream from a specific offset/limit in bytes
$encode = 'encode_example'; // string | Can be set to base64 to encode content as base64.
$download = false; // bool | Force download file (Content-Disposition: attachment HTTP header)

try {
    $result = $apiInstance->getContent($node, $byte_ranges, $encode, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **byte_ranges** | **float**| Read stream from a specific offset/limit in bytes | [optional]
 **encode** | **string**| Can be set to base64 to encode content as base64. | [optional]
 **download** | **bool**| Force download file (Content-Disposition: attachment HTTP header) | [optional] [default to false]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: octet/stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCurrentUser

> \Balloon\Sdk\Model\CoreV2User getCurrentUser($attributes)

Get user object of the current authenticated user

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributes = array('attributes_example'); // string[] | Filter attributes

try {
    $result = $apiInstance->getCurrentUser($attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeletedNodes

> \Balloon\Sdk\Model\CoreV2Nodes getDeletedNodes($query, $attributes, $offset, $limit, $sort)

Return delete nodes (Excluding sub nodes of deleted collections)

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
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
    $result = $apiInstance->getDeletedNodes($query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getDeletedNodes: ', $e->getMessage(), PHP_EOL;
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

[**\Balloon\Sdk\Model\CoreV2Nodes**](../Model/CoreV2Nodes.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDelta

> \Balloon\Sdk\Model\CoreV2Delta getDelta($limit, $attributes, $cursor)

Delta stream with cursor support.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | Limit the number of delta entries, if too low you have to call this endpoint more often since has_more would be true more often
$attributes = array('attributes_example'); // string[] | Filter attributes, per default not all attributes would be returned
$cursor = 'cursor_example'; // string | Set a cursor to rquest next nodes within delta processing

try {
    $result = $apiInstance->getDelta($limit, $attributes, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getDelta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **float**| Limit the number of delta entries, if too low you have to call this endpoint more often since has_more would be true more often | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes, per default not all attributes would be returned | [optional]
 **cursor** | **string**| Set a cursor to rquest next nodes within delta processing | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Delta**](../Model/CoreV2Delta.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventLog

> \Balloon\Sdk\Model\CoreV2EventLogs getEventLog($query, $attributes, $offset, $limit, $sort)

Get event log containing all operations which are made by the user himself or share members

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
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
    $result = $apiInstance->getEventLog($query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getEventLog: ', $e->getMessage(), PHP_EOL;
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

[**\Balloon\Sdk\Model\CoreV2EventLogs**](../Model/CoreV2EventLogs.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFileHistory

> \Balloon\Sdk\Model\CoreV2FileHistory getFileHistory($file)

Get a full change history of a file

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier

try {
    $result = $apiInstance->getFileHistory($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getFileHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |

### Return type

[**\Balloon\Sdk\Model\CoreV2FileHistory**](../Model/CoreV2FileHistory.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFiles

> \Balloon\Sdk\Model\CoreV2Files getFiles($query, $deleted, $attributes, $offset, $limit, $sort)

Get all files

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$deleted = 3.4; // float | Wheter to include deleted or not
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).

try {
    $result = $apiInstance->getFiles($query, $deleted, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **deleted** | **float**| Wheter to include deleted or not | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Files**](../Model/CoreV2Files.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getGroup

> \Balloon\Sdk\Model\CoreV2Group getGroup($group, $attributes)

Get single group

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Resource identifier
$attributes = array('attributes_example'); // string[] | Filter attributes

try {
    $result = $apiInstance->getGroup($group, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Resource identifier |
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Group**](../Model/CoreV2Group.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getGroupMembers

> \Balloon\Sdk\Model\CoreV2User[] getGroupMembers($group)

Request all member of a group

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Resource identifier

try {
    $result = $apiInstance->getGroupMembers($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Resource identifier |

### Return type

[**\Balloon\Sdk\Model\CoreV2User[]**](../Model/CoreV2User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getGroups

> \Balloon\Sdk\Model\CoreV2Groups getGroups($query, $attributes, $offset, $limit, $sort)

Get groups

A group is a colletion of users

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
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
    $result = $apiInstance->getGroups($query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getGroups: ', $e->getMessage(), PHP_EOL;
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

[**\Balloon\Sdk\Model\CoreV2Groups**](../Model/CoreV2Groups.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLastCursor

> string getLastCursor()

Use this method to request the latest cursor if you only need to now if there are changes on the server. This method will not return any other data than the newest cursor. To request a feed with all deltas request /delta.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLastCursor();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getLastCursor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNode

> \Balloon\Sdk\Model\CoreV2Node getNode($node, $attributes)

Get single node

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$attributes = array('attributes_example'); // string[] | Filter attributes

try {
    $result = $apiInstance->getNode($node, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]

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


## getNodeAttributeSummary

> map[string,object[]] getNodeAttributeSummary($user)

Get summary of node usage.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Resource identifier

try {
    $result = $apiInstance->getNodeAttributeSummary($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getNodeAttributeSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Resource identifier |

### Return type

[**map[string,object[]]**](../Model/array.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNodeEventLog

> \Balloon\Sdk\Model\CoreV2EventLogs getNodeEventLog($node, $query, $attributes, $offset, $limit, $sort)

Get event log containing all operations which are made by the user himself or share members on a given node

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).

try {
    $result = $apiInstance->getNodeEventLog($node, $query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getNodeEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2EventLogs**](../Model/CoreV2EventLogs.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNodes

> \Balloon\Sdk\Model\CoreV2Nodes getNodes($query, $deleted, $attributes, $offset, $limit, $sort)

Get all nodes

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$deleted = 3.4; // float | Wheter to include deleted or not
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).

try {
    $result = $apiInstance->getNodes($query, $deleted, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **deleted** | **float**| Wheter to include deleted or not | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]

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


## getParentNodes

> \Balloon\Sdk\Model\CoreV2Nodes getParentNodes($node, $attributes, $self)

The hirarchy of all parent nodes is ordered in a single level array beginning with the collection on the highest level.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$attributes = array('attributes_example'); // string[] | Filter attributes
$self = True; // bool | Include requested collection itself at the end of the list (Will be ignored if the requested node is a file)

try {
    $result = $apiInstance->getParentNodes($node, $attributes, $self);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getParentNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **self** | **bool**| Include requested collection itself at the end of the list (Will be ignored if the requested node is a file) | [optional]

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


## getRootChildren

> \Balloon\Sdk\Model\CoreV2Nodes getRootChildren($query, $deleted, $attributes, $offset, $limit, $sort, $recursive)

Get all children of the root collection

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$deleted = 3.4; // float | Wheter to include deleted or not
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).
$recursive = false; // bool | Include children recursively.

try {
    $result = $apiInstance->getRootChildren($query, $deleted, $attributes, $offset, $limit, $sort, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getRootChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **deleted** | **float**| Wheter to include deleted or not | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]
 **recursive** | **bool**| Include children recursively. | [optional] [default to false]

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


## getShare

> \Balloon\Sdk\Model\CoreV2Share getShare($collection)

Get share acl and share name

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = 'collection_example'; // string | Collection identifier

try {
    $result = $apiInstance->getShare($collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Collection identifier |

### Return type

[**\Balloon\Sdk\Model\CoreV2Share**](../Model/CoreV2Share.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \Balloon\Sdk\Model\CoreV2User getUser($user, $attributes)

Get single user

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Resource identifier
$attributes = array('attributes_example'); // string[] | Filter attributes

try {
    $result = $apiInstance->getUser($user, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Resource identifier |
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserAvatar

> \Balloon\Sdk\Model\CoreV2User getUserAvatar($user)

Get user avatar

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Resource identifier

try {
    $result = $apiInstance->getUserAvatar($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getUserAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Resource identifier |

### Return type

[**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: octet/stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserGroups

> \Balloon\Sdk\Model\CoreV2Groups getUserGroups($user, $query, $attributes, $offset, $limit, $sort)

Request all groups of a user

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Resource identifier
$query = 'query_example'; // string | Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\"name\": {$regex: 'foo.*'}}).
$attributes = array('attributes_example'); // string[] | Filter attributes
$offset = 3.4; // float | Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset].
$limit = 3.4; // float | Objects limit, per default 20 objects will get returned
$sort = 'sort_example'; // string | Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\"name\": -1}).

try {
    $result = $apiInstance->getUserGroups($user, $query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getUserGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Resource identifier |
 **query** | **string**| Specify a MongoDB based resource query (https://docs.mongodb.com/manual/tutorial/query-documents) using JSON (For example: {\&quot;name\&quot;: {$regex: &#39;foo.*&#39;}}). | [optional]
 **attributes** | [**string[]**](../Model/string.md)| Filter attributes | [optional]
 **offset** | **float**| Objects offset, per default it starts from 0. You may also request a negative offset which will return results from the end [total - offset]. | [optional]
 **limit** | **float**| Objects limit, per default 20 objects will get returned | [optional]
 **sort** | **string**| Specify a MongoDB sort operation (https://docs.mongodb.com/manual/reference/method/cursor.sort/) using JSON (For example: {\&quot;name\&quot;: -1}). | [optional]

### Return type

[**\Balloon\Sdk\Model\CoreV2Groups**](../Model/CoreV2Groups.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsers

> \Balloon\Sdk\Model\CoreV2Users[] getUsers($query, $attributes, $offset, $limit, $sort)

Get users

A user is a colletion of users

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
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
    $result = $apiInstance->getUsers($query, $attributes, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getUsers: ', $e->getMessage(), PHP_EOL;
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

[**\Balloon\Sdk\Model\CoreV2Users[]**](../Model/CoreV2Users.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getV2

> \Balloon\Sdk\Model\CoreV2ApiRoot getV2()

Get server status

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->getV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Balloon\Sdk\Model\CoreV2ApiRoot**](../Model/CoreV2ApiRoot.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## moveNode

> \Balloon\Sdk\Model\CoreV2Node moveNode($node, $destid, $conflict)

Move node (Change parent collection), single or multiple ones

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$destid = 'destid_example'; // string | Destination collection, if this is null root is taken
$conflict = 0; // float | Conflict resolution

try {
    $result = $apiInstance->moveNode($node, $destid, $conflict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->moveNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **destid** | **string**| Destination collection, if this is null root is taken | [optional]
 **conflict** | **float**| Conflict resolution | [optional] [default to 0]

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


## patchGroup

> \Balloon\Sdk\Model\CoreV2Group patchGroup($group, $core_v2_group)

Set attributes for group

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Resource identifier
$core_v2_group = new \Balloon\Sdk\Model\CoreV2Group(); // \Balloon\Sdk\Model\CoreV2Group | Set attributes for group

try {
    $result = $apiInstance->patchGroup($group, $core_v2_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->patchGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Resource identifier |
 **core_v2_group** | [**\Balloon\Sdk\Model\CoreV2Group**](../Model/CoreV2Group.md)| Set attributes for group |

### Return type

[**\Balloon\Sdk\Model\CoreV2Group**](../Model/CoreV2Group.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchUser

> \Balloon\Sdk\Model\CoreV2User patchUser($user, $core_v2_user)

Set attributes for user

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Resource identifier
$core_v2_user = new \Balloon\Sdk\Model\CoreV2User(); // \Balloon\Sdk\Model\CoreV2User | Set attributes for user

try {
    $result = $apiInstance->patchUser($user, $core_v2_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->patchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Resource identifier |
 **core_v2_user** | [**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)| Set attributes for user |

### Return type

[**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rollbackFile

> \Balloon\Sdk\Model\CoreV2File rollbackFile($file)

Rollback to a recent version from history. Use the version number from history.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string | File identifier

try {
    $result = $apiInstance->rollbackFile($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->rollbackFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| File identifier |

### Return type

[**\Balloon\Sdk\Model\CoreV2File**](../Model/CoreV2File.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## shareCollection

> \Balloon\Sdk\Model\CoreV2Collection shareCollection($collection, $core_v2_share)

Create a new share from an existing collection

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = 'collection_example'; // string | Collection identifier
$core_v2_share = new \Balloon\Sdk\Model\CoreV2Share(); // \Balloon\Sdk\Model\CoreV2Share | Create a new share from an existing collection

try {
    $result = $apiInstance->shareCollection($collection, $core_v2_share);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->shareCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Collection identifier |
 **core_v2_share** | [**\Balloon\Sdk\Model\CoreV2Share**](../Model/CoreV2Share.md)| Create a new share from an existing collection |

### Return type

[**\Balloon\Sdk\Model\CoreV2Collection**](../Model/CoreV2Collection.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## undeleteGroup

> \Balloon\Sdk\Model\CoreV2Group undeleteGroup($group)

Restore deleted group

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Resource identifier

try {
    $result = $apiInstance->undeleteGroup($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->undeleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Resource identifier |

### Return type

[**\Balloon\Sdk\Model\CoreV2Group**](../Model/CoreV2Group.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## undeleteNode

> \Balloon\Sdk\Model\CoreV2Node undeleteNode($node, $move, $destid, $conflict)

Undelete (Restore from trash) a single node or multiple ones.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$move = false; // bool | If node should also be moved during undelete
$destid = 'destid_example'; // string | If node should also be moved during undelete
$conflict = 0; // float | Conflict resolution

try {
    $result = $apiInstance->undeleteNode($node, $move, $destid, $conflict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->undeleteNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **move** | **bool**| If node should also be moved during undelete | [optional] [default to false]
 **destid** | **string**| If node should also be moved during undelete | [optional]
 **conflict** | **float**| Conflict resolution | [optional] [default to 0]

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


## undeleteUser

> \Balloon\Sdk\Model\CoreV2User undeleteUser($user)

Restore deleted user

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Resource identifier

try {
    $result = $apiInstance->undeleteUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->undeleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Resource identifier |

### Return type

[**\Balloon\Sdk\Model\CoreV2User**](../Model/CoreV2User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateNode

> \Balloon\Sdk\Model\CoreV2Node updateNode($node, $core_v2_node)

Change attributes

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 'node_example'; // string | Node identifier
$core_v2_node = new \Balloon\Sdk\Model\CoreV2Node(); // \Balloon\Sdk\Model\CoreV2Node | Change attributes

try {
    $result = $apiInstance->updateNode($node, $core_v2_node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->updateNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Node identifier |
 **core_v2_node** | [**\Balloon\Sdk\Model\CoreV2Node**](../Model/CoreV2Node.md)| Change attributes |

### Return type

[**\Balloon\Sdk\Model\CoreV2Node**](../Model/CoreV2Node.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OpenID](../../README.md#OpenID)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadChunk

> \Balloon\Sdk\Model\CoreV2File uploadChunk($body)

Upload a file chunk. You have to manually splitt the binary data into multiple chunks and upload them successively! using this method. Once uploading the last chunk, the server will automatically create or update the file node. You may set the parent collection, name and or custom attributes only with the last request to save traffic.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string | File content

try {
    $result = $apiInstance->uploadChunk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->uploadChunk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| File content |

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


## uploadFile

> \Balloon\Sdk\Model\CoreV2File uploadFile($body)

Upload an entire file in one-shot. Use this endpoint only for small files, for bigger files use the chunking endpoint.

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



$apiInstance = new Balloon\Sdk\Api\CoreV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string | File content

try {
    $result = $apiInstance->uploadFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreV2Api->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| File content | [optional]

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

