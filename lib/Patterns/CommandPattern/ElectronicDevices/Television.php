<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:07
 */

namespace Patterns\CommandPattern\ElectronicDevices;

class Television implements ElectronicDevice {
    private $powerState = 'on';
    private $volumeState = 0;

    public function on() {
        $this->powerState = 'on';
    }

    public function off() {
        $this->powerState = 'off';
    }

    public function volumeUp() {
        $this->volumeState++;
    }

    public function volumeDown() {
        $this->volumeState--;
    }

    public function getPowerState() : String {
        return $this->powerState;
    }

    public function getVolumeState() : Int {
        return $this->volumeState;
    }
}