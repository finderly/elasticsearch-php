<?php
/**
 * User: zach
 * Date: 01/20/2014
 * Time: 14:34:49 pm
 */

namespace Elasticsearch\Legacy\v1_2_3\Endpoints\Indices\Mapping;

use Elasticsearch\Legacy\v1_2_3\Endpoints\AbstractEndpoint;
use Elasticsearch\Legacy\v1_2_3\Common\Exceptions;

/**
 * Class Delete
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Indices\Mapping
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class Delete extends AbstractEndpoint
{
    /**
     * @throws \Elasticsearch\Legacy\v1_2_3\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        if (isset($this->index) !== true) {
            throw new Exceptions\RuntimeException(
                'index is required for Delete'
            );
        }
        if (isset($this->type) !== true) {
            throw new Exceptions\RuntimeException(
                'type is required for Delete'
            );
        }
        $index = $this->index;
        $type = $this->type;
        $uri   = "/$index/$type/_mapping";

        if (isset($index) === true && isset($type) === true) {
            $uri = "/$index/$type/_mapping";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'master_timeout',
        );
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'DELETE';
    }
}
