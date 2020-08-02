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
        $nested_perms = [];
        for($i=0; $i<count($elems); $i++){
            $new_arr = $elems;
            $head = $new_arr[$i];
            unset($new_arr[$i]);

            foreach($this->getPermutations( array_values($new_arr) ) as $other_perms ){
                $nested_perms[] = $head .$other_perms;
            }
        }
        return $nested_perms;
    }
}

?>