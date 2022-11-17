<?php

namespace App\Conversor;

class NumberToAlgorism extends \App\Conversor\Conversor{

    public function convertNumeralToRoman($num)
    {
        if(array_key_exists($num, $this->reverse_table)){
            return $this->reverse_table[$num];
        }

        if(empty($num)){
            $this->insertError('Não pode ser vazio!');
            return false;
        }

        if(!filter_var($num, FILTER_VALIDATE_INT)){
            $this->insertError('Número inválido!');
            return false;
        }

        if($num <= 0){
            $this->insertError('Número inválido, insira entre 1 e 3999!');
            return false;
        }

        if($num > 3999){
            $this->insertError('Número inválido, insira entre 1 e 3999!');
            return false;
        }

        $algorism = '';

        // quebra numero, ex: 954, quebra em 900 / 50 / 4
        $array_of_numbers = $this->breakDownNumbers($num);
        
        foreach($array_of_numbers as $num) {
            $algorism = $algorism  . $this->getRomanAlgorism($num);
        }
        
        return $algorism;
    }

    // 900 / 30
    public function getRomanAlgorism($number)
    {
        // wave one - simple find, ex: D == 500
        $ret = $this->waveOneFindSimpleAlgorism($number);
        if($ret){
            return $ret;
        }

        // wave two - subtract, ex: 4 -> IV == V - I
        $ret = $this->waveTwoSubtractToFind($number);
        if($ret) {
            return $ret;
        }

        //wave three - sum, ex: 8=> VIII / 2 => II
        $ret = $this->waveThreeSumToFind($number);
        if($ret){
            return $ret;
        }

    }

    public function waveOneFindSimpleAlgorism($number)
    {
        if($number <= 0){
            return false;
        }

        if(array_key_exists($number, $this->reverse_table)){ // possivel D, que seria 500
            return $this->reverse_table[$number];
        }
        return false;
    }

    public function waveTwoSubtractToFind($number) // ex: 90, que seria XC
    {
        $algorism = '';
        if($number <= 0){
            return false;
        }

        foreach($this->reverse_table as $idx=>$algo) {
            if($number < $idx){
                foreach($this->can_repeat as  $possible_num){
                    if($idx - $possible_num == $number){
                        $algorism = $this->reverse_table[$possible_num] . $this->reverse_table[$idx];
                        return $algorism;
                    }
                }
            }
        }
        return false;
    }

    public function waveThreeSumToFind($number) // ex: 30 => XXX // 8 => VIII
    {
        if($number <= 0){
            return false;
        }

        $algorism = '';
        $tmp_idx = 0;
        while($number > 0) {
            
            foreach($this->reverse_table as $idx=>$algo){
                // 1, 5, >10<, 50
                if($idx <= $number){
                    $tmp_idx = $idx;
                }
                // 50 > 20
                if($idx > $number){
                    // 10 > 0
                    if($tmp_idx > 0){
                        $algorism = $algorism . $this->reverse_table[$tmp_idx];
                        $number = $number - $tmp_idx;
                        $tmp_idx = 0;
                    }
                }

                // se numero informado eh maior que maior valor da tabela...
                $max = max($this->table);
                if($number >= $max){
                    $algorism = $algorism . $this->reverse_table[$max];
                    $number = $number - $max;
                    $tmp_idx = 0;
                }

                if($number <= 0){
                    break;
                }
            }
        }

        return $algorism;
    }

    // Não pode ter 3 repetidos.
    // Analisar se o numero bate com um indice X outro algorismo menor.
    // EX, num 4, irá tentar I e V antes irá tentar V - I, que será IV
    public function find_subtraction($number)
    {
        $algorism = '';
        // [1, 10, 100, 1000];
        //[1, 5, 10, 50, 100, 500, 100]
        $tmp_index = 0;
        foreach($this->reverse_table as $index=> $algorism){
               // 4      1
            if($number > $index){
                if(in_array($index, $this->can_repeat)){ // Se o numero procurado for maior que o numero possivel para repeticao ou subracao...armazena
                    $tmp_index = $index;
                }
            }
             // 4      5
            if($number < $index){
                // tenta subtrair pelo tmp_index armazenado
                if($index - $tmp_index == $number){
                    $algorism = $this->reverse_table[$tmp_index] . $this->reverse_table[$index];
                    $number = $number - $index - $tmp_index;
                    break;
                }
            }
        }

        return [$number, $algorism];
    }
}