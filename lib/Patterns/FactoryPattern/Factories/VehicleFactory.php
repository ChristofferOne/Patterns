<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 12:19
 */

namespace Patterns\FactoryPattern\Factories;

use Patterns\FactoryPattern\Vehicles\Ferrari;
use Patterns\FactoryPattern\Vehicles\RollsRoyse;
use Patterns\FactoryPattern\Vehicles\Volvo;

class VehicleFactory {
    public function makeVehicle(String $vehicleType) {
        $newVehicle = null;

        switch ($vehicleType) {
            case 'Volvo':
                return new Volvo();
                break;
            case 'Ferrari':
                return new Ferrari();
                break;
            case 'Rolls Royse':
                return new RollsRoyse();
                break;
            default:
                return null;
                break;
        }
    }
}