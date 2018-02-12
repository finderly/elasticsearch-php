<?php
/**
 * User: zach
 * Date: 5/7/13
 * Time: 3:04 PM
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
namespace Elasticsearch\Legacy\v1_2_3\Common\Exceptions;

/**
 * ServerErrorResponseException
 */
class ServerErrorResponseException extends TransportException implements ElasticsearchException
{
}
