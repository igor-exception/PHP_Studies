<?php

namespace App;

class Address {
    private $street;
    private $number;
    private $complement;

    public function __construct($street, $number, $complement)
    {
        $this->setStreet($street);
        $this->setNumber($number);
        $this->setComplement($complement);
    }

    public function getFullAddress()
    {
        return $this->getStreet() .', '. $this->getNumber() .' - '. $this->getComplement();
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of complement
     */ 
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of complement
     *
     * @return  self
     */ 
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }
}