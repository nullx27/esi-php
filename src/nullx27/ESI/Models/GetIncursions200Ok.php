<?php
/**
 * GetIncursions200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27ESI
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

namespace nullx27ESI\nullx27\ESI\Models;

use \ArrayAccess;
use \nullx27ESI\ObjectSerializer;

/**
 * GetIncursions200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetIncursions200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_incursions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'state' => 'string',
        'influence' => 'float',
        'hasBoss' => 'bool',
        'factionId' => 'int',
        'constellationId' => 'int',
        'stagingSolarSystemId' => 'int',
        'infestedSolarSystems' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'state' => null,
        'influence' => 'float',
        'hasBoss' => null,
        'factionId' => 'int32',
        'constellationId' => 'int32',
        'stagingSolarSystemId' => 'int32',
        'infestedSolarSystems' => 'int32'
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
        'type' => 'type',
        'state' => 'state',
        'influence' => 'influence',
        'hasBoss' => 'has_boss',
        'factionId' => 'faction_id',
        'constellationId' => 'constellation_id',
        'stagingSolarSystemId' => 'staging_solar_system_id',
        'infestedSolarSystems' => 'infested_solar_systems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'state' => 'setState',
        'influence' => 'setInfluence',
        'hasBoss' => 'setHasBoss',
        'factionId' => 'setFactionId',
        'constellationId' => 'setConstellationId',
        'stagingSolarSystemId' => 'setStagingSolarSystemId',
        'infestedSolarSystems' => 'setInfestedSolarSystems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'state' => 'getState',
        'influence' => 'getInfluence',
        'hasBoss' => 'getHasBoss',
        'factionId' => 'getFactionId',
        'constellationId' => 'getConstellationId',
        'stagingSolarSystemId' => 'getStagingSolarSystemId',
        'infestedSolarSystems' => 'getInfestedSolarSystems'
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

    const STATE_WITHDRAWING = 'withdrawing';
    const STATE_MOBILIZING = 'mobilizing';
    const STATE_ESTABLISHED = 'established';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WITHDRAWING,
            self::STATE_MOBILIZING,
            self::STATE_ESTABLISHED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['influence'] = isset($data['influence']) ? $data['influence'] : null;
        $this->container['hasBoss'] = isset($data['hasBoss']) ? $data['hasBoss'] : null;
        $this->container['factionId'] = isset($data['factionId']) ? $data['factionId'] : null;
        $this->container['constellationId'] = isset($data['constellationId']) ? $data['constellationId'] : null;
        $this->container['stagingSolarSystemId'] = isset($data['stagingSolarSystemId']) ? $data['stagingSolarSystemId'] : null;
        $this->container['infestedSolarSystems'] = isset($data['infestedSolarSystems']) ? $data['infestedSolarSystems'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['influence'] === null) {
            $invalidProperties[] = "'influence' can't be null";
        }
        if ($this->container['hasBoss'] === null) {
            $invalidProperties[] = "'hasBoss' can't be null";
        }
        if ($this->container['factionId'] === null) {
            $invalidProperties[] = "'factionId' can't be null";
        }
        if ($this->container['constellationId'] === null) {
            $invalidProperties[] = "'constellationId' can't be null";
        }
        if ($this->container['stagingSolarSystemId'] === null) {
            $invalidProperties[] = "'stagingSolarSystemId' can't be null";
        }
        if ($this->container['infestedSolarSystems'] === null) {
            $invalidProperties[] = "'infestedSolarSystems' can't be null";
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

        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            return false;
        }
        if ($this->container['influence'] === null) {
            return false;
        }
        if ($this->container['hasBoss'] === null) {
            return false;
        }
        if ($this->container['factionId'] === null) {
            return false;
        }
        if ($this->container['constellationId'] === null) {
            return false;
        }
        if ($this->container['stagingSolarSystemId'] === null) {
            return false;
        }
        if ($this->container['infestedSolarSystems'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of this incursion
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state of this incursion
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets influence
     *
     * @return float
     */
    public function getInfluence()
    {
        return $this->container['influence'];
    }

    /**
     * Sets influence
     *
     * @param float $influence Influence of this incursion as a float from 0 to 1
     *
     * @return $this
     */
    public function setInfluence($influence)
    {
        $this->container['influence'] = $influence;

        return $this;
    }

    /**
     * Gets hasBoss
     *
     * @return bool
     */
    public function getHasBoss()
    {
        return $this->container['hasBoss'];
    }

    /**
     * Sets hasBoss
     *
     * @param bool $hasBoss Whether the final encounter has boss or not
     *
     * @return $this
     */
    public function setHasBoss($hasBoss)
    {
        $this->container['hasBoss'] = $hasBoss;

        return $this;
    }

    /**
     * Gets factionId
     *
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['factionId'];
    }

    /**
     * Sets factionId
     *
     * @param int $factionId The attacking faction's id
     *
     * @return $this
     */
    public function setFactionId($factionId)
    {
        $this->container['factionId'] = $factionId;

        return $this;
    }

    /**
     * Gets constellationId
     *
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellationId'];
    }

    /**
     * Sets constellationId
     *
     * @param int $constellationId The constellation id in which this incursion takes place
     *
     * @return $this
     */
    public function setConstellationId($constellationId)
    {
        $this->container['constellationId'] = $constellationId;

        return $this;
    }

    /**
     * Gets stagingSolarSystemId
     *
     * @return int
     */
    public function getStagingSolarSystemId()
    {
        return $this->container['stagingSolarSystemId'];
    }

    /**
     * Sets stagingSolarSystemId
     *
     * @param int $stagingSolarSystemId Staging solar system for this incursion
     *
     * @return $this
     */
    public function setStagingSolarSystemId($stagingSolarSystemId)
    {
        $this->container['stagingSolarSystemId'] = $stagingSolarSystemId;

        return $this;
    }

    /**
     * Gets infestedSolarSystems
     *
     * @return int[]
     */
    public function getInfestedSolarSystems()
    {
        return $this->container['infestedSolarSystems'];
    }

    /**
     * Sets infestedSolarSystems
     *
     * @param int[] $infestedSolarSystems A list of infested solar system ids that are a part of this incursion
     *
     * @return $this
     */
    public function setInfestedSolarSystems($infestedSolarSystems)
    {
        $this->container['infestedSolarSystems'] = $infestedSolarSystems;

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

