<?php

namespace Patterns\StrategyPattern;

use Patterns\StrategyPattern\Animals\Bird;
use Patterns\StrategyPattern\Animals\Butterfly;
use Patterns\StrategyPattern\Animals\Dog;
use Patterns\StrategyPattern\Animals\Fish;

class Runner {
    /**
     *
     * The strategy pattern is used to dynamically
     * set a trait of an object who inherits
     * from a common parent.
     *
     * These traits can also be
     * dynamically changed
     * during runtime
     *
     */
    public function Run(): array {
        $oBird = new Bird('Birdie', 2, 6);
        $oButterflyYoung = new Butterfly('Butterfly (child)', 0, 1);
        $oButterfly = new Butterfly('Butterfly', 2, 1);
        $oDog = new Dog('Doggie', 3, 20);
        $oFish = new Fish('Fishy', 2, 5);

        $aBehavour = [];

        $aBehavour[$oBird->getName()] = $oBird->tryToFly();
        $aBehavour[$oButterfly->getName()] = $oButterfly->tryToFly();
        $aBehavour[$oDog->getName()] = $oDog->tryToFly();
        $aBehavour[$oFish->getName()] = $oFish->tryToFly();

        // Dynamically changing the flying trait.
        $aBehavour[$oButterflyYoung->getName()] = $oButterflyYoung->tryToFly();
        $oButterflyYoung->setAge(2);
        $oButterflyYoung->setName('Butterfly (grown)');
        $aBehavour[$oButterflyYoung->getName()] = $oButterflyYoung->tryToFly();

        return $aBehavour;
    }
}
