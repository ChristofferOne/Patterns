<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:56
 */

namespace Patterns\AdapterPattern\AirTransport;

class PassengerPlane implements Plane {
    public function takeOff(): String {
        return "Plane taking off at full speed!";
    }

    public function refuel(Int $liters): String {
        return "Pumping in $liters Liters of jet fuel!";
    }

    public function breaks(): String {
        return "Wheels are breaking!";
    }
}