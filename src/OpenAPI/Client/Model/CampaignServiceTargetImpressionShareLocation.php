<?php
/**
 * CampaignServiceTargetImpressionShareLocation
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * CampaignServiceTargetImpressionShareLocation Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignServiceTargetImpressionShareLocationは、インプレッションシェアの目標割合を達成するための検索結果掲載位置を指定します。&lt;br&gt; このフィールドは省略可能となります。その際、デフォルト設定値は&lt;code&gt;ANYWHERE_ON_PAGE&lt;/code&gt;となります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignServiceTargetImpressionShare specifies search result posting position to achieve the target ratio of impression share.&lt;br&gt; This field is optional. The default value will be &lt;code&gt;ANYWHERE_ON_PAGE&lt;/code&gt;.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;ANYWHERE_ON_PAGE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;任意の位置です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Arbitrary position.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_OF_PAGE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ページ上部です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Top part of a page.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;ABSOLUTE_TOP_OF_PAGE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ページ最上部です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Absolute top of a page.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceTargetImpressionShareLocation
{
    /**
     * Possible values of this enum
     */
    public const ANYWHERE_ON_PAGE = 'ANYWHERE_ON_PAGE';

    public const TOP_OF_PAGE = 'TOP_OF_PAGE';

    public const ABSOLUTE_TOP_OF_PAGE = 'ABSOLUTE_TOP_OF_PAGE';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ANYWHERE_ON_PAGE,
            self::TOP_OF_PAGE,
            self::ABSOLUTE_TOP_OF_PAGE,
            self::UNKNOWN
        ];
    }
}


