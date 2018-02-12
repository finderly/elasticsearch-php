<?php
/**
 * User: zach
 * Date: 6/17/13
 * Time: 3:14 PM
 */

namespace Elasticsearch\Legacy\v1_2_3\Common\Exceptions\Curl;

use Elasticsearch\Legacy\v1_2_3\Common\Exceptions\ElasticsearchException;
use Elasticsearch\Legacy\v1_2_3\Common\Exceptions\TransportException;

/**
 * Class CouldNotConnectToHost
 * @package Elasticsearch\Common\Exceptions\Curl
 */
class CouldNotConnectToHost extends TransportException implements ElasticsearchException
{
}
