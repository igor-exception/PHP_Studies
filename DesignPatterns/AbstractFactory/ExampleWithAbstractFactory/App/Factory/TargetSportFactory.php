<?php
namespace App\Factory;

use App\Interface\LandSportInterface;
use \App\Product\{Swimming, AthleticRun};
use \App\Interface\SportInterface;
use App\Interface\WaterSportInterface;

class TargetSportFactory implements SportInterface
{
    public function createLandSport(): LandSportInterface
    {
        return new AthleticRun;
    }

    public function createWaterSport(): WaterSportInterface
    {
        return new Swimming;
    }
}