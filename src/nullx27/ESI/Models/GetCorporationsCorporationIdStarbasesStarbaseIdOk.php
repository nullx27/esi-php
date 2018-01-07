<?php
/**
 * GetCorporationsCorporationIdStarbasesStarbaseIdOk
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
 * GetCorporationsCorporationIdStarbasesStarbaseIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdStarbasesStarbaseIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_starbases_starbase_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fuelBayView' => 'string',
        'fuelBayTake' => 'string',
        'anchor' => 'string',
        'unanchor' => 'string',
        'online' => 'string',
        'offline' => 'string',
        'allowCorporationMembers' => 'bool',
        'allowAllianceMembers' => 'bool',
        'useAllianceStandings' => 'bool',
        'attackStandingThreshold' => 'float',
        'attackSecurityStatusThreshold' => 'float',
        'attackIfOtherSecurityStatusDropping' => 'bool',
        'attackIfAtWar' => 'bool',
        'fuels' => '\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStarbasesStarbaseIdFuel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fuelBayView' => null,
        'fuelBayTake' => null,
        'anchor' => null,
        'unanchor' => null,
        'online' => null,
        'offline' => null,
        'allowCorporationMembers' => null,
        'allowAllianceMembers' => null,
        'useAllianceStandings' => null,
        'attackStandingThreshold' => 'float',
        'attackSecurityStatusThreshold' => 'float',
        'attackIfOtherSecurityStatusDropping' => null,
        'attackIfAtWar' => null,
        'fuels' => null
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
        'fuelBayView' => 'fuel_bay_view',
        'fuelBayTake' => 'fuel_bay_take',
        'anchor' => 'anchor',
        'unanchor' => 'unanchor',
        'online' => 'online',
        'offline' => 'offline',
        'allowCorporationMembers' => 'allow_corporation_members',
        'allowAllianceMembers' => 'allow_alliance_members',
        'useAllianceStandings' => 'use_alliance_standings',
        'attackStandingThreshold' => 'attack_standing_threshold',
        'attackSecurityStatusThreshold' => 'attack_security_status_threshold',
        'attackIfOtherSecurityStatusDropping' => 'attack_if_other_security_status_dropping',
        'attackIfAtWar' => 'attack_if_at_war',
        'fuels' => 'fuels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fuelBayView' => 'setFuelBayView',
        'fuelBayTake' => 'setFuelBayTake',
        'anchor' => 'setAnchor',
        'unanchor' => 'setUnanchor',
        'online' => 'setOnline',
        'offline' => 'setOffline',
        'allowCorporationMembers' => 'setAllowCorporationMembers',
        'allowAllianceMembers' => 'setAllowAllianceMembers',
        'useAllianceStandings' => 'setUseAllianceStandings',
        'attackStandingThreshold' => 'setAttackStandingThreshold',
        'attackSecurityStatusThreshold' => 'setAttackSecurityStatusThreshold',
        'attackIfOtherSecurityStatusDropping' => 'setAttackIfOtherSecurityStatusDropping',
        'attackIfAtWar' => 'setAttackIfAtWar',
        'fuels' => 'setFuels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fuelBayView' => 'getFuelBayView',
        'fuelBayTake' => 'getFuelBayTake',
        'anchor' => 'getAnchor',
        'unanchor' => 'getUnanchor',
        'online' => 'getOnline',
        'offline' => 'getOffline',
        'allowCorporationMembers' => 'getAllowCorporationMembers',
        'allowAllianceMembers' => 'getAllowAllianceMembers',
        'useAllianceStandings' => 'getUseAllianceStandings',
        'attackStandingThreshold' => 'getAttackStandingThreshold',
        'attackSecurityStatusThreshold' => 'getAttackSecurityStatusThreshold',
        'attackIfOtherSecurityStatusDropping' => 'getAttackIfOtherSecurityStatusDropping',
        'attackIfAtWar' => 'getAttackIfAtWar',
        'fuels' => 'getFuels'
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

    const FUEL_BAY_VIEW_ALLIANCE_MEMBER = 'alliance_member';
    const FUEL_BAY_VIEW_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const FUEL_BAY_VIEW_CORPORATION_MEMBER = 'corporation_member';
    const FUEL_BAY_VIEW_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const FUEL_BAY_TAKE_ALLIANCE_MEMBER = 'alliance_member';
    const FUEL_BAY_TAKE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const FUEL_BAY_TAKE_CORPORATION_MEMBER = 'corporation_member';
    const FUEL_BAY_TAKE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const ANCHOR_ALLIANCE_MEMBER = 'alliance_member';
    const ANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const ANCHOR_CORPORATION_MEMBER = 'corporation_member';
    const ANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const UNANCHOR_ALLIANCE_MEMBER = 'alliance_member';
    const UNANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const UNANCHOR_CORPORATION_MEMBER = 'corporation_member';
    const UNANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const ONLINE_ALLIANCE_MEMBER = 'alliance_member';
    const ONLINE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const ONLINE_CORPORATION_MEMBER = 'corporation_member';
    const ONLINE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const OFFLINE_ALLIANCE_MEMBER = 'alliance_member';
    const OFFLINE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const OFFLINE_CORPORATION_MEMBER = 'corporation_member';
    const OFFLINE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFuelBayViewAllowableValues()
    {
        return [
            self::FUEL_BAY_VIEW_ALLIANCE_MEMBER,
            self::FUEL_BAY_VIEW_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::FUEL_BAY_VIEW_CORPORATION_MEMBER,
            self::FUEL_BAY_VIEW_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFuelBayTakeAllowableValues()
    {
        return [
            self::FUEL_BAY_TAKE_ALLIANCE_MEMBER,
            self::FUEL_BAY_TAKE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::FUEL_BAY_TAKE_CORPORATION_MEMBER,
            self::FUEL_BAY_TAKE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnchorAllowableValues()
    {
        return [
            self::ANCHOR_ALLIANCE_MEMBER,
            self::ANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::ANCHOR_CORPORATION_MEMBER,
            self::ANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnanchorAllowableValues()
    {
        return [
            self::UNANCHOR_ALLIANCE_MEMBER,
            self::UNANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::UNANCHOR_CORPORATION_MEMBER,
            self::UNANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnlineAllowableValues()
    {
        return [
            self::ONLINE_ALLIANCE_MEMBER,
            self::ONLINE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::ONLINE_CORPORATION_MEMBER,
            self::ONLINE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOfflineAllowableValues()
    {
        return [
            self::OFFLINE_ALLIANCE_MEMBER,
            self::OFFLINE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::OFFLINE_CORPORATION_MEMBER,
            self::OFFLINE_STARBASE_FUEL_TECHNICIAN_ROLE,
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
        $this->container['fuelBayView'] = isset($data['fuelBayView']) ? $data['fuelBayView'] : null;
        $this->container['fuelBayTake'] = isset($data['fuelBayTake']) ? $data['fuelBayTake'] : null;
        $this->container['anchor'] = isset($data['anchor']) ? $data['anchor'] : null;
        $this->container['unanchor'] = isset($data['unanchor']) ? $data['unanchor'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['offline'] = isset($data['offline']) ? $data['offline'] : null;
        $this->container['allowCorporationMembers'] = isset($data['allowCorporationMembers']) ? $data['allowCorporationMembers'] : null;
        $this->container['allowAllianceMembers'] = isset($data['allowAllianceMembers']) ? $data['allowAllianceMembers'] : null;
        $this->container['useAllianceStandings'] = isset($data['useAllianceStandings']) ? $data['useAllianceStandings'] : null;
        $this->container['attackStandingThreshold'] = isset($data['attackStandingThreshold']) ? $data['attackStandingThreshold'] : null;
        $this->container['attackSecurityStatusThreshold'] = isset($data['attackSecurityStatusThreshold']) ? $data['attackSecurityStatusThreshold'] : null;
        $this->container['attackIfOtherSecurityStatusDropping'] = isset($data['attackIfOtherSecurityStatusDropping']) ? $data['attackIfOtherSecurityStatusDropping'] : null;
        $this->container['attackIfAtWar'] = isset($data['attackIfAtWar']) ? $data['attackIfAtWar'] : null;
        $this->container['fuels'] = isset($data['fuels']) ? $data['fuels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fuelBayView'] === null) {
            $invalidProperties[] = "'fuelBayView' can't be null";
        }
        $allowedValues = $this->getFuelBayViewAllowableValues();
        if (!in_array($this->container['fuelBayView'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fuelBayView', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fuelBayTake'] === null) {
            $invalidProperties[] = "'fuelBayTake' can't be null";
        }
        $allowedValues = $this->getFuelBayTakeAllowableValues();
        if (!in_array($this->container['fuelBayTake'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fuelBayTake', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['anchor'] === null) {
            $invalidProperties[] = "'anchor' can't be null";
        }
        $allowedValues = $this->getAnchorAllowableValues();
        if (!in_array($this->container['anchor'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'anchor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['unanchor'] === null) {
            $invalidProperties[] = "'unanchor' can't be null";
        }
        $allowedValues = $this->getUnanchorAllowableValues();
        if (!in_array($this->container['unanchor'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unanchor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['online'] === null) {
            $invalidProperties[] = "'online' can't be null";
        }
        $allowedValues = $this->getOnlineAllowableValues();
        if (!in_array($this->container['online'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'online', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['offline'] === null) {
            $invalidProperties[] = "'offline' can't be null";
        }
        $allowedValues = $this->getOfflineAllowableValues();
        if (!in_array($this->container['offline'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'offline', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['allowCorporationMembers'] === null) {
            $invalidProperties[] = "'allowCorporationMembers' can't be null";
        }
        if ($this->container['allowAllianceMembers'] === null) {
            $invalidProperties[] = "'allowAllianceMembers' can't be null";
        }
        if ($this->container['useAllianceStandings'] === null) {
            $invalidProperties[] = "'useAllianceStandings' can't be null";
        }
        if ($this->container['attackIfOtherSecurityStatusDropping'] === null) {
            $invalidProperties[] = "'attackIfOtherSecurityStatusDropping' can't be null";
        }
        if ($this->container['attackIfAtWar'] === null) {
            $invalidProperties[] = "'attackIfAtWar' can't be null";
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

        if ($this->container['fuelBayView'] === null) {
            return false;
        }
        $allowedValues = $this->getFuelBayViewAllowableValues();
        if (!in_array($this->container['fuelBayView'], $allowedValues)) {
            return false;
        }
        if ($this->container['fuelBayTake'] === null) {
            return false;
        }
        $allowedValues = $this->getFuelBayTakeAllowableValues();
        if (!in_array($this->container['fuelBayTake'], $allowedValues)) {
            return false;
        }
        if ($this->container['anchor'] === null) {
            return false;
        }
        $allowedValues = $this->getAnchorAllowableValues();
        if (!in_array($this->container['anchor'], $allowedValues)) {
            return false;
        }
        if ($this->container['unanchor'] === null) {
            return false;
        }
        $allowedValues = $this->getUnanchorAllowableValues();
        if (!in_array($this->container['unanchor'], $allowedValues)) {
            return false;
        }
        if ($this->container['online'] === null) {
            return false;
        }
        $allowedValues = $this->getOnlineAllowableValues();
        if (!in_array($this->container['online'], $allowedValues)) {
            return false;
        }
        if ($this->container['offline'] === null) {
            return false;
        }
        $allowedValues = $this->getOfflineAllowableValues();
        if (!in_array($this->container['offline'], $allowedValues)) {
            return false;
        }
        if ($this->container['allowCorporationMembers'] === null) {
            return false;
        }
        if ($this->container['allowAllianceMembers'] === null) {
            return false;
        }
        if ($this->container['useAllianceStandings'] === null) {
            return false;
        }
        if ($this->container['attackIfOtherSecurityStatusDropping'] === null) {
            return false;
        }
        if ($this->container['attackIfAtWar'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets fuelBayView
     *
     * @return string
     */
    public function getFuelBayView()
    {
        return $this->container['fuelBayView'];
    }

    /**
     * Sets fuelBayView
     *
     * @param string $fuelBayView Who can view the starbase (POS)'s fule bay. Characters either need to have required role or belong to the starbase (POS) owner's corporation or alliance, as described by the enum, all other access settings follows the same scheme
     *
     * @return $this
     */
    public function setFuelBayView($fuelBayView)
    {
        $allowedValues = $this->getFuelBayViewAllowableValues();
        if (!in_array($fuelBayView, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fuelBayView', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fuelBayView'] = $fuelBayView;

        return $this;
    }

    /**
     * Gets fuelBayTake
     *
     * @return string
     */
    public function getFuelBayTake()
    {
        return $this->container['fuelBayTake'];
    }

    /**
     * Sets fuelBayTake
     *
     * @param string $fuelBayTake Who can take fuel blocks out of the starbase (POS)'s fuel bay
     *
     * @return $this
     */
    public function setFuelBayTake($fuelBayTake)
    {
        $allowedValues = $this->getFuelBayTakeAllowableValues();
        if (!in_array($fuelBayTake, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fuelBayTake', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fuelBayTake'] = $fuelBayTake;

        return $this;
    }

    /**
     * Gets anchor
     *
     * @return string
     */
    public function getAnchor()
    {
        return $this->container['anchor'];
    }

    /**
     * Sets anchor
     *
     * @param string $anchor Who can anchor starbase (POS) and its structures
     *
     * @return $this
     */
    public function setAnchor($anchor)
    {
        $allowedValues = $this->getAnchorAllowableValues();
        if (!in_array($anchor, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'anchor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['anchor'] = $anchor;

        return $this;
    }

    /**
     * Gets unanchor
     *
     * @return string
     */
    public function getUnanchor()
    {
        return $this->container['unanchor'];
    }

    /**
     * Sets unanchor
     *
     * @param string $unanchor Who can unanchor starbase (POS) and its structures
     *
     * @return $this
     */
    public function setUnanchor($unanchor)
    {
        $allowedValues = $this->getUnanchorAllowableValues();
        if (!in_array($unanchor, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unanchor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unanchor'] = $unanchor;

        return $this;
    }

    /**
     * Gets online
     *
     * @return string
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param string $online Who can online starbase (POS) and its structures
     *
     * @return $this
     */
    public function setOnline($online)
    {
        $allowedValues = $this->getOnlineAllowableValues();
        if (!in_array($online, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'online', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets offline
     *
     * @return string
     */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
     * Sets offline
     *
     * @param string $offline Who can offline starbase (POS) and its structures
     *
     * @return $this
     */
    public function setOffline($offline)
    {
        $allowedValues = $this->getOfflineAllowableValues();
        if (!in_array($offline, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'offline', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['offline'] = $offline;

        return $this;
    }

    /**
     * Gets allowCorporationMembers
     *
     * @return bool
     */
    public function getAllowCorporationMembers()
    {
        return $this->container['allowCorporationMembers'];
    }

    /**
     * Sets allowCorporationMembers
     *
     * @param bool $allowCorporationMembers allow_corporation_members boolean
     *
     * @return $this
     */
    public function setAllowCorporationMembers($allowCorporationMembers)
    {
        $this->container['allowCorporationMembers'] = $allowCorporationMembers;

        return $this;
    }

    /**
     * Gets allowAllianceMembers
     *
     * @return bool
     */
    public function getAllowAllianceMembers()
    {
        return $this->container['allowAllianceMembers'];
    }

    /**
     * Sets allowAllianceMembers
     *
     * @param bool $allowAllianceMembers allow_alliance_members boolean
     *
     * @return $this
     */
    public function setAllowAllianceMembers($allowAllianceMembers)
    {
        $this->container['allowAllianceMembers'] = $allowAllianceMembers;

        return $this;
    }

    /**
     * Gets useAllianceStandings
     *
     * @return bool
     */
    public function getUseAllianceStandings()
    {
        return $this->container['useAllianceStandings'];
    }

    /**
     * Sets useAllianceStandings
     *
     * @param bool $useAllianceStandings True if the starbase (POS) is using alliance standings, otherwise using corporation's
     *
     * @return $this
     */
    public function setUseAllianceStandings($useAllianceStandings)
    {
        $this->container['useAllianceStandings'] = $useAllianceStandings;

        return $this;
    }

    /**
     * Gets attackStandingThreshold
     *
     * @return float
     */
    public function getAttackStandingThreshold()
    {
        return $this->container['attackStandingThreshold'];
    }

    /**
     * Sets attackStandingThreshold
     *
     * @param float $attackStandingThreshold Starbase (POS) will attack if target's standing is lower than this value
     *
     * @return $this
     */
    public function setAttackStandingThreshold($attackStandingThreshold)
    {
        $this->container['attackStandingThreshold'] = $attackStandingThreshold;

        return $this;
    }

    /**
     * Gets attackSecurityStatusThreshold
     *
     * @return float
     */
    public function getAttackSecurityStatusThreshold()
    {
        return $this->container['attackSecurityStatusThreshold'];
    }

    /**
     * Sets attackSecurityStatusThreshold
     *
     * @param float $attackSecurityStatusThreshold Starbase (POS) will attack if target's security standing is lower than this value
     *
     * @return $this
     */
    public function setAttackSecurityStatusThreshold($attackSecurityStatusThreshold)
    {
        $this->container['attackSecurityStatusThreshold'] = $attackSecurityStatusThreshold;

        return $this;
    }

    /**
     * Gets attackIfOtherSecurityStatusDropping
     *
     * @return bool
     */
    public function getAttackIfOtherSecurityStatusDropping()
    {
        return $this->container['attackIfOtherSecurityStatusDropping'];
    }

    /**
     * Sets attackIfOtherSecurityStatusDropping
     *
     * @param bool $attackIfOtherSecurityStatusDropping attack_if_other_security_status_dropping boolean
     *
     * @return $this
     */
    public function setAttackIfOtherSecurityStatusDropping($attackIfOtherSecurityStatusDropping)
    {
        $this->container['attackIfOtherSecurityStatusDropping'] = $attackIfOtherSecurityStatusDropping;

        return $this;
    }

    /**
     * Gets attackIfAtWar
     *
     * @return bool
     */
    public function getAttackIfAtWar()
    {
        return $this->container['attackIfAtWar'];
    }

    /**
     * Sets attackIfAtWar
     *
     * @param bool $attackIfAtWar attack_if_at_war boolean
     *
     * @return $this
     */
    public function setAttackIfAtWar($attackIfAtWar)
    {
        $this->container['attackIfAtWar'] = $attackIfAtWar;

        return $this;
    }

    /**
     * Gets fuels
     *
     * @return \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStarbasesStarbaseIdFuel[]
     */
    public function getFuels()
    {
        return $this->container['fuels'];
    }

    /**
     * Sets fuels
     *
     * @param \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStarbasesStarbaseIdFuel[] $fuels Fuel blocks and other things that will be consumed when operating a starbase (POS)
     *
     * @return $this
     */
    public function setFuels($fuels)
    {
        $this->container['fuels'] = $fuels;

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


