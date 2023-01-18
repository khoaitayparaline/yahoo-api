<?php
/**
 * BiddingStrategyServiceType
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
 * BiddingStrategyServiceType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;BiddingStrategyServiceTypeは、自動入札タイプを表します。&lt;br&gt; このフィールドは、biddingScheme配下ではADD時は必須となり、SET時は省略可能となります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;BiddingStrategyServiceType displays the Auto Bidding type.&lt;br&gt; Under biddingScheme, this field is required in ADD operation, and will be optional in SET operation.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TARGET_ROAS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;\&quot;&gt;広告費用対効果の目標値です。&lt;br&gt;※キャンペーンの更新時のみ適用可能です。広告グループには現在設定できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Target ROAS.&lt;br&gt;* Available on updating campaign process. Currently not available for ad group.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;MAXIMIZE_CLICKS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;\&quot;&gt;クリック数を最大化します。&lt;br&gt;※キャンペーンに適用可能です。広告グループには現在設定できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Maximize Clicks.&lt;br&gt;* Applicable for campaign. Currently not available for ad group.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TARGET_CPA&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;コンバージョン単価の目標値です。&lt;br&gt;※キャンペーンの更新時のみ適用可能です。広告グループには現在設定できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Target conversion spend (CPA).&lt;br&gt;* Available on updating campaign process. Currently not available for ad group.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TARGET_IMPRESSION_SHARE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;インプレッションシェアの目標値です。&lt;br&gt;※キャンペーンの更新時のみ適用可能です。広告グループには現在設定できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Target value of impression share. &lt;br&gt; * Available on updating campaign process. Currently not available for ad group. &lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BiddingStrategyServiceType
{
    /**
     * Possible values of this enum
     */
    public const TARGET_ROAS = 'TARGET_ROAS';

    public const MAXIMIZE_CLICKS = 'MAXIMIZE_CLICKS';

    public const TARGET_CPA = 'TARGET_CPA';

    public const TARGET_IMPRESSION_SHARE = 'TARGET_IMPRESSION_SHARE';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TARGET_ROAS,
            self::MAXIMIZE_CLICKS,
            self::TARGET_CPA,
            self::TARGET_IMPRESSION_SHARE,
            self::UNKNOWN
        ];
    }
}

