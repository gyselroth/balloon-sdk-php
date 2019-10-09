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
 * Swagger Codegen version: 2.4.8
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
 * CoreV2User Class Doc Comment.
 *
 * @category Class
 * @description A user is used to access the server.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CoreV2User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    const AUTH_INTERNAL = 'internal';
    const AUTH_EXTERNAL = 'external';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'core.v2.User';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        '_links' => '\Balloon\Sdk\Model\CoreV2Links',
        'id' => 'string',
        'created' => '\DateTime',
        'changed' => '\DateTime',
        'username' => 'string',
        'name' => 'string',
        'admin' => 'bool',
        'namespace' => 'string',
        'locale' => 'string',
        'auth' => 'string',
        'has_password' => 'bool',
        'hard_quota' => 'float',
        'soft_quota' => 'float',
        'available' => 'float',
        'used' => 'float',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        '_links' => null,
        'id' => null,
        'created' => 'date-time',
        'changed' => 'date-time',
        'username' => null,
        'name' => null,
        'admin' => null,
        'namespace' => null,
        'locale' => null,
        'auth' => null,
        'has_password' => null,
        'hard_quota' => null,
        'soft_quota' => null,
        'available' => null,
        'used' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_links' => '_links',
        'id' => 'id',
        'created' => 'created',
        'changed' => 'changed',
        'username' => 'username',
        'name' => 'name',
        'admin' => 'admin',
        'namespace' => 'namespace',
        'locale' => 'locale',
        'auth' => 'auth',
        'has_password' => 'has_password',
        'hard_quota' => 'hard_quota',
        'soft_quota' => 'soft_quota',
        'available' => 'available',
        'used' => 'used',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        '_links' => 'setLinks',
        'id' => 'setId',
        'created' => 'setCreated',
        'changed' => 'setChanged',
        'username' => 'setUsername',
        'name' => 'setName',
        'admin' => 'setAdmin',
        'namespace' => 'setNamespace',
        'locale' => 'setLocale',
        'auth' => 'setAuth',
        'has_password' => 'setHasPassword',
        'hard_quota' => 'setHardQuota',
        'soft_quota' => 'setSoftQuota',
        'available' => 'setAvailable',
        'used' => 'setUsed',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        '_links' => 'getLinks',
        'id' => 'getId',
        'created' => 'getCreated',
        'changed' => 'getChanged',
        'username' => 'getUsername',
        'name' => 'getName',
        'admin' => 'getAdmin',
        'namespace' => 'getNamespace',
        'locale' => 'getLocale',
        'auth' => 'getAuth',
        'has_password' => 'getHasPassword',
        'hard_quota' => 'getHardQuota',
        'soft_quota' => 'getSoftQuota',
        'available' => 'getAvailable',
        'used' => 'getUsed',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['changed'] = isset($data['changed']) ? $data['changed'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : false;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : 'en_US';
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : 'internal';
        $this->container['has_password'] = isset($data['has_password']) ? $data['has_password'] : false;
        $this->container['hard_quota'] = isset($data['hard_quota']) ? $data['hard_quota'] : null;
        $this->container['soft_quota'] = isset($data['soft_quota']) ? $data['soft_quota'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getAuthAllowableValues()
    {
        return [
            self::AUTH_INTERNAL,
            self::AUTH_EXTERNAL,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthAllowableValues();
        if (!is_null($this->container['auth']) && !in_array($this->container['auth'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auth', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @return \Balloon\Sdk\Model\CoreV2Links
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links.
     *
     * @param \Balloon\Sdk\Model\CoreV2Links $_links _links
     *
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id Unique 12-byte resource identifier. Note this is a MongoDB ObjectId. The name is the standard resource identifier, the id only useful to verify that a given resource was completely recreated. An ID is immutable and will be created on the server.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created.
     *
     * @param \DateTime $created ISO 8601 timestamp when the resource was created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets changed.
     *
     * @return \DateTime
     */
    public function getChanged()
    {
        return $this->container['changed'];
    }

    /**
     * Sets changed.
     *
     * @param \DateTime $changed ISO 8601 timestamp when the resource was changed
     *
     * @return $this
     */
    public function setChanged($changed)
    {
        $this->container['changed'] = $changed;

        return $this;
    }

    /**
     * Gets username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username.
     *
     * @param string $username unique username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name display name (Usuallly same as username)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets admin.
     *
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin.
     *
     * @param bool $admin admin user flag
     *
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets namespace.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace.
     *
     * @param string $namespace user namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale.
     *
     * @param string $locale user locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets auth.
     *
     * @return string
     */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
     * Sets auth.
     *
     * @param string $auth authentication source
     *
     * @return $this
     */
    public function setAuth($auth)
    {
        $allowedValues = $this->getAuthAllowableValues();
        if (!is_null($auth) && !in_array($auth, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auth', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth'] = $auth;

        return $this;
    }

    /**
     * Gets has_password.
     *
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password.
     *
     * @param bool $has_password is true if the user has a local password set
     *
     * @return $this
     */
    public function setHasPassword($has_password)
    {
        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets hard_quota.
     *
     * @return float
     */
    public function getHardQuota()
    {
        return $this->container['hard_quota'];
    }

    /**
     * Sets hard_quota.
     *
     * @param float $hard_quota Hard quota in bytes (Max. limit of storage usage). Note that external storage is not part of the quota. The default is no limit.
     *
     * @return $this
     */
    public function setHardQuota($hard_quota)
    {
        $this->container['hard_quota'] = $hard_quota;

        return $this;
    }

    /**
     * Gets soft_quota.
     *
     * @return float
     */
    public function getSoftQuota()
    {
        return $this->container['soft_quota'];
    }

    /**
     * Sets soft_quota.
     *
     * @param float $soft_quota Soft quota in bytes (Warning of high quota usage). The default is no limit.
     *
     * @return $this
     */
    public function setSoftQuota($soft_quota)
    {
        $this->container['soft_quota'] = $soft_quota;

        return $this;
    }

    /**
     * Gets available.
     *
     * @return float
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available.
     *
     * @param float $available Available storage in bytes. Is -1 if there is no hard_quota.
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets used.
     *
     * @return float
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used.
     *
     * @param float $used used storage in bytes
     *
     * @return $this
     */
    public function setUsed($used)
    {
        $this->container['used'] = $used;

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