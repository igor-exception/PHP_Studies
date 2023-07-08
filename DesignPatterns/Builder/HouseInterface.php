<?php

interface HouseInterface
{
    public function setStreet($street);
    public function setNumber($number);
    public function setZip_code($zip_code);
    public function setFloors($floors);
    public function setBathrooms($bathrooms);
    public function setBedrooms($bedrooms);
    public function setGarden($garden);
    public function setPool($pool);
    public function setGrill($grill);
}