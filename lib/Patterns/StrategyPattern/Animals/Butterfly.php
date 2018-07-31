<?php

namespace Patterns\StrategyPattern\Animals;

use Patterns\StrategyPattern\Animals\Traits\CantFly;
use Patterns\StrategyPattern\Animals\Traits\ItFlys;

class Butterfly extends Animal {
    private $coocoon;

    public function __construct(String $name = '', int $age = 0, int $weight = 0) {
        parent::__construct($name, $age, $weight);
        $this->setCoocoon($age);
    }

    public function setAge(int $age) {
        parent::setAge($age);
        $this->setCoocoon($age);
    }

    private function setCoocoon($age) {
        if ($age > 1) {
            $this->coocoon = false;
            $this->setFlys(new ItFlys());
        } else {
            $this->coocoon = true;
            $this->setFlys(new CantFly());
        }
    }
}