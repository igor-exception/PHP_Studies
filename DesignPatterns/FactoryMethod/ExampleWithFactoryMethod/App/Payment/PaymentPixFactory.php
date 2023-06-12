<?php
namespace App\Payment;
use \App\Payment\PaymentInterface;
use \App\Payment\Method\Pix;
use \App\Payment\AbstractPaymentFactory;

class PaymentPixFactory extends AbstractPaymentFactory
{
    public function createPayment(): PaymentInterface
    {
        return new Pix;
    }
}