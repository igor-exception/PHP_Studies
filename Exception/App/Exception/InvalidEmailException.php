<?php

namespace App\Exception;

class InvalidEmailException extends \Exception {
    protected $message = 'Email inválido exception';
}