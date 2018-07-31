<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 15:04
 */

namespace Patterns\BuilderPattern\Plane;

interface PlaneBuilder {
    public function buildPlaneBody();
    public function buildPlaneWings();
    public function buildPlaneRudder();
    public function buildPlaneColor();
    public function getPlane() : Plane;
}