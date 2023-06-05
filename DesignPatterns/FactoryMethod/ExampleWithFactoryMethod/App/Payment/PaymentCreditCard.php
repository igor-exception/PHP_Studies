<?php
namespace App\Payment;
use \App\Payment\PaymentInterface;
use \App\Payment\Method\CreditCard;

class PaymentCreditCard extends AbstractPayment
{
    public function createPayment(): PaymentInterface
    {
        return new CreditCard;
    }
}