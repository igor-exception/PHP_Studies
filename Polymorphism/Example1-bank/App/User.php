<?php

namespace App;
use App\CPF;
use App\Address;

class User
{
    private string $name;
    private Address $address;
    private CPF $cpf;

    public function __construct(string $name, Address $address, CPF $cpf)
    {
        $this->name = $name;
        $this->address = $address;
        $this->cpf = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }
}