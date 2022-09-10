<?php

namespace App\Bank;
use App\Utils\Utils;


abstract class Account {
    private $agency;
    private $account;
    private $balance;
    private \App\User\User $user;

    public function __construct($agency, $account, $balance, \App\User\User $user) {
        $this->setAgency($agency);
        $this->SetAccount($account);
        $this->setBalance($balance);
        $this->setUser($user);
    }

    /**
     * Get the value of agency
     */ 
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * Set the value of agency
     *
     * @return  self
     */ 
    public function setAgency($agency)
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * Get the value of account
     */ 
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set the value of account
     *
     * @return  self
     */ 
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function extract()
    {
        echo '<p>==> Extrato: '. Utils::formatBrl($this->balance) . '</p>';
    }
    abstract public function deposit($value);
    abstract public function withdraw($value);
}