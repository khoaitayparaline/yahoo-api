<?php
/**
 * AdGroupCriterionServiceBiddableAdGroupCriterion
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
 * AdGroupCriterionServiceBiddableAdGroupCriterion Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupCriterionServiceBiddableAdGroupCriterionオブジェクトは、広告グループの単価設定可能（包含）クライテリアです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupCriterionServiceBiddableAdGroupCriterion object displays biddable criterion in ad group.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdGroupCriterionServiceBiddableAdGroupCriterion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupCriterionServiceBiddableAdGroupCriterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'smartphone_final_url' => 'string',
        'final_url' => 'string',
        'approval_status' => '\OpenAPI\Client\Model\AdGroupCriterionServiceApprovalStatus',
        'bid' => '\OpenAPI\Client\Model\AdGroupCriterionServiceBid',
        'custom_parameters' => '\OpenAPI\Client\Model\AdGroupCriterionServiceCustomParameters',
        'destination_url' => 'string',
        'disapproval_reason_codes' => 'string[]',
        'review_smartphone_final_url' => 'string',
        'review_final_url' => 'string',
        'review_custom_parameters' => '\OpenAPI\Client\Model\AdGroupCriterionServiceCustomParameters',
        'review_destination_url' => 'string',
        'review_tracking_url' => 'string',
        'tracking_url' => 'string',
        'user_status' => '\OpenAPI\Client\Model\AdGroupCriterionServiceUserStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'smartphone_final_url' => null,
        'final_url' => null,
        'approval_status' => null,
        'bid' => null,
        'custom_parameters' => null,
        'destination_url' => null,
        'disapproval_reason_codes' => null,
        'review_smartphone_final_url' => null,
        'review_final_url' => null,
        'review_custom_parameters' => null,
        'review_destination_url' => null,
        'review_tracking_url' => null,
        'tracking_url' => null,
        'user_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'smartphone_final_url' => true,
		'final_url' => true,
		'approval_status' => true,
		'bid' => true,
		'custom_parameters' => true,
		'destination_url' => true,
		'disapproval_reason_codes' => true,
		'review_smartphone_final_url' => true,
		'review_final_url' => true,
		'review_custom_parameters' => true,
		'review_destination_url' => true,
		'review_tracking_url' => true,
		'tracking_url' => true,
		'user_status' => true
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
        'smartphone_final_url' => 'smartphoneFinalUrl',
        'final_url' => 'finalUrl',
        'approval_status' => 'approvalStatus',
        'bid' => 'bid',
        'custom_parameters' => 'customParameters',
        'destination_url' => 'destinationUrl',
        'disapproval_reason_codes' => 'disapprovalReasonCodes',
        'review_smartphone_final_url' => 'reviewSmartphoneFinalUrl',
        'review_final_url' => 'reviewFinalUrl',
        'review_custom_parameters' => 'reviewCustomParameters',
        'review_destination_url' => 'reviewDestinationUrl',
        'review_tracking_url' => 'reviewTrackingUrl',
        'tracking_url' => 'trackingUrl',
        'user_status' => 'userStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'smartphone_final_url' => 'setSmartphoneFinalUrl',
        'final_url' => 'setFinalUrl',
        'approval_status' => 'setApprovalStatus',
        'bid' => 'setBid',
        'custom_parameters' => 'setCustomParameters',
        'destination_url' => 'setDestinationUrl',
        'disapproval_reason_codes' => 'setDisapprovalReasonCodes',
        'review_smartphone_final_url' => 'setReviewSmartphoneFinalUrl',
        'review_final_url' => 'setReviewFinalUrl',
        'review_custom_parameters' => 'setReviewCustomParameters',
        'review_destination_url' => 'setReviewDestinationUrl',
        'review_tracking_url' => 'setReviewTrackingUrl',
        'tracking_url' => 'setTrackingUrl',
        'user_status' => 'setUserStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'smartphone_final_url' => 'getSmartphoneFinalUrl',
        'final_url' => 'getFinalUrl',
        'approval_status' => 'getApprovalStatus',
        'bid' => 'getBid',
        'custom_parameters' => 'getCustomParameters',
        'destination_url' => 'getDestinationUrl',
        'disapproval_reason_codes' => 'getDisapprovalReasonCodes',
        'review_smartphone_final_url' => 'getReviewSmartphoneFinalUrl',
        'review_final_url' => 'getReviewFinalUrl',
        'review_custom_parameters' => 'getReviewCustomParameters',
        'review_destination_url' => 'getReviewDestinationUrl',
        'review_tracking_url' => 'getReviewTrackingUrl',
        'tracking_url' => 'getTrackingUrl',
        'user_status' => 'getUserStatus'
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
        $this->setIfExists('smartphone_final_url', $data ?? [], null);
        $this->setIfExists('final_url', $data ?? [], null);
        $this->setIfExists('approval_status', $data ?? [], null);
        $this->setIfExists('bid', $data ?? [], null);
        $this->setIfExists('custom_parameters', $data ?? [], null);
        $this->setIfExists('destination_url', $data ?? [], null);
        $this->setIfExists('disapproval_reason_codes', $data ?? [], null);
        $this->setIfExists('review_smartphone_final_url', $data ?? [], null);
        $this->setIfExists('review_final_url', $data ?? [], null);
        $this->setIfExists('review_custom_parameters', $data ?? [], null);
        $this->setIfExists('review_destination_url', $data ?? [], null);
        $this->setIfExists('review_tracking_url', $data ?? [], null);
        $this->setIfExists('tracking_url', $data ?? [], null);
        $this->setIfExists('user_status', $data ?? [], null);
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
     * Gets smartphone_final_url
     *
     * @return string|null
     */
    public function getSmartphoneFinalUrl()
    {
        return $this->container['smartphone_final_url'];
    }

    /**
     * Sets smartphone_final_url
     *
     * @param string|null $smartphone_final_url <div lang=\"ja\">最終リンク先URL（スマートフォン）です。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※空で設定すると、既存の最終リンク先URL（スマートフォン）は削除されます。</div> <div lang=\"en\">Upgraded Final URL (Smartphone).<br> This field is optional in ADD and SET operation.<br> *When tag is set blank, existing upgraded Final URL (Smartphone) will be deleted.</div>
     *
     * @return self
     */
    public function setSmartphoneFinalUrl($smartphone_final_url)
    {

        if (is_null($smartphone_final_url)) {
            array_push($this->openAPINullablesSetToNull, 'smartphone_final_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('smartphone_final_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['smartphone_final_url'] = $smartphone_final_url;

        return $this;
    }

    /**
     * Gets final_url
     *
     * @return string|null
     */
    public function getFinalUrl()
    {
        return $this->container['final_url'];
    }

    /**
     * Sets final_url
     *
     * @param string|null $final_url <div lang=\"ja\">移行後の最終リンク先URLです。<br> ADDおよびSET時、このフィールドは省略可能となります。※ADD時、移行してtracking Urlを指定している場合は必須となります。<br> ※空で設定すると、既存の移行後の最終リンク先URLは削除されます。</div> <div lang=\"en\">Upgraded Final URL.<br> This field is optional in ADD and SET operation. *If upgraded and tracking Url is specified, it is required in ADD operation.<br> *When this is set blank, existing upgraded Final URL will be deleted.</div>
     *
     * @return self
     */
    public function setFinalUrl($final_url)
    {

        if (is_null($final_url)) {
            array_push($this->openAPINullablesSetToNull, 'final_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('final_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['final_url'] = $final_url;

        return $this;
    }

    /**
     * Gets approval_status
     *
     * @return \OpenAPI\Client\Model\AdGroupCriterionServiceApprovalStatus|null
     */
    public function getApprovalStatus()
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status
     *
     * @param \OpenAPI\Client\Model\AdGroupCriterionServiceApprovalStatus|null $approval_status approval_status
     *
     * @return self
     */
    public function setApprovalStatus($approval_status)
    {

        if (is_null($approval_status)) {
            array_push($this->openAPINullablesSetToNull, 'approval_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('approval_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['approval_status'] = $approval_status;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return \OpenAPI\Client\Model\AdGroupCriterionServiceBid|null
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param \OpenAPI\Client\Model\AdGroupCriterionServiceBid|null $bid bid
     *
     * @return self
     */
    public function setBid($bid)
    {

        if (is_null($bid)) {
            array_push($this->openAPINullablesSetToNull, 'bid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets custom_parameters
     *
     * @return \OpenAPI\Client\Model\AdGroupCriterionServiceCustomParameters|null
     */
    public function getCustomParameters()
    {
        return $this->container['custom_parameters'];
    }

    /**
     * Sets custom_parameters
     *
     * @param \OpenAPI\Client\Model\AdGroupCriterionServiceCustomParameters|null $custom_parameters custom_parameters
     *
     * @return self
     */
    public function setCustomParameters($custom_parameters)
    {

        if (is_null($custom_parameters)) {
            array_push($this->openAPINullablesSetToNull, 'custom_parameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_parameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['custom_parameters'] = $custom_parameters;

        return $this;
    }

    /**
     * Gets destination_url
     *
     * @return string|null
     */
    public function getDestinationUrl()
    {
        return $this->container['destination_url'];
    }

    /**
     * Sets destination_url
     *
     * @param string|null $destination_url <div lang=\"ja\">移行前のカスタムURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※空で設定すると、既存の移行前のカスタムURLは削除されます。</div> <div lang=\"en\">Custom URL of before upgrading.<br> This field is optional in ADD and SET operation.<br> *When tag is set blank, existing Custom URL before upgrade will be deleted.</div>
     *
     * @return self
     */
    public function setDestinationUrl($destination_url)
    {

        if (is_null($destination_url)) {
            array_push($this->openAPINullablesSetToNull, 'destination_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['destination_url'] = $destination_url;

        return $this;
    }

    /**
     * Gets disapproval_reason_codes
     *
     * @return string[]|null
     */
    public function getDisapprovalReasonCodes()
    {
        return $this->container['disapproval_reason_codes'];
    }

    /**
     * Sets disapproval_reason_codes
     *
     * @param string[]|null $disapproval_reason_codes <div lang=\"ja\">審査否認コードです。<br> (コード詳細は、DictionaryServiceのgetDisapprovalReasonのレスポンスを参照)</div> <div lang=\"en\">Code of Disapproval reason.<br> (Refer to DictionaryService getDisapprovalReason response for details)</div>
     *
     * @return self
     */
    public function setDisapprovalReasonCodes($disapproval_reason_codes)
    {

        if (is_null($disapproval_reason_codes)) {
            array_push($this->openAPINullablesSetToNull, 'disapproval_reason_codes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('disapproval_reason_codes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['disapproval_reason_codes'] = $disapproval_reason_codes;

        return $this;
    }

    /**
     * Gets review_smartphone_final_url
     *
     * @return string|null
     */
    public function getReviewSmartphoneFinalUrl()
    {
        return $this->container['review_smartphone_final_url'];
    }

    /**
     * Sets review_smartphone_final_url
     *
     * @param string|null $review_smartphone_final_url <div lang=\"ja\">配信審査中の最終リンク先URL（スマートフォン）です。</div> <div lang=\"en\">Upgraded Final URL (Smartphone), in review.</div>
     *
     * @return self
     */
    public function setReviewSmartphoneFinalUrl($review_smartphone_final_url)
    {

        if (is_null($review_smartphone_final_url)) {
            array_push($this->openAPINullablesSetToNull, 'review_smartphone_final_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review_smartphone_final_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['review_smartphone_final_url'] = $review_smartphone_final_url;

        return $this;
    }

    /**
     * Gets review_final_url
     *
     * @return string|null
     */
    public function getReviewFinalUrl()
    {
        return $this->container['review_final_url'];
    }

    /**
     * Sets review_final_url
     *
     * @param string|null $review_final_url <div lang=\"ja\">移行後の配信審査中の最終リンク先URLです。</div> <div lang=\"en\">Upgraded Final URL, in review.</div>
     *
     * @return self
     */
    public function setReviewFinalUrl($review_final_url)
    {

        if (is_null($review_final_url)) {
            array_push($this->openAPINullablesSetToNull, 'review_final_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review_final_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['review_final_url'] = $review_final_url;

        return $this;
    }

    /**
     * Gets review_custom_parameters
     *
     * @return \OpenAPI\Client\Model\AdGroupCriterionServiceCustomParameters|null
     */
    public function getReviewCustomParameters()
    {
        return $this->container['review_custom_parameters'];
    }

    /**
     * Sets review_custom_parameters
     *
     * @param \OpenAPI\Client\Model\AdGroupCriterionServiceCustomParameters|null $review_custom_parameters review_custom_parameters
     *
     * @return self
     */
    public function setReviewCustomParameters($review_custom_parameters)
    {

        if (is_null($review_custom_parameters)) {
            array_push($this->openAPINullablesSetToNull, 'review_custom_parameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review_custom_parameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['review_custom_parameters'] = $review_custom_parameters;

        return $this;
    }

    /**
     * Gets review_destination_url
     *
     * @return string|null
     */
    public function getReviewDestinationUrl()
    {
        return $this->container['review_destination_url'];
    }

    /**
     * Sets review_destination_url
     *
     * @param string|null $review_destination_url <div lang=\"ja\">移行前の配信審査中のカスタムURLです。</div> <div lang=\"en\">Custom URL of before upgrading, in review.</div>
     *
     * @return self
     */
    public function setReviewDestinationUrl($review_destination_url)
    {

        if (is_null($review_destination_url)) {
            array_push($this->openAPINullablesSetToNull, 'review_destination_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review_destination_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['review_destination_url'] = $review_destination_url;

        return $this;
    }

    /**
     * Gets review_tracking_url
     *
     * @return string|null
     */
    public function getReviewTrackingUrl()
    {
        return $this->container['review_tracking_url'];
    }

    /**
     * Sets review_tracking_url
     *
     * @param string|null $review_tracking_url <div lang=\"ja\">配信審査中のトラッキングURLです。</div> <div lang=\"en\">Tracking URL, in review.</div>
     *
     * @return self
     */
    public function setReviewTrackingUrl($review_tracking_url)
    {

        if (is_null($review_tracking_url)) {
            array_push($this->openAPINullablesSetToNull, 'review_tracking_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review_tracking_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['review_tracking_url'] = $review_tracking_url;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url <div lang=\"ja\">トラッキングURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※空で設定すると、既存のトラッキングURLは削除されます。</div> <div lang=\"en\">Tracking URL.<br> This field is optional in ADD and SET operation.<br> *When tag is set blank, existing Tracking URL will be deleted.</div>
     *
     * @return self
     */
    public function setTrackingUrl($tracking_url)
    {

        if (is_null($tracking_url)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return \OpenAPI\Client\Model\AdGroupCriterionServiceUserStatus|null
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param \OpenAPI\Client\Model\AdGroupCriterionServiceUserStatus|null $user_status user_status
     *
     * @return self
     */
    public function setUserStatus($user_status)
    {

        if (is_null($user_status)) {
            array_push($this->openAPINullablesSetToNull, 'user_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['user_status'] = $user_status;

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


