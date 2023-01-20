<?php
/**
 * AssociationLineUpdateRequest
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
 * AssociationLineUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description Information for updating an AMM (association membership) order line.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssociationLineUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssociationLineUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_list_codes' => 'string[]',
        'structure_node_id' => 'string',
        'is_included_in_directory' => 'bool',
        'optional_components' => '\Advantage\Client\Model\AssociationOptionalComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_list_codes' => null,
        'structure_node_id' => null,
        'is_included_in_directory' => null,
        'optional_components' => null
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
        'customer_list_codes' => 'CustomerListCodes',
        'structure_node_id' => 'StructureNodeId',
        'is_included_in_directory' => 'IsIncludedInDirectory',
        'optional_components' => 'OptionalComponents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_list_codes' => 'setCustomerListCodes',
        'structure_node_id' => 'setStructureNodeId',
        'is_included_in_directory' => 'setIsIncludedInDirectory',
        'optional_components' => 'setOptionalComponents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_list_codes' => 'getCustomerListCodes',
        'structure_node_id' => 'getStructureNodeId',
        'is_included_in_directory' => 'getIsIncludedInDirectory',
        'optional_components' => 'getOptionalComponents'
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
        $this->container['customer_list_codes'] = isset($data['customer_list_codes']) ? $data['customer_list_codes'] : null;
        $this->container['structure_node_id'] = isset($data['structure_node_id']) ? $data['structure_node_id'] : null;
        $this->container['is_included_in_directory'] = isset($data['is_included_in_directory']) ? $data['is_included_in_directory'] : null;
        $this->container['optional_components'] = isset($data['optional_components']) ? $data['optional_components'] : null;
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
     * Gets customer_list_codes
     *
     * @return string[]
     */
    public function getCustomerListCodes()
    {
        return $this->container['customer_list_codes'];
    }

    /**
     * Sets customer_list_codes
     *
     * @param string[] $customer_list_codes The list codes of the customer lists the customer should be added to as part of their membership.
     *
     * @return $this
     */
    public function setCustomerListCodes($customer_list_codes)
    {
        $this->container['customer_list_codes'] = $customer_list_codes;

        return $this;
    }

    /**
     * Gets structure_node_id
     *
     * @return string
     */
    public function getStructureNodeId()
    {
        return $this->container['structure_node_id'];
    }

    /**
     * Sets structure_node_id
     *
     * @param string $structure_node_id Association structure node ID
     *
     * @return $this
     */
    public function setStructureNodeId($structure_node_id)
    {
        $this->container['structure_node_id'] = $structure_node_id;

        return $this;
    }

    /**
     * Gets is_included_in_directory
     *
     * @return bool
     */
    public function getIsIncludedInDirectory()
    {
        return $this->container['is_included_in_directory'];
    }

    /**
     * Sets is_included_in_directory
     *
     * @param bool $is_included_in_directory Indicates whether the association member is allowed to be listed in the directory.
     *
     * @return $this
     */
    public function setIsIncludedInDirectory($is_included_in_directory)
    {
        $this->container['is_included_in_directory'] = $is_included_in_directory;

        return $this;
    }

    /**
     * Gets optional_components
     *
     * @return \Advantage\Client\Model\AssociationOptionalComponent[]
     */
    public function getOptionalComponents()
    {
        return $this->container['optional_components'];
    }

    /**
     * Sets optional_components
     *
     * @param \Advantage\Client\Model\AssociationOptionalComponent[] $optional_components The complete list of optional components to be included as part of the   membership agreement.   If populated:   1. Any optional components not on the membership will be added   2. Any optional components on the membership, but not on the list, will be removed
     *
     * @return $this
     */
    public function setOptionalComponents($optional_components)
    {
        $this->container['optional_components'] = $optional_components;

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


