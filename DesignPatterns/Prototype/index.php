<?php

require_once 'Player.php';

echo '-------PROTOTYPE------';

$player1 = new Player(
    'John Doe',
    '1980-01-01',
    'male',
    'Brazil',
    'São Paulo',
    'Poa',
    'Dog');

$player2 = $player1->clone();

$player2->setName('Mark Doe');

$player1->getInfo();
echo '---------------<br>';
$player2->getInfo();