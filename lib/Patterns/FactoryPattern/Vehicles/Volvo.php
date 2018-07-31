<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 12:14
 */

namespace Patterns\FactoryPattern\Vehicles;

class Volvo extends Vehicle {
    public function __construct() {
        $this->setSpeed(240);
        $this->setMake('Volvo');
        $this->setClass('Family');
        $this->setColor('Black');
        $this->setOrigin('Sweden');
    }
}