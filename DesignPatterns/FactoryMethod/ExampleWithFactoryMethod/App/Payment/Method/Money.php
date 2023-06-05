<?php
namespace App\Payment\Method;
use \App\Payment\PaymentInterface;

class Money implements PaymentInterface
{
    public function discountAmount()
    {
        return 0;
    }

    public function taxAmount()
    {
        return 0;
    }
}