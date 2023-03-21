<?php

require_once __DIR__. '/vendor/autoload.php';
use App\User;
use App\Address;
use App\CPF;

$account1 = new \App\Account\CheckingAccount(
    new User(
        'John Doe',
        new Address(
            'Av. Paulista',
            '1001',
            '08030-000'
        ),
        new CPF('123.456.789-10') 
    )
);

$account2 = new \App\Account\SavingAccount(
    new User(
        'Patrick Doe',
        new Address(
            'Av. Consolação',
            '222',
            '08031-100'
        ),
        new CPF('987.654.321-10') 
    )
);




?>

<h1>Nome usuário 1: <?= $account1->getUserName()?></h1>


<h1>Saldo <?= $account1->getUserName()?>: <?= $account1->getValue()?></h1>

<h1>depositando 500,00 na conta do <?= $account1->getUserName()?>: <?= $account1->deposit(500)?></h1>

<h1>Saldo atual do <?= $account1->getUserName()?>: <?= $account1->getValue()?></h1>

<h1>Sacando 350,00 da conta do <?= $account1->getUserName()?>: <?= $account1->withdraw(350)?></h1>

<h1>Saldo atual do <?= $account1->getUserName()?>: <?= $account1->getValue()?></h1>

<hr>
<h1>Nome usuário 2: <?= $account2->getUserName()?></h1>
<h1>Saldo <?= $account2->getUserName()?>: <?= $account2->getValue()?></h1>
<h1>Transferindo 55,00 do <?= $account1->getUserName()?> para o <?= $account2->getUserName()?>: <?php $account1->transfer($account2, 55)?></h1>
<h1>Saldo <?= $account1->getUserName()?>: <?= $account1->getValue()?></h1>
<h1>Saldo <?= $account2->getUserName()?>: <?= $account2->getValue()?></h1>
<h1>Sacando 10,00 da conta do <?= $account2->getUserName()?>: <?= $account2->withdraw(10)?></h1>
<h1>Saldo <?= $account2->getUserName()?>: <?= $account2->getValue()?></h1>