<?php
/**
 * RecurringDonation
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
 * RecurringDonation Class Doc Comment
 *
 * @category Class
 * @description Information for a recurring donation.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecurringDonation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecurringDonation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recurring_donation_id' => 'string',
        'bill_to_customer_number' => 'string',
        'ship_to_customer_number' => 'string',
        'recurring_contribution_amount' => 'double',
        'promotion_code' => 'string',
        'billing_currency_code' => 'string',
        'billing_organization_code' => 'string',
        'donation_status' => 'string',
        'started' => '\DateTime',
        'last_charge' => '\DateTime',
        'number_of_charges' => 'int',
        'schedule' => '\Advantage\Client\Model\RecurringDonationSchedule',
        'next_contribution' => '\DateTime',
        'expires' => '\DateTime',
        'fund_item_number' => 'string',
        'maximum_contribution' => 'double',
        'contribution_to_date' => 'double',
        'premium' => '\Advantage\Client\Model\RecurringDonationPremium',
        'added_by' => 'string',
        'added_on' => '\DateTime',
        'payment_settings' => '\Advantage\Client\Model\RecurringDonationPaymentSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recurring_donation_id' => null,
        'bill_to_customer_number' => null,
        'ship_to_customer_number' => null,
        'recurring_contribution_amount' => 'double',
        'promotion_code' => null,
        'billing_currency_code' => null,
        'billing_organization_code' => null,
        'donation_status' => null,
        'started' => 'date-time',
        'last_charge' => 'date-time',
        'number_of_charges' => 'int32',
        'schedule' => null,
        'next_contribution' => 'date-time',
        'expires' => 'date-time',
        'fund_item_number' => null,
        'maximum_contribution' => 'double',
        'contribution_to_date' => 'double',
        'premium' => null,
        'added_by' => null,
        'added_on' => 'date-time',
        'payment_settings' => null
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
        'recurring_donation_id' => 'RecurringDonationId',
        'bill_to_customer_number' => 'BillToCustomerNumber',
        'ship_to_customer_number' => 'ShipToCustomerNumber',
        'recurring_contribution_amount' => 'RecurringContributionAmount',
        'promotion_code' => 'PromotionCode',
        'billing_currency_code' => 'BillingCurrencyCode',
        'billing_organization_code' => 'BillingOrganizationCode',
        'donation_status' => 'DonationStatus',
        'started' => 'Started',
        'last_charge' => 'LastCharge',
        'number_of_charges' => 'NumberOfCharges',
        'schedule' => 'Schedule',
        'next_contribution' => 'NextContribution',
        'expires' => 'Expires',
        'fund_item_number' => 'FundItemNumber',
        'maximum_contribution' => 'MaximumContribution',
        'contribution_to_date' => 'ContributionToDate',
        'premium' => 'Premium',
        'added_by' => 'AddedBy',
        'added_on' => 'AddedOn',
        'payment_settings' => 'PaymentSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recurring_donation_id' => 'setRecurringDonationId',
        'bill_to_customer_number' => 'setBillToCustomerNumber',
        'ship_to_customer_number' => 'setShipToCustomerNumber',
        'recurring_contribution_amount' => 'setRecurringContributionAmount',
        'promotion_code' => 'setPromotionCode',
        'billing_currency_code' => 'setBillingCurrencyCode',
        'billing_organization_code' => 'setBillingOrganizationCode',
        'donation_status' => 'setDonationStatus',
        'started' => 'setStarted',
        'last_charge' => 'setLastCharge',
        'number_of_charges' => 'setNumberOfCharges',
        'schedule' => 'setSchedule',
        'next_contribution' => 'setNextContribution',
        'expires' => 'setExpires',
        'fund_item_number' => 'setFundItemNumber',
        'maximum_contribution' => 'setMaximumContribution',
        'contribution_to_date' => 'setContributionToDate',
        'premium' => 'setPremium',
        'added_by' => 'setAddedBy',
        'added_on' => 'setAddedOn',
        'payment_settings' => 'setPaymentSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recurring_donation_id' => 'getRecurringDonationId',
        'bill_to_customer_number' => 'getBillToCustomerNumber',
        'ship_to_customer_number' => 'getShipToCustomerNumber',
        'recurring_contribution_amount' => 'getRecurringContributionAmount',
        'promotion_code' => 'getPromotionCode',
        'billing_currency_code' => 'getBillingCurrencyCode',
        'billing_organization_code' => 'getBillingOrganizationCode',
        'donation_status' => 'getDonationStatus',
        'started' => 'getStarted',
        'last_charge' => 'getLastCharge',
        'number_of_charges' => 'getNumberOfCharges',
        'schedule' => 'getSchedule',
        'next_contribution' => 'getNextContribution',
        'expires' => 'getExpires',
        'fund_item_number' => 'getFundItemNumber',
        'maximum_contribution' => 'getMaximumContribution',
        'contribution_to_date' => 'getContributionToDate',
        'premium' => 'getPremium',
        'added_by' => 'getAddedBy',
        'added_on' => 'getAddedOn',
        'payment_settings' => 'getPaymentSettings'
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

    const DONATION_STATUS_ACTIVE = 'Active';
    const DONATION_STATUS_INACTIVE = 'Inactive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDonationStatusAllowableValues()
    {
        return [
            self::DONATION_STATUS_ACTIVE,
            self::DONATION_STATUS_INACTIVE,
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
        $this->container['recurring_donation_id'] = isset($data['recurring_donation_id']) ? $data['recurring_donation_id'] : null;
        $this->container['bill_to_customer_number'] = isset($data['bill_to_customer_number']) ? $data['bill_to_customer_number'] : null;
        $this->container['ship_to_customer_number'] = isset($data['ship_to_customer_number']) ? $data['ship_to_customer_number'] : null;
        $this->container['recurring_contribution_amount'] = isset($data['recurring_contribution_amount']) ? $data['recurring_contribution_amount'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['billing_currency_code'] = isset($data['billing_currency_code']) ? $data['billing_currency_code'] : null;
        $this->container['billing_organization_code'] = isset($data['billing_organization_code']) ? $data['billing_organization_code'] : null;
        $this->container['donation_status'] = isset($data['donation_status']) ? $data['donation_status'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['last_charge'] = isset($data['last_charge']) ? $data['last_charge'] : null;
        $this->container['number_of_charges'] = isset($data['number_of_charges']) ? $data['number_of_charges'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['next_contribution'] = isset($data['next_contribution']) ? $data['next_contribution'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['fund_item_number'] = isset($data['fund_item_number']) ? $data['fund_item_number'] : null;
        $this->container['maximum_contribution'] = isset($data['maximum_contribution']) ? $data['maximum_contribution'] : null;
        $this->container['contribution_to_date'] = isset($data['contribution_to_date']) ? $data['contribution_to_date'] : null;
        $this->container['premium'] = isset($data['premium']) ? $data['premium'] : null;
        $this->container['added_by'] = isset($data['added_by']) ? $data['added_by'] : null;
        $this->container['added_on'] = isset($data['added_on']) ? $data['added_on'] : null;
        $this->container['payment_settings'] = isset($data['payment_settings']) ? $data['payment_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDonationStatusAllowableValues();
        if (!is_null($this->container['donation_status']) && !in_array($this->container['donation_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'donation_status', must be one of '%s'",
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
     * Gets recurring_donation_id
     *
     * @return string
     */
    public function getRecurringDonationId()
    {
        return $this->container['recurring_donation_id'];
    }

    /**
     * Sets recurring_donation_id
     *
     * @param string $recurring_donation_id The recurring donation Id.
     *
     * @return $this
     */
    public function setRecurringDonationId($recurring_donation_id)
    {
        $this->container['recurring_donation_id'] = $recurring_donation_id;

        return $this;
    }

    /**
     * Gets bill_to_customer_number
     *
     * @return string
     */
    public function getBillToCustomerNumber()
    {
        return $this->container['bill_to_customer_number'];
    }

    /**
     * Sets bill_to_customer_number
     *
     * @param string $bill_to_customer_number The bill-to customer number on the recurring donation.
     *
     * @return $this
     */
    public function setBillToCustomerNumber($bill_to_customer_number)
    {
        $this->container['bill_to_customer_number'] = $bill_to_customer_number;

        return $this;
    }

    /**
     * Gets ship_to_customer_number
     *
     * @return string
     */
    public function getShipToCustomerNumber()
    {
        return $this->container['ship_to_customer_number'];
    }

    /**
     * Sets ship_to_customer_number
     *
     * @param string $ship_to_customer_number The ship-to customer for the recurring donation.
     *
     * @return $this
     */
    public function setShipToCustomerNumber($ship_to_customer_number)
    {
        $this->container['ship_to_customer_number'] = $ship_to_customer_number;

        return $this;
    }

    /**
     * Gets recurring_contribution_amount
     *
     * @return double
     */
    public function getRecurringContributionAmount()
    {
        return $this->container['recurring_contribution_amount'];
    }

    /**
     * Sets recurring_contribution_amount
     *
     * @param double $recurring_contribution_amount The net contribution amount for the recurring donation.
     *
     * @return $this
     */
    public function setRecurringContributionAmount($recurring_contribution_amount)
    {
        $this->container['recurring_contribution_amount'] = $recurring_contribution_amount;

        return $this;
    }

    /**
     * Gets promotion_code
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->container['promotion_code'];
    }

    /**
     * Sets promotion_code
     *
     * @param string $promotion_code The promotion code on the recurring donation.
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets billing_currency_code
     *
     * @return string
     */
    public function getBillingCurrencyCode()
    {
        return $this->container['billing_currency_code'];
    }

    /**
     * Sets billing_currency_code
     *
     * @param string $billing_currency_code The billing currency code on the recurring donation.
     *
     * @return $this
     */
    public function setBillingCurrencyCode($billing_currency_code)
    {
        $this->container['billing_currency_code'] = $billing_currency_code;

        return $this;
    }

    /**
     * Gets billing_organization_code
     *
     * @return string
     */
    public function getBillingOrganizationCode()
    {
        return $this->container['billing_organization_code'];
    }

    /**
     * Sets billing_organization_code
     *
     * @param string $billing_organization_code The billing organization code on the recurring donation.
     *
     * @return $this
     */
    public function setBillingOrganizationCode($billing_organization_code)
    {
        $this->container['billing_organization_code'] = $billing_organization_code;

        return $this;
    }

    /**
     * Gets donation_status
     *
     * @return string
     */
    public function getDonationStatus()
    {
        return $this->container['donation_status'];
    }

    /**
     * Sets donation_status
     *
     * @param string $donation_status The donation status for the recurring donation.
     *
     * @return $this
     */
    public function setDonationStatus($donation_status)
    {
        $allowedValues = $this->getDonationStatusAllowableValues();
        if (!is_null($donation_status) && !in_array($donation_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'donation_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['donation_status'] = $donation_status;

        return $this;
    }

    /**
     * Gets started
     *
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime $started The start date is the date that the first payment was processed for this recurring donation.
     *
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets last_charge
     *
     * @return \DateTime
     */
    public function getLastCharge()
    {
        return $this->container['last_charge'];
    }

    /**
     * Sets last_charge
     *
     * @param \DateTime $last_charge The last charge for the recurring donation.
     *
     * @return $this
     */
    public function setLastCharge($last_charge)
    {
        $this->container['last_charge'] = $last_charge;

        return $this;
    }

    /**
     * Gets number_of_charges
     *
     * @return int
     */
    public function getNumberOfCharges()
    {
        return $this->container['number_of_charges'];
    }

    /**
     * Sets number_of_charges
     *
     * @param int $number_of_charges The number of charges for the recurring donation.
     *
     * @return $this
     */
    public function setNumberOfCharges($number_of_charges)
    {
        $this->container['number_of_charges'] = $number_of_charges;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \Advantage\Client\Model\RecurringDonationSchedule
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Advantage\Client\Model\RecurringDonationSchedule $schedule Info pertaining to the scheduling of a recurring donation.
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets next_contribution
     *
     * @return \DateTime
     */
    public function getNextContribution()
    {
        return $this->container['next_contribution'];
    }

    /**
     * Sets next_contribution
     *
     * @param \DateTime $next_contribution The next contribution for the recurring donation.
     *
     * @return $this
     */
    public function setNextContribution($next_contribution)
    {
        $this->container['next_contribution'] = $next_contribution;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param \DateTime $expires The expire date for the recurring donation. Donations will be collected up to and including this date.
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets fund_item_number
     *
     * @return string
     */
    public function getFundItemNumber()
    {
        return $this->container['fund_item_number'];
    }

    /**
     * Sets fund_item_number
     *
     * @param string $fund_item_number The fund item number for the recurring donation.
     *
     * @return $this
     */
    public function setFundItemNumber($fund_item_number)
    {
        $this->container['fund_item_number'] = $fund_item_number;

        return $this;
    }

    /**
     * Gets maximum_contribution
     *
     * @return double
     */
    public function getMaximumContribution()
    {
        return $this->container['maximum_contribution'];
    }

    /**
     * Sets maximum_contribution
     *
     * @param double $maximum_contribution The maximum contribution for the recurring donation.
     *
     * @return $this
     */
    public function setMaximumContribution($maximum_contribution)
    {
        $this->container['maximum_contribution'] = $maximum_contribution;

        return $this;
    }

    /**
     * Gets contribution_to_date
     *
     * @return double
     */
    public function getContributionToDate()
    {
        return $this->container['contribution_to_date'];
    }

    /**
     * Sets contribution_to_date
     *
     * @param double $contribution_to_date The contribution to-date for the recurring donation. The sum of the contributions made to-date.
     *
     * @return $this
     */
    public function setContributionToDate($contribution_to_date)
    {
        $this->container['contribution_to_date'] = $contribution_to_date;

        return $this;
    }

    /**
     * Gets premium
     *
     * @return \Advantage\Client\Model\RecurringDonationPremium
     */
    public function getPremium()
    {
        return $this->container['premium'];
    }

    /**
     * Sets premium
     *
     * @param \Advantage\Client\Model\RecurringDonationPremium $premium Info pertaining to premiums triggered for the recurring donation.
     *
     * @return $this
     */
    public function setPremium($premium)
    {
        $this->container['premium'] = $premium;

        return $this;
    }

    /**
     * Gets added_by
     *
     * @return string
     */
    public function getAddedBy()
    {
        return $this->container['added_by'];
    }

    /**
     * Sets added_by
     *
     * @param string $added_by The user responsible for adding the recurring donation.
     *
     * @return $this
     */
    public function setAddedBy($added_by)
    {
        $this->container['added_by'] = $added_by;

        return $this;
    }

    /**
     * Gets added_on
     *
     * @return \DateTime
     */
    public function getAddedOn()
    {
        return $this->container['added_on'];
    }

    /**
     * Sets added_on
     *
     * @param \DateTime $added_on The date the recurring donation was added.
     *
     * @return $this
     */
    public function setAddedOn($added_on)
    {
        $this->container['added_on'] = $added_on;

        return $this;
    }

    /**
     * Gets payment_settings
     *
     * @return \Advantage\Client\Model\RecurringDonationPaymentSettings
     */
    public function getPaymentSettings()
    {
        return $this->container['payment_settings'];
    }

    /**
     * Sets payment_settings
     *
     * @param \Advantage\Client\Model\RecurringDonationPaymentSettings $payment_settings Info pertaining to payments associated with the recurring donation.
     *
     * @return $this
     */
    public function setPaymentSettings($payment_settings)
    {
        $this->container['payment_settings'] = $payment_settings;

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


