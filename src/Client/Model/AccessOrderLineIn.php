<?php
/**
 * AccessOrderLineIn
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
 * AccessOrderLineIn Class Doc Comment
 *
 * @category Class
 * @description Information for creating an AMB (agreement) order line.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessOrderLineIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessOrderLineIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_period_code' => 'string',
        'is_usage_based' => 'bool',
        'agreement_type' => 'string',
        'order_by' => '\Advantage\Client\Model\CustomerAddressKey',
        'agreement_id' => 'string',
        'reason_code' => 'string',
        'volume_group_code' => 'string',
        'force_renewal' => 'bool',
        'starts' => '\DateTime',
        'society_code' => 'string',
        'subscription_type_code' => 'string',
        'renewal_policy_code' => 'string',
        'participants' => '\Advantage\Client\Model\AgreementParticipantIn[]',
        'access_point_only_participants' => 'bool',
        'email_id' => 'string',
        'maximum_participants' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_period_code' => null,
        'is_usage_based' => null,
        'agreement_type' => null,
        'order_by' => null,
        'agreement_id' => null,
        'reason_code' => null,
        'volume_group_code' => null,
        'force_renewal' => null,
        'starts' => 'date-time',
        'society_code' => null,
        'subscription_type_code' => null,
        'renewal_policy_code' => null,
        'participants' => null,
        'access_point_only_participants' => null,
        'email_id' => null,
        'maximum_participants' => 'int32'
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
        'access_period_code' => 'AccessPeriodCode',
        'is_usage_based' => 'IsUsageBased',
        'agreement_type' => 'AgreementType',
        'order_by' => 'OrderBy',
        'agreement_id' => 'AgreementId',
        'reason_code' => 'ReasonCode',
        'volume_group_code' => 'VolumeGroupCode',
        'force_renewal' => 'ForceRenewal',
        'starts' => 'Starts',
        'society_code' => 'SocietyCode',
        'subscription_type_code' => 'SubscriptionTypeCode',
        'renewal_policy_code' => 'RenewalPolicyCode',
        'participants' => 'Participants',
        'access_point_only_participants' => 'AccessPointOnlyParticipants',
        'email_id' => 'EmailId',
        'maximum_participants' => 'MaximumParticipants'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_period_code' => 'setAccessPeriodCode',
        'is_usage_based' => 'setIsUsageBased',
        'agreement_type' => 'setAgreementType',
        'order_by' => 'setOrderBy',
        'agreement_id' => 'setAgreementId',
        'reason_code' => 'setReasonCode',
        'volume_group_code' => 'setVolumeGroupCode',
        'force_renewal' => 'setForceRenewal',
        'starts' => 'setStarts',
        'society_code' => 'setSocietyCode',
        'subscription_type_code' => 'setSubscriptionTypeCode',
        'renewal_policy_code' => 'setRenewalPolicyCode',
        'participants' => 'setParticipants',
        'access_point_only_participants' => 'setAccessPointOnlyParticipants',
        'email_id' => 'setEmailId',
        'maximum_participants' => 'setMaximumParticipants'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_period_code' => 'getAccessPeriodCode',
        'is_usage_based' => 'getIsUsageBased',
        'agreement_type' => 'getAgreementType',
        'order_by' => 'getOrderBy',
        'agreement_id' => 'getAgreementId',
        'reason_code' => 'getReasonCode',
        'volume_group_code' => 'getVolumeGroupCode',
        'force_renewal' => 'getForceRenewal',
        'starts' => 'getStarts',
        'society_code' => 'getSocietyCode',
        'subscription_type_code' => 'getSubscriptionTypeCode',
        'renewal_policy_code' => 'getRenewalPolicyCode',
        'participants' => 'getParticipants',
        'access_point_only_participants' => 'getAccessPointOnlyParticipants',
        'email_id' => 'getEmailId',
        'maximum_participants' => 'getMaximumParticipants'
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
        $this->container['access_period_code'] = isset($data['access_period_code']) ? $data['access_period_code'] : null;
        $this->container['is_usage_based'] = isset($data['is_usage_based']) ? $data['is_usage_based'] : null;
        $this->container['agreement_type'] = isset($data['agreement_type']) ? $data['agreement_type'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['agreement_id'] = isset($data['agreement_id']) ? $data['agreement_id'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['volume_group_code'] = isset($data['volume_group_code']) ? $data['volume_group_code'] : null;
        $this->container['force_renewal'] = isset($data['force_renewal']) ? $data['force_renewal'] : null;
        $this->container['starts'] = isset($data['starts']) ? $data['starts'] : null;
        $this->container['society_code'] = isset($data['society_code']) ? $data['society_code'] : null;
        $this->container['subscription_type_code'] = isset($data['subscription_type_code']) ? $data['subscription_type_code'] : null;
        $this->container['renewal_policy_code'] = isset($data['renewal_policy_code']) ? $data['renewal_policy_code'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['access_point_only_participants'] = isset($data['access_point_only_participants']) ? $data['access_point_only_participants'] : null;
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
        $this->container['maximum_participants'] = isset($data['maximum_participants']) ? $data['maximum_participants'] : null;
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
     * Gets is_usage_based
     *
     * @return bool
     */
    public function getIsUsageBased()
    {
        return $this->container['is_usage_based'];
    }

    /**
     * Sets is_usage_based
     *
     * @param bool $is_usage_based Should the agreement track usage or is it simply time based: Y - usage-based, N - not usage-based.
     *
     * @return $this
     */
    public function setIsUsageBased($is_usage_based)
    {
        $this->container['is_usage_based'] = $is_usage_based;

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
     * @param string $agreement_type The type of agreement
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
     * Gets order_by
     *
     * @return \Advantage\Client\Model\CustomerAddressKey
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Advantage\Client\Model\CustomerAddressKey $order_by The customer that ordered the access.
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

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
     * Gets reason_code
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string $reason_code Reason code for use if AMB item is a trial term.
     *
     * @return $this
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets volume_group_code
     *
     * @return string
     */
    public function getVolumeGroupCode()
    {
        return $this->container['volume_group_code'];
    }

    /**
     * Sets volume_group_code
     *
     * @param string $volume_group_code Volume group.
     *
     * @return $this
     */
    public function setVolumeGroupCode($volume_group_code)
    {
        $this->container['volume_group_code'] = $volume_group_code;

        return $this;
    }

    /**
     * Gets force_renewal
     *
     * @return bool
     */
    public function getForceRenewal()
    {
        return $this->container['force_renewal'];
    }

    /**
     * Sets force_renewal
     *
     * @param bool $force_renewal Is this line required to be processed as a renewal?
     *
     * @return $this
     */
    public function setForceRenewal($force_renewal)
    {
        $this->container['force_renewal'] = $force_renewal;

        return $this;
    }

    /**
     * Gets starts
     *
     * @return \DateTime
     */
    public function getStarts()
    {
        return $this->container['starts'];
    }

    /**
     * Sets starts
     *
     * @param \DateTime $starts When the agreement starts; the start time maybe be assigned when the order line is created,   or it may be assigned (or updated) later when the order is posted.
     *
     * @return $this
     */
    public function setStarts($starts)
    {
        $this->container['starts'] = $starts;

        return $this;
    }

    /**
     * Gets society_code
     *
     * @return string
     */
    public function getSocietyCode()
    {
        return $this->container['society_code'];
    }

    /**
     * Sets society_code
     *
     * @param string $society_code Society, for price code.
     *
     * @return $this
     */
    public function setSocietyCode($society_code)
    {
        $this->container['society_code'] = $society_code;

        return $this;
    }

    /**
     * Gets subscription_type_code
     *
     * @return string
     */
    public function getSubscriptionTypeCode()
    {
        return $this->container['subscription_type_code'];
    }

    /**
     * Sets subscription_type_code
     *
     * @param string $subscription_type_code The subscription type.
     *
     * @return $this
     */
    public function setSubscriptionTypeCode($subscription_type_code)
    {
        $this->container['subscription_type_code'] = $subscription_type_code;

        return $this;
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
     * Gets participants
     *
     * @return \Advantage\Client\Model\AgreementParticipantIn[]
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Advantage\Client\Model\AgreementParticipantIn[] $participants A list of participants to include on the agreement.
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets access_point_only_participants
     *
     * @return bool
     */
    public function getAccessPointOnlyParticipants()
    {
        return $this->container['access_point_only_participants'];
    }

    /**
     * Sets access_point_only_participants
     *
     * @param bool $access_point_only_participants Should the participants have access to the specific access point instead of the entire agreement?
     *
     * @return $this
     */
    public function setAccessPointOnlyParticipants($access_point_only_participants)
    {
        $this->container['access_point_only_participants'] = $access_point_only_participants;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param string $email_id Email ID of e-mail address to link to agreement.
     *
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets maximum_participants
     *
     * @return int
     */
    public function getMaximumParticipants()
    {
        return $this->container['maximum_participants'];
    }

    /**
     * Sets maximum_participants
     *
     * @param int $maximum_participants The maximum number of participants that can be linked to the agreement.
     *
     * @return $this
     */
    public function setMaximumParticipants($maximum_participants)
    {
        $this->container['maximum_participants'] = $maximum_participants;

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


