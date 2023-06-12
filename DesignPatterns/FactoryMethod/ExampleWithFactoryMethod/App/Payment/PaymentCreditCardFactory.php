<?php
namespace App\Payment;
use \App\Payment\PaymentInterface;
use \App\Payment\Method\CreditCard;
use \App\Payment\AbstractPaymentFactory;

class PaymentCreditCardFactory extends AbstractPaymentFactory
{
    public function createPayment(): PaymentInterface
    {
        return new CreditCard;
    }
}