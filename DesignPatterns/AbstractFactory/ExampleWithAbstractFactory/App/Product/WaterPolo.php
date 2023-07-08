<?php
namespace App\Product;

use \App\Interface\WaterSportInterface;

class WaterPolo implements WaterSportInterface
{
    public function saySportType()
    {
        echo "Sou esporte Aquático, com foco em pontos!";
    }
}