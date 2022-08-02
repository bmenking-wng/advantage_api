<?php
/**
 * Reason
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
 * Reason Class Doc Comment
 *
 * @category Class
 * @description Information about a Reason Code
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Reason';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category_code' => 'string',
        'contact_reason' => 'string',
        'description' => 'string',
        'note_text' => 'string',
        'system_name' => 'string',
        'help_text' => 'string',
        'note_action_code' => 'string',
        'status' => 'string',
        'service_code' => 'string',
        'require_text' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category_code' => null,
        'contact_reason' => null,
        'description' => null,
        'note_text' => null,
        'system_name' => null,
        'help_text' => null,
        'note_action_code' => null,
        'status' => null,
        'service_code' => null,
        'require_text' => null
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
        'category_code' => 'CategoryCode',
        'contact_reason' => 'ContactReason',
        'description' => 'Description',
        'note_text' => 'NoteText',
        'system_name' => 'SystemName',
        'help_text' => 'HelpText',
        'note_action_code' => 'NoteActionCode',
        'status' => 'Status',
        'service_code' => 'ServiceCode',
        'require_text' => 'RequireText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_code' => 'setCategoryCode',
        'contact_reason' => 'setContactReason',
        'description' => 'setDescription',
        'note_text' => 'setNoteText',
        'system_name' => 'setSystemName',
        'help_text' => 'setHelpText',
        'note_action_code' => 'setNoteActionCode',
        'status' => 'setStatus',
        'service_code' => 'setServiceCode',
        'require_text' => 'setRequireText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_code' => 'getCategoryCode',
        'contact_reason' => 'getContactReason',
        'description' => 'getDescription',
        'note_text' => 'getNoteText',
        'system_name' => 'getSystemName',
        'help_text' => 'getHelpText',
        'note_action_code' => 'getNoteActionCode',
        'status' => 'getStatus',
        'service_code' => 'getServiceCode',
        'require_text' => 'getRequireText'
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
        $this->container['category_code'] = isset($data['category_code']) ? $data['category_code'] : null;
        $this->container['contact_reason'] = isset($data['contact_reason']) ? $data['contact_reason'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['note_text'] = isset($data['note_text']) ? $data['note_text'] : null;
        $this->container['system_name'] = isset($data['system_name']) ? $data['system_name'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['note_action_code'] = isset($data['note_action_code']) ? $data['note_action_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['service_code'] = isset($data['service_code']) ? $data['service_code'] : null;
        $this->container['require_text'] = isset($data['require_text']) ? $data['require_text'] : null;
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
     * Gets category_code
     *
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->container['category_code'];
    }

    /**
     * Sets category_code
     *
     * @param string $category_code Reason Category
     *
     * @return $this
     */
    public function setCategoryCode($category_code)
    {
        $this->container['category_code'] = $category_code;

        return $this;
    }

    /**
     * Gets contact_reason
     *
     * @return string
     */
    public function getContactReason()
    {
        return $this->container['contact_reason'];
    }

    /**
     * Sets contact_reason
     *
     * @param string $contact_reason Contact Reason
     *
     * @return $this
     */
    public function setContactReason($contact_reason)
    {
        $this->container['contact_reason'] = $contact_reason;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets note_text
     *
     * @return string
     */
    public function getNoteText()
    {
        return $this->container['note_text'];
    }

    /**
     * Sets note_text
     *
     * @param string $note_text Note Text
     *
     * @return $this
     */
    public function setNoteText($note_text)
    {
        $this->container['note_text'] = $note_text;

        return $this;
    }

    /**
     * Gets system_name
     *
     * @return string
     */
    public function getSystemName()
    {
        return $this->container['system_name'];
    }

    /**
     * Sets system_name
     *
     * @param string $system_name System Name
     *
     * @return $this
     */
    public function setSystemName($system_name)
    {
        $this->container['system_name'] = $system_name;

        return $this;
    }

    /**
     * Gets help_text
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->container['help_text'];
    }

    /**
     * Sets help_text
     *
     * @param string $help_text Reason Help Text
     *
     * @return $this
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /**
     * Gets note_action_code
     *
     * @return string
     */
    public function getNoteActionCode()
    {
        return $this->container['note_action_code'];
    }

    /**
     * Sets note_action_code
     *
     * @param string $note_action_code Note Action Code
     *
     * @return $this
     */
    public function setNoteActionCode($note_action_code)
    {
        $this->container['note_action_code'] = $note_action_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets service_code
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->container['service_code'];
    }

    /**
     * Sets service_code
     *
     * @param string $service_code Service Code
     *
     * @return $this
     */
    public function setServiceCode($service_code)
    {
        $this->container['service_code'] = $service_code;

        return $this;
    }

    /**
     * Gets require_text
     *
     * @return bool
     */
    public function getRequireText()
    {
        return $this->container['require_text'];
    }

    /**
     * Sets require_text
     *
     * @param bool $require_text Require Text
     *
     * @return $this
     */
    public function setRequireText($require_text)
    {
        $this->container['require_text'] = $require_text;

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


