<?php

namespace App;

class Product {
    private $name;
    private $price;
    
    public function __construct($name, $price) {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function getFullProductInfo()
    {
        return "<p>{$this->getName()} => {$this->getPrice()}</p>";
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return number_format($this->price,2, ',', '.');
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}