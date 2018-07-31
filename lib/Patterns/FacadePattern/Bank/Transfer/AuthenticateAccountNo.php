<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 18:31
 */

namespace Patterns\FacadePattern\Bank\Transfer;

class AuthenticateAccountNo {
    private $accountNo;

    public function __construct(Int $accountNo) {
        $this->accountNo = $accountNo;
    }

    public function authenticate() {
        if ($this->accountNo == '666666') {
            return true;
        }

        return false;
    }
}