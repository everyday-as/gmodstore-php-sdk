<?php
/**
 * ProductVersion
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * gmodstore
 *
 * Welcome to the GmodStore API! You can use our API to access GmodStore API endpoints, which can be used interact with GmodStore programmatically.  # Rate limits Every request you make to the GmodStore API will count against your rate limit, which at the time of writing this, is 60 requests / minute. An up-to-date value will always provided in the `X-RateLimit-Limit` header The number of requests you have remaining before you must wait is provided in the `X-RateLimit-Remaining` header.  # API SDKs For a list of available API SDKs check the README here: https://github.com/everyday-as/gmodstore-api-docs#client-libraries
 *
 * The version of the OpenAPI document: 3.0.0
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
 * ProductVersion Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductVersion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'changelog' => 'string',
        'releaseType' => 'string',
        'fileSize' => 'float',
        'fileHash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'changelog' => null,
        'releaseType' => null,
        'fileSize' => null,
        'fileHash' => null
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
        'releaseType' => 'releaseType',
        'fileSize' => 'fileSize',
        'fileHash' => 'fileHash'
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
        'releaseType' => 'setReleaseType',
        'fileSize' => 'setFileSize',
        'fileHash' => 'setFileHash'
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
        'releaseType' => 'getReleaseType',
        'fileSize' => 'getFileSize',
        'fileHash' => 'getFileHash'
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

    const RELEASE_TYPE_STABLE = 'stable';
    const RELEASE_TYPE_BETA = 'beta';
    const RELEASE_TYPE_ALPHA = 'alpha';
    const RELEASE_TYPE__PRIVATE = 'private';
    const RELEASE_TYPE_DEMO = 'demo';

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
            self::RELEASE_TYPE__PRIVATE,
            self::RELEASE_TYPE_DEMO,
        ];
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
        $this->container['releaseType'] = $data['releaseType'] ?? null;
        $this->container['fileSize'] = $data['fileSize'] ?? null;
        $this->container['fileHash'] = $data['fileHash'] ?? null;
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
        if ($this->container['releaseType'] === null) {
            $invalidProperties[] = "'releaseType' can't be null";
        }
        $allowedValues = $this->getReleaseTypeAllowableValues();
        if (!is_null($this->container['releaseType']) && !in_array($this->container['releaseType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'releaseType', must be one of '%s'",
                $this->container['releaseType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fileSize'] === null) {
            $invalidProperties[] = "'fileSize' can't be null";
        }
        if (($this->container['fileSize'] < 0)) {
            $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
        }

        if ($this->container['fileHash'] === null) {
            $invalidProperties[] = "'fileHash' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
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
     * @return self
     */
    public function setChangelog($changelog)
    {
        $this->container['changelog'] = $changelog;

        return $this;
    }

    /**
     * Gets releaseType
     *
     * @return string
     */
    public function getReleaseType()
    {
        return $this->container['releaseType'];
    }

    /**
     * Sets releaseType
     *
     * @param string $releaseType releaseType
     *
     * @return self
     */
    public function setReleaseType($releaseType)
    {
        $allowedValues = $this->getReleaseTypeAllowableValues();
        if (!in_array($releaseType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'releaseType', must be one of '%s'",
                    $releaseType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['releaseType'] = $releaseType;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return float
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param float $fileSize fileSize
     *
     * @return self
     */
    public function setFileSize($fileSize)
    {

        if (($fileSize < 0)) {
            throw new \InvalidArgumentException('invalid value for $fileSize when calling ProductVersion., must be bigger than or equal to 0.');
        }

        $this->container['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * Gets fileHash
     *
     * @return string
     */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
     * Sets fileHash
     *
     * @param string $fileHash fileHash
     *
     * @return self
     */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;

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

