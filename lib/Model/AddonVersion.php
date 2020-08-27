<?php
/**
 * AddonVersion
 *
 * PHP version 5
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GmodStore
 *
 * Welcome to the Gmodstore API! You can use our API to access Gmodstore API endpoints, which can be used interact with Gmodstore programmatically.
 *
 * GmodStore API spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Everyday\GmodStore\Sdk\Model;

use \ArrayAccess;
use \Everyday\GmodStore\Sdk\ObjectSerializer;

/**
 * AddonVersion Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddonVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddonVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'changelog' => 'string',
'file_hash' => 'string',
'file_size' => 'int',
'release_type' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'addon' => '\Everyday\GmodStore\Sdk\Model\Addon'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'changelog' => null,
'file_hash' => null,
'file_size' => null,
'release_type' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'addon' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'changelog' => 'changelog',
'file_hash' => 'file_hash',
'file_size' => 'file_size',
'release_type' => 'release_type',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'addon' => 'addon'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'changelog' => 'setChangelog',
'file_hash' => 'setFileHash',
'file_size' => 'setFileSize',
'release_type' => 'setReleaseType',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'addon' => 'setAddon'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'changelog' => 'getChangelog',
'file_hash' => 'getFileHash',
'file_size' => 'getFileSize',
'release_type' => 'getReleaseType',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'addon' => 'getAddon'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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

    const RELEASE_TYPE_STABLE = 'stable';
const RELEASE_TYPE_BETA = 'beta';
const RELEASE_TYPE_ALPHA = 'alpha';
const RELEASE_TYPE__PRIVATE = 'private';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReleaseTypeAllowableValues()
    {
        return [
            self::RELEASE_TYPE_STABLE,
self::RELEASE_TYPE_BETA,
self::RELEASE_TYPE_ALPHA,
self::RELEASE_TYPE__PRIVATE,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['changelog'] = isset($data['changelog']) ? $data['changelog'] : null;
        $this->container['file_hash'] = isset($data['file_hash']) ? $data['file_hash'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['release_type'] = isset($data['release_type']) ? $data['release_type'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['addon'] = isset($data['addon']) ? $data['addon'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['changelog'] === null) {
            $invalidProperties[] = "'changelog' can't be null";
        }
        if ($this->container['file_hash'] === null) {
            $invalidProperties[] = "'file_hash' can't be null";
        }
        if ($this->container['file_size'] === null) {
            $invalidProperties[] = "'file_size' can't be null";
        }
        $allowedValues = $this->getReleaseTypeAllowableValues();
        if (!is_null($this->container['release_type']) && !in_array($this->container['release_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'release_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets changelog
     *
     * @return string
     */
    public function getChangelog()
    {
        return $this->container['changelog'];
    }

    /**
     * Sets changelog
     *
     * @param string $changelog changelog
     *
     * @return $this
     */
    public function setChangelog($changelog)
    {
        $this->container['changelog'] = $changelog;

        return $this;
    }

    /**
     * Gets file_hash
     *
     * @return string
     */
    public function getFileHash()
    {
        return $this->container['file_hash'];
    }

    /**
     * Sets file_hash
     *
     * @param string $file_hash file_hash
     *
     * @return $this
     */
    public function setFileHash($file_hash)
    {
        $this->container['file_hash'] = $file_hash;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size file_size
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets release_type
     *
     * @return string
     */
    public function getReleaseType()
    {
        return $this->container['release_type'];
    }

    /**
     * Sets release_type
     *
     * @param string $release_type release_type
     *
     * @return $this
     */
    public function setReleaseType($release_type)
    {
        $allowedValues = $this->getReleaseTypeAllowableValues();
        if (!is_null($release_type) && !in_array($release_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'release_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['release_type'] = $release_type;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets addon
     *
     * @return \Everyday\GmodStore\Sdk\Model\Addon
     */
    public function getAddon()
    {
        return $this->container['addon'];
    }

    /**
     * Sets addon
     *
     * @param \Everyday\GmodStore\Sdk\Model\Addon $addon addon
     *
     * @return $this
     */
    public function setAddon($addon)
    {
        $this->container['addon'] = $addon;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
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
}
