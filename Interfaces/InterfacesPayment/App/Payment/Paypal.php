<?php

namespace App\Payment;

class Paypal implements \App\Interface\IPayment, \App\Interface\ILogin {
    public function pay()
    {
        echo '<p>Paid with Paypal</p>';
    }

    public function loginFirst()
    {
        echo '<p>Logado Paypal</p>';
    }


    public function processPayment()
    {
        $this->loginFirst();
        $this->pay();
    }
}