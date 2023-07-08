<?php

namespace App\Interface;

use App\Interface\{LandSportInterface, WaterSportInterface};

interface SportInterface
{
    public function createLandSport(): LandSportInterface;
    public function createWaterSport(): WaterSportInterface;
}