<?php
namespace App\Payment;
use \App\Payment\{AbstractPaymentFactory, PaymentInterface};
use \App\Payment\Method\Bitcoin;

class PaymentBitcoinFactory extends AbstractPaymentFactory
{
    public function createPayment(): PaymentInterface
    {
        return new Bitcoin;
    }
}