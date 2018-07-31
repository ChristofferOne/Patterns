<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-28
 * Time: 15:59
 */

namespace Patterns\TemplateMethodPattern\Restaurant;

use Assets\SingletonOutputBuffer;

class ItalianHoagie extends Hoagie {
    private $meatUsed = ["Salami", "Pepperoni", "Ham"];
    private $cheeseUsed = ["Provolone"];
    private $veggiesUsed = ["Lettuce", "Tomatoes", "Onions", "Peppers"];
    private $condimentsUsed = ["Oil", "Vinegar"];

    function addMeat() {
        SingletonOutputBuffer::getInstance()->write("Adding meat: ");

        foreach ($this->meatUsed as $meat) {
            SingletonOutputBuffer::getInstance()->write($meat);
        }
    }

    function addCheese() {
        SingletonOutputBuffer::getInstance()->write("Adding cheese: ");

        foreach ($this->cheeseUsed as $cheese) {
            SingletonOutputBuffer::getInstance()->write($cheese);
        }
    }

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