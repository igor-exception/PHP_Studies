<?php

require_once "CloneInterface.php";

class Player implements CloneInterface
{
    private $name;
    private $birth;
    private $gender;
    private $country;
    private $state;
    private $city;
    private $favorite_pet;

    public function __construct($name, $birth, $gender, $country, $state, $city, $favorite_pet)
    {
        $this->name = $name;
        $this->birth = $birth;
        $this->gender = $gender;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->favorite_pet = $favorite_pet;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function clone()
    {
        return clone $this;
    }

    public function getInfo()
    {
        echo "name: $this->name<br>";
        echo "birth: $this->birth<br>";
        echo "gender: $this->gender<br>";
        echo "country: $this->country<br>";
        echo "state: $this->state<br>";
        echo "city: $this->city<br>";
        echo "favorite_pet: $this->favorite_pet<br>";
    }
}