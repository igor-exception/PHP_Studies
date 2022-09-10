<?php

namespace App\Payment;

class Visa implements \App\Interface\IPayment{
    public function pay()
    {
        echo '<p>Paid with Visa</p>';
    }

    public function processPayment()
    {
        $this->pay();
    }
}