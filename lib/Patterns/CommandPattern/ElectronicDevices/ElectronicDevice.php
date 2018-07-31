<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 15:05
 */

namespace Patterns\CommandPattern\ElectronicDevices;

/**
 *
 * Any objects implementing this interface will be a "receiver"
 * which means that it will be the object receiving
 * the actual command that will be sent.
 *
 */
interface ElectronicDevice {
    public function on();
    public function off();
    public function volumeUp();
    public function volumeDown();
    public function getPowerState() : String;
    public function getVolumeState() : Int;
}