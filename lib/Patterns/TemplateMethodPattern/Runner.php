<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-28
 * Time: 15:55
 */

namespace Patterns\TemplateMethodPattern;

use Assets\BaseRunner;
use Assets\SingletonOutputBuffer;
use Patterns\TemplateMethodPattern\Restaurant\ItalianHoagie;
use Patterns\TemplateMethodPattern\Restaurant\VeggieHoagie;

class Runner extends BaseRunner {
    /**
     *
     *
     *
     */
    protected function Run() {
        $customer12Hoagie = new ItalianHoagie();
        $customer12Hoagie->makeSandwich();

        $customer14Hoagie = new VeggieHoagie();
        $customer14Hoagie->makeSandwich();

        $buffer = SingletonOutputBuffer::getInstance()->readBuffer();
        foreach ($buffer as $item) {
            $this->write($item);
        }
    }
}