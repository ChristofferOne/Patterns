<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 12:18
 */

namespace Patterns\FactoryPattern\Vehicles;

class RollsRoyse extends Vehicle {
    public function __construct() {
        $this->setSpeed(260);
        $this->setMake('Rolls Royse');
        $this->setClass('Sport');
        $this->setColor('Gray');
        $this->setOrigin('Great Britain');
    }
}