<?php
namespace App\Product;
use App\Interface\WaterSportInterface;

class Swimming implements WaterSportInterface
{
    public function saySportType()
    {
        echo "Sou esporte Aquatico, com foco em tempo!";
    }
}