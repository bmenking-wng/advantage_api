<?php
/**
 * AccessOrderLine
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
 * AccessOrderLine Class Doc Comment
 *
 * @category Class
 * @description Information about an access order line
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessOrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessOrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'renewal_policy_code' => 'string',
        'agreement_id' => 'string',
        'agreement_type' => 'string',
        'price_code' => 'string',
        'access_service_code' => 'string',
        'access_item_code' => 'string',
        'term_number' => 'int',
        'version_number' => 'int',
        'access_period_code' => 'string',
        'participants' => '\Advantage\Client\Model\AgreementParticipant[]',
        'pricing_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'renewal_policy_code' => null,
        'agreement_id' => null,
        'agreement_type' => null,
        'price_code' => null,
        'access_service_code' => null,
        'access_item_code' => null,
        'term_number' => 'int32',
        'version_number' => 'int32',
        'access_period_code' => null,
        'participants' => null,
        'pricing_method' => null
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
        'renewal_policy_code' => 'RenewalPolicyCode',
        'agreement_id' => 'AgreementId',
        'agreement_type' => 'AgreementType',
        'price_code' => 'PriceCode',
        'access_service_code' => 'AccessServiceCode',
        'access_item_code' => 'AccessItemCode',
        'term_number' => 'TermNumber',
        'version_number' => 'VersionNumber',
        'access_period_code' => 'AccessPeriodCode',
        'participants' => 'Participants',
        'pricing_method' => 'PricingMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'renewal_policy_code' => 'setRenewalPolicyCode',
        'agreement_id' => 'setAgreementId',
        'agreement_type' => 'setAgreementType',
        'price_code' => 'setPriceCode',
        'access_service_code' => 'setAccessServiceCode',
        'access_item_code' => 'setAccessItemCode',
        'term_number' => 'setTermNumber',
        'version_number' => 'setVersionNumber',
        'access_period_code' => 'setAccessPeriodCode',
        'participants' => 'setParticipants',
        'pricing_method' => 'setPricingMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'renewal_policy_code' => 'getRenewalPolicyCode',
        'agreement_id' => 'getAgreementId',
        'agreement_type' => 'getAgreementType',
        'price_code' => 'getPriceCode',
        'access_service_code' => 'getAccessServiceCode',
        'access_item_code' => 'getAccessItemCode',
        'term_number' => 'getTermNumber',
        'version_number' => 'getVersionNumber',
        'access_period_code' => 'getAccessPeriodCode',
        'participants' => 'getParticipants',
        'pricing_method' => 'getPricingMethod'
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

    const AGREEMENT_TYPE_COMPLIMENTARY = 'Complimentary';
    const AGREEMENT_TYPE_INVOICEABLE = 'Invoiceable';
    const AGREEMENT_TYPE_PROFORMA = 'Proforma';
    const AGREEMENT_TYPE_TRIAL = 'Trial';
    const PRICING_METHOD_AGREEMENT_BASED = 'AgreementBased';
    const PRICING_METHOD_PARTICIPANT_BASED = 'ParticipantBased';
    const PRICING_METHOD_QUANTITY_BASED = 'QuantityBased';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAgreementTypeAllowableValues()
    {
        return [
            self::AGREEMENT_TYPE_COMPLIMENTARY,
            self::AGREEMENT_TYPE_INVOICEABLE,
            self::AGREEMENT_TYPE_PROFORMA,
            self::AGREEMENT_TYPE_TRIAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPricingMethodAllowableValues()
    {
        return [
            self::PRICING_METHOD_AGREEMENT_BASED,
            self::PRICING_METHOD_PARTICIPANT_BASED,
            self::PRICING_METHOD_QUANTITY_BASED,
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
        $this->container['renewal_policy_code'] = isset($data['renewal_policy_code']) ? $data['renewal_policy_code'] : null;
        $this->container['agreement_id'] = isset($data['agreement_id']) ? $data['agreement_id'] : null;
        $this->container['agreement_type'] = isset($data['agreement_type']) ? $data['agreement_type'] : null;
        $this->container['price_code'] = isset($data['price_code']) ? $data['price_code'] : null;
        $this->container['access_service_code'] = isset($data['access_service_code']) ? $data['access_service_code'] : null;
        $this->container['access_item_code'] = isset($data['access_item_code']) ? $data['access_item_code'] : null;
        $this->container['term_number'] = isset($data['term_number']) ? $data['term_number'] : null;
        $this->container['version_number'] = isset($data['version_number']) ? $data['version_number'] : null;
        $this->container['access_period_code'] = isset($data['access_period_code']) ? $data['access_period_code'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['pricing_method'] = isset($data['pricing_method']) ? $data['pricing_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAgreementTypeAllowableValues();
        if (!is_null($this->container['agreement_type']) && !in_array($this->container['agreement_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'agreement_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPricingMethodAllowableValues();
        if (!is_null($this->container['pricing_method']) && !in_array($this->container['pricing_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pricing_method', must be one of '%s'",
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
     * Gets renewal_policy_code
     *
     * @return string
     */
    public function getRenewalPolicyCode()
    {
        return $this->container['renewal_policy_code'];
    }

    /**
     * Sets renewal_policy_code
     *
     * @param string $renewal_policy_code Indicates whether a renewal notice should be sent to the subscriber.
     *
     * @return $this
     */
    public function setRenewalPolicyCode($renewal_policy_code)
    {
        $this->container['renewal_policy_code'] = $renewal_policy_code;

        return $this;
    }

    /**
     * Gets agreement_id
     *
     * @return string
     */
    public function getAgreementId()
    {
        return $this->container['agreement_id'];
    }

    /**
     * Sets agreement_id
     *
     * @param string $agreement_id The agreement ID.
     *
     * @return $this
     */
    public function setAgreementId($agreement_id)
    {
        $this->container['agreement_id'] = $agreement_id;

        return $this;
    }

    /**
     * Gets agreement_type
     *
     * @return string
     */
    public function getAgreementType()
    {
        return $this->container['agreement_type'];
    }

    /**
     * Sets agreement_type
     *
     * @param string $agreement_type The type, categorizing the agreement.
     *
     * @return $this
     */
    public function setAgreementType($agreement_type)
    {
        $allowedValues = $this->getAgreementTypeAllowableValues();
        if (!is_null($agreement_type) && !in_array($agreement_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'agreement_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['agreement_type'] = $agreement_type;

        return $this;
    }

    /**
     * Gets price_code
     *
     * @return string
     */
    public function getPriceCode()
    {
        return $this->container['price_code'];
    }

    /**
     * Sets price_code
     *
     * @param string $price_code Price code, determining the unit price.
     *
     * @return $this
     */
    public function setPriceCode($price_code)
    {
        $this->container['price_code'] = $price_code;

        return $this;
    }

    /**
     * Gets access_service_code
     *
     * @return string
     */
    public function getAccessServiceCode()
    {
        return $this->container['access_service_code'];
    }

    /**
     * Sets access_service_code
     *
     * @param string $access_service_code The service ID, defining a content access service - the top level of product structure in AMB.
     *
     * @return $this
     */
    public function setAccessServiceCode($access_service_code)
    {
        $this->container['access_service_code'] = $access_service_code;

        return $this;
    }

    /**
     * Gets access_item_code
     *
     * @return string
     */
    public function getAccessItemCode()
    {
        return $this->container['access_item_code'];
    }

    /**
     * Sets access_item_code
     *
     * @param string $access_item_code The service type, a way of packaging content within an access service.
     *
     * @return $this
     */
    public function setAccessItemCode($access_item_code)
    {
        $this->container['access_item_code'] = $access_item_code;

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
     * @param int $term_number The term number within the agreement.
     *
     * @return $this
     */
    public function setTermNumber($term_number)
    {
        $this->container['term_number'] = $term_number;

        return $this;
    }

    /**
     * Gets version_number
     *
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->container['version_number'];
    }

    /**
     * Sets version_number
     *
     * @param int $version_number The version number within the agreement term.
     *
     * @return $this
     */
    public function setVersionNumber($version_number)
    {
        $this->container['version_number'] = $version_number;

        return $this;
    }

    /**
     * Gets access_period_code
     *
     * @return string
     */
    public function getAccessPeriodCode()
    {
        return $this->container['access_period_code'];
    }

    /**
     * Sets access_period_code
     *
     * @param string $access_period_code The period code, defining the length of the agreement.
     *
     * @return $this
     */
    public function setAccessPeriodCode($access_period_code)
    {
        $this->container['access_period_code'] = $access_period_code;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \Advantage\Client\Model\AgreementParticipant[]
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Advantage\Client\Model\AgreementParticipant[] $participants A List of email addresses of the participants to the agreement.
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets pricing_method
     *
     * @return string
     */
    public function getPricingMethod()
    {
        return $this->container['pricing_method'];
    }

    /**
     * Sets pricing_method
     *
     * @param string $pricing_method The pricing method of the agreement, denoting how the price of the agreement is determined.
     *
     * @return $this
     */
    public function setPricingMethod($pricing_method)
    {
        $allowedValues = $this->getPricingMethodAllowableValues();
        if (!is_null($pricing_method) && !in_array($pricing_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pricing_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pricing_method'] = $pricing_method;

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


