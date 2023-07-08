<?php

require_once "HouseInterface.php";

class House implements HouseInterface
{
    private $street;
    private $number;
    private $zip_code;
    private $floors;
    private $bathrooms;
    private $bedrooms;
    private $garden;
    private $pool;
    private $grill;

    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function setZip_code($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;

        return $this;
    }

    public function setGarden($garden)
    {
        $this->garden = $garden;

        return $this;
    }

    public function setPool($pool)
    {
        $this->pool = $pool;

        return $this;
    }

    public function setGrill($grill)
    {
        $this->grill = $grill;

        return $this;
    }

    public function makeHouse()
    {
        echo "House was made!";

    }
}

    