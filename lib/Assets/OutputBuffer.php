<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-15
 * Time: 18:55
 */

namespace Assets;

class OutputBuffer {
    private $buffer;

    public function write(String $text) {
        $this->buffer[] = $text;
    }

    public function readBuffer() : array {
        $returnBuffer = $this->buffer;
        $this->buffer = [];
        return $returnBuffer;
    }

    public function pop() {
        $returnValue = $this->buffer[0];
        unset($this->buffer[0]);
        array_values($this->buffer);
        return $returnValue;
    }
}