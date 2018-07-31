<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 12:48
 */

namespace Patterns\DecoratorPattern\Pizzas;

interface Pizza {
    public function getDescription() : String;
    public function getCost() : float;
}