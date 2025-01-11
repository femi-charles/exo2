<?php

function my_create_map (... $array){
    $map = [];
   foreach ($array as $arr){
    if (is_array($arr)){
        if(count($arr)>= 2){
            $key = $arr[0];
            $value = $arr [1];
            $map [$key] = $value;
        }else{
            echo "The given arguments aren’t valid. \n" ;
            return NULL;
        }
    }else{
        echo "The given arguments aren\’t valid. \n" ;
        return NULL;

    }
    
    

   }
   return $map;
}
$array1 = ["pi"];
$array2 = ["answer", 42];
var_dump(my_create_map($array1, $array2));

