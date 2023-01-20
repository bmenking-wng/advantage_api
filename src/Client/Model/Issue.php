<?php
/**
 * Issue
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
 * Issue Class Doc Comment
 *
 * @category Class
 * @description Information about an issue of a publication.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Issue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Issue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'issue_date' => '\DateTime',
        'name' => 'string',
        'display_text' => 'string',
        'item_number' => 'string',
        'expected_label_date' => '\DateTime',
        'expected_publication_date' => '\DateTime',
        'demographics' => '\Advantage\Client\Model\DemographicValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'issue_date' => 'date-time',
        'name' => null,
        'display_text' => null,
        'item_number' => null,
        'expected_label_date' => 'date-time',
        'expected_publication_date' => 'date-time',
        'demographics' => null
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
        'issue_date' => 'IssueDate',
        'name' => 'Name',
        'display_text' => 'DisplayText',
        'item_number' => 'ItemNumber',
        'expected_label_date' => 'ExpectedLabelDate',
        'expected_publication_date' => 'ExpectedPublicationDate',
        'demographics' => 'Demographics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'issue_date' => 'setIssueDate',
        'name' => 'setName',
        'display_text' => 'setDisplayText',
        'item_number' => 'setItemNumber',
        'expected_label_date' => 'setExpectedLabelDate',
        'expected_publication_date' => 'setExpectedPublicationDate',
        'demographics' => 'setDemographics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'issue_date' => 'getIssueDate',
        'name' => 'getName',
        'display_text' => 'getDisplayText',
        'item_number' => 'getItemNumber',
        'expected_label_date' => 'getExpectedLabelDate',
        'expected_publication_date' => 'getExpectedPublicationDate',
        'demographics' => 'getDemographics'
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
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['display_text'] = isset($data['display_text']) ? $data['display_text'] : null;
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['expected_label_date'] = isset($data['expected_label_date']) ? $data['expected_label_date'] : null;
        $this->container['expected_publication_date'] = isset($data['expected_publication_date']) ? $data['expected_publication_date'] : null;
        $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
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
     * Gets issue_date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime $issue_date Issue Date
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

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
     * @param string $name Issue Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_text
     *
     * @return string
     */
    public function getDisplayText()
    {
        return $this->container['display_text'];
    }

    /**
     * Sets display_text
     *
     * @param string $display_text Date or volume issue in printable format.
     *
     * @return $this
     */
    public function setDisplayText($display_text)
    {
        $this->container['display_text'] = $display_text;

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
     * @param string $item_number The item number for back issues
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets expected_label_date
     *
     * @return \DateTime
     */
    public function getExpectedLabelDate()
    {
        return $this->container['expected_label_date'];
    }

    /**
     * Sets expected_label_date
     *
     * @param \DateTime $expected_label_date The expected label run date for the this issue
     *
     * @return $this
     */
    public function setExpectedLabelDate($expected_label_date)
    {
        $this->container['expected_label_date'] = $expected_label_date;

        return $this;
    }

    /**
     * Gets expected_publication_date
     *
     * @return \DateTime
     */
    public function getExpectedPublicationDate()
    {
        return $this->container['expected_publication_date'];
    }

    /**
     * Sets expected_publication_date
     *
     * @param \DateTime $expected_publication_date The expected publication date for this issue
     *
     * @return $this
     */
    public function setExpectedPublicationDate($expected_publication_date)
    {
        $this->container['expected_publication_date'] = $expected_publication_date;

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
     * @param \Advantage\Client\Model\DemographicValue[] $demographics Demographic field values for the Issue Date
     *
     * @return $this
     */
    public function setDemographics($demographics)
    {
        $this->container['demographics'] = $demographics;

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


