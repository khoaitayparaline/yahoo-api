<?php
/**
 * FeedItemServiceAttribute
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
 * FeedItemServiceAttribute Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedItemServiceAttributeオブジェクトは、フィードアイテムの属性情報の値を格納します。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に省略可能となり、REMOVE時に無視されます。&lt;br&gt; SET時にfeedItemAttributeを指定するとすべて上書きされます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedItemServiceAttribute object holds the value of Feed Item information.&lt;br&gt; This field is required in ADD operation, is optional in SET operation, and will be ignored in REMOVE operation.&lt;br&gt; If feedItemAttribute is specified in SET operation, it will be overwritten. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeedItemServiceAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedItemServiceAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feed_attribute_id' => 'int',
        'multiple_feed_item_attribute' => '\OpenAPI\Client\Model\FeedItemServiceMultipleFeedItemAttribute',
        'placeholder_field' => '\OpenAPI\Client\Model\FeedItemServicePlaceholderField',
        'simple_feed_item_attribute' => '\OpenAPI\Client\Model\FeedItemServiceSimpleFeedItemAttribute'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feed_attribute_id' => 'int64',
        'multiple_feed_item_attribute' => null,
        'placeholder_field' => null,
        'simple_feed_item_attribute' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feed_attribute_id' => true,
		'multiple_feed_item_attribute' => true,
		'placeholder_field' => true,
		'simple_feed_item_attribute' => true
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
        'feed_attribute_id' => 'feedAttributeId',
        'multiple_feed_item_attribute' => 'multipleFeedItemAttribute',
        'placeholder_field' => 'placeholderField',
        'simple_feed_item_attribute' => 'simpleFeedItemAttribute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_attribute_id' => 'setFeedAttributeId',
        'multiple_feed_item_attribute' => 'setMultipleFeedItemAttribute',
        'placeholder_field' => 'setPlaceholderField',
        'simple_feed_item_attribute' => 'setSimpleFeedItemAttribute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_attribute_id' => 'getFeedAttributeId',
        'multiple_feed_item_attribute' => 'getMultipleFeedItemAttribute',
        'placeholder_field' => 'getPlaceholderField',
        'simple_feed_item_attribute' => 'getSimpleFeedItemAttribute'
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
        $this->setIfExists('feed_attribute_id', $data ?? [], null);
        $this->setIfExists('multiple_feed_item_attribute', $data ?? [], null);
        $this->setIfExists('placeholder_field', $data ?? [], null);
        $this->setIfExists('simple_feed_item_attribute', $data ?? [], null);
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
     * Gets feed_attribute_id
     *
     * @return int|null
     */
    public function getFeedAttributeId()
    {
        return $this->container['feed_attribute_id'];
    }

    /**
     * Sets feed_attribute_id
     *
     * @param int|null $feed_attribute_id <div lang=\"ja\">フィード属性IDです。<br> このフィールドは、ADDおよびSET時に無視されます。<br> ※アドカスタマイザーの場合は、ADDおよびSET時に必須となります。</div> <div lang=\"en\">Feed attribute ID.<br> This field will be ignored in ADD and SET operation.<br> *For AD_CUSTOMIZER, this field is required in ADD and SET operation.</div>
     *
     * @return self
     */
    public function setFeedAttributeId($feed_attribute_id)
    {

        if (is_null($feed_attribute_id)) {
            array_push($this->openAPINullablesSetToNull, 'feed_attribute_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feed_attribute_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['feed_attribute_id'] = $feed_attribute_id;

        return $this;
    }

    /**
     * Gets multiple_feed_item_attribute
     *
     * @return \OpenAPI\Client\Model\FeedItemServiceMultipleFeedItemAttribute|null
     */
    public function getMultipleFeedItemAttribute()
    {
        return $this->container['multiple_feed_item_attribute'];
    }

    /**
     * Sets multiple_feed_item_attribute
     *
     * @param \OpenAPI\Client\Model\FeedItemServiceMultipleFeedItemAttribute|null $multiple_feed_item_attribute multiple_feed_item_attribute
     *
     * @return self
     */
    public function setMultipleFeedItemAttribute($multiple_feed_item_attribute)
    {

        if (is_null($multiple_feed_item_attribute)) {
            array_push($this->openAPINullablesSetToNull, 'multiple_feed_item_attribute');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('multiple_feed_item_attribute', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['multiple_feed_item_attribute'] = $multiple_feed_item_attribute;

        return $this;
    }

    /**
     * Gets placeholder_field
     *
     * @return \OpenAPI\Client\Model\FeedItemServicePlaceholderField|null
     */
    public function getPlaceholderField()
    {
        return $this->container['placeholder_field'];
    }

    /**
     * Sets placeholder_field
     *
     * @param \OpenAPI\Client\Model\FeedItemServicePlaceholderField|null $placeholder_field placeholder_field
     *
     * @return self
     */
    public function setPlaceholderField($placeholder_field)
    {

        if (is_null($placeholder_field)) {
            array_push($this->openAPINullablesSetToNull, 'placeholder_field');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placeholder_field', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['placeholder_field'] = $placeholder_field;

        return $this;
    }

    /**
     * Gets simple_feed_item_attribute
     *
     * @return \OpenAPI\Client\Model\FeedItemServiceSimpleFeedItemAttribute|null
     */
    public function getSimpleFeedItemAttribute()
    {
        return $this->container['simple_feed_item_attribute'];
    }

    /**
     * Sets simple_feed_item_attribute
     *
     * @param \OpenAPI\Client\Model\FeedItemServiceSimpleFeedItemAttribute|null $simple_feed_item_attribute simple_feed_item_attribute
     *
     * @return self
     */
    public function setSimpleFeedItemAttribute($simple_feed_item_attribute)
    {

        if (is_null($simple_feed_item_attribute)) {
            array_push($this->openAPINullablesSetToNull, 'simple_feed_item_attribute');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('simple_feed_item_attribute', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['simple_feed_item_attribute'] = $simple_feed_item_attribute;

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

