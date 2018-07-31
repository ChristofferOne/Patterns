<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 14:47
 */

namespace Patterns\BuilderPattern;

use Assets\OutputBuffer;
use Patterns\BuilderPattern\Plane\CargoPlaneBuilder;
use Patterns\BuilderPattern\Plane\PlaneEngineer;

class Runner {
    /**
     *
     * The Builder pattern is used when constructing an object
     * out of many other objects from a blueprint called
     * a Builder. The Builder then gets sent to
     * the Engineer/Director and gets built
     * as expected from instructions.
     *
     * The Builder is the only object who decides
     * the structure and all other objects
     * simply only return abstract
     * objects without knowing
     * what they are.
     *
     */
    public function Run() {
        $oOutputBuffer = new OutputBuffer();

        $planeBuilder = new CargoPlaneBuilder();
        $planeEngineer = new PlaneEngineer($planeBuilder);

        $planeEngineer->makePlane();
        $cargoPlane = $planeEngineer->getPlane();

        $oOutputBuffer->write($cargoPlane->getPlaneBody());
        $oOutputBuffer->write($cargoPlane->getPlaneWings());
        $oOutputBuffer->write($cargoPlane->getPlaneRudder());
        $oOutputBuffer->write($cargoPlane->getPlaneColor());

        return $oOutputBuffer->readBuffer();
    }
}