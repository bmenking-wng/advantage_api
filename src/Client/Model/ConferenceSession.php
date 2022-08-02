<?php
/**
 * ConferenceSession
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
 * ConferenceSession Class Doc Comment
 *
 * @category Class
 * @description Contains all of the information about a conference Session
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConferenceSession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConferenceSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'name' => 'string',
        'full_name' => 'string',
        'description' => 'string',
        'session_type_code' => 'string',
        'conference_day' => 'int',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'duration_in_days' => 'int',
        'schedule_description' => 'string',
        'conference_track_code' => 'string',
        'available_to_web_on' => '\DateTime',
        'session_questionnaire_code' => 'string',
        'is_availability_tracked' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'name' => null,
        'full_name' => null,
        'description' => null,
        'session_type_code' => null,
        'conference_day' => 'int32',
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'duration_in_days' => 'int32',
        'schedule_description' => null,
        'conference_track_code' => null,
        'available_to_web_on' => 'date-time',
        'session_questionnaire_code' => null,
        'is_availability_tracked' => null
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
        'name' => 'Name',
        'full_name' => 'FullName',
        'description' => 'Description',
        'session_type_code' => 'SessionTypeCode',
        'conference_day' => 'ConferenceDay',
        'start_time' => 'StartTime',
        'end_time' => 'EndTime',
        'duration_in_days' => 'DurationInDays',
        'schedule_description' => 'ScheduleDescription',
        'conference_track_code' => 'ConferenceTrackCode',
        'available_to_web_on' => 'AvailableToWebOn',
        'session_questionnaire_code' => 'SessionQuestionnaireCode',
        'is_availability_tracked' => 'IsAvailabilityTracked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'full_name' => 'setFullName',
        'description' => 'setDescription',
        'session_type_code' => 'setSessionTypeCode',
        'conference_day' => 'setConferenceDay',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'duration_in_days' => 'setDurationInDays',
        'schedule_description' => 'setScheduleDescription',
        'conference_track_code' => 'setConferenceTrackCode',
        'available_to_web_on' => 'setAvailableToWebOn',
        'session_questionnaire_code' => 'setSessionQuestionnaireCode',
        'is_availability_tracked' => 'setIsAvailabilityTracked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'full_name' => 'getFullName',
        'description' => 'getDescription',
        'session_type_code' => 'getSessionTypeCode',
        'conference_day' => 'getConferenceDay',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'duration_in_days' => 'getDurationInDays',
        'schedule_description' => 'getScheduleDescription',
        'conference_track_code' => 'getConferenceTrackCode',
        'available_to_web_on' => 'getAvailableToWebOn',
        'session_questionnaire_code' => 'getSessionQuestionnaireCode',
        'is_availability_tracked' => 'getIsAvailabilityTracked'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['session_type_code'] = isset($data['session_type_code']) ? $data['session_type_code'] : null;
        $this->container['conference_day'] = isset($data['conference_day']) ? $data['conference_day'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['duration_in_days'] = isset($data['duration_in_days']) ? $data['duration_in_days'] : null;
        $this->container['schedule_description'] = isset($data['schedule_description']) ? $data['schedule_description'] : null;
        $this->container['conference_track_code'] = isset($data['conference_track_code']) ? $data['conference_track_code'] : null;
        $this->container['available_to_web_on'] = isset($data['available_to_web_on']) ? $data['available_to_web_on'] : null;
        $this->container['session_questionnaire_code'] = isset($data['session_questionnaire_code']) ? $data['session_questionnaire_code'] : null;
        $this->container['is_availability_tracked'] = isset($data['is_availability_tracked']) ? $data['is_availability_tracked'] : null;
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
     * @param string $code Session ID
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $name Session Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name Full Session Name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

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
     * @param string $description Session Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets session_type_code
     *
     * @return string
     */
    public function getSessionTypeCode()
    {
        return $this->container['session_type_code'];
    }

    /**
     * Sets session_type_code
     *
     * @param string $session_type_code Session Type
     *
     * @return $this
     */
    public function setSessionTypeCode($session_type_code)
    {
        $this->container['session_type_code'] = $session_type_code;

        return $this;
    }

    /**
     * Gets conference_day
     *
     * @return int
     */
    public function getConferenceDay()
    {
        return $this->container['conference_day'];
    }

    /**
     * Sets conference_day
     *
     * @param int $conference_day Conference Day
     *
     * @return $this
     */
    public function setConferenceDay($conference_day)
    {
        $this->container['conference_day'] = $conference_day;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Session Start Time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time Session Finish Time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets duration_in_days
     *
     * @return int
     */
    public function getDurationInDays()
    {
        return $this->container['duration_in_days'];
    }

    /**
     * Sets duration_in_days
     *
     * @param int $duration_in_days Session duration in # of days
     *
     * @return $this
     */
    public function setDurationInDays($duration_in_days)
    {
        $this->container['duration_in_days'] = $duration_in_days;

        return $this;
    }

    /**
     * Gets schedule_description
     *
     * @return string
     */
    public function getScheduleDescription()
    {
        return $this->container['schedule_description'];
    }

    /**
     * Sets schedule_description
     *
     * @param string $schedule_description Schedule description
     *
     * @return $this
     */
    public function setScheduleDescription($schedule_description)
    {
        $this->container['schedule_description'] = $schedule_description;

        return $this;
    }

    /**
     * Gets conference_track_code
     *
     * @return string
     */
    public function getConferenceTrackCode()
    {
        return $this->container['conference_track_code'];
    }

    /**
     * Sets conference_track_code
     *
     * @param string $conference_track_code Conference Track
     *
     * @return $this
     */
    public function setConferenceTrackCode($conference_track_code)
    {
        $this->container['conference_track_code'] = $conference_track_code;

        return $this;
    }

    /**
     * Gets available_to_web_on
     *
     * @return \DateTime
     */
    public function getAvailableToWebOn()
    {
        return $this->container['available_to_web_on'];
    }

    /**
     * Sets available_to_web_on
     *
     * @param \DateTime $available_to_web_on Date registration is open
     *
     * @return $this
     */
    public function setAvailableToWebOn($available_to_web_on)
    {
        $this->container['available_to_web_on'] = $available_to_web_on;

        return $this;
    }

    /**
     * Gets session_questionnaire_code
     *
     * @return string
     */
    public function getSessionQuestionnaireCode()
    {
        return $this->container['session_questionnaire_code'];
    }

    /**
     * Sets session_questionnaire_code
     *
     * @param string $session_questionnaire_code Session Questionnaire
     *
     * @return $this
     */
    public function setSessionQuestionnaireCode($session_questionnaire_code)
    {
        $this->container['session_questionnaire_code'] = $session_questionnaire_code;

        return $this;
    }

    /**
     * Gets is_availability_tracked
     *
     * @return bool
     */
    public function getIsAvailabilityTracked()
    {
        return $this->container['is_availability_tracked'];
    }

    /**
     * Sets is_availability_tracked
     *
     * @param bool $is_availability_tracked Whether or not the tickets remaining is tracked for this conference session.
     *
     * @return $this
     */
    public function setIsAvailabilityTracked($is_availability_tracked)
    {
        $this->container['is_availability_tracked'] = $is_availability_tracked;

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


