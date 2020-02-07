<?php

namespace App;

class Stringcal{
    public function add(...$params){
        $sum = 0;
        if( empty($params) ){
            return (string)$sum;
        }
        else{
            foreach($params as $val){
                if( empty($val) ){
                    return (string)$sum;
                }
                $sum += (double)$val;
            }
            return (string)$sum;
        }

        // elseif( empty($param2) ){
        //     return (string)$param1;
        // }

        // else{
        //     return (double)$param1 + (double)$param2;
        // }
    }
}


?>