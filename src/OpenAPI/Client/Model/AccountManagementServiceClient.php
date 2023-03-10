<?php
/**
 * AccountManagementServiceClient
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 検索広告 API リファレンス / Yahoo! JAPAN Ads Search Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 検索広告 APIのWebサービスについて説明します。</div> <div lang=\"en\">Search Ads API Web Services supported in Yahoo! JAPAN Ads API.</div> <div><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/design/v9/Route.yaml\">OpenAPI Specification</a></div> <div lang=\"ja\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/bestpractice/ja\">Best Practice</a></div> <div lang=\"en\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/bestpractice/en\">Best Practice</a></div>
 *
 * The version of the OpenAPI document: v9
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AccountManagementServiceClient Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AccountManagementServiceClientオブジェクトは、広告主情報を表します。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AccountManagementServiceClient object describes the client information.&lt;br&gt; This field is required in ADD operation, and will be ignored in SET operation.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountManagementServiceClient implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountManagementServiceClient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'building' => 'string',
        'city' => 'string',
        'client_person_name' => 'string',
        'company_name' => 'string',
        'company_name_kana' => 'string',
        'corporate_number' => 'int',
        'enterprise_type' => '\OpenAPI\Client\Model\AccountManagementServiceEnterpriseType',
        'enterprise_type_position' => '\OpenAPI\Client\Model\AccountManagementServiceEnterpriseTypePosition',
        'phone_number' => 'string',
        'prefecture_code' => '\OpenAPI\Client\Model\AccountManagementServicePrefectureCode',
        'street1' => 'string',
        'street2' => 'string',
        'url' => 'string',
        'url_type' => '\OpenAPI\Client\Model\AccountManagementServiceUrlType',
        'zip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'building' => null,
        'city' => null,
        'client_person_name' => null,
        'company_name' => null,
        'company_name_kana' => null,
        'corporate_number' => 'int64',
        'enterprise_type' => null,
        'enterprise_type_position' => null,
        'phone_number' => null,
        'prefecture_code' => null,
        'street1' => null,
        'street2' => null,
        'url' => null,
        'url_type' => null,
        'zip' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'building' => true,
		'city' => true,
		'client_person_name' => true,
		'company_name' => true,
		'company_name_kana' => true,
		'corporate_number' => true,
		'enterprise_type' => true,
		'enterprise_type_position' => true,
		'phone_number' => true,
		'prefecture_code' => true,
		'street1' => true,
		'street2' => true,
		'url' => true,
		'url_type' => true,
		'zip' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'building' => 'building',
        'city' => 'city',
        'client_person_name' => 'clientPersonName',
        'company_name' => 'companyName',
        'company_name_kana' => 'companyNameKana',
        'corporate_number' => 'corporateNumber',
        'enterprise_type' => 'enterpriseType',
        'enterprise_type_position' => 'enterpriseTypePosition',
        'phone_number' => 'phoneNumber',
        'prefecture_code' => 'prefectureCode',
        'street1' => 'street1',
        'street2' => 'street2',
        'url' => 'url',
        'url_type' => 'urlType',
        'zip' => 'zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'building' => 'setBuilding',
        'city' => 'setCity',
        'client_person_name' => 'setClientPersonName',
        'company_name' => 'setCompanyName',
        'company_name_kana' => 'setCompanyNameKana',
        'corporate_number' => 'setCorporateNumber',
        'enterprise_type' => 'setEnterpriseType',
        'enterprise_type_position' => 'setEnterpriseTypePosition',
        'phone_number' => 'setPhoneNumber',
        'prefecture_code' => 'setPrefectureCode',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'url' => 'setUrl',
        'url_type' => 'setUrlType',
        'zip' => 'setZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'building' => 'getBuilding',
        'city' => 'getCity',
        'client_person_name' => 'getClientPersonName',
        'company_name' => 'getCompanyName',
        'company_name_kana' => 'getCompanyNameKana',
        'corporate_number' => 'getCorporateNumber',
        'enterprise_type' => 'getEnterpriseType',
        'enterprise_type_position' => 'getEnterpriseTypePosition',
        'phone_number' => 'getPhoneNumber',
        'prefecture_code' => 'getPrefectureCode',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'url' => 'getUrl',
        'url_type' => 'getUrlType',
        'zip' => 'getZip'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('building', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('client_person_name', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('company_name_kana', $data ?? [], null);
        $this->setIfExists('corporate_number', $data ?? [], null);
        $this->setIfExists('enterprise_type', $data ?? [], null);
        $this->setIfExists('enterprise_type_position', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('prefecture_code', $data ?? [], null);
        $this->setIfExists('street1', $data ?? [], null);
        $this->setIfExists('street2', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('url_type', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['phone_number']) && !preg_match("/^\\d{1,5}-\\d{1,5}-\\d{1,5}$/", $this->container['phone_number'])) {
            $invalidProperties[] = "invalid value for 'phone_number', must be conform to the pattern /^\\d{1,5}-\\d{1,5}-\\d{1,5}$/.";
        }

        if (!is_null($this->container['zip']) && !preg_match("/^\\d{3}-\\d{4}$/", $this->container['zip'])) {
            $invalidProperties[] = "invalid value for 'zip', must be conform to the pattern /^\\d{3}-\\d{4}$/.";
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
     * Gets building
     *
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->container['building'];
    }

    /**
     * Sets building
     *
     * @param string|null $building <div lang=\"ja\">ビル名です。<br>このフィールドは、ADD時に省略可能となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。<br> ※このフィールドは、レスポンスの際に返却されません。</div> <div lang=\"en\">Building name.<br>This field is optional in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.<br> * This field is not returned in the response.</div>
     *
     * @return self
     */
    public function setBuilding($building)
    {

        if (is_null($building)) {
            array_push($this->openAPINullablesSetToNull, 'building');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('building', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['building'] = $building;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city <div lang=\"ja\">市区町村名です。<br>このフィールドは、ADD時に必須となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。<br> ※このフィールドは、レスポンスの際に返却されません。</div> <div lang=\"en\">City name.<br>This field is required in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.<br> * This field is not returned in the response.</div>
     *
     * @return self
     */
    public function setCity($city)
    {

        if (is_null($city)) {
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets client_person_name
     *
     * @return string|null
     */
    public function getClientPersonName()
    {
        return $this->container['client_person_name'];
    }

    /**
     * Sets client_person_name
     *
     * @param string|null $client_person_name <div lang=\"ja\">広告主の担当者氏名です。<br> このフィールドは、ADD時に省略可能となり、SET時に無視されます。</div> <div lang=\"en\">Client person name.<br> This field is optional in ADD operation, and will be ignored in SET operation.</div>
     *
     * @return self
     */
    public function setClientPersonName($client_person_name)
    {

        if (is_null($client_person_name)) {
            array_push($this->openAPINullablesSetToNull, 'client_person_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('client_person_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['client_person_name'] = $client_person_name;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name <div lang=\"ja\">広告主名です。<br>このフィールドは、ADD時に必須となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。</div> <div lang=\"en\">Company name.<br>This field is required in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.</div>
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {

        if (is_null($company_name)) {
            array_push($this->openAPINullablesSetToNull, 'company_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_name_kana
     *
     * @return string|null
     */
    public function getCompanyNameKana()
    {
        return $this->container['company_name_kana'];
    }

    /**
     * Sets company_name_kana
     *
     * @param string|null $company_name_kana <div lang=\"ja\">広告主名カナです。<br> このフィールドは、ADD時に必須となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。</div> <div lang=\"en\">Kana characters of company name.<br> This field is required in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.</div>
     *
     * @return self
     */
    public function setCompanyNameKana($company_name_kana)
    {

        if (is_null($company_name_kana)) {
            array_push($this->openAPINullablesSetToNull, 'company_name_kana');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_name_kana', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['company_name_kana'] = $company_name_kana;

        return $this;
    }

    /**
     * Gets corporate_number
     *
     * @return int|null
     */
    public function getCorporateNumber()
    {
        return $this->container['corporate_number'];
    }

    /**
     * Sets corporate_number
     *
     * @param int|null $corporate_number <div lang=\"ja\"> 法人番号です。<br> このフィールドは、ADD時に省略可能となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。<br> ※enterpriseTypeがKOJINの場合は、ADD時、SET時ともに無視されます。<br> ※このフィールドは、レスポンスの際に返却されません。 </div> <div lang=\"en\"> Corporate number.<br> This field is optional in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.<br> * When enterpriseType is \"KOJIN\", this field will be ignored in ADD and SET operations.<br> * This field is not returned in the response. </div>
     *
     * @return self
     */
    public function setCorporateNumber($corporate_number)
    {

        if (is_null($corporate_number)) {
            array_push($this->openAPINullablesSetToNull, 'corporate_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('corporate_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['corporate_number'] = $corporate_number;

        return $this;
    }

    /**
     * Gets enterprise_type
     *
     * @return \OpenAPI\Client\Model\AccountManagementServiceEnterpriseType|null
     */
    public function getEnterpriseType()
    {
        return $this->container['enterprise_type'];
    }

    /**
     * Sets enterprise_type
     *
     * @param \OpenAPI\Client\Model\AccountManagementServiceEnterpriseType|null $enterprise_type enterprise_type
     *
     * @return self
     */
    public function setEnterpriseType($enterprise_type)
    {

        if (is_null($enterprise_type)) {
            array_push($this->openAPINullablesSetToNull, 'enterprise_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enterprise_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['enterprise_type'] = $enterprise_type;

        return $this;
    }

    /**
     * Gets enterprise_type_position
     *
     * @return \OpenAPI\Client\Model\AccountManagementServiceEnterpriseTypePosition|null
     */
    public function getEnterpriseTypePosition()
    {
        return $this->container['enterprise_type_position'];
    }

    /**
     * Sets enterprise_type_position
     *
     * @param \OpenAPI\Client\Model\AccountManagementServiceEnterpriseTypePosition|null $enterprise_type_position enterprise_type_position
     *
     * @return self
     */
    public function setEnterpriseTypePosition($enterprise_type_position)
    {

        if (is_null($enterprise_type_position)) {
            array_push($this->openAPINullablesSetToNull, 'enterprise_type_position');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enterprise_type_position', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['enterprise_type_position'] = $enterprise_type_position;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number <div lang=\"ja\">電話番号です。<br> ※xxxxx-xxxxx-xxxxx形式です。<br> このフィールドは、ADD時に必須となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。<br> ※このフィールドは、レスポンスの際に返却されません。</div> <div lang=\"en\">Phone number.<br> * In xxxxx-xxxxx-xxxxx format.<br> This field is required in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.<br> * This field is not returned in the response.</div>
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {

        if (!is_null($phone_number) && (!preg_match("/^\\d{1,5}-\\d{1,5}-\\d{1,5}$/", $phone_number))) {
            throw new \InvalidArgumentException("invalid value for \$phone_number when calling AccountManagementServiceClient., must conform to the pattern /^\\d{1,5}-\\d{1,5}-\\d{1,5}$/.");
        }


        if (is_null($phone_number)) {
            array_push($this->openAPINullablesSetToNull, 'phone_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets prefecture_code
     *
     * @return \OpenAPI\Client\Model\AccountManagementServicePrefectureCode|null
     */
    public function getPrefectureCode()
    {
        return $this->container['prefecture_code'];
    }

    /**
     * Sets prefecture_code
     *
     * @param \OpenAPI\Client\Model\AccountManagementServicePrefectureCode|null $prefecture_code prefecture_code
     *
     * @return self
     */
    public function setPrefectureCode($prefecture_code)
    {

        if (is_null($prefecture_code)) {
            array_push($this->openAPINullablesSetToNull, 'prefecture_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prefecture_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['prefecture_code'] = $prefecture_code;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string|null
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string|null $street1 <div lang=\"ja\">町・字名です。<br> このフィールドは、ADD時に必須となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。<br> ※このフィールドは、レスポンスの際に返却されません。</div> <div lang=\"en\">Street1.<br> This field is required in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.<br> * This field is not returned in the response.</div>
     *
     * @return self
     */
    public function setStreet1($street1)
    {

        if (is_null($street1)) {
            array_push($this->openAPINullablesSetToNull, 'street1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string|null $street2 <div lang=\"ja\">丁目・番地・号です。<br> このフィールドは、ADD時に必須となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。<br> ※このフィールドは、レスポンスの際に返却されません。</div> <div lang=\"en\">Street2.<br> This field is required in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.<br> * This field is not returned in the response.</div>
     *
     * @return self
     */
    public function setStreet2($street2)
    {

        if (is_null($street2)) {
            array_push($this->openAPINullablesSetToNull, 'street2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url <div lang=\"ja\">広告掲載を希望するサイトのURLです。<br> このフィールドは、ADD時に必須となり、SET時に無視されます。</div> <div lang=\"en\">Site URL for placing advertisement.<br> This field is required in ADD operation, and will be ignored in SET operation.</div>
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets url_type
     *
     * @return \OpenAPI\Client\Model\AccountManagementServiceUrlType|null
     */
    public function getUrlType()
    {
        return $this->container['url_type'];
    }

    /**
     * Sets url_type
     *
     * @param \OpenAPI\Client\Model\AccountManagementServiceUrlType|null $url_type url_type
     *
     * @return self
     */
    public function setUrlType($url_type)
    {

        if (is_null($url_type)) {
            array_push($this->openAPINullablesSetToNull, 'url_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['url_type'] = $url_type;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip <div lang=\"ja\">郵便番号です。<br> ※xxx-xxxx形式です。<br> このフィールドは、ADD時に必須となり、SET時に無視されます。<br> ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。<br> ※このフィールドは、レスポンスの際に返却されません。</div> <div lang=\"en\">Zip code.<br> * In xxx-xxxx format.<br> This field is required in ADD operation, and will be ignored in SET operation.<br> * When clientType is \"SELF\", this field will be ignored in ADD and SET operations.<br> * This field is not returned in the response.</div>
     *
     * @return self
     */
    public function setZip($zip)
    {

        if (!is_null($zip) && (!preg_match("/^\\d{3}-\\d{4}$/", $zip))) {
            throw new \InvalidArgumentException("invalid value for \$zip when calling AccountManagementServiceClient., must conform to the pattern /^\\d{3}-\\d{4}$/.");
        }


        if (is_null($zip)) {
            array_push($this->openAPINullablesSetToNull, 'zip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['zip'] = $zip;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


