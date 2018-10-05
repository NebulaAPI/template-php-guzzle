<?php
/**
 * Copyright (C) 2018 Datto, Inc.
 */
namespace API;

class DeviceClient
{
    /** 
     * @var GuzzleHttp\Client 
     * */
    private $_client;

    /**
     * Standard constructor
     */
    public function __construct()
    {
        $this->_client = new GuzzleHttp\Client(
            [ 'base_uri' => '' ]
        );
    }

    
    public function getDevices()
    {
        $response = $this->_client->request('GET', '/api/devices', [ 'query' => []]);
        $body = $response->getBody();
        
    }
}