<?php

namespace App\Model\Employee;

use App\Model\CPF;
use App\Model\Address;

abstract class User
{
    private string $name;
    private Address $address;
    private CPF $cpf;
    private float $salary;

    public function __construct(string $name, Address $address, CPF $cpf, float $salary)
    {
        $this->name = $name;
        $this->address = $address;
        $this->cpf = $cpf;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }
}