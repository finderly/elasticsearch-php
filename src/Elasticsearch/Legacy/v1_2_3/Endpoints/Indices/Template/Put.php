<?php
/**
 * User: zach
 * Date: 01/20/2014
 * Time: 14:34:49 pm
 */

namespace Elasticsearch\Legacy\v1_2_3\Endpoints\Indices\Template;

use Elasticsearch\Legacy\v1_2_3\Endpoints\AbstractEndpoint;
use Elasticsearch\Legacy\v1_2_3\Common\Exceptions;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Indices\Template
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class Put extends AbstractEndpoint
{
    // The name of the template
    private $name;


    /**
     * @param array $body
     *
     * @throws \Elasticsearch\Legacy\v1_2_3\Common\Exceptions\InvalidArgumentException
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
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }

        $this->name = $name;
        return $this;
    }


    /**
     * @throws \Elasticsearch\Legacy\v1_2_3\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        if (isset($this->name) !== true) {
            throw new Exceptions\RuntimeException(
                'name is required for Put'
            );
        }
        $name = $this->name;
        $uri   = "/_template/$name";

        if (isset($name) === true) {
            $uri = "/_template/$name";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'order',
            'timeout',
            'master_timeout',
            'flat_settings',
            'create'
        );
    }


    /**
     * @return array
     * @throws \Elasticsearch\Legacy\v1_2_3\Common\Exceptions\RuntimeException
     */
    protected function getBody()
    {
        if (isset($this->body) !== true) {
            throw new Exceptions\RuntimeException('Body is required for Put Template');
        }
        return $this->body;
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'PUT';
    }
}
