<?php
/**
 * OrderLineIn
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
 * OrderLineIn Class Doc Comment
 *
 * @category Class
 * @description Information for creating an order line. This can be used for creating order lines of various types (product, subscription, agreement, etc.).  Not all properties are required, only those for the appropriate order line type.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLineIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLineIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agency_reference' => 'string',
        'item_number' => 'string',
        'quantity' => 'int',
        'promotion_code' => 'string',
        'promotion_choice_code' => 'string',
        'price_code' => 'string',
        'ship_to' => '\Advantage\Client\Model\CustomerAddressKey',
        'upsell_presentation_id' => 'string',
        'product' => '\Advantage\Client\Model\ProductOrderLineIn',
        'subscription' => '\Advantage\Client\Model\SubscriptionOrderLineIn',
        'access' => '\Advantage\Client\Model\AccessOrderLineIn',
        'conference' => '\Advantage\Client\Model\ConferenceOrderLineIn',
        'profile' => '\Advantage\Client\Model\Profile',
        'demographics' => '\Advantage\Client\Model\DemographicValue[]',
        'override_unit_price' => 'double',
        'gift_message' => '\Advantage\Client\Model\GiftMessage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agency_reference' => null,
        'item_number' => null,
        'quantity' => 'int32',
        'promotion_code' => null,
        'promotion_choice_code' => null,
        'price_code' => null,
        'ship_to' => null,
        'upsell_presentation_id' => null,
        'product' => null,
        'subscription' => null,
        'access' => null,
        'conference' => null,
        'profile' => null,
        'demographics' => null,
        'override_unit_price' => 'double',
        'gift_message' => null
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
        'agency_reference' => 'AgencyReference',
        'item_number' => 'ItemNumber',
        'quantity' => 'Quantity',
        'promotion_code' => 'PromotionCode',
        'promotion_choice_code' => 'PromotionChoiceCode',
        'price_code' => 'PriceCode',
        'ship_to' => 'ShipTo',
        'upsell_presentation_id' => 'UpsellPresentationId',
        'product' => 'Product',
        'subscription' => 'Subscription',
        'access' => 'Access',
        'conference' => 'Conference',
        'profile' => 'Profile',
        'demographics' => 'Demographics',
        'override_unit_price' => 'OverrideUnitPrice',
        'gift_message' => 'GiftMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agency_reference' => 'setAgencyReference',
        'item_number' => 'setItemNumber',
        'quantity' => 'setQuantity',
        'promotion_code' => 'setPromotionCode',
        'promotion_choice_code' => 'setPromotionChoiceCode',
        'price_code' => 'setPriceCode',
        'ship_to' => 'setShipTo',
        'upsell_presentation_id' => 'setUpsellPresentationId',
        'product' => 'setProduct',
        'subscription' => 'setSubscription',
        'access' => 'setAccess',
        'conference' => 'setConference',
        'profile' => 'setProfile',
        'demographics' => 'setDemographics',
        'override_unit_price' => 'setOverrideUnitPrice',
        'gift_message' => 'setGiftMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agency_reference' => 'getAgencyReference',
        'item_number' => 'getItemNumber',
        'quantity' => 'getQuantity',
        'promotion_code' => 'getPromotionCode',
        'promotion_choice_code' => 'getPromotionChoiceCode',
        'price_code' => 'getPriceCode',
        'ship_to' => 'getShipTo',
        'upsell_presentation_id' => 'getUpsellPresentationId',
        'product' => 'getProduct',
        'subscription' => 'getSubscription',
        'access' => 'getAccess',
        'conference' => 'getConference',
        'profile' => 'getProfile',
        'demographics' => 'getDemographics',
        'override_unit_price' => 'getOverrideUnitPrice',
        'gift_message' => 'getGiftMessage'
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
        $this->container['agency_reference'] = isset($data['agency_reference']) ? $data['agency_reference'] : null;
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['promotion_choice_code'] = isset($data['promotion_choice_code']) ? $data['promotion_choice_code'] : null;
        $this->container['price_code'] = isset($data['price_code']) ? $data['price_code'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['upsell_presentation_id'] = isset($data['upsell_presentation_id']) ? $data['upsell_presentation_id'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['conference'] = isset($data['conference']) ? $data['conference'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
        $this->container['override_unit_price'] = isset($data['override_unit_price']) ? $data['override_unit_price'] : null;
        $this->container['gift_message'] = isset($data['gift_message']) ? $data['gift_message'] : null;
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
     * Gets agency_reference
     *
     * @return string
     */
    public function getAgencyReference()
    {
        return $this->container['agency_reference'];
    }

    /**
     * Sets agency_reference
     *
     * @param string $agency_reference The reference the agency uses to identify the ordered item.
     *
     * @return $this
     */
    public function setAgencyReference($agency_reference)
    {
        $this->container['agency_reference'] = $agency_reference;

        return $this;
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
     * @param string $item_number The item number, identifying which access agreement is being ordered (Publication Code for Subscription   Items).
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity (Copies for Subscription Order Lines).
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param string $promotion_code The promotion code (sometimes referred to as key code).
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets promotion_choice_code
     *
     * @return string
     */
    public function getPromotionChoiceCode()
    {
        return $this->container['promotion_choice_code'];
    }

    /**
     * Sets promotion_choice_code
     *
     * @param string $promotion_choice_code The promotion choice, indicating a set of default settings for an order line.
     *
     * @return $this
     */
    public function setPromotionChoiceCode($promotion_choice_code)
    {
        $this->container['promotion_choice_code'] = $promotion_choice_code;

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
     * @param string $price_code Price code to use to determine the price.  Pass blank to use Advantage's default price code lookup.  If a price code is provided, the price calculated from the price code will be set on  the order line as a user override unit price.  Neither promotional nor volume discount pricing will be used.
     *
     * @return $this
     */
    public function setPriceCode($price_code)
    {
        $this->container['price_code'] = $price_code;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Advantage\Client\Model\CustomerAddressKey
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Advantage\Client\Model\CustomerAddressKey $ship_to The ship to customer address. This field does not apply to access item order lines.
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets upsell_presentation_id
     *
     * @return string
     */
    public function getUpsellPresentationId()
    {
        return $this->container['upsell_presentation_id'];
    }

    /**
     * Sets upsell_presentation_id
     *
     * @param string $upsell_presentation_id The ID given when upsell was presented to customer.
     *
     * @return $this
     */
    public function setUpsellPresentationId($upsell_presentation_id)
    {
        $this->container['upsell_presentation_id'] = $upsell_presentation_id;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Advantage\Client\Model\ProductOrderLineIn
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Advantage\Client\Model\ProductOrderLineIn $product Information for creating a PRO (product) order line.
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \Advantage\Client\Model\SubscriptionOrderLineIn
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Advantage\Client\Model\SubscriptionOrderLineIn $subscription Information for creating a CIR (subscription) order line.
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \Advantage\Client\Model\AccessOrderLineIn
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \Advantage\Client\Model\AccessOrderLineIn $access Information for creating an AMB (agreement) order line.
     *
     * @return $this
     */
    public function setAccess($access)
    {
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets conference
     *
     * @return \Advantage\Client\Model\ConferenceOrderLineIn
     */
    public function getConference()
    {
        return $this->container['conference'];
    }

    /**
     * Sets conference
     *
     * @param \Advantage\Client\Model\ConferenceOrderLineIn $conference Information for creating a conference order line.
     *
     * @return $this
     */
    public function setConference($conference)
    {
        $this->container['conference'] = $conference;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return \Advantage\Client\Model\Profile
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \Advantage\Client\Model\Profile $profile The optional profile element contains responses to a set of questions asked at order entry time.    Profiles are typically used to store customer demographic information for audited subscriptions or   custom inputs used for order fulfillment.
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets demographics
     *
     * @return \Advantage\Client\Model\DemographicValue[]
     */
    public function getDemographics()
    {
        return $this->container['demographics'];
    }

    /**
     * Sets demographics
     *
     * @param \Advantage\Client\Model\DemographicValue[] $demographics Demographic field values to store on the order line
     *
     * @return $this
     */
    public function setDemographics($demographics)
    {
        $this->container['demographics'] = $demographics;

        return $this;
    }

    /**
     * Gets override_unit_price
     *
     * @return double
     */
    public function getOverrideUnitPrice()
    {
        return $this->container['override_unit_price'];
    }

    /**
     * Sets override_unit_price
     *
     * @param double $override_unit_price Explicitly set the unit price for this order line.
     *
     * @return $this
     */
    public function setOverrideUnitPrice($override_unit_price)
    {
        $this->container['override_unit_price'] = $override_unit_price;

        return $this;
    }

    /**
     * Gets gift_message
     *
     * @return \Advantage\Client\Model\GiftMessage
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message
     *
     * @param \Advantage\Client\Model\GiftMessage $gift_message Gift message for the order line
     *
     * @return $this
     */
    public function setGiftMessage($gift_message)
    {
        $this->container['gift_message'] = $gift_message;

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


