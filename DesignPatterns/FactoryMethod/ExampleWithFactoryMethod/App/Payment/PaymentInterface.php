<?php

namespace App\Payment;

interface PaymentInterface
{
    public function taxAmount();
    public function discountAmount();
}