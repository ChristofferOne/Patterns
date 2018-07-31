<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:15
 */

namespace Patterns\CommandPattern\ElectronicDevices;

class DeviceRemote {
    public static function getDevice() : ElectronicDevice {
        return new Television();
    }
}