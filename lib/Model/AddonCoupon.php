<?php
/**
 * AddonCoupon
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 1.2.0
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
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddonCoupon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
        'maxUses' => 'int',
        'expiresAt' => '\DateTime',
        'boundUserId' => 'int',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'addon' => '\Everyday\GmodStore\Sdk\Model\Addon',
        'boundUser' => '\Everyday\GmodStore\Sdk\Model\User'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'code' => null,
        'percent' => null,
        'maxUses' => null,
        'expiresAt' => 'date-time',
        'boundUserId' => 'int64',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'addon' => null,
        'boundUser' => null
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
        'maxUses' => 'max_uses',
        'expiresAt' => 'expires_at',
        'boundUserId' => 'bound_user_id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'addon' => 'addon',
        'boundUser' => 'bound_user'
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
        'maxUses' => 'setMaxUses',
        'expiresAt' => 'setExpiresAt',
        'boundUserId' => 'setBoundUserId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'addon' => 'setAddon',
        'boundUser' => 'setBoundUser'
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
        'maxUses' => 'getMaxUses',
        'expiresAt' => 'getExpiresAt',
        'boundUserId' => 'getBoundUserId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'addon' => 'getAddon',
        'boundUser' => 'getBoundUser'
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['percent'] = $data['percent'] ?? null;
        $this->container['maxUses'] = $data['maxUses'] ?? null;
        $this->container['expiresAt'] = $data['expiresAt'] ?? null;
        $this->container['boundUserId'] = $data['boundUserId'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['addon'] = $data['addon'] ?? null;
        $this->container['boundUser'] = $data['boundUser'] ?? null;
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

        if ($this->container['maxUses'] === null) {
            $invalidProperties[] = "'maxUses' can't be null";
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
     * @return self
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
     * @return self
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
     * @return self
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

        if (($maxUses < 1)) {
            throw new \InvalidArgumentException('invalid value for $maxUses when calling AddonCoupon., must be bigger than or equal to 1.');
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
     * @param \DateTime $expiresAt A future date less than 2 weeks from today
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
     * @return int|null
     */
    public function getBoundUserId()
    {
        return $this->container['boundUserId'];
    }

    /**
     * Sets boundUserId
     *
     * @param int|null $boundUserId boundUserId
     *
     * @return self
     */
    public function setBoundUserId($boundUserId)
    {
        $this->container['boundUserId'] = $boundUserId;

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
     * Gets boundUser
     *
     * @return \Everyday\GmodStore\Sdk\Model\User|null
     */
    public function getBoundUser()
    {
        return $this->container['boundUser'];
    }

    /**
     * Sets boundUser
     *
     * @param \Everyday\GmodStore\Sdk\Model\User|null $boundUser boundUser
     *
     * @return self
     */
    public function setBoundUser($boundUser)
    {
        $this->container['boundUser'] = $boundUser;

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


