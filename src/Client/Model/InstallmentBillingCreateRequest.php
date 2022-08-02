<?php
/**
 * InstallmentBillingCreateRequest
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
 * InstallmentBillingCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Information for adding an installment billing plan.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstallmentBillingCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentBillingCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assume_minimum_down_payment' => 'bool',
        'installment_billing_code' => 'string',
        'installments' => '\Advantage\Client\Model\InstallmentBill[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assume_minimum_down_payment' => null,
        'installment_billing_code' => null,
        'installments' => null
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
        'assume_minimum_down_payment' => 'AssumeMinimumDownPayment',
        'installment_billing_code' => 'InstallmentBillingCode',
        'installments' => 'Installments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assume_minimum_down_payment' => 'setAssumeMinimumDownPayment',
        'installment_billing_code' => 'setInstallmentBillingCode',
        'installments' => 'setInstallments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assume_minimum_down_payment' => 'getAssumeMinimumDownPayment',
        'installment_billing_code' => 'getInstallmentBillingCode',
        'installments' => 'getInstallments'
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
        $this->container['assume_minimum_down_payment'] = isset($data['assume_minimum_down_payment']) ? $data['assume_minimum_down_payment'] : null;
        $this->container['installment_billing_code'] = isset($data['installment_billing_code']) ? $data['installment_billing_code'] : null;
        $this->container['installments'] = isset($data['installments']) ? $data['installments'] : null;
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
     * Gets assume_minimum_down_payment
     *
     * @return bool
     */
    public function getAssumeMinimumDownPayment()
    {
        return $this->container['assume_minimum_down_payment'];
    }

    /**
     * Sets assume_minimum_down_payment
     *
     * @param bool $assume_minimum_down_payment If true, assume minimum down payment will be made
     *
     * @return $this
     */
    public function setAssumeMinimumDownPayment($assume_minimum_down_payment)
    {
        $this->container['assume_minimum_down_payment'] = $assume_minimum_down_payment;

        return $this;
    }

    /**
     * Gets installment_billing_code
     *
     * @return string
     */
    public function getInstallmentBillingCode()
    {
        return $this->container['installment_billing_code'];
    }

    /**
     * Sets installment_billing_code
     *
     * @param string $installment_billing_code Installment Billing Code
     *
     * @return $this
     */
    public function setInstallmentBillingCode($installment_billing_code)
    {
        $this->container['installment_billing_code'] = $installment_billing_code;

        return $this;
    }

    /**
     * Gets installments
     *
     * @return \Advantage\Client\Model\InstallmentBill[]
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     *
     * @param \Advantage\Client\Model\InstallmentBill[] $installments List of Installments
     *
     * @return $this
     */
    public function setInstallments($installments)
    {
        $this->container['installments'] = $installments;

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


