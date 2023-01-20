<?php
/**
 * Debit
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
 * Debit Class Doc Comment
 *
 * @category Class
 * @description Represents a single debit header
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Debit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Debit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debit_number' => 'string',
        'source_data' => 'string',
        'arp_sequence' => 'string',
        'is_debit_paid' => 'bool',
        'source_system_reference' => 'string',
        'source_customer' => 'string',
        'due_date' => '\DateTime',
        'invoice_terms' => 'string',
        'invoice_date' => '\DateTime',
        'billing_currency' => 'string',
        'total_debit_amount' => 'double',
        'total_amount_paid' => 'double',
        'installment_payments' => 'int',
        'installment_billing_code' => 'string',
        'billing_organization' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'debit_number' => null,
        'source_data' => null,
        'arp_sequence' => null,
        'is_debit_paid' => null,
        'source_system_reference' => null,
        'source_customer' => null,
        'due_date' => 'date-time',
        'invoice_terms' => null,
        'invoice_date' => 'date-time',
        'billing_currency' => null,
        'total_debit_amount' => 'double',
        'total_amount_paid' => 'double',
        'installment_payments' => 'int32',
        'installment_billing_code' => null,
        'billing_organization' => null
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
        'debit_number' => 'DebitNumber',
        'source_data' => 'SourceData',
        'arp_sequence' => 'ArpSequence',
        'is_debit_paid' => 'IsDebitPaid',
        'source_system_reference' => 'SourceSystemReference',
        'source_customer' => 'SourceCustomer',
        'due_date' => 'DueDate',
        'invoice_terms' => 'InvoiceTerms',
        'invoice_date' => 'InvoiceDate',
        'billing_currency' => 'BillingCurrency',
        'total_debit_amount' => 'TotalDebitAmount',
        'total_amount_paid' => 'TotalAmountPaid',
        'installment_payments' => 'InstallmentPayments',
        'installment_billing_code' => 'InstallmentBillingCode',
        'billing_organization' => 'BillingOrganization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debit_number' => 'setDebitNumber',
        'source_data' => 'setSourceData',
        'arp_sequence' => 'setArpSequence',
        'is_debit_paid' => 'setIsDebitPaid',
        'source_system_reference' => 'setSourceSystemReference',
        'source_customer' => 'setSourceCustomer',
        'due_date' => 'setDueDate',
        'invoice_terms' => 'setInvoiceTerms',
        'invoice_date' => 'setInvoiceDate',
        'billing_currency' => 'setBillingCurrency',
        'total_debit_amount' => 'setTotalDebitAmount',
        'total_amount_paid' => 'setTotalAmountPaid',
        'installment_payments' => 'setInstallmentPayments',
        'installment_billing_code' => 'setInstallmentBillingCode',
        'billing_organization' => 'setBillingOrganization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debit_number' => 'getDebitNumber',
        'source_data' => 'getSourceData',
        'arp_sequence' => 'getArpSequence',
        'is_debit_paid' => 'getIsDebitPaid',
        'source_system_reference' => 'getSourceSystemReference',
        'source_customer' => 'getSourceCustomer',
        'due_date' => 'getDueDate',
        'invoice_terms' => 'getInvoiceTerms',
        'invoice_date' => 'getInvoiceDate',
        'billing_currency' => 'getBillingCurrency',
        'total_debit_amount' => 'getTotalDebitAmount',
        'total_amount_paid' => 'getTotalAmountPaid',
        'installment_payments' => 'getInstallmentPayments',
        'installment_billing_code' => 'getInstallmentBillingCode',
        'billing_organization' => 'getBillingOrganization'
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
        $this->container['debit_number'] = isset($data['debit_number']) ? $data['debit_number'] : null;
        $this->container['source_data'] = isset($data['source_data']) ? $data['source_data'] : null;
        $this->container['arp_sequence'] = isset($data['arp_sequence']) ? $data['arp_sequence'] : null;
        $this->container['is_debit_paid'] = isset($data['is_debit_paid']) ? $data['is_debit_paid'] : null;
        $this->container['source_system_reference'] = isset($data['source_system_reference']) ? $data['source_system_reference'] : null;
        $this->container['source_customer'] = isset($data['source_customer']) ? $data['source_customer'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['invoice_terms'] = isset($data['invoice_terms']) ? $data['invoice_terms'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['billing_currency'] = isset($data['billing_currency']) ? $data['billing_currency'] : null;
        $this->container['total_debit_amount'] = isset($data['total_debit_amount']) ? $data['total_debit_amount'] : null;
        $this->container['total_amount_paid'] = isset($data['total_amount_paid']) ? $data['total_amount_paid'] : null;
        $this->container['installment_payments'] = isset($data['installment_payments']) ? $data['installment_payments'] : null;
        $this->container['installment_billing_code'] = isset($data['installment_billing_code']) ? $data['installment_billing_code'] : null;
        $this->container['billing_organization'] = isset($data['billing_organization']) ? $data['billing_organization'] : null;
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
     * Gets debit_number
     *
     * @return string
     */
    public function getDebitNumber()
    {
        return $this->container['debit_number'];
    }

    /**
     * Sets debit_number
     *
     * @param string $debit_number Debit number
     *
     * @return $this
     */
    public function setDebitNumber($debit_number)
    {
        $this->container['debit_number'] = $debit_number;

        return $this;
    }

    /**
     * Gets source_data
     *
     * @return string
     */
    public function getSourceData()
    {
        return $this->container['source_data'];
    }

    /**
     * Sets source_data
     *
     * @param string $source_data Source data
     *
     * @return $this
     */
    public function setSourceData($source_data)
    {
        $this->container['source_data'] = $source_data;

        return $this;
    }

    /**
     * Gets arp_sequence
     *
     * @return string
     */
    public function getArpSequence()
    {
        return $this->container['arp_sequence'];
    }

    /**
     * Sets arp_sequence
     *
     * @param string $arp_sequence Arp sequence
     *
     * @return $this
     */
    public function setArpSequence($arp_sequence)
    {
        $this->container['arp_sequence'] = $arp_sequence;

        return $this;
    }

    /**
     * Gets is_debit_paid
     *
     * @return bool
     */
    public function getIsDebitPaid()
    {
        return $this->container['is_debit_paid'];
    }

    /**
     * Sets is_debit_paid
     *
     * @param bool $is_debit_paid True if the debit is fully paid
     *
     * @return $this
     */
    public function setIsDebitPaid($is_debit_paid)
    {
        $this->container['is_debit_paid'] = $is_debit_paid;

        return $this;
    }

    /**
     * Gets source_system_reference
     *
     * @return string
     */
    public function getSourceSystemReference()
    {
        return $this->container['source_system_reference'];
    }

    /**
     * Sets source_system_reference
     *
     * @param string $source_system_reference Source system reference
     *
     * @return $this
     */
    public function setSourceSystemReference($source_system_reference)
    {
        $this->container['source_system_reference'] = $source_system_reference;

        return $this;
    }

    /**
     * Gets source_customer
     *
     * @return string
     */
    public function getSourceCustomer()
    {
        return $this->container['source_customer'];
    }

    /**
     * Sets source_customer
     *
     * @param string $source_customer Source customer
     *
     * @return $this
     */
    public function setSourceCustomer($source_customer)
    {
        $this->container['source_customer'] = $source_customer;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date Date payment is due
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets invoice_terms
     *
     * @return string
     */
    public function getInvoiceTerms()
    {
        return $this->container['invoice_terms'];
    }

    /**
     * Sets invoice_terms
     *
     * @param string $invoice_terms Invoice terms
     *
     * @return $this
     */
    public function setInvoiceTerms($invoice_terms)
    {
        $this->container['invoice_terms'] = $invoice_terms;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date Invoice date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

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
     * Gets total_debit_amount
     *
     * @return double
     */
    public function getTotalDebitAmount()
    {
        return $this->container['total_debit_amount'];
    }

    /**
     * Sets total_debit_amount
     *
     * @param double $total_debit_amount Total debit amount
     *
     * @return $this
     */
    public function setTotalDebitAmount($total_debit_amount)
    {
        $this->container['total_debit_amount'] = $total_debit_amount;

        return $this;
    }

    /**
     * Gets total_amount_paid
     *
     * @return double
     */
    public function getTotalAmountPaid()
    {
        return $this->container['total_amount_paid'];
    }

    /**
     * Sets total_amount_paid
     *
     * @param double $total_amount_paid Total amount paid against this debit
     *
     * @return $this
     */
    public function setTotalAmountPaid($total_amount_paid)
    {
        $this->container['total_amount_paid'] = $total_amount_paid;

        return $this;
    }

    /**
     * Gets installment_payments
     *
     * @return int
     */
    public function getInstallmentPayments()
    {
        return $this->container['installment_payments'];
    }

    /**
     * Sets installment_payments
     *
     * @param int $installment_payments Number of installment billing payments
     *
     * @return $this
     */
    public function setInstallmentPayments($installment_payments)
    {
        $this->container['installment_payments'] = $installment_payments;

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
     * @param string $installment_billing_code Installment billing code
     *
     * @return $this
     */
    public function setInstallmentBillingCode($installment_billing_code)
    {
        $this->container['installment_billing_code'] = $installment_billing_code;

        return $this;
    }

    /**
     * Gets billing_organization
     *
     * @return string
     */
    public function getBillingOrganization()
    {
        return $this->container['billing_organization'];
    }

    /**
     * Sets billing_organization
     *
     * @param string $billing_organization Billing organization
     *
     * @return $this
     */
    public function setBillingOrganization($billing_organization)
    {
        $this->container['billing_organization'] = $billing_organization;

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


