<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Payment\{PaymentBitcoinFactory, PaymentCreditCardFactory, PaymentMoneyFactory, PaymentPixFactory};
  if(isset($_POST['value']) && !empty($_POST['value']) && 
    isset($_POST['payment-method']) && !empty($_POST['payment-method'])) {

      // se dados são válidos...
      if($_POST['payment-method'] == 'money') {
        $payment = new PaymentMoneyFactory();
      } else if($_POST['payment-method'] == 'pix') {
        $payment = new PaymentPixFactory();
      } else if($_POST['payment-method'] == 'credit-card') {
        $payment = new PaymentCreditCardFactory();
      }else if($_POST['payment-method'] == 'bitcoin'){
        $payment = new PaymentBitcoinFactory();
      } else {
        throw new \Exception('****Erro com metodo de pagamento****');
      }

      echo '<br>';
      echo '<h1>' . 'O valor final a ser pago é de: '. $payment->totalValue($_POST['value']) . '</h1>';

  }

?>

<form method="POST">
  <label for="value">Valor inicial do produto:</label><br>
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