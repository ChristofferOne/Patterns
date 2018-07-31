<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 19:32
 */

namespace Patterns\BridgePattern\Entertainment;

abstract class RemoteButton {
    protected $device;

    public function __construct(EntertainmentDevice $device) {
        $this->device = $device;
    }

    public function buttonOnePressed() {
        $this->device->buttonOnePressed();
    }

    public function buttonTwoPressed() {
        $this->device->buttonTwoPressed();
    }

    public function deviceFeedback() : Int {
        return $this->device->deviceFeedback();
    }

    public abstract function buttonThreePressed();
    public abstract function buttonFourPressed();
}