<?php

namespace App;

class Factorial{
    public function getFactorial($number){
        if($number<0 || (int)$number != $number ){
            return false;
        }
        return $this->calculateFactorial($number);
    }
    
    public function calculateFactorial($number){
        if($number<=1){
            return 1;
        }
        else{
            return $number * $this->calculateFactorial($number-1);
        }
    }
}

?>