<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 12:40
 */

namespace Patterns\DecoratorPattern;

use Assets\BaseRunner;
use Patterns\DecoratorPattern\Pizzas\Mozzarella;
use Patterns\DecoratorPattern\Pizzas\PlainPizza;
use Patterns\DecoratorPattern\Pizzas\TomatoSauce;

class Runner extends BaseRunner {
    /**
     *
     * The Decorator pattern is used to dynamically
     * modify existing objects at runtime.
     *
     * This pattern is used when there is a need
     * of using inheritance capabilities
     * during runtime with flexibility.
     *
     * It can also be used to "decorate"
     * or extend old code with new
     * code at a later point.
     *
     */
    protected function Run() {
        $pizza = new TomatoSauce(new Mozzarella(new PlainPizza()));

        $this->write($pizza->getDescription());
        $this->write($pizza->getCost());
    }
}