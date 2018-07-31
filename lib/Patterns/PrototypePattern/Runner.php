<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-21
 * Time: 15:19
 */

namespace Patterns\PrototypePattern;

use Assets\BaseRunner;
use Patterns\PrototypePattern\Vegetables\Bean;
use Patterns\PrototypePattern\Vegetables\Tomato;

class Runner extends BaseRunner {
    /**
     *
     * The prototype pattern is used to clone or
     * copy existing classes to not have
     * to create too many classes.
     *
     */
    protected function Run() {
        $tomatoProto = new Tomato();
        $beanProto = new Bean();

        $this->write($tomatoProto->getName());
        $this->write($beanProto->getName());

        $tomatoTwo = clone $tomatoProto;
        $this->write("Clone: ".$tomatoTwo->getName());

        $beanTwo = clone $beanProto;
        $beanTwo->setName("Bean clone");
        $this->write($beanTwo->getName());
    }
}