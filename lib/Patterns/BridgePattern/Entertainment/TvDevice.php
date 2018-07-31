<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 19:23
 */

namespace Patterns\BridgePattern\Entertainment;

class TvDevice extends EntertainmentDevice {
    public function __construct(Int $deviceState, Int $maxDeviceState) {
        $this->deviceState = $deviceState;
        $this->maxState = $maxDeviceState;
    }

    public function buttonOnePressed() {
        $this->deviceState--;
    }

    public function buttonTwoPressed() {
        $this->deviceState++;
    }
}