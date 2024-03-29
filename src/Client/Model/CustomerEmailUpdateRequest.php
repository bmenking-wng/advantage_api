<?php
/**
 * CustomerEmailUpdateRequest
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
 * CustomerEmailUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description Information to update email addresses for a customer. All fields except Email Address   are optional and will not change if not provided. Update requests without the email   address will be ignored.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerEmailUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerEmailUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'email_target_device' => 'string',
        'is_email_valid' => 'bool',
        'promote_by_email' => 'string',
        'change_source' => 'string',
        'demographics' => '\Advantage\Client\Model\DemographicValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'email_target_device' => null,
        'is_email_valid' => null,
        'promote_by_email' => null,
        'change_source' => null,
        'demographics' => null
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
        'email' => 'Email',
        'email_target_device' => 'EmailTargetDevice',
        'is_email_valid' => 'IsEmailValid',
        'promote_by_email' => 'PromoteByEmail',
        'change_source' => 'ChangeSource',
        'demographics' => 'Demographics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'email_target_device' => 'setEmailTargetDevice',
        'is_email_valid' => 'setIsEmailValid',
        'promote_by_email' => 'setPromoteByEmail',
        'change_source' => 'setChangeSource',
        'demographics' => 'setDemographics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'email_target_device' => 'getEmailTargetDevice',
        'is_email_valid' => 'getIsEmailValid',
        'promote_by_email' => 'getPromoteByEmail',
        'change_source' => 'getChangeSource',
        'demographics' => 'getDemographics'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_target_device'] = isset($data['email_target_device']) ? $data['email_target_device'] : null;
        $this->container['is_email_valid'] = isset($data['is_email_valid']) ? $data['is_email_valid'] : null;
        $this->container['promote_by_email'] = isset($data['promote_by_email']) ? $data['promote_by_email'] : null;
        $this->container['change_source'] = isset($data['change_source']) ? $data['change_source'] : null;
        $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email An Email Address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_target_device
     *
     * @return string
     */
    public function getEmailTargetDevice()
    {
        return $this->container['email_target_device'];
    }

    /**
     * Sets email_target_device
     *
     * @param string $email_target_device An Email Target Device
     *
     * @return $this
     */
    public function setEmailTargetDevice($email_target_device)
    {
        $this->container['email_target_device'] = $email_target_device;

        return $this;
    }

    /**
     * Gets is_email_valid
     *
     * @return bool
     */
    public function getIsEmailValid()
    {
        return $this->container['is_email_valid'];
    }

    /**
     * Sets is_email_valid
     *
     * @param bool $is_email_valid An Email Valid
     *
     * @return $this
     */
    public function setIsEmailValid($is_email_valid)
    {
        $this->container['is_email_valid'] = $is_email_valid;

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
     * @param string $promote_by_email A Promote By Email
     *
     * @return $this
     */
    public function setPromoteByEmail($promote_by_email)
    {
        $this->container['promote_by_email'] = $promote_by_email;

        return $this;
    }

    /**
     * Gets change_source
     *
     * @return string
     */
    public function getChangeSource()
    {
        return $this->container['change_source'];
    }

    /**
     * Sets change_source
     *
     * @param string $change_source A Change Source
     *
     * @return $this
     */
    public function setChangeSource($change_source)
    {
        $this->container['change_source'] = $change_source;

        return $this;
    }

    /**
     * Gets demographics
     *
     * @return \Advantage\Client\Model\DemographicValue[]
     */
    public function getDemographics()
    {
        return $this->container['demographics'];
    }

    /**
     * Sets demographics
     *
     * @param \Advantage\Client\Model\DemographicValue[] $demographics Customer email demographic values saved on the customer email record (CDSEML-M).
     *
     * @return $this
     */
    public function setDemographics($demographics)
    {
        $this->container['demographics'] = $demographics;

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


