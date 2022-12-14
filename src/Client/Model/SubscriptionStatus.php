<?php
/**
 * SubscriptionStatus
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
 * SubscriptionStatus Class Doc Comment
 *
 * @category Class
 * @description Information about a subscriptions alternate delivery settings.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'name' => 'string',
        'is_active' => 'bool',
        'is_cancelled' => 'bool',
        'is_customer_cancelled' => 'bool',
        'is_expired' => 'bool',
        'is_non_pay_cancelled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'name' => null,
        'is_active' => null,
        'is_cancelled' => null,
        'is_customer_cancelled' => null,
        'is_expired' => null,
        'is_non_pay_cancelled' => null
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
        'code' => 'Code',
        'name' => 'Name',
        'is_active' => 'IsActive',
        'is_cancelled' => 'IsCancelled',
        'is_customer_cancelled' => 'IsCustomerCancelled',
        'is_expired' => 'IsExpired',
        'is_non_pay_cancelled' => 'IsNonPayCancelled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'is_active' => 'setIsActive',
        'is_cancelled' => 'setIsCancelled',
        'is_customer_cancelled' => 'setIsCustomerCancelled',
        'is_expired' => 'setIsExpired',
        'is_non_pay_cancelled' => 'setIsNonPayCancelled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'is_active' => 'getIsActive',
        'is_cancelled' => 'getIsCancelled',
        'is_customer_cancelled' => 'getIsCustomerCancelled',
        'is_expired' => 'getIsExpired',
        'is_non_pay_cancelled' => 'getIsNonPayCancelled'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['is_cancelled'] = isset($data['is_cancelled']) ? $data['is_cancelled'] : null;
        $this->container['is_customer_cancelled'] = isset($data['is_customer_cancelled']) ? $data['is_customer_cancelled'] : null;
        $this->container['is_expired'] = isset($data['is_expired']) ? $data['is_expired'] : null;
        $this->container['is_non_pay_cancelled'] = isset($data['is_non_pay_cancelled']) ? $data['is_non_pay_cancelled'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The subscription status code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The subscription status name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Is the subscription active?
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_cancelled
     *
     * @return bool
     */
    public function getIsCancelled()
    {
        return $this->container['is_cancelled'];
    }

    /**
     * Sets is_cancelled
     *
     * @param bool $is_cancelled Is the subscription cancelled?
     *
     * @return $this
     */
    public function setIsCancelled($is_cancelled)
    {
        $this->container['is_cancelled'] = $is_cancelled;

        return $this;
    }

    /**
     * Gets is_customer_cancelled
     *
     * @return bool
     */
    public function getIsCustomerCancelled()
    {
        return $this->container['is_customer_cancelled'];
    }

    /**
     * Sets is_customer_cancelled
     *
     * @param bool $is_customer_cancelled Is the subscription customer cancelled?
     *
     * @return $this
     */
    public function setIsCustomerCancelled($is_customer_cancelled)
    {
        $this->container['is_customer_cancelled'] = $is_customer_cancelled;

        return $this;
    }

    /**
     * Gets is_expired
     *
     * @return bool
     */
    public function getIsExpired()
    {
        return $this->container['is_expired'];
    }

    /**
     * Sets is_expired
     *
     * @param bool $is_expired Is the subscription expired?
     *
     * @return $this
     */
    public function setIsExpired($is_expired)
    {
        $this->container['is_expired'] = $is_expired;

        return $this;
    }

    /**
     * Gets is_non_pay_cancelled
     *
     * @return bool
     */
    public function getIsNonPayCancelled()
    {
        return $this->container['is_non_pay_cancelled'];
    }

    /**
     * Sets is_non_pay_cancelled
     *
     * @param bool $is_non_pay_cancelled Is the subscription non-pay cancelled?
     *
     * @return $this
     */
    public function setIsNonPayCancelled($is_non_pay_cancelled)
    {
        $this->container['is_non_pay_cancelled'] = $is_non_pay_cancelled;

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


