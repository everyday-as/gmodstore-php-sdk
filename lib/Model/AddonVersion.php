<?php
/**
 * AddonVersion
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GmodStore API
 *
 * Welcome to the GmodStore API! You can use our API to access GmodStore API endpoints, which can be used interact with GmodStore programmatically.
 *
 * The version of the OpenAPI document: 1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: unset
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
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
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddonVersion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddonVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'changelog' => 'string',
        'fileHash' => 'string',
        'fileSize' => 'int',
        'releaseType' => '\Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'addon' => '\Everyday\GmodStore\Sdk\Model\Addon'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'changelog' => null,
        'fileHash' => null,
        'fileSize' => null,
        'releaseType' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'addon' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
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
        'fileHash' => 'file_hash',
        'fileSize' => 'file_size',
        'releaseType' => 'release_type',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'addon' => 'addon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'changelog' => 'setChangelog',
        'fileHash' => 'setFileHash',
        'fileSize' => 'setFileSize',
        'releaseType' => 'setReleaseType',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'addon' => 'setAddon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'changelog' => 'getChangelog',
        'fileHash' => 'getFileHash',
        'fileSize' => 'getFileSize',
        'releaseType' => 'getReleaseType',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'addon' => 'getAddon'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['changelog'] = $data['changelog'] ?? null;
        $this->container['fileHash'] = $data['fileHash'] ?? null;
        $this->container['fileSize'] = $data['fileSize'] ?? null;
        $this->container['releaseType'] = $data['releaseType'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['addon'] = $data['addon'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 80)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 80.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['changelog'] === null) {
            $invalidProperties[] = "'changelog' can't be null";
        }
        if ((mb_strlen($this->container['changelog']) > 10000)) {
            $invalidProperties[] = "invalid value for 'changelog', the character length must be smaller than or equal to 10000.";
        }

        if ((mb_strlen($this->container['changelog']) < 1)) {
            $invalidProperties[] = "invalid value for 'changelog', the character length must be bigger than or equal to 1.";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
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
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AddonVersion., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AddonVersion., must be bigger than or equal to 1.');
        }

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
     * @param string $changelog You can pass in markdown here
     *
     * @return self
     */
    public function setChangelog($changelog)
    {
        if ((mb_strlen($changelog) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $changelog when calling AddonVersion., must be smaller than or equal to 10000.');
        }
        if ((mb_strlen($changelog) < 1)) {
            throw new \InvalidArgumentException('invalid length for $changelog when calling AddonVersion., must be bigger than or equal to 1.');
        }

        $this->container['changelog'] = $changelog;

        return $this;
    }

    /**
     * Gets fileHash
     *
     * @return string|null
     */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
     * Sets fileHash
     *
     * @param string|null $fileHash fileHash
     *
     * @return self
     */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param int|null $fileSize fileSize
     *
     * @return self
     */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * Gets releaseType
     *
     * @return \Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType|null
     */
    public function getReleaseType()
    {
        return $this->container['releaseType'];
    }

    /**
     * Sets releaseType
     *
     * @param \Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType|null $releaseType releaseType
     *
     * @return self
     */
    public function setReleaseType($releaseType)
    {
        $this->container['releaseType'] = $releaseType;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets addon
     *
     * @return \Everyday\GmodStore\Sdk\Model\Addon|null
     */
    public function getAddon()
    {
        return $this->container['addon'];
    }

    /**
     * Sets addon
     *
     * @param \Everyday\GmodStore\Sdk\Model\Addon|null $addon addon
     *
     * @return self
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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
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
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


