<?php
/**
 * ResponseType
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
 * ResponseType Class Doc Comment
 *
 * @category Class
 * @description An Advantage Response Type (or Order Source) from the CDSRST-T table
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'name' => 'string',
        'is_on_phone' => 'bool',
        'is_from_web' => 'bool',
        'are_ftc_notices_sent' => 'bool',
        'is_check_payment_allowed' => 'bool',
        'is_credit_card_payment_allowed' => 'bool',
        'is_direct_debit_payment_allowed' => 'bool',
        'is_account_credit_payment_allowed' => 'bool',
        'is_miscellaneous_credit_payment_allowed' => 'bool',
        'is_gift_certificate_payment_allowed' => 'bool',
        'is_active' => 'bool',
        'prompt_for_card_security_code' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'name' => null,
        'is_on_phone' => null,
        'is_from_web' => null,
        'are_ftc_notices_sent' => null,
        'is_check_payment_allowed' => null,
        'is_credit_card_payment_allowed' => null,
        'is_direct_debit_payment_allowed' => null,
        'is_account_credit_payment_allowed' => null,
        'is_miscellaneous_credit_payment_allowed' => null,
        'is_gift_certificate_payment_allowed' => null,
        'is_active' => null,
        'prompt_for_card_security_code' => null
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
        'code' => 'Code',
        'name' => 'Name',
        'is_on_phone' => 'IsOnPhone',
        'is_from_web' => 'IsFromWeb',
        'are_ftc_notices_sent' => 'AreFtcNoticesSent',
        'is_check_payment_allowed' => 'IsCheckPaymentAllowed',
        'is_credit_card_payment_allowed' => 'IsCreditCardPaymentAllowed',
        'is_direct_debit_payment_allowed' => 'IsDirectDebitPaymentAllowed',
        'is_account_credit_payment_allowed' => 'IsAccountCreditPaymentAllowed',
        'is_miscellaneous_credit_payment_allowed' => 'IsMiscellaneousCreditPaymentAllowed',
        'is_gift_certificate_payment_allowed' => 'IsGiftCertificatePaymentAllowed',
        'is_active' => 'IsActive',
        'prompt_for_card_security_code' => 'PromptForCardSecurityCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'is_on_phone' => 'setIsOnPhone',
        'is_from_web' => 'setIsFromWeb',
        'are_ftc_notices_sent' => 'setAreFtcNoticesSent',
        'is_check_payment_allowed' => 'setIsCheckPaymentAllowed',
        'is_credit_card_payment_allowed' => 'setIsCreditCardPaymentAllowed',
        'is_direct_debit_payment_allowed' => 'setIsDirectDebitPaymentAllowed',
        'is_account_credit_payment_allowed' => 'setIsAccountCreditPaymentAllowed',
        'is_miscellaneous_credit_payment_allowed' => 'setIsMiscellaneousCreditPaymentAllowed',
        'is_gift_certificate_payment_allowed' => 'setIsGiftCertificatePaymentAllowed',
        'is_active' => 'setIsActive',
        'prompt_for_card_security_code' => 'setPromptForCardSecurityCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'is_on_phone' => 'getIsOnPhone',
        'is_from_web' => 'getIsFromWeb',
        'are_ftc_notices_sent' => 'getAreFtcNoticesSent',
        'is_check_payment_allowed' => 'getIsCheckPaymentAllowed',
        'is_credit_card_payment_allowed' => 'getIsCreditCardPaymentAllowed',
        'is_direct_debit_payment_allowed' => 'getIsDirectDebitPaymentAllowed',
        'is_account_credit_payment_allowed' => 'getIsAccountCreditPaymentAllowed',
        'is_miscellaneous_credit_payment_allowed' => 'getIsMiscellaneousCreditPaymentAllowed',
        'is_gift_certificate_payment_allowed' => 'getIsGiftCertificatePaymentAllowed',
        'is_active' => 'getIsActive',
        'prompt_for_card_security_code' => 'getPromptForCardSecurityCode'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_on_phone'] = isset($data['is_on_phone']) ? $data['is_on_phone'] : null;
        $this->container['is_from_web'] = isset($data['is_from_web']) ? $data['is_from_web'] : null;
        $this->container['are_ftc_notices_sent'] = isset($data['are_ftc_notices_sent']) ? $data['are_ftc_notices_sent'] : null;
        $this->container['is_check_payment_allowed'] = isset($data['is_check_payment_allowed']) ? $data['is_check_payment_allowed'] : null;
        $this->container['is_credit_card_payment_allowed'] = isset($data['is_credit_card_payment_allowed']) ? $data['is_credit_card_payment_allowed'] : null;
        $this->container['is_direct_debit_payment_allowed'] = isset($data['is_direct_debit_payment_allowed']) ? $data['is_direct_debit_payment_allowed'] : null;
        $this->container['is_account_credit_payment_allowed'] = isset($data['is_account_credit_payment_allowed']) ? $data['is_account_credit_payment_allowed'] : null;
        $this->container['is_miscellaneous_credit_payment_allowed'] = isset($data['is_miscellaneous_credit_payment_allowed']) ? $data['is_miscellaneous_credit_payment_allowed'] : null;
        $this->container['is_gift_certificate_payment_allowed'] = isset($data['is_gift_certificate_payment_allowed']) ? $data['is_gift_certificate_payment_allowed'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['prompt_for_card_security_code'] = isset($data['prompt_for_card_security_code']) ? $data['prompt_for_card_security_code'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Response type code (also known as Order Source Code)
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The response type name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_on_phone
     *
     * @return bool
     */
    public function getIsOnPhone()
    {
        return $this->container['is_on_phone'];
    }

    /**
     * Sets is_on_phone
     *
     * @param bool $is_on_phone Is this response type used for orders taken over the phone?
     *
     * @return $this
     */
    public function setIsOnPhone($is_on_phone)
    {
        $this->container['is_on_phone'] = $is_on_phone;

        return $this;
    }

    /**
     * Gets is_from_web
     *
     * @return bool
     */
    public function getIsFromWeb()
    {
        return $this->container['is_from_web'];
    }

    /**
     * Sets is_from_web
     *
     * @param bool $is_from_web Is this response type used for orders taken over the web?
     *
     * @return $this
     */
    public function setIsFromWeb($is_from_web)
    {
        $this->container['is_from_web'] = $is_from_web;

        return $this;
    }

    /**
     * Gets are_ftc_notices_sent
     *
     * @return bool
     */
    public function getAreFtcNoticesSent()
    {
        return $this->container['are_ftc_notices_sent'];
    }

    /**
     * Sets are_ftc_notices_sent
     *
     * @param bool $are_ftc_notices_sent Send FTC Notices
     *
     * @return $this
     */
    public function setAreFtcNoticesSent($are_ftc_notices_sent)
    {
        $this->container['are_ftc_notices_sent'] = $are_ftc_notices_sent;

        return $this;
    }

    /**
     * Gets is_check_payment_allowed
     *
     * @return bool
     */
    public function getIsCheckPaymentAllowed()
    {
        return $this->container['is_check_payment_allowed'];
    }

    /**
     * Sets is_check_payment_allowed
     *
     * @param bool $is_check_payment_allowed Are check payments allowed by this response type?
     *
     * @return $this
     */
    public function setIsCheckPaymentAllowed($is_check_payment_allowed)
    {
        $this->container['is_check_payment_allowed'] = $is_check_payment_allowed;

        return $this;
    }

    /**
     * Gets is_credit_card_payment_allowed
     *
     * @return bool
     */
    public function getIsCreditCardPaymentAllowed()
    {
        return $this->container['is_credit_card_payment_allowed'];
    }

    /**
     * Sets is_credit_card_payment_allowed
     *
     * @param bool $is_credit_card_payment_allowed Are credit card payments allowed by this response type?
     *
     * @return $this
     */
    public function setIsCreditCardPaymentAllowed($is_credit_card_payment_allowed)
    {
        $this->container['is_credit_card_payment_allowed'] = $is_credit_card_payment_allowed;

        return $this;
    }

    /**
     * Gets is_direct_debit_payment_allowed
     *
     * @return bool
     */
    public function getIsDirectDebitPaymentAllowed()
    {
        return $this->container['is_direct_debit_payment_allowed'];
    }

    /**
     * Sets is_direct_debit_payment_allowed
     *
     * @param bool $is_direct_debit_payment_allowed Are direct debit payments allowed by this response type?
     *
     * @return $this
     */
    public function setIsDirectDebitPaymentAllowed($is_direct_debit_payment_allowed)
    {
        $this->container['is_direct_debit_payment_allowed'] = $is_direct_debit_payment_allowed;

        return $this;
    }

    /**
     * Gets is_account_credit_payment_allowed
     *
     * @return bool
     */
    public function getIsAccountCreditPaymentAllowed()
    {
        return $this->container['is_account_credit_payment_allowed'];
    }

    /**
     * Sets is_account_credit_payment_allowed
     *
     * @param bool $is_account_credit_payment_allowed Are account credit payments allowed by this response type?
     *
     * @return $this
     */
    public function setIsAccountCreditPaymentAllowed($is_account_credit_payment_allowed)
    {
        $this->container['is_account_credit_payment_allowed'] = $is_account_credit_payment_allowed;

        return $this;
    }

    /**
     * Gets is_miscellaneous_credit_payment_allowed
     *
     * @return bool
     */
    public function getIsMiscellaneousCreditPaymentAllowed()
    {
        return $this->container['is_miscellaneous_credit_payment_allowed'];
    }

    /**
     * Sets is_miscellaneous_credit_payment_allowed
     *
     * @param bool $is_miscellaneous_credit_payment_allowed Are miscellaneous credit payments allowed by this response type?
     *
     * @return $this
     */
    public function setIsMiscellaneousCreditPaymentAllowed($is_miscellaneous_credit_payment_allowed)
    {
        $this->container['is_miscellaneous_credit_payment_allowed'] = $is_miscellaneous_credit_payment_allowed;

        return $this;
    }

    /**
     * Gets is_gift_certificate_payment_allowed
     *
     * @return bool
     */
    public function getIsGiftCertificatePaymentAllowed()
    {
        return $this->container['is_gift_certificate_payment_allowed'];
    }

    /**
     * Sets is_gift_certificate_payment_allowed
     *
     * @param bool $is_gift_certificate_payment_allowed Are gift certificate payments allowed by this response type?
     *
     * @return $this
     */
    public function setIsGiftCertificatePaymentAllowed($is_gift_certificate_payment_allowed)
    {
        $this->container['is_gift_certificate_payment_allowed'] = $is_gift_certificate_payment_allowed;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Status
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets prompt_for_card_security_code
     *
     * @return bool
     */
    public function getPromptForCardSecurityCode()
    {
        return $this->container['prompt_for_card_security_code'];
    }

    /**
     * Sets prompt_for_card_security_code
     *
     * @param bool $prompt_for_card_security_code Prompt for CSC Code
     *
     * @return $this
     */
    public function setPromptForCardSecurityCode($prompt_for_card_security_code)
    {
        $this->container['prompt_for_card_security_code'] = $prompt_for_card_security_code;

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


