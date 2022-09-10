<?php

namespace App\Customer;

use App\Exception\InvalidNameException;
use App\Exception\InvalidEmailException;

class Customer {
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        /*
            O lancamento de exceções é recomendado para quando algo que não 
            deveria ocorrer/nao previsto acontece.
            Para questoes como nome invalido, o mais recomendado eh utilizar uma validacao no proprio
            codigo, sem necessidade de exception.
            referencia: https://www.youtube.com/watch?v=Fcq2UhZkj_E
        */
        if(strlen($name) <= 2) {
            throw new InvalidNameException();
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException();
        }

        $this->name = $name;
        $this->email = $email;
    }

    public function getInfo()
    {
        return $this->name . ' - '.$this->email;
    }
}