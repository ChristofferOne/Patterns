<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:45
 */

namespace Patterns\AbstractFactoryPattern\Factories;

use Patterns\AbstractFactoryPattern\NavalShips\Components\AAGun;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Armour;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Engine;
use Patterns\AbstractFactoryPattern\NavalShips\Components\HeavyArmour;
use Patterns\AbstractFactoryPattern\NavalShips\Components\NuclearEngine;
use Patterns\AbstractFactoryPattern\NavalShips\Components\Weapon;

class BattleshipFactory implements ShipFactory {
    public function addWeapon(): Weapon {
        return new AAGun();
    }

    public function addEngine(): Engine {
        return new NuclearEngine();
    }

    public function addArmour(): Armour {
        return new HeavyArmour();
    }
}