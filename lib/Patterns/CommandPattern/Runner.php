<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 13:04
 */

namespace Patterns\CommandPattern;

use Assets\BaseRunner;
use Patterns\CommandPattern\ElectronicDevices\Commands\TurnAllUp;
use Patterns\CommandPattern\ElectronicDevices\Commands\TurnTvOff;
use Patterns\CommandPattern\ElectronicDevices\Commands\TurnTvOn;
use Patterns\CommandPattern\ElectronicDevices\Commands\TurnTvUp;
use Patterns\CommandPattern\ElectronicDevices\DeviceInvoker;
use Patterns\CommandPattern\ElectronicDevices\DeviceRemote;

class Runner extends BaseRunner {
    /**
     *
     * The Command pattern is with an "Invoker" who will
     * execute defined commands with the "Command
     * Interface".
     *
     * These commands can be stored to execute
     * at a later time and also be executed
     * several times in a row.
     *
     * The commands can - but is not required
     * to - have undo capability that
     * will rollback the command
     * after it's been run.
     *
     */
    protected function Run() {
        $device = DeviceRemote::getDevice();
        $onCommand = new TurnTvOn($device);
        $invoker = new DeviceInvoker($onCommand);

        $this->write($device->getPowerState());
        $this->write($device->getVolumeState());

        $invoker->fire();

        /** ------------ */

        $offCommand = new TurnTvOff($device);
        $invoker = new DeviceInvoker($offCommand);
        $invoker->fire();

        $this->write($device->getPowerState());
        $this->write($device->getVolumeState());

        /** ------------ */

        $volumeUpCommand = new TurnTvUp($device);
        $invoker = new DeviceInvoker($volumeUpCommand);

        $invoker->fire();

        $this->write($device->getPowerState());
        $this->write($device->getVolumeState());

        $invoker->fire();
        $invoker->fire();

        $this->write($device->getPowerState());
        $this->write($device->getVolumeState());

        /** ------------ */

        $this->write("---------");

        $deviceTwo = DeviceRemote::getDevice();
        $devices = [$device, $deviceTwo];

        $turnAllUpCommand = new TurnAllUp($devices);
        $invoker = new DeviceInvoker($turnAllUpCommand);

        $this->write("D1: ".$device->getVolumeState());
        $this->write("D2: ".$deviceTwo->getVolumeState());

        $invoker->fire();

        $this->write("D1: ".$device->getVolumeState());
        $this->write("D2: ".$deviceTwo->getVolumeState());

        $invoker->fire();
        $invoker->fire();

        $this->write("D1: ".$device->getVolumeState());
        $this->write("D2: ".$deviceTwo->getVolumeState());

        $this->write("Turning it down!");
        $invoker->undo();

        $this->write("D1: ".$device->getVolumeState());
        $this->write("D2: ".$deviceTwo->getVolumeState());
    }
}