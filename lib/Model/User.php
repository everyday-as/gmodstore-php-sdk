<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'avatar' => 'string',
        'countryCode' => 'string',
        'slug' => 'string',
        'reputation' => 'int',
        'teamReputation' => 'int',
        'banProperties' => 'string[]',
        'group' => '\Everyday\GmodStore\Sdk\Model\PermissionGroup'
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
        'name' => null,
        'avatar' => 'uri',
        'countryCode' => null,
        'slug' => null,
        'reputation' => 'int64',
        'teamReputation' => 'int64',
        'banProperties' => null,
        'group' => null
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
        'avatar' => 'avatar',
        'countryCode' => 'country_code',
        'slug' => 'slug',
        'reputation' => 'reputation',
        'teamReputation' => 'team_reputation',
        'banProperties' => 'ban_properties',
        'group' => 'group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'avatar' => 'setAvatar',
        'countryCode' => 'setCountryCode',
        'slug' => 'setSlug',
        'reputation' => 'setReputation',
        'teamReputation' => 'setTeamReputation',
        'banProperties' => 'setBanProperties',
        'group' => 'setGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'avatar' => 'getAvatar',
        'countryCode' => 'getCountryCode',
        'slug' => 'getSlug',
        'reputation' => 'getReputation',
        'teamReputation' => 'getTeamReputation',
        'banProperties' => 'getBanProperties',
        'group' => 'getGroup'
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

    const BAN_PROPERTIES_EVERYTHING = 'everything';
    const BAN_PROPERTIES_ADDON_CREATE = 'addon.create';
    const BAN_PROPERTIES_ADDON_PURCHASE = 'addon.purchase';
    const BAN_PROPERTIES_ADDON_DOWNLOAD = 'addon.download';
    const BAN_PROPERTIES_ADDON_REVIEW = 'addon.review';
    const BAN_PROPERTIES_ADDON_COMMENT = 'addon.comment';
    const BAN_PROPERTIES_JOB_CREATE = 'job.create';
    const BAN_PROPERTIES_JOB_APPLY = 'job.apply';
    const BAN_PROPERTIES_JOB_REVIEW = 'job.review';
    const BAN_PROPERTIES_JOB_COMMENT = 'job.comment';
    const BAN_PROPERTIES_BAN_APPEAL = 'ban.appeal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBanPropertiesAllowableValues()
    {
        return [
            self::BAN_PROPERTIES_EVERYTHING,
            self::BAN_PROPERTIES_ADDON_CREATE,
            self::BAN_PROPERTIES_ADDON_PURCHASE,
            self::BAN_PROPERTIES_ADDON_DOWNLOAD,
            self::BAN_PROPERTIES_ADDON_REVIEW,
            self::BAN_PROPERTIES_ADDON_COMMENT,
            self::BAN_PROPERTIES_JOB_CREATE,
            self::BAN_PROPERTIES_JOB_APPLY,
            self::BAN_PROPERTIES_JOB_REVIEW,
            self::BAN_PROPERTIES_JOB_COMMENT,
            self::BAN_PROPERTIES_BAN_APPEAL,
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
        $this->container['avatar'] = $data['avatar'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['slug'] = $data['slug'] ?? null;
        $this->container['reputation'] = $data['reputation'] ?? null;
        $this->container['teamReputation'] = $data['teamReputation'] ?? null;
        $this->container['banProperties'] = $data['banProperties'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
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
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode countryCode
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets reputation
     *
     * @return int|null
     */
    public function getReputation()
    {
        return $this->container['reputation'];
    }

    /**
     * Sets reputation
     *
     * @param int|null $reputation reputation
     *
     * @return self
     */
    public function setReputation($reputation)
    {
        $this->container['reputation'] = $reputation;

        return $this;
    }

    /**
     * Gets teamReputation
     *
     * @return int|null
     */
    public function getTeamReputation()
    {
        return $this->container['teamReputation'];
    }

    /**
     * Sets teamReputation
     *
     * @param int|null $teamReputation teamReputation
     *
     * @return self
     */
    public function setTeamReputation($teamReputation)
    {
        $this->container['teamReputation'] = $teamReputation;

        return $this;
    }

    /**
     * Gets banProperties
     *
     * @return string[]|null
     */
    public function getBanProperties()
    {
        return $this->container['banProperties'];
    }

    /**
     * Sets banProperties
     *
     * @param string[]|null $banProperties banProperties
     *
     * @return self
     */
    public function setBanProperties($banProperties)
    {
        $allowedValues = $this->getBanPropertiesAllowableValues();
        if (!is_null($banProperties) && array_diff($banProperties, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'banProperties', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['banProperties'] = $banProperties;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \Everyday\GmodStore\Sdk\Model\PermissionGroup|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Everyday\GmodStore\Sdk\Model\PermissionGroup|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

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


