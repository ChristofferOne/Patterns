<?php

namespace Patterns\StrategyPattern\Animals;

use Patterns\StrategyPattern\Animals\Traits\ItFlys;

class Bird extends Animal {
    public function __construct(String $name = '', int $age = 0, int $weight = 0) {
        parent::__construct($name, $age, $weight);
        $this->setFlys(new ItFlys());
    }
}
