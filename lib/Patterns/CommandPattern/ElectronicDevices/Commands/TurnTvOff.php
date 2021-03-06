<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:10
 */

namespace Patterns\CommandPattern\ElectronicDevices\Commands;

use Patterns\CommandPattern\Command;
use Patterns\CommandPattern\ElectronicDevices\ElectronicDevice;

class TurnTvOff implements Command {
    private $device;

    public function __construct(ElectronicDevice $device) {
        $this->device = $device;
    }

    public function execute() {
        $this->device->off();
    }

    public function undo() {
        $this->device->on();
    }
}