<?php

namespace App\Payment\Method;
use \App\Payment\PaymentInterface;

class Bitcoin implements PaymentInterface
{
    public function discountAmount()
    {
        return 15;
    }

    public function taxAmount()
    {
        return 0;
    }
}