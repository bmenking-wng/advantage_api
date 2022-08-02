<?php
/**
 * RecurringDonationCreateRequest
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
 * RecurringDonationCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Model for creation of a recurring donation.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecurringDonationCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecurringDonationCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bill_to_customer_number' => 'string',
        'ship_to_customer_number' => 'string',
        'recurring_contribution_amount' => 'double',
        'promotion_code' => 'string',
        'billing_currency_code' => 'string',
        'start_date' => '\DateTime',
        'schedule' => '\Advantage\Client\Model\RecurringDonationSchedule',
        'next_contribution' => '\DateTime',
        'expires' => '\DateTime',
        'fund_item_number' => 'string',
        'maximum_contribution' => 'double',
        'premium' => '\Advantage\Client\Model\RecurringDonationPremium',
        'payment' => '\Advantage\Client\Model\RecurringDonationPaymentRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bill_to_customer_number' => null,
        'ship_to_customer_number' => null,
        'recurring_contribution_amount' => 'double',
        'promotion_code' => null,
        'billing_currency_code' => null,
        'start_date' => 'date-time',
        'schedule' => null,
        'next_contribution' => 'date-time',
        'expires' => 'date-time',
        'fund_item_number' => null,
        'maximum_contribution' => 'double',
        'premium' => null,
        'payment' => null
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
        'bill_to_customer_number' => 'BillToCustomerNumber',
        'ship_to_customer_number' => 'ShipToCustomerNumber',
        'recurring_contribution_amount' => 'RecurringContributionAmount',
        'promotion_code' => 'PromotionCode',
        'billing_currency_code' => 'BillingCurrencyCode',
        'start_date' => 'StartDate',
        'schedule' => 'Schedule',
        'next_contribution' => 'NextContribution',
        'expires' => 'Expires',
        'fund_item_number' => 'FundItemNumber',
        'maximum_contribution' => 'MaximumContribution',
        'premium' => 'Premium',
        'payment' => 'Payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_to_customer_number' => 'setBillToCustomerNumber',
        'ship_to_customer_number' => 'setShipToCustomerNumber',
        'recurring_contribution_amount' => 'setRecurringContributionAmount',
        'promotion_code' => 'setPromotionCode',
        'billing_currency_code' => 'setBillingCurrencyCode',
        'start_date' => 'setStartDate',
        'schedule' => 'setSchedule',
        'next_contribution' => 'setNextContribution',
        'expires' => 'setExpires',
        'fund_item_number' => 'setFundItemNumber',
        'maximum_contribution' => 'setMaximumContribution',
        'premium' => 'setPremium',
        'payment' => 'setPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_to_customer_number' => 'getBillToCustomerNumber',
        'ship_to_customer_number' => 'getShipToCustomerNumber',
        'recurring_contribution_amount' => 'getRecurringContributionAmount',
        'promotion_code' => 'getPromotionCode',
        'billing_currency_code' => 'getBillingCurrencyCode',
        'start_date' => 'getStartDate',
        'schedule' => 'getSchedule',
        'next_contribution' => 'getNextContribution',
        'expires' => 'getExpires',
        'fund_item_number' => 'getFundItemNumber',
        'maximum_contribution' => 'getMaximumContribution',
        'premium' => 'getPremium',
        'payment' => 'getPayment'
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
        $this->container['bill_to_customer_number'] = isset($data['bill_to_customer_number']) ? $data['bill_to_customer_number'] : null;
        $this->container['ship_to_customer_number'] = isset($data['ship_to_customer_number']) ? $data['ship_to_customer_number'] : null;
        $this->container['recurring_contribution_amount'] = isset($data['recurring_contribution_amount']) ? $data['recurring_contribution_amount'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['billing_currency_code'] = isset($data['billing_currency_code']) ? $data['billing_currency_code'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['next_contribution'] = isset($data['next_contribution']) ? $data['next_contribution'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['fund_item_number'] = isset($data['fund_item_number']) ? $data['fund_item_number'] : null;
        $this->container['maximum_contribution'] = isset($data['maximum_contribution']) ? $data['maximum_contribution'] : null;
        $this->container['premium'] = isset($data['premium']) ? $data['premium'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
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
     * @param string $bill_to_customer_number The bill-to customer number for the recurring donation
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
     * @param string $promotion_code The promotion code for the recurring donation.
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
     * @param string $billing_currency_code The billing currency code for the recurring donation.
     *
     * @return $this
     */
    public function setBillingCurrencyCode($billing_currency_code)
    {
        $this->container['billing_currency_code'] = $billing_currency_code;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The start date for the recurring donation.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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
     * @param \DateTime $next_contribution The Next Contribution for the recurring donation.
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
     * Gets payment
     *
     * @return \Advantage\Client\Model\RecurringDonationPaymentRequest
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Advantage\Client\Model\RecurringDonationPaymentRequest $payment Payment information for a recurring donation.
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

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


