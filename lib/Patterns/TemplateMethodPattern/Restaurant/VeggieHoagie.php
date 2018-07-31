<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-28
 * Time: 16:13
 */

namespace Patterns\TemplateMethodPattern\Restaurant;

use Assets\SingletonOutputBuffer;

class VeggieHoagie extends Hoagie {
    private $veggiesUsed = ["Lettuce", "Tomatoes", "Onions", "Peppers"];
    private $condimentsUsed = ["Oil", "Vinegar"];

    function customerWantsMeat(): Bool {
        return false;
    }

    function customerWantsCheese(): Bool {
        return false;
    }

    function addMeat() {}

    function addCheese() {}

    function addVegetables() {
        SingletonOutputBuffer::getInstance()->write("Adding vegetables: ");

        foreach ($this->veggiesUsed as $veggie) {
            SingletonOutputBuffer::getInstance()->write($veggie);
        }
    }

    function addCondiments() {
        SingletonOutputBuffer::getInstance()->write("Adding condiments: ");

        foreach ($this->condimentsUsed as $condiment) {
            SingletonOutputBuffer::getInstance()->write($condiment);
        }
    }
}