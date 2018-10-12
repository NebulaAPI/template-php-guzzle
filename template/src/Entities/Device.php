<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 10/8/18
 * Time: 3:31 PM
 */

namespace DattoSdk\Entities;


class Device
{
    public $serialNumber;
    public $name;
    public $model;
    /** @var \DateTime */
    public $lastSeenDate;
    /**
     * @var string|null
     */
    public $clientCompanyName;
    /** @var boolean */
    public $hidden;
    public $servicePlan;
    /** @var \DateTime */
    public $registrationDate;
    /** @var \DateTime */
    public $servicePeriod;
    /** @var \DateTime */
    public $warrantyExpire;
    /** @var Storage */
    public $localStorageUsed;
    /** @var Storage */
    public $localStorageAvailable;
    /** @var Storage */
    public $offsiteStorageUsed;
    public $internalIP;
    public $activeTickets;
    public $resellerCompanyName;
}