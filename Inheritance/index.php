<?php

require __DIR__ . '/vendor/autoload.php';

$toaster = new \App\Toaster;

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

$toaster->toast();


echo "--------------------------------------------------<br>";
$toasterPro = new \App\ToasterPro;

$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');
$toasterPro->addSlice('bread');

$toasterPro->toastBagel();


echo "--------------------------------------------------<br>";
$fancyOven = new \App\FancyOven();

$fancyOven->addSlice('bread');
$fancyOven->addSlice('bread');
$fancyOven->addSlice('bread');
$fancyOven->addSlice('bread');
$fancyOven->addSlice('bread');
$fancyOven->addSlice('bread');
$fancyOven->addSlice('bread');

$fancyOven->fry();
$fancyOven->toast();
echo "--------------------------------------------------<br>";