<?php
/**
 * SavedCreditCard
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
 * SavedCreditCard Class Doc Comment
 *
 * @category Class
 * @description Information pertaining to credit card payment.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SavedCreditCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SavedCreditCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'token' => 'string',
        'card_mask' => 'string',
        'payment_method' => '\Advantage\Client\Model\CreditCardPaymentMethod',
        'expire_month' => 'int',
        'expire_year' => 'int',
        'is_valid_for_future_payments' => 'bool',
        'electronic_payment_id' => 'string',
        'is_linked_to_auto_renewal' => 'bool',
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
        'token' => null,
        'card_mask' => null,
        'payment_method' => null,
        'expire_month' => 'int32',
        'expire_year' => 'int32',
        'is_valid_for_future_payments' => null,
        'electronic_payment_id' => null,
        'is_linked_to_auto_renewal' => null,
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
        'token' => 'Token',
        'card_mask' => 'CardMask',
        'payment_method' => 'PaymentMethod',
        'expire_month' => 'ExpireMonth',
        'expire_year' => 'ExpireYear',
        'is_valid_for_future_payments' => 'IsValidForFuturePayments',
        'electronic_payment_id' => 'ElectronicPaymentId',
        'is_linked_to_auto_renewal' => 'IsLinkedToAutoRenewal',
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
        'token' => 'setToken',
        'card_mask' => 'setCardMask',
        'payment_method' => 'setPaymentMethod',
        'expire_month' => 'setExpireMonth',
        'expire_year' => 'setExpireYear',
        'is_valid_for_future_payments' => 'setIsValidForFuturePayments',
        'electronic_payment_id' => 'setElectronicPaymentId',
        'is_linked_to_auto_renewal' => 'setIsLinkedToAutoRenewal',
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
        'token' => 'getToken',
        'card_mask' => 'getCardMask',
        'payment_method' => 'getPaymentMethod',
        'expire_month' => 'getExpireMonth',
        'expire_year' => 'getExpireYear',
        'is_valid_for_future_payments' => 'getIsValidForFuturePayments',
        'electronic_payment_id' => 'getElectronicPaymentId',
        'is_linked_to_auto_renewal' => 'getIsLinkedToAutoRenewal',
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['card_mask'] = isset($data['card_mask']) ? $data['card_mask'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['expire_month'] = isset($data['expire_month']) ? $data['expire_month'] : null;
        $this->container['expire_year'] = isset($data['expire_year']) ? $data['expire_year'] : null;
        $this->container['is_valid_for_future_payments'] = isset($data['is_valid_for_future_payments']) ? $data['is_valid_for_future_payments'] : null;
        $this->container['electronic_payment_id'] = isset($data['electronic_payment_id']) ? $data['electronic_payment_id'] : null;
        $this->container['is_linked_to_auto_renewal'] = isset($data['is_linked_to_auto_renewal']) ? $data['is_linked_to_auto_renewal'] : null;
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
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token The credit card token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets card_mask
     *
     * @return string
     */
    public function getCardMask()
    {
        return $this->container['card_mask'];
    }

    /**
     * Sets card_mask
     *
     * @param string $card_mask The masked credit card number.
     *
     * @return $this
     */
    public function setCardMask($card_mask)
    {
        $this->container['card_mask'] = $card_mask;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Advantage\Client\Model\CreditCardPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Advantage\Client\Model\CreditCardPaymentMethod $payment_method i.e. Visa or MasterCard.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
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
     * @param int $expire_month Card expiration month.
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
     * @param int $expire_year Card expiration year (four digits).
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
     * @param bool $is_valid_for_future_payments Is this card valid for future use?
     *
     * @return $this
     */
    public function setIsValidForFuturePayments($is_valid_for_future_payments)
    {
        $this->container['is_valid_for_future_payments'] = $is_valid_for_future_payments;

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
     * @param string $electronic_payment_id The electronic payment ID which uniquely identifies this card.  To use the saved card on a new order,   or to update the expire date, use this payment ID to identify the card.
     *
     * @return $this
     */
    public function setElectronicPaymentId($electronic_payment_id)
    {
        $this->container['electronic_payment_id'] = $electronic_payment_id;

        return $this;
    }

    /**
     * Gets is_linked_to_auto_renewal
     *
     * @return bool
     */
    public function getIsLinkedToAutoRenewal()
    {
        return $this->container['is_linked_to_auto_renewal'];
    }

    /**
     * Sets is_linked_to_auto_renewal
     *
     * @param bool $is_linked_to_auto_renewal Whether this card is used for any auto-renewals.
     *
     * @return $this
     */
    public function setIsLinkedToAutoRenewal($is_linked_to_auto_renewal)
    {
        $this->container['is_linked_to_auto_renewal'] = $is_linked_to_auto_renewal;

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
     * @param \DateTime $date_last_used The date the credit card was last used
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
     * @param \DateTime $date_added The date the credit card was added
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
     * @param string $nickname Affiliate nickname of the card
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


