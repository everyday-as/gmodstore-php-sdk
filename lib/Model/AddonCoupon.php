<?php
/**
 * AddonCoupon
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GmodStore
 *
 * Welcome to the GmodStore API! You can use our API to access Gmodstore API endpoints, which can be used interact with Gmodstore programmatically.
 *
 * The version of the OpenAPI document: 1.0.1
 * 
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
 * AddonCoupon Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddonCoupon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddonCoupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'code' => 'string',
        'percent' => 'float',
        'max_uses' => 'int',
        'expires_at' => '\DateTime',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'addon' => '\Everyday\GmodStore\Sdk\Model\Addon'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'code' => null,
        'percent' => null,
        'max_uses' => null,
        'expires_at' => 'date-time',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
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
        'code' => 'code',
        'percent' => 'percent',
        'max_uses' => 'max_uses',
        'expires_at' => 'expires_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'addon' => 'addon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'percent' => 'setPercent',
        'max_uses' => 'setMaxUses',
        'expires_at' => 'setExpiresAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'addon' => 'setAddon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'percent' => 'getPercent',
        'max_uses' => 'getMaxUses',
        'expires_at' => 'getExpiresAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['max_uses'] = isset($data['max_uses']) ? $data['max_uses'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
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
        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['percent'] === null) {
            $invalidProperties[] = "'percent' can't be null";
        }
        if (($this->container['percent'] > 99)) {
            $invalidProperties[] = "invalid value for 'percent', must be smaller than or equal to 99.";
        }

        if (($this->container['percent'] < 1)) {
            $invalidProperties[] = "invalid value for 'percent', must be bigger than or equal to 1.";
        }

        if ($this->container['max_uses'] === null) {
            $invalidProperties[] = "'max_uses' can't be null";
        }
        if (($this->container['max_uses'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_uses', must be bigger than or equal to 1.";
        }

        if ($this->container['expires_at'] === null) {
            $invalidProperties[] = "'expires_at' can't be null";
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

        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling AddonCoupon., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param float $percent percent
     *
     * @return $this
     */
    public function setPercent($percent)
    {

        if (($percent > 99)) {
            throw new \InvalidArgumentException('invalid value for $percent when calling AddonCoupon., must be smaller than or equal to 99.');
        }
        if (($percent < 1)) {
            throw new \InvalidArgumentException('invalid value for $percent when calling AddonCoupon., must be bigger than or equal to 1.');
        }

        $this->container['percent'] = $percent;

        return $this;
    }

    /**
     * Gets max_uses
     *
     * @return int
     */
    public function getMaxUses()
    {
        return $this->container['max_uses'];
    }

    /**
     * Sets max_uses
     *
     * @param int $max_uses max_uses
     *
     * @return $this
     */
    public function setMaxUses($max_uses)
    {

        if (($max_uses < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_uses when calling AddonCoupon., must be bigger than or equal to 1.');
        }

        $this->container['max_uses'] = $max_uses;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime $expires_at A future date less than 2 weeks from today
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
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
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
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


