<?php

namespace App\Person;

class Person {
    private $name;
    private $pets = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addPet(\App\Interfaces\IPet $pet)
    {
        $this->pets[] = $pet;
    }

    public function getPets()
    {
        echo "The Person: {$this->name}, has: <br>";
        foreach($this->pets as $i => $pet)
        {
            echo '<p>'. ($i + 1). '- '. $pet->getType() .'</p>';
        }
    }
}