<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  Everyday\GmodStoreSDK
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

namespace Everyday\GmodStoreSDK\Model;

use \ArrayAccess;
use \Everyday\GmodStoreSDK\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStoreSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'avatar' => 'string',
'country_code' => 'string',
'slug' => 'string',
'ban_properties' => 'string[]',
'group' => '\Everyday\GmodStoreSDK\Model\PermissionGroup'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'avatar' => 'uri',
'country_code' => null,
'slug' => null,
'ban_properties' => null,
'group' => null    ];

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
'avatar' => 'avatar',
'country_code' => 'country_code',
'slug' => 'slug',
'ban_properties' => 'ban_properties',
'group' => 'group'    ];

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
'ban_properties' => 'setBanProperties',
'group' => 'setGroup'    ];

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
'ban_properties' => 'getBanProperties',
'group' => 'getGroup'    ];

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

    const BAN_PROPERTIES_EVERYTHING = 'everything';
const BAN_PROPERTIES_ADDONCREATE = 'addon.create';
const BAN_PROPERTIES_ADDONPURCHASE = 'addon.purchase';
const BAN_PROPERTIES_ADDONDOWNLOAD = 'addon.download';
const BAN_PROPERTIES_ADDONREVIEW = 'addon.review';
const BAN_PROPERTIES_ADDONCOMMENT = 'addon.comment';
const BAN_PROPERTIES_JOBCREATE = 'job.create';
const BAN_PROPERTIES_JOBAPPLY = 'job.apply';
const BAN_PROPERTIES_JOBREVIEW = 'job.review';
const BAN_PROPERTIES_JOBCOMMENT = 'job.comment';
const BAN_PROPERTIES_BANAPPEAL = 'ban.appeal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBanPropertiesAllowableValues()
    {
        return [
            self::BAN_PROPERTIES_EVERYTHING,
self::BAN_PROPERTIES_ADDONCREATE,
self::BAN_PROPERTIES_ADDONPURCHASE,
self::BAN_PROPERTIES_ADDONDOWNLOAD,
self::BAN_PROPERTIES_ADDONREVIEW,
self::BAN_PROPERTIES_ADDONCOMMENT,
self::BAN_PROPERTIES_JOBCREATE,
self::BAN_PROPERTIES_JOBAPPLY,
self::BAN_PROPERTIES_JOBREVIEW,
self::BAN_PROPERTIES_JOBCOMMENT,
self::BAN_PROPERTIES_BANAPPEAL,        ];
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ($this->container['ban_properties'] === null) {
            $invalidProperties[] = "'ban_properties' can't be null";
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
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar avatar
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
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
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
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets ban_properties
     *
     * @return string[]
     */
    public function getBanProperties()
    {
        return $this->container['ban_properties'];
    }

    /**
     * Sets ban_properties
     *
     * @param string[] $ban_properties ban_properties
     *
     * @return $this
     */
    public function setBanProperties($ban_properties)
    {
        $allowedValues = $this->getBanPropertiesAllowableValues();
        if (array_diff($ban_properties, $allowedValues)) {
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
     * @return \Everyday\GmodStoreSDK\Model\PermissionGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Everyday\GmodStoreSDK\Model\PermissionGroup $group group
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
