<?php

namespace App;

class Stringcal{
    public function add($param1=null, $param2=null){
        if( empty($param1) && empty($param1)){
            return "0";
        }

        elseif( empty($param2) ){
            return (string)$param1;
        }
    }
}


?>