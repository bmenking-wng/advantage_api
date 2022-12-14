<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @description Advantage supports order entry and reporting in multiple currencies.  The Currency entity describes one of  the currencies supported by the Advantage application.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Currency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Currency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'iso_currency_code' => 'string',
        'name' => 'string',
        'precision' => 'int',
        'symbol_position' => 'string',
        'symbol' => 'string',
        'punctuation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'iso_currency_code' => null,
        'name' => null,
        'precision' => 'int32',
        'symbol_position' => null,
        'symbol' => null,
        'punctuation' => null
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
        'code' => 'Code',
        'iso_currency_code' => 'IsoCurrencyCode',
        'name' => 'Name',
        'precision' => 'Precision',
        'symbol_position' => 'SymbolPosition',
        'symbol' => 'Symbol',
        'punctuation' => 'Punctuation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'iso_currency_code' => 'setIsoCurrencyCode',
        'name' => 'setName',
        'precision' => 'setPrecision',
        'symbol_position' => 'setSymbolPosition',
        'symbol' => 'setSymbol',
        'punctuation' => 'setPunctuation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'iso_currency_code' => 'getIsoCurrencyCode',
        'name' => 'getName',
        'precision' => 'getPrecision',
        'symbol_position' => 'getSymbolPosition',
        'symbol' => 'getSymbol',
        'punctuation' => 'getPunctuation'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['iso_currency_code'] = isset($data['iso_currency_code']) ? $data['iso_currency_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['precision'] = isset($data['precision']) ? $data['precision'] : null;
        $this->container['symbol_position'] = isset($data['symbol_position']) ? $data['symbol_position'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['punctuation'] = isset($data['punctuation']) ? $data['punctuation'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The Advantage currency code.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets iso_currency_code
     *
     * @return string
     */
    public function getIsoCurrencyCode()
    {
        return $this->container['iso_currency_code'];
    }

    /**
     * Sets iso_currency_code
     *
     * @param string $iso_currency_code The ISO 3 character currency code.
     *
     * @return $this
     */
    public function setIsoCurrencyCode($iso_currency_code)
    {
        $this->container['iso_currency_code'] = $iso_currency_code;

        return $this;
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
     * @param string $name The full currency name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets precision
     *
     * @return int
     */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
     * Sets precision
     *
     * @param int $precision The decimal precision of the currency.
     *
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->container['precision'] = $precision;

        return $this;
    }

    /**
     * Gets symbol_position
     *
     * @return string
     */
    public function getSymbolPosition()
    {
        return $this->container['symbol_position'];
    }

    /**
     * Sets symbol_position
     *
     * @param string $symbol_position The symbol position when displaying currency amounts.  (L - left, R - right, C - center)
     *
     * @return $this
     */
    public function setSymbolPosition($symbol_position)
    {
        $this->container['symbol_position'] = $symbol_position;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol The currency symbol to use when displaying currency amounts.
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets punctuation
     *
     * @return string
     */
    public function getPunctuation()
    {
        return $this->container['punctuation'];
    }

    /**
     * Sets punctuation
     *
     * @param string $punctuation Is the currency generally displayed using (1) American style with a period for the decimal separator  (e.g. 1,000,000.00) or (2) European style with a comma for the decimal separator (e.g. 1.000.000,00)?
     *
     * @return $this
     */
    public function setPunctuation($punctuation)
    {
        $this->container['punctuation'] = $punctuation;

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


