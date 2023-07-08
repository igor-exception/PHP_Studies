<?php

require 'Singleton.php';
require 'NotSingletonClass.php';

$singleton_obj_1 = Singleton::getInstance();
$singleton_obj_2 = Singleton::getInstance();

$normal_class_1 = new NotSingletonClass();
$normal_class_2 = new NotSingletonClass();


if($singleton_obj_1 === $singleton_obj_2) {
    echo nl2br("Instancia da classe Singleton é a mesma \n");
} else {
    echo nl2br("Instancia da classe Singleton NÃO é a mesma \n");
}

echo '<br><br>';

if($normal_class_1 === $normal_class_2) {
    echo nl2br("Instancia da classe normal é a mesma \n");
} else {
    echo nl2br("Instancia da classe normal NÃO é a mesma. São instancias diferentes! \n");
}
