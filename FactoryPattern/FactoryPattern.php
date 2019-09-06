<?php 
namespace FactoryPattern;

class Bank{
    public $balance;
}

/* Concrete Factory */
class CityBank extends Bank{
    /**
     * @var void
    */
    public function __construct()
    {
        $this->balance = 3000;
    }
}
/* Concrete Factory */
class NationalBank extends Bank{
    /**
     * @var void
    */
    public function __construct()
    {
        $this->balance = 2000;
    }
}

// Creator
interface BankUnion
{
    public function getBalance(string $accountNumber);
}

// Concrete Creators
class BankFactory implements BankUnion
{
     public function getBalance(string $accountNumber)
     {
        if(strpos($accountNumber,'CITI') !== false){
            return new CityBank();
        }
        elseif(strpos($accountNumber,'NATIONAL') !== false){
            return new NationalBank();
        }
        else{
            echo _('Invalid account number');
            exit();
        }       
     }
}
$bank = new BankFactory();
$citiAcct = $bank->getBalance("CITI-321");
$nationalAcct = $bank->getBalance("NATIONAL-987");
// $unknown = $bank->getBalance("Unknown-258");

echo _( "My citi balance is $citiAcct->balance and national balance is $nationalAcct->balance");