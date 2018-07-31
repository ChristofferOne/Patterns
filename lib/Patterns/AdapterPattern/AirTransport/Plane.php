<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:53
 */

namespace Patterns\AdapterPattern\AirTransport;

interface Plane {
    public function takeOff() : String;
    public function refuel(Int $liters) : String;
    public function breaks() : String;
}