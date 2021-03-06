<?php
/**
 * GetFleetsFleetIdOk
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
 * GetFleetsFleetIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetFleetsFleetIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_fleets_fleet_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'motd' => 'string',
        'isFreeMove' => 'bool',
        'isRegistered' => 'bool',
        'isVoiceEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'motd' => null,
        'isFreeMove' => null,
        'isRegistered' => null,
        'isVoiceEnabled' => null
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
        'motd' => 'motd',
        'isFreeMove' => 'is_free_move',
        'isRegistered' => 'is_registered',
        'isVoiceEnabled' => 'is_voice_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'motd' => 'setMotd',
        'isFreeMove' => 'setIsFreeMove',
        'isRegistered' => 'setIsRegistered',
        'isVoiceEnabled' => 'setIsVoiceEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'motd' => 'getMotd',
        'isFreeMove' => 'getIsFreeMove',
        'isRegistered' => 'getIsRegistered',
        'isVoiceEnabled' => 'getIsVoiceEnabled'
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
        $this->container['motd'] = isset($data['motd']) ? $data['motd'] : null;
        $this->container['isFreeMove'] = isset($data['isFreeMove']) ? $data['isFreeMove'] : null;
        $this->container['isRegistered'] = isset($data['isRegistered']) ? $data['isRegistered'] : null;
        $this->container['isVoiceEnabled'] = isset($data['isVoiceEnabled']) ? $data['isVoiceEnabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['motd'] === null) {
            $invalidProperties[] = "'motd' can't be null";
        }
        if ($this->container['isFreeMove'] === null) {
            $invalidProperties[] = "'isFreeMove' can't be null";
        }
        if ($this->container['isRegistered'] === null) {
            $invalidProperties[] = "'isRegistered' can't be null";
        }
        if ($this->container['isVoiceEnabled'] === null) {
            $invalidProperties[] = "'isVoiceEnabled' can't be null";
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

        if ($this->container['motd'] === null) {
            return false;
        }
        if ($this->container['isFreeMove'] === null) {
            return false;
        }
        if ($this->container['isRegistered'] === null) {
            return false;
        }
        if ($this->container['isVoiceEnabled'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets motd
     *
     * @return string
     */
    public function getMotd()
    {
        return $this->container['motd'];
    }

    /**
     * Sets motd
     *
     * @param string $motd Fleet MOTD in CCP flavoured HTML
     *
     * @return $this
     */
    public function setMotd($motd)
    {
        $this->container['motd'] = $motd;

        return $this;
    }

    /**
     * Gets isFreeMove
     *
     * @return bool
     */
    public function getIsFreeMove()
    {
        return $this->container['isFreeMove'];
    }

    /**
     * Sets isFreeMove
     *
     * @param bool $isFreeMove Is free-move enabled
     *
     * @return $this
     */
    public function setIsFreeMove($isFreeMove)
    {
        $this->container['isFreeMove'] = $isFreeMove;

        return $this;
    }

    /**
     * Gets isRegistered
     *
     * @return bool
     */
    public function getIsRegistered()
    {
        return $this->container['isRegistered'];
    }

    /**
     * Sets isRegistered
     *
     * @param bool $isRegistered Does the fleet have an active fleet advertisement
     *
     * @return $this
     */
    public function setIsRegistered($isRegistered)
    {
        $this->container['isRegistered'] = $isRegistered;

        return $this;
    }

    /**
     * Gets isVoiceEnabled
     *
     * @return bool
     */
    public function getIsVoiceEnabled()
    {
        return $this->container['isVoiceEnabled'];
    }

    /**
     * Sets isVoiceEnabled
     *
     * @param bool $isVoiceEnabled Is EVE Voice enabled
     *
     * @return $this
     */
    public function setIsVoiceEnabled($isVoiceEnabled)
    {
        $this->container['isVoiceEnabled'] = $isVoiceEnabled;

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


