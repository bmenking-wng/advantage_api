<?php
/**
 * ModificationTracking
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
 * ModificationTracking Class Doc Comment
 *
 * @category Class
 * @description Information that&#39;s used to track modification information
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModificationTracking implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModificationTracking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_modification' => 'bool',
        'approval_date' => '\DateTime',
        'base_flag' => 'string',
        'declined_date' => '\DateTime',
        'decline_reason' => 'string',
        'is_approval_via_email' => 'bool',
        'is_fixed_cost' => 'bool',
        'modification_status' => 'string',
        'primary_module' => 'string',
        'retrofit_revision' => 'string',
        'specification_date' => '\DateTime',
        'specification_created_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_modification' => null,
        'approval_date' => 'date-time',
        'base_flag' => null,
        'declined_date' => 'date-time',
        'decline_reason' => null,
        'is_approval_via_email' => null,
        'is_fixed_cost' => null,
        'modification_status' => null,
        'primary_module' => null,
        'retrofit_revision' => null,
        'specification_date' => 'date-time',
        'specification_created_by' => null
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
        'is_modification' => 'IsModification',
        'approval_date' => 'ApprovalDate',
        'base_flag' => 'BaseFlag',
        'declined_date' => 'DeclinedDate',
        'decline_reason' => 'DeclineReason',
        'is_approval_via_email' => 'IsApprovalViaEmail',
        'is_fixed_cost' => 'IsFixedCost',
        'modification_status' => 'ModificationStatus',
        'primary_module' => 'PrimaryModule',
        'retrofit_revision' => 'RetrofitRevision',
        'specification_date' => 'SpecificationDate',
        'specification_created_by' => 'SpecificationCreatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_modification' => 'setIsModification',
        'approval_date' => 'setApprovalDate',
        'base_flag' => 'setBaseFlag',
        'declined_date' => 'setDeclinedDate',
        'decline_reason' => 'setDeclineReason',
        'is_approval_via_email' => 'setIsApprovalViaEmail',
        'is_fixed_cost' => 'setIsFixedCost',
        'modification_status' => 'setModificationStatus',
        'primary_module' => 'setPrimaryModule',
        'retrofit_revision' => 'setRetrofitRevision',
        'specification_date' => 'setSpecificationDate',
        'specification_created_by' => 'setSpecificationCreatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_modification' => 'getIsModification',
        'approval_date' => 'getApprovalDate',
        'base_flag' => 'getBaseFlag',
        'declined_date' => 'getDeclinedDate',
        'decline_reason' => 'getDeclineReason',
        'is_approval_via_email' => 'getIsApprovalViaEmail',
        'is_fixed_cost' => 'getIsFixedCost',
        'modification_status' => 'getModificationStatus',
        'primary_module' => 'getPrimaryModule',
        'retrofit_revision' => 'getRetrofitRevision',
        'specification_date' => 'getSpecificationDate',
        'specification_created_by' => 'getSpecificationCreatedBy'
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

    const BASE_FLAG_BASE = 'Base';
    const BASE_FLAG_CLIENT_SPECIFIC = 'ClientSpecific';
    const BASE_FLAG_HYBRID = 'Hybrid';
    const MODIFICATION_STATUS_APPROVED = 'Approved';
    const MODIFICATION_STATUS_DECLINED = 'Declined';
    const MODIFICATION_STATUS_ESTIMATE_REQUESTED = 'EstimateRequested';
    const MODIFICATION_STATUS_NOT_APPROVED = 'NotApproved';
    const MODIFICATION_STATUS_SPECIFICATION_REQUESTED = 'SpecificationRequested';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBaseFlagAllowableValues()
    {
        return [
            self::BASE_FLAG_BASE,
            self::BASE_FLAG_CLIENT_SPECIFIC,
            self::BASE_FLAG_HYBRID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModificationStatusAllowableValues()
    {
        return [
            self::MODIFICATION_STATUS_APPROVED,
            self::MODIFICATION_STATUS_DECLINED,
            self::MODIFICATION_STATUS_ESTIMATE_REQUESTED,
            self::MODIFICATION_STATUS_NOT_APPROVED,
            self::MODIFICATION_STATUS_SPECIFICATION_REQUESTED,
        ];
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
        $this->container['is_modification'] = isset($data['is_modification']) ? $data['is_modification'] : null;
        $this->container['approval_date'] = isset($data['approval_date']) ? $data['approval_date'] : null;
        $this->container['base_flag'] = isset($data['base_flag']) ? $data['base_flag'] : null;
        $this->container['declined_date'] = isset($data['declined_date']) ? $data['declined_date'] : null;
        $this->container['decline_reason'] = isset($data['decline_reason']) ? $data['decline_reason'] : null;
        $this->container['is_approval_via_email'] = isset($data['is_approval_via_email']) ? $data['is_approval_via_email'] : null;
        $this->container['is_fixed_cost'] = isset($data['is_fixed_cost']) ? $data['is_fixed_cost'] : null;
        $this->container['modification_status'] = isset($data['modification_status']) ? $data['modification_status'] : null;
        $this->container['primary_module'] = isset($data['primary_module']) ? $data['primary_module'] : null;
        $this->container['retrofit_revision'] = isset($data['retrofit_revision']) ? $data['retrofit_revision'] : null;
        $this->container['specification_date'] = isset($data['specification_date']) ? $data['specification_date'] : null;
        $this->container['specification_created_by'] = isset($data['specification_created_by']) ? $data['specification_created_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBaseFlagAllowableValues();
        if (!is_null($this->container['base_flag']) && !in_array($this->container['base_flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'base_flag', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getModificationStatusAllowableValues();
        if (!is_null($this->container['modification_status']) && !in_array($this->container['modification_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'modification_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets is_modification
     *
     * @return bool
     */
    public function getIsModification()
    {
        return $this->container['is_modification'];
    }

    /**
     * Sets is_modification
     *
     * @param bool $is_modification Is the support log for a modification?
     *
     * @return $this
     */
    public function setIsModification($is_modification)
    {
        $this->container['is_modification'] = $is_modification;

        return $this;
    }

    /**
     * Gets approval_date
     *
     * @return \DateTime
     */
    public function getApprovalDate()
    {
        return $this->container['approval_date'];
    }

    /**
     * Sets approval_date
     *
     * @param \DateTime $approval_date The date a modification support log was approved
     *
     * @return $this
     */
    public function setApprovalDate($approval_date)
    {
        $this->container['approval_date'] = $approval_date;

        return $this;
    }

    /**
     * Gets base_flag
     *
     * @return string
     */
    public function getBaseFlag()
    {
        return $this->container['base_flag'];
    }

    /**
     * Sets base_flag
     *
     * @param string $base_flag The base flag indicates whether a modification is base, client specific, or a combination
     *
     * @return $this
     */
    public function setBaseFlag($base_flag)
    {
        $allowedValues = $this->getBaseFlagAllowableValues();
        if (!is_null($base_flag) && !in_array($base_flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'base_flag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['base_flag'] = $base_flag;

        return $this;
    }

    /**
     * Gets declined_date
     *
     * @return \DateTime
     */
    public function getDeclinedDate()
    {
        return $this->container['declined_date'];
    }

    /**
     * Sets declined_date
     *
     * @param \DateTime $declined_date The date a modification support log was declined
     *
     * @return $this
     */
    public function setDeclinedDate($declined_date)
    {
        $this->container['declined_date'] = $declined_date;

        return $this;
    }

    /**
     * Gets decline_reason
     *
     * @return string
     */
    public function getDeclineReason()
    {
        return $this->container['decline_reason'];
    }

    /**
     * Sets decline_reason
     *
     * @param string $decline_reason The reason a modification support log was declined
     *
     * @return $this
     */
    public function setDeclineReason($decline_reason)
    {
        $this->container['decline_reason'] = $decline_reason;

        return $this;
    }

    /**
     * Gets is_approval_via_email
     *
     * @return bool
     */
    public function getIsApprovalViaEmail()
    {
        return $this->container['is_approval_via_email'];
    }

    /**
     * Sets is_approval_via_email
     *
     * @param bool $is_approval_via_email Was the approval for a modification support log received via email?
     *
     * @return $this
     */
    public function setIsApprovalViaEmail($is_approval_via_email)
    {
        $this->container['is_approval_via_email'] = $is_approval_via_email;

        return $this;
    }

    /**
     * Gets is_fixed_cost
     *
     * @return bool
     */
    public function getIsFixedCost()
    {
        return $this->container['is_fixed_cost'];
    }

    /**
     * Sets is_fixed_cost
     *
     * @param bool $is_fixed_cost Is work on this modification support log billed at a fixed cost to the client?
     *
     * @return $this
     */
    public function setIsFixedCost($is_fixed_cost)
    {
        $this->container['is_fixed_cost'] = $is_fixed_cost;

        return $this;
    }

    /**
     * Gets modification_status
     *
     * @return string
     */
    public function getModificationStatus()
    {
        return $this->container['modification_status'];
    }

    /**
     * Sets modification_status
     *
     * @param string $modification_status The status of a modification support log
     *
     * @return $this
     */
    public function setModificationStatus($modification_status)
    {
        $allowedValues = $this->getModificationStatusAllowableValues();
        if (!is_null($modification_status) && !in_array($modification_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'modification_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['modification_status'] = $modification_status;

        return $this;
    }

    /**
     * Gets primary_module
     *
     * @return string
     */
    public function getPrimaryModule()
    {
        return $this->container['primary_module'];
    }

    /**
     * Sets primary_module
     *
     * @param string $primary_module The primary module that will be affected by a modification support log
     *
     * @return $this
     */
    public function setPrimaryModule($primary_module)
    {
        $this->container['primary_module'] = $primary_module;

        return $this;
    }

    /**
     * Gets retrofit_revision
     *
     * @return string
     */
    public function getRetrofitRevision()
    {
        return $this->container['retrofit_revision'];
    }

    /**
     * Sets retrofit_revision
     *
     * @param string $retrofit_revision The revision to retrofit a modification to
     *
     * @return $this
     */
    public function setRetrofitRevision($retrofit_revision)
    {
        $this->container['retrofit_revision'] = $retrofit_revision;

        return $this;
    }

    /**
     * Gets specification_date
     *
     * @return \DateTime
     */
    public function getSpecificationDate()
    {
        return $this->container['specification_date'];
    }

    /**
     * Sets specification_date
     *
     * @param \DateTime $specification_date The date a modification specification document was created for a support log
     *
     * @return $this
     */
    public function setSpecificationDate($specification_date)
    {
        $this->container['specification_date'] = $specification_date;

        return $this;
    }

    /**
     * Gets specification_created_by
     *
     * @return string
     */
    public function getSpecificationCreatedBy()
    {
        return $this->container['specification_created_by'];
    }

    /**
     * Sets specification_created_by
     *
     * @param string $specification_created_by The user code of the user who created the modification specification document for a support log
     *
     * @return $this
     */
    public function setSpecificationCreatedBy($specification_created_by)
    {
        $this->container['specification_created_by'] = $specification_created_by;

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


