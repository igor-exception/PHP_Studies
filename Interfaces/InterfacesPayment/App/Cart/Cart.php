<?php

namespace App\Cart;

class Cart {
    public function pay(\App\Interface\IPayment $payment){
        $payment->processPayment();
    }
}