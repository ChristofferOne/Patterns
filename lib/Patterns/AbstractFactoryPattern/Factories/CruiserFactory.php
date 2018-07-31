<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:46
 */

namespace Patterns\AbstractFactoryPattern\Factories;

use Patterns\AbstractFactoryPattern\NavalShips\Components\Armour;
use Patterns\AbstractFactoryPattern\NavalShips\Components\CombustionEngine;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Engine;
use Patterns\AbstractFactoryPattern\NavalShips\Components\LightArmour;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Missile;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Weapon;

class CruiserFactory implements ShipFactory {
    public function addWeapon(): Weapon {
        return new Missile();
    }

    public function addEngine(): Engine {
        return new CombustionEngine();
    }

    public function addArmour(): Armour {
        return new LightArmour();
    }
}