<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:39
 */

namespace Patterns\AdapterPattern;

use Assets\BaseRunner;
use Patterns\AdapterPattern\AirTransport\Airship;
use Patterns\AdapterPattern\AirTransport\AirshipAdapter;
use Patterns\AdapterPattern\AirTransport\PassengerPlane;

class Runner extends BaseRunner {
    /**
     *
     * The Adapter pattern is a simple pattern where
     * the goal is to use polymorphism with
     * two different object by creating
     * a common interface.
     *
     * To do this the Adapter class translates
     * the methods of the common interface
     * to the methods of the Adaptee.
     *
     * The Client is refereed to as the "Target",
     * the "Adapter" is the translator and
     * the object without the common
     * interface to be translated
     * is called the "Adaptee".
     *
     */
    protected function Run() {
        $passengerPlane = new PassengerPlane();
        $airship = new Airship();
        $airshipAdapter = new AirshipAdapter($airship);

        $this->write("Passenger plane:");
        $this->write($passengerPlane->breaks());
        $this->write($passengerPlane->refuel(200));
        $this->write($passengerPlane->takeOff());

        $this->write("Airship:");
        $this->write($airshipAdapter->breaks());
        $this->write($airshipAdapter->refuel(1200));
        $this->write($airshipAdapter->takeOff());
    }
}