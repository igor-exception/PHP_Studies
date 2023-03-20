<?php

require __DIR__ . '/vendor/autoload.php';

$john = new \App\User\User('John', 'Doe');

$accountSaving = new \App\Bank\AccountSaving(
    '0190',
    '48365-1',
    0,
    $john
);

var_dump($john);

var_dump($accountSaving);


echo "==========================================<br>";

echo "Nome cliente: {$accountSaving->getUser()->getFullName()}";

$accountSaving->deposit(1000);

$accountSaving->extract();

$accountSaving->withdraw(500);

$accountSaving->extract();

$accountSaving->withdraw(1500);

$accountSaving->withdraw(505);

$accountSaving->extract();