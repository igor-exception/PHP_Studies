<?php

namespace App\Payment;

class Cash implements \App\Interface\IPayment{
    public function pay(){
        echo '<p>Paid with Cash</p>';
    }

    public function processPayment()
    {
        $this->pay();
    }
}