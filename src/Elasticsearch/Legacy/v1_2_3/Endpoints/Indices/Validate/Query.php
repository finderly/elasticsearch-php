<?php
/**
 * User: zach
 * Date: 05/31/2013
 * Time: 16:47:11 pm
 */

namespace Elasticsearch\Legacy\v1_2_3\Endpoints\Indices\Validate;

use Elasticsearch\Legacy\v1_2_3\Endpoints\AbstractEndpoint;
use Elasticsearch\Legacy\v1_2_3\Common\Exceptions;

/**
 * Class Query
 * @package Elasticsearch\Endpoints\Indices\Validate
 */
class Query extends AbstractEndpoint
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
        return $this->getOptionalURI('_validate/query');
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'explain',
            'ignore_indices',
            'operation_threading',
            'source',
            'q'
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
