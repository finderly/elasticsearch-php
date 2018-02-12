<?php
/**
 * User: zach
 * Date: 3/24/14
 * Time: 4:59 PM
 */

namespace Elasticsearch\Legacy\v1_2_2\Endpoints\Indices;

use Elasticsearch\Legacy\v1_2_2\Endpoints\AbstractEndpoint;
use Elasticsearch\Legacy\v1_2_2\Common\Exceptions;

/**
 * Class Recovery
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Indices
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class Recovery extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $index = $this->index;
        $uri   = "/_recovery";

        if (isset($index) === true) {
            $uri = "/$index/_recovery";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'detailed',
            'active_only',
            'human'
        );
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'GET';
    }
}
