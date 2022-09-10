<?php
    if(isset($_GET['status'])){
        if($_GET['status'] == 'errorEmpty') {
            echo '<p>Preencha todos os campos</p>';
        }elseif($_GET['status'] == 'errorInvalidEmail') {
            echo '<p>Email inválido, verifique e tente novamente!</p>';
        }elseif($_GET['status'] == 'errorPersist') {
            echo '<p>Erro ao salvar usuário no sistema. Entre em contato com o administrador!</p>';
        }else{
            echo '<p>Usuário cadastrado com sucesso!</p>';
        }
    }
?>

<form action="./App/MainController/MainController.php" method="POST">
    <label for="name">Name: </label><br>
    <input type="text" name="name"><br>
    <label for="email">Email: </label><br>
    <input type="text" name="email"><br><br>
    <input type="submit" value="Submit">
</form>