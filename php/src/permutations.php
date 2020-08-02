<?php

namespace App;

class Permutations{
    public function getPermutations($elems=[]){
        if( empty($elems) ){
            return false;
        }
        if( count($elems) === 1 ){
            return [ $elems[0] ];
        }
    }
}

?>