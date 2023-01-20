<?php
/**
 * ProductUpsellFilter
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
 * ProductUpsellFilter Class Doc Comment
 *
 * @category Class
 * @description Upsell filter criteria allows you to control the type of upsells that are returned.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductUpsellFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductUpsellFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_number' => 'string',
        'cart_number' => 'string',
        'customer_number' => 'string',
        'promotion_code' => 'string',
        'upsell_types' => 'string',
        'web_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_number' => null,
        'cart_number' => null,
        'customer_number' => null,
        'promotion_code' => null,
        'upsell_types' => null,
        'web_only' => null
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
        'cart_number' => 'CartNumber',
        'customer_number' => 'CustomerNumber',
        'promotion_code' => 'PromotionCode',
        'upsell_types' => 'UpsellTypes',
        'web_only' => 'WebOnly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_number' => 'setOrderNumber',
        'cart_number' => 'setCartNumber',
        'customer_number' => 'setCustomerNumber',
        'promotion_code' => 'setPromotionCode',
        'upsell_types' => 'setUpsellTypes',
        'web_only' => 'setWebOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_number' => 'getOrderNumber',
        'cart_number' => 'getCartNumber',
        'customer_number' => 'getCustomerNumber',
        'promotion_code' => 'getPromotionCode',
        'upsell_types' => 'getUpsellTypes',
        'web_only' => 'getWebOnly'
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

    const UPSELL_TYPES__DEFAULT = 'Default';
    const UPSELL_TYPES_UPSELL_ITEMS = 'UpsellItems';
    const UPSELL_TYPES_EXPIRING_SUBSCRIPTIONS = 'ExpiringSubscriptions';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpsellTypesAllowableValues()
    {
        return [
            self::UPSELL_TYPES__DEFAULT,
            self::UPSELL_TYPES_UPSELL_ITEMS,
            self::UPSELL_TYPES_EXPIRING_SUBSCRIPTIONS,
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
        $this->container['cart_number'] = isset($data['cart_number']) ? $data['cart_number'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['upsell_types'] = isset($data['upsell_types']) ? $data['upsell_types'] : null;
        $this->container['web_only'] = isset($data['web_only']) ? $data['web_only'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUpsellTypesAllowableValues();
        if (!is_null($this->container['upsell_types']) && !in_array($this->container['upsell_types'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'upsell_types', must be one of '%s'",
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
     * @param string $order_number Do not upsell items already included on the given order.  (Optional)
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets cart_number
     *
     * @return string
     */
    public function getCartNumber()
    {
        return $this->container['cart_number'];
    }

    /**
     * Sets cart_number
     *
     * @param string $cart_number Do not upsell items already included in the given shopping cart. (Optional.)
     *
     * @return $this
     */
    public function setCartNumber($cart_number)
    {
        $this->container['cart_number'] = $cart_number;

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
     * @param string $customer_number The customer who will see the upsell.  (Optional)
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

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
     * @param string $promotion_code Also search for upsells triggered by this promotion.  (Optional)
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets upsell_types
     *
     * @return string
     */
    public function getUpsellTypes()
    {
        return $this->container['upsell_types'];
    }

    /**
     * Sets upsell_types
     *
     * @param string $upsell_types What types of upsell items should be returned?
     *
     * @return $this
     */
    public function setUpsellTypes($upsell_types)
    {
        $allowedValues = $this->getUpsellTypesAllowableValues();
        if (!is_null($upsell_types) && !in_array($upsell_types, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'upsell_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['upsell_types'] = $upsell_types;

        return $this;
    }

    /**
     * Gets web_only
     *
     * @return bool
     */
    public function getWebOnly()
    {
        return $this->container['web_only'];
    }

    /**
     * Sets web_only
     *
     * @param bool $web_only Include only upsells marked as \"web visible\"?  (This is the default.)
     *
     * @return $this
     */
    public function setWebOnly($web_only)
    {
        $this->container['web_only'] = $web_only;

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


