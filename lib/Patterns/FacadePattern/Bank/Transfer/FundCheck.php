<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 18:32
 */

namespace Patterns\FacadePattern\Bank\Transfer;

class FundCheck {
    private $funds = 1000;
    private $accountNo;

    public function __construct(Int $accountNo) {
        $this->accountNo = $accountNo;
    }

    public function fundsAvailable(float $amount) : Bool {
        return ($this->funds >= $amount) ? true : false;
    }

    public function deposit(float $amount) {
        $this->funds += $amount;
    }

    public function withdraw(float $amount) {
        $this->funds -= $amount;
    }
}