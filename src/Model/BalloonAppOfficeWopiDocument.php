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
 * OpenAPI spec version: 1.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Balloon\Sdk\Model;

use ArrayAccess;
use Balloon\Sdk\ObjectSerializer;

/**
 * BalloonAppOfficeWopiDocument Class Doc Comment.
 *
 * @category Class
 * @description WOPI document https://wopi.readthedocs.io/projects/wopirest/en/latest/files/CheckFileInfo.html
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class BalloonAppOfficeWopiDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Balloon.App.Office.WopiDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'base_file_name' => 'string',
        'size' => 'string',
        'version' => 'string',
        'owner_id' => 'string',
        'user_id' => 'string',
        'user_friendly_name' => 'string',
        'user_can_write' => 'bool',
        'post_message_origin' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'base_file_name' => null,
        'size' => null,
        'version' => null,
        'owner_id' => null,
        'user_id' => null,
        'user_friendly_name' => null,
        'user_can_write' => null,
        'post_message_origin' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'base_file_name' => 'BaseFileName',
        'size' => 'Size',
        'version' => 'Version',
        'owner_id' => 'OwnerId',
        'user_id' => 'UserId',
        'user_friendly_name' => 'UserFriendlyName',
        'user_can_write' => 'UserCanWrite',
        'post_message_origin' => 'PostMessageOrigin',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'base_file_name' => 'setBaseFileName',
        'size' => 'setSize',
        'version' => 'setVersion',
        'owner_id' => 'setOwnerId',
        'user_id' => 'setUserId',
        'user_friendly_name' => 'setUserFriendlyName',
        'user_can_write' => 'setUserCanWrite',
        'post_message_origin' => 'setPostMessageOrigin',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'base_file_name' => 'getBaseFileName',
        'size' => 'getSize',
        'version' => 'getVersion',
        'owner_id' => 'getOwnerId',
        'user_id' => 'getUserId',
        'user_friendly_name' => 'getUserFriendlyName',
        'user_can_write' => 'getUserCanWrite',
        'post_message_origin' => 'getPostMessageOrigin',
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
        $this->container['base_file_name'] = isset($data['base_file_name']) ? $data['base_file_name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_friendly_name'] = isset($data['user_friendly_name']) ? $data['user_friendly_name'] : null;
        $this->container['user_can_write'] = isset($data['user_can_write']) ? $data['user_can_write'] : null;
        $this->container['post_message_origin'] = isset($data['post_message_origin']) ? $data['post_message_origin'] : null;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        return self::$swaggerModelName;
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
     * Gets base_file_name.
     *
     * @return string
     */
    public function getBaseFileName()
    {
        return $this->container['base_file_name'];
    }

    /**
     * Sets base_file_name.
     *
     * @param string $base_file_name base_file_name
     *
     * @return $this
     */
    public function setBaseFileName($base_file_name)
    {
        $this->container['base_file_name'] = $base_file_name;

        return $this;
    }

    /**
     * Gets size.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param string $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version.
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets owner_id.
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id.
     *
     * @param string $owner_id owner_id
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets user_id.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id.
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_friendly_name.
     *
     * @return string
     */
    public function getUserFriendlyName()
    {
        return $this->container['user_friendly_name'];
    }

    /**
     * Sets user_friendly_name.
     *
     * @param string $user_friendly_name user_friendly_name
     *
     * @return $this
     */
    public function setUserFriendlyName($user_friendly_name)
    {
        $this->container['user_friendly_name'] = $user_friendly_name;

        return $this;
    }

    /**
     * Gets user_can_write.
     *
     * @return bool
     */
    public function getUserCanWrite()
    {
        return $this->container['user_can_write'];
    }

    /**
     * Sets user_can_write.
     *
     * @param bool $user_can_write user_can_write
     *
     * @return $this
     */
    public function setUserCanWrite($user_can_write)
    {
        $this->container['user_can_write'] = $user_can_write;

        return $this;
    }

    /**
     * Gets post_message_origin.
     *
     * @return string
     */
    public function getPostMessageOrigin()
    {
        return $this->container['post_message_origin'];
    }

    /**
     * Sets post_message_origin.
     *
     * @param string $post_message_origin post_message_origin
     *
     * @return $this
     */
    public function setPostMessageOrigin($post_message_origin)
    {
        $this->container['post_message_origin'] = $post_message_origin;

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
}
