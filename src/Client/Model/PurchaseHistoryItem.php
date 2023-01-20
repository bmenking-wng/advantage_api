<?php
/**
 * PurchaseHistoryItem
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
 * PurchaseHistoryItem Class Doc Comment
 *
 * @category Class
 * @description Information for an item purchased by a customer.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseHistoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseHistoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_number' => 'string',
        'customer_number' => 'string',
        'is_customer_bill_to' => 'bool',
        'sequence_number' => 'int',
        'date_ordered' => '\DateTime',
        'item_number' => 'string',
        'operation' => 'string',
        'quantity_shipped' => 'int',
        'net_amount' => 'double',
        'tax_amount' => 'double',
        'billing_currency_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_number' => null,
        'customer_number' => null,
        'is_customer_bill_to' => null,
        'sequence_number' => 'int32',
        'date_ordered' => 'date-time',
        'item_number' => null,
        'operation' => null,
        'quantity_shipped' => 'int32',
        'net_amount' => 'double',
        'tax_amount' => 'double',
        'billing_currency_code' => null
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
        'order_number' => 'OrderNumber',
        'customer_number' => 'CustomerNumber',
        'is_customer_bill_to' => 'IsCustomerBillTo',
        'sequence_number' => 'SequenceNumber',
        'date_ordered' => 'DateOrdered',
        'item_number' => 'ItemNumber',
        'operation' => 'Operation',
        'quantity_shipped' => 'QuantityShipped',
        'net_amount' => 'NetAmount',
        'tax_amount' => 'TaxAmount',
        'billing_currency_code' => 'BillingCurrencyCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_number' => 'setOrderNumber',
        'customer_number' => 'setCustomerNumber',
        'is_customer_bill_to' => 'setIsCustomerBillTo',
        'sequence_number' => 'setSequenceNumber',
        'date_ordered' => 'setDateOrdered',
        'item_number' => 'setItemNumber',
        'operation' => 'setOperation',
        'quantity_shipped' => 'setQuantityShipped',
        'net_amount' => 'setNetAmount',
        'tax_amount' => 'setTaxAmount',
        'billing_currency_code' => 'setBillingCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_number' => 'getOrderNumber',
        'customer_number' => 'getCustomerNumber',
        'is_customer_bill_to' => 'getIsCustomerBillTo',
        'sequence_number' => 'getSequenceNumber',
        'date_ordered' => 'getDateOrdered',
        'item_number' => 'getItemNumber',
        'operation' => 'getOperation',
        'quantity_shipped' => 'getQuantityShipped',
        'net_amount' => 'getNetAmount',
        'tax_amount' => 'getTaxAmount',
        'billing_currency_code' => 'getBillingCurrencyCode'
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

    const OPERATION_OTHER = 'Other';
    const OPERATION__NEW = 'New';
    const OPERATION_RENEWAL = 'Renewal';
    const OPERATION_COMPLIMENTARY = 'Complimentary';
    const OPERATION_CONFERENCE = 'Conference';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_OTHER,
            self::OPERATION__NEW,
            self::OPERATION_RENEWAL,
            self::OPERATION_COMPLIMENTARY,
            self::OPERATION_CONFERENCE,
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
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['is_customer_bill_to'] = isset($data['is_customer_bill_to']) ? $data['is_customer_bill_to'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['date_ordered'] = isset($data['date_ordered']) ? $data['date_ordered'] : null;
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['quantity_shipped'] = isset($data['quantity_shipped']) ? $data['quantity_shipped'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['billing_currency_code'] = isset($data['billing_currency_code']) ? $data['billing_currency_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number The order number of the purchase.
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string $customer_number The customer number of the purchase, determined based on an Advantage system option.
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets is_customer_bill_to
     *
     * @return bool
     */
    public function getIsCustomerBillTo()
    {
        return $this->container['is_customer_bill_to'];
    }

    /**
     * Sets is_customer_bill_to
     *
     * @param bool $is_customer_bill_to Is the customer the bill to for the order?
     *
     * @return $this
     */
    public function setIsCustomerBillTo($is_customer_bill_to)
    {
        $this->container['is_customer_bill_to'] = $is_customer_bill_to;

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
     * @param int $sequence_number Order line number.
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets date_ordered
     *
     * @return \DateTime
     */
    public function getDateOrdered()
    {
        return $this->container['date_ordered'];
    }

    /**
     * Sets date_ordered
     *
     * @param \DateTime $date_ordered The date of the order.
     *
     * @return $this
     */
    public function setDateOrdered($date_ordered)
    {
        $this->container['date_ordered'] = $date_ordered;

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
     * @param string $item_number The product ordered.
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation The operation of the order line.
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets quantity_shipped
     *
     * @return int
     */
    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped
     *
     * @param int $quantity_shipped Quantity shipped.
     *
     * @return $this
     */
    public function setQuantityShipped($quantity_shipped)
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return double
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param double $net_amount Amount ordered.
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount Tax amount.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

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
     * @param string $billing_currency_code Billing currency.
     *
     * @return $this
     */
    public function setBillingCurrencyCode($billing_currency_code)
    {
        $this->container['billing_currency_code'] = $billing_currency_code;

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


