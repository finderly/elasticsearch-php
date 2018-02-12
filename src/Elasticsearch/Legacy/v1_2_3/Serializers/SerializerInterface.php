<?php
/**
 * User: zach
 * Date: 5/6/13
 * Time: 4:40 AM
 */

namespace Elasticsearch\Legacy\v1_2_3\Serializers;

interface SerializerInterface
{
    public function serialize($data);


    public function deserialize($data, $headers);
}
