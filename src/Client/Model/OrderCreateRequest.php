<?php
/**
 * OrderCreateRequest
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
 * OrderCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Information for creating an order.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bill_to' => '\Advantage\Client\Model\CustomerAddressKey',
        'ship_to' => '\Advantage\Client\Model\CustomerAddressKey',
        'installment_billing_code' => 'string',
        'free_shipping' => 'bool',
        'discount_percent' => 'double',
        'order_type' => 'string',
        'purchase_order_number' => 'string',
        'promotion_code' => 'string',
        'sales_rep_code' => 'string',
        'call_list_date' => '\DateTime',
        'call_list_code' => 'string',
        'currency_code' => 'string',
        'docket_number' => 'string',
        'order_source_code' => 'string',
        'gratis_reason_code' => 'string',
        'billing_organization_code' => 'string',
        'demographics' => '\Advantage\Client\Model\DemographicValue[]',
        'lines' => '\Advantage\Client\Model\OrderLineIn[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bill_to' => null,
        'ship_to' => null,
        'installment_billing_code' => null,
        'free_shipping' => null,
        'discount_percent' => 'double',
        'order_type' => null,
        'purchase_order_number' => null,
        'promotion_code' => null,
        'sales_rep_code' => null,
        'call_list_date' => 'date-time',
        'call_list_code' => null,
        'currency_code' => null,
        'docket_number' => null,
        'order_source_code' => null,
        'gratis_reason_code' => null,
        'billing_organization_code' => null,
        'demographics' => null,
        'lines' => null
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
        'bill_to' => 'BillTo',
        'ship_to' => 'ShipTo',
        'installment_billing_code' => 'InstallmentBillingCode',
        'free_shipping' => 'FreeShipping',
        'discount_percent' => 'DiscountPercent',
        'order_type' => 'OrderType',
        'purchase_order_number' => 'PurchaseOrderNumber',
        'promotion_code' => 'PromotionCode',
        'sales_rep_code' => 'SalesRepCode',
        'call_list_date' => 'CallListDate',
        'call_list_code' => 'CallListCode',
        'currency_code' => 'CurrencyCode',
        'docket_number' => 'DocketNumber',
        'order_source_code' => 'OrderSourceCode',
        'gratis_reason_code' => 'GratisReasonCode',
        'billing_organization_code' => 'BillingOrganizationCode',
        'demographics' => 'Demographics',
        'lines' => 'Lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_to' => 'setBillTo',
        'ship_to' => 'setShipTo',
        'installment_billing_code' => 'setInstallmentBillingCode',
        'free_shipping' => 'setFreeShipping',
        'discount_percent' => 'setDiscountPercent',
        'order_type' => 'setOrderType',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'promotion_code' => 'setPromotionCode',
        'sales_rep_code' => 'setSalesRepCode',
        'call_list_date' => 'setCallListDate',
        'call_list_code' => 'setCallListCode',
        'currency_code' => 'setCurrencyCode',
        'docket_number' => 'setDocketNumber',
        'order_source_code' => 'setOrderSourceCode',
        'gratis_reason_code' => 'setGratisReasonCode',
        'billing_organization_code' => 'setBillingOrganizationCode',
        'demographics' => 'setDemographics',
        'lines' => 'setLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_to' => 'getBillTo',
        'ship_to' => 'getShipTo',
        'installment_billing_code' => 'getInstallmentBillingCode',
        'free_shipping' => 'getFreeShipping',
        'discount_percent' => 'getDiscountPercent',
        'order_type' => 'getOrderType',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'promotion_code' => 'getPromotionCode',
        'sales_rep_code' => 'getSalesRepCode',
        'call_list_date' => 'getCallListDate',
        'call_list_code' => 'getCallListCode',
        'currency_code' => 'getCurrencyCode',
        'docket_number' => 'getDocketNumber',
        'order_source_code' => 'getOrderSourceCode',
        'gratis_reason_code' => 'getGratisReasonCode',
        'billing_organization_code' => 'getBillingOrganizationCode',
        'demographics' => 'getDemographics',
        'lines' => 'getLines'
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

    const ORDER_TYPE_CREDIT_MEMO_RETURN_ORDER = 'CreditMemoReturnOrder';
    const ORDER_TYPE_GRATIS_ORDER = 'GratisOrder';
    const ORDER_TYPE_INVOICEABLE_ORDER = 'InvoiceableOrder';
    const ORDER_TYPE_MODIFY_ORDER = 'ModifyOrder';
    const ORDER_TYPE_PRO_FORMA_ORDER = 'ProFormaOrder';
    const ORDER_TYPE_POST_SHIPPED_ORDER = 'PostShippedOrder';
    const ORDER_TYPE_REPEATING_ORDER = 'RepeatingOrder';
    const ORDER_TYPE_PREVIEW_ORDER = 'PreviewOrder';
    const ORDER_TYPE_WAREHOUSE_TRANSFER = 'WarehouseTransfer';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderTypeAllowableValues()
    {
        return [
            self::ORDER_TYPE_CREDIT_MEMO_RETURN_ORDER,
            self::ORDER_TYPE_GRATIS_ORDER,
            self::ORDER_TYPE_INVOICEABLE_ORDER,
            self::ORDER_TYPE_MODIFY_ORDER,
            self::ORDER_TYPE_PRO_FORMA_ORDER,
            self::ORDER_TYPE_POST_SHIPPED_ORDER,
            self::ORDER_TYPE_REPEATING_ORDER,
            self::ORDER_TYPE_PREVIEW_ORDER,
            self::ORDER_TYPE_WAREHOUSE_TRANSFER,
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
        $this->container['bill_to'] = isset($data['bill_to']) ? $data['bill_to'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['installment_billing_code'] = isset($data['installment_billing_code']) ? $data['installment_billing_code'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['sales_rep_code'] = isset($data['sales_rep_code']) ? $data['sales_rep_code'] : null;
        $this->container['call_list_date'] = isset($data['call_list_date']) ? $data['call_list_date'] : null;
        $this->container['call_list_code'] = isset($data['call_list_code']) ? $data['call_list_code'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['docket_number'] = isset($data['docket_number']) ? $data['docket_number'] : null;
        $this->container['order_source_code'] = isset($data['order_source_code']) ? $data['order_source_code'] : null;
        $this->container['gratis_reason_code'] = isset($data['gratis_reason_code']) ? $data['gratis_reason_code'] : null;
        $this->container['billing_organization_code'] = isset($data['billing_organization_code']) ? $data['billing_organization_code'] : null;
        $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
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
     * Gets bill_to
     *
     * @return \Advantage\Client\Model\CustomerAddressKey
     */
    public function getBillTo()
    {
        return $this->container['bill_to'];
    }

    /**
     * Sets bill_to
     *
     * @param \Advantage\Client\Model\CustomerAddressKey $bill_to The bill-to address for the order.
     *
     * @return $this
     */
    public function setBillTo($bill_to)
    {
        $this->container['bill_to'] = $bill_to;

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
     * @param \Advantage\Client\Model\CustomerAddressKey $ship_to This ship-to address for the order.
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets installment_billing_code
     *
     * @return string
     */
    public function getInstallmentBillingCode()
    {
        return $this->container['installment_billing_code'];
    }

    /**
     * Sets installment_billing_code
     *
     * @param string $installment_billing_code The installment billing code, used to identify the install billing terms used.
     *
     * @return $this
     */
    public function setInstallmentBillingCode($installment_billing_code)
    {
        $this->container['installment_billing_code'] = $installment_billing_code;

        return $this;
    }

    /**
     * Gets free_shipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool $free_shipping Does this order get free shipping?
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return double
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param double $discount_percent The discount percentage to be applied to the discountable amount. For example, 10% is entered as 10.
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string $order_type The accounts receivable classification of the order.  S=Invoice, K=Credit, F=Pro-Forma (no A/R).
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($order_type) && !in_array($order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number The purchase order number, provided by the customer.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

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
     * @param string $promotion_code The sales promotion effort to be credited a particular sale.
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets sales_rep_code
     *
     * @return string
     */
    public function getSalesRepCode()
    {
        return $this->container['sales_rep_code'];
    }

    /**
     * Sets sales_rep_code
     *
     * @param string $sales_rep_code The salesperson getting credit for orders from this customer.
     *
     * @return $this
     */
    public function setSalesRepCode($sales_rep_code)
    {
        $this->container['sales_rep_code'] = $sales_rep_code;

        return $this;
    }

    /**
     * Gets call_list_date
     *
     * @return \DateTime
     */
    public function getCallListDate()
    {
        return $this->container['call_list_date'];
    }

    /**
     * Sets call_list_date
     *
     * @param \DateTime $call_list_date Tele-services call list Date
     *
     * @return $this
     */
    public function setCallListDate($call_list_date)
    {
        $this->container['call_list_date'] = $call_list_date;

        return $this;
    }

    /**
     * Gets call_list_code
     *
     * @return string
     */
    public function getCallListCode()
    {
        return $this->container['call_list_code'];
    }

    /**
     * Sets call_list_code
     *
     * @param string $call_list_code Tele-services call list ID
     *
     * @return $this
     */
    public function setCallListCode($call_list_code)
    {
        $this->container['call_list_code'] = $call_list_code;

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
     * @param string $currency_code The currency code in which the order was billed.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets docket_number
     *
     * @return string
     */
    public function getDocketNumber()
    {
        return $this->container['docket_number'];
    }

    /**
     * Sets docket_number
     *
     * @param string $docket_number The docket number is the audit tracking number assigned to incoming documents.
     *
     * @return $this
     */
    public function setDocketNumber($docket_number)
    {
        $this->container['docket_number'] = $docket_number;

        return $this;
    }

    /**
     * Gets order_source_code
     *
     * @return string
     */
    public function getOrderSourceCode()
    {
        return $this->container['order_source_code'];
    }

    /**
     * Sets order_source_code
     *
     * @param string $order_source_code The source of the order.
     *
     * @return $this
     */
    public function setOrderSourceCode($order_source_code)
    {
        $this->container['order_source_code'] = $order_source_code;

        return $this;
    }

    /**
     * Gets gratis_reason_code
     *
     * @return string
     */
    public function getGratisReasonCode()
    {
        return $this->container['gratis_reason_code'];
    }

    /**
     * Sets gratis_reason_code
     *
     * @param string $gratis_reason_code Gratis reason code (for gratis orders).
     *
     * @return $this
     */
    public function setGratisReasonCode($gratis_reason_code)
    {
        $this->container['gratis_reason_code'] = $gratis_reason_code;

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
     * @param string $billing_organization_code The billing organization for the order.
     *
     * @return $this
     */
    public function setBillingOrganizationCode($billing_organization_code)
    {
        $this->container['billing_organization_code'] = $billing_organization_code;

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
     * @param \Advantage\Client\Model\DemographicValue[] $demographics Demographic field values for the order
     *
     * @return $this
     */
    public function setDemographics($demographics)
    {
        $this->container['demographics'] = $demographics;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Advantage\Client\Model\OrderLineIn[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Advantage\Client\Model\OrderLineIn[] $lines The order lines on the order.
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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


