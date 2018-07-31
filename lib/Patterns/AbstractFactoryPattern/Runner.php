<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 12:26
 */

namespace Patterns\AbstractFactoryPattern;

use Assets\OutputBuffer;
use Patterns\AbstractFactoryPattern\Buildings\BattleshipBuilding;
use Patterns\AbstractFactoryPattern\Buildings\CruiseShipBuilding;

class Runner {
    /**
     *
     * The Abstract Factory pattern is similar to the
     * normal Factory pattern except everything
     * if encapsulated and the final objects
     * contains objects that makes use of
     * the strategy pattern.
     *
     * With the Abstract Factory pattern you can
     * create "families" of related objects
     * without having to specify the
     * exact class.
     *
     * This is used to change all the objects within
     * dynamically throughout runtime by using
     * the common interface of the objects.
     *
     */
    public function Run() {
        $oOutputBuffer = new OutputBuffer();


        $oBattleshipBuilding = new BattleshipBuilding();
        $oIowa = $oBattleshipBuilding->orderShip("Iowa");
        $oYamato = $oBattleshipBuilding->orderShip("Yamato");

        $oCruiserBuilding = new CruiseShipBuilding();
        $oLion = $oCruiserBuilding->orderShip("LightCruiser");

        $oOutputBuffer->write($oIowa);
        $oOutputBuffer->write($oYamato);
        $oOutputBuffer->write($oLion);

        return $oOutputBuffer->readBuffer();
    }
}