<?php
/**
 * SupportLogComment
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
 * SupportLogComment Class Doc Comment
 *
 * @category Class
 * @description This class is part of the CSL module.  It is used internally at ACS.  Represents an ACS client support log comment.  Comments may have been created  by either an Advantage user or a client contact person.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupportLogComment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupportLogComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment_id' => 'string',
        'comment_type' => 'string',
        'contact' => '\Advantage\Client\Model\ClientContactSummary',
        'creation_date' => '\DateTime',
        'creation_user' => 'string',
        'text' => 'string',
        'update_date' => '\DateTime',
        'update_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment_id' => null,
        'comment_type' => null,
        'contact' => null,
        'creation_date' => 'date-time',
        'creation_user' => null,
        'text' => null,
        'update_date' => 'date-time',
        'update_user' => null
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
        'comment_id' => 'CommentId',
        'comment_type' => 'CommentType',
        'contact' => 'Contact',
        'creation_date' => 'CreationDate',
        'creation_user' => 'CreationUser',
        'text' => 'Text',
        'update_date' => 'UpdateDate',
        'update_user' => 'UpdateUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment_id' => 'setCommentId',
        'comment_type' => 'setCommentType',
        'contact' => 'setContact',
        'creation_date' => 'setCreationDate',
        'creation_user' => 'setCreationUser',
        'text' => 'setText',
        'update_date' => 'setUpdateDate',
        'update_user' => 'setUpdateUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment_id' => 'getCommentId',
        'comment_type' => 'getCommentType',
        'contact' => 'getContact',
        'creation_date' => 'getCreationDate',
        'creation_user' => 'getCreationUser',
        'text' => 'getText',
        'update_date' => 'getUpdateDate',
        'update_user' => 'getUpdateUser'
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
        $this->container['comment_id'] = isset($data['comment_id']) ? $data['comment_id'] : null;
        $this->container['comment_type'] = isset($data['comment_type']) ? $data['comment_type'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['creation_user'] = isset($data['creation_user']) ? $data['creation_user'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
        $this->container['update_user'] = isset($data['update_user']) ? $data['update_user'] : null;
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
     * Gets comment_id
     *
     * @return string
     */
    public function getCommentId()
    {
        return $this->container['comment_id'];
    }

    /**
     * Sets comment_id
     *
     * @param string $comment_id The comment ID is a unique number to identify CSL comment
     *
     * @return $this
     */
    public function setCommentId($comment_id)
    {
        $this->container['comment_id'] = $comment_id;

        return $this;
    }

    /**
     * Gets comment_type
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->container['comment_type'];
    }

    /**
     * Sets comment_type
     *
     * @param string $comment_type The type of comment
     *
     * @return $this
     */
    public function setCommentType($comment_type)
    {
        $this->container['comment_type'] = $comment_type;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Advantage\Client\Model\ClientContactSummary
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Advantage\Client\Model\ClientContactSummary $contact The client contact who created the comment
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime $creation_date The date the comment was created
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets creation_user
     *
     * @return string
     */
    public function getCreationUser()
    {
        return $this->container['creation_user'];
    }

    /**
     * Sets creation_user
     *
     * @param string $creation_user The user code of the Advantage user who created the comment
     *
     * @return $this
     */
    public function setCreationUser($creation_user)
    {
        $this->container['creation_user'] = $creation_user;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The comment text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime $update_date The Date and Time in UTC that the comment was last update
     *
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

        return $this;
    }

    /**
     * Gets update_user
     *
     * @return string
     */
    public function getUpdateUser()
    {
        return $this->container['update_user'];
    }

    /**
     * Sets update_user
     *
     * @param string $update_user The user code of the Advantage user who last updated the comment
     *
     * @return $this
     */
    public function setUpdateUser($update_user)
    {
        $this->container['update_user'] = $update_user;

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


