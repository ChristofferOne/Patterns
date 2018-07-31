<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:22
 */

namespace Patterns\AbstractFactoryPattern\NavalShips\Components;

class CombustionEngine implements Engine {
    public function __toString(): String {
        return "Combustion engine (1500 MN power)";
    }
}