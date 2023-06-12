<?php

namespace App\Payment;
use \App\Payment\PaymentInterface;

abstract class AbstractPaymentFactory
{
    abstract public function createPayment(): PaymentInterface;

    protected function calculateDiscount($value)
    {
        $payment = $this->createPayment();
        $discount = $payment->discountAmount($value);
        return $value - ($value * $discount / 100);
    }

    protected function calculateTax($value)
    {
        $payment = $this->createPayment();
        $tax = $payment->taxAmount();
        return $value + ($value * $tax / 100);
    }

    public function totalValue($value)
    {
        $total = $this->calculateDiscount($value);
        $total = $this->calculateTax($total);
        return $total;
    }
}