<?php
    require __DIR__ . '/vendor/autoload.php';

    if(isset($_POST['algorism'])){
        $algorism_to_number = new \App\Conversor\AlgorismToNumber();
        $ret = $algorism_to_number->convertRomanToNumeral($_POST['algorism']);

        if($algorism_to_number->thereIsError()){
            echo "<p>{$algorism_to_number->getError()}</p>";
        }else{
            echo "<p>{$_POST['algorism']} convertido é: <b>{$ret}</b></p>";
        }

    }

    if(isset($_POST['numeral'])){
        $number_to_algorism = new \App\Conversor\NumberToAlgorism();
        $ret = $number_to_algorism->convertNumeralToRoman($_POST['numeral']);

        if($number_to_algorism->thereIsError()){
            echo "<p>{$number_to_algorism->getError()}</p>";
        }else{
            echo "<p>{$_POST['numeral']} convertido é: <b>{$ret}</b></p>";
        }

    }
?>

<form method="POST">
    <label for='algorism'>Algorismo Romano para Inteiro:</label>
    <input type='text' name='algorism' placeholder="Exemplo: XIV para 14"><br><br>
    <input type='submit' value='Calcular'>
</form>

<br><br>
<form method="POST">
    <label for='numeral'>Inteiro para Algorismo Romano:</label>
    <input type='text' name='numeral' placeholder="Exemplo: 10 para X"><br><br>
    <input type='submit' value='Calcular'>
</form>