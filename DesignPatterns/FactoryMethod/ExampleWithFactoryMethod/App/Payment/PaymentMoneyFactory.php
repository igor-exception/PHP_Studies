<?php
namespace App\Payment;
use \App\Payment\PaymentInterface;
use \App\Payment\Method\Money;
use \App\Payment\AbstractPaymentFactory;

class PaymentMoneyFactory extends AbstractPaymentFactory
{
    public function createPayment(): PaymentInterface
    {
        return new Money;
    }
}