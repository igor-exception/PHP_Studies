<?php
    require __DIR__ . '/vendor/autoload.php';
    use \App\Wallet\Wallet;

    $wallet = new Wallet();
    $wallet->deposit(1000);
    var_dump("Valor inicial: " . $wallet->available());

    if(isset($_POST['value']) && !empty($_POST['value'])) {
        $wallet->withdraw($_POST['value']);
        var_dump("Valor Após pagamento: " . $wallet->available());
    }
?>

<form method="POST">
  <label for="value">Valor a ser pago:</label>
  <input type="text" name="value">
  <input type="submit" value="Pagar com dinheiro">
</form>