<?php
/**
 * OrderLineDefaults
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
 * OrderLineDefaults Class Doc Comment
 *
 * @category Class
 * @description Default values for order lines
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLineDefaults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLineDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_code' => 'string',
        'currency_code' => 'string',
        'promotion_choice' => 'string',
        'quantity_ordered' => 'int',
        'unit_price' => 'double',
        'subscription' => '\Advantage\Client\Model\SubscriptionLineDefaults',
        'access' => '\Advantage\Client\Model\AccessOrderLineDefaults'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_code' => null,
        'currency_code' => null,
        'promotion_choice' => null,
        'quantity_ordered' => 'int32',
        'unit_price' => 'double',
        'subscription' => null,
        'access' => null
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
        'address_code' => 'AddressCode',
        'currency_code' => 'CurrencyCode',
        'promotion_choice' => 'PromotionChoice',
        'quantity_ordered' => 'QuantityOrdered',
        'unit_price' => 'UnitPrice',
        'subscription' => 'Subscription',
        'access' => 'Access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_code' => 'setAddressCode',
        'currency_code' => 'setCurrencyCode',
        'promotion_choice' => 'setPromotionChoice',
        'quantity_ordered' => 'setQuantityOrdered',
        'unit_price' => 'setUnitPrice',
        'subscription' => 'setSubscription',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_code' => 'getAddressCode',
        'currency_code' => 'getCurrencyCode',
        'promotion_choice' => 'getPromotionChoice',
        'quantity_ordered' => 'getQuantityOrdered',
        'unit_price' => 'getUnitPrice',
        'subscription' => 'getSubscription',
        'access' => 'getAccess'
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
        $this->container['address_code'] = isset($data['address_code']) ? $data['address_code'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['promotion_choice'] = isset($data['promotion_choice']) ? $data['promotion_choice'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
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
     * Gets address_code
     *
     * @return string
     */
    public function getAddressCode()
    {
        return $this->container['address_code'];
    }

    /**
     * Sets address_code
     *
     * @param string $address_code Address Code
     *
     * @return $this
     */
    public function setAddressCode($address_code)
    {
        $this->container['address_code'] = $address_code;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code The currency code in which this item is to be billed.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets promotion_choice
     *
     * @return string
     */
    public function getPromotionChoice()
    {
        return $this->container['promotion_choice'];
    }

    /**
     * Sets promotion_choice
     *
     * @param string $promotion_choice The promotion choice, indicating a set of default settings for an order line.
     *
     * @return $this
     */
    public function setPromotionChoice($promotion_choice)
    {
        $this->container['promotion_choice'] = $promotion_choice;

        return $this;
    }

    /**
     * Gets quantity_ordered
     *
     * @return int
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param int $quantity_ordered The quantity ordered for the current order line. For a subscribed product  the quantity ordered is the number of copies of each issue to receive.
     *
     * @return $this
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param double $unit_price The price per quantity ordered.
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \Advantage\Client\Model\SubscriptionLineDefaults
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Advantage\Client\Model\SubscriptionLineDefaults $subscription Subscription order line defaults
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \Advantage\Client\Model\AccessOrderLineDefaults
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \Advantage\Client\Model\AccessOrderLineDefaults $access Information about an AMB (agreement) order line.
     *
     * @return $this
     */
    public function setAccess($access)
    {
        $this->container['access'] = $access;

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


