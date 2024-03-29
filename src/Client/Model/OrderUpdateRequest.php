<?php
/**
 * OrderUpdateRequest
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
 * OrderUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description The order update request allows you to update the order.  All properties of the update request are optional.  If a property is not included in the request then it will not be updated.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ship_via_code' => 'string',
        'response_settings' => '\Advantage\Client\Model\OrderGetSettings',
        'po_number' => 'string',
        'ship_date' => '\DateTime',
        'line_updates' => '\Advantage\Client\Model\OrderLineUpdateRequest[]',
        'new_lines' => '\Advantage\Client\Model\OrderLineIn[]',
        'demographics' => '\Advantage\Client\Model\DemographicValue[]',
        'update_payments' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ship_via_code' => null,
        'response_settings' => null,
        'po_number' => null,
        'ship_date' => 'date-time',
        'line_updates' => null,
        'new_lines' => null,
        'demographics' => null,
        'update_payments' => null
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
        'ship_via_code' => 'ShipViaCode',
        'response_settings' => 'ResponseSettings',
        'po_number' => 'PoNumber',
        'ship_date' => 'ShipDate',
        'line_updates' => 'LineUpdates',
        'new_lines' => 'NewLines',
        'demographics' => 'Demographics',
        'update_payments' => 'UpdatePayments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_via_code' => 'setShipViaCode',
        'response_settings' => 'setResponseSettings',
        'po_number' => 'setPoNumber',
        'ship_date' => 'setShipDate',
        'line_updates' => 'setLineUpdates',
        'new_lines' => 'setNewLines',
        'demographics' => 'setDemographics',
        'update_payments' => 'setUpdatePayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_via_code' => 'getShipViaCode',
        'response_settings' => 'getResponseSettings',
        'po_number' => 'getPoNumber',
        'ship_date' => 'getShipDate',
        'line_updates' => 'getLineUpdates',
        'new_lines' => 'getNewLines',
        'demographics' => 'getDemographics',
        'update_payments' => 'getUpdatePayments'
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
        $this->container['ship_via_code'] = isset($data['ship_via_code']) ? $data['ship_via_code'] : null;
        $this->container['response_settings'] = isset($data['response_settings']) ? $data['response_settings'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['line_updates'] = isset($data['line_updates']) ? $data['line_updates'] : null;
        $this->container['new_lines'] = isset($data['new_lines']) ? $data['new_lines'] : null;
        $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
        $this->container['update_payments'] = isset($data['update_payments']) ? $data['update_payments'] : null;
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
     * Gets ship_via_code
     *
     * @return string
     */
    public function getShipViaCode()
    {
        return $this->container['ship_via_code'];
    }

    /**
     * Sets ship_via_code
     *
     * @param string $ship_via_code Populate this property to set the shipping method for all single-sale (PRO) physical goods on the order.    If a shipping rule applies to this order then the ship via will be validated against the shipping rule and   the associated freight override will be applied.  If the order is later changed the shipping  rule validation and freight override will not be applied again.
     *
     * @return $this
     */
    public function setShipViaCode($ship_via_code)
    {
        $this->container['ship_via_code'] = $ship_via_code;

        return $this;
    }

    /**
     * Gets response_settings
     *
     * @return \Advantage\Client\Model\OrderGetSettings
     */
    public function getResponseSettings()
    {
        return $this->container['response_settings'];
    }

    /**
     * Sets response_settings
     *
     * @param \Advantage\Client\Model\OrderGetSettings $response_settings Use the ResponseSettings to indicate the level of order detail to include the response to this update request.  If the ResponseSettings property is omitted from the request then an empty message is returned.
     *
     * @return $this
     */
    public function setResponseSettings($response_settings)
    {
        $this->container['response_settings'] = $response_settings;

        return $this;
    }

    /**
     * Gets po_number
     *
     * @return string
     */
    public function getPoNumber()
    {
        return $this->container['po_number'];
    }

    /**
     * Sets po_number
     *
     * @param string $po_number Populate this property to set the PO number on the order.
     *
     * @return $this
     */
    public function setPoNumber($po_number)
    {
        $this->container['po_number'] = $po_number;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime $ship_date Populate this property to set the shipping date for all single-sale (PRO) physical goods on the order.
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets line_updates
     *
     * @return \Advantage\Client\Model\OrderLineUpdateRequest[]
     */
    public function getLineUpdates()
    {
        return $this->container['line_updates'];
    }

    /**
     * Sets line_updates
     *
     * @param \Advantage\Client\Model\OrderLineUpdateRequest[] $line_updates Populate this property to specify a collection of order lines on the order  to update and what type of update to do.
     *
     * @return $this
     */
    public function setLineUpdates($line_updates)
    {
        $this->container['line_updates'] = $line_updates;

        return $this;
    }

    /**
     * Gets new_lines
     *
     * @return \Advantage\Client\Model\OrderLineIn[]
     */
    public function getNewLines()
    {
        return $this->container['new_lines'];
    }

    /**
     * Sets new_lines
     *
     * @param \Advantage\Client\Model\OrderLineIn[] $new_lines Populate this property  to specify a collection of order lines to add to the order.
     *
     * @return $this
     */
    public function setNewLines($new_lines)
    {
        $this->container['new_lines'] = $new_lines;

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
     * @param \Advantage\Client\Model\DemographicValue[] $demographics Demographic field values to store on the order
     *
     * @return $this
     */
    public function setDemographics($demographics)
    {
        $this->container['demographics'] = $demographics;

        return $this;
    }

    /**
     * Gets update_payments
     *
     * @return bool
     */
    public function getUpdatePayments()
    {
        return $this->container['update_payments'];
    }

    /**
     * Sets update_payments
     *
     * @param bool $update_payments Whether to attempt to update the initial payment on the order to the new total.
     *
     * @return $this
     */
    public function setUpdatePayments($update_payments)
    {
        $this->container['update_payments'] = $update_payments;

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


