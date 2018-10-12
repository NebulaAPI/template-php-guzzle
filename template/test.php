<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 10/8/18
 * Time: 11:54 AM
 */

use DattoSdk\API\DeviceClient;

require_once __DIR__ . '/vendor/autoload.php';


$client = new DeviceClient("c07322", "1f1fb5e1ea5fcd23f212826eae14a52c");
$devices = $client->getDevices(1, true, true);

print_r($devices);