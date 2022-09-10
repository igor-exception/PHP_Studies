<?php

require __DIR__ . '/vendor/autoload.php';


try {
    $customer = new \App\Customer\Customer('','');
    echo '<p>Sucesso. Informações do user são: ' . $customer->getInfo() . '</p>';
}catch(\App\Exception\InvalidNameException $e){
    echo '<p>Nome inválido, precisa ter no mínimo 3 caracteres!</p>';
    
}catch(\App\Exception\InvalidEmailException $e){
    echo '<p>Email inválido, deve ser no padrão: email@dominio.com</p>';
    
}
