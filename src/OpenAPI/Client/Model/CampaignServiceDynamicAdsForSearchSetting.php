<?php
/**
 * CampaignServiceDynamicAdsForSearchSetting
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
 * CampaignServiceDynamicAdsForSearchSetting Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   CampaignServiceDynamicAdsForSearchSettingは、動的検索連動型広告に関する検索条件を表します。&lt;br&gt;   ADD時、settingTypeがDYNAMIC_ADS_FOR_SEARCH_SETTINGの場合、必須となり、それ以外では省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   CampaignServiceDynamicAdsForSearchSetting displays search condition for Dynamic ads for search.&lt;br&gt;   This field is optional. However, in ADD operation, this field is required only when settingType is &#39;DYNAMIC_ADS_FOR_SEARCH_SETTING&#39;, and it is optional when settingType is the others. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignServiceDynamicAdsForSearchSetting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignServiceDynamicAdsForSearchSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feed_ids' => 'int[]',
        'page_feed_asset_set_ids' => 'int[]',
        'domain' => 'string',
        'das_use_urls_type' => '\OpenAPI\Client\Model\CampaignServiceDasUseUrlsType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feed_ids' => 'int64',
        'page_feed_asset_set_ids' => 'int64',
        'domain' => null,
        'das_use_urls_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feed_ids' => true,
		'page_feed_asset_set_ids' => true,
		'domain' => true,
		'das_use_urls_type' => true
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
        'feed_ids' => 'feedIds',
        'page_feed_asset_set_ids' => 'pageFeedAssetSetIds',
        'domain' => 'domain',
        'das_use_urls_type' => 'dasUseUrlsType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_ids' => 'setFeedIds',
        'page_feed_asset_set_ids' => 'setPageFeedAssetSetIds',
        'domain' => 'setDomain',
        'das_use_urls_type' => 'setDasUseUrlsType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_ids' => 'getFeedIds',
        'page_feed_asset_set_ids' => 'getPageFeedAssetSetIds',
        'domain' => 'getDomain',
        'das_use_urls_type' => 'getDasUseUrlsType'
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
        $this->setIfExists('feed_ids', $data ?? [], null);
        $this->setIfExists('page_feed_asset_set_ids', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('das_use_urls_type', $data ?? [], null);
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
     * Gets feed_ids
     *
     * @return int[]|null
     */
    public function getFeedIds()
    {
        return $this->container['feed_ids'];
    }

    /**
     * Sets feed_ids
     *
     * @param int[]|null $feed_ids <div lang=\"ja\">   キャンペーンで使用するページフィードIDです。<br>   ※現在このフィールドは参照のみ可能です。ページフィードを設定する場合は、pageFeedAssetSetIdsをご利用ください。 </div> <div lang=\"en\">   Page Feed ID for campaign.<br>   *Currently, this field is read-only. To set up page feeds, please use pageFeedAssetSetIds. </div>
     *
     * @return self
     */
    public function setFeedIds($feed_ids)
    {

        if (is_null($feed_ids)) {
            array_push($this->openAPINullablesSetToNull, 'feed_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feed_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['feed_ids'] = $feed_ids;

        return $this;
    }

    /**
     * Gets page_feed_asset_set_ids
     *
     * @return int[]|null
     */
    public function getPageFeedAssetSetIds()
    {
        return $this->container['page_feed_asset_set_ids'];
    }

    /**
     * Sets page_feed_asset_set_ids
     *
     * @param int[]|null $page_feed_asset_set_ids <div lang=\"ja\">   キャンペーンで使用するページフィードアセットセットIDです。<br>   ADD時およびSET時、DasUseUrlsTypeがUSE_SUPPLIED_URLS_ONLYまたはDOMAIN_AND_SUPPLIED_URLSの場合、このフィールドは必須となります。 </div> <div lang=\"en\">   PageFeedAssetSet ID for campaign.<br>   In ADD and SET operation, If DasUseUrlsType is USE_SUPPLIED_URLS_ONLY or DOMAIN_AND_SUPPLIED_URLS, this field is required. </div>
     *
     * @return self
     */
    public function setPageFeedAssetSetIds($page_feed_asset_set_ids)
    {

        if (is_null($page_feed_asset_set_ids)) {
            array_push($this->openAPINullablesSetToNull, 'page_feed_asset_set_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page_feed_asset_set_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['page_feed_asset_set_ids'] = $page_feed_asset_set_ids;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain <div lang=\"ja\">   ドメインです。<br>   ADDおよびSET時、DasUseUrlsTypeがTOP_DOMAIN_ONLYまたはDOMAIN_AND_SUPPLIED_URLSの場合、このフィールドは必須となります。 </div> <div lang=\"en\">   Domain.<br>   If DasUseUrlsType is TOP_DOMAIN_ONLY or DOMAIN_AND_SUPPLIED_URLS, this field is required in ADD and SET operation. </div>
     *
     * @return self
     */
    public function setDomain($domain)
    {

        if (is_null($domain)) {
            array_push($this->openAPINullablesSetToNull, 'domain');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('domain', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets das_use_urls_type
     *
     * @return \OpenAPI\Client\Model\CampaignServiceDasUseUrlsType|null
     */
    public function getDasUseUrlsType()
    {
        return $this->container['das_use_urls_type'];
    }

    /**
     * Sets das_use_urls_type
     *
     * @param \OpenAPI\Client\Model\CampaignServiceDasUseUrlsType|null $das_use_urls_type das_use_urls_type
     *
     * @return self
     */
    public function setDasUseUrlsType($das_use_urls_type)
    {

        if (is_null($das_use_urls_type)) {
            array_push($this->openAPINullablesSetToNull, 'das_use_urls_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('das_use_urls_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['das_use_urls_type'] = $das_use_urls_type;

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

