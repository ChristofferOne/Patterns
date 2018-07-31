<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 18:31
 */

namespace Patterns\FacadePattern\Bank\Transfer;

class AuthenticateSecurityCode {
    private $accountNo;
    private $securityCode;

    public function __construct(Int $accountNo, Int $securityCode) {
        $this->accountNo = $accountNo;
        $this->securityCode = $securityCode;
    }

    public function authenticate() {
        if ($this->accountNo == '666666' && $this->securityCode && '4444') {
            return true;
        }

        return false;
    }
}