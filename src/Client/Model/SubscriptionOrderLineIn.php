<?php
/**
 * SubscriptionOrderLineIn
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
 * SubscriptionOrderLineIn Class Doc Comment
 *
 * @category Class
 * @description Information for creating a CIR (subscription) order line.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionOrderLineIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionOrderLineIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'delivery_code' => 'string',
        'term_length' => 'int',
        'rate' => 'double',
        'gift_message' => 'string',
        'business_industry_code' => 'string',
        'business_title_code' => 'string',
        'qualification_source_code' => 'string',
        'subscription_class' => 'string',
        'referred_by_customer_number' => 'string',
        'opt_out' => 'bool',
        'promote_by_mail' => 'string',
        'promote_by_phone' => 'string',
        'promote_by_fax' => 'string',
        'promote_by_email' => 'string',
        'subscription_id' => 'string',
        'email_id' => 'string',
        'issue_group_code' => 'string',
        'donor_type_code' => 'string',
        'date_signed' => '\DateTime',
        'alternate_delivery_indicator' => 'string',
        'ship_through_customer_number' => 'string',
        'edition_code' => 'string',
        'force_trial' => 'bool',
        'volume_group_code' => 'string',
        'society_code' => 'string',
        'subscription_type_code' => 'string',
        'renewal_policy_code' => 'string',
        'starts' => '\DateTime',
        'add_default_membership_elements' => 'bool',
        'non_member_subscription_credit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'delivery_code' => null,
        'term_length' => 'int32',
        'rate' => 'double',
        'gift_message' => null,
        'business_industry_code' => null,
        'business_title_code' => null,
        'qualification_source_code' => null,
        'subscription_class' => null,
        'referred_by_customer_number' => null,
        'opt_out' => null,
        'promote_by_mail' => null,
        'promote_by_phone' => null,
        'promote_by_fax' => null,
        'promote_by_email' => null,
        'subscription_id' => null,
        'email_id' => null,
        'issue_group_code' => null,
        'donor_type_code' => null,
        'date_signed' => 'date-time',
        'alternate_delivery_indicator' => null,
        'ship_through_customer_number' => null,
        'edition_code' => null,
        'force_trial' => null,
        'volume_group_code' => null,
        'society_code' => null,
        'subscription_type_code' => null,
        'renewal_policy_code' => null,
        'starts' => 'date-time',
        'add_default_membership_elements' => null,
        'non_member_subscription_credit' => null
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
        'delivery_code' => 'DeliveryCode',
        'term_length' => 'TermLength',
        'rate' => 'Rate',
        'gift_message' => 'GiftMessage',
        'business_industry_code' => 'BusinessIndustryCode',
        'business_title_code' => 'BusinessTitleCode',
        'qualification_source_code' => 'QualificationSourceCode',
        'subscription_class' => 'SubscriptionClass',
        'referred_by_customer_number' => 'ReferredByCustomerNumber',
        'opt_out' => 'OptOut',
        'promote_by_mail' => 'PromoteByMail',
        'promote_by_phone' => 'PromoteByPhone',
        'promote_by_fax' => 'PromoteByFax',
        'promote_by_email' => 'PromoteByEmail',
        'subscription_id' => 'SubscriptionId',
        'email_id' => 'EmailId',
        'issue_group_code' => 'IssueGroupCode',
        'donor_type_code' => 'DonorTypeCode',
        'date_signed' => 'DateSigned',
        'alternate_delivery_indicator' => 'AlternateDeliveryIndicator',
        'ship_through_customer_number' => 'ShipThroughCustomerNumber',
        'edition_code' => 'EditionCode',
        'force_trial' => 'ForceTrial',
        'volume_group_code' => 'VolumeGroupCode',
        'society_code' => 'SocietyCode',
        'subscription_type_code' => 'SubscriptionTypeCode',
        'renewal_policy_code' => 'RenewalPolicyCode',
        'starts' => 'Starts',
        'add_default_membership_elements' => 'AddDefaultMembershipElements',
        'non_member_subscription_credit' => 'NonMemberSubscriptionCredit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_code' => 'setDeliveryCode',
        'term_length' => 'setTermLength',
        'rate' => 'setRate',
        'gift_message' => 'setGiftMessage',
        'business_industry_code' => 'setBusinessIndustryCode',
        'business_title_code' => 'setBusinessTitleCode',
        'qualification_source_code' => 'setQualificationSourceCode',
        'subscription_class' => 'setSubscriptionClass',
        'referred_by_customer_number' => 'setReferredByCustomerNumber',
        'opt_out' => 'setOptOut',
        'promote_by_mail' => 'setPromoteByMail',
        'promote_by_phone' => 'setPromoteByPhone',
        'promote_by_fax' => 'setPromoteByFax',
        'promote_by_email' => 'setPromoteByEmail',
        'subscription_id' => 'setSubscriptionId',
        'email_id' => 'setEmailId',
        'issue_group_code' => 'setIssueGroupCode',
        'donor_type_code' => 'setDonorTypeCode',
        'date_signed' => 'setDateSigned',
        'alternate_delivery_indicator' => 'setAlternateDeliveryIndicator',
        'ship_through_customer_number' => 'setShipThroughCustomerNumber',
        'edition_code' => 'setEditionCode',
        'force_trial' => 'setForceTrial',
        'volume_group_code' => 'setVolumeGroupCode',
        'society_code' => 'setSocietyCode',
        'subscription_type_code' => 'setSubscriptionTypeCode',
        'renewal_policy_code' => 'setRenewalPolicyCode',
        'starts' => 'setStarts',
        'add_default_membership_elements' => 'setAddDefaultMembershipElements',
        'non_member_subscription_credit' => 'setNonMemberSubscriptionCredit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_code' => 'getDeliveryCode',
        'term_length' => 'getTermLength',
        'rate' => 'getRate',
        'gift_message' => 'getGiftMessage',
        'business_industry_code' => 'getBusinessIndustryCode',
        'business_title_code' => 'getBusinessTitleCode',
        'qualification_source_code' => 'getQualificationSourceCode',
        'subscription_class' => 'getSubscriptionClass',
        'referred_by_customer_number' => 'getReferredByCustomerNumber',
        'opt_out' => 'getOptOut',
        'promote_by_mail' => 'getPromoteByMail',
        'promote_by_phone' => 'getPromoteByPhone',
        'promote_by_fax' => 'getPromoteByFax',
        'promote_by_email' => 'getPromoteByEmail',
        'subscription_id' => 'getSubscriptionId',
        'email_id' => 'getEmailId',
        'issue_group_code' => 'getIssueGroupCode',
        'donor_type_code' => 'getDonorTypeCode',
        'date_signed' => 'getDateSigned',
        'alternate_delivery_indicator' => 'getAlternateDeliveryIndicator',
        'ship_through_customer_number' => 'getShipThroughCustomerNumber',
        'edition_code' => 'getEditionCode',
        'force_trial' => 'getForceTrial',
        'volume_group_code' => 'getVolumeGroupCode',
        'society_code' => 'getSocietyCode',
        'subscription_type_code' => 'getSubscriptionTypeCode',
        'renewal_policy_code' => 'getRenewalPolicyCode',
        'starts' => 'getStarts',
        'add_default_membership_elements' => 'getAddDefaultMembershipElements',
        'non_member_subscription_credit' => 'getNonMemberSubscriptionCredit'
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

    const SUBSCRIPTION_CLASS_REGULAR = 'Regular';
    const SUBSCRIPTION_CLASS_DELAYED_START = 'DelayedStart';
    const SUBSCRIPTION_CLASS_MONTHLY_INVOICED = 'MonthlyInvoiced';
    const SUBSCRIPTION_CLASS_PERPETUAL = 'Perpetual';
    const SUBSCRIPTION_CLASS_QUALIFIED_NONPAID = 'QualifiedNonpaid';
    const SUBSCRIPTION_CLASS_AGREEMENT = 'Agreement';
    const ALTERNATE_DELIVERY_INDICATOR_CONFIRMING = 'Confirming';
    const ALTERNATE_DELIVERY_INDICATOR_DEFERRED_START = 'DeferredStart';
    const ALTERNATE_DELIVERY_INDICATOR_IN_ERROR = 'InError';
    const ALTERNATE_DELIVERY_INDICATOR_NO = 'No';
    const ALTERNATE_DELIVERY_INDICATOR_OVERRIDE = 'Override';
    const ALTERNATE_DELIVERY_INDICATOR_REQUEST_PERMISSION_DETAILS = 'RequestPermissionDetails';
    const ALTERNATE_DELIVERY_INDICATOR_UNDELIVERABLE = 'Undeliverable';
    const ALTERNATE_DELIVERY_INDICATOR_IN_WAITING = 'InWaiting';
    const ALTERNATE_DELIVERY_INDICATOR_EXCLUDED = 'Excluded';
    const ALTERNATE_DELIVERY_INDICATOR_YES = 'Yes';
    const NON_MEMBER_SUBSCRIPTION_CREDIT_PARTIAL = 'Partial';
    const NON_MEMBER_SUBSCRIPTION_CREDIT_FULL = 'Full';
    const NON_MEMBER_SUBSCRIPTION_CREDIT_CONVERT_TO_MEMBER_BASED = 'ConvertToMemberBased';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionClassAllowableValues()
    {
        return [
            self::SUBSCRIPTION_CLASS_REGULAR,
            self::SUBSCRIPTION_CLASS_DELAYED_START,
            self::SUBSCRIPTION_CLASS_MONTHLY_INVOICED,
            self::SUBSCRIPTION_CLASS_PERPETUAL,
            self::SUBSCRIPTION_CLASS_QUALIFIED_NONPAID,
            self::SUBSCRIPTION_CLASS_AGREEMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlternateDeliveryIndicatorAllowableValues()
    {
        return [
            self::ALTERNATE_DELIVERY_INDICATOR_CONFIRMING,
            self::ALTERNATE_DELIVERY_INDICATOR_DEFERRED_START,
            self::ALTERNATE_DELIVERY_INDICATOR_IN_ERROR,
            self::ALTERNATE_DELIVERY_INDICATOR_NO,
            self::ALTERNATE_DELIVERY_INDICATOR_OVERRIDE,
            self::ALTERNATE_DELIVERY_INDICATOR_REQUEST_PERMISSION_DETAILS,
            self::ALTERNATE_DELIVERY_INDICATOR_UNDELIVERABLE,
            self::ALTERNATE_DELIVERY_INDICATOR_IN_WAITING,
            self::ALTERNATE_DELIVERY_INDICATOR_EXCLUDED,
            self::ALTERNATE_DELIVERY_INDICATOR_YES,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNonMemberSubscriptionCreditAllowableValues()
    {
        return [
            self::NON_MEMBER_SUBSCRIPTION_CREDIT_PARTIAL,
            self::NON_MEMBER_SUBSCRIPTION_CREDIT_FULL,
            self::NON_MEMBER_SUBSCRIPTION_CREDIT_CONVERT_TO_MEMBER_BASED,
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
        $this->container['delivery_code'] = isset($data['delivery_code']) ? $data['delivery_code'] : null;
        $this->container['term_length'] = isset($data['term_length']) ? $data['term_length'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['gift_message'] = isset($data['gift_message']) ? $data['gift_message'] : null;
        $this->container['business_industry_code'] = isset($data['business_industry_code']) ? $data['business_industry_code'] : null;
        $this->container['business_title_code'] = isset($data['business_title_code']) ? $data['business_title_code'] : null;
        $this->container['qualification_source_code'] = isset($data['qualification_source_code']) ? $data['qualification_source_code'] : null;
        $this->container['subscription_class'] = isset($data['subscription_class']) ? $data['subscription_class'] : null;
        $this->container['referred_by_customer_number'] = isset($data['referred_by_customer_number']) ? $data['referred_by_customer_number'] : null;
        $this->container['opt_out'] = isset($data['opt_out']) ? $data['opt_out'] : null;
        $this->container['promote_by_mail'] = isset($data['promote_by_mail']) ? $data['promote_by_mail'] : null;
        $this->container['promote_by_phone'] = isset($data['promote_by_phone']) ? $data['promote_by_phone'] : null;
        $this->container['promote_by_fax'] = isset($data['promote_by_fax']) ? $data['promote_by_fax'] : null;
        $this->container['promote_by_email'] = isset($data['promote_by_email']) ? $data['promote_by_email'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
        $this->container['issue_group_code'] = isset($data['issue_group_code']) ? $data['issue_group_code'] : null;
        $this->container['donor_type_code'] = isset($data['donor_type_code']) ? $data['donor_type_code'] : null;
        $this->container['date_signed'] = isset($data['date_signed']) ? $data['date_signed'] : null;
        $this->container['alternate_delivery_indicator'] = isset($data['alternate_delivery_indicator']) ? $data['alternate_delivery_indicator'] : null;
        $this->container['ship_through_customer_number'] = isset($data['ship_through_customer_number']) ? $data['ship_through_customer_number'] : null;
        $this->container['edition_code'] = isset($data['edition_code']) ? $data['edition_code'] : null;
        $this->container['force_trial'] = isset($data['force_trial']) ? $data['force_trial'] : null;
        $this->container['volume_group_code'] = isset($data['volume_group_code']) ? $data['volume_group_code'] : null;
        $this->container['society_code'] = isset($data['society_code']) ? $data['society_code'] : null;
        $this->container['subscription_type_code'] = isset($data['subscription_type_code']) ? $data['subscription_type_code'] : null;
        $this->container['renewal_policy_code'] = isset($data['renewal_policy_code']) ? $data['renewal_policy_code'] : null;
        $this->container['starts'] = isset($data['starts']) ? $data['starts'] : null;
        $this->container['add_default_membership_elements'] = isset($data['add_default_membership_elements']) ? $data['add_default_membership_elements'] : null;
        $this->container['non_member_subscription_credit'] = isset($data['non_member_subscription_credit']) ? $data['non_member_subscription_credit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubscriptionClassAllowableValues();
        if (!is_null($this->container['subscription_class']) && !in_array($this->container['subscription_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subscription_class', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAlternateDeliveryIndicatorAllowableValues();
        if (!is_null($this->container['alternate_delivery_indicator']) && !in_array($this->container['alternate_delivery_indicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alternate_delivery_indicator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNonMemberSubscriptionCreditAllowableValues();
        if (!is_null($this->container['non_member_subscription_credit']) && !in_array($this->container['non_member_subscription_credit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'non_member_subscription_credit', must be one of '%s'",
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
     * Gets delivery_code
     *
     * @return string
     */
    public function getDeliveryCode()
    {
        return $this->container['delivery_code'];
    }

    /**
     * Sets delivery_code
     *
     * @param string $delivery_code The delivery method for this subscription
     *
     * @return $this
     */
    public function setDeliveryCode($delivery_code)
    {
        $this->container['delivery_code'] = $delivery_code;

        return $this;
    }

    /**
     * Gets term_length
     *
     * @return int
     */
    public function getTermLength()
    {
        return $this->container['term_length'];
    }

    /**
     * Sets term_length
     *
     * @param int $term_length The subscription term (the number of issues)
     *
     * @return $this
     */
    public function setTermLength($term_length)
    {
        $this->container['term_length'] = $term_length;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate The price of the magazine.
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets gift_message
     *
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message
     *
     * @param string $gift_message The gift message
     *
     * @return $this
     */
    public function setGiftMessage($gift_message)
    {
        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets business_industry_code
     *
     * @return string
     */
    public function getBusinessIndustryCode()
    {
        return $this->container['business_industry_code'];
    }

    /**
     * Sets business_industry_code
     *
     * @param string $business_industry_code The business industry demographic code.
     *
     * @return $this
     */
    public function setBusinessIndustryCode($business_industry_code)
    {
        $this->container['business_industry_code'] = $business_industry_code;

        return $this;
    }

    /**
     * Gets business_title_code
     *
     * @return string
     */
    public function getBusinessTitleCode()
    {
        return $this->container['business_title_code'];
    }

    /**
     * Sets business_title_code
     *
     * @param string $business_title_code The business title demographic code.
     *
     * @return $this
     */
    public function setBusinessTitleCode($business_title_code)
    {
        $this->container['business_title_code'] = $business_title_code;

        return $this;
    }

    /**
     * Gets qualification_source_code
     *
     * @return string
     */
    public function getQualificationSourceCode()
    {
        return $this->container['qualification_source_code'];
    }

    /**
     * Sets qualification_source_code
     *
     * @param string $qualification_source_code The qualification source
     *
     * @return $this
     */
    public function setQualificationSourceCode($qualification_source_code)
    {
        $this->container['qualification_source_code'] = $qualification_source_code;

        return $this;
    }

    /**
     * Gets subscription_class
     *
     * @return string
     */
    public function getSubscriptionClass()
    {
        return $this->container['subscription_class'];
    }

    /**
     * Sets subscription_class
     *
     * @param string $subscription_class Subscription class: R - regular, Q - controlled,  L - delayed start, P - perpetual
     *
     * @return $this
     */
    public function setSubscriptionClass($subscription_class)
    {
        $allowedValues = $this->getSubscriptionClassAllowableValues();
        if (!is_null($subscription_class) && !in_array($subscription_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subscription_class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subscription_class'] = $subscription_class;

        return $this;
    }

    /**
     * Gets referred_by_customer_number
     *
     * @return string
     */
    public function getReferredByCustomerNumber()
    {
        return $this->container['referred_by_customer_number'];
    }

    /**
     * Sets referred_by_customer_number
     *
     * @param string $referred_by_customer_number The customer number of the reference customer.
     *
     * @return $this
     */
    public function setReferredByCustomerNumber($referred_by_customer_number)
    {
        $this->container['referred_by_customer_number'] = $referred_by_customer_number;

        return $this;
    }

    /**
     * Gets opt_out
     *
     * @return bool
     */
    public function getOptOut()
    {
        return $this->container['opt_out'];
    }

    /**
     * Sets opt_out
     *
     * @param bool $opt_out Does customer wish to opt out of lists?
     *
     * @return $this
     */
    public function setOptOut($opt_out)
    {
        $this->container['opt_out'] = $opt_out;

        return $this;
    }

    /**
     * Gets promote_by_mail
     *
     * @return string
     */
    public function getPromoteByMail()
    {
        return $this->container['promote_by_mail'];
    }

    /**
     * Sets promote_by_mail
     *
     * @param string $promote_by_mail Should the subscriber be promoted by mail?
     *
     * @return $this
     */
    public function setPromoteByMail($promote_by_mail)
    {
        $this->container['promote_by_mail'] = $promote_by_mail;

        return $this;
    }

    /**
     * Gets promote_by_phone
     *
     * @return string
     */
    public function getPromoteByPhone()
    {
        return $this->container['promote_by_phone'];
    }

    /**
     * Sets promote_by_phone
     *
     * @param string $promote_by_phone Should the subscriber be promoted by phone?
     *
     * @return $this
     */
    public function setPromoteByPhone($promote_by_phone)
    {
        $this->container['promote_by_phone'] = $promote_by_phone;

        return $this;
    }

    /**
     * Gets promote_by_fax
     *
     * @return string
     */
    public function getPromoteByFax()
    {
        return $this->container['promote_by_fax'];
    }

    /**
     * Sets promote_by_fax
     *
     * @param string $promote_by_fax Should the subscriber be promoted by fax?
     *
     * @return $this
     */
    public function setPromoteByFax($promote_by_fax)
    {
        $this->container['promote_by_fax'] = $promote_by_fax;

        return $this;
    }

    /**
     * Gets promote_by_email
     *
     * @return string
     */
    public function getPromoteByEmail()
    {
        return $this->container['promote_by_email'];
    }

    /**
     * Sets promote_by_email
     *
     * @param string $promote_by_email Should the subscriber be promoted by email?
     *
     * @return $this
     */
    public function setPromoteByEmail($promote_by_email)
    {
        $this->container['promote_by_email'] = $promote_by_email;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id The subscription reference number.
     *
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

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
     * @param string $email_id Email ID of e-mail address to link to subscription.
     *
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets issue_group_code
     *
     * @return string
     */
    public function getIssueGroupCode()
    {
        return $this->container['issue_group_code'];
    }

    /**
     * Sets issue_group_code
     *
     * @param string $issue_group_code The issue group can be used to indicate a subset of issues to receive (or blank for all).
     *
     * @return $this
     */
    public function setIssueGroupCode($issue_group_code)
    {
        $this->container['issue_group_code'] = $issue_group_code;

        return $this;
    }

    /**
     * Gets donor_type_code
     *
     * @return string
     */
    public function getDonorTypeCode()
    {
        return $this->container['donor_type_code'];
    }

    /**
     * Sets donor_type_code
     *
     * @param string $donor_type_code Donor type (used only when first CIR line on order).
     *
     * @return $this
     */
    public function setDonorTypeCode($donor_type_code)
    {
        $this->container['donor_type_code'] = $donor_type_code;

        return $this;
    }

    /**
     * Gets date_signed
     *
     * @return \DateTime
     */
    public function getDateSigned()
    {
        return $this->container['date_signed'];
    }

    /**
     * Sets date_signed
     *
     * @param \DateTime $date_signed The date signed for audited circulation; also sets the classification date.
     *
     * @return $this
     */
    public function setDateSigned($date_signed)
    {
        $this->container['date_signed'] = $date_signed;

        return $this;
    }

    /**
     * Gets alternate_delivery_indicator
     *
     * @return string
     */
    public function getAlternateDeliveryIndicator()
    {
        return $this->container['alternate_delivery_indicator'];
    }

    /**
     * Sets alternate_delivery_indicator
     *
     * @param string $alternate_delivery_indicator The alternate Delivery Indicator.
     *
     * @return $this
     */
    public function setAlternateDeliveryIndicator($alternate_delivery_indicator)
    {
        $allowedValues = $this->getAlternateDeliveryIndicatorAllowableValues();
        if (!is_null($alternate_delivery_indicator) && !in_array($alternate_delivery_indicator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alternate_delivery_indicator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alternate_delivery_indicator'] = $alternate_delivery_indicator;

        return $this;
    }

    /**
     * Gets ship_through_customer_number
     *
     * @return string
     */
    public function getShipThroughCustomerNumber()
    {
        return $this->container['ship_through_customer_number'];
    }

    /**
     * Sets ship_through_customer_number
     *
     * @param string $ship_through_customer_number The customer number of the ship-thru customer.
     *
     * @return $this
     */
    public function setShipThroughCustomerNumber($ship_through_customer_number)
    {
        $this->container['ship_through_customer_number'] = $ship_through_customer_number;

        return $this;
    }

    /**
     * Gets edition_code
     *
     * @return string
     */
    public function getEditionCode()
    {
        return $this->container['edition_code'];
    }

    /**
     * Sets edition_code
     *
     * @param string $edition_code The edition code
     *
     * @return $this
     */
    public function setEditionCode($edition_code)
    {
        $this->container['edition_code'] = $edition_code;

        return $this;
    }

    /**
     * Gets force_trial
     *
     * @return bool
     */
    public function getForceTrial()
    {
        return $this->container['force_trial'];
    }

    /**
     * Sets force_trial
     *
     * @param bool $force_trial Should the new subscription be forced to be a trial?   (Not valid for renewals.)
     *
     * @return $this
     */
    public function setForceTrial($force_trial)
    {
        $this->container['force_trial'] = $force_trial;

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
     * @param string $volume_group_code Only applicable if the volume group feature is enabled.  If this is not supplied, the   default volume group will be used.
     *
     * @return $this
     */
    public function setVolumeGroupCode($volume_group_code)
    {
        $this->container['volume_group_code'] = $volume_group_code;

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
     * @param \DateTime $starts When the subscription starts; the start date may be assigned when the order line is created,   or it may be assigned (or updated) later when the order is posted.
     *
     * @return $this
     */
    public function setStarts($starts)
    {
        $this->container['starts'] = $starts;

        return $this;
    }

    /**
     * Gets add_default_membership_elements
     *
     * @return bool
     */
    public function getAddDefaultMembershipElements()
    {
        return $this->container['add_default_membership_elements'];
    }

    /**
     * Sets add_default_membership_elements
     *
     * @param bool $add_default_membership_elements If adding a new membership, this determines whether or not to add the default set of   membership elements for a given org-level publication.
     *
     * @return $this
     */
    public function setAddDefaultMembershipElements($add_default_membership_elements)
    {
        $this->container['add_default_membership_elements'] = $add_default_membership_elements;

        return $this;
    }

    /**
     * Gets non_member_subscription_credit
     *
     * @return string
     */
    public function getNonMemberSubscriptionCredit()
    {
        return $this->container['non_member_subscription_credit'];
    }

    /**
     * Sets non_member_subscription_credit
     *
     * @param string $non_member_subscription_credit This indicates how to handle the case when  the customer already has an active  non-membership subscription to a publication.  Valid values are:  P - Cancel the existing subscription and  apply the partial credit to a new  membership-based one  F - Cancel the existing subscription and  apply the full credit to a new  membership-based one  C - Convert the existing subscription to  membership-based
     *
     * @return $this
     */
    public function setNonMemberSubscriptionCredit($non_member_subscription_credit)
    {
        $allowedValues = $this->getNonMemberSubscriptionCreditAllowableValues();
        if (!is_null($non_member_subscription_credit) && !in_array($non_member_subscription_credit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'non_member_subscription_credit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['non_member_subscription_credit'] = $non_member_subscription_credit;

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


