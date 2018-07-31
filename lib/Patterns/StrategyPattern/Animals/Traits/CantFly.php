<?php

namespace Patterns\StrategyPattern\Animals\Traits;

class CantFly implements Flys {
    public function fly(): string {
        return "Can't fly";
    }
}
