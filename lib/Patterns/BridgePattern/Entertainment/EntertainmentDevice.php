<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 19:20
 */

namespace Patterns\BridgePattern\Entertainment;

abstract class EntertainmentDevice {
    public $deviceState;
    public $maxState;
    public $volumeLevel = 0;

    public abstract function buttonOnePressed();
    public abstract function buttonTwoPressed();

    public function deviceFeedback() : Int {
        if ($this->deviceState > $this->maxState || $this->deviceState < 0) {
            $this->deviceState = 0;
        }

        return $this->deviceState ?? 0;
    }

    public function buttonThreePressed() {
        $this->volumeLevel++;
    }

    public function buttonFourPressed() {
        $this->volumeLevel--;
    }
}