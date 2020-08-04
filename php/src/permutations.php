<?php

namespace App;

class Permutations{
    public function getPermutations($elems=[]){
        if( empty($elems) || !is_array($elems) ){
            return false;
        }
        return $this->calculatePermutations($elems);
    }

    // @TODO: make protected
    public function calculatePermutations($elems=[]){
        if( count($elems) === 1 ){
            return [ $elems[0] ];
        }
        if( count($elems) === 2 ){
            return [
                $elems[0].$elems[1],
                $elems[1].$elems[0]
            ];
        }
        $nested_perms = [];
        for($i=0; $i<count($elems); $i++){
            $new_arr = $elems;
            $head = $new_arr[$i];
            unset($new_arr[$i]);

            foreach($this->calculatePermutations( array_values($new_arr) ) as $other_perms ){
                $nested_perms[] = $head .$other_perms;
            }
        }
        return $nested_perms;
    }
}

?>