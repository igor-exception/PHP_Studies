<?php
namespace App\Product;
use \App\Interface\LandSportInterface;

class AthleticRun implements LandSportInterface
{
    public function saySportType()
    {
        echo "Sou esporte Terrestre, com foco em tempo!";
    }
}