<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 12:22
 */

namespace Patterns\PrototypePattern\Vegetables;

class Bean extends Vegetable {
    public function __construct() {
        $this->setName("Bean");
    }

    function __clone() {
        // TODO: Implement __clone() method.
    }
}