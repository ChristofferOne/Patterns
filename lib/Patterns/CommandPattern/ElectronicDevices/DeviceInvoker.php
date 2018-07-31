<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:13
 */

namespace Patterns\CommandPattern\ElectronicDevices;

use Patterns\CommandPattern\Command;

class DeviceInvoker {
    private $command;

    public function __construct(Command $command) {
        $this->command = $command;
    }

    public function fire() {
        $this->command->execute();
    }

    public function undo() {
        $this->command->undo();
    }
}