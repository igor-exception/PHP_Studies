<?php

namespace App\Utils;

class Utils {
    const PI = 3.1415;

    public static function format($num)
    {
        return number_format($num, 2, ',', '.');
    }
}