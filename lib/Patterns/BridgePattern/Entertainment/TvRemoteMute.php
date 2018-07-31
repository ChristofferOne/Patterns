<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 19:36
 */

namespace Patterns\BridgePattern\Entertainment;

class TvRemoteMute extends RemoteButton {

    public function buttonThreePressed(): Void {
        $this->device->volumeLevel = 0;
    }

    public function buttonFourPressed(): Void {
        // TODO: Implement buttonFourPressed() method.
    }
}