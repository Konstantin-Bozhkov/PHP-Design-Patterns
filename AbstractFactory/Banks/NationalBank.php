<?php
require_once('Interfaces/BankUnionInterface.php');

class NationalLoanAcct{
    public function __construct()
    {
        echo "National bank loan account\n"; 
    }
}

class NationalSavingAcct{
    public function __construct()
    {
        echo "National bank saving account\n"; 
    }
}

class NationalBank extends BankUnionInterface{
    public function savingAcct()
    {
        return new NationalSavingAcct();
    }
    public function loanAcct()
    {
        return new NationalLoanAcct();
    }
}

