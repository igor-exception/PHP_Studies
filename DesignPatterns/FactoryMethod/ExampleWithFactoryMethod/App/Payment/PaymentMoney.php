<?php
namespace App\Payment;
use \App\Payment\PaymentInterface;
use \App\Payment\Method\Money;

class PaymentMoney extends AbstractPayment
{
    public function createPayment(): PaymentInterface
    {
        return new Money;
    }
}