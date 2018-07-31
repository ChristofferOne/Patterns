<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 15:01
 */

namespace Patterns\BuilderPattern\Plane;

interface PlanePlan {
    public function setPlaneBody(String $body);
    public function setPlaneWings(String $wings);
    public function setPlaneRudder(String $rudder);
    public function setPlaneColor(String $color);
}