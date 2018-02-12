<?php
/**
 * User: zach
 * Date: 6/10/13
 * Time: 2:51 PM
 */

namespace Elasticsearch\Legacy\v1_2_2\Endpoints\Indices\Template;


use Elasticsearch\Legacy\v1_2_2\Endpoints\AbstractEndpoint;

abstract class AbstractTemplateEndpoint extends AbstractEndpoint
{
    /** @var  string */
    protected $name;


    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
