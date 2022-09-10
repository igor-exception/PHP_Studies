<?php

namespace App\Pet;

class Fish implements \App\Interfaces\Ipet {
    public function getType()
    {
        return 'Fish';
    }
}