<?php

namespace App\Model\Account;

class CheckingAccount extends Account
{
    protected function taxes(): float
    {
        return 0.05;
    }
}