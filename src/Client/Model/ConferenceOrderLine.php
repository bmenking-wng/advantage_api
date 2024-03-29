<?php
/**
 * ConferenceOrderLine
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
 * ConferenceOrderLine Class Doc Comment
 *
 * @category Class
 * @description Information about a conference (CEM) order line
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConferenceOrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConferenceOrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conference_code' => 'string',
        'conference_name' => 'string',
        'session_code' => 'string',
        'session_name' => 'string',
        'registration_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conference_code' => null,
        'conference_name' => null,
        'session_code' => null,
        'session_name' => null,
        'registration_id' => null
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
        'conference_code' => 'ConferenceCode',
        'conference_name' => 'ConferenceName',
        'session_code' => 'SessionCode',
        'session_name' => 'SessionName',
        'registration_id' => 'RegistrationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conference_code' => 'setConferenceCode',
        'conference_name' => 'setConferenceName',
        'session_code' => 'setSessionCode',
        'session_name' => 'setSessionName',
        'registration_id' => 'setRegistrationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conference_code' => 'getConferenceCode',
        'conference_name' => 'getConferenceName',
        'session_code' => 'getSessionCode',
        'session_name' => 'getSessionName',
        'registration_id' => 'getRegistrationId'
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
        $this->container['conference_code'] = isset($data['conference_code']) ? $data['conference_code'] : null;
        $this->container['conference_name'] = isset($data['conference_name']) ? $data['conference_name'] : null;
        $this->container['session_code'] = isset($data['session_code']) ? $data['session_code'] : null;
        $this->container['session_name'] = isset($data['session_name']) ? $data['session_name'] : null;
        $this->container['registration_id'] = isset($data['registration_id']) ? $data['registration_id'] : null;
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
     * Gets conference_code
     *
     * @return string
     */
    public function getConferenceCode()
    {
        return $this->container['conference_code'];
    }

    /**
     * Sets conference_code
     *
     * @param string $conference_code The identifier for the conference
     *
     * @return $this
     */
    public function setConferenceCode($conference_code)
    {
        $this->container['conference_code'] = $conference_code;

        return $this;
    }

    /**
     * Gets conference_name
     *
     * @return string
     */
    public function getConferenceName()
    {
        return $this->container['conference_name'];
    }

    /**
     * Sets conference_name
     *
     * @param string $conference_name Name of the conference
     *
     * @return $this
     */
    public function setConferenceName($conference_name)
    {
        $this->container['conference_name'] = $conference_name;

        return $this;
    }

    /**
     * Gets session_code
     *
     * @return string
     */
    public function getSessionCode()
    {
        return $this->container['session_code'];
    }

    /**
     * Sets session_code
     *
     * @param string $session_code The identifier for a specific event within a conference.
     *
     * @return $this
     */
    public function setSessionCode($session_code)
    {
        $this->container['session_code'] = $session_code;

        return $this;
    }

    /**
     * Gets session_name
     *
     * @return string
     */
    public function getSessionName()
    {
        return $this->container['session_name'];
    }

    /**
     * Sets session_name
     *
     * @param string $session_name The name of the conference session.
     *
     * @return $this
     */
    public function setSessionName($session_name)
    {
        $this->container['session_name'] = $session_name;

        return $this;
    }

    /**
     * Gets registration_id
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->container['registration_id'];
    }

    /**
     * Sets registration_id
     *
     * @param string $registration_id Conference registration Id
     *
     * @return $this
     */
    public function setRegistrationId($registration_id)
    {
        $this->container['registration_id'] = $registration_id;

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


