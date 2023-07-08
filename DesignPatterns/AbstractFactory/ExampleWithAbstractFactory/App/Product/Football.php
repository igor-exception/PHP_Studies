<?php
namespace App\Product;
use \App\Interface\LandSportInterface;

class Football implements LandSportInterface
{
    public function saySportType()
    {
        echo "Sou esporte Terrestre, com foco em pontos!";
    }
}