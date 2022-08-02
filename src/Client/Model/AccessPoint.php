<?php
/**
 * AccessPoint
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
 * AccessPoint Class Doc Comment
 *
 * @category Class
 * @description Information about an Access Point on an agreement.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_number' => 'string',
        'product_name' => 'string',
        'is_available_for_all_participants' => 'bool',
        'profile_id' => 'string',
        'quantity_ordered' => 'int',
        'quantity_remaining' => 'int',
        'rate_code' => 'string',
        'sequence_number' => 'int',
        'access_service_code' => 'string',
        'pricing_method' => 'string',
        'package' => '\Advantage\Client\Model\SubscriptionPackageSource',
        'subscription_type' => 'string',
        'unit_price' => 'double',
        'additional_discount' => 'double',
        'participants' => '\Advantage\Client\Model\AccessPointParticipant[]',
        'amounts' => '\Advantage\Client\Model\AccessPointCalculationResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_number' => null,
        'product_name' => null,
        'is_available_for_all_participants' => null,
        'profile_id' => null,
        'quantity_ordered' => 'int32',
        'quantity_remaining' => 'int32',
        'rate_code' => null,
        'sequence_number' => 'int32',
        'access_service_code' => null,
        'pricing_method' => null,
        'package' => null,
        'subscription_type' => null,
        'unit_price' => 'double',
        'additional_discount' => 'double',
        'participants' => null,
        'amounts' => null
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
        'item_number' => 'ItemNumber',
        'product_name' => 'ProductName',
        'is_available_for_all_participants' => 'IsAvailableForAllParticipants',
        'profile_id' => 'ProfileId',
        'quantity_ordered' => 'QuantityOrdered',
        'quantity_remaining' => 'QuantityRemaining',
        'rate_code' => 'RateCode',
        'sequence_number' => 'SequenceNumber',
        'access_service_code' => 'AccessServiceCode',
        'pricing_method' => 'PricingMethod',
        'package' => 'Package',
        'subscription_type' => 'SubscriptionType',
        'unit_price' => 'UnitPrice',
        'additional_discount' => 'AdditionalDiscount',
        'participants' => 'Participants',
        'amounts' => 'Amounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_number' => 'setItemNumber',
        'product_name' => 'setProductName',
        'is_available_for_all_participants' => 'setIsAvailableForAllParticipants',
        'profile_id' => 'setProfileId',
        'quantity_ordered' => 'setQuantityOrdered',
        'quantity_remaining' => 'setQuantityRemaining',
        'rate_code' => 'setRateCode',
        'sequence_number' => 'setSequenceNumber',
        'access_service_code' => 'setAccessServiceCode',
        'pricing_method' => 'setPricingMethod',
        'package' => 'setPackage',
        'subscription_type' => 'setSubscriptionType',
        'unit_price' => 'setUnitPrice',
        'additional_discount' => 'setAdditionalDiscount',
        'participants' => 'setParticipants',
        'amounts' => 'setAmounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_number' => 'getItemNumber',
        'product_name' => 'getProductName',
        'is_available_for_all_participants' => 'getIsAvailableForAllParticipants',
        'profile_id' => 'getProfileId',
        'quantity_ordered' => 'getQuantityOrdered',
        'quantity_remaining' => 'getQuantityRemaining',
        'rate_code' => 'getRateCode',
        'sequence_number' => 'getSequenceNumber',
        'access_service_code' => 'getAccessServiceCode',
        'pricing_method' => 'getPricingMethod',
        'package' => 'getPackage',
        'subscription_type' => 'getSubscriptionType',
        'unit_price' => 'getUnitPrice',
        'additional_discount' => 'getAdditionalDiscount',
        'participants' => 'getParticipants',
        'amounts' => 'getAmounts'
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

    const PRICING_METHOD_AGREEMENT_BASED = 'AgreementBased';
    const PRICING_METHOD_PARTICIPANT_BASED = 'ParticipantBased';
    const PRICING_METHOD_QUANTITY_BASED = 'QuantityBased';
    

    
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
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['is_available_for_all_participants'] = isset($data['is_available_for_all_participants']) ? $data['is_available_for_all_participants'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['quantity_remaining'] = isset($data['quantity_remaining']) ? $data['quantity_remaining'] : null;
        $this->container['rate_code'] = isset($data['rate_code']) ? $data['rate_code'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['access_service_code'] = isset($data['access_service_code']) ? $data['access_service_code'] : null;
        $this->container['pricing_method'] = isset($data['pricing_method']) ? $data['pricing_method'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['subscription_type'] = isset($data['subscription_type']) ? $data['subscription_type'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['additional_discount'] = isset($data['additional_discount']) ? $data['additional_discount'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['amounts'] = isset($data['amounts']) ? $data['amounts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets item_number
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->container['item_number'];
    }

    /**
     * Sets item_number
     *
     * @param string $item_number The item number that represents this access item.
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name The access item title
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets is_available_for_all_participants
     *
     * @return bool
     */
    public function getIsAvailableForAllParticipants()
    {
        return $this->container['is_available_for_all_participants'];
    }

    /**
     * Sets is_available_for_all_participants
     *
     * @param bool $is_available_for_all_participants true if access point is available for all participants.
     *
     * @return $this
     */
    public function setIsAvailableForAllParticipants($is_available_for_all_participants)
    {
        $this->container['is_available_for_all_participants'] = $is_available_for_all_participants;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id Profile ID, or blank if none.
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets quantity_ordered
     *
     * @return int
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param int $quantity_ordered Access point quantity.
     *
     * @return $this
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets quantity_remaining
     *
     * @return int
     */
    public function getQuantityRemaining()
    {
        return $this->container['quantity_remaining'];
    }

    /**
     * Sets quantity_remaining
     *
     * @param int $quantity_remaining Access point quantity remaining.
     *
     * @return $this
     */
    public function setQuantityRemaining($quantity_remaining)
    {
        $this->container['quantity_remaining'] = $quantity_remaining;

        return $this;
    }

    /**
     * Gets rate_code
     *
     * @return string
     */
    public function getRateCode()
    {
        return $this->container['rate_code'];
    }

    /**
     * Sets rate_code
     *
     * @param string $rate_code AMB rate code.
     *
     * @return $this
     */
    public function setRateCode($rate_code)
    {
        $this->container['rate_code'] = $rate_code;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number Access point sequence number (ID).
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

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
     * @param string $access_service_code Access service.
     *
     * @return $this
     */
    public function setAccessServiceCode($access_service_code)
    {
        $this->container['access_service_code'] = $access_service_code;

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
     * @param string $pricing_method Pricing Method.
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
     * Gets package
     *
     * @return \Advantage\Client\Model\SubscriptionPackageSource
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param \Advantage\Client\Model\SubscriptionPackageSource $package If this access point was ordered as part of a package then use this property  to trace the access point back to the package component.
     *
     * @return $this
     */
    public function setPackage($package)
    {
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets subscription_type
     *
     * @return string
     */
    public function getSubscriptionType()
    {
        return $this->container['subscription_type'];
    }

    /**
     * Sets subscription_type
     *
     * @param string $subscription_type Susbcription Type
     *
     * @return $this
     */
    public function setSubscriptionType($subscription_type)
    {
        $this->container['subscription_type'] = $subscription_type;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param double $unit_price Unit Price.
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets additional_discount
     *
     * @return double
     */
    public function getAdditionalDiscount()
    {
        return $this->container['additional_discount'];
    }

    /**
     * Sets additional_discount
     *
     * @param double $additional_discount Additional Discount.
     *
     * @return $this
     */
    public function setAdditionalDiscount($additional_discount)
    {
        $this->container['additional_discount'] = $additional_discount;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \Advantage\Client\Model\AccessPointParticipant[]
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Advantage\Client\Model\AccessPointParticipant[] $participants List of participants on this access point.  If empty, all agreement participants have access.
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets amounts
     *
     * @return \Advantage\Client\Model\AccessPointCalculationResult
     */
    public function getAmounts()
    {
        return $this->container['amounts'];
    }

    /**
     * Sets amounts
     *
     * @param \Advantage\Client\Model\AccessPointCalculationResult $amounts Sales Amounts for this access point
     *
     * @return $this
     */
    public function setAmounts($amounts)
    {
        $this->container['amounts'] = $amounts;

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


