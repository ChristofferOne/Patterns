<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:04
 */

namespace Patterns\AbstractFactoryPattern\Buildings;

use Patterns\AbstractFactoryPattern\NavalShips\Ship;

abstract class ShipBuilding {
    protected abstract function makeShip(String $tShipType) : Ship;

    public function orderShip(String $tShipType) {
        $oShip = $this->makeShip($tShipType);

        $oShip->makeShip();

        return $oShip;
    }
}