<?php
/**
 * UnappliedCredit
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
 * UnappliedCredit Class Doc Comment
 *
 * @category Class
 * @description Information about a customer&#39;s unapplied credit.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnappliedCredit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnappliedCredit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'voucher_number' => 'string',
        'credit_document_number' => 'string',
        'amount' => 'double',
        'balance' => 'double',
        'currency_code' => 'string',
        'posting_flag' => 'string',
        'payment_type' => 'string',
        'payment_method_code' => 'string',
        'payment_date' => '\DateTime',
        'control_group_date' => '\DateTime',
        'control_group_id' => 'string',
        'credit_reason_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'voucher_number' => null,
        'credit_document_number' => null,
        'amount' => 'double',
        'balance' => 'double',
        'currency_code' => null,
        'posting_flag' => null,
        'payment_type' => null,
        'payment_method_code' => null,
        'payment_date' => 'date-time',
        'control_group_date' => 'date-time',
        'control_group_id' => null,
        'credit_reason_code' => null
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
        'voucher_number' => 'VoucherNumber',
        'credit_document_number' => 'CreditDocumentNumber',
        'amount' => 'Amount',
        'balance' => 'Balance',
        'currency_code' => 'CurrencyCode',
        'posting_flag' => 'PostingFlag',
        'payment_type' => 'PaymentType',
        'payment_method_code' => 'PaymentMethodCode',
        'payment_date' => 'PaymentDate',
        'control_group_date' => 'ControlGroupDate',
        'control_group_id' => 'ControlGroupId',
        'credit_reason_code' => 'CreditReasonCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voucher_number' => 'setVoucherNumber',
        'credit_document_number' => 'setCreditDocumentNumber',
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'currency_code' => 'setCurrencyCode',
        'posting_flag' => 'setPostingFlag',
        'payment_type' => 'setPaymentType',
        'payment_method_code' => 'setPaymentMethodCode',
        'payment_date' => 'setPaymentDate',
        'control_group_date' => 'setControlGroupDate',
        'control_group_id' => 'setControlGroupId',
        'credit_reason_code' => 'setCreditReasonCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voucher_number' => 'getVoucherNumber',
        'credit_document_number' => 'getCreditDocumentNumber',
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'currency_code' => 'getCurrencyCode',
        'posting_flag' => 'getPostingFlag',
        'payment_type' => 'getPaymentType',
        'payment_method_code' => 'getPaymentMethodCode',
        'payment_date' => 'getPaymentDate',
        'control_group_date' => 'getControlGroupDate',
        'control_group_id' => 'getControlGroupId',
        'credit_reason_code' => 'getCreditReasonCode'
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
        $this->container['voucher_number'] = isset($data['voucher_number']) ? $data['voucher_number'] : null;
        $this->container['credit_document_number'] = isset($data['credit_document_number']) ? $data['credit_document_number'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['posting_flag'] = isset($data['posting_flag']) ? $data['posting_flag'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['payment_method_code'] = isset($data['payment_method_code']) ? $data['payment_method_code'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['control_group_date'] = isset($data['control_group_date']) ? $data['control_group_date'] : null;
        $this->container['control_group_id'] = isset($data['control_group_id']) ? $data['control_group_id'] : null;
        $this->container['credit_reason_code'] = isset($data['credit_reason_code']) ? $data['credit_reason_code'] : null;
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
     * Gets voucher_number
     *
     * @return string
     */
    public function getVoucherNumber()
    {
        return $this->container['voucher_number'];
    }

    /**
     * Sets voucher_number
     *
     * @param string $voucher_number The Credit Voucher Number is a unique identification number assigned to the credit by the system.
     *
     * @return $this
     */
    public function setVoucherNumber($voucher_number)
    {
        $this->container['voucher_number'] = $voucher_number;

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
     * @param string $credit_document_number he Credit Document Number is the check number or other customer-provided ID number.
     *
     * @return $this
     */
    public function setCreditDocumentNumber($credit_document_number)
    {
        $this->container['credit_document_number'] = $credit_document_number;

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
     * @param double $amount Amount of credit
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
     * @param double $balance Unapplied credit balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * @param string $currency_code Payment currency
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets posting_flag
     *
     * @return string
     */
    public function getPostingFlag()
    {
        return $this->container['posting_flag'];
    }

    /**
     * Sets posting_flag
     *
     * @param string $posting_flag Posted/unposted flag
     *
     * @return $this
     */
    public function setPostingFlag($posting_flag)
    {
        $this->container['posting_flag'] = $posting_flag;

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
     * Gets payment_method_code
     *
     * @return string
     */
    public function getPaymentMethodCode()
    {
        return $this->container['payment_method_code'];
    }

    /**
     * Sets payment_method_code
     *
     * @param string $payment_method_code Payment code
     *
     * @return $this
     */
    public function setPaymentMethodCode($payment_method_code)
    {
        $this->container['payment_method_code'] = $payment_method_code;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date Payment date
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets control_group_date
     *
     * @return \DateTime
     */
    public function getControlGroupDate()
    {
        return $this->container['control_group_date'];
    }

    /**
     * Sets control_group_date
     *
     * @param \DateTime $control_group_date Control group date
     *
     * @return $this
     */
    public function setControlGroupDate($control_group_date)
    {
        $this->container['control_group_date'] = $control_group_date;

        return $this;
    }

    /**
     * Gets control_group_id
     *
     * @return string
     */
    public function getControlGroupId()
    {
        return $this->container['control_group_id'];
    }

    /**
     * Sets control_group_id
     *
     * @param string $control_group_id Control group ID
     *
     * @return $this
     */
    public function setControlGroupId($control_group_id)
    {
        $this->container['control_group_id'] = $control_group_id;

        return $this;
    }

    /**
     * Gets credit_reason_code
     *
     * @return string
     */
    public function getCreditReasonCode()
    {
        return $this->container['credit_reason_code'];
    }

    /**
     * Sets credit_reason_code
     *
     * @param string $credit_reason_code Credit Reason Code
     *
     * @return $this
     */
    public function setCreditReasonCode($credit_reason_code)
    {
        $this->container['credit_reason_code'] = $credit_reason_code;

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


