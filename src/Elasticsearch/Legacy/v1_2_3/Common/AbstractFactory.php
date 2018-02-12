<?php
/**
 * User: zach
 * Date: 9/19/13
 * Time: 1:27 PM
 */

namespace Elasticsearch\Legacy\v1_2_3\Common;


use Pimple\Container as Pimple;

abstract class AbstractFactory
{
    /** @var  Pimple */
    protected $container;

    /**
     * @param Pimple $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }
}
