<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 13:39
 */

namespace Patterns\AbstractFactoryPattern\NavalShips\Types;

use Patterns\AbstractFactoryPattern\Factories\ShipFactory;
use Patterns\AbstractFactoryPattern\NavalShips\Ship;

class Cruiser extends Ship {
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