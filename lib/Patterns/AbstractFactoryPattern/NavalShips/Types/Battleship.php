<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:38
 */

namespace Patterns\AbstractFactoryPattern\NavalShips\Types;

use Patterns\AbstractFactoryPattern\Factories\ShipFactory;
use Patterns\AbstractFactoryPattern\NavalShips\Ship;

class Battleship extends Ship {
    private $oShipFactory;

    public function __construct(ShipFactory $oShipFactory) {
        $this->oShipFactory = $oShipFactory;
    }

    function makeShip() {
        $this->oWeapon = $this->oShipFactory->addWeapon();
        $this->oEngine = $this->oShipFactory->addEngine();
        $this->oArmour = $this->oShipFactory->addArmour();
    }
}