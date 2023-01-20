<?php
/**
 * SavedBankAccount
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
 * SavedBankAccount Class Doc Comment
 *
 * @category Class
 * @description Information for a Direct Debit payment.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SavedBankAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SavedBankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'electronic_payment_id' => 'string',
        'payment_method' => '\Advantage\Client\Model\DirectDebitPaymentMethod',
        'bank_id' => 'string',
        'account_number' => 'string',
        'account_type' => 'string',
        'is_valid_for_future_payments' => 'bool',
        'is_web_default' => 'bool',
        'date_last_used' => '\DateTime',
        'date_added' => '\DateTime',
        'nickname' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'electronic_payment_id' => null,
        'payment_method' => null,
        'bank_id' => null,
        'account_number' => null,
        'account_type' => null,
        'is_valid_for_future_payments' => null,
        'is_web_default' => null,
        'date_last_used' => 'date-time',
        'date_added' => 'date-time',
        'nickname' => null
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
        'payment_method' => 'PaymentMethod',
        'bank_id' => 'BankId',
        'account_number' => 'AccountNumber',
        'account_type' => 'AccountType',
        'is_valid_for_future_payments' => 'IsValidForFuturePayments',
        'is_web_default' => 'IsWebDefault',
        'date_last_used' => 'DateLastUsed',
        'date_added' => 'DateAdded',
        'nickname' => 'Nickname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'electronic_payment_id' => 'setElectronicPaymentId',
        'payment_method' => 'setPaymentMethod',
        'bank_id' => 'setBankId',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'is_valid_for_future_payments' => 'setIsValidForFuturePayments',
        'is_web_default' => 'setIsWebDefault',
        'date_last_used' => 'setDateLastUsed',
        'date_added' => 'setDateAdded',
        'nickname' => 'setNickname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'electronic_payment_id' => 'getElectronicPaymentId',
        'payment_method' => 'getPaymentMethod',
        'bank_id' => 'getBankId',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'is_valid_for_future_payments' => 'getIsValidForFuturePayments',
        'is_web_default' => 'getIsWebDefault',
        'date_last_used' => 'getDateLastUsed',
        'date_added' => 'getDateAdded',
        'nickname' => 'getNickname'
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

    const ACCOUNT_TYPE_SAVING = 'Saving';
    const ACCOUNT_TYPE_CHECKING = 'Checking';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_SAVING,
            self::ACCOUNT_TYPE_CHECKING,
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
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['bank_id'] = isset($data['bank_id']) ? $data['bank_id'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['is_valid_for_future_payments'] = isset($data['is_valid_for_future_payments']) ? $data['is_valid_for_future_payments'] : null;
        $this->container['is_web_default'] = isset($data['is_web_default']) ? $data['is_web_default'] : null;
        $this->container['date_last_used'] = isset($data['date_last_used']) ? $data['date_last_used'] : null;
        $this->container['date_added'] = isset($data['date_added']) ? $data['date_added'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account_type', must be one of '%s'",
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
     * @param string $electronic_payment_id The unique payment identifier.
     *
     * @return $this
     */
    public function setElectronicPaymentId($electronic_payment_id)
    {
        $this->container['electronic_payment_id'] = $electronic_payment_id;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Advantage\Client\Model\DirectDebitPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Advantage\Client\Model\DirectDebitPaymentMethod $payment_method The direct debit payment method.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets bank_id
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->container['bank_id'];
    }

    /**
     * Sets bank_id
     *
     * @param string $bank_id The identifier for the bank that holds the account.
     *
     * @return $this
     */
    public function setBankId($bank_id)
    {
        $this->container['bank_id'] = $bank_id;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number The number of the account.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type The type of account (checking or savings).
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($account_type) && !in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

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
     * @param bool $is_valid_for_future_payments Is this debit valid for use in the future?
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
     * @param bool $is_web_default Is this card a default for orders coming from the web?
     *
     * @return $this
     */
    public function setIsWebDefault($is_web_default)
    {
        $this->container['is_web_default'] = $is_web_default;

        return $this;
    }

    /**
     * Gets date_last_used
     *
     * @return \DateTime
     */
    public function getDateLastUsed()
    {
        return $this->container['date_last_used'];
    }

    /**
     * Sets date_last_used
     *
     * @param \DateTime $date_last_used The date the direct debit was last used
     *
     * @return $this
     */
    public function setDateLastUsed($date_last_used)
    {
        $this->container['date_last_used'] = $date_last_used;

        return $this;
    }

    /**
     * Gets date_added
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->container['date_added'];
    }

    /**
     * Sets date_added
     *
     * @param \DateTime $date_added The date the direct debit was added
     *
     * @return $this
     */
    public function setDateAdded($date_added)
    {
        $this->container['date_added'] = $date_added;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname Affiliate nickname of the direct debit
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

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


