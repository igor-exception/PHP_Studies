<?php
session_start();
    if($_POST['name'] == 'john' && $_POST['password'] == '1234'){
        $_SESSION['username'] = 'Mr. John';
        $_SESSION['logged'] = true;

        header('Location: index.php');
        exit;
    }else{
        echo 'Login inválido';
    }

?>

<h2>Para continuar, faça login!</h2>

<form action='' method='POST'>
    <label for="name">Name</label>
    <input type="text" name="name" value="john"><br>
    <label for="password">Password:</label>
    <input type="password" name="password" value="1234"><br>
    <input type="submit" value="Enter!">

</form>
