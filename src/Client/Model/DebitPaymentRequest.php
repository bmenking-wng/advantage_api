<?php
/**
 * DebitPaymentRequest
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
 * DebitPaymentRequest Class Doc Comment
 *
 * @category Class
 * @description Information for applying payment to a set of debits.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DebitPaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DebitPaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment' => '\Advantage\Client\Model\PaymentRequest',
        'selected_debits' => 'string[]',
        'billing_currency' => 'string',
        'teleservice_order_details' => '\Advantage\Client\Model\TeleserviceOrderDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment' => null,
        'selected_debits' => null,
        'billing_currency' => null,
        'teleservice_order_details' => null
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
        'payment' => 'Payment',
        'selected_debits' => 'SelectedDebits',
        'billing_currency' => 'BillingCurrency',
        'teleservice_order_details' => 'TeleserviceOrderDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment' => 'setPayment',
        'selected_debits' => 'setSelectedDebits',
        'billing_currency' => 'setBillingCurrency',
        'teleservice_order_details' => 'setTeleserviceOrderDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment' => 'getPayment',
        'selected_debits' => 'getSelectedDebits',
        'billing_currency' => 'getBillingCurrency',
        'teleservice_order_details' => 'getTeleserviceOrderDetails'
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
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['selected_debits'] = isset($data['selected_debits']) ? $data['selected_debits'] : null;
        $this->container['billing_currency'] = isset($data['billing_currency']) ? $data['billing_currency'] : null;
        $this->container['teleservice_order_details'] = isset($data['teleservice_order_details']) ? $data['teleservice_order_details'] : null;
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
     * Gets payment
     *
     * @return \Advantage\Client\Model\PaymentRequest
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Advantage\Client\Model\PaymentRequest $payment The credit card or direct debit payment to apply to the selected debits
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets selected_debits
     *
     * @return string[]
     */
    public function getSelectedDebits()
    {
        return $this->container['selected_debits'];
    }

    /**
     * Sets selected_debits
     *
     * @param string[] $selected_debits A list of debits to be paid
     *
     * @return $this
     */
    public function setSelectedDebits($selected_debits)
    {
        $this->container['selected_debits'] = $selected_debits;

        return $this;
    }

    /**
     * Gets billing_currency
     *
     * @return string
     */
    public function getBillingCurrency()
    {
        return $this->container['billing_currency'];
    }

    /**
     * Sets billing_currency
     *
     * @param string $billing_currency Billing currency for selected debits
     *
     * @return $this
     */
    public function setBillingCurrency($billing_currency)
    {
        $this->container['billing_currency'] = $billing_currency;

        return $this;
    }

    /**
     * Gets teleservice_order_details
     *
     * @return \Advantage\Client\Model\TeleserviceOrderDetails
     */
    public function getTeleserviceOrderDetails()
    {
        return $this->container['teleservice_order_details'];
    }

    /**
     * Sets teleservice_order_details
     *
     * @param \Advantage\Client\Model\TeleserviceOrderDetails $teleservice_order_details Optional information for linking a call to this payment
     *
     * @return $this
     */
    public function setTeleserviceOrderDetails($teleservice_order_details)
    {
        $this->container['teleservice_order_details'] = $teleservice_order_details;

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


