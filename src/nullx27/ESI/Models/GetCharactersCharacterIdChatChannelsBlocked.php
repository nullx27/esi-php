<?php
/**
 * GetCharactersCharacterIdChatChannelsBlocked
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27\ESI\nullx27\ESI\Models;

use \ArrayAccess;
use \nullx27\ESI\ObjectSerializer;

/**
 * GetCharactersCharacterIdChatChannelsBlocked Class Doc Comment
 *
 * @category Class
 * @description blocked object
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdChatChannelsBlocked implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_chat_channels_blocked';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessorId' => 'int',
        'accessorType' => 'string',
        'reason' => 'string',
        'endAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessorId' => 'int32',
        'accessorType' => null,
        'reason' => null,
        'endAt' => 'date-time'
    ];

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
        'accessorId' => 'accessor_id',
        'accessorType' => 'accessor_type',
        'reason' => 'reason',
        'endAt' => 'end_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessorId' => 'setAccessorId',
        'accessorType' => 'setAccessorType',
        'reason' => 'setReason',
        'endAt' => 'setEndAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessorId' => 'getAccessorId',
        'accessorType' => 'getAccessorType',
        'reason' => 'getReason',
        'endAt' => 'getEndAt'
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
        return self::$swaggerModelName;
    }

    const ACCESSOR_TYPE_CHARACTER = 'character';
    const ACCESSOR_TYPE_CORPORATION = 'corporation';
    const ACCESSOR_TYPE_ALLIANCE = 'alliance';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessorTypeAllowableValues()
    {
        return [
            self::ACCESSOR_TYPE_CHARACTER,
            self::ACCESSOR_TYPE_CORPORATION,
            self::ACCESSOR_TYPE_ALLIANCE,
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
        $this->container['accessorId'] = isset($data['accessorId']) ? $data['accessorId'] : null;
        $this->container['accessorType'] = isset($data['accessorType']) ? $data['accessorType'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accessorId'] === null) {
            $invalidProperties[] = "'accessorId' can't be null";
        }
        if ($this->container['accessorType'] === null) {
            $invalidProperties[] = "'accessorType' can't be null";
        }
        $allowedValues = $this->getAccessorTypeAllowableValues();
        if (!in_array($this->container['accessorType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accessorType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['accessorId'] === null) {
            return false;
        }
        if ($this->container['accessorType'] === null) {
            return false;
        }
        $allowedValues = $this->getAccessorTypeAllowableValues();
        if (!in_array($this->container['accessorType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets accessorId
     *
     * @return int
     */
    public function getAccessorId()
    {
        return $this->container['accessorId'];
    }

    /**
     * Sets accessorId
     *
     * @param int $accessorId ID of a blocked channel member
     *
     * @return $this
     */
    public function setAccessorId($accessorId)
    {
        $this->container['accessorId'] = $accessorId;

        return $this;
    }

    /**
     * Gets accessorType
     *
     * @return string
     */
    public function getAccessorType()
    {
        return $this->container['accessorType'];
    }

    /**
     * Sets accessorType
     *
     * @param string $accessorType accessor_type string
     *
     * @return $this
     */
    public function setAccessorType($accessorType)
    {
        $allowedValues = $this->getAccessorTypeAllowableValues();
        if (!in_array($accessorType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accessorType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accessorType'] = $accessorType;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason this accessor is blocked
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets endAt
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
     * Sets endAt
     *
     * @param \DateTime $endAt Time at which this accessor will no longer be blocked
     *
     * @return $this
     */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;

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


