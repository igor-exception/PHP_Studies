<?php

require __DIR__. '/vendor/autoload.php';


$cart = new \App\Cart\Cart();

$cash = new \App\Payment\Cash();
$visa = new \App\Payment\Visa();
$paypal = new \App\Payment\Paypal();

$cart->pay($cash);
$cart->pay($visa);
$cart->pay($paypal);

