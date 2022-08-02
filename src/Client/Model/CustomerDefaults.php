<?php
/**
 * CustomerDefaults
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
 * CustomerDefaults Class Doc Comment
 *
 * @category Class
 * @description Information for customer defaults settings. These are applied automatically when a customer is created unless they are overridden.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDefaults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'promote_by_phone' => 'string',
        'promote_by_mail' => 'string',
        'promote_by_email' => 'string',
        'promote_by_sms' => 'string',
        'promote_by_fax' => 'string',
        'preferred_communication_method_code' => 'string',
        'default_address_code' => 'string',
        'promote' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'promote_by_phone' => null,
        'promote_by_mail' => null,
        'promote_by_email' => null,
        'promote_by_sms' => null,
        'promote_by_fax' => null,
        'preferred_communication_method_code' => null,
        'default_address_code' => null,
        'promote' => null
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
        'promote_by_phone' => 'PromoteByPhone',
        'promote_by_mail' => 'PromoteByMail',
        'promote_by_email' => 'PromoteByEmail',
        'promote_by_sms' => 'PromoteBySms',
        'promote_by_fax' => 'PromoteByFax',
        'preferred_communication_method_code' => 'PreferredCommunicationMethodCode',
        'default_address_code' => 'DefaultAddressCode',
        'promote' => 'Promote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'promote_by_phone' => 'setPromoteByPhone',
        'promote_by_mail' => 'setPromoteByMail',
        'promote_by_email' => 'setPromoteByEmail',
        'promote_by_sms' => 'setPromoteBySms',
        'promote_by_fax' => 'setPromoteByFax',
        'preferred_communication_method_code' => 'setPreferredCommunicationMethodCode',
        'default_address_code' => 'setDefaultAddressCode',
        'promote' => 'setPromote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'promote_by_phone' => 'getPromoteByPhone',
        'promote_by_mail' => 'getPromoteByMail',
        'promote_by_email' => 'getPromoteByEmail',
        'promote_by_sms' => 'getPromoteBySms',
        'promote_by_fax' => 'getPromoteByFax',
        'preferred_communication_method_code' => 'getPreferredCommunicationMethodCode',
        'default_address_code' => 'getDefaultAddressCode',
        'promote' => 'getPromote'
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
        $this->container['promote_by_phone'] = isset($data['promote_by_phone']) ? $data['promote_by_phone'] : null;
        $this->container['promote_by_mail'] = isset($data['promote_by_mail']) ? $data['promote_by_mail'] : null;
        $this->container['promote_by_email'] = isset($data['promote_by_email']) ? $data['promote_by_email'] : null;
        $this->container['promote_by_sms'] = isset($data['promote_by_sms']) ? $data['promote_by_sms'] : null;
        $this->container['promote_by_fax'] = isset($data['promote_by_fax']) ? $data['promote_by_fax'] : null;
        $this->container['preferred_communication_method_code'] = isset($data['preferred_communication_method_code']) ? $data['preferred_communication_method_code'] : null;
        $this->container['default_address_code'] = isset($data['default_address_code']) ? $data['default_address_code'] : null;
        $this->container['promote'] = isset($data['promote']) ? $data['promote'] : null;
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
     * Gets promote_by_phone
     *
     * @return string
     */
    public function getPromoteByPhone()
    {
        return $this->container['promote_by_phone'];
    }

    /**
     * Sets promote_by_phone
     *
     * @param string $promote_by_phone Is it OK to promote to this customer by phone?
     *
     * @return $this
     */
    public function setPromoteByPhone($promote_by_phone)
    {
        $this->container['promote_by_phone'] = $promote_by_phone;

        return $this;
    }

    /**
     * Gets promote_by_mail
     *
     * @return string
     */
    public function getPromoteByMail()
    {
        return $this->container['promote_by_mail'];
    }

    /**
     * Sets promote_by_mail
     *
     * @param string $promote_by_mail Is it OK to promote to this customer by mail?
     *
     * @return $this
     */
    public function setPromoteByMail($promote_by_mail)
    {
        $this->container['promote_by_mail'] = $promote_by_mail;

        return $this;
    }

    /**
     * Gets promote_by_email
     *
     * @return string
     */
    public function getPromoteByEmail()
    {
        return $this->container['promote_by_email'];
    }

    /**
     * Sets promote_by_email
     *
     * @param string $promote_by_email Is it OK to promote to this customer by email?
     *
     * @return $this
     */
    public function setPromoteByEmail($promote_by_email)
    {
        $this->container['promote_by_email'] = $promote_by_email;

        return $this;
    }

    /**
     * Gets promote_by_sms
     *
     * @return string
     */
    public function getPromoteBySms()
    {
        return $this->container['promote_by_sms'];
    }

    /**
     * Sets promote_by_sms
     *
     * @param string $promote_by_sms Is it OK to promote to this customer by text message?
     *
     * @return $this
     */
    public function setPromoteBySms($promote_by_sms)
    {
        $this->container['promote_by_sms'] = $promote_by_sms;

        return $this;
    }

    /**
     * Gets promote_by_fax
     *
     * @return string
     */
    public function getPromoteByFax()
    {
        return $this->container['promote_by_fax'];
    }

    /**
     * Sets promote_by_fax
     *
     * @param string $promote_by_fax Is it OK to promote to this customer by fax?
     *
     * @return $this
     */
    public function setPromoteByFax($promote_by_fax)
    {
        $this->container['promote_by_fax'] = $promote_by_fax;

        return $this;
    }

    /**
     * Gets preferred_communication_method_code
     *
     * @return string
     */
    public function getPreferredCommunicationMethodCode()
    {
        return $this->container['preferred_communication_method_code'];
    }

    /**
     * Sets preferred_communication_method_code
     *
     * @param string $preferred_communication_method_code This customer type's preferred communication method.
     *
     * @return $this
     */
    public function setPreferredCommunicationMethodCode($preferred_communication_method_code)
    {
        $this->container['preferred_communication_method_code'] = $preferred_communication_method_code;

        return $this;
    }

    /**
     * Gets default_address_code
     *
     * @return string
     */
    public function getDefaultAddressCode()
    {
        return $this->container['default_address_code'];
    }

    /**
     * Sets default_address_code
     *
     * @param string $default_address_code This customer type's default address code.
     *
     * @return $this
     */
    public function setDefaultAddressCode($default_address_code)
    {
        $this->container['default_address_code'] = $default_address_code;

        return $this;
    }

    /**
     * Gets promote
     *
     * @return string
     */
    public function getPromote()
    {
        return $this->container['promote'];
    }

    /**
     * Sets promote
     *
     * @param string $promote Is it OK to promote to this customer?
     *
     * @return $this
     */
    public function setPromote($promote)
    {
        $this->container['promote'] = $promote;

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


