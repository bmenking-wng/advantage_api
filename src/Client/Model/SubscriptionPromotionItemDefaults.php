<?php
/**
 * SubscriptionPromotionItemDefaults
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
 * SubscriptionPromotionItemDefaults Class Doc Comment
 *
 * @category Class
 * @description Information for a promotion item for a subscription.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionPromotionItemDefaults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionPromotionItemDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_issue_date' => '\DateTime',
        'alternate_questionnaire_code' => 'string',
        'basic_rate_category_code' => 'string',
        'edition_type_code' => 'string',
        'edition_code' => 'string',
        'alternate_delivery_indicator' => 'string',
        'issue_group_code' => 'string',
        'is_trial' => 'bool',
        'credit_policy_code' => 'string',
        'subscription_class' => 'string',
        'term_length' => 'int',
        'renewal_policy_code' => 'string',
        'free_issues' => 'int',
        'delivery_code' => 'string',
        'auto_renewal_chain_id' => 'string',
        'auto_renewal_promotion_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_issue_date' => 'date-time',
        'alternate_questionnaire_code' => null,
        'basic_rate_category_code' => null,
        'edition_type_code' => null,
        'edition_code' => null,
        'alternate_delivery_indicator' => null,
        'issue_group_code' => null,
        'is_trial' => null,
        'credit_policy_code' => null,
        'subscription_class' => null,
        'term_length' => 'int32',
        'renewal_policy_code' => null,
        'free_issues' => 'int32',
        'delivery_code' => null,
        'auto_renewal_chain_id' => null,
        'auto_renewal_promotion_code' => null
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
        'start_issue_date' => 'StartIssueDate',
        'alternate_questionnaire_code' => 'AlternateQuestionnaireCode',
        'basic_rate_category_code' => 'BasicRateCategoryCode',
        'edition_type_code' => 'EditionTypeCode',
        'edition_code' => 'EditionCode',
        'alternate_delivery_indicator' => 'AlternateDeliveryIndicator',
        'issue_group_code' => 'IssueGroupCode',
        'is_trial' => 'IsTrial',
        'credit_policy_code' => 'CreditPolicyCode',
        'subscription_class' => 'SubscriptionClass',
        'term_length' => 'TermLength',
        'renewal_policy_code' => 'RenewalPolicyCode',
        'free_issues' => 'FreeIssues',
        'delivery_code' => 'DeliveryCode',
        'auto_renewal_chain_id' => 'AutoRenewalChainId',
        'auto_renewal_promotion_code' => 'AutoRenewalPromotionCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_issue_date' => 'setStartIssueDate',
        'alternate_questionnaire_code' => 'setAlternateQuestionnaireCode',
        'basic_rate_category_code' => 'setBasicRateCategoryCode',
        'edition_type_code' => 'setEditionTypeCode',
        'edition_code' => 'setEditionCode',
        'alternate_delivery_indicator' => 'setAlternateDeliveryIndicator',
        'issue_group_code' => 'setIssueGroupCode',
        'is_trial' => 'setIsTrial',
        'credit_policy_code' => 'setCreditPolicyCode',
        'subscription_class' => 'setSubscriptionClass',
        'term_length' => 'setTermLength',
        'renewal_policy_code' => 'setRenewalPolicyCode',
        'free_issues' => 'setFreeIssues',
        'delivery_code' => 'setDeliveryCode',
        'auto_renewal_chain_id' => 'setAutoRenewalChainId',
        'auto_renewal_promotion_code' => 'setAutoRenewalPromotionCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_issue_date' => 'getStartIssueDate',
        'alternate_questionnaire_code' => 'getAlternateQuestionnaireCode',
        'basic_rate_category_code' => 'getBasicRateCategoryCode',
        'edition_type_code' => 'getEditionTypeCode',
        'edition_code' => 'getEditionCode',
        'alternate_delivery_indicator' => 'getAlternateDeliveryIndicator',
        'issue_group_code' => 'getIssueGroupCode',
        'is_trial' => 'getIsTrial',
        'credit_policy_code' => 'getCreditPolicyCode',
        'subscription_class' => 'getSubscriptionClass',
        'term_length' => 'getTermLength',
        'renewal_policy_code' => 'getRenewalPolicyCode',
        'free_issues' => 'getFreeIssues',
        'delivery_code' => 'getDeliveryCode',
        'auto_renewal_chain_id' => 'getAutoRenewalChainId',
        'auto_renewal_promotion_code' => 'getAutoRenewalPromotionCode'
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
    const SUBSCRIPTION_CLASS_REGULAR = 'Regular';
    const SUBSCRIPTION_CLASS_DELAYED_START = 'DelayedStart';
    const SUBSCRIPTION_CLASS_MONTHLY_INVOICED = 'MonthlyInvoiced';
    const SUBSCRIPTION_CLASS_PERPETUAL = 'Perpetual';
    const SUBSCRIPTION_CLASS_QUALIFIED_NONPAID = 'QualifiedNonpaid';
    const SUBSCRIPTION_CLASS_AGREEMENT = 'Agreement';
    

    
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
        $this->container['start_issue_date'] = isset($data['start_issue_date']) ? $data['start_issue_date'] : null;
        $this->container['alternate_questionnaire_code'] = isset($data['alternate_questionnaire_code']) ? $data['alternate_questionnaire_code'] : null;
        $this->container['basic_rate_category_code'] = isset($data['basic_rate_category_code']) ? $data['basic_rate_category_code'] : null;
        $this->container['edition_type_code'] = isset($data['edition_type_code']) ? $data['edition_type_code'] : null;
        $this->container['edition_code'] = isset($data['edition_code']) ? $data['edition_code'] : null;
        $this->container['alternate_delivery_indicator'] = isset($data['alternate_delivery_indicator']) ? $data['alternate_delivery_indicator'] : null;
        $this->container['issue_group_code'] = isset($data['issue_group_code']) ? $data['issue_group_code'] : null;
        $this->container['is_trial'] = isset($data['is_trial']) ? $data['is_trial'] : null;
        $this->container['credit_policy_code'] = isset($data['credit_policy_code']) ? $data['credit_policy_code'] : null;
        $this->container['subscription_class'] = isset($data['subscription_class']) ? $data['subscription_class'] : null;
        $this->container['term_length'] = isset($data['term_length']) ? $data['term_length'] : null;
        $this->container['renewal_policy_code'] = isset($data['renewal_policy_code']) ? $data['renewal_policy_code'] : null;
        $this->container['free_issues'] = isset($data['free_issues']) ? $data['free_issues'] : null;
        $this->container['delivery_code'] = isset($data['delivery_code']) ? $data['delivery_code'] : null;
        $this->container['auto_renewal_chain_id'] = isset($data['auto_renewal_chain_id']) ? $data['auto_renewal_chain_id'] : null;
        $this->container['auto_renewal_promotion_code'] = isset($data['auto_renewal_promotion_code']) ? $data['auto_renewal_promotion_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAlternateDeliveryIndicatorAllowableValues();
        if (!is_null($this->container['alternate_delivery_indicator']) && !in_array($this->container['alternate_delivery_indicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alternate_delivery_indicator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubscriptionClassAllowableValues();
        if (!is_null($this->container['subscription_class']) && !in_array($this->container['subscription_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subscription_class', must be one of '%s'",
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
     * Gets start_issue_date
     *
     * @return \DateTime
     */
    public function getStartIssueDate()
    {
        return $this->container['start_issue_date'];
    }

    /**
     * Sets start_issue_date
     *
     * @param \DateTime $start_issue_date The issue date of the first issue of a subscription or renewal.
     *
     * @return $this
     */
    public function setStartIssueDate($start_issue_date)
    {
        $this->container['start_issue_date'] = $start_issue_date;

        return $this;
    }

    /**
     * Gets alternate_questionnaire_code
     *
     * @return string
     */
    public function getAlternateQuestionnaireCode()
    {
        return $this->container['alternate_questionnaire_code'];
    }

    /**
     * Sets alternate_questionnaire_code
     *
     * @param string $alternate_questionnaire_code An extended demographics questionnaire.
     *
     * @return $this
     */
    public function setAlternateQuestionnaireCode($alternate_questionnaire_code)
    {
        $this->container['alternate_questionnaire_code'] = $alternate_questionnaire_code;

        return $this;
    }

    /**
     * Gets basic_rate_category_code
     *
     * @return string
     */
    public function getBasicRateCategoryCode()
    {
        return $this->container['basic_rate_category_code'];
    }

    /**
     * Sets basic_rate_category_code
     *
     * @param string $basic_rate_category_code Categorizes basic rate structures within a publication and billing currency.
     *
     * @return $this
     */
    public function setBasicRateCategoryCode($basic_rate_category_code)
    {
        $this->container['basic_rate_category_code'] = $basic_rate_category_code;

        return $this;
    }

    /**
     * Gets edition_type_code
     *
     * @return string
     */
    public function getEditionTypeCode()
    {
        return $this->container['edition_type_code'];
    }

    /**
     * Sets edition_type_code
     *
     * @param string $edition_type_code Edition type.
     *
     * @return $this
     */
    public function setEditionTypeCode($edition_type_code)
    {
        $this->container['edition_type_code'] = $edition_type_code;

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
     * @param string $edition_code Edition code.
     *
     * @return $this
     */
    public function setEditionCode($edition_code)
    {
        $this->container['edition_code'] = $edition_code;

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
     * @param string $alternate_delivery_indicator How a subscription participates with alternate delivery.
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
     * @param string $issue_group_code Issue group.
     *
     * @return $this
     */
    public function setIssueGroupCode($issue_group_code)
    {
        $this->container['issue_group_code'] = $issue_group_code;

        return $this;
    }

    /**
     * Gets is_trial
     *
     * @return bool
     */
    public function getIsTrial()
    {
        return $this->container['is_trial'];
    }

    /**
     * Sets is_trial
     *
     * @param bool $is_trial Whether or not the subscription will begin as a trial subscription
     *
     * @return $this
     */
    public function setIsTrial($is_trial)
    {
        $this->container['is_trial'] = $is_trial;

        return $this;
    }

    /**
     * Gets credit_policy_code
     *
     * @return string
     */
    public function getCreditPolicyCode()
    {
        return $this->container['credit_policy_code'];
    }

    /**
     * Sets credit_policy_code
     *
     * @param string $credit_policy_code Defines how credits are created when a sub is canceled.
     *
     * @return $this
     */
    public function setCreditPolicyCode($credit_policy_code)
    {
        $this->container['credit_policy_code'] = $credit_policy_code;

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
     * @param string $subscription_class The type of subscription.
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
     * @param int $term_length The number of issues included in the subscription order.
     *
     * @return $this
     */
    public function setTermLength($term_length)
    {
        $this->container['term_length'] = $term_length;

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
     * Gets free_issues
     *
     * @return int
     */
    public function getFreeIssues()
    {
        return $this->container['free_issues'];
    }

    /**
     * Sets free_issues
     *
     * @param int $free_issues Number of free issues to give at the beginning of the subscription.
     *
     * @return $this
     */
    public function setFreeIssues($free_issues)
    {
        $this->container['free_issues'] = $free_issues;

        return $this;
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
     * @param string $delivery_code The postal delivery method.
     *
     * @return $this
     */
    public function setDeliveryCode($delivery_code)
    {
        $this->container['delivery_code'] = $delivery_code;

        return $this;
    }

    /**
     * Gets auto_renewal_chain_id
     *
     * @return string
     */
    public function getAutoRenewalChainId()
    {
        return $this->container['auto_renewal_chain_id'];
    }

    /**
     * Sets auto_renewal_chain_id
     *
     * @param string $auto_renewal_chain_id The auto-renewal chain ID.
     *
     * @return $this
     */
    public function setAutoRenewalChainId($auto_renewal_chain_id)
    {
        $this->container['auto_renewal_chain_id'] = $auto_renewal_chain_id;

        return $this;
    }

    /**
     * Gets auto_renewal_promotion_code
     *
     * @return string
     */
    public function getAutoRenewalPromotionCode()
    {
        return $this->container['auto_renewal_promotion_code'];
    }

    /**
     * Sets auto_renewal_promotion_code
     *
     * @param string $auto_renewal_promotion_code The auto-renewal promotion code.
     *
     * @return $this
     */
    public function setAutoRenewalPromotionCode($auto_renewal_promotion_code)
    {
        $this->container['auto_renewal_promotion_code'] = $auto_renewal_promotion_code;

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


