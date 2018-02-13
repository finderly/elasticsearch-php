<?php
/**
 * User: zach
 * Date: 01/20/2014
 * Time: 14:34:49 pm
 */

namespace Elasticsearch\Legacy\v1_2_3\Endpoints\Indices\Type;

use Elasticsearch\Legacy\v1_2_3\Endpoints\AbstractEndpoint;
use Elasticsearch\Legacy\v1_2_3\Common\Exceptions;

/**
 * Class Exists
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Indices\Type
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class Exists extends AbstractEndpoint
{
    /**
     * @throws \Elasticsearch\Legacy\v1_2_3\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        if (isset($this->index) !== true) {
            throw new Exceptions\RuntimeException(
                'index is required for Exists'
            );
        }
        if (isset($this->type) !== true) {
            throw new Exceptions\RuntimeException(
                'type is required for Exists'
            );
        }
        $index = $this->index;
        $type = $this->type;
        $uri   = "/$index/$type";

        if (isset($index) === true && isset($type) === true) {
            $uri = "/$index/$type";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'local',
        );
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'HEAD';
    }
}
