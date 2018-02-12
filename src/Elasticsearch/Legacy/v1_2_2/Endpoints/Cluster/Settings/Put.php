<?php
/**
 * User: zach
 * Date: 01/20/2014
 * Time: 14:34:49 pm
 */

namespace Elasticsearch\Legacy\v1_2_2\Endpoints\Cluster\Settings;

use Elasticsearch\Legacy\v1_2_2\Endpoints\AbstractEndpoint;
use Elasticsearch\Legacy\v1_2_2\Common\Exceptions;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Cluster\Settings
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class Put extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Elasticsearch\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }


        $this->body = $body;
        return $this;
    }



    /**
     * @return string
     */
    protected function getURI()
    {
        $uri   = "/_cluster/settings";


        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'flat_settings',
        );
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'PUT';
    }
}
