<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 12:48
 */

namespace Patterns\DecoratorPattern\Pizzas;

class PlainPizza implements Pizza {

    public function getDescription(): String {
        return "Dough";
    }

    public function getCost(): float {
        return 4.00;
    }
}