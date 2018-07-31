<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:43
 */

namespace Patterns\AbstractFactoryPattern\Factories;

use Patterns\AbstractFactoryPattern\NavalShips\Components\Armour;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Engine;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Weapon;

interface ShipFactory {
    public function addWeapon() : Weapon;
    public function addEngine() : Engine;
    public function addArmour() : Armour;
}