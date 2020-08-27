<?php
/**
 * UpdateAddonCoupon
 *
 * PHP version 5
 *
 * @category Class
 * @package  Everyday\GmodStore\SDK
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

namespace Everyday\GmodStore\SDK\Model;

use \ArrayAccess;
use \Everyday\GmodStore\SDK\ObjectSerializer;

/**
 * UpdateAddonCoupon Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateAddonCoupon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateAddonCoupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'percent' => 'int',
'code' => 'string',
'max_uses' => 'int',
'expires_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'percent' => null,
'code' => null,
'max_uses' => null,
'expires_at' => 'date-time'    ];

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
        'percent' => 'percent',
'code' => 'code',
'max_uses' => 'max_uses',
'expires_at' => 'expires_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'percent' => 'setPercent',
'code' => 'setCode',
'max_uses' => 'setMaxUses',
'expires_at' => 'setExpiresAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'percent' => 'getPercent',
'code' => 'getCode',
'max_uses' => 'getMaxUses',
'expires_at' => 'getExpiresAt'    ];

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
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['max_uses'] = isset($data['max_uses']) ? $data['max_uses'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['percent'] === null) {
            $invalidProperties[] = "'percent' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['max_uses'] === null) {
            $invalidProperties[] = "'max_uses' can't be null";
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
     * Gets percent
     *
     * @return int
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param int $percent percent
     *
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;

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
     * @param \DateTime $expires_at Can be maximum of two weeks into the future
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

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
