<?php
/**
 * User: zach
 * Date: 11/21/13
 * Time: 3:43 PM
 */

namespace Elasticsearch\Legacy\v1_2_3\ConnectionPool;

use Elasticsearch\Legacy\v1_2_3\Common\Exceptions\NoNodesAvailableException;
use Elasticsearch\Legacy\v1_2_3\ConnectionPool\Selectors\SelectorInterface;
use Elasticsearch\Legacy\v1_2_3\Connections\AbstractConnection;
use Elasticsearch\Legacy\v1_2_3\Connections\ConnectionFactory;

class StaticNoPingConnectionPool extends AbstractConnectionPool
{
    private $pingTimeout    = 60;
    private $maxPingTimeout = 3600;

    public function __construct($connections, SelectorInterface $selector, ConnectionFactory $factory, $connectionPoolParams)
    {
        parent::__construct($connections, $selector, $factory, $connectionPoolParams);
    }


    /**
     * @param bool $force
     *
     * @return AbstractConnection
     * @throws \Elasticsearch\Legacy\v1_2_3\Common\Exceptions\NoNodesAvailableException
     */
    public function nextConnection($force = false)
    {
        $total = count($this->connections);
        while ($total--) {
            /** @var AbstractConnection $connection */
            $connection = $this->selector->select($this->connections);
            if ($connection->isAlive() === true) {
                return $connection;
            }

            if ($this->readyToRevive($connection) === true) {
                return $connection;
            }
        }

        throw new NoNodesAvailableException("No alive nodes found in your cluster");
    }

    public function scheduleCheck()
    {

    }

    /**
     * @param AbstractConnection $connection
     *
     * @return bool
     */
    private function readyToRevive(AbstractConnection $connection)
    {
        $timeout = min(
            $this->pingTimeout * pow(2, $connection->getPingFailures()),
            $this->maxPingTimeout
        );

        if ($connection->getLastPing() + $timeout < time()) {
            return true;
        } else {
            return false;
        }
    }
}
