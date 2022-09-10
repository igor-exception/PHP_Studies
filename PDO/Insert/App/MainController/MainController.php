<?php

require './../../vendor/autoload.php';

if(isset($_POST['name'], $_POST['email']))
{
    if(empty($_POST['name']) || empty($_POST['email']))
    {
        header('Location: ../../index.php?status=errorEmpty');
        exit();
    }

    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if(!$email)
    {
        header('Location: ../../index.php?status=errorInvalidEmail');
        exit();
    }

    $db = new \App\Database\Database();
    if($db->insert($name, $email))
    {
        header('Location: ../../index.php?status=success');
        exit();
    }else{
        header('Location: ../../index.php?status=errorPersist');
        exit();
    }

    
}