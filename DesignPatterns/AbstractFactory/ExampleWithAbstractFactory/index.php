<?php
require __DIR__ . '/vendor/autoload.php';
use \App\Factory\{InvasionSportFactory, TargetSportFactory};

if(isset($_POST['sport-type']) && !empty($_POST['sport-type'])) {
    $sport = null;
    switch ($_POST['sport-type']) {
        case 'athletic-run':
            $target = new TargetSportFactory;
            $sport = $target->createLandSport();
            break;
        case 'football':
            $invasion = new InvasionSportFactory;
            $sport = $invasion->createLandSport();
            break;
        case 'swimming':
            $target = new TargetSportFactory;
            $sport = $target->createWaterSport();
            break;
        case 'water-polo':
            $invasion = new InvasionSportFactory;
            $sport = $invasion->createWaterSport();
            break;

        default:
            throw new Exception('Tipo de esporte inválido!');
            break;
    }

    var_dump($sport->saySportType());
}

?>

<form method="POST">
    <label for="sport-type">Escolha um esporte: </label>
    <select name="sport-type">
        <option value="athletic-run">Corrida atlética</option>
        <option value="football">Futebol</option>
        <option value="swimming">Natação</option>
        <option value="water-polo">Polo Aquatico</option>
    </select>

    <input type="submit" value="Enviar">
</form>