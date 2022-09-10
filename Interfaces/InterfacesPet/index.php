<?php

require __DIR__ . '/vendor/autoload.php';

$person = new \App\Person\Person('John Doe');
$dog = new \App\Pet\Dog();
$cat = new \App\Pet\Cat();
$fish = new \App\Pet\Fish();

$person->addPet($dog);
$person->addPet($cat);
$person->addPet($fish);


$person->getPets();

