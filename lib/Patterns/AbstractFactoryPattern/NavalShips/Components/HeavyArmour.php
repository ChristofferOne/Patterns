<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:22
 */

namespace Patterns\AbstractFactoryPattern\NavalShips\Components;

class HeavyArmour implements Armour {
    public function __toString(): String {
        return "Heavy armour";
    }
}