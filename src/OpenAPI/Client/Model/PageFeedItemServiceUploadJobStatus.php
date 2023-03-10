<?php
/**
 * PageFeedItemServiceUploadJobStatus
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
 * PageFeedItemServiceUploadJobStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;PageFeedItemServiceUploadJobStatusは、ページフィードアイテムアップロードジョブの実行状況を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;PageFeedItemServiceUploadJobStatus displays status of page feed item upload jobs.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;IN_PROGRESS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理中&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Currently in progress of creating.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;COMPLETED&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理完了&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Job has completed.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;COMPLETED_WITH_VALIDATION_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイル内の入力値が不正&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Contents written in the file are invalid.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FILE_FORMAT_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイルのフォーマットが不正&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Format of the file is invalid.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FILE_ENCODING_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイルのエンコードが不正&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Encoding of the file is invalid.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;COLUMN_HEADER_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイルのヘッダーが不正&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Content header of the file is invalid.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;EXCEED_ROW_LINES&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイルの最大行数が超過しています。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Row count of the file exceeded the maximum.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;EXCEED_FILE_COUNTS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;複数のファイルを圧縮しているためエラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Count of the file exceeded the maximum.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;INVALID_FEED_ID&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;フィードIDが不正&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Feed ID is invalid.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TIMEOUT&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;タイムアウト&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Timeout&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SYSTEM_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;エラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Systen error.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageFeedItemServiceUploadJobStatus
{
    /**
     * Possible values of this enum
     */
    public const IN_PROGRESS = 'IN_PROGRESS';

    public const COMPLETED = 'COMPLETED';

    public const COMPLETED_WITH_VALIDATION_ERROR = 'COMPLETED_WITH_VALIDATION_ERROR';

    public const FILE_FORMAT_ERROR = 'FILE_FORMAT_ERROR';

    public const FILE_ENCODING_ERROR = 'FILE_ENCODING_ERROR';

    public const COLUMN_HEADER_ERROR = 'COLUMN_HEADER_ERROR';

    public const EXCEED_ROW_LINES = 'EXCEED_ROW_LINES';

    public const EXCEED_FILE_COUNTS = 'EXCEED_FILE_COUNTS';

    public const INVALID_FEED_ID = 'INVALID_FEED_ID';

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
            self::COMPLETED_WITH_VALIDATION_ERROR,
            self::FILE_FORMAT_ERROR,
            self::FILE_ENCODING_ERROR,
            self::COLUMN_HEADER_ERROR,
            self::EXCEED_ROW_LINES,
            self::EXCEED_FILE_COUNTS,
            self::INVALID_FEED_ID,
            self::TIMEOUT,
            self::SYSTEM_ERROR,
            self::UNKNOWN
        ];
    }
}


