<?php

namespace App\Model\Account;

class SavingAccount extends Account
{
    protected function taxes(): float
    {
        return 0.03;
    }
}