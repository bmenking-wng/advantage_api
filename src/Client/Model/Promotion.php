<?php
/**
 * Promotion
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
 * Promotion Class Doc Comment
 *
 * @category Class
 * @description Information for a promotional effort.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Promotion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Promotion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'promotion_code' => 'string',
        'campaign_code' => 'string',
        'offer_code' => 'string',
        'name' => 'string',
        'name2' => 'string',
        'valid_until' => '\DateTime',
        'url' => 'string',
        'image_url' => 'string',
        'is_active' => 'bool',
        'is_auto_order' => 'bool',
        'is_line_select' => 'bool',
        'date_sent' => '\DateTime',
        'effective_to' => '\DateTime',
        'effective_from' => '\DateTime',
        'initiator' => 'string',
        'products' => '\Advantage\Client\Model\PromotionProduct[]',
        'narratives' => '\Advantage\Client\Model\Narrative[]',
        'valid_cards' => '\Advantage\Client\Model\CreditCardPaymentMethod[]',
        'valid_direct_debits' => '\Advantage\Client\Model\DirectDebitPaymentMethod[]',
        'valid_digital_wallets' => '\Advantage\Client\Model\DigitalWalletPaymentMethod[]',
        'installment_billing_code' => 'string',
        'web_bill_me_allowed' => 'string',
        'creative_key' => '\Advantage\Client\Model\PromotionCreativeKey',
        'quantity_mailed' => 'int',
        'available_credits_valid' => 'bool',
        'credit_card_payments_valid' => 'bool',
        'checks_valid' => 'bool',
        'direct_debit_payments_valid' => 'bool',
        'digital_wallet_payments_valid' => 'bool',
        'gift_certificates_valid' => 'bool',
        'misc_credits_valid' => 'bool',
        'valid_country_codes' => 'string[]',
        'value_list' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'promotion_code' => null,
        'campaign_code' => null,
        'offer_code' => null,
        'name' => null,
        'name2' => null,
        'valid_until' => 'date-time',
        'url' => null,
        'image_url' => null,
        'is_active' => null,
        'is_auto_order' => null,
        'is_line_select' => null,
        'date_sent' => 'date-time',
        'effective_to' => 'date-time',
        'effective_from' => 'date-time',
        'initiator' => null,
        'products' => null,
        'narratives' => null,
        'valid_cards' => null,
        'valid_direct_debits' => null,
        'valid_digital_wallets' => null,
        'installment_billing_code' => null,
        'web_bill_me_allowed' => null,
        'creative_key' => null,
        'quantity_mailed' => 'int32',
        'available_credits_valid' => null,
        'credit_card_payments_valid' => null,
        'checks_valid' => null,
        'direct_debit_payments_valid' => null,
        'digital_wallet_payments_valid' => null,
        'gift_certificates_valid' => null,
        'misc_credits_valid' => null,
        'valid_country_codes' => null,
        'value_list' => null
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
        'promotion_code' => 'PromotionCode',
        'campaign_code' => 'CampaignCode',
        'offer_code' => 'OfferCode',
        'name' => 'Name',
        'name2' => 'Name2',
        'valid_until' => 'ValidUntil',
        'url' => 'Url',
        'image_url' => 'ImageUrl',
        'is_active' => 'IsActive',
        'is_auto_order' => 'IsAutoOrder',
        'is_line_select' => 'IsLineSelect',
        'date_sent' => 'DateSent',
        'effective_to' => 'EffectiveTo',
        'effective_from' => 'EffectiveFrom',
        'initiator' => 'Initiator',
        'products' => 'Products',
        'narratives' => 'Narratives',
        'valid_cards' => 'ValidCards',
        'valid_direct_debits' => 'ValidDirectDebits',
        'valid_digital_wallets' => 'ValidDigitalWallets',
        'installment_billing_code' => 'InstallmentBillingCode',
        'web_bill_me_allowed' => 'WebBillMeAllowed',
        'creative_key' => 'CreativeKey',
        'quantity_mailed' => 'QuantityMailed',
        'available_credits_valid' => 'AvailableCreditsValid',
        'credit_card_payments_valid' => 'CreditCardPaymentsValid',
        'checks_valid' => 'ChecksValid',
        'direct_debit_payments_valid' => 'DirectDebitPaymentsValid',
        'digital_wallet_payments_valid' => 'DigitalWalletPaymentsValid',
        'gift_certificates_valid' => 'GiftCertificatesValid',
        'misc_credits_valid' => 'MiscCreditsValid',
        'valid_country_codes' => 'ValidCountryCodes',
        'value_list' => 'ValueList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'promotion_code' => 'setPromotionCode',
        'campaign_code' => 'setCampaignCode',
        'offer_code' => 'setOfferCode',
        'name' => 'setName',
        'name2' => 'setName2',
        'valid_until' => 'setValidUntil',
        'url' => 'setUrl',
        'image_url' => 'setImageUrl',
        'is_active' => 'setIsActive',
        'is_auto_order' => 'setIsAutoOrder',
        'is_line_select' => 'setIsLineSelect',
        'date_sent' => 'setDateSent',
        'effective_to' => 'setEffectiveTo',
        'effective_from' => 'setEffectiveFrom',
        'initiator' => 'setInitiator',
        'products' => 'setProducts',
        'narratives' => 'setNarratives',
        'valid_cards' => 'setValidCards',
        'valid_direct_debits' => 'setValidDirectDebits',
        'valid_digital_wallets' => 'setValidDigitalWallets',
        'installment_billing_code' => 'setInstallmentBillingCode',
        'web_bill_me_allowed' => 'setWebBillMeAllowed',
        'creative_key' => 'setCreativeKey',
        'quantity_mailed' => 'setQuantityMailed',
        'available_credits_valid' => 'setAvailableCreditsValid',
        'credit_card_payments_valid' => 'setCreditCardPaymentsValid',
        'checks_valid' => 'setChecksValid',
        'direct_debit_payments_valid' => 'setDirectDebitPaymentsValid',
        'digital_wallet_payments_valid' => 'setDigitalWalletPaymentsValid',
        'gift_certificates_valid' => 'setGiftCertificatesValid',
        'misc_credits_valid' => 'setMiscCreditsValid',
        'valid_country_codes' => 'setValidCountryCodes',
        'value_list' => 'setValueList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'promotion_code' => 'getPromotionCode',
        'campaign_code' => 'getCampaignCode',
        'offer_code' => 'getOfferCode',
        'name' => 'getName',
        'name2' => 'getName2',
        'valid_until' => 'getValidUntil',
        'url' => 'getUrl',
        'image_url' => 'getImageUrl',
        'is_active' => 'getIsActive',
        'is_auto_order' => 'getIsAutoOrder',
        'is_line_select' => 'getIsLineSelect',
        'date_sent' => 'getDateSent',
        'effective_to' => 'getEffectiveTo',
        'effective_from' => 'getEffectiveFrom',
        'initiator' => 'getInitiator',
        'products' => 'getProducts',
        'narratives' => 'getNarratives',
        'valid_cards' => 'getValidCards',
        'valid_direct_debits' => 'getValidDirectDebits',
        'valid_digital_wallets' => 'getValidDigitalWallets',
        'installment_billing_code' => 'getInstallmentBillingCode',
        'web_bill_me_allowed' => 'getWebBillMeAllowed',
        'creative_key' => 'getCreativeKey',
        'quantity_mailed' => 'getQuantityMailed',
        'available_credits_valid' => 'getAvailableCreditsValid',
        'credit_card_payments_valid' => 'getCreditCardPaymentsValid',
        'checks_valid' => 'getChecksValid',
        'direct_debit_payments_valid' => 'getDirectDebitPaymentsValid',
        'digital_wallet_payments_valid' => 'getDigitalWalletPaymentsValid',
        'gift_certificates_valid' => 'getGiftCertificatesValid',
        'misc_credits_valid' => 'getMiscCreditsValid',
        'valid_country_codes' => 'getValidCountryCodes',
        'value_list' => 'getValueList'
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

    const WEB_BILL_ME_ALLOWED_YES = 'Yes';
    const WEB_BILL_ME_ALLOWED_NO = 'No';
    const WEB_BILL_ME_ALLOWED_ASSUMED = 'Assumed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebBillMeAllowedAllowableValues()
    {
        return [
            self::WEB_BILL_ME_ALLOWED_YES,
            self::WEB_BILL_ME_ALLOWED_NO,
            self::WEB_BILL_ME_ALLOWED_ASSUMED,
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
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['campaign_code'] = isset($data['campaign_code']) ? $data['campaign_code'] : null;
        $this->container['offer_code'] = isset($data['offer_code']) ? $data['offer_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name2'] = isset($data['name2']) ? $data['name2'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['is_auto_order'] = isset($data['is_auto_order']) ? $data['is_auto_order'] : null;
        $this->container['is_line_select'] = isset($data['is_line_select']) ? $data['is_line_select'] : null;
        $this->container['date_sent'] = isset($data['date_sent']) ? $data['date_sent'] : null;
        $this->container['effective_to'] = isset($data['effective_to']) ? $data['effective_to'] : null;
        $this->container['effective_from'] = isset($data['effective_from']) ? $data['effective_from'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['narratives'] = isset($data['narratives']) ? $data['narratives'] : null;
        $this->container['valid_cards'] = isset($data['valid_cards']) ? $data['valid_cards'] : null;
        $this->container['valid_direct_debits'] = isset($data['valid_direct_debits']) ? $data['valid_direct_debits'] : null;
        $this->container['valid_digital_wallets'] = isset($data['valid_digital_wallets']) ? $data['valid_digital_wallets'] : null;
        $this->container['installment_billing_code'] = isset($data['installment_billing_code']) ? $data['installment_billing_code'] : null;
        $this->container['web_bill_me_allowed'] = isset($data['web_bill_me_allowed']) ? $data['web_bill_me_allowed'] : null;
        $this->container['creative_key'] = isset($data['creative_key']) ? $data['creative_key'] : null;
        $this->container['quantity_mailed'] = isset($data['quantity_mailed']) ? $data['quantity_mailed'] : null;
        $this->container['available_credits_valid'] = isset($data['available_credits_valid']) ? $data['available_credits_valid'] : null;
        $this->container['credit_card_payments_valid'] = isset($data['credit_card_payments_valid']) ? $data['credit_card_payments_valid'] : null;
        $this->container['checks_valid'] = isset($data['checks_valid']) ? $data['checks_valid'] : null;
        $this->container['direct_debit_payments_valid'] = isset($data['direct_debit_payments_valid']) ? $data['direct_debit_payments_valid'] : null;
        $this->container['digital_wallet_payments_valid'] = isset($data['digital_wallet_payments_valid']) ? $data['digital_wallet_payments_valid'] : null;
        $this->container['gift_certificates_valid'] = isset($data['gift_certificates_valid']) ? $data['gift_certificates_valid'] : null;
        $this->container['misc_credits_valid'] = isset($data['misc_credits_valid']) ? $data['misc_credits_valid'] : null;
        $this->container['valid_country_codes'] = isset($data['valid_country_codes']) ? $data['valid_country_codes'] : null;
        $this->container['value_list'] = isset($data['value_list']) ? $data['value_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWebBillMeAllowedAllowableValues();
        if (!is_null($this->container['web_bill_me_allowed']) && !in_array($this->container['web_bill_me_allowed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'web_bill_me_allowed', must be one of '%s'",
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
     * Gets promotion_code
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->container['promotion_code'];
    }

    /**
     * Sets promotion_code
     *
     * @param string $promotion_code The code identifying the promotion.
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets campaign_code
     *
     * @return string
     */
    public function getCampaignCode()
    {
        return $this->container['campaign_code'];
    }

    /**
     * Sets campaign_code
     *
     * @param string $campaign_code The campaign code to identify the highest level of marketing and promotion tracking.
     *
     * @return $this
     */
    public function setCampaignCode($campaign_code)
    {
        $this->container['campaign_code'] = $campaign_code;

        return $this;
    }

    /**
     * Gets offer_code
     *
     * @return string
     */
    public function getOfferCode()
    {
        return $this->container['offer_code'];
    }

    /**
     * Sets offer_code
     *
     * @param string $offer_code The offer code to identify the promotion offer, which handles setup and defaulting for the promotion.
     *
     * @return $this
     */
    public function setOfferCode($offer_code)
    {
        $this->container['offer_code'] = $offer_code;

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
     * @param string $name The name of the promotion.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string $name2 The second name of the promotion.
     *
     * @return $this
     */
    public function setName2($name2)
    {
        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime $valid_until The date that the promotion expires.
     *
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The URL for the promotion landing page.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url The URL for the image associated with the promotion.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Is this an active promotion?
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_auto_order
     *
     * @return bool
     */
    public function getIsAutoOrder()
    {
        return $this->container['is_auto_order'];
    }

    /**
     * Sets is_auto_order
     *
     * @param bool $is_auto_order Does this promotion allow for automatic generation of orders?   If so, an order will be automatically generated with order lines for each promotional item on the promotion.
     *
     * @return $this
     */
    public function setIsAutoOrder($is_auto_order)
    {
        $this->container['is_auto_order'] = $is_auto_order;

        return $this;
    }

    /**
     * Gets is_line_select
     *
     * @return bool
     */
    public function getIsLineSelect()
    {
        return $this->container['is_line_select'];
    }

    /**
     * Sets is_line_select
     *
     * @param bool $is_line_select Is this a line select promotion? If so, the user selects the promotional items to receive.
     *
     * @return $this
     */
    public function setIsLineSelect($is_line_select)
    {
        $this->container['is_line_select'] = $is_line_select;

        return $this;
    }

    /**
     * Gets date_sent
     *
     * @return \DateTime
     */
    public function getDateSent()
    {
        return $this->container['date_sent'];
    }

    /**
     * Sets date_sent
     *
     * @param \DateTime $date_sent The date the promotion was sent to consumers.
     *
     * @return $this
     */
    public function setDateSent($date_sent)
    {
        $this->container['date_sent'] = $date_sent;

        return $this;
    }

    /**
     * Gets effective_to
     *
     * @return \DateTime
     */
    public function getEffectiveTo()
    {
        return $this->container['effective_to'];
    }

    /**
     * Sets effective_to
     *
     * @param \DateTime $effective_to Date, up to which, the promotion is valid.
     *
     * @return $this
     */
    public function setEffectiveTo($effective_to)
    {
        $this->container['effective_to'] = $effective_to;

        return $this;
    }

    /**
     * Gets effective_from
     *
     * @return \DateTime
     */
    public function getEffectiveFrom()
    {
        return $this->container['effective_from'];
    }

    /**
     * Sets effective_from
     *
     * @param \DateTime $effective_from Date, from which, the promotion is valid.
     *
     * @return $this
     */
    public function setEffectiveFrom($effective_from)
    {
        $this->container['effective_from'] = $effective_from;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return string
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param string $initiator The initiator of the promotion.
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Advantage\Client\Model\PromotionProduct[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Advantage\Client\Model\PromotionProduct[] $products Products that are included on the promotion with promotion-specific choices.
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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
     * @param \Advantage\Client\Model\Narrative[] $narratives Promotion narratives are text blocks describing the promotion.
     *
     * @return $this
     */
    public function setNarratives($narratives)
    {
        $this->container['narratives'] = $narratives;

        return $this;
    }

    /**
     * Gets valid_cards
     *
     * @return \Advantage\Client\Model\CreditCardPaymentMethod[]
     */
    public function getValidCards()
    {
        return $this->container['valid_cards'];
    }

    /**
     * Sets valid_cards
     *
     * @param \Advantage\Client\Model\CreditCardPaymentMethod[] $valid_cards Valid credit card payment methods.
     *
     * @return $this
     */
    public function setValidCards($valid_cards)
    {
        $this->container['valid_cards'] = $valid_cards;

        return $this;
    }

    /**
     * Gets valid_direct_debits
     *
     * @return \Advantage\Client\Model\DirectDebitPaymentMethod[]
     */
    public function getValidDirectDebits()
    {
        return $this->container['valid_direct_debits'];
    }

    /**
     * Sets valid_direct_debits
     *
     * @param \Advantage\Client\Model\DirectDebitPaymentMethod[] $valid_direct_debits Valid direct debit payment methods.
     *
     * @return $this
     */
    public function setValidDirectDebits($valid_direct_debits)
    {
        $this->container['valid_direct_debits'] = $valid_direct_debits;

        return $this;
    }

    /**
     * Gets valid_digital_wallets
     *
     * @return \Advantage\Client\Model\DigitalWalletPaymentMethod[]
     */
    public function getValidDigitalWallets()
    {
        return $this->container['valid_digital_wallets'];
    }

    /**
     * Sets valid_digital_wallets
     *
     * @param \Advantage\Client\Model\DigitalWalletPaymentMethod[] $valid_digital_wallets Valid digital wallet payment methods
     *
     * @return $this
     */
    public function setValidDigitalWallets($valid_digital_wallets)
    {
        $this->container['valid_digital_wallets'] = $valid_digital_wallets;

        return $this;
    }

    /**
     * Gets installment_billing_code
     *
     * @return string
     */
    public function getInstallmentBillingCode()
    {
        return $this->container['installment_billing_code'];
    }

    /**
     * Sets installment_billing_code
     *
     * @param string $installment_billing_code Installment Billing Code on the promotion if any
     *
     * @return $this
     */
    public function setInstallmentBillingCode($installment_billing_code)
    {
        $this->container['installment_billing_code'] = $installment_billing_code;

        return $this;
    }

    /**
     * Gets web_bill_me_allowed
     *
     * @return string
     */
    public function getWebBillMeAllowed()
    {
        return $this->container['web_bill_me_allowed'];
    }

    /**
     * Sets web_bill_me_allowed
     *
     * @param string $web_bill_me_allowed Web bill-me status of the promotion
     *
     * @return $this
     */
    public function setWebBillMeAllowed($web_bill_me_allowed)
    {
        $allowedValues = $this->getWebBillMeAllowedAllowableValues();
        if (!is_null($web_bill_me_allowed) && !in_array($web_bill_me_allowed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'web_bill_me_allowed', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['web_bill_me_allowed'] = $web_bill_me_allowed;

        return $this;
    }

    /**
     * Gets creative_key
     *
     * @return \Advantage\Client\Model\PromotionCreativeKey
     */
    public function getCreativeKey()
    {
        return $this->container['creative_key'];
    }

    /**
     * Sets creative_key
     *
     * @param \Advantage\Client\Model\PromotionCreativeKey $creative_key Information to uniquely identify the promotion creative associated with this promotion
     *
     * @return $this
     */
    public function setCreativeKey($creative_key)
    {
        $this->container['creative_key'] = $creative_key;

        return $this;
    }

    /**
     * Gets quantity_mailed
     *
     * @return int
     */
    public function getQuantityMailed()
    {
        return $this->container['quantity_mailed'];
    }

    /**
     * Sets quantity_mailed
     *
     * @param int $quantity_mailed Quantity mailed from the promotion
     *
     * @return $this
     */
    public function setQuantityMailed($quantity_mailed)
    {
        $this->container['quantity_mailed'] = $quantity_mailed;

        return $this;
    }

    /**
     * Gets available_credits_valid
     *
     * @return bool
     */
    public function getAvailableCreditsValid()
    {
        return $this->container['available_credits_valid'];
    }

    /**
     * Sets available_credits_valid
     *
     * @param bool $available_credits_valid Are available credits valid for this promotion?
     *
     * @return $this
     */
    public function setAvailableCreditsValid($available_credits_valid)
    {
        $this->container['available_credits_valid'] = $available_credits_valid;

        return $this;
    }

    /**
     * Gets credit_card_payments_valid
     *
     * @return bool
     */
    public function getCreditCardPaymentsValid()
    {
        return $this->container['credit_card_payments_valid'];
    }

    /**
     * Sets credit_card_payments_valid
     *
     * @param bool $credit_card_payments_valid Are credit card payments valid for this promotion?
     *
     * @return $this
     */
    public function setCreditCardPaymentsValid($credit_card_payments_valid)
    {
        $this->container['credit_card_payments_valid'] = $credit_card_payments_valid;

        return $this;
    }

    /**
     * Gets checks_valid
     *
     * @return bool
     */
    public function getChecksValid()
    {
        return $this->container['checks_valid'];
    }

    /**
     * Sets checks_valid
     *
     * @param bool $checks_valid Are check payments valid for this promotion?
     *
     * @return $this
     */
    public function setChecksValid($checks_valid)
    {
        $this->container['checks_valid'] = $checks_valid;

        return $this;
    }

    /**
     * Gets direct_debit_payments_valid
     *
     * @return bool
     */
    public function getDirectDebitPaymentsValid()
    {
        return $this->container['direct_debit_payments_valid'];
    }

    /**
     * Sets direct_debit_payments_valid
     *
     * @param bool $direct_debit_payments_valid Are direct debit payments valid for this promotion?
     *
     * @return $this
     */
    public function setDirectDebitPaymentsValid($direct_debit_payments_valid)
    {
        $this->container['direct_debit_payments_valid'] = $direct_debit_payments_valid;

        return $this;
    }

    /**
     * Gets digital_wallet_payments_valid
     *
     * @return bool
     */
    public function getDigitalWalletPaymentsValid()
    {
        return $this->container['digital_wallet_payments_valid'];
    }

    /**
     * Sets digital_wallet_payments_valid
     *
     * @param bool $digital_wallet_payments_valid Are digital wallet payments valid for this promotion?
     *
     * @return $this
     */
    public function setDigitalWalletPaymentsValid($digital_wallet_payments_valid)
    {
        $this->container['digital_wallet_payments_valid'] = $digital_wallet_payments_valid;

        return $this;
    }

    /**
     * Gets gift_certificates_valid
     *
     * @return bool
     */
    public function getGiftCertificatesValid()
    {
        return $this->container['gift_certificates_valid'];
    }

    /**
     * Sets gift_certificates_valid
     *
     * @param bool $gift_certificates_valid Are gift certificate payments valid for this promotion?
     *
     * @return $this
     */
    public function setGiftCertificatesValid($gift_certificates_valid)
    {
        $this->container['gift_certificates_valid'] = $gift_certificates_valid;

        return $this;
    }

    /**
     * Gets misc_credits_valid
     *
     * @return bool
     */
    public function getMiscCreditsValid()
    {
        return $this->container['misc_credits_valid'];
    }

    /**
     * Sets misc_credits_valid
     *
     * @param bool $misc_credits_valid Are misc credit payments valid for this promotion?
     *
     * @return $this
     */
    public function setMiscCreditsValid($misc_credits_valid)
    {
        $this->container['misc_credits_valid'] = $misc_credits_valid;

        return $this;
    }

    /**
     * Gets valid_country_codes
     *
     * @return string[]
     */
    public function getValidCountryCodes()
    {
        return $this->container['valid_country_codes'];
    }

    /**
     * Sets valid_country_codes
     *
     * @param string[] $valid_country_codes A list of Advantage country codes representing  the countries a ship to address can have to be   applicable for this promotion.  If empty, then all countries are valid.
     *
     * @return $this
     */
    public function setValidCountryCodes($valid_country_codes)
    {
        $this->container['valid_country_codes'] = $valid_country_codes;

        return $this;
    }

    /**
     * Gets value_list
     *
     * @return bool
     */
    public function getValueList()
    {
        return $this->container['value_list'];
    }

    /**
     * Sets value_list
     *
     * @param bool $value_list Determines if value will be displayed in value list for  promotion items
     *
     * @return $this
     */
    public function setValueList($value_list)
    {
        $this->container['value_list'] = $value_list;

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


