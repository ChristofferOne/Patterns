<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 12:10
 */

namespace Patterns\FactoryPattern\Vehicles;

class Ferrari extends Vehicle {
    public function __construct() {
        $this->setSpeed(280);
        $this->setMake('Ferrari');
        $this->setClass('SuperSport');
        $this->setColor('Red');
        $this->setOrigin('Italy');
    }
}