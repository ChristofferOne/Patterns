<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 16:02
 */

namespace Patterns\AdapterPattern\AirTransport;

class AirshipAdapter implements Plane {
    private $airship;

    public function __construct(Airship $airship) {
        $this->airship = $airship;
    }

    public function takeOff(): String {
        return $this->airship->lift();
    }

    public function refuel(Int $liters): String {
        return $this->airship->fillBalloon($liters);
    }

    public function breaks(): String {
        return $this->airship->tieSandBags();
    }
}