<?php
/**
 * AssociationMembership
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
 * AssociationMembership Class Doc Comment
 *
 * @category Class
 * @description Information specific to association membership agreements.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssociationMembership implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssociationMembership';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_number' => 'string',
        'level_code' => 'string',
        'profile_id' => 'string',
        'customer_list_codes' => 'string[]',
        'structure_node_id' => 'string',
        'is_included_in_directory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_number' => null,
        'level_code' => null,
        'profile_id' => null,
        'customer_list_codes' => null,
        'structure_node_id' => null,
        'is_included_in_directory' => null
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
        'item_number' => 'ItemNumber',
        'level_code' => 'LevelCode',
        'profile_id' => 'ProfileId',
        'customer_list_codes' => 'CustomerListCodes',
        'structure_node_id' => 'StructureNodeId',
        'is_included_in_directory' => 'IsIncludedInDirectory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_number' => 'setItemNumber',
        'level_code' => 'setLevelCode',
        'profile_id' => 'setProfileId',
        'customer_list_codes' => 'setCustomerListCodes',
        'structure_node_id' => 'setStructureNodeId',
        'is_included_in_directory' => 'setIsIncludedInDirectory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_number' => 'getItemNumber',
        'level_code' => 'getLevelCode',
        'profile_id' => 'getProfileId',
        'customer_list_codes' => 'getCustomerListCodes',
        'structure_node_id' => 'getStructureNodeId',
        'is_included_in_directory' => 'getIsIncludedInDirectory'
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
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['level_code'] = isset($data['level_code']) ? $data['level_code'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['customer_list_codes'] = isset($data['customer_list_codes']) ? $data['customer_list_codes'] : null;
        $this->container['structure_node_id'] = isset($data['structure_node_id']) ? $data['structure_node_id'] : null;
        $this->container['is_included_in_directory'] = isset($data['is_included_in_directory']) ? $data['is_included_in_directory'] : null;
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
     * @param string $item_number The item number of the association membership.
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets level_code
     *
     * @return string
     */
    public function getLevelCode()
    {
        return $this->container['level_code'];
    }

    /**
     * Sets level_code
     *
     * @param string $level_code The association membership level code.
     *
     * @return $this
     */
    public function setLevelCode($level_code)
    {
        $this->container['level_code'] = $level_code;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id The profile ID of the association membership. Null if the association membership is not linked to a profile.
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
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
     * @param bool $is_included_in_directory Indicates whether an association member is allowed to be included in the membership directory.
     *
     * @return $this
     */
    public function setIsIncludedInDirectory($is_included_in_directory)
    {
        $this->container['is_included_in_directory'] = $is_included_in_directory;

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


