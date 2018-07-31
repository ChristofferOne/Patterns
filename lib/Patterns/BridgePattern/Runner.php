<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 19:28
 */

namespace Patterns\BridgePattern;

use Assets\BaseRunner;
use Patterns\BridgePattern\Entertainment\TvDevice;
use Patterns\BridgePattern\Entertainment\TvRemoteMute;
use Patterns\BridgePattern\Entertainment\TvRemotePause;

class Runner extends BaseRunner {
    /**
     *
     *
     *
     */
    protected function Run() {
        $theTv = new TvRemoteMute(new TvDevice(1, 25));
        $theTvTwo = new TvRemotePause(new TvDevice(1, 50));

        $theTv->buttonTwoPressed();
        $theTv->buttonTwoPressed();
        $theTv->buttonTwoPressed();

        $this->write($theTv->deviceFeedback());

        $theTvTwo->buttonTwoPressed();
        $theTvTwo->buttonTwoPressed();
        $theTvTwo->buttonTwoPressed();
        $theTvTwo->buttonOnePressed();
        $theTvTwo->buttonTwoPressed();
        $theTvTwo->buttonTwoPressed();

        $this->write($theTvTwo->deviceFeedback());
    }
}