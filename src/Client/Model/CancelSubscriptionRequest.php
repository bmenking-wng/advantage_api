<?php
/**
 * CancelSubscriptionRequest
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
 * CancelSubscriptionRequest Class Doc Comment
 *
 * @category Class
 * @description Information for requesting a subscription to be canceled.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CancelSubscriptionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CancelSubscriptionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cancel_reason_code' => 'string',
        'credit_issues' => 'int',
        'cancel_all_terms' => 'bool',
        'charge_for_issues_served' => 'string',
        'term_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cancel_reason_code' => null,
        'credit_issues' => 'int32',
        'cancel_all_terms' => null,
        'charge_for_issues_served' => null,
        'term_number' => 'int32'
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
        'cancel_reason_code' => 'CancelReasonCode',
        'credit_issues' => 'CreditIssues',
        'cancel_all_terms' => 'CancelAllTerms',
        'charge_for_issues_served' => 'ChargeForIssuesServed',
        'term_number' => 'TermNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancel_reason_code' => 'setCancelReasonCode',
        'credit_issues' => 'setCreditIssues',
        'cancel_all_terms' => 'setCancelAllTerms',
        'charge_for_issues_served' => 'setChargeForIssuesServed',
        'term_number' => 'setTermNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancel_reason_code' => 'getCancelReasonCode',
        'credit_issues' => 'getCreditIssues',
        'cancel_all_terms' => 'getCancelAllTerms',
        'charge_for_issues_served' => 'getChargeForIssuesServed',
        'term_number' => 'getTermNumber'
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

    const CHARGE_FOR_ISSUES_SERVED_IF_PAYMENT = 'IfPayment';
    const CHARGE_FOR_ISSUES_SERVED_IF_NO_PAYMENT = 'IfNoPayment';
    const CHARGE_FOR_ISSUES_SERVED_NO = 'No';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargeForIssuesServedAllowableValues()
    {
        return [
            self::CHARGE_FOR_ISSUES_SERVED_IF_PAYMENT,
            self::CHARGE_FOR_ISSUES_SERVED_IF_NO_PAYMENT,
            self::CHARGE_FOR_ISSUES_SERVED_NO,
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
        $this->container['cancel_reason_code'] = isset($data['cancel_reason_code']) ? $data['cancel_reason_code'] : null;
        $this->container['credit_issues'] = isset($data['credit_issues']) ? $data['credit_issues'] : null;
        $this->container['cancel_all_terms'] = isset($data['cancel_all_terms']) ? $data['cancel_all_terms'] : null;
        $this->container['charge_for_issues_served'] = isset($data['charge_for_issues_served']) ? $data['charge_for_issues_served'] : null;
        $this->container['term_number'] = isset($data['term_number']) ? $data['term_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChargeForIssuesServedAllowableValues();
        if (!is_null($this->container['charge_for_issues_served']) && !in_array($this->container['charge_for_issues_served'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'charge_for_issues_served', must be one of '%s'",
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
     * Gets cancel_reason_code
     *
     * @return string
     */
    public function getCancelReasonCode()
    {
        return $this->container['cancel_reason_code'];
    }

    /**
     * Sets cancel_reason_code
     *
     * @param string $cancel_reason_code The reason code for the cancellation.
     *
     * @return $this
     */
    public function setCancelReasonCode($cancel_reason_code)
    {
        $this->container['cancel_reason_code'] = $cancel_reason_code;

        return $this;
    }

    /**
     * Gets credit_issues
     *
     * @return int
     */
    public function getCreditIssues()
    {
        return $this->container['credit_issues'];
    }

    /**
     * Sets credit_issues
     *
     * @param int $credit_issues Issues to credit
     *
     * @return $this
     */
    public function setCreditIssues($credit_issues)
    {
        $this->container['credit_issues'] = $credit_issues;

        return $this;
    }

    /**
     * Gets cancel_all_terms
     *
     * @return bool
     */
    public function getCancelAllTerms()
    {
        return $this->container['cancel_all_terms'];
    }

    /**
     * Sets cancel_all_terms
     *
     * @param bool $cancel_all_terms Cancel all terms?
     *
     * @return $this
     */
    public function setCancelAllTerms($cancel_all_terms)
    {
        $this->container['cancel_all_terms'] = $cancel_all_terms;

        return $this;
    }

    /**
     * Gets charge_for_issues_served
     *
     * @return string
     */
    public function getChargeForIssuesServed()
    {
        return $this->container['charge_for_issues_served'];
    }

    /**
     * Sets charge_for_issues_served
     *
     * @param string $charge_for_issues_served The charge for issues served flag determines whether an invoice will be generated to charge  the customer for issues already served.
     *
     * @return $this
     */
    public function setChargeForIssuesServed($charge_for_issues_served)
    {
        $allowedValues = $this->getChargeForIssuesServedAllowableValues();
        if (!is_null($charge_for_issues_served) && !in_array($charge_for_issues_served, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'charge_for_issues_served', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['charge_for_issues_served'] = $charge_for_issues_served;

        return $this;
    }

    /**
     * Gets term_number
     *
     * @return int
     */
    public function getTermNumber()
    {
        return $this->container['term_number'];
    }

    /**
     * Sets term_number
     *
     * @param int $term_number Term number of the subscription to cancel
     *
     * @return $this
     */
    public function setTermNumber($term_number)
    {
        $this->container['term_number'] = $term_number;

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


