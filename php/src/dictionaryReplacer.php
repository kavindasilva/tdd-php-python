<?php

namespace App;

class dictionaryReplacer{
    public function __construct(){
        echo "";
    }

    /**
     * get $input
     * use $dictionary to find and replace
     */
    public function replaceWords($input, $dictionary){
        if( empty($input) || $input==""){
            return $input;
        }
        else{
            $arr = explode("\$", $input);
            // handle not match errors

            $output = $arr[0];

            $mod = true;
            for($i=1; $i<count($arr); $i++){
                if( ($i % 2 != 0) ){
                    $arr[$i] = $dictionary[ $arr[$i] ];
                }
                $output .= $arr[$i];
            }

            return $output;
        }
    }
}


?>