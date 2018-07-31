<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-28
 * Time: 16:00
 */

namespace Patterns\TemplateMethodPattern\Restaurant;

use Assets\SingletonOutputBuffer;

abstract class Hoagie {
    final function makeSandwich() {
        $this->cutBun();

        if ($this->customerWantsMeat()) {
            $this->addMeat();
        }

        if ($this->customerWantsCheese()) {
            $this->addCheese();
        }

        if ($this->customerWantsVegetables()) {
            $this->addVegetables();
        }

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }

        $this->wrapTheHoagie();
    }

    public function cutBun() {
        SingletonOutputBuffer::getInstance()->write("Bun is cut");
    }

    abstract function addMeat();
    abstract function addCheese();
    abstract function addVegetables();
    abstract function addCondiments();

    function customerWantsMeat() : Bool {return true;}
    function customerWantsCheese() : Bool {return true;}
    function customerWantsVegetables() : Bool {return true;}
    function customerWantsCondiments() : Bool {return true;}

    public function wrapTheHoagie() {
        SingletonOutputBuffer::getInstance()->write("Wrapped and ready!");
    }
}