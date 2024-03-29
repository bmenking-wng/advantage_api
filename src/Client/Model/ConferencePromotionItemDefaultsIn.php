<?php
/**
 * ConferencePromotionItemDefaultsIn
 *
 * PHP version 5
 *
 * @category Class
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Advantage.Rest.Services
 *
 * No description provided (generated by Advantage Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Advantage Codegen version: 2.4.20
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Advantage\Client\Model;

use \ArrayAccess;
use \Advantage\Client\ObjectSerializer;

/**
 * ConferencePromotionItemDefaultsIn Class Doc Comment
 *
 * @category Class
 * @description Information for a promotion choice for a conference
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConferencePromotionItemDefaultsIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConferencePromotionItemDefaultsIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location_code' => 'string',
        'bill_by' => 'string',
        'sessions' => '\Advantage\Client\Model\ConferencePromotionChoiceSessionIn[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location_code' => null,
        'bill_by' => null,
        'sessions' => null
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
        'location_code' => 'LocationCode',
        'bill_by' => 'BillBy',
        'sessions' => 'Sessions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_code' => 'setLocationCode',
        'bill_by' => 'setBillBy',
        'sessions' => 'setSessions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_code' => 'getLocationCode',
        'bill_by' => 'getBillBy',
        'sessions' => 'getSessions'
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

    const BILL_BY_REGISTRATION = 'Registration';
    const BILL_BY_ATTENDEE = 'Attendee';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillByAllowableValues()
    {
        return [
            self::BILL_BY_REGISTRATION,
            self::BILL_BY_ATTENDEE,
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
        $this->container['location_code'] = isset($data['location_code']) ? $data['location_code'] : null;
        $this->container['bill_by'] = isset($data['bill_by']) ? $data['bill_by'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBillByAllowableValues();
        if (!is_null($this->container['bill_by']) && !in_array($this->container['bill_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bill_by', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets location_code
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->container['location_code'];
    }

    /**
     * Sets location_code
     *
     * @param string $location_code The conference location
     *
     * @return $this
     */
    public function setLocationCode($location_code)
    {
        $this->container['location_code'] = $location_code;

        return $this;
    }

    /**
     * Gets bill_by
     *
     * @return string
     */
    public function getBillBy()
    {
        return $this->container['bill_by'];
    }

    /**
     * Sets bill_by
     *
     * @param string $bill_by BillBy method for the conference. R - Registration, A - Attendee
     *
     * @return $this
     */
    public function setBillBy($bill_by)
    {
        $allowedValues = $this->getBillByAllowableValues();
        if (!is_null($bill_by) && !in_array($bill_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bill_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bill_by'] = $bill_by;

        return $this;
    }

    /**
     * Gets sessions
     *
     * @return \Advantage\Client\Model\ConferencePromotionChoiceSessionIn[]
     */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
     * Sets sessions
     *
     * @param \Advantage\Client\Model\ConferencePromotionChoiceSessionIn[] $sessions A list of sessions associated with this choice
     *
     * @return $this
     */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


