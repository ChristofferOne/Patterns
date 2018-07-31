<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:25
 */

namespace Patterns\AbstractFactoryPattern\NavalShips\Components;

class Missile implements Weapon {
    public function __toString(): String {
        return "Cruise missiles ready";
    }
}