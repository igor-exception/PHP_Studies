<?php

namespace App\Pet;

class Cat implements \App\Interfaces\Ipet {
    public function getType()
    {
        return 'Cat';
    }
}