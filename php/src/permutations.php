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
        if( count($elems) === 2 ){
            return [
                $elems[0].$elems[1],
                $elems[1].$elems[0]
            ];
        }
        $erst_of_arr = array_shift($elems);
        return[
            array_merge(
                [ $elems[0] ],
                $this->getPermutations( $elems )
            )
        ];
    }
}

?>