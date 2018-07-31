<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 14:12
 */

namespace Patterns\SingletonPattern;

use Assets\OutputBuffer;

class Runner {
    /**
     *
     * The Singelton pattern is used when you want
     * a specific object to only be instantiated
     * once and be reused without having
     * to pass around it's reference.
     *
     */
    public function Run() {
        $oOutputBuffer = new OutputBuffer();

        $oOutputBuffer->write(spl_object_hash(SingletonStack::getInstance()));

        SingletonStack::getInstance()->push("Item number 1");
        SingletonStack::getInstance()->push("Item number 2");

        $oOutputBuffer->write(SingletonStack::getInstance()->pop());
        $oOutputBuffer->write(SingletonStack::getInstance()->pop());

        $oOutputBuffer->write(spl_object_hash(SingletonStack::getInstance()));

        return $oOutputBuffer->readBuffer();
    }
}