<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 16:09
 */

namespace Patterns\FacadePattern;

use Assets\BaseRunner;
use Patterns\FacadePattern\Bank\BankTransferFacade;

class Runner extends BaseRunner {
    /**
     *
     * The Facade pattern is a simple pattern containing
     * a facade class which simplifies the interface
     * and handles a bigger sequence of actions
     * when one of the simplified methods
     * is called on the facade.
     *
     */
    protected function Run() {
        $bankFacade = new BankTransferFacade(666666, 4444);
        $this->write($bankFacade->deposit(200));
        $this->write($bankFacade->withdraw(560));

        $this->write($bankFacade->withdraw(6500));
    }
}