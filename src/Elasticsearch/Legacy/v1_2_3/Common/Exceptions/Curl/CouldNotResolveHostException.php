<?php
/**
 * User: zach
 * Date: 6/17/13
 * Time: 2:46 PM
 */

namespace Elasticsearch\Legacy\v1_2_3\Common\Exceptions\Curl;

use Elasticsearch\Legacy\v1_2_3\Common\Exceptions\ElasticsearchException;
use Elasticsearch\Legacy\v1_2_3\Common\Exceptions\TransportException;

/**
 * Class CouldNotResolveHostException
 * @package Elasticsearch\Common\Exceptions\Curl
 */
class CouldNotResolveHostException extends TransportException implements ElasticsearchException
{
}
