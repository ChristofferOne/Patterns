<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 15:05
 */

namespace Patterns\BuilderPattern\Plane;

class CargoPlaneBuilder implements PlaneBuilder {

    private $plane;

    public function __construct() {
        $this->plane = new Plane();
    }

    public function buildPlaneBody() {
        $this->plane->setPlaneBody("Cargo hold");
    }

    public function buildPlaneWings() {
        $this->plane->setPlaneWings("Short");
    }

    public function buildPlaneRudder() {
        $this->plane->setPlaneRudder("Wide");
    }

    public function buildPlaneColor() {
        $this->plane->setPlaneColor("Red");
    }

    public function getPlane(): Plane {
        return $this->plane;
    }
}