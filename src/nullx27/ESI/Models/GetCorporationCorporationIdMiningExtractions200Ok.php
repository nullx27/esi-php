<?php
/**
 * GetCorporationCorporationIdMiningExtractions200Ok
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
 * GetCorporationCorporationIdMiningExtractions200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationCorporationIdMiningExtractions200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporation_corporation_id_mining_extractions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'structureId' => 'int',
        'moonId' => 'int',
        'extractionStartTime' => '\DateTime',
        'chunkArrivalTime' => '\DateTime',
        'naturalDecayTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'structureId' => 'int64',
        'moonId' => 'int32',
        'extractionStartTime' => 'date-time',
        'chunkArrivalTime' => 'date-time',
        'naturalDecayTime' => 'date-time'
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
        'structureId' => 'structure_id',
        'moonId' => 'moon_id',
        'extractionStartTime' => 'extraction_start_time',
        'chunkArrivalTime' => 'chunk_arrival_time',
        'naturalDecayTime' => 'natural_decay_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'structureId' => 'setStructureId',
        'moonId' => 'setMoonId',
        'extractionStartTime' => 'setExtractionStartTime',
        'chunkArrivalTime' => 'setChunkArrivalTime',
        'naturalDecayTime' => 'setNaturalDecayTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'structureId' => 'getStructureId',
        'moonId' => 'getMoonId',
        'extractionStartTime' => 'getExtractionStartTime',
        'chunkArrivalTime' => 'getChunkArrivalTime',
        'naturalDecayTime' => 'getNaturalDecayTime'
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
        $this->container['structureId'] = isset($data['structureId']) ? $data['structureId'] : null;
        $this->container['moonId'] = isset($data['moonId']) ? $data['moonId'] : null;
        $this->container['extractionStartTime'] = isset($data['extractionStartTime']) ? $data['extractionStartTime'] : null;
        $this->container['chunkArrivalTime'] = isset($data['chunkArrivalTime']) ? $data['chunkArrivalTime'] : null;
        $this->container['naturalDecayTime'] = isset($data['naturalDecayTime']) ? $data['naturalDecayTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['structureId'] === null) {
            $invalidProperties[] = "'structureId' can't be null";
        }
        if ($this->container['moonId'] === null) {
            $invalidProperties[] = "'moonId' can't be null";
        }
        if ($this->container['extractionStartTime'] === null) {
            $invalidProperties[] = "'extractionStartTime' can't be null";
        }
        if ($this->container['chunkArrivalTime'] === null) {
            $invalidProperties[] = "'chunkArrivalTime' can't be null";
        }
        if ($this->container['naturalDecayTime'] === null) {
            $invalidProperties[] = "'naturalDecayTime' can't be null";
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

        if ($this->container['structureId'] === null) {
            return false;
        }
        if ($this->container['moonId'] === null) {
            return false;
        }
        if ($this->container['extractionStartTime'] === null) {
            return false;
        }
        if ($this->container['chunkArrivalTime'] === null) {
            return false;
        }
        if ($this->container['naturalDecayTime'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets structureId
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structureId'];
    }

    /**
     * Sets structureId
     *
     * @param int $structureId structure_id integer
     *
     * @return $this
     */
    public function setStructureId($structureId)
    {
        $this->container['structureId'] = $structureId;

        return $this;
    }

    /**
     * Gets moonId
     *
     * @return int
     */
    public function getMoonId()
    {
        return $this->container['moonId'];
    }

    /**
     * Sets moonId
     *
     * @param int $moonId moon_id integer
     *
     * @return $this
     */
    public function setMoonId($moonId)
    {
        $this->container['moonId'] = $moonId;

        return $this;
    }

    /**
     * Gets extractionStartTime
     *
     * @return \DateTime
     */
    public function getExtractionStartTime()
    {
        return $this->container['extractionStartTime'];
    }

    /**
     * Sets extractionStartTime
     *
     * @param \DateTime $extractionStartTime The time at which the current extraction was initiated.
     *
     * @return $this
     */
    public function setExtractionStartTime($extractionStartTime)
    {
        $this->container['extractionStartTime'] = $extractionStartTime;

        return $this;
    }

    /**
     * Gets chunkArrivalTime
     *
     * @return \DateTime
     */
    public function getChunkArrivalTime()
    {
        return $this->container['chunkArrivalTime'];
    }

    /**
     * Sets chunkArrivalTime
     *
     * @param \DateTime $chunkArrivalTime The time at which the chunk being extracted will arrive and can be fractured by the moon mining drill.
     *
     * @return $this
     */
    public function setChunkArrivalTime($chunkArrivalTime)
    {
        $this->container['chunkArrivalTime'] = $chunkArrivalTime;

        return $this;
    }

    /**
     * Gets naturalDecayTime
     *
     * @return \DateTime
     */
    public function getNaturalDecayTime()
    {
        return $this->container['naturalDecayTime'];
    }

    /**
     * Sets naturalDecayTime
     *
     * @param \DateTime $naturalDecayTime The time at which the chunk being extracted will naturally fracture if it is not first fractured by the moon mining drill.
     *
     * @return $this
     */
    public function setNaturalDecayTime($naturalDecayTime)
    {
        $this->container['naturalDecayTime'] = $naturalDecayTime;

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


