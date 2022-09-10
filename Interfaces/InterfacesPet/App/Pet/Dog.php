<?php

namespace App\Pet;

class Dog implements \App\Interfaces\Ipet {
    public function getType()
    {
        return 'Dog';
    }
}