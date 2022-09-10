<?php

namespace App\Conversor;

class AlgorismToNumber extends \App\Conversor\Conversor{

    public function convertRomanToNumeral($algorism)
    {
        if(empty($algorism)){
            $this->insertError('Não pode ser vazio!');
            return false;
        }
        $upper_algorism = strtoupper($algorism);
        $normalized_algorism = str_split($upper_algorism);
        
        foreach($normalized_algorism as $letter) {
            if(!array_key_exists($letter, $this->table)){
                $this->insertError('Caractere inválido!');
                return false;
            }
        }

        $array_of_numbers = $this->convertAlgorismToNumbersArray($normalized_algorism);

        if(!$this->validateRepeatedNumbers($array_of_numbers)){
            $this->insertError('Sequencia inválida!');
            return false;
        }

        $count = 0;
        for($index=0; $index < count($array_of_numbers); $index++){
            if(!$this->validateNeighbor($index, $array_of_numbers)){
                $this->insertError('Sequencia inválida!');
                return false;
            }

            $count = $this->calculateNeighbor($index, $array_of_numbers, $count);
        }

        return $count;
    }

    public function convertAlgorismToNumbersArray($array_of_algorism)
    {
        $array_of_numbers = [];

        foreach($array_of_algorism as $letter){
            $array_of_numbers[] = $this->table[$letter];
        }
        
        return $array_of_numbers;
    }

    public function validateRepeatedNumbers($array_of_numbers)
    {
        if(empty($array_of_numbers)){
            return false;
        }

        if(count($array_of_numbers) <= 3){
            return true;
        }

        $count_repeated_number = 0;
        $tmp_number = 0;
        foreach($array_of_numbers as $i=>$number) {
            if($number == $tmp_number){
                $count_repeated_number++;
            }else{
                $tmp_number = $number;
                $count_repeated_number = 1;
            }

            if($count_repeated_number >=4){
                return false;
            }
        }
        return true;
    }

    public function validateNeighbor($index, $array_of_numbers)
    {
        if($index > 0){
            if($index + 1 < count($array_of_numbers)){
            
                // previne IXX
                if($array_of_numbers[$index - 1] < $array_of_numbers[$index] && $array_of_numbers[$index - 1] < $array_of_numbers[$index + 1]){
                    $this->insertError('Sequencia inválida!');
                    return false;
                }
            }

            // previne VVV, VV, DD
            if($array_of_numbers[$index - 1] == $array_of_numbers[$index] && in_array($array_of_numbers[$index], $this->cant_repeat)){
                $this->insertError('Sequencia inválida!');
                return false;
            }

            // previne VX
            if($array_of_numbers[$index - 1] < $array_of_numbers[$index]){
                if(array_key_exists($array_of_numbers[$index] - $array_of_numbers[$index - 1], $this->reverse_table)){
                    $this->insertError('Sequencia inválida!');
                    return false;
                }
            }
        }

        return true;
    }

    public function calculateNeighbor($index, $array_of_numbers, $count)
    {
        if($index + 1 < count($array_of_numbers)){ // se tiver proximo numero alem do index
            if($array_of_numbers[$index] < $array_of_numbers[$index + 1]) { // se o index atual for menor que o proximo: X[I]V
                return $count - $array_of_numbers[$index]; // subtrai
            }
        }
        return $count + $array_of_numbers[$index];
    }


}