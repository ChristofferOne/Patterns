<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:26
 */

namespace Patterns\AbstractFactoryPattern\NavalShips;

abstract class Ship {
    private $tName;
    private $tClass;
    public $oWeapon;
    public $oArmour;
    public $oEngine;

    public function setName($tName) {
        $this->tName = $tName;
    }

    public function setClass($tClass) {
        $this->tClass = $tClass;
    }

    public function getName() : String {
        return $this->tName;
    }

    public function getClass() : String {
        return $this->tClass;
    }

    abstract function makeShip();

    public function __toString() : String {
        $tInfo = "The $this->tName has $this->oWeapon and $this->oArmour with a $this->oEngine and is of the $this->tClass class";
        return $tInfo;
    }
}