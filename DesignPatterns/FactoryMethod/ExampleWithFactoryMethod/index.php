<?php
require __DIR__ . '/vendor/autoload.php';
use \App\Payment\{PaymentBitcoin, PaymentCreditCard, PaymentMoney, PaymentPix};
  if(isset($_POST['value']) && !empty($_POST['value']) && 
    isset($_POST['payment-method']) && !empty($_POST['payment-method'])) {

      // se dados são válidos...
      if($_POST['payment-method'] == 'money') {
        $payment = new PaymentMoney();
      } else if($_POST['payment-method'] == 'pix') {
        $payment = new PaymentPix();
      } else if($_POST['payment-method'] == 'credit-card') {
        $payment = new PaymentCreditCard();
      }else if($_POST['payment-method'] == 'bitcoin'){
        $payment = new PaymentBitcoin();
      } else {
        throw new \Exception('****Erro com metodo de pagamento****');
      }

      echo '<br>';
      echo '<h1>' . 'O valor a ser pago é de: '. $payment->totalValue($_POST['value']) . '</h1>';

  }

?>

<form method="POST">
  <label for="value">Valor a ser pago:</label><br>
  <input type="text" name="value" value="1000">
  <br/><br>
  
  <label for="payment-method">Escolha uma forma de pagamento:</label><br>
  <select name="payment-method">
    <option value="money">Dinheiro (0% desconto | 0% juros)</option>
    <option value="pix">Pix (5% desconto)</option>
    <option value="bitcoin">Bitcoin (15% desconto)</option>
    <option value="credit-card">Cartão de crédito (10% juros)</option>
  </select>
  <br/><br>
  <input type="submit" value="Pagar">
</form>