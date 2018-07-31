<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:10
 */

namespace Patterns\AbstractFactoryPattern\Buildings;

use Patterns\AbstractFactoryPattern\Factories\BattleshipFactory;
use Patterns\AbstractFactoryPattern\NavalShips\Ship;
use Patterns\AbstractFactoryPattern\NavalShips\Types\Battleship;

class BattleshipBuilding extends ShipBuilding {
    protected function makeShip(String $tShipType) : Ship {
        $oShip = null;

        $oFactory = new BattleshipFactory();
        $oShip = new Battleship($oFactory);

        switch ($tShipType) {
            case "Iowa":
                $oShip->setClass("Iowa");
                $oShip->setName("Dreadnought");
                break;
            case "Yamato":
                $oShip->setClass("Yamato");
                $oShip->setName("Musashi");
                break;
            default:
                return null;
                break;
        }

        return $oShip;
    }
}