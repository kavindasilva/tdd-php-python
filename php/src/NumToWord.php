<?php

namespace App;

/**
 * Question: http://codingdojo.org/kata/NumbersInWords/
 * Design:
 * 
 * convert number to string
 */
class NumToWord{
    protected $positions = [ "", "", "hundred", "thousand" ];
    protected $ones = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine" ];
    protected $tens = ["zero", "ten", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];
    protected $elevenToTwenty = [ "", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];

    public function convertNumber($num){
        // limit 99999

        $number = (string)$num;
        if( strlen($number) <1 )
            return "";
        elseif($num<10 && $num>=0){
            return $this->convertOneToTen($num);
        }
        elseif($num<20 && $num>=10){
            return $this->convertElevenToTwenty($num);
        }
        elseif($num<100 && $num>=20){
            return $this->convertElevenToTwenty($num);
        }
        // elseif($num<100 && $num>20){}

        $numbers = str_split($number);

        foreach($numbers as $pos){
            // 
        }
            
        // foreach
        // $f = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);
        // return $f->format($num);
    }

    protected function convertElevenToTwenty($num){
        if( (int)$num < 20 && $num >=11 ){
            return $this->elevenToTwenty[ (int)$num%10 ];
        }
        return "";
    }

    protected function convertOneToTen($num){
        if( (int)$num < 10 ){
            return $this->ones[ (int)$num ];
        }
        return "";
    }
}

?>