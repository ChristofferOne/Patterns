<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:56
 */

namespace Patterns\AbstractFactoryPattern\Buildings;

use Patterns\AbstractFactoryPattern\Factories\CruiserFactory;
use Patterns\AbstractFactoryPattern\NavalShips\Ship;
use Patterns\AbstractFactoryPattern\NavalShips\Types\Cruiser;

class CruiseShipBuilding extends ShipBuilding {

    protected function makeShip(String $tShipType): Ship {
        $oShip = null;

        $oFactory = new CruiserFactory();
        $oShip = new Cruiser($oFactory);

        switch ($tShipType) {
            case "Battlecruiser":
                $oShip->setClass("Battlecruiser");
                $oShip->setName("Lion");
                break;
            case "LightCruiser":
                $oShip->setClass("Light cruiser");
                $oShip->setName("Caroline");
                break;
            default:
                return null;
                break;
        }

        return $oShip;
    }
}