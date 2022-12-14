<?php
/**
 * EndCallInfo
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
 * EndCallInfo Class Doc Comment
 *
 * @category Class
 * @description Information for ending a call.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EndCallInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EndCallInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'list_code' => 'string',
        'list_date' => '\DateTime',
        'customer_number' => 'string',
        'is_cancel' => 'bool',
        'call_outcome_code' => 'string',
        'callback_date' => '\DateTime',
        'reason_refused_code' => 'string',
        'contact_comment' => 'string',
        'keep_callback_on_list' => 'bool',
        'customer_classification_code' => 'string',
        'call_start_time' => '\DateTime',
        'is_inbound_call' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'list_code' => null,
        'list_date' => 'date-time',
        'customer_number' => null,
        'is_cancel' => null,
        'call_outcome_code' => null,
        'callback_date' => 'date-time',
        'reason_refused_code' => null,
        'contact_comment' => null,
        'keep_callback_on_list' => null,
        'customer_classification_code' => null,
        'call_start_time' => 'date-time',
        'is_inbound_call' => null
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
        'list_code' => 'ListCode',
        'list_date' => 'ListDate',
        'customer_number' => 'CustomerNumber',
        'is_cancel' => 'IsCancel',
        'call_outcome_code' => 'CallOutcomeCode',
        'callback_date' => 'CallbackDate',
        'reason_refused_code' => 'ReasonRefusedCode',
        'contact_comment' => 'ContactComment',
        'keep_callback_on_list' => 'KeepCallbackOnList',
        'customer_classification_code' => 'CustomerClassificationCode',
        'call_start_time' => 'CallStartTime',
        'is_inbound_call' => 'IsInboundCall'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_code' => 'setListCode',
        'list_date' => 'setListDate',
        'customer_number' => 'setCustomerNumber',
        'is_cancel' => 'setIsCancel',
        'call_outcome_code' => 'setCallOutcomeCode',
        'callback_date' => 'setCallbackDate',
        'reason_refused_code' => 'setReasonRefusedCode',
        'contact_comment' => 'setContactComment',
        'keep_callback_on_list' => 'setKeepCallbackOnList',
        'customer_classification_code' => 'setCustomerClassificationCode',
        'call_start_time' => 'setCallStartTime',
        'is_inbound_call' => 'setIsInboundCall'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_code' => 'getListCode',
        'list_date' => 'getListDate',
        'customer_number' => 'getCustomerNumber',
        'is_cancel' => 'getIsCancel',
        'call_outcome_code' => 'getCallOutcomeCode',
        'callback_date' => 'getCallbackDate',
        'reason_refused_code' => 'getReasonRefusedCode',
        'contact_comment' => 'getContactComment',
        'keep_callback_on_list' => 'getKeepCallbackOnList',
        'customer_classification_code' => 'getCustomerClassificationCode',
        'call_start_time' => 'getCallStartTime',
        'is_inbound_call' => 'getIsInboundCall'
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
        $this->container['list_code'] = isset($data['list_code']) ? $data['list_code'] : null;
        $this->container['list_date'] = isset($data['list_date']) ? $data['list_date'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['is_cancel'] = isset($data['is_cancel']) ? $data['is_cancel'] : null;
        $this->container['call_outcome_code'] = isset($data['call_outcome_code']) ? $data['call_outcome_code'] : null;
        $this->container['callback_date'] = isset($data['callback_date']) ? $data['callback_date'] : null;
        $this->container['reason_refused_code'] = isset($data['reason_refused_code']) ? $data['reason_refused_code'] : null;
        $this->container['contact_comment'] = isset($data['contact_comment']) ? $data['contact_comment'] : null;
        $this->container['keep_callback_on_list'] = isset($data['keep_callback_on_list']) ? $data['keep_callback_on_list'] : null;
        $this->container['customer_classification_code'] = isset($data['customer_classification_code']) ? $data['customer_classification_code'] : null;
        $this->container['call_start_time'] = isset($data['call_start_time']) ? $data['call_start_time'] : null;
        $this->container['is_inbound_call'] = isset($data['is_inbound_call']) ? $data['is_inbound_call'] : null;
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
     * Gets list_code
     *
     * @return string
     */
    public function getListCode()
    {
        return $this->container['list_code'];
    }

    /**
     * Sets list_code
     *
     * @param string $list_code Call list ID
     *
     * @return $this
     */
    public function setListCode($list_code)
    {
        $this->container['list_code'] = $list_code;

        return $this;
    }

    /**
     * Gets list_date
     *
     * @return \DateTime
     */
    public function getListDate()
    {
        return $this->container['list_date'];
    }

    /**
     * Sets list_date
     *
     * @param \DateTime $list_date Call list date
     *
     * @return $this
     */
    public function setListDate($list_date)
    {
        $this->container['list_date'] = $list_date;

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
     * @param string $customer_number Customer number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets is_cancel
     *
     * @return bool
     */
    public function getIsCancel()
    {
        return $this->container['is_cancel'];
    }

    /**
     * Sets is_cancel
     *
     * @param bool $is_cancel True if we are canceling the call
     *
     * @return $this
     */
    public function setIsCancel($is_cancel)
    {
        $this->container['is_cancel'] = $is_cancel;

        return $this;
    }

    /**
     * Gets call_outcome_code
     *
     * @return string
     */
    public function getCallOutcomeCode()
    {
        return $this->container['call_outcome_code'];
    }

    /**
     * Sets call_outcome_code
     *
     * @param string $call_outcome_code Call outcome
     *
     * @return $this
     */
    public function setCallOutcomeCode($call_outcome_code)
    {
        $this->container['call_outcome_code'] = $call_outcome_code;

        return $this;
    }

    /**
     * Gets callback_date
     *
     * @return \DateTime
     */
    public function getCallbackDate()
    {
        return $this->container['callback_date'];
    }

    /**
     * Sets callback_date
     *
     * @param \DateTime $callback_date Callback date
     *
     * @return $this
     */
    public function setCallbackDate($callback_date)
    {
        $this->container['callback_date'] = $callback_date;

        return $this;
    }

    /**
     * Gets reason_refused_code
     *
     * @return string
     */
    public function getReasonRefusedCode()
    {
        return $this->container['reason_refused_code'];
    }

    /**
     * Sets reason_refused_code
     *
     * @param string $reason_refused_code Reason refused
     *
     * @return $this
     */
    public function setReasonRefusedCode($reason_refused_code)
    {
        $this->container['reason_refused_code'] = $reason_refused_code;

        return $this;
    }

    /**
     * Gets contact_comment
     *
     * @return string
     */
    public function getContactComment()
    {
        return $this->container['contact_comment'];
    }

    /**
     * Sets contact_comment
     *
     * @param string $contact_comment Contact comment
     *
     * @return $this
     */
    public function setContactComment($contact_comment)
    {
        $this->container['contact_comment'] = $contact_comment;

        return $this;
    }

    /**
     * Gets keep_callback_on_list
     *
     * @return bool
     */
    public function getKeepCallbackOnList()
    {
        return $this->container['keep_callback_on_list'];
    }

    /**
     * Sets keep_callback_on_list
     *
     * @param bool $keep_callback_on_list Keep callback on list
     *
     * @return $this
     */
    public function setKeepCallbackOnList($keep_callback_on_list)
    {
        $this->container['keep_callback_on_list'] = $keep_callback_on_list;

        return $this;
    }

    /**
     * Gets customer_classification_code
     *
     * @return string
     */
    public function getCustomerClassificationCode()
    {
        return $this->container['customer_classification_code'];
    }

    /**
     * Sets customer_classification_code
     *
     * @param string $customer_classification_code Customer classification
     *
     * @return $this
     */
    public function setCustomerClassificationCode($customer_classification_code)
    {
        $this->container['customer_classification_code'] = $customer_classification_code;

        return $this;
    }

    /**
     * Gets call_start_time
     *
     * @return \DateTime
     */
    public function getCallStartTime()
    {
        return $this->container['call_start_time'];
    }

    /**
     * Sets call_start_time
     *
     * @param \DateTime $call_start_time Optionally set the start time of the call as well
     *
     * @return $this
     */
    public function setCallStartTime($call_start_time)
    {
        $this->container['call_start_time'] = $call_start_time;

        return $this;
    }

    /**
     * Gets is_inbound_call
     *
     * @return bool
     */
    public function getIsInboundCall()
    {
        return $this->container['is_inbound_call'];
    }

    /**
     * Sets is_inbound_call
     *
     * @param bool $is_inbound_call Optionally set whether or not the call is inbound
     *
     * @return $this
     */
    public function setIsInboundCall($is_inbound_call)
    {
        $this->container['is_inbound_call'] = $is_inbound_call;

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


