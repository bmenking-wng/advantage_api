<?php
/**
 * CampaignCreateRequest
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
 * CampaignCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Information for creating a new campaign.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'initiator' => 'string',
        'initiated' => '\DateTime',
        'currency_code' => 'string',
        'estimated_cost' => 'double',
        'estimated_quantity' => 'double',
        'cost_accumulation_method_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'initiator' => null,
        'initiated' => 'date-time',
        'currency_code' => null,
        'estimated_cost' => 'double',
        'estimated_quantity' => 'double',
        'cost_accumulation_method_code' => null
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
        'name' => 'Name',
        'initiator' => 'Initiator',
        'initiated' => 'Initiated',
        'currency_code' => 'CurrencyCode',
        'estimated_cost' => 'EstimatedCost',
        'estimated_quantity' => 'EstimatedQuantity',
        'cost_accumulation_method_code' => 'CostAccumulationMethodCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'initiator' => 'setInitiator',
        'initiated' => 'setInitiated',
        'currency_code' => 'setCurrencyCode',
        'estimated_cost' => 'setEstimatedCost',
        'estimated_quantity' => 'setEstimatedQuantity',
        'cost_accumulation_method_code' => 'setCostAccumulationMethodCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'initiator' => 'getInitiator',
        'initiated' => 'getInitiated',
        'currency_code' => 'getCurrencyCode',
        'estimated_cost' => 'getEstimatedCost',
        'estimated_quantity' => 'getEstimatedQuantity',
        'cost_accumulation_method_code' => 'getCostAccumulationMethodCode'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['initiated'] = isset($data['initiated']) ? $data['initiated'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['estimated_cost'] = isset($data['estimated_cost']) ? $data['estimated_cost'] : null;
        $this->container['estimated_quantity'] = isset($data['estimated_quantity']) ? $data['estimated_quantity'] : null;
        $this->container['cost_accumulation_method_code'] = isset($data['cost_accumulation_method_code']) ? $data['cost_accumulation_method_code'] : null;
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
     * @param string $name The name of the campaign.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $initiator Who initiated the campaign.
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets initiated
     *
     * @return \DateTime
     */
    public function getInitiated()
    {
        return $this->container['initiated'];
    }

    /**
     * Sets initiated
     *
     * @param \DateTime $initiated The date the campaign is/was initiated.
     *
     * @return $this
     */
    public function setInitiated($initiated)
    {
        $this->container['initiated'] = $initiated;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Local currency code of the campaign.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets estimated_cost
     *
     * @return double
     */
    public function getEstimatedCost()
    {
        return $this->container['estimated_cost'];
    }

    /**
     * Sets estimated_cost
     *
     * @param double $estimated_cost Estimated cost of the campaign.
     *
     * @return $this
     */
    public function setEstimatedCost($estimated_cost)
    {
        $this->container['estimated_cost'] = $estimated_cost;

        return $this;
    }

    /**
     * Gets estimated_quantity
     *
     * @return double
     */
    public function getEstimatedQuantity()
    {
        return $this->container['estimated_quantity'];
    }

    /**
     * Sets estimated_quantity
     *
     * @param double $estimated_quantity Estimated quantity.
     *
     * @return $this
     */
    public function setEstimatedQuantity($estimated_quantity)
    {
        $this->container['estimated_quantity'] = $estimated_quantity;

        return $this;
    }

    /**
     * Gets cost_accumulation_method_code
     *
     * @return string
     */
    public function getCostAccumulationMethodCode()
    {
        return $this->container['cost_accumulation_method_code'];
    }

    /**
     * Sets cost_accumulation_method_code
     *
     * @param string $cost_accumulation_method_code Specifies how to accumulate costs for the campaign.
     *
     * @return $this
     */
    public function setCostAccumulationMethodCode($cost_accumulation_method_code)
    {
        $this->container['cost_accumulation_method_code'] = $cost_accumulation_method_code;

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


