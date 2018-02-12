<?php
/**
 * User: zach
 * Date: 6/13/13
 * Time: 8:56 PM
 */


namespace Elasticsearch\Legacy\v1_2_3\Endpoints\Indices\Alias;


use Elasticsearch\Legacy\v1_2_3\Common\Exceptions\InvalidArgumentException;
use Elasticsearch\Legacy\v1_2_3\Endpoints\AbstractEndpoint;

/**
 * Class AbstractNodeEndpoint
 * @package Elasticsearch\Endpoints\Cluster\Node
 */
abstract class AbstractAliasEndpoint extends AbstractEndpoint
{

    /** @var null|string */
    protected $name = null;


    /**
     * @param $name
     *
     * @throws \Elasticsearch\Common\Exceptions\InvalidArgumentException
     *
     * @return $this
     */
    public function setName($name)
    {
        if (is_string($name) !== true) {
            throw new InvalidArgumentException('Name must be a string');
        }
        $this->name = urlencode($name);
        return $this;
    }
}
