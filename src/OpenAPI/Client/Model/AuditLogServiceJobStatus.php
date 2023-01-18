<?php
/**
 * AuditLogServiceJobStatus
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
 * AuditLogServiceJobStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AuditLogServiceJobStatusは、操作履歴取得ジョブの実行状況を表します。&lt;br&gt; このフィールドは、job配下ではレスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AuditLogServiceJobStatus describes the job status of acquiring operation history data.&lt;br&gt; Under &#39;job&#39;, although this field will be returned in the response, it will be ignored on input.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SYSTEM_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;エラーです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;It&amp;#39;s error.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;IN_PROGRESS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理中です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The process is in progress.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;COMPLETED&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理完了です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The process has been completed.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TIMEOUT&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;タイムアウトです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Timeout occurred.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuditLogServiceJobStatus
{
    /**
     * Possible values of this enum
     */
    public const IN_PROGRESS = 'IN_PROGRESS';

    public const COMPLETED = 'COMPLETED';

    public const TIMEOUT = 'TIMEOUT';

    public const SYSTEM_ERROR = 'SYSTEM_ERROR';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_PROGRESS,
            self::COMPLETED,
            self::TIMEOUT,
            self::SYSTEM_ERROR,
            self::UNKNOWN
        ];
    }
}

