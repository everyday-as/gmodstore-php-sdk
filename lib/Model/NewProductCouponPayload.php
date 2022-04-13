<?php
/**
 * NewProductCouponPayload
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
 * NewProductCouponPayload Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NewProductCouponPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewProductCouponPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'percent' => 'int',
        'code' => 'string',
        'maxUses' => 'int',
        'expiresAt' => '\DateTime',
        'boundUserId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'percent' => null,
        'code' => null,
        'maxUses' => null,
        'expiresAt' => 'date-time',
        'boundUserId' => 'uuid'
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
        'percent' => 'percent',
        'code' => 'code',
        'maxUses' => 'maxUses',
        'expiresAt' => 'expiresAt',
        'boundUserId' => 'boundUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'percent' => 'setPercent',
        'code' => 'setCode',
        'maxUses' => 'setMaxUses',
        'expiresAt' => 'setExpiresAt',
        'boundUserId' => 'setBoundUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'percent' => 'getPercent',
        'code' => 'getCode',
        'maxUses' => 'getMaxUses',
        'expiresAt' => 'getExpiresAt',
        'boundUserId' => 'getBoundUserId'
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
        $this->container['percent'] = $data['percent'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['maxUses'] = $data['maxUses'] ?? null;
        $this->container['expiresAt'] = $data['expiresAt'] ?? null;
        $this->container['boundUserId'] = $data['boundUserId'] ?? null;
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
        if (($this->container['percent'] > 90)) {
            $invalidProperties[] = "invalid value for 'percent', must be smaller than or equal to 90.";
        }

        if (($this->container['percent'] < 1)) {
            $invalidProperties[] = "invalid value for 'percent', must be bigger than or equal to 1.";
        }

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) > 64)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 64.";
        }

        if (!preg_match("/[aA-zZ_\\-0-9]+/", $this->container['code'])) {
            $invalidProperties[] = "invalid value for 'code', must be conform to the pattern /[aA-zZ_\\-0-9]+/.";
        }

        if ($this->container['maxUses'] === null) {
            $invalidProperties[] = "'maxUses' can't be null";
        }
        if (($this->container['maxUses'] > 100)) {
            $invalidProperties[] = "invalid value for 'maxUses', must be smaller than or equal to 100.";
        }

        if (($this->container['maxUses'] < 1)) {
            $invalidProperties[] = "invalid value for 'maxUses', must be bigger than or equal to 1.";
        }

        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
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
     * @return self
     */
    public function setPercent($percent)
    {

        if (($percent > 90)) {
            throw new \InvalidArgumentException('invalid value for $percent when calling NewProductCouponPayload., must be smaller than or equal to 90.');
        }
        if (($percent < 1)) {
            throw new \InvalidArgumentException('invalid value for $percent when calling NewProductCouponPayload., must be bigger than or equal to 1.');
        }

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
     * @return self
     */
    public function setCode($code)
    {
        if ((mb_strlen($code) > 64)) {
            throw new \InvalidArgumentException('invalid length for $code when calling NewProductCouponPayload., must be smaller than or equal to 64.');
        }
        if ((!preg_match("/[aA-zZ_\\-0-9]+/", $code))) {
            throw new \InvalidArgumentException("invalid value for $code when calling NewProductCouponPayload., must conform to the pattern /[aA-zZ_\\-0-9]+/.");
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets maxUses
     *
     * @return int
     */
    public function getMaxUses()
    {
        return $this->container['maxUses'];
    }

    /**
     * Sets maxUses
     *
     * @param int $maxUses maxUses
     *
     * @return self
     */
    public function setMaxUses($maxUses)
    {

        if (($maxUses > 100)) {
            throw new \InvalidArgumentException('invalid value for $maxUses when calling NewProductCouponPayload., must be smaller than or equal to 100.');
        }
        if (($maxUses < 1)) {
            throw new \InvalidArgumentException('invalid value for $maxUses when calling NewProductCouponPayload., must be bigger than or equal to 1.');
        }

        $this->container['maxUses'] = $maxUses;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime $expiresAt expiresAt
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets boundUserId
     *
     * @return string|null
     */
    public function getBoundUserId()
    {
        return $this->container['boundUserId'];
    }

    /**
     * Sets boundUserId
     *
     * @param string|null $boundUserId boundUserId
     *
     * @return self
     */
    public function setBoundUserId($boundUserId)
    {
        $this->container['boundUserId'] = $boundUserId;

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


