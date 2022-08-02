<?php
/**
 * OrderLineDefaultsRequest
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
 * OrderLineDefaultsRequest Class Doc Comment
 *
 * @category Class
 * @description Information for getting order line defaults
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLineDefaultsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLineDefaultsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bill_to' => '\Advantage\Client\Model\CustomerAddressKey',
        'ship_to' => '\Advantage\Client\Model\CustomerAddressKey',
        'item_number' => 'string',
        'currency_code' => 'string',
        'promotion_code' => 'string',
        'promotion_choice_code' => 'string',
        'get_default_subscription_email' => 'bool',
        'get_default_agreement_email' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bill_to' => null,
        'ship_to' => null,
        'item_number' => null,
        'currency_code' => null,
        'promotion_code' => null,
        'promotion_choice_code' => null,
        'get_default_subscription_email' => null,
        'get_default_agreement_email' => null
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
        'bill_to' => 'BillTo',
        'ship_to' => 'ShipTo',
        'item_number' => 'ItemNumber',
        'currency_code' => 'CurrencyCode',
        'promotion_code' => 'PromotionCode',
        'promotion_choice_code' => 'PromotionChoiceCode',
        'get_default_subscription_email' => 'GetDefaultSubscriptionEmail',
        'get_default_agreement_email' => 'GetDefaultAgreementEmail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_to' => 'setBillTo',
        'ship_to' => 'setShipTo',
        'item_number' => 'setItemNumber',
        'currency_code' => 'setCurrencyCode',
        'promotion_code' => 'setPromotionCode',
        'promotion_choice_code' => 'setPromotionChoiceCode',
        'get_default_subscription_email' => 'setGetDefaultSubscriptionEmail',
        'get_default_agreement_email' => 'setGetDefaultAgreementEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_to' => 'getBillTo',
        'ship_to' => 'getShipTo',
        'item_number' => 'getItemNumber',
        'currency_code' => 'getCurrencyCode',
        'promotion_code' => 'getPromotionCode',
        'promotion_choice_code' => 'getPromotionChoiceCode',
        'get_default_subscription_email' => 'getGetDefaultSubscriptionEmail',
        'get_default_agreement_email' => 'getGetDefaultAgreementEmail'
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
        $this->container['bill_to'] = isset($data['bill_to']) ? $data['bill_to'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['promotion_choice_code'] = isset($data['promotion_choice_code']) ? $data['promotion_choice_code'] : null;
        $this->container['get_default_subscription_email'] = isset($data['get_default_subscription_email']) ? $data['get_default_subscription_email'] : null;
        $this->container['get_default_agreement_email'] = isset($data['get_default_agreement_email']) ? $data['get_default_agreement_email'] : null;
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
     * Gets bill_to
     *
     * @return \Advantage\Client\Model\CustomerAddressKey
     */
    public function getBillTo()
    {
        return $this->container['bill_to'];
    }

    /**
     * Sets bill_to
     *
     * @param \Advantage\Client\Model\CustomerAddressKey $bill_to The bill-to address for the order.
     *
     * @return $this
     */
    public function setBillTo($bill_to)
    {
        $this->container['bill_to'] = $bill_to;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Advantage\Client\Model\CustomerAddressKey
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Advantage\Client\Model\CustomerAddressKey $ship_to This ship-to address for the order.
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets item_number
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->container['item_number'];
    }

    /**
     * Sets item_number
     *
     * @param string $item_number The item number, identifying which access agreement is being ordered (Publication Code for Subscription   Items).
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

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
     * @param string $currency_code The order currency
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets promotion_code
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->container['promotion_code'];
    }

    /**
     * Sets promotion_code
     *
     * @param string $promotion_code The promotion code (sometimes referred to as key code).
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets promotion_choice_code
     *
     * @return string
     */
    public function getPromotionChoiceCode()
    {
        return $this->container['promotion_choice_code'];
    }

    /**
     * Sets promotion_choice_code
     *
     * @param string $promotion_choice_code The promotion choice, indicating a set of default settings for an order line.
     *
     * @return $this
     */
    public function setPromotionChoiceCode($promotion_choice_code)
    {
        $this->container['promotion_choice_code'] = $promotion_choice_code;

        return $this;
    }

    /**
     * Gets get_default_subscription_email
     *
     * @return bool
     */
    public function getGetDefaultSubscriptionEmail()
    {
        return $this->container['get_default_subscription_email'];
    }

    /**
     * Sets get_default_subscription_email
     *
     * @param bool $get_default_subscription_email If true, response will include default subscription email, if one exists
     *
     * @return $this
     */
    public function setGetDefaultSubscriptionEmail($get_default_subscription_email)
    {
        $this->container['get_default_subscription_email'] = $get_default_subscription_email;

        return $this;
    }

    /**
     * Gets get_default_agreement_email
     *
     * @return bool
     */
    public function getGetDefaultAgreementEmail()
    {
        return $this->container['get_default_agreement_email'];
    }

    /**
     * Sets get_default_agreement_email
     *
     * @param bool $get_default_agreement_email If true, response will include default agreement email, if one exists
     *
     * @return $this
     */
    public function setGetDefaultAgreementEmail($get_default_agreement_email)
    {
        $this->container['get_default_agreement_email'] = $get_default_agreement_email;

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


