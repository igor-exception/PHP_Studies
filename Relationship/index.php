<?php

require __DIR__ . '/vendor/autoload.php';

$company = new \App\Company();

$address = new \App\Address(
    'Rua Benjamin Capusso',
    '769',
    'Casa'
);

$company->boot('IO Systems', $address);
echo "<p>Company Name: {$company->getCompany()}</p>";

echo "<p>Address: {$company->getAddress()->getFullAddress()}</p>";


echo "<br>-----------------------------------------------<br>";
$nike = new \App\Product(
    'Nike',
    499.99
);

$asics = new \App\Product(
    'Asics',
    399.99
);

$kalenji = new \App\Product(
    'Kalenji',
    99.99
);

$company->addProduct($nike);
$company->addProduct($asics);
$company->addProduct($kalenji);



foreach($company->getProduct() as $i => $product)
{
    echo $product->getFullProductInfo();
}
echo "-----------------------------------------------<br>";
$company->addMember('John Doe', 'CEO');
$company->addMember('Mary Doe', 'Dev');
$company->addMember('Charlles Doe', 'Design');

foreach($company->getMember() as $i => $user)
{
    echo "<p>{$user->getFullDrescription()}</p>";
}

echo "-----------------------------------------------<br>";
