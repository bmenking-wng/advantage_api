<?php
/**
 * PromotionDraft
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
 * PromotionDraft Class Doc Comment
 *
 * @category Class
 * @description Information for a promotion draft.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotionDraft implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PromotionDraft';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaign_code' => 'string',
        'initiator' => 'string',
        'date_sent' => '\DateTime',
        'effective_to' => '\DateTime',
        'effective_from' => '\DateTime',
        'offer_item_numbers' => 'string[]',
        'offer_item_attributes' => '\Advantage\Client\Model\OfferItemAttributes[]',
        'offer_item_choices' => '\Advantage\Client\Model\OfferItemChoices[]',
        'id' => 'string',
        'promotion_code' => 'string',
        'promotion_name' => 'string',
        'offer_code' => 'string',
        'offer_name' => 'string',
        'is_create_offer' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaign_code' => null,
        'initiator' => null,
        'date_sent' => 'date-time',
        'effective_to' => 'date-time',
        'effective_from' => 'date-time',
        'offer_item_numbers' => null,
        'offer_item_attributes' => null,
        'offer_item_choices' => null,
        'id' => null,
        'promotion_code' => null,
        'promotion_name' => null,
        'offer_code' => null,
        'offer_name' => null,
        'is_create_offer' => null
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
        'campaign_code' => 'CampaignCode',
        'initiator' => 'Initiator',
        'date_sent' => 'DateSent',
        'effective_to' => 'EffectiveTo',
        'effective_from' => 'EffectiveFrom',
        'offer_item_numbers' => 'OfferItemNumbers',
        'offer_item_attributes' => 'OfferItemAttributes',
        'offer_item_choices' => 'OfferItemChoices',
        'id' => 'Id',
        'promotion_code' => 'PromotionCode',
        'promotion_name' => 'PromotionName',
        'offer_code' => 'OfferCode',
        'offer_name' => 'OfferName',
        'is_create_offer' => 'IsCreateOffer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_code' => 'setCampaignCode',
        'initiator' => 'setInitiator',
        'date_sent' => 'setDateSent',
        'effective_to' => 'setEffectiveTo',
        'effective_from' => 'setEffectiveFrom',
        'offer_item_numbers' => 'setOfferItemNumbers',
        'offer_item_attributes' => 'setOfferItemAttributes',
        'offer_item_choices' => 'setOfferItemChoices',
        'id' => 'setId',
        'promotion_code' => 'setPromotionCode',
        'promotion_name' => 'setPromotionName',
        'offer_code' => 'setOfferCode',
        'offer_name' => 'setOfferName',
        'is_create_offer' => 'setIsCreateOffer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_code' => 'getCampaignCode',
        'initiator' => 'getInitiator',
        'date_sent' => 'getDateSent',
        'effective_to' => 'getEffectiveTo',
        'effective_from' => 'getEffectiveFrom',
        'offer_item_numbers' => 'getOfferItemNumbers',
        'offer_item_attributes' => 'getOfferItemAttributes',
        'offer_item_choices' => 'getOfferItemChoices',
        'id' => 'getId',
        'promotion_code' => 'getPromotionCode',
        'promotion_name' => 'getPromotionName',
        'offer_code' => 'getOfferCode',
        'offer_name' => 'getOfferName',
        'is_create_offer' => 'getIsCreateOffer'
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
        $this->container['campaign_code'] = isset($data['campaign_code']) ? $data['campaign_code'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['date_sent'] = isset($data['date_sent']) ? $data['date_sent'] : null;
        $this->container['effective_to'] = isset($data['effective_to']) ? $data['effective_to'] : null;
        $this->container['effective_from'] = isset($data['effective_from']) ? $data['effective_from'] : null;
        $this->container['offer_item_numbers'] = isset($data['offer_item_numbers']) ? $data['offer_item_numbers'] : null;
        $this->container['offer_item_attributes'] = isset($data['offer_item_attributes']) ? $data['offer_item_attributes'] : null;
        $this->container['offer_item_choices'] = isset($data['offer_item_choices']) ? $data['offer_item_choices'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['promotion_name'] = isset($data['promotion_name']) ? $data['promotion_name'] : null;
        $this->container['offer_code'] = isset($data['offer_code']) ? $data['offer_code'] : null;
        $this->container['offer_name'] = isset($data['offer_name']) ? $data['offer_name'] : null;
        $this->container['is_create_offer'] = isset($data['is_create_offer']) ? $data['is_create_offer'] : null;
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
     * Gets campaign_code
     *
     * @return string
     */
    public function getCampaignCode()
    {
        return $this->container['campaign_code'];
    }

    /**
     * Sets campaign_code
     *
     * @param string $campaign_code The campaign code to identify the highest level of marketing and promotion tracking.
     *
     * @return $this
     */
    public function setCampaignCode($campaign_code)
    {
        $this->container['campaign_code'] = $campaign_code;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return string
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param string $initiator The initiator of the promotion.
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets date_sent
     *
     * @return \DateTime
     */
    public function getDateSent()
    {
        return $this->container['date_sent'];
    }

    /**
     * Sets date_sent
     *
     * @param \DateTime $date_sent The date the promotion was sent to consumers.
     *
     * @return $this
     */
    public function setDateSent($date_sent)
    {
        $this->container['date_sent'] = $date_sent;

        return $this;
    }

    /**
     * Gets effective_to
     *
     * @return \DateTime
     */
    public function getEffectiveTo()
    {
        return $this->container['effective_to'];
    }

    /**
     * Sets effective_to
     *
     * @param \DateTime $effective_to Date, up to which, the promotion is valid
     *
     * @return $this
     */
    public function setEffectiveTo($effective_to)
    {
        $this->container['effective_to'] = $effective_to;

        return $this;
    }

    /**
     * Gets effective_from
     *
     * @return \DateTime
     */
    public function getEffectiveFrom()
    {
        return $this->container['effective_from'];
    }

    /**
     * Sets effective_from
     *
     * @param \DateTime $effective_from Date, from which, the promotion is valid
     *
     * @return $this
     */
    public function setEffectiveFrom($effective_from)
    {
        $this->container['effective_from'] = $effective_from;

        return $this;
    }

    /**
     * Gets offer_item_numbers
     *
     * @return string[]
     */
    public function getOfferItemNumbers()
    {
        return $this->container['offer_item_numbers'];
    }

    /**
     * Sets offer_item_numbers
     *
     * @param string[] $offer_item_numbers The item numbers of the items included in the promotion
     *
     * @return $this
     */
    public function setOfferItemNumbers($offer_item_numbers)
    {
        $this->container['offer_item_numbers'] = $offer_item_numbers;

        return $this;
    }

    /**
     * Gets offer_item_attributes
     *
     * @return \Advantage\Client\Model\OfferItemAttributes[]
     */
    public function getOfferItemAttributes()
    {
        return $this->container['offer_item_attributes'];
    }

    /**
     * Sets offer_item_attributes
     *
     * @param \Advantage\Client\Model\OfferItemAttributes[] $offer_item_attributes The collection of OfferItemAttributes, defining the allowed attributed for each offer item.
     *
     * @return $this
     */
    public function setOfferItemAttributes($offer_item_attributes)
    {
        $this->container['offer_item_attributes'] = $offer_item_attributes;

        return $this;
    }

    /**
     * Gets offer_item_choices
     *
     * @return \Advantage\Client\Model\OfferItemChoices[]
     */
    public function getOfferItemChoices()
    {
        return $this->container['offer_item_choices'];
    }

    /**
     * Sets offer_item_choices
     *
     * @param \Advantage\Client\Model\OfferItemChoices[] $offer_item_choices The choices available for the offer items, based on the specified attributes.
     *
     * @return $this
     */
    public function setOfferItemChoices($offer_item_choices)
    {
        $this->container['offer_item_choices'] = $offer_item_choices;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Promotion Draft ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $promotion_code The promotion code to identify the new promotion.
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets promotion_name
     *
     * @return string
     */
    public function getPromotionName()
    {
        return $this->container['promotion_name'];
    }

    /**
     * Sets promotion_name
     *
     * @param string $promotion_name The name of the promotion.
     *
     * @return $this
     */
    public function setPromotionName($promotion_name)
    {
        $this->container['promotion_name'] = $promotion_name;

        return $this;
    }

    /**
     * Gets offer_code
     *
     * @return string
     */
    public function getOfferCode()
    {
        return $this->container['offer_code'];
    }

    /**
     * Sets offer_code
     *
     * @param string $offer_code The offer code to identify the promotion offer.
     *
     * @return $this
     */
    public function setOfferCode($offer_code)
    {
        $this->container['offer_code'] = $offer_code;

        return $this;
    }

    /**
     * Gets offer_name
     *
     * @return string
     */
    public function getOfferName()
    {
        return $this->container['offer_name'];
    }

    /**
     * Sets offer_name
     *
     * @param string $offer_name The name of the promotion offer.
     *
     * @return $this
     */
    public function setOfferName($offer_name)
    {
        $this->container['offer_name'] = $offer_name;

        return $this;
    }

    /**
     * Gets is_create_offer
     *
     * @return bool
     */
    public function getIsCreateOffer()
    {
        return $this->container['is_create_offer'];
    }

    /**
     * Sets is_create_offer
     *
     * @param bool $is_create_offer Should an offer also be created?
     *
     * @return $this
     */
    public function setIsCreateOffer($is_create_offer)
    {
        $this->container['is_create_offer'] = $is_create_offer;

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


