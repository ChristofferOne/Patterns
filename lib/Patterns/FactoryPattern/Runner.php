<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 11:54
 */

namespace Patterns\FactoryPattern;

use Assets\OutputBuffer;
use Patterns\FactoryPattern\Factories\VehicleFactory;

class Runner {
    /**
     *
     * The factory pattern is used when you want
     * to embed logic to choose and return
     * an unknown class out of several
     * possible classed with a common
     * parent at runtime.
     *
     * The "Factory" will provide the logic to
     * choose which of these classes will
     * be constructed and returned.
     *
     */
    public function Run() {
        $outputBuffer = new OutputBuffer();
        $vehicleFactory = new VehicleFactory();

        $volvo = $vehicleFactory->makeVehicle('Volvo');
        $outputBuffer->write($volvo->getMake());
        $outputBuffer->write($volvo->getOrigin());

        return $outputBuffer->readBuffer();
    }
}