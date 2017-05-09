<?php
namespace JsonRPC\Logger;
/**
 * Created by PhpStorm.
 * User: StevenLewis
 * Date: 09/05/2017
 * Time: 12:29
 */
class NullLogger implements LoggerInterface
{

    public function log($id, $method, $params, $response, $timeTaken = 0, $metadata = array())
    {
    }
}