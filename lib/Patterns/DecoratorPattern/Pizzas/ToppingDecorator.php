<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 12:48
 */

namespace Patterns\DecoratorPattern\Pizzas;

abstract class ToppingDecorator implements Pizza {
    protected $tempPizza;

    public function __construct(Pizza $pizza) {
        $this->tempPizza = $pizza;
    }

    public function getDescription(): String {
        return $this->tempPizza->getDescription();
    }

    public function getCost(): float {
        return $this->tempPizza->getCost();
    }
}