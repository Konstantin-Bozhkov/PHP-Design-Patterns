<?php 
require_once('Banks/CitiBank.php');
require_once('Banks/NationalBank.php');



class BankUnion{
    
    public $factory;

    public function __construct($factory = none)
    {
        $this->factory = $factory;
    }

    public function showBankDetails()
    {
        // $bank = $this->factory->getBank();
        $saving_acct = $this->factory->savingAcct();
        $loan_acct = $this->factory->loanAcct();
    }
}

$citi = new CitiBank();
$national = new NationalBank();

$factory = new BankUnion($citi);
$factory->showBankDetails();

$factory = new BankUnion($national);
$factory->showBankDetails();