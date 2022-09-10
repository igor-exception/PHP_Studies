<?php

namespace App\Bank;
use \App\Utils\Utils;

class AccountSaving extends Account {
    private $interest; // juros poupanca

    public function __construct($agency, $account, $balance, \App\User\User $user) {
        parent::__construct($agency, $account, $balance, $user);
        $this->setInterest(1.006);

    }

    public function deposit($val)
    {
        $this->setBalance($this->getBalance() + (abs($val) * $this->getInterest()));
        echo '<p> + Depositado: ' . Utils::formatBrl(abs($val)) . '</p>';
    }

    public function withdraw($val)
    {
        if($this->getBalance() >= abs($val)) {
            $this->setBalance($this->getBalance() - abs($val));
            echo '<p> - Sacado: ' . Utils::formatBrl(abs($val)) . '</p>';
        }else{
            echo '<p> Valor de saque inválido. Tentou Sacar: ' . Utils::formatBrl(abs($val)) .'/ Saldo disponível: '.Utils::formatBrl($this->getBalance()) .'</p>';
        }
    }

    /**
     * Get the value of interest
     */ 
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set the value of interest
     *
     * @return  self
     */ 
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }
}