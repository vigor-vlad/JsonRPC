<?php
namespace JsonRPC\Logger;
/**
 * Created by PhpStorm.
 * User: StevenLewis
 * Date: 09/05/2017
 * Time: 12:27
 */
interface LoggerInterface
{
    /**
     * Record a request
     * metadata is for other useful information, i.e. processing time, call timestamp, server variables
     *
     * @param $id
     * @param $method
     * @param $params
     * @param $response
     * @param int $timeTaken
     * @param array $metadata
     */
    public function log($id, $method, $params, $response, $timeTaken = 0, $metadata = array());
}