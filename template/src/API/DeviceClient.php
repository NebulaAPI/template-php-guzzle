<?php
namespace DattoSdk\API;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;

class DeviceResult
{
    /** @var \DattoSdk\Entities\Pagination */
    public $pagination;
    /** @var \DattoSdk\Entities\Device[] */
    private $items;

    /**
     * @return \DattoSdk\Entities\Device[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \DattoSdk\Entities\Device[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
}

class DeviceClient
{
    /** 
     * @var Client
     * */
    private $_client;

    private $_username;

    private $_password;

    /**
     * Standard constructor
     */
    public function __construct($username, $password)
    {
        $this->_username = $username;
        $this->_password = $password;
        $this->_client = new Client(
            [ 'base_uri' => 'https://api.datto.com' ]
        );
    }

    private function getAuthValues()
    {
        return [$this->_username, $this->_password];
    }

    public function getDevices($page, $showHiddenDevices, $showChildResellerDevices)
    {
        try {
            $response = $this->_client->request(
                'GET',
                '/v1/bcdr/device',
                [ 'query' =>
                    ['_page' => $page, 'showHiddenDevices' => $showHiddenDevices, 'showChildResellerDevices' => $showChildResellerDevices],
                    'auth' => $this->getAuthValues()
                ]
            );
            $body = (string)$response->getBody();
            $mapper = new JsonMapper();
            $result = $mapper->map(json_decode($body), new DeviceResult());
            return $result;
        } catch (GuzzleException $e) {
        } catch (\JsonMapper_Exception $e) {
        }

    }
}