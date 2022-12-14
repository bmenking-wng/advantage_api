<?php
/**
 * CreditCardUpdateRequest
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
 * CreditCardUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description Information needed to update a credit card.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCardUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditCardUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expire_month' => 'int',
        'expire_year' => 'int',
        'is_valid_for_future_payments' => 'bool',
        'is_web_default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expire_month' => 'int32',
        'expire_year' => 'int32',
        'is_valid_for_future_payments' => null,
        'is_web_default' => null
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
        'expire_month' => 'ExpireMonth',
        'expire_year' => 'ExpireYear',
        'is_valid_for_future_payments' => 'IsValidForFuturePayments',
        'is_web_default' => 'IsWebDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expire_month' => 'setExpireMonth',
        'expire_year' => 'setExpireYear',
        'is_valid_for_future_payments' => 'setIsValidForFuturePayments',
        'is_web_default' => 'setIsWebDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expire_month' => 'getExpireMonth',
        'expire_year' => 'getExpireYear',
        'is_valid_for_future_payments' => 'getIsValidForFuturePayments',
        'is_web_default' => 'getIsWebDefault'
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
        $this->container['expire_month'] = isset($data['expire_month']) ? $data['expire_month'] : null;
        $this->container['expire_year'] = isset($data['expire_year']) ? $data['expire_year'] : null;
        $this->container['is_valid_for_future_payments'] = isset($data['is_valid_for_future_payments']) ? $data['is_valid_for_future_payments'] : null;
        $this->container['is_web_default'] = isset($data['is_web_default']) ? $data['is_web_default'] : null;
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
     * Gets expire_month
     *
     * @return int
     */
    public function getExpireMonth()
    {
        return $this->container['expire_month'];
    }

    /**
     * Sets expire_month
     *
     * @param int $expire_month The new expiration month.
     *
     * @return $this
     */
    public function setExpireMonth($expire_month)
    {
        $this->container['expire_month'] = $expire_month;

        return $this;
    }

    /**
     * Gets expire_year
     *
     * @return int
     */
    public function getExpireYear()
    {
        return $this->container['expire_year'];
    }

    /**
     * Sets expire_year
     *
     * @param int $expire_year The new expiration year.
     *
     * @return $this
     */
    public function setExpireYear($expire_year)
    {
        $this->container['expire_year'] = $expire_year;

        return $this;
    }

    /**
     * Gets is_valid_for_future_payments
     *
     * @return bool
     */
    public function getIsValidForFuturePayments()
    {
        return $this->container['is_valid_for_future_payments'];
    }

    /**
     * Sets is_valid_for_future_payments
     *
     * @param bool $is_valid_for_future_payments Is this card valid for use in the future?
     *
     * @return $this
     */
    public function setIsValidForFuturePayments($is_valid_for_future_payments)
    {
        $this->container['is_valid_for_future_payments'] = $is_valid_for_future_payments;

        return $this;
    }

    /**
     * Gets is_web_default
     *
     * @return bool
     */
    public function getIsWebDefault()
    {
        return $this->container['is_web_default'];
    }

    /**
     * Sets is_web_default
     *
     * @param bool $is_web_default Is card a default for orders from the web?
     *
     * @return $this
     */
    public function setIsWebDefault($is_web_default)
    {
        $this->container['is_web_default'] = $is_web_default;

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


