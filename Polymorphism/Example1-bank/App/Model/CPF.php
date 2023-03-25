<?php
namespace App\Model;

class CPF
{
    private string $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function getCPF(): string
    {
        return $this->number;
    }
}