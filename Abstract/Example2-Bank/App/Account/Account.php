<?php
namespace App\Account;

use App\User;


abstract class Account
{
    private User $user;
    private float $value;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->value = 0;
    }

    public function deposit(float $deposit_value): void
    {
        if($deposit_value < 0) {
            echo 'Valor deve ser positivo';
            exit();
        }

        $this->value += $deposit_value;
    }

    public function withdraw(float $withdraw_value): void
    {
        $total = $withdraw_value + ($withdraw_value * $this->taxes());
        if($total > $this->value)
        {
            echo 'Valor a sacar não pode ser maior que valor de saldo';
            exit();
        }

        $this->value -= $total;
    }

    abstract protected function taxes(): float;

    public function getValue(): float
    {
        return $this->value;
    }

    public function getUserName(): string
    {
        return $this->user->getName();
    }

    public function transfer(Account $another_account, $transfer_value): void
    {
        if($transfer_value <= 0) {
            echo 'Valor para transferir inválido';
            exit();
        }

        if($transfer_value > $this->value) {
            echo 'Valor a ser transferido é maior que valor disponível em conta';
            exit();
        }

        $this->value -= $transfer_value;
        $another_account->deposit($transfer_value);
    }
}