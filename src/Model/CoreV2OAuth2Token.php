<?php

declare(strict_types=1);

/**
 * balloon
 *
 * @copyright   Copryright (c) 2019 gyselroth GmbH (https://gyselroth.com)
 * @license     MIT https://opensource.org/licenses/MIT
 */

/**
 * balloon API.
 *
 * balloon API
 *
 * The version of the OpenAPI document: 1.0.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Balloon\Sdk\Model;

use ArrayAccess;
use Balloon\Sdk\ObjectSerializer;

/**
 * CoreV2OAuth2Token Class Doc Comment.
 *
 * @category Class
 * @description OAUTH2 access token response according RFC6749 https://tools.ietf.org/html/rfc6749#section-4.3.3
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class CoreV2OAuth2Token implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'core.v2.OAuth2Token';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'access_token' => 'string',
        'expires_in' => 'float',
        'token_type' => 'string',
        'scope' => 'string',
        'refresh_token' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'access_token' => null,
        'expires_in' => null,
        'token_type' => null,
        'scope' => null,
        'refresh_token' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'access_token' => 'access_token',
        'expires_in' => 'expires_in',
        'token_type' => 'token_type',
        'scope' => 'scope',
        'refresh_token' => 'refresh_token',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'access_token' => 'setAccessToken',
        'expires_in' => 'setExpiresIn',
        'token_type' => 'setTokenType',
        'scope' => 'setScope',
        'refresh_token' => 'setRefreshToken',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'access_token' => 'getAccessToken',
        'expires_in' => 'getExpiresIn',
        'token_type' => 'getTokenType',
        'scope' => 'getScope',
        'refresh_token' => 'getRefreshToken',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : 3600;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : 'Bearer';
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets access_token.
     *
     * @return null|string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token.
     *
     * @param null|string $access_token resource access_token
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets expires_in.
     *
     * @return null|float
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in.
     *
     * @param null|float $expires_in The number of seconds the issues acceess_token is valid for. This is usually 1hour.
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets token_type.
     *
     * @return null|string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type.
     *
     * @param null|string $token_type The type of token. This is usually a Bearer token.
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets scope.
     *
     * @return null|string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope.
     *
     * @param null|string $scope the scopes
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets refresh_token.
     *
     * @return null|string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token.
     *
     * @param null|string $refresh_token an optional refresh token to get new access_tokens via the refresh_token grant type
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
