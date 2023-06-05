<?php
namespace App\Payment\Method;
use \App\Payment\PaymentInterface;

class Pix implements PaymentInterface
{
    public function discountAmount()
    {
        return 5;
    }

    public function taxAmount()
    {
        return 0;
    }
}