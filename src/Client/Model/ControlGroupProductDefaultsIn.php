<?php
/**
 * ControlGroupProductDefaultsIn
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
 * ControlGroupProductDefaultsIn Class Doc Comment
 *
 * @category Class
 * @description Product Defaults for Control Group In Model
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ControlGroupProductDefaultsIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ControlGroupProductDefaultsIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'discount_percent' => 'double',
        'warehouse_code' => 'string',
        'ship_date' => '\DateTime',
        'order_date' => '\DateTime',
        'repeating_order' => 'bool',
        'repeating_cycle' => 'int',
        'shipto_customer_number' => 'string',
        'cancellation_reason_code' => 'string',
        'round_to_case' => 'string',
        'gratis_reason_code' => 'string',
        'premium_set_code' => 'string',
        'credit_reason_code' => 'string',
        'invoice_terms_code' => 'string',
        'ship_via_code' => 'string',
        'backorder_setting' => 'string',
        'search_for_customer_first' => 'bool',
        'order_type' => 'string',
        'duplicate_item_check' => 'string',
        'sales_rep_code' => 'string',
        'shipping_rule_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'discount_percent' => 'double',
        'warehouse_code' => null,
        'ship_date' => 'date-time',
        'order_date' => 'date-time',
        'repeating_order' => null,
        'repeating_cycle' => 'int32',
        'shipto_customer_number' => null,
        'cancellation_reason_code' => null,
        'round_to_case' => null,
        'gratis_reason_code' => null,
        'premium_set_code' => null,
        'credit_reason_code' => null,
        'invoice_terms_code' => null,
        'ship_via_code' => null,
        'backorder_setting' => null,
        'search_for_customer_first' => null,
        'order_type' => null,
        'duplicate_item_check' => null,
        'sales_rep_code' => null,
        'shipping_rule_code' => null
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
        'discount_percent' => 'DiscountPercent',
        'warehouse_code' => 'WarehouseCode',
        'ship_date' => 'ShipDate',
        'order_date' => 'OrderDate',
        'repeating_order' => 'RepeatingOrder',
        'repeating_cycle' => 'RepeatingCycle',
        'shipto_customer_number' => 'ShiptoCustomerNumber',
        'cancellation_reason_code' => 'CancellationReasonCode',
        'round_to_case' => 'RoundToCase',
        'gratis_reason_code' => 'GratisReasonCode',
        'premium_set_code' => 'PremiumSetCode',
        'credit_reason_code' => 'CreditReasonCode',
        'invoice_terms_code' => 'InvoiceTermsCode',
        'ship_via_code' => 'ShipViaCode',
        'backorder_setting' => 'BackorderSetting',
        'search_for_customer_first' => 'SearchForCustomerFirst',
        'order_type' => 'OrderType',
        'duplicate_item_check' => 'DuplicateItemCheck',
        'sales_rep_code' => 'SalesRepCode',
        'shipping_rule_code' => 'ShippingRuleCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_percent' => 'setDiscountPercent',
        'warehouse_code' => 'setWarehouseCode',
        'ship_date' => 'setShipDate',
        'order_date' => 'setOrderDate',
        'repeating_order' => 'setRepeatingOrder',
        'repeating_cycle' => 'setRepeatingCycle',
        'shipto_customer_number' => 'setShiptoCustomerNumber',
        'cancellation_reason_code' => 'setCancellationReasonCode',
        'round_to_case' => 'setRoundToCase',
        'gratis_reason_code' => 'setGratisReasonCode',
        'premium_set_code' => 'setPremiumSetCode',
        'credit_reason_code' => 'setCreditReasonCode',
        'invoice_terms_code' => 'setInvoiceTermsCode',
        'ship_via_code' => 'setShipViaCode',
        'backorder_setting' => 'setBackorderSetting',
        'search_for_customer_first' => 'setSearchForCustomerFirst',
        'order_type' => 'setOrderType',
        'duplicate_item_check' => 'setDuplicateItemCheck',
        'sales_rep_code' => 'setSalesRepCode',
        'shipping_rule_code' => 'setShippingRuleCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_percent' => 'getDiscountPercent',
        'warehouse_code' => 'getWarehouseCode',
        'ship_date' => 'getShipDate',
        'order_date' => 'getOrderDate',
        'repeating_order' => 'getRepeatingOrder',
        'repeating_cycle' => 'getRepeatingCycle',
        'shipto_customer_number' => 'getShiptoCustomerNumber',
        'cancellation_reason_code' => 'getCancellationReasonCode',
        'round_to_case' => 'getRoundToCase',
        'gratis_reason_code' => 'getGratisReasonCode',
        'premium_set_code' => 'getPremiumSetCode',
        'credit_reason_code' => 'getCreditReasonCode',
        'invoice_terms_code' => 'getInvoiceTermsCode',
        'ship_via_code' => 'getShipViaCode',
        'backorder_setting' => 'getBackorderSetting',
        'search_for_customer_first' => 'getSearchForCustomerFirst',
        'order_type' => 'getOrderType',
        'duplicate_item_check' => 'getDuplicateItemCheck',
        'sales_rep_code' => 'getSalesRepCode',
        'shipping_rule_code' => 'getShippingRuleCode'
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

    const ROUND_TO_CASE_NO_BUT_ALLOW_OVERRIDE = 'NoButAllowOverride';
    const ROUND_TO_CASE_ALWAYS = 'Always';
    const ROUND_TO_CASE_IF_STOCK_AVAILABLE = 'IfStockAvailable';
    const ROUND_TO_CASE_NO = 'No';
    const BACKORDER_SETTING_NO = 'No';
    const BACKORDER_SETTING_OUT_OF_STOCK_ONLY = 'OutOfStockOnly';
    const BACKORDER_SETTING_PREPUB_ONLY = 'PrepubOnly';
    const BACKORDER_SETTING_YES = 'Yes';
    const ORDER_TYPE_CREDIT_MEMO_RETURN_ORDER = 'CreditMemoReturnOrder';
    const ORDER_TYPE_GRATIS_ORDER = 'GratisOrder';
    const ORDER_TYPE_INVOICEABLE_ORDER = 'InvoiceableOrder';
    const ORDER_TYPE_MODIFY_ORDER = 'ModifyOrder';
    const ORDER_TYPE_PRO_FORMA_ORDER = 'ProFormaOrder';
    const ORDER_TYPE_POST_SHIPPED_ORDER = 'PostShippedOrder';
    const ORDER_TYPE_REPEATING_ORDER = 'RepeatingOrder';
    const ORDER_TYPE_PREVIEW_ORDER = 'PreviewOrder';
    const ORDER_TYPE_WAREHOUSE_TRANSFER = 'WarehouseTransfer';
    const DUPLICATE_ITEM_CHECK_ACROSS_ORDERS = 'AcrossOrders';
    const DUPLICATE_ITEM_CHECK_CURRENT_ORDER = 'CurrentOrder';
    const DUPLICATE_ITEM_CHECK_NONE = 'None';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoundToCaseAllowableValues()
    {
        return [
            self::ROUND_TO_CASE_NO_BUT_ALLOW_OVERRIDE,
            self::ROUND_TO_CASE_ALWAYS,
            self::ROUND_TO_CASE_IF_STOCK_AVAILABLE,
            self::ROUND_TO_CASE_NO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBackorderSettingAllowableValues()
    {
        return [
            self::BACKORDER_SETTING_NO,
            self::BACKORDER_SETTING_OUT_OF_STOCK_ONLY,
            self::BACKORDER_SETTING_PREPUB_ONLY,
            self::BACKORDER_SETTING_YES,
        ];
    }
    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDuplicateItemCheckAllowableValues()
    {
        return [
            self::DUPLICATE_ITEM_CHECK_ACROSS_ORDERS,
            self::DUPLICATE_ITEM_CHECK_CURRENT_ORDER,
            self::DUPLICATE_ITEM_CHECK_NONE,
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
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['warehouse_code'] = isset($data['warehouse_code']) ? $data['warehouse_code'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['repeating_order'] = isset($data['repeating_order']) ? $data['repeating_order'] : null;
        $this->container['repeating_cycle'] = isset($data['repeating_cycle']) ? $data['repeating_cycle'] : null;
        $this->container['shipto_customer_number'] = isset($data['shipto_customer_number']) ? $data['shipto_customer_number'] : null;
        $this->container['cancellation_reason_code'] = isset($data['cancellation_reason_code']) ? $data['cancellation_reason_code'] : null;
        $this->container['round_to_case'] = isset($data['round_to_case']) ? $data['round_to_case'] : null;
        $this->container['gratis_reason_code'] = isset($data['gratis_reason_code']) ? $data['gratis_reason_code'] : null;
        $this->container['premium_set_code'] = isset($data['premium_set_code']) ? $data['premium_set_code'] : null;
        $this->container['credit_reason_code'] = isset($data['credit_reason_code']) ? $data['credit_reason_code'] : null;
        $this->container['invoice_terms_code'] = isset($data['invoice_terms_code']) ? $data['invoice_terms_code'] : null;
        $this->container['ship_via_code'] = isset($data['ship_via_code']) ? $data['ship_via_code'] : null;
        $this->container['backorder_setting'] = isset($data['backorder_setting']) ? $data['backorder_setting'] : null;
        $this->container['search_for_customer_first'] = isset($data['search_for_customer_first']) ? $data['search_for_customer_first'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['duplicate_item_check'] = isset($data['duplicate_item_check']) ? $data['duplicate_item_check'] : null;
        $this->container['sales_rep_code'] = isset($data['sales_rep_code']) ? $data['sales_rep_code'] : null;
        $this->container['shipping_rule_code'] = isset($data['shipping_rule_code']) ? $data['shipping_rule_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRoundToCaseAllowableValues();
        if (!is_null($this->container['round_to_case']) && !in_array($this->container['round_to_case'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'round_to_case', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBackorderSettingAllowableValues();
        if (!is_null($this->container['backorder_setting']) && !in_array($this->container['backorder_setting'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'backorder_setting', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDuplicateItemCheckAllowableValues();
        if (!is_null($this->container['duplicate_item_check']) && !in_array($this->container['duplicate_item_check'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'duplicate_item_check', must be one of '%s'",
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
     * @param double $discount_percent Discount percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets warehouse_code
     *
     * @return string
     */
    public function getWarehouseCode()
    {
        return $this->container['warehouse_code'];
    }

    /**
     * Sets warehouse_code
     *
     * @param string $warehouse_code Warehouse
     *
     * @return $this
     */
    public function setWarehouseCode($warehouse_code)
    {
        $this->container['warehouse_code'] = $warehouse_code;

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
     * @param \DateTime $ship_date Requested shipping date
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime $order_date Order date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets repeating_order
     *
     * @return bool
     */
    public function getRepeatingOrder()
    {
        return $this->container['repeating_order'];
    }

    /**
     * Sets repeating_order
     *
     * @param bool $repeating_order true if repeating order
     *
     * @return $this
     */
    public function setRepeatingOrder($repeating_order)
    {
        $this->container['repeating_order'] = $repeating_order;

        return $this;
    }

    /**
     * Gets repeating_cycle
     *
     * @return int
     */
    public function getRepeatingCycle()
    {
        return $this->container['repeating_cycle'];
    }

    /**
     * Sets repeating_cycle
     *
     * @param int $repeating_cycle Repeating order cycle
     *
     * @return $this
     */
    public function setRepeatingCycle($repeating_cycle)
    {
        $this->container['repeating_cycle'] = $repeating_cycle;

        return $this;
    }

    /**
     * Gets shipto_customer_number
     *
     * @return string
     */
    public function getShiptoCustomerNumber()
    {
        return $this->container['shipto_customer_number'];
    }

    /**
     * Sets shipto_customer_number
     *
     * @param string $shipto_customer_number Ship-to customer
     *
     * @return $this
     */
    public function setShiptoCustomerNumber($shipto_customer_number)
    {
        $this->container['shipto_customer_number'] = $shipto_customer_number;

        return $this;
    }

    /**
     * Gets cancellation_reason_code
     *
     * @return string
     */
    public function getCancellationReasonCode()
    {
        return $this->container['cancellation_reason_code'];
    }

    /**
     * Sets cancellation_reason_code
     *
     * @param string $cancellation_reason_code Cancel reason
     *
     * @return $this
     */
    public function setCancellationReasonCode($cancellation_reason_code)
    {
        $this->container['cancellation_reason_code'] = $cancellation_reason_code;

        return $this;
    }

    /**
     * Gets round_to_case
     *
     * @return string
     */
    public function getRoundToCase()
    {
        return $this->container['round_to_case'];
    }

    /**
     * Sets round_to_case
     *
     * @param string $round_to_case Round to case flag
     *
     * @return $this
     */
    public function setRoundToCase($round_to_case)
    {
        $allowedValues = $this->getRoundToCaseAllowableValues();
        if (!is_null($round_to_case) && !in_array($round_to_case, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'round_to_case', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['round_to_case'] = $round_to_case;

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
     * @param string $gratis_reason_code Gratis reason
     *
     * @return $this
     */
    public function setGratisReasonCode($gratis_reason_code)
    {
        $this->container['gratis_reason_code'] = $gratis_reason_code;

        return $this;
    }

    /**
     * Gets premium_set_code
     *
     * @return string
     */
    public function getPremiumSetCode()
    {
        return $this->container['premium_set_code'];
    }

    /**
     * Sets premium_set_code
     *
     * @param string $premium_set_code Premium set
     *
     * @return $this
     */
    public function setPremiumSetCode($premium_set_code)
    {
        $this->container['premium_set_code'] = $premium_set_code;

        return $this;
    }

    /**
     * Gets credit_reason_code
     *
     * @return string
     */
    public function getCreditReasonCode()
    {
        return $this->container['credit_reason_code'];
    }

    /**
     * Sets credit_reason_code
     *
     * @param string $credit_reason_code Credit reason
     *
     * @return $this
     */
    public function setCreditReasonCode($credit_reason_code)
    {
        $this->container['credit_reason_code'] = $credit_reason_code;

        return $this;
    }

    /**
     * Gets invoice_terms_code
     *
     * @return string
     */
    public function getInvoiceTermsCode()
    {
        return $this->container['invoice_terms_code'];
    }

    /**
     * Sets invoice_terms_code
     *
     * @param string $invoice_terms_code Invoice Terms Code
     *
     * @return $this
     */
    public function setInvoiceTermsCode($invoice_terms_code)
    {
        $this->container['invoice_terms_code'] = $invoice_terms_code;

        return $this;
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
     * @param string $ship_via_code Requested Ship via
     *
     * @return $this
     */
    public function setShipViaCode($ship_via_code)
    {
        $this->container['ship_via_code'] = $ship_via_code;

        return $this;
    }

    /**
     * Gets backorder_setting
     *
     * @return string
     */
    public function getBackorderSetting()
    {
        return $this->container['backorder_setting'];
    }

    /**
     * Sets backorder_setting
     *
     * @param string $backorder_setting Backorder flag
     *
     * @return $this
     */
    public function setBackorderSetting($backorder_setting)
    {
        $allowedValues = $this->getBackorderSettingAllowableValues();
        if (!is_null($backorder_setting) && !in_array($backorder_setting, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'backorder_setting', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['backorder_setting'] = $backorder_setting;

        return $this;
    }

    /**
     * Gets search_for_customer_first
     *
     * @return bool
     */
    public function getSearchForCustomerFirst()
    {
        return $this->container['search_for_customer_first'];
    }

    /**
     * Sets search_for_customer_first
     *
     * @param bool $search_for_customer_first True if do customer search first
     *
     * @return $this
     */
    public function setSearchForCustomerFirst($search_for_customer_first)
    {
        $this->container['search_for_customer_first'] = $search_for_customer_first;

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
     * @param string $order_type Order type
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
     * Gets duplicate_item_check
     *
     * @return string
     */
    public function getDuplicateItemCheck()
    {
        return $this->container['duplicate_item_check'];
    }

    /**
     * Sets duplicate_item_check
     *
     * @param string $duplicate_item_check Duplicate item flag
     *
     * @return $this
     */
    public function setDuplicateItemCheck($duplicate_item_check)
    {
        $allowedValues = $this->getDuplicateItemCheckAllowableValues();
        if (!is_null($duplicate_item_check) && !in_array($duplicate_item_check, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'duplicate_item_check', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['duplicate_item_check'] = $duplicate_item_check;

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
     * @param string $sales_rep_code Sales rep
     *
     * @return $this
     */
    public function setSalesRepCode($sales_rep_code)
    {
        $this->container['sales_rep_code'] = $sales_rep_code;

        return $this;
    }

    /**
     * Gets shipping_rule_code
     *
     * @return string
     */
    public function getShippingRuleCode()
    {
        return $this->container['shipping_rule_code'];
    }

    /**
     * Sets shipping_rule_code
     *
     * @param string $shipping_rule_code Shipping rule ID
     *
     * @return $this
     */
    public function setShippingRuleCode($shipping_rule_code)
    {
        $this->container['shipping_rule_code'] = $shipping_rule_code;

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


