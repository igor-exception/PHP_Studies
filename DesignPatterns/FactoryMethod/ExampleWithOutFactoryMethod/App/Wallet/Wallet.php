<?php

namespace App\Wallet;

class Wallet
{
    private $balance;
    public function __construct()
    {
        $this->balance = 0;
    }

    public function deposit($value): void
    {
        $this->balance += $value;
    }

    public function withdraw($value): bool
    {
        if($value > $this->balance) {
            return false;
        }
        $this->balance -= $value;
        return true;
    }

    public function available()
    {
        return $this->balance;
    }
}