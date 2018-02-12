<?php
/**
 * User: zach
 * Date: 7/22/13
 * Time: 8:57 PM
 */

namespace Elasticsearch\Legacy\v1_2_2\Endpoints;


use Elasticsearch\Legacy\v1_2_2\Serializers\SerializerInterface;
use Elasticsearch\Legacy\v1_2_2\Transport;

interface BulkEndpointInterface {
    public function __construct(Transport $transport, SerializerInterface $serializer);
}
