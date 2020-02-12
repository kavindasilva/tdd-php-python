<?php

namespace App;

/**
 * Design:
 * 
 * convert number to string
 */
class NumToWord{
    protected $positions = [ "", "", "hundred", "thousand" ];
    protected $ones = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine" ];
    protected $tens = ["zero", "ten", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];

    public function convertNumber($num){
        // limit 99999

        $number = (string)$num;
        if( strlen($number) <1 )
            return "";
        // elseif($num<100 && $num>20){}
        elseif($num<10 && $num>=0){
            return $this->convertOneToTen($num);
        }

        $numbers = str_split($number);

        foreach($numbers as $pos){
            // 
        }
            
        // foreach
        // $f = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);
        // return $f->format($num);
    }

    protected function convertOneToTen($num){
        if( (int)$num < 10 ){
            return $this->ones[ (int)$num ];
        }
    }
}

?>