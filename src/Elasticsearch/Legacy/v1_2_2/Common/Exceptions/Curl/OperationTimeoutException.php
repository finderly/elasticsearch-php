<?php
/**
 * User: zach
 * Date: 9/19/13
 * Time: 3:53 PM
 */

namespace Elasticsearch\Legacy\v1_2_2\Common\Exceptions\Curl;


use Elasticsearch\Legacy\v1_2_2\Common\Exceptions\ElasticsearchException;
use Elasticsearch\Legacy\v1_2_2\Common\Exceptions\TransportException;

/**
 * Class OperationTimeoutException
 * @package Elasticsearch\Common\Exceptions\Curl
 */
class OperationTimeoutException extends TransportException implements ElasticsearchException
{
}
