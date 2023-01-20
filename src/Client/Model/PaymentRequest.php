<?php
/**
 * PaymentRequest
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
 * PaymentRequest Class Doc Comment
 *
 * @category Class
 * @description Information for a payment.
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_credit' => '\Advantage\Client\Model\AvailableCreditPaymentRequest',
        'credit_cards' => '\Advantage\Client\Model\CreditCardPaymentRequest[]',
        'bank_accounts' => '\Advantage\Client\Model\DirectDebitPaymentRequest[]',
        'checks' => '\Advantage\Client\Model\CheckPaymentRequest[]',
        'digital_wallets' => '\Advantage\Client\Model\DigitalWalletPaymentRequest[]',
        'gift_certificates' => '\Advantage\Client\Model\GiftCertificatePaymentRequest[]',
        'installment_billing_code' => 'string',
        'installment_billing' => '\Advantage\Client\Model\InstallmentBillingPaymentRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_credit' => null,
        'credit_cards' => null,
        'bank_accounts' => null,
        'checks' => null,
        'digital_wallets' => null,
        'gift_certificates' => null,
        'installment_billing_code' => null,
        'installment_billing' => null
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
        'account_credit' => 'AccountCredit',
        'credit_cards' => 'CreditCards',
        'bank_accounts' => 'BankAccounts',
        'checks' => 'Checks',
        'digital_wallets' => 'DigitalWallets',
        'gift_certificates' => 'GiftCertificates',
        'installment_billing_code' => 'InstallmentBillingCode',
        'installment_billing' => 'InstallmentBilling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_credit' => 'setAccountCredit',
        'credit_cards' => 'setCreditCards',
        'bank_accounts' => 'setBankAccounts',
        'checks' => 'setChecks',
        'digital_wallets' => 'setDigitalWallets',
        'gift_certificates' => 'setGiftCertificates',
        'installment_billing_code' => 'setInstallmentBillingCode',
        'installment_billing' => 'setInstallmentBilling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_credit' => 'getAccountCredit',
        'credit_cards' => 'getCreditCards',
        'bank_accounts' => 'getBankAccounts',
        'checks' => 'getChecks',
        'digital_wallets' => 'getDigitalWallets',
        'gift_certificates' => 'getGiftCertificates',
        'installment_billing_code' => 'getInstallmentBillingCode',
        'installment_billing' => 'getInstallmentBilling'
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
        $this->container['account_credit'] = isset($data['account_credit']) ? $data['account_credit'] : null;
        $this->container['credit_cards'] = isset($data['credit_cards']) ? $data['credit_cards'] : null;
        $this->container['bank_accounts'] = isset($data['bank_accounts']) ? $data['bank_accounts'] : null;
        $this->container['checks'] = isset($data['checks']) ? $data['checks'] : null;
        $this->container['digital_wallets'] = isset($data['digital_wallets']) ? $data['digital_wallets'] : null;
        $this->container['gift_certificates'] = isset($data['gift_certificates']) ? $data['gift_certificates'] : null;
        $this->container['installment_billing_code'] = isset($data['installment_billing_code']) ? $data['installment_billing_code'] : null;
        $this->container['installment_billing'] = isset($data['installment_billing']) ? $data['installment_billing'] : null;
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
     * Gets account_credit
     *
     * @return \Advantage\Client\Model\AvailableCreditPaymentRequest
     */
    public function getAccountCredit()
    {
        return $this->container['account_credit'];
    }

    /**
     * Sets account_credit
     *
     * @param \Advantage\Client\Model\AvailableCreditPaymentRequest $account_credit Use the AccountCredit property to control the application of available credits for   the customer.  Leave AccountCredit null to skip the application of available credits.
     *
     * @return $this
     */
    public function setAccountCredit($account_credit)
    {
        $this->container['account_credit'] = $account_credit;

        return $this;
    }

    /**
     * Gets credit_cards
     *
     * @return \Advantage\Client\Model\CreditCardPaymentRequest[]
     */
    public function getCreditCards()
    {
        return $this->container['credit_cards'];
    }

    /**
     * Sets credit_cards
     *
     * @param \Advantage\Client\Model\CreditCardPaymentRequest[] $credit_cards Information for a credit card payment.
     *
     * @return $this
     */
    public function setCreditCards($credit_cards)
    {
        $this->container['credit_cards'] = $credit_cards;

        return $this;
    }

    /**
     * Gets bank_accounts
     *
     * @return \Advantage\Client\Model\DirectDebitPaymentRequest[]
     */
    public function getBankAccounts()
    {
        return $this->container['bank_accounts'];
    }

    /**
     * Sets bank_accounts
     *
     * @param \Advantage\Client\Model\DirectDebitPaymentRequest[] $bank_accounts Information for a direct debit payment.
     *
     * @return $this
     */
    public function setBankAccounts($bank_accounts)
    {
        $this->container['bank_accounts'] = $bank_accounts;

        return $this;
    }

    /**
     * Gets checks
     *
     * @return \Advantage\Client\Model\CheckPaymentRequest[]
     */
    public function getChecks()
    {
        return $this->container['checks'];
    }

    /**
     * Sets checks
     *
     * @param \Advantage\Client\Model\CheckPaymentRequest[] $checks Information for a check payment.
     *
     * @return $this
     */
    public function setChecks($checks)
    {
        $this->container['checks'] = $checks;

        return $this;
    }

    /**
     * Gets digital_wallets
     *
     * @return \Advantage\Client\Model\DigitalWalletPaymentRequest[]
     */
    public function getDigitalWallets()
    {
        return $this->container['digital_wallets'];
    }

    /**
     * Sets digital_wallets
     *
     * @param \Advantage\Client\Model\DigitalWalletPaymentRequest[] $digital_wallets Information for a digital wallet payment.
     *
     * @return $this
     */
    public function setDigitalWallets($digital_wallets)
    {
        $this->container['digital_wallets'] = $digital_wallets;

        return $this;
    }

    /**
     * Gets gift_certificates
     *
     * @return \Advantage\Client\Model\GiftCertificatePaymentRequest[]
     */
    public function getGiftCertificates()
    {
        return $this->container['gift_certificates'];
    }

    /**
     * Sets gift_certificates
     *
     * @param \Advantage\Client\Model\GiftCertificatePaymentRequest[] $gift_certificates Information for a gift certificate payment.
     *
     * @return $this
     */
    public function setGiftCertificates($gift_certificates)
    {
        $this->container['gift_certificates'] = $gift_certificates;

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
     * @param string $installment_billing_code Code identifying installment billing terms
     *
     * @return $this
     */
    public function setInstallmentBillingCode($installment_billing_code)
    {
        $this->container['installment_billing_code'] = $installment_billing_code;

        return $this;
    }

    /**
     * Gets installment_billing
     *
     * @return \Advantage\Client\Model\InstallmentBillingPaymentRequest
     */
    public function getInstallmentBilling()
    {
        return $this->container['installment_billing'];
    }

    /**
     * Sets installment_billing
     *
     * @param \Advantage\Client\Model\InstallmentBillingPaymentRequest $installment_billing Installment Billing Information
     *
     * @return $this
     */
    public function setInstallmentBilling($installment_billing)
    {
        $this->container['installment_billing'] = $installment_billing;

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


