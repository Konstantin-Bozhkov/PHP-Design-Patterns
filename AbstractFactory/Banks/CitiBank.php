<?php
require_once('Interfaces/BankUnionInterface.php');

class CitiLoanAcct{
    public function __construct()
    {
        echo "Citi bank loan account\n"; 
    }
}

class CitiSavingAcct{
    public function __construct()
    {
        echo "Citi bank saving account\n"; 
    }
}

class CitiBank extends BankUnionInterface{
    
    public function savingAcct()
    {
        return new CitiSavingAcct();
    }
    public function loanAcct()
    {
        return new CitiLoanAcct();
    }
}

