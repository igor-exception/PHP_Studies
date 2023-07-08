<?php
namespace App\Factory;

use App\Interface\LandSportInterface;
use App\Interface\SportInterface;
use App\Interface\WaterSportInterface;
use \App\Product\{Football, WaterPolo};

class InvasionSportFactory implements SportInterface
{
    public function createLandSport(): LandSportInterface
    {
        return new Football;
    }

    public function createWaterSport(): WaterSportInterface
    {
        return new WaterPolo;
    }
}