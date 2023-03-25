<?php
namespace App\Model;

class Address
{
    private string $street;
    private string $number;
    private string $postal_code;

    public function __construct(string $street, string $number, string $postal_code)
    {
        $this->street = $street;
        $this->number = $number;
        $this->postal_code = $postal_code;
    }

    public function getFullAddress(): string
    {
        return "{$this->street}, {$this->number} - {$this->postal_code}";
    }
}