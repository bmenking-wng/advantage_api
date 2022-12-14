<?php
/**
 * CallHistory
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
 * CallHistory Class Doc Comment
 *
 * @category Class
 * @description Information about a Call History object
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'callback_date' => '\DateTime',
        'call_elapsed_time' => 'int',
        'call_end' => '\DateTime',
        'call_start' => '\DateTime',
        'call_priority' => 'int',
        'customer_name' => 'string',
        'customer_number' => 'string',
        'list_date' => '\DateTime',
        'list_id' => 'string',
        'post_call_elapsed_time' => 'int',
        'post_call_end' => '\DateTime',
        'post_call_start' => '\DateTime',
        'pre_call_elapsed_time' => 'int',
        'pre_call_end' => '\DateTime',
        'pre_call_start' => '\DateTime',
        'sales_rep' => 'string',
        'sequence_number' => 'string',
        'times_called' => 'int',
        'last_callback_outcome' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'callback_date' => 'date-time',
        'call_elapsed_time' => 'int32',
        'call_end' => 'date-time',
        'call_start' => 'date-time',
        'call_priority' => 'int32',
        'customer_name' => null,
        'customer_number' => null,
        'list_date' => 'date-time',
        'list_id' => null,
        'post_call_elapsed_time' => 'int32',
        'post_call_end' => 'date-time',
        'post_call_start' => 'date-time',
        'pre_call_elapsed_time' => 'int32',
        'pre_call_end' => 'date-time',
        'pre_call_start' => 'date-time',
        'sales_rep' => null,
        'sequence_number' => null,
        'times_called' => 'int32',
        'last_callback_outcome' => null
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
        'callback_date' => 'CallbackDate',
        'call_elapsed_time' => 'CallElapsedTime',
        'call_end' => 'CallEnd',
        'call_start' => 'CallStart',
        'call_priority' => 'CallPriority',
        'customer_name' => 'CustomerName',
        'customer_number' => 'CustomerNumber',
        'list_date' => 'ListDate',
        'list_id' => 'ListId',
        'post_call_elapsed_time' => 'PostCallElapsedTime',
        'post_call_end' => 'PostCallEnd',
        'post_call_start' => 'PostCallStart',
        'pre_call_elapsed_time' => 'PreCallElapsedTime',
        'pre_call_end' => 'PreCallEnd',
        'pre_call_start' => 'PreCallStart',
        'sales_rep' => 'SalesRep',
        'sequence_number' => 'SequenceNumber',
        'times_called' => 'TimesCalled',
        'last_callback_outcome' => 'LastCallbackOutcome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_date' => 'setCallbackDate',
        'call_elapsed_time' => 'setCallElapsedTime',
        'call_end' => 'setCallEnd',
        'call_start' => 'setCallStart',
        'call_priority' => 'setCallPriority',
        'customer_name' => 'setCustomerName',
        'customer_number' => 'setCustomerNumber',
        'list_date' => 'setListDate',
        'list_id' => 'setListId',
        'post_call_elapsed_time' => 'setPostCallElapsedTime',
        'post_call_end' => 'setPostCallEnd',
        'post_call_start' => 'setPostCallStart',
        'pre_call_elapsed_time' => 'setPreCallElapsedTime',
        'pre_call_end' => 'setPreCallEnd',
        'pre_call_start' => 'setPreCallStart',
        'sales_rep' => 'setSalesRep',
        'sequence_number' => 'setSequenceNumber',
        'times_called' => 'setTimesCalled',
        'last_callback_outcome' => 'setLastCallbackOutcome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_date' => 'getCallbackDate',
        'call_elapsed_time' => 'getCallElapsedTime',
        'call_end' => 'getCallEnd',
        'call_start' => 'getCallStart',
        'call_priority' => 'getCallPriority',
        'customer_name' => 'getCustomerName',
        'customer_number' => 'getCustomerNumber',
        'list_date' => 'getListDate',
        'list_id' => 'getListId',
        'post_call_elapsed_time' => 'getPostCallElapsedTime',
        'post_call_end' => 'getPostCallEnd',
        'post_call_start' => 'getPostCallStart',
        'pre_call_elapsed_time' => 'getPreCallElapsedTime',
        'pre_call_end' => 'getPreCallEnd',
        'pre_call_start' => 'getPreCallStart',
        'sales_rep' => 'getSalesRep',
        'sequence_number' => 'getSequenceNumber',
        'times_called' => 'getTimesCalled',
        'last_callback_outcome' => 'getLastCallbackOutcome'
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
        $this->container['callback_date'] = isset($data['callback_date']) ? $data['callback_date'] : null;
        $this->container['call_elapsed_time'] = isset($data['call_elapsed_time']) ? $data['call_elapsed_time'] : null;
        $this->container['call_end'] = isset($data['call_end']) ? $data['call_end'] : null;
        $this->container['call_start'] = isset($data['call_start']) ? $data['call_start'] : null;
        $this->container['call_priority'] = isset($data['call_priority']) ? $data['call_priority'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['list_date'] = isset($data['list_date']) ? $data['list_date'] : null;
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['post_call_elapsed_time'] = isset($data['post_call_elapsed_time']) ? $data['post_call_elapsed_time'] : null;
        $this->container['post_call_end'] = isset($data['post_call_end']) ? $data['post_call_end'] : null;
        $this->container['post_call_start'] = isset($data['post_call_start']) ? $data['post_call_start'] : null;
        $this->container['pre_call_elapsed_time'] = isset($data['pre_call_elapsed_time']) ? $data['pre_call_elapsed_time'] : null;
        $this->container['pre_call_end'] = isset($data['pre_call_end']) ? $data['pre_call_end'] : null;
        $this->container['pre_call_start'] = isset($data['pre_call_start']) ? $data['pre_call_start'] : null;
        $this->container['sales_rep'] = isset($data['sales_rep']) ? $data['sales_rep'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['times_called'] = isset($data['times_called']) ? $data['times_called'] : null;
        $this->container['last_callback_outcome'] = isset($data['last_callback_outcome']) ? $data['last_callback_outcome'] : null;
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
     * @param \DateTime $callback_date Value of Callback Date
     *
     * @return $this
     */
    public function setCallbackDate($callback_date)
    {
        $this->container['callback_date'] = $callback_date;

        return $this;
    }

    /**
     * Gets call_elapsed_time
     *
     * @return int
     */
    public function getCallElapsedTime()
    {
        return $this->container['call_elapsed_time'];
    }

    /**
     * Sets call_elapsed_time
     *
     * @param int $call_elapsed_time Call time in seconds
     *
     * @return $this
     */
    public function setCallElapsedTime($call_elapsed_time)
    {
        $this->container['call_elapsed_time'] = $call_elapsed_time;

        return $this;
    }

    /**
     * Gets call_end
     *
     * @return \DateTime
     */
    public function getCallEnd()
    {
        return $this->container['call_end'];
    }

    /**
     * Sets call_end
     *
     * @param \DateTime $call_end Date and time of Call End
     *
     * @return $this
     */
    public function setCallEnd($call_end)
    {
        $this->container['call_end'] = $call_end;

        return $this;
    }

    /**
     * Gets call_start
     *
     * @return \DateTime
     */
    public function getCallStart()
    {
        return $this->container['call_start'];
    }

    /**
     * Sets call_start
     *
     * @param \DateTime $call_start Date and time of Call Start
     *
     * @return $this
     */
    public function setCallStart($call_start)
    {
        $this->container['call_start'] = $call_start;

        return $this;
    }

    /**
     * Gets call_priority
     *
     * @return int
     */
    public function getCallPriority()
    {
        return $this->container['call_priority'];
    }

    /**
     * Sets call_priority
     *
     * @param int $call_priority Value of Call Priority
     *
     * @return $this
     */
    public function setCallPriority($call_priority)
    {
        $this->container['call_priority'] = $call_priority;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name Value of Customer Name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

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
     * @param string $customer_number Value of Customer Number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

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
     * @param \DateTime $list_date Value of List Date
     *
     * @return $this
     */
    public function setListDate($list_date)
    {
        $this->container['list_date'] = $list_date;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return string
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param string $list_id Value of List ID
     *
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets post_call_elapsed_time
     *
     * @return int
     */
    public function getPostCallElapsedTime()
    {
        return $this->container['post_call_elapsed_time'];
    }

    /**
     * Sets post_call_elapsed_time
     *
     * @param int $post_call_elapsed_time Post-call time in seconds
     *
     * @return $this
     */
    public function setPostCallElapsedTime($post_call_elapsed_time)
    {
        $this->container['post_call_elapsed_time'] = $post_call_elapsed_time;

        return $this;
    }

    /**
     * Gets post_call_end
     *
     * @return \DateTime
     */
    public function getPostCallEnd()
    {
        return $this->container['post_call_end'];
    }

    /**
     * Sets post_call_end
     *
     * @param \DateTime $post_call_end Date and time of Post-call End
     *
     * @return $this
     */
    public function setPostCallEnd($post_call_end)
    {
        $this->container['post_call_end'] = $post_call_end;

        return $this;
    }

    /**
     * Gets post_call_start
     *
     * @return \DateTime
     */
    public function getPostCallStart()
    {
        return $this->container['post_call_start'];
    }

    /**
     * Sets post_call_start
     *
     * @param \DateTime $post_call_start Date and time of Post-call Start
     *
     * @return $this
     */
    public function setPostCallStart($post_call_start)
    {
        $this->container['post_call_start'] = $post_call_start;

        return $this;
    }

    /**
     * Gets pre_call_elapsed_time
     *
     * @return int
     */
    public function getPreCallElapsedTime()
    {
        return $this->container['pre_call_elapsed_time'];
    }

    /**
     * Sets pre_call_elapsed_time
     *
     * @param int $pre_call_elapsed_time Pre-call time in seconds
     *
     * @return $this
     */
    public function setPreCallElapsedTime($pre_call_elapsed_time)
    {
        $this->container['pre_call_elapsed_time'] = $pre_call_elapsed_time;

        return $this;
    }

    /**
     * Gets pre_call_end
     *
     * @return \DateTime
     */
    public function getPreCallEnd()
    {
        return $this->container['pre_call_end'];
    }

    /**
     * Sets pre_call_end
     *
     * @param \DateTime $pre_call_end Date and time of Pre-call End
     *
     * @return $this
     */
    public function setPreCallEnd($pre_call_end)
    {
        $this->container['pre_call_end'] = $pre_call_end;

        return $this;
    }

    /**
     * Gets pre_call_start
     *
     * @return \DateTime
     */
    public function getPreCallStart()
    {
        return $this->container['pre_call_start'];
    }

    /**
     * Sets pre_call_start
     *
     * @param \DateTime $pre_call_start Date and time of Pre-call Start
     *
     * @return $this
     */
    public function setPreCallStart($pre_call_start)
    {
        $this->container['pre_call_start'] = $pre_call_start;

        return $this;
    }

    /**
     * Gets sales_rep
     *
     * @return string
     */
    public function getSalesRep()
    {
        return $this->container['sales_rep'];
    }

    /**
     * Sets sales_rep
     *
     * @param string $sales_rep Value of Sales Rep
     *
     * @return $this
     */
    public function setSalesRep($sales_rep)
    {
        $this->container['sales_rep'] = $sales_rep;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param string $sequence_number Value of Sequence Number
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets times_called
     *
     * @return int
     */
    public function getTimesCalled()
    {
        return $this->container['times_called'];
    }

    /**
     * Sets times_called
     *
     * @param int $times_called Number of times customer has been called for this list
     *
     * @return $this
     */
    public function setTimesCalled($times_called)
    {
        $this->container['times_called'] = $times_called;

        return $this;
    }

    /**
     * Gets last_callback_outcome
     *
     * @return string
     */
    public function getLastCallbackOutcome()
    {
        return $this->container['last_callback_outcome'];
    }

    /**
     * Sets last_callback_outcome
     *
     * @param string $last_callback_outcome Call Outcome for last callback made to this customer for this list
     *
     * @return $this
     */
    public function setLastCallbackOutcome($last_callback_outcome)
    {
        $this->container['last_callback_outcome'] = $last_callback_outcome;

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


