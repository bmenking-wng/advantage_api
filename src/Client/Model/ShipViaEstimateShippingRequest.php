<?php
/**
 * ShipViaEstimateShippingRequest
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
 * ShipViaEstimateShippingRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipViaEstimateShippingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipViaEstimateShippingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ship_via_code' => 'string',
        'item_number' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
        'currency_code' => 'string',
        'net_sales_amount' => 'double',
        'quantity_ordered' => 'int',
        'ship_from_warehouse_code' => 'string',
        'include_surcharge' => 'bool',
        'item_unit_weight' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ship_via_code' => null,
        'item_number' => null,
        'country_code' => null,
        'postal_code' => null,
        'currency_code' => null,
        'net_sales_amount' => 'double',
        'quantity_ordered' => 'int32',
        'ship_from_warehouse_code' => null,
        'include_surcharge' => null,
        'item_unit_weight' => 'double'
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
        'item_number' => 'ItemNumber',
        'country_code' => 'CountryCode',
        'postal_code' => 'PostalCode',
        'currency_code' => 'CurrencyCode',
        'net_sales_amount' => 'NetSalesAmount',
        'quantity_ordered' => 'QuantityOrdered',
        'ship_from_warehouse_code' => 'ShipFromWarehouseCode',
        'include_surcharge' => 'IncludeSurcharge',
        'item_unit_weight' => 'ItemUnitWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_via_code' => 'setShipViaCode',
        'item_number' => 'setItemNumber',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'currency_code' => 'setCurrencyCode',
        'net_sales_amount' => 'setNetSalesAmount',
        'quantity_ordered' => 'setQuantityOrdered',
        'ship_from_warehouse_code' => 'setShipFromWarehouseCode',
        'include_surcharge' => 'setIncludeSurcharge',
        'item_unit_weight' => 'setItemUnitWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_via_code' => 'getShipViaCode',
        'item_number' => 'getItemNumber',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'currency_code' => 'getCurrencyCode',
        'net_sales_amount' => 'getNetSalesAmount',
        'quantity_ordered' => 'getQuantityOrdered',
        'ship_from_warehouse_code' => 'getShipFromWarehouseCode',
        'include_surcharge' => 'getIncludeSurcharge',
        'item_unit_weight' => 'getItemUnitWeight'
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
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['net_sales_amount'] = isset($data['net_sales_amount']) ? $data['net_sales_amount'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['ship_from_warehouse_code'] = isset($data['ship_from_warehouse_code']) ? $data['ship_from_warehouse_code'] : null;
        $this->container['include_surcharge'] = isset($data['include_surcharge']) ? $data['include_surcharge'] : null;
        $this->container['item_unit_weight'] = isset($data['item_unit_weight']) ? $data['item_unit_weight'] : null;
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
     * @param string $ship_via_code Ship via
     *
     * @return $this
     */
    public function setShipViaCode($ship_via_code)
    {
        $this->container['ship_via_code'] = $ship_via_code;

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
     * @param string $item_number Item number (optional, can be used to determine the warehouse and weight)
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Country
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postal (or zip) code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

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
     * @param string $currency_code Billing currency
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets net_sales_amount
     *
     * @return double
     */
    public function getNetSalesAmount()
    {
        return $this->container['net_sales_amount'];
    }

    /**
     * Sets net_sales_amount
     *
     * @param double $net_sales_amount Net sales
     *
     * @return $this
     */
    public function setNetSalesAmount($net_sales_amount)
    {
        $this->container['net_sales_amount'] = $net_sales_amount;

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
     * @param int $quantity_ordered Quantity
     *
     * @return $this
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets ship_from_warehouse_code
     *
     * @return string
     */
    public function getShipFromWarehouseCode()
    {
        return $this->container['ship_from_warehouse_code'];
    }

    /**
     * Sets ship_from_warehouse_code
     *
     * @param string $ship_from_warehouse_code Warehouse id (optional); default is from item
     *
     * @return $this
     */
    public function setShipFromWarehouseCode($ship_from_warehouse_code)
    {
        $this->container['ship_from_warehouse_code'] = $ship_from_warehouse_code;

        return $this;
    }

    /**
     * Gets include_surcharge
     *
     * @return bool
     */
    public function getIncludeSurcharge()
    {
        return $this->container['include_surcharge'];
    }

    /**
     * Sets include_surcharge
     *
     * @param bool $include_surcharge Add surcharge? (optional); default is true
     *
     * @return $this
     */
    public function setIncludeSurcharge($include_surcharge)
    {
        $this->container['include_surcharge'] = $include_surcharge;

        return $this;
    }

    /**
     * Gets item_unit_weight
     *
     * @return double
     */
    public function getItemUnitWeight()
    {
        return $this->container['item_unit_weight'];
    }

    /**
     * Sets item_unit_weight
     *
     * @param double $item_unit_weight Weight per unit (optional); default is from item
     *
     * @return $this
     */
    public function setItemUnitWeight($item_unit_weight)
    {
        $this->container['item_unit_weight'] = $item_unit_weight;

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


