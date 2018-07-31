<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-22
 * Time: 18:26
 */

namespace Patterns\FacadePattern\Bank;

use Patterns\FacadePattern\Bank\Transfer\AuthenticateAccountNo;
use Patterns\FacadePattern\Bank\Transfer\AuthenticateSecurityCode;
use Patterns\FacadePattern\Bank\Transfer\FundCheck;

class BankTransferFacade {
    private $accountNo;
    private $securityCode;

    private $authenticateAccountNo;
    private $authenticateSecurityCode;
    private $fundCheck;

    public function __construct(Int $accountNo, Int $securityCode) {
        $this->accountNo = $accountNo;
        $this->securityCode = $securityCode;

        $this->authenticateAccountNo = new AuthenticateAccountNo($this->accountNo);
        $this->authenticateSecurityCode = new AuthenticateSecurityCode($this->accountNo, $this->securityCode);
        $this->fundCheck = new FundCheck($this->accountNo);
    }

    public function deposit(float $amount) {
        if ($this->authenticate()) {
            $this->fundCheck->deposit($amount);
            return true;
        }

        return false;
    }

    public function withdraw(float $amount) {
        if ($this->authenticate()) {
            if ($this->fundCheck->fundsAvailable($amount)) {
                $this->fundCheck->withdraw($amount);
                return true;
            }
        }

        return false;
    }

    private function authenticate() {
        if ($this->authenticateAccountNo->authenticate()) {
            if ($this->authenticateSecurityCode->authenticate()) {
                return true;
            }
        }

        return false;
    }
}