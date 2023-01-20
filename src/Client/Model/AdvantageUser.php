<?php
/**
 * AdvantageUser
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
 * AdvantageUser Class Doc Comment
 *
 * @category Class
 * @description Model for Web User (Advantage Users)
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvantageUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdvantageUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inactivity_timeout' => 'int',
        'code' => 'string',
        'name' => 'string',
        'company_code' => 'string',
        'email_address' => 'string',
        'last_updated_by' => 'string',
        'last_updated' => '\DateTime',
        'membership_organization_code' => 'string',
        'security_group_code' => 'string',
        'language_code' => 'string',
        'user_location_code' => 'string',
        'user_type_code' => 'string',
        'sales_rep_code' => 'string',
        'is_sales_manager' => 'bool',
        'preferences' => '\Advantage\Client\Model\AdvantageUserPreferences'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inactivity_timeout' => 'int32',
        'code' => null,
        'name' => null,
        'company_code' => null,
        'email_address' => null,
        'last_updated_by' => null,
        'last_updated' => 'date-time',
        'membership_organization_code' => null,
        'security_group_code' => null,
        'language_code' => null,
        'user_location_code' => null,
        'user_type_code' => null,
        'sales_rep_code' => null,
        'is_sales_manager' => null,
        'preferences' => null
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
        'inactivity_timeout' => 'InactivityTimeout',
        'code' => 'Code',
        'name' => 'Name',
        'company_code' => 'CompanyCode',
        'email_address' => 'EmailAddress',
        'last_updated_by' => 'LastUpdatedBy',
        'last_updated' => 'LastUpdated',
        'membership_organization_code' => 'MembershipOrganizationCode',
        'security_group_code' => 'SecurityGroupCode',
        'language_code' => 'LanguageCode',
        'user_location_code' => 'UserLocationCode',
        'user_type_code' => 'UserTypeCode',
        'sales_rep_code' => 'SalesRepCode',
        'is_sales_manager' => 'IsSalesManager',
        'preferences' => 'Preferences'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inactivity_timeout' => 'setInactivityTimeout',
        'code' => 'setCode',
        'name' => 'setName',
        'company_code' => 'setCompanyCode',
        'email_address' => 'setEmailAddress',
        'last_updated_by' => 'setLastUpdatedBy',
        'last_updated' => 'setLastUpdated',
        'membership_organization_code' => 'setMembershipOrganizationCode',
        'security_group_code' => 'setSecurityGroupCode',
        'language_code' => 'setLanguageCode',
        'user_location_code' => 'setUserLocationCode',
        'user_type_code' => 'setUserTypeCode',
        'sales_rep_code' => 'setSalesRepCode',
        'is_sales_manager' => 'setIsSalesManager',
        'preferences' => 'setPreferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inactivity_timeout' => 'getInactivityTimeout',
        'code' => 'getCode',
        'name' => 'getName',
        'company_code' => 'getCompanyCode',
        'email_address' => 'getEmailAddress',
        'last_updated_by' => 'getLastUpdatedBy',
        'last_updated' => 'getLastUpdated',
        'membership_organization_code' => 'getMembershipOrganizationCode',
        'security_group_code' => 'getSecurityGroupCode',
        'language_code' => 'getLanguageCode',
        'user_location_code' => 'getUserLocationCode',
        'user_type_code' => 'getUserTypeCode',
        'sales_rep_code' => 'getSalesRepCode',
        'is_sales_manager' => 'getIsSalesManager',
        'preferences' => 'getPreferences'
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
        $this->container['inactivity_timeout'] = isset($data['inactivity_timeout']) ? $data['inactivity_timeout'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['company_code'] = isset($data['company_code']) ? $data['company_code'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['last_updated_by'] = isset($data['last_updated_by']) ? $data['last_updated_by'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['membership_organization_code'] = isset($data['membership_organization_code']) ? $data['membership_organization_code'] : null;
        $this->container['security_group_code'] = isset($data['security_group_code']) ? $data['security_group_code'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['user_location_code'] = isset($data['user_location_code']) ? $data['user_location_code'] : null;
        $this->container['user_type_code'] = isset($data['user_type_code']) ? $data['user_type_code'] : null;
        $this->container['sales_rep_code'] = isset($data['sales_rep_code']) ? $data['sales_rep_code'] : null;
        $this->container['is_sales_manager'] = isset($data['is_sales_manager']) ? $data['is_sales_manager'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
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
     * Gets inactivity_timeout
     *
     * @return int
     */
    public function getInactivityTimeout()
    {
        return $this->container['inactivity_timeout'];
    }

    /**
     * Sets inactivity_timeout
     *
     * @param int $inactivity_timeout inactivity_timeout
     *
     * @return $this
     */
    public function setInactivityTimeout($inactivity_timeout)
    {
        $this->container['inactivity_timeout'] = $inactivity_timeout;

        return $this;
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
     * @param string $code Value of User Code
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
     * @param string $name Value of User's Full Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets company_code
     *
     * @return string
     */
    public function getCompanyCode()
    {
        return $this->container['company_code'];
    }

    /**
     * Sets company_code
     *
     * @param string $company_code Value of Company Number
     *
     * @return $this
     */
    public function setCompanyCode($company_code)
    {
        $this->container['company_code'] = $company_code;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address Value of Email Address
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets last_updated_by
     *
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->container['last_updated_by'];
    }

    /**
     * Sets last_updated_by
     *
     * @param string $last_updated_by Value of Last Updated By
     *
     * @return $this
     */
    public function setLastUpdatedBy($last_updated_by)
    {
        $this->container['last_updated_by'] = $last_updated_by;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param \DateTime $last_updated Value of Last Updated On
     *
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets membership_organization_code
     *
     * @return string
     */
    public function getMembershipOrganizationCode()
    {
        return $this->container['membership_organization_code'];
    }

    /**
     * Sets membership_organization_code
     *
     * @param string $membership_organization_code Value of Membership Org
     *
     * @return $this
     */
    public function setMembershipOrganizationCode($membership_organization_code)
    {
        $this->container['membership_organization_code'] = $membership_organization_code;

        return $this;
    }

    /**
     * Gets security_group_code
     *
     * @return string
     */
    public function getSecurityGroupCode()
    {
        return $this->container['security_group_code'];
    }

    /**
     * Sets security_group_code
     *
     * @param string $security_group_code Value of Security Group
     *
     * @return $this
     */
    public function setSecurityGroupCode($security_group_code)
    {
        $this->container['security_group_code'] = $security_group_code;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code Value of UI Language
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets user_location_code
     *
     * @return string
     */
    public function getUserLocationCode()
    {
        return $this->container['user_location_code'];
    }

    /**
     * Sets user_location_code
     *
     * @param string $user_location_code Value of User Location
     *
     * @return $this
     */
    public function setUserLocationCode($user_location_code)
    {
        $this->container['user_location_code'] = $user_location_code;

        return $this;
    }

    /**
     * Gets user_type_code
     *
     * @return string
     */
    public function getUserTypeCode()
    {
        return $this->container['user_type_code'];
    }

    /**
     * Sets user_type_code
     *
     * @param string $user_type_code Value of User Type
     *
     * @return $this
     */
    public function setUserTypeCode($user_type_code)
    {
        $this->container['user_type_code'] = $user_type_code;

        return $this;
    }

    /**
     * Gets sales_rep_code
     *
     * @return string
     */
    public function getSalesRepCode()
    {
        return $this->container['sales_rep_code'];
    }

    /**
     * Sets sales_rep_code
     *
     * @param string $sales_rep_code The sales rep code associated with this user
     *
     * @return $this
     */
    public function setSalesRepCode($sales_rep_code)
    {
        $this->container['sales_rep_code'] = $sales_rep_code;

        return $this;
    }

    /**
     * Gets is_sales_manager
     *
     * @return bool
     */
    public function getIsSalesManager()
    {
        return $this->container['is_sales_manager'];
    }

    /**
     * Sets is_sales_manager
     *
     * @param bool $is_sales_manager Are there other sales reps that report to this user?
     *
     * @return $this
     */
    public function setIsSalesManager($is_sales_manager)
    {
        $this->container['is_sales_manager'] = $is_sales_manager;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \Advantage\Client\Model\AdvantageUserPreferences
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \Advantage\Client\Model\AdvantageUserPreferences $preferences User Preferences
     *
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

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


