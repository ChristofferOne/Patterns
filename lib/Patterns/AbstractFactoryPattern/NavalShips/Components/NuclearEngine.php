<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:20
 */

namespace Patterns\AbstractFactoryPattern\NavalShips\Components;


class NuclearEngine implements Engine {
    public function __toString(): String {
        return "Nuclear engine (2000 MN of power)";
    }
}