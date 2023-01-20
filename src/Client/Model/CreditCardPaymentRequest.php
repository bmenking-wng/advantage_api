<?php
/**
 * CreditCardPaymentRequest
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
 * CreditCardPaymentRequest Class Doc Comment
 *
 * @category Class
 * @description Information for a credit card payment.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCardPaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditCardPaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'electronic_payment_id' => 'string',
        'card' => '\Advantage\Client\Model\CreditCardAddRequest',
        'security_code' => 'string',
        'amount' => 'double',
        'capture_id' => 'string',
        'authorization_information' => '\Advantage\Client\Model\CreditCardAuthorizationInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'electronic_payment_id' => null,
        'card' => null,
        'security_code' => null,
        'amount' => 'double',
        'capture_id' => null,
        'authorization_information' => null
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
        'card' => 'Card',
        'security_code' => 'SecurityCode',
        'amount' => 'Amount',
        'capture_id' => 'CaptureId',
        'authorization_information' => 'AuthorizationInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'electronic_payment_id' => 'setElectronicPaymentId',
        'card' => 'setCard',
        'security_code' => 'setSecurityCode',
        'amount' => 'setAmount',
        'capture_id' => 'setCaptureId',
        'authorization_information' => 'setAuthorizationInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'electronic_payment_id' => 'getElectronicPaymentId',
        'card' => 'getCard',
        'security_code' => 'getSecurityCode',
        'amount' => 'getAmount',
        'capture_id' => 'getCaptureId',
        'authorization_information' => 'getAuthorizationInformation'
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
        $this->container['electronic_payment_id'] = isset($data['electronic_payment_id']) ? $data['electronic_payment_id'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['security_code'] = isset($data['security_code']) ? $data['security_code'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['capture_id'] = isset($data['capture_id']) ? $data['capture_id'] : null;
        $this->container['authorization_information'] = isset($data['authorization_information']) ? $data['authorization_information'] : null;
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
     * @param string $electronic_payment_id The electronic payment ID which uniquely identifies a saved card to charge.  You must include either the CardId or the Card element.
     *
     * @return $this
     */
    public function setElectronicPaymentId($electronic_payment_id)
    {
        $this->container['electronic_payment_id'] = $electronic_payment_id;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \Advantage\Client\Model\CreditCardAddRequest
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \Advantage\Client\Model\CreditCardAddRequest $card The credit card to charge.  You must provide either the ElectronicPaymentId or the Card.
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets security_code
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->container['security_code'];
    }

    /**
     * Sets security_code
     *
     * @param string $security_code The card security code (CSC number).
     *
     * @return $this
     */
    public function setSecurityCode($security_code)
    {
        $this->container['security_code'] = $security_code;

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
     * @param double $amount The amount of the payment.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets capture_id
     *
     * @return string
     */
    public function getCaptureId()
    {
        return $this->container['capture_id'];
    }

    /**
     * Sets capture_id
     *
     * @param string $capture_id The card's capture ID.
     *
     * @return $this
     */
    public function setCaptureId($capture_id)
    {
        $this->container['capture_id'] = $capture_id;

        return $this;
    }

    /**
     * Gets authorization_information
     *
     * @return \Advantage\Client\Model\CreditCardAuthorizationInformation
     */
    public function getAuthorizationInformation()
    {
        return $this->container['authorization_information'];
    }

    /**
     * Sets authorization_information
     *
     * @param \Advantage\Client\Model\CreditCardAuthorizationInformation $authorization_information The card's authorization info
     *
     * @return $this
     */
    public function setAuthorizationInformation($authorization_information)
    {
        $this->container['authorization_information'] = $authorization_information;

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


