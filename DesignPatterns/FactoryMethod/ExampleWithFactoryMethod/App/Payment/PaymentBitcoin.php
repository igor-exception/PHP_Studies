<?php
namespace App\Payment;
use \App\Payment\{AbstractPayment, PaymentInterface};
use \App\Payment\Method\Bitcoin;

class PaymentBitcoin extends AbstractPayment
{
    public function createPayment(): PaymentInterface
    {
        return new Bitcoin;
    }
}