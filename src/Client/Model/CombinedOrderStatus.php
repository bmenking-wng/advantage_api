<?php
/**
 * CombinedOrderStatus
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
 * CombinedOrderStatus Class Doc Comment
 *
 * @category Class
 * @description The status of each part of the order
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CombinedOrderStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CombinedOrderStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'combined_status_code' => 'string',
        'access_status_code' => 'string',
        'conference_status_code' => 'string',
        'subscription_status_code' => 'string',
        'product_status_code' => 'string',
        'product_status_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'combined_status_code' => null,
        'access_status_code' => null,
        'conference_status_code' => null,
        'subscription_status_code' => null,
        'product_status_code' => null,
        'product_status_name' => null
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
        'combined_status_code' => 'CombinedStatusCode',
        'access_status_code' => 'AccessStatusCode',
        'conference_status_code' => 'ConferenceStatusCode',
        'subscription_status_code' => 'SubscriptionStatusCode',
        'product_status_code' => 'ProductStatusCode',
        'product_status_name' => 'ProductStatusName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'combined_status_code' => 'setCombinedStatusCode',
        'access_status_code' => 'setAccessStatusCode',
        'conference_status_code' => 'setConferenceStatusCode',
        'subscription_status_code' => 'setSubscriptionStatusCode',
        'product_status_code' => 'setProductStatusCode',
        'product_status_name' => 'setProductStatusName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'combined_status_code' => 'getCombinedStatusCode',
        'access_status_code' => 'getAccessStatusCode',
        'conference_status_code' => 'getConferenceStatusCode',
        'subscription_status_code' => 'getSubscriptionStatusCode',
        'product_status_code' => 'getProductStatusCode',
        'product_status_name' => 'getProductStatusName'
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
        $this->container['combined_status_code'] = isset($data['combined_status_code']) ? $data['combined_status_code'] : null;
        $this->container['access_status_code'] = isset($data['access_status_code']) ? $data['access_status_code'] : null;
        $this->container['conference_status_code'] = isset($data['conference_status_code']) ? $data['conference_status_code'] : null;
        $this->container['subscription_status_code'] = isset($data['subscription_status_code']) ? $data['subscription_status_code'] : null;
        $this->container['product_status_code'] = isset($data['product_status_code']) ? $data['product_status_code'] : null;
        $this->container['product_status_name'] = isset($data['product_status_name']) ? $data['product_status_name'] : null;
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
     * Gets combined_status_code
     *
     * @return string
     */
    public function getCombinedStatusCode()
    {
        return $this->container['combined_status_code'];
    }

    /**
     * Sets combined_status_code
     *
     * @param string $combined_status_code The status of the order. Order status is determined by taking the last order status from   the original PRO, CIR, AMB, CEM orders (for combined orders).                The order status codes are, in order of processing:      C - closed to entry      P - processed/shipping      B - invoiced and back-ordered      F - invoiced and finished processing
     *
     * @return $this
     */
    public function setCombinedStatusCode($combined_status_code)
    {
        $this->container['combined_status_code'] = $combined_status_code;

        return $this;
    }

    /**
     * Gets access_status_code
     *
     * @return string
     */
    public function getAccessStatusCode()
    {
        return $this->container['access_status_code'];
    }

    /**
     * Sets access_status_code
     *
     * @param string $access_status_code The order status for AMB items on the original order (if any).  If there are multiple agreements, the status will be based on the agreement  with the \"lowest\" status: U - Not Released, W - Waiting, A - Released
     *
     * @return $this
     */
    public function setAccessStatusCode($access_status_code)
    {
        $this->container['access_status_code'] = $access_status_code;

        return $this;
    }

    /**
     * Gets conference_status_code
     *
     * @return string
     */
    public function getConferenceStatusCode()
    {
        return $this->container['conference_status_code'];
    }

    /**
     * Sets conference_status_code
     *
     * @param string $conference_status_code The order status for CEM items on the original order (if any).  See SYSKWV keyword CINV-PST for values.
     *
     * @return $this
     */
    public function setConferenceStatusCode($conference_status_code)
    {
        $this->container['conference_status_code'] = $conference_status_code;

        return $this;
    }

    /**
     * Gets subscription_status_code
     *
     * @return string
     */
    public function getSubscriptionStatusCode()
    {
        return $this->container['subscription_status_code'];
    }

    /**
     * Sets subscription_status_code
     *
     * @param string $subscription_status_code Order status for CIR items on the original order (if any).  C - closed, P - posted, I - posted and invoiced
     *
     * @return $this
     */
    public function setSubscriptionStatusCode($subscription_status_code)
    {
        $this->container['subscription_status_code'] = $subscription_status_code;

        return $this;
    }

    /**
     * Gets product_status_code
     *
     * @return string
     */
    public function getProductStatusCode()
    {
        return $this->container['product_status_code'];
    }

    /**
     * Sets product_status_code
     *
     * @param string $product_status_code The order status for PRO items on the original order.
     *
     * @return $this
     */
    public function setProductStatusCode($product_status_code)
    {
        $this->container['product_status_code'] = $product_status_code;

        return $this;
    }

    /**
     * Gets product_status_name
     *
     * @return string
     */
    public function getProductStatusName()
    {
        return $this->container['product_status_name'];
    }

    /**
     * Sets product_status_name
     *
     * @param string $product_status_name A description of the order status code
     *
     * @return $this
     */
    public function setProductStatusName($product_status_name)
    {
        $this->container['product_status_name'] = $product_status_name;

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


