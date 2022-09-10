<?php

namespace App;

class Company {
    private $company;
    private \App\Address $address;
    private $products = [];
    private $team;

    public function boot($company, $address)
    {
        $this->setCompany($company);
        $this->setAddress($address);
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getProduct()
    {
        return $this->products;
    }

    public function addMember($name, $job)
    {
        $this->team[] = new \App\User($name, $job);
    }

    public function getMember()
    {
        return $this->team;
    }
    
    /**
     * Get the value of company
     */ 
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of company
     *
     * @return  self
     */ 
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}