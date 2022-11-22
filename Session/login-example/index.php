<?php
session_start();
if($_SESSION['logged'] != true){
    header('Location: login.php');
    exit;
}

?>

<h2>Olá <?= $_SESSION['username']?>, Conteúdo liberado!</h2>