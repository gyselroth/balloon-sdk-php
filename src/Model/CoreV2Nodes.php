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
 * CoreV2Nodes Class Doc Comment.
 *
 * @category Class
 * @description A list of nodes.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class CoreV2Nodes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'core.v2.Nodes';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        '_links' => '\Balloon\Sdk\Model\CoreV2ListLinks',
        'kind' => 'string',
        'count' => 'float',
        'total' => 'float',
        'data' => '\Balloon\Sdk\Model\CoreV2Node[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        '_links' => null,
        'kind' => null,
        'count' => null,
        'total' => null,
        'data' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_links' => '_links',
        'kind' => 'kind',
        'count' => 'count',
        'total' => 'total',
        'data' => 'data',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        '_links' => 'setLinks',
        'kind' => 'setKind',
        'count' => 'setCount',
        'total' => 'setTotal',
        'data' => 'setData',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        '_links' => 'getLinks',
        'kind' => 'getKind',
        'count' => 'getCount',
        'total' => 'getTotal',
        'data' => 'getData',
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
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : 'List';
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
     * Gets _links.
     *
     * @return null|\Balloon\Sdk\Model\CoreV2ListLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links.
     *
     * @param null|\Balloon\Sdk\Model\CoreV2ListLinks $_links _links
     *
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets kind.
     *
     * @return null|string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind.
     *
     * @param null|string $kind the resource type, always List
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets count.
     *
     * @return null|float
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count.
     *
     * @param null|float $count holds the number of items in the current list response
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets total.
     *
     * @return null|float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total.
     *
     * @param null|float $total Holds the number of total available items on the server. Note that a List resource is always paged. You need to traverse with offset and limit to request further resources in the list.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets data.
     *
     * @return null|\Balloon\Sdk\Model\CoreV2Node[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data.
     *
     * @param null|\Balloon\Sdk\Model\CoreV2Node[] $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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
