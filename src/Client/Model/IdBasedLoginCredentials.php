<?php
/**
 * IdBasedLoginCredentials
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
 * IdBasedLoginCredentials Class Doc Comment
 *
 * @category Class
 * @description Information needed for authentication for Id based authentication. (Athens, Shibboleth, etc.)
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdBasedLoginCredentials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IdBasedLoginCredentials';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'single_sign_on_authentication_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'single_sign_on_authentication_type' => null
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
        'id' => 'Id',
        'single_sign_on_authentication_type' => 'SingleSignOnAuthenticationType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'single_sign_on_authentication_type' => 'setSingleSignOnAuthenticationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'single_sign_on_authentication_type' => 'getSingleSignOnAuthenticationType'
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

    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_ATHENS = 'Athens';
    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_COUNTRY_CODE = 'CountryCode';
    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_FACEBOOK = 'Facebook';
    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_GOOGLE = 'Google';
    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_LINKED_IN = 'LinkedIn';
    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_SINGLE_SIGN_ON = 'SingleSignOn';
    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_SHIBBOLETH = 'Shibboleth';
    const SINGLE_SIGN_ON_AUTHENTICATION_TYPE_TWITTER = 'Twitter';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSingleSignOnAuthenticationTypeAllowableValues()
    {
        return [
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_ATHENS,
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_COUNTRY_CODE,
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_FACEBOOK,
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_GOOGLE,
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_LINKED_IN,
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_SINGLE_SIGN_ON,
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_SHIBBOLETH,
            self::SINGLE_SIGN_ON_AUTHENTICATION_TYPE_TWITTER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['single_sign_on_authentication_type'] = isset($data['single_sign_on_authentication_type']) ? $data['single_sign_on_authentication_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSingleSignOnAuthenticationTypeAllowableValues();
        if (!is_null($this->container['single_sign_on_authentication_type']) && !in_array($this->container['single_sign_on_authentication_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'single_sign_on_authentication_type', must be one of '%s'",
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
     * @param string $id An authentication ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets single_sign_on_authentication_type
     *
     * @return string
     */
    public function getSingleSignOnAuthenticationType()
    {
        return $this->container['single_sign_on_authentication_type'];
    }

    /**
     * Sets single_sign_on_authentication_type
     *
     * @param string $single_sign_on_authentication_type Single sign-on authentication type (e.g. Google)
     *
     * @return $this
     */
    public function setSingleSignOnAuthenticationType($single_sign_on_authentication_type)
    {
        $allowedValues = $this->getSingleSignOnAuthenticationTypeAllowableValues();
        if (!is_null($single_sign_on_authentication_type) && !in_array($single_sign_on_authentication_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'single_sign_on_authentication_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['single_sign_on_authentication_type'] = $single_sign_on_authentication_type;

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


