<?php

require __DIR__ . '/vendor/autoload.php';

$user = new \Source\App\User\User();
$government = new \Source\App\Government\Government();

$user->sendEmail();
$government->sendEmail();
