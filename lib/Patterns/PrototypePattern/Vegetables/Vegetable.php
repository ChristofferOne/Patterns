<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 12:23
 */

namespace Patterns\PrototypePattern\Vegetables;

abstract class Vegetable {
    protected $name;

    abstract function __clone();

    public function getName() : String {
        return $this->name;
    }

    public function setName(String $name) {
        $this->name = $name;
    }
}