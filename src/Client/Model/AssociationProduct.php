<?php
/**
 * AssociationProduct
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
 * AssociationProduct Class Doc Comment
 *
 * @category Class
 * @description Information for an association membership product.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssociationProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssociationProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'levels' => '\Advantage\Client\Model\AssociationLevel[]',
        'related_donation_products' => '\Advantage\Client\Model\Product[]',
        'certifications' => '\Advantage\Client\Model\ContinuingEducationCertification[]',
        'root_structure_node' => '\Advantage\Client\Model\AssociationStructureNode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'levels' => null,
        'related_donation_products' => null,
        'certifications' => null,
        'root_structure_node' => null
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
        'levels' => 'Levels',
        'related_donation_products' => 'RelatedDonationProducts',
        'certifications' => 'Certifications',
        'root_structure_node' => 'RootStructureNode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'levels' => 'setLevels',
        'related_donation_products' => 'setRelatedDonationProducts',
        'certifications' => 'setCertifications',
        'root_structure_node' => 'setRootStructureNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'levels' => 'getLevels',
        'related_donation_products' => 'getRelatedDonationProducts',
        'certifications' => 'getCertifications',
        'root_structure_node' => 'getRootStructureNode'
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
        $this->container['levels'] = isset($data['levels']) ? $data['levels'] : null;
        $this->container['related_donation_products'] = isset($data['related_donation_products']) ? $data['related_donation_products'] : null;
        $this->container['certifications'] = isset($data['certifications']) ? $data['certifications'] : null;
        $this->container['root_structure_node'] = isset($data['root_structure_node']) ? $data['root_structure_node'] : null;
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
     * Gets levels
     *
     * @return \Advantage\Client\Model\AssociationLevel[]
     */
    public function getLevels()
    {
        return $this->container['levels'];
    }

    /**
     * Sets levels
     *
     * @param \Advantage\Client\Model\AssociationLevel[] $levels The association levels of the association membership
     *
     * @return $this
     */
    public function setLevels($levels)
    {
        $this->container['levels'] = $levels;

        return $this;
    }

    /**
     * Gets related_donation_products
     *
     * @return \Advantage\Client\Model\Product[]
     */
    public function getRelatedDonationProducts()
    {
        return $this->container['related_donation_products'];
    }

    /**
     * Sets related_donation_products
     *
     * @param \Advantage\Client\Model\Product[] $related_donation_products The donation items related to the association membership
     *
     * @return $this
     */
    public function setRelatedDonationProducts($related_donation_products)
    {
        $this->container['related_donation_products'] = $related_donation_products;

        return $this;
    }

    /**
     * Gets certifications
     *
     * @return \Advantage\Client\Model\ContinuingEducationCertification[]
     */
    public function getCertifications()
    {
        return $this->container['certifications'];
    }

    /**
     * Sets certifications
     *
     * @param \Advantage\Client\Model\ContinuingEducationCertification[] $certifications List of available continuing education certifications
     *
     * @return $this
     */
    public function setCertifications($certifications)
    {
        $this->container['certifications'] = $certifications;

        return $this;
    }

    /**
     * Gets root_structure_node
     *
     * @return \Advantage\Client\Model\AssociationStructureNode
     */
    public function getRootStructureNode()
    {
        return $this->container['root_structure_node'];
    }

    /**
     * Sets root_structure_node
     *
     * @param \Advantage\Client\Model\AssociationStructureNode $root_structure_node The root structure node for the association. This node contains all descendant nodes.
     *
     * @return $this
     */
    public function setRootStructureNode($root_structure_node)
    {
        $this->container['root_structure_node'] = $root_structure_node;

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


