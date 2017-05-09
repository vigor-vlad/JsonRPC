<?php

namespace JsonRPC\Logger;
/**
 * Created by PhpStorm.
 * User: StevenLewis
 * Date: 09/05/2017
 * Time: 12:30
 */
class DebugLogger implements LoggerInterface
{

    /**
     * recorded requests
     * @var array
     */
    protected $logs = array();

    public function log($id, $method, $params, $response, $timeTaken = 0, $metadata = array())
    {
        $this->logs[] = array(
            'id'        => $id,
            'method'    => $method,
            'params'    => $params,
            'response'  => $response,
            'timeTaken' => $timeTaken,
            'metadata'  => $metadata
        );
    }

    public function getLogs()
    {
        return $this->logs;
    }
}