<?php
namespace App\Service;

use App\Model\Employee\User;

class BonusControllerService
{
    public function getBonus(User $user): float
    {
        return $user->getSalary() * 0.1;
    }
}