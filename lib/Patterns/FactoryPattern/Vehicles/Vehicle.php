<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 12:07
 */

namespace Patterns\FactoryPattern\Vehicles;

abstract class Vehicle {
    private $speed;
    private $make;
    private $class;
    private $color;
    private $origin;

    public function getSpeed() : Int {
        return $this->speed;
    }

    public function getMake() : String {
        return $this->make;
    }

    public function getClass() : String {
        return $this->class;
    }

    public function getColor() : String {
        return $this->color;
    }

    public function getOrigin() : String {
        return $this->origin;
    }

    public function setSpeed(Int $speed) {
        $this->speed = $speed;
    }

    public function setMake(String $make) {
        $this->make = $make;
    }

    public function setClass(String $class) {
        $this->class = $class;
    }

    public function setColor(String $color) {
        $this->color = $color;
    }

    public function setOrigin(String $origin) {
        $this->origin = $origin;
    }
}