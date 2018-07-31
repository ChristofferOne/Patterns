<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:26
 */

namespace Patterns\CommandPattern\ElectronicDevices\Commands;

use Patterns\CommandPattern\Command;

class TurnAllUp implements Command {
    private $devices;

    public function __construct(array $devices) {
        $this->devices = $devices;
    }

    public function execute() {
        foreach ($this->devices as $device) {
            $device->volumeUp();
        }
    }

    public function undo() {
        foreach ($this->devices as $device) {
            $device->volumeDown();
        }
    }
}