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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
        'country_code' => 'string',
        'slug' => 'string',
        'reputation' => 'int',
        'team_reputation' => 'int',
        'ban_properties' => 'string[]',
        'group' => '\Everyday\GmodStore\Sdk\Model\PermissionGroup'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'avatar' => 'uri',
        'country_code' => null,
        'slug' => null,
        'reputation' => 'int64',
        'team_reputation' => 'int64',
        'ban_properties' => null,
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
        'country_code' => 'country_code',
        'slug' => 'slug',
        'reputation' => 'reputation',
        'team_reputation' => 'team_reputation',
        'ban_properties' => 'ban_properties',
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
        'country_code' => 'setCountryCode',
        'slug' => 'setSlug',
        'reputation' => 'setReputation',
        'team_reputation' => 'setTeamReputation',
        'ban_properties' => 'setBanProperties',
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
        'country_code' => 'getCountryCode',
        'slug' => 'getSlug',
        'reputation' => 'getReputation',
        'team_reputation' => 'getTeamReputation',
        'ban_properties' => 'getBanProperties',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['reputation'] = isset($data['reputation']) ? $data['reputation'] : null;
        $this->container['team_reputation'] = isset($data['team_reputation']) ? $data['team_reputation'] : null;
        $this->container['ban_properties'] = isset($data['ban_properties']) ? $data['ban_properties'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
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
     * @return $this
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
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

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
     * @return $this
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
     * @return $this
     */
    public function setReputation($reputation)
    {
        $this->container['reputation'] = $reputation;

        return $this;
    }

    /**
     * Gets team_reputation
     *
     * @return int|null
     */
    public function getTeamReputation()
    {
        return $this->container['team_reputation'];
    }

    /**
     * Sets team_reputation
     *
     * @param int|null $team_reputation team_reputation
     *
     * @return $this
     */
    public function setTeamReputation($team_reputation)
    {
        $this->container['team_reputation'] = $team_reputation;

        return $this;
    }

    /**
     * Gets ban_properties
     *
     * @return string[]|null
     */
    public function getBanProperties()
    {
        return $this->container['ban_properties'];
    }

    /**
     * Sets ban_properties
     *
     * @param string[]|null $ban_properties ban_properties
     *
     * @return $this
     */
    public function setBanProperties($ban_properties)
    {
        $allowedValues = $this->getBanPropertiesAllowableValues();
        if (!is_null($ban_properties) && array_diff($ban_properties, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ban_properties', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ban_properties'] = $ban_properties;

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
     * @return $this
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


