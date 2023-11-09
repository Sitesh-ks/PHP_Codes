<?php
class BankAccount {
    protected $accountHolder;
    protected $balance;
    
    public function __construct($holder, $balance) {
        $this->accountHolder = $holder;
        $this->balance = $balance;
    }
    
    public function deposit($amount) {
        $this->balance += $amount;
    }
    
    public function withdraw($amount) {
        if ($this->balance - $amount >= 0) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds";
        }
    }
    
    public function getAccountHolder() {
        return $this->accountHolder;
    }
    
    public function getBalance() {
        return $this->balance;
    }
    
    public function printAccountInfo() {
        echo "Account Holder: " . $this->accountHolder . "\n";
        echo "Balance: " . $this->balance . "\n";
    }
}

class SavingsAccount extends BankAccount {
    private $interestRate;
    
    public function __construct($holder, $balance, $interestRate) {
        parent::__construct($holder, $balance);
        $this->interestRate = $interestRate;
    }
    
    public function calculateInterest() {
        $interest = $this->balance * $this->interestRate;
        $this->balance += $interest;
    }
}

class CheckingAccount extends BankAccount {
    private $freeWithdrawals;
    private $withdrawalCount;
    private $withdrawalFee;
    
    public function __construct($holder, $balance, $freeWithdrawals, $withdrawalFee) {
        parent::__construct($holder, $balance);
        $this->freeWithdrawals = $freeWithdrawals;
        $this->withdrawalCount = 0;
        $this->withdrawalFee = $withdrawalFee;
    }
    
    public function withdraw($amount) {
        if ($this->withdrawalCount < $this->freeWithdrawals) {
            parent::withdraw($amount);
            $this->withdrawalCount++;
        } else {
            $fee = $this->withdrawalFee;
            if ($this->balance - $amount - $fee >= 0) {
                $this->balance -= ($amount + $fee);
            } else {
                echo "Insufficient funds";
            }
        }
    }
}




?>