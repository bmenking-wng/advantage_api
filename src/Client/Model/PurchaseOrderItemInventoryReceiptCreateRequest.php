<?php
/**
 * PurchaseOrderItemInventoryReceiptCreateRequest
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
 * PurchaseOrderItemInventoryReceiptCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Information for creating a new inventory receipt, of type Purchase Order (P), for an item.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderItemInventoryReceiptCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseOrderItemInventoryReceiptCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity_received' => 'int',
        'comments' => 'string',
        'receipt_date' => '\DateTime',
        'receiving_bin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity_received' => 'int32',
        'comments' => null,
        'receipt_date' => 'date-time',
        'receiving_bin' => null
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
        'quantity_received' => 'QuantityReceived',
        'comments' => 'Comments',
        'receipt_date' => 'ReceiptDate',
        'receiving_bin' => 'ReceivingBin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity_received' => 'setQuantityReceived',
        'comments' => 'setComments',
        'receipt_date' => 'setReceiptDate',
        'receiving_bin' => 'setReceivingBin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity_received' => 'getQuantityReceived',
        'comments' => 'getComments',
        'receipt_date' => 'getReceiptDate',
        'receiving_bin' => 'getReceivingBin'
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
        $this->container['quantity_received'] = isset($data['quantity_received']) ? $data['quantity_received'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['receipt_date'] = isset($data['receipt_date']) ? $data['receipt_date'] : null;
        $this->container['receiving_bin'] = isset($data['receiving_bin']) ? $data['receiving_bin'] : null;
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
     * Gets quantity_received
     *
     * @return int
     */
    public function getQuantityReceived()
    {
        return $this->container['quantity_received'];
    }

    /**
     * Sets quantity_received
     *
     * @param int $quantity_received The inventory quantity that has been received from the manufacturer.  If no quantity is entered, the total units on the inventory receipt  will be used.
     *
     * @return $this
     */
    public function setQuantityReceived($quantity_received)
    {
        $this->container['quantity_received'] = $quantity_received;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Comments on the receipt
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets receipt_date
     *
     * @return \DateTime
     */
    public function getReceiptDate()
    {
        return $this->container['receipt_date'];
    }

    /**
     * Sets receipt_date
     *
     * @param \DateTime $receipt_date Date of receipt
     *
     * @return $this
     */
    public function setReceiptDate($receipt_date)
    {
        $this->container['receipt_date'] = $receipt_date;

        return $this;
    }

    /**
     * Gets receiving_bin
     *
     * @return string
     */
    public function getReceivingBin()
    {
        return $this->container['receiving_bin'];
    }

    /**
     * Sets receiving_bin
     *
     * @param string $receiving_bin Receiving Warehouse Bin Code
     *
     * @return $this
     */
    public function setReceivingBin($receiving_bin)
    {
        $this->container['receiving_bin'] = $receiving_bin;

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


