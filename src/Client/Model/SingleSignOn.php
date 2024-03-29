<?php
/**
 * SingleSignOn
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
 * SingleSignOn Class Doc Comment
 *
 * @category Class
 * @description Objects representing Authentication information that are Single Sign-On based
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleSignOn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SingleSignOn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authentication_number' => 'string',
        'authentication_value' => 'string',
        'single_sign_on_type' => 'string',
        'authentication_group_code' => 'string',
        'security_role_code' => 'string',
        'is_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authentication_number' => null,
        'authentication_value' => null,
        'single_sign_on_type' => null,
        'authentication_group_code' => null,
        'security_role_code' => null,
        'is_enabled' => null
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
        'authentication_number' => 'AuthenticationNumber',
        'authentication_value' => 'AuthenticationValue',
        'single_sign_on_type' => 'SingleSignOnType',
        'authentication_group_code' => 'AuthenticationGroupCode',
        'security_role_code' => 'SecurityRoleCode',
        'is_enabled' => 'IsEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_number' => 'setAuthenticationNumber',
        'authentication_value' => 'setAuthenticationValue',
        'single_sign_on_type' => 'setSingleSignOnType',
        'authentication_group_code' => 'setAuthenticationGroupCode',
        'security_role_code' => 'setSecurityRoleCode',
        'is_enabled' => 'setIsEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_number' => 'getAuthenticationNumber',
        'authentication_value' => 'getAuthenticationValue',
        'single_sign_on_type' => 'getSingleSignOnType',
        'authentication_group_code' => 'getAuthenticationGroupCode',
        'security_role_code' => 'getSecurityRoleCode',
        'is_enabled' => 'getIsEnabled'
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

    const SINGLE_SIGN_ON_TYPE_ATHENS = 'Athens';
    const SINGLE_SIGN_ON_TYPE_COUNTRY_CODE = 'CountryCode';
    const SINGLE_SIGN_ON_TYPE_FACEBOOK = 'Facebook';
    const SINGLE_SIGN_ON_TYPE_GOOGLE = 'Google';
    const SINGLE_SIGN_ON_TYPE_LINKED_IN = 'LinkedIn';
    const SINGLE_SIGN_ON_TYPE_SINGLE_SIGN_ON = 'SingleSignOn';
    const SINGLE_SIGN_ON_TYPE_SHIBBOLETH = 'Shibboleth';
    const SINGLE_SIGN_ON_TYPE_TWITTER = 'Twitter';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSingleSignOnTypeAllowableValues()
    {
        return [
            self::SINGLE_SIGN_ON_TYPE_ATHENS,
            self::SINGLE_SIGN_ON_TYPE_COUNTRY_CODE,
            self::SINGLE_SIGN_ON_TYPE_FACEBOOK,
            self::SINGLE_SIGN_ON_TYPE_GOOGLE,
            self::SINGLE_SIGN_ON_TYPE_LINKED_IN,
            self::SINGLE_SIGN_ON_TYPE_SINGLE_SIGN_ON,
            self::SINGLE_SIGN_ON_TYPE_SHIBBOLETH,
            self::SINGLE_SIGN_ON_TYPE_TWITTER,
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
        $this->container['authentication_number'] = isset($data['authentication_number']) ? $data['authentication_number'] : null;
        $this->container['authentication_value'] = isset($data['authentication_value']) ? $data['authentication_value'] : null;
        $this->container['single_sign_on_type'] = isset($data['single_sign_on_type']) ? $data['single_sign_on_type'] : null;
        $this->container['authentication_group_code'] = isset($data['authentication_group_code']) ? $data['authentication_group_code'] : null;
        $this->container['security_role_code'] = isset($data['security_role_code']) ? $data['security_role_code'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSingleSignOnTypeAllowableValues();
        if (!is_null($this->container['single_sign_on_type']) && !in_array($this->container['single_sign_on_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'single_sign_on_type', must be one of '%s'",
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
     * Gets authentication_number
     *
     * @return string
     */
    public function getAuthenticationNumber()
    {
        return $this->container['authentication_number'];
    }

    /**
     * Sets authentication_number
     *
     * @param string $authentication_number The unique number for the customer authentication method.
     *
     * @return $this
     */
    public function setAuthenticationNumber($authentication_number)
    {
        $this->container['authentication_number'] = $authentication_number;

        return $this;
    }

    /**
     * Gets authentication_value
     *
     * @return string
     */
    public function getAuthenticationValue()
    {
        return $this->container['authentication_value'];
    }

    /**
     * Sets authentication_value
     *
     * @param string $authentication_value The ID for the single sign on authentication.  The ID can vary depending on the type of single sign on beign used.
     *
     * @return $this
     */
    public function setAuthenticationValue($authentication_value)
    {
        $this->container['authentication_value'] = $authentication_value;

        return $this;
    }

    /**
     * Gets single_sign_on_type
     *
     * @return string
     */
    public function getSingleSignOnType()
    {
        return $this->container['single_sign_on_type'];
    }

    /**
     * Sets single_sign_on_type
     *
     * @param string $single_sign_on_type The type of single sign on being used
     *
     * @return $this
     */
    public function setSingleSignOnType($single_sign_on_type)
    {
        $allowedValues = $this->getSingleSignOnTypeAllowableValues();
        if (!is_null($single_sign_on_type) && !in_array($single_sign_on_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'single_sign_on_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['single_sign_on_type'] = $single_sign_on_type;

        return $this;
    }

    /**
     * Gets authentication_group_code
     *
     * @return string
     */
    public function getAuthenticationGroupCode()
    {
        return $this->container['authentication_group_code'];
    }

    /**
     * Sets authentication_group_code
     *
     * @param string $authentication_group_code The Authentication Group this authenication belongs to
     *
     * @return $this
     */
    public function setAuthenticationGroupCode($authentication_group_code)
    {
        $this->container['authentication_group_code'] = $authentication_group_code;

        return $this;
    }

    /**
     * Gets security_role_code
     *
     * @return string
     */
    public function getSecurityRoleCode()
    {
        return $this->container['security_role_code'];
    }

    /**
     * Sets security_role_code
     *
     * @param string $security_role_code Security Role
     *
     * @return $this
     */
    public function setSecurityRoleCode($security_role_code)
    {
        $this->container['security_role_code'] = $security_role_code;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled Is enabled?
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

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


