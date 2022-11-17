<?php

namespace App\Conversor;

abstract class Conversor {
    public $table =         ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
    public $reverse_table = [1 => 'I', 5 => 'V', 10 => 'X', 50 => 'L', 100 => 'C', 500 => 'D', 1000 => 'M'];
    public $cant_repeat =   [5, 50, 500];
    public $can_repeat =    [1, 10, 100, 1000];

    private $error = '';

    public function insertError($message)
    {
        $this->error = $message;
    }

    public function getError()
    {
        return $this->error;
    }

    public function thereIsError()
    {
        return strlen($this->getError()) > 0 ? true : false;
    }

    public function breakDownNumbers($number)
    {
        $array_of_numbers = [];
        $splitted_array_of_numbers = str_split((string)$number);
        for($i=0; $i < count($splitted_array_of_numbers); $i++){
            $ret = $this->addZero($splitted_array_of_numbers[$i], count($splitted_array_of_numbers) - 1 - $i);
            if($ret > 0){
                $array_of_numbers[] = $ret;
            }
        }
        
        return $array_of_numbers;
    }

    public function addZero($string_number, $size)
    {
        $zeros = '';
        while($size > 0){
            $zeros = $zeros . '0';
            $size--;
        }

        return (int)$string_number . $zeros;
    }
}