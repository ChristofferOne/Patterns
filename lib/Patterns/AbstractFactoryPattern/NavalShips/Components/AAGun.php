<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:23
 */

namespace Patterns\AbstractFactoryPattern\NavalShips\Components;


class AAGun implements Weapon {
    public function __toString(): String {
        return "Anti-Air guns ready";
    }
}