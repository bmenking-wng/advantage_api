<?php
/**
 * SavedPaymentResponse
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
 * SavedPaymentResponse Class Doc Comment
 *
 * @category Class
 * @description The response object received when saving a new payment method to a customer account.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SavedPaymentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SavedPaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'electronic_payment_id' => 'string',
        'account_number_ending' => 'string',
        'payment_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'electronic_payment_id' => null,
        'account_number_ending' => null,
        'payment_type' => null
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
        'electronic_payment_id' => 'ElectronicPaymentId',
        'account_number_ending' => 'AccountNumberEnding',
        'payment_type' => 'PaymentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'electronic_payment_id' => 'setElectronicPaymentId',
        'account_number_ending' => 'setAccountNumberEnding',
        'payment_type' => 'setPaymentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'electronic_payment_id' => 'getElectronicPaymentId',
        'account_number_ending' => 'getAccountNumberEnding',
        'payment_type' => 'getPaymentType'
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

    const PAYMENT_TYPE_INVALID = 'Invalid';
    const PAYMENT_TYPE_CREDIT_CARD = 'CreditCard';
    const PAYMENT_TYPE_DIRECT_DEBIT = 'DirectDebit';
    const PAYMENT_TYPE_BILL_ME = 'BillMe';
    const PAYMENT_TYPE_AVAILABLE_CREDIT = 'AvailableCredit';
    const PAYMENT_TYPE_CHECK = 'Check';
    const PAYMENT_TYPE_BILL_PAYMENT_SERVICE = 'BillPaymentService';
    const PAYMENT_TYPE_GIFT_CERTIFICATE = 'GiftCertificate';
    const PAYMENT_TYPE_MISCELLANEOUS_CREDIT = 'MiscellaneousCredit';
    const PAYMENT_TYPE_WRITE_OFF = 'WriteOff';
    const PAYMENT_TYPE_DIGITAL_WALLET = 'DigitalWallet';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_INVALID,
            self::PAYMENT_TYPE_CREDIT_CARD,
            self::PAYMENT_TYPE_DIRECT_DEBIT,
            self::PAYMENT_TYPE_BILL_ME,
            self::PAYMENT_TYPE_AVAILABLE_CREDIT,
            self::PAYMENT_TYPE_CHECK,
            self::PAYMENT_TYPE_BILL_PAYMENT_SERVICE,
            self::PAYMENT_TYPE_GIFT_CERTIFICATE,
            self::PAYMENT_TYPE_MISCELLANEOUS_CREDIT,
            self::PAYMENT_TYPE_WRITE_OFF,
            self::PAYMENT_TYPE_DIGITAL_WALLET,
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
        $this->container['electronic_payment_id'] = isset($data['electronic_payment_id']) ? $data['electronic_payment_id'] : null;
        $this->container['account_number_ending'] = isset($data['account_number_ending']) ? $data['account_number_ending'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
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
     * Gets electronic_payment_id
     *
     * @return string
     */
    public function getElectronicPaymentId()
    {
        return $this->container['electronic_payment_id'];
    }

    /**
     * Sets electronic_payment_id
     *
     * @param string $electronic_payment_id The ID for the saved payment method
     *
     * @return $this
     */
    public function setElectronicPaymentId($electronic_payment_id)
    {
        $this->container['electronic_payment_id'] = $electronic_payment_id;

        return $this;
    }

    /**
     * Gets account_number_ending
     *
     * @return string
     */
    public function getAccountNumberEnding()
    {
        return $this->container['account_number_ending'];
    }

    /**
     * Sets account_number_ending
     *
     * @param string $account_number_ending Last four-digits of the account number
     *
     * @return $this
     */
    public function setAccountNumberEnding($account_number_ending)
    {
        $this->container['account_number_ending'] = $account_number_ending;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type Payment type (e.g. CreditCard)
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($payment_type) && !in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

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


