<?php
/**
 * Credit
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
 * Credit Class Doc Comment
 *
 * @category Class
 * @description Represents a single credit header
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Credit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Credit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'credit_voucher' => 'string',
        'payment_type' => 'string',
        'credit_document_number' => 'string',
        'credit_type' => 'string',
        'customer_number' => 'string',
        'entry_date' => '\DateTime',
        'billing_currency' => 'string',
        'amount' => 'double',
        'balance' => 'double',
        'payment_code' => 'string',
        'initial_order' => 'string',
        'original_order' => 'string',
        'direct_debit_request_id' => 'string',
        'electronic_payment_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'credit_voucher' => null,
        'payment_type' => null,
        'credit_document_number' => null,
        'credit_type' => null,
        'customer_number' => null,
        'entry_date' => 'date-time',
        'billing_currency' => null,
        'amount' => 'double',
        'balance' => 'double',
        'payment_code' => null,
        'initial_order' => null,
        'original_order' => null,
        'direct_debit_request_id' => null,
        'electronic_payment_id' => null
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
        'credit_voucher' => 'CreditVoucher',
        'payment_type' => 'PaymentType',
        'credit_document_number' => 'CreditDocumentNumber',
        'credit_type' => 'CreditType',
        'customer_number' => 'CustomerNumber',
        'entry_date' => 'EntryDate',
        'billing_currency' => 'BillingCurrency',
        'amount' => 'Amount',
        'balance' => 'Balance',
        'payment_code' => 'PaymentCode',
        'initial_order' => 'InitialOrder',
        'original_order' => 'OriginalOrder',
        'direct_debit_request_id' => 'DirectDebitRequestId',
        'electronic_payment_id' => 'ElectronicPaymentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credit_voucher' => 'setCreditVoucher',
        'payment_type' => 'setPaymentType',
        'credit_document_number' => 'setCreditDocumentNumber',
        'credit_type' => 'setCreditType',
        'customer_number' => 'setCustomerNumber',
        'entry_date' => 'setEntryDate',
        'billing_currency' => 'setBillingCurrency',
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'payment_code' => 'setPaymentCode',
        'initial_order' => 'setInitialOrder',
        'original_order' => 'setOriginalOrder',
        'direct_debit_request_id' => 'setDirectDebitRequestId',
        'electronic_payment_id' => 'setElectronicPaymentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credit_voucher' => 'getCreditVoucher',
        'payment_type' => 'getPaymentType',
        'credit_document_number' => 'getCreditDocumentNumber',
        'credit_type' => 'getCreditType',
        'customer_number' => 'getCustomerNumber',
        'entry_date' => 'getEntryDate',
        'billing_currency' => 'getBillingCurrency',
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'payment_code' => 'getPaymentCode',
        'initial_order' => 'getInitialOrder',
        'original_order' => 'getOriginalOrder',
        'direct_debit_request_id' => 'getDirectDebitRequestId',
        'electronic_payment_id' => 'getElectronicPaymentId'
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
        $this->container['credit_voucher'] = isset($data['credit_voucher']) ? $data['credit_voucher'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['credit_document_number'] = isset($data['credit_document_number']) ? $data['credit_document_number'] : null;
        $this->container['credit_type'] = isset($data['credit_type']) ? $data['credit_type'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['entry_date'] = isset($data['entry_date']) ? $data['entry_date'] : null;
        $this->container['billing_currency'] = isset($data['billing_currency']) ? $data['billing_currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['payment_code'] = isset($data['payment_code']) ? $data['payment_code'] : null;
        $this->container['initial_order'] = isset($data['initial_order']) ? $data['initial_order'] : null;
        $this->container['original_order'] = isset($data['original_order']) ? $data['original_order'] : null;
        $this->container['direct_debit_request_id'] = isset($data['direct_debit_request_id']) ? $data['direct_debit_request_id'] : null;
        $this->container['electronic_payment_id'] = isset($data['electronic_payment_id']) ? $data['electronic_payment_id'] : null;
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
     * Gets credit_voucher
     *
     * @return string
     */
    public function getCreditVoucher()
    {
        return $this->container['credit_voucher'];
    }

    /**
     * Sets credit_voucher
     *
     * @param string $credit_voucher Credit voucher number
     *
     * @return $this
     */
    public function setCreditVoucher($credit_voucher)
    {
        $this->container['credit_voucher'] = $credit_voucher;

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
     * @param string $payment_type Payment type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets credit_document_number
     *
     * @return string
     */
    public function getCreditDocumentNumber()
    {
        return $this->container['credit_document_number'];
    }

    /**
     * Sets credit_document_number
     *
     * @param string $credit_document_number Credit document number
     *
     * @return $this
     */
    public function setCreditDocumentNumber($credit_document_number)
    {
        $this->container['credit_document_number'] = $credit_document_number;

        return $this;
    }

    /**
     * Gets credit_type
     *
     * @return string
     */
    public function getCreditType()
    {
        return $this->container['credit_type'];
    }

    /**
     * Sets credit_type
     *
     * @param string $credit_type Credit type
     *
     * @return $this
     */
    public function setCreditType($credit_type)
    {
        $this->container['credit_type'] = $credit_type;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string $customer_number Customer number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets entry_date
     *
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->container['entry_date'];
    }

    /**
     * Sets entry_date
     *
     * @param \DateTime $entry_date Entry date
     *
     * @return $this
     */
    public function setEntryDate($entry_date)
    {
        $this->container['entry_date'] = $entry_date;

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
     * @param string $billing_currency Billing currency
     *
     * @return $this
     */
    public function setBillingCurrency($billing_currency)
    {
        $this->container['billing_currency'] = $billing_currency;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Credit amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double $balance Credit balance.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets payment_code
     *
     * @return string
     */
    public function getPaymentCode()
    {
        return $this->container['payment_code'];
    }

    /**
     * Sets payment_code
     *
     * @param string $payment_code Payment code used for this credit
     *
     * @return $this
     */
    public function setPaymentCode($payment_code)
    {
        $this->container['payment_code'] = $payment_code;

        return $this;
    }

    /**
     * Gets initial_order
     *
     * @return string
     */
    public function getInitialOrder()
    {
        return $this->container['initial_order'];
    }

    /**
     * Sets initial_order
     *
     * @param string $initial_order Order credit was initially applied to
     *
     * @return $this
     */
    public function setInitialOrder($initial_order)
    {
        $this->container['initial_order'] = $initial_order;

        return $this;
    }

    /**
     * Gets original_order
     *
     * @return string
     */
    public function getOriginalOrder()
    {
        return $this->container['original_order'];
    }

    /**
     * Sets original_order
     *
     * @param string $original_order Original order number
     *
     * @return $this
     */
    public function setOriginalOrder($original_order)
    {
        $this->container['original_order'] = $original_order;

        return $this;
    }

    /**
     * Gets direct_debit_request_id
     *
     * @return string
     */
    public function getDirectDebitRequestId()
    {
        return $this->container['direct_debit_request_id'];
    }

    /**
     * Sets direct_debit_request_id
     *
     * @param string $direct_debit_request_id Direct Debit Request Id (for DD payments).
     *
     * @return $this
     */
    public function setDirectDebitRequestId($direct_debit_request_id)
    {
        $this->container['direct_debit_request_id'] = $direct_debit_request_id;

        return $this;
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
     * @param string $electronic_payment_id Electronic Payment Id (for CC payments).
     *
     * @return $this
     */
    public function setElectronicPaymentId($electronic_payment_id)
    {
        $this->container['electronic_payment_id'] = $electronic_payment_id;

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


