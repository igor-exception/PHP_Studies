<?php

require_once "House.php";

$house = new House();

$house->setFloors(2)
    ->setGarden(true)
    ->setGrill(true)
    ->setBedrooms(3)
    ->setBathrooms(4)
    ->setStreet('Av. Paulista')
    ->setNumber('1000')
    ->setZip_code('08030-000');

$house->makeHouse();
