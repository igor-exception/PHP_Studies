<?php
namespace App\Payment;
use \App\Payment\PaymentInterface;
use \App\Payment\Method\Pix;

class PaymentPix extends AbstractPayment
{
    public function createPayment(): PaymentInterface
    {
        return new Pix;
    }
}