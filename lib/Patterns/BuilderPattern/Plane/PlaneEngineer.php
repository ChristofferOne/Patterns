<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 15:08
 */

namespace Patterns\BuilderPattern\Plane;

class PlaneEngineer {
    private $planeBuilder;

    public function __construct(PlaneBuilder $planeBuilder) {
        $this->planeBuilder = $planeBuilder;
    }

    public function getPlane() : Plane {
        return $this->planeBuilder->getPlane();
    }

    public function makePlane() {
        $this->planeBuilder->buildPlaneBody();
        $this->planeBuilder->buildPlaneWings();
        $this->planeBuilder->buildPlaneRudder();
        $this->planeBuilder->buildPlaneColor();
    }
}