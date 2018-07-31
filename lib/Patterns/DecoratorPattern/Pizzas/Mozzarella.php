<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 12:49
 */

namespace Patterns\DecoratorPattern\Pizzas;

class Mozzarella extends ToppingDecorator {
    public function __construct(Pizza $pizza) {
        parent::__construct($pizza);
    }

    public function getDescription(): String {
        return $this->tempPizza->getDescription() . ", Mozzarella";
    }

    public function getCost(): float {
        return $this->tempPizza->getCost() + .50;
    }
}