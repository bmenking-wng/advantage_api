<?php
/**
 * ConferenceChoiceCreateRequest
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
 * ConferenceChoiceCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Contains the information required for creating a new conference choice
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConferenceChoiceCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConferenceChoiceCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'choice_code' => 'string',
        'name' => 'string',
        'bill_by' => 'string',
        'location_code' => 'string',
        'premium_set_code' => 'string',
        'status' => 'string',
        'valid_until' => '\DateTime',
        'web_bill_me_allowed' => 'string',
        'installment_billing_code' => 'string',
        'sessions' => '\Advantage\Client\Model\ConferenceChoiceSessionIn[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'choice_code' => null,
        'name' => null,
        'bill_by' => null,
        'location_code' => null,
        'premium_set_code' => null,
        'status' => null,
        'valid_until' => 'date-time',
        'web_bill_me_allowed' => null,
        'installment_billing_code' => null,
        'sessions' => null
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
        'choice_code' => 'ChoiceCode',
        'name' => 'Name',
        'bill_by' => 'BillBy',
        'location_code' => 'LocationCode',
        'premium_set_code' => 'PremiumSetCode',
        'status' => 'Status',
        'valid_until' => 'ValidUntil',
        'web_bill_me_allowed' => 'WebBillMeAllowed',
        'installment_billing_code' => 'InstallmentBillingCode',
        'sessions' => 'Sessions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'choice_code' => 'setChoiceCode',
        'name' => 'setName',
        'bill_by' => 'setBillBy',
        'location_code' => 'setLocationCode',
        'premium_set_code' => 'setPremiumSetCode',
        'status' => 'setStatus',
        'valid_until' => 'setValidUntil',
        'web_bill_me_allowed' => 'setWebBillMeAllowed',
        'installment_billing_code' => 'setInstallmentBillingCode',
        'sessions' => 'setSessions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'choice_code' => 'getChoiceCode',
        'name' => 'getName',
        'bill_by' => 'getBillBy',
        'location_code' => 'getLocationCode',
        'premium_set_code' => 'getPremiumSetCode',
        'status' => 'getStatus',
        'valid_until' => 'getValidUntil',
        'web_bill_me_allowed' => 'getWebBillMeAllowed',
        'installment_billing_code' => 'getInstallmentBillingCode',
        'sessions' => 'getSessions'
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

    const BILL_BY_REGISTRATION = 'Registration';
    const BILL_BY_ATTENDEE = 'Attendee';
    const STATUS_ACTIVE = 'Active';
    const STATUS_INACTIVE = 'Inactive';
    const WEB_BILL_ME_ALLOWED_YES = 'Yes';
    const WEB_BILL_ME_ALLOWED_NO = 'No';
    const WEB_BILL_ME_ALLOWED_ASSUMED = 'Assumed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillByAllowableValues()
    {
        return [
            self::BILL_BY_REGISTRATION,
            self::BILL_BY_ATTENDEE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebBillMeAllowedAllowableValues()
    {
        return [
            self::WEB_BILL_ME_ALLOWED_YES,
            self::WEB_BILL_ME_ALLOWED_NO,
            self::WEB_BILL_ME_ALLOWED_ASSUMED,
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
        $this->container['choice_code'] = isset($data['choice_code']) ? $data['choice_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['bill_by'] = isset($data['bill_by']) ? $data['bill_by'] : null;
        $this->container['location_code'] = isset($data['location_code']) ? $data['location_code'] : null;
        $this->container['premium_set_code'] = isset($data['premium_set_code']) ? $data['premium_set_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['web_bill_me_allowed'] = isset($data['web_bill_me_allowed']) ? $data['web_bill_me_allowed'] : null;
        $this->container['installment_billing_code'] = isset($data['installment_billing_code']) ? $data['installment_billing_code'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBillByAllowableValues();
        if (!is_null($this->container['bill_by']) && !in_array($this->container['bill_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bill_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWebBillMeAllowedAllowableValues();
        if (!is_null($this->container['web_bill_me_allowed']) && !in_array($this->container['web_bill_me_allowed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'web_bill_me_allowed', must be one of '%s'",
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
     * Gets choice_code
     *
     * @return string
     */
    public function getChoiceCode()
    {
        return $this->container['choice_code'];
    }

    /**
     * Sets choice_code
     *
     * @param string $choice_code Value of Conference Choice Code
     *
     * @return $this
     */
    public function setChoiceCode($choice_code)
    {
        $this->container['choice_code'] = $choice_code;

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
     * @param string $name Value of Choice Description
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets bill_by
     *
     * @return string
     */
    public function getBillBy()
    {
        return $this->container['bill_by'];
    }

    /**
     * Sets bill_by
     *
     * @param string $bill_by Value of Bill By:  R - Registration, A - Attendee
     *
     * @return $this
     */
    public function setBillBy($bill_by)
    {
        $allowedValues = $this->getBillByAllowableValues();
        if (!is_null($bill_by) && !in_array($bill_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bill_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bill_by'] = $bill_by;

        return $this;
    }

    /**
     * Gets location_code
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->container['location_code'];
    }

    /**
     * Sets location_code
     *
     * @param string $location_code Value of Conference Location
     *
     * @return $this
     */
    public function setLocationCode($location_code)
    {
        $this->container['location_code'] = $location_code;

        return $this;
    }

    /**
     * Gets premium_set_code
     *
     * @return string
     */
    public function getPremiumSetCode()
    {
        return $this->container['premium_set_code'];
    }

    /**
     * Sets premium_set_code
     *
     * @param string $premium_set_code Value of Premium Set
     *
     * @return $this
     */
    public function setPremiumSetCode($premium_set_code)
    {
        $this->container['premium_set_code'] = $premium_set_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Value of Status:  A - Active, I - Inactive
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime $valid_until Value of Valid Until date
     *
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets web_bill_me_allowed
     *
     * @return string
     */
    public function getWebBillMeAllowed()
    {
        return $this->container['web_bill_me_allowed'];
    }

    /**
     * Sets web_bill_me_allowed
     *
     * @param string $web_bill_me_allowed Bill me later status
     *
     * @return $this
     */
    public function setWebBillMeAllowed($web_bill_me_allowed)
    {
        $allowedValues = $this->getWebBillMeAllowedAllowableValues();
        if (!is_null($web_bill_me_allowed) && !in_array($web_bill_me_allowed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'web_bill_me_allowed', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['web_bill_me_allowed'] = $web_bill_me_allowed;

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
     * Gets sessions
     *
     * @return \Advantage\Client\Model\ConferenceChoiceSessionIn[]
     */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
     * Sets sessions
     *
     * @param \Advantage\Client\Model\ConferenceChoiceSessionIn[] $sessions The list of sessions that will be associated with this conference choice
     *
     * @return $this
     */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;

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


