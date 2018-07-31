<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 15:18
 */

namespace Assets;

abstract class BaseRunner {
    private $oOutputBuffer;

    protected abstract function Run();

    public function __construct() {
        $this->oOutputBuffer = new OutputBuffer();
    }

    protected function write(String $item) {
        $this->oOutputBuffer->write($item);
    }

    public function fire() : array {
        $this->Run();
        return $this->oOutputBuffer->readBuffer();
    }
}