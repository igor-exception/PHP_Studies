<?php

namespace App\Utils;

class Utils {
    public static function formatBrl($val)
    {
        return 'R$ '. number_format($val, 2, ',', '.');
    }
}