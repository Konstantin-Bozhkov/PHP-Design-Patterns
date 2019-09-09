<?php
abstract class BankUnionInterface
{
    // Force Extending class to define this method
    abstract protected function savingAcct();
    abstract protected function loanAcct();

}