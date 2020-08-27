<?php
/**
 * UserBan
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
 * Welcome to the Gmodstore API! You can use our API to access Gmodstore API endpoints, which can be used interact with Gmodstore programmatically.
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
 * UserBan Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserBan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserBan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'int',
        'reason' => 'string',
        'unban_reason' => 'string',
        'properties' => 'string[]',
        'start' => '\DateTime',
        'end' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_id' => 'int64',
        'reason' => null,
        'unban_reason' => null,
        'properties' => null,
        'start' => 'date-time',
        'end' => 'date-time'
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
        'user_id' => 'user_id',
        'reason' => 'reason',
        'unban_reason' => 'unban_reason',
        'properties' => 'properties',
        'start' => 'start',
        'end' => 'end'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'reason' => 'setReason',
        'unban_reason' => 'setUnbanReason',
        'properties' => 'setProperties',
        'start' => 'setStart',
        'end' => 'setEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'reason' => 'getReason',
        'unban_reason' => 'getUnbanReason',
        'properties' => 'getProperties',
        'start' => 'getStart',
        'end' => 'getEnd'
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

    const PROPERTIES_EVERYTHING = 'everything';
    const PROPERTIES_ADDON_CREATE = 'addon.create';
    const PROPERTIES_ADDON_PURCHASE = 'addon.purchase';
    const PROPERTIES_ADDON_DOWNLOAD = 'addon.download';
    const PROPERTIES_ADDON_REVIEW = 'addon.review';
    const PROPERTIES_ADDON_COMMENT = 'addon.comment';
    const PROPERTIES_JOB_CREATE = 'job.create';
    const PROPERTIES_JOB_APPLY = 'job.apply';
    const PROPERTIES_JOB_REVIEW = 'job.review';
    const PROPERTIES_JOB_COMMENT = 'job.comment';
    const PROPERTIES_BAN_APPEAL = 'ban.appeal';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropertiesAllowableValues()
    {
        return [
            self::PROPERTIES_EVERYTHING,
            self::PROPERTIES_ADDON_CREATE,
            self::PROPERTIES_ADDON_PURCHASE,
            self::PROPERTIES_ADDON_DOWNLOAD,
            self::PROPERTIES_ADDON_REVIEW,
            self::PROPERTIES_ADDON_COMMENT,
            self::PROPERTIES_JOB_CREATE,
            self::PROPERTIES_JOB_APPLY,
            self::PROPERTIES_JOB_REVIEW,
            self::PROPERTIES_JOB_COMMENT,
            self::PROPERTIES_BAN_APPEAL,
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['unban_reason'] = isset($data['unban_reason']) ? $data['unban_reason'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
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
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets unban_reason
     *
     * @return string|null
     */
    public function getUnbanReason()
    {
        return $this->container['unban_reason'];
    }

    /**
     * Sets unban_reason
     *
     * @param string|null $unban_reason unban_reason
     *
     * @return $this
     */
    public function setUnbanReason($unban_reason)
    {
        $this->container['unban_reason'] = $unban_reason;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return string[]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string[]|null $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $allowedValues = $this->getPropertiesAllowableValues();
        if (!is_null($properties) && array_diff($properties, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'properties', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime|null $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

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


