<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @description Information for an Advantage product.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_number' => 'string',
        'name' => 'string',
        'product_type' => 'string',
        'image_url_large' => 'string',
        'image_url_small' => 'string',
        'sales_analysis_category_code' => 'string',
        'sales_analysis_summary_code' => 'string',
        'product_family' => 'string',
        'product_category_code' => 'string',
        'publication_date' => '\DateTime',
        'narratives' => '\Advantage\Client\Model\Narrative[]',
        'keywords' => 'string[]',
        'subjects' => '\Advantage\Client\Model\ProductSubject[]',
        'product_details' => '\Advantage\Client\Model\OneOffProduct',
        'subscription_details' => '\Advantage\Client\Model\SubscriptionProduct',
        'access_details' => '\Advantage\Client\Model\AccessProduct',
        'conference_details' => '\Advantage\Client\Model\ConferenceProduct',
        'package_details' => '\Advantage\Client\Model\PackageProduct',
        'back_issue_details' => '\Advantage\Client\Model\BackIssueProduct',
        'contributors' => '\Advantage\Client\Model\Contributor[]',
        'association_details' => '\Advantage\Client\Model\AssociationProduct',
        'profile_id' => 'string',
        'profile' => '\Advantage\Client\Model\Profile',
        'cost_center' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_number' => null,
        'name' => null,
        'product_type' => null,
        'image_url_large' => null,
        'image_url_small' => null,
        'sales_analysis_category_code' => null,
        'sales_analysis_summary_code' => null,
        'product_family' => null,
        'product_category_code' => null,
        'publication_date' => 'date-time',
        'narratives' => null,
        'keywords' => null,
        'subjects' => null,
        'product_details' => null,
        'subscription_details' => null,
        'access_details' => null,
        'conference_details' => null,
        'package_details' => null,
        'back_issue_details' => null,
        'contributors' => null,
        'association_details' => null,
        'profile_id' => null,
        'profile' => null,
        'cost_center' => null
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
        'name' => 'Name',
        'product_type' => 'ProductType',
        'image_url_large' => 'ImageUrlLarge',
        'image_url_small' => 'ImageUrlSmall',
        'sales_analysis_category_code' => 'SalesAnalysisCategoryCode',
        'sales_analysis_summary_code' => 'SalesAnalysisSummaryCode',
        'product_family' => 'ProductFamily',
        'product_category_code' => 'ProductCategoryCode',
        'publication_date' => 'PublicationDate',
        'narratives' => 'Narratives',
        'keywords' => 'Keywords',
        'subjects' => 'Subjects',
        'product_details' => 'ProductDetails',
        'subscription_details' => 'SubscriptionDetails',
        'access_details' => 'AccessDetails',
        'conference_details' => 'ConferenceDetails',
        'package_details' => 'PackageDetails',
        'back_issue_details' => 'BackIssueDetails',
        'contributors' => 'Contributors',
        'association_details' => 'AssociationDetails',
        'profile_id' => 'ProfileId',
        'profile' => 'Profile',
        'cost_center' => 'CostCenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_number' => 'setItemNumber',
        'name' => 'setName',
        'product_type' => 'setProductType',
        'image_url_large' => 'setImageUrlLarge',
        'image_url_small' => 'setImageUrlSmall',
        'sales_analysis_category_code' => 'setSalesAnalysisCategoryCode',
        'sales_analysis_summary_code' => 'setSalesAnalysisSummaryCode',
        'product_family' => 'setProductFamily',
        'product_category_code' => 'setProductCategoryCode',
        'publication_date' => 'setPublicationDate',
        'narratives' => 'setNarratives',
        'keywords' => 'setKeywords',
        'subjects' => 'setSubjects',
        'product_details' => 'setProductDetails',
        'subscription_details' => 'setSubscriptionDetails',
        'access_details' => 'setAccessDetails',
        'conference_details' => 'setConferenceDetails',
        'package_details' => 'setPackageDetails',
        'back_issue_details' => 'setBackIssueDetails',
        'contributors' => 'setContributors',
        'association_details' => 'setAssociationDetails',
        'profile_id' => 'setProfileId',
        'profile' => 'setProfile',
        'cost_center' => 'setCostCenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_number' => 'getItemNumber',
        'name' => 'getName',
        'product_type' => 'getProductType',
        'image_url_large' => 'getImageUrlLarge',
        'image_url_small' => 'getImageUrlSmall',
        'sales_analysis_category_code' => 'getSalesAnalysisCategoryCode',
        'sales_analysis_summary_code' => 'getSalesAnalysisSummaryCode',
        'product_family' => 'getProductFamily',
        'product_category_code' => 'getProductCategoryCode',
        'publication_date' => 'getPublicationDate',
        'narratives' => 'getNarratives',
        'keywords' => 'getKeywords',
        'subjects' => 'getSubjects',
        'product_details' => 'getProductDetails',
        'subscription_details' => 'getSubscriptionDetails',
        'access_details' => 'getAccessDetails',
        'conference_details' => 'getConferenceDetails',
        'package_details' => 'getPackageDetails',
        'back_issue_details' => 'getBackIssueDetails',
        'contributors' => 'getContributors',
        'association_details' => 'getAssociationDetails',
        'profile_id' => 'getProfileId',
        'profile' => 'getProfile',
        'cost_center' => 'getCostCenter'
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

    const PRODUCT_TYPE_PRODUCT = 'Product';
    const PRODUCT_TYPE_SUBSCRIPTION = 'Subscription';
    const PRODUCT_TYPE_ACCESS = 'Access';
    const PRODUCT_TYPE_CONFERENCE = 'Conference';
    const PRODUCT_TYPE_BACK_ISSUE = 'BackIssue';
    const PRODUCT_TYPE_PACKAGE = 'Package';
    const PRODUCT_TYPE_UNKNOWN = 'Unknown';
    const PRODUCT_TYPE_MEMBERSHIP = 'Membership';
    const PRODUCT_TYPE_DONATION = 'Donation';
    const PRODUCT_TYPE_PRINT_JOB = 'PrintJob';
    const PRODUCT_TYPE_REPRINT = 'Reprint';
    const PRODUCT_TYPE_SERVICE = 'Service';
    const PRODUCT_TYPE_STOCK = 'Stock';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductTypeAllowableValues()
    {
        return [
            self::PRODUCT_TYPE_PRODUCT,
            self::PRODUCT_TYPE_SUBSCRIPTION,
            self::PRODUCT_TYPE_ACCESS,
            self::PRODUCT_TYPE_CONFERENCE,
            self::PRODUCT_TYPE_BACK_ISSUE,
            self::PRODUCT_TYPE_PACKAGE,
            self::PRODUCT_TYPE_UNKNOWN,
            self::PRODUCT_TYPE_MEMBERSHIP,
            self::PRODUCT_TYPE_DONATION,
            self::PRODUCT_TYPE_PRINT_JOB,
            self::PRODUCT_TYPE_REPRINT,
            self::PRODUCT_TYPE_SERVICE,
            self::PRODUCT_TYPE_STOCK,
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
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['image_url_large'] = isset($data['image_url_large']) ? $data['image_url_large'] : null;
        $this->container['image_url_small'] = isset($data['image_url_small']) ? $data['image_url_small'] : null;
        $this->container['sales_analysis_category_code'] = isset($data['sales_analysis_category_code']) ? $data['sales_analysis_category_code'] : null;
        $this->container['sales_analysis_summary_code'] = isset($data['sales_analysis_summary_code']) ? $data['sales_analysis_summary_code'] : null;
        $this->container['product_family'] = isset($data['product_family']) ? $data['product_family'] : null;
        $this->container['product_category_code'] = isset($data['product_category_code']) ? $data['product_category_code'] : null;
        $this->container['publication_date'] = isset($data['publication_date']) ? $data['publication_date'] : null;
        $this->container['narratives'] = isset($data['narratives']) ? $data['narratives'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['subjects'] = isset($data['subjects']) ? $data['subjects'] : null;
        $this->container['product_details'] = isset($data['product_details']) ? $data['product_details'] : null;
        $this->container['subscription_details'] = isset($data['subscription_details']) ? $data['subscription_details'] : null;
        $this->container['access_details'] = isset($data['access_details']) ? $data['access_details'] : null;
        $this->container['conference_details'] = isset($data['conference_details']) ? $data['conference_details'] : null;
        $this->container['package_details'] = isset($data['package_details']) ? $data['package_details'] : null;
        $this->container['back_issue_details'] = isset($data['back_issue_details']) ? $data['back_issue_details'] : null;
        $this->container['contributors'] = isset($data['contributors']) ? $data['contributors'] : null;
        $this->container['association_details'] = isset($data['association_details']) ? $data['association_details'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['cost_center'] = isset($data['cost_center']) ? $data['cost_center'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProductTypeAllowableValues();
        if (!is_null($this->container['product_type']) && !in_array($this->container['product_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product_type', must be one of '%s'",
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
     * @param string $item_number The item number of the product.
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

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
     * @param string $name The name of the product.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type The type of product.
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $allowedValues = $this->getProductTypeAllowableValues();
        if (!is_null($product_type) && !in_array($product_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets image_url_large
     *
     * @return string
     */
    public function getImageUrlLarge()
    {
        return $this->container['image_url_large'];
    }

    /**
     * Sets image_url_large
     *
     * @param string $image_url_large The URL for the large image of the product.
     *
     * @return $this
     */
    public function setImageUrlLarge($image_url_large)
    {
        $this->container['image_url_large'] = $image_url_large;

        return $this;
    }

    /**
     * Gets image_url_small
     *
     * @return string
     */
    public function getImageUrlSmall()
    {
        return $this->container['image_url_small'];
    }

    /**
     * Sets image_url_small
     *
     * @param string $image_url_small The URL for the small image of the product.
     *
     * @return $this
     */
    public function setImageUrlSmall($image_url_small)
    {
        $this->container['image_url_small'] = $image_url_small;

        return $this;
    }

    /**
     * Gets sales_analysis_category_code
     *
     * @return string
     */
    public function getSalesAnalysisCategoryCode()
    {
        return $this->container['sales_analysis_category_code'];
    }

    /**
     * Sets sales_analysis_category_code
     *
     * @param string $sales_analysis_category_code The category code assigned to the product for sales analysis.
     *
     * @return $this
     */
    public function setSalesAnalysisCategoryCode($sales_analysis_category_code)
    {
        $this->container['sales_analysis_category_code'] = $sales_analysis_category_code;

        return $this;
    }

    /**
     * Gets sales_analysis_summary_code
     *
     * @return string
     */
    public function getSalesAnalysisSummaryCode()
    {
        return $this->container['sales_analysis_summary_code'];
    }

    /**
     * Sets sales_analysis_summary_code
     *
     * @param string $sales_analysis_summary_code The summary code assigned to the product's sales analysis category.
     *
     * @return $this
     */
    public function setSalesAnalysisSummaryCode($sales_analysis_summary_code)
    {
        $this->container['sales_analysis_summary_code'] = $sales_analysis_summary_code;

        return $this;
    }

    /**
     * Gets product_family
     *
     * @return string
     */
    public function getProductFamily()
    {
        return $this->container['product_family'];
    }

    /**
     * Sets product_family
     *
     * @param string $product_family The product family of the product.
     *
     * @return $this
     */
    public function setProductFamily($product_family)
    {
        $this->container['product_family'] = $product_family;

        return $this;
    }

    /**
     * Gets product_category_code
     *
     * @return string
     */
    public function getProductCategoryCode()
    {
        return $this->container['product_category_code'];
    }

    /**
     * Sets product_category_code
     *
     * @param string $product_category_code The product category of the product.
     *
     * @return $this
     */
    public function setProductCategoryCode($product_category_code)
    {
        $this->container['product_category_code'] = $product_category_code;

        return $this;
    }

    /**
     * Gets publication_date
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->container['publication_date'];
    }

    /**
     * Sets publication_date
     *
     * @param \DateTime $publication_date The publication date of the product.
     *
     * @return $this
     */
    public function setPublicationDate($publication_date)
    {
        $this->container['publication_date'] = $publication_date;

        return $this;
    }

    /**
     * Gets narratives
     *
     * @return \Advantage\Client\Model\Narrative[]
     */
    public function getNarratives()
    {
        return $this->container['narratives'];
    }

    /**
     * Sets narratives
     *
     * @param \Advantage\Client\Model\Narrative[] $narratives The narratives for the product.
     *
     * @return $this
     */
    public function setNarratives($narratives)
    {
        $this->container['narratives'] = $narratives;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords The keywords related to the product.
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets subjects
     *
     * @return \Advantage\Client\Model\ProductSubject[]
     */
    public function getSubjects()
    {
        return $this->container['subjects'];
    }

    /**
     * Sets subjects
     *
     * @param \Advantage\Client\Model\ProductSubject[] $subjects The subject categories the product falls under.
     *
     * @return $this
     */
    public function setSubjects($subjects)
    {
        $this->container['subjects'] = $subjects;

        return $this;
    }

    /**
     * Gets product_details
     *
     * @return \Advantage\Client\Model\OneOffProduct
     */
    public function getProductDetails()
    {
        return $this->container['product_details'];
    }

    /**
     * Sets product_details
     *
     * @param \Advantage\Client\Model\OneOffProduct $product_details Information specific to a one-off product.
     *
     * @return $this
     */
    public function setProductDetails($product_details)
    {
        $this->container['product_details'] = $product_details;

        return $this;
    }

    /**
     * Gets subscription_details
     *
     * @return \Advantage\Client\Model\SubscriptionProduct
     */
    public function getSubscriptionDetails()
    {
        return $this->container['subscription_details'];
    }

    /**
     * Sets subscription_details
     *
     * @param \Advantage\Client\Model\SubscriptionProduct $subscription_details Information specific to a subscription product. Null if the product is not a subscription.
     *
     * @return $this
     */
    public function setSubscriptionDetails($subscription_details)
    {
        $this->container['subscription_details'] = $subscription_details;

        return $this;
    }

    /**
     * Gets access_details
     *
     * @return \Advantage\Client\Model\AccessProduct
     */
    public function getAccessDetails()
    {
        return $this->container['access_details'];
    }

    /**
     * Sets access_details
     *
     * @param \Advantage\Client\Model\AccessProduct $access_details Information specific to an access product. Null if the product is not a access product.
     *
     * @return $this
     */
    public function setAccessDetails($access_details)
    {
        $this->container['access_details'] = $access_details;

        return $this;
    }

    /**
     * Gets conference_details
     *
     * @return \Advantage\Client\Model\ConferenceProduct
     */
    public function getConferenceDetails()
    {
        return $this->container['conference_details'];
    }

    /**
     * Sets conference_details
     *
     * @param \Advantage\Client\Model\ConferenceProduct $conference_details Information specific to a conference product. Null if the product is not a conference product.
     *
     * @return $this
     */
    public function setConferenceDetails($conference_details)
    {
        $this->container['conference_details'] = $conference_details;

        return $this;
    }

    /**
     * Gets package_details
     *
     * @return \Advantage\Client\Model\PackageProduct
     */
    public function getPackageDetails()
    {
        return $this->container['package_details'];
    }

    /**
     * Sets package_details
     *
     * @param \Advantage\Client\Model\PackageProduct $package_details Information specific to a package. Null if the product is not a package.
     *
     * @return $this
     */
    public function setPackageDetails($package_details)
    {
        $this->container['package_details'] = $package_details;

        return $this;
    }

    /**
     * Gets back_issue_details
     *
     * @return \Advantage\Client\Model\BackIssueProduct
     */
    public function getBackIssueDetails()
    {
        return $this->container['back_issue_details'];
    }

    /**
     * Sets back_issue_details
     *
     * @param \Advantage\Client\Model\BackIssueProduct $back_issue_details Information specific to a back issue product. Null if the product is not a back issue product.
     *
     * @return $this
     */
    public function setBackIssueDetails($back_issue_details)
    {
        $this->container['back_issue_details'] = $back_issue_details;

        return $this;
    }

    /**
     * Gets contributors
     *
     * @return \Advantage\Client\Model\Contributor[]
     */
    public function getContributors()
    {
        return $this->container['contributors'];
    }

    /**
     * Sets contributors
     *
     * @param \Advantage\Client\Model\Contributor[] $contributors Information on the Contributors for this product
     *
     * @return $this
     */
    public function setContributors($contributors)
    {
        $this->container['contributors'] = $contributors;

        return $this;
    }

    /**
     * Gets association_details
     *
     * @return \Advantage\Client\Model\AssociationProduct
     */
    public function getAssociationDetails()
    {
        return $this->container['association_details'];
    }

    /**
     * Sets association_details
     *
     * @param \Advantage\Client\Model\AssociationProduct $association_details Information specific to an association membership. Null if the product is not an association membership.
     *
     * @return $this
     */
    public function setAssociationDetails($association_details)
    {
        $this->container['association_details'] = $association_details;

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
     * @param string $profile_id ID for the profile associated with this product
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return \Advantage\Client\Model\Profile
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \Advantage\Client\Model\Profile $profile Profile information for this product
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets cost_center
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->container['cost_center'];
    }

    /**
     * Sets cost_center
     *
     * @param string $cost_center The Cost Center of the Product
     *
     * @return $this
     */
    public function setCostCenter($cost_center)
    {
        $this->container['cost_center'] = $cost_center;

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


