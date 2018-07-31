<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 15:03
 */

namespace Patterns\BuilderPattern\Plane;


class Plane implements PlanePlan {

    private $planeBody;
    private $planeWings;
    private $planeRudder;
    private $planeColor;

    public function setPlaneBody(String $body) {
        $this->planeBody = $body;
    }

    public function setPlaneWings(String $wings) {
        $this->planeWings = $wings;
    }

    public function setPlaneRudder(String $rudder) {
        $this->planeRudder = $rudder;
    }

    public function setPlaneColor(String $color) {
        $this->planeColor = $color;
    }

    public function getPlaneBody() : String {
        return $this->planeBody;
    }

    public function getPlaneWings() : String {
        return $this->planeWings;
    }

    public function getPlaneRudder() : String {
        return $this->planeRudder;
    }

    public function getPlaneColor() : String {
        return $this->planeColor;
    }
}