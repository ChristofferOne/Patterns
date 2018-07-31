<?php

namespace Patterns\StrategyPattern\Animals;

use Patterns\StrategyPattern\Animals\Traits\Flys;

class Animal {
    private $age;
    private $weight;
    private $speed;
    private $name;
    private $flys;

    public function __construct(String $name = '', int $age = 0, int $weight = 0) {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        $this->speed = 0;
    }

    public function setAge(int $age) {
        $this->age = $age;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setweight(int $weight) {
        $this->weight = $weight;
    }

    public function getweight(): int {
        return $this->weight;
    }

    public function setName(String $name) {
        $this->name = $name;
    }

    public function getName(): String {
        return $this->name;
    }

    public function setSpeed(float $speed) {
        $this->speed = $speed;
    }

    public function getSpeed(): float {
        return $this->speed;
    }

    // The Flys attribute is set Dynamically during runtime
    // to an object of type Flys (interface)
    public function setFlys(Flys $flys) {
        $this->flys = $flys;
    }

    // Run the interfaced function "fly"
    public function tryToFly(): String {
        return $this->flys->fly();
    }
}
